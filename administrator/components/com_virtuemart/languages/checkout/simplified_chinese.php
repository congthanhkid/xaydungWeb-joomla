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
	'PHPSHOP_NO_CUSTOMER' => '您还没有注册成为会员。请提供您的支付信息。',
	'PHPSHOP_THANKYOU' => '感谢您的订购！',
	'PHPSHOP_EMAIL_SENDTO' => '确认邮件已发往',
	'PHPSHOP_CHECKOUT_NEXT' => '下一个',
	'PHPSHOP_CHECKOUT_CONF_BILLINFO' => '付款信息',
	'PHPSHOP_CHECKOUT_CONF_COMPANY' => '公司',
	'PHPSHOP_CHECKOUT_CONF_NAME' => '姓名',
	'PHPSHOP_CHECKOUT_CONF_ADDRESS' => '地址',
	'PHPSHOP_CHECKOUT_CONF_EMAIL' => 'Email',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO' => '送货信息',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY' => '公司',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME' => '姓名',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS' => '地址',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE' => '电话',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX' => '传真',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD' => '付款方式',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO' => '当选用信用卡付款时的必填信息',
	'PHPSHOP_PAYPAL_THANKYOU' => '谢谢你支付，交易成功。你将会收到发自PayPal的确认邮件。你可以继续或登陆 <a href=http://www.paypal.com>www.paypal.com</a> 查看交易信息',
	'PHPSHOP_PAYPAL_ERROR' => '处理交易时发生错误，你的订单状态无法更新.',
	'PHPSHOP_THANKYOU_SUCCESS' => '您的订单已经成功提交',
	'VM_CHECKOUT_TITLE_TAG' => 'Checkout: Step %s of %s',
	'VM_CHECKOUT_ORDERIDNOTSET' => 'Order ID is not set or emtpy!',
	'VM_CHECKOUT_FAILURE' => 'Failure',
	'VM_CHECKOUT_SUCCESS' => 'Success',
	'VM_CHECKOUT_PAGE_GATEWAY_EXPLAIN_1' => 'This page is located on the webshop\'s website.',
	'VM_CHECKOUT_PAGE_GATEWAY_EXPLAIN_2' => 'The gateway execute the page on the website, and the shows the result SSL Encrypted.',
	'VM_CHECKOUT_CCV_CODE' => 'Credit Card Validation Code',
	'VM_CHECKOUT_CCV_CODE_TIPTITLE' => 'What\'s the Credit Card Validation Code?',
	'VM_CHECKOUT_MD5_FAILED' => 'MD5 Check failed',
	'VM_CHECKOUT_ORDERNOTFOUND' => 'Order not found',
	'PHPSHOP_EPAY_PAYMENT_CARDTYPE' => 'The payment is
created by %s <img
src="/components/com_virtuemart/shop_image/ps_image/epay_images/%s"
border="0">'
); $VM_LANG->initModule( 'checkout', $langvars );
?>