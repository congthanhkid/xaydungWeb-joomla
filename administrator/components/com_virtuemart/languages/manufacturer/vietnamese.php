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
	'PHPSHOP_MANUFACTURER_LIST_LBL' => 'Danh sách nhà sản xuất',
	'PHPSHOP_MANUFACTURER_LIST_MANUFACTURER_NAME' => 'Tên Nhà sản xuất',
	'PHPSHOP_MANUFACTURER_FORM_LBL' => 'Thêm Nhà sản xuất',
	'PHPSHOP_MANUFACTURER_FORM_CATEGORY' => 'Danh mục',
	'PHPSHOP_MANUFACTURER_FORM_EMAIL' => 'Email',
	'PHPSHOP_MANUFACTURER_CAT_LIST_LBL' => 'Danh mục Danh sách nhà sản xuất',
	'PHPSHOP_MANUFACTURER_CAT_NAME' => 'Tên danh mục',
	'PHPSHOP_MANUFACTURER_CAT_DESCRIPTION' => 'Mô tả danh mục',
	'PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS' => 'Nhà sản xuất',
	'PHPSHOP_MANUFACTURER_CAT_FORM_LBL' => 'Thêm danh mục Nhà sản xuất vào mẫu',
	'PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL' => 'Thông tin danh mục',
	'PHPSHOP_MANUFACTURER_CAT_FORM_NAME' => 'Tên danh mục',
	'PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION' => 'Mô tả danh mục',
); $VM_LANG->initModule( 'manufacturer', $langvars );
?>