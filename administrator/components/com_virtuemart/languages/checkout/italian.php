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
	'PHPSHOP_NO_CUSTOMER' => 'Non hai mai acquistato. Inserisci le informazioni per la fatturazione.',
	'PHPSHOP_THANKYOU' => 'Grazie per l\'ordine.',
	'PHPSHOP_EMAIL_SENDTO' => 'Una email di conferma è stata spedita a',
	'PHPSHOP_CHECKOUT_NEXT' => 'Succ',
	'PHPSHOP_CHECKOUT_CONF_BILLINFO' => 'Dati Fattura',
	'PHPSHOP_CHECKOUT_CONF_COMPANY' => 'Azienda',
	'PHPSHOP_CHECKOUT_CONF_NAME' => 'Nome',
	'PHPSHOP_CHECKOUT_CONF_ADDRESS' => 'Indirizzo',
	'PHPSHOP_CHECKOUT_CONF_EMAIL' => 'Email',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO' => 'Dati Spedizione',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY' => 'Azienda',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME' => 'Nome',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS' => 'Indirizzo',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE' => 'Telefono',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX' => 'Fax',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD' => 'Tipo di Pagamento',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO' => 'informazioni richieste per il Pagamento con Carta di Credito',
	'PHPSHOP_PAYPAL_THANKYOU' => 'Grazie per il pagamento.
        La transazione ha avuto successo. Riceverai una e-mail di conferma della transazione da parte di PayPal.
        Ora puoi continuare nella navigazione o autenticarti in <a href=http://www.paypal.com>www.paypal.com</a> per controllare i dettagli della transazione.',
	'PHPSHOP_PAYPAL_ERROR' => 'C\'è stato un errore nell\'elaborazione della transazione. Lo stato del tuo ordine non può essere aggiornato.',
	'PHPSHOP_THANKYOU_SUCCESS' => 'Il tuo ordine è stato inviato con successo!',
	'VM_CHECKOUT_TITLE_TAG' => 'Cassa: Passaggio %s di %s',
	'VM_CHECKOUT_ORDERIDNOTSET' => 'ID Ordine non impostato o vuoto!',
	'VM_CHECKOUT_FAILURE' => 'Fallimento',
	'VM_CHECKOUT_SUCCESS' => 'Successo',
	'VM_CHECKOUT_PAGE_GATEWAY_EXPLAIN_1' => 'Questa pagina è posizionata nel sito web del negozio.',
	'VM_CHECKOUT_PAGE_GATEWAY_EXPLAIN_2' => 'Il gateway esegue la pagina sul sito web, e mostra il risultato crittografato SSL.',
	'VM_CHECKOUT_CCV_CODE' => 'Codice di Verifica Carta di Credito',
	'VM_CHECKOUT_CCV_CODE_TIPTITLE' => 'Cosa è il Codice di Verifica Carta di Credito?',
	'VM_CHECKOUT_MD5_FAILED' => 'Controllo MD5 fallito',
	'VM_CHECKOUT_ORDERNOTFOUND' => 'Ordine non trovato',
	'PHPSHOP_EPAY_PAYMENT_CARDTYPE' => 'The payment is
created by %s <img
src="/components/com_virtuemart/shop_image/ps_image/epay_images/%s"
border="0">'
); $VM_LANG->initModule( 'checkout', $langvars );
?>