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
	'PHPSHOP_BROWSE_LBL' => 'Bläddra',
	'PHPSHOP_FLYPAGE_LBL' => 'Detaljer',
	'PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT' => 'Konfiguera denna produkt',
	'PHPSHOP_DOWNLOADS_START' => 'Start Download',
	'PHPSHOP_DOWNLOADS_INFO' => 'Please enter the Download-ID you\'ve got in the e-mail and click \'Start Download\'.',
	'PHPSHOP_WAITING_LIST_MESSAGE' => 'Vänligen ange din e-postadress nedan för att bli meddelad när produkten åter är i lager.
                                          Vi kommer inte att använda din e-postadress i något annat syfte än att 
                                          tala om för dig när produkten åter är i lager.<br /><br />Tack!',
	'PHPSHOP_WAITING_LIST_THANKS' => 'Tack för att du väntade! <br />Vi hör av oss så fort varan kommer in.',
	'PHPSHOP_WAITING_LIST_NOTIFY_ME' => 'Meddela mig!',
	'PHPSHOP_SEARCH_ALL_CATEGORIES' => 'Sök alla kategorier',
	'PHPSHOP_SEARCH_ALL_PRODINFO' => 'Sök all produktinformation',
	'PHPSHOP_SEARCH_PRODNAME' => 'Endast produktnamn',
	'PHPSHOP_SEARCH_MANU_VENDOR' => 'Endast tillverkare',
	'PHPSHOP_SEARCH_DESCRIPTION' => 'Endast produktdetaljer',
	'PHPSHOP_SEARCH_AND' => 'OCH',
	'PHPSHOP_SEARCH_NOT' => 'INTE',
	'PHPSHOP_SEARCH_TEXT1' => ' i det första rullfönstet kan du välja en kategori för att begränsa din sökning. 
        i det andra rullförnstret kan du välja att endast söka på en del av produktinformationen (tex namn). 
        När du har gjort dessa val (eller använt dig av standardinställningen ALLA), kan du skriva in ditt sökord. ',
	'PHPSHOP_SEARCH_TEXT2' => ' Du kan förfina din sökning genom att söka efter fler ord och använda dig av funktionerna 
            OCH samt INTE. Vid användning av OCH betyder det att båda orden måste finnas med för att produkten ska finnas med i 
                träfflistan. Vid användning av INTE betyder det att produkten syns i träfflistan endast om första ordet finns med, men inte det andra ordet.',
	'PHPSHOP_CONTINUE_SHOPPING' => 'Fortsätt handla',
	'PHPSHOP_AVAILABLE_IMAGES' => 'Tillgängliga bilder för',
	'PHPSHOP_BACK_TO_DETAILS' => 'Åter till produktdetaljer',
	'PHPSHOP_IMAGE_NOT_FOUND' => 'Bild saknas!',
	'PHPSHOP_PARAMETER_SEARCH_TEXT1' => 'Vill du söka produkter enligt tekniska specifikationer?<BR>Du kan använda valfri form:',
	'PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE' => 'Tyvärr, det finns inga sökbara kategorier.',
	'PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE' => 'Tyvärr, det finns ingen tillgänglig produkt med detta namn.',
	'PHPSHOP_PARAMETER_SEARCH_IS_LIKE' => 'Liknar',
	'PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE' => 'Liknar INTE',
	'PHPSHOP_PARAMETER_SEARCH_FULLTEXT' => 'Fulltext sökning',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL' => 'Alla vald',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY' => 'Någon vald',
	'PHPSHOP_PARAMETER_SEARCH_RESET_FORM' => 'Rensa formulär',
	'PHPSHOP_PRODUCT_NOT_FOUND' => 'Tyvärr hittades inte den produkt du sökte!',
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