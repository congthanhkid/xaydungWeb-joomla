<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
require_once (dirname(__FILE__).DS.'helper.php');
$path = JModuleHelper::getLayoutPath('mod_jv_accordion_menu','default');
$actItemId = JRequest::getVar ('Itemid',1);
$isActiveExpand = $params->get('is_exppand_active');
$jvAMenuHelper = new modJVAMenuHelper($module->id);
if(file_exists($path)){
     require($path);
}    
?>