<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : brazilian_portuguese.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX' => 'Mostrar pre�os com taxa��o?',
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN' => 'Defina a op��o onde os compradores v�m pre�os com taxas inclu�das  ou n�o.',
	'PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL' => 'Endere�o 2',
	'PHPSHOP_SHOPPER_GROUP_LIST_LBL' => 'Lista de grupos de clientes',
	'PHPSHOP_SHOPPER_GROUP_LIST_NAME' => 'Nome',
	'PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION' => 'Descri��o',
	'PHPSHOP_SHOPPER_GROUP_FORM_LBL' => 'Formul�rio de grupos de clientes',
	'PHPSHOP_SHOPPER_GROUP_FORM_NAME' => 'Nome',
	'PHPSHOP_SHOPPER_GROUP_FORM_DESC' => 'Descri��o',
	'PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT' => 'Desconto para o grupo de compradores padr�o (em %)',
	'PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP' => 'Uma quantidade X positiva significa: Se o produto n�o tiver pre�o especificado para ESTE grupo de compradores, o pre�o padr�o � decrescido em X %. Um valor negativo tem o efeito oposto'
); $VM_LANG->initModule( 'shopper', $langvars );
?>