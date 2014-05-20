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
	'PHPSHOP_RB_INDIVIDUAL' => 'Listari produse individuale',
	'PHPSHOP_RB_SALE_TITLE' => 'Raport vanzari',
	'PHPSHOP_RB_SALES_PAGE_TITLE' => 'Privire de ansamblu a activitatii de vanzare',
	'PHPSHOP_RB_INTERVAL_TITLE' => 'Stabilire interval',
	'PHPSHOP_RB_INTERVAL_MONTHLY_TITLE' => 'Lunar',
	'PHPSHOP_RB_INTERVAL_WEEKLY_TITLE' => 'Saptamanal',
	'PHPSHOP_RB_INTERVAL_DAILY_TITLE' => 'Zilnic',
	'PHPSHOP_RB_THISMONTH_BUTTON' => 'Luna aceasta',
	'PHPSHOP_RB_LASTMONTH_BUTTON' => 'Luna trecuta',
	'PHPSHOP_RB_LAST60_BUTTON' => 'Ultimele 60 de zile',
	'PHPSHOP_RB_LAST90_BUTTON' => ' Ultimele 90 de zile',
	'PHPSHOP_RB_START_DATE_TITLE' => 'Porneste',
	'PHPSHOP_RB_END_DATE_TITLE' => 'Termina la',
	'PHPSHOP_RB_SHOW_SEL_RANGE' => 'Arata seria selectata',
	'PHPSHOP_RB_REPORT_FOR' => 'Raport pentru',
	'PHPSHOP_RB_DATE' => 'Data',
	'PHPSHOP_RB_ORDERS' => 'Comenzi',
	'PHPSHOP_RB_TOTAL_ITEMS' => 'Total articole vandute',
	'PHPSHOP_RB_REVENUE' => 'Castig',
	'PHPSHOP_RB_PRODLIST' => 'Listare produs'
); $VM_LANG->initModule( 'reportbasic', $langvars );
?>