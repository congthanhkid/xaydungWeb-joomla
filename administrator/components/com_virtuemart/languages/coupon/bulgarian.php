<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : bulgarian.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'CHARSET' => 'cp1251',
	'PHPSHOP_COUPON_EDIT_HEADER' => '������� �� �����',
	'PHPSHOP_COUPON_CODE_HEADER' => '���',
	'PHPSHOP_COUPON_PERCENT_TOTAL' => '������� ��� ����',
	'PHPSHOP_COUPON_TYPE' => '���� �� ������',
	'PHPSHOP_COUPON_TYPE_TOOLTIP' => 'Ednokratniqt talon se deaktiwira sled purvata uspeshna pokupka s nego. Wechniat talon moje da se polzwa ot klienta vinagi.',
	'PHPSHOP_COUPON_TYPE_GIFT' => '����������',
	'PHPSHOP_COUPON_TYPE_PERMANENT' => '�����',
	'PHPSHOP_COUPON_VALUE_HEADER' => '��������',
	'PHPSHOP_COUPON_PERCENT' => '�������',
	'PHPSHOP_COUPON_TOTAL' => '����'
); $VM_LANG->initModule( 'coupon', $langvars );
?>