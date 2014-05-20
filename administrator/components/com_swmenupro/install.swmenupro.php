<?php

function com_install () {
	global $mainframe;
	
	$database		=& JFactory::getDBO();
	
	$absolute_path=JPATH_ROOT;
 
	if(file_exists($absolute_path."/modules/mod_swmenupro/mod_swmenupro.php")){
		//unlink($mosConfig_absolute_path."/modules/mod_swmenupro.php");
		//sw_sw_deldir($mosConfig_absolute_path."/modules/mod_swmenupro");	
	}
	if(file_exists($absolute_path."/modules/mod_swmenupro/mod_swmenupro.xml")){
		unlink($absolute_path."/modules/mod_swmenupro/mod_swmenupro.xml");
	}
	
	if(sw_copydirr($absolute_path."/administrator/components/com_swmenupro/modules",$absolute_path."/modules",0757,false)){
	rename($absolute_path."/modules/mod_swmenupro/mod_swmenupro.sw",$absolute_path."/modules/mod_swmenupro/mod_swmenupro.xml");
	$module_msg="Successfully Installed swMenuPro Module";
	}else{
	$module_msg="Could Not Install swMenuPro Module.  Please visit the swMenuPro Upgrade/Repair facility by clicking <a href=\"index2.php?option=com_swmenupro&task=upgrade\">here.</a>\n";
	}
	$msg="<div align=\"center\">\n";
	$msg.="<table cellpadding=\"4\" cellspacing=\"0\" border=\"0\" align=\"center\" width=\"100%\"> \n";
	$msg.="<tr><td align=\"center\"><img src=\"components/com_swmenupro/images/swmenupro_logo_small.gif\" border=\"0\"/></td></tr>\n";
	$msg.="<tr><td align=\"center\"><br /> <b>Module Status: ".$module_msg."</b><br /></td></tr>\n";
	$msg.="<tr><td align=\"center\">swMenuPro has been sucessfully installed.  Thankyou for purchasing. <br /> </td></tr>\n";
    $msg.="<tr> \n";
    $msg.="<td width=\"100%\" align=\"center\">\n";
	$msg.="<a href=\"#\" target=\"_blank\">	\n";
	$msg.="<img src=\"components/com_swmenupro/images/swmenupro_footer.png\" alt=\"\" border=\"0\" />\n";
	$msg.="</a><br/> SWmenuPro &copy;2005\n";
	$msg.="</td> \n";
    $msg.="</tr> \n";
    $msg.="</table> \n";
    $msg.="</div> \n";	
	echo $msg;
	
	
	$database->setQuery("CREATE TABLE `#__swmenu_extended` (
  			`ext_id` int(11) NOT NULL auto_increment,
 			`menu_id` int(11) NOT NULL default '0',
  			`image` varchar(100) default NULL,
  			`image_over` varchar(100) default NULL,
  			`moduleID` int(11) NOT NULL default '0',
  			`show_name` int(2) NOT NULL default '1',
  			`image_align` varchar(20) NOT NULL default 'left',
  			`target_level` int(11) NOT NULL default '1',
  			`normal_css` mediumtext,
  			`over_css` mediumtext,
  			`show_item` int(11) NOT NULL default '1',
  			`extra` mediumtext,
 			 PRIMARY KEY  (`ext_id`)
			) ");
		$database->query();
		
		
		$database->setQuery("CREATE TABLE `#__swmenu_config` (
  			`id` int(11) NOT NULL default '0',
  			`main_top` smallint(8) default '0',
 			`main_left` smallint(8) default '0',
  			`main_height` smallint(8) default '20',
  			`sub_border_over` varchar(30) default '0',
  			`main_width` smallint(8) default '100',
  			`sub_width` smallint(8) default '100',
  			`main_back` varchar(7) default '#4682B4',
  			`main_over` varchar(7) default '#5AA7E5',
  			`sub_back` varchar(7) default '#4682B4',
  			`sub_over` varchar(7) default '#5AA7E5',
  			`sub_border` varchar(30) default '#FFFFFF',
  			`main_font_size` smallint(8) default '0',
  			`sub_font_size` smallint(8) default '0',
  			`main_border_over` varchar(30) default '0',
  			`sub_font_color` varchar(7) default '#000000',
  			`main_border` varchar(30) default '#FFFFFF',
  			`main_font_color` varchar(7) default '#000000',
  			`sub_font_color_over` varchar(7) default '#FFFFFF',
  			`main_font_color_over` varchar(7) default '#FFFFFF',
  			`main_align` varchar(8) default 'left',
  			`sub_align` varchar(8) default 'left',
  			`sub_height` smallint(7) default '20',
  			`position` varchar(10) default 'absolute',
  			`orientation` varchar(20) default 'horizontal',
  			`font_family` varchar(50) default 'Arial',
  			`font_weight` varchar(10) default 'normal',
  			`font_weight_over` varchar(10) default 'normal',
  			`level2_sub_top` int(11) default '0',
  			`level2_sub_left` int(11) default '0',
  			`level1_sub_top` int(11) NOT NULL default '0',
  			`level1_sub_left` int(11) NOT NULL default '0',
  			`main_back_image` varchar(100) default NULL,
  			`main_back_image_over` varchar(100) default NULL,
  			`sub_back_image` varchar(100) default NULL,
  			`sub_back_image_over` varchar(100) default NULL,
  			`specialA` varchar(50) default '80',
  			`main_padding` varchar(40) default '0px 0px 0px 0px',
  			`sub_padding` varchar(40) default '0px 0px 0px 0px',
  			`specialB` varchar(100) default '50',
  			`sub_font_family` varchar(50) default 'Arial',
  			`extra` mediumtext,
  			PRIMARY KEY  (`id`)
			)");
		$database->query();
	
	
    return ;
}



function sw_copydirr($fromDir,$toDir,$chmod=0757,$verbose=false)
/*
copies everything from directory $fromDir to directory $toDir
and sets up files mode $chmod
*/
{
	//* Check for some errors
	$errors=array();
	$messages=array();
	if (!is_writable($toDir))
	$errors[]='target '.$toDir.' is not writable';
	if (!is_dir($toDir))
	$errors[]='target '.$toDir.' is not a directory';
	if (!is_dir($fromDir))
	$errors[]='source '.$fromDir.' is not a directory';
	if (!empty($errors))
	{
		if ($verbose)
		foreach($errors as $err)
		echo '<strong>Error</strong>: '.$err.'<br />';
		return false;
	}
	//*/
	$exceptions=array('.','..');
	//* Processing
	$handle=opendir($fromDir);
	while (false!==($item=readdir($handle)))
	if (!in_array($item,$exceptions))
	{
		//* cleanup for trailing slashes in directories destinations
		$from=str_replace('//','/',$fromDir.'/'.$item);
		$to=str_replace('//','/',$toDir.'/'.$item);
		//*/
		if (is_file($from))
		{
			if (@copy($from,$to))
			{
				chmod($to,$chmod);
				touch($to,filemtime($from)); // to track last modified time
				$messages[]='File copied from '.$from.' to '.$to;
			}
			else
			$errors[]='cannot copy file from '.$from.' to '.$to;
		}
		if (is_dir($from))
		{
			if (@mkdir($to))
			{
				chmod($to,$chmod);
				$messages[]='Directory created: '.$to;
			}
			else
			$errors[]='cannot create directory '.$to;
			sw_copydirr($from,$to,$chmod,$verbose);
		}
	}
	closedir($handle);
	//*/
	//* Output
	if ($verbose)
	{
		foreach($errors as $err)
		echo '<strong>Error</strong>: '.$err.'<br />';
		foreach($messages as $msg)
		echo $msg.'<br />';
	}
	//*/
	return true;
}

function sw_sw_deldir( $dir ) {
	$handle = opendir($dir);
  	     while (false!==($item = readdir($handle)))
  	     {
  	         if($item != '.' && $item != '..')
  	         {
  	             if(is_dir($dir.'/'.$item)) 
  	             {
  	                 sw_sw_deldir($dir.'/'.$item);
  	             }else{
  	                 unlink($dir.'/'.$item);
  	             }
  	         }
  	     }
  	     closedir($handle);
  	     if(rmdir($dir))
  	     {
  	         $success = true;
  	     }
  	     return $success;
  	 }
?>
