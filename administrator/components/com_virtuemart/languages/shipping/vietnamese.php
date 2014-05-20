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
	'PHPSHOP_CARRIER_LIST_LBL' => 'Danh sách công ty vận chuyển',
	'PHPSHOP_RATE_LIST_LBL' => 'Danh sách loại vận chuyển',
	'PHPSHOP_CARRIER_LIST_NAME_LBL' => 'Tên',
	'PHPSHOP_CARRIER_LIST_ORDER_LBL' => 'Số thứ tự',
	'PHPSHOP_CARRIER_FORM_LBL' => 'Tạo mới / Sửa công ty vận chuyển',
	'PHPSHOP_RATE_FORM_LBL' => 'Tạo/Sửa loại Vận chuyển',
	'PHPSHOP_RATE_FORM_NAME' => 'Mô tả loại vận chuyển',
	'PHPSHOP_RATE_FORM_CARRIER' => 'Công ty vận chuyển',
	'PHPSHOP_RATE_FORM_COUNTRY' => 'Quốc gia',
	'PHPSHOP_RATE_FORM_ZIP_START' => 'ZIP từ',
	'PHPSHOP_RATE_FORM_ZIP_END' => 'ZIP đến',
	'PHPSHOP_RATE_FORM_WEIGHT_START' => 'Trọng lượng thấp nhất',
	'PHPSHOP_RATE_FORM_WEIGHT_END' => 'Trọng lượng cao nhất',
	'PHPSHOP_RATE_FORM_PACKAGE_FEE' => 'Chi phí trọn gói của bạn',
	'PHPSHOP_RATE_FORM_CURRENCY' => 'Tiền tệ',
	'PHPSHOP_RATE_FORM_LIST_ORDER' => 'Số thứ tự',
	'PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL' => 'Công ty vận chuyển',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME' => 'Mô tả loại vận chuyển',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART' => 'Trọng lượng từ ...',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND' => '... đến',
	'PHPSHOP_CARRIER_FORM_NAME' => 'Công ty vận chuyển',
	'PHPSHOP_CARRIER_FORM_LIST_ORDER' => 'Số thứ tự'
); $VM_LANG->initModule( 'shipping', $langvars );
?>