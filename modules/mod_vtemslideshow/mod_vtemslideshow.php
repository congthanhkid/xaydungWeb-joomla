<?php
/**
* @Copyright Copyright (C) 2010 VTEM . All rights reserved.
* @license GNU/GPL http://www.gnu.org/copyleft/gpl.html
* @link     	http://www.vtem.net
**/
// no direct access
defined('_JEXEC') or die('Restricted access');
require_once (dirname(__FILE__).DS.'helper.php');
$imagePath 	= modVtemSlideshowHelper::cleanDir($params->get( 'imagePath', 'images/stories/fruit' ));
$sortCriteria = $params->get( 'sortCriteria', 0);
$sortOrder = $params->get( 'sortOrder', 'asc');
$sortOrderManual = $params->get( 'sortOrderManual', '');
if (trim($sortOrderManual) != "")
	$images = explode(",", $sortOrderManual);
else
$images = modVtemSlideshowHelper::imageList($imagePath, $sortCriteria, $sortOrder);
require(JModuleHelper::getLayoutPath('mod_vtemslideshow'));