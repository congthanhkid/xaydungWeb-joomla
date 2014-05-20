<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : thai.php 1071 2007-12-03 08:42:28Z thepisu $
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2008 soeren - All rights reserved.
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
	'PHPSHOP_COUPON_EDIT_HEADER' => 'แก้ไข',
	'PHPSHOP_COUPON_CODE_HEADER' => 'รหัสคูปอง',
	'PHPSHOP_COUPON_PERCENT_TOTAL' => 'เปอร์เซ็นต์ หรือ ทั้งหมด',
	'PHPSHOP_COUPON_TYPE' => 'ประเภทคูปอง',
	'PHPSHOP_COUPON_TYPE_TOOLTIP' => '- คูปองของขวัญจะลบหลังจากถูกใช้แลกส่วนลดแล้ว<br />- คูปองถาวรจะสามารถใช้ได้เท่าที่ลูกค้าต้องการ',
	'PHPSHOP_COUPON_TYPE_GIFT' => 'คูปองของขวัญ',
	'PHPSHOP_COUPON_TYPE_PERMANENT' => 'คูปองถาวร',
	'PHPSHOP_COUPON_VALUE_HEADER' => 'มูลค่า',
	'PHPSHOP_COUPON_PERCENT' => 'เปอร์เซ็นต์',
	'PHPSHOP_COUPON_TOTAL' => 'ทั้งหมด'
); $VM_LANG->initModule( 'coupon', $langvars );
?>