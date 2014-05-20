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
	'PHPSHOP_CARRIER_LIST_LBL' => 'Lista Corrieri',
	'PHPSHOP_RATE_LIST_LBL' => 'Lista prezzi Corrieri',
	'PHPSHOP_CARRIER_LIST_NAME_LBL' => 'Nome',
	'PHPSHOP_CARRIER_LIST_ORDER_LBL' => 'Ordine Lista',
	'PHPSHOP_CARRIER_FORM_LBL' => 'Modifica/Crea Corriere',
	'PHPSHOP_RATE_FORM_LBL' => 'Modifica/Crea Tariffa Corriere',
	'PHPSHOP_RATE_FORM_NAME' => 'Descrizione Tariffa Corriere',
	'PHPSHOP_RATE_FORM_CARRIER' => 'Corriere',
	'PHPSHOP_RATE_FORM_COUNTRY' => 'Nazione',
	'PHPSHOP_RATE_FORM_ZIP_START' => 'Inizio intervallo CAP',
	'PHPSHOP_RATE_FORM_ZIP_END' => 'Fine intervallo CAP',
	'PHPSHOP_RATE_FORM_WEIGHT_START' => 'Peso Minimo',
	'PHPSHOP_RATE_FORM_WEIGHT_END' => 'Peso Massimo',
	'PHPSHOP_RATE_FORM_PACKAGE_FEE' => 'La tua tariffa di gestione',
	'PHPSHOP_RATE_FORM_CURRENCY' => 'Valuta',
	'PHPSHOP_RATE_FORM_LIST_ORDER' => 'Ordine Lista',
	'PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL' => 'Corriere',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME' => 'Descrizione Tariffa Corriere',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART' => 'Peso da ...',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND' => '... a',
	'PHPSHOP_CARRIER_FORM_NAME' => 'Corriere',
	'PHPSHOP_CARRIER_FORM_LIST_ORDER' => 'Ordine Lista'
); $VM_LANG->initModule( 'shipping', $langvars );
?>