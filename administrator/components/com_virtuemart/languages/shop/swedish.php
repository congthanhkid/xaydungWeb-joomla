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
	'PHPSHOP_BROWSE_LBL' => 'Bl�ddra',
	'PHPSHOP_FLYPAGE_LBL' => 'Detaljer',
	'PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT' => 'Konfiguera denna produkt',
	'PHPSHOP_DOWNLOADS_START' => 'Start Download',
	'PHPSHOP_DOWNLOADS_INFO' => 'Please enter the Download-ID you\'ve got in the e-mail and click \'Start Download\'.',
	'PHPSHOP_WAITING_LIST_MESSAGE' => 'V�nligen ange din e-postadress nedan f�r att bli meddelad n�r produkten �ter �r i lager.
                                          Vi kommer inte att anv�nda din e-postadress i n�got annat syfte �n att 
                                          tala om f�r dig n�r produkten �ter �r i lager.<br /><br />Tack!',
	'PHPSHOP_WAITING_LIST_THANKS' => 'Tack f�r att du v�ntade! <br />Vi h�r av oss s� fort varan kommer in.',
	'PHPSHOP_WAITING_LIST_NOTIFY_ME' => 'Meddela mig!',
	'PHPSHOP_SEARCH_ALL_CATEGORIES' => 'S�k alla kategorier',
	'PHPSHOP_SEARCH_ALL_PRODINFO' => 'S�k all produktinformation',
	'PHPSHOP_SEARCH_PRODNAME' => 'Endast produktnamn',
	'PHPSHOP_SEARCH_MANU_VENDOR' => 'Endast tillverkare',
	'PHPSHOP_SEARCH_DESCRIPTION' => 'Endast produktdetaljer',
	'PHPSHOP_SEARCH_AND' => 'OCH',
	'PHPSHOP_SEARCH_NOT' => 'INTE',
	'PHPSHOP_SEARCH_TEXT1' => ' i det f�rsta rullf�nstet kan du v�lja en kategori f�r att begr�nsa din s�kning. 
        i det andra rullf�rnstret kan du v�lja att endast s�ka p� en del av produktinformationen (tex namn). 
        N�r du har gjort dessa val (eller anv�nt dig av standardinst�llningen ALLA), kan du skriva in ditt s�kord. ',
	'PHPSHOP_SEARCH_TEXT2' => ' Du kan f�rfina din s�kning genom att s�ka efter fler ord och anv�nda dig av funktionerna 
            OCH samt INTE. Vid anv�ndning av OCH betyder det att b�da orden m�ste finnas med f�r att produkten ska finnas med i 
                tr�fflistan. Vid anv�ndning av INTE betyder det att produkten syns i tr�fflistan endast om f�rsta ordet finns med, men inte det andra ordet.',
	'PHPSHOP_CONTINUE_SHOPPING' => 'Forts�tt handla',
	'PHPSHOP_AVAILABLE_IMAGES' => 'Tillg�ngliga bilder f�r',
	'PHPSHOP_BACK_TO_DETAILS' => '�ter till produktdetaljer',
	'PHPSHOP_IMAGE_NOT_FOUND' => 'Bild saknas!',
	'PHPSHOP_PARAMETER_SEARCH_TEXT1' => 'Vill du s�ka produkter enligt tekniska specifikationer?<BR>Du kan anv�nda valfri form:',
	'PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE' => 'Tyv�rr, det finns inga s�kbara kategorier.',
	'PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE' => 'Tyv�rr, det finns ingen tillg�nglig produkt med detta namn.',
	'PHPSHOP_PARAMETER_SEARCH_IS_LIKE' => 'Liknar',
	'PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE' => 'Liknar INTE',
	'PHPSHOP_PARAMETER_SEARCH_FULLTEXT' => 'Fulltext s�kning',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL' => 'Alla vald',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY' => 'N�gon vald',
	'PHPSHOP_PARAMETER_SEARCH_RESET_FORM' => 'Rensa formul�r',
	'PHPSHOP_PRODUCT_NOT_FOUND' => 'Tyv�rr hittades inte den produkt du s�kte!',
	'PHPSHOP_PRODUCT_PACKAGING1' => 'Number {unit}s in packaging:',
	'PHPSHOP_PRODUCT_PACKAGING2' => 'Number {unit}s in box:',
	'PHPSHOP_CART_PRICE_PER_UNIT' => 'Price per Unit',
	'VM_PRODUCT_ENQUIRY_LBL' => 'Ask a question about this product',
	'VM_RECOMMEND_FORM_LBL' => 'Recommend this product to a friend',
	'PHPSHOP_EMPTY_YOUR_CART' => 'Empty Cart',
	'VM_RETURN_TO_PRODUCT' => 'Return to product',
	'EMPTY_CATEGORY' => 'This Category is currently empty.',
	'ENQUIRY' => 'Enquiry',
	'NAME_PROMPT' => 'Enter your Name',
	'EMAIL_PROMPT' => 'E-mail Address',
	'MESSAGE_PROMPT' => 'Enter your Message',
	'SEND_BUTTON' => 'Send',
	'THANK_MESSAGE' => 'Thank you for your Enquiry. We will contact you as soon as possible.',
	'PROMPT_CLOSE' => 'Close',
	'VM_RECOVER_CART_REPLACE' => 'Replace Cart with Saved Cart',
	'VM_RECOVER_CART_MERGE' => 'Add Saved Cart to Current Cart',
	'VM_RECOVER_CART_DELETE' => 'Delete Saved Cart',
	'VM_EMPTY_YOUR_CART_TIP' => 'Clear the cart of all contents',
	'VM_SAVED_CART_TITLE' => 'Saved Cart',
	'VM_SAVED_CART_RETURN' => 'Return'
); $VM_LANG->initModule( 'shop', $langvars );
?>