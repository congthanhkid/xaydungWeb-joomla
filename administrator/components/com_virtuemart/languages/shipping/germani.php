<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : germani.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'PHPSHOP_CARRIER_LIST_LBL' => 'Versenderliste',
	'PHPSHOP_RATE_LIST_LBL' => 'Versandartenliste',
	'PHPSHOP_CARRIER_LIST_NAME_LBL' => 'Name',
	'PHPSHOP_CARRIER_LIST_ORDER_LBL' => 'Reihenfolge',
	'PHPSHOP_CARRIER_FORM_LBL' => 'Versender bearbeiten / erstellen',
	'PHPSHOP_RATE_FORM_LBL' => 'Versandart bearbeiten / erstellen',
	'PHPSHOP_RATE_FORM_NAME' => 'Versandartname',
	'PHPSHOP_RATE_FORM_CARRIER' => 'Versender',
	'PHPSHOP_RATE_FORM_COUNTRY' => 'Land/Länder',
	'PHPSHOP_RATE_FORM_ZIP_START' => 'PLZ-Bereich Anfang',
	'PHPSHOP_RATE_FORM_ZIP_END' => 'PLZ-Bereich Ende',
	'PHPSHOP_RATE_FORM_WEIGHT_START' => 'Untere Gewichtsgrenze',
	'PHPSHOP_RATE_FORM_WEIGHT_END' => 'Obere Gewichtsgrenze',
	'PHPSHOP_RATE_FORM_PACKAGE_FEE' => 'Verpackungskosten',
	'PHPSHOP_RATE_FORM_CURRENCY' => 'Währung',
	'PHPSHOP_RATE_FORM_LIST_ORDER' => 'Reihenfolge',
	'PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL' => 'Versender',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME' => 'Versandbezeichnung',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART' => 'Gewicht von ...',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND' => '... bis',
	'PHPSHOP_CARRIER_FORM_NAME' => 'Versender Firmenname',
	'PHPSHOP_CARRIER_FORM_LIST_ORDER' => 'Reihenfolge'
); $VM_LANG->initModule( 'shipping', $langvars );
?>