<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : czech1250.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'PHPSHOP_CARRIER_LIST_LBL' => 'Dopravci',
	'PHPSHOP_RATE_LIST_LBL' => 'Dopravné',
	'PHPSHOP_CARRIER_LIST_NAME_LBL' => 'Název',
	'PHPSHOP_CARRIER_LIST_ORDER_LBL' => 'Poøadí',
	'PHPSHOP_CARRIER_FORM_LBL' => 'Vytvoøení nebo úprava dopravce',
	'PHPSHOP_RATE_FORM_LBL' => 'Vytvoøení nebo úprava dopravného',
	'PHPSHOP_RATE_FORM_NAME' => 'Detaily dopravného',
	'PHPSHOP_RATE_FORM_CARRIER' => 'Dopravce',
	'PHPSHOP_RATE_FORM_COUNTRY' => 'Stát:<br /><br /><i>Pro výbìr více státù: použijte CTRL a myš</i>',
	'PHPSHOP_RATE_FORM_ZIP_START' => 'PSÈ odesilatele',
	'PHPSHOP_RATE_FORM_ZIP_END' => 'PSÈ adresáta',
	'PHPSHOP_RATE_FORM_WEIGHT_START' => 'Hmotnost od',
	'PHPSHOP_RATE_FORM_WEIGHT_END' => 'Hmotnost do',
	'PHPSHOP_RATE_FORM_PACKAGE_FEE' => 'Vaše balné',
	'PHPSHOP_RATE_FORM_CURRENCY' => 'Mìna',
	'PHPSHOP_RATE_FORM_LIST_ORDER' => 'Poøadí',
	'PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL' => 'Dopravce',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME' => 'Popis dopravného',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART' => 'Hmotnost od ...',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND' => '... do',
	'PHPSHOP_CARRIER_FORM_NAME' => 'Dopravce',
	'PHPSHOP_CARRIER_FORM_LIST_ORDER' => 'Poøadí'
); $VM_LANG->initModule( 'shipping', $langvars );
?>