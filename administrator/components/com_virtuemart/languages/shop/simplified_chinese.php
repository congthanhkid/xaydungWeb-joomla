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
	'CHARSET' => 'GB2312',
	'PHPSHOP_BROWSE_LBL' => '浏览',
	'PHPSHOP_FLYPAGE_LBL' => '商品详情',
	'PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT' => '编辑商品',
	'PHPSHOP_DOWNLOADS_START' => '开始下载',
	'PHPSHOP_DOWNLOADS_INFO' => '请输入您在EMAIL中收到的下载ID并点击‘开始下载’.',
	'PHPSHOP_WAITING_LIST_MESSAGE' => 'Please enter your e-mail address below to be notified when this product comes back in stock. 
                                        We will not share, rent, sell or use this e-mail address for any other purpose other than to 
                                        tell you when the product is back in stock.<br /><br />Thank you!',
	'PHPSHOP_WAITING_LIST_THANKS' => '感谢您的等待！ <br />如有存货，我们将尽快通知您。',
	'PHPSHOP_WAITING_LIST_NOTIFY_ME' => '提醒我',
	'PHPSHOP_SEARCH_ALL_CATEGORIES' => '选择所有目录',
	'PHPSHOP_SEARCH_ALL_PRODINFO' => '搜索所有商品信息',
	'PHPSHOP_SEARCH_PRODNAME' => '只搜索商品名称',
	'PHPSHOP_SEARCH_MANU_VENDOR' => '只搜索制造者/销售者',
	'PHPSHOP_SEARCH_DESCRIPTION' => '只搜索商品描述',
	'PHPSHOP_SEARCH_AND' => '与',
	'PHPSHOP_SEARCH_NOT' => '非',
	'PHPSHOP_SEARCH_TEXT1' => '第一个下拉列表框可以让您选择商品目录以限制搜索范围， 
        第二个下拉列表框可以将您的搜索范围限制到商品信息特定位置。 (比如说商品名称)。 
        无论您选择与否，请先输入搜索关键字，以便我们为您查找相应的信息。 ',
	'PHPSHOP_SEARCH_TEXT2' => ' 您可以添加额外的搜索关键字并设置“与”，“非”操作符以提高搜索结果命中率。
        选择“与” 意味着同时包含两个关键字商品都将出现在搜索结果之中。
        而选择“非”则意味着搜索结果将会是所有包含第一个关键字而不包括第二个关键字的商品。',
	'PHPSHOP_CONTINUE_SHOPPING' => '继续购物',
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