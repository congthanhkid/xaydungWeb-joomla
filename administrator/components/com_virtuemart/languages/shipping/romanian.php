<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : romanian.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'PHPSHOP_CARRIER_LIST_LBL' => 'Lista expeditori',
	'PHPSHOP_RATE_LIST_LBL' => 'Lista preturi expediere',
	'PHPSHOP_CARRIER_LIST_NAME_LBL' => 'Nume',
	'PHPSHOP_CARRIER_LIST_ORDER_LBL' => 'Ordine lista',
	'PHPSHOP_CARRIER_FORM_LBL' => 'Creaza/editeaza expeditor',
	'PHPSHOP_RATE_FORM_LBL' => 'Creaza/editeaza pret expediere',
	'PHPSHOP_RATE_FORM_NAME' => 'Descriere pret expediere',
	'PHPSHOP_RATE_FORM_CARRIER' => 'Expeditor',
	'PHPSHOP_RATE_FORM_COUNTRY' => 'Tara:<br /><br /><i>Multiselect: folositi CTRL si Mouse</i>',
	'PHPSHOP_RATE_FORM_ZIP_START' => 'ZIP range start',
	'PHPSHOP_RATE_FORM_ZIP_END' => 'ZIP range end',
	'PHPSHOP_RATE_FORM_WEIGHT_START' => 'Greutatea minima',
	'PHPSHOP_RATE_FORM_WEIGHT_END' => 'Greutatea maxima',
	'PHPSHOP_RATE_FORM_PACKAGE_FEE' => 'Tariful pachetului dvs',
	'PHPSHOP_RATE_FORM_CURRENCY' => 'Valuta',
	'PHPSHOP_RATE_FORM_LIST_ORDER' => 'Ordine lista',
	'PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL' => 'Expeditor',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME' => 'Descriere pret expediere',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART' => 'Greutatea de la ...',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND' => '... la',
	'PHPSHOP_CARRIER_FORM_NAME' => 'Compania tranportatoare',
	'PHPSHOP_CARRIER_FORM_LIST_ORDER' => 'Ordine lista'
); $VM_LANG->initModule( 'shipping', $langvars );
?>