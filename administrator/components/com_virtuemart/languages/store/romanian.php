<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : romanian.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'PHPSHOP_USER_FORM_FIRST_NAME' => 'Nume',
	'PHPSHOP_USER_FORM_LAST_NAME' => 'Prenume',
	'PHPSHOP_USER_FORM_MIDDLE_NAME' => 'Numele tatalui',
	'PHPSHOP_USER_FORM_COMPANY_NAME' => 'Numele firmei',
	'PHPSHOP_USER_FORM_ADDRESS_1' => 'Addresa 1',
	'PHPSHOP_USER_FORM_ADDRESS_2' => 'Addresa 2',
	'PHPSHOP_USER_FORM_CITY' => 'Oras',
	'PHPSHOP_USER_FORM_STATE' => 'Judet',
	'PHPSHOP_USER_FORM_ZIP' => 'Cod Postal',
	'PHPSHOP_USER_FORM_COUNTRY' => 'Tara',
	'PHPSHOP_USER_FORM_PHONE' => 'Telefon',
	'PHPSHOP_USER_FORM_PHONE2' => 'Mobile Phone',
	'PHPSHOP_USER_FORM_FAX' => 'Fax',
	'PHPSHOP_ISSHIP_LIST_PUBLISH_LBL' => 'Active',
	'PHPSHOP_ISSHIP_FORM_UPDATE_LBL' => 'Configureaza metode de expediere',
	'PHPSHOP_STORE_FORM_FULL_IMAGE' => 'imagine intreaga',
	'PHPSHOP_STORE_FORM_UPLOAD' => 'incarca imagine',
	'PHPSHOP_STORE_FORM_STORE_NAME' => 'Stocare nume',
	'PHPSHOP_STORE_FORM_COMPANY_NAME' => 'Stocare nume companie',
	'PHPSHOP_STORE_FORM_ADDRESS_1' => 'Adresa 1',
	'PHPSHOP_STORE_FORM_ADDRESS_2' => 'Adresa 2',
	'PHPSHOP_STORE_FORM_CITY' => 'Oras',
	'PHPSHOP_STORE_FORM_STATE' => 'Judet',
	'PHPSHOP_STORE_FORM_COUNTRY' => 'tara',
	'PHPSHOP_STORE_FORM_ZIP' => 'Cod postal',
	'PHPSHOP_STORE_FORM_CURRENCY' => 'Valuta',
	'PHPSHOP_STORE_FORM_LAST_NAME' => 'Nume de familie',
	'PHPSHOP_STORE_FORM_FIRST_NAME' => 'Prenume',
	'PHPSHOP_STORE_FORM_MIDDLE_NAME' => 'Alt prenume',
	'PHPSHOP_STORE_FORM_TITLE' => 'Titlu',
	'PHPSHOP_STORE_FORM_PHONE_1' => 'Telefon 1',
	'PHPSHOP_STORE_FORM_PHONE_2' => 'Telefon 2',
	'PHPSHOP_STORE_FORM_DESCRIPTION' => 'Descriere',
	'PHPSHOP_PAYMENT_METHOD_LIST_LBL' => 'Lista modalitati plata',
	'PHPSHOP_PAYMENT_METHOD_LIST_NAME' => 'Nume',
	'PHPSHOP_PAYMENT_METHOD_LIST_CODE' => 'Cod',
	'PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP' => 'Grup cumparatori',
	'PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR' => 'Tip modalitate plata',
	'PHPSHOP_PAYMENT_METHOD_FORM_LBL' => 'Formular modalitate plata',
	'PHPSHOP_PAYMENT_METHOD_FORM_NAME' => 'Nume modalitate plata',
	'PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP' => 'Grup cumparatori',
	'PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT' => 'Reducere',
	'PHPSHOP_PAYMENT_METHOD_FORM_CODE' => 'Cod',
	'PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER' => 'Ordine lista',
	'PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR' => 'Tip modalitate plata',
	'PHPSHOP_PAYMENT_FORM_CC' => 'Credit Card',
	'PHPSHOP_PAYMENT_FORM_USE_PP' => 'Folositi procesorul de plata',
	'PHPSHOP_PAYMENT_FORM_BANK_DEBIT' => 'Debit bancar',
	'PHPSHOP_PAYMENT_FORM_AO' => 'Numai adresa / Plata la livrare',
	'PHPSHOP_STATISTIC_STATISTICS' => 'Statistica',
	'PHPSHOP_STATISTIC_CUSTOMERS' => 'Clienti',
	'PHPSHOP_STATISTIC_ACTIVE_PRODUCTS' => 'Produse active',
	'PHPSHOP_STATISTIC_INACTIVE_PRODUCTS' => 'Produse inactive',
	'PHPSHOP_STATISTIC_NEW_ORDERS' => 'Noi comenzi',
	'PHPSHOP_STATISTIC_NEW_CUSTOMERS' => 'Noi clienti',
	'PHPSHOP_CREDITCARD_NAME' => 'Numele cartii de credit',
	'PHPSHOP_CREDITCARD_CODE' => 'Credit Card ? Cod scurt',
	'PHPSHOP_YOUR_STORE' => 'Your Store',
	'PHPSHOP_CONTROL_PANEL' => 'Control Panel',
	'PHPSHOP_CHANGE_PASSKEY_FORM' => 'Show/Change the Password/Transaction Key',
	'PHPSHOP_TYPE_PASSWORD' => 'Please type in your User Password',
	'PHPSHOP_CURRENT_TRANSACTION_KEY' => 'Current Transaction Key',
	'PHPSHOP_CHANGE_PASSKEY_SUCCESS' => 'The Transaction key was successfully changed.',
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