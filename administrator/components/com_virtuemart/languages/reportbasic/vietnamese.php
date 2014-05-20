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
	'PHPSHOP_RB_INDIVIDUAL' => 'Danh sách sản phẩm đặc biệt',
	'PHPSHOP_RB_SALE_TITLE' => 'Báo cáo bán hàng',
	'PHPSHOP_RB_SALES_PAGE_TITLE' => 'Tổng kết sản phẩm bán chạy',
	'PHPSHOP_RB_INTERVAL_TITLE' => 'Chọn khoảng thời gian',
	'PHPSHOP_RB_INTERVAL_MONTHLY_TITLE' => 'Hàng tháng',
	'PHPSHOP_RB_INTERVAL_WEEKLY_TITLE' => 'Hàng tuần',
	'PHPSHOP_RB_INTERVAL_DAILY_TITLE' => 'Hàng ngày',
	'PHPSHOP_RB_THISMONTH_BUTTON' => 'Tháng này',
	'PHPSHOP_RB_LASTMONTH_BUTTON' => 'Tháng trước',
	'PHPSHOP_RB_LAST60_BUTTON' => '60 ngày trước',
	'PHPSHOP_RB_LAST90_BUTTON' => '90 ngày trước',
	'PHPSHOP_RB_START_DATE_TITLE' => 'Bắt đầu vào',
	'PHPSHOP_RB_END_DATE_TITLE' => 'Kết thúc vào',
	'PHPSHOP_RB_SHOW_SEL_RANGE' => 'Hiện trong khoảng đã chọn',
	'PHPSHOP_RB_REPORT_FOR' => 'Báo cáo cho: ',
	'PHPSHOP_RB_DATE' => 'Ngày',
	'PHPSHOP_RB_ORDERS' => 'Số dơn hàng',
	'PHPSHOP_RB_TOTAL_ITEMS' => 'Tổng số hàng đã bán',
	'PHPSHOP_RB_REVENUE' => 'Thu nhập',
	'PHPSHOP_RB_PRODLIST' => 'Liệt kê Sản phẩm'
); $VM_LANG->initModule( 'reportbasic', $langvars );
?>