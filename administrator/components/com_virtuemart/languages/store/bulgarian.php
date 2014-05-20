<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : bulgarian.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'CHARSET' => 'cp1251',
	'PHPSHOP_USER_FORM_FIRST_NAME' => 'Име',
	'PHPSHOP_USER_FORM_LAST_NAME' => 'Фамилия',
	'PHPSHOP_USER_FORM_MIDDLE_NAME' => 'Презиме',
	'PHPSHOP_USER_FORM_COMPANY_NAME' => 'Име на организацията',
	'PHPSHOP_USER_FORM_ADDRESS_1' => 'Адрес 1',
	'PHPSHOP_USER_FORM_ADDRESS_2' => 'Адрес 2',
	'PHPSHOP_USER_FORM_CITY' => 'Град',
	'PHPSHOP_USER_FORM_STATE' => 'Област/Район',
	'PHPSHOP_USER_FORM_ZIP' => 'Пощенски код',
	'PHPSHOP_USER_FORM_COUNTRY' => 'Държава',
	'PHPSHOP_USER_FORM_PHONE' => 'Телефон',
	'PHPSHOP_USER_FORM_PHONE2' => 'Мобилен номер',
	'PHPSHOP_USER_FORM_FAX' => 'Факс',
	'PHPSHOP_ISSHIP_LIST_PUBLISH_LBL' => 'Активно',
	'PHPSHOP_ISSHIP_FORM_UPDATE_LBL' => 'Настройване на начин за доставка',
	'PHPSHOP_STORE_FORM_FULL_IMAGE' => 'Изображение в пълен размер',
	'PHPSHOP_STORE_FORM_UPLOAD' => 'Качване на изображение',
	'PHPSHOP_STORE_FORM_STORE_NAME' => 'Име на магазина',
	'PHPSHOP_STORE_FORM_COMPANY_NAME' => 'Собственик',
	'PHPSHOP_STORE_FORM_ADDRESS_1' => 'Адрес 1',
	'PHPSHOP_STORE_FORM_ADDRESS_2' => 'Адрес 2',
	'PHPSHOP_STORE_FORM_CITY' => 'Град',
	'PHPSHOP_STORE_FORM_STATE' => 'Област/Район',
	'PHPSHOP_STORE_FORM_COUNTRY' => 'Държава',
	'PHPSHOP_STORE_FORM_ZIP' => 'Пощенски код',
	'PHPSHOP_STORE_FORM_CURRENCY' => 'Валута',
	'PHPSHOP_STORE_FORM_LAST_NAME' => 'Фамилия',
	'PHPSHOP_STORE_FORM_FIRST_NAME' => 'Име',
	'PHPSHOP_STORE_FORM_MIDDLE_NAME' => 'Презиме',
	'PHPSHOP_STORE_FORM_TITLE' => 'Обръщение',
	'PHPSHOP_STORE_FORM_PHONE_1' => 'Телефон 1',
	'PHPSHOP_STORE_FORM_PHONE_2' => 'Телефон 2',
	'PHPSHOP_STORE_FORM_DESCRIPTION' => 'Описание',
	'PHPSHOP_PAYMENT_METHOD_LIST_LBL' => 'Списък на начините за плащане',
	'PHPSHOP_PAYMENT_METHOD_LIST_NAME' => 'Име',
	'PHPSHOP_PAYMENT_METHOD_LIST_CODE' => 'Код',
	'PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP' => 'Клиентска група',
	'PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR' => 'Вид на начина',
	'PHPSHOP_PAYMENT_METHOD_FORM_LBL' => 'Формуляр за нов начин за плащане',
	'PHPSHOP_PAYMENT_METHOD_FORM_NAME' => 'Име на начина',
	'PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP' => 'Клиентска група',
	'PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT' => 'Отстъпка',
	'PHPSHOP_PAYMENT_METHOD_FORM_CODE' => 'Код',
	'PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER' => 'Подреждане',
	'PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR' => 'Вид на начина',
	'PHPSHOP_PAYMENT_FORM_CC' => 'Кредитна карта',
	'PHPSHOP_PAYMENT_FORM_USE_PP' => 'Използване на процесор за плащане',
	'PHPSHOP_PAYMENT_FORM_BANK_DEBIT' => 'Банков дебит',
	'PHPSHOP_PAYMENT_FORM_AO' => 'Само адрес / Плащане при доставка',
	'PHPSHOP_STATISTIC_STATISTICS' => 'Статистика',
	'PHPSHOP_STATISTIC_CUSTOMERS' => 'Клиенти',
	'PHPSHOP_STATISTIC_ACTIVE_PRODUCTS' => 'активни продукти',
	'PHPSHOP_STATISTIC_INACTIVE_PRODUCTS' => 'неактивни продукти',
	'PHPSHOP_STATISTIC_NEW_ORDERS' => 'Нови поръчки',
	'PHPSHOP_STATISTIC_NEW_CUSTOMERS' => 'Нови клиенти',
	'PHPSHOP_CREDITCARD_NAME' => 'Име на кредитна карта',
	'PHPSHOP_CREDITCARD_CODE' => 'Кредитна карта - кратък код',
	'PHPSHOP_YOUR_STORE' => 'Вашият магазин',
	'PHPSHOP_CONTROL_PANEL' => 'Контролен панел',
	'PHPSHOP_CHANGE_PASSKEY_FORM' => 'Показване/промяна на парола/ключ за транзакция',
	'PHPSHOP_TYPE_PASSWORD' => 'Моля, въведете парола',
	'PHPSHOP_CURRENT_TRANSACTION_KEY' => 'Текущ ключ за транзакции',
	'PHPSHOP_CHANGE_PASSKEY_SUCCESS' => 'Ключът за транзакции беше сменен успешно.',
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