<?php
/**
* @version 1.5.x
* @package JoomVision Project
* @email webmaster@joomvision.com
* @copyright (C) 2008 http://www.JoomVision.com. All rights reserved.
*/
defined('_JEXEC') or die('Restricted access');// no direct access
require_once (dirname(__FILE__).DS.'helper.php');

$moduleid = $module->id;
if($params->get('content') == 'com_content')
	$list_slidecontent = modJVContenFusionHelper::getSlideContent($params,$moduleid);
else
	$list_slidecontent = modJVContenFusionHelper::getSlideContentK2($params,$moduleid);

$showthumb = trim( $params->get('showthumb') ); //Show Image Thumbnail
$thumbsize = trim( $params->get('thumbsize') ); //Thumbnail Size
$timming = trim( $params->get('timming') );  //Time to rollover content
$autorun = trim( $params->get('autorun') ); //Autorun
if($autorun == 1)
	$autorun = 'auto';
else
	$autorun = 'manual';
require(JModuleHelper::getLayoutPath('mod_jv_contenfusion'));
?>