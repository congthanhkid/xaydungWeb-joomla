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
	'PHPSHOP_RB_INDIVIDUAL' => 'Показване на отделни продукти',
	'PHPSHOP_RB_SALE_TITLE' => 'Справка за продажбите',
	'PHPSHOP_RB_SALES_PAGE_TITLE' => 'Преглед на активността на продажбите',
	'PHPSHOP_RB_INTERVAL_TITLE' => 'Задайте интервал',
	'PHPSHOP_RB_INTERVAL_MONTHLY_TITLE' => 'Месечно',
	'PHPSHOP_RB_INTERVAL_WEEKLY_TITLE' => 'Седмично',
	'PHPSHOP_RB_INTERVAL_DAILY_TITLE' => 'Дневно',
	'PHPSHOP_RB_THISMONTH_BUTTON' => 'Този месец',
	'PHPSHOP_RB_LASTMONTH_BUTTON' => 'Миналия месец',
	'PHPSHOP_RB_LAST60_BUTTON' => 'Последните 60 дни',
	'PHPSHOP_RB_LAST90_BUTTON' => 'Последните 90 дни',
	'PHPSHOP_RB_START_DATE_TITLE' => 'От',
	'PHPSHOP_RB_END_DATE_TITLE' => 'До',
	'PHPSHOP_RB_SHOW_SEL_RANGE' => 'Покажи избрания интервал',
	'PHPSHOP_RB_REPORT_FOR' => 'Справка за ',
	'PHPSHOP_RB_DATE' => 'Дата',
	'PHPSHOP_RB_ORDERS' => 'Поръчки',
	'PHPSHOP_RB_TOTAL_ITEMS' => 'Общо продадени артикули',
	'PHPSHOP_RB_REVENUE' => 'Приход',
	'PHPSHOP_RB_PRODLIST' => 'Списък за продукт'
); $VM_LANG->initModule( 'reportbasic', $langvars );
?>