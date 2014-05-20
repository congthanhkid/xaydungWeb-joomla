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
	'PHPSHOP_NO_CUSTOMER' => 'Lo siento, pero usted no es un cliente registrado.<BR>
                                    Por favor, proceda a registrarse en nuestra tienda.<BR>
                                    Gracias.',
	'PHPSHOP_THANKYOU' => 'Gracias por su pedido.',
	'PHPSHOP_EMAIL_SENDTO' => 'Un correo de confirmacion le ha sido enviado a',
	'PHPSHOP_CHECKOUT_NEXT' => 'Pr�ximo',
	'PHPSHOP_CHECKOUT_CONF_BILLINFO' => 'Informaci�n de Factura',
	'PHPSHOP_CHECKOUT_CONF_COMPANY' => 'Compa�ia',
	'PHPSHOP_CHECKOUT_CONF_NAME' => 'Nombre',
	'PHPSHOP_CHECKOUT_CONF_ADDRESS' => 'Direcci�n',
	'PHPSHOP_CHECKOUT_CONF_EMAIL' => 'Correo Electr�nico',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO' => 'Informaci�n del Env�o',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY' => 'Compa�ia',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME' => 'Nombre',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS' => 'Direcci�n',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE' => 'Tel�fono',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX' => 'Fax',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD' => 'M�todo de Pago',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO' => 'Informaci�n requerida cuando Pago v�a Tarjeta de Cr�dito es seleccionada',
	'PHPSHOP_PAYPAL_THANKYOU' => 'Gracias por su pago. La transacci�n est� aceptada.  Recibir� un E-mail de confirmaci�n para la transacci�n de PayPal.
        ahora puede continuar o ingresar a  <a href=http://www.paypal.com>www.paypal.com</a> para ver el detalle de la transacci�n.',
	'PHPSHOP_PAYPAL_ERROR' => 'Ha ocurrido un error durante de su proceso de transacci�n. No ha podido actualizado su pedido.',
	'PHPSHOP_THANKYOU_SUCCESS' => 'Se ha grabado correctamente su pedido',
	'VM_CHECKOUT_TITLE_TAG' => 'Checkout: Step %s of %s',
	'VM_CHECKOUT_ORDERIDNOTSET' => 'Order ID is not set or emtpy!',
	'VM_CHECKOUT_FAILURE' => 'Failure',
	'VM_CHECKOUT_SUCCESS' => 'Success',
	'VM_CHECKOUT_PAGE_GATEWAY_EXPLAIN_1' => 'This page is located on the webshop\'s website.',
	'VM_CHECKOUT_PAGE_GATEWAY_EXPLAIN_2' => 'The gateway execute the page on the website, and the shows the result SSL Encrypted.',
	'VM_CHECKOUT_CCV_CODE' => 'Credit Card Validation Code',
	'VM_CHECKOUT_CCV_CODE_TIPTITLE' => 'What\'s the Credit Card Validation Code?',
	'VM_CHECKOUT_MD5_FAILED' => 'MD5 Check failed',
	'VM_CHECKOUT_ORDERNOTFOUND' => 'Order not found',
	'PHPSHOP_EPAY_PAYMENT_CARDTYPE' => 'The payment is
created by %s <img
src="/components/com_virtuemart/shop_image/ps_image/epay_images/%s"
border="0">'
); $VM_LANG->initModule( 'checkout', $langvars );
?>