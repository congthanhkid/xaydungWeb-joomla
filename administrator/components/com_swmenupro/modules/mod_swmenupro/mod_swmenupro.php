<?php

//error_reporting (E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
defined( '_JEXEC' ) or die( 'Restricted access' );


global  $my, $Itemid,$mainframe;
$absolute_path=JPATH_ROOT;
$live_site=JURI::base();
if(substr($live_site,(strlen($live_site)-1),1)=="/"){$live_site=substr($live_site,0,(strlen($live_site)-1));}
$config=&JFactory::getConfig();
$database = &JFactory::getDBO();
require_once($absolute_path."/modules/mod_swmenupro/styles.php");
require_once($absolute_path."/modules/mod_swmenupro/functions.php");

$do_menu=1;
$template = @$params->get( 'template' ) ? strval( $params->get('template') ) :  "All";
$language = @$params->get( 'language' ) ? strval( $params->get('language') ) :  "All";
$component = @$params->get( 'component' ) ? strval( $params->get('component') ) :  "All";

if($template!=""  && $template!="All"  ){
	if($mainframe->getTemplate()!=$template){$do_menu=0;}
}
if($language!=""  && $language!="All" ){
	$lang=$config->getValue('language');
	if($lang!=$language){$do_menu=0;}
}
if($component!=""  && $component!="All" ){

	if(trim( JRequest::getVar( 'option', '' ) )!=$component){$do_menu=0;}
}


if($do_menu){

$menu = @$params->get( 'menutype' ) ? strval( $params->get('menutype') ) :  "mainmenu";
$id = @$params->get( 'moduleID' )?intval( $params->get('moduleID') ) :  0;
$menustyle = @$params->get( 'menustyle' )? strval( $params->get('menustyle') ) :  "popoutmenu";
$parent_level = @$params->get('parent_level') ? intval( $params->get('parent_level') ) :  0;
$levels = @$params->get('levels') ? intval( $params->get('levels') ) :  25;
$parent_id = @$params->get('parentid') ? intval( $params->get('parentid') ) :  0;
$active_menu = @$params->get('active_menu') ? intval( $params->get('active_menu') ) :  0;
$hybrid = @$params->get('hybrid') ? intval( $params->get('hybrid') ) :  0;
$editor_hack = @$params->get('editor_hack') ? intval( $params->get('editor_hack') ) :  0;
$sub_indicator = @$params->get('sub_indicator') ? intval( $params->get('sub_indicator') ) :  0;
$css_load = @$params->get('cssload') ? $params->get('cssload'): 0 ;
$use_table = @$params->get('tables') ? $params->get('tables'): 0 ;
$cache = @$params->get('cache') ? $params->get('cache'): 0 ;
$cache_time = @$params->get('cache_time') ? $params->get('cache_time'): "1 hour" ;
$selectbox_hack = @$params->get('selectbox_hack') ? intval( $params->get('selectbox_hack') ) :  0;
$padding_hack = @$params->get('padding_hack') ? intval( $params->get('padding_hack') ) :  0;
$auto_position = @$params->get('auto_position') ? intval( $params->get('auto_position') ) :  0;
$show_shadow = @$params->get('show_shadow') ? intval( $params->get('show_shadow') ) :  0;

$my_task = trim( JRequest::getVar( 'task', '' ) );
if(($my_task=="edit" || $my_task=="new") && $editor_hack) {
  $editor_hack=0;
}else{
  $editor_hack=1;	
}


//echo $menustyle;

$query = "SELECT * FROM #__swmenu_config WHERE id = ".$id;
$database->setQuery( $query );
$result = $database->loadObjectList();
$swmenupro=array();
while (list ($key, $val) = each ($result[0]))
{
    $swmenupro[$key]=$val;
}

$content= "\n<!--SWmenuPro6.4 J1.5 ".$menustyle."-->\n";

if($menu && $id && $menustyle){
	if($css_load==1){
    	$headtag= "<link type='text/css' href='".$live_site."/modules/mod_swmenupro/styles/menu".$id.".css' rel='stylesheet' />\n";	
		$GLOBALS['mainframe']->addCustomHeadTag($headtag);
	}

	//echo $id.$menu.$hybrid.$parent_id.$levels;
	
	$ordered=swGetMenu($menu,$id,$hybrid,$cache,$cache_time,$use_table,$parent_id,$levels);
	if (count($ordered)){
 		if ($parent_level){ 
          $ordered=sw_getsubmenu($ordered,$parent_level,25,$menu);
             if($active_menu){$active_menu=sw_getactive($ordered);}
             if (count($ordered)){   
             $ordered = chain('ID', 'PARENT', 'ORDER', $ordered, $ordered[0]['mid'], $levels);
             $parent_id=$ordered[0]['mid'];
             }
       } 
 		if ($active_menu&&!$parent_level){   
 	    	$active_menu=sw_getactive($ordered);
 	    	$ordered = chain('ID', 'PARENT', 'ORDER', $ordered, $parent_id, $levels); 
 		}
 		
	}
	if(count($ordered)&&($swmenupro['orientation']=='horizontal/left')){
      $topcount=count(chain('ID', 'PARENT', 'ORDER', $ordered, $parent_id, 1));
      for($i=0;$i<count($ordered);$i++){
        $swmenu=$ordered[$i];
        if($swmenu['indent']==0){
          $ordered[$i]['ORDER']=$topcount;
          $topcount--;
        }
      }  
      $ordered = chain('ID', 'PARENT', 'ORDER', $ordered, $parent_id, $levels);     
   }


	if(count($ordered)){
		if ($menustyle == "clickmenu"){$content.= doClickMenu($ordered, $swmenupro, $css_load,$active_menu,$selectbox_hack,$padding_hack);}
		if ($menustyle == "treemenu"){$content.= doTreeMenu($ordered, $swmenupro, $css_load,$active_menu,$auto_position);}
		if ($menustyle == "popoutmenu"){$content.= doPopoutMenu($ordered, $swmenupro, $css_load, $active_menu);}
		if ($menustyle == "gosumenu" && $editor_hack){$content.= doGosuMenu($ordered, $swmenupro, $active_menu, $css_load,$selectbox_hack,$padding_hack,$auto_position);}
		if ($menustyle == "transmenu"){$content.= doTransMenu($ordered, $swmenupro, $active_menu, $sub_indicator, $parent_id, $css_load,$selectbox_hack,$show_shadow,$padding_hack,$auto_position);}
		if ($menustyle == "tabmenu"){$content.= doTabMenu($ordered, $swmenupro, $parent_id, $css_load,$active_menu);}
		if ($menustyle == "dynamictabmenu"){$content.= doDynamicTabMenu($ordered, $swmenupro, $parent_id, $css_load,$active_menu,$padding_hack,$auto_position);}
		if ($menustyle == "slideclick"){$content.= doSlideClick($ordered, $swmenupro, $css_load,$active_menu,$selectbox_hack,$padding_hack);}
		if ($menustyle == "clicktransmenu"){$content.= doClickTransMenu($ordered, $swmenupro, $css_load,$active_menu,$selectbox_hack,$padding_hack);}
	}
}
$content.="\n<!--End SWmenuPro menu module-->\n";

return $content;
}
?>



