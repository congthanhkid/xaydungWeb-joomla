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
	'PHPSHOP_CARRIER_LIST_LBL' => '運送者列表',
	'PHPSHOP_RATE_LIST_LBL' => '運送費率列表',
	'PHPSHOP_CARRIER_LIST_NAME_LBL' => '名稱',
	'PHPSHOP_CARRIER_LIST_ORDER_LBL' => '列表順序',
	'PHPSHOP_CARRIER_FORM_LBL' => '增加/編輯 運送者',
	'PHPSHOP_RATE_FORM_LBL' => '增加/編輯 運送費率',
	'PHPSHOP_RATE_FORM_NAME' => '運送費率說明',
	'PHPSHOP_RATE_FORM_CARRIER' => '運送者',
	'PHPSHOP_RATE_FORM_COUNTRY' => '國家',
	'PHPSHOP_RATE_FORM_ZIP_START' => '郵遞區號起始範圍',
	'PHPSHOP_RATE_FORM_ZIP_END' => '郵遞區號結束範圍',
	'PHPSHOP_RATE_FORM_WEIGHT_START' => '最低重量',
	'PHPSHOP_RATE_FORM_WEIGHT_END' => '最高重量',
	'PHPSHOP_RATE_FORM_PACKAGE_FEE' => '您的包裹費用',
	'PHPSHOP_RATE_FORM_CURRENCY' => '貨幣',
	'PHPSHOP_RATE_FORM_LIST_ORDER' => '列表順序',
	'PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL' => '運送者',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME' => '運送費率說明',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART' => '重量從 ...',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND' => '... 到',
	'PHPSHOP_CARRIER_FORM_NAME' => '運送公司',
	'PHPSHOP_CARRIER_FORM_LIST_ORDER' => '列表順序'
); $VM_LANG->initModule( 'shipping', $langvars );
?>