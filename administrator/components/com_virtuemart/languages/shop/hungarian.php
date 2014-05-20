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
	'PHPSHOP_BROWSE_LBL' => 'Böngész',
	'PHPSHOP_FLYPAGE_LBL' => 'Termék részletek',
	'PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT' => 'Termék szerkesztése',
	'PHPSHOP_DOWNLOADS_START' => 'Letöltés megkezdése',
	'PHPSHOP_DOWNLOADS_INFO' => 'Kérem, adja meg az e-mailban kapott letöltési azonosítót (Download-ID) és kattintson a  \'Letöltés megkezdése\' gombra.',
	'PHPSHOP_WAITING_LIST_MESSAGE' => 'Kérjük, adja meg alább az e-mail címét, hogy értesíteni tudjuk, amint a keresett termék ismét készleten lesz. Az e-mail címét nem adjuk ki, nem adjuk el, nem használjuk más célra, mint kizárólag arra, hogy értesítsük önt,  amint a keresett termék ismét készleten lesz.<br /><br />Köszönjük!',
	'PHPSHOP_WAITING_LIST_THANKS' => 'Köszönjük, hogy vár ránk! <br />Rögtön értesítjük, amint összeáll a naprakész leltár.',
	'PHPSHOP_WAITING_LIST_NOTIFY_ME' => 'Értesíts!',
	'PHPSHOP_SEARCH_ALL_CATEGORIES' => 'Az összes kategóriában',
	'PHPSHOP_SEARCH_ALL_PRODINFO' => 'Az összes mezőben',
	'PHPSHOP_SEARCH_PRODNAME' => 'Csak a termék nevében',
	'PHPSHOP_SEARCH_MANU_VENDOR' => 'Csak gyártó/kiadó/forgalmazó',
	'PHPSHOP_SEARCH_DESCRIPTION' => 'Csak a termék leírásában',
	'PHPSHOP_SEARCH_AND' => 'ÉS',
	'PHPSHOP_SEARCH_NOT' => 'NEM',
	'PHPSHOP_SEARCH_TEXT1' => 'A első lehulló-lista megengedi egy bizonyos kategória fastruktúra kiválasztását, hogy behatárolja a keresését. A második lehulló-lista megengedi a keresés behatárolását egy bizonyos termék-információ  (pl. Név) szerint. Miután kiválasztotta ezeket (vagy valamennyit alapértelmezett értéken hagyta), írja be a keresési kulcsszót. ',
	'PHPSHOP_SEARCH_TEXT2' => ' Tovább finomíthatja a keresést kulcsszavak és az ÉS (AND) vagy NEM (NOT) logikai operátorok használatával. Az ÉS használata azt jelenti, hogy mindkét szónak benne kell lennie a termék tulajdonságainak leírásában ahhoz, hogy a találati listán megjelenjen. A NEM használata azt jelenti, hogy az első szónak benne kell lennie a termék tulajdonságainak leírásában, a másodiknak meg nem.',
	'PHPSHOP_CONTINUE_SHOPPING' => 'A bevásárlás folytatása',
	'PHPSHOP_AVAILABLE_IMAGES' => 'Rendelkezésre álló képek',
	'PHPSHOP_BACK_TO_DETAILS' => 'Vissza a termék részletekhez',
	'PHPSHOP_IMAGE_NOT_FOUND' => 'Kép nem található!',
	'PHPSHOP_PARAMETER_SEARCH_TEXT1' => 'A technikai paraméterek alapján akar keresni?<BR>Használhatja bármely előre elkészített űrlapot:',
	'PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE' => 'Sajnálom, itt nincs kereshető kategória.',
	'PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE' => 'Sajnálom, nincs közzéttett termék típus ezen a néven.',
	'PHPSHOP_PARAMETER_SEARCH_IS_LIKE' => 'Hasonló',
	'PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE' => 'Nem hasonló',
	'PHPSHOP_PARAMETER_SEARCH_FULLTEXT' => 'Teljes szöveges keresés',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL' => 'Mind kiválasztva',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY' => 'Bármely kiválasztott',
	'PHPSHOP_PARAMETER_SEARCH_RESET_FORM' => 'Kérdőív törlése',
	'PHPSHOP_PRODUCT_NOT_FOUND' => 'Sajnálom, de a kért terméket nem találom!',
	'PHPSHOP_PRODUCT_PACKAGING1' => 'Csomagonkénti egységek száma {unit}:',
	'PHPSHOP_PRODUCT_PACKAGING2' => 'Comagonkénti termékszám {unit}:',
	'PHPSHOP_CART_PRICE_PER_UNIT' => 'Egységár',
	'VM_PRODUCT_ENQUIRY_LBL' => 'Kérdés felvetése a termékről',
	'VM_RECOMMEND_FORM_LBL' => 'Termék ajánlása ismerősnek',
	'PHPSHOP_EMPTY_YOUR_CART' => 'Kosár ürítése',
	'VM_RETURN_TO_PRODUCT' => 'Vissza a termékhez',
	'EMPTY_CATEGORY' => 'A kategória jelenleg üres.',
	'ENQUIRY' => 'Érdeklődés',
	'NAME_PROMPT' => 'Adja meg nevét',
	'EMAIL_PROMPT' => 'E-mail cím',
	'MESSAGE_PROMPT' => 'Az üzenet szövege',
	'SEND_BUTTON' => 'Küldés',
	'THANK_MESSAGE' => 'Köszönjük az észrevételt. Hamarosan felvesszük Önnel a kapcsolatot.',
	'PROMPT_CLOSE' => 'Bezárás',
	'VM_RECOVER_CART_REPLACE' => 'Elmentett Kosár használata',
	'VM_RECOVER_CART_MERGE' => 'Elmentett Kosár hozzáadása',
	'VM_RECOVER_CART_DELETE' => 'Mentett Kosár törlése',
	'VM_EMPTY_YOUR_CART_TIP' => 'Kosár teljes ürítése',
	'VM_SAVED_CART_TITLE' => 'Saved Cart',
	'VM_SAVED_CART_RETURN' => 'Return'
); $VM_LANG->initModule( 'shop', $langvars );
?>
