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
	'PHPSHOP_VENDOR_LIST_LBL' => '卖主列表',
	'PHPSHOP_VENDOR_LIST_ADMIN' => '管理',
	'PHPSHOP_VENDOR_FORM_LBL' => '增加信息',
	'PHPSHOP_VENDOR_FORM_CONTACT_LBL' => '联系信息',
	'PHPSHOP_VENDOR_FORM_FULL_IMAGE' => '完整图片',
	'PHPSHOP_VENDOR_FORM_UPLOAD' => '上传图片',
	'PHPSHOP_VENDOR_FORM_STORE_NAME' => '卖主商铺名',
	'PHPSHOP_VENDOR_FORM_COMPANY_NAME' => '卖主公司名称',
	'PHPSHOP_VENDOR_FORM_ADDRESS_1' => '地址1',
	'PHPSHOP_VENDOR_FORM_ADDRESS_2' => '地址2',
	'PHPSHOP_VENDOR_FORM_CITY' => '城市',
	'PHPSHOP_VENDOR_FORM_STATE' => '省份/地区',
	'PHPSHOP_VENDOR_FORM_COUNTRY' => '国家',
	'PHPSHOP_VENDOR_FORM_ZIP' => '邮编',
	'PHPSHOP_VENDOR_FORM_PHONE' => '电话',
	'PHPSHOP_VENDOR_FORM_CURRENCY' => '货币',
	'PHPSHOP_VENDOR_FORM_CATEGORY' => '卖主分类',
	'PHPSHOP_VENDOR_FORM_LAST_NAME' => '名',
	'PHPSHOP_VENDOR_FORM_FIRST_NAME' => '姓',
	'PHPSHOP_VENDOR_FORM_MIDDLE_NAME' => '中间名',
	'PHPSHOP_VENDOR_FORM_TITLE' => '职务',
	'PHPSHOP_VENDOR_FORM_PHONE_1' => '电话1',
	'PHPSHOP_VENDOR_FORM_PHONE_2' => '电话2',
	'PHPSHOP_VENDOR_FORM_FAX' => '传真',
	'PHPSHOP_VENDOR_FORM_EMAIL' => 'Email',
	'PHPSHOP_VENDOR_FORM_IMAGE_PATH' => '图片路径',
	'PHPSHOP_VENDOR_FORM_DESCRIPTION' => '描述',
	'PHPSHOP_VENDOR_CAT_LIST_LBL' => '卖主类别列表',
	'PHPSHOP_VENDOR_CAT_NAME' => '类别名',
	'PHPSHOP_VENDOR_CAT_DESCRIPTION' => '类别描述',
	'PHPSHOP_VENDOR_CAT_VENDORS' => '卖主',
	'PHPSHOP_VENDOR_CAT_FORM_LBL' => '卖主类别表单',
	'PHPSHOP_VENDOR_CAT_FORM_INFO_LBL' => '类别信息',
	'PHPSHOP_VENDOR_CAT_FORM_NAME' => '类别名',
	'PHPSHOP_VENDOR_CAT_FORM_DESCRIPTION' => '类别描述'
); $VM_LANG->initModule( 'vendor', $langvars );
?>