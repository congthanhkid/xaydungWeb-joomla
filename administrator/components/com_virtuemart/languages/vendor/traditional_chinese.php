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
	'PHPSHOP_VENDOR_LIST_LBL' => '零售商列表',
	'PHPSHOP_VENDOR_LIST_ADMIN' => '管理',
	'PHPSHOP_VENDOR_FORM_LBL' => '增加資訊',
	'PHPSHOP_VENDOR_FORM_CONTACT_LBL' => '聯絡資訊',
	'PHPSHOP_VENDOR_FORM_FULL_IMAGE' => '完整圖片',
	'PHPSHOP_VENDOR_FORM_UPLOAD' => '上傳圖片',
	'PHPSHOP_VENDOR_FORM_STORE_NAME' => '零售商商店名稱',
	'PHPSHOP_VENDOR_FORM_COMPANY_NAME' => '零售商公司名稱',
	'PHPSHOP_VENDOR_FORM_ADDRESS_1' => '地址 1',
	'PHPSHOP_VENDOR_FORM_ADDRESS_2' => '地址 2',
	'PHPSHOP_VENDOR_FORM_CITY' => '城市',
	'PHPSHOP_VENDOR_FORM_STATE' => '省份/地區',
	'PHPSHOP_VENDOR_FORM_COUNTRY' => '國家',
	'PHPSHOP_VENDOR_FORM_ZIP' => '郵遞區號',
	'PHPSHOP_VENDOR_FORM_PHONE' => '電話',
	'PHPSHOP_VENDOR_FORM_CURRENCY' => '貨幣',
	'PHPSHOP_VENDOR_FORM_CATEGORY' => '零售商分類',
	'PHPSHOP_VENDOR_FORM_LAST_NAME' => '名',
	'PHPSHOP_VENDOR_FORM_FIRST_NAME' => '姓',
	'PHPSHOP_VENDOR_FORM_MIDDLE_NAME' => '中間名',
	'PHPSHOP_VENDOR_FORM_TITLE' => '職稱',
	'PHPSHOP_VENDOR_FORM_PHONE_1' => '電話 1',
	'PHPSHOP_VENDOR_FORM_PHONE_2' => '電話 2',
	'PHPSHOP_VENDOR_FORM_FAX' => '傳真',
	'PHPSHOP_VENDOR_FORM_EMAIL' => 'Email',
	'PHPSHOP_VENDOR_FORM_IMAGE_PATH' => '圖片路徑',
	'PHPSHOP_VENDOR_FORM_DESCRIPTION' => '描述',
	'PHPSHOP_VENDOR_CAT_LIST_LBL' => '零售商類別列表',
	'PHPSHOP_VENDOR_CAT_NAME' => '類別名稱',
	'PHPSHOP_VENDOR_CAT_DESCRIPTION' => '類別描述',
	'PHPSHOP_VENDOR_CAT_VENDORS' => '零售商',
	'PHPSHOP_VENDOR_CAT_FORM_LBL' => '零售商類別表單',
	'PHPSHOP_VENDOR_CAT_FORM_INFO_LBL' => '類別資訊',
	'PHPSHOP_VENDOR_CAT_FORM_NAME' => '類別名稱',
	'PHPSHOP_VENDOR_CAT_FORM_DESCRIPTION' => '類別描述'
); $VM_LANG->initModule( 'vendor', $langvars );
?>