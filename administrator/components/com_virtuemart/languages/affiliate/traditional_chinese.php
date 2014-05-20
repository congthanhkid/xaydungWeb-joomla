<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : traditional_chinese.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'CHARSET' => 'BIG5',
	'PHPSHOP_USER_FORM_EMAIL' => 'Email',
	'PHPSHOP_SHOPPER_LIST_LBL' => '顧客列表',
	'PHPSHOP_SHOPPER_FORM_BILLTO_LBL' => '付款資訊',
	'PHPSHOP_SHOPPER_FORM_USERNAME' => '用戶名',
	'PHPSHOP_AFFILIATE_MOD' => '加盟商管理',
	'PHPSHOP_AFFILIATE_LIST_LBL' => '加盟商列表',
	'PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME' => '加盟商名稱',
	'PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE' => '啟用',
	'PHPSHOP_AFFILIATE_LIST_RATE' => '比例',
	'PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL' => '月總計',
	'PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION' => '月傭金',
	'PHPSHOP_AFFILIATE_LIST_ORDERS' => '列出訂單',
	'PHPSHOP_AFFILIATE_EMAIL_WHO' => '寄給誰(* = 全部)',
	'PHPSHOP_AFFILIATE_EMAIL_CONTENT' => '您的 Email',
	'PHPSHOP_AFFILIATE_EMAIL_SUBJECT' => '主題',
	'PHPSHOP_AFFILIATE_EMAIL_STATS' => '包括目前的統計',
	'PHPSHOP_AFFILIATE_FORM_RATE' => '傭金比例(百分比)',
	'PHPSHOP_AFFILIATE_FORM_ACTIVE' => '啟動?',
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