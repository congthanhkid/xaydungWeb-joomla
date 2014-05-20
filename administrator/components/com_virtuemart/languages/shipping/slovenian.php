<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : slovenian.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'PHPSHOP_CARRIER_LIST_LBL' => 'Dostavljalci',
	'PHPSHOP_RATE_LIST_LBL' => 'Seznam posiljk',
	'PHPSHOP_CARRIER_LIST_NAME_LBL' => 'Ime',
	'PHPSHOP_CARRIER_LIST_ORDER_LBL' => 'Pregled',
	'PHPSHOP_CARRIER_FORM_LBL' => 'Dostavljalec uredi / dostavi',
	'PHPSHOP_RATE_FORM_LBL' => 'Ustvari/dodaj posiljko',
	'PHPSHOP_RATE_FORM_NAME' => 'Opis posiljke',
	'PHPSHOP_RATE_FORM_CARRIER' => 'Dostavljalec',
	'PHPSHOP_RATE_FORM_COUNTRY' => 'Drzava<br>Veèizbor uporabi STRG-tipko ter misko',
	'PHPSHOP_RATE_FORM_ZIP_START' => 'Kraj odposiljanja',
	'PHPSHOP_RATE_FORM_ZIP_END' => 'Kraj dostave',
	'PHPSHOP_RATE_FORM_WEIGHT_START' => 'Najnizja teza',
	'PHPSHOP_RATE_FORM_WEIGHT_END' => 'Najvisja teza',
	'PHPSHOP_RATE_FORM_PACKAGE_FEE' => 'Strosek priprave',
	'PHPSHOP_RATE_FORM_CURRENCY' => 'Valuta',
	'PHPSHOP_RATE_FORM_LIST_ORDER' => 'Seznam',
	'PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL' => 'Dostava',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME' => 'Opis dostave',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART' => 'Teza od ...',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND' => '... do',
	'PHPSHOP_CARRIER_FORM_NAME' => 'Podjetje',
	'PHPSHOP_CARRIER_FORM_LIST_ORDER' => 'Seznam'
); $VM_LANG->initModule( 'shipping', $langvars );
?>