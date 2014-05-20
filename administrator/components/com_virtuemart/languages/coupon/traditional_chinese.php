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
	'PHPSHOP_COUPON_EDIT_HEADER' => '更新優待',
	'PHPSHOP_COUPON_CODE_HEADER' => '代碼',
	'PHPSHOP_COUPON_PERCENT_TOTAL' => '百分比或是總額',
	'PHPSHOP_COUPON_TYPE' => '優待類型',
	'PHPSHOP_COUPON_TYPE_TOOLTIP' => '一張優待禮卷一旦用來打折之後將被刪除. 而永久型優待卷則可以想多常用就用, 隨顧客高興.',
	'PHPSHOP_COUPON_TYPE_GIFT' => '優待禮卷',
	'PHPSHOP_COUPON_TYPE_PERMANENT' => '永久型優待卷',
	'PHPSHOP_COUPON_VALUE_HEADER' => '數值',
	'PHPSHOP_COUPON_PERCENT' => '百分比',
	'PHPSHOP_COUPON_TOTAL' => '總額'
); $VM_LANG->initModule( 'coupon', $langvars );
?>