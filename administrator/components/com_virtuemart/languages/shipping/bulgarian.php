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
	'PHPSHOP_CARRIER_LIST_LBL' => 'Списък на доставчиците',
	'PHPSHOP_RATE_LIST_LBL' => 'Списък на таксите за доставка',
	'PHPSHOP_CARRIER_LIST_NAME_LBL' => 'Име',
	'PHPSHOP_CARRIER_LIST_ORDER_LBL' => 'Подреждане',
	'PHPSHOP_CARRIER_FORM_LBL' => 'Редакция/създаване на доставчик',
	'PHPSHOP_RATE_FORM_LBL' => 'Създаване/редакция на такса за доставка',
	'PHPSHOP_RATE_FORM_NAME' => 'Описание (име) на такса за доставка',
	'PHPSHOP_RATE_FORM_CARRIER' => 'Доставчик',
	'PHPSHOP_RATE_FORM_COUNTRY' => 'Държава',
	'PHPSHOP_RATE_FORM_ZIP_START' => 'Обхват от пощенски кодове - НАЧАЛО',
	'PHPSHOP_RATE_FORM_ZIP_END' => 'Обхват от пощенски кодове - КРАЙ',
	'PHPSHOP_RATE_FORM_WEIGHT_START' => 'Най-малкото тегло',
	'PHPSHOP_RATE_FORM_WEIGHT_END' => 'Най-голямото тегло',
	'PHPSHOP_RATE_FORM_PACKAGE_FEE' => 'Такса за опаковка',
	'PHPSHOP_RATE_FORM_CURRENCY' => 'Валута',
	'PHPSHOP_RATE_FORM_LIST_ORDER' => 'Подреждане',
	'PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL' => 'Доставчик',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME' => 'Описание (име) на такса за доставка',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART' => 'Тегло от ...',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND' => '... до',
	'PHPSHOP_CARRIER_FORM_NAME' => 'Компания на доставчика',
	'PHPSHOP_CARRIER_FORM_LIST_ORDER' => 'Подреждане'
); $VM_LANG->initModule( 'shipping', $langvars );
?>