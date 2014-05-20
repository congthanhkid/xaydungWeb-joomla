<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
$jvconfig = new JConfig();
$menustyle = $this->params->get('jv_menustyle');
$jvTools = new JV_Tools($this);
///-----------------------------------------------------///

$get_ms = JRequest::getVar('menustyle');

$cookie_ms = $jvTools->get_cookie('jvmenustyle_jvirrit');

if( $cookie_ms && $cookie_ms != "" )
	$menustyle = $cookie_ms;

if($get_ms) {
	$menustyle = $get_ms;
	$jvTools->set_cookie('jvmenustyle_jvirrit',$get_ms);
}
/*
 * Behavior 
 */
JHTML::_('behavior.mootools');

/*
 * VARIABLES 
 */

$default_menu = $this->params->get('menutype');
if (!$default_menu) $default_menu = 'mainmenu';
$menu = new MenuSystem($menustyle,$default_menu,$this->template); 

/* 
 *GZIP Compression
 */
$gzip  = ($this->params->get('gzip', 1)  == 0)?"false":"true";

///-----------------------------------------------------/// 

$front = ($jvTools->isHomePage() && $this->params->get('showfront',1)) ? true : false;

$showTools = $this->params->get('showtools',1);

/*
 *Auto Collapse Divs Functions
 */ 
$modLeft = $this->countModules('left');
$modRight = $this->countModules('right');

if(!$modLeft && !$modRight) {
	$jv_width = "-full";
} elseif(!$modLeft) {
	$jv_width = "-right";
}elseif($modLeft && $modRight) {
	$jv_width = "-col";
} elseif(!$modRight) {
	$jv_width = "-left";
} else {
	$jv_width = "";
}
?>