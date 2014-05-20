<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : czech1250.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'PHPSHOP_RB_INDIVIDUAL' => 'Individuální výpis zboží',
	'PHPSHOP_RB_SALE_TITLE' => 'Sestavy prodeje',
	'PHPSHOP_RB_SALES_PAGE_TITLE' => 'Pøehled prodeje',
	'PHPSHOP_RB_INTERVAL_TITLE' => 'Nastavit interval',
	'PHPSHOP_RB_INTERVAL_MONTHLY_TITLE' => 'Mìsíèní',
	'PHPSHOP_RB_INTERVAL_WEEKLY_TITLE' => 'Týdenní',
	'PHPSHOP_RB_INTERVAL_DAILY_TITLE' => 'Denní',
	'PHPSHOP_RB_THISMONTH_BUTTON' => 'Tento mìsíc',
	'PHPSHOP_RB_LASTMONTH_BUTTON' => 'Minulý mìsíc',
	'PHPSHOP_RB_LAST60_BUTTON' => 'Posledních 60 dní',
	'PHPSHOP_RB_LAST90_BUTTON' => 'Posledních 90 dní',
	'PHPSHOP_RB_START_DATE_TITLE' => 'Zaèátek',
	'PHPSHOP_RB_END_DATE_TITLE' => 'Konec',
	'PHPSHOP_RB_SHOW_SEL_RANGE' => 'Zobrazit vybrané období ',
	'PHPSHOP_RB_REPORT_FOR' => 'Sestava pro ',
	'PHPSHOP_RB_DATE' => 'Datum',
	'PHPSHOP_RB_ORDERS' => 'Objednávky',
	'PHPSHOP_RB_TOTAL_ITEMS' => 'Celkem prodáno položek',
	'PHPSHOP_RB_REVENUE' => 'Tržba',
	'PHPSHOP_RB_PRODLIST' => 'Výpis zboží'
); $VM_LANG->initModule( 'reportbasic', $langvars );
?>