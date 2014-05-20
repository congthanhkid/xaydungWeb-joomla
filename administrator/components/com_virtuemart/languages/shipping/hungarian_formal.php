<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : hungarian_formal.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'PHPSHOP_CARRIER_LIST_LBL' => 'Szállító lista',
	'PHPSHOP_RATE_LIST_LBL' => 'Szállítási díjtétel lista',
	'PHPSHOP_CARRIER_LIST_NAME_LBL' => 'Név',
	'PHPSHOP_CARRIER_LIST_ORDER_LBL' => 'Listázási sorrend',
	'PHPSHOP_CARRIER_FORM_LBL' => 'Szállító módosítása/létrehozása',
	'PHPSHOP_RATE_FORM_LBL' => 'Szállítási díjtételt létrehoz/szerkeszt',
	'PHPSHOP_RATE_FORM_NAME' => 'Szállítási díjtétel leírás',
	'PHPSHOP_RATE_FORM_CARRIER' => 'Szállító',
	'PHPSHOP_RATE_FORM_COUNTRY' => 'Ország',
	'PHPSHOP_RATE_FORM_ZIP_START' => 'Irányítószám sorozat kezdete',
	'PHPSHOP_RATE_FORM_ZIP_END' => 'Irányítószám sorozat vége',
	'PHPSHOP_RATE_FORM_WEIGHT_START' => 'Legkisebb súly',
	'PHPSHOP_RATE_FORM_WEIGHT_END' => 'Legnagyobb súly',
	'PHPSHOP_RATE_FORM_PACKAGE_FEE' => 'A csomagja illetéke',
	'PHPSHOP_RATE_FORM_CURRENCY' => 'Pénznem',
	'PHPSHOP_RATE_FORM_LIST_ORDER' => 'Megrendelés listázás',
	'PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL' => 'Szállító',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME' => 'Szállítási díjtétel leírás',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART' => 'Súly  ...-tól',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND' => '... ig',
	'PHPSHOP_CARRIER_FORM_NAME' => 'Szállító cég',
	'PHPSHOP_CARRIER_FORM_LIST_ORDER' => 'Listázási sorrend'
); $VM_LANG->initModule( 'shipping', $langvars );
?>