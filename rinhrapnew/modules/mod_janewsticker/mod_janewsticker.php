<?php
/**
 * ------------------------------------------------------------------------
 * JA Newsticker Module for Joomla 2.5
 * ------------------------------------------------------------------------
 * Copyright (C) 2004-2011 J.O.O.M Solutions Co., Ltd. All Rights Reserved.
 * @license - GNU/GPL, http://www.gnu.org/licenses/gpl.html
 * Author: J.O.O.M Solutions Co., Ltd
 * Websites: http://www.joomlart.com - http://www.joomlancers.com
 * ------------------------------------------------------------------------
 */

/**
 * JA News Sticker module allows display of article's title from sections or categories. \
 * You can configure the setttings in the right pane. Mutiple options for animations are also added, choose any one.
 * If you are using this module on Teline III template, * then the default module position is "headlines".
 **/
// no direct access
defined('_JEXEC') or die('Restricted access');

require_once (dirname(__FILE__) . DS . 'jast_articles.php');
// Include the syndicate functions only once
require_once (dirname(__FILE__) . DS . 'helper.php');

if (!defined('_MODE_JANEWSSTICKER_ASSETS_')) {
    define('_MODE_JANEWSSTICKER_ASSETS_', 1);

    JHTML::stylesheet('modules/' . $module->module . '/assets/style.css');

    if (is_file(JPATH_SITE . DS . 'templates' . DS . JFactory::getApplication()->getTemplate() . DS . 'css' . DS . $module->module . ".css"))
        JHTML::stylesheet('templates/' . JFactory::getApplication()->getTemplate() . '/css/' . $module->module . ".css");

    JHTML::script('modules/' . $module->module . '/assets/script.js', true);
}

$showLink = $params->get('link_title');
$using_mode = $params->get('using_mode', 'categories_selected');
$userRSS = (trim($using_mode) == 'rss' || trim($using_mode) == 'external') ? true : false;
$target = $params->get('target');
$separator = $params->get('separator');
$moduleHeight = $params->get('height', 28);
$moduleID = 'jalh-modid' . $module->id;
$titleMaxChars = (int) $params->get('title_max_chars', 60);
$descMaxChars = (int) $params->get('decription_max_chars', 60);
$moduleBorder = $params->get('border');
$showDesc = $params->get('display_description');
$animationType = $params->get('animation_type', 'horizontal');
$seperator = $params->get('separator');
$aClass = ($animationType == 'horizontal_stripe') ? 'class="ja-headlines-item"' : '';
// load js and css file
// listing social apps
$list = modJANewStickerHelper::getList($params);
$total = count($list);
//render layout.
require (JModuleHelper::getLayoutPath('mod_janewsticker'));
if (!empty($list)) {
    require (dirname(__FILE__) . DS . 'tmpl' . DS . 'jssetup.php');
}
?>

