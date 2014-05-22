<?php
/*------------------------------------------------------------------------
# Yt Content SlideShow II - Version 1.0
# Copyright (C) 2009-2010 The YouTech Company. All Rights Reserved.
# @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Author: The YouTech Company
# Websites: http://www.ytcvn.com
-------------------------------------------------------------------------*/
?>
<?php

defined( '_JEXEC' ) or die( 'Restricted access' );

require_once (dirname(__FILE__).DS.'helper.php');

jimport("joomla.filesystem.folder");
jimport("joomla.filesystem.file");

/*-- Process---*/
$intro 							= $params->get("intro", 0);
$note 							= $params->get("note", 0);
$start							= $params->get("start", 1);
$target 						= $params->get("target", '');
$jquery 						= $params->get("jquery", 0);
$total                          = $params->get("total",1);
$play 							= $params->get("play", 'true');
$theme 							= $params->get("theme", 'default');
$effect 						= $params->get("effect", 'fade');
$slideshow_speed 				= $params->get("slideshow_speed", 800);
$timer_speed 					= $params->get("timer_speed", 4000);
$opacity_main                   = $params->get("opacity_main", 0.7);
$start_clock_on_mouseOut 		= $params->get("start_clock_on_mouseOut", 'true');
$start_clock_on_mouseOutAfter 	= $params->get("start_clock_on_mouseOutAfter", 3000);
$caption_animation_speed 		= $params->get("caption_animation_speed", 800);
$main_background 				= $params->get("main_background", '#000000');
$main_color 				    = $params->get("main_color", '#FFFFFF');
$title_color 					= $params->get("title_color", '#FFFFFF');
$title_active_color 			= $params->get("title_active_color", '#FFFFFF');
$normal_description_color       = $params->get("normal_description_color", '#FFFFFF');
$normal_desc_active_color       = $params->get("normal_description_active_color", '#FFFFFF');
$normal_background              = $params->get("normal_background", '#2c0da0');
$normal_active_background       = $params->get("normal_active_background", '#2c0da0');
$prenext_show 					= $params->get("prenext_show", 1);
$caption_show 					= $params->get("caption_show", 'true');
$thumb_height 					= $params->get('thumb_height', "940");
$thumb_width 					= $params->get('thumb_width', "450");
$small_thumb_height 			= $params->get('small_thumb_height', "75");
$small_thumb_width 				= $params->get('small_thumb_width', "55");		
$show_readmore 					= $params->get('show_readmore', "0");
$show_description 				= $params->get('show_description', "0");
$show_normal_image              = $params->get('show_normal_image', "1");
$show_main_image                = $params->get('show_main_image', "1");
$description_color 				= $params->get('description_color', "#FFFFFF");
$link_caption					= $params->get('link_caption', 1);
$link_image						= $params->get('link_image', 1);
$auto_play						= $params->get('auto_play', 1);
$show_img_on_right				= $params->get('show_img_on_right',1);
$button_theme					= $params->get('button_theme','number');
$desc_box_width					= $params->get('desc_box_width','440');
$width_module_slide_ii          = $params->get('width_module_slide_ii','880');
$num_item_per_page              = $params->get('num_item_per_page','4');
$show_readmore_slideii          = $params->get('show_readmore_slideii','1');
$readmore_sliderii              = $params->get('readmore_sliderii');
$show_buttons_slideii           = $params->get('show_buttons_slideii','1');
$show_title_slideshowii         = $params->get('show_title_slideshowii','1');
$show_caption_slide             = $params->get('show_caption_slide','1');
$show_normal_description        = $params->get('show_normal_description','1');

$start--;
$readmore_img = '<div class="readmore_button"><p>'.JText::_('read more ').'</p></div>';


$center = round($thumb_height/2);
$bottom = 220;
$widthIe = 0;
if($center>$bottom)
	$botoom = $center; 

$browser = new Browser();
if($browser->Name=='msie' && floor($browser->Version)==6){$widthIe = 3;}
if (!defined ('CONTENT_SLIDE_SHOW_II')) {
	define ('CONTENT_SLIDE_SHOW_II', 1);
	
	if (!defined ('YTCJQUERY')){
		define('YTCJQUERY', 1);
		JHTML::script('ytc.jquery-1.5.min.js', JURI::base() . '/modules/'.$module->module.'/assets/js/');				
	}
	JHTML::script('script.slideshowii.all.js',JURI::base() . '/modules/'.$module->module.'/assets/js/');
	
	/* Add css*/	
	$browser = new Browser();
    if($browser->Name=='msie' && floor($browser->Version)==7)	
	{
		JHTML::stylesheet('style.css', JURI::base() . '/modules/'.$module->module.'/assets/');
		JHTML::stylesheet('ie7.css', JURI::base() . '/modules/'.$module->module.'/assets/');
	}
	else
	{
		JHTML::stylesheet('style.css', JURI::base() . '/modules/'.$module->module.'/assets/');	
	}
    		
}

$items = modContentSlideShowHelper::process($params, $module);

$count_items = count($items);

$heightItem = ($thumb_height/$num_item_per_page);
$normalHeight = $heightItem - 20;
//echo $normalHeight;die;
if($count_items<$num_item_per_page){
    $count_items = $num_item_per_page;
}
elseif($count_items>=$num_item_per_page){
    $count_items = $count_items;
    $num_item_per_page = $num_item_per_page;
}
if($show_main_image==0 && $show_caption_slide==0){
    if($theme=='theme5'){
        $width_module_slide_ii = $width_module_slide_ii;
        $thumb_width = $thumb_width;
        $thumb_height = $small_thumb_height+10;
    }else{
        $width_module_slide_ii = $width_module_slide_ii-$thumb_width;
        $thumb_width=0;
    }
}
if($count_items > 0 ) {
	if ($count_items > 1) {
			foreach($items as $key=>$item)
			{
				if($key==0)
				{
					$pre = $count_items-1;
					$nex = $key+1;
				} 
				elseif(($key+1)==$count_items)
				{
					$pre = $key-1;
					$nex = 0;
				}
				else
				{
					$pre = $key-1;
					$nex = $key+1;
				}
				
				
			}

		} else {
			$items[0]['pre'] = "";
		$items[0]['nex'] = "";
		}
}

$docs = JFactory::getDocument();
$docs->addStyleDeclaration(
    '.caption_opacity_theme3_'.$module->id.'{bottom:'.$thumb_height.'px;
    }
    .button_img_'.$module->id.'{background:'.$normal_background.';color:'.$normal_description_color.'!important;
    }
    .button_img_selected_'.$module->id.'{z-index:2000;background:'.$normal_active_background.'!important;color:'.$normal_desc_active_color.'!important
    }
    .button_img_selected_'.$module->id.' .yt_post_item_multi_'.$module->id.' .yt_item_title a{color:'.$title_active_color.'!important;z-index:2000;
    }
    div.caption_content_'.$module->id.'{opacity:'.$opacity_main.'!important;filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=70);-MS-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=80)";
    }
    .button_img_theme5_'.$module->id.'{color:'.$normal_description_color.'!important;opacity: 0.5;filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=70);-MS-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=80)";
    }
    .button_img_selected_theme5_'.$module->id.'{color:'.$normal_desc_active_color.'!important;opacity: 1;
    }
    .button_img_selected_theme5_'.$module->id.' .yt_post_item .yt_item_title a{color:'.$title_active_color.'!important;
    }
    div.yt_post_item div.yt_item_title a{color:'.$title_color.'!important;
    }
    div.yt_item_content div.yt_post_item{background: #FFFFFF !important;}'					   
);


$path = JModuleHelper::getLayoutPath( 'mod_yt_content_slideshowii', $theme );
if (file_exists($path)) {
	require($path);
}
?>
