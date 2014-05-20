<?php 
/*------------------------------------------------------------------------
 # Yt Mega K2 News - Version 1.0
 # Copyright (C) 2009-2010 The YouTech Company. All Rights Reserved.
 # @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 # Author: The YouTech Company
 # Websites: http://joomla.ytcvn.com
 -------------------------------------------------------------------------*/
 
 
defined('_JEXEC') or die('Restricted access');
require_once (JPATH_SITE . '/components/com_content/helpers/route.php');
if (! class_exists("modK2MegaNewsHelper") ) { 
require_once (dirname(__FILE__) .DS. 'assets' .DS.'ytc_k2_mega_news.php');

class modK2MegaNewsHelper {
	
	function process($params, $module) {
		
		$enable_cache 		=   $params->get('cache',1);
		$cachetime			=   $params->get('cache_time',0);		
		
		if($enable_cache==1) 
        {	$conf =& JFactory::getConfig();
			$cache = &JFactory::getCache($module->module);
			$cache->setLifeTime( $params->get( 'cache_time', $conf->getValue( 'config.cachetime' ) * 60 ) );
			$cache->setCaching(true);
			$cache->setCacheValidation(true);
			$items =  $cache->get( array('modK2MegaNewsHelper', 'getList'), array($params, $module));
		} else {
			    $items = modK2MegaNewsHelper::getList($params, $module);
		        }
		
		return $items;		
		
	    }
	
	
	function getList ($params, $module) {
		
		/* for K2mart */
		$vm_installed = 0;
		if (file_exists(JPath::clean(JPATH_SITE.'/components/com_virtuemart/virtuemart_parser.php'))) {
			$vm_installed = 1;			 
		} 
		
		$content = new YtcK2MegaNews();
		$content->featured 				= $params->get('featured', 1);
		$content->showtype 				= $params->get('showtype', 1);
		$content->category 				= $params->get('category', 0);
        $content->article  				= $params->get('articles',0);  
		$content->listIDs 				= $params->get('itemIds', '');	
        $content->itemTitle 			= $params->get('itemTitle',1);
		$content->sort_order_field 		= $params->get('sort_order_field', "c_dsc");
		$content->thumb_height 			= $params->get('thumb_height', "200px");
		$content->thumb_width 			= $params->get('thumb_width', "200px");   		         
		$content->small_thumb_height 	= $params->get('small_thumb_height', "0");
		$content->small_thumb_width		= $params->get('small_thumb_width', "0");		
		$content->web_url 				= JURI::base();
		$content->max_title				= $params->get('limit_title', 25);
        $content->count_character		= $params->get('count_character', 0);        
		$content->description_max		= $params->get('Description_max', 50); 		
		$content->resize_folder 		= JPATH_CACHE.DS. $module->module .DS."images";
		$content->url_to_resize 		= $content->web_url . "cache/". $module->module ."/images/";
		$content->cropresizeimage		= $params->get('cropresizeimage', 1);
		$content->show_description		= $params->get('show_description', 1);  
        $content->customUrl  			= $params->get('customUrl', "http://");			
		$content->limit_items			= $params->get("limit_items", 6);			
		$content->thumbnail_mode       	= $params->get("thumbnail_mode", 1);
		$content->vm_installed       	= $vm_installed;
		$content->show_price       		= $params->get('show_price', 0);
        $items 							= $content->getList($module);
				
		return $items;
       // var_dump($items); die;
	}
    
    function getCategoryName($catId) {
        $catName = '';
        $db = &JFactory::getDBO();
        $sql = "SELECT * FROM #__k2_categories WHERE id = '".$catId."'";
        $db->setQuery($sql);
        $item = $db->loadObject();
        // var_dump($item); die;
        $catName = $item->name;
        return $catName;
    }
	function getcategorylink($catId) {
        $link_category = '';        
	    $link_category = JRoute::_(K2HelperRoute::getCategoryRoute($catId));
		
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

