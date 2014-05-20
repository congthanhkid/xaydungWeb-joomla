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
	'PHPSHOP_USER_FORM_EMAIL' => 'Email',
	'PHPSHOP_SHOPPER_LIST_LBL' => 'Lista dei Clienti',
	'PHPSHOP_SHOPPER_FORM_BILLTO_LBL' => 'Info Fatturazione',
	'PHPSHOP_SHOPPER_FORM_USERNAME' => 'Nome Utente',
	'PHPSHOP_AFFILIATE_MOD' => 'Amministrazione Affiliati',
	'PHPSHOP_AFFILIATE_LIST_LBL' => 'Lista Affiliati',
	'PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME' => 'Nome Affiliato',
	'PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE' => 'Attivo',
	'PHPSHOP_AFFILIATE_LIST_RATE' => 'Percentuale',
	'PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL' => 'Totale mensile',
	'PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION' => 'Commissione Mensile',
	'PHPSHOP_AFFILIATE_LIST_ORDERS' => 'Lista Ordini',
	'PHPSHOP_AFFILIATE_EMAIL_WHO' => 'Email destinatario (* = TUTTI)',
	'PHPSHOP_AFFILIATE_EMAIL_CONTENT' => 'Tua Email',
	'PHPSHOP_AFFILIATE_EMAIL_SUBJECT' => 'Oggetto',
	'PHPSHOP_AFFILIATE_EMAIL_STATS' => 'Includi Statistiche Attuali',
	'PHPSHOP_AFFILIATE_FORM_RATE' => 'Percentuale Commissione',
	'PHPSHOP_AFFILIATE_FORM_ACTIVE' => 'Attivo?',
	'VM_AFFILIATE_SHOWINGDETAILS_FOR' => 'Visualizzazione Dettagli per',
	'VM_AFFILIATE_LISTORDERS' => 'Elenca Ordini',
	'VM_AFFILIATE_MONTH' => 'Mese',
	'VM_AFFILIATE_CHANGEVIEW' => 'Cambia Vista',
	'VM_AFFILIATE_ORDERSUMMARY_LBL' => 'Sommario Ordini',
	'VM_AFFILIATE_ORDERLIST_ORDERREF' => 'Rif. Ordine',
	'VM_AFFILIATE_ORDERLIST_DATEORDERED' => 'Data Ordine',
	'VM_AFFILIATE_ORDERLIST_ORDERTOTAL' => 'Totale Ordine',
	'VM_AFFILIATE_ORDERLIST_COMMISSION' => 'Commissione (tasso)',
	'VM_AFFILIATE_ORDERLIST_ORDERSTATUS' => 'Stato Ordine'
); $VM_LANG->initModule( 'affiliate', $langvars );
?>