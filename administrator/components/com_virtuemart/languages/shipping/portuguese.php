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
	'PHPSHOP_CARRIER_LIST_LBL' => 'Lista de Transportadores',
	'PHPSHOP_RATE_LIST_LBL' => 'Lista de Taxas de Transporte',
	'PHPSHOP_CARRIER_LIST_NAME_LBL' => 'Nome',
	'PHPSHOP_CARRIER_LIST_ORDER_LBL' => 'Ordem de Listagem (nъmero)',
	'PHPSHOP_CARRIER_FORM_LBL' => 'Editar/Criar Transportador',
	'PHPSHOP_RATE_FORM_LBL' => 'Editar/Criar Taxa de Transporte',
	'PHPSHOP_RATE_FORM_NAME' => 'Descriзгo da Taxa de Transporte',
	'PHPSHOP_RATE_FORM_CARRIER' => 'Transportador',
	'PHPSHOP_RATE_FORM_COUNTRY' => 'Paнs',
	'PHPSHOP_RATE_FORM_ZIP_START' => 'Inнcio do intervalo de Cуdigos Postais',
	'PHPSHOP_RATE_FORM_ZIP_END' => 'Fim do intervalo de Cуdigos Postais',
	'PHPSHOP_RATE_FORM_WEIGHT_START' => 'Peso minimo',
	'PHPSHOP_RATE_FORM_WEIGHT_END' => 'Peso mбximo',
	'PHPSHOP_RATE_FORM_PACKAGE_FEE' => 'A taxa da sua encomenda',
	'PHPSHOP_RATE_FORM_CURRENCY' => 'Moeda',
	'PHPSHOP_RATE_FORM_LIST_ORDER' => 'Ordem de Listagem (nъmero)',
	'PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL' => 'Transportador',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME' => 'Descriзгo da taxa de Transporte',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART' => 'Peso a partir de ...',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND' => '... atй',
	'PHPSHOP_CARRIER_FORM_NAME' => 'Empresa Transportadora',
	'PHPSHOP_CARRIER_FORM_LIST_ORDER' => 'Ordem de Listagem (nъmero)'
); $VM_LANG->initModule( 'shipping', $langvars );
?>