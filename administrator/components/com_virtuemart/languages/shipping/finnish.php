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
	'PHPSHOP_CARRIER_LIST_LBL' => 'Kuljetusliikeluettelo',
	'PHPSHOP_RATE_LIST_LBL' => 'Tariffiluettelo',
	'PHPSHOP_CARRIER_LIST_NAME_LBL' => 'Nimi',
	'PHPSHOP_CARRIER_LIST_ORDER_LBL' => 'Luettelojärjestys',
	'PHPSHOP_CARRIER_FORM_LBL' => 'Lisää/muokkaa kuljetusliike',
	'PHPSHOP_RATE_FORM_LBL' => 'Lisää/muokkaa tariffi',
	'PHPSHOP_RATE_FORM_NAME' => 'Tariffin kuvaus',
	'PHPSHOP_RATE_FORM_CARRIER' => 'Kuljetusliike',
	'PHPSHOP_RATE_FORM_COUNTRY' => 'Maa',
	'PHPSHOP_RATE_FORM_ZIP_START' => 'Postinumeroalue alkaa',
	'PHPSHOP_RATE_FORM_ZIP_END' => ' Postinumeroalue loppuu',
	'PHPSHOP_RATE_FORM_WEIGHT_START' => 'Pienin paino',
	'PHPSHOP_RATE_FORM_WEIGHT_END' => 'Suurin paino',
	'PHPSHOP_RATE_FORM_PACKAGE_FEE' => 'Pakkausmaksu',
	'PHPSHOP_RATE_FORM_CURRENCY' => 'Valuutta',
	'PHPSHOP_RATE_FORM_LIST_ORDER' => 'Luettelojärjestys',
	'PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL' => 'Kuljetusliike',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME' => 'Tariffin kuvaus',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART' => 'Paino alkaen ...',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND' => '... asti',
	'PHPSHOP_CARRIER_FORM_NAME' => 'Kuljetusliikkeen nimi',
	'PHPSHOP_CARRIER_FORM_LIST_ORDER' => 'Luettelojärjestys'
); $VM_LANG->initModule( 'shipping', $langvars );
?>