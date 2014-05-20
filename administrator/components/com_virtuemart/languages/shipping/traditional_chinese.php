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
	'PHPSHOP_CARRIER_LIST_LBL' => '�B�e�̦C��',
	'PHPSHOP_RATE_LIST_LBL' => '�B�e�O�v�C��',
	'PHPSHOP_CARRIER_LIST_NAME_LBL' => '�W��',
	'PHPSHOP_CARRIER_LIST_ORDER_LBL' => '�C����',
	'PHPSHOP_CARRIER_FORM_LBL' => '�W�[/�s�� �B�e��',
	'PHPSHOP_RATE_FORM_LBL' => '�W�[/�s�� �B�e�O�v',
	'PHPSHOP_RATE_FORM_NAME' => '�B�e�O�v����',
	'PHPSHOP_RATE_FORM_CARRIER' => '�B�e��',
	'PHPSHOP_RATE_FORM_COUNTRY' => '��a',
	'PHPSHOP_RATE_FORM_ZIP_START' => '�l���ϸ��_�l�d��',
	'PHPSHOP_RATE_FORM_ZIP_END' => '�l���ϸ������d��',
	'PHPSHOP_RATE_FORM_WEIGHT_START' => '�̧C���q',
	'PHPSHOP_RATE_FORM_WEIGHT_END' => '�̰����q',
	'PHPSHOP_RATE_FORM_PACKAGE_FEE' => '�z���]�q�O��',
	'PHPSHOP_RATE_FORM_CURRENCY' => '�f��',
	'PHPSHOP_RATE_FORM_LIST_ORDER' => '�C����',
	'PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL' => '�B�e��',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME' => '�B�e�O�v����',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART' => '���q�q ...',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND' => '... ��',
	'PHPSHOP_CARRIER_FORM_NAME' => '�B�e���q',
	'PHPSHOP_CARRIER_FORM_LIST_ORDER' => '�C����'
); $VM_LANG->initModule( 'shipping', $langvars );
?>