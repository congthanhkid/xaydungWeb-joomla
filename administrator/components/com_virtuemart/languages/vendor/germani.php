<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : germani.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'PHPSHOP_VENDOR_LIST_LBL' => 'Verkäuferliste',
	'PHPSHOP_VENDOR_LIST_ADMIN' => 'Eintrag ändern',
	'PHPSHOP_VENDOR_FORM_LBL' => 'Neu: Lieferanteninformation',
	'PHPSHOP_VENDOR_FORM_CONTACT_LBL' => 'Kontaktinformation',
	'PHPSHOP_VENDOR_FORM_FULL_IMAGE' => 'Großes Bild',
	'PHPSHOP_VENDOR_FORM_UPLOAD' => 'Bild hochladen',
	'PHPSHOP_VENDOR_FORM_STORE_NAME' => 'Name des Lieferanten-Shops',
	'PHPSHOP_VENDOR_FORM_COMPANY_NAME' => 'Lieferanten-Firmenname',
	'PHPSHOP_VENDOR_FORM_ADDRESS_1' => 'Adresse 1',
	'PHPSHOP_VENDOR_FORM_ADDRESS_2' => 'Adresse 2',
	'PHPSHOP_VENDOR_FORM_CITY' => 'Stadt',
	'PHPSHOP_VENDOR_FORM_STATE' => 'Bundesland',
	'PHPSHOP_VENDOR_FORM_COUNTRY' => 'Land',
	'PHPSHOP_VENDOR_FORM_ZIP' => 'PLZ',
	'PHPSHOP_VENDOR_FORM_PHONE' => 'Telefon',
	'PHPSHOP_VENDOR_FORM_CURRENCY' => 'Währung',
	'PHPSHOP_VENDOR_FORM_CATEGORY' => 'Lieferantenkategorie',
	'PHPSHOP_VENDOR_FORM_LAST_NAME' => 'Nachname',
	'PHPSHOP_VENDOR_FORM_FIRST_NAME' => 'Vorname',
	'PHPSHOP_VENDOR_FORM_MIDDLE_NAME' => 'mittlerer Name',
	'PHPSHOP_VENDOR_FORM_TITLE' => 'Titel',
	'PHPSHOP_VENDOR_FORM_PHONE_1' => 'Telefon 1',
	'PHPSHOP_VENDOR_FORM_PHONE_2' => 'Telefon 2',
	'PHPSHOP_VENDOR_FORM_FAX' => 'Fax',
	'PHPSHOP_VENDOR_FORM_EMAIL' => 'Email',
	'PHPSHOP_VENDOR_FORM_IMAGE_PATH' => 'Bildpfad',
	'PHPSHOP_VENDOR_FORM_DESCRIPTION' => 'Beschreibung',
	'PHPSHOP_VENDOR_CAT_LIST_LBL' => 'Lieferantenkategorieliste',
	'PHPSHOP_VENDOR_CAT_NAME' => 'Kategoriename',
	'PHPSHOP_VENDOR_CAT_DESCRIPTION' => 'Kategoriebeschreibung',
	'PHPSHOP_VENDOR_CAT_VENDORS' => 'Lieferanten',
	'PHPSHOP_VENDOR_CAT_FORM_LBL' => 'Lieferantenkategorie-Formular',
	'PHPSHOP_VENDOR_CAT_FORM_INFO_LBL' => 'Kategorieinformation',
	'PHPSHOP_VENDOR_CAT_FORM_NAME' => 'Kategoriename',
	'PHPSHOP_VENDOR_CAT_FORM_DESCRIPTION' => 'Kategoriebeschreibung'
); $VM_LANG->initModule( 'vendor', $langvars );
?>