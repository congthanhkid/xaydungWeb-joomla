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
	'PHPSHOP_VENDOR_LIST_LBL' => 'Списък на търговците',
	'PHPSHOP_VENDOR_LIST_ADMIN' => 'Админ',
	'PHPSHOP_VENDOR_FORM_LBL' => 'Добавяне на информация',
	'PHPSHOP_VENDOR_FORM_CONTACT_LBL' => 'Контактна информация',
	'PHPSHOP_VENDOR_FORM_FULL_IMAGE' => 'Изображение в пълен размер',
	'PHPSHOP_VENDOR_FORM_UPLOAD' => 'Качване на изображение',
	'PHPSHOP_VENDOR_FORM_STORE_NAME' => 'Име на магазина',
	'PHPSHOP_VENDOR_FORM_COMPANY_NAME' => 'Име на фирмата',
	'PHPSHOP_VENDOR_FORM_ADDRESS_1' => 'Адрес 1',
	'PHPSHOP_VENDOR_FORM_ADDRESS_2' => 'Адрес 2',
	'PHPSHOP_VENDOR_FORM_CITY' => 'Град',
	'PHPSHOP_VENDOR_FORM_STATE' => 'Област/Район',
	'PHPSHOP_VENDOR_FORM_COUNTRY' => 'Държава',
	'PHPSHOP_VENDOR_FORM_ZIP' => 'Пощенски код',
	'PHPSHOP_VENDOR_FORM_PHONE' => 'Телефон',
	'PHPSHOP_VENDOR_FORM_CURRENCY' => 'Валута',
	'PHPSHOP_VENDOR_FORM_CATEGORY' => 'Категория търговец',
	'PHPSHOP_VENDOR_FORM_LAST_NAME' => 'Фамилия',
	'PHPSHOP_VENDOR_FORM_FIRST_NAME' => 'Име',
	'PHPSHOP_VENDOR_FORM_MIDDLE_NAME' => 'Презиме',
	'PHPSHOP_VENDOR_FORM_TITLE' => 'Обръщение',
	'PHPSHOP_VENDOR_FORM_PHONE_1' => 'Телефон 1',
	'PHPSHOP_VENDOR_FORM_PHONE_2' => 'Телефон 2',
	'PHPSHOP_VENDOR_FORM_FAX' => 'Факс',
	'PHPSHOP_VENDOR_FORM_EMAIL' => 'Email',
	'PHPSHOP_VENDOR_FORM_IMAGE_PATH' => 'Път до изображението',
	'PHPSHOP_VENDOR_FORM_DESCRIPTION' => 'Описание',
	'PHPSHOP_VENDOR_CAT_LIST_LBL' => 'Списък на категориите търговци',
	'PHPSHOP_VENDOR_CAT_NAME' => 'Име на категорията',
	'PHPSHOP_VENDOR_CAT_DESCRIPTION' => 'Описание на категорията',
	'PHPSHOP_VENDOR_CAT_VENDORS' => 'Търговци',
	'PHPSHOP_VENDOR_CAT_FORM_LBL' => 'Формуляр за категория търговци',
	'PHPSHOP_VENDOR_CAT_FORM_INFO_LBL' => 'Информация за категорията',
	'PHPSHOP_VENDOR_CAT_FORM_NAME' => 'Име на категорията',
	'PHPSHOP_VENDOR_CAT_FORM_DESCRIPTION' => 'Описание на категорията'
); $VM_LANG->initModule( 'vendor', $langvars );
?>