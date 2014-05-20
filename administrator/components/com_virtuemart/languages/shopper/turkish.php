<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : turkish.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX' => 'Ücretleri vergi dahil göster?',
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN' => 'Müþterilerin ücretleri vergi dahilmi yoksa vergisiz haldemi gösterileceðini atama yapar.',
	'PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL' => 'Adres Rumuzu',
	'PHPSHOP_SHOPPER_GROUP_LIST_LBL' => 'Müþteri Grubu Listesi',
	'PHPSHOP_SHOPPER_GROUP_LIST_NAME' => 'Grup Adý',
	'PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION' => 'Grup Açýklamasý',
	'PHPSHOP_SHOPPER_GROUP_FORM_LBL' => 'Maðaza Sahibi Grubu Formu',
	'PHPSHOP_SHOPPER_GROUP_FORM_NAME' => 'Grup Adý',
	'PHPSHOP_SHOPPER_GROUP_FORM_DESC' => 'Grup Açýklamasý',
	'PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT' => 'Varsayýlan müþteri grubu için ürün indirimi (% olarak)',
	'PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP' => 'Pozitif X : Eðer bu ürün grubuna hiçbir ürün ücreti atanmamýþsa, varsayýlan ücretten X yüzde olarak düþülür. Negatif deðerler tam tersi etki yapar.'
); $VM_LANG->initModule( 'shopper', $langvars );
?>