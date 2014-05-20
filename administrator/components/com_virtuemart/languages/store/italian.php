<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : italian.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'PHPSHOP_USER_FORM_LAST_NAME' => 'Cognome',
	'PHPSHOP_USER_FORM_MIDDLE_NAME' => 'Secondo Nome',
	'PHPSHOP_USER_FORM_COMPANY_NAME' => 'Ragione Sociale',
	'PHPSHOP_USER_FORM_ADDRESS_1' => 'Indirizzo 1',
	'PHPSHOP_USER_FORM_ADDRESS_2' => 'Indirizzo 2',
	'PHPSHOP_USER_FORM_CITY' => 'Città',
	'PHPSHOP_USER_FORM_STATE' => 'Provincia',
	'PHPSHOP_USER_FORM_ZIP' => 'CAP',
	'PHPSHOP_USER_FORM_COUNTRY' => 'Nazione',
	'PHPSHOP_USER_FORM_PHONE' => 'Telefono',
	'PHPSHOP_USER_FORM_PHONE2' => 'Cellulare',
	'PHPSHOP_USER_FORM_FAX' => 'Fax',
	'PHPSHOP_ISSHIP_LIST_PUBLISH_LBL' => 'Attivo',
	'PHPSHOP_ISSHIP_FORM_UPDATE_LBL' => 'Configura un Tipo di Spedizione',
	'PHPSHOP_STORE_FORM_FULL_IMAGE' => 'Immagine',
	'PHPSHOP_STORE_FORM_UPLOAD' => 'Carica Immagine',
	'PHPSHOP_STORE_FORM_STORE_NAME' => 'Nome Negozio',
	'PHPSHOP_STORE_FORM_COMPANY_NAME' => 'Ragione Sociale Negozio',
	'PHPSHOP_STORE_FORM_ADDRESS_1' => 'Indirizzo 1',
	'PHPSHOP_STORE_FORM_ADDRESS_2' => 'Indirizzo 2',
	'PHPSHOP_STORE_FORM_CITY' => 'Città',
	'PHPSHOP_STORE_FORM_STATE' => 'Provincia',
	'PHPSHOP_STORE_FORM_COUNTRY' => 'Nazione',
	'PHPSHOP_STORE_FORM_ZIP' => 'CAP',
	'PHPSHOP_STORE_FORM_CURRENCY' => 'Valuta',
	'PHPSHOP_STORE_FORM_LAST_NAME' => 'Cognome',
	'PHPSHOP_STORE_FORM_FIRST_NAME' => 'Nome',
	'PHPSHOP_STORE_FORM_MIDDLE_NAME' => 'Secondo Nome',
	'PHPSHOP_STORE_FORM_TITLE' => 'Titolo',
	'PHPSHOP_STORE_FORM_PHONE_1' => 'Tel. 1',
	'PHPSHOP_STORE_FORM_PHONE_2' => 'Tel. 2',
	'PHPSHOP_STORE_FORM_DESCRIPTION' => 'Descrizione',
	'PHPSHOP_PAYMENT_METHOD_LIST_LBL' => 'Lista Tipi di Pagamento',
	'PHPSHOP_PAYMENT_METHOD_LIST_NAME' => 'Nome',
	'PHPSHOP_PAYMENT_METHOD_LIST_CODE' => 'Codice',
	'PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP' => 'Gruppo Clienti',
	'PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR' => 'Usare un processore di pagamenti <br/ >(es. authorize.net) ?',
	'PHPSHOP_PAYMENT_METHOD_FORM_LBL' => 'Modulo Tipo di Pagamento',
	'PHPSHOP_PAYMENT_METHOD_FORM_NAME' => 'Nome Modulo di Pagamento',
	'PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP' => 'Gruppo Clienti',
	'PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT' => 'Sconto',
	'PHPSHOP_PAYMENT_METHOD_FORM_CODE' => 'Codice',
	'PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER' => 'Ordine Lista',
	'PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR' => 'Usare un processore di pagamenti <br/ >(es. authorize.net) ?',
	'PHPSHOP_PAYMENT_FORM_CC' => 'Carta di Credito',
	'PHPSHOP_PAYMENT_FORM_USE_PP' => 'Usa un Processore di Pagamento',
	'PHPSHOP_PAYMENT_FORM_BANK_DEBIT' => 'Debito Bancario',
	'PHPSHOP_PAYMENT_FORM_AO' => 'Solo Indirizzo',
	'PHPSHOP_STATISTIC_STATISTICS' => 'Statistiche',
	'PHPSHOP_STATISTIC_CUSTOMERS' => 'Clienti',
	'PHPSHOP_STATISTIC_ACTIVE_PRODUCTS' => 'Prodotti attivi',
	'PHPSHOP_STATISTIC_INACTIVE_PRODUCTS' => 'Prodotti non attivi',
	'PHPSHOP_STATISTIC_NEW_ORDERS' => 'Nuovi Ordini',
	'PHPSHOP_STATISTIC_NEW_CUSTOMERS' => 'Nuovi Clienti',
	'PHPSHOP_CREDITCARD_NAME' => 'Nome Carta di Credito',
	'PHPSHOP_CREDITCARD_CODE' => 'Carta di Credito - Codice Breve',
	'PHPSHOP_YOUR_STORE' => 'Il Tuo Negozio',
	'PHPSHOP_CONTROL_PANEL' => 'Pannello di Controllo',
	'PHPSHOP_CHANGE_PASSKEY_FORM' => 'Mostra/Modifica la Password/Transaction Key',
	'PHPSHOP_TYPE_PASSWORD' => 'Inserisci la tua Password Utente',
	'PHPSHOP_CURRENT_TRANSACTION_KEY' => 'Transaction Key Attuale',
	'PHPSHOP_CHANGE_PASSKEY_SUCCESS' => 'Transaction key modificata con successo.',
	'VM_PAYMENT_CLASS_NAME' => 'Nome classe di pagamento',
	'VM_PAYMENT_CLASS_NAME_TIP' => '(es. <strong>ps_netbanx</strong>): <br />
        predefinito: ps_payment<br />
        <em>Scegli ps_payment se non sei sicuro!</em>',
	'VM_PAYMENT_EXTRAINFO' => 'Informazioni Aggiuntive Pagamento',
	'VM_PAYMENT_EXTRAINFO_TIP' => 'Viene mostrato nella pagina di conferma dell\'ordine. Può essere: codice HTML dal tuo fornitore di servizi di pagamento, suggerimenti per il cliente, ecc.',
	'VM_PAYMENT_ACCEPTED_CREDITCARDS' => 'Tipi di carte di credito accettate',
	'VM_PAYMENT_METHOD_DISCOUNT_TIP' => 'Per trasformare lo sconto in una tassa, utilizza un valore negativo(esempio: <strong>-2.00</strong>).',
	'VM_PAYMENT_METHOD_DISCOUNT_MAX_AMOUNT' => 'Importo massimo sconto',
	'VM_PAYMENT_METHOD_DISCOUNT_MIN_AMOUNT' => 'Importo minimo sconto',
	'VM_PAYMENT_FORM_FORMBASED' => 'Basato su moduli HTML (es. PayPal)',
	'VM_ORDER_EXPORT_MODULE_LIST_LBL' => 'Lista Moduli di Esportazione',
	'VM_ORDER_EXPORT_MODULE_LIST_NAME' => 'Nome',
	'VM_ORDER_EXPORT_MODULE_LIST_DESC' => 'Descrizione',
	'VM_STORE_FORM_ACCEPTED_CURRENCIES' => 'Lista delle valute accettate',
	'VM_STORE_FORM_ACCEPTED_CURRENCIES_TIP' => 'Questa lista definisce tutte le valute che accetti dai clienti che comprano qualcosa nel tuo negozio. <strong>Nota:</strong> tutte le valute selezionate qui potranno essere utilizzate alla cassa! Se non vuoi questo, seleziona solo la valuta del tuo Paese (=default).',
	'VM_EXPORT_MODULE_FORM_LBL' => 'Dettagli Modulo di Esportazione',
	'VM_EXPORT_MODULE_FORM_NAME' => 'Nome modulo di esportazione',
	'VM_EXPORT_MODULE_FORM_DESC' => 'Descrizione',
	'VM_EXPORT_CLASS_NAME' => 'Nome classe di esportazione',
	'VM_EXPORT_CLASS_NAME_TIP' => '(es. <strong>ps_orders_csv</strong>): <br /> predefinito: ps_xmlexport<br /> <i>Lascia il valore predefinito se non sei sicuro!</i>',
	'VM_EXPORT_CONFIG' => 'Configurazione aggiuntiva esportazione',
	'VM_EXPORT_CONFIG_TIP' => 'Imposta la configurazione di esportazione per i moduli esportazione definiti dall\'utente, oppure definisce configurazione addizionali. Deve essere un codice PHP valido.',
	'VM_SHIPPING_MODULE_LIST_NAME' => 'Nome',
	'VM_SHIPPING_MODULE_LIST_E_VERSION' => 'Versione',
	'VM_SHIPPING_MODULE_LIST_HEADER_AUTHOR' => 'Autore',
	'PHPSHOP_STORE_ADDRESS_FORMAT' => 'Formato Indirizzo Negozio',
	'PHPSHOP_STORE_ADDRESS_FORMAT_TIP' => 'Puoi usare i seguenti tag',
	'PHPSHOP_STORE_DATE_FORMAT' => 'Formato Data Negozio',
	'VM_PAYMENT_METHOD_ID_NOT_PROVIDED' => 'Errore: non è stato fornito l\'ID Metodo di Pagamento.',
	'VM_SHIPPING_MODULE_CONFIG_LBL' => 'Configurazione Modulo Spedizione',
	'VM_SHIPPING_MODULE_CLASSERROR' => 'Impossibile istanziare la Classe {shipping_module}'
); $VM_LANG->initModule( 'store', $langvars );
?>