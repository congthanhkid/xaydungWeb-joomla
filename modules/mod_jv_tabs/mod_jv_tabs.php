<?php
/**
 * @version 1.5.x
 * @package JoomVision Project
 * @email webmaster@joomvision.com
 * @copyright (C) 2008 http://www.JoomVision.com. All rights reserved.
 */
defined('_JEXEC') or die('Restricted access');// no direct access
require_once (dirname(__FILE__).DS.'helper.php');
$jvTabsHelper = new JVTabsHelper($params);
$jvTabStyle = $params->get('jv_tabs_style');
$tabType = $params->get('type');
$listCats = $listArticles =  array();
$noHeadline = $params->get('categoryID-leading_count');
$isLinkSubTab = $params->get('categoryID-link');
if($isLinkSubTab == 'subtab') $isLinkSubTab = 1;
else $isLinkSubTab = 0;
$isReadMore = $params->get('categoryID-readmore');
$readMoreText = $params->get('categoryID-readmoreText');
$isDisplayThumb = $params->get('thumb_display');
if($isDisplayThumb == "display") $isShowThumb = 1;
else $isShowThumb = 0;
if($tabType=='categoryID') {	
	$listArticles = $jvTabsHelper->getListContentArticle($listCats);
	if(count($listArticles)) require(JModuleHelper::getLayoutPath('mod_jv_tabs',$jvTabStyle));	
} else if($tabType == 'k2_content'){
	$listArticles = $jvTabsHelper->getListK2Items($listCats);
	if(count($listArticles)) require(JModuleHelper::getLayoutPath('mod_jv_tabs',$jvTabStyle));
} else {	
	$aryModule = $jvTabsHelper->parseTabModuleId($aryMod);
	$aryMod = $jvTabsHelper->getModuleTitle($aryModule);	
	if(count($aryModule)) require(JModuleHelper::getLayoutPath('mod_jv_tabs',$jvTabStyle));
}
?>