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
	'PHPSHOP_BROWSE_LBL' => 'Prohlížet',
	'PHPSHOP_FLYPAGE_LBL' => 'Detaily o zboží',
	'PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT' => 'Editovat toto zboží',
	'PHPSHOP_DOWNLOADS_START' => 'Stáhnout',
	'PHPSHOP_DOWNLOADS_INFO' => 'Prosíme vložte kód souboru pro stažení, který jste obdrželi e-mailem a kliknìte na \'Stáhnout\'.',
	'PHPSHOP_WAITING_LIST_MESSAGE' => 'Prosíme zadejte Vaši e-mailovou adresu - zašleme Vám upozornìní, až bude zboží opìt k dispozici. 
                                        Ochrana Vašich osobních údajù vèetnì e-mailové adresy podléhá platným zákonným ustanovením - Vaše 
                                        e-mailová adresa bude použita pouze pro výše uvedený úèel. <br /><br />Dìkujeme!',
	'PHPSHOP_WAITING_LIST_THANKS' => 'Dìkujeme za èekání! <br />Dáme Vám vìdìt, jakmile pøijde zboží.',
	'PHPSHOP_WAITING_LIST_NOTIFY_ME' => 'Upozornìte mì!',
	'PHPSHOP_SEARCH_ALL_CATEGORIES' => 'Prohledávat všechny kategorie',
	'PHPSHOP_SEARCH_ALL_PRODINFO' => 'Prohledávat veškeré informace o zboží',
	'PHPSHOP_SEARCH_PRODNAME' => 'Jen názvy zboží',
	'PHPSHOP_SEARCH_MANU_VENDOR' => 'Jen výrobce èi prodejce',
	'PHPSHOP_SEARCH_DESCRIPTION' => 'Jen popis zboží',
	'PHPSHOP_SEARCH_AND' => 'and',
	'PHPSHOP_SEARCH_NOT' => 'not',
	'PHPSHOP_SEARCH_TEXT1' => 'Nejdøíve vyberte z rozbalovacího seznamu kategorii pro omezení vyhledávání. 
        Druhý rozbalovací seznam umožòuje omezit vyhledávání na urèitou èást informace o zboží (napø. Název).
        Po vybrání tìchto doplòujících údajù (mùžete je ovšem ponechat na standardním nastavení pro hledání ve všech údajích) vložte slovo, které chcete vyhledat.',
	'PHPSHOP_SEARCH_TEXT2' => ' Mùžete dále zpøesòit váš výbìr pøidáním druhého klíèového slova a výbìru logického operátoru AND, NOT. 
        A znamená že musí být obì slova v údajích vyhledaného zboží pøítomna. 
        Ne znamená že zboží bude vyhledáno, pokud v údajích bude pøítomno první slovo a druhé ne.',
	'PHPSHOP_CONTINUE_SHOPPING' => 'Pokraèovat v nakupování',
	'PHPSHOP_AVAILABLE_IMAGES' => 'Dostupné obrázky pro',
	'PHPSHOP_BACK_TO_DETAILS' => 'Zpìt k detailùm o zboží',
	'PHPSHOP_IMAGE_NOT_FOUND' => 'Obrázek nebyl nalezen!',
	'PHPSHOP_PARAMETER_SEARCH_TEXT1' => 'Chcete vyhledávat zboží podle technických parametrù?<BR>Vyberte typ parametru ze seznamu:',
	'PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE' => 'Lituji. Nebyla zadána kategorie pro vyhledávání.',
	'PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE' => 'Lituji. Nebyl publikován typ zboží s tímto názvem.',
	'PHPSHOP_PARAMETER_SEARCH_IS_LIKE' => 'Is Like',
	'PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE' => 'Is NOT Like',
	'PHPSHOP_PARAMETER_SEARCH_FULLTEXT' => 'Fulltextové vyhledávání',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL' => 'Všechny vybrané',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY' => 'Jakékoliv z vybraných',
	'PHPSHOP_PARAMETER_SEARCH_RESET_FORM' => 'Vymazat formuláø',
	'PHPSHOP_PRODUCT_NOT_FOUND' => 'Litujeme, ale požadované zboží nebylo nalezeno!',
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