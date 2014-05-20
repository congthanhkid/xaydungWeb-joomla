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
	'PHPSHOP_BROWSE_LBL' => 'Navigazione Catalogo',
	'PHPSHOP_FLYPAGE_LBL' => 'Dettagli',
	'PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT' => 'Modifica questo Prodotto',
	'PHPSHOP_DOWNLOADS_START' => 'Inizia Download',
	'PHPSHOP_DOWNLOADS_INFO' => 'Inserisci il Download-ID che hai ricevuto nella e-mail e clicca \'Inizia Download\'.',
	'PHPSHOP_WAITING_LIST_MESSAGE' => 'Inserisci di seguito il tuo indirizzo e-mail per essere avvisato quando il prodotto sarà di nuovo disponibile.                                          Il tuo indirizzo e-mail non verrà ceduto in alcun modo a terzi e verrà utilizzato all\'unico scopo di avvisarti che il prodotto richiesto è di nuovo disponibile.<br /><br />Grazie!',
	'PHPSHOP_WAITING_LIST_THANKS' => 'Grazie per l\'attesa! <br />Ti faremo sapere appena possibile.',
	'PHPSHOP_WAITING_LIST_NOTIFY_ME' => 'Avvisatemi!',
	'PHPSHOP_SEARCH_ALL_CATEGORIES' => 'Cerca in Tutte le Categorie',
	'PHPSHOP_SEARCH_ALL_PRODINFO' => 'Cerca in tutti i campi del prodotto',
	'PHPSHOP_SEARCH_PRODNAME' => 'Cerca solo nel nome del prodotto',
	'PHPSHOP_SEARCH_MANU_VENDOR' => 'Solo Produttore/Venditore',
	'PHPSHOP_SEARCH_DESCRIPTION' => 'Solo descrizione del prodotto',
	'PHPSHOP_SEARCH_AND' => 'AND',
	'PHPSHOP_SEARCH_NOT' => 'NOT',
	'PHPSHOP_SEARCH_TEXT1' => 'Il primo menù a tendina permette di selezionare una categoria in modo tale da limitare ad essa la ricerca. Il primo menù a tendina permette di limitare la ricerca ad un particolare dato associato al prodotto (es. Nome). Una volta selezionate queste opzioni (o lasciato l\'opzione predefinita TUTTI), inserisci la parola chiave da cercare. ',
	'PHPSHOP_SEARCH_TEXT2' => 'Puoi ulteriormente affinare la ricerca aggiungendo una seconda parola chiave e selezionando gli operatori AND o NOT. AND comporta che entrambe le parole devono essere presenti affinché il prodotto venga visualizzato nei risultati. NOT implica che il prodotto viene visualizzato solo se la prima parola è presente e la seconda no.',
	'PHPSHOP_CONTINUE_SHOPPING' => 'Continua lo Shopping',
	'PHPSHOP_AVAILABLE_IMAGES' => 'Immagini Disponibili per',
	'PHPSHOP_BACK_TO_DETAILS' => 'Torna ai Dettagli del Prodotto',
	'PHPSHOP_IMAGE_NOT_FOUND' => 'Immagine non trovata!',
	'PHPSHOP_PARAMETER_SEARCH_TEXT1' => 'Vuoi cercare i prodotti attraverso parametri tecnici?<br />Puoi utilizzare questi moduli preimpostati:',
	'PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE' => 'Siamo spiacenti. Attualmente non ci sono criteri di ricerca preimpostati.',
	'PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE' => 'Siamo spiacenti. Non ci sono prodotti pubblicati che soddisfano questi criteri di ricerca.',
	'PHPSHOP_PARAMETER_SEARCH_IS_LIKE' => 'è simile',
	'PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE' => 'non è simile',
	'PHPSHOP_PARAMETER_SEARCH_FULLTEXT' => 'ricerca full-text',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL' => 'tutti i selezionati',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY' => 'qualsiasi selezionato',
	'PHPSHOP_PARAMETER_SEARCH_RESET_FORM' => 'Azzera Modulo',
	'PHPSHOP_PRODUCT_NOT_FOUND' => 'Ci dispiace, ma il Prodotto che hai richiesto non è stato trovato!',
	'PHPSHOP_PRODUCT_PACKAGING1' => 'Numero di {unit} nell\'imballo:',
	'PHPSHOP_PRODUCT_PACKAGING2' => 'Numero di {unit} per scatola:',
	'PHPSHOP_CART_PRICE_PER_UNIT' => 'Prezzo per Unità',
	'VM_PRODUCT_ENQUIRY_LBL' => 'Chiedi un\'informazione riguardo questo prodotto',
	'VM_RECOMMEND_FORM_LBL' => 'Segnala questo prodotto a un amico',
	'PHPSHOP_EMPTY_YOUR_CART' => 'Svuota Carrello',
	'VM_RETURN_TO_PRODUCT' => 'Ritorna al prodotto',
	'EMPTY_CATEGORY' => 'Questa Categoria è attualmente vuota.',
	'ENQUIRY' => 'Richiesta',
	'NAME_PROMPT' => 'Inserisci il tuo nome',
	'EMAIL_PROMPT' => 'Indirizzo e-mail',
	'MESSAGE_PROMPT' => 'Inserisci il tuo messaggio',
	'SEND_BUTTON' => 'Invia',
	'THANK_MESSAGE' => 'Grazie per la tua richiesta. Ti contatteremo appena possibile.',
	'PROMPT_CLOSE' => 'Chiudi',
	'VM_RECOVER_CART_REPLACE' => 'Sostituisci il carrello con il carrello salvato',
	'VM_RECOVER_CART_MERGE' => 'Aggiungi il carrello salvato al carrello attuale',
	'VM_RECOVER_CART_DELETE' => 'Cancella il carrello salvato',
	'VM_EMPTY_YOUR_CART_TIP' => 'Azzera tutto il contenuto del carrello',
	'VM_SAVED_CART_TITLE' => 'Carrello Salvato',
	'VM_SAVED_CART_RETURN' => 'Torna'
); $VM_LANG->initModule( 'shop', $langvars );
?>
