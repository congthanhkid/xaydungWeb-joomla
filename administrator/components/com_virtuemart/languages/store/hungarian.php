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
	'PHPSHOP_USER_FORM_FIRST_NAME' => 'Vezetéknév',
	'PHPSHOP_USER_FORM_LAST_NAME' => 'Keresztnév',
	'PHPSHOP_USER_FORM_MIDDLE_NAME' => 'Középső név',
	'PHPSHOP_USER_FORM_COMPANY_NAME' => 'Cég neve',
	'PHPSHOP_USER_FORM_ADDRESS_1' => 'Cím 1',
	'PHPSHOP_USER_FORM_ADDRESS_2' => 'Cím 2',
	'PHPSHOP_USER_FORM_CITY' => 'Város',
	'PHPSHOP_USER_FORM_STATE' => 'Állam/Tartomány/Terület',
	'PHPSHOP_USER_FORM_ZIP' => 'Irányítószám',
	'PHPSHOP_USER_FORM_COUNTRY' => 'Ország',
	'PHPSHOP_USER_FORM_PHONE' => 'Telefon',
	'PHPSHOP_USER_FORM_PHONE2' => 'Mobiltelefon',
	'PHPSHOP_USER_FORM_FAX' => 'Fax',
	'PHPSHOP_ISSHIP_LIST_PUBLISH_LBL' => 'Aktív',
	'PHPSHOP_ISSHIP_FORM_UPDATE_LBL' => 'Beállítások',
	'PHPSHOP_STORE_FORM_FULL_IMAGE' => 'Teljes kép',
	'PHPSHOP_STORE_FORM_UPLOAD' => 'Kép feltöltés',
	'PHPSHOP_STORE_FORM_STORE_NAME' => 'Üzlet neve',
	'PHPSHOP_STORE_FORM_COMPANY_NAME' => 'Tulajdonos cég neve',
	'PHPSHOP_STORE_FORM_ADDRESS_1' => 'Cím 1',
	'PHPSHOP_STORE_FORM_ADDRESS_2' => 'Cím 2',
	'PHPSHOP_STORE_FORM_CITY' => 'Város',
	'PHPSHOP_STORE_FORM_STATE' => 'Állam/Tartomány/Megye',
	'PHPSHOP_STORE_FORM_COUNTRY' => 'Ország',
	'PHPSHOP_STORE_FORM_ZIP' => 'Irányítószám',
	'PHPSHOP_STORE_FORM_CURRENCY' => 'Pénznem',
	'PHPSHOP_STORE_FORM_LAST_NAME' => 'Keresztnév',
	'PHPSHOP_STORE_FORM_FIRST_NAME' => 'Vezetéknév',
	'PHPSHOP_STORE_FORM_MIDDLE_NAME' => 'Középső név',
	'PHPSHOP_STORE_FORM_TITLE' => 'Megszólítás',
	'PHPSHOP_STORE_FORM_PHONE_1' => 'Telefon 1',
	'PHPSHOP_STORE_FORM_PHONE_2' => 'Telefon 2',
	'PHPSHOP_STORE_FORM_DESCRIPTION' => 'Üzlet rövid leírása',
	'PHPSHOP_PAYMENT_METHOD_LIST_LBL' => 'Kifizetési modulok',
	'PHPSHOP_PAYMENT_METHOD_LIST_NAME' => 'Név',
	'PHPSHOP_PAYMENT_METHOD_LIST_CODE' => 'Kód',
	'PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP' => 'Vásárlócsoport',
	'PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR' => 'Kifizetési modul típus',
	'PHPSHOP_PAYMENT_METHOD_FORM_LBL' => 'Új kifizetési modul',
	'PHPSHOP_PAYMENT_METHOD_FORM_NAME' => 'Kifizetési modul neve',
	'PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP' => 'Vásárlócsoport',
	'PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT' => 'Árengedmény',
	'PHPSHOP_PAYMENT_METHOD_FORM_CODE' => 'Kód',
	'PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER' => 'Modul sorszáma',
	'PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR' => 'Kifizetési modul típusa',
	'PHPSHOP_PAYMENT_FORM_CC' => 'Hitelkártya',
	'PHPSHOP_PAYMENT_FORM_USE_PP' => 'Használja a Payment Processort',
	'PHPSHOP_PAYMENT_FORM_BANK_DEBIT' => 'Banki terhelés',
	'PHPSHOP_PAYMENT_FORM_AO' => 'Csak cím / átvételkor fizetendő',
	'PHPSHOP_STATISTIC_STATISTICS' => 'Statisztikák',
	'PHPSHOP_STATISTIC_CUSTOMERS' => 'Vásárlók',
	'PHPSHOP_STATISTIC_ACTIVE_PRODUCTS' => 'aktív termékek',
	'PHPSHOP_STATISTIC_INACTIVE_PRODUCTS' => 'inaktív termékek',
	'PHPSHOP_STATISTIC_NEW_ORDERS' => 'Új megrendelések',
	'PHPSHOP_STATISTIC_NEW_CUSTOMERS' => 'Új vásárlók',
	'PHPSHOP_CREDITCARD_NAME' => 'Hitelkártya neve',
	'PHPSHOP_CREDITCARD_CODE' => 'Hitelkártya rövid kódja',
	'PHPSHOP_YOUR_STORE' => 'Az üzlet',
	'PHPSHOP_CONTROL_PANEL' => 'Vezérlőasztal',
	'PHPSHOP_CHANGE_PASSKEY_FORM' => 'Mutassa/változtassa a jelszót/tranzakció kulcsot',
	'PHPSHOP_TYPE_PASSWORD' => 'Írja be felhasználói jelszavát',
	'PHPSHOP_CURRENT_TRANSACTION_KEY' => 'Jelenlegi tranzakció kulcs',
	'PHPSHOP_CHANGE_PASSKEY_SUCCESS' => 'Tranzakció kulcs sikeresen megváltoztatva.',
	'VM_PAYMENT_CLASS_NAME' => 'Fizetési class neve',
	'VM_PAYMENT_CLASS_NAME_TIP' => '(például <strong>ps_netbanx</strong>) :<br />
alapértelmezett: ps_payment<br />
<i>Hagyja üresen ha nem biztos benne!</i>',
	'VM_PAYMENT_EXTRAINFO' => 'További információ',
	'VM_PAYMENT_EXTRAINFO_TIP' => 'A rendelés megerősítési oldalán lesz látható. Ez lehet HTML-kód a tranzakciót kezelő szolgáltató részéről, tippek a vásárlónak stb.',
	'VM_PAYMENT_ACCEPTED_CREDITCARDS' => 'Elfogadott kártyatípusok',
	'VM_PAYMENT_METHOD_DISCOUNT_TIP' => 'A kedvezmény díjjá módosulhat egy negatív értékkel (példa: <strong>-2.00</strong>).',
	'VM_PAYMENT_METHOD_DISCOUNT_MAX_AMOUNT' => 'Maximum kedvezmény',
	'VM_PAYMENT_METHOD_DISCOUNT_MIN_AMOUNT' => 'Minimum kedvezmény',
	'VM_PAYMENT_FORM_FORMBASED' => 'HTML-Form alapú (például PayPal)',
	'VM_ORDER_EXPORT_MODULE_LIST_LBL' => 'Export Modulok',
	'VM_ORDER_EXPORT_MODULE_LIST_NAME' => 'Név',
	'VM_ORDER_EXPORT_MODULE_LIST_DESC' => 'Leírás',
	'VM_STORE_FORM_ACCEPTED_CURRENCIES' => 'Elfogadott pénznemek',
	'VM_STORE_FORM_ACCEPTED_CURRENCIES_TIP' => 'Ez a lista tartalmazza az üzletben elfogadott pénznemeket. <strong>Megjegyzés:</strong> Az összes itt kijelölt pénznemet használhatják a vásárlók a megrendelésnél!',
	'VM_EXPORT_MODULE_FORM_LBL' => 'Új export modul',
	'VM_EXPORT_MODULE_FORM_NAME' => 'Export modul név',
	'VM_EXPORT_MODULE_FORM_DESC' => 'Leírás',
	'VM_EXPORT_CLASS_NAME' => 'Export Class név',
	'VM_EXPORT_CLASS_NAME_TIP' => '(például <strong>ps_orders_csv</strong>) :<br /> alapértelmezett: ps_xmlexport<br /> <i>Hagyja üresen ha nem biztos benne!</i>',
	'VM_EXPORT_CONFIG' => 'Export extra beállítások',
	'VM_EXPORT_CONFIG_TIP' => 'A saját hozzáadott export modulok beállításai vagy saját beállítás-séma megadása. Csak PHP-kód!',
	'VM_SHIPPING_MODULE_LIST_NAME' => 'Név',
	'VM_SHIPPING_MODULE_LIST_E_VERSION' => 'Verzió',
	'VM_SHIPPING_MODULE_LIST_HEADER_AUTHOR' => 'Szerző',
	'PHPSHOP_STORE_ADDRESS_FORMAT' => 'Üzletcím formátuma',
	'PHPSHOP_STORE_ADDRESS_FORMAT_TIP' => 'A következő címkéket használhatjuk',
	'PHPSHOP_STORE_DATE_FORMAT' => 'Dátum formátuma',
	'VM_PAYMENT_METHOD_ID_NOT_PROVIDED' => 'Hiba: Fizetési mód azonosító nincs megadva.',
	'VM_SHIPPING_MODULE_CONFIG_LBL' => 'Szállítási modul beállítások',
	'VM_SHIPPING_MODULE_CLASSERROR' => 'Nem tudom létrehozni a(z) {shipping_module} classt'
); $VM_LANG->initModule( 'store', $langvars );
?>