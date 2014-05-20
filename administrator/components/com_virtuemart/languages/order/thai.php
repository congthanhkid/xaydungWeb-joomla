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
	'PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL' => 'บันทึกการชำระเงิน',
	'PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL' => 'ค่าขนส่ง',
	'PHPSHOP_ORDER_STATUS_LIST_CODE' => 'รหัสสถานะ',
	'PHPSHOP_ORDER_STATUS_LIST_NAME' => 'ชื่อสถานะ',
	'PHPSHOP_ORDER_STATUS_FORM_LBL' => 'สถานะการสั่งซื้อ',
	'PHPSHOP_ORDER_STATUS_FORM_CODE' => 'รหัสสถานะ',
	'PHPSHOP_ORDER_STATUS_FORM_NAME' => 'ชื่อสถานะ',
	'PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER' => 'เรียงลำดับ',
	'PHPSHOP_COMMENT' => 'หมายเหตุ',
	'PHPSHOP_ORDER_LIST_NOTIFY' => 'แจ้งลูกค้าให้ทราบ?',
	'PHPSHOP_ORDER_LIST_NOTIFY_ERR' => 'กรุณาเปลี่ยนสถานะการสั่งซื้อก่อน!',
	'PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT' => 'รวมไว้ในคอมเมนท์?',
	'PHPSHOP_ORDER_HISTORY_DATE_ADDED' => 'เพิ่มวัน',
	'PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED' => 'แจ้งลูกค้า?',
	'PHPSHOP_ORDER_STATUS_CHANGE' => 'เปลี่ยนสถานะรายการ',
	'PHPSHOP_ORDER_LIST_PRINT_LABEL' => 'พิมพ์ป้าย',
	'PHPSHOP_ORDER_LIST_VOID_LABEL' => 'Void Label',
	'PHPSHOP_ORDER_LIST_TRACK' => 'แทร็ค',
	'VM_DOWNLOAD_STATS' => 'สถานะการดาวน์โหลด',
	'VM_DOWNLOAD_NOTHING_LEFT' => 'ไม่มีการดาวน์โหลดเหลืออยู่',
	'VM_DOWNLOAD_REENABLE' => 'เปิดการดาวน์โหลดอีกครั้ง',
	'VM_DOWNLOAD_REMAINING_DOWNLOADS' => 'ดาวน์โหลดที่ยังเหลืออยู่',
	'VM_DOWNLOAD_RESEND_ID' => 'ส่งกลับ ID ดาวน์โหลด',
	'VM_EXPIRY' => 'หมดอายุ',
	'VM_UPDATE_STATUS' => 'อัพเดจสถานะ',
	'VM_ORDER_LABEL_ORDERID_NOTVALID' => 'กรุณาจัดเตรียมตัวเลข Order ID ที่สมบูรณ์, ไม่ใช่ "{order_id}',
	'VM_ORDER_LABEL_NOTFOUND' => 'ไม่สามารถค้นพบรายการสินค้าของรายการซื้อขายในฐานข้อมูลได้.',
	'VM_ORDER_LABEL_NEVERGENERATED' => 'ไม่สามารถสร้างป้ายชื่อได้',
	'VM_ORDER_LABEL_CLASSCANNOT' => 'Class {ship_class} cannot get label images, why are we here?',
	'VM_ORDER_LABEL_SHIPPINGLABEL_LBL' => 'ป้ายที่อยู่ส่งของ',
	'VM_ORDER_LABEL_SIGNATURENEVER' => 'ลายเซ็นท์ไม่สามารถซ่อมแซมได้',
	'VM_ORDER_LABEL_TRACK_TITLE' => 'แทร็ค',
	'VM_ORDER_LABEL_VOID_TITLE' => 'Void Label',
	'VM_ORDER_LABEL_VOIDED_MSG' => 'Label for waybill {tracking_number} has been voided.',
	'VM_ORDER_PRINT_PO_IPADDRESS' => 'IP-ADDRESS',
	'VM_ORDER_STATUS_ICON_ALT' => 'สถานะ ไอคอน',
	'VM_ORDER_PAYMENT_CCV_CODE' => 'โค้ด CVV',
	'VM_ORDER_NOTFOUND' => 'ไม่พบรายการ อาจจะถูกลบไปแล้ว.',
	'PHPSHOP_ORDER_EDIT_ACTIONS' => 'Actions',
	'PHPSHOP_ORDER_EDIT' => 'Change Order Details',
	'PHPSHOP_ORDER_EDIT_ADD' => 'Add',
	'PHPSHOP_ORDER_EDIT_ADD_PRODUCT' => 'Add Product',
	'PHPSHOP_ORDER_EDIT_EDIT_ORDER' => 'Change Order',
	'PHPSHOP_ORDER_EDIT_ERROR_QUANTITY_MUST_BE_HIGHER_THAN_0' => 'Quantity must be greater than 0.',
	'PHPSHOP_ORDER_EDIT_PRODUCT_ADDED' => 'The Product was added to the Order',
	'PHPSHOP_ORDER_EDIT_PRODUCT_DELETED' => 'The Product was removed from this Order',
	'PHPSHOP_ORDER_EDIT_QUANTITY_UPDATED' => 'Quantity has been updated',
	'PHPSHOP_ORDER_EDIT_RETURN_PARENTS' => 'back to Parent Product',
	'PHPSHOP_ORDER_EDIT_CHOOSE_PRODUCT' => 'Select a Product',
	'PHPSHOP_ORDER_CHANGE_UPD_BILL' => 'Change Billto Address',
	'PHPSHOP_ORDER_CHANGE_UPD_SHIP' => 'Change Shipto Address',
	'PHPSHOP_ORDER_EDIT_SOMETHING_HAS_CHANGED' => ' has been changed',
	'PHPSHOP_ORDER_EDIT_CHOOSE_PRODUCT_BY_SKU' => 'Select SKU'
); $VM_LANG->initModule( 'order', $langvars );
?>
