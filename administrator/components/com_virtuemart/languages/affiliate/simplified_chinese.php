<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : simplified_chinese.php 1071 2007-12-03 08:42:28Z thepisu $
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2007 soeren - All rights reserved.
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
	'PHPSHOP_USER_FORM_EMAIL' => 'Email',
	'PHPSHOP_SHOPPER_LIST_LBL' => '购物会员列表',
	'PHPSHOP_SHOPPER_FORM_BILLTO_LBL' => '付款信息',
	'PHPSHOP_SHOPPER_FORM_USERNAME' => '用户名',
	'PHPSHOP_AFFILIATE_MOD' => '代理商管理',
	'PHPSHOP_AFFILIATE_LIST_LBL' => '会员代理商',
	'PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME' => '代理商姓名',
	'PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE' => '已激活',
	'PHPSHOP_AFFILIATE_LIST_RATE' => '价格',
	'PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL' => '月总计',
	'PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION' => '月佣金',
	'PHPSHOP_AFFILIATE_LIST_ORDERS' => '订单列表',
	'PHPSHOP_AFFILIATE_EMAIL_WHO' => '发送对象(* = 全部代理商)',
	'PHPSHOP_AFFILIATE_EMAIL_CONTENT' => 'Email',
	'PHPSHOP_AFFILIATE_EMAIL_SUBJECT' => '主题',
	'PHPSHOP_AFFILIATE_EMAIL_STATS' => '包括目前的统计',
	'PHPSHOP_AFFILIATE_FORM_RATE' => '佣金比例(百分比)',
	'PHPSHOP_AFFILIATE_FORM_ACTIVE' => '激活?',
	'VM_AFFILIATE_SHOWINGDETAILS_FOR' => 'Showing Details for',
	'VM_AFFILIATE_LISTORDERS' => 'List Orders',
	'VM_AFFILIATE_MONTH' => 'Month',
	'VM_AFFILIATE_CHANGEVIEW' => 'Change View',
	'VM_AFFILIATE_ORDERSUMMARY_LBL' => 'Order Summary',
	'VM_AFFILIATE_ORDERLIST_ORDERREF' => 'Order Ref',
	'VM_AFFILIATE_ORDERLIST_DATEORDERED' => 'Date Ordered',
	'VM_AFFILIATE_ORDERLIST_ORDERTOTAL' => 'Order Total',
	'VM_AFFILIATE_ORDERLIST_COMMISSION' => 'Commission (rate)',
	'VM_AFFILIATE_ORDERLIST_ORDERSTATUS' => 'Order Status'
); $VM_LANG->initModule( 'affiliate', $langvars );
?>