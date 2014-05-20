<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2008 soeren - All rights reserved.
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
	'PHPSHOP_NO_CUSTOMER' => 'Sentimos muito mas você ainda não é um clinte registado.<BR>Queira por favor registar-se na nossa loja primeiro.<BR>Obrigado.',
	'PHPSHOP_THANKYOU' => 'Obrigado pelo seu pedido.',
	'PHPSHOP_EMAIL_SENDTO' => 'Um email de confirmação foi enviado para',
	'PHPSHOP_CHECKOUT_NEXT' => 'Próximo',
	'PHPSHOP_CHECKOUT_CONF_BILLINFO' => 'Informação de Pagamento',
	'PHPSHOP_CHECKOUT_CONF_COMPANY' => 'Empresa',
	'PHPSHOP_CHECKOUT_CONF_NAME' => 'Nome',
	'PHPSHOP_CHECKOUT_CONF_ADDRESS' => 'Morada',
	'PHPSHOP_CHECKOUT_CONF_EMAIL' => 'Email',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO' => 'Informação de Envio',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY' => 'Empresa',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME' => 'Nome',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS' => 'Morada',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE' => 'Telefone',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX' => 'Fax',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD' => 'Método de Pagamento',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO' => 'Informação requerida quando Pagamento via Cartão de Crédito é seleccionada',
	'PHPSHOP_PAYPAL_THANKYOU' => 'Agradecemos o seu pagamento. 
A transação foi efectuada com sucesso. Receberá uma confirmação por e-mail referente a esta transação de PayPal. 
Pode continuar ou fazer log in em <a href=http://www.paypal.com>www.paypal.com</a> para ver os detalhes da transação.',
	'PHPSHOP_PAYPAL_ERROR' => 'Ocorreu um erro ao processar a transação. O estado da sua encomenda não pode ser actualizado.',
	'PHPSHOP_THANKYOU_SUCCESS' => 'A sua encomenda foi efectuada com sucesso!',
	'VM_CHECKOUT_TITLE_TAG' => 'Finalizar: Passo %s de %s',
	'VM_CHECKOUT_ORDERIDNOTSET' => 'Código encomenda não defenido ou não informado!',
	'VM_CHECKOUT_FAILURE' => 'Incumprimento',
	'VM_CHECKOUT_SUCCESS' => 'Sucesso',
	'VM_CHECKOUT_PAGE_GATEWAY_EXPLAIN_1' => 'Esta página está localizada na loja virtual do site.',
	'VM_CHECKOUT_PAGE_GATEWAY_EXPLAIN_2' => 'The gateway execute the page on the website, and the shows the result SSL Encrypted.',
	'VM_CHECKOUT_CCV_CODE' => 'Código de validação do cartão de crédito',
	'VM_CHECKOUT_CCV_CODE_TIPTITLE' => 'O que é o código de validação do cartão de crédito?',
	'VM_CHECKOUT_MD5_FAILED' => 'Consulta MD5 falhou',
	'VM_CHECKOUT_ORDERNOTFOUND' => 'Encomenda não encontrada'
); $VM_LANG->initModule( 'checkout', $langvars );
?>