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
	'PHPSHOP_BROWSE_LBL' => 'Overzicht',
	'PHPSHOP_FLYPAGE_LBL' => 'Productdetails',
	'PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT' => 'Wijzig dit product',
	'PHPSHOP_DOWNLOADS_START' => 'Begin met de download',
	'PHPSHOP_DOWNLOADS_INFO' => 'Vul het Download-ID in dat u heeft gekregen via e-mail en klik \'Begin met de download\'.',
	'PHPSHOP_WAITING_LIST_MESSAGE' => 'Voer uw e-mail adres in om bericht te krijgen wanneer dit product weer beschikbaar is. Wij zullen niet uw e-mail adres delen, verhuren, verkopen of voor andere doeleinden gebruiken dan alleen u op de hoogte te stellen wanneer het product weer beschikbaar is.<br /><br />Hartelijk dank!',
	'PHPSHOP_WAITING_LIST_THANKS' => 'Bedankt voor het wachten! <br />We zullen u zo snel mogelijk op de hoogte brengen als het product binnen is.',
	'PHPSHOP_WAITING_LIST_NOTIFY_ME' => 'Informeer me!',
	'PHPSHOP_SEARCH_ALL_CATEGORIES' => 'Doorzoek alle categorieën',
	'PHPSHOP_SEARCH_ALL_PRODINFO' => 'Doorzoek alle productinformatie',
	'PHPSHOP_SEARCH_PRODNAME' => 'Alleen productnaam',
	'PHPSHOP_SEARCH_MANU_VENDOR' => 'Alleen fabrikant/verkoper',
	'PHPSHOP_SEARCH_DESCRIPTION' => 'Alleen productomschrijving',
	'PHPSHOP_SEARCH_AND' => 'en',
	'PHPSHOP_SEARCH_NOT' => 'niet',
	'PHPSHOP_SEARCH_TEXT1' => 'De eerste drop-down lijst geeft u de mogelijkheid om een categorie te selecteren waarin u wilt zoeken. 
        Met de tweede drop-down lijst kunt u aangeven in welke productinformatie u wilt zoeken (bv. Naam). 
        Wanneer u een keuze genaakt heeft (of het bij de standaard ALLES laat), vult u een zoekwoord in.',
	'PHPSHOP_SEARCH_TEXT2' => 'U kunt de zoek aktie nog verder verfijnen door een extra zoekwoord toe te voegen en een keuze te maken uit de EN of NIET optie. 
        Selecteren van EN houdt in dat beide woorden aanwezig moeten zijn voordat een product gevonden wordt. 
        Selecteren van NIET houdt in dat alleen producten getoont worden waar het eerste zoekwoord zich in bevind en het tweede zoekwoord niet.',
	'PHPSHOP_CONTINUE_SHOPPING' => 'Verder winkelen',
	'PHPSHOP_AVAILABLE_IMAGES' => 'Beschikbare afbeeldingen voor',
	'PHPSHOP_BACK_TO_DETAILS' => 'Terug naar de productdetails',
	'PHPSHOP_IMAGE_NOT_FOUND' => 'Afbeelding niet gevonden!',
	'PHPSHOP_PARAMETER_SEARCH_TEXT1' => 'U kunt producten zoeken d.m.v. technische parameters?<BR>U kunt elk gewenst formulier gebruiken:',
	'PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE' => 'Er is geen categorie gevonden met deze naam.',
	'PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE' => 'Er is geen product gevonden met deze naam.',
	'PHPSHOP_PARAMETER_SEARCH_IS_LIKE' => 'Hetzelfde als',
	'PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE' => 'Is niet hetzelfde als',
	'PHPSHOP_PARAMETER_SEARCH_FULLTEXT' => 'Volledige tekst doorzoeken',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL' => 'Alle geselecteerde',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY' => 'Enkel geselecteerde',
	'PHPSHOP_PARAMETER_SEARCH_RESET_FORM' => 'Reset formulier',
	'PHPSHOP_PRODUCT_NOT_FOUND' => 'Sorry, maar het product wat u zoekt is niet gevonden!',
	'PHPSHOP_PRODUCT_PACKAGING1' => 'Aantal per verpakking:',
	'PHPSHOP_PRODUCT_PACKAGING2' => 'Aantal per  doos:',
	'PHPSHOP_CART_PRICE_PER_UNIT' => 'Prijs per product',
	'VM_PRODUCT_ENQUIRY_LBL' => 'Stel een vraag over dit product',
	'VM_RECOMMEND_FORM_LBL' => 'Beveel dit product aan bij een vriend',
	'PHPSHOP_EMPTY_YOUR_CART' => 'Leeg mandje',
	'VM_RETURN_TO_PRODUCT' => 'Keer terug naar het product',
	'EMPTY_CATEGORY' => 'Deze categorie is momenteel leeg.',
	'ENQUIRY' => 'Aanvraag',
	'NAME_PROMPT' => 'Vul uw naam in',
	'EMAIL_PROMPT' => 'E-mail Adres',
	'MESSAGE_PROMPT' => 'Vul uw bericht in',
	'SEND_BUTTON' => 'Versturen',
	'THANK_MESSAGE' => 'Hartelijk dank voor uw aanvraag. Wij nemen zo snel mogelijk contact met u op.',
	'PROMPT_CLOSE' => 'Sluiten',
	'VM_RECOVER_CART_REPLACE' => 'Vervang mandje door opgeslagen mandje',
	'VM_RECOVER_CART_MERGE' => 'Voeg opgeslagen mandje toe aan huidig mandje',
	'VM_RECOVER_CART_DELETE' => 'Verwijder opgeslagen mandje',
	'VM_EMPTY_YOUR_CART_TIP' => 'Verwijder alle artikelen uit het mandje'
); $VM_LANG->initModule( 'shop', $langvars );
?>