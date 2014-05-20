<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : hrvatski.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'PHPSHOP_CARRIER_LIST_LBL' => 'Lista Dostavlja�a',
	'PHPSHOP_RATE_LIST_LBL' => 'Lista Dostavnih Tarifa',
	'PHPSHOP_CARRIER_LIST_NAME_LBL' => 'Naziv',
	'PHPSHOP_CARRIER_LIST_ORDER_LBL' => 'Redoslijed',
	'PHPSHOP_CARRIER_FORM_LBL' => 'Dodavanje/Ure�ivanje Dostavlja�a',
	'PHPSHOP_RATE_FORM_LBL' => 'Dodavanje/Ure�ivanje Dostavne Tarife',
	'PHPSHOP_RATE_FORM_NAME' => 'Opis Dostavne Tarife',
	'PHPSHOP_RATE_FORM_CARRIER' => 'Dostavlja�',
	'PHPSHOP_RATE_FORM_COUNTRY' => 'Dr�ava',
	'PHPSHOP_RATE_FORM_ZIP_START' => 'Po�tanski broj po�etak',
	'PHPSHOP_RATE_FORM_ZIP_END' => 'Po�tanski broj kraj',
	'PHPSHOP_RATE_FORM_WEIGHT_START' => 'Najmanja te�ina',
	'PHPSHOP_RATE_FORM_WEIGHT_END' => 'Najve�a te�ina',
	'PHPSHOP_RATE_FORM_PACKAGE_FEE' => 'Pristojba za va�u po�iljku',
	'PHPSHOP_RATE_FORM_CURRENCY' => 'Valuta',
	'PHPSHOP_RATE_FORM_LIST_ORDER' => 'Redoslijed',
	'PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL' => 'Dostavlja�',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME' => 'Opis dostavne tarife',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART' => 'te�ina od ...',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND' => '... do',
	'PHPSHOP_CARRIER_FORM_NAME' => 'Dostavlja�',
	'PHPSHOP_CARRIER_FORM_LIST_ORDER' => 'Prika�i narud�bu'
); $VM_LANG->initModule( 'shipping', $langvars );
?>