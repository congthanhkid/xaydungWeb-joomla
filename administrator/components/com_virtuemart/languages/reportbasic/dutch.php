<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2008 soeren - All rights reserved.
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
	'PHPSHOP_RB_INDIVIDUAL' => 'Individueel productoverzicht',
	'PHPSHOP_RB_SALE_TITLE' => 'Verkoopoverzicht',
	'PHPSHOP_RB_SALES_PAGE_TITLE' => 'Activiteiten overzicht',
	'PHPSHOP_RB_INTERVAL_TITLE' => 'Bepaalperiode',
	'PHPSHOP_RB_INTERVAL_MONTHLY_TITLE' => 'Maandelijks',
	'PHPSHOP_RB_INTERVAL_WEEKLY_TITLE' => 'Wekelijks',
	'PHPSHOP_RB_INTERVAL_DAILY_TITLE' => 'Dagelijks',
	'PHPSHOP_RB_THISMONTH_BUTTON' => 'Deze maand',
	'PHPSHOP_RB_LASTMONTH_BUTTON' => 'Vorige maand',
	'PHPSHOP_RB_LAST60_BUTTON' => 'Laatste 60 dagen',
	'PHPSHOP_RB_LAST90_BUTTON' => 'Laatste 90 dagen',
	'PHPSHOP_RB_START_DATE_TITLE' => 'Start op',
	'PHPSHOP_RB_END_DATE_TITLE' => 'Tot en met',
	'PHPSHOP_RB_SHOW_SEL_RANGE' => 'Bekijk geselecteerde periode',
	'PHPSHOP_RB_REPORT_FOR' => 'Verslag voor',
	'PHPSHOP_RB_DATE' => 'Datum',
	'PHPSHOP_RB_ORDERS' => 'Bestellingen',
	'PHPSHOP_RB_TOTAL_ITEMS' => 'Totaal aan producten verkocht',
	'PHPSHOP_RB_REVENUE' => 'Omzet',
	'PHPSHOP_RB_PRODLIST' => 'Productlijst'
); $VM_LANG->initModule( 'reportbasic', $langvars );
?>