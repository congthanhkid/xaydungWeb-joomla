<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : islenska.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'PHPSHOP_RB_INDIVIDUAL' => 'Sýna einstakar vörur',
	'PHPSHOP_RB_SALE_TITLE' => 'Sölu yfirlit',
	'PHPSHOP_RB_SALES_PAGE_TITLE' => 'Yfirlit sölu',
	'PHPSHOP_RB_INTERVAL_TITLE' => 'Stilla tíðni',
	'PHPSHOP_RB_INTERVAL_MONTHLY_TITLE' => 'Mánaðarlega',
	'PHPSHOP_RB_INTERVAL_WEEKLY_TITLE' => 'Vikulega',
	'PHPSHOP_RB_INTERVAL_DAILY_TITLE' => 'Daglega',
	'PHPSHOP_RB_THISMONTH_BUTTON' => 'Þessi mánuður',
	'PHPSHOP_RB_LASTMONTH_BUTTON' => 'Síðasti mánuður',
	'PHPSHOP_RB_LAST60_BUTTON' => 'Síðustu 60 dagar',
	'PHPSHOP_RB_LAST90_BUTTON' => 'Síðustu 90 dagar',
	'PHPSHOP_RB_START_DATE_TITLE' => 'Byrja þann',
	'PHPSHOP_RB_END_DATE_TITLE' => 'Endar þann',
	'PHPSHOP_RB_SHOW_SEL_RANGE' => 'Sýna valið',
	'PHPSHOP_RB_REPORT_FOR' => 'Yfirlit fyrir ',
	'PHPSHOP_RB_DATE' => 'Dags',
	'PHPSHOP_RB_ORDERS' => 'Pantanir',
	'PHPSHOP_RB_TOTAL_ITEMS' => 'Fjöldi seldra hluta',
	'PHPSHOP_RB_REVENUE' => 'Innkoma',
	'PHPSHOP_RB_PRODLIST' => 'Vöru listi'
); $VM_LANG->initModule( 'reportbasic', $langvars );
?>