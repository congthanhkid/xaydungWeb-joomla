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
	'PHPSHOP_ACC_CUSTOMER_ACCOUNT' => '客户帐号:',
	'PHPSHOP_ACC_UPD_BILL' => '在此您可以更新您的支付信息.',
	'PHPSHOP_ACC_UPD_SHIP' => '这里您可以增加或修改支付信息.',
	'PHPSHOP_ACC_ACCOUNT_INFO' => '付款帐户信息',
	'PHPSHOP_ACC_SHIP_INFO' => '送货信息',
	'PHPSHOP_DOWNLOADS_CLICK' => 'Click on Product Name to Download File(s).',
	'PHPSHOP_DOWNLOADS_EXPIRED' => 'You have already downloaded the file(s) the maximum number of times, or the download period has expired.'
); $VM_LANG->initModule( 'account', $langvars );
?>