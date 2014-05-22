<?php
/**
 * ------------------------------------------------------------------------
 * JA Popup Plugin for Joomla 2.5
 * ------------------------------------------------------------------------
 * Copyright (C) 2004-2011 J.O.O.M Solutions Co., Ltd. All Rights Reserved.
 * @license - GNU/GPL, http://www.gnu.org/licenses/gpl.html
 * Author: J.O.O.M Solutions Co., Ltd
 * Websites: http://www.joomlart.com - http://www.joomlancers.com
 * ------------------------------------------------------------------------
 */
defined('_JEXEC') or die();
if (!class_exists('ReplaceCallbackParsers')) {
    define('_OPEN_TAG_', 1);
    define('_CLOSE_TAG_', 2);
    define('_FULL_TAG_', 3);
    /**
     *
     * Parser Class
     * @author JoomlArt
     *
     */
    class ReplaceCallbackParsers
    {
        var $_source = '';
        var $_tagname = '';
        var $_open = '{';
        var $_close = '}';
        var $_callback = '';
        var $_pluginParams = '';
        var $_modelObject = array();


        /**
         * Constructor
         *
         * For php4 compatability we must not use the __constructor as a constructor for plugins
         * because func_get_args ( void ) returns a copy of all passed arguments, NOT references.
         * This causes problems with cross-referencing necessary for the observer design pattern.
         *
         * @param	string	$tagName The tag name
         * @param	string 	$tagAttr  The tag open
         * @param	object	$pluginParams
         * @param	string 	$tagClose  The tag close
         */
        function ReplaceCallbackParsers($tagName, $pluginParams, $tagAttr = '{', $tagClose = '}')
        {
            $this->_tagname = $tagName;
            $this->_open = $tagAttr;
            $this->_close = $tagClose;
            $this->_pluginParams = $pluginParams;
        }


        /**
         *
         * Parse string
         * @param string $strinput string input into parser
         * @param string $callback function callback name
         * @return string
         */
        function parse($strinput, $callback)
        {
            $this->_source = $strinput;
            $this->_callback = $callback;
            $this->_modelObject[] = $callback[0];
            //Build delimiter
            $regex = '/(' . $this->_open . '[\/]?' . $this->_tagname . '[^}]*' . $this->_close . ')/';
            $arr = preg_split($regex, $this->_source, -1, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);

            $empty = true;
            $matches = array();
            $tagAttr = '';
            $isOpened = false;
            $tagContent = '';
            $stroutput = '';
            foreach ($arr as $item) {
                $tagtype = $this->parseTag($item);
                if ($tagtype == _OPEN_TAG_) {
                    if ($isOpened) {
                        $stroutput .= $this->callBack($tagAttr, $tagContent);
                        $isOpened = false;
                    }
                    $tagAttr = substr($item, strlen($this->_open) + strlen($this->_tagname), strlen($item) - strlen($this->_tagname) - strlen($this->_close) - strlen($this->_open));
                    $tagContent = '';
                    $isOpened = true;

                    continue;
                }
                if ($tagtype == _FULL_TAG_) {
                    if ($isOpened) {
                        $stroutput .= $this->callBack($tagAttr, $tagContent);
                        $isOpened = false;
                    }
                    $tagAttr = substr($item, strlen($this->_open) + strlen($this->_tagname), strlen($item) - strlen($this->_close) - strlen($this->_tagname) - strlen($this->_open) - 1);
                    $tagContent = '';
                    $stroutput .= $this->callBack($tagAttr, $tagContent);
                    continue;
                }
                if ($tagtype == _CLOSE_TAG_) {
                    $stroutput .= $this->callBack($tagAttr, $tagContent);
                    $isOpened = false;
                    continue;
                }

                if ($isOpened) {
                    $tagContent .= $item;
                } else {
                    $stroutput .= $item;
                }
            }
            if ($isOpened) {
                $stroutput .= $this->callBack($tagAttr, $tagContent);
                $isOpened = false;
            }

            // Call header library for each modal type
            $callHeaderMethod = $callback[2];
            foreach ($this->_modelObject as $k => $v)
                $stroutput = $v->$callHeaderMethod($stroutput);

            return $stroutput;
        }


        /**
         *
         * Parse tag in string
         * @param string $tag
         * @return string
         */
        function parseTag($tag)
        {
            $arr = preg_split('/' . $this->_tagname . '/', $tag, 2);
            if (count($arr) < 2)
                return 0;

     //print_r ($arr);
            if ($arr[0] == $this->_open) {
                if (substr($arr[1], -(strlen($this->_close) + 1)) == '/' . $this->_close)
                    return _FULL_TAG_;
                else
                    return _OPEN_TAG_;
            }
            if ($arr[0] == $this->_open . '/')
                return _CLOSE_TAG_;
            return 0;
        }


        /**
         *
         * Callback function
         * @param string $tagAttr
         * @param string $tagContent
         * @return string
         */
        function callBack($tagAttr, $tagContent)
        {

            $tagAttr = $this->parseParamValue($tagAttr);

            $modalObject = $this->_modelObject[0];

            // Check model
            if (isset($tagAttr['modal'])) {
                // load plugin parameters
                $plugin = JPluginHelper::getPlugin('system', 'japopup');
                $params = new JRegistry();
                $params->loadJSON($plugin->params);
                // Get modal window type
                $modal = $tagAttr['modal'];

                // Require library for each Popup type
                if (!file_exists(dirname(__FILE__) . '/' . $modal . '/' . $modal . '.php'))
                    return;
                require_once (dirname(__FILE__) . '/' . $modal . '/' . $modal . '.php');
                $modalWindowType = $modal . "Class";
                $modalObject = new $modalWindowType($params);
                $this->_modelObject[] = $modalObject;
            }

            if (is_array($this->_callback) && count($this->_callback) >= 2) {
                $callbackmethod = $this->_callback[1];
                return $modalObject->$callbackmethod($tagAttr, $tagContent);
            } else {
                if (function_exists($this->_callback)) {
                    $callback = $this->_callback;
                    return $callback($tagAttr, $tagContent);
                }
            }
        }


        /**
         *
         * Parse Popup plugin params to array
         * @param string $plgAttr
         * @return array
         */
        function parseParamValue($plgAttr)
        {
            global $_paththum;

            $paras = '';
            $override = '';
            $paras = $this->parseParams($plgAttr);

            foreach ($paras as $k => $value) {
                $arr_type = array('type', 'event', 'contentid', 'url', 'src', 'position', 'positions', 'hideOnMouseOut', 'dismissbuton', 'modulename', 'itemid', "notshowagain", 'notshowagaintime', 'loaddelay', 'dismissbutton', 'desciption', 'class');
                if (!in_array(trim($k), $arr_type)) {
                    if (is_numeric($value)) {
                        $override .= $k . ":" . $value . ",";
                    } else
                        $override .= $k . ":'" . $value . "',";
                }
            }

            if ($override != '') {
                $override = substr($override, 0, strlen($override) - 1);
            }
            $paras['override'] = $override;

            if (!isset($paras['url']))
                $paras['url'] = '';

            if (isset($paras['src']) && $paras['src'] != '')
                $paras['url'] = $paras['src'];

            if (isset($paras['event']) && $paras['event'] == 'loadbody')
                $paras['event'] = true;
            else
                $paras['event'] = false;

            if (!isset($paras['notshowagain']) || (isset($paras['notshowagain']) && ($paras['notshowagain'] <= 0 || !is_numeric($paras['notshowagain'])))) {
                $paras['notshowagain'] = 0;
            }

            if (!isset($paras['notshowagaintime']) || (isset($paras['notshowagaintime']) && ($paras['notshowagaintime'] <= 0 || !is_numeric($paras['notshowagain'])))) {
                $paras['notshowagaintime'] = 0;
            }

            if (!isset($paras['dismissbuton']) || !in_array($paras['dismissbuton'], array('true', 'false'))) {
                $paras['dismissbuton'] = 'false';
            }

            if (!isset($paras['loaddelay']) || (isset($paras['loaddelay']) && (!$paras['loaddelay'] > 0 || !is_numeric($paras['loaddelay'])))) {
                $paras['loaddelay'] = 3;
            }

            if (!isset($paras['width']) || $paras['width'] <= 0 || !is_numeric($paras['width']))
                $paras['width'] = $this->_pluginParams->get("width");

            if (!isset($paras['height']) || $paras['height'] <= 0 || !is_numeric($paras['height']))
                $paras['height'] = $this->_pluginParams->get("height");

            if (!isset($paras['type'])) {
                $paras['type'] = '';
            }

            return $paras;
        }


        /**
         *
         * Render pattern
         * @param string $tag
         * @return string
         */
        function getPattern($tag)
        {
            $regex = '#{' . $tag . ' ([^}]*)}([^{]*){/' . $tag . '}#m';
            return $regex;
        }


        /**
         *
         * Parse Params user config
         * @param string $params
         * @return array
         */
        function parseParams($params)
        {
            $params = html_entity_decode($params, ENT_QUOTES);
            $regex = "/\s*([^=\s]+)\s*=\s*('([^']*)'|\"([^\"]*)\"|([^\s]*))/";
            preg_match_all($regex, $params, $matches);

            $paramarray = null;
            if (count($matches)) {
                $paramarray = array();
                for ($i = 0; $i < count($matches[1]); $i++) {
                    $key = $matches[1][$i];
                    $val = $matches[3][$i] ? $matches[3][$i] : ($matches[4][$i] ? $matches[4][$i] : $matches[5][$i]);
                    $paramarray[$key] = $val;
                }
            }
            return $paramarray;
        }

    }
}
?>