<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : danish.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX' => 'Vis priser med moms?',
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN' => 'Bestemmer om kunderne ser priser med eller uden moms.',
	'PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL' => 'Adressenavn',
	'PHPSHOP_SHOPPER_GROUP_LIST_LBL' => 'Kundegruppeliste',
	'PHPSHOP_SHOPPER_GROUP_LIST_NAME' => 'Gruppenavn',
	'PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION' => 'Gruppebeskrivelse',
	'PHPSHOP_SHOPPER_GROUP_FORM_LBL' => 'Kundegruppe formular',
	'PHPSHOP_SHOPPER_GROUP_FORM_NAME' => 'Gruppenavn',
	'PHPSHOP_SHOPPER_GROUP_FORM_DESC' => 'Gruppebeskrivelse',
	'PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT' => 'Rabat til standard kundegruppe (i %)',
	'PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP' => 'En positiv værdi X betyder: Såfremt produktet ikke har en pris tilknyttet DENNE kundegruppe, så reduceres standardprisen med X %. En negativ værdi har den modsatte effekt'
); $VM_LANG->initModule( 'shopper', $langvars );
?>