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
	'PHPSHOP_NO_CUSTOMER' => 'Ette ole vielä rekisteröitynyt asiakas. Täyttäkää laskutustiedot.',
	'PHPSHOP_THANKYOU' => 'Kiitos tilauksesta.',
	'PHPSHOP_EMAIL_SENDTO' => 'Tilausvahvistus on lähetetty ',
	'PHPSHOP_CHECKOUT_NEXT' => 'Seuraava',
	'PHPSHOP_CHECKOUT_CONF_BILLINFO' => 'Laskutustiedot',
	'PHPSHOP_CHECKOUT_CONF_COMPANY' => 'Yritys',
	'PHPSHOP_CHECKOUT_CONF_NAME' => 'Nimi',
	'PHPSHOP_CHECKOUT_CONF_ADDRESS' => 'Osoite',
	'PHPSHOP_CHECKOUT_CONF_EMAIL' => 'Sähköposti',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO' => 'Toimitustiedot',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY' => 'Yritys',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME' => 'Nimi',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS' => 'Osoite',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE' => 'Puhelin',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX' => 'Faksi',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD' => 'Maksutapa',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO' => 'Tiedot luottokortilla maksettaessa',
	'PHPSHOP_PAYPAL_THANKYOU' => 'Kiitos maksusta. Suoritus onnistui. 
	    Maksuvahvistus tulee sähköpostilla PayPal:ista. 
	    Voit nyt jatkaa tai kirjautua sisään <a href=http://www.paypal.com>www.paypal.com</a> nähdäksesi maksutiedot.',
	'PHPSHOP_PAYPAL_ERROR' => 'Suorituksesi käsittelyn aikana tapahtui VIRHE. Tilauksesi tilaa ei voitu päivittää.',
	'PHPSHOP_THANKYOU_SUCCESS' => 'Tilaus onnistui ja tallennettiin!',
	'VM_CHECKOUT_TITLE_TAG' => 'Tialausprosessi: Sivu %s / %s',
	'VM_CHECKOUT_ORDERIDNOTSET' => 'Tilausnumeroa ei ole!',
	'VM_CHECKOUT_FAILURE' => 'Epäonnistui',
	'VM_CHECKOUT_SUCCESS' => 'Onnistui',
	'VM_CHECKOUT_PAGE_GATEWAY_EXPLAIN_1' => 'This page is located on the webshops website.',
	'VM_CHECKOUT_PAGE_GATEWAY_EXPLAIN_2' => 'The gateway execute the page on the website, and the shows the result SSL Encrypted.',
	'VM_CHECKOUT_CCV_CODE' => 'Luottokortin validointi koodi',
	'VM_CHECKOUT_CCV_CODE_TIPTITLE' => 'Mikä on luottokortin validointi koodi?',
	'VM_CHECKOUT_MD5_FAILED' => 'MD5 tarkastus epäonnistui',
	'VM_CHECKOUT_ORDERNOTFOUND' => 'Tilausta ei löytynyt',
	'PHPSHOP_EPAY_PAYMENT_CARDTYPE' => 'The payment is
created by %s <img
src="/components/com_virtuemart/shop_image/ps_image/epay_images/%s"
border="0">'
); $VM_LANG->initModule( 'checkout', $langvars );
?>