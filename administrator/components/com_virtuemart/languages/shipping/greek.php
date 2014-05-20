<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : greek.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'PHPSHOP_CARRIER_LIST_LBL' => 'Λίστα Μεταφορέων',
	'PHPSHOP_RATE_LIST_LBL' => 'Λίστα Κόστους Μεταφορικών',
	'PHPSHOP_CARRIER_LIST_NAME_LBL' => 'Όνομα',
	'PHPSHOP_CARRIER_LIST_ORDER_LBL' => 'Σειρά Εμφάνισης',
	'PHPSHOP_CARRIER_FORM_LBL' => 'Επεξεργασία/Δημιουργία Μεταφορέα',
	'PHPSHOP_RATE_FORM_LBL' => 'Επεξεργασία/Δημιουργία Κόστους Μεταφορικών',
	'PHPSHOP_RATE_FORM_NAME' => 'Περιγραφή Κόστους Μεταφορικών',
	'PHPSHOP_RATE_FORM_CARRIER' => 'Μεταφορέας',
	'PHPSHOP_RATE_FORM_COUNTRY' => 'Χώρα',
	'PHPSHOP_RATE_FORM_ZIP_START' => 'Αρχή εύρους Ταχ. Κωδ.',
	'PHPSHOP_RATE_FORM_ZIP_END' => 'Τέλος εύρους Ταχ. Κωδ.',
	'PHPSHOP_RATE_FORM_WEIGHT_START' => 'Ελάχιστο Βάρος',
	'PHPSHOP_RATE_FORM_WEIGHT_END' => 'Μέγιστο Βάρος',
	'PHPSHOP_RATE_FORM_PACKAGE_FEE' => 'Μεταφορικά ανά πακέτο',
	'PHPSHOP_RATE_FORM_CURRENCY' => 'Νόμισμα',
	'PHPSHOP_RATE_FORM_LIST_ORDER' => 'Σειρά Εμφάνισης',
	'PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL' => 'Μεταφορέας',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME' => 'Περιγραφή Κόστους Μεταφορικών',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART' => 'Βάρος από ...',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND' => '... έως',
	'PHPSHOP_CARRIER_FORM_NAME' => 'Μεταφορική Εταιρεία',
	'PHPSHOP_CARRIER_FORM_LIST_ORDER' => 'Σειρά Εμφάνισης'
); $VM_LANG->initModule( 'shipping', $langvars );
?>