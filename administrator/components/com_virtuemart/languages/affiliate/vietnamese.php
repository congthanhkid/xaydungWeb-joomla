<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : vietnamese.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'CHARSET' => 'UTF-8',
	'PHPSHOP_USER_FORM_EMAIL' => 'Email',
	'PHPSHOP_SHOPPER_LIST_LBL' => 'Danh sách Shopper',
	'PHPSHOP_SHOPPER_FORM_BILLTO_LBL' => 'Bill To Thông tin',
	'PHPSHOP_SHOPPER_FORM_USERNAME' => 'Tên Thành viên',
	'PHPSHOP_AFFILIATE_MOD' => 'Quản lý Chi nhánh',
	'PHPSHOP_AFFILIATE_LIST_LBL' => 'Liệt kê Chi nhánh',
	'PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME' => 'Tên chi nhánh',
	'PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE' => 'Kích hoạt',
	'PHPSHOP_AFFILIATE_LIST_RATE' => 'Tỷ lệ',
	'PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL' => 'Tổng cộng tháng',
	'PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION' => 'Chỉ tiêu tháng',
	'PHPSHOP_AFFILIATE_LIST_ORDERS' => 'Liệt kê Đơn hàng',
	'PHPSHOP_AFFILIATE_EMAIL_WHO' => 'Who to Email(* = ALL)',
	'PHPSHOP_AFFILIATE_EMAIL_CONTENT' => 'Email của bạn',
	'PHPSHOP_AFFILIATE_EMAIL_SUBJECT' => 'Tiêu đề',
	'PHPSHOP_AFFILIATE_EMAIL_STATS' => 'Hiện tại bao gồm các số liệu thống kê',
	'PHPSHOP_AFFILIATE_FORM_RATE' => 'Tiêu chí Đánh giá (phần trăm)',
	'PHPSHOP_AFFILIATE_FORM_ACTIVE' => 'Kích hoạt?',
	'VM_AFFILIATE_SHOWINGDETAILS_FOR' => 'Hiển thị chi tiết cho',
	'VM_AFFILIATE_LISTORDERS' => 'Danh sách đơn hàng',
	'VM_AFFILIATE_MONTH' => 'Tháng',
	'VM_AFFILIATE_CHANGEVIEW' => 'Xem thay đổi',
	'VM_AFFILIATE_ORDERSUMMARY_LBL' => 'Sơ lược đơn hàng',
	'VM_AFFILIATE_ORDERLIST_ORDERREF' => 'Đơn hàng Ref',
	'VM_AFFILIATE_ORDERLIST_DATEORDERED' => 'Ngày đặt hàng',
	'VM_AFFILIATE_ORDERLIST_ORDERTOTAL' => 'Tổng cộng đơn hàng',
	'VM_AFFILIATE_ORDERLIST_COMMISSION' => 'Chỉ tiêu (tỉ lệ)',
	'VM_AFFILIATE_ORDERLIST_ORDERSTATUS' => 'Tình trạng đơn hàng'
); $VM_LANG->initModule( 'affiliate', $langvars );
?>