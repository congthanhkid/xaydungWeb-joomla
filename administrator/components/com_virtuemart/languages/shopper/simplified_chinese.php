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
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX' => '显示含税价？',
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN' => '无论价格是否含税均设置标志。',
	'PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL' => '地址别名',
	'PHPSHOP_SHOPPER_GROUP_LIST_LBL' => '购物会员组列表',
	'PHPSHOP_SHOPPER_GROUP_LIST_NAME' => '组名',
	'PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION' => '组描述',
	'PHPSHOP_SHOPPER_GROUP_FORM_LBL' => '购物会员组表格',
	'PHPSHOP_SHOPPER_GROUP_FORM_NAME' => '组名',
	'PHPSHOP_SHOPPER_GROUP_FORM_DESC' => '组描述',
	'PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT' => '默认顾客组的折扣量 (以百分比的形式)',
	'PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP' => '正值X意味着:商品如果对于该组顾客没有指定价格的话，那么将在默认价格上面减少X%。负值则有相反效果。'
); $VM_LANG->initModule( 'shopper', $langvars );
?>