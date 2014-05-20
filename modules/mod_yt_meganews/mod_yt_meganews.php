<?php
/*------------------------------------------------------------------------
 # Yt Mega News - Version 1.0
 # ------------------------------------------------------------------------
 # Copyright (C) 2010-2011 The YouTech Company. All Rights Reserved.
 # @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 # Author: The YouTech Company
 # Websites: http://www.ytcvn.com
 -------------------------------------------------------------------------*/


defined( '_JEXEC' ) or die( 'Restricted access' );

require_once (dirname(__FILE__).DS.'helper.php');

jimport("joomla.filesystem.folder");
jimport("joomla.filesystem.file");

/*-- Process---*/

$jquery 						= $params->get("jquery", 0);
$theme 							= $params->get("theme", 'default');
$thumb_height 					= $params->get('thumb_height', "200");
$thumb_width 					= $params->get('thumb_width', "200");		
$show_description 				= $params->get('show_description', "0");
$link_image						= $params->get('link_image', 1);
$is_cat_or_sec                  = $params->get('sec_or_cat', 0);    
$limit_articles                 = $params->get('limit_articles', 6); 
$max_title                      = $params->get('limit_title', 25);    
$max_description                = $params->get('max_description', 200); 
$read_more_link                 = $params->get("read_more_text", 'read more...'); 
$view_all						= $params->get("view_all", 'view all'); 
$show_title                     = $params->get("show_title", 1);
$show_image                     = $params->get("show_image",1); 
$show_read_more_link            = $params->get("show_read_more_link",'1');
$show_all_articles    			= $params->get("show_all_articles",'1');
$footer_text           			= $params->get("footer_text",'');
$intro_text           			= $params->get("intro_text",'');
$featured            			= $params->get("featured", 2);
$customUrl            			= $params->get("customUrl", '');
$target            				= $params->get("target", '_self');
$numcols            			= $params->get("numcols", 2);
$num_items            			= $params->get("num_items", 2);
$thumbnail_mode            		= $params->get("thumbnail_mode", 1);
$limit_items					= $params->get("limit_items", 6);

     /* Add css*/    
    $browser = new Browser();
    /* Add css*/    
    JHTML::stylesheet('style.css',JURI::base() . 'modules/'.$module->module.'/assets/');
       
    if($browser->Name=='msie' && floor($browser->Version)==6)
    {
        JHTML::stylesheet('ie6.css', JURI::base() . '/modules/'.$module->module.'/assets/');        
    }
    else if($browser->Name=='msie' && floor($browser->Version)==7)    
    {
        JHTML::stylesheet('ie7.css', JURI::base() . '/modules/'.$module->module.'/assets/');
    } 
 
	
$items = modMegaNewsHelper::process($params, $module);
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
$path = JModuleHelper::getLayoutPath( 'mod_yt_meganews', $theme );
if (file_exists($path)) {
	require($path);
}
?>
