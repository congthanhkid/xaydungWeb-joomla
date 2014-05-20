<?php
/**
 * @version 1.5.x
 * @package JoomVision Project
 * @email webmaster@joomvision.com
 * @copyright (C) 2008 http://www.JoomVision.com. All rights reserved.
 */
// no direct access
defined ( '_JEXEC' ) or die ( 'Restricted access' );
$user = &JFactory::getUser ();
$db = &JFactory::getDBO ();
require_once (JPATH_SITE . DS . 'components' . DS . 'com_content' . DS . 'helpers' . DS . 'route.php');
if(is_dir(JPATH_SITE.DS.'components'.DS.'com_k2')){
	require_once (JPATH_SITE.DS.'components'.DS.'com_k2'.DS.'helpers'.DS.'route.php');
	require_once (JPATH_SITE.DS.'components'.DS.'com_k2'.DS.'helpers'.DS.'utilities.php');
}
class JVTabsHelper{
	var $params;
	function __construct($params){
		$this->params = $params;
		$this->createdDirThumb();
		$this->createdDirThumb('com_k2');
		$this->createdDirThumb('externallink');
	}

	function createdDirThumb($comp='com_content',$folderImage=''){
		$thumbImgParentFolder = JPATH_BASE.DS.'images'.DS.'stories'.DS.'thumbs'.DS.$comp.$folderImage;
		if(!JFolder::exists($thumbImgParentFolder)){
			JFolder::create($thumbImgParentFolder);
		}
	}
	function getImageSizes($file) {
		return getimagesize($file);
	}

	function checkImage($file) {
		preg_match("/\<img.+?src=\"(.+?)\".+?\/>/", $file, $matches);
		if(count($matches)){
			return $matches[1];
		} else {return '';}
	}
	function FileExists($file) {
		if(file_exists($file))
		return true;
		else
		return false;
	}
	/*
	 * Function get list category of component content
	 * @Created by joomvision
	 */
	function getListContentCategory(){
		$db = & JFactory::getDBO ();
		$categories = $this->params->get('categoryID-list','');
		$results = array();
		if($categories){
			$orderBy = $this->params->get('category_ordering');
			if($orderBy == 1) {
				$ordering = " ORDER BY title ASC";
			} else if($orderBy == 2){
				$ordering = " ORDER BY title DESC";
			} else if($orderBy == 3){
				$ordering = " ORDER BY ordering DESC";
			} else {
				$ordering = " ORDER BY ordering ASC";
			}
			$sql ="SELECT id,title,section
					 FROM #__categories AS c 
					 WHERE c.published = 1  AND id IN (".$categories.") ".$ordering;
			$db->setQuery($sql);
			$results = $db->loadObjectList();
			return $results;
		}
	}
	//End function get list category

	/*
	 * Function get list article of each category by component content
	 * @Created by joomvision
	 */
	function getListContentArticle(&$listCats){
		$db = & JFactory::getDBO ();
		$listCats = $this->getListContentCategory();//Get list content category
		$thumbSize = $this->params->get('thumb_size',50);
		$imgWidth = $this->params->get('thumb_width');
		$imgHeight = $this->params->get	('thumb_height');
		$isIntro = $this->params->get('categoryID-view');
		$listArticles = array();
		if(count($listCats)){
			$i=0;
			$introLength = intval($this->params->get( 'intro_length', 200) );
			$nullDate   = $db->getNullDate();
			$date =& JFactory::getDate();
			$now = $date->toMySQL();
			$count = $this->params->get('categoryID-maxItem');
			$where  = 'a.state = 1'
			. ' AND ( a.publish_up = '.$db->Quote($nullDate).' OR a.publish_up <= '.$db->Quote($now).' )'
			. ' AND ( a.publish_down = '.$db->Quote($nullDate).' OR a.publish_down >= '.$db->Quote($now).' )';
			foreach($listCats as $cat){
				// Ordering
				//$ordering       = 'a.created DESC';
				switch ($this->params->get('categoryID-ordering')) {
					case 'm_dsc' :
						$ordering = 'a.modified DESC, a.created DESC';
						break;
					case 'c_dsc' :
						$ordering = ' a.ordering ';
						break;
					default :
						$ordering = ' a.ordering';
						break;
				}
				$query = 'SELECT a.*,a.id as key1, cc.id as key2, cc.title as cat_title, ' .
		            	' CASE WHEN CHAR_LENGTH(a.alias) THEN CONCAT_WS(":", a.id, a.alias) ELSE a.id END as slug,'.
			            ' CASE WHEN CHAR_LENGTH(cc.alias) THEN CONCAT_WS(":", cc.id, cc.alias) ELSE cc.id END as catslug'.
			            ' FROM #__content AS a' .             
			            ' INNER JOIN #__categories AS cc ON cc.id = a.catid' .
			            ' INNER JOIN #__sections AS s ON s.id = a.sectionid' .
			            ' WHERE '. $where .' AND s.id > 0' .		
			            ' AND s.published = 1 AND cc.id='.$cat->id.
			            ' AND cc.published = 1' .
			            ' ORDER BY '. $ordering;		
				$db->setQuery($query, 0, $count);
				$rows = $db->loadObjectList();
				$lists = array();
				$j = 0;
				if(count($rows)){
					foreach($rows as $row) {
						$folderImg = DS.$row->id;
						$this->createdDirThumb('com_content',$folderImg);
						$lists[$j]->id = $row->id;
						$lists[$j]->title = $row->title;
						$lists[$j]->link = JRoute::_(ContentHelperRoute::getArticleRoute($row->slug, $row->catslug, $row->sectionid));
						$lists[$j]->thumb = '';
						if($isIntro !='word_count') {
							if($isIntro == 'introtext') {
								$tagHtml = $row->introtext;
								$tagPos = JString::strpos( $tagHtml, '<hr id="system-readmore"/>');
								if($tagPos){
									$tagHtml = substr($tagHTml,0,(int)$tagPos - 1);
								}
								$lists[$j]->introtext = $tagHtml;
							} else {
								$lists[$j]->introtext = $row->introtext;
							}
						} else {
							$lists[$j]->introtext = $this->introContent($row->introtext,$introLength);
							if($this->checkImage($row->introtext)) $lists[$j]->thumb = $this->getThumb($row->introtext,$imgWidth,$imgHeight,false,$row->id,'com_content');
						}
						$lists[$j]->created = $row->created;
						$j++;
					}
				}
				$listArticles[$i] = $lists;
				$i++;
			}
		}
		return $listArticles;
	}
	//End get list article component content

	/*
	 * Function get list k2 category
	 * @Created by joomvision
	 */
	function getListK2Categories(){
		$db = & JFactory::getDBO ();
		$categories = $this->params->get('k2_category','');
		$results = array();
		if($categories){
			$orderBy = $this->params->get('category_ordering');
			if($orderBy == 1) {
				$ordering = " ORDER BY name ASC";
			} else if($orderBy == 2){
				$ordering = " ORDER BY name DESC";
			} else if($orderBy == 3){
				$ordering = " ORDER BY name DESC";
			} else {
				$ordering = " ORDER BY name ASC";
			}
			$sql ="SELECT id,name AS title
					 FROM #__k2_categories AS c  
					 WHERE c.published = 1  AND c.trash = 0 AND id IN (".$categories.") ".$ordering;
			$db->setQuery($sql);
			$results = $db->loadObjectList();
			return $results;
		}
	}
	//End get list k2 category

	/*
	 * Function get list items of each category by k2 content
	 * @Created by joomvision
	 */
	function getListK2Items(&$listCats){
		$db	=& JFactory::getDBO();
		$listCats = $this->getListK2Categories();
		$imgWidth = $this->params->get('thumb_width');
		$imgHeight = $this->params->get	('thumb_height');
		$isIntro = $this->params->get('categoryID-view');
		$listArticles = array();
		if(count($listCats)){
			$i = 0;
			$introLength = intval($this->params->get( 'intro_length', 200) );
			$count = $this->params->get('categoryID-maxItem');
			$date = & JFactory::getDate ();
			$user = & JFactory::getUser ();
			$aid = $user->get ( 'aid', 0 );
			$now = $date->toMySQL ();
			$nullDate = $db->getNullDate ();
			switch ($this->params->get('categoryID-ordering')) {
				case 'm_dsc' :
					$ordering = ' ORDER BY i.modified DESC, i.created DESC';
					break;
				case 'c_dsc' :
					$ordering = ' ORDER BY i.ordering DESC ';
					break;
				default :
					$ordering = ' ORDER BY i.ordering';
					break;
			}
			foreach($listCats as $cat) {//Loop for each category
				$query = "SELECT i.*, c.alias as catalias,i.catid
      					FROM #__k2_items AS i 
      					LEFT JOIN #__k2_categories AS c 
      						ON c.id = i.catid
      					WHERE i.published = 1 AND c.id =".$cat->id." AND i.access <={$aid}
				AND i.trash = 0 AND c.access<={$aid} AND c.trash =0
				AND ( i.publish_up = ".$db->Quote($nullDate)." OR i.publish_up <= ".$db->Quote($now)." )
                    	AND ( i.publish_down = ".$db->Quote($nullDate)." OR i.publish_down >= ".$db->Quote($now)." ) ".$ordering;
				$db->setQuery($query, 0, $count);
				$rows = $db->loadObjectList();
				$lists = array();
				$j = 0;
				if(count($rows)){
					foreach($rows as $row) {
						$folderImg = DS.$row->id;
						$this->createdDirThumb('com_k2',$folderImg);
						$lists[$j]->id = $row->id;
						$lists[$j]->title = $row->title;
						$lists[$j]->link = JRoute::_(K2HelperRoute::getItemRoute($row->id.':'.urlencode($row->alias), $row->catid.':'.urlencode($row->catalias)));
						$lists[$j]->created = $row->created;
						$lists[$j]->thumb = '';
						if($isIntro == 'word_count') {
							if($this->checkImage($row->introtext)) {
								$lists[$j]->thumb = $this->getThumb($row->introtext,$imgWidth,$imgHeight,false,$row->id,'com_k2');
							} else {
								$imgFile = 'media/k2/items/cache/'.md5("Image".$row->id).'_XS.jpg';
								if($this->FileExists(JPATH_BASE.DS.$imgFile)) $lists[$j]->thumb = $this->getThumbK2Content($imgFile,$imgWidth,$imgHeight,false,$row->id);
							}
							$lists[$j]->introtext = $this->introContent($row->introtext,$introLength);
						} else {
							if($isIntro == 'introtext'){
								$tagHtml = $row->introtext;
								$tagPos = JString::strpos( $tagHtml, '<hr id="system-readmore"/>');
								if($tagPos){
									$tagHtml = substr($tagHTml,0,(int)$tagPos - 1);
								}
								$lists[$j]->introtext = $tagHtml;
							} else {
								$lists[$j]->introtext = $row->introtext;
							}
						}
						$j++;
					}
				}
				$listArticles[$i] = $lists;
				$i++;
			}
		}
		return $listArticles;
	}
	//End

	/*
	 * Function get intro content
	 * @Created by joomvision
	 */
	function introContent($str, $limit = 100,$end_char = '&#8230;'){
		if (trim($str) == '') return $str;
		// always strip tags for text
		$str = strip_tags($str);
		preg_match('/\s*(?:\S*\s*){'.(int)$limit.'}/', $str, $matches);
		if (strlen($matches[0]) == strlen($str))$end_char = '';
		return rtrim($matches[0]).$end_char;
	}
	/*
	 * Function create thumbnail of image in content
	 * @Created by joomvision
	 */
	function getThumb($text, $tWidth,$tHeight, $reflections=false,$id=0,$isComp='com_content'){
		preg_match("/\<img.+?src=\"(.+?)\".+?\/>/", $text, $matches);
		$paths = array();
		$showbug = true;
		if (isset($matches[1])) {
			$image_path = $matches[1];
			//joomla 1.5 only
			$isInternalLink = $this->isInternalLink($image_path);
			if(!$isInternalLink) {
				$path_parts = pathinfo($image_path);
				$imgName = $path_parts['basename'];
				$internalLink = JPATH_BASE.DS."images".DS."stories".DS."thumbs".DS."externallink".DS.$imgName;
				$this->saveImage($internalLink,$image_path);
				$image_path = "images/stories/thumbs/externallink/".$imgName;
			} else {
				if(!$this->FileExists($image_path)) return '';
			}
			// create a thumb filename
			$file_div = strrpos($image_path,'.');
			$thumb_ext = substr($image_path, $file_div);
			$thumb_prev = substr($image_path, 0, $file_div);
			$thumb_path = '';
			$thumb_path = 'images/stories/thumbs/'.$isComp.'/'.$id.'/jvtabs_'.$tWidth.'x'.$tHeight.$thumb_ext;
			if(file_exists($thumb_path)) @unlink($thumb_path);
			// check to see if this file exists, if so we don't need to create it
			if ($thumb_path !='' && function_exists("gd_info") && !file_exists($thumb_path)) {
				// file doens't exist, so create it and save it
				include_once('thumbnail.inc.php');
				$thumb = new JVThumbnail($image_path);
				if ($thumb->error) {
					if ($showbug)   echo "JV Image ERROR: " . $thumb->errmsg . ": " . $image_path;
					return false;
				}
				//$thumb->resize($size);
				$thumb->resize_image($tWidth,$tHeight);
				if ($reflections) {
					$thumb->createReflection(30,30,60,false);
				}
				if (!is_writable(dirname($thumb_path))) {
					$thumb->destruct();
					return false;
				}
				$thumb->save($thumb_path);
				$thumb->destruct();
			}
			return ($thumb_path);
		} else {
			return false;
		}
	}
	//End create thumbnail

	/*
	 * Function get thumbnail of image k2 component
	 * @Created by joomvision
	 */
	function getThumbK2Content($file, $tWidth,$tHeight, $reflections=false,$id=0){
		$file_div = strrpos($file,'.');
		$thumb_ext = substr($file, $file_div);
		$thumb_path = 'images/stories/thumbs/com_k2/'.$id.'/jvtabs_'.$tWidth.'x'.$tHeight.$thumb_ext;
		if(file_exists($thumb_path)) @unlink($thumb_path);
		// check to see if this file exists, if so we don't need to create it
		if ($thumb_path !='' && function_exists("gd_info") && !file_exists($thumb_path)) {
			// file doens't exist, so create it and save it
			include_once('thumbnail.inc.php');
			$thumb = new JVThumbnail($file);
			if ($thumb->error) {
				if ($showbug)   echo "JV Image ERROR: " . $thumb->errmsg . ": " . $image_path;
				return false;
			}
			//$thumb->resize($size);
			$thumb->resize_image($tWidth,$tHeight);
			if ($reflections) {
				$thumb->createReflection(30,30,60,false);
			}
			if (!is_writable(dirname($thumb_path))) {
				$thumb->destruct();
				return false;
			}
			$thumb->save($thumb_path);
			$thumb->destruct();
		}
		return ($thumb_path);
	}
	//End

	/*
	 * Function parse tab module
	 * @Created by joomvision
	 */
	function parseTabModuleId(&$aryModule){
		$aryResult = array();
		$moduleIds = $this->params->get ( 'moduleID-list', '');
		$modules = & $this->_load ();
		if($moduleIds!=''){
			$aryModule = split ( ",", $moduleIds );
			foreach($modules as $module){
				if((in_array($module->id,$aryModule) && $module)) $aryResult[] = $module;
			}
		}
		return $aryResult;
	}
	//End parse tab module
	function getModuleTitle($aryResult){
		$db = & JFactory::getDBO ();
		foreach($aryResult as $item){
			$sql = "SELECT title FROM #__modules WHERE id=".$item->id;
			$db->setQuery( $sql );
			$rows = $db->loadObjectList();
			$aryModule[] = $rows[0]->title;
		}
		return $aryModule;
	}

	/*
	 * Function check image is internal link or external link
	 * @Created by joomvision
	 */
	function isInternalLink($image_path){
		$full_url = JURI::base();
		//remove any protocol/site info from the image path
		$parsed_url = parse_url($full_url);
		$paths[] = $full_url;
		if (isset($parsed_url['path']) && $parsed_url['path'] != "/") $paths[] = $parsed_url['path'];
		foreach ($paths as $path) {
			if (strpos($image_path,$path) !== false) {
				$image_path = substr($image_path,strpos($image_path, $path)+strlen($path));
			}
		}
		// remove any / that begins the path
		if (substr($image_path, 0 , 1) == '/') $image_path = substr($image_path, 1);
		//if after removing the uri, still has protocol then the image
		//is remote and we don't support thumbs for external images
		if (strpos($image_path,'http://') !== false || strpos($image_path,'https://') !== false) {
			return false;
		}
		return true;
			
	}
	//End check image
	
	/*
	 * Function save image from external link in our server
	 * @Created by joomvision
	 */
	function saveImage($inPath,$outPath){ //Download images from remote server
		$ch = curl_init($outPath);
		$fp = fopen($inPath, 'wb');
		curl_setopt($ch, CURLOPT_FILE, $fp);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_exec($ch);
		curl_close($ch);
		fclose($fp);
	}
	//End save image
	function &_load()
	{
		global $mainframe, $Itemid;

		static $modules;

		if (isset($modules)) {
			return $modules;
		}

		$user	=& JFactory::getUser();
		$db		=& JFactory::getDBO();

		$aid	= $user->get('aid', 0);

		$modules	= array();

		$wheremenu = isset( $Itemid ) ? ' AND ( mm.menuid = '. (int) $Itemid .' OR mm.menuid = 0 )' : '';

		$query = 'SELECT id, IF(title="","","") as title , module, position, content, showtitle, control, params'
		. ' FROM #__modules AS m'
		. ' LEFT JOIN #__modules_menu AS mm ON mm.moduleid = m.id'
		. ' WHERE m.published = 1'
		. ' AND m.access <= '. (int)$aid
		. ' AND m.client_id = '. (int)$mainframe->getClientId()
		. $wheremenu
		. ' ORDER BY position, ordering';
		$db->setQuery( $query );

		if (null === ($modules = $db->loadObjectList())) {
			JError::raiseWarning( 'SOME_ERROR_CODE', JText::_( 'Error Loading Modules' ) . $db->getErrorMsg());
			return false;
		}

		$total = count($modules);
		for($i = 0; $i < $total; $i++)
		{
			//determine if this is a custom module
			$file					= $modules[$i]->module;
			$custom 				= substr( $file, 0, 4 ) == 'mod_' ?  0 : 1;
			$modules[$i]->user  	= $custom;
			// CHECK: custom module name is given by the title field, otherwise it's just 'om' ??
			$modules[$i]->name		= $custom ? $modules[$i]->title : substr( $file, 4 );
			$modules[$i]->style		= null;
			$modules[$i]->position	= strtolower($modules[$i]->position);
		}

		return $modules;
	}
}
?>
