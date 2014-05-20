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
	'PHPSHOP_NO_CUSTOMER' => '����û��ע���Ϊ��Ա�����ṩ����֧����Ϣ��',
	'PHPSHOP_THANKYOU' => '��л���Ķ�����',
	'PHPSHOP_EMAIL_SENDTO' => 'ȷ���ʼ��ѷ���',
	'PHPSHOP_CHECKOUT_NEXT' => '��һ��',
	'PHPSHOP_CHECKOUT_CONF_BILLINFO' => '������Ϣ',
	'PHPSHOP_CHECKOUT_CONF_COMPANY' => '��˾',
	'PHPSHOP_CHECKOUT_CONF_NAME' => '����',
	'PHPSHOP_CHECKOUT_CONF_ADDRESS' => '��ַ',
	'PHPSHOP_CHECKOUT_CONF_EMAIL' => 'Email',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO' => '�ͻ���Ϣ',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY' => '��˾',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME' => '����',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS' => '��ַ',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE' => '�绰',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX' => '����',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD' => '���ʽ',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO' => '��ѡ�����ÿ�����ʱ�ı�����Ϣ',
	'PHPSHOP_PAYPAL_THANKYOU' => 'лл��֧�������׳ɹ����㽫���յ�����PayPal��ȷ���ʼ�������Լ������½ <a href=http://www.paypal.com>www.paypal.com</a> �鿴������Ϣ',
	'PHPSHOP_PAYPAL_ERROR' => '������ʱ����������Ķ���״̬�޷�����.',
	'PHPSHOP_THANKYOU_SUCCESS' => '���Ķ����Ѿ��ɹ��ύ',
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