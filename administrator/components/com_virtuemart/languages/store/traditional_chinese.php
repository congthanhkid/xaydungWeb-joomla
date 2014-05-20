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
	'PHPSHOP_USER_FORM_FIRST_NAME' => '�W',
	'PHPSHOP_USER_FORM_LAST_NAME' => '�m',
	'PHPSHOP_USER_FORM_MIDDLE_NAME' => '���W',
	'PHPSHOP_USER_FORM_COMPANY_NAME' => '���q�W',
	'PHPSHOP_USER_FORM_ADDRESS_1' => '�a�} 1',
	'PHPSHOP_USER_FORM_ADDRESS_2' => '�a�} 2',
	'PHPSHOP_USER_FORM_CITY' => '����',
	'PHPSHOP_USER_FORM_STATE' => '�٥�/�a��',
	'PHPSHOP_USER_FORM_ZIP' => '�l���ϸ�',
	'PHPSHOP_USER_FORM_COUNTRY' => '��a',
	'PHPSHOP_USER_FORM_PHONE' => '�q��',
	'PHPSHOP_USER_FORM_PHONE2' => 'Mobile Phone',
	'PHPSHOP_USER_FORM_FAX' => '�ǯu',
	'PHPSHOP_ISSHIP_LIST_PUBLISH_LBL' => '�ҥ�',
	'PHPSHOP_ISSHIP_FORM_UPDATE_LBL' => '�t�m�B�e�覡',
	'PHPSHOP_STORE_FORM_FULL_IMAGE' => '����Ϥ�',
	'PHPSHOP_STORE_FORM_UPLOAD' => '�W�ǹϤ�',
	'PHPSHOP_STORE_FORM_STORE_NAME' => '�ө��W��',
	'PHPSHOP_STORE_FORM_COMPANY_NAME' => '�ө����q�W��',
	'PHPSHOP_STORE_FORM_ADDRESS_1' => '�a�}1',
	'PHPSHOP_STORE_FORM_ADDRESS_2' => '�a�}2',
	'PHPSHOP_STORE_FORM_CITY' => '����',
	'PHPSHOP_STORE_FORM_STATE' => '�٥�/�a��',
	'PHPSHOP_STORE_FORM_COUNTRY' => '��a',
	'PHPSHOP_STORE_FORM_ZIP' => '�l���ϸ�',
	'PHPSHOP_STORE_FORM_CURRENCY' => '�f��',
	'PHPSHOP_STORE_FORM_LAST_NAME' => '�W',
	'PHPSHOP_STORE_FORM_FIRST_NAME' => '�m',
	'PHPSHOP_STORE_FORM_MIDDLE_NAME' => '���W',
	'PHPSHOP_STORE_FORM_TITLE' => '�٩I',
	'PHPSHOP_STORE_FORM_PHONE_1' => '�q�� 1',
	'PHPSHOP_STORE_FORM_PHONE_2' => '�q�� 2',
	'PHPSHOP_STORE_FORM_DESCRIPTION' => '�y�z',
	'PHPSHOP_PAYMENT_METHOD_LIST_LBL' => '�I�ڤ覡�C��',
	'PHPSHOP_PAYMENT_METHOD_LIST_NAME' => '�W��',
	'PHPSHOP_PAYMENT_METHOD_LIST_CODE' => '�N�X',
	'PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP' => '�U�ȸs��',
	'PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR' => '�I�ڤ覡����',
	'PHPSHOP_PAYMENT_METHOD_FORM_LBL' => '�I�ڤ覡���',
	'PHPSHOP_PAYMENT_METHOD_FORM_NAME' => '�I�ڤ覡�W��',
	'PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP' => '�U�ȸs��',
	'PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT' => '�馩',
	'PHPSHOP_PAYMENT_METHOD_FORM_CODE' => '�N�X',
	'PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER' => '�ƦC����',
	'PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR' => '�I�ڤ覡����',
	'PHPSHOP_PAYMENT_FORM_CC' => '�H�Υd',
	'PHPSHOP_PAYMENT_FORM_USE_PP' => '�ϥΤ�I�B�z�{��',
	'PHPSHOP_PAYMENT_FORM_BANK_DEBIT' => '�Ȧ�״�',
	'PHPSHOP_PAYMENT_FORM_AO' => '�u�ݦa�}/�f��I��',
	'PHPSHOP_STATISTIC_STATISTICS' => '�έp',
	'PHPSHOP_STATISTIC_CUSTOMERS' => '�U��',
	'PHPSHOP_STATISTIC_ACTIVE_PRODUCTS' => '�Z�P���ӫ~',
	'PHPSHOP_STATISTIC_INACTIVE_PRODUCTS' => '���P���ӫ~',
	'PHPSHOP_STATISTIC_NEW_ORDERS' => '�s�q��',
	'PHPSHOP_STATISTIC_NEW_CUSTOMERS' => '�s�U��',
	'PHPSHOP_CREDITCARD_NAME' => '�H�Υd�W��',
	'PHPSHOP_CREDITCARD_CODE' => '�H�Υd - short code',
	'PHPSHOP_YOUR_STORE' => '�z���ө�',
	'PHPSHOP_CONTROL_PANEL' => '����x',
	'PHPSHOP_CHANGE_PASSKEY_FORM' => '���/��� �K�X/����X',
	'PHPSHOP_TYPE_PASSWORD' => '�п�J�z���ϥΪ̱K�X',
	'PHPSHOP_CURRENT_TRANSACTION_KEY' => '�ثe������X',
	'PHPSHOP_CHANGE_PASSKEY_SUCCESS' => '����X�w�󴫦��.',
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