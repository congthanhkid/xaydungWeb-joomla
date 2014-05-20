<?php
/**
* @version 1.5.x
* @package JoomVision Project
* @email webmaster@joomvision.com
* @copyright (C) 2008 http://www.JoomVision.com. All rights reserved.
*/
// no direct access
defined('_JEXEC') or die('Restricted access');

$user 		= &JFactory::getUser();
$db 		= &JFactory::getDBO();
$menu 		= &JSite::getMenu();
$document	= &JFactory::getDocument();
		
//..Adding Css to Header
JHTML::_('stylesheet','style.css','modules/mod_jv_contenfusion/assets/css/');
if($params->get('slide')) :
JHTML::_('script','iCarousel.js','modules/mod_jv_contenfusion/assets/js/');
endif;
if($params->get('tooltips')) :
JHTML::_('script','tooltip.js','modules/mod_jv_contenfusion/assets/js/');
endif;


//... These params I get from the author of Phoca Gallery, no need in this module. Leave them as default ...........
$moduleclass_sfx = $params->get( 'moduleclass_sfx', 0 );

require_once (JPATH_SITE.DS.'components'.DS.'com_content'.DS.'helpers'.DS.'route.php');

class modJVContenFusionHelper
{
	function grabData($source_to_grab, $delimiter_start, $delimiter_stop, $str_to_replace='', $str_replace='', $extra_data='')
	{
		$result='';
		$fd = "";
		$start_pos = $end_pos = 0;
		$source_to_grab = $source_to_grab;
		while(true)
		{
			if($end_pos > $start_pos)
			{
				$result = substr($fd, $start_pos, $end_pos-$start_pos);
				$result .= $delimiter_stop;
				break;
			}//10
			$data = @fread($source_to_grab, 8192);
			//echo $data;
			if(strlen($data) == 0) break;
			$fd .= $data;
			if(!$start_pos) $start_pos = strpos($fd, $delimiter_start);
			if($start_pos) $end_pos = strpos(substr($fd, $start_pos), $delimiter_stop) + $start_pos;
		}
		//echo $result;
		return str_replace($str_to_replace, $str_replace, $extra_data.$result);
	}

	function getSlideContent(&$params,$moduleid)
	{
		global $mainframe;

		$db			=& JFactory::getDBO();
		$user		=& JFactory::getUser();
		$userId		= (int) $user->get('id');

		$intro_lenght = intval($params->get( 'intro_lenght', 200) );
		$count		= (int) $params->get('count', 0);
		$catid		= trim( $params->get('catid') );
		$show_front	= $params->get('show_front', 1);
		$aid		= $user->get('aid', 0);

		$content	= $params->get('content');		
		$showthumb	= $params->get('showthumb');
		$thumbsize	= $params->get('thumbsize');
		$htmltag	= $params->get('htmltag');

		$contentConfig = &JComponentHelper::getParams( 'com_content' );
		$access		= !$contentConfig->get('shownoauth');

		$nullDate	= $db->getNullDate();

		$date =& JFactory::getDate();
		$now = $date->toMySQL();

		$where		= 'a.state = 1'
			. ' AND ( a.publish_up = '.$db->Quote($nullDate).' OR a.publish_up <= '.$db->Quote($now).' )'
			. ' AND ( a.publish_down = '.$db->Quote($nullDate).' OR a.publish_down >= '.$db->Quote($now).' )'
			;

		// User Filter
		switch ($params->get( 'user_id' ))
		{
			case 'by_me':
				$where .= ' AND (created_by = ' . (int) $userId . ' OR modified_by = ' . (int) $userId . ')';
				break;
			case 'not_me':
				$where .= ' AND (created_by <> ' . (int) $userId . ' AND modified_by <> ' . (int) $userId . ')';
				break;
		}

		// Ordering
		$ordering		= 'a.id DESC';

		if ($catid)
		{
			$ids = explode( ',', $catid );
			JArrayHelper::toInteger( $ids );
			$catCondition = ' AND (cc.id=' . implode( ' OR cc.id=', $ids ) . ')';
		}
		$show_readmore_link = false;
		$catidcount = count(explode( ',', $catid ));
		if (($catidcount==1) && ($secidcount==1)) {
			$show_readmore_link = true;
		}
		$params->set('show_readmore_link', $show_readmore_link);
		
		// Content Items only

		$query = 'SELECT a.*,a.id as key1, cc.id as key2, cc.title as cat_title, ' .
			' CASE WHEN CHAR_LENGTH(a.alias) THEN CONCAT_WS(":", a.id, a.alias) ELSE a.id END as slug,'.
			' CASE WHEN CHAR_LENGTH(cc.alias) THEN CONCAT_WS(":", cc.id, cc.alias) ELSE cc.id END as catslug'.
			' FROM #__content AS a' .
			($show_front == '0' ? ' LEFT JOIN #__content_frontpage AS f ON f.content_id = a.id' : '') .
			' INNER JOIN #__categories AS cc ON cc.id = a.catid' .
			' WHERE '. $where .' AND (a.introtext LIKE "%<img%" OR a.fulltext LIKE "%<img%")' .
			($access ? ' AND a.access <= ' .(int) $aid. ' AND cc.access <= ' .(int) $aid : '').
			($catid ? $catCondition : '').
			($show_front == '0' ? ' AND f.content_id IS NULL ' : '').
			' AND cc.published = 1' .
			' ORDER BY ' . $ordering;

		$db->setQuery($query, 0, $count);
		$rows = $db->loadObjectList();

		$i		= 0;
		$lists	= array();
		$article_count = count($rows);
		foreach ( $rows as $row )
		{
			$imageurl = modJVContenFusionHelper::checkImage($row->introtext);
			if(modJVContenFusionHelper::FileExists($imageurl)) {
				$lists[$i]->title = $row->title;
				$lists[$i]->alias = $row->alias;
				$lists[$i]->link = JRoute::_(ContentHelperRoute::getArticleRoute($row->slug, $row->catslug, $row->sectionid));
				$lists[$i]->introtext = modJVContenFusionHelper::introContent($row->introtext, $intro_lenght, $htmltag);
				$lists[$i]->thumb = modJVContenFusionHelper::getThumb($imageurl, '_'.$moduleid.'_contenfusion', $thumbsize);
				$image_size = modJVContenFusionHelper::getImageSizes($lists[$i]->thumb);
				if($image_size[0] != $thumbsize) {
					@unlink($lists[$i]->thumb);
					$lists[$i]->thumb = modJVContenFusionHelper::getThumb($imageurl, '_'.$moduleid.'_contenfusion', $thumbsize);
				}
				if(!modJVContenFusionHelper::FileExists($lists[$i]->thumb))
					$lists[$i]->thumb_diff = $imageurl;
				$i++;
			} elseif(modJVContenFusionHelper::FileDifferentExists($imageurl)) {
				$lists[$i]->title = $row->title;
				$lists[$i]->alias = $row->alias;
				$lists[$i]->link = JRoute::_(ContentHelperRoute::getArticleRoute($row->slug, $row->catslug, $row->sectionid));
				$lists[$i]->introtext = modJVContenFusionHelper::introContent($row->introtext, $intro_lenght, $htmltag);
				$lists[$i]->thumb_diff = $imageurl;
				$i++;
			}

		}
		return $lists;

	}

	function getSlideContentK2(&$params,$moduleid) {

		require_once (JPATH_SITE.DS.'components'.DS.'com_k2'.DS.'helpers'.DS.'route.php');
		require_once (JPATH_SITE.DS.'components'.DS.'com_k2'.DS.'helpers'.DS.'utilities.php');

		jimport('joomla.filesystem.file');
		$count = (int) $params->get('count', 0);
		$catid = $params->get('catid', NULL);
		$intro_lenght = intval($params->get( 'intro_lenght', 200) );
		$thumbsize = $params->get('thumbsize');
		$htmltag = $params->get('htmltag');
		$ordering = $params->get('itemsOrdering');
		$componentParams = &JComponentHelper::getParams('com_k2');
		$limitstart = JRequest::getInt('limitstart');

		$user = &JFactory::getUser();
		$aid = $user->get('aid');
		$db = &JFactory::getDBO();

		$jnow = &JFactory::getDate();
		$now = $jnow->toMySQL();
		$nullDate = $db->getNullDate();

		$query = "SELECT i.*, c.name AS categoryname,c.id AS categoryid, c.alias AS categoryalias, c.params AS categoryparams";
		$query .= " FROM #__k2_items as i LEFT JOIN #__k2_categories c ON c.id = i.catid";
		$query .= " WHERE i.published = 1 AND i.access <= {$aid} AND i.trash = 0 AND c.published = 1 AND c.access <= {$aid} AND c.trash = 0";
		$query .= " AND ( i.publish_up = ".$db->Quote($nullDate)." OR i.publish_up <= ".$db->Quote($now)." )";
		$query .= " AND ( i.publish_down = ".$db->Quote($nullDate)." OR i.publish_down >= ".$db->Quote($now)." )";

		if (!is_null($catid)) {
		if (is_array($catid)) {
		  if ($params->get('getChildren')) {
		  
			require_once (JPATH_SITE.DS.'components'.DS.'com_k2'.DS.'models'.DS.'itemlist.php');
			$allChildren = array();
			foreach ($cid as $id) {
			  $categories = K2ModelItemlist::getCategoryChilds($id);
			  $categories[] = $id;
			  $categories = @array_unique($categories);
			  $allChildren = @array_merge($allChildren, $categories);
			}
			
			$allChildren = @array_unique($allChildren);
			$sql = @implode(',', $allChildren);
			$query .= " AND i.catid IN ({$sql})";
			
		  } else {
			$query .= " AND i.catid IN(".implode(',', $cid).")";
		  }
		  
		} else {
		  if ($params->get('getChildren')) {
			require_once (JPATH_SITE.DS.'components'.DS.'com_k2'.DS.'models'.DS.'itemlist.php');
			$categories = K2ModelItemlist::getCategoryChilds($cid);
			$categories[] = $cid;
			$categories = @array_unique($categories);
			$sql = @implode(',', $categories);
			$query .= " AND i.catid IN ({$sql})";
		  } else {
			$query .= " AND i.catid={$cid}";
		  }
		  
		}
		}

		switch ($ordering) {
		
		  case 'date':
			$orderby = 'i.created ASC';
			break;
			
		  case 'rdate':
			$orderby = 'i.created DESC';
			break;
			
		  case 'alpha':
			$orderby = 'i.title';
			break;
			
		  case 'ralpha':
			$orderby = 'i.title DESC';
			break;
			
		  case 'order':
			if ($params->get('FeaturedItems') == '2')
			  $orderby = 'i.featured_ordering';
			else
			  $orderby = 'i.ordering';
			break;
			
		  case 'hits':
			$orderby = 'i.hits DESC';
			break;
			
		  case 'rand':
			$orderby = 'RAND()';
			break;
			
		  case 'best':
			$orderby = 'rating DESC';
			break;
			
		  default:
			$orderby = 'i.id DESC';
			break;
		}

		$query .= " ORDER BY ".$orderby;

		$db->setQuery($query, 0, $count);
		$items = $db->loadObjectList();
		require_once (JPATH_SITE.DS.'components'.DS.'com_k2'.DS.'models'.DS.'item.php');
		$model = new K2ModelItem;

		if (count($items)) {
		
		  foreach ($items as $item) {
		  
			//Images
			
			  if (JFile::exists(JPATH_SITE.DS.'media'.DS.'k2'.DS.'items'.DS.'cache'.DS.md5("Image".$item->id).'_Generic.jpg'))
				$item->imageGeneric = JURI::root().'media/k2/items/cache/'.md5("Image".$item->id).'_Generic.jpg';
				

				$item->thumb = modJVContenFusionHelper::getThumb($item->imageGeneric, '_'.$moduleid.'_contenfusion', $thumbsize);
				$image_size = modJVContenFusionHelper::getImageSizes($item->thumb);
				if($image_size[0] != $thumbsize) {
					@unlink($item->thumb);
					$item->thumb = modJVContenFusionHelper::getThumb($item->imageGeneric, '_'.$moduleid.'_contenfusion', $thumbsize);
				}
				if(!modJVContenFusionHelper::FileExists($item->thumb) && JFile::exists(JPATH_SITE.DS.'media'.DS.'k2'.DS.'items'.DS.'cache'.DS.md5("Image".$item->id).'_XS.jpg'))
					$item->thumb_diff = JURI::root().'media/k2/items/cache/'.md5("Image".$item->id).'_XS.jpg';

			//Read more link
			$item->link = urldecode(JRoute::_(K2HelperRoute::getItemRoute($item->id.':'.urlencode($item->alias), $item->catid.':'.urlencode($item->categoryalias))));
			
			
			//Category link
			if ($params->get('itemCategory'))
			  $item->categoryLink = urldecode(JRoute::_(K2HelperRoute::getCategoryRoute($item->catid.':'.urlencode($item->categoryalias))));
			  
			// Introtext
			$item->introtext = modJVContenFusionHelper::introContent($item->introtext, $intro_lenght, $htmltag);
			
			$rows[] = $item;
		  }
		  
		  return $rows;
		  
		}


	}

	function getImageSizes($file) {
		return getimagesize($file);
	}

    function checkImage($file) {
		preg_match("/\<img.+?src=\"(.+?)\".+?\/>/", $file, $matches);
		return $matches[1];
	}

	function FileExists($file) {
		if(file_exists($file))
			return true;
		else
			return false;
	}

	function FileDifferentExists($file) {
		$check = @fopen($file, "r");
		if(strpos($check, "Resource id") !== false)
			return true;
		else
			return false;
	}

	function getThumb($text, $extraname, $size, $reflections=false) {

		//preg_match("/\<img.+?src=\"(.+?)\".+?\/>/", $text, $matches);
		$matches = $text;
		$paths = array();
		$showbug = true;
		if (isset($matches)) {
			$image_path = $matches;

			//joomla 1.5 only
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
			if (strpos($image_path,'http://') !== false ||
				strpos($image_path,'https://') !== false) {
				return false;
			}
			// create a thumb filename
			$file_div = strrpos($image_path,'.');
			$thumb_ext = substr($image_path, $file_div);
			$thumb_prev = substr($image_path, 0, $file_div);
			$thumb_path =  $thumb_prev . $extraname . $thumb_ext;
			// check to see if this file exists, if so we don't need to create it
			if (function_exists("gd_info") && !file_exists($thumb_path)) {
				// file doens't exist, so create it and save it
				include_once('thumbnail.inc.php');
				$thumb = new Thumbnail($image_path);
				if ($thumb->error) { 
					if ($showbug)	echo "JV Image ERROR: " . $thumb->errmsg . ": " . $image_path; 
					return false;
				}
				$thumb->resize($size);
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

	function introContent( $text, $length=200, $htmltag=0 ) {
		$text = preg_replace( "'<script[^>]*>.*?</script>'si", "", $text );
		$text = preg_replace( '/{.+?}/', '', $text);
		if($htmltag)
			$text = strip_tags(preg_replace( "'<(br[^/>]*?/|hr[^/>]*?/|/(div|h[1-6]|li|p|td))>'si", ' ', $text ),'<a><strong><span><small>');
		else
			$text = strip_tags(preg_replace( "'<(br[^/>]*?/|hr[^/>]*?/|/(div|h[1-6]|li|p|td))>'si", ' ', $text ));
		if (strlen($text) > $length) {
			$text = substr($text, 0, strpos($text, ' ', $length)) . "..." ;
		} 
		return $text;
	}
}
?>