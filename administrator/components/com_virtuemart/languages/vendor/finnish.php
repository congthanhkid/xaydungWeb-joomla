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
	'PHPSHOP_VENDOR_LIST_LBL' => 'Kauppiasluettelo',
	'PHPSHOP_VENDOR_LIST_ADMIN' => 'Ylläpitäjä',
	'PHPSHOP_VENDOR_FORM_LBL' => 'Lisää/muokkaa kauppiaan tiedot',
	'PHPSHOP_VENDOR_FORM_CONTACT_LBL' => 'Yhteystiedot',
	'PHPSHOP_VENDOR_FORM_FULL_IMAGE' => 'Iso kuva',
	'PHPSHOP_VENDOR_FORM_UPLOAD' => 'Lataa kuva',
	'PHPSHOP_VENDOR_FORM_STORE_NAME' => 'Kauppiaan kaupan nimi',
	'PHPSHOP_VENDOR_FORM_COMPANY_NAME' => 'Kauppiaan yrityksen nimi',
	'PHPSHOP_VENDOR_FORM_ADDRESS_1' => 'Lähiosoite',
	'PHPSHOP_VENDOR_FORM_ADDRESS_2' => 'Lähiosoite 2.rivi',
	'PHPSHOP_VENDOR_FORM_CITY' => 'Postitoimipaikka',
	'PHPSHOP_VENDOR_FORM_STATE' => 'Osavaltio/Alue',
	'PHPSHOP_VENDOR_FORM_COUNTRY' => 'Maa',
	'PHPSHOP_VENDOR_FORM_ZIP' => 'Postinumero',
	'PHPSHOP_VENDOR_FORM_PHONE' => 'Puhelin',
	'PHPSHOP_VENDOR_FORM_CURRENCY' => 'Valuutta',
	'PHPSHOP_VENDOR_FORM_CATEGORY' => 'Kauppiaan kategoria',
	'PHPSHOP_VENDOR_FORM_LAST_NAME' => 'Sukunimi',
	'PHPSHOP_VENDOR_FORM_FIRST_NAME' => 'Etunimi',
	'PHPSHOP_VENDOR_FORM_MIDDLE_NAME' => 'Toinen nimi',
	'PHPSHOP_VENDOR_FORM_TITLE' => 'Titteli',
	'PHPSHOP_VENDOR_FORM_PHONE_1' => 'Puhelin 1',
	'PHPSHOP_VENDOR_FORM_PHONE_2' => 'Puhelin 2',
	'PHPSHOP_VENDOR_FORM_FAX' => 'Faksi',
	'PHPSHOP_VENDOR_FORM_EMAIL' => 'Sähköposti',
	'PHPSHOP_VENDOR_FORM_IMAGE_PATH' => 'Kuvan polku',
	'PHPSHOP_VENDOR_FORM_DESCRIPTION' => 'Kuvaus',
	'PHPSHOP_VENDOR_CAT_LIST_LBL' => 'Kauppiaan kategorialuettelo',
	'PHPSHOP_VENDOR_CAT_NAME' => 'Kategorian nimi',
	'PHPSHOP_VENDOR_CAT_DESCRIPTION' => 'Kategorian kuvaus',
	'PHPSHOP_VENDOR_CAT_VENDORS' => 'Kauppiaat',
	'PHPSHOP_VENDOR_CAT_FORM_LBL' => 'Lisää/muokkaa kauppiaskategorian tiedot',
	'PHPSHOP_VENDOR_CAT_FORM_INFO_LBL' => 'Kategorian tiedot',
	'PHPSHOP_VENDOR_CAT_FORM_NAME' => 'Kategorian nimi',
	'PHPSHOP_VENDOR_CAT_FORM_DESCRIPTION' => 'Kategorian kuvaus'
); $VM_LANG->initModule( 'vendor', $langvars );
?>