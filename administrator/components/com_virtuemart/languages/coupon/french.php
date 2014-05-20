<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : italian.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'CHARSET' => 'ISO-8859-15',
	'PHPSHOP_COUPON_EDIT_HEADER' => 'Mise à jour chèque boutique',
	'PHPSHOP_COUPON_CODE_HEADER' => 'Code',
	'PHPSHOP_COUPON_PERCENT_TOTAL' => 'Pourcentage ou total',
	'PHPSHOP_COUPON_TYPE' => 'Type chèque boutique',
	'PHPSHOP_COUPON_TYPE_TOOLTIP' => 'Un chèque boutique cadeau est effacé après avoir été utilisé comme remise sur une commande. Un chèque boutique permanent peut être utilisé à loisir par le client.',
	'PHPSHOP_COUPON_TYPE_GIFT' => 'Chèque boutique cadeau',
	'PHPSHOP_COUPON_TYPE_PERMANENT' => 'Chèque boutique permanent',
	'PHPSHOP_COUPON_VALUE_HEADER' => 'Valeur',
	'PHPSHOP_COUPON_PERCENT' => 'Pourcentage',
	'PHPSHOP_COUPON_TOTAL' => 'Total'
); $VM_LANG->initModule( 'coupon', $langvars );
?>