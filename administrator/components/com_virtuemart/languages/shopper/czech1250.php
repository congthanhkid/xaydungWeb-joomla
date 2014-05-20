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
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX' => 'Zobrazit ceny vèetnì DPH?',
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN' => 'Nastavení, zda kupující vidí ceny vèetnì nebo bez DPH.',
	'PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL' => 'Zkratka adresy',
	'PHPSHOP_SHOPPER_GROUP_LIST_LBL' => 'Seznam skupin zákazníkù',
	'PHPSHOP_SHOPPER_GROUP_LIST_NAME' => 'Název skupiny',
	'PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION' => 'Popis skupiny',
	'PHPSHOP_SHOPPER_GROUP_FORM_LBL' => 'Formuláø skupiny zákazníkù',
	'PHPSHOP_SHOPPER_GROUP_FORM_NAME' => 'Název skupiny',
	'PHPSHOP_SHOPPER_GROUP_FORM_DESC' => 'Popis skupiny',
	'PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT' => 'Sleva pro výchozí skupinu zákazníkù (v %)',
	'PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP' => 'Kladná hodnota X znamená: Pokud nemá pøiøazenu cenu pro TUTO skupinu zákazníkù, výchozí cena je snížena o X %. Záporná hodnota má opaèný efekt.'
); $VM_LANG->initModule( 'shopper', $langvars );
?>