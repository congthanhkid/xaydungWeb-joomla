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
	'PHPSHOP_USER_FORM_EMAIL' => 'Correio Electr�nico',
	'PHPSHOP_SHOPPER_LIST_LBL' => 'Lista de Clientes',
	'PHPSHOP_SHOPPER_FORM_BILLTO_LBL' => 'Informa��o de Cobrar A',
	'PHPSHOP_SHOPPER_FORM_USERNAME' => 'Username',
	'PHPSHOP_AFFILIATE_MOD' => 'Administra��o Filiados',
	'PHPSHOP_AFFILIATE_LIST_LBL' => 'Lista de Filiados',
	'PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME' => 'Nome Filiado',
	'PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE' => 'Activo',
	'PHPSHOP_AFFILIATE_LIST_RATE' => 'Avalia��o',
	'PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL' => 'Total M�s',
	'PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION' => 'Comiss�o Mensal',
	'PHPSHOP_AFFILIATE_LIST_ORDERS' => 'Listar Encomendas',
	'PHPSHOP_AFFILIATE_EMAIL_WHO' => 'A quem enviar Email(* = TODOS)',
	'PHPSHOP_AFFILIATE_EMAIL_CONTENT' => 'O seu Email',
	'PHPSHOP_AFFILIATE_EMAIL_SUBJECT' => 'O Assunto',
	'PHPSHOP_AFFILIATE_EMAIL_STATS' => 'Incluir estat�sticas actuais',
	'PHPSHOP_AFFILIATE_FORM_RATE' => 'Taxa de Comiss�o (percentagem)',
	'PHPSHOP_AFFILIATE_FORM_ACTIVE' => 'Activo?',
	'VM_AFFILIATE_SHOWINGDETAILS_FOR' => 'Exibindo Detalhes de',
	'VM_AFFILIATE_LISTORDERS' => 'Lista Encomendas',
	'VM_AFFILIATE_MONTH' => 'M�s',
	'VM_AFFILIATE_CHANGEVIEW' => 'Mudar Visualiza��o',
	'VM_AFFILIATE_ORDERSUMMARY_LBL' => 'Sum�rio Encomendas',
	'VM_AFFILIATE_ORDERLIST_ORDERREF' => 'Encomenda Ref',
	'VM_AFFILIATE_ORDERLIST_DATEORDERED' => 'Data Encomenda',
	'VM_AFFILIATE_ORDERLIST_ORDERTOTAL' => 'Total Encomenda',
	'VM_AFFILIATE_ORDERLIST_COMMISSION' => 'Commiss�o (Taxa)',
	'VM_AFFILIATE_ORDERLIST_ORDERSTATUS' => 'Estado Encomenda'
); $VM_LANG->initModule( 'affiliate', $langvars );
?>