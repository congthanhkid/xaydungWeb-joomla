<?php

function com_uninstall()
{
	
	global $mainframe;
	$absolute_path=JPATH_ROOT;
  $live_site = $mainframe->isAdmin() ? $mainframe->getSiteURL() : JURI::base();
        $retstr = SWmenuProRemove();
        if(file_exists($absolute_path."/modules/mod_swmenupro/mod_swmenupro.php")){
		//unlink($mosConfig_absolute_path."/modules/mod_swmenupro.php");
		sw_sw_deldir($absolute_path."/modules/mod_swmenupro");
		
	}
	if(file_exists($absolute_path."/modules/mod_swmenupro.xml")){
		unlink($absolute_path."/modules/mod_swmenupro.xml");
	}
        return "SWmenuPro uninstalled succesfully<br /> $retstr";
}


function SWmenuProRemove () {
        $database = &JFactory::getDBO();
        $retstr = '';

        $query = "SELECT id, title, module, params FROM #__modules WHERE module='mod_swmenupro'";

        $database->setQuery( $query );
        $modules = $database->loadObjectList();
        if ($database->getErrorNum()) {
                $retstr .= "MA ".$database->stderr(true);
                return $retstr;
        }
        foreach ($modules as $module) {
               
                $sql = "DELETE FROM #__modules WHERE id='$module->id'";
                $database->setQuery($sql);
                $database->query();
        }
         $sql = "DROP TABLE #__swmenu_config";
                $database->setQuery($sql);
                $database->query();
         $sql = "DROP TABLE #__swmenu_extended";
                $database->setQuery($sql);
                $database->query();
        return $retstr;
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

