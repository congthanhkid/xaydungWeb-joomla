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
	'PHPSHOP_CARRIER_LIST_LBL' => 'ผู้ขนส่ง',
	'PHPSHOP_RATE_LIST_LBL' => 'อัตราค่าขนส่ง',
	'PHPSHOP_CARRIER_LIST_NAME_LBL' => 'ชื่อ',
	'PHPSHOP_CARRIER_LIST_ORDER_LBL' => 'เรียงลำดับ',
	'PHPSHOP_CARRIER_FORM_LBL' => 'สร้าง / แก้ไขผู้ขนส่ง',
	'PHPSHOP_RATE_FORM_LBL' => 'เพิ่ม / แก้ไขอัตราค่าขนส่ง',
	'PHPSHOP_RATE_FORM_NAME' => 'รายละเอียดอัตราค่าขนส่ง',
	'PHPSHOP_RATE_FORM_CARRIER' => 'ผู้ขนส่ง',
	'PHPSHOP_RATE_FORM_COUNTRY' => 'ประเทศ:<br /><br /><i>เลือกหลายรายการ: กดปุ่ม Shift หรือ Ctrl และคลิ๊กเมาท์</i>',
	'PHPSHOP_RATE_FORM_ZIP_START' => 'ช่วงรหัสไปรษณีย์จาก',
	'PHPSHOP_RATE_FORM_ZIP_END' => 'ถึง',
	'PHPSHOP_RATE_FORM_WEIGHT_START' => 'น้ำหนักต่ำสุด',
	'PHPSHOP_RATE_FORM_WEIGHT_END' => 'น้ำหนักสูงสุด',
	'PHPSHOP_RATE_FORM_PACKAGE_FEE' => 'ค่าบรรจุหีบห่อ',
	'PHPSHOP_RATE_FORM_CURRENCY' => 'สกุลเงิน',
	'PHPSHOP_RATE_FORM_LIST_ORDER' => 'เรียงลำดับ',
	'PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL' => 'ผู้ขนส่ง',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME' => 'รายละเอียดอัตราค่าขนส่ง',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART' => 'น้ำหนักขั้นต่ำ ...',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND' => '... ถึง',
	'PHPSHOP_CARRIER_FORM_NAME' => 'บริษัทผู้ขนส่ง',
	'PHPSHOP_CARRIER_FORM_LIST_ORDER' => 'เรียงลำดับ'
); $VM_LANG->initModule( 'shipping', $langvars );
?>