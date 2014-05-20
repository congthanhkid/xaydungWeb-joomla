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
	'CHARSET' => 'BIG5',
	'PHPSHOP_BROWSE_LBL' => '瀏覽',
	'PHPSHOP_FLYPAGE_LBL' => '商品細節',
	'PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT' => '編輯此項商品',
	'PHPSHOP_DOWNLOADS_START' => '開始下載',
	'PHPSHOP_DOWNLOADS_INFO' => '請輸入您在EMAIL中收到的下載ID並按下‘開始下載’.',
	'PHPSHOP_WAITING_LIST_MESSAGE' => '請在下面留下您的email以便本項商品重新上市通知您. 
                                        我們保證不會分享, 出租, 販售或是利用這個 e-mail 做任何事除了
                                        通知您本項商品何時重新上市.<br /><br />謝謝您!',
	'PHPSHOP_WAITING_LIST_THANKS' => '感謝您的等待！ <br />如有存貨，我們將儘快通知您。',
	'PHPSHOP_WAITING_LIST_NOTIFY_ME' => '提醒我',
	'PHPSHOP_SEARCH_ALL_CATEGORIES' => '搜尋所有類別',
	'PHPSHOP_SEARCH_ALL_PRODINFO' => '搜尋所有商品資訊',
	'PHPSHOP_SEARCH_PRODNAME' => '只限商品名稱',
	'PHPSHOP_SEARCH_MANU_VENDOR' => '只限製造商/零售商',
	'PHPSHOP_SEARCH_DESCRIPTION' => '只限商品描述',
	'PHPSHOP_SEARCH_AND' => 'and',
	'PHPSHOP_SEARCH_NOT' => 'not',
	'PHPSHOP_SEARCH_TEXT1' => '第一個下拉清單框可以讓您選擇商品目錄以限制搜索範圍， 
        第二個下拉清單框可以將您的搜索範圍限制到商品資訊特定位置。 (比如說商品名稱)。 
        無論您選擇與否，請先輸入搜索關鍵字，以便我們為您查找相應的資訊。 ',
	'PHPSHOP_SEARCH_TEXT2' => ' 您可以添加額外的搜索關鍵字並加入 AND 或 NOT 以提高搜尋結果命中率。
        選擇 AND 意味著同時包含兩個關鍵字商品都將出現在搜索結果之中。
        而選擇 NOT 則意味著搜索結果將會是所有包含第一個關鍵字而不包括
        第二個關鍵字的商品。',
	'PHPSHOP_CONTINUE_SHOPPING' => '繼續購物',
	'PHPSHOP_AVAILABLE_IMAGES' => '可用的圖片給',
	'PHPSHOP_BACK_TO_DETAILS' => '回到商品詳細資料',
	'PHPSHOP_IMAGE_NOT_FOUND' => '圖片未找到!',
	'PHPSHOP_PARAMETER_SEARCH_TEXT1' => '您要利用技術性參數來搜尋商品嗎?<BR>可以使用任一表格:',
	'PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE' => 'I am sorry. There is no category for search.',
	'PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE' => 'I am sorry. There is no published Product Type with this name.',
	'PHPSHOP_PARAMETER_SEARCH_IS_LIKE' => '就像',
	'PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE' => '不像',
	'PHPSHOP_PARAMETER_SEARCH_FULLTEXT' => '全文搜尋',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL' => 'All Selected',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY' => 'Any Selected',
	'PHPSHOP_PARAMETER_SEARCH_RESET_FORM' => '重新設定',
	'PHPSHOP_PRODUCT_NOT_FOUND' => '抱歉, 不過您要求的商品未找到!',
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