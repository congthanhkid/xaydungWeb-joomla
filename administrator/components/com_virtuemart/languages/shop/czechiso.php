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
	'PHPSHOP_BROWSE_LBL' => 'Prohlí¾et',
	'PHPSHOP_FLYPAGE_LBL' => 'Detaily o zbo¾í',
	'PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT' => 'Editovat toto zbo¾í',
	'PHPSHOP_DOWNLOADS_START' => 'Stáhnout',
	'PHPSHOP_DOWNLOADS_INFO' => 'Prosíme vlo¾te kód souboru pro sta¾ení, který jste obdr¾eli e-mailem a kliknìte na \'Stáhnout\'.',
	'PHPSHOP_WAITING_LIST_MESSAGE' => 'Prosíme zadejte Va¹i e-mailovou adresu - za¹leme Vám upozornìní, a¾ bude zbo¾í opìt k dispozici. 
                                        Ochrana Va¹ich osobních údajù vèetnì e-mailové adresy podléhá platným zákonným ustanovením - Va¹e 
                                        e-mailová adresa bude pou¾ita pouze pro vý¹e uvedený úèel. <br /><br />Dìkujeme!',
	'PHPSHOP_WAITING_LIST_THANKS' => 'Dìkujeme za èekání! <br />Dáme Vám vìdìt, jakmile pøijde zbo¾í.',
	'PHPSHOP_WAITING_LIST_NOTIFY_ME' => 'Upozornìte mì!',
	'PHPSHOP_SEARCH_ALL_CATEGORIES' => 'Prohledávat v¹echny kategorie',
	'PHPSHOP_SEARCH_ALL_PRODINFO' => 'Prohledávat ve¹keré informace o zbo¾í',
	'PHPSHOP_SEARCH_PRODNAME' => 'Jen názvy zbo¾í',
	'PHPSHOP_SEARCH_MANU_VENDOR' => 'Jen výrobce èi prodejce',
	'PHPSHOP_SEARCH_DESCRIPTION' => 'Jen popis zbo¾í',
	'PHPSHOP_SEARCH_AND' => 'and',
	'PHPSHOP_SEARCH_NOT' => 'not',
	'PHPSHOP_SEARCH_TEXT1' => 'Nejdøíve vyberte z rozbalovacího seznamu kategorii pro omezení vyhledávání. 
        Druhý rozbalovací seznam umo¾òuje omezit vyhledávání na urèitou èást informace o zbo¾í (napø. Název).
        Po vybrání tìchto doplòujících údajù (mù¾ete je ov¹em ponechat na standardním nastavení pro hledání ve v¹ech údajích) vlo¾te slovo, které chcete vyhledat.',
	'PHPSHOP_SEARCH_TEXT2' => ' Mù¾ete dále zpøesòit vá¹ výbìr pøidáním druhého klíèového slova a výbìru logického operátoru AND, NOT. 
        A znamená ¾e musí být obì slova v údajích vyhledaného zbo¾í pøítomna. 
        Ne znamená ¾e zbo¾í bude vyhledáno, pokud v údajích bude pøítomno první slovo a druhé ne.',
	'PHPSHOP_CONTINUE_SHOPPING' => 'Pokraèovat v nakupování',
	'PHPSHOP_AVAILABLE_IMAGES' => 'Dostupné obrázky pro',
	'PHPSHOP_BACK_TO_DETAILS' => 'Zpìt k detailùm o zbo¾í',
	'PHPSHOP_IMAGE_NOT_FOUND' => 'Obrázek nebyl nalezen!',
	'PHPSHOP_PARAMETER_SEARCH_TEXT1' => 'Chcete vyhledávat zbo¾í podle technických parametrù?<BR>Vyberte typ parametru ze seznamu:',
	'PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE' => 'Lituji. Nebyla zadána kategorie pro vyhledávání.',
	'PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE' => 'Lituji. Nebyl publikován typ zbo¾í s tímto názvem.',
	'PHPSHOP_PARAMETER_SEARCH_IS_LIKE' => 'Is Like',
	'PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE' => 'Is NOT Like',
	'PHPSHOP_PARAMETER_SEARCH_FULLTEXT' => 'Fulltextové vyhledávání',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL' => 'V¹echny vybrané',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY' => 'Jakékoliv z vybraných',
	'PHPSHOP_PARAMETER_SEARCH_RESET_FORM' => 'Vymazat formuláø',
	'PHPSHOP_PRODUCT_NOT_FOUND' => 'Litujeme, ale po¾adované zbo¾í nebylo nalezeno!',
	'PHPSHOP_PRODUCT_PACKAGING1' => 'Poèet {unit}ù v balení: ',
	'PHPSHOP_PRODUCT_PACKAGING2' => 'Poèet {unit}ù v krabici: ',
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