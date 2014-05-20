<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : italian.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'CHARSET' => 'ISO-8859-15',
	'PHPSHOP_CARRIER_LIST_LBL' => 'Liste des exp�diteurs',
	'PHPSHOP_RATE_LIST_LBL' => 'Liste des taux d\'exp�ditions',
	'PHPSHOP_CARRIER_LIST_NAME_LBL' => 'Nom',
	'PHPSHOP_CARRIER_LIST_ORDER_LBL' => 'Ordre d\\\'affichage',
	'PHPSHOP_CARRIER_FORM_LBL' => 'Cr�er/�diter exp�diteur',
	'PHPSHOP_RATE_FORM_LBL' => 'Cr�er/�diter taux exp�dition',
	'PHPSHOP_RATE_FORM_NAME' => 'Description taux exp�dition',
	'PHPSHOP_RATE_FORM_CARRIER' => 'Exp�diteur',
	'PHPSHOP_RATE_FORM_COUNTRY' => 'Pays',
	'PHPSHOP_RATE_FORM_ZIP_START' => 'Fourchette de codes postaux commence �',
	'PHPSHOP_RATE_FORM_ZIP_END' => 'Fourchette de codes postaux termine �',
	'PHPSHOP_RATE_FORM_WEIGHT_START' => 'Poids minimum',
	'PHPSHOP_RATE_FORM_WEIGHT_END' => 'Poids maximum',
	'PHPSHOP_RATE_FORM_PACKAGE_FEE' => 'Vos frais d\'emballage',
	'PHPSHOP_RATE_FORM_CURRENCY' => 'Devise',
	'PHPSHOP_RATE_FORM_LIST_ORDER' => 'Ordre d\\\'affichage',
	'PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL' => 'Exp�diteur',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME' => 'Description taux exp�dition',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART' => 'Poids � partir de ...',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND' => '... jusqu\'�',
	'PHPSHOP_CARRIER_FORM_NAME' => 'Soci�t� exp�ditrice',
	'PHPSHOP_CARRIER_FORM_LIST_ORDER' => 'Ordre d\\\'affichage'
); $VM_LANG->initModule( 'shipping', $langvars );
?>