<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : norwegian.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'PHPSHOP_COUPON_EDIT_HEADER' => 'Oppdater rabatt',
	'PHPSHOP_COUPON_CODE_HEADER' => 'Kode',
	'PHPSHOP_COUPON_PERCENT_TOTAL' => 'Prosent eller totalt',
	'PHPSHOP_COUPON_TYPE' => 'Rabatt Type',
	'PHPSHOP_COUPON_TYPE_TOOLTIP' => 'En gaverabatt slettes når den er brukt på en ordre. En permanent rabatt kan brukes flere ganger.',
	'PHPSHOP_COUPON_TYPE_GIFT' => 'Gave Rabatt',
	'PHPSHOP_COUPON_TYPE_PERMANENT' => 'Permanent Rabatt',
	'PHPSHOP_COUPON_VALUE_HEADER' => 'Verdi',
	'PHPSHOP_COUPON_PERCENT' => 'Prosent',
	'PHPSHOP_COUPON_TOTAL' => 'Totalt'
); $VM_LANG->initModule( 'coupon', $langvars );
?>