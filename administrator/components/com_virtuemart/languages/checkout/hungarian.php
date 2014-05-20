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
	'CHARSET' => 'UTF-8',
	'PHPSHOP_NO_CUSTOMER' => 'Ön még nem nyilvántartott ügyfél. Adja meg a számlázási információit.',
	'PHPSHOP_THANKYOU' => 'Köszönjük a megrendelést!',
	'PHPSHOP_EMAIL_SENDTO' => 'A megerősítő e-mail elküldve az alábbi címre',
	'PHPSHOP_CHECKOUT_NEXT' => 'Következő',
	'PHPSHOP_CHECKOUT_CONF_BILLINFO' => 'Számlázási információ',
	'PHPSHOP_CHECKOUT_CONF_COMPANY' => 'Cég',
	'PHPSHOP_CHECKOUT_CONF_NAME' => 'Név',
	'PHPSHOP_CHECKOUT_CONF_ADDRESS' => 'Cím',
	'PHPSHOP_CHECKOUT_CONF_EMAIL' => 'E-mail',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO' => 'Szállítási információ',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY' => 'Cég',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME' => 'Név',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS' => 'Cím',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE' => 'Telefon',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX' => 'Fax',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD' => 'Kifizetési eljárás',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO' => 'kért információ hitelkártyás kifizetés esetén',
	'PHPSHOP_PAYPAL_THANKYOU' => 'Köszönjük a kifizetést. A tranzakció sikeres volt. A PayPal e-mailben fogja értesíteni a tranzakció részleteiről. Most folytathatja, vagy bejelentkezhet a <a href=http://www.paypal.com>www.paypal.com</a> -ra hogy megtekintse a tranzakció részleteit.',
	'PHPSHOP_PAYPAL_ERROR' => 'A tranzakció feldolgozása közben hiba történt. A megrendelése státusát nem lehet frissíteni.',
	'PHPSHOP_THANKYOU_SUCCESS' => 'A megrendelése sikeresen megérkezett!',
	'VM_CHECKOUT_TITLE_TAG' => 'Rendelés lépései: %s / %s',
	'VM_CHECKOUT_ORDERIDNOTSET' => 'Rendelés azonosító üres!',
	'VM_CHECKOUT_FAILURE' => 'Hiba',
	'VM_CHECKOUT_SUCCESS' => 'Sikeres',
	'VM_CHECKOUT_PAGE_GATEWAY_EXPLAIN_1' => 'Az oldal az üzlet weboldalán található.',
	'VM_CHECKOUT_PAGE_GATEWAY_EXPLAIN_2' => 'A gateway az üzlet oldalán hozza létre a lapot, amelynek tartalmát SSL-titkosítással jeleníti itt meg.',
	'VM_CHECKOUT_CCV_CODE' => 'Hitelkártya ellenőrző szám',
	'VM_CHECKOUT_CCV_CODE_TIPTITLE' => 'Mi a hitelkártya ellenőrző szám?',
	'VM_CHECKOUT_MD5_FAILED' => 'MD5 azonosítási hiba',
	'VM_CHECKOUT_ORDERNOTFOUND' => 'Rendelés nem található',
	'PHPSHOP_EPAY_PAYMENT_CARDTYPE' => '%s kifizetés létrehozva <img
src="/components/com_virtuemart/shop_image/ps_image/epay_images/%s"
border="0">'
); $VM_LANG->initModule( 'checkout', $langvars );
?>