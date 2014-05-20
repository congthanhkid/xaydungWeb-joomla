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
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX' => 'Näytä verolliset hinnat?',
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN' => 'Valitse näytetäänkö asiakkaille hinnat veroineen vai ilman veroa.',
	'PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL' => 'Osoite',
	'PHPSHOP_SHOPPER_GROUP_LIST_LBL' => 'Ostajaryhmät',
	'PHPSHOP_SHOPPER_GROUP_LIST_NAME' => 'Ryhmän nimi',
	'PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION' => 'Ryhmän kuvaus',
	'PHPSHOP_SHOPPER_GROUP_FORM_LBL' => 'Lisää/muokkaa ostajaryhmän tiedot',
	'PHPSHOP_SHOPPER_GROUP_FORM_NAME' => 'Ryhmän nimi',
	'PHPSHOP_SHOPPER_GROUP_FORM_DESC' => 'Ryhmän kuvaus',
	'PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT' => 'Perusasiakasryhmän alennusprosentti (%)',
	'PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP' => 'Positiivinen luku X tarkoittaa: (Jos tuotteella ei ole mitään erikoishintaa tälle ostajaryhmälle) perushintaa lasketaan X %:lla. Negatiivinen luku tarkoittaa päinvastaista'
); $VM_LANG->initModule( 'shopper', $langvars );
?>