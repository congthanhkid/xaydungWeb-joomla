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
	'PHPSHOP_USER_FORM_FIRST_NAME' => 'Etunimi',
	'PHPSHOP_USER_FORM_LAST_NAME' => 'Sukunimi',
	'PHPSHOP_USER_FORM_MIDDLE_NAME' => 'Toinen etunimi',
	'PHPSHOP_USER_FORM_COMPANY_NAME' => 'Yrityksen nimi',
	'PHPSHOP_USER_FORM_ADDRESS_1' => 'Osoite 1',
	'PHPSHOP_USER_FORM_ADDRESS_2' => 'Osoite 2',
	'PHPSHOP_USER_FORM_CITY' => 'Postitoimipaikka',
	'PHPSHOP_USER_FORM_STATE' => 'Osavaltio',
	'PHPSHOP_USER_FORM_ZIP' => 'Postinumero',
	'PHPSHOP_USER_FORM_COUNTRY' => 'Maa',
	'PHPSHOP_USER_FORM_PHONE' => 'Puhelin',
	'PHPSHOP_USER_FORM_PHONE2' => 'Matkapuhelin',
	'PHPSHOP_USER_FORM_FAX' => 'Faksi',
	'PHPSHOP_ISSHIP_LIST_PUBLISH_LBL' => 'K‰ytˆss‰',
	'PHPSHOP_ISSHIP_FORM_UPDATE_LBL' => 'Toimitusasetukset',
	'PHPSHOP_STORE_FORM_FULL_IMAGE' => 'Iso kuva',
	'PHPSHOP_STORE_FORM_UPLOAD' => 'Lataa kuva',
	'PHPSHOP_STORE_FORM_STORE_NAME' => 'Kaupan nimi',
	'PHPSHOP_STORE_FORM_COMPANY_NAME' => 'Kaupan yritysnimi',
	'PHPSHOP_STORE_FORM_ADDRESS_1' => 'L‰hiosoite',
	'PHPSHOP_STORE_FORM_ADDRESS_2' => 'L‰hiosoite 2.rivi',
	'PHPSHOP_STORE_FORM_CITY' => 'Postitoimipaikka',
	'PHPSHOP_STORE_FORM_STATE' => 'Osavaltio/Alue',
	'PHPSHOP_STORE_FORM_COUNTRY' => 'Maa',
	'PHPSHOP_STORE_FORM_ZIP' => 'Postinumero',
	'PHPSHOP_STORE_FORM_CURRENCY' => 'Valuutta',
	'PHPSHOP_STORE_FORM_LAST_NAME' => 'Sukunimi',
	'PHPSHOP_STORE_FORM_FIRST_NAME' => 'Etunimi',
	'PHPSHOP_STORE_FORM_MIDDLE_NAME' => 'Toinen nimi',
	'PHPSHOP_STORE_FORM_TITLE' => 'Titteli',
	'PHPSHOP_STORE_FORM_PHONE_1' => 'Puhelin 1',
	'PHPSHOP_STORE_FORM_PHONE_2' => 'Puhelin 2',
	'PHPSHOP_STORE_FORM_DESCRIPTION' => 'Kuvaus',
	'PHPSHOP_PAYMENT_METHOD_LIST_LBL' => 'Maksutapaluettelo',
	'PHPSHOP_PAYMENT_METHOD_LIST_NAME' => 'Nimi',
	'PHPSHOP_PAYMENT_METHOD_LIST_CODE' => 'Koodi',
	'PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP' => 'Ostajaryhm‰',
	'PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR' => 'Cybercash',
	'PHPSHOP_PAYMENT_METHOD_FORM_LBL' => 'Maksutapalomake',
	'PHPSHOP_PAYMENT_METHOD_FORM_NAME' => 'Maksulomakkeen nimi',
	'PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP' => 'Ostajaryhm‰',
	'PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT' => 'Maksutapalis‰/alennus',
	'PHPSHOP_PAYMENT_METHOD_FORM_CODE' => 'Koodi',
	'PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER' => 'Luetteloj‰rjestys',
	'PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR' => 'K‰yt‰ Cybercash',
	'PHPSHOP_PAYMENT_FORM_CC' => 'Luottokortti',
	'PHPSHOP_PAYMENT_FORM_USE_PP' => 'K‰yt‰ maksuk‰sittelij‰‰',
	'PHPSHOP_PAYMENT_FORM_BANK_DEBIT' => 'Pankkikortti',
	'PHPSHOP_PAYMENT_FORM_AO' => 'Vain osoite',
	'PHPSHOP_STATISTIC_STATISTICS' => 'Tilastot',
	'PHPSHOP_STATISTIC_CUSTOMERS' => 'Asiakkaat',
	'PHPSHOP_STATISTIC_ACTIVE_PRODUCTS' => 'aktiivisia tuotteita',
	'PHPSHOP_STATISTIC_INACTIVE_PRODUCTS' => 'passiivisia tuotteita',
	'PHPSHOP_STATISTIC_NEW_ORDERS' => 'Uudet tilaukset',
	'PHPSHOP_STATISTIC_NEW_CUSTOMERS' => 'Uudet asiakkaat',
	'PHPSHOP_CREDITCARD_NAME' => 'Luottokortin nimi',
	'PHPSHOP_CREDITCARD_CODE' => 'Luottokortti lyhytkoodi',
	'PHPSHOP_YOUR_STORE' => 'Verkkokauppa',
	'PHPSHOP_CONTROL_PANEL' => 'Hallintapaneeli',
	'PHPSHOP_CHANGE_PASSKEY_FORM' => 'N‰yt‰/muuta salasana/tapahtuma-avainta',
	'PHPSHOP_TYPE_PASSWORD' => 'Syˆt‰ salasanasi',
	'PHPSHOP_CURRENT_TRANSACTION_KEY' => 'Voimassaoleva tapahtuma-avain',
	'PHPSHOP_CHANGE_PASSKEY_SUCCESS' => 'Tapahtuma-avain onnistuneesti muutettu.',
	'VM_PAYMENT_CLASS_NAME' => 'Maksutapa luokan nimi',
	'VM_PAYMENT_CLASS_NAME_TIP' => '(esim. <strong>ps_netbanx</strong>) :<br />
oletus: ps_payment<br />
<i>J‰t‰ tyhj‰ksi, jos et ole varma miten t‰yt‰t!</i>',
	'VM_PAYMENT_EXTRAINFO' => 'Maksutavan lis‰info',
	'VM_PAYMENT_EXTRAINFO_TIP' => 'N‰kyy tilausvahvistussivulla. Voi olla: HTML Form koodi, maksun k‰sittelij‰lt‰ (Payment Service Provider), viittaus asiakkaasta, ym.',
	'VM_PAYMENT_ACCEPTED_CREDITCARDS' => 'Hyv‰ksytyt luottokorttityypit',
	'VM_PAYMENT_METHOD_DISCOUNT_TIP' => 'Jos k‰yt‰t maksutapa-alennuksen sijaan maksutapalis‰‰(fee), k‰yt‰ t‰ss‰ negatiivista lukua. (Esim: <strong>-2.00</strong>).',
	'VM_PAYMENT_METHOD_DISCOUNT_MAX_AMOUNT' => 'Suurin alennusm‰‰r‰',
	'VM_PAYMENT_METHOD_DISCOUNT_MIN_AMOUNT' => 'Pienin alennusm‰‰r‰',
	'VM_PAYMENT_FORM_FORMBASED' => 'HTML-Form (esim. PayPal)',
	'VM_ORDER_EXPORT_MODULE_LIST_LBL' => 'Tilauksienvienti moduulilista',
	'VM_ORDER_EXPORT_MODULE_LIST_NAME' => 'Nimi',
	'VM_ORDER_EXPORT_MODULE_LIST_DESC' => 'Kuvaus',
	'VM_STORE_FORM_ACCEPTED_CURRENCIES' => 'Lista hyv‰ksytyist‰ valuutoista',
	'VM_STORE_FORM_ACCEPTED_CURRENCIES_TIP' => 'Lista valuutoista, joita ostajat voivat k‰ytt‰‰ ostaessaan tuotteita. <strong>Huom:</strong> Kaikki valitut valuutat ovat k‰ytˆss‰ tilauksissa! Jos et halua t‰t‰, niin valitse vain oman maan valutta (=default).',
	'VM_EXPORT_MODULE_FORM_LBL' => 'Tilauksen vientimoduuli',
	'VM_EXPORT_MODULE_FORM_NAME' => 'Tilauksen vientimoduulin nimi',
	'VM_EXPORT_MODULE_FORM_DESC' => 'Kuvaus',
	'VM_EXPORT_CLASS_NAME' => 'Tilauksen viennin luokan nimi (Class Name)',
	'VM_EXPORT_CLASS_NAME_TIP' => '(esim. <strong>ps_orders_csv</strong>) :<br /> oletuksena: ps_xmlexport<br /> <i>J‰t‰ tyhj‰ksi jos et tied‰ mit‰ lis‰‰t kentt‰‰n !</i>',
	'VM_EXPORT_CONFIG' => 'Tilauksen viennin lis‰asetukset',
	'VM_EXPORT_CONFIG_TIP' => 'M‰‰rit‰ vientirakenne, k‰ytt‰j‰n m‰‰rittelemi‰ tilauksen vientimoduuleja varten tai m‰‰rittele lis‰rakenne. Koodin t‰ytyy olla toimiva PHP-koodi.',
	'VM_SHIPPING_MODULE_LIST_NAME' => 'Nimi',
	'VM_SHIPPING_MODULE_LIST_E_VERSION' => 'Versio',
	'VM_SHIPPING_MODULE_LIST_HEADER_AUTHOR' => 'Julkaisija',
	'PHPSHOP_STORE_ADDRESS_FORMAT' => 'Kaupan osoitteen formaatti',
	'PHPSHOP_STORE_ADDRESS_FORMAT_TIP' => 'Voit k‰ytt‰‰ seuraavia kaupan tietoja(placeholders)',
	'PHPSHOP_STORE_DATE_FORMAT' => 'Kaupan p‰iv‰m‰‰r‰n formaatti',
	'VM_PAYMENT_METHOD_ID_NOT_PROVIDED' => 'Virhe: Maksutavan ID:t‰ ei toimitettu.',
	'VM_SHIPPING_MODULE_CONFIG_LBL' => 'Toimitusmoduulin asetukset',
	'VM_SHIPPING_MODULE_CLASSERROR' => 'Ei voitu luoda Class {shipping_module}'
); $VM_LANG->initModule( 'store', $langvars );
?>