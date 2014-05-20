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
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX' => 'Mostrar Preços com IVA Incluido?',
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN' => 'Define se os clientes vêem os preços com IVA incluindo ou excluido .',
	'PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL' => 'Morada 2',
	'PHPSHOP_SHOPPER_GROUP_LIST_LBL' => 'Lista de Grupos de Clientes',
	'PHPSHOP_SHOPPER_GROUP_LIST_NAME' => 'Nome',
	'PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION' => 'Descrição',
	'PHPSHOP_SHOPPER_GROUP_FORM_LBL' => 'Formulário de Grupos de Clientes',
	'PHPSHOP_SHOPPER_GROUP_FORM_NAME' => 'Nome',
	'PHPSHOP_SHOPPER_GROUP_FORM_DESC' => 'Descrição',
	'PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT' => 'Desconto sobre padrão no grupo de Clientes (em %)',
	'PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP' => 'Um valor positivo X significa: Se o produto não tem preço atribuído ao Grupo de clientes PRESENTE, o Preço Padrão é diminuiudo X%. Um montante negativo tem o efeito oposto'
); $VM_LANG->initModule( 'shopper', $langvars );
?>