<?php

/*------------------------------------------------------------------------
# mod_virtuemart_magiczoomplus - Magic Zoom Plus for Joomla with VirtueMart
# ------------------------------------------------------------------------
# Magic Toolbox
# Copyright 2011 MagicToolbox.com. All Rights Reserved.
# @license - http://www.opensource.org/licenses/artistic-license-2.0  Artistic License 2.0 (GPL compatible)
# Website: http://www.magictoolbox.com/magiczoomplus/modules/virtuemart/
# Technical Support: http://www.magictoolbox.com/contact/
/*-------------------------------------------------------------------------*/

if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' );


if(!in_array('MagicScrollModuleCoreClass', get_declared_classes())) {

    require_once(dirname(__FILE__) . '/magictoolbox.params.class.php');

    class MagicScrollModuleCoreClass {
        var $params;
        var $general;//initial parameters

        // set module type
        var $type = 'category';

        function MagicScrollModuleCoreClass() {
            // init params
            $this->params = new MagicToolboxParams();
            $this->general = new MagicToolboxParams();
            // load default params
            $this->_paramDefaults();
        }

        function headers($jsPath = '', $cssPath = null, $notCheck = false) {
            if($cssPath == null) {
                $cssPath = $jsPath;
            }
            $headers = array();
            // add module version
            $headers[] = '<!-- Magic Zoom Plus Joomla 1.5 with VirtueMart module module version v4.3.13 [v1.0.25:v2.0.16] -->';
            // add style link
            $headers[] = '<link type="text/css" href="' . $cssPath . '/magicscroll.css" rel="stylesheet" media="screen" />';
            // add script link
            $headers[] = '<script type="text/javascript" src="' . $jsPath . '/magicscroll.js"></script>';

            // add options
            $headers[] = '<script type="text/javascript">MagicScroll.options = {' . implode(',', $this->options()) . '}</script>';

            return implode("\r\n", $headers);
        }

        function _options($params = null) {

        }

        function options($params = null, $general = null) {

            if($params == null) {
                $params = $this->params;
            }

            // check params width 'auto' value
            if($params->checkValue('width', 0)) {
                $params->set('width', 'auto');
            }
            if($params->checkValue('height', 0)) {
                $params->set('height', 'auto');
            }
            if($params->checkValue('item-width', 0)) {
                $params->set('item-width', 'auto');
            }
            if($params->checkValue('item-height', 0)) {
                $params->set('item-height', 'auto');
            }

            $options = array();
            foreach($params->getArray() as $param) {
                if(isset($param['scope']) && ($param['scope'] == 'tool' || $param['scope'] == 'MagicScroll')) {
                    if(!isset($param['value'])) {
                        $param['value'] = $param['default'];
                    }
                    if($general && (!$general->get($param['id']) || $general->checkValue($param['id'], $param['value']))) {
                        continue;
//                    } else {
//                        print_r($general->get($param['id']));
//                        echo $param['id'], " 2 ", $param['value'], " 3 ", $general->getValue($param['id']);
//                        die();
                    }
                    if(!$general && $param['value'] == $param['default']) {
                        continue;
                    }
                    $value = $param['value'];
                    switch($param['type']) {
                        case 'float':
                        case 'num':
                            if($value != 'auto') break;
                        case 'text':
                        default:
                            if($value != 'false') {
                                $value = '\'' . $param['value'] . '\'';
                            }
                    }
                    $options[] = '\'' . $param['id'] . '\': ' . $value;
                }
            }

            if($params->exists('item-tag')) {
                $options[] = '\'item-tag\': \'' . $params->getValue('item-tag') . '\'';
            }

            return $options;
        }

        function template($data, $params = array()) {

            $html = array();

            extract($params);

            // check for width/height
            if(!isset($width) || empty($width)) {
                $width = "";
            } else {
                $width = " width=\"{$width}\"";
            }
            if(!isset($height) || empty($height)) {
                $height = "";
            } else {
                $height = " height=\"{$height}\"";
            }

            // check ID
            if(!isset($id) || empty($id)) {
                $id = '';
            } else {
                // add personal options
                $html[] = $this->getPersonalOptions($id);
                $id = ' id="' . addslashes($id) . '"';
            }

            // add div with tool className
            $additionalClasses = array(
                'default' => '',
                'with-borders' => 'msborder'
            );
            $additionalClass = $additionalClasses[$this->params->getValue('scroll-style')];
            if(!empty($additionalClass)) $additionalClass = ' ' . $additionalClass;
            $html[] = '<div' . $id . ' class="MagicScroll' . $additionalClass . '"' . $width . $height . '>';

            // add items
            foreach($data as $item) {
                extract($item);

                // check item link
                if(!isset($link) || empty($link)) {
                    $link = '';
                } else {
                    // check target
                    if(isset($target) && !empty($target)) {
                        $target = ' target="' . $target . '"';
                    } else {
                        $target = '';
                    }
                    $link = $target . ' href="' . addslashes($link) . '"';
                }

                // check item alt tag
                if(!isset($alt) || empty($alt)) {
                    $alt = '';
                } else {
                    $alt = htmlspecialchars(htmlspecialchars_decode($alt, ENT_QUOTES));
                }

                // check big image
                if(!isset($img) || empty($img)) {
                    //return false;
                    $img = '';
                } else {
                    //$img = ' rel="' . $img . '"';
                }

                if(isset($medium)) {
                    $thumb = $medium;
                }

                // check thumbnail
                if(!empty($img) || !isset($thumb) || empty($thumb)) {
                    $thumb = $img;
                }

                // check title
                if(!isset($title) || empty($title)) {
                    $title = '';
                } else {
                    $title = htmlspecialchars(htmlspecialchars_decode($title, ENT_QUOTES));
                    if(empty($alt)) {
                        $alt = $title;
                    }
                    //$title = " title=\"{$title}\"";
                }

                // check description
                if(!isset($description) || empty($description)) {
                    $description = '';
                } else {
                    //$description = preg_replace("/<(\/?)a([^>]*)>/is", "[$1a$2]", $description);
                    $description = "<span>{$description}</span>";
                }

                // check item width
                if(!isset($width) || empty($width)) {
                    $width = "";
                } else {
                    $width = " width=\"{$width}\"";
                }

                // check item height
                if(!isset($height) || empty($height)) {
                    $height = "";
                } else {
                    $height = " height=\"{$height}\"";
                }

                // add item
                $html[] = "<a{$link}><img{$width}{$height} src=\"{$thumb}\" alt=\"{$alt}\" />{$title}{$description}</a>";
                unset ($alt); //temp FIX
            }

            // close core div
            $html[] = '</div>';

            // create HTML string
            $html = implode('', $html);

            // return result
            return $html;
        }

        function subTemplate() {
            $args = func_get_args();
            call_user_func_array(array($this, 'template'), $args);
        }

        function getPersonalOptions($id) {
            if(in_array('MagicToolboxOptions', get_declared_classes())) {
                return '<script type="text/javascript">MagicScroll.extraOptions.' . $id . ' = {' . $this->params->serialize(null, true) . '};</script>';
            }
            $options = array();
            /*if(count($this->general->params)) {
                foreach($this->general->params as $name => $param) {
                    if($this->params->checkValue($name, $param['value'])) continue;
                    switch($name) {
                        case 'speed':
                            $options[] = '\'speed\': ' . $this->params->getValue('speed');
                            break;
                        case 'duration':
                            $options[] = '\'duration\': ' . $this->params->getValue('duration');
                            break;
                        case 'loop':
                            $options[] = '\'loop\': \'' . $this->params->getValue('loop') . '\'';
                            break;
                        case 'width':
                            if($this->params->checkValue('width', 0)) {
                                $options[] = '\'width\': \'auto\'';
                            } else {
                                $options[] = '\'width\': ' . $this->params->getValue('width');
                            }
                            break;
                        case 'height':
                            if($this->params->checkValue('height', 0)) {
                                $options[] = '\'height\': \'auto\'';
                            } else {
                                $options[] = '\'height\': ' . $this->params->getValue('height');
                            }
                            break;
                        case 'item-width':
                            if($this->params->checkValue('item-width', 0)) {
                                $options[] = '\'item-width\': \'auto\'';
                            } else {
                                $options[] = '\'item-width\': ' . $this->params->getValue('item-width');
                            }
                            break;
                        case 'item-height':
                            if($this->params->checkValue('item-height', 0)) {
                                $options[] = '\'item-height\': \'auto\'';
                            } else {
                                $options[] = '\'item-height\': ' . $this->params->getValue('item-height');
                            }
                            break;
                        case 'items':
                            $options[] = '\'items\': ' . $this->params->getValue('items');
                            break;
                        case 'step':
                            $options[] = '\'step\': ' . $this->params->getValue('step');
                            break;
                        case 'arrows':
                            if($this->params->checkValue('arrows', 'false')) {
                                $options[] = '\'arrows\': false';
                            } else {
                                $options[] = '\'arrows\': \'' . $this->params->getValue('arrows') . '\'';
                            }
                            break;
                        case 'arrows-opacity':
                            $options[] = '\'arrows-opacity\': ' . $this->params->getValue('arrows-opacity');
                            break;
                        case 'arrows-hover-opacity':
                            $options[] = '\'arrows-hover-opacity\': ' . $this->params->getValue('arrows-hover-opacity');
                            break;
                        case 'direction':
                            $options[] = '\'direction\': \'' . $this->params->getValue('direction') . '\'';
                            break;
                        case 'slider':
                            if($this->params->checkValue('slider', 'false')) {
                                $options[] = '\'slider\': false';
                            } else {
                                $options[] = '\'slider\': \'' . $this->params->getValue('slider') . '\'';
                            }
                            break;
                        case 'slider-size':
                            $options[] = '\'slider-size\': \'' . $this->params->getValue('slider-size') . '\'';
                            break;
                    }
                }
            }*/
            $options = $this->options($this->params, $this->general);
            if(count($options)) {
                $options = '<script type="text/javascript">MagicScroll.extraOptions.' . $id . ' = {' . implode(',', $options) . '};</script>';
            } else {
                $options = '';
            }
            return $options;
        }

        function _paramDefaults() {
            $params = array("enable-effect"=>array("id"=>"enable-effect","group"=>"General","order"=>"10","default"=>"No","label"=>"Enable effect","type"=>"array","subType"=>"radio","values"=>array("Both","Zoom","Expand","No")),"template"=>array("id"=>"template","group"=>"General","order"=>"20","default"=>"bottom","label"=>"Thumbnail layout","type"=>"array","subType"=>"radio","values"=>array("bottom","left","right","top"),"scope"=>"profile"),"magicscroll"=>array("id"=>"magicscroll","group"=>"General","order"=>"22","default"=>"No","label"=>"Use Magic Scroll™ for thumbnails","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"profile"),"hotspots"=>array("id"=>"hotspots","group"=>"General","default"=>"false","label"=>"Enable hotspots","type"=>"array","subType"=>"radio","values"=>array("true","false"),"scope"=>"profile"),"thumb-max-width"=>array("id"=>"thumb-max-width","group"=>"Positioning and Geometry","order"=>"10","default"=>"200","label"=>"Maximum width of thumbnail (in pixels)","type"=>"num"),"thumb-max-height"=>array("id"=>"thumb-max-height","group"=>"Positioning and Geometry","order"=>"11","default"=>"200","label"=>"Maximum height of thumbnail (in pixels)","type"=>"num"),"centered-thumbnails"=>array("id"=>"centered-thumbnails","group"=>"Positioning and Geometry","order"=>"50","default"=>"Yes","label"=>"Should Magic Zoom Plus centered main thumbnail?","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"profile"),"zoom-width"=>array("id"=>"zoom-width","group"=>"Positioning and Geometry","order"=>"140","default"=>"300","label"=>"Zoomed area width (in pixels)","type"=>"num","scope"=>"tool"),"zoom-height"=>array("id"=>"zoom-height","group"=>"Positioning and Geometry","order"=>"150","default"=>"300","label"=>"Zoomed area height (in pixels)","type"=>"num","scope"=>"tool"),"zoom-position"=>array("id"=>"zoom-position","group"=>"Positioning and Geometry","order"=>"160","default"=>"right","label"=>"Zoomed area position","type"=>"array","subType"=>"radio","values"=>array("top","right","bottom","left","inner"),"scope"=>"tool"),"zoom-distance"=>array("id"=>"zoom-distance","group"=>"Positioning and Geometry","order"=>"170","default"=>"15","label"=>"Distance between small image and zoom window (in pixels)","type"=>"num","scope"=>"tool"),"image-size"=>array("id"=>"image-size","group"=>"Positioning and Geometry","order"=>"210","default"=>"fit-screen","label"=>"Size of the enlarged image","type"=>"array","subType"=>"radio","values"=>array("original","fit-screen"),"scope"=>"tool"),"expand-position"=>array("id"=>"expand-position","group"=>"Positioning and Geometry","order"=>"220","default"=>"center","label"=>"Precise position of enlarged image (px)","type"=>"text","description"=>"The value can be 'center' or coordinates. E.g. 'top:0, left:0' or 'bottom:100, left:100'","scope"=>"tool"),"expand-align"=>array("id"=>"expand-align","group"=>"Positioning and Geometry","order"=>"230","default"=>"screen","label"=>"Align expanded image relative to screen or thumbnail","type"=>"array","subType"=>"radio","values"=>array("screen","image"),"scope"=>"tool"),"square-images"=>array("id"=>"square-images","group"=>"Positioning and Geometry","order"=>"310","default"=>"disable","label"=>"Create square images","description"=>"If enabled then the white/transparent padding will be added around the image","type"=>"array","subType"=>"radio","values"=>array("enable","disable"),"scope"=>"profile"),"always-show-zoom"=>array("id"=>"always-show-zoom","group"=>"Zoom mode","order"=>"10","default"=>"No","label"=>"Always show zoom?","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"tool"),"drag-mode"=>array("id"=>"drag-mode","group"=>"Zoom mode","order"=>"20","default"=>"No","label"=>"Use drag mode?","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"tool"),"move-on-click"=>array("id"=>"move-on-click","group"=>"Zoom mode","order"=>"30","default"=>"Yes","label"=>"Click alone will also move zoom (drag mode only)","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"tool"),"x"=>array("id"=>"x","group"=>"Zoom mode","order"=>"40","default"=>"-1","label"=>"Initial zoom X-axis position for drag mode, -1 is center","type"=>"num","scope"=>"tool"),"y"=>array("id"=>"y","group"=>"Zoom mode","order"=>"50","default"=>"-1","label"=>"Initial zoom Y-axis position for drag mode, -1 is center","type"=>"num","scope"=>"tool"),"preserve-position"=>array("id"=>"preserve-position","group"=>"Zoom mode","order"=>"60","default"=>"No","label"=>"Position of zoom can be remembered for multiple images and drag mode","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"tool"),"fit-zoom-window"=>array("id"=>"fit-zoom-window","group"=>"Zoom mode","order"=>"70","default"=>"Yes","label"=>"Resize zoom window if big image is smaller than zoom window","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"tool"),"multiple-images"=>array("id"=>"multiple-images","group"=>"Multiple images","order"=>"10","default"=>"Yes","label"=>"Use multiple images?","type"=>"array","subType"=>"radio","description"=>"Yes - Magic Zoom Plus works on main image (all additional images will be used as selectors), No - Magic Zoom Plus works on all images (on additional thumbnails too)","values"=>array("Yes","No"),"scope"=>"profile"),"selector-max-width"=>array("id"=>"selector-max-width","group"=>"Multiple images","order"=>"20","default"=>"50","label"=>"Maximum width of additional thumbnails (in pixels)","type"=>"num"),"selector-max-height"=>array("id"=>"selector-max-height","group"=>"Multiple images","order"=>"21","default"=>"50","label"=>"Maximum height of additional thumbnails (in pixels)","type"=>"num"),"margin-between-thumbs"=>array("id"=>"margin-between-thumbs","group"=>"Multiple images","order"=>"30","default"=>"1","label"=>"Margin between additional thumbnails (in pixels)","type"=>"num","scope"=>"profile"),"selectors-margin"=>array("id"=>"selectors-margin","group"=>"Multiple images","order"=>"40","default"=>"5","label"=>"Top margin of additional thumbnails (in pixels)","type"=>"num","scope"=>"profile"),"preserve-additional-thumbnails-positions"=>array("id"=>"preserve-additional-thumbnails-positions","group"=>"Multiple images","order"=>"50","default"=>"No","label"=>"Preserve additional thumbnail positions?","description"=>"If additional thumbnails does not exists in template(current Flypage) then this option will be ignored","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"profile"),"use-individual-titles"=>array("id"=>"use-individual-titles","group"=>"Multiple images","order"=>"60","default"=>"Yes","label"=>"Use individual image titles for additional images?","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"profile"),"preload-selectors-small"=>array("id"=>"preload-selectors-small","group"=>"Multiple images","order"=>"120","default"=>"Yes","label"=>"Multiple images, preload small images","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"tool"),"preload-selectors-big"=>array("id"=>"preload-selectors-big","group"=>"Multiple images","order"=>"130","default"=>"No","label"=>"Multiple images, preload large images","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"tool"),"selectors-effect"=>array("id"=>"selectors-effect","group"=>"Multiple images","order"=>"140","default"=>"dissolve","label"=>"Dissolve or cross fade thumbnail when switching thumbnails","type"=>"array","subType"=>"radio","values"=>array("dissolve","fade","disable"),"scope"=>"tool"),"selectors-effect-speed"=>array("id"=>"selectors-effect-speed","group"=>"Multiple images","order"=>"150","default"=>"400","label"=>"Selectors effect speed, ms","type"=>"num","scope"=>"tool"),"selectors-mouseover-delay"=>array("id"=>"selectors-mouseover-delay","group"=>"Multiple images","order"=>"160","default"=>"200","label"=>"Multiple images delay in ms before switching thumbnails","type"=>"num","scope"=>"tool"),"swap-image"=>array("id"=>"swap-image","group"=>"Multiple images","order"=>"210","default"=>"click","label"=>"Method to switch between multiple images","type"=>"array","subType"=>"radio","values"=>array("click","mouseover"),"scope"=>"tool"),"swap-image-delay"=>array("id"=>"swap-image-delay","group"=>"Multiple images","order"=>"220","default"=>"100","label"=>"Delay before switching thumbnails (milliseconds: 0 or larger)","type"=>"num","scope"=>"tool"),"click-to-initialize"=>array("id"=>"click-to-initialize","group"=>"Initialization","order"=>"70","default"=>"No","label"=>"Click to initialize Magic Zoom and download large image","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"tool"),"click-to-activate"=>array("id"=>"click-to-activate","group"=>"Initialization","order"=>"80","default"=>"No","label"=>"Click to show the zoom","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"tool"),"show-loading"=>array("id"=>"show-loading","group"=>"Initialization","order"=>"90","default"=>"Yes","label"=>"Loading message","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"tool"),"loading-msg"=>array("id"=>"loading-msg","group"=>"Initialization","order"=>"100","default"=>"Loading zoom...","label"=>"Loading message text","type"=>"text","scope"=>"tool"),"loading-opacity"=>array("id"=>"loading-opacity","group"=>"Initialization","order"=>"110","default"=>"75","label"=>"Loading message opacity (0-100)","type"=>"num","scope"=>"tool"),"loading-position-x"=>array("id"=>"loading-position-x","group"=>"Initialization","order"=>"120","default"=>"-1","label"=>"Loading message X-axis position, -1 is center","type"=>"num","scope"=>"tool"),"loading-position-y"=>array("id"=>"loading-position-y","group"=>"Initialization","order"=>"130","default"=>"-1","label"=>"Loading message Y-axis position, -1 is center","type"=>"num","scope"=>"tool"),"entire-image"=>array("id"=>"entire-image","group"=>"Initialization","order"=>"140","default"=>"No","label"=>"Show entire large image on hover","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"tool"),"show-title"=>array("id"=>"show-title","group"=>"Title and Caption","order"=>"10","default"=>"top","label"=>"Show the title of the image in the zoom window","type"=>"array","subType"=>"radio","values"=>array("top","bottom","disable"),"scope"=>"tool"),"show-caption"=>array("id"=>"show-caption","group"=>"Title and Caption","order"=>"20","default"=>"Yes","label"=>"Show caption","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"tool"),"caption-source"=>array("id"=>"caption-source","group"=>"Title and Caption","order"=>"30","default"=>"Title","label"=>"Caption source","type"=>"text","values"=>array("Title","Short description","Description","All"),"scope"=>"profile"),"caption-width"=>array("id"=>"caption-width","group"=>"Title and Caption","order"=>"40","default"=>"300","label"=>"Max width of bottom caption (pixels: 0 or larger)","type"=>"num","scope"=>"tool"),"caption-height"=>array("id"=>"caption-height","group"=>"Title and Caption","order"=>"50","default"=>"300","label"=>"Max height of bottom caption (pixels: 0 or larger)","type"=>"num","scope"=>"tool"),"caption-position"=>array("id"=>"caption-position","group"=>"Title and Caption","order"=>"60","default"=>"bottom","label"=>"Where to position the caption","type"=>"array","subType"=>"radio","values"=>array("bottom","right","left"),"scope"=>"tool"),"caption-speed"=>array("id"=>"caption-speed","group"=>"Title and Caption","order"=>"70","default"=>"250","label"=>"Speed of the caption slide effect (milliseconds: 0 or larger)","type"=>"num","scope"=>"tool"),"expand-effect"=>array("id"=>"expand-effect","group"=>"Effects","order"=>"10","default"=>"linear","label"=>"Effect while expanding image","type"=>"array","subType"=>"radio","values"=>array("linear","cubic","back","elastic","bounce"),"scope"=>"tool"),"restore-effect"=>array("id"=>"restore-effect","group"=>"Effects","order"=>"20","default"=>"linear","label"=>"Effect while restoring image","type"=>"array","subType"=>"radio","values"=>array("linear","cubic","back","elastic","bounce"),"scope"=>"tool"),"expand-speed"=>array("id"=>"expand-speed","group"=>"Effects","order"=>"30","default"=>"500","label"=>"Expand duration (milliseconds: 0-10000)","type"=>"num","scope"=>"tool"),"restore-speed"=>array("id"=>"restore-speed","group"=>"Effects","order"=>"40","default"=>"-1","label"=>"Restore duration (milliseconds: 0-10000, -1: use expand-speed value)","type"=>"num","scope"=>"tool"),"keep-thumbnail"=>array("id"=>"keep-thumbnail","group"=>"Effects","order"=>"80","default"=>"Yes","label"=>"Show/hide thumbnail when image enlarged","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"tool"),"opacity"=>array("id"=>"opacity","group"=>"Effects","order"=>"270","default"=>"50","label"=>"Square opacity","type"=>"num","scope"=>"tool"),"opacity-reverse"=>array("id"=>"opacity-reverse","group"=>"Effects","order"=>"280","default"=>"No","label"=>"Add opacity to background instead of hovered area","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"tool"),"zoom-fade"=>array("id"=>"zoom-fade","group"=>"Effects","order"=>"290","default"=>"No","label"=>"Zoom window fade effect","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"tool"),"zoom-fade-in-speed"=>array("id"=>"zoom-fade-in-speed","group"=>"Effects","order"=>"300","default"=>"200","label"=>"Zoom window fade-in speed (in milliseconds)","type"=>"num","scope"=>"tool"),"zoom-fade-out-speed"=>array("id"=>"zoom-fade-out-speed","group"=>"Effects","order"=>"310","default"=>"200","label"=>"Zoom window fade-out speed  (in milliseconds)","type"=>"num","scope"=>"tool"),"fps"=>array("id"=>"fps","group"=>"Effects","order"=>"320","default"=>"25","label"=>"Frames per second for zoom effect","type"=>"num","scope"=>"tool"),"smoothing"=>array("id"=>"smoothing","group"=>"Effects","order"=>"330","default"=>"Yes","label"=>"Enable smooth zoom movement","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"tool"),"smoothing-speed"=>array("id"=>"smoothing-speed","group"=>"Effects","order"=>"340","default"=>"40","label"=>"Speed of smoothing (1-99)","type"=>"num","scope"=>"tool"),"link-to-product-page"=>array("id"=>"link-to-product-page","group"=>"Miscellaneous","order"=>"10","default"=>"Yes","label"=>"Link enlarged image to the product page","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"profile"),"use-original-vm-thumbnails"=>array("id"=>"use-original-vm-thumbnails","group"=>"Miscellaneous","order"=>"20","default"=>"No","label"=>"Use original VirtueMart thumbnails?","description"=>"If thumbnail for product does not exists in VirtueMart then this option will be ignored","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"profile"),"show-message"=>array("id"=>"show-message","group"=>"Miscellaneous","order"=>"370","default"=>"Yes","label"=>"Show message under image?","type"=>"array","subType"=>"radio","values"=>array("Yes","No")),"message"=>array("id"=>"message","group"=>"Miscellaneous","order"=>"380","default"=>"Move your mouse over image or click to enlarge","label"=>"Message under images","type"=>"text"),"imagemagick"=>array("id"=>"imagemagick","group"=>"Miscellaneous","order"=>"550","default"=>"auto","label"=>"Path to Imagemagick binaries (convert tool)","description"=>"You can set 'auto' to automatically detect imagemagick location or 'off' to disable imagemagick and use php GD lib instead","type"=>"text","scope"=>"profile"),"image-quality"=>array("id"=>"image-quality","group"=>"Miscellaneous","order"=>"560","default"=>"100","label"=>"Quality of thumbnails and watermarked images","type"=>"num","scope"=>"profile"),"use-original-file-names"=>array("id"=>"use-original-file-names","group"=>"Miscellaneous","order"=>"565","default"=>"No","label"=>"Whether to use original file name for cached images","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"profile"),"background-opacity"=>array("id"=>"background-opacity","group"=>"Background","order"=>"10","default"=>"0","label"=>"Opacity of the background effect (0-100)","type"=>"num","scope"=>"tool"),"background-color"=>array("id"=>"background-color","group"=>"Background","order"=>"20","default"=>"#000000","label"=>"Fade background color (RGB)","type"=>"text","scope"=>"tool"),"background-speed"=>array("id"=>"background-speed","group"=>"Background","order"=>"30","default"=>"200","label"=>"Speed of the fade effect (milliseconds: 0 or larger)","type"=>"num","scope"=>"tool"),"buttons"=>array("id"=>"buttons","group"=>"Buttons","order"=>"10","default"=>"show","label"=>"Whether to show navigation buttons","type"=>"array","subType"=>"radio","values"=>array("show","hide","autohide"),"scope"=>"tool"),"buttons-display"=>array("id"=>"buttons-display","group"=>"Buttons","order"=>"20","default"=>"previous, next, close","label"=>"Display button","type"=>"text","description"=>"Show all three buttons or just one or two. E.g. 'previous, next' or 'close, next'","scope"=>"tool"),"buttons-position"=>array("id"=>"buttons-position","group"=>"Buttons","order"=>"30","default"=>"auto","label"=>"Location of navigation buttons","type"=>"array","subType"=>"radio","values"=>array("auto","top left","top right","bottom left","bottom right"),"scope"=>"tool"),"slideshow-effect"=>array("id"=>"slideshow-effect","group"=>"Expand mode","order"=>"10","default"=>"dissolve","label"=>"Visual effect for switching images","type"=>"array","subType"=>"radio","values"=>array("dissolve","fade","expand"),"scope"=>"tool"),"slideshow-loop"=>array("id"=>"slideshow-loop","group"=>"Expand mode","order"=>"20","default"=>"Yes","label"=>"Restart slideshow after last image","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"tool"),"slideshow-speed"=>array("id"=>"slideshow-speed","group"=>"Expand mode","order"=>"30","default"=>"800","label"=>"Speed of slideshow effect (milliseconds: 0 or larger)","type"=>"num","scope"=>"tool"),"z-index"=>array("id"=>"z-index","group"=>"Expand mode","order"=>"40","default"=>"10001","label"=>"The z-index for the enlarged image","type"=>"num"),"keyboard"=>array("id"=>"keyboard","group"=>"Expand mode","order"=>"50","default"=>"Yes","label"=>"Ability to use keyboard shortcuts","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"tool"),"keyboard-ctrl"=>array("id"=>"keyboard-ctrl","group"=>"Expand mode","order"=>"60","default"=>"No","label"=>"Require Ctrl key to permit shortcuts","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"tool"),"watermark"=>array("id"=>"watermark","group"=>"Watermark","order"=>"10","default"=>"","label"=>"Path to watermark image","description"=>"Relative for site base path. Use empty to disable watermark","type"=>"text","scope"=>"profile"),"watermark-max-width"=>array("id"=>"watermark-max-width","group"=>"Watermark","order"=>"20","default"=>"50%","label"=>"Maximum width of watermark image","description"=>"pixels (fixed size) or percent (relative for image size)","type"=>"text","scope"=>"profile"),"watermark-max-height"=>array("id"=>"watermark-max-height","group"=>"Watermark","order"=>"21","default"=>"50%","label"=>"Maximum height watermark image","description"=>"pixels (fixed size) or percent (relative for image size)","type"=>"text","scope"=>"profile"),"watermark-opacity"=>array("id"=>"watermark-opacity","group"=>"Watermark","order"=>"40","default"=>"50","label"=>"Opacity of the watermark image","description"=>"0-100","type"=>"num","scope"=>"profile"),"watermark-position"=>array("id"=>"watermark-position","group"=>"Watermark","order"=>"50","default"=>"center","label"=>"Position of the watermark","description"=>"'watermark-size' will ignore when 'watermark-position' sets to 'stretch'","type"=>"array","subType"=>"select","values"=>array("top","right","bottom","left","top-left","bottom-left","top-right","bottom-right","center","stretch"),"scope"=>"profile"),"watermark-offset-x"=>array("id"=>"watermark-offset-x","group"=>"Watermark","order"=>"60","default"=>"0","label"=>"Watermark horizontal offset","description"=>"Offset from left and/or right image borders. Pixels (fixed size) or percent (relative for image size)","type"=>"text","scope"=>"profile"),"watermark-offset-y"=>array("id"=>"watermark-offset-y","group"=>"Watermark","order"=>"70","default"=>"0","label"=>"Watermark vertical offset","description"=>"Offset from top and/or bottom image borders. Pixels (fixed size) or percent (relative for image size)","type"=>"text","scope"=>"profile"),"scroll-style"=>array("id"=>"scroll-style","group"=>"Scroll","order"=>"5","default"=>"default","label"=>"Style","type"=>"array","subType"=>"radio","values"=>array("default","with-borders"),"scope"=>"profile"),"loop"=>array("id"=>"loop","group"=>"Scroll","order"=>"10","default"=>"continue","label"=>"Restart scroll after last image","description"=>"Continue to next image or scroll all the way back","type"=>"array","subType"=>"radio","values"=>array("continue","restart"),"scope"=>"MagicScroll"),"speed"=>array("id"=>"speed","group"=>"Scroll","order"=>"20","default"=>"5000","label"=>"Scroll speed","description"=>"Change the scroll speed in miliseconds (0 = manual)","type"=>"num","scope"=>"MagicScroll"),"width"=>array("id"=>"width","group"=>"Scroll","order"=>"30","default"=>"0","label"=>"Scroll width (pixels)","description"=>"0 - auto","type"=>"num","scope"=>"MagicScroll"),"height"=>array("id"=>"height","group"=>"Scroll","order"=>"40","default"=>"0","label"=>"Scroll height (pixels)","description"=>"0 - auto","type"=>"num","scope"=>"MagicScroll"),"item-width"=>array("id"=>"item-width","group"=>"Scroll","order"=>"50","default"=>"0","label"=>"Scroll item width (pixels)","description"=>"0 - auto","type"=>"num","scope"=>"MagicScroll"),"item-height"=>array("id"=>"item-height","group"=>"Scroll","order"=>"60","default"=>"0","label"=>"Scroll item height (pixels)","description"=>"0 - auto","type"=>"num","scope"=>"MagicScroll"),"step"=>array("id"=>"step","group"=>"Scroll","order"=>"70","default"=>"3","label"=>"Scroll step","type"=>"num","scope"=>"MagicScroll"),"items"=>array("id"=>"items","group"=>"Scroll","order"=>"80","default"=>"3","label"=>"Items to show","description"=>"0 - manual","type"=>"num","scope"=>"MagicScroll"),"arrows"=>array("id"=>"arrows","group"=>"Scroll Arrows","order"=>"10","default"=>"outside","label"=>"Show arrows","label"=>"Where arrows should be placed","type"=>"array","subType"=>"radio","values"=>array("outside","inside","false"),"scope"=>"MagicScroll"),"arrows-opacity"=>array("id"=>"arrows-opacity","group"=>"Scroll Arrows","order"=>"20","default"=>"60","label"=>"Opacity of arrows (0-100)","type"=>"num","scope"=>"MagicScroll"),"arrows-hover-opacity"=>array("id"=>"arrows-hover-opacity","group"=>"Scroll Arrows","order"=>"30","default"=>"100","label"=>"Opacity of arrows on mouse over (0-100)","type"=>"num","scope"=>"MagicScroll"),"slider-size"=>array("id"=>"slider-size","group"=>"Scroll Slider","order"=>"10","default"=>"10%","label"=>"Slider size (numeric or percent)","type"=>"text","scope"=>"MagicScroll"),"slider"=>array("id"=>"slider","group"=>"Scroll Slider","order"=>"20","default"=>"false","label"=>"Slider postion","type"=>"array","subType"=>"radio","values"=>array("top","right","bottom","left","false"),"scope"=>"MagicScroll"),"direction"=>array("id"=>"direction","group"=>"Scroll effect","order"=>"10","default"=>"right","value"=>"bottom","label"=>"Direction of scroll","type"=>"array","subType"=>"radio","values"=>array("top","right","bottom","left"),"scope"=>"MagicScroll"),"duration"=>array("id"=>"duration","group"=>"Scroll effect","order"=>"20","default"=>"1000","label"=>"Duration of effect (miliseconds)","type"=>"num","scope"=>"MagicScroll"));
            $this->params->appendArray($params);
        }
    }

}
?>
