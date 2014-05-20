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
	'PHPSHOP_USER_FORM_EMAIL' => 'อีเมล์',
	'PHPSHOP_SHOPPER_LIST_LBL' => 'ผู้ซื้อ',
	'PHPSHOP_SHOPPER_FORM_BILLTO_LBL' => 'ที่อยู่ใบแจ้งหนี้',
	'PHPSHOP_SHOPPER_FORM_USERNAME' => 'ชื่อผู้ใช้งาน',
	'PHPSHOP_AFFILIATE_MOD' => 'ผู้ดูแลระบบสมาชิกเครือข่าย',
	'PHPSHOP_AFFILIATE_LIST_LBL' => 'สมาชิกเครือข่าย',
	'PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME' => 'ชื่อสมาชิก',
	'PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE' => 'เลือก',
	'PHPSHOP_AFFILIATE_LIST_RATE' => 'อัตรา',
	'PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL' => 'จำนวนเดือน',
	'PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION' => 'ค่าคอมมิชชั่น',
	'PHPSHOP_AFFILIATE_LIST_ORDERS' => 'เรียงลำดับ',
	'PHPSHOP_AFFILIATE_EMAIL_WHO' => 'อีเมล์ถึง (* = ทั้งหมด)',
	'PHPSHOP_AFFILIATE_EMAIL_CONTENT' => 'อีเมล์ของท่าน',
	'PHPSHOP_AFFILIATE_EMAIL_SUBJECT' => 'หัวข้อ',
	'PHPSHOP_AFFILIATE_EMAIL_STATS' => 'รวมสถิติปัจจุบัน',
	'PHPSHOP_AFFILIATE_FORM_RATE' => 'อัตราค่าคอมมิชชั่น (เปอร์เซ็นต์)',
	'PHPSHOP_AFFILIATE_FORM_ACTIVE' => 'เลือก?',
	'VM_AFFILIATE_SHOWINGDETAILS_FOR' => 'แสดงรายละเอียดสำหรับ',
	'VM_AFFILIATE_LISTORDERS' => 'แสดงรายการ',
	'VM_AFFILIATE_MONTH' => 'เดือน',
	'VM_AFFILIATE_CHANGEVIEW' => 'เปลี่ยนมุมมอง',
	'VM_AFFILIATE_ORDERSUMMARY_LBL' => 'สรุปรายการ',
	'VM_AFFILIATE_ORDERLIST_ORDERREF' => 'รายการอ้างอิง',
	'VM_AFFILIATE_ORDERLIST_DATEORDERED' => 'วันสั่งรายการ',
	'VM_AFFILIATE_ORDERLIST_ORDERTOTAL' => 'รายการทั้งหมด',
	'VM_AFFILIATE_ORDERLIST_COMMISSION' => 'คอมมิชชั่น (อัตรา)',
	'VM_AFFILIATE_ORDERLIST_ORDERSTATUS' => 'สถานะรายการ'
); $VM_LANG->initModule( 'affiliate', $langvars );
?>