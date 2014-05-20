<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : thai.php 1071 2007-12-03 08:42:28Z thepisu $
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2008 VirtueMart.net - All rights reserved.
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
	'PHPSHOP_ACC_CUSTOMER_ACCOUNT' => 'บัญชีลูกค้า:',
	'PHPSHOP_ACC_UPD_BILL' => 'คุณสามารถแก้ไขรายละเอียดใบแจ้งหนี้',
	'PHPSHOP_ACC_UPD_SHIP' => 'คุณสามารถแก้ไขรายละเอียดสถานที่จัดส่ง',
	'PHPSHOP_ACC_ACCOUNT_INFO' => 'รายละเอียดบัญชี',
	'PHPSHOP_ACC_SHIP_INFO' => 'รายละเอียดสถานที่จัดส่ง',
	'PHPSHOP_DOWNLOADS_CLICK' => 'คลิกที่สินค้าเพื่อดาวน์โหลดไฟล์.',
	'PHPSHOP_DOWNLOADS_EXPIRED' => 'คุณได้ทำการดาวน์โหลดไฟล์เกินจำนวนในเวลาที่กำหนด,  หรือระยะเวลาการดาวน์โหลดได้หมดอายุ.'
); $VM_LANG->initModule( 'account', $langvars );
?>