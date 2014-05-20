<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : portuguese.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'PHPSHOP_COUPON_EDIT_HEADER' => 'Atualizaзгo do Cupom',
	'PHPSHOP_COUPON_CODE_HEADER' => 'Codigo',
	'PHPSHOP_COUPON_PERCENT_TOTAL' => 'Percentagem or Valor',
	'PHPSHOP_COUPON_TYPE' => 'Tipo de Cupom',
	'PHPSHOP_COUPON_TYPE_TOOLTIP' => 'Um Cupom de Oferta й apagado apуs ter sido utilizado para desconto na encomenda. Um Cupom Permanente pode ser utilizado quantas vezes o cliente quiser.',
	'PHPSHOP_COUPON_TYPE_GIFT' => 'Cupom de Oferta',
	'PHPSHOP_COUPON_TYPE_PERMANENT' => 'Cupom Permanente',
	'PHPSHOP_COUPON_VALUE_HEADER' => 'Valor',
	'PHPSHOP_COUPON_PERCENT' => 'Percentagem',
	'PHPSHOP_COUPON_TOTAL' => 'Valor'
); $VM_LANG->initModule( 'coupon', $langvars );
?>