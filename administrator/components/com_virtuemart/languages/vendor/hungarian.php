<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : hungarian.php 1247 2008-02-13 08:42:28Z pedrohsi $
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2007 soeren - All rights reserved.
* @translator soeren, pedrohsi
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
	'CHARSET' => 'UTF-8',
	'PHPSHOP_VENDOR_LIST_LBL' => 'Forgalmazók',
	'PHPSHOP_VENDOR_LIST_ADMIN' => 'Karbantartás',
	'PHPSHOP_VENDOR_FORM_LBL' => 'Új forgalmazó',
	'PHPSHOP_VENDOR_FORM_CONTACT_LBL' => 'Elérhetőség',
	'PHPSHOP_VENDOR_FORM_FULL_IMAGE' => 'Teljes kép',
	'PHPSHOP_VENDOR_FORM_UPLOAD' => 'Kép feltöltése',
	'PHPSHOP_VENDOR_FORM_STORE_NAME' => 'Forgalmazó üzlet neve',
	'PHPSHOP_VENDOR_FORM_COMPANY_NAME' => 'Forgalmazó cég neve',
	'PHPSHOP_VENDOR_FORM_ADDRESS_1' => 'Cím 1',
	'PHPSHOP_VENDOR_FORM_ADDRESS_2' => 'Cím 2',
	'PHPSHOP_VENDOR_FORM_CITY' => 'Város',
	'PHPSHOP_VENDOR_FORM_STATE' => 'Állam/Tartomány/Terület',
	'PHPSHOP_VENDOR_FORM_COUNTRY' => 'Ország',
	'PHPSHOP_VENDOR_FORM_ZIP' => 'Irányítószám',
	'PHPSHOP_VENDOR_FORM_PHONE' => 'Telefon',
	'PHPSHOP_VENDOR_FORM_CURRENCY' => 'Pénznem',
	'PHPSHOP_VENDOR_FORM_CATEGORY' => 'Forgalmazó kategória',
	'PHPSHOP_VENDOR_FORM_LAST_NAME' => 'Keresztnév',
	'PHPSHOP_VENDOR_FORM_FIRST_NAME' => 'Vezetéknév',
	'PHPSHOP_VENDOR_FORM_MIDDLE_NAME' => 'Családnév',
	'PHPSHOP_VENDOR_FORM_TITLE' => 'Cím',
	'PHPSHOP_VENDOR_FORM_PHONE_1' => 'Telefon 1',
	'PHPSHOP_VENDOR_FORM_PHONE_2' => 'Telefon 2',
	'PHPSHOP_VENDOR_FORM_FAX' => 'Fax',
	'PHPSHOP_VENDOR_FORM_EMAIL' => 'E-mail',
	'PHPSHOP_VENDOR_FORM_IMAGE_PATH' => 'Kép elérési út',
	'PHPSHOP_VENDOR_FORM_DESCRIPTION' => 'Leírás',
	'PHPSHOP_VENDOR_CAT_LIST_LBL' => 'Forgalmazó kategóriák',
	'PHPSHOP_VENDOR_CAT_NAME' => 'Kategória neve',
	'PHPSHOP_VENDOR_CAT_DESCRIPTION' => 'Kategória leírása',
	'PHPSHOP_VENDOR_CAT_VENDORS' => 'Forgalmazók',
	'PHPSHOP_VENDOR_CAT_FORM_LBL' => 'Új forgalmazó kategória',
	'PHPSHOP_VENDOR_CAT_FORM_INFO_LBL' => 'Kategória adatok',
	'PHPSHOP_VENDOR_CAT_FORM_NAME' => 'Kategória neve',
	'PHPSHOP_VENDOR_CAT_FORM_DESCRIPTION' => 'Kategória leírás'
); $VM_LANG->initModule( 'vendor', $langvars );
?>