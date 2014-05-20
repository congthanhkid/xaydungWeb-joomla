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
	'CHARSET' => 'ISO-8859-15',
	'PHPSHOP_BROWSE_LBL' => 'Parcourir',
	'PHPSHOP_FLYPAGE_LBL' => 'Détails du produit',
	'PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT' => 'Editer ce produit',
	'PHPSHOP_DOWNLOADS_START' => 'Démarrer le téléchargement',
	'PHPSHOP_DOWNLOADS_INFO' => 'Veuillez saisir le numéro de téléchargement qui vous a été communiqué par email, puis cliquez sur "Démarrer le téléchargement".',
	'PHPSHOP_WAITING_LIST_MESSAGE' => 'Veuillez saisir votre adresse email pour être prévenu(e) dès que ce produit sera de nouveau disponible en stock. 
Votre adresse email ne sera en aucune manière cédée, vendue ou partagée de quelques manière que ce soit autre que pour vous avertir lors de nos rétablissements de stocks.<br /><br />Merci !',
	'PHPSHOP_WAITING_LIST_THANKS' => 'Merci pour votre patience! <br />Nous vous ferons savoir dès que ce produit sera à nouveau disponible en stock.',
	'PHPSHOP_WAITING_LIST_NOTIFY_ME' => 'M\'informer !',
	'PHPSHOP_SEARCH_ALL_CATEGORIES' => 'Chercher dans toutes les catégories',
	'PHPSHOP_SEARCH_ALL_PRODINFO' => 'Chercher dans toutes les informations produits',
	'PHPSHOP_SEARCH_PRODNAME' => 'Seulement les noms de produits',
	'PHPSHOP_SEARCH_MANU_VENDOR' => 'Seulement les fabricants/vendeurs',
	'PHPSHOP_SEARCH_DESCRIPTION' => 'Seulement les descriptions produits',
	'PHPSHOP_SEARCH_AND' => 'ET',
	'PHPSHOP_SEARCH_NOT' => 'PAS',
	'PHPSHOP_SEARCH_TEXT1' => 'La première liste déroulante vous permet de sélectionner une catégorie pour limiter votre recherche. La seconde liste déroulante vous permet de limiter votre recherche à une information particulière du produit (ex. Nom). 
           Une fois sélectionnée (ou laissée par défaut sur \'TOUS\'), saisissez votre mot-clé pour lancer la recherche. ',
	'PHPSHOP_SEARCH_TEXT2' => ' Vous pourrez ensuite affiner votre recherche en ajoutant des mots-clés et les opérateurs ET, PAS. 
           Choisir ET permet d\'obtenir des résultats contenant TOUS les mots-clés. 
           Choisir PAS permet d\'obtenir des résultats contenant les mots-clés du premier champ SAUF (à l\'exception de) ceux du second champ.',
	'PHPSHOP_CONTINUE_SHOPPING' => 'Continuer achats',
	'PHPSHOP_AVAILABLE_IMAGES' => 'Images disponibles pour',
	'PHPSHOP_BACK_TO_DETAILS' => 'Retour à la fiche produit',
	'PHPSHOP_IMAGE_NOT_FOUND' => 'Image non trouvée !',
	'PHPSHOP_PARAMETER_SEARCH_TEXT1' => 'Voulez-vous trouver des produits en rapport avec leurs paramètres techniques ?<BR>Vous pouvez utiliser un formulaire adéquat :',
	'PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE' => 'Désolé. Il n\'existe pas de catégorie pour les recherches.',
	'PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE' => 'Désolé.Il n\'y a pas de produits avec ce nom.
',
	'PHPSHOP_PARAMETER_SEARCH_IS_LIKE' => 'Contient',
	'PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE' => 'Ne Contient PAS',
	'PHPSHOP_PARAMETER_SEARCH_FULLTEXT' => 'Recherche texte entier',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL' => 'Tout Sélectionner',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY' => 'Quelques',
	'PHPSHOP_PARAMETER_SEARCH_RESET_FORM' => 'Effacer formulaire',
	'PHPSHOP_PRODUCT_NOT_FOUND' => 'Désolé, mais le produit que vous avez demandé n\'a pas été trouvé !',
	'PHPSHOP_PRODUCT_PACKAGING1' => 'Nombre de {unit}s dans l\'emballage',
	'PHPSHOP_PRODUCT_PACKAGING2' => 'Nombre de {unit}s dans le lot',
	'PHPSHOP_CART_PRICE_PER_UNIT' => 'Prix à l\'unité',
	'VM_PRODUCT_ENQUIRY_LBL' => 'Poser une question sur ce produit',
	'VM_RECOMMEND_FORM_LBL' => 'Recommander ce produit à un ami',
	'PHPSHOP_EMPTY_YOUR_CART' => 'Panier vide',
	'VM_RETURN_TO_PRODUCT' => 'Retour au produit',
	'EMPTY_CATEGORY' => 'Cette catégorie ne contient pas de produit.',
	'ENQUIRY' => 'Demande de renseignements',
	'NAME_PROMPT' => 'Entrer votre nom',
	'EMAIL_PROMPT' => 'Adresse eamil',
	'MESSAGE_PROMPT' => 'Ecrivez votre message',
	'SEND_BUTTON' => 'Envoyer',
	'THANK_MESSAGE' => '	
Merci pour votre demande de renseignements. Nous vous contacterons dès que possible.',
	'PROMPT_CLOSE' => 'Fermer',
	'VM_RECOVER_CART' => 'Récupérer le panier sauvegardé',
	'VM_RECOVER_CART_REPLACE' => 'Remplacer le panier avec le panier sauvegardé',
	'VM_RECOVER_CART_MERGE' => 'Ajouter le panier sauvegardé  au  panier',
	'VM_RECOVER_CART_DELETE' => 'Supprimer le panier sauvegardé ',
	'VM_EMPTY_YOUR_CART_TIP' => 'Vider le panier de tous les contenus',
	'VM_SAVED_CART_TITLE' => 'Saved Cart',
	'VM_SAVED_CART_RETURN' => 'Return'
); $VM_LANG->initModule( 'shop', $langvars );
?>