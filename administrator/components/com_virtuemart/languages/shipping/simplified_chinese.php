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
	'PHPSHOP_CARRIER_LIST_LBL' => '发货人列表',
	'PHPSHOP_RATE_LIST_LBL' => '运输单价列表',
	'PHPSHOP_CARRIER_LIST_NAME_LBL' => '名称',
	'PHPSHOP_CARRIER_LIST_ORDER_LBL' => '列表顺序',
	'PHPSHOP_CARRIER_FORM_LBL' => '添加/编辑发货人',
	'PHPSHOP_RATE_FORM_LBL' => '添加/编辑运输单价',
	'PHPSHOP_RATE_FORM_NAME' => '运输单价说明',
	'PHPSHOP_RATE_FORM_CARRIER' => '发货人',
	'PHPSHOP_RATE_FORM_COUNTRY' => '国家',
	'PHPSHOP_RATE_FORM_ZIP_START' => '邮编起始数值',
	'PHPSHOP_RATE_FORM_ZIP_END' => '邮编结束数值',
	'PHPSHOP_RATE_FORM_WEIGHT_START' => '最小重量',
	'PHPSHOP_RATE_FORM_WEIGHT_END' => '最大重量',
	'PHPSHOP_RATE_FORM_PACKAGE_FEE' => '您的包裹费用',
	'PHPSHOP_RATE_FORM_CURRENCY' => '货币',
	'PHPSHOP_RATE_FORM_LIST_ORDER' => '列表顺序',
	'PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL' => '发货人',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME' => '运输单价说明',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART' => '重量从 ...',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND' => '... 到',
	'PHPSHOP_CARRIER_FORM_NAME' => '运输公司',
	'PHPSHOP_CARRIER_FORM_LIST_ORDER' => '列表顺序'
); $VM_LANG->initModule( 'shipping', $langvars );
?>