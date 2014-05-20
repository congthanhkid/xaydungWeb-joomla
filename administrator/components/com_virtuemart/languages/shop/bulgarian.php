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
	'CHARSET' => 'cp1251',
	'PHPSHOP_BROWSE_LBL' => 'Преглед',
	'PHPSHOP_FLYPAGE_LBL' => 'Допълнителна информация',
	'PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT' => 'Редакция на продукт',
	'PHPSHOP_DOWNLOADS_START' => 'Изтегляне',
	'PHPSHOP_DOWNLOADS_INFO' => 'Моля, въведете Download-ID, което сте получили на Вашия email адрес и след това кликнете на \'Изтегляне\'.',
	'PHPSHOP_WAITING_LIST_MESSAGE' => 'Моля, въведете валиден e-mail адрес, за да Ви уведомим, когато разполагаме с този продукт на склад. 
                                        Уверяваме Ви, че по никакъв начин няма да споделяме или продаваме Вашия e-mail адрес. 
					Последният ще се пази в нашата база данни и ще се ползва само за посочената по-горе цел.<br /><br />Благодарим Ви!',
	'PHPSHOP_WAITING_LIST_THANKS' => 'Благодарим за търпението! <br />Ще бъдете уведомен/а веднага, когато получим нашата номенклатура.',
	'PHPSHOP_WAITING_LIST_NOTIFY_ME' => 'Уведомете ме!',
	'PHPSHOP_SEARCH_ALL_CATEGORIES' => 'Търсене във всички категории',
	'PHPSHOP_SEARCH_ALL_PRODINFO' => 'Търсене в информацията за всеки продукт',
	'PHPSHOP_SEARCH_PRODNAME' => 'Само в името на продукт',
	'PHPSHOP_SEARCH_MANU_VENDOR' => 'Само в производител/търговец',
	'PHPSHOP_SEARCH_DESCRIPTION' => 'Само в описанието на продукт',
	'PHPSHOP_SEARCH_AND' => 'AND',
	'PHPSHOP_SEARCH_NOT' => 'NOT',
	'PHPSHOP_SEARCH_TEXT1' => 'Първият списък с опции Ви предоставя възможността да лимитирате Вашето търсене до <b>определена категория</b>. Вторият списък с опции Ви предоставя възможността да лимитирате Вашето търсене до <b>определена информация за продукт</b> (напр., само Име). След като изберете начина на тъсене (или оставите стойностите по подразбиране), въведете ключова дума. ',
	'PHPSHOP_SEARCH_TEXT2' => 'Можете да уточните търсенето като добавите втора ключова дума и изберете AND/NOT оператор. 
        Ако изберете <b>AND</b>, продуктите, които ще получите като резултат, ще <b>съдържат и двете ключови думи</b>. 
        Ако изберете <b>NOT</b>, ще получите като резултат продуктите, които <b>съдържат първата ключова дума и не съдържат втората</b>.',
	'PHPSHOP_CONTINUE_SHOPPING' => 'Към магазина',
	'PHPSHOP_AVAILABLE_IMAGES' => 'Изображения за',
	'PHPSHOP_BACK_TO_DETAILS' => 'Назад към детайлната информация за продукт',
	'PHPSHOP_IMAGE_NOT_FOUND' => 'Изображението не може да бъде намерено!',
	'PHPSHOP_PARAMETER_SEARCH_TEXT1' => 'Желаете да намерите продукт според техническите му параметри?<BR>Използвайте формата:',
	'PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE' => 'За съжаление, липсват категории за търсене.',
	'PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE' => 'За съжаление, няма публикуван вид продукти с това име.',
	'PHPSHOP_PARAMETER_SEARCH_IS_LIKE' => 'Прилича (Is Like)',
	'PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE' => 'НЕ прилича (Is NOT Like)',
	'PHPSHOP_PARAMETER_SEARCH_FULLTEXT' => 'Търсене на пълен текст',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL' => 'Всички избрани',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY' => 'Което и да е от избраните',
	'PHPSHOP_PARAMETER_SEARCH_RESET_FORM' => 'Изчистване на формуляра',
	'PHPSHOP_PRODUCT_NOT_FOUND' => 'За съжаление, търсеният от Вас продукт не може да бъде намерен!',
	'PHPSHOP_PRODUCT_PACKAGING1' => 'Брой единици в опаковка:',
	'PHPSHOP_PRODUCT_PACKAGING2' => 'Брой единици в кутия:',
	'PHPSHOP_CART_PRICE_PER_UNIT' => 'Цена за единица',
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