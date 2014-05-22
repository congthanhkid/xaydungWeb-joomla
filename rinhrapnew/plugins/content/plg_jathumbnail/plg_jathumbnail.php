<?php
/**
 * ------------------------------------------------------------------------
 * JA Thumbnail Plugin for Joomla 2.5
 * ------------------------------------------------------------------------
 * Copyright (C) 2004-2011 J.O.O.M Solutions Co., Ltd. All Rights Reserved.
 * @license - GNU/GPL, http://www.gnu.org/licenses/gpl.html
 * Author: J.O.O.M Solutions Co., Ltd
 * Websites: http://www.joomlart.com - http://www.joomlancers.com
 * ------------------------------------------------------------------------
 */

defined('_JEXEC') or die('Restricted access');

jimport('joomla.plugin.plugin');
/**
 *
 * JA THUMBNAIL PLUGIN
 * @author JoomlArt
 *
 */
class plgContentPlg_JAThumbnail extends JPlugin
{

    var $plugin = null;
    var $pluginParams = null;
    var $_plgCode = '#{jathumbnail(.*?)}#i';
    var $_plgCodeDisable = '#{jathumbnail(\s*)off}#i';
    var $_plgCodeExcludeImgs = '#{jathumbnail(\s*)off images(\s*)}#i';
    var $_plgMatch = '#{jathumbnail(\s*)off images(.*?)}#i';
    var $_excludeImgs = array();
    var $_tempImageList = array();


    /**
     * Constructor
     *
     * For php5 compatability we must not use the __constructor as a constructor for plugins
     * because func_get_args ( void ) returns a copy of all passed arguments, NOT references.
     * This causes problems with cross-referencing necessary for the observer design pattern.
     *
     * @param	object	$subject The object to observe
     */
    function plgContentPlg_JAThumbnail(&$subject)
    {
        $mainframe = JFactory::getApplication();
        parent::__construct($subject);
        $this->plugin = JPluginHelper::getPlugin('content', 'plg_jathumbnail');
        $this->pluginParams = new JParameter($this->plugin->params);
        $this->stylesheet($this->plugin);
    }


    /**
     * prepare content method
     *
     * Method is called by the view
     * @param	string		The article key
     * @param 	object		The article object.  Note $article->text is also available
     * @param 	object		The article params
     * @param 	int			The 'page' number
     * @return  unknown
     */
    function onContentBeforeDisplay($context, &$article, &$params, $limitstart = 0)
    {
        $mainframe = JFactory::getApplication();
        $content_mode = $this->pluginParams->get("content_mode", '0');

        $view = JRequest::getVar('view');
        $layout = JRequest::getVar('layout');
        if (isset($article->introtext) && !empty($article->introtext)) {
            if (!isset($article->text) && empty($article->text)) {
                $article->text = "";
            }

            if (preg_match($this->_plgCodeDisable, $article->introtext) || preg_match($this->_plgCodeDisable, $article->text)) {
                $article->introtext = preg_replace($this->_plgCodeDisable, '', $article->introtext);
                $article->text = preg_replace($this->_plgCodeDisable, '', $article->text);
            } else {
                $view_mode = $this->pluginParams->get('view_on_page', "all");
                $include_mode_featured = array("all", "featured");
                $include_mode_blog = array("all", "blog");
                if ($view == 'article') {
                    $this->_crop = $this->pluginParams->get('content_mode-auto-manual-crop_image', 1);
                    $this->article($article, $params, $limitstart);
                    $article->text = $this->removeCode($article->text);
                    $article->introtext = $article->text;
                } elseif (($view == 'featured' && in_array($view_mode, $include_mode_featured)) || ($layout == 'blog' && in_array($view_mode, $include_mode_blog))) {

                    $this->_crop = $this->pluginParams->get('blog_mode-1-crop_image', 1);
                    $this->blog($article, $params, $limitstart);
                    $article->introtext = $this->removeCode($article->introtext);
                } else {
                    $this->removeCode($article->introtext);
                }
            }

        }
    }


    function removeCode($content)
    {
        return preg_replace($this->_plgCode, '', $content);
    }


    /**
     *
     * Parse tooltips into content
     * @param string $plgAttr
     * @param string $plgContent
     * @return Ambigous <unknown, string>
     */
    function Jathumbnail_replacer_DIRECT($plgAttr, $plgContent)
    {
        //params of tab
        $params = '';
        $params = $this->parseParams($plgAttr);
        $arr_imgs = array();
        if (!empty($params) && isset($params['images'])) {
            $arr_imgs = explode(",", $params['images']);
        }
        $this->_excludeImgs = $arr_imgs;
        return $arr_imgs;
    }


    /**
     * prepare content in detail layout method
     *
     * Method is called by the view
     * @param 	object		The article object.  Note $article->text is also available
     * @param 	object		The article params
     * @param 	int			The 'page' number
     * @return  unknown
     */
    function article(&$article, &$params, $limitstart = 0)
    {
        if (!$this->pluginParams->get('content_mode', 'auto')) {
            $article->text = $this->removeCode($article->text);
            return;
        }
        //check exclude images
        $regex1 = '/{jathumbnail(\s*)off/';
        if (!preg_match_all($regex1, $article->text, $matches)) {
            $HSmethodDIRECT = false;
        } else {
            $HSmethodDIRECT = true;
        }
        if ($HSmethodDIRECT) {
            require_once ('plugins/content/plg_jathumbnail/parser.php');
            $parser = new ReplaceCallbackParser('jathumbnail');
            $arr_imgs = $parser->parse($article->text, array($this, 'Jathumbnail_replacer_DIRECT'));
            if (!is_array($this->_excludeImgs)) {
                $this->_excludeImgs = array($this->_excludeImgs);
            }
        }
        //end check
        $width = $this->pluginParams->get('content_mode-auto-manual-content_width', 200);
        $height = $this->pluginParams->get('content_mode-auto-manual-content_height', 200);
        $thumbnails = $this->replaceImage($article->text, $width, $height);
        $mode = $this->pluginParams->get('content_mode');
        $position = $this->pluginParams->get('content_mode-auto-content_position', 0);
        if ($thumbnails) {
            $regex = '/\<img[^\>]*>/';
            $mark = '{jathumbnail}';
            if ($mode == 'auto') { //Auto
                //before ignore images on exclude list
                $this->beforeReplace($article->text);
                //end before
                if ($position == 0) { //Place at top
                    $article->text = preg_replace($regex, '', $article->text);
                    $article->text = $thumbnails . $article->text;
                } else { //Replace first image
                    $article->text = $this->removeCode($article->text);
                    $article->text = preg_replace($regex, $mark, $article->text, 1);
                    //Remove other images
                    $article->text = preg_replace($regex, '', $article->text);
                    $article->text = str_replace($mark, $thumbnails, $article->text);
                }
                //after ignore images on exclude list
                $this->afterReplace($article->text);
                //end after
                $article->text = $this->removeCode($article->text);
            }
            if ($mode == 'manual') { //manual
                $test = preg_match($this->_plgMatch, $article->text);
                if (preg_match($this->_plgCode, $article->text) || preg_match($this->_plgMatch, $article->text)) {
                    $regex = '/\<img[^\>]*>/';
                    $mark = '{jathumbnail}';
                    //before ignore images on exclude listn
                    $this->beforeReplace($article->text);
                    //end before
                   if(preg_match($this->_plgMatch, $article->text)){
					   $article->text = preg_replace($regex, '', $article->text);
                       $article->text = preg_replace($this->_plgMatch, $thumbnails, $article->text, 1);
					}else{
					   $article->text = preg_replace($regex, '', $article->text);
                       $article->text = preg_replace($this->_plgCode, $thumbnails, $article->text, 1);
					}
                    //after ignore images on exclude list
                    $this->afterReplace($article->text);
                    //end after
                    $this->removeCode($article->text);
                }
            }

        }
    }


    /**
     * tabs prepare content in blog layout method
     *
     * Method is called by the view
     * @param 	object		The article object.  Note $article->text is also available
     * @param 	object		The article params
     * @param 	int			The 'page' number
     * @return  unknown
     */
    function blog(&$article, &$params, $limitstart = 0)
    {
        //check if disable
        if (!$article->id)
            return;

     //check if ignore
        $e_cat = $this->pluginParams->get('blog_mode-1-apply_catetories');
        if (is_array($e_cat) && count($e_cat) == 1) {
            if (empty($e_cat[0]))
                $e_cat = "";
        }
        $flag = false;
        if ((!is_array($e_cat) && $article->catid == $e_cat)) {
            $flag = true;
        } elseif ((is_array($e_cat) && in_array($article->catid, $e_cat))) {
            $flag = true;
        } elseif (is_array($e_cat) && empty($e_cat)) {
            $flag = true;
        } elseif (empty($e_cat)) {
            $flag = true;
        }
        if (!$flag)
            return;

        static $item = 0;
        $tmp_params = $this->loadContentParams();
        if ($item < $tmp_params->get('num_leading_articles', 0)) {
            //process leading
            $width = $this->pluginParams->get('blog_mode-1-blog_leading_width', 300);
            $height = $this->pluginParams->get('blog_mode-1-blog_leading_height', 300);
        } elseif ($item < $tmp_params->get('num_leading_articles', 0) + $tmp_params->get('num_intro_articles', 0)) {
            //process intro
            $width = $this->pluginParams->get('blog_mode-1-blog_intro_width', 300);
            $height = $this->pluginParams->get('blog_mode-1-blog_intro_height', 300);
        } else
            return;
        $article->introtext = $this->replaceImageBlog($article->introtext, $width, $height);

        $item++;
    }


    /**
     *
     * Load params article of Joomla content
     * @return object
     */
    function loadContentParams()
    {
        static $params = null;
        if (!$params) {
            $mainframe = JFactory::getApplication();
            $params = clone ($mainframe->getParams('com_content'));
            // Parameters
            $params->def('num_leading_articles', 1);
            $params->def('num_intro_articles', 4);
        }
        return $params;
    }


    /**
     *
     * Before replace image tags ...
     * @param ref Article_text $text
     * @return string text
     */
    function beforeReplace(&$text)
    {
        $test = array();
        $i = 0;
        if (!empty($this->_excludeImgs)) {
            foreach ($this->_excludeImgs as $item) {
                $item = str_replace(array("/", "."), array('\/', '\.'), $item);
                //$item=addslashes($item);
                $regex = "/\<img.*src\s*=([\"'])(" . $item . ')(.*?)[^\>]*>/';
                if (!preg_match_all($regex, $text, $matches)) {
                    continue;
                }
                if (isset($matches[0][0])) {
                    $text = preg_replace($regex, "{img_replace_" . $i . "}", $text);
                    $pos = strpos($text, $matches[0][0]);
                    $test[$i] = $matches[0][0];
                    $i++;
                }
            }
        }
        $this->_tempImageList = $test;
        return $text;
    }


    /**
     *
     * After replace image tags ...
     * @param ref Article_text $text
     * @return string text
     */
    function afterReplace(&$text)
    {
        if (!empty($this->_tempImageList) && is_array($this->_tempImageList)) {
            foreach ($this->_tempImageList as $key => $item) {
                $text = str_replace("{img_replace_" . $key . "}", $item, $text);
            }
        }
        return $text;
    }


    function replaceImage($text, $width, $height)
    {
        $regex = '/\<img[^\>]*>/';
        //Get all imagesn
        if (!preg_match_all($regex, $text, $matches))
            return;
        $images = array();
        foreach ($matches[0] as $image) {
            $regex = '#(<img.*)src\s*=\s*(["\'])(.*?)\2(.*\/?>)#im';
            if (!preg_match($regex, $image, $srcs))
                continue;

     //Check exclude images
            if (!empty($this->_excludeImgs) && in_array($srcs[3], $this->_excludeImgs)) {
                continue;
            }
            //end checked
            $src = $this->processImage($srcs[3], $width, $height, $this->_crop);
            if ($src) {
                $new_image = $srcs[1] . "src=" . $srcs[2] . $src . $srcs[2] . $srcs[4];
                //remove height/width
                $regex = '#(<img.*)height\s*=\s*(["\'])(.*?)\2(.*\/?>)#im';
                if (preg_match($regex, $new_image, $srcs1)) {
                    $new_image = $srcs1[1] . $srcs1[4];
                }
                $regex = '#(<img.*)width\s*=\s*(["\'])(.*?)\2(.*\/?>)#im';
                if (preg_match($regex, $new_image, $srcs1)) {
                    $new_image = $srcs1[1] . $srcs1[4];
                }
                $images[] = array('org' => $image, 'org_src' => $srcs[3], 'new' => $new_image);
            }
        }
        if (!count($images))
            return '';
        $thumbnail = $this->renderThumbnail($images, $width, $height);
        return $thumbnail;
    }


    /**
     *
     * Replace image in blog layout
     * @param string $text
     * @param int $width
     * @param int $height
     * @return string
     */
    function replaceImageBlog($text, $width, $height)
    {
        $regex = '/\<img[^\>]*>/';
        //Get all images
        if (!preg_match($regex, $text, $matches))
            return $text;
        $this->_width = $width;
        $this->_height = $height;
        $text = preg_replace_callback($regex, array($this, 'processImageBlog'), $text);
        return $text;
    }


    /**
     *
     * Render image in blog layout
     * @param array $matches
     * @return string
     */
    function processImageBlog($matches)
    {
        $regex = '#(<img.*)src\s*=\s*(["\'])(.*?)\2(.*\/?>)#im';
        $text = $matches[0];
        if (!preg_match($regex, $text, $srcs)) {
            return '';
        }
        $src = $this->processImage($srcs[3], $this->_width, $this->_height, $this->_crop);
        if ($src) {
            $image = $srcs[1] . "src=" . $srcs[2] . $src . $srcs[2] . $srcs[4];
            //remove height/width
            $regex = '#(<img.*)height\s*=\s*(["\'])(.*?)\2(.*\/?>)#im';
            if (preg_match($regex, $image, $srcs))
                $image = $srcs[1] . $srcs[4];
            $regex = '#(<img.*)width\s*=\s*(["\'])(.*?)\2(.*\/?>)#im';
            if (preg_match($regex, $image, $srcs))
                $image = $srcs[1] . $srcs[4];

            return $image;
        }
        return '';
    }


    /**
     *
     * Render thumbnail image to display
     * @param string $images
     * @param int $width
     * @param int $height
     * @return string
     */
    function renderThumbnail($images, $width = 0, $height = 0)
    {
        $layout = $this->getLayoutPath($this->plugin, 'thumbnail');
        if ($layout) {
            ob_start();
            require $layout;
            $content = ob_get_contents();
            ob_end_clean();
            return $content;
        }
        return implode("\n", $images);
    }


    /**
     *
     * Clone image thumbnail url
     * @param string $img
     * @param int $width
     * @param int $height
     * @param int $crop
     * @return string
     */
    function processImage($img, $width, $height, $crop = 1)
    {
        if (!$img) {
            return '';
        }
        $img = str_replace(JURI::base(), '', $img);
        $img = rawurldecode($img);
        if (preg_match('/https?:\/\//', $img)) {
            return $img;
        }
        $imagesurl = (file_exists(JPATH_SITE . DS . $img)) ? $this->jaResize($img, $width, $height, $crop) : '';
        return $imagesurl;
    }


    /**
     *
     * Resize image thumbnail
     * @param string $image
     * @param int $max_width
     * @param int $max_height
     * @param int $crop
     * @return string
     */
    function jaResize($image, $max_width, $max_height, $crop = 1)
    {
        $path = JPATH_SITE;
        $imgInfo = getimagesize($path . '/' . $image);
        $width = $imgInfo[0];
        $height = $imgInfo[1];

        if (!$max_width)
            $max_width = $width;
        if (!$max_height)
            $max_height = $height;

        $dst = new stdClass();
        $src = new stdClass();
        $src->y = $src->x = 0;
        $dst->y = $dst->x = 0;
        if ($max_width > $width)
            $max_width = $width;
        if ($max_height > $height)
            $max_height = $height;

        if ($max_width == $width && $max_height == $height)
            return $image;

        $x_ratio = $max_width / $width;
        $y_ratio = $max_height / $height;

        if ($crop) {
            $dst->w = $max_width;
            $dst->h = $max_height;
            if (($width <= $max_width) && ($height <= $max_height)) {
                $src->w = $max_width;
                $src->h = $max_height;
            } else {
                if ($x_ratio < $y_ratio) {
                    $src->w = ceil($max_width / $y_ratio);
                    $src->h = $height;
                } else {
                    $src->w = $width;
                    $src->h = ceil($max_height / $x_ratio);
                }
            }
            $src->x = floor(($width - $src->w) / 2);
            $src->y = floor(($height - $src->h) / 2);
        } else {
            $src->w = $width;
            $src->h = $height;
            if (($width <= $max_width) && ($height <= $max_height)) {
                $dst->w = $width;
                $dst->h = $height;
            } else if (($x_ratio * $height) < $max_height) {
                $dst->h = ceil($x_ratio * $height);
                $dst->w = $max_width;
            } else {
                $dst->w = ceil($y_ratio * $width);
                $dst->h = $max_height;
            }
        }

        $ext = strtolower(substr(strrchr($image, '.'), 1)); // get the file extension
        $rzname = strtolower(substr($image, 0, strpos($image, '.'))) . "_{$dst->w}_{$dst->h}.{$ext}"; // get the file extension
        //
        $resized = $path . '/images/resized/' . $rzname;
        if (file_exists($resized)) {
            $smallImg = getimagesize($resized);
            if (($smallImg[0] <= $dst->w && $smallImg[1] == $dst->h) || ($smallImg[1] <= $dst->h && $smallImg[0] == $dst->w)) {
                return "images/resized/" . $rzname;
            }
        }
        if (!file_exists($path . '/images/resized/') && !mkdir($path . '/images/resized/', 0755))
            return '';
        $folders = explode('/', strtolower($image));
        $tmppath = $path . '/images/resized/';
        for ($i = 0; $i < count($folders) - 1; $i++) {
            if (!file_exists($tmppath . $folders[$i]) && !mkdir($tmppath . $folders[$i], 0755))
                return '';
            $tmppath = $tmppath . $folders[$i] . '/';
        }

        switch ($imgInfo[2]) {
            case 1:
                $im = imagecreatefromgif($path . '/' . $image);
                break;
            case 2:
                $im = imagecreatefromjpeg($path . '/' . $image);
                break;
            case 3:
                $im = imagecreatefrompng($path . '/' . $image);
                break;
            default:
                return '';
                break;
        }

        $newImg = imagecreatetruecolor($dst->w, $dst->h);

        /* Check if this image is PNG or GIF, then set if Transparent*/
        if (($imgInfo[2] == 1) or ($imgInfo[2] == 3)) {
            imagealphablending($newImg, false);
            imagesavealpha($newImg, true);
            $transparent = imagecolorallocatealpha($newImg, 255, 255, 255, 127);
            imagefilledrectangle($newImg, 0, 0, $dst->w, $dst->h, $transparent);
        }
        imagecopyresampled($newImg, $im, $dst->x, $dst->y, $src->x, $src->y, $dst->w, $dst->h, $src->w, $src->h);

        //Generate the file, and rename it to $newfilename
        switch ($imgInfo[2]) {
            case 1:
                imagegif($newImg, $resized);
                break;
            case 2:
                imagejpeg($newImg, $resized, 90);
                break;
            case 3:
                imagepng($newImg, $resized);
                break;
            default:
                return '';
                break;
        }

        return "images/resized/" . $rzname;
    }


    /**
     *
     * Get layout for display content
     * @param object $plugin
     * @param string $layout
     * @return string
     */
    function getLayoutPath($plugin, $layout = 'default')
    {
        $mainframe = JFactory::getApplication();

        // Build the template and base path for the layout
        $tPath = JPATH_BASE . DS . 'templates' . DS . $mainframe->getTemplate() . DS . 'html' . DS . $plugin->name . DS . $layout . '.php';
        $bPath = JPATH_BASE . DS . 'plugins' . DS . $plugin->type . DS . $plugin->name . DS . 'tmpl' . DS . $layout . '.php';
        // If the template has a layout override use it
        if (file_exists($tPath)) {
            return $tPath;
        } elseif (file_exists($bPath)) {
            return $bPath;
        }
        return '';
    }


    /**
     *
     * Set style for content displayed
     * @param object $plugin
     * @return unknown
     */
    function stylesheet($plugin)
    {
        $mainframe = JFactory::getApplication();
        JHTML::stylesheet('plugins/' . $plugin->type . '/' . $plugin->name . '/style.css');
        if (is_file(JPATH_SITE . DS . 'templates' . DS . $mainframe->getTemplate() . DS . 'css' . DS . $plugin->name . ".css"))
            JHTML::stylesheet($plugin->name . ".css", 'templates/' . $mainframe->getTemplate() . '/css/');
    }


    /**
     * Parse params
     *
     * @param $params
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
