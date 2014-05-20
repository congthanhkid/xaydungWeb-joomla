<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : hrvatski.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'CHARSET' => 'ISO-8859-1',
	'PHPSHOP_COUPON_EDIT_HEADER' => 'Ureðivanje Kupona',
	'PHPSHOP_COUPON_CODE_HEADER' => 'Kod',
	'PHPSHOP_COUPON_PERCENT_TOTAL' => 'Postotak ili Fiksno',
	'PHPSHOP_COUPON_TYPE' => 'Tip Kupona',
	'PHPSHOP_COUPON_TYPE_TOOLTIP' => 'Poklon Kupon se briše nakon što je iskorišten dok se stalni kupon može koristiti neograni&#269;eno',
	'PHPSHOP_COUPON_TYPE_GIFT' => 'Poklon Kupon',
	'PHPSHOP_COUPON_TYPE_PERMANENT' => 'Trajni Kupon',
	'PHPSHOP_COUPON_VALUE_HEADER' => 'Vrijednost',
	'PHPSHOP_COUPON_PERCENT' => 'Postotak',
	'PHPSHOP_COUPON_TOTAL' => 'Fiksno'
); $VM_LANG->initModule( 'coupon', $langvars );
?>