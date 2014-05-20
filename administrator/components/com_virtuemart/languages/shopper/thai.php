<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : thai.php 1071 2007-12-03 08:42:28Z thepisu $
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2008 soeren - All rights reserved.
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
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX' => 'แสดงราคารวมภาษี?',
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN' => 'กำหนดเพื่อแสดงให้ลูกค้าเห็นราคารวมภาษี หรือยกเว้นภาษี',
	'PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL' => 'ชื่อเรียก',
	'PHPSHOP_SHOPPER_GROUP_LIST_LBL' => 'กลุ่มผู้ซื้อ',
	'PHPSHOP_SHOPPER_GROUP_LIST_NAME' => 'ชื่อกลุ่ม',
	'PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION' => 'รายละเอียดกลุ่ม',
	'PHPSHOP_SHOPPER_GROUP_FORM_LBL' => 'แบบฟอร์มกลุ่มผู้ซื้อ',
	'PHPSHOP_SHOPPER_GROUP_FORM_NAME' => 'ชื่อกลุ่ม',
	'PHPSHOP_SHOPPER_GROUP_FORM_DESC' => 'รายละเอียดกลุ่ม',
	'PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT' => 'ส่วนลดสำหรับกลุ่มผู้ซื้อทั่วไป (%)',
	'PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP' => ' X ที่เป็นค่าบวก หมายถึง: ถ้าสินค้าไม่ได้มีการระบุราคาสำหรับกลุ่มผู้ซื้อ ราคาจะลดตามจำนวน X % จำนวนติดลบจะมีผลตรงข้าม'
); $VM_LANG->initModule( 'shopper', $langvars );
?>