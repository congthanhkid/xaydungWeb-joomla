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
	'PHPSHOP_MANUFACTURER_LIST_LBL' => 'Списък на производителите',
	'PHPSHOP_MANUFACTURER_LIST_MANUFACTURER_NAME' => 'Име на производителя',
	'PHPSHOP_MANUFACTURER_FORM_LBL' => 'Добавяне на информация',
	'PHPSHOP_MANUFACTURER_FORM_CATEGORY' => 'Категория производители',
	'PHPSHOP_MANUFACTURER_FORM_EMAIL' => 'Email',
	'PHPSHOP_MANUFACTURER_CAT_LIST_LBL' => 'Списък с категориите производители',
	'PHPSHOP_MANUFACTURER_CAT_NAME' => 'Име на категорията',
	'PHPSHOP_MANUFACTURER_CAT_DESCRIPTION' => 'Описание на категорията',
	'PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS' => 'Производители',
	'PHPSHOP_MANUFACTURER_CAT_FORM_LBL' => 'Формуляр за добавяне категория производител',
	'PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL' => 'Информация за категорията',
	'PHPSHOP_MANUFACTURER_CAT_FORM_NAME' => 'Име на категорията',
	'PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION' => 'Описание на категорията'
); $VM_LANG->initModule( 'manufacturer', $langvars );
?>