<?php
/*------------------------------------------------------------------------
# Yt Content SlideShow II - Version 1.0
# Copyright (C) 2009-2010 The YouTech Company. All Rights Reserved.
# @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Author: The YouTech Company
# Websites: http://joomla.ytcvn.com
-------------------------------------------------------------------------*/
?>
<?php
defined('_JEXEC') or die('Restricted access');
jimport( 'joomla.application.component.helper' );
if (! class_exists("modContentSlideShowHelper") ) { 
require_once (dirname(__FILE__) .DS. 'assets' .DS.'ytc_content_slide_ii.php');

class modContentSlideShowHelper {
	var $module_name = '';
	function process($params, $module) {
		
		$enable_cache 		=   $params->get('cache',1);
		$cachetime			=   $params->get('cache_time',0);
		//$this->module_name = $module->module;
		
		if($enable_cache==1) {		
			$conf =& JFactory::getConfig();
			$cache = &JFactory::getCache($module->module);
			$cache->setLifeTime( $params->get( 'cache_time', $conf->getValue( 'config.cachetime' ) * 60 ) );
			$cache->setCaching(true);
			//$cache->setCacheValidation(true);
			$items =  $cache->get( array('modContentSlideShowHelper', 'getList'), array($params, $module));
		} else {
			$items = modContentSlideShowHelper::getList($params, $module);
		}
		
		return $items;		
		
	}
	
	
	function getList ($params, $module) {
		
        //echo "<pre>".print_r($params->get('sec_cat_list',0),1);die;
        $content = new YtcContentSlideShowII();
        $content->is_frontpage = $params->get('is_frontpage', 2);
        $content->sec_cat_list = $params->get('sec_cat_list',0);
        $content->featured = $params->get('frontpage',2);
        $content->theme = $params->get("theme", 'default');
        $content->limit = $params->get('total', 5);
        $content->customUrl = $params->get('customUrl', '');
        $content->listIDs = $params->get('itemIds', '');
        $content->sort_order_field = $params->get('sort_order_field', "created");
        $content->thumb_height = $params->get('thumb_height', "150px");
        $content->thumb_width = $params->get('thumb_width', "120px");
        $content->max_main_description		=   $params->get('limit_main_description',25);
        $content->max_normal_description		=   $params->get('limit_normal_description',25);
        $content->small_thumb_height = $params->get('small_thumb_height', "0");
        $content->small_thumb_width = $params->get('small_thumb_width', "0");
        
        $content->web_url = JURI::base();
        $content->max_title        =   $params->get('limittitle',25);
        $content->max_description        =   $params->get('limit_description',25); 
        
        $content->resize_folder = JPATH_CACHE.DS. $module->module .DS."images";
        $content->url_to_resize = $content->web_url . "cache/". $module->module ."/images/";
        $content->imagesource = $params->get('imagesource', 1);
        $content->cropresizeimage = $params->get('cropresizeimage', 1);
         //echo $content->imagesource;die;     
		
		$items = $content->getList();
				
		return $items;
	}
}
			
} 
if(!class_exists('Browser')){
	class Browser
	{
		private $props    = array("Version" => "0.0.0",
									"Name" => "unknown",
									"Agent" => "unknown") ;
	
		public function __Construct()
		{
			$browsers = array("firefox", "msie", "opera", "chrome", "safari",
								"mozilla", "seamonkey",    "konqueror", "netscape",
								"gecko", "navigator", "mosaic", "lynx", "amaya",
								"omniweb", "avant", "camino", "flock", "aol");
	
			$this->Agent = strtolower($_SERVER['HTTP_USER_AGENT']);
			foreach($browsers as $browser)
			{
				if (preg_match("#($browser)[/ ]?([0-9.]*)#", $this->Agent, $match))
				{
					$this->Name = $match[1] ;
					$this->Version = $match[2] ;
					break ;
				}
			}
		}
	
		public function __Get($name)
		{
			if (!array_key_exists($name, $this->props))
			{
				die("No such property or function {$name}");
			}
			return $this->props[$name] ;
		}
	
		public function __Set($name, $val)
		{
			if (!array_key_exists($name, $this->props))
			{
				SimpleError("No such property or function.", "Failed to set $name", $this->props);
				die;
			}
			$this->props[$name] = $val ;
		}
	
	} 
}	
?>

