<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : thai.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'CHARSET' => 'UTF-8',
	'PHPSHOP_RB_INDIVIDUAL' => 'เฉพาะรายการสินค้า',
	'PHPSHOP_RB_SALE_TITLE' => 'รายงานยอดขาย',
	'PHPSHOP_RB_SALES_PAGE_TITLE' => 'รายงานยอดขาย',
	'PHPSHOP_RB_INTERVAL_TITLE' => 'กำหนดระยะเวลา',
	'PHPSHOP_RB_INTERVAL_MONTHLY_TITLE' => 'รายเดือน',
	'PHPSHOP_RB_INTERVAL_WEEKLY_TITLE' => 'รายสัปดาห์',
	'PHPSHOP_RB_INTERVAL_DAILY_TITLE' => 'รายวัน',
	'PHPSHOP_RB_THISMONTH_BUTTON' => 'เดือนนี้',
	'PHPSHOP_RB_LASTMONTH_BUTTON' => 'เดือนที่แล้ว',
	'PHPSHOP_RB_LAST60_BUTTON' => '60 วันสุดท้าย',
	'PHPSHOP_RB_LAST90_BUTTON' => '90 วันสุดท้าย',
	'PHPSHOP_RB_START_DATE_TITLE' => 'เริ่มวันที่',
	'PHPSHOP_RB_END_DATE_TITLE' => 'ถึงวันที่',
	'PHPSHOP_RB_SHOW_SEL_RANGE' => 'แสดงรายการตามที่เลือก',
	'PHPSHOP_RB_REPORT_FOR' => 'รายงานสำหรับ ',
	'PHPSHOP_RB_DATE' => 'วันที่',
	'PHPSHOP_RB_ORDERS' => 'รายการสั่งซื้อ',
	'PHPSHOP_RB_TOTAL_ITEMS' => 'รายการขายรวม',
	'PHPSHOP_RB_REVENUE' => 'รายได้',
	'PHPSHOP_RB_PRODLIST' => 'รายการสินค้า'
); $VM_LANG->initModule( 'reportbasic', $langvars );
?>