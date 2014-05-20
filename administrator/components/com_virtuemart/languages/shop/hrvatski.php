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
	'PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT' => 'Ure�ivanje ovog Proizvoda',
	'PHPSHOP_DOWNLOADS_START' => 'Zapo�ni download',
	'PHPSHOP_DOWNLOADS_INFO' => 'Molimo vas unesite Download-ID koji ste dobili u e-mailu i kliknite \'Zapo�ni download\'.',
	'PHPSHOP_WAITING_LIST_MESSAGE' => 'Molimo, unesite svoju Email adresu da bi smo vas mogli obavijestiti kada ovaj proizvod opet postane dostupan.
                                        Va�a Email adresa ne�e biti upotrebljavana za ni�ta drugo osim da vas obavijestimo
						    da je proizvod ponovo dostupan.<br /><br />Hvala!',
	'PHPSHOP_WAITING_LIST_THANKS' => 'Hvala �to ste pri�ekali! <br />Obavijestit �emo vas �im dobijemo proizvode.',
	'PHPSHOP_WAITING_LIST_NOTIFY_ME' => 'Obavijesti me!',
	'PHPSHOP_SEARCH_ALL_CATEGORIES' => 'Sve Kategorije',
	'PHPSHOP_SEARCH_ALL_PRODINFO' => 'Sve informacije o proizvodu',
	'PHPSHOP_SEARCH_PRODNAME' => 'Samo Imena Proizvoda',
	'PHPSHOP_SEARCH_MANU_VENDOR' => 'Samo Proizvo�a�e/Prodava�e',
	'PHPSHOP_SEARCH_DESCRIPTION' => 'Samo Opise Proizvoda',
	'PHPSHOP_SEARCH_AND' => 'I',
	'PHPSHOP_SEARCH_NOT' => 'NE',
	'PHPSHOP_SEARCH_TEXT1' => 'Prvi padaju�i izbornik omogu�uje odabir kategorije na koju �elite ograni�iti pretra�ivanje.
        Drugi padaju�i izbornik omogu�uje ograni�avanje pretra�ivanja na odre�eni dio informacija o proizvodu (npr. Opis).
        Ne zaboravite unijeti klju�nu rije� za pretra�ivanje. ',
	'PHPSHOP_SEARCH_TEXT2' => 'Pretra�ivanje mo�ete dodatno rafinirati dodavanjem druge klju�ne rije�i i odabirom I ili NE operatora.
        I zna�i da obje rije�i moraju biti sadr�ane da bi se proizvod prikazao.
        Ne zna�i da �e se proizvod prikazati samo ako je prva klju�na rije� prisutna a druga nije.',
	'PHPSHOP_CONTINUE_SHOPPING' => 'Nastavi Kupnju',
	'PHPSHOP_AVAILABLE_IMAGES' => 'Dostupne slike za',
	'PHPSHOP_BACK_TO_DETAILS' => 'Nazad na detalje o proizvodima',
	'PHPSHOP_IMAGE_NOT_FOUND' => 'Slika nije prona�ena!',
	'PHPSHOP_PARAMETER_SEARCH_TEXT1' => '�elite li pretra�ivati proizvode prema tehni�kim parametrima?<BR>Mo�ete koristiti bilo koji pripremljeni obrazac:',
	'PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE' => 'Na�alost, nema kategorije za pretra�ivanje.',
	'PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE' => 'Na�alost, nije objavljen nijedan proizvod ovoga imena.',
	'PHPSHOP_PARAMETER_SEARCH_IS_LIKE' => 'Je kao',
	'PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE' => 'Nije kao',
	'PHPSHOP_PARAMETER_SEARCH_FULLTEXT' => 'Pretra�ivanje cijelog teksta',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL' => 'Sve ozna�eno',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY' => 'Bilo �to ozna�eno',
	'PHPSHOP_PARAMETER_SEARCH_RESET_FORM' => 'Poni�ti',
	'PHPSHOP_PRODUCT_NOT_FOUND' => 'Tra�eni proizvod nije prona�en!',
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