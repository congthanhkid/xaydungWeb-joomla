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
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX' => '��ܧt�|���H',
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN' => '�L�׻���O�_�t�|���]�m�лx�C',
	'PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL' => '�a�}�O�W',
	'PHPSHOP_SHOPPER_GROUP_LIST_LBL' => '�U�ȸs�զC��',
	'PHPSHOP_SHOPPER_GROUP_LIST_NAME' => '�s�զW��',
	'PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION' => '�s�մy�z',
	'PHPSHOP_SHOPPER_GROUP_FORM_LBL' => '�U�ȸs�ժ��',
	'PHPSHOP_SHOPPER_GROUP_FORM_NAME' => '�s�զW��',
	'PHPSHOP_SHOPPER_GROUP_FORM_DESC' => '�s�մy�z',
	'PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT' => '�w�]�U�ȸs�ժ�����馩 (�H�ʤ��񪺧Φ�)',
	'PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP' => '���Ȫ� X �N����:�ӫ~�p�G���Ӹs���U�ȨS�����w���檺�ܡA����N�b�w�]����W����� X%�C�t�ȫh���ۤϮĪG�C'
); $VM_LANG->initModule( 'shopper', $langvars );
?>