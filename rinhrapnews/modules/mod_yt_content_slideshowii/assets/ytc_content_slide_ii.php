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
require_once (JPATH_SITE . '/components/com_content/helpers/route.php');
jimport('joomla.application.component.model');

JModel::addIncludePath(JPATH_SITE.'/components/com_content/models');

if (! class_exists("YtcContentSlideShowII") ) {
class YtcContentSlideShowII {
	var $items = array();
    var $sec_cat_list = array();
    var $list_article = array();
    var $frontpage = 0;
	var $featured = 0;	// 0 - without frontpage, 1 - only frontpage - 2 both
	var $type = 0;
    var $themes = array();
	var $category = array();
    var $articleid = array();
	var $limit = 5;
	var $listIDs = array();
	var $showtype = 1;
    var $theme = array();
    var $iditems = 0;
	var $article_ids = array();
    var $customUrl = array();      
	var $arrCustomUrl = array();
	var $is_cat_or_sec = 1;		
	var $sort_order_field = 'created';
	var $type_order = 'DESC';	
	var $thumb_width = '40';
	var $thumb_height = '40';
    var $small_thumb_width = '0';
	var $small_thumb_height = '0';
	var $web_url = '';	
	var $cropresizeimage = 0;
    var $imagesource = 0;
	var $max_title = 0;
	//var $max_description = 0;
	var $max_main_description = 0;
    var $max_normal_description = 0;
	var $resize_folder = '';
	var $url_to_resize = '';
	var $url_to_module = '';	
	
	function Content() {
		
	}
		
	function getList() {///var_dump ($this->id);
			global $mainframe;			
            $items = array();
            $arrCustomUrl = YtcContentSlideShowII::getArrURL();
            $db = & JFactory::getDBO ();
            $user = & JFactory::getUser ();
            $aid = $user->get ( 'aid', 1 );
            $aid = 1;
            $contentConfig = &JComponentHelper::getParams ( 'com_content' );
            $noauth = ! $contentConfig->get ( 'shownoauth' );
            jimport ( 'joomla.utilities.date' );
            $date = new JDate ( );
            $now = $date->toMySQL ();
            $nullDate = $db->getNullDate ();
            //$where = YtcContent::getCondition($id); 
            $where = YtcContentSlideShowII::getCondition();
            $art_id = '';
            $catid= array();
            $arraycatid = $this->sec_cat_list;//var_dump($arraycatid);die;
            if (!is_null($arraycatid)){
                if (!is_array($arraycatid)){
                    $arraycatid = array($arraycatid);
                }
                $cats = array();
                foreach($arraycatid as $key=>$value) {
                    $cat = YtcContentSlideShowII::getSubCategories($value, true);
                    $cats = array_merge($cats, $cat);
                }					
    			if ($this->sort_order_field == 'random') {				
    				$orderby =  ' ORDER BY rand()';			
    			} 
                elseif ($this->sort_order_field == 'created' || $this->sort_order_field == 'modified'){
                    $this->type_order = 'DESC';
                    $orderby = ' ORDER BY ' . $this->sort_order_field . ' ' . $this->type_order;
                }           
                elseif ($this->sort_order_field == 'title' || $this->sort_order_field == 'ordering'){
                    $this->type_order = 'ASC';
                    $orderby = ' ORDER BY ' . $this->sort_order_field . ' ' . $this->type_order;
                }
                else {
                    $orderby = ' ORDER BY ' . $this->sort_order_field . ' ' . $this->type_order;			
                }
    			$limit = " LIMIT {$this->limit}";
                //var_dump($this->sec_cat_list);die;    
                if (is_array($this->sec_cat_list)){
                    $ary = " in (" . implode("," , $this->sec_cat_list) . ")";   
                } else { 
                    $ary = " = ". ( int ) $this->sec_cat_list;     
                }
    		
    			// query to determine article count
    			$query = 'SELECT a.*,u.name as creater,cc.description as catdesc, cc.title as cattitle,' . ' CASE WHEN CHAR_LENGTH(a.alias) THEN CONCAT_WS(":", a.id, a.alias) ELSE a.id END as slug,' . ' CASE WHEN CHAR_LENGTH(cc.alias) THEN CONCAT_WS(":", cc.id, cc.alias) ELSE cc.id END as catslug FROM #__content AS a' . ' INNER JOIN #__categories AS cc ON cc.id = a.catid' . ' left JOIN #__users AS u ON a.created_by = u.id';          
                $query .= ' WHERE a.state = 1 '. ($noauth ? ' AND a.access <= ' . ( int ) $aid . ' AND cc.access <= ' . ( int ) $aid : '') . ' AND (a.publish_up = ' . $db->Quote ( $nullDate ) . ' OR a.publish_up <= ' . $db->Quote ( $now ) . ' ) ' . ' AND (a.publish_down = ' . $db->Quote ( $nullDate ) . ' OR a.publish_down >= ' . $db->Quote ( $now ) . ' )' . ' AND cc.published = 1';
                if ($this->featured == 0) {
                    $query .= ' AND a.id not in (SELECT content_id FROM #__content_frontpage )';
                } else if ($this->featured == 1) {
                    $query .= ' AND a.id in (SELECT content_id FROM #__content_frontpage )';
                }
                //echo $query;die;
                if(is_array($this->articleid))
                {
                    $articleid = implode(',', $this->articleid ); 
                }
                else
                {
                    $articleid	= trim( $this->articleid );	     
                }
                if ($articleid)
                {
                    $ids = explode( ',', $articleid );
                    JArrayHelper::toInteger( $ids );
                    $query .= ' AND (a.id=' . implode( ' OR a.id=', $ids ) . ')';
                }
                if (sizeof($cats) > 0) {
                    $query .= " AND cc.id in (". implode(",", $cats) .")";//  echo $query;die;
                } else {
                    $query .= " AND cc.id = {$value}";  
                }
    			$query .= $orderby . $limit;            
               
    			$db->setQuery ( $query );			
    			//echo $query;die;  			
    			$rows = $db->loadObjectList ();
    			
    			global $mainframe;
                $arrCustomUrl = YtcContentSlideShowII::getArrURL();
    			JPluginHelper::importPlugin ( 'content' );
    			$dispatcher = & JDispatcher::getInstance ();
    			//$params = & $mainframe->getParams ( 'com_content' );
    			$params =& JComponentHelper::getParams('com_content');
    			$limitstart = $this->limit;
    			
    			for($i = 0; $i < count ( $rows ); $i ++) {
    				$rows [$i]->text = $rows [$i]->introtext;
    				$results = $dispatcher->trigger ( 'onPrepareContent', array (& $rows [$i], & $params, $limitstart ) );
    				$rows [$i]->introtext = $rows [$i]->text;
    				$items[$i]['id'] = $rows [$i]->id;
    				$items[$i]['img'] = $this->getImage($rows [$i]->text);
                    $items[$i]['video'] = $this->getVideo($rows [$i]->text);//var_dump($items[$i]['video']);die;
    				$items[$i]['title'] = $rows[$i]->title;
    				$items[$i]['content'] = $this->removeImage($rows [$i]->text);
    				
    				if(array_key_exists($rows [$i]->id,$arrCustomUrl)){
                            $link = $arrCustomUrl[$rows [$i]->id];// echo '<pre>'.print_r($link);die;
                    }else
    
                    {
        				$link   = JRoute::_(ContentHelperRoute::getArticleRoute($rows [$i]->slug, $rows [$i]->catslug, $rows [$i]->sectionid));
        			}			
    				$items[$i]['link'] = $link;
                }
    			
                $items = $this->update($items);
			
			/*   Process Images*/
		  }	
            return $items;
		}		
	
	
    function catch_video($str) {
      $the_video = '';
      $tag="object"; 
      $close=preg_match("/^([^\b]+)/", $tag, $closing_tag);
        
      $needle=""; 
      preg_match("/<".$tag."[^>]*>[^\b]*(\b".$needle."\b)[^<]*<\/".$closing_tag[1].">/im", $str, $result);
      //$output = preg_match_all('#<object.*<\/object>#', $str , $vid_matches);
      
      if (isset($result[0])) {        
        $video = $result[0];
        $video = preg_replace("/width=\"\d+\"/", 'width='.$this->thumb_width, $video);
        $video = preg_replace("/height=\"\d+\"/", 'height='.$this->thumb_height, $video);
        return $video;
      }
      
    }

	function getImage($str){
    		$regex = "/\<img.+src\s*=\s*\"([^\"]*)\"[^\>]*\>/";
    		$matches = array();
			preg_match ( $regex, $str , $matches );  
             
			$images = (count($matches)) ? $matches : array ();
			$image = count($images) > 1 ? $images[1] : '';
						
			return $image;
	}
    function getVideo($str1){
            $video = $this->catch_video($str1);	
			return $video;
	}
	function getItemid($sectionid) {
		$contentConfig = &JComponentHelper::getParams ( 'com_content' );
		$noauth = ! $contentConfig->get ( 'shownoauth' );
		$user = & JFactory::getUser ();
		$aid = $user->get ( 'aid', 0 );
		$db = & JFactory::getDBO ();
		$query = "SELECT id FROM #__menu WHERE `link` like '%option=com_content%view=section%id=$sectionid%'" . ' AND published = 1' . ($noauth ? ' AND access <= ' . ( int ) $aid : '');
		
		$db->setQuery ( $query );
		return $db->loadResult ();
	}
	
    
	function removeImage($str) {
		$regex1 = "/\<img[^\>]*>/";
		$str = preg_replace ( $regex1, '', $str );
		$regex1 = "/<div class=\"mosimage\".*<\/div>/";
		$str = preg_replace ( $regex1, '', $str );
		$str = trim ( $str );
		
		return $str;
	}
	function getCondition() {	
		$sql = '';
		switch ($this->showtype) {
			case 0:
				if ($this->category == 0) {
					$sql = '';
				} else {
					$catids = !is_array($this->category) ? $this->category : '"'.implode('","',$this->category).'"';
					$sql = ' AND  a.catid IN( '.$catids.' )';
				}
				break;
			case 1:
				$ids = explode(',', $this->listIDs);	
				$tmp = array();				
				foreach( $ids as $id ){
					$tmp[] = (int) trim($id);
				}
				$sql = " AND a.id IN('". implode( "','", $tmp ) ."')";
				break;
			default:
				$sql = '';
		}
		return $sql;
	}
	 function getSubCategories($pId, $clear = false) {
		static $cats = array();
		if ($clear == true) {
			 $cats = array();
		}
		$cats[] = $pId;
		$db = &JFactory::getDBO();
            $sql = 'SELECT c.id FROM #__categories c  WHERE c.parent_id = "'. $pId.'"';	
		$db->setQuery($sql);
		$items  = $db->loadObjectList();
        
		if (sizeof($items) > 0) {
			foreach($items as $item){
				YtcContentSlideShowII::getSubCategories($item->id);
			}			
		}
		return $cats ;
	}	
	function getArrURL() {     

            $arrUrl = array();

            $tmp = explode("\n", trim($this->customUrl));            

            foreach( $tmp as $strTmp){
                $pos = strpos($strTmp, ":");
                if($pos >=0){
                    $tmpKey = substr($strTmp, 0, $pos);
                    $key = trim($tmpKey);
                    $tmpLink = substr($strTmp, $pos+1, strlen($strTmp)-$pos);

                    $haveHttp =  strpos(trim($tmpLink), "http://"); 
                    //var_dump($haveHttp);die;        
                    if(!$haveHttp && ($haveHttp!==0)){
                        $link = "http://" . trim($tmpLink);  
                    }else {
                        $link = trim($tmpLink);
                    }
                    $arrUrl[$key] = $link;
                }  
            }            
            return $arrUrl;
    }
    
	function update($items) {		
		$tmp = array();
		
		foreach ($items as $key => $item) {
			if (!isset($item['sub_title'])) {
				$item['sub_title'] = $this->cutStr($item['title'], $this->max_title);
			}
			if (!isset($item['sub_main_content'])) {
				$item['sub_main_content'] = $this->cutStr($item['content'], $this->max_main_description);
			}
			if (!isset($item['sub_normal_content'])) {
				$item['sub_normal_content'] = $this->cutStr($item['content'], $this->max_normal_description);
			}
			if (!isset($item['thumb']) && $item['img'] != '') {
				$item['thumb'] = $this->processImage($item['img'], $this->thumb_width, $this->thumb_height, $item['id']);
                
			} else {
				$item['thumb'] = '';
			}
            if($this->imagesource == 1){
                $item['thumb'] = $item['img'];
            }
            if (!isset($item['small_thumb']) && $item['img'] != '' && $this->small_thumb_width > 0 && $this->small_thumb_height > 0 ) {
				$item['small_thumb'] = $this->processImage($item['img'], $this->small_thumb_width, $this->small_thumb_height, $item['id']);
			} else {
				$item['small_thumb'] = '';
			}
            if (!isset($item['thumb_video']) && $item['video'] != '') {
				$item['thumb_video'] = $this->processImage($item['video'], $this->thumb_width, $this->thumb_height, $item['id']);
                
			} else {
				$item['thumb_video'] = '';
			}
			$tmp[] = $item;
            
		}
		
		return $tmp;				
	}
	
	function processImage($img, $width, $height, $id) {

	$imagSource = JPATH_SITE.DS. str_replace( '/', DS,  $img );
		if(file_exists($imagSource) && is_file($imagSource)){	
    		if ($this->cropresizeimage == 0){
    			return $this->resizeImage($img, $width, $height, $id);
    		} else {
    			return $this->cropImage($img, $width, $height, $id);
    		}

        } else{

            return '';
	   }
	}	
		
	function resizeImage($imagePath, $width, $height, $id) {
		global $module;
		//$iditems = $this->id;// echo $iditems;die;		
		$folderPath = $this->resize_folder;
		 
		 if(!JFolder::exists($folderPath)){
		 		JFolder::create($folderPath);	 
		 }
		 
		 $nameImg = str_replace('/','',strrchr($imagePath,"/"));
			
		 $ext = substr($nameImg, strrpos($nameImg, '.'));
		
		 $file_name = substr($nameImg, 0,  strrpos($nameImg, '.'));

		 $nameImg = $this->theme . '_' . $id . "_" . $file_name . "_" . $width . "_" . $height .  $ext;
		 
		 //var_dump($nameImg);
		 if(!JFile::exists($folderPath.DS.$nameImg)){
			 $image = new SimpleImage();
	  		 $image->load($imagePath);
	  		 $image->resize($width,$height);
	   		 $image->save($folderPath.DS.$nameImg);
		 }else{
		 		 list($info_width, $info_height) = @getimagesize($folderPath.DS.$nameImg);
		 		 if($width!=$info_width||$height!=$info_height){
		 		 	 $image = new SimpleImage();
	  				 $image->load($imagePath);
	  				 $image->resize($width,$height);
	   				 $image->save($folderPath.DS.$nameImg);
		 		 }
		 }
   		 return $this->url_to_resize . $nameImg;
	}
	
	function cropImage($imagePath, $width, $height, $id) {
		global $module;
		
		$folderPath = $this->resize_folder;
		 
		if(!JFolder::exists($folderPath)){
		 		JFolder::create($folderPath);	 
		}
		 
        $nameImg = "crop_" . $this->theme . "__" . $id . '__'. $width. '__'. $height. str_replace('/','',strrchr($imagePath,"/"));	 
		 
		 if(!JFile::exists($folderPath.DS.$nameImg)){
			 $image = new SimpleImage();
	  		 $image->load($imagePath);
	  		 $image->crop($width,$height);
	   		 $image->save($folderPath.DS.$nameImg);
		 }else{
		 		 list($info_width, $info_height) = @getimagesize($folderPath.DS.$nameImg);
		 		 if($width!=$info_width||$height!=$info_height){
		 		 	 $image = new SimpleImage();
	  				 $image->load($imagePath);
	  				 $image->crop($width,$height);
	   				 $image->save($folderPath.DS.$nameImg);
		 		 }
		 }
		 
   		 return $this->url_to_resize . $nameImg;
	}
	
	/*Cut string*/
	function cutStr( $str, $number){
		//If length of string less than $number
		$str = strip_tags($str);
		if(strlen($str) <= $number){
			return $str;
		}
		$str = substr($str,0,$number);
	
		$pos = strrpos($str,' ');
	
		return substr($str,0,$pos).'...';
	}
	
}
}
if (! class_exists("SimpleImage") ) {
class SimpleImage {
   var $image;
   var $image_type;
   function load($filename) {
      $image_info = getimagesize($filename);
      $this->image_type = $image_info[2];
     	 
		 
      if( $this->image_type == IMAGETYPE_JPEG ) {
         $this->image = imagecreatefromjpeg($filename);
      } elseif( $this->image_type == IMAGETYPE_GIF ) {
         $this->image = imagecreatefromgif($filename);
      } elseif( $this->image_type == IMAGETYPE_PNG ) {
         $this->image = imagecreatefrompng($filename);
      }
   }
   function save($filename, $image_type=IMAGETYPE_JPEG, $compression=75, $permissions=null) {
   			
      if( $image_type == IMAGETYPE_JPEG ) {
         imagejpeg($this->image,$filename,$compression);
      } elseif( $image_type == IMAGETYPE_GIF ) {
         imagegif($this->image,$filename);         
      } elseif( $image_type == IMAGETYPE_PNG ) {
         imagepng($this->image,$filename);
      }   
      if( $permissions != null) {
         chmod($filename,$permissions);
      }
   }
   function output($image_type=IMAGETYPE_JPEG) {
      if( $image_type == IMAGETYPE_JPEG ) {
         imagejpeg($this->image);
      } elseif( $image_type == IMAGETYPE_GIF ) {
         imagegif($this->image);         
      } elseif( $image_type == IMAGETYPE_PNG ) {
         imagepng($this->image);
      }   
   }
   function getWidth() {
      return imagesx($this->image);
   }
   function getHeight() {
      return imagesy($this->image);
   }
   function resizeToHeight($height) {
      $ratio = $height / $this->getHeight();
      $width = $this->getWidth() * $ratio;
      $this->resize($width,$height);
   }
   function resizeToWidth($width) {
      $ratio = $width / $this->getWidth();
      $height = $this->getheight() * $ratio;
      $this->resize($width,$height);
   }
   function scale($scale) {
      $width = $this->getWidth() * $scale/100;
      $height = $this->getheight() * $scale/100; 
      $this->resize($width,$height);
   }
   function resize($width,$height) {
        $width = intval($width);
        $height = intval($height);
        $new_image = imagecreatetruecolor($width, $height);
        imagecopyresampled($new_image	, $this->image, 0, 0, 0, 0, $width, $height, $this->getWidth(), $this->getHeight());
        $this->image = $new_image; 
   }    
   function getbeginWidth($width){
   $k = $this->getWidth();
   $x1 = ($k - $width)/2;
   return $x1;
   }
   function getbeginHeight($height){
   $k = $this->getHeight();
   $y1 = ($k - $height)/2;
   return $y1;
   }
   function crop($width,$height) {
        $width = intval($width);
        $height = intval($height);
        $new_image = imagecreatetruecolor($width, $height);
        imagecopyresampled($new_image, $this->image, 0, 0, $this->getbeginWidth($width), $this->getbeginHeight($height),  $width, $height, $width, $height);
        $this->image = $new_image;   
   }   
}
}

?>
