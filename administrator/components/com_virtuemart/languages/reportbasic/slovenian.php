<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : slovenian.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'PHPSHOP_RB_INDIVIDUAL' => 'Individualno iskanje izdelka',
	'PHPSHOP_RB_SALE_TITLE' => 'Porocilo prodaje',
	'PHPSHOP_RB_SALES_PAGE_TITLE' => 'Pregled aktivnosti prodaje',
	'PHPSHOP_RB_INTERVAL_TITLE' => 'Nastavi interval',
	'PHPSHOP_RB_INTERVAL_MONTHLY_TITLE' => 'Mesecni',
	'PHPSHOP_RB_INTERVAL_WEEKLY_TITLE' => 'Tedenski',
	'PHPSHOP_RB_INTERVAL_DAILY_TITLE' => 'Dnevni',
	'PHPSHOP_RB_THISMONTH_BUTTON' => 'Tekoci mesec',
	'PHPSHOP_RB_LASTMONTH_BUTTON' => 'Pretekli mesec',
	'PHPSHOP_RB_LAST60_BUTTON' => 'Zadnjih 60 dni',
	'PHPSHOP_RB_LAST90_BUTTON' => 'Zadnih 90 dni',
	'PHPSHOP_RB_START_DATE_TITLE' => 'Zacetek',
	'PHPSHOP_RB_END_DATE_TITLE' => 'Konec ob',
	'PHPSHOP_RB_SHOW_SEL_RANGE' => 'Prikazi izbrano lestvico',
	'PHPSHOP_RB_REPORT_FOR' => 'Porocilo za ',
	'PHPSHOP_RB_DATE' => 'Datum',
	'PHPSHOP_RB_ORDERS' => 'Narocila',
	'PHPSHOP_RB_TOTAL_ITEMS' => 'Skupno prodano',
	'PHPSHOP_RB_REVENUE' => 'Dohodek',
	'PHPSHOP_RB_PRODLIST' => 'Pregled izdelkov'
); $VM_LANG->initModule( 'reportbasic', $langvars );
?>