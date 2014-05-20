<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : norwegian.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'PHPSHOP_CARRIER_LIST_LBL' => 'Liste befraktere',
	'PHPSHOP_RATE_LIST_LBL' => 'Liste over fraktrater',
	'PHPSHOP_CARRIER_LIST_NAME_LBL' => 'Navn',
	'PHPSHOP_CARRIER_LIST_ORDER_LBL' => 'Sortering',
	'PHPSHOP_CARRIER_FORM_LBL' => 'Befrakter endre / legg til',
	'PHPSHOP_RATE_FORM_LBL' => 'Fraktsats endre / legg til',
	'PHPSHOP_RATE_FORM_NAME' => 'Fraktrate beskrivelse',
	'PHPSHOP_RATE_FORM_CARRIER' => 'Befrakter',
	'PHPSHOP_RATE_FORM_COUNTRY' => 'Land',
	'PHPSHOP_RATE_FORM_ZIP_START' => 'Poststed start',
	'PHPSHOP_RATE_FORM_ZIP_END' => 'Poststed slutt',
	'PHPSHOP_RATE_FORM_WEIGHT_START' => 'Minstevekt',
	'PHPSHOP_RATE_FORM_WEIGHT_END' => 'Maksimalvekt',
	'PHPSHOP_RATE_FORM_PACKAGE_FEE' => 'Ditt pakkegebyr',
	'PHPSHOP_RATE_FORM_CURRENCY' => 'Valuta',
	'PHPSHOP_RATE_FORM_LIST_ORDER' => 'Rekkefølge',
	'PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL' => 'Befrakter',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME' => 'Befraktersats beskrivelse',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART' => 'Vekt fra ...',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND' => '... til',
	'PHPSHOP_CARRIER_FORM_NAME' => 'Befrakter firma',
	'PHPSHOP_CARRIER_FORM_LIST_ORDER' => 'Rekkefølge'
); $VM_LANG->initModule( 'shipping', $langvars );
?>