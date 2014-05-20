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
	'PHPSHOP_BROWSE_LBL' => 'Browse',
	'PHPSHOP_FLYPAGE_LBL' => 'Detalii produs',
	'PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT' => 'Editeaza acest produs',
	'PHPSHOP_DOWNLOADS_START' => 'Start descarcare',
	'PHPSHOP_DOWNLOADS_INFO' => 'Va rugam introduceti identitata de descarcare pe care il aveti in e-mail si clic \'Start descarcare\'.',
	'PHPSHOP_WAITING_LIST_MESSAGE' => 'Va rugam introduceti adresa dvs de email mai jos pentru a fi anuntati cand produsul se afla din nou in stoc. 
                                        Nu vom imparti, inchiria, vinde sau folosi aceasta adresa de email pentru alt scop decat pentru acela de a va anunta cand produsul se afla din nou in stoc.<br /><br />Multumim!',
	'PHPSHOP_WAITING_LIST_THANKS' => 'Multumim pentru asteptare! <br />Va vom anunta imediat ce facem inventarul.',
	'PHPSHOP_WAITING_LIST_NOTIFY_ME' => 'Anunta-ma!',
	'PHPSHOP_SEARCH_ALL_CATEGORIES' => 'Cauta in toate categoriile',
	'PHPSHOP_SEARCH_ALL_PRODINFO' => 'Cauta dupa informatii produse',
	'PHPSHOP_SEARCH_PRODNAME' => 'Dupa numele produsului',
	'PHPSHOP_SEARCH_MANU_VENDOR' => 'Dupa producator/distribuitor',
	'PHPSHOP_SEARCH_DESCRIPTION' => 'Dupa descrierea produsului',
	'PHPSHOP_SEARCH_AND' => 'si',
	'PHPSHOP_SEARCH_NOT' => 'nu',
	'PHPSHOP_SEARCH_TEXT1' => 'The first drop-down-list allows you to select a category to limit your search to. 
        The second drop-down-list allows you to limit your search to a particular piece of product information (e.g. Name). 
        Once you have selected these (or left the default ALL), enter the keyword to search for. ',
	'PHPSHOP_SEARCH_TEXT2' => ' You can further refine your search by adding a second keyword and selecting the AND or NOT operator. 
        Selecting AND means both words must be present for the product to be displayed. 
        Selecting NOT means the product will be displayed only if the first keyword is present 
        and the second is not.',
	'PHPSHOP_CONTINUE_SHOPPING' => 'Continua cumparare',
	'PHPSHOP_AVAILABLE_IMAGES' => 'Available Images for',
	'PHPSHOP_BACK_TO_DETAILS' => 'Back to Product Details',
	'PHPSHOP_IMAGE_NOT_FOUND' => 'Image not found!',
	'PHPSHOP_PARAMETER_SEARCH_TEXT1' => 'Do you will find products according to technical parametrs?<BR>You can used any prepared form:',
	'PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE' => 'I am sorry. There is no category for search.',
	'PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE' => 'I am sorry. There is no published Product Type with this name.',
	'PHPSHOP_PARAMETER_SEARCH_IS_LIKE' => 'Is Like',
	'PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE' => 'Is NOT Like',
	'PHPSHOP_PARAMETER_SEARCH_FULLTEXT' => 'Full-Text Search',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL' => 'All Selected',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY' => 'Any Selected',
	'PHPSHOP_PARAMETER_SEARCH_RESET_FORM' => 'Reset Form',
	'PHPSHOP_PRODUCT_NOT_FOUND' => 'Sorry, but the Product you\'ve requested wasn\'t found!',
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