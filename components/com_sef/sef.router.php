<?php
/**
 * SEF component for Joomla!
 * 
 * @package   JoomSEF
 * @version   3.9.8
 * @author    ARTIO s.r.o., http://www.artio.net
 * @copyright Copyright (C) 2012 ARTIO s.r.o. 
 * @license   GNU/GPLv3 http://www.artio.net/license/gnu-general-public-license
 */

// Check to ensure this file is within the rest of the framework
defined('_JEXEC') or die('Direct access to this location is not allowed.');

// IIS Patch
if (isset($_SERVER['HTTP_X_REWRITE_URL'])) {
    $_SERVER['REQUEST_URI'] = $_SERVER['HTTP_X_REWRITE_URL'];
}

jimport('joomla.application.router');

require_once( JPATH_ROOT.DS.'components'.DS.'com_sef'.DS.'joomsef.php' );
require_once( JPATH_ROOT.DS.'components'.DS.'com_sef'.DS.'sef.cache.php' );
require_once( JPATH_ROOT.DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'classes'.DS.'seftools.php' );
require_once( JPATH_ROOT.DS.'components'.DS.'com_sef'.DS.'sef.ext.php' );

class JRouterJoomsef extends JRouter
{

    /**
	 * Class constructor
	 *
	 * @access public
	 */
    /*function __construct($options = array())
    {
        $this->_mode = JROUTER_MODE_SEF;
    }*/

    function &_createURI($url)
    {
        // Create full URL if we are only appending variables to it
        if(substr($url, 0, 1) == '&') {
            $vars = array();
            parse_str($url, $vars);

            $vars = array_merge($this->getVars(), $vars);

            foreach($vars as $key => $var) {
                if($var == "") unset($vars[$key]);
            }

            $url = 'index.php?'.JURI::buildQuery($vars);
        }

        // Security - only allow one question mark in URL
        $pos = strpos($url, '?');
        if( $pos !== false ) {
            $url = substr($url, 0, $pos+1) . str_replace('?', '%3F', substr($url, $pos+1));
        }

        // Decompose link into url component parts
        $uri = new JURI($url);

        return $uri;
    }

    function &build($url)
    {
        // Be tolerant to spaces around the URL
        $sefConfig =& SEFConfig::getConfig();
        if ($sefConfig->spaceTolerant) {
            $url = trim($url);
        }

        // Security - only allow colon in protocol part
        if( strpos($url, ':') !== false ) {
            $offset = 0;
            if( substr($url, 0, 5) == 'http:' ) {
                $offset = 5;
            }
            elseif( substr($url, 0, 6) == 'https:' ) {
                $offset = 6;
            }

            $url = substr($url, 0, $offset) . str_replace(':', '%3A', substr($url, $offset));
        }

        // Create URI object
        $uri = $this->_createURI($url);

        // Check the path part for URLs without mod_rewrite support
        $route = $uri->getPath();
        if (substr($route, 0, 10) == 'index.php/') {
            $route = substr($route, 10);
            $uri->setPath($route);
            return $uri;
        }

        // Set URI defaults
        $menu =& JSite::getMenu();

        // We don't want to add any variables if the URL is pure index.php
        if ($url != 'index.php') {
            // Get the itemid from the URI
            $Itemid = $uri->getVar('Itemid');

            if (is_null($Itemid)) {
                if (($option = $uri->getVar('option'))) {
                    $item = $menu->getItem($this->getVar('Itemid'));
                    if(isset($item) && $item->component == $option) {
                        $uri->setVar('Itemid', $item->id);
                    }
                }
                else {
                    if (($option = $this->getVar('option'))) {
                        $uri->setVar('option', $option);
                    }

                    if (($Itemid = $this->getVar('Itemid'))) {
                        $uri->setVar('Itemid', $Itemid);
                    }
                }
            }

            // If there is no option specified, try to get the query from menu item
            if (is_null($uri->getVar('option'))) {
                if (!is_null($uri->getVar('Itemid'))) {
                    $item = $menu->getItem($uri->getVar('Itemid'));
                    if (is_object($item)) {
                        foreach($item->query as $k => $v) {
                            $uri->setVar($k, $v);
                        }
                    }
                }
                else {
                    // There is no option or Itemid specified, assume frontpage
                    $item = $menu->getDefault();
                    if (is_object($item)) {
                        foreach($item->query as $k => $v) {
                            $uri->setVar($k, $v);
                        }

                        // Set Itemid
                        $uri->setVar('Itemid', $item->id);
                    }
                }
            }
        } // if ($url != 'index.php')
        else {
            // Set the current menu item's query if set to
            // (default Joomla's behaviour)
            if ($sefConfig->indexPhpCurrentMenu) {
                $itemid = $this->getVar('Itemid');
                if (!is_null($itemid)) {
                    $item = $menu->getItem($itemid);
                    if (is_object($item)) {
                        $uri->setQuery($item->query);
                        $uri->setVar('Itemid', $itemid);
                    }
                }
            }
        }

        JoomSEF::build($uri);

        return $uri;
    }

    function getMode()
    {
        return JROUTER_MODE_SEF;
    }

    function parse(&$uri)
    {
        $mainframe =& JFactory::getApplication();
        $sefConfig =& SEFConfig::getConfig();
        JoomSEF::set('sef.global.meta', SEFTools::GetSEFGlobalMeta());

        // Try to fix the missing question mark if set to
        if ($sefConfig->fixQuestionMark && count($_POST) == 0) {
            $url = $uri->toString();
            $newUrl = preg_replace('/^([^?&]*)&([^?]+=[^?]*)$/', '$1?$2', $url);
            if ($newUrl != $url) {
                // Redirect
                $mainframe->redirect($newUrl, '', 'message', true);
            }
        }

        $vars   = array();
        $vars = JoomSEF::parse($uri);
        $menu =& JSite::getMenu(true);

        //Handle an empty URL (special case)
        if(empty($vars['Itemid']) && empty($vars['option']))
        {
            $item = $menu->getDefault();
            if(!is_object($item)) return $vars; // No default item set

            // set the information in the request
            $vars = $item->query;

            // get the itemid
            $vars['Itemid'] = $item->id;

            // set the active menu item
            $menu->setActive($vars['Itemid']);

            // set vars
            $this->setRequestVars($vars);

            $this->fixDocument($vars);

            return $vars;
        }

        // Get the item id, if it hasn't been set force it to null
        if( empty($vars['Itemid']) ) {
            $vars['Itemid'] = JRequest::getInt('Itemid', null);
        }

        // Get the variables from the uri
        $this->setVars($vars);

        // No option? Get the full information from the itemid
        if( empty($vars['option']) )
        {
            $item = $menu->getItem($this->getVar('Itemid'));
            if(!is_object($item)) return $vars; // No default item set

            $vars = $vars + $item->query;
        }

        // Set the active menu item
        $menu->setActive($this->getVar('Itemid'));

        // Set base href
        //$this->setBaseHref($vars);

        // Set vars
        $this->setRequestVars($vars);

        $this->fixDocument($vars);

        return $vars;
    }

    function fixDocument(&$vars)
    {
        $sefConfig =& SEFConfig::getConfig();

        if ($sefConfig->fixDocumentFormat) {
            if (isset($vars['format']) || isset($vars['no_html'])) {
                $doc =& JFactory::getDocument();
                $doc = null;
            }
        }
    }

    function setRequestVars(&$vars)
    {
        $sefConfig =& SEFConfig::getConfig();

        if( $sefConfig->preventNonSefOverwrite ) {
            // Set the variables to JRequest, as mainframe does not overwrite
            // non-sef variables, so they hide the parsed ones
            if( is_array($vars) && count($vars) ) {
                foreach($vars as $name => $value) {
                	if (!is_array($value) && (strlen($value) == 0)) {
                		continue;
                	}
                    
                    // Clean the var
                    $GLOBALS['_JREQUEST'][$name] = array();

                    // Set the GET array
                    $_GET[$name] = $value;
                    $GLOBALS['_JREQUEST'][$name]['SET.GET'] = true;

                    // Set the REQUEST array if request method is GET
                    if( $_SERVER['REQUEST_METHOD'] == 'GET' ) {
                        $_REQUEST[$name] = $value;
                        $GLOBALS['_JREQUEST'][$name]['SET.REQUEST'] = true;
                    }
                }
            }
        }
    }

}
?>