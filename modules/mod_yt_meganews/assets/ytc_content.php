<?php
/*------------------------------------------------------------------------
 # Yt Mega News - Version 1.0
 # ------------------------------------------------------------------------
 # Copyright (C) 2010-2011 The YouTech Company. All Rights Reserved.
 # @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 # Author: The YouTech Company
 # Websites: http://www.ytcvn.com
 -------------------------------------------------------------------------*/
 

require_once (JPATH_SITE . '/components/com_content/helpers/route.php');

if (! class_exists("YtMegaNews") ) {
class YtMegaNews {
	var $featured = 2;	// 0 - without frontpage, 1 - only frontpage - 2 both
	var $type = 0;
	var $cat_or_sec_ids = array();
	var $limit_articles = 6;
	var $article_ids = array();
	var $is_cat_or_sec = 0;		
	var $sort_order_field = 'created';
	var $thumb_width = '200';
	var $thumb_height = '200';
	var $web_url = '';	
	var $thumbnail_mode = 1;
	var $max_title = 25;
	var $max_description = 200;
	var $resize_folder = '';
	var $url_to_resize = '';
	var $url_to_module = '';	
    var $count_character = 1; 
	var $customUrl ='';
	function Content() {
		
	}
		
	function getList() {
			global $mainframe;			
			$items = array();
			$arrCustomUrl = YtMegaNews::getArrURL(); 			
			$db = & JFactory::getDBO ();
			$user = & JFactory::getUser ();
			$aid = $user->get ( 'aid', 0 );       			
			$contentConfig = &JComponentHelper::getParams ( 'com_content' );
			$noauth = ! $contentConfig->get ( 'shownoauth' );   			
			jimport ( 'joomla.utilities.date' );
			$date = new JDate ( );
			$now = $date->toMySQL ();   			
			$nullDate = $db->getNullDate ();    		
            $catids = array();
            $category_ids = $this->cat_or_sec_ids; 
            $temp1 = array();	
			$category = array();
		
			 if (!is_null ($category_ids)){
                        if (!is_array($category_ids)) {
                        $category_ids = array($category_ids);
                        }
						}
                        //var_dump($category_ids); die;
          
			// Selecting array of category_id when choosing section or category 
			if(($this->is_cat_or_sec) == 0) 
             {  
			 foreach ($category_ids as $key=>$value) {
                           $temp = array();
						   $temp =  YtMegaNews::getCategories($value, true);
                           $temp1[] = $temp;
						   
						}
						
						//var_dump($temp1); die;
						
                 foreach ($temp1 as $key=>$value) {
				  foreach ($value as $key1=>$value1) {
					array_push($catids, $value1);
                    } 
					}
			  
			 	
					}
					else if (($this->is_cat_or_sec) == 1)
					{ $catids = $category_ids; 
					}
					//var_dump($catids); die;
				
                foreach ($catids as $key=> $value) {
					$query = 'SELECT a.*,u.name as creater, cc.id as catid, cc.description as catdesc, cc.title as cattitle,s.description as secdesc, s.title as sectitle,' . ' CASE WHEN CHAR_LENGTH(a.alias) THEN CONCAT_WS(":", a.id, a.alias) ELSE a.id END as slug,' . ' CASE WHEN CHAR_LENGTH(cc.alias) THEN CONCAT_WS(":", cc.id, cc.alias) ELSE cc.id END as catslug,' . ' CASE WHEN CHAR_LENGTH(s.alias) THEN CONCAT_WS(":", s.id, s.alias) ELSE s.id END as secslug' . ' FROM #__content AS a' . ' INNER JOIN #__categories AS cc ON cc.id = a.catid' . ' INNER JOIN #__sections AS s ON s.id = a.sectionid' . ' left JOIN #__users AS u ON a.created_by = u.id';          
					$query .= ' WHERE a.state = 1 ' . ($noauth ? ' AND a.access <= ' . ( int ) $aid . ' AND cc.access <= ' . ( int ) $aid . ' AND s.access <= ' . ( int ) $aid : '') . ' AND (a.publish_up = ' . $db->Quote ( $nullDate ) . ' OR a.publish_up <= ' . $db->Quote ( $now ) . ' ) ' . ' AND (a.publish_down = ' . $db->Quote ( $nullDate ) . ' OR a.publish_down >= ' . $db->Quote ( $now ) . ' )' . 'AND cc.id ='. $value. ' AND cc.section = s.id' . ' AND cc.published = 1' . ' AND s.published = 1';
				  
				if ($this->featured == 0) {

					$query .= ' AND a.id not in (SELECT content_id FROM #__content_frontpage )';

				} else if ($this->featured == 1) {

					$query .= ' AND a.id in (SELECT content_id FROM #__content_frontpage )';

				}
					
						switch ($this->sort_order_field)
                        {
                            case 'created': $ordering = 'a.created';
                                          break;               
							case 'modified': $ordering = 'a.modified';
                                          break;  			  
                            case 'ordering': $ordering = 'a.ordering';
                                          break; 
							case 'title': 	 $ordering = 'a.title';
                                          break;                                                       
                            case 'random': $ordering = 'RAND()';
                                         break;                          
                            default:       $ordering = 'a.created';                              
                                         break;
                            }   

						 $query .=  ' ORDER BY ' . $ordering;   
						 
						 $query .=  $this->limit_articles ? ' LIMIT ' . $this->limit_articles : '';
					   
						 $db->setQuery($query);
                          
                         $a = $db->loadObjectlist();
                           //var_dump($a); die;
                            if(count($a)>0) 
							{
                                $category[$value] = $a;
                            }
                           
							}	
		   
			global $mainframe;
			JPluginHelper::importPlugin ( 'content' );
			$dispatcher = & JDispatcher::getInstance ();
			$params = & $mainframe->getParams ( 'com_content' );
			
			$limitstart = $this->limit_articles;
			
            if(!is_null($category)){ 
                
                foreach ($category as $key=>$value){      
                 $items = array();         
                    foreach( $value as $key1 => $value1)
					{  
				    $temp = array();            
					$value1->introtext = trim($value1->introtext);
					$value1->text = $value1->introtext;
					$value1->text .= $value1->fulltext;
				    $results = $dispatcher->trigger ( 'onPrepareContent', array (& $value1, & $params, $limitstart ) );  	
				    $temp['id'] = $value1->id;
				    $temp['img'] = $this->getImage($value1->text);
				    $temp['title'] = $value1->title;
				    $temp['content'] = $this->removeImage($value1->text);				  
   				   
  				    if($value1->access <= $aid ) {
                       if(array_key_exists($value1->id, $arrCustomUrl))
						 {
						 $value1->link = $arrCustomUrl[$value1->id];
						 }
						else 
						{
						$value1->link = JRoute::_(ContentHelperRoute::getArticleRoute($value1->slug, $value1->catslug, $value1->sectionid));
						}
						}	
							
					$temp['link'] = $value1->link;
					if (($this->is_cat_or_sec) ==1) {
					$value1->link_category = JRoute::_(ContentHelperRoute::getCategoryRoute($value1->catslug, $value1->sectionid));
					} else {
					$value1->link_category = JRoute::_(ContentHelperRoute::getSectionRoute($value1->sectionid));
					} 					
					$temp['link_category'] = $value1->link_category .'&layout= blog';	
					$items[] = $temp;
					
			        }
				
		
			 $value = $this->update($items);
			 //var_dump($value); die;
			$category[$key]= $value;
         
		    }
           
			//var_dump($category); die; 
            }	
        	   return $category;        
            }

	function getImage($str){
			
    		$regex = "/\<img.+src\s*=\s*\"([^\"]*)\"[^\>]*\>/";
    		$matches = array();
			preg_match ( $regex, $str , $matches );    
			$images = (count($matches)) ? $matches : array ();
			$image = count($images) > 1 ? $images[1] : '';
						
			return $image;
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
		
	
	function update($items) {        
        $tmp = array();
        
        foreach ($items as $key => $item) {
            if (!isset($item['sub_title'])) {
                $item['sub_title'] = $this->cutStr($item['title'], $this->max_title);
            }
            if (!isset($item['sub_content']) && ($this->count_character == 1)){
                $item['sub_content'] = $this->cutStr($item['content'], $this->max_description);
            }
            else 
            { $item['sub_content'] = $item['content']; 
            }          
             if (!isset($item['thumb']) && $item['img'] != '') {
                $item['thumb'] = $this->processImage($item['img'], $this->thumb_width, $this->thumb_height);
            } else {
                $item['thumb'] = '';
            }          
           
            //if ($item['thumb'] != '') {            
                $tmp[] = $item;
            //}
        }
       //  var_dump($tmp); die;
        return $tmp;                
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
                if($haveHttp<0 || ($haveHttp !== false) ){
                    $link = trim($tmpLink);
                }else{
                    $link = "http://" . trim($tmpLink);
                }
                $arrUrl[$key] = $link;
            }  
        }            
        return $arrUrl;
    }	

	function processImage($img, $width, $height) {
	 $imagSource = JPATH_SITE.DS. str_replace( '/', DS, $img );	
		
		if(file_exists($imagSource) && is_file($imagSource)) {                             
						switch ($this->thumbnail_mode)
							{
                            case '0': return $img;
                                          break;               
							case '1': return $this->resizeImage($img, $width, $height);
                                          break;  			  
                            case '2': return $this->cropImage($img, $width, $height);
                                          break; 
							         
                            default:  return $this->resizeImage($img, $width, $height);                             
                                         break;
                            }  	
			
			
        } else{

            return '';

	   }

	} 
		
	function resizeImage($imagePath, $width, $height) {
		global $module;
				
		$folderPath = $this->resize_folder;
		 
		 if(!JFolder::exists($folderPath)){
		 		JFolder::create($folderPath);	 
		 }
		 
		 $nameImg = str_replace('/','',strrchr($imagePath,"/"));
			
		 $ext = substr($nameImg, strrpos($nameImg, '.'));
		
		 $file_name = substr($nameImg, 0,  strrpos($nameImg, '.'));
		
		 $nameImg = $file_name . "_" . $width . "_" . $height .  $ext;
		 
		 
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
	
	function cropImage($imagePath, $width, $height) {
		global $module;
		
		$folderPath = $this->resize_folder;
		 
		if(!JFolder::exists($folderPath)){
		 		JFolder::create($folderPath);	 
		}
		 
		$nameImg = str_replace('/','',strrchr($imagePath,"/"));		 
		 
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
    
    function getCategories($section_id, $clear = false) {
        static $catids = array();
        
        if ($clear == true) {
             $catids = array();
        }

        $db = &JFactory::getDBO(); 
        $sql = 'SELECT c.id FROM #__categories c WHERE c.section = "'. $section_id.'"';        
        $db->setQuery($sql);
        $items  = $db->loadObjectList();
        
        if (sizeof($items) > 0) {
            foreach($items as $item) {
                $catids[] = $item->id;
              
            }            
        }
        
        return $catids ;
        
    }
	/*
	function getcategorylink($catId) {
        $link_category = '';
        $db = &JFactory::getDBO();
        $sql = "SELECT c.* FROM #__categories as c INNER JOIN #__sections AS s ON s.id = c.section WHERE c.id = '".$catId."'";
        $db->setQuery($sql);
        $item = $db->loadObject();  
		$link_category = JRoute::_(ContentHelperRoute::getCategoryRoute($item->id, $item->section));
        return $link_category;
    } */ 
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
      $new_image = imagecreatetruecolor($width, $height);
      imagecopyresampled($new_image, $this->image, 0, 0, $this->getbeginWidth($width), $this->getbeginHeight($height),  $width, $height, $width, $height);
      $this->image = $new_image;   
   }   
}
}

?>
