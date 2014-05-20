<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : polish.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'PHPSHOP_RB_INDIVIDUAL' => 'Indywidualny wykaz produktóws',
	'PHPSHOP_RB_SALE_TITLE' => 'Raporty sprzeda¿y',
	'PHPSHOP_RB_SALES_PAGE_TITLE' => 'Przegl±d przebiegu sprzeda¿y',
	'PHPSHOP_RB_INTERVAL_TITLE' => 'Ustaw odstêp czasowy',
	'PHPSHOP_RB_INTERVAL_MONTHLY_TITLE' => 'Miesiêczny',
	'PHPSHOP_RB_INTERVAL_WEEKLY_TITLE' => 'Tygodniowy',
	'PHPSHOP_RB_INTERVAL_DAILY_TITLE' => 'Dzienny',
	'PHPSHOP_RB_THISMONTH_BUTTON' => 'Ten miesi±c',
	'PHPSHOP_RB_LASTMONTH_BUTTON' => 'Ostatni miesi±c',
	'PHPSHOP_RB_LAST60_BUTTON' => 'Ostatnie 60 dni',
	'PHPSHOP_RB_LAST90_BUTTON' => 'Ostatnie 90 dni',
	'PHPSHOP_RB_START_DATE_TITLE' => 'Pocz±tek',
	'PHPSHOP_RB_END_DATE_TITLE' => 'Koniec',
	'PHPSHOP_RB_SHOW_SEL_RANGE' => 'Poka¿ wybrany zakres',
	'PHPSHOP_RB_REPORT_FOR' => 'Raport dla ',
	'PHPSHOP_RB_DATE' => 'Data',
	'PHPSHOP_RB_ORDERS' => 'Zamówienia',
	'PHPSHOP_RB_TOTAL_ITEMS' => 'Suma sprzedanych artyku³ów',
	'PHPSHOP_RB_REVENUE' => 'Dochody',
	'PHPSHOP_RB_PRODLIST' => 'Wykaz produktów'
); $VM_LANG->initModule( 'reportbasic', $langvars );
?>