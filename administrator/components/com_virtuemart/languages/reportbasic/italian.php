<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : italian.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'PHPSHOP_RB_INDIVIDUAL' => 'Lista Individuale dei Prodotti',
	'PHPSHOP_RB_SALE_TITLE' => 'Rapporto Vendita',
	'PHPSHOP_RB_SALES_PAGE_TITLE' => 'Panoramica Attività di Vendita',
	'PHPSHOP_RB_INTERVAL_TITLE' => 'Imposta Intervallo',
	'PHPSHOP_RB_INTERVAL_MONTHLY_TITLE' => 'Mensile',
	'PHPSHOP_RB_INTERVAL_WEEKLY_TITLE' => 'Settimanale',
	'PHPSHOP_RB_INTERVAL_DAILY_TITLE' => 'Giornaliero',
	'PHPSHOP_RB_THISMONTH_BUTTON' => 'Questo Mese',
	'PHPSHOP_RB_LASTMONTH_BUTTON' => 'Ultimo Mese',
	'PHPSHOP_RB_LAST60_BUTTON' => 'Ultimi 60 giorni',
	'PHPSHOP_RB_LAST90_BUTTON' => 'Ultimi 90 giorni',
	'PHPSHOP_RB_START_DATE_TITLE' => 'Data inizio',
	'PHPSHOP_RB_END_DATE_TITLE' => 'Data fine',
	'PHPSHOP_RB_SHOW_SEL_RANGE' => 'Mostra l\'intervallo selezionato',
	'PHPSHOP_RB_REPORT_FOR' => 'Rapporto per ',
	'PHPSHOP_RB_DATE' => 'Data',
	'PHPSHOP_RB_ORDERS' => 'Ordini',
	'PHPSHOP_RB_TOTAL_ITEMS' => 'Totale Elementi venduti',
	'PHPSHOP_RB_REVENUE' => 'Ricavo',
	'PHPSHOP_RB_PRODLIST' => 'Lista Prodotti'
); $VM_LANG->initModule( 'reportbasic', $langvars );
?>