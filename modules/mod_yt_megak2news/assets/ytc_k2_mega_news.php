<?php
/*------------------------------------------------------------------------
 # Yt Mega K2 News - Version 1.0
 # Copyright (C) 2009-2010 The YouTech Company. All Rights Reserved.
 # @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 # Author: The YouTech Company
 # Websites: http://joomla.ytcvn.com
 -------------------------------------------------------------------------*/
 
require_once ( JPath::clean(JPATH_SITE.'/components/com_k2/helpers/route.php') );

if (! class_exists("YtcK2MegaNews") ) {
class YtcK2MegaNews {
    var $items = array();
    var $featured = 1;    // 0 - without frontpage, 1 - only frontpage - 2 both
    var $type = 0;
    var $category = array();   
    var $limit_items = 6;
    var $itemTitle=1;
    var $listIDs = array();
    var $showtype = 1;        
    var $sort_order_field= 'c_dsc';   
    var $thumb_width = '200';
    var $thumb_height = '200';
    var $web_url = '';       
    var $max_title = 25;
    var $count_character = 0;
    var $description_max = 50;
    var $resize_folder = '';
    var $url_to_resize = '';
    var $url_to_module = '';    
    var $show_description = 1;    
    var $customUrl = array();      
    var $arrCustomUrl = array();
	var $thumbnail_mode = 1;
	var $vm_installed = 0;
	var $show_price = 0;
	
    function Content() {
        
    }
          
    function getList($module) {
            global $mainframe;            
           
			$arrCustomUrl = YtcK2MegaNews::getArrURL($this->customUrl);  			
            require_once ( JPath::clean(JPATH_SITE.'/components/com_k2/helpers/route.php') );
            $co_params = &JComponentHelper::getParams('com_k2');            
            $user = &JFactory::getUser();
            $aid = $user->get('aid');
            $db = &JFactory::getDBO();               
            $jnow = &JFactory::getDate();
            $now = $jnow->toMySQL();
            $nullDate = $db->getNullDate();  
            $art_id = '';
            $catid= array();
			$category = array();
				$arraycatid = ($this->category);    
				//var_dump($arraycatid); die;
				if (!is_null ($arraycatid)){
					if (!is_array($arraycatid)) {
					 $arraycatid = array($arraycatid);
					}
                         
                 foreach($arraycatid as $key=>$value) {
				  
				  $cats = YtcK2MegaNews::getSubCategories($value, true);
                  $query = "SELECT distinct(a.id),a.*, cr.rating_sum/cr.rating_count as rating, c.name as categoryname,
                            c.id as categoryid, c.alias as categoryalias, c.params as categoryparams, cc.commentcount as commentcount".
                          " FROM #__k2_items as a".
                          " LEFT JOIN #__k2_categories c ON c.id = a.catid" .
                          " LEFT JOIN #__k2_rating as cr ON a.id = cr.itemid".
                          " LEFT JOIN (select cm.itemid  as id, count(cm.id) as commentcount from #__k2_comments as cm
                            where cm.published=1 group by cm.itemid) as cc on a.id = cc.id";
            
                  $query .= " WHERE a.published = 1"
                        . " AND a.access <= {$aid}"
                        . " AND a.trash = 0"
                        . " AND c.published = 1"
                        . " AND c.access <= {$aid}"
                        . " AND c.trash = 0 ";  
               
					if (sizeof($cats) > 0) {
						$query .= " AND a.catid in (". implode(",", $cats) .")";  
					} else {
						$query .= " AND a.catid = {$value}";  
					}
                           $featuredCondition = '';
                       /* switch ($this->$featured)
                        {
                           case '0': $featuredCondition =     ' AND a.featured = 0 ';
                                   break;
                           case '2': $featuredCondition = ' AND a.featured = 1 ';
                                   break;
                    
                            
                        }     
                       $query .=   $featuredCondition; */
				    $task = JRequest::getCmd('task');
				    if( !($task=='user' && !$user->guest && $user->id==JRequest::getInt('id') )) {
						$query .= " AND ( a.publish_up = ".$db->Quote($nullDate)." OR a.publish_up <= ".$db->Quote($now)." )";
						$query .= " AND ( a.publish_down = ".$db->Quote($nullDate)." OR a.publish_down >= ".$db->Quote($now)." )";
					}  
					 if( $this->featured == 0 ){
                        $query.= " AND a.featured != 1"; 
                    } elseif ( $this->featured == 2 ) {
                        $query.= " AND a.featured = 1";
                    }  
                    //$this->sort_order_field = "RAND()";
                        switch ($this->sort_order_field)
                        {
                            case 'title': $ordering = 'a.title ASC';
                                          break;                
                            case 'h_dsc': $ordering = 'a.hits DESC';
                                          break; 
                            case 'h_asc': $ordering = 'a.hits ASC';
                                          break;
                            case 'o_asc': $ordering = 'a.ordering ASC';
                                          break;                          
                            case 'm_dsc': $ordering = 'a.modified DESC, a.created DESC';
                                          break;
                            case 'random': $ordering = 'RAND()';
                                         break;                          
                            case 'c_dsc': 
							default:  	 $ordering = 'a.created DESC';  							
                                         break;
                        }        
                    $query .=  ' ORDER BY ' . $ordering;        
                    $query .=  $this->limit_items ? ' LIMIT ' . $this->limit_items : '';
                    $db->setQuery($query);
					
					//echo $db->getQuery() . '<br/><br/>';
					
                    $a = $db->loadObjectlist();
                    //var_dump($a); die;
                    if(count($a)>0) {
                        $category[$value] = $a;
                    }
                   
                 }
				
                 //var_dump($category); die;   
                
           if(!empty($category)){ 
           foreach ($category as $key_one=>$value_one){
                 $items = $value_one;
                foreach( $items as $key => &$item ){  
                     if($item->access <= $aid ) {
                      if(array_key_exists($item->id,$arrCustomUrl))
                     {$item->link = $arrCustomUrl[$item->id]; }
                        else 
                        {
                      $item->link = JRoute::_(K2HelperRoute::getItemRoute($item->id.':'.$item->alias, $item->catid.':'.$item->categoryalias));
                         } }
                            else {    
                            $item->link = JRoute::_('index.php?option=com_user&view=login');
                             }  
							
							  $item->date = JHtml::_('date', $item->created, JText::_('DATE_FORMAT_LC2')); 
                              $item->rating = (is_numeric($item->rating))?floatval($item->rating / 5 * 100):null;
                              $item->main_image = '';
                
                    YtcK2MegaNews::forImage($item);
                   }
                //var_dump($item); die;
               $k2items = array();
               foreach ($items as $key1 => $value1){
                    $k2 = array();
                    $k2['content'] = $this->removeImage($value1->introtext);;      
                    $k2['id'] = $value1->id;
                    $k2['title'] = $value1->title;
                    $k2['img'] = $value1->main_image;
					if ($k2['img']=='')
					{
					$k2['img'] = 'modules/'.$module->module.'/assets/no_image.gif'; 
					}
					
                    $k2['link'] = $value1->link;				                       					
                    $k2['catid'] = $value1->categoryid;
                    $k2['catname'] = $value1->categoryname;
					/* for K2mart */
					
                    if ($this->vm_installed && $this->show_price) {
						$k2['price'] = $this->getprice($value1->id); 
					} else {
						$k2['price'] = '';
					}
					
                    $k2items[] = $k2;
                    }
                     $items = $this->update($k2items);
                      // var_dump($items); die;
                       $category[$key_one]= $items; 
                }
            }
                     //var_dump($category); die;

                      return $category;
                     }    
                     }
		function getArrURL($customUrl) {     
			$arrUrl = array();
			$tmp = explode("\n", trim($customUrl));            
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
		function removeImage($str) {
			$regex1 = "/\<img[^\>]*>/";
			$str = preg_replace ( $regex1, '', $str );
			$regex1 = "/<div class=\"mosimage\".*<\/div>/";
			$str = preg_replace ( $regex1, '', $str );
			$str = trim ( $str );
			
			return $str;
		}

		/* for K2mart */
        function getprice($item_id){
		
		//$show_price = (bool)$params->get('show_price', 1 ); // Display the Product Price?	
		require_once ( JPath::clean(JPATH_SITE.'/components/com_virtuemart/virtuemart_parser.php') );	
		require_once( CLASSPATH . 'ps_product.php');
		
		$ps_product = new ps_product;
		global $sess, $mm_action_url;        
        $auth = $_SESSION['auth'];
		
		$db = & JFactory::getDBO ();
		$q = 'SELECT #__k2mart.*, #__vm_product.*, #__vm_product_price.product_price, #__vm_product_price.shopper_group_id FROM #__vm_product INNER JOIN #__k2mart ON #__k2mart.productID =  #__vm_product.product_id LEFT JOIN #__vm_product_price ON #__vm_product_price.product_id=#__vm_product.product_id WHERE #__k2mart.itemID = "'.$item_id.'" AND product_parent_id="" AND #__vm_product.product_publish="Y"';
		
		$db->setQuery ($q);				
	    $item = $db->loadObjectList ();
		//var_dump($item); die;
	   // Filter price
			$item_price = '';
			foreach($item as $key=>$value){				
			$value->product_price =  $ps_product->show_price($value->product_id, @$auth["show_price_including_tax"], 0);
			$tmp = explode('<span class="productPrice">', $value->product_price);					
			if (isset($tmp[1])) {					
				if (strpos( $tmp[1] ,"</span>") !== false ) {
					$pos = strpos( $tmp[1] ,"</span>");
					$price = substr($tmp[1], 0 , $pos );
				}
			} else {
				$link = $sess->url( $_SERVER['PHP_SELF'].'?page=shop.ask&amp;product_id='. $value->product_id.'&amp;subject='. urlencode( $VM_LANG->_('PHPSHOP_PRODUCT_CALL').": ". $value->product_name) );
				$price = vmCommonHTML::hyperLink( $link, $VM_LANG->_('PHPSHOP_PRODUCT_CALL') );	
			}
			$item_price = trim($price); 
			}
			
		  return $item_price;
		}             
    function forImage( &$item ){
           
            $regex1 = "/\<img.*\/\>/";
           
            $item->introtext = trim($item->introtext);
            $content = $item->introtext;    
            $content .=  $item->fulltext;
           
            $item  = YtcK2MegaNews::k2Image( $item );
            
            if( $item->main_image != '' ){
                
                return $item;
            }                                 
            
            preg_match ( "#<img.+src\s*=\s*\"([^\"]*)\"[^\>]*\>#iU" , $content, $matches); 
            $images = (count($matches)) ? $matches : array();
            if (count($images)){                
                $item->main_image = $images[1];
            } else {                
                $item->main_image = '';    
            }
            
			 $item->introtext = preg_replace( $regex1, '', $item->introtext );
        }
        
     
                    
        function k2Image( &$item, $size='XL' ){            
            $item->main_image ='';
            if (JFile::exists(JPATH_SITE.DS.'media'.DS.'k2'.DS.'items'.DS.'cache'.DS.md5("Image".$item->id).'_'.$size.'.jpg')) {
                $item->main_image = 'media/k2/items/cache/'.md5("Image".$item->id).'_'.$size.'.jpg';
            }
            
            return $item; 
        }
    
        function filterParams( $string ) {
            $string = html_entity_decode($string, ENT_QUOTES);
            $regex = "/\s*([^=\s]+)\s*=\s*('([^']*)'|\"([^\"]*)\"|([^\s]*))/";
             $params = null;
             if(preg_match_all($regex, $string, $matches) ){
                    for ($i=0;$i<count($matches[1]);$i++){ 
                      $key      = $matches[1][$i];
                      $value = $matches[3][$i]?$matches[3][$i]:($matches[4][$i]?$matches[4][$i]:$matches[5][$i]);
                      $params[$key] = $value;
                    }
              }
              return $params;
        }
             
        
        function unhtmlentities($string) 
        {
            $trans_tbl = array("&lt;" => "<", "&gt;" => ">", "&amp;" => "&");
            return strtr($string, $trans_tbl);
        }
        
        
        function getFile($name, $modPath, $tmplPath) {
            if (file_exists(JPATH_SITE.DS.$tmplPath.$name)) {
                return $tmplPath.$name;
            }
            return $modPath.$name;
        }
        
       
    
    function update($items) {        
        $tmp = array();
        
        foreach ($items as $key => $item) {
            if (!isset($item['sub_title'])) {
                $item['sub_title'] = $this->cutStr($item['title'], $this->max_title);
            }
            if (!isset($item['sub_content']) && ($this->count_character == 1)){
                $item['sub_content'] = $this->cutStr($item['content'], $this->description_max);
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
        
        return $tmp;                
    }
    
   	function processImage($img, $width, $height) {
	 $imagSource = JPATH_SITE.DS. str_replace( '/', DS, $img );	
		
		if(file_exists($imagSource)){	                             
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
	
	function getSubCategories($pId, $clear = false) {
		static $cats = array();
		
		if ($clear == true) {
			 $cats = array();
		}
		
		$cats[] = $pId;
		$db = &JFactory::getDBO(); 
		$sql = 'SELECT c.id FROM #__k2_categories c  WHERE c.parent = "'. $pId.'"';		
		$db->setQuery($sql);
		$items  = $db->loadObjectList();
		if (sizeof($items) > 0) {
			foreach($items as $item) {
				YtcK2MegaNews::getSubCategories($item->id);
			}			
		}
		
		return $cats ;
		
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
      if ($filename) {         
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
      imagecopyresampled($new_image    , $this->image, 0, 0, 0, 0, $width, $height, $this->getWidth(), $this->getHeight());
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
