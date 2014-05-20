<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : swedish.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX' => 'Visa priser inkl. moms.',
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN' => 'St�ller in huruvida kunden ser priset inkl. eller exkl. moms.',
	'PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL' => 'Egen Adressben�mning',
	'PHPSHOP_SHOPPER_GROUP_LIST_LBL' => 'Kundgrupper',
	'PHPSHOP_SHOPPER_GROUP_LIST_NAME' => 'Gruppnamn',
	'PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION' => 'Gruppbeskrivning',
	'PHPSHOP_SHOPPER_GROUP_FORM_LBL' => 'Ny kundgrupp',
	'PHPSHOP_SHOPPER_GROUP_FORM_NAME' => 'Gruppname',
	'PHPSHOP_SHOPPER_GROUP_FORM_DESC' => 'Gruppbeskrivning',
	'PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT' => 'Rabatt p� produktens standardpris (%)',
	'PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP' => 'Positivt v�rde: Om produkten saknar ett angivet pris f�r denna kundkategori minskas priset med X %. Ett negativt v�rde har motsatt effekt.'
); $VM_LANG->initModule( 'shopper', $langvars );
?>