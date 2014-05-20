<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : thai.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'CHARSET' => 'UTF-8',
	'PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL' => 'ประเทศ',
	'PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL' => 'ระบุโซน',
	'PHPSHOP_ASSIGN_ZONE_PG_LBL' => 'ระบุโซน',
	'PHPSHOP_ZONE_FORM_NAME_LBL' => 'ชื่อโซน',
	'PHPSHOP_ZONE_FORM_DESC_LBL' => 'รายละเอียดโซน',
	'PHPSHOP_ZONE_FORM_COST_PER_LBL' => 'ค่าใช้จ่ายต่อรายการ',
	'PHPSHOP_ZONE_FORM_COST_LIMIT_LBL' => 'วงเงินค่าใช้จ่าย',
	'PHPSHOP_ZONE_LIST_LBL' => 'โซน',
	'PHPSHOP_ZONE_LIST_NAME_LBL' => 'ชื่อโซน',
	'PHPSHOP_ZONE_LIST_DESC_LBL' => 'รายละเอียดโซน',
	'PHPSHOP_ZONE_LIST_COST_PER_LBL' => 'ค่าใช้จ่ายต่อรายการ',
	'PHPSHOP_ZONE_LIST_COST_LIMIT_LBL' => 'วงเงินค่าใช้จ่าย',
	'VM_ZONE_ASSIGN_PERITEM' => 'ต่อชิ้น',
	'VM_ZONE_ASSIGN_LIMIT' => 'จำกัด',
	'VM_ZONE_EDITZONE' => 'แก้ไข Zone นี้'
); $VM_LANG->initModule( 'zone', $langvars );
?>