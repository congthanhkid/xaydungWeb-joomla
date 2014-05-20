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
	'PHPSHOP_USER_FORM_FIRST_NAME' => 'ชื่อ',
	'PHPSHOP_USER_FORM_LAST_NAME' => 'นามสกุล',
	'PHPSHOP_USER_FORM_MIDDLE_NAME' => 'ชื่อกลาง',
	'PHPSHOP_USER_FORM_COMPANY_NAME' => 'บริษัท',
	'PHPSHOP_USER_FORM_ADDRESS_1' => 'ที่อยู่ 1',
	'PHPSHOP_USER_FORM_ADDRESS_2' => 'ที่อยู่ 2',
	'PHPSHOP_USER_FORM_CITY' => 'อำเภอ',
	'PHPSHOP_USER_FORM_STATE' => 'เขต/จังหวัด',
	'PHPSHOP_USER_FORM_ZIP' => 'รหัสไปรษณีย์',
	'PHPSHOP_USER_FORM_COUNTRY' => 'ประเทศ',
	'PHPSHOP_USER_FORM_PHONE' => 'โทรศัพท์',
	'PHPSHOP_USER_FORM_PHONE2' => 'โทรศัพท์มือถือ',
	'PHPSHOP_USER_FORM_FAX' => 'โทรสาร',
	'PHPSHOP_ISSHIP_LIST_PUBLISH_LBL' => 'เลือก',
	'PHPSHOP_ISSHIP_FORM_UPDATE_LBL' => 'ตั้งค่าวิธีการขนส่ง',
	'PHPSHOP_STORE_FORM_FULL_IMAGE' => 'รูปภาพ',
	'PHPSHOP_STORE_FORM_UPLOAD' => 'อัพโหลดรูปภาพ',
	'PHPSHOP_STORE_FORM_STORE_NAME' => 'ชื่อร้านค้า',
	'PHPSHOP_STORE_FORM_COMPANY_NAME' => 'ชื่อบริษัทฯ',
	'PHPSHOP_STORE_FORM_ADDRESS_1' => 'ที่อยู่ 1',
	'PHPSHOP_STORE_FORM_ADDRESS_2' => 'ที่อยู่ 2',
	'PHPSHOP_STORE_FORM_CITY' => 'อำเภอ',
	'PHPSHOP_STORE_FORM_STATE' => 'เขต/จังหวัด',
	'PHPSHOP_STORE_FORM_COUNTRY' => 'ประเทศ',
	'PHPSHOP_STORE_FORM_ZIP' => 'รหัสไปรษณีย์',
	'PHPSHOP_STORE_FORM_CURRENCY' => 'สกุลเงิน',
	'PHPSHOP_STORE_FORM_LAST_NAME' => 'นามสกุล',
	'PHPSHOP_STORE_FORM_FIRST_NAME' => 'ชื่อ',
	'PHPSHOP_STORE_FORM_MIDDLE_NAME' => 'ชื่อกลาง',
	'PHPSHOP_STORE_FORM_TITLE' => 'คำนำหน้าชื่อ',
	'PHPSHOP_STORE_FORM_PHONE_1' => 'โทรศัพท์ 1',
	'PHPSHOP_STORE_FORM_PHONE_2' => 'โทรศัพท์ 2',
	'PHPSHOP_STORE_FORM_DESCRIPTION' => 'รายละเอียด',
	'PHPSHOP_PAYMENT_METHOD_LIST_LBL' => 'วิธีการชำระเงิน',
	'PHPSHOP_PAYMENT_METHOD_LIST_NAME' => 'ชื่อ',
	'PHPSHOP_PAYMENT_METHOD_LIST_CODE' => 'รหัส',
	'PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP' => 'กลุ่มผู้ซื้อ',
	'PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR' => 'ประเภทวิธีชำระเงิน',
	'PHPSHOP_PAYMENT_METHOD_FORM_LBL' => 'แบบฟอร์มวิธีการชำระเงิน',
	'PHPSHOP_PAYMENT_METHOD_FORM_NAME' => 'ชื่อวิธีการชำระเงิน',
	'PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP' => 'กลุ่มผู้ซื้อ',
	'PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT' => 'ส่วนลด',
	'PHPSHOP_PAYMENT_METHOD_FORM_CODE' => 'รหัส',
	'PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER' => 'เรียงลำดับ',
	'PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR' => 'ประเภทวิธีชำระเงิน',
	'PHPSHOP_PAYMENT_FORM_CC' => 'บัตรเครดิต',
	'PHPSHOP_PAYMENT_FORM_USE_PP' => 'ใช้ขั้นตอนการชำระเงิน',
	'PHPSHOP_PAYMENT_FORM_BANK_DEBIT' => 'บัตรเดรบิต',
	'PHPSHOP_PAYMENT_FORM_AO' => 'ชำระเงินเมื่อรับสินค้า',
	'PHPSHOP_STATISTIC_STATISTICS' => 'สถิติ',
	'PHPSHOP_STATISTIC_CUSTOMERS' => 'ลูกค้า',
	'PHPSHOP_STATISTIC_ACTIVE_PRODUCTS' => 'สินค้าที่มีการเคลื่อนไหว',
	'PHPSHOP_STATISTIC_INACTIVE_PRODUCTS' => 'สินค้าที่ไม่มีการเคลื่อนไหว',
	'PHPSHOP_STATISTIC_NEW_ORDERS' => 'รายการสั่งซื้อใหม่',
	'PHPSHOP_STATISTIC_NEW_CUSTOMERS' => 'ลูกค้าใหม่',
	'PHPSHOP_CREDITCARD_NAME' => 'ชื่อบัตรเครดิต',
	'PHPSHOP_CREDITCARD_CODE' => 'รหัสย่อ',
	'PHPSHOP_YOUR_STORE' => 'ลายไทย ช๊อป',
	'PHPSHOP_CONTROL_PANEL' => 'บริหารร้านค้า',
	'PHPSHOP_CHANGE_PASSKEY_FORM' => 'แสดง/แก้ไข รหัสผ่าน/เลขรหัสการทำธุรกรรม',
	'PHPSHOP_TYPE_PASSWORD' => 'กรุณาป้อนรหัสผ่าน',
	'PHPSHOP_CURRENT_TRANSACTION_KEY' => 'เลขรหัสปัจจุบันสำหรับการทำธุรกรรม',
	'PHPSHOP_CHANGE_PASSKEY_SUCCESS' => 'เลขรหัสการทำธุรกรรมได้รับการเปลี่ยนเรียบร้อยแล้ว',
	'VM_PAYMENT_CLASS_NAME' => 'Payment class name',
	'VM_PAYMENT_CLASS_NAME_TIP' => '(e.g. <strong>ps_netbanx</strong>) :<br />
default: ps_payment<br />
<i>Leave blank if you\'re not sure what to fill in!</i>',
	'VM_PAYMENT_EXTRAINFO' => 'Payment Extra Info',
	'VM_PAYMENT_EXTRAINFO_TIP' => 'Is shown on the Order Confirmation Page. Can be: HTML Form Code from your Payment Service Provider, Hints to the customer etc.',
	'VM_PAYMENT_ACCEPTED_CREDITCARDS' => 'Accepted Credit Card Types',
	'VM_PAYMENT_METHOD_DISCOUNT_TIP' => 'To turn the discount into a fee, use a negative value here (Example: <strong>-2.00</strong>).',
	'VM_PAYMENT_METHOD_DISCOUNT_MAX_AMOUNT' => 'ส่วนลดสูงสุด',
	'VM_PAYMENT_METHOD_DISCOUNT_MIN_AMOUNT' => 'ส่วนลดต่ำสุด',
	'VM_PAYMENT_FORM_FORMBASED' => 'HTML-Form based (e.g. PayPal)',
	'VM_ORDER_EXPORT_MODULE_LIST_LBL' => 'Order Export Module List',
	'VM_ORDER_EXPORT_MODULE_LIST_NAME' => 'ชื่อ',
	'VM_ORDER_EXPORT_MODULE_LIST_DESC' => 'รายละเอียด',
	'VM_STORE_FORM_ACCEPTED_CURRENCIES' => 'List of accepted currencies',
	'VM_STORE_FORM_ACCEPTED_CURRENCIES_TIP' => 'This list defines all those currencies you accept when people are buying something in your store. <strong>Note:</strong> All currencies selected here can be used at checkout! If you don\'t want that, just select your country\'s currency (=default).',
	'VM_EXPORT_MODULE_FORM_LBL' => 'Export Module Form',
	'VM_EXPORT_MODULE_FORM_NAME' => 'Export Module Name',
	'VM_EXPORT_MODULE_FORM_DESC' => 'รายละเอียด',
	'VM_EXPORT_CLASS_NAME' => 'Export Class Name',
	'VM_EXPORT_CLASS_NAME_TIP' => '(e.g. <strong>ps_orders_csv</strong>) :<br /> default: ps_xmlexport<br /> <i>Leave blank if you\'re not sure what to fill in!</i>',
	'VM_EXPORT_CONFIG' => 'Export Extra Configuration',
	'VM_EXPORT_CONFIG_TIP' => 'Define Export configuration for user-defined export modules or define additional configuration. Code must be valid PHP-Code.',
	'VM_SHIPPING_MODULE_LIST_NAME' => 'ชื่อ',
	'VM_SHIPPING_MODULE_LIST_E_VERSION' => 'เวอร์ชั่น',
	'VM_SHIPPING_MODULE_LIST_HEADER_AUTHOR' => 'ผู้แต่ง',
	'PHPSHOP_STORE_ADDRESS_FORMAT' => 'Store Address Format',
	'PHPSHOP_STORE_ADDRESS_FORMAT_TIP' => 'You can use the following placeholders here',
	'PHPSHOP_STORE_DATE_FORMAT' => 'Store Date Format',
	'VM_PAYMENT_METHOD_ID_NOT_PROVIDED' => 'Error: Payment Method ID was not provided.',
	'VM_SHIPPING_MODULE_CONFIG_LBL' => 'Shipping Module Configuration',
	'VM_SHIPPING_MODULE_CLASSERROR' => 'Could not instantiate Class {shipping_module}'
); $VM_LANG->initModule( 'store', $langvars );
?>