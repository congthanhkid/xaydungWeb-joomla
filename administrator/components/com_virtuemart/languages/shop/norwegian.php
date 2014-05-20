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
	'PHPSHOP_BROWSE_LBL' => 'Se på',
	'PHPSHOP_FLYPAGE_LBL' => 'Produktdetaljer',
	'PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT' => 'Endre dette produktet',
	'PHPSHOP_DOWNLOADS_START' => 'Start Nedlasting',
	'PHPSHOP_DOWNLOADS_INFO' => 'Venligst skriv inn Nedlastings-IDen du fikk per e-post. Deretter trykker du \'Start Nedlasting\'.',
	'PHPSHOP_WAITING_LIST_MESSAGE' => 'Venligst skriv inn din Epostadresse for å få beskjed når dette produktet er på lager igjen.
',
	'PHPSHOP_WAITING_LIST_THANKS' => 'Takk for at du venter! <br />Vi vil gi deg beskjed så snart vi får ny vare på lager.',
	'PHPSHOP_WAITING_LIST_NOTIFY_ME' => 'Gi meg melding!',
	'PHPSHOP_SEARCH_ALL_CATEGORIES' => 'Velg alle kategorier',
	'PHPSHOP_SEARCH_ALL_PRODINFO' => 'Søk i all produktinfo',
	'PHPSHOP_SEARCH_PRODNAME' => 'Kun Produktnavn',
	'PHPSHOP_SEARCH_MANU_VENDOR' => 'Kun Produsent/Leverandør',
	'PHPSHOP_SEARCH_DESCRIPTION' => 'Kun produktbeskrivelse',
	'PHPSHOP_SEARCH_AND' => 'og',
	'PHPSHOP_SEARCH_NOT' => 'ikke',
	'PHPSHOP_SEARCH_TEXT1' => 'Første drop-down-liste lar deg begrense søket til en kategori.
',
	'PHPSHOP_SEARCH_TEXT2' => 'Du kan videre legge til et nøkkelord  og velg deretter OG eller IKKE.',
	'PHPSHOP_CONTINUE_SHOPPING' => 'Handle mer',
	'PHPSHOP_AVAILABLE_IMAGES' => 'Tilgjengelige bilder for',
	'PHPSHOP_BACK_TO_DETAILS' => 'Tilbake til Produktdetaljer',
	'PHPSHOP_IMAGE_NOT_FOUND' => 'Kan ikke finne bildet!',
	'PHPSHOP_PARAMETER_SEARCH_TEXT1' => 'Vil du finne produkter etter tekniske parameter?<BR>Du kan bruke en forhåndslaget form:',
	'PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE' => 'Beklager, det er ingen kategori for søk.',
	'PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE' => 'Beklager, det er ingen publiserte produkt type med dette navnet.',
	'PHPSHOP_PARAMETER_SEARCH_IS_LIKE' => 'Er lik',
	'PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE' => 'Er ikke lik',
	'PHPSHOP_PARAMETER_SEARCH_FULLTEXT' => 'Full tekst søk',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL' => 'Alle valgte',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY' => 'En av de valgte',
	'PHPSHOP_PARAMETER_SEARCH_RESET_FORM' => 'Nullstill',
	'PHPSHOP_PRODUCT_NOT_FOUND' => 'Beklager, kan ikke finne det produktet du søker!',
	'PHPSHOP_PRODUCT_PACKAGING1' => 'Antall {unit}s i pakken:',
	'PHPSHOP_PRODUCT_PACKAGING2' => 'Antall {unit}s i boks:',
	'PHPSHOP_CART_PRICE_PER_UNIT' => 'Pris',
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