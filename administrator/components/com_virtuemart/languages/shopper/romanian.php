<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : romanian.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX' => 'Arata preturi incluzand taxe',
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN' => 'Sets the flag whether the shoppers sees prices including tax or excluding tax.',
	'PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL' => 'Adreseaza porecla',
	'PHPSHOP_SHOPPER_GROUP_LIST_LBL' => 'Lista grupului de cumparatori',
	'PHPSHOP_SHOPPER_GROUP_LIST_NAME' => 'nume grup',
	'PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION' => 'Descriere grup',
	'PHPSHOP_SHOPPER_GROUP_FORM_LBL' => 'Tip grup cumparatori',
	'PHPSHOP_SHOPPER_GROUP_FORM_NAME' => 'Nume grup',
	'PHPSHOP_SHOPPER_GROUP_FORM_DESC' => 'Descriere grup',
	'PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT' => 'Pretul redus la grupul de cumparatori de baza (in %)',
	'PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP' => 'O cantiate pozitiva X inseamna: Daca produsul nu are pret destinat acestui grup de cumparatori, pretul de baza se scade cu X%. O cantitate negativa are efectul opus'
); $VM_LANG->initModule( 'shopper', $langvars );
?>