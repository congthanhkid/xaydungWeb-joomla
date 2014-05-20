<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : hungarian.php 1247 2008-02-13 08:42:28Z pedrohsi $
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2007 soeren - All rights reserved.
* @translator soeren, pedrohsi
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
	'PHPSHOP_COUPON_EDIT_HEADER' => 'Kupon frissítése',
	'PHPSHOP_COUPON_CODE_HEADER' => 'Kód',
	'PHPSHOP_COUPON_PERCENT_TOTAL' => 'Százalék vagy Összesen',
	'PHPSHOP_COUPON_TYPE' => 'Kupon típus',
	'PHPSHOP_COUPON_TYPE_TOOLTIP' => 'Az ajándékutalvány törlődik, miután felhasználták egy megrendelésnél. Az állandó kupon folyamatosan használható.',
	'PHPSHOP_COUPON_TYPE_GIFT' => 'Ajándékutalvány',
	'PHPSHOP_COUPON_TYPE_PERMANENT' => 'Állandó kupon',
	'PHPSHOP_COUPON_VALUE_HEADER' => 'Érték',
	'PHPSHOP_COUPON_PERCENT' => 'Százalék',
	'PHPSHOP_COUPON_TOTAL' => 'Összesen'
); $VM_LANG->initModule( 'coupon', $langvars );
?>