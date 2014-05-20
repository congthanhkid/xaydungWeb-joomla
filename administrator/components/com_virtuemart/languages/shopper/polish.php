<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : polish.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX' => 'Pokazuj ceny zawieraj±ce podatek?',
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN' => 'Ustaw opcjê czy kupuj±cy widzi ceny wraz z podatkiem, czy bez niego.',
	'PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL' => 'Alias adresu',
	'PHPSHOP_SHOPPER_GROUP_LIST_LBL' => 'Lista grup klientów',
	'PHPSHOP_SHOPPER_GROUP_LIST_NAME' => 'Nazwa grupy',
	'PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION' => 'Opis grupy',
	'PHPSHOP_SHOPPER_GROUP_FORM_LBL' => 'Formularz grupy klientów',
	'PHPSHOP_SHOPPER_GROUP_FORM_NAME' => 'Nazwa grupy',
	'PHPSHOP_SHOPPER_GROUP_FORM_DESC' => 'Opis grupy',
	'PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT' => 'Rabat dla domy¶lnej grupy klientów (w %)',
	'PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP' => 'Dodatnia warto¶æ X oznacza: je¿eli produkt nie posiada ceny przypisanej do TEJ grupy klientów, domy¶lna cena jest pomniejszana o X %. Warto¶æ ujemna daje odwrotny rezultat'
); $VM_LANG->initModule( 'shopper', $langvars );
?>