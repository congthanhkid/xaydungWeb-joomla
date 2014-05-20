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
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX' => 'Toon prijzen inclusief BTW',
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN' => 'Optie om de klanten prijzen te tonen met of zonder belasting.',
	'PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL' => 'Adreslabel',
	'PHPSHOP_SHOPPER_GROUP_LIST_LBL' => 'Klantengroep lijst',
	'PHPSHOP_SHOPPER_GROUP_LIST_NAME' => 'Groep naam',
	'PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION' => 'Groep omschrijving',
	'PHPSHOP_SHOPPER_GROUP_FORM_LBL' => 'Klantengroep formulier',
	'PHPSHOP_SHOPPER_GROUP_FORM_NAME' => 'Groepsnaam',
	'PHPSHOP_SHOPPER_GROUP_FORM_DESC' => 'Groepsomschrijving',
	'PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT' => 'Prijs korting op standaard klantengroep (in %)',
	'PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP' => 'Een positief getal X betekent: Als het product geen prijs heeft toegewezen gekregen aan DEZE klant groep, de standaard prijs wordt verminderd met X %. Een negatief getal heeft het tegenovergestelde effect.'
); $VM_LANG->initModule( 'shopper', $langvars );
?>