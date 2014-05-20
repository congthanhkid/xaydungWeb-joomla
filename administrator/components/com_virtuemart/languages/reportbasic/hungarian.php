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
	'CHARSET' => 'UTF-8',
	'PHPSHOP_RB_INDIVIDUAL' => 'Egyéni terméklisták',
	'PHPSHOP_RB_SALE_TITLE' => 'Eladási jelentések',
	'PHPSHOP_RB_SALES_PAGE_TITLE' => 'Eladási adatok áttekintése',
	'PHPSHOP_RB_INTERVAL_TITLE' => 'Állítsa be az intervallumot',
	'PHPSHOP_RB_INTERVAL_MONTHLY_TITLE' => 'Havi',
	'PHPSHOP_RB_INTERVAL_WEEKLY_TITLE' => 'Heti',
	'PHPSHOP_RB_INTERVAL_DAILY_TITLE' => 'Napi',
	'PHPSHOP_RB_THISMONTH_BUTTON' => 'Jelen hónap',
	'PHPSHOP_RB_LASTMONTH_BUTTON' => 'Múlt hónap',
	'PHPSHOP_RB_LAST60_BUTTON' => 'Utolsó 60 nap',
	'PHPSHOP_RB_LAST90_BUTTON' => 'Utolsó 90 nap',
	'PHPSHOP_RB_START_DATE_TITLE' => 'Kezdet',
	'PHPSHOP_RB_END_DATE_TITLE' => 'Vég',
	'PHPSHOP_RB_SHOW_SEL_RANGE' => 'Mutassa a kiválasztott tartományt',
	'PHPSHOP_RB_REPORT_FOR' => 'Jelentés ',
	'PHPSHOP_RB_DATE' => 'Dátum',
	'PHPSHOP_RB_ORDERS' => 'Megrendelések',
	'PHPSHOP_RB_TOTAL_ITEMS' => 'Össz. eladott tételek',
	'PHPSHOP_RB_REVENUE' => 'Jövedelem',
	'PHPSHOP_RB_PRODLIST' => 'Termék listázás'
); $VM_LANG->initModule( 'reportbasic', $langvars );
?>