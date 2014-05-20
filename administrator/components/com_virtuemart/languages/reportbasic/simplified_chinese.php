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
	'PHPSHOP_RB_INDIVIDUAL' => '单独产品列表',
	'PHPSHOP_RB_SALE_TITLE' => '销售报告',
	'PHPSHOP_RB_SALES_PAGE_TITLE' => '销售活动总览',
	'PHPSHOP_RB_INTERVAL_TITLE' => '设置时间间隔',
	'PHPSHOP_RB_INTERVAL_MONTHLY_TITLE' => '每月',
	'PHPSHOP_RB_INTERVAL_WEEKLY_TITLE' => '每周',
	'PHPSHOP_RB_INTERVAL_DAILY_TITLE' => '每天',
	'PHPSHOP_RB_THISMONTH_BUTTON' => '本月',
	'PHPSHOP_RB_LASTMONTH_BUTTON' => '上月',
	'PHPSHOP_RB_LAST60_BUTTON' => '最近60天',
	'PHPSHOP_RB_LAST90_BUTTON' => '最近90天',
	'PHPSHOP_RB_START_DATE_TITLE' => '开始于',
	'PHPSHOP_RB_END_DATE_TITLE' => '结束于',
	'PHPSHOP_RB_SHOW_SEL_RANGE' => '显示选择范围内的商品',
	'PHPSHOP_RB_REPORT_FOR' => '报告关于 ',
	'PHPSHOP_RB_DATE' => '日期',
	'PHPSHOP_RB_ORDERS' => '订单',
	'PHPSHOP_RB_TOTAL_ITEMS' => '卖出商品总数',
	'PHPSHOP_RB_REVENUE' => '收入',
	'PHPSHOP_RB_PRODLIST' => '商品列表'
); $VM_LANG->initModule( 'reportbasic', $langvars );
?>