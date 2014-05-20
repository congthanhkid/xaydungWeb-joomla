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
	'PHPSHOP_BROWSE_LBL' => 'Ürün Listeleme',
	'PHPSHOP_FLYPAGE_LBL' => 'Ürün Detayý',
	'PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT' => 'Bu ürünü günle',
	'PHPSHOP_DOWNLOADS_START' => 'Dosya Ýndir',
	'PHPSHOP_DOWNLOADS_INFO' => 'Lütfen, e-postanýza gönderilen Download-ID nizi girin ve \'Dosya Ýndir\' butonuna týklayýn.',
	'PHPSHOP_WAITING_LIST_MESSAGE' => 'Ürün stoklarda bulunduðund haberdar olmak için lütfen aþaðýya e-mail adresinizi giriniz. 
                                        E-mail adresinizi hiçkimseyle hiçbir þekilde paylaþmayacak,satmayacak,kiralamayacaðýz.
                                        Sadece ürün stoklara geldiðinde sizi haberdar edeceðiz.<br /><br />Teþekkür ederiz!',
	'PHPSHOP_WAITING_LIST_THANKS' => 'Beklediðiniz için teþekkür ederiz! <br />Stoklarla ilgili en ayakýn zamanda sizi haberdar edeceðiz.',
	'PHPSHOP_WAITING_LIST_NOTIFY_ME' => 'Beni haberdar et!',
	'PHPSHOP_SEARCH_ALL_CATEGORIES' => 'Tüm kategorileri ara',
	'PHPSHOP_SEARCH_ALL_PRODINFO' => 'Tüm ürün özelliklerinde ara',
	'PHPSHOP_SEARCH_PRODNAME' => 'Sadece ürün adý',
	'PHPSHOP_SEARCH_MANU_VENDOR' => 'Sadece üretici/Satýcý',
	'PHPSHOP_SEARCH_DESCRIPTION' => 'Sadece ürün tanýmý',
	'PHPSHOP_SEARCH_AND' => 've',
	'PHPSHOP_SEARCH_NOT' => 'yok',
	'PHPSHOP_SEARCH_TEXT1' => 'Birinci açýlýr menü belli bir limitte arama yapmak için kategori seçmenizi saðlar . 
        Ýkinci açýlýr menü ürünle ilgili belli bir arama yapmak için kategori seçmenizi saðlar  (mesela ürün adý) .
        Bunlarý seçip anahtar kelimeyi giriniz. ',
	'PHPSHOP_SEARCH_TEXT2' => ' Aramanýzý ikinci bir anahtar kelime ekleyerek ve operatörleri(ve,veya) kullanarak inceltebilirsiniz . 
        Ve anahtar kelimesini seçmek iki kelimeninde üründe bulunmasý manasýna gelmektedir. 
        YOk anahtar kelimesini seçmek ilk kelimenin üründe bulunmasý manasýna gelmektedir. ',
	'PHPSHOP_CONTINUE_SHOPPING' => 'Alýþveriþe devam et',
	'PHPSHOP_AVAILABLE_IMAGES' => 'Etki resimler',
	'PHPSHOP_BACK_TO_DETAILS' => 'Ürün Detaylarýna Dön',
	'PHPSHOP_IMAGE_NOT_FOUND' => 'Resim bulunamadý!',
	'PHPSHOP_PARAMETER_SEARCH_TEXT1' => 'Ürünleri Teknik Parametrelere Göre mi Aramak Ýstiyorsunuz?<BR>Herhangi bir hazýr formu kullanabilirsiniz:',
	'PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE' => 'Üzgünüm. Arama için kategori bulunamadý.',
	'PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE' => 'Üzgünüm. Bu isimde yayýnlanan bir ürün çeþidi yok.',
	'PHPSHOP_PARAMETER_SEARCH_IS_LIKE' => 'benzer',
	'PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE' => 'benzemez',
	'PHPSHOP_PARAMETER_SEARCH_FULLTEXT' => 'Tam-yazý arama',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL' => 'Tümü seçili',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY' => 'Hiçbiri seçilmemiþ',
	'PHPSHOP_PARAMETER_SEARCH_RESET_FORM' => 'Reset Form',
	'PHPSHOP_PRODUCT_NOT_FOUND' => 'Üzgünüz, istediðiniz ürün bulunamadý!',
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