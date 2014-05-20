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
	'CHARSET' => 'ISO-8859-15',
	'PHPSHOP_RB_INDIVIDUAL' => 'Listes de produits individuels',
	'PHPSHOP_RB_SALE_TITLE' => 'Rapport des ventes',
	'PHPSHOP_RB_SALES_PAGE_TITLE' => 'Vue d\'ensemble des activités de vente',
	'PHPSHOP_RB_INTERVAL_TITLE' => 'Régler l\'interval',
	'PHPSHOP_RB_INTERVAL_MONTHLY_TITLE' => 'Mensuel',
	'PHPSHOP_RB_INTERVAL_WEEKLY_TITLE' => 'Hebdomadaire',
	'PHPSHOP_RB_INTERVAL_DAILY_TITLE' => 'Quotidien',
	'PHPSHOP_RB_THISMONTH_BUTTON' => 'Ce mois',
	'PHPSHOP_RB_LASTMONTH_BUTTON' => 'Mois dernier',
	'PHPSHOP_RB_LAST60_BUTTON' => '60 derniers jours',
	'PHPSHOP_RB_LAST90_BUTTON' => '90 derniers jours',
	'PHPSHOP_RB_START_DATE_TITLE' => 'Débute le',
	'PHPSHOP_RB_END_DATE_TITLE' => 'Termine le',
	'PHPSHOP_RB_SHOW_SEL_RANGE' => 'Voir cette sélection',
	'PHPSHOP_RB_REPORT_FOR' => 'Rapport pour ',
	'PHPSHOP_RB_DATE' => 'Date',
	'PHPSHOP_RB_ORDERS' => 'Commandes',
	'PHPSHOP_RB_TOTAL_ITEMS' => 'Total des articles vendus',
	'PHPSHOP_RB_REVENUE' => 'Chiffre d\'affaire',
	'PHPSHOP_RB_PRODLIST' => 'Liste produit'
); $VM_LANG->initModule( 'reportbasic', $langvars );
?>