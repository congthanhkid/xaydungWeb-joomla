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
	'PHPSHOP_USER_FORM_FIRST_NAME' => 'Voornaam',
	'PHPSHOP_USER_FORM_LAST_NAME' => 'Achternaam',
	'PHPSHOP_USER_FORM_MIDDLE_NAME' => 'Tussenvoegsel',
	'PHPSHOP_USER_FORM_COMPANY_NAME' => 'Bedrijfsnaam',
	'PHPSHOP_USER_FORM_ADDRESS_1' => 'Adres 1',
	'PHPSHOP_USER_FORM_ADDRESS_2' => 'Adres 2',
	'PHPSHOP_USER_FORM_CITY' => 'Woonplaats',
	'PHPSHOP_USER_FORM_STATE' => 'Provincie',
	'PHPSHOP_USER_FORM_ZIP' => 'Postcode',
	'PHPSHOP_USER_FORM_COUNTRY' => 'Land',
	'PHPSHOP_USER_FORM_PHONE' => 'Telefoon',
	'PHPSHOP_USER_FORM_PHONE2' => 'GSM',
	'PHPSHOP_USER_FORM_FAX' => 'Fax',
	'PHPSHOP_ISSHIP_LIST_PUBLISH_LBL' => 'Actief',
	'PHPSHOP_ISSHIP_FORM_UPDATE_LBL' => 'Verzendmethode configureren',
	'PHPSHOP_STORE_FORM_FULL_IMAGE' => 'Grote afbeelding',
	'PHPSHOP_STORE_FORM_UPLOAD' => 'Afbeelding uploaden',
	'PHPSHOP_STORE_FORM_STORE_NAME' => 'Winkelnaam',
	'PHPSHOP_STORE_FORM_COMPANY_NAME' => 'Bedrijfsnaam',
	'PHPSHOP_STORE_FORM_ADDRESS_1' => 'Adres 1',
	'PHPSHOP_STORE_FORM_ADDRESS_2' => 'Adres 2',
	'PHPSHOP_STORE_FORM_CITY' => 'Stad',
	'PHPSHOP_STORE_FORM_STATE' => 'Provincie',
	'PHPSHOP_STORE_FORM_COUNTRY' => 'Land',
	'PHPSHOP_STORE_FORM_ZIP' => 'Postcode',
	'PHPSHOP_STORE_FORM_CURRENCY' => 'Valuta',
	'PHPSHOP_STORE_FORM_LAST_NAME' => 'Achternaam',
	'PHPSHOP_STORE_FORM_FIRST_NAME' => 'Voornaam',
	'PHPSHOP_STORE_FORM_MIDDLE_NAME' => 'Tussenvoegsel',
	'PHPSHOP_STORE_FORM_TITLE' => 'Titel',
	'PHPSHOP_STORE_FORM_PHONE_1' => 'Telefoon 1',
	'PHPSHOP_STORE_FORM_PHONE_2' => 'Telefoon 2',
	'PHPSHOP_STORE_FORM_DESCRIPTION' => 'Omschrijving',
	'PHPSHOP_PAYMENT_METHOD_LIST_LBL' => 'Betalingsmethode lijst',
	'PHPSHOP_PAYMENT_METHOD_LIST_NAME' => 'Naam',
	'PHPSHOP_PAYMENT_METHOD_LIST_CODE' => 'Code',
	'PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP' => 'Klantengroep',
	'PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR' => 'Betalingsmethode type',
	'PHPSHOP_PAYMENT_METHOD_FORM_LBL' => 'Betaalmethode formulier',
	'PHPSHOP_PAYMENT_METHOD_FORM_NAME' => 'Betaalmethode naam',
	'PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP' => 'Klantengroep',
	'PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT' => 'Korting',
	'PHPSHOP_PAYMENT_METHOD_FORM_CODE' => 'Code',
	'PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER' => 'Volgorde',
	'PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR' => 'Betaalmethode type',
	'PHPSHOP_PAYMENT_FORM_CC' => 'Creditcard',
	'PHPSHOP_PAYMENT_FORM_USE_PP' => 'Gebruik betalingsverwerker',
	'PHPSHOP_PAYMENT_FORM_BANK_DEBIT' => 'Bankoverschrijving',
	'PHPSHOP_PAYMENT_FORM_AO' => 'Onder rembours (betaling bij levering)',
	'PHPSHOP_STATISTIC_STATISTICS' => 'Statistieken',
	'PHPSHOP_STATISTIC_CUSTOMERS' => 'Klanten',
	'PHPSHOP_STATISTIC_ACTIVE_PRODUCTS' => 'actieve producten',
	'PHPSHOP_STATISTIC_INACTIVE_PRODUCTS' => 'inactieve producten',
	'PHPSHOP_STATISTIC_NEW_ORDERS' => 'Nieuwe bestellingen',
	'PHPSHOP_STATISTIC_NEW_CUSTOMERS' => 'Nieuwe klanten',
	'PHPSHOP_CREDITCARD_NAME' => 'Soort creditcard',
	'PHPSHOP_CREDITCARD_CODE' => 'Creditcard - afkorting',
	'PHPSHOP_YOUR_STORE' => 'Uw winkel',
	'PHPSHOP_CONTROL_PANEL' => 'Controlepaneel',
	'PHPSHOP_CHANGE_PASSKEY_FORM' => 'Toon/ Wijzig  wachtwoord/transactiesleutel',
	'PHPSHOP_TYPE_PASSWORD' => 'Geef a.u.b. uw wachtwoord in',
	'PHPSHOP_CURRENT_TRANSACTION_KEY' => 'Huidige transactiesleutel',
	'PHPSHOP_CHANGE_PASSKEY_SUCCESS' => 'De transactiesleutel werd succesvol gewijzigd.',
	'VM_PAYMENT_CLASS_NAME' => 'Naam betaalklasse',
	'VM_PAYMENT_CLASS_NAME_TIP' => '(e.g. <strong>ps_netbanx</strong>) :<br />
standaard: ps_payment<br />
<i>Laat leeg als u niet zeker weet wat er ingevuld moet worden!</i>',
	'VM_PAYMENT_EXTRAINFO' => 'Extra informatie betaalmethode',
	'VM_PAYMENT_EXTRAINFO_TIP' => 'Wordt weergegeven op de bevestigingspagina. Mogelijkheden zijn: HTML code van de bank, hints voor de klanten etc.',
	'VM_PAYMENT_ACCEPTED_CREDITCARDS' => 'Geaccepteerde creditcards',
	'VM_PAYMENT_METHOD_DISCOUNT_TIP' => 'Om de korting om te zetten naar een toeslag, gebruik een negatieve waarde hier (Bijvoorbeeld: <strong>-2.00</strong>).',
	'VM_PAYMENT_METHOD_DISCOUNT_MAX_AMOUNT' => 'Maximale korting',
	'VM_PAYMENT_METHOD_DISCOUNT_MIN_AMOUNT' => 'Minimale korting',
	'VM_PAYMENT_FORM_FORMBASED' => 'HTML-Formulier gebaseerd (bijv. PayPal)',
	'VM_ORDER_EXPORT_MODULE_LIST_LBL' => 'Order exporteer module lijst',
	'VM_ORDER_EXPORT_MODULE_LIST_NAME' => 'Naam',
	'VM_ORDER_EXPORT_MODULE_LIST_DESC' => 'Beschrijving',
	'VM_STORE_FORM_ACCEPTED_CURRENCIES' => 'Lijst met geaccepteerde valuta',
	'VM_STORE_FORM_ACCEPTED_CURRENCIES_TIP' => 'Deze lijst toont alle verschillende valuta die je accepteert wanneer mensen iets kopen in je winkel. <strong>Opmerking:</strong> Alle valuta kan worden geselecteerd in de checkout! Als je dit niet wil, selecteer dan alleen de valuta van je land (=standaard).',
	'VM_EXPORT_MODULE_FORM_LBL' => 'Export module formulier',
	'VM_EXPORT_MODULE_FORM_NAME' => 'Export module naam',
	'VM_EXPORT_MODULE_FORM_DESC' => 'Beschrijving',
	'VM_EXPORT_CLASS_NAME' => 'Export klasse naam',
	'VM_EXPORT_CLASS_NAME_TIP' => '(b.v. <strong>ps_orders_csv</strong>) :<br /> standaard: ps_xmlexport<br /> <i>Laat leeg als je niet zeker weet wat er ingevuld moet worden!</i>',
	'VM_EXPORT_CONFIG' => 'Export extra instellingen',
	'VM_EXPORT_CONFIG_TIP' => 'Definieer de export configuratie van gekozen export modules of creëer een toegevoegde configuratie. De code moet geldige PHP-Code zijn.',
	'VM_SHIPPING_MODULE_LIST_NAME' => 'Naam',
	'VM_SHIPPING_MODULE_LIST_E_VERSION' => 'Versie',
	'VM_SHIPPING_MODULE_LIST_HEADER_AUTHOR' => 'Auteur',
	'PHPSHOP_STORE_ADDRESS_FORMAT' => 'Winkel adres formaat',
	'PHPSHOP_STORE_ADDRESS_FORMAT_TIP' => 'U kunt de navolgende placeholders hier gebruiken',
	'PHPSHOP_STORE_DATE_FORMAT' => 'Winkel datum formaat',
	'VM_PAYMENT_METHOD_ID_NOT_PROVIDED' => 'Fout: Betaalmethode ID is niet opgegeven.',
	'VM_SHIPPING_MODULE_CONFIG_LBL' => 'Verzendmodule instellingen',
	'VM_SHIPPING_MODULE_CLASSERROR' => 'Kon de navolgende klasse niet initiëren {shipping_module}'
); $VM_LANG->initModule( 'store', $langvars );
?>