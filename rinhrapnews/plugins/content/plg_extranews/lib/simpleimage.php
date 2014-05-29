<?php
/*
* File: SimpleImage.php
* Author: Simon Jarvis
* Copyright: 2006 Simon Jarvis
* Date: 08/11/06
* Link: http://www.white-hat-web-design.co.uk/articles/php-image-resizing.php
* 
* This program is free software; you can redistribute it and/or 
* modify it under the terms of the GNU General Public License 
* as published by the Free Software Foundation; either version 2 
* of the License, or (at your option) any later version.
* 
* This program is distributed in the hope that it will be useful, 
* but WITHOUT ANY WARRANTY; without even the implied warranty of 
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the 
* GNU General Public License for more details: 
* http://www.gnu.org/licenses/gpl.html
*
*/
defined( '_JEXEC' ) or die(); 
class SimpleImage {
	
	var $image;
	var $image_type;
	var $bgcolor, $transparent;
	
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
	  $this->bgcolor = '#ffffff'; $this->transparent = true;
	}
	function save($filename, $image_type=IMAGETYPE_JPEG, $compression=75, $permissions=null) {
		if(!$image_type) $image_type = $this->image_type;
	  if( $image_type == IMAGETYPE_JPEG ) {
	     $returnvalue = imagejpeg($this->image,$filename,$compression);
	  } elseif( $image_type == IMAGETYPE_GIF ) {
	     $returnvalue = imagegif($this->image,$filename);         
	  } elseif( $image_type == IMAGETYPE_PNG ) {
	     $returnvalue = imagepng($this->image,$filename);
	  }   
	  if( $permissions != null) {
	    @chmod($filename,$permissions);
	  }
	  return  $returnvalue;
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
	function setTransparent($transparent = true) {
		$this->transparent = $transparent;
	}
	function getWidth() {
	  return imagesx($this->image);
	}
	function getHeight() {
	  return imagesy($this->image);
	}
	function resizeToHeight($height) {
	  $ratio = $height / $this->getHeight();
	  $width = (int)$this->getWidth() * $ratio;
	  $this->resize($width,$height);
	}
	function resizeToWidth($width) {
	  $ratio = $width / $this->getWidth();
	  $height = (int)$this->getheight() * $ratio;
	  $this->resize($width,$height);
	}
	function scale($scale) {
	  $width = $this->getWidth() * $scale/100;
	  $height = $this->getheight() * $scale/100; 
	  $this->resize($width,$height);
	}
	function sizeby($method,$width, $height, $mode='auto', $bgcolor = '#ffffff'){
		$this->bgcolor = $bgcolor;
		switch($method){ 
			case 'width': $this->resizeToWidth($width);
			break;
			case 'height': $this->resizeToHeight($height);
			break;
			case 'scale': $this->scale($width);
			break;
			case 'resize':
			default: $this->resize($width, $height, $mode);		
		}
	}
	function resize($width, $height, $mode='') {
		$w0 = $xw = $this->getWidth();
		$h0 = $yw = $this->getHeight();
		$x0 = $y0 = 0;  //source
		$xd = $yd = 0;	//destination
		$xdw = $width;
		$ydw = $height;	

		if($mode == 'fcrop'){ //match the image in sized image 
			$ratio = $w0/$h0;
			if($width/$height >= $ratio ) {
				$xd = floor(($width - $ratio*$height)/2);
				$xdw = $width - 2*$xd;
				}
			else {
				$yd = floor(($height - $width/$ratio)/2);
				$ydw = $height - 2*$yd;		
				}
		}				
		if($mode == 'crop'){ //size then crop by smaller dimension
			$ratio = $width/$height;
			if($ratio >= $w0/$h0) {
				$xw = $w0;
				$yw = $w0/$ratio; //height
				$x0 = 0;
				$y0 = floor(($h0-$yw)/2);;
				}
			else {
				$xw = floor($h0*$ratio);
				$yw = $h0; 
				$x0 = floor(($w0-$xw)/2);
				$y0 = 0;		
				}
		}		
		if($mode == 'auto'){
			//image is smaller
			if($w0 <= $width && $h0 <= $height) return; //No need to resize
			$k = $w0/$h0;
			//image is larger than requirement
			//Auto size by with or height
			if($k >= 1) {
				//Width > Height
				$height = floor($width/$k);			
			}
			else {
				//Width < Height
				$width =floor($height*$k);
			}
				$xdw = $width;
				$ydw = $height;							
		}
		$new_image = @imagecreatetruecolor($width, $height);								
		
		if($this->transparent && ($this->image_type == IMAGETYPE_GIF || $this->image_type == IMAGETYPE_PNG)){
		//http://mediumexposure.com/smart-image-resizing-while-preserving-transparency-php-and-gd-library/
			if( $this->image_type == IMAGETYPE_GIF) {
				$transparent_index = ImageColorTransparent($this->image);
				$transparent_color = false;
				if($transparent_index!=(-1)) $transparent_color = ImageColorsForIndex($this->image,$transparent_index);
				//JERROR::RaiseWarning('500',print_r($transparent_color,true).'  :  '.print_r($transparent_index,true));
				if($transparent_color) /* simple check to find wether transparent color was set or not */
					{
						
						$transparent_new = ImageColorAllocate( $new_image, $transparent_color['red'], $transparent_color['green'], $transparent_color['blue'] );
						$transparent_new_index = ImageColorTransparent( $new_image, $transparent_new );
						ImageFill( $new_image, 0,0, $transparent_new_index ); /* don't forget to fill the new image with the transparent color */
					} else $this->img_gbcolor($new_image, $this->bgcolor);
									
			}
			else {
					// Turn off transparency blending (temporarily)
					imagealphablending($new_image, false);

					// Create a new transparent color for image
					$color = imagecolorallocatealpha($new_image, 0, 0, 0, 127);

					// Completely fill the background of the new image with allocated color.
					imagefill($new_image, 0, 0, $color);

					// Restore transparency blending
					imagesavealpha($new_image, true);				
					//imagecolortransparent($new_image, imagecolorallocate($new_image, 000, 255, 000));
				}
		} 
		else
			$this->img_gbcolor($new_image, $this->bgcolor); //JPEG image

		@imagecopyresampled($new_image, $this->image, $xd, $yd, $x0, $y0, $xdw, $ydw, $xw, $yw);
		$this->image = $new_image;
		
	}
	function text2image($options){
		$text_color = str_replace('#','',$options['color']);
		$r = hexdec(substr($text_color,0,2));
		$g = hexdec(substr($text_color,2,2));
		$b = hexdec(substr($text_color,4,2));	
		$color = imagecolorallocate($this->image, $r, $g, $b); 
		$font = dirname(__FILE__) . '/FreeSerif.ttf';
		$data = imagettfbbox ( $options['fsize'] , $options['frotation'] , $font , $options['text'] );
		/* Top Level */
		ImageTTFText($this->image, $options['fsize'], $options['frotation'], $this->getWidth()-($data[2]-$data[0])-2, $this->getHeight()-2, $color, $font, $options['text']);
	}
function img_gbcolor(&$image, $text_color='#ffffff'){ 
	//$text_color = strtolower($text_color);
	$text_color = str_replace('#','',$text_color);
	$r = hexdec(substr($text_color,0,2));
	$g = hexdec(substr($text_color,2,2));
	$b = hexdec(substr($text_color,4,2));
	if(imagecolorstotal($image)>=255) {
	    //palette used up; pick closest assigned color
	    $bg = imagecolorclosest($image, $r, $g, $b);
		//JError::raisewarning('500', 'Xbgx '.$this->bgcolor);
	} else {
	    //palette NOT used up; assign new color
	    $bg = imagecolorallocate($image,$r, $g, $b);
		//JError::raisewarning('500', 'Xbgy '.$this->bgcolor);
	}
	return imagefill($image, 0, 0, $bg);
}	      
}
?>