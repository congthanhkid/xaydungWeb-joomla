<?php
/**
 * @package 	mod_bt_floater - BT Floater Module
 * @version		1.0
 * @created		April 2012

 * @author		BowThemes
 * @email		support@bowthems.com
 * @website		http://bowthemes.com
 * @support		Forum - http://bowthemes.com/forum/
 * @copyright	Copyright (C) 2011 Bowthemes. All rights reserved.
 * @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 *
 */

// no direct access
defined('_JEXEC') or die('Restricted access');


class modBtFloaterHelper {

	function fetchHead($params){
		$db = JFactory::getDBO();
		$document	= &JFactory::getDocument();
		$header = $document->getHeadData();
		$mainframe = JFactory::getApplication();
		$template = $mainframe->getTemplate();

		$y 	= $params->get('y','150');
		$x  = $params->get('x','0');
		$dir = $params->get('left_right','right');
		$module_id = $params->get('module','');
		$db->setQuery("SELECT title, module FROM #__modules WHERE id=".$module_id);
   		$results = $db->loadObjectList();
   		$btmodule = $results[0];
   		$module_content = JModuleHelper::getModule($btmodule->module,$module->title);
   		echo $content = "<div id='floater_content_".$dir."' style='display:none'>".str_replace("\n","",JModuleHelper::renderModule($module_content))."</div>";
   		
		$document->addScript(JURI::root().'modules/mod_bt_floater/tmpl/js/default.js');
		
		$js = "window.addEvent('load', function() {
			createFloating('".$dir."');
			window.addEvent('scroll', function(event) {
				moveFollow".$dir."(".$x.",".$y.");
			});
		});";
		$css = "#floater_".$dir."{position: absolute;z-index: 10000;".$dir.":".$x."px;top:".$y."px;}";
		$document->addScriptDeclaration($js);
		$document->addStyleDeclaration($css);
	}
}
?>