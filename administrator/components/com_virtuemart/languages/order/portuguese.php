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
	'PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL' => 'Registo de Pagamento',
	'PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL' => 'Despesas de Envio',
	'PHPSHOP_ORDER_STATUS_LIST_CODE' => 'Código do Estado de Encomenda',
	'PHPSHOP_ORDER_STATUS_LIST_NAME' => 'Nome do Estado de Encomenda',
	'PHPSHOP_ORDER_STATUS_FORM_LBL' => 'Estado Encomenda',
	'PHPSHOP_ORDER_STATUS_FORM_CODE' => 'Código de Estado de Encomenda',
	'PHPSHOP_ORDER_STATUS_FORM_NAME' => 'Nome do Estado de Encomenda',
	'PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER' => 'Listar Encomenda',
	'PHPSHOP_COMMENT' => 'Comentátio',
	'PHPSHOP_ORDER_LIST_NOTIFY' => 'Informar Cliente?',
	'PHPSHOP_ORDER_LIST_NOTIFY_ERR' => 'Por favor, altere primeiro o estado da encomenda!',
	'PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT' => 'Incluir este comentário?',
	'PHPSHOP_ORDER_HISTORY_DATE_ADDED' => 'Incluido em',
	'PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED' => 'Cliente informado?',
	'PHPSHOP_ORDER_STATUS_CHANGE' => 'Alterar Estado Encomenda',
	'PHPSHOP_ORDER_LIST_PRINT_LABEL' => 'Etiqueta de Impressão',
	'PHPSHOP_ORDER_LIST_VOID_LABEL' => 'Etiqueta Nula',
	'PHPSHOP_ORDER_LIST_TRACK' => 'Track',
	'VM_DOWNLOAD_STATS' => 'DOWNLOAD STATS',
	'VM_DOWNLOAD_NOTHING_LEFT' => 'Sem Downloads Remanescentes',
	'VM_DOWNLOAD_REENABLE' => 'Reativar Download',
	'VM_DOWNLOAD_REMAINING_DOWNLOADS' => 'Downloads Remanescentes',
	'VM_DOWNLOAD_RESEND_ID' => 'Reenviar Código de Download',
	'VM_EXPIRY' => 'Caducidade',
	'VM_UPDATE_STATUS' => 'Atualizar estado',
	'VM_ORDER_LABEL_ORDERID_NOTVALID' => 'Por favor Forneça um código de encomenda válido, não "{order_id}"',
	'VM_ORDER_LABEL_NOTFOUND' => 'Encomenda não encontrada na nossa base de dados.',
	'VM_ORDER_LABEL_NEVERGENERATED' => 'Etiqueta ainda não foi gerada',
	'VM_ORDER_LABEL_CLASSCANNOT' => 'Classe {ship_class} não pode obter imagens, porque estamos aqui?',
	'VM_ORDER_LABEL_SHIPPINGLABEL_LBL' => 'Etiqueta de Envio',
	'VM_ORDER_LABEL_SIGNATURENEVER' => 'Assinatura nunca foi recuperada',
	'VM_ORDER_LABEL_TRACK_TITLE' => 'Track',
	'VM_ORDER_LABEL_VOID_TITLE' => 'Etiqueta Nula',
	'VM_ORDER_LABEL_VOIDED_MSG' => 'Etiqueta de waybill {tracking_number} foi anulada.',
	'VM_ORDER_PRINT_PO_IPADDRESS' => 'MORADA-IP',
	'VM_ORDER_STATUS_ICON_ALT' => 'Icon de Estado',
	'VM_ORDER_PAYMENT_CCV_CODE' => 'Código CVV',
	'VM_ORDER_NOTFOUND' => 'Encomanda não encontrada! Poderá ter sido eliminada.',
	'PHPSHOP_ORDER_EDIT_ACTIONS' => 'Actions',
	'PHPSHOP_ORDER_EDIT' => 'Change Order Details',
	'PHPSHOP_ORDER_EDIT_ADD' => 'Add',
	'PHPSHOP_ORDER_EDIT_ADD_PRODUCT' => 'Add Product',
	'PHPSHOP_ORDER_EDIT_EDIT_ORDER' => 'Change Order',
	'PHPSHOP_ORDER_EDIT_ERROR_QUANTITY_MUST_BE_HIGHER_THAN_0' => 'Quantity must be greater than 0.',
	'PHPSHOP_ORDER_EDIT_PRODUCT_ADDED' => 'The Product was added to the Order',
	'PHPSHOP_ORDER_EDIT_PRODUCT_DELETED' => 'The Product was removed from this Order',
	'PHPSHOP_ORDER_EDIT_QUANTITY_UPDATED' => 'Quantity has been updated',
	'PHPSHOP_ORDER_EDIT_RETURN_PARENTS' => 'back to Parent Product',
	'PHPSHOP_ORDER_EDIT_CHOOSE_PRODUCT' => 'Select a Product',
	'PHPSHOP_ORDER_CHANGE_UPD_BILL' => 'Change Billto Address',
	'PHPSHOP_ORDER_CHANGE_UPD_SHIP' => 'Change Shipto Address',
	'PHPSHOP_ORDER_EDIT_SOMETHING_HAS_CHANGED' => ' has been changed',
	'PHPSHOP_ORDER_EDIT_CHOOSE_PRODUCT_BY_SKU' => 'Select SKU'
); $VM_LANG->initModule( 'order', $langvars );
?>
