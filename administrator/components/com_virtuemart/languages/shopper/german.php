<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : german.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX' => 'Preise inkl. MwSt. zeigen?',
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN' => 'Falls aktiviert, werden alle Preise im Shop einschlie�lich Umsatzsteuern angezeigt.',
	'PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL' => 'Kurzname f�r Adresse',
	'PHPSHOP_SHOPPER_GROUP_LIST_LBL' => 'Kundengruppenliste',
	'PHPSHOP_SHOPPER_GROUP_LIST_NAME' => 'Gruppenname',
	'PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION' => 'Gruppenbeschreibung',
	'PHPSHOP_SHOPPER_GROUP_FORM_LBL' => 'Kundengruppenformular',
	'PHPSHOP_SHOPPER_GROUP_FORM_NAME' => 'Gruppenname',
	'PHPSHOP_SHOPPER_GROUP_FORM_DESC' => 'Gruppenbeschreibung',
	'PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT' => 'Preis-Nachlass auf die Standard-Shoppergruppe (in %)',
	'PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP' => 'Ein positiver Betrag X.xx bedeutet: Falls ein Produkt keinen Preis f�r DIESE Shoppergruppe hat, wird der Preis der Standard-Shoppergruppe um X.xx % vermindert. Ein negativer Betrag erwirkt das Gegenteil.'
); $VM_LANG->initModule( 'shopper', $langvars );
?>