<?php 
/*------------------------------------------------------------------------
 # Yt Mega News - Version 1.0
 # ------------------------------------------------------------------------
 # Copyright (C) 2010-2011 The YouTech Company. All Rights Reserved.
 # @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 # Author: The YouTech Company
 # Websites: http://www.ytcvn.com
 -------------------------------------------------------------------------*/
 
 
defined('_JEXEC') or die('Restricted access');
require_once (JPATH_SITE . '/components/com_content/helpers/route.php');
if (! class_exists("modMegaNewsHelper") ) { 


class modMegaNewsHelper {
	var $module_name = '';
	function process($params, $module) {
		
		$enable_cache 		=   $params->get('cache',1);
		$cachetime			=   $params->get('cache_time',0);
		$this->module_name = $module->module;
		
		if($enable_cache==1) {		
			$conf =& JFactory::getConfig();
			$cache = &JFactory::getCache($module->module);
			$cache->setLifeTime( $params->get( 'cache_time', $conf->getValue( 'config.cachetime' ) * 60 ) );
			$cache->setCaching(true);
			$cache->setCacheValidation(true);
			$items =  $cache->get( array('modContentScrollerHelper', 'getList'), array($params, $module));
		} else {
			$items = modMegaNewsHelper::getList($params, $module);
		}
		
		return $items;		
		
	}
	
	
	function getList ($params, $module) {
		require_once (dirname(__FILE__) .DS. 'assets' .DS.'ytc_content.php');
        $content = new YtMegaNews();      
        $content->is_cat_or_sec = $params->get('sec_or_cat', 1);
        if ($content->is_cat_or_sec == 0) {
            $content->cat_or_sec_ids = $params->get('sections', '');
        } else {
            $content->cat_or_sec_ids = $params->get('categories', '');
        }
        $content->limit_articles        = $params->get('limit_articles', 6); 
        $content->sort_order_field 		= $params->get('sort_order_field', "created");
        $content->thumb_height 			= $params->get('thumb_height', "200");
        $content->thumb_width 			= $params->get('thumb_width', "200");                            
        $content->web_url				= JURI::base();
        $content->max_title             = $params->get('limit_title', 25); 
        $content->max_description       = $params->get('max_description', 200);            
        $content->resize_folder 		= JPATH_CACHE.DS. $module->module .DS."images";
        $content->url_to_resize 		= $content->web_url . "cache/". $module->module ."/images/";
        $content->thumbnail_mode		= $params->get('thumbnail_mode', 1);
        $content->count_character 		= $params->get('count_character', 1); 
        $content->read_more_link        = $params->get("read_more_text", '10'); 
        $content->show_title            = $params->get("show_title", 1);
        $content->show_image            = $params->get("show_image", 1); 
        $content->show_read_more_link   = $params->get("show_read_more_link",'1');
        $content->link_image            = $params->get('link_image', 1);  
		$content->featured         		= $params->get("featured", 2);
		$content->customUrl             = $params->get("customUrl", '');
               
		
		$items = $content->getList();
				
		return $items;
	}
    
    function getCategoryName($catId) {
        $catName = '';
        $db = &JFactory::getDBO();
        $sql = "SELECT * FROM #__categories WHERE id = '".$catId."'";
        $db->setQuery($sql);
        $item = $db->loadObject();
      //  var_dump($item); die;
        $catName = $item->title;
        return $catName;
    }
	
	function getcategorylink($catId) {
        $link_category = '';
        $db = &JFactory::getDBO();
        $sql = "SELECT c.* FROM #__categories as c INNER JOIN #__sections AS s ON s.id = c.section WHERE c.id = '".$catId."'";
        $db->setQuery($sql);
        $item = $db->loadObject();
        
	    $link_category = JRoute::_(ContentHelperRoute::getCategoryRoute($item->id, $item->section));
		
        return $link_category;
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

