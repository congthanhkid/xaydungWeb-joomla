<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : swedish.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'PHPSHOP_RB_INDIVIDUAL' => 'Individuell produktlistning',
	'PHPSHOP_RB_SALE_TITLE' => 'F�rs�ljningsrapport',
	'PHPSHOP_RB_SALES_PAGE_TITLE' => '�versikt f�r�ljningsaktivitet',
	'PHPSHOP_RB_INTERVAL_TITLE' => 'Intervall',
	'PHPSHOP_RB_INTERVAL_MONTHLY_TITLE' => 'M�nadsvis',
	'PHPSHOP_RB_INTERVAL_WEEKLY_TITLE' => 'Veckovis',
	'PHPSHOP_RB_INTERVAL_DAILY_TITLE' => 'Dagligen',
	'PHPSHOP_RB_THISMONTH_BUTTON' => 'Denna m�nad',
	'PHPSHOP_RB_LASTMONTH_BUTTON' => 'F�reg�ende m�nad',
	'PHPSHOP_RB_LAST60_BUTTON' => 'Senaste 60 dagarna',
	'PHPSHOP_RB_LAST90_BUTTON' => 'Senaste 90 dagarna',
	'PHPSHOP_RB_START_DATE_TITLE' => 'Starta p�',
	'PHPSHOP_RB_END_DATE_TITLE' => 'Sluta p�',
	'PHPSHOP_RB_SHOW_SEL_RANGE' => 'Visa urval',
	'PHPSHOP_RB_REPORT_FOR' => 'Rapportera f�r ',
	'PHPSHOP_RB_DATE' => 'Datum',
	'PHPSHOP_RB_ORDERS' => 'Best�llningar',
	'PHPSHOP_RB_TOTAL_ITEMS' => 'Totalt antal s�lda artiklar',
	'PHPSHOP_RB_REVENUE' => 'Oms�ttning',
	'PHPSHOP_RB_PRODLIST' => 'Produktlista'
); $VM_LANG->initModule( 'reportbasic', $langvars );
?>