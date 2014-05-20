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
	'PHPSHOP_BROWSE_LBL' => 'Übersicht',
	'PHPSHOP_FLYPAGE_LBL' => 'Produktdetails',
	'PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT' => 'Dieses Produkt ändern',
	'PHPSHOP_DOWNLOADS_START' => 'Download starten',
	'PHPSHOP_DOWNLOADS_INFO' => 'Bitte geben Sie hier Ihre per e-mail erhaltene Download-ID ein und klicken Sie anschließend auf "Download starten".',
	'PHPSHOP_WAITING_LIST_MESSAGE' => 'Bitte tragen Sie Ihre email-Adresse ein, um benachrichtigt zu werden, wenn das Produkt wieder verfügbar ist. 
                                                                        Wir werden Ihre email-Adresse ausschließlich zum Zwecke der Benachrichtigung verwenden.
                                                                        <br /><br />Vielen Dank!',
	'PHPSHOP_WAITING_LIST_THANKS' => 'Vielen Dank! <br />Wir werden Sie benachrichtigen, sobald das Produkt wieder verfügbar ist.',
	'PHPSHOP_WAITING_LIST_NOTIFY_ME' => 'Benachrichtigen Sie mich',
	'PHPSHOP_SEARCH_ALL_CATEGORIES' => 'Alle Kategorien durchsuchen',
	'PHPSHOP_SEARCH_ALL_PRODINFO' => 'Alle Produktinformationen durchsuchen',
	'PHPSHOP_SEARCH_PRODNAME' => 'nur nach Produktnamen',
	'PHPSHOP_SEARCH_MANU_VENDOR' => 'nur nach Hersteller-Webseite',
	'PHPSHOP_SEARCH_DESCRIPTION' => 'nur nach Produktbeschreibung',
	'PHPSHOP_SEARCH_AND' => 'und',
	'PHPSHOP_SEARCH_NOT' => 'nicht',
	'PHPSHOP_SEARCH_TEXT1' => 'Die erste Auswahlliste lässt Sie eine Kategorie wählen, in der Sie ausschließlich suchen wollen. 
        In der zweiten Auswahlliste können Sie angeben, nach welcher Art von Produktdetails Sie suchen wollen.',
	'PHPSHOP_SEARCH_TEXT2' => 'Sie können die Suche durch Angabe eines zweiten Suchwortes verfeinern.
    Durch Auswahl von UND oder NICHT bestimmen Sie, ob das zweite Suchwort in den Produktdetails vorkommen muss,
    oder ob nur Produkte angezeigt werden sollen, die das zweite Suchwort NICHT enthalten.',
	'PHPSHOP_CONTINUE_SHOPPING' => 'zurück zum Shop',
	'PHPSHOP_AVAILABLE_IMAGES' => 'Verfügbare Bilder für',
	'PHPSHOP_BACK_TO_DETAILS' => 'zurück zu den Produktdetails',
	'PHPSHOP_IMAGE_NOT_FOUND' => 'Bild leider nicht gefunden!',
	'PHPSHOP_PARAMETER_SEARCH_TEXT1' => 'Anhand der Parametersuche kann man technische Parameter zum Filtern der Suchergebnisse verwenden. Bitte benutzen Sie dazu folgendes Formular:',
	'PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE' => 'Es wurde keine Kategorie zum durchsuchen gefunden.',
	'PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE' => 'Es wurde leider kein Produkttyp mit dem angegebenen Namen gefunden.',
	'PHPSHOP_PARAMETER_SEARCH_IS_LIKE' => 'ist wie',
	'PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE' => 'ist nicht wie',
	'PHPSHOP_PARAMETER_SEARCH_FULLTEXT' => 'Volltextsuche',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL' => 'Alle ausgewählten',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY' => 'Einzelne oder alle von den ausgewählten',
	'PHPSHOP_PARAMETER_SEARCH_RESET_FORM' => 'Formular zurücksetzen',
	'PHPSHOP_PRODUCT_NOT_FOUND' => 'Das angeforderte Produkt wurde nicht gefunden!',
	'PHPSHOP_PRODUCT_PACKAGING1' => 'Anzahl {unit} in der Verpackung',
	'PHPSHOP_PRODUCT_PACKAGING2' => 'Anzahl {unit} pr Paket:',
	'PHPSHOP_CART_PRICE_PER_UNIT' => 'Preis pro Einheit',
	'VM_PRODUCT_ENQUIRY_LBL' => 'Stellen Sie eine Frage zu diesem Produkt',
	'VM_RECOMMEND_FORM_LBL' => 'Empfehlen Sie dieses Produkt weiter',
	'PHPSHOP_EMPTY_YOUR_CART' => 'Empty Cart',
	'VM_RETURN_TO_PRODUCT' => 'Zurück zum Artikel',
	'EMPTY_CATEGORY' => 'This Category is currently empty.',
	'ENQUIRY' => 'Enquiry',
	'NAME_PROMPT' => 'Tragen Sie bitte ihren Namen ein.',
	'EMAIL_PROMPT' => 'E-mail Addresse',
	'MESSAGE_PROMPT' => 'Teilen Sie uns Ihre Wünsche mit.',
	'SEND_BUTTON' => 'Abschicken',
	'THANK_MESSAGE' => 'Vielen dank für ihre Nachricht. Wir werden sie so schnell es geht kontaktieren.',
	'PROMPT_CLOSE' => 'Close',
	'VM_RECOVER_CART_REPLACE' => 'Replace Cart with Saved Cart',
	'VM_RECOVER_CART_MERGE' => 'Add Saved Cart to Current Cart',
	'VM_RECOVER_CART_DELETE' => 'Delete Saved Cart',
	'VM_EMPTY_YOUR_CART_TIP' => 'Clear the cart of all contents',
	'VM_SAVED_CART_TITLE' => 'Saved Cart',
	'VM_SAVED_CART_RETURN' => 'Return'
); $VM_LANG->initModule( 'shop', $langvars );
?>