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
	'PHPSHOP_COUPON_EDIT_HEADER' => '��s�u��',
	'PHPSHOP_COUPON_CODE_HEADER' => '�N�X',
	'PHPSHOP_COUPON_PERCENT_TOTAL' => '�ʤ���άO�`�B',
	'PHPSHOP_COUPON_TYPE' => '�u������',
	'PHPSHOP_COUPON_TYPE_TOOLTIP' => '�@�i�u��§���@���Ψӥ��餧��N�Q�R��. �ӥä[���u�ݨ��h�i�H�Q�h�`�δN��, �H�U�Ȱ���.',
	'PHPSHOP_COUPON_TYPE_GIFT' => '�u��§��',
	'PHPSHOP_COUPON_TYPE_PERMANENT' => '�ä[���u�ݨ�',
	'PHPSHOP_COUPON_VALUE_HEADER' => '�ƭ�',
	'PHPSHOP_COUPON_PERCENT' => '�ʤ���',
	'PHPSHOP_COUPON_TOTAL' => '�`�B'
); $VM_LANG->initModule( 'coupon', $langvars );
?>