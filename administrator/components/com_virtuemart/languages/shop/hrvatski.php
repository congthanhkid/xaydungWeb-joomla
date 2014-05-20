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
	'PHPSHOP_BROWSE_LBL' => 'Katalog',
	'PHPSHOP_FLYPAGE_LBL' => 'Detaljne Informacije',
	'PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT' => 'Ureðivanje ovog Proizvoda',
	'PHPSHOP_DOWNLOADS_START' => 'Zapoèni download',
	'PHPSHOP_DOWNLOADS_INFO' => 'Molimo vas unesite Download-ID koji ste dobili u e-mailu i kliknite \'Zapoèni download\'.',
	'PHPSHOP_WAITING_LIST_MESSAGE' => 'Molimo, unesite svoju Email adresu da bi smo vas mogli obavijestiti kada ovaj proizvod opet postane dostupan.
                                        Vaša Email adresa neæe biti upotrebljavana za ništa drugo osim da vas obavijestimo
						    da je proizvod ponovo dostupan.<br /><br />Hvala!',
	'PHPSHOP_WAITING_LIST_THANKS' => 'Hvala što ste prièekali! <br />Obavijestit æemo vas èim dobijemo proizvode.',
	'PHPSHOP_WAITING_LIST_NOTIFY_ME' => 'Obavijesti me!',
	'PHPSHOP_SEARCH_ALL_CATEGORIES' => 'Sve Kategorije',
	'PHPSHOP_SEARCH_ALL_PRODINFO' => 'Sve informacije o proizvodu',
	'PHPSHOP_SEARCH_PRODNAME' => 'Samo Imena Proizvoda',
	'PHPSHOP_SEARCH_MANU_VENDOR' => 'Samo Proizvoðaèe/Prodavaèe',
	'PHPSHOP_SEARCH_DESCRIPTION' => 'Samo Opise Proizvoda',
	'PHPSHOP_SEARCH_AND' => 'I',
	'PHPSHOP_SEARCH_NOT' => 'NE',
	'PHPSHOP_SEARCH_TEXT1' => 'Prvi padajuæi izbornik omoguæuje odabir kategorije na koju želite ogranièiti pretraživanje.
        Drugi padajuæi izbornik omoguæuje ogranièavanje pretraživanja na odreðeni dio informacija o proizvodu (npr. Opis).
        Ne zaboravite unijeti kljuènu rijeè za pretraživanje. ',
	'PHPSHOP_SEARCH_TEXT2' => 'Pretraživanje možete dodatno rafinirati dodavanjem druge kljuène rijeèi i odabirom I ili NE operatora.
        I znaèi da obje rijeèi moraju biti sadržane da bi se proizvod prikazao.
        Ne znaèi da æe se proizvod prikazati samo ako je prva kljuèna rijeè prisutna a druga nije.',
	'PHPSHOP_CONTINUE_SHOPPING' => 'Nastavi Kupnju',
	'PHPSHOP_AVAILABLE_IMAGES' => 'Dostupne slike za',
	'PHPSHOP_BACK_TO_DETAILS' => 'Nazad na detalje o proizvodima',
	'PHPSHOP_IMAGE_NOT_FOUND' => 'Slika nije pronaðena!',
	'PHPSHOP_PARAMETER_SEARCH_TEXT1' => 'Želite li pretraživati proizvode prema tehnièkim parametrima?<BR>Možete koristiti bilo koji pripremljeni obrazac:',
	'PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE' => 'Nažalost, nema kategorije za pretraživanje.',
	'PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE' => 'Nažalost, nije objavljen nijedan proizvod ovoga imena.',
	'PHPSHOP_PARAMETER_SEARCH_IS_LIKE' => 'Je kao',
	'PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE' => 'Nije kao',
	'PHPSHOP_PARAMETER_SEARCH_FULLTEXT' => 'Pretraživanje cijelog teksta',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL' => 'Sve oznaèeno',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY' => 'Bilo što oznaèeno',
	'PHPSHOP_PARAMETER_SEARCH_RESET_FORM' => 'Poništi',
	'PHPSHOP_PRODUCT_NOT_FOUND' => 'Traženi proizvod nije pronaðen!',
	'PHPSHOP_PRODUCT_PACKAGING1' => 'Broj jedinica u Pakovanju',
	'PHPSHOP_PRODUCT_PACKAGING2' => 'Broj jedinica u Kutiji:',
	'PHPSHOP_CART_PRICE_PER_UNIT' => 'Cijena po Jedinici',
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