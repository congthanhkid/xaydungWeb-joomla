<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : german.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'PHPSHOP_RB_INDIVIDUAL' => 'einzelne Produkte auflisten',
	'PHPSHOP_RB_SALE_TITLE' => 'Verkaufsreporte',
	'PHPSHOP_RB_SALES_PAGE_TITLE' => 'Übersicht zu Verkaufsaktivitäten',
	'PHPSHOP_RB_INTERVAL_TITLE' => 'Intervall setzen',
	'PHPSHOP_RB_INTERVAL_MONTHLY_TITLE' => 'Monatlich',
	'PHPSHOP_RB_INTERVAL_WEEKLY_TITLE' => 'Wöchentlich',
	'PHPSHOP_RB_INTERVAL_DAILY_TITLE' => 'Täglich',
	'PHPSHOP_RB_THISMONTH_BUTTON' => 'Diesen Monat',
	'PHPSHOP_RB_LASTMONTH_BUTTON' => 'Letzten Monat',
	'PHPSHOP_RB_LAST60_BUTTON' => 'Letzte 60 Tage',
	'PHPSHOP_RB_LAST90_BUTTON' => 'Letzte 90 Tage',
	'PHPSHOP_RB_START_DATE_TITLE' => 'Beginn am',
	'PHPSHOP_RB_END_DATE_TITLE' => 'Ende am',
	'PHPSHOP_RB_SHOW_SEL_RANGE' => 'Zeige den ausgewählten Zeitraum',
	'PHPSHOP_RB_REPORT_FOR' => 'Report für ',
	'PHPSHOP_RB_DATE' => 'Datum',
	'PHPSHOP_RB_ORDERS' => 'Bestellungen',
	'PHPSHOP_RB_TOTAL_ITEMS' => 'Anzahl verkaufter Artikel',
	'PHPSHOP_RB_REVENUE' => 'Erlös',
	'PHPSHOP_RB_PRODLIST' => 'Produktliste'
); $VM_LANG->initModule( 'reportbasic', $langvars );
?>