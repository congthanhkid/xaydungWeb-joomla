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
	'PHPSHOP_CARRIER_LIST_LBL' => 'Vervoerderslijst',
	'PHPSHOP_RATE_LIST_LBL' => 'Verzendtarieven lijst',
	'PHPSHOP_CARRIER_LIST_NAME_LBL' => 'Naam',
	'PHPSHOP_CARRIER_LIST_ORDER_LBL' => 'Volgorde',
	'PHPSHOP_CARRIER_FORM_LBL' => 'Vervoerder wijzigen / aanmaken',
	'PHPSHOP_RATE_FORM_LBL' => 'Verzendtarief wijzigen / aanmaken',
	'PHPSHOP_RATE_FORM_NAME' => 'Verzendtarief beschrijving',
	'PHPSHOP_RATE_FORM_CARRIER' => 'Vervoerder',
	'PHPSHOP_RATE_FORM_COUNTRY' => 'Land',
	'PHPSHOP_RATE_FORM_ZIP_START' => 'Start postcode bereik',
	'PHPSHOP_RATE_FORM_ZIP_END' => 'Einde postcode bereik',
	'PHPSHOP_RATE_FORM_WEIGHT_START' => 'Minimum gewicht',
	'PHPSHOP_RATE_FORM_WEIGHT_END' => 'Maximum gewicht',
	'PHPSHOP_RATE_FORM_PACKAGE_FEE' => 'Pakketkosten',
	'PHPSHOP_RATE_FORM_CURRENCY' => 'Valuta',
	'PHPSHOP_RATE_FORM_LIST_ORDER' => 'Volgorde',
	'PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL' => 'Vervoerder',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME' => 'Verzendtarief omschrijving',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART' => 'Gewicht van ...',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND' => '... tot',
	'PHPSHOP_CARRIER_FORM_NAME' => 'Naam vervoerder',
	'PHPSHOP_CARRIER_FORM_LIST_ORDER' => 'Volgorde'
); $VM_LANG->initModule( 'shipping', $langvars );
?>