<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : greek.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'PHPSHOP_USER_FORM_FIRST_NAME' => 'Όνομα',
	'PHPSHOP_USER_FORM_LAST_NAME' => 'Επίθετο',
	'PHPSHOP_USER_FORM_MIDDLE_NAME' => 'Όνομα Πατρός',
	'PHPSHOP_USER_FORM_COMPANY_NAME' => 'Επωνυμία Εταιρείας',
	'PHPSHOP_USER_FORM_ADDRESS_1' => 'Διεύθυνση 1',
	'PHPSHOP_USER_FORM_ADDRESS_2' => 'Διεύθυνση 2',
	'PHPSHOP_USER_FORM_CITY' => 'Πόλη',
	'PHPSHOP_USER_FORM_STATE' => 'Περιοχή/Νομός',
	'PHPSHOP_USER_FORM_ZIP' => 'Ταχ. Κωδικός',
	'PHPSHOP_USER_FORM_COUNTRY' => 'Χώρα',
	'PHPSHOP_USER_FORM_PHONE' => 'Τηλ.',
	'PHPSHOP_USER_FORM_PHONE2' => 'Mobile Phone',
	'PHPSHOP_USER_FORM_FAX' => 'Fax',
	'PHPSHOP_ISSHIP_LIST_PUBLISH_LBL' => 'Ενεργός',
	'PHPSHOP_ISSHIP_FORM_UPDATE_LBL' => 'Ρύθμιση Μεθόδων Αποστολής',
	'PHPSHOP_STORE_FORM_FULL_IMAGE' => 'Εικόνα',
	'PHPSHOP_STORE_FORM_UPLOAD' => 'Ανέβασμα Εικόνας',
	'PHPSHOP_STORE_FORM_STORE_NAME' => 'Όνομα Καταστήματος',
	'PHPSHOP_STORE_FORM_COMPANY_NAME' => 'Επωνυμία Εταιρείας Καταστήματος',
	'PHPSHOP_STORE_FORM_ADDRESS_1' => 'Διεύθυνση 1',
	'PHPSHOP_STORE_FORM_ADDRESS_2' => 'Διεύθυνση 2',
	'PHPSHOP_STORE_FORM_CITY' => 'Πόλη',
	'PHPSHOP_STORE_FORM_STATE' => 'Περιοχή/Νομός',
	'PHPSHOP_STORE_FORM_COUNTRY' => 'Χώρα',
	'PHPSHOP_STORE_FORM_ZIP' => 'Ταχ. Κώδικός',
	'PHPSHOP_STORE_FORM_CURRENCY' => 'Νόμισμα',
	'PHPSHOP_STORE_FORM_LAST_NAME' => 'Επώνυμο',
	'PHPSHOP_STORE_FORM_FIRST_NAME' => 'Όνομα',
	'PHPSHOP_STORE_FORM_MIDDLE_NAME' => 'Όνομα πατρός',
	'PHPSHOP_STORE_FORM_TITLE' => 'Τίτλος',
	'PHPSHOP_STORE_FORM_PHONE_1' => 'Τηλ. 1',
	'PHPSHOP_STORE_FORM_PHONE_2' => 'Τηλ. 2',
	'PHPSHOP_STORE_FORM_DESCRIPTION' => 'Περιγραφή',
	'PHPSHOP_PAYMENT_METHOD_LIST_LBL' => 'Λίστα Μεθόδων Πληρωμής',
	'PHPSHOP_PAYMENT_METHOD_LIST_NAME' => 'Όνομα',
	'PHPSHOP_PAYMENT_METHOD_LIST_CODE' => 'Κωδικός',
	'PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP' => 'Ομάδα Αγοραστών',
	'PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR' => 'Τύπος Μεθόδου Πληρωμής',
	'PHPSHOP_PAYMENT_METHOD_FORM_LBL' => 'Φόρμα Τρόπου Πληρωμής',
	'PHPSHOP_PAYMENT_METHOD_FORM_NAME' => 'Όνομα Τρόπου Πληρωμής',
	'PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP' => 'Ομάδα Αγοραστών',
	'PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT' => 'Έκπτωση',
	'PHPSHOP_PAYMENT_METHOD_FORM_CODE' => 'Κωδικός',
	'PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER' => 'Σειρά εμφάνισης',
	'PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR' => 'Τύπος μεθόδου πληρωμής',
	'PHPSHOP_PAYMENT_FORM_CC' => 'Πιστωτική κάρτα',
	'PHPSHOP_PAYMENT_FORM_USE_PP' => 'Χρησιμοποίησε Επεξεργαστή Πληρωμών',
	'PHPSHOP_PAYMENT_FORM_BANK_DEBIT' => 'Χρέωση Τραπεζικού Λογαριασμού',
	'PHPSHOP_PAYMENT_FORM_AO' => 'Μόνο διεύθυνση / Μετρητά με την Παράδοση',
	'PHPSHOP_STATISTIC_STATISTICS' => 'Στατιστικά',
	'PHPSHOP_STATISTIC_CUSTOMERS' => 'Πελάτες',
	'PHPSHOP_STATISTIC_ACTIVE_PRODUCTS' => 'ενεργά Προϊόντα',
	'PHPSHOP_STATISTIC_INACTIVE_PRODUCTS' => 'ανενεργά Προϊόντα',
	'PHPSHOP_STATISTIC_NEW_ORDERS' => 'Νέες Παραγγελίες',
	'PHPSHOP_STATISTIC_NEW_CUSTOMERS' => 'Νέοι Πελάτες',
	'PHPSHOP_CREDITCARD_NAME' => 'Credit Card Name',
	'PHPSHOP_CREDITCARD_CODE' => 'Credit Card - Short Code',
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