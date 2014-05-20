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
	'PHPSHOP_MANUFACTURER_LIST_LBL' => '制造商列表',
	'PHPSHOP_MANUFACTURER_LIST_MANUFACTURER_NAME' => '制造商名称',
	'PHPSHOP_MANUFACTURER_FORM_LBL' => '添加信息',
	'PHPSHOP_MANUFACTURER_FORM_CATEGORY' => '制造商类别',
	'PHPSHOP_MANUFACTURER_FORM_EMAIL' => 'Email',
	'PHPSHOP_MANUFACTURER_CAT_LIST_LBL' => '制造商类别列表',
	'PHPSHOP_MANUFACTURER_CAT_NAME' => '类别名称',
	'PHPSHOP_MANUFACTURER_CAT_DESCRIPTION' => '类别说明',
	'PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS' => '制造商',
	'PHPSHOP_MANUFACTURER_CAT_FORM_LBL' => '制造商类别表单',
	'PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL' => '类别信息',
	'PHPSHOP_MANUFACTURER_CAT_FORM_NAME' => '类别名称',
	'PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION' => '类别说明'
); $VM_LANG->initModule( 'manufacturer', $langvars );
?>