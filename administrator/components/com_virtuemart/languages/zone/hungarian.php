<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : hungarian.php 1247 2008-02-13 08:42:28Z pedrohsi $
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2007 soeren - All rights reserved.
* @translator soeren, pedrohsi
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
*
* http://virtuemart.net
*/
global $VM_LANG;
$langvars = array (
	'CHARSET' => 'UTF-8',
	'PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL' => 'Ország',
	'PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL' => 'Rendelje hozzá egy zónához',
	'PHPSHOP_ASSIGN_ZONE_PG_LBL' => 'Hozzárendelés zónákhoz',
	'PHPSHOP_ZONE_FORM_NAME_LBL' => 'Zóna név',
	'PHPSHOP_ZONE_FORM_DESC_LBL' => 'Zóna leírás',
	'PHPSHOP_ZONE_FORM_COST_PER_LBL' => 'Zóna költség tételenként',
	'PHPSHOP_ZONE_FORM_COST_LIMIT_LBL' => 'Zóna költséghatár',
	'PHPSHOP_ZONE_LIST_LBL' => 'Zóna lista',
	'PHPSHOP_ZONE_LIST_NAME_LBL' => 'Zóna név',
	'PHPSHOP_ZONE_LIST_DESC_LBL' => 'Zóna leírás',
	'PHPSHOP_ZONE_LIST_COST_PER_LBL' => 'Zóna költség tételenként',
	'PHPSHOP_ZONE_LIST_COST_LIMIT_LBL' => 'Zóna költséghatár',
	'VM_ZONE_ASSIGN_PERITEM' => 'Elemenként',
	'VM_ZONE_ASSIGN_LIMIT' => 'Limit',
	'VM_ZONE_EDITZONE' => 'Zóna szerkesztése'
); $VM_LANG->initModule( 'zone', $langvars );
?>