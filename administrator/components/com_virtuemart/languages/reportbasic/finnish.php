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
	'PHPSHOP_RB_INDIVIDUAL' => 'Yksilölliset tuoteluettelot',
	'PHPSHOP_RB_SALE_TITLE' => 'Myyntiraportti',
	'PHPSHOP_RB_SALES_PAGE_TITLE' => 'Myyntiaktiviteetti',
	'PHPSHOP_RB_INTERVAL_TITLE' => 'Aseta aikaväli',
	'PHPSHOP_RB_INTERVAL_MONTHLY_TITLE' => 'Kuukausittain',
	'PHPSHOP_RB_INTERVAL_WEEKLY_TITLE' => 'Viikoittain',
	'PHPSHOP_RB_INTERVAL_DAILY_TITLE' => 'Päivittäin',
	'PHPSHOP_RB_THISMONTH_BUTTON' => 'Tässä kuussa',
	'PHPSHOP_RB_LASTMONTH_BUTTON' => 'Viime kuussa',
	'PHPSHOP_RB_LAST60_BUTTON' => 'Viimeiset 60 päivää',
	'PHPSHOP_RB_LAST90_BUTTON' => 'Viimeiset 90 päivää',
	'PHPSHOP_RB_START_DATE_TITLE' => 'Aloita: ',
	'PHPSHOP_RB_END_DATE_TITLE' => 'Lopeta: ',
	'PHPSHOP_RB_SHOW_SEL_RANGE' => 'Näytä valittu alue',
	'PHPSHOP_RB_REPORT_FOR' => 'Raportti:  ',
	'PHPSHOP_RB_DATE' => 'Päivä',
	'PHPSHOP_RB_ORDERS' => 'Tilaukset',
	'PHPSHOP_RB_TOTAL_ITEMS' => 'Kaikki myydyt artikkelit',
	'PHPSHOP_RB_REVENUE' => 'Tulot',
	'PHPSHOP_RB_PRODLIST' => 'Tuoteluettelo'
); $VM_LANG->initModule( 'reportbasic', $langvars );
?>