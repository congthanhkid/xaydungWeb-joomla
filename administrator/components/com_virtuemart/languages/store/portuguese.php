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
	'PHPSHOP_USER_FORM_FIRST_NAME' => 'Nome',
	'PHPSHOP_USER_FORM_LAST_NAME' => 'Sobrenome',
	'PHPSHOP_USER_FORM_MIDDLE_NAME' => 'Nome do Meio',
	'PHPSHOP_USER_FORM_COMPANY_NAME' => 'Empresa',
	'PHPSHOP_USER_FORM_ADDRESS_1' => 'Morada 1',
	'PHPSHOP_USER_FORM_ADDRESS_2' => 'Morada 2',
	'PHPSHOP_USER_FORM_CITY' => 'Cidade',
	'PHPSHOP_USER_FORM_STATE' => 'Distrito',
	'PHPSHOP_USER_FORM_ZIP' => 'Código Postal',
	'PHPSHOP_USER_FORM_COUNTRY' => 'País',
	'PHPSHOP_USER_FORM_PHONE' => 'Telefone',
	'PHPSHOP_USER_FORM_PHONE2' => 'Telemóvel',
	'PHPSHOP_USER_FORM_FAX' => 'Fax',
	'PHPSHOP_ISSHIP_LIST_PUBLISH_LBL' => 'Activo',
	'PHPSHOP_ISSHIP_FORM_UPDATE_LBL' => 'Configurar Método de Envio',
	'PHPSHOP_STORE_FORM_FULL_IMAGE' => 'Imagem',
	'PHPSHOP_STORE_FORM_UPLOAD' => 'Enviar Imagem para o servidor',
	'PHPSHOP_STORE_FORM_STORE_NAME' => 'Nome da Loja',
	'PHPSHOP_STORE_FORM_COMPANY_NAME' => 'Nome da Empresa',
	'PHPSHOP_STORE_FORM_ADDRESS_1' => 'Morada 1',
	'PHPSHOP_STORE_FORM_ADDRESS_2' => 'Morada 2',
	'PHPSHOP_STORE_FORM_CITY' => 'Cidade',
	'PHPSHOP_STORE_FORM_STATE' => 'Distrito',
	'PHPSHOP_STORE_FORM_COUNTRY' => 'País',
	'PHPSHOP_STORE_FORM_ZIP' => 'Código Postal',
	'PHPSHOP_STORE_FORM_CURRENCY' => 'Moeda',
	'PHPSHOP_STORE_FORM_LAST_NAME' => 'Sobrenome',
	'PHPSHOP_STORE_FORM_FIRST_NAME' => 'Nome',
	'PHPSHOP_STORE_FORM_MIDDLE_NAME' => 'Nome do Meio',
	'PHPSHOP_STORE_FORM_TITLE' => 'Título',
	'PHPSHOP_STORE_FORM_PHONE_1' => 'Telefone 1',
	'PHPSHOP_STORE_FORM_PHONE_2' => 'Telefone 2',
	'PHPSHOP_STORE_FORM_DESCRIPTION' => 'Descrição',
	'PHPSHOP_PAYMENT_METHOD_LIST_LBL' => 'Lista de Métodos de Pagamento',
	'PHPSHOP_PAYMENT_METHOD_LIST_NAME' => 'Nome',
	'PHPSHOP_PAYMENT_METHOD_LIST_CODE' => 'Código',
	'PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP' => 'Grupo de Cliente',
	'PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR' => 'Cybercash',
	'PHPSHOP_PAYMENT_METHOD_FORM_LBL' => 'Formulario Método de Pagamento',
	'PHPSHOP_PAYMENT_METHOD_FORM_NAME' => 'Nome Formulario de Pagamento',
	'PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP' => 'Grupo de Cliente',
	'PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT' => 'Desconto',
	'PHPSHOP_PAYMENT_METHOD_FORM_CODE' => 'Código',
	'PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER' => 'Listar Encomendas',
	'PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR' => 'Usar Cybercash',
	'PHPSHOP_PAYMENT_FORM_CC' => 'Cartão de Crédito',
	'PHPSHOP_PAYMENT_FORM_USE_PP' => 'Use processador de pagamento',
	'PHPSHOP_PAYMENT_FORM_BANK_DEBIT' => 'Débito Bancário',
	'PHPSHOP_PAYMENT_FORM_AO' => 'Apenas a Morada',
	'PHPSHOP_STATISTIC_STATISTICS' => 'Estatisticas',
	'PHPSHOP_STATISTIC_CUSTOMERS' => 'Clientes',
	'PHPSHOP_STATISTIC_ACTIVE_PRODUCTS' => 'Produtos Activos',
	'PHPSHOP_STATISTIC_INACTIVE_PRODUCTS' => 'Produtos inactivos',
	'PHPSHOP_STATISTIC_NEW_ORDERS' => 'Novas Encomendas',
	'PHPSHOP_STATISTIC_NEW_CUSTOMERS' => 'Novos Clientes',
	'PHPSHOP_CREDITCARD_NAME' => 'Nome do Cartão de Crédito',
	'PHPSHOP_CREDITCARD_CODE' => 'Cartão de Crédito - Código Pequeno',
	'PHPSHOP_YOUR_STORE' => 'A sua Loja',
	'PHPSHOP_CONTROL_PANEL' => 'Painel de Controlo',
	'PHPSHOP_CHANGE_PASSKEY_FORM' => 'Mostrar/Alterar a Password/Chave de Transacção',
	'PHPSHOP_TYPE_PASSWORD' => 'Por favor escreva a sua Password',
	'PHPSHOP_CURRENT_TRANSACTION_KEY' => 'Chave de Transacção Actual',
	'PHPSHOP_CHANGE_PASSKEY_SUCCESS' => 'Chave de Transacção foi alterada co sucesso.',
	'VM_PAYMENT_CLASS_NAME' => 'Nome da Classe de Pagamento',
	'VM_PAYMENT_CLASS_NAME_TIP' => '(e.g. <strong>ps_netbanx</strong>) :<br />
Em uso: ps_payment<br />
<i>Deixe em branco se você não tem certeza do que deve preencher!</i>',
	'VM_PAYMENT_EXTRAINFO' => 'Informação extra de Pagamento',
	'VM_PAYMENT_EXTRAINFO_TIP' => 'É mostrada na Pagina de Confirmação da Encomenda. Pode ser: Código HTML Forma de Pagamento do Serviço, Sugestões ao cliente etc.',
	'VM_PAYMENT_ACCEPTED_CREDITCARDS' => 'Tipos de cartão de crédito aceites',
	'VM_PAYMENT_METHOD_DISCOUNT_TIP' => 'Para transformar o desconto em pagamento, use um valor negativo aqui (Examplo: <strong>-2.00</strong>).',
	'VM_PAYMENT_METHOD_DISCOUNT_MAX_AMOUNT' => 'Montante máximo desconto',
	'VM_PAYMENT_METHOD_DISCOUNT_MIN_AMOUNT' => 'Montante mínimo desconto',
	'VM_PAYMENT_FORM_FORMBASED' => 'Formulário em HTML (ex. PayPal)',
	'VM_ORDER_EXPORT_MODULE_LIST_LBL' => 'Lista de Módulos esportação encomendas',
	'VM_ORDER_EXPORT_MODULE_LIST_NAME' => 'Nome',
	'VM_ORDER_EXPORT_MODULE_LIST_DESC' => 'Descrição',
	'VM_STORE_FORM_ACCEPTED_CURRENCIES' => 'Listagem de moedas aceites',
	'VM_STORE_FORM_ACCEPTED_CURRENCIES_TIP' => 'Esta lista define todas as moedas que você aceita quando as pessoas estão a comprar qualquer coisa na sua loja. <strong>Nota:</strong> Todas as moedas selecionadas aqui podem ser usadas nas Compras! Se você não quiser, basta selecionar a moeda do seu país (=por defeito).',
	'VM_EXPORT_MODULE_FORM_LBL' => 'Módulo de Esportação',
	'VM_EXPORT_MODULE_FORM_NAME' => 'Nome do Módulo de Exporttação',
	'VM_EXPORT_MODULE_FORM_DESC' => 'Descrição',
	'VM_EXPORT_CLASS_NAME' => 'Nome da Classe de Exportação',
	'VM_EXPORT_CLASS_NAME_TIP' => '(ex. <strong>ps_orders_csv</strong>) :<br /> Por Defeito: ps_xmlexport<br /> <i>Deixe em branco se você não tem certeza do que deve preencher!</i>',
	'VM_EXPORT_CONFIG' => 'Configuração extra de Exportação',
	'VM_EXPORT_CONFIG_TIP' => 'Definir a configuração para exportação ou definir módulos adicionais de configuração. O código deve ser PHP-válido.',
	'VM_SHIPPING_MODULE_LIST_NAME' => 'Nome',
	'VM_SHIPPING_MODULE_LIST_E_VERSION' => 'Versão',
	'VM_SHIPPING_MODULE_LIST_HEADER_AUTHOR' => 'Autor',
	'PHPSHOP_STORE_ADDRESS_FORMAT' => 'Formato da Morada da Loja',
	'PHPSHOP_STORE_ADDRESS_FORMAT_TIP' => 'Você pode usar as seguintes parametros aqui',
	'PHPSHOP_STORE_DATE_FORMAT' => 'Formato da Data',
	'VM_PAYMENT_METHOD_ID_NOT_PROVIDED' => 'Erro: Código do método de Pagamento não foi fornecido.',
	'VM_SHIPPING_MODULE_CONFIG_LBL' => 'Configuração do Módulo de Envio',
	'VM_SHIPPING_MODULE_CLASSERROR' => 'Não foi possível instanciar Classe {shipping_module}'
); $VM_LANG->initModule( 'store', $langvars );
?>