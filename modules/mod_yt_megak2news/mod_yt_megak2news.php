<?php 
/*------------------------------------------------------------------------
 # Yt Mega K2 News - Version 1.0
 # Copyright (C) 2009-2010 The YouTech Company. All Rights Reserved.
 # @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 # Author: The YouTech Company
 # Websites: http://joomla.ytcvn.com
 -------------------------------------------------------------------------*/


defined( '_JEXEC' ) or die( 'Restricted access' );

require_once (dirname(__FILE__).DS.'helper.php');

jimport("joomla.filesystem.folder");
jimport("joomla.filesystem.file");

/*-- Process---*/
$jquery                         = $params->get("jquery", 0);
$theme                          = $params->get("theme", "theme1");
$background                     = $params->get("background", '#FFFFFF');
$thumb_height                   = $params->get('thumb_height', "200");
$thumb_width                    = $params->get('thumb_width', "200");        
$show_description               = $params->get('show_description', "1");
$description_color              = $params->get('description_color', "#FFFFFF");
$category                       = $params->get('category', 0);
$articles                       = $params->get('articles',0); 
$show_read_more_link 			= $params->get("show_read_more_link",'1');
$read_more_text 				= $params->get("read_more_text", 'read more...'); 
$show_all_items 		    	= $params->get("show_all_items",'1');
$view_all_text					= $params->get("view_all_text", 'view all'); 
$show_description 		    	= $params->get("show_description",'1');
$show_title 					= $params->get("show_title", 1);
$show_image 					= $params->get("show_image",'1'); 
$intro_text 					= $params->get("Intro_text","");
$footer_text 					= $params->get("Footer_text","");    
$target 						= $params->get("target","_self");
$link_image						= $params->get("link_image",1);
$content_box_width 				= $params->get("content_box_width", 760);
$content_box_height				= $params->get("content_box_height", 230);
$sort_order_field				= $params->get("sort_order_field", "c_dsc");
$featured						= $params->get("featured", 1);
$limit_items					= $params->get("limit_items", 3);
$target							= $params->get("target","_self");
$numcols            			= $params->get("numcols", 2);
$num_items            			= $params->get("num_items", 2);
$thumbnail_mode            		= $params->get("thumbnail_mode", 1);
$show_price                     = $params->get('show_price', 0);
$price_color 					= $params->get('price_color', "#8B0000");


    /* Add css*/    
    $browser = new Browser();
	JHTML::stylesheet('style.css', JURI::base() . '/modules/'.$module->module.'/assets/');    
       
    
    if($browser->Name=='msie' && floor($browser->Version)==6)
    {
        JHTML::stylesheet('ie6.css', JURI::base() . '/modules/'.$module->module.'/assets/');        
    }
    else if($browser->Name=='msie' && floor($browser->Version)==7)    
    {
        
        JHTML::stylesheet('ie7.css', JURI::base() . '/modules/'.$module->module.'/assets/');
    }



$items = modK2MegaNewsHelper::process($params, $module);
//var_dump($items); die;
$count_category = count($items);
$width_module = 100;
$width_category = $width_module/$numcols;
$width_normal_content = 100;
$width_item = $width_normal_content/$num_items;

if($num_items>$limit_items){
    $num_items = $limit_items;
}
if($numcols>$count_category){
    $numcols = $count_category;
}

$path = JModuleHelper::getLayoutPath ( 'mod_yt_megak2news',$theme );

if (file_exists ( $path )) {
    require ($path);
}
