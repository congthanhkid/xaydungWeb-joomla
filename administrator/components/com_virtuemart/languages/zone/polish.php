<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : polish.php 1071 2007-12-03 08:42:28Z thepisu $
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2007 soeren - All rights reserved.
* @translator soeren
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
	'CHARSET' => 'ISO-8859-1',
	'PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL' => 'Kraj',
	'PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL' => 'Przypisz do strefy',
	'PHPSHOP_ASSIGN_ZONE_PG_LBL' => 'Przypisz strefy',
	'PHPSHOP_ZONE_FORM_NAME_LBL' => 'Nazwa strefy',
	'PHPSHOP_ZONE_FORM_DESC_LBL' => 'Opis strefy',
	'PHPSHOP_ZONE_FORM_COST_PER_LBL' => 'Koszty na produkt w strefie',
	'PHPSHOP_ZONE_FORM_COST_LIMIT_LBL' => 'Limit kosztów strefy',
	'PHPSHOP_ZONE_LIST_LBL' => 'Lista stref',
	'PHPSHOP_ZONE_LIST_NAME_LBL' => 'Nazwa strefy',
	'PHPSHOP_ZONE_LIST_DESC_LBL' => 'Opis strefy',
	'PHPSHOP_ZONE_LIST_COST_PER_LBL' => 'Koszty na produkt w strefie',
	'PHPSHOP_ZONE_LIST_COST_LIMIT_LBL' => 'Limit kosztów strefy',
	'VM_ZONE_ASSIGN_PERITEM' => 'Per Item',
	'VM_ZONE_ASSIGN_LIMIT' => 'Limit',
	'VM_ZONE_EDITZONE' => 'Edit This Zone'
); $VM_LANG->initModule( 'zone', $langvars );
?>