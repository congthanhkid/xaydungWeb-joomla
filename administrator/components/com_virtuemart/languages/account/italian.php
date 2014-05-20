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
	'PHPSHOP_ACC_CUSTOMER_ACCOUNT' => 'Account Cliente:',
	'PHPSHOP_ACC_UPD_BILL' => 'Qui puoi modificare i dati di fatturazione.',
	'PHPSHOP_ACC_UPD_SHIP' => 'Qui puoi aggiungere e modificare l\'indirizzo di spedizione.',
	'PHPSHOP_ACC_ACCOUNT_INFO' => 'Informazioni Account',
	'PHPSHOP_ACC_SHIP_INFO' => 'Informazioni di Spedizione',
	'PHPSHOP_DOWNLOADS_CLICK' => 'Clicca sul nome del prodotto per scaricare i file.',
	'PHPSHOP_DOWNLOADS_EXPIRED' => 'Hai già scaricato i file per il numero massimo di volte consentito, oppure il periodo di download è scaduto.'
); $VM_LANG->initModule( 'account', $langvars );
?>