<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : hungarian.php 1247 2008-02-13 08:42:28Z pedrohsi $
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2007 soeren - All rights reserved.
* @translator soeren, pedrohsi
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
	'CHARSET' => 'UTF-8',
	'PHPSHOP_CARRIER_LIST_LBL' => 'Szállítók',
	'PHPSHOP_RATE_LIST_LBL' => 'Szállítási díjtételek',
	'PHPSHOP_CARRIER_LIST_NAME_LBL' => 'Név',
	'PHPSHOP_CARRIER_LIST_ORDER_LBL' => 'Sorrend',
	'PHPSHOP_CARRIER_FORM_LBL' => 'Új szállító',
	'PHPSHOP_RATE_FORM_LBL' => 'Új szállítási díjtétel',
	'PHPSHOP_RATE_FORM_NAME' => 'Szállítási díjtétel leírása',
	'PHPSHOP_RATE_FORM_CARRIER' => 'Szállító',
	'PHPSHOP_RATE_FORM_COUNTRY' => 'Ország',
	'PHPSHOP_RATE_FORM_ZIP_START' => 'Legkisebb irányítószám',
	'PHPSHOP_RATE_FORM_ZIP_END' => 'Legnagyobb irányítószám',
	'PHPSHOP_RATE_FORM_WEIGHT_START' => 'Legkisebb súly',
	'PHPSHOP_RATE_FORM_WEIGHT_END' => 'Legnagyobb súly',
	'PHPSHOP_RATE_FORM_PACKAGE_FEE' => 'Csomagolási díj',
	'PHPSHOP_RATE_FORM_CURRENCY' => 'Pénznem',
	'PHPSHOP_RATE_FORM_LIST_ORDER' => 'Sorrend',
	'PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL' => 'Szállító',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME' => 'Szállítási díjtétel leírása',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART' => 'Súly  ...-tól',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND' => '... ig',
	'PHPSHOP_CARRIER_FORM_NAME' => 'Szállító cég',
	'PHPSHOP_CARRIER_FORM_LIST_ORDER' => 'Sorrend'
); $VM_LANG->initModule( 'shipping', $langvars );
?>