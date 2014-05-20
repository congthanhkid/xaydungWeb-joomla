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


if(!in_array('MagicZoomPlusModuleCoreClass', get_declared_classes())) {

    require_once(dirname(__FILE__) . '/magictoolbox.params.class.php');

    class MagicZoomPlusModuleCoreClass {
        var $uri;
        var $jsPath;
        var $cssPath;
        var $imgPath;
        var $params;
        var $general;//initial parameters
        var $mainImageID;
        var $type = 'standard';

        function MagicZoomPlusModuleCoreClass() {
            $this->params = new MagicToolboxParams();
            $this->general = new MagicToolboxParams();
            $this->_paramDefaults();
        }

        function headers($jsPath = '', $cssPath = null, $notCheck = false) {
            if($cssPath == null) $cssPath = $jsPath;
            $headers = array();
            $headers[] = '<!-- Magic Zoom Plus Joomla 1.5 with VirtueMart module module version v4.3.13 [v1.0.25:v2.0.16] -->';
            $headers[] = '<link type="text/css" href="' . $cssPath . '/magiczoomplus.css" rel="stylesheet" media="screen" />';
            $headers[] = '<script type="text/javascript" src="' . $jsPath . '/magiczoomplus.js"></script>';
            $headers[] = "<script type=\"text/javascript\">\n\tMagicZoomPlus.options = {\n\t\t".implode(",\n\t\t",$this->options($notCheck))."\n\t}\n</script>\n";
            return implode("\r\n", $headers);
        }

        function options($notCheck = false) {

            // load module options
            $options = array(
                "'expand-speed': " . $this->params->getValue("expand-speed"),
                "'restore-speed': " . $this->params->getValue("restore-speed"),
                "'expand-effect': '" . $this->params->getValue("expand-effect") . "'",
                "'restore-effect': '" . $this->params->getValue("restore-effect") . "'",
                "'expand-align': '" . $this->params->getValue("expand-align") . "'",
                "'expand-position': '" . $this->params->getValue("expand-position") . "'",
                "'image-size': '" . $this->params->getValue("image-size") . "'",
                //"'keep-thumbnail': " . $this->params->getValue("keep-thumbnail"),
                //"'click-to-initialize': " . $this->params->getValue("click-to-initialize"),
                "'background-color': '" . $this->params->getValue("background-color") . "'",
                "'background-opacity': " . $this->params->getValue("background-opacity"),
                "'background-speed': " . $this->params->getValue("background-speed"),
                "'caption-speed': " . $this->params->getValue("caption-speed"),
                "'caption-position': '" . $this->params->getValue("caption-position") . "'",
                "'caption-height': " . $this->params->getValue("caption-height"),
                "'caption-width': " . $this->params->getValue("caption-width"),
                "'buttons': '" . $this->params->getValue("buttons") . "'",
                "'buttons-position': '" . $this->params->getValue("buttons-position") . "'",
                "'buttons-display': '" . $this->params->getValue("buttons-display") . "'",
                //"'show-loading': " . $this->params->getValue("show-loading"),
                "'loading-msg': '" . $this->params->getValue("loading-msg") . "'",
                "'loading-opacity': " . $this->params->getValue("loading-opacity"),

                "'swap-image': '" . $this->params->getValue("swap-image") . "'",
                "'thumb-change': '" . $this->params->getValue('swap-image') ."'",

                "'swap-image-delay': " . $this->params->getValue("swap-image-delay"),
                "'selectors-mouseover-delay': " . $this->params->getValue('swap-image-delay') ,

                "'slideshow-effect': '" . $this->params->getValue("slideshow-effect") . "'",
                "'slideshow-speed': " . $this->params->getValue("slideshow-speed"),
                //"'slideshow-loop': " . $this->params->getValue("slideshow-loop"),
                //"'link': '" . $this->params->getValue("link") . "'",
                //"'link-target': '" . $this->params->getValue("link-target") . "'",
                //"'thumb-id': '" . $this->params->getValue("thumb-id") . "'",
                //"'group': '" . $this->params->getValue("group") . "'",
                //"'keyboard': " . $this->params->getValue("keyboard"),
                //"'keyboard-ctrl': " . $this->params->getValue("keyboard-ctrl"),
                "'z-index': " . $this->params->getValue("z-index"),

                "'opacity': " . $this->params->getValue('opacity'),
                "'zoom-width': " . $this->params->getValue('zoom-width'),
                "'zoom-height': " . $this->params->getValue('zoom-height'),
                "'zoom-position': '" . $this->params->getValue('zoom-position') ."'",
                //"'thumb-change': '" . $this->params->getValue('thumb-change') ."'",
                "'smoothing-speed': " . $this->params->getValue('smoothing-speed'),
                "'zoom-distance': " . $this->params->getValue('zoom-distance'),
                "'zoom-fade-in-speed': " . $this->params->getValue('zoom-fade-in-speed'),
                "'zoom-fade-out-speed': " . $this->params->getValue('zoom-fade-out-speed'),
                "'fps': " . $this->params->getValue('fps'),
                "'loading-position-x': " . $this->params->getValue('loading-position-x'),
                "'loading-position-y': " . $this->params->getValue('loading-position-y'),
                "'x': " . $this->params->getValue('x'),
                "'y': " . $this->params->getValue('y'),
                "'show-title': " . ($this->params->checkValue('show-title', 'disable')?'false':"'".$this->params->getValue('show-title')."'"),
                "'selectors-effect': '" . $this->params->getValue('selectors-effect') ."'",
                "'selectors-effect-speed': " . $this->params->getValue('selectors-effect-speed'),
            );
            if($notCheck) {
                $options = array_merge($options, array(
                    "'disable-zoom': " . $this->params->getValue("disable-zoom"),
                    "'disable-expand': " . $this->params->getValue("disable-expand"),
                    "'keep-thumbnail': " . $this->params->getValue("keep-thumbnail"),
                    "'click-to-initialize': " . $this->params->getValue("click-to-initialize"),
                    "'show-loading': " . $this->params->getValue("show-loading"),
                    "'slideshow-loop': " . $this->params->getValue("slideshow-loop"),
                    "'keyboard': " . $this->params->getValue("keyboard"),
                    "'keyboard-ctrl': " . $this->params->getValue("keyboard-ctrl"),

                    "'drag-mode': " . $this->params->getValue('drag-mode'),
                    "'always-show-zoom': " . $this->params->getValue('always-show-zoom'),
                    "'smoothing': " . $this->params->getValue('smoothing'),
                    "'opacity-reverse': " . $this->params->getValue('opacity-reverse'),
                    "'click-to-activate': " . $this->params->getValue('click-to-activate'),
                    "'preload-selectors-small': " . $this->params->getValue('preload-selectors-small'),
                    "'preload-selectors-big': " . $this->params->getValue('preload-selectors-big'),
                    "'zoom-fade': " . $this->params->getValue('zoom-fade'),
                    "'move-on-click': " . $this->params->getValue('move-on-click'),
                    "'preserve-position': " . $this->params->getValue('preserve-position'),
                    "'fit-zoom-window': " . $this->params->getValue('fit-zoom-window'),
                    "'entire-image': " . $this->params->getValue('entire-image'),
                ));
            } else {
                $options = array_merge($options, array(
                    "'disable-zoom': " . ($this->params->checkValue('disable-zoom', 'Yes')?'true':'false'),
                    "'disable-expand': " . ($this->params->checkValue('disable-expand', 'Yes')?'true':'false'),
                    "'keep-thumbnail': " . ($this->params->checkValue('keep-thumbnail', 'Yes')?'true':'false'),
                    "'click-to-initialize': " . ($this->params->checkValue('click-to-initialize', 'Yes')?'true':'false'),
                    "'show-loading': " . ($this->params->checkValue('show-loading', 'Yes')?'true':'false'),
                    "'slideshow-loop': " . ($this->params->checkValue('slideshow-loop', 'Yes')?'true':'false'),
                    "'keyboard': " . ($this->params->checkValue('keyboard', 'Yes')?'true':'false'),
                    "'keyboard-ctrl': " . ($this->params->checkValue('keyboard-ctrl', 'Yes')?'true':'false'),

                    "'drag-mode': " . ($this->params->checkValue('drag-mode', 'Yes') ? 'true' : 'false'),
                    "'always-show-zoom': " . ($this->params->checkValue('always-show-zoom', 'Yes') ? 'true' : 'false'),
                    "'smoothing': " . ($this->params->checkValue('smoothing', 'Yes') ? 'true' : 'false'),
                    "'opacity-reverse': " . ($this->params->checkValue('opacity-reverse', 'Yes') ? 'true' : 'false'),
                    "'click-to-activate': " . ($this->params->checkValue('click-to-activate', 'Yes') ? 'true' : 'false'),
                    "'preload-selectors-small': " . ($this->params->checkValue('preload-selectors-small', 'Yes') ? 'true' : 'false'),
                    "'preload-selectors-big': " . ($this->params->checkValue('preload-selectors-big', 'Yes') ? 'true' : 'false'),
                    "'zoom-fade': " . ($this->params->checkValue('zoom-fade', 'Yes') ? 'true' : 'false'),
                    "'move-on-click': " . ($this->params->checkValue('move-on-click', 'Yes') ? 'true' : 'false'),
                    "'preserve-position': " . ($this->params->checkValue('preserve-position', 'Yes') ? 'true' : 'false'),
                    "'fit-zoom-window': " . ($this->params->checkValue('fit-zoom-window', 'Yes') ? 'true' : 'false'),
                    "'entire-image': " . ($this->params->checkValue('entire-image', 'Yes') ? 'true' : 'false'),
                ));
            }
            $cSource = $this->params->get("caption-source");
            if(is_array($cSource) && isset($cSource['core']) && $cSource['core']) {
                $options = array_merge($options, array(
                    "'caption-source': '" . $this->params->getValue("caption-source") . "'"
                ));
            } else {
                $options = array_merge($options, array(
                    "'caption-source': 'span'"
                ));
            }
            if($this->params->check('hotspots', 'true')) {
                $options = array_merge($options, array(
                    "'hotspots': " . $this->params->getValue('hotspots'),
                ));
            }
            return $options;
        }

        function template($params) {
            // TODO =)
            //extract(array_fill_keys(array('img', 'thumb', 'id'), ''));
            extract($params);

            if(!isset($img) || empty($img)) return false;
            if(!isset($thumb) || empty($thumb)) $thumb = $img;
            if(!isset($id) || empty($id)) $id = md5($img);

            if(!isset($alt) || empty($alt)) {
                $alt = '';
            } else {
                $alt = htmlspecialchars(htmlspecialchars_decode($alt, ENT_QUOTES));
            }
            if(!isset($title) || empty($title)) $title = '';
            if(!isset($description)) $description = '';

            if($this->params->checkValue('show-caption', 'Yes')) {
                $captionSource = $this->params->getValue('caption-source');
                $captionSource = trim($captionSource);
                if(strtolower($captionSource) == 'all' || strtolower($captionSource) == 'both') {
                    $captionSource = $this->params->getValues('caption-source');
                } else {
                    $captionSource = explode(',',$captionSource);
                }
                $fullTitle = array();
                foreach($captionSource as $caption) {
                    $caption = trim($caption);
                    $caption = strtolower($caption);
                    $caption = lcfirst(implode(explode(' ', ucwords($caption))));
                    if($caption == 'all' || $caption == 'both') continue;
                    if(!isset($$caption)) continue;
                    if($$caption == '') continue;
                    if($caption == 'title') {
                        $fullTitle[] = '<b>' . $$caption . '</b>';
                    } else {
                        $fullTitle[] = $$caption;
                    }
                }
                $description_new = implode('<br/>',$fullTitle);
            } else $description_new = '';
            $description = $description_new;
            $description = trim(preg_replace("/\s+/is", " ", $description));
            if(!empty($description)) {
                $description = preg_replace("/<(\/?)a([^>]*)>/is", "[$1a$2]", $description);
                $description = "<span>{$description}</span>";
            }
            if(!empty($title) && !$this->params->checkValue('show-title', 'disable')) {
                $title = htmlspecialchars(htmlspecialchars_decode($title, ENT_QUOTES));
                if(empty($alt)) $alt = $title;
                $title = " title=\"{$title}\"";
            } else $title = '';

            if(!isset($width) || empty($width)) $width = "";
            else $width = " width=\"{$width}\"";
            if(!isset($height) || empty($height)) $height = "";
            else $height = " height=\"{$height}\"";

            if($this->params->checkValue('show-message', 'Yes')) {
                $message = '<div class="MagicToolboxMessage">' . $this->params->getValue('message') . '</div>';
            } else $message = '';

            $this->mainImageID = $id;

            // TODO rel should be fill from serialize method in params class
            $rel = $this->getRel();

            if(!isset($link) || empty($link)) {
                $link = '';
            } else if($this->params->checkValue('disable-expand', 'Yes')) {
                //onclick only if MagicThumb disabled
                $link = ' onclick="document.location.href=\'' . ($link) . '\'"';
            } else {
                $rel .= 'link: ' . ($link) . ';';
                $link = '';
            }

            if(isset($group) && !empty($group)) {
                $rel .= 'group: ' . ($group) . ';';
            }
            if(isset($advanced_option)) {
                $rel .= $advanced_option . ';';
            }
            if(isset($hotspots) && $hotspots) {
                $rel .= 'hotspots: ' . $hotspots;
            }
            if(!empty($rel)) $rel = 'rel="'.$rel.'"';

            return "<a{$link} class=\"MagicZoomPlus\"{$title} id=\"MagicZoomPlusImage{$id}\" href=\"{$img}\" {$rel}><img{$width}{$height} src=\"{$thumb}\" alt=\"{$alt}\" />{$description}</a>" . $message;
        }

        function subTemplate($params) {
            extract($params);

            if(!isset($alt) || empty($alt)) {
                $alt = '';
            } else {
                $alt = htmlspecialchars(htmlspecialchars_decode($alt, ENT_QUOTES));
            }
            if(!isset($img) || empty($img)) return false;
            if(!isset($medium) || empty($medium)) $medium = $img;
            if(!isset($thumb) || empty($thumb)) $thumb = $img;
            if(!isset($id) || empty($id)) $id = md5($img);
            if(!isset($title) || empty($title) || $this->params->checkValue('show-caption', 'No')) $title = '';
            else {
                $title = htmlspecialchars(htmlspecialchars_decode($title, ENT_QUOTES));
                if(empty($alt)) $alt = $title;
                $title = " title=\"{$title}\"";
            }
            if(!isset($width) || empty($width)) $width = "";
            else $width = " width=\"{$width}\"";
            if(!isset($height) || empty($height)) $height = "";
            else $height = " height=\"{$height}\"";

            /* onclick - to allow change image for MagicThumb effect */
            //$onclick = " onclick=\"MagicZoomPlusResreshMagicThumb(this);\"";

            $rel = $this->getRel();
            if(isset($advanced_option)) {
                $rel .= $advanced_option . ';';
            }
            if(isset($hotspots) && $hotspots) {
                $rel .= 'hotspots: ' . $hotspots;
            }

            return "<a{$title} href=\"{$img}\" rel=\"zoom-id: MagicZoomPlusImage{$id};caption-source: a:title;{$rel}\" rev=\"{$medium}\"><img{$width}{$height} src=\"{$thumb}\" alt=\"{$alt}\" /></a>";
        }

        function addonsTemplate($imgPath = '') {
            if ($this->params->checkValue("loading-animation", "Yes")){
                return '<img style="display:none;" class="MagicZoomLoading" src="' . $imgPath . '/' . $this->params->getValue("loading-image") . '" alt="' . $this->params->getValue("loading-text") . '"/>';
            } else return '';
        }

        function getRel() {
            if(in_array('MagicToolboxOptions', get_declared_classes())) {
                return $this->params->serialize() . ';thumb-change:' . $this->params->get('swap-image') . ';'
                    . 'disable-zoom: ' . ($this->params->check('disable-zoom', 'Yes') ? 'true' : 'false') . ';'
                    . 'disable-expand: ' . ($this->params->check('disable-expand', 'Yes') ? 'true' : 'false') . ';';
            }
            $rel = array();
            if(count($this->general->params)) {
                foreach($this->general->params as $name => $param) {
                    if($this->params->checkValue($name, $param['value'])) continue;
                    switch($name) {
                        case 'expand-speed':
                            $rel[] = 'expand-speed: ' . $this->params->getValue('expand-speed');
                            break;
                        case 'restore-speed':
                            $rel[] = 'restore-speed: ' . $this->params->getValue('restore-speed');
                            break;
                        case 'expand-effect':
                            $rel[] = 'expand-effect: ' . $this->params->getValue('expand-effect');
                            break;
                        case 'restore-effect':
                            $rel[] = 'restore-effect: ' . $this->params->getValue('restore-effect');
                            break;
                        case 'expand-align':
                            $rel[] = 'expand-align: ' . $this->params->getValue('expand-align');
                            break;
                        case 'expand-position':
                            $rel[] = 'expand-position: ' . $this->params->getValue('expand-position');
                            break;
                        case 'image-size':
                            $rel[] = 'image-size: ' . $this->params->getValue('image-size');
                            break;
                        case 'background-color':
                            $rel[] = 'background-color: ' . $this->params->getValue('background-color');
                            break;
                        case 'background-opacity':
                            $rel[] = 'background-opacity: ' . $this->params->getValue('background-opacity');
                            break;
                        case 'background-speed':
                            $rel[] = 'background-speed: ' . $this->params->getValue('background-speed');
                            break;
                        case 'caption-speed':
                            $rel[] = 'caption-speed: ' . $this->params->getValue('caption-speed');
                            break;
                        case 'caption-position':
                            $rel[] = 'caption-position: ' . $this->params->getValue('caption-position');
                            break;
                        case 'caption-height':
                            $rel[] = 'caption-height: ' . $this->params->getValue('caption-height');
                            break;
                        case 'caption-width':
                            $rel[] = 'caption-width: ' . $this->params->getValue('caption-width');
                            break;
                        case 'buttons':
                            $rel[] = 'buttons: ' . $this->params->getValue('buttons');
                            break;
                        case 'buttons-position':
                            $rel[] = 'buttons-position: ' . $this->params->getValue('buttons-position');
                            break;
                        case 'buttons-display':
                            $rel[] = 'buttons-display: ' . $this->params->getValue('buttons-display');
                            break;
                        case 'loading-msg':
                            $rel[] = 'loading-msg: ' . $this->params->getValue('loading-msg');
                            break;
                        case 'loading-opacity':
                            $rel[] = 'loading-opacity: ' . $this->params->getValue('loading-opacity');
                            break;
                        case 'swap-image':
                            $rel[] = 'swap-image: ' . $this->params->getValue('swap-image');
                            break;
                        case 'thumb-change':
                            $rel[] = 'thumb-change: ' . $this->params->getValue('swap-image');
                            break;
                        case 'swap-image-delay':
                            $rel[] = 'swap-image-delay: ' . $this->params->getValue('swap-image-delay');
                            break;
                        case 'selectors-mouseover-delay':
                            $rel[] = 'selectors-mouseover-delay: ' . $this->params->getValue('swap-image-delay');
                            break;
                        case 'slideshow-effect':
                            $rel[] = 'slideshow-effect: ' . $this->params->getValue('slideshow-effect');
                            break;
                        case 'slideshow-speed':
                            $rel[] = 'slideshow-speed: ' . $this->params->getValue('slideshow-speed');
                            break;
                        case 'z-index':
                            $rel[] = 'z-index: ' . $this->params->getValue('z-index');
                            break;
                        case 'opacity':
                            $rel[] = 'opacity: ' . $this->params->getValue('opacity');
                            break;
                        case 'zoom-width':
                            $rel[] = 'zoom-width: ' . $this->params->getValue('zoom-width');
                            break;
                        case 'zoom-height':
                            $rel[] = 'zoom-height: ' . $this->params->getValue('zoom-height');
                            break;
                        case 'zoom-position':
                            $rel[] = 'zoom-position: ' . $this->params->getValue('zoom-position');
                            break;
                        case 'smoothing-speed':
                            $rel[] = 'smoothing-speed: ' . $this->params->getValue('smoothing-speed');
                            break;
                        case 'zoom-distance':
                            $rel[] = 'zoom-distance: ' . $this->params->getValue('zoom-distance');
                            break;
                        case 'zoom-fade-in-speed':
                            $rel[] = 'zoom-fade-in-speed: ' . $this->params->getValue('zoom-fade-in-speed');
                            break;
                        case 'zoom-fade-out-speed':
                            $rel[] = 'zoom-fade-out-speed: ' . $this->params->getValue('zoom-fade-out-speed');
                            break;
                        case 'fps':
                            $rel[] = 'fps: ' . $this->params->getValue('fps');
                            break;
                        case 'loading-position-x':
                            $rel[] = 'loading-position-x: ' . $this->params->getValue('loading-position-x');
                            break;
                        case 'loading-position-y':
                            $rel[] = 'loading-position-y: ' . $this->params->getValue('loading-position-y');
                            break;
                        case 'x':
                            $rel[] = 'x: ' . $this->params->getValue('x');
                            break;
                        case 'y':
                            $rel[] = 'y: ' . $this->params->getValue('y');
                            break;
                        case 'show-title':
                            $rel[] = 'show-title: ' . ($this->params->checkValue('show-title', 'disable')?'false':$this->params->getValue('show-title'));
                            break;
                        case 'selectors-effect':
                            $rel[] = 'selectors-effect: ' . $this->params->getValue('selectors-effect');
                            break;
                        case 'selectors-effect-speed':
                            $rel[] = 'selectors-effect-speed: ' . $this->params->getValue('selectors-effect-speed');
                            break;
                        case 'disable-zoom':
                            $rel[] = 'disable-zoom: ' . ($this->params->checkValue('disable-zoom', 'Yes')?'true':'false');
                            break;
                        case 'disable-expand':
                            $rel[] = 'disable-expand: ' . ($this->params->checkValue('disable-expand', 'Yes')?'true':'false');
                            break;
                        case 'keep-thumbnail':
                            $rel[] = 'keep-thumbnail: ' . ($this->params->checkValue('keep-thumbnail', 'Yes')?'true':'false');
                            break;
                        case 'click-to-initialize':
                            $rel[] = 'click-to-initialize: ' . ($this->params->checkValue('click-to-initialize', 'Yes')?'true':'false');
                            break;
                        case 'show-loading':
                            $rel[] = 'show-loading: ' . ($this->params->checkValue('show-loading', 'Yes')?'true':'false');
                            break;
                        case 'slideshow-loop':
                            $rel[] = 'slideshow-loop: ' . ($this->params->checkValue('slideshow-loop', 'Yes')?'true':'false');
                            break;
                        case 'keyboard':
                            $rel[] = 'keyboard: ' . ($this->params->checkValue('keyboard', 'Yes')?'true':'false');
                            break;
                        case 'keyboard-ctrl':
                            $rel[] = 'keyboard-ctrl: ' . ($this->params->checkValue('keyboard-ctrl', 'Yes')?'true':'false');
                            break;
                        case 'drag-mode':
                            $rel[] = 'drag-mode: ' . ($this->params->checkValue('drag-mode', 'Yes') ? 'true' : 'false');
                            break;
                        case 'always-show-zoom':
                            $rel[] = 'always-show-zoom: ' . ($this->params->checkValue('always-show-zoom', 'Yes') ? 'true' : 'false');
                            break;
                        case 'smoothing':
                            $rel[] = 'smoothing: ' . ($this->params->checkValue('smoothing', 'Yes') ? 'true' : 'false');
                            break;
                        case 'opacity-reverse':
                            $rel[] = 'opacity-reverse: ' . ($this->params->checkValue('opacity-reverse', 'Yes') ? 'true' : 'false');
                            break;
                        case 'click-to-activate':
                            $rel[] = 'click-to-activate: ' . ($this->params->checkValue('click-to-activate', 'Yes') ? 'true' : 'false');
                            break;
                        case 'preload-selectors-small':
                            $rel[] = 'preload-selectors-small: ' . ($this->params->checkValue('preload-selectors-small', 'Yes') ? 'true' : 'false');
                            break;
                        case 'preload-selectors-big':
                            $rel[] = 'preload-selectors-big: ' . ($this->params->checkValue('preload-selectors-big', 'Yes') ? 'true' : 'false');
                            break;
                        case 'zoom-fade':
                            $rel[] = 'zoom-fade: ' . ($this->params->checkValue('zoom-fade', 'Yes') ? 'true' : 'false');
                            break;
                        case 'move-on-click':
                            $rel[] = 'move-on-click: ' . ($this->params->checkValue('move-on-click', 'Yes') ? 'true' : 'false');
                            break;
                        case 'preserve-position':
                            $rel[] = 'preserve-position: ' . ($this->params->checkValue('preserve-position', 'Yes') ? 'true' : 'false');
                            break;
                        case 'fit-zoom-window':
                            $rel[] = 'fit-zoom-window: ' . ($this->params->checkValue('fit-zoom-window', 'Yes') ? 'true' : 'false');
                            break;
                        case 'entire-image':
                            $rel[] = 'entire-image: ' . ($this->params->checkValue('entire-image', 'Yes') ? 'true' : 'false');
                            break;
                    }
                }
            }
            $rel[] = 'disable-zoom: ' . ($this->params->checkValue('disable-zoom', 'Yes') ? 'true' : 'false');
            $rel[] = 'disable-expand: ' . ($this->params->checkValue('disable-expand', 'Yes') ? 'true' : 'false');
            $rel = implode(';',$rel) . ';';
            return $rel;
        }

        function _paramDefaults() {
            $params = array("enable-effect"=>array("id"=>"enable-effect","group"=>"General","order"=>"10","default"=>"No","label"=>"Enable effect","type"=>"array","subType"=>"radio","values"=>array("Both","Zoom","Expand","No")),"template"=>array("id"=>"template","group"=>"General","order"=>"20","default"=>"bottom","label"=>"Thumbnail layout","type"=>"array","subType"=>"radio","values"=>array("bottom","left","right","top"),"scope"=>"profile"),"magicscroll"=>array("id"=>"magicscroll","group"=>"General","order"=>"22","default"=>"No","label"=>"Use Magic Scroll™ for thumbnails","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"profile"),"hotspots"=>array("id"=>"hotspots","group"=>"General","default"=>"false","label"=>"Enable hotspots","type"=>"array","subType"=>"radio","values"=>array("true","false"),"scope"=>"profile"),"thumb-max-width"=>array("id"=>"thumb-max-width","group"=>"Positioning and Geometry","order"=>"10","default"=>"200","label"=>"Maximum width of thumbnail (in pixels)","type"=>"num"),"thumb-max-height"=>array("id"=>"thumb-max-height","group"=>"Positioning and Geometry","order"=>"11","default"=>"200","label"=>"Maximum height of thumbnail (in pixels)","type"=>"num"),"centered-thumbnails"=>array("id"=>"centered-thumbnails","group"=>"Positioning and Geometry","order"=>"50","default"=>"Yes","label"=>"Should Magic Zoom Plus centered main thumbnail?","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"profile"),"zoom-width"=>array("id"=>"zoom-width","group"=>"Positioning and Geometry","order"=>"140","default"=>"300","label"=>"Zoomed area width (in pixels)","type"=>"num","scope"=>"tool"),"zoom-height"=>array("id"=>"zoom-height","group"=>"Positioning and Geometry","order"=>"150","default"=>"300","label"=>"Zoomed area height (in pixels)","type"=>"num","scope"=>"tool"),"zoom-position"=>array("id"=>"zoom-position","group"=>"Positioning and Geometry","order"=>"160","default"=>"right","label"=>"Zoomed area position","type"=>"array","subType"=>"radio","values"=>array("top","right","bottom","left","inner"),"scope"=>"tool"),"zoom-distance"=>array("id"=>"zoom-distance","group"=>"Positioning and Geometry","order"=>"170","default"=>"15","label"=>"Distance between small image and zoom window (in pixels)","type"=>"num","scope"=>"tool"),"image-size"=>array("id"=>"image-size","group"=>"Positioning and Geometry","order"=>"210","default"=>"fit-screen","label"=>"Size of the enlarged image","type"=>"array","subType"=>"radio","values"=>array("original","fit-screen"),"scope"=>"tool"),"expand-position"=>array("id"=>"expand-position","group"=>"Positioning and Geometry","order"=>"220","default"=>"center","label"=>"Precise position of enlarged image (px)","type"=>"text","description"=>"The value can be 'center' or coordinates. E.g. 'top:0, left:0' or 'bottom:100, left:100'","scope"=>"tool"),"expand-align"=>array("id"=>"expand-align","group"=>"Positioning and Geometry","order"=>"230","default"=>"screen","label"=>"Align expanded image relative to screen or thumbnail","type"=>"array","subType"=>"radio","values"=>array("screen","image"),"scope"=>"tool"),"square-images"=>array("id"=>"square-images","group"=>"Positioning and Geometry","order"=>"310","default"=>"disable","label"=>"Create square images","description"=>"If enabled then the white/transparent padding will be added around the image","type"=>"array","subType"=>"radio","values"=>array("enable","disable"),"scope"=>"profile"),"always-show-zoom"=>array("id"=>"always-show-zoom","group"=>"Zoom mode","order"=>"10","default"=>"No","label"=>"Always show zoom?","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"tool"),"drag-mode"=>array("id"=>"drag-mode","group"=>"Zoom mode","order"=>"20","default"=>"No","label"=>"Use drag mode?","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"tool"),"move-on-click"=>array("id"=>"move-on-click","group"=>"Zoom mode","order"=>"30","default"=>"Yes","label"=>"Click alone will also move zoom (drag mode only)","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"tool"),"x"=>array("id"=>"x","group"=>"Zoom mode","order"=>"40","default"=>"-1","label"=>"Initial zoom X-axis position for drag mode, -1 is center","type"=>"num","scope"=>"tool"),"y"=>array("id"=>"y","group"=>"Zoom mode","order"=>"50","default"=>"-1","label"=>"Initial zoom Y-axis position for drag mode, -1 is center","type"=>"num","scope"=>"tool"),"preserve-position"=>array("id"=>"preserve-position","group"=>"Zoom mode","order"=>"60","default"=>"No","label"=>"Position of zoom can be remembered for multiple images and drag mode","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"tool"),"fit-zoom-window"=>array("id"=>"fit-zoom-window","group"=>"Zoom mode","order"=>"70","default"=>"Yes","label"=>"Resize zoom window if big image is smaller than zoom window","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"tool"),"multiple-images"=>array("id"=>"multiple-images","group"=>"Multiple images","order"=>"10","default"=>"Yes","label"=>"Use multiple images?","type"=>"array","subType"=>"radio","description"=>"Yes - Magic Zoom Plus works on main image (all additional images will be used as selectors), No - Magic Zoom Plus works on all images (on additional thumbnails too)","values"=>array("Yes","No"),"scope"=>"profile"),"selector-max-width"=>array("id"=>"selector-max-width","group"=>"Multiple images","order"=>"20","default"=>"50","label"=>"Maximum width of additional thumbnails (in pixels)","type"=>"num"),"selector-max-height"=>array("id"=>"selector-max-height","group"=>"Multiple images","order"=>"21","default"=>"50","label"=>"Maximum height of additional thumbnails (in pixels)","type"=>"num"),"margin-between-thumbs"=>array("id"=>"margin-between-thumbs","group"=>"Multiple images","order"=>"30","default"=>"1","label"=>"Margin between additional thumbnails (in pixels)","type"=>"num","scope"=>"profile"),"selectors-margin"=>array("id"=>"selectors-margin","group"=>"Multiple images","order"=>"40","default"=>"5","label"=>"Top margin of additional thumbnails (in pixels)","type"=>"num","scope"=>"profile"),"preserve-additional-thumbnails-positions"=>array("id"=>"preserve-additional-thumbnails-positions","group"=>"Multiple images","order"=>"50","default"=>"No","label"=>"Preserve additional thumbnail positions?","description"=>"If additional thumbnails does not exists in template(current Flypage) then this option will be ignored","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"profile"),"use-individual-titles"=>array("id"=>"use-individual-titles","group"=>"Multiple images","order"=>"60","default"=>"Yes","label"=>"Use individual image titles for additional images?","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"profile"),"preload-selectors-small"=>array("id"=>"preload-selectors-small","group"=>"Multiple images","order"=>"120","default"=>"Yes","label"=>"Multiple images, preload small images","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"tool"),"preload-selectors-big"=>array("id"=>"preload-selectors-big","group"=>"Multiple images","order"=>"130","default"=>"No","label"=>"Multiple images, preload large images","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"tool"),"selectors-effect"=>array("id"=>"selectors-effect","group"=>"Multiple images","order"=>"140","default"=>"dissolve","label"=>"Dissolve or cross fade thumbnail when switching thumbnails","type"=>"array","subType"=>"radio","values"=>array("dissolve","fade","disable"),"scope"=>"tool"),"selectors-effect-speed"=>array("id"=>"selectors-effect-speed","group"=>"Multiple images","order"=>"150","default"=>"400","label"=>"Selectors effect speed, ms","type"=>"num","scope"=>"tool"),"selectors-mouseover-delay"=>array("id"=>"selectors-mouseover-delay","group"=>"Multiple images","order"=>"160","default"=>"200","label"=>"Multiple images delay in ms before switching thumbnails","type"=>"num","scope"=>"tool"),"swap-image"=>array("id"=>"swap-image","group"=>"Multiple images","order"=>"210","default"=>"click","label"=>"Method to switch between multiple images","type"=>"array","subType"=>"radio","values"=>array("click","mouseover"),"scope"=>"tool"),"swap-image-delay"=>array("id"=>"swap-image-delay","group"=>"Multiple images","order"=>"220","default"=>"100","label"=>"Delay before switching thumbnails (milliseconds: 0 or larger)","type"=>"num","scope"=>"tool"),"click-to-initialize"=>array("id"=>"click-to-initialize","group"=>"Initialization","order"=>"70","default"=>"No","label"=>"Click to initialize Magic Zoom and download large image","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"tool"),"click-to-activate"=>array("id"=>"click-to-activate","group"=>"Initialization","order"=>"80","default"=>"No","label"=>"Click to show the zoom","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"tool"),"show-loading"=>array("id"=>"show-loading","group"=>"Initialization","order"=>"90","default"=>"Yes","label"=>"Loading message","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"tool"),"loading-msg"=>array("id"=>"loading-msg","group"=>"Initialization","order"=>"100","default"=>"Loading zoom...","label"=>"Loading message text","type"=>"text","scope"=>"tool"),"loading-opacity"=>array("id"=>"loading-opacity","group"=>"Initialization","order"=>"110","default"=>"75","label"=>"Loading message opacity (0-100)","type"=>"num","scope"=>"tool"),"loading-position-x"=>array("id"=>"loading-position-x","group"=>"Initialization","order"=>"120","default"=>"-1","label"=>"Loading message X-axis position, -1 is center","type"=>"num","scope"=>"tool"),"loading-position-y"=>array("id"=>"loading-position-y","group"=>"Initialization","order"=>"130","default"=>"-1","label"=>"Loading message Y-axis position, -1 is center","type"=>"num","scope"=>"tool"),"entire-image"=>array("id"=>"entire-image","group"=>"Initialization","order"=>"140","default"=>"No","label"=>"Show entire large image on hover","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"tool"),"show-title"=>array("id"=>"show-title","group"=>"Title and Caption","order"=>"10","default"=>"top","label"=>"Show the title of the image in the zoom window","type"=>"array","subType"=>"radio","values"=>array("top","bottom","disable"),"scope"=>"tool"),"show-caption"=>array("id"=>"show-caption","group"=>"Title and Caption","order"=>"20","default"=>"Yes","label"=>"Show caption","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"tool"),"caption-source"=>array("id"=>"caption-source","group"=>"Title and Caption","order"=>"30","default"=>"Title","label"=>"Caption source","type"=>"text","values"=>array("Title","Short description","Description","All"),"scope"=>"profile"),"caption-width"=>array("id"=>"caption-width","group"=>"Title and Caption","order"=>"40","default"=>"300","label"=>"Max width of bottom caption (pixels: 0 or larger)","type"=>"num","scope"=>"tool"),"caption-height"=>array("id"=>"caption-height","group"=>"Title and Caption","order"=>"50","default"=>"300","label"=>"Max height of bottom caption (pixels: 0 or larger)","type"=>"num","scope"=>"tool"),"caption-position"=>array("id"=>"caption-position","group"=>"Title and Caption","order"=>"60","default"=>"bottom","label"=>"Where to position the caption","type"=>"array","subType"=>"radio","values"=>array("bottom","right","left"),"scope"=>"tool"),"caption-speed"=>array("id"=>"caption-speed","group"=>"Title and Caption","order"=>"70","default"=>"250","label"=>"Speed of the caption slide effect (milliseconds: 0 or larger)","type"=>"num","scope"=>"tool"),"expand-effect"=>array("id"=>"expand-effect","group"=>"Effects","order"=>"10","default"=>"linear","label"=>"Effect while expanding image","type"=>"array","subType"=>"radio","values"=>array("linear","cubic","back","elastic","bounce"),"scope"=>"tool"),"restore-effect"=>array("id"=>"restore-effect","group"=>"Effects","order"=>"20","default"=>"linear","label"=>"Effect while restoring image","type"=>"array","subType"=>"radio","values"=>array("linear","cubic","back","elastic","bounce"),"scope"=>"tool"),"expand-speed"=>array("id"=>"expand-speed","group"=>"Effects","order"=>"30","default"=>"500","label"=>"Expand duration (milliseconds: 0-10000)","type"=>"num","scope"=>"tool"),"restore-speed"=>array("id"=>"restore-speed","group"=>"Effects","order"=>"40","default"=>"-1","label"=>"Restore duration (milliseconds: 0-10000, -1: use expand-speed value)","type"=>"num","scope"=>"tool"),"keep-thumbnail"=>array("id"=>"keep-thumbnail","group"=>"Effects","order"=>"80","default"=>"Yes","label"=>"Show/hide thumbnail when image enlarged","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"tool"),"opacity"=>array("id"=>"opacity","group"=>"Effects","order"=>"270","default"=>"50","label"=>"Square opacity","type"=>"num","scope"=>"tool"),"opacity-reverse"=>array("id"=>"opacity-reverse","group"=>"Effects","order"=>"280","default"=>"No","label"=>"Add opacity to background instead of hovered area","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"tool"),"zoom-fade"=>array("id"=>"zoom-fade","group"=>"Effects","order"=>"290","default"=>"No","label"=>"Zoom window fade effect","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"tool"),"zoom-fade-in-speed"=>array("id"=>"zoom-fade-in-speed","group"=>"Effects","order"=>"300","default"=>"200","label"=>"Zoom window fade-in speed (in milliseconds)","type"=>"num","scope"=>"tool"),"zoom-fade-out-speed"=>array("id"=>"zoom-fade-out-speed","group"=>"Effects","order"=>"310","default"=>"200","label"=>"Zoom window fade-out speed  (in milliseconds)","type"=>"num","scope"=>"tool"),"fps"=>array("id"=>"fps","group"=>"Effects","order"=>"320","default"=>"25","label"=>"Frames per second for zoom effect","type"=>"num","scope"=>"tool"),"smoothing"=>array("id"=>"smoothing","group"=>"Effects","order"=>"330","default"=>"Yes","label"=>"Enable smooth zoom movement","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"tool"),"smoothing-speed"=>array("id"=>"smoothing-speed","group"=>"Effects","order"=>"340","default"=>"40","label"=>"Speed of smoothing (1-99)","type"=>"num","scope"=>"tool"),"link-to-product-page"=>array("id"=>"link-to-product-page","group"=>"Miscellaneous","order"=>"10","default"=>"Yes","label"=>"Link enlarged image to the product page","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"profile"),"use-original-vm-thumbnails"=>array("id"=>"use-original-vm-thumbnails","group"=>"Miscellaneous","order"=>"20","default"=>"No","label"=>"Use original VirtueMart thumbnails?","description"=>"If thumbnail for product does not exists in VirtueMart then this option will be ignored","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"profile"),"show-message"=>array("id"=>"show-message","group"=>"Miscellaneous","order"=>"370","default"=>"Yes","label"=>"Show message under image?","type"=>"array","subType"=>"radio","values"=>array("Yes","No")),"message"=>array("id"=>"message","group"=>"Miscellaneous","order"=>"380","default"=>"Move your mouse over image or click to enlarge","label"=>"Message under images","type"=>"text"),"imagemagick"=>array("id"=>"imagemagick","group"=>"Miscellaneous","order"=>"550","default"=>"auto","label"=>"Path to Imagemagick binaries (convert tool)","description"=>"You can set 'auto' to automatically detect imagemagick location or 'off' to disable imagemagick and use php GD lib instead","type"=>"text","scope"=>"profile"),"image-quality"=>array("id"=>"image-quality","group"=>"Miscellaneous","order"=>"560","default"=>"100","label"=>"Quality of thumbnails and watermarked images","type"=>"num","scope"=>"profile"),"use-original-file-names"=>array("id"=>"use-original-file-names","group"=>"Miscellaneous","order"=>"565","default"=>"No","label"=>"Whether to use original file name for cached images","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"profile"),"background-opacity"=>array("id"=>"background-opacity","group"=>"Background","order"=>"10","default"=>"0","label"=>"Opacity of the background effect (0-100)","type"=>"num","scope"=>"tool"),"background-color"=>array("id"=>"background-color","group"=>"Background","order"=>"20","default"=>"#000000","label"=>"Fade background color (RGB)","type"=>"text","scope"=>"tool"),"background-speed"=>array("id"=>"background-speed","group"=>"Background","order"=>"30","default"=>"200","label"=>"Speed of the fade effect (milliseconds: 0 or larger)","type"=>"num","scope"=>"tool"),"buttons"=>array("id"=>"buttons","group"=>"Buttons","order"=>"10","default"=>"show","label"=>"Whether to show navigation buttons","type"=>"array","subType"=>"radio","values"=>array("show","hide","autohide"),"scope"=>"tool"),"buttons-display"=>array("id"=>"buttons-display","group"=>"Buttons","order"=>"20","default"=>"previous, next, close","label"=>"Display button","type"=>"text","description"=>"Show all three buttons or just one or two. E.g. 'previous, next' or 'close, next'","scope"=>"tool"),"buttons-position"=>array("id"=>"buttons-position","group"=>"Buttons","order"=>"30","default"=>"auto","label"=>"Location of navigation buttons","type"=>"array","subType"=>"radio","values"=>array("auto","top left","top right","bottom left","bottom right"),"scope"=>"tool"),"slideshow-effect"=>array("id"=>"slideshow-effect","group"=>"Expand mode","order"=>"10","default"=>"dissolve","label"=>"Visual effect for switching images","type"=>"array","subType"=>"radio","values"=>array("dissolve","fade","expand"),"scope"=>"tool"),"slideshow-loop"=>array("id"=>"slideshow-loop","group"=>"Expand mode","order"=>"20","default"=>"Yes","label"=>"Restart slideshow after last image","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"tool"),"slideshow-speed"=>array("id"=>"slideshow-speed","group"=>"Expand mode","order"=>"30","default"=>"800","label"=>"Speed of slideshow effect (milliseconds: 0 or larger)","type"=>"num","scope"=>"tool"),"z-index"=>array("id"=>"z-index","group"=>"Expand mode","order"=>"40","default"=>"10001","label"=>"The z-index for the enlarged image","type"=>"num"),"keyboard"=>array("id"=>"keyboard","group"=>"Expand mode","order"=>"50","default"=>"Yes","label"=>"Ability to use keyboard shortcuts","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"tool"),"keyboard-ctrl"=>array("id"=>"keyboard-ctrl","group"=>"Expand mode","order"=>"60","default"=>"No","label"=>"Require Ctrl key to permit shortcuts","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"tool"),"watermark"=>array("id"=>"watermark","group"=>"Watermark","order"=>"10","default"=>"","label"=>"Path to watermark image","description"=>"Relative for site base path. Use empty to disable watermark","type"=>"text","scope"=>"profile"),"watermark-max-width"=>array("id"=>"watermark-max-width","group"=>"Watermark","order"=>"20","default"=>"50%","label"=>"Maximum width of watermark image","description"=>"pixels (fixed size) or percent (relative for image size)","type"=>"text","scope"=>"profile"),"watermark-max-height"=>array("id"=>"watermark-max-height","group"=>"Watermark","order"=>"21","default"=>"50%","label"=>"Maximum height watermark image","description"=>"pixels (fixed size) or percent (relative for image size)","type"=>"text","scope"=>"profile"),"watermark-opacity"=>array("id"=>"watermark-opacity","group"=>"Watermark","order"=>"40","default"=>"50","label"=>"Opacity of the watermark image","description"=>"0-100","type"=>"num","scope"=>"profile"),"watermark-position"=>array("id"=>"watermark-position","group"=>"Watermark","order"=>"50","default"=>"center","label"=>"Position of the watermark","description"=>"'watermark-size' will ignore when 'watermark-position' sets to 'stretch'","type"=>"array","subType"=>"select","values"=>array("top","right","bottom","left","top-left","bottom-left","top-right","bottom-right","center","stretch"),"scope"=>"profile"),"watermark-offset-x"=>array("id"=>"watermark-offset-x","group"=>"Watermark","order"=>"60","default"=>"0","label"=>"Watermark horizontal offset","description"=>"Offset from left and/or right image borders. Pixels (fixed size) or percent (relative for image size)","type"=>"text","scope"=>"profile"),"watermark-offset-y"=>array("id"=>"watermark-offset-y","group"=>"Watermark","order"=>"70","default"=>"0","label"=>"Watermark vertical offset","description"=>"Offset from top and/or bottom image borders. Pixels (fixed size) or percent (relative for image size)","type"=>"text","scope"=>"profile"),"scroll-style"=>array("id"=>"scroll-style","group"=>"Scroll","order"=>"5","default"=>"default","label"=>"Style","type"=>"array","subType"=>"radio","values"=>array("default","with-borders"),"scope"=>"profile"),"loop"=>array("id"=>"loop","group"=>"Scroll","order"=>"10","default"=>"continue","label"=>"Restart scroll after last image","description"=>"Continue to next image or scroll all the way back","type"=>"array","subType"=>"radio","values"=>array("continue","restart"),"scope"=>"MagicScroll"),"speed"=>array("id"=>"speed","group"=>"Scroll","order"=>"20","default"=>"5000","label"=>"Scroll speed","description"=>"Change the scroll speed in miliseconds (0 = manual)","type"=>"num","scope"=>"MagicScroll"),"width"=>array("id"=>"width","group"=>"Scroll","order"=>"30","default"=>"0","label"=>"Scroll width (pixels)","description"=>"0 - auto","type"=>"num","scope"=>"MagicScroll"),"height"=>array("id"=>"height","group"=>"Scroll","order"=>"40","default"=>"0","label"=>"Scroll height (pixels)","description"=>"0 - auto","type"=>"num","scope"=>"MagicScroll"),"item-width"=>array("id"=>"item-width","group"=>"Scroll","order"=>"50","default"=>"0","label"=>"Scroll item width (pixels)","description"=>"0 - auto","type"=>"num","scope"=>"MagicScroll"),"item-height"=>array("id"=>"item-height","group"=>"Scroll","order"=>"60","default"=>"0","label"=>"Scroll item height (pixels)","description"=>"0 - auto","type"=>"num","scope"=>"MagicScroll"),"step"=>array("id"=>"step","group"=>"Scroll","order"=>"70","default"=>"3","label"=>"Scroll step","type"=>"num","scope"=>"MagicScroll"),"items"=>array("id"=>"items","group"=>"Scroll","order"=>"80","default"=>"3","label"=>"Items to show","description"=>"0 - manual","type"=>"num","scope"=>"MagicScroll"),"arrows"=>array("id"=>"arrows","group"=>"Scroll Arrows","order"=>"10","default"=>"outside","label"=>"Show arrows","label"=>"Where arrows should be placed","type"=>"array","subType"=>"radio","values"=>array("outside","inside","false"),"scope"=>"MagicScroll"),"arrows-opacity"=>array("id"=>"arrows-opacity","group"=>"Scroll Arrows","order"=>"20","default"=>"60","label"=>"Opacity of arrows (0-100)","type"=>"num","scope"=>"MagicScroll"),"arrows-hover-opacity"=>array("id"=>"arrows-hover-opacity","group"=>"Scroll Arrows","order"=>"30","default"=>"100","label"=>"Opacity of arrows on mouse over (0-100)","type"=>"num","scope"=>"MagicScroll"),"slider-size"=>array("id"=>"slider-size","group"=>"Scroll Slider","order"=>"10","default"=>"10%","label"=>"Slider size (numeric or percent)","type"=>"text","scope"=>"MagicScroll"),"slider"=>array("id"=>"slider","group"=>"Scroll Slider","order"=>"20","default"=>"false","label"=>"Slider postion","type"=>"array","subType"=>"radio","values"=>array("top","right","bottom","left","false"),"scope"=>"MagicScroll"),"direction"=>array("id"=>"direction","group"=>"Scroll effect","order"=>"10","default"=>"right","value"=>"bottom","label"=>"Direction of scroll","type"=>"array","subType"=>"radio","values"=>array("top","right","bottom","left"),"scope"=>"MagicScroll"),"duration"=>array("id"=>"duration","group"=>"Scroll effect","order"=>"20","default"=>"1000","label"=>"Duration of effect (miliseconds)","type"=>"num","scope"=>"MagicScroll"));
            $params = array_merge($params, array(
                'disable-expand' => array(
                    'label' => 'Disable expand effect',
                    'id' => 'disable-expand',
                    'scope' => 'tool',
                    'default' => 'No',
                    'value' => 'No',
                    'type' => 'text'
                ),
                'disable-zoom' => array(
                    'label' => 'Disable zoom effect',
                    'id' => 'disable-zoom',
                    'scope' => 'tool',
                    'default' => 'No',
                    'value' => 'No',
                    'type' => 'text'
                )
            ));
            $this->params->appendArray($params);
        }
    }

}
?>
