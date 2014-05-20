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
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX' => 'Prikazati cijene s porezom',
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN' => 'Želite li ura&#269;unati porez u prikazane cijene.',
	'PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL' => 'Druga adresa',
	'PHPSHOP_SHOPPER_GROUP_LIST_LBL' => 'Lista Grupa Kupaca',
	'PHPSHOP_SHOPPER_GROUP_LIST_NAME' => 'Naziv Grupe',
	'PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION' => 'Opis grupe',
	'PHPSHOP_SHOPPER_GROUP_FORM_LBL' => 'Grupa Kupaca',
	'PHPSHOP_SHOPPER_GROUP_FORM_NAME' => 'Naziv Grupe',
	'PHPSHOP_SHOPPER_GROUP_FORM_DESC' => 'Opis Grupe',
	'PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT' => 'Popust za primarnu grupu kupaca (u %)',
	'PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP' => 'Pozitivni iznos X zna&#269;i: Ako OVOJ grupi kupaca nije dodijeljena posebna cijena, osnovna cijena se snižava za X%. Negativni iznos ima suprotni u&#269;inak'
); $VM_LANG->initModule( 'shopper', $langvars );
?>