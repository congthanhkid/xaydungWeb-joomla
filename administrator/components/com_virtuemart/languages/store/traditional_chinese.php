<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : traditional_chinese.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'CHARSET' => 'BIG5',
	'PHPSHOP_USER_FORM_FIRST_NAME' => '¦W',
	'PHPSHOP_USER_FORM_LAST_NAME' => '©m',
	'PHPSHOP_USER_FORM_MIDDLE_NAME' => '¤¤¦W',
	'PHPSHOP_USER_FORM_COMPANY_NAME' => '¤½¥q¦W',
	'PHPSHOP_USER_FORM_ADDRESS_1' => '¦a§} 1',
	'PHPSHOP_USER_FORM_ADDRESS_2' => '¦a§} 2',
	'PHPSHOP_USER_FORM_CITY' => '«°¥«',
	'PHPSHOP_USER_FORM_STATE' => '¬Ù¥÷/¦a°Ï',
	'PHPSHOP_USER_FORM_ZIP' => '¶l»¼°Ï¸¹',
	'PHPSHOP_USER_FORM_COUNTRY' => '°ê®a',
	'PHPSHOP_USER_FORM_PHONE' => '¹q¸Ü',
	'PHPSHOP_USER_FORM_PHONE2' => 'Mobile Phone',
	'PHPSHOP_USER_FORM_FAX' => '¶Ç¯u',
	'PHPSHOP_ISSHIP_LIST_PUBLISH_LBL' => '±Ò¥Î',
	'PHPSHOP_ISSHIP_FORM_UPDATE_LBL' => '°t¸m¹B°e¤è¦¡',
	'PHPSHOP_STORE_FORM_FULL_IMAGE' => '§¹¾ã¹Ï¤ù',
	'PHPSHOP_STORE_FORM_UPLOAD' => '¤W¶Ç¹Ï¤ù',
	'PHPSHOP_STORE_FORM_STORE_NAME' => '°Ó©±¦WºÙ',
	'PHPSHOP_STORE_FORM_COMPANY_NAME' => '°Ó©±¤½¥q¦WºÙ',
	'PHPSHOP_STORE_FORM_ADDRESS_1' => '¦a§}1',
	'PHPSHOP_STORE_FORM_ADDRESS_2' => '¦a§}2',
	'PHPSHOP_STORE_FORM_CITY' => '«°¥«',
	'PHPSHOP_STORE_FORM_STATE' => '¬Ù¥÷/¦a°Ï',
	'PHPSHOP_STORE_FORM_COUNTRY' => '°ê®a',
	'PHPSHOP_STORE_FORM_ZIP' => '¶l»¼°Ï¸¹',
	'PHPSHOP_STORE_FORM_CURRENCY' => '³f¹ô',
	'PHPSHOP_STORE_FORM_LAST_NAME' => '¦W',
	'PHPSHOP_STORE_FORM_FIRST_NAME' => '©m',
	'PHPSHOP_STORE_FORM_MIDDLE_NAME' => '¤¤¦W',
	'PHPSHOP_STORE_FORM_TITLE' => 'ºÙ©I',
	'PHPSHOP_STORE_FORM_PHONE_1' => '¹q¸Ü 1',
	'PHPSHOP_STORE_FORM_PHONE_2' => '¹q¸Ü 2',
	'PHPSHOP_STORE_FORM_DESCRIPTION' => '´y­z',
	'PHPSHOP_PAYMENT_METHOD_LIST_LBL' => '¥I´Ú¤è¦¡¦Cªí',
	'PHPSHOP_PAYMENT_METHOD_LIST_NAME' => '¦WºÙ',
	'PHPSHOP_PAYMENT_METHOD_LIST_CODE' => '¥N½X',
	'PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP' => 'ÅU«È¸s²Õ',
	'PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR' => '¥I´Ú¤è¦¡Ãþ«¬',
	'PHPSHOP_PAYMENT_METHOD_FORM_LBL' => '¥I´Ú¤è¦¡ªí³æ',
	'PHPSHOP_PAYMENT_METHOD_FORM_NAME' => '¥I´Ú¤è¦¡¦WºÙ',
	'PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP' => 'ÅU«È¸s²Õ',
	'PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT' => '§é¦©',
	'PHPSHOP_PAYMENT_METHOD_FORM_CODE' => '¥N½X',
	'PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER' => '±Æ¦C¶¶§Ç',
	'PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR' => '¥I´Ú¤è¦¡Ãþ«¬',
	'PHPSHOP_PAYMENT_FORM_CC' => '«H¥Î¥d',
	'PHPSHOP_PAYMENT_FORM_USE_PP' => '¨Ï¥Î¤ä¥I³B²zµ{§Ç',
	'PHPSHOP_PAYMENT_FORM_BANK_DEBIT' => '»È¦æ¶×´Ú',
	'PHPSHOP_PAYMENT_FORM_AO' => '¥u»Ý¦a§}/³f¨ì¥I´Ú',
	'PHPSHOP_STATISTIC_STATISTICS' => '²Î­p',
	'PHPSHOP_STATISTIC_CUSTOMERS' => 'ÅU«È',
	'PHPSHOP_STATISTIC_ACTIVE_PRODUCTS' => 'ºZ¾Pªº°Ó«~',
	'PHPSHOP_STATISTIC_INACTIVE_PRODUCTS' => 'º¢¾Pªº°Ó«~',
	'PHPSHOP_STATISTIC_NEW_ORDERS' => '·s­q³æ',
	'PHPSHOP_STATISTIC_NEW_CUSTOMERS' => '·sÅU«È',
	'PHPSHOP_CREDITCARD_NAME' => '«H¥Î¥d¦WºÙ',
	'PHPSHOP_CREDITCARD_CODE' => '«H¥Î¥d - short code',
	'PHPSHOP_YOUR_STORE' => '±zªº°Ó©±',
	'PHPSHOP_CONTROL_PANEL' => '±±¨î¥x',
	'PHPSHOP_CHANGE_PASSKEY_FORM' => 'Åã¥Ü/§ó§ï ±K½X/¥æ©ö½X',
	'PHPSHOP_TYPE_PASSWORD' => '½Ð¿é¤J±zªº¨Ï¥ÎªÌ±K½X',
	'PHPSHOP_CURRENT_TRANSACTION_KEY' => '¥Ø«eªº¥æ©ö½X',
	'PHPSHOP_CHANGE_PASSKEY_SUCCESS' => '¥æ©ö½X¤w§ó´«¦¨¥.',
	'VM_PAYMENT_CLASS_NAME' => 'Payment class name',
	'VM_PAYMENT_CLASS_NAME_TIP' => '(e.g. <strong>ps_netbanx</strong>) :<br />
default: ps_payment<br />
<i>Leave blank if you\'re not sure what to fill in!</i>',
	'VM_PAYMENT_EXTRAINFO' => 'Payment Extra Info',
	'VM_PAYMENT_EXTRAINFO_TIP' => 'Is shown on the Order Confirmation Page. Can be: HTML Form Code from your Payment Service Provider, Hints to the customer etc.',
	'VM_PAYMENT_ACCEPTED_CREDITCARDS' => 'Accepted Credit Card Types',
	'VM_PAYMENT_METHOD_DISCOUNT_TIP' => 'To turn the discount into a fee, use a negative value here (Example: <strong>-2.00</strong>).',
	'VM_PAYMENT_METHOD_DISCOUNT_MAX_AMOUNT' => 'Maximum discount amount',
	'VM_PAYMENT_METHOD_DISCOUNT_MIN_AMOUNT' => 'Minimum discount amount',
	'VM_PAYMENT_FORM_FORMBASED' => 'HTML-Form based (e.g. PayPal)',
	'VM_ORDER_EXPORT_MODULE_LIST_LBL' => 'Order Export Module List',
	'VM_ORDER_EXPORT_MODULE_LIST_NAME' => 'Name',
	'VM_ORDER_EXPORT_MODULE_LIST_DESC' => 'Description',
	'VM_STORE_FORM_ACCEPTED_CURRENCIES' => 'List of accepted currencies',
	'VM_STORE_FORM_ACCEPTED_CURRENCIES_TIP' => 'This list defines all those currencies you accept when people are buying something in your store. <strong>Note:</strong> All currencies selected here can be used at checkout! If you don\'t want that, just select your country\'s currency (=default).',
	'VM_EXPORT_MODULE_FORM_LBL' => 'Export Module Form',
	'VM_EXPORT_MODULE_FORM_NAME' => 'Export Module Name',
	'VM_EXPORT_MODULE_FORM_DESC' => 'Description',
	'VM_EXPORT_CLASS_NAME' => 'Export Class Name',
	'VM_EXPORT_CLASS_NAME_TIP' => '(e.g. <strong>ps_orders_csv</strong>) :<br /> default: ps_xmlexport<br /> <i>Leave blank if you\'re not sure what to fill in!</i>',
	'VM_EXPORT_CONFIG' => 'Export Extra Configuration',
	'VM_EXPORT_CONFIG_TIP' => 'Define Export configuration for user-defined export modules or define additional configuration. Code must be valid PHP-Code.',
	'VM_SHIPPING_MODULE_LIST_NAME' => 'Name',
	'VM_SHIPPING_MODULE_LIST_E_VERSION' => 'Version',
	'VM_SHIPPING_MODULE_LIST_HEADER_AUTHOR' => 'Author',
	'PHPSHOP_STORE_ADDRESS_FORMAT' => 'Store Address Format',
	'PHPSHOP_STORE_ADDRESS_FORMAT_TIP' => 'You can use the following placeholders here',
	'PHPSHOP_STORE_DATE_FORMAT' => 'Store Date Format',
	'VM_PAYMENT_METHOD_ID_NOT_PROVIDED' => 'Error: Payment Method ID was not provided.',
	'VM_SHIPPING_MODULE_CONFIG_LBL' => 'Shipping Module Configuration',
	'VM_SHIPPING_MODULE_CLASSERROR' => 'Could not instantiate Class {shipping_module}'
); $VM_LANG->initModule( 'store', $langvars );
?>