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
	'CHARSET' => 'ISO-8859-15',
	'PHPSHOP_USER_FORM_FIRST_NAME' => 'Prénom',
	'PHPSHOP_USER_FORM_LAST_NAME' => 'Nom',
	'PHPSHOP_USER_FORM_MIDDLE_NAME' => '2ème prénom',
	'PHPSHOP_USER_FORM_COMPANY_NAME' => 'Nom de la société',
	'PHPSHOP_USER_FORM_ADDRESS_1' => 'Adresse 1',
	'PHPSHOP_USER_FORM_ADDRESS_2' => 'Adresse 2',
	'PHPSHOP_USER_FORM_CITY' => 'Ville',
	'PHPSHOP_USER_FORM_STATE' => 'Etat/Province/Région',
	'PHPSHOP_USER_FORM_ZIP' => 'Code postal',
	'PHPSHOP_USER_FORM_COUNTRY' => 'Pays',
	'PHPSHOP_USER_FORM_PHONE' => 'Téléphone',
	'PHPSHOP_USER_FORM_PHONE2' => 'Portable',
	'PHPSHOP_USER_FORM_FAX' => 'Fax',
	'PHPSHOP_ISSHIP_LIST_PUBLISH_LBL' => 'Actif',
	'PHPSHOP_ISSHIP_FORM_UPDATE_LBL' => 'Configurer la méthode de livraison',
	'PHPSHOP_STORE_FORM_FULL_IMAGE' => 'Image grande taille',
	'PHPSHOP_STORE_FORM_UPLOAD' => 'Transférer  une image',
	'PHPSHOP_STORE_FORM_STORE_NAME' => 'Nom de la boutique',
	'PHPSHOP_STORE_FORM_COMPANY_NAME' => 'Nom de la société boutique',
	'PHPSHOP_STORE_FORM_ADDRESS_1' => 'Adresse 1',
	'PHPSHOP_STORE_FORM_ADDRESS_2' => 'Adresse 2',
	'PHPSHOP_STORE_FORM_CITY' => 'Ville',
	'PHPSHOP_STORE_FORM_STATE' => 'Etat/Province/Région',
	'PHPSHOP_STORE_FORM_COUNTRY' => 'Pays',
	'PHPSHOP_STORE_FORM_ZIP' => 'Code postal',
	'PHPSHOP_STORE_FORM_CURRENCY' => 'Devise',
	'PHPSHOP_STORE_FORM_LAST_NAME' => 'Nom',
	'PHPSHOP_STORE_FORM_FIRST_NAME' => 'Prénom',
	'PHPSHOP_STORE_FORM_MIDDLE_NAME' => '2ème Prénom',
	'PHPSHOP_STORE_FORM_TITLE' => 'Civilité',
	'PHPSHOP_STORE_FORM_PHONE_1' => 'Téléphone 1',
	'PHPSHOP_STORE_FORM_PHONE_2' => 'Téléphone 2',
	'PHPSHOP_STORE_FORM_DESCRIPTION' => 'Description',
	'PHPSHOP_PAYMENT_METHOD_LIST_LBL' => 'Liste des méthodes de paiement',
	'PHPSHOP_PAYMENT_METHOD_LIST_NAME' => 'Nom',
	'PHPSHOP_PAYMENT_METHOD_LIST_CODE' => 'Code',
	'PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP' => 'Groupe de client',
	'PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR' => 'Activer type méthode de paiement',
	'PHPSHOP_PAYMENT_METHOD_FORM_LBL' => 'Formulaire de méthode de paiement',
	'PHPSHOP_PAYMENT_METHOD_FORM_NAME' => 'Nom de la méthode de paiement',
	'PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP' => 'Groupe de client',
	'PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT' => 'Remise',
	'PHPSHOP_PAYMENT_METHOD_FORM_CODE' => 'Code',
	'PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER' => 'Ordre d\\\'affichage',
	'PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR' => 'Activer type méthode de paiement',
	'PHPSHOP_PAYMENT_FORM_CC' => 'Carte de crédit',
	'PHPSHOP_PAYMENT_FORM_USE_PP' => 'Utiliser un terminal de paiement',
	'PHPSHOP_PAYMENT_FORM_BANK_DEBIT' => 'Virement bancaire',
	'PHPSHOP_PAYMENT_FORM_AO' => 'Adresse seulement / Paiement à la livraison',
	'PHPSHOP_STATISTIC_STATISTICS' => 'Statistiques',
	'PHPSHOP_STATISTIC_CUSTOMERS' => 'Clients',
	'PHPSHOP_STATISTIC_ACTIVE_PRODUCTS' => 'Produits actifs',
	'PHPSHOP_STATISTIC_INACTIVE_PRODUCTS' => 'Produits inactifs',
	'PHPSHOP_STATISTIC_NEW_ORDERS' => 'Nouvelles commandes',
	'PHPSHOP_STATISTIC_NEW_CUSTOMERS' => 'Nouveaux clients',
	'PHPSHOP_CREDITCARD_NAME' => 'Nom carte de crédit',
	'PHPSHOP_CREDITCARD_CODE' => 'Carte de crédit - Code court',
	'PHPSHOP_YOUR_STORE' => 'Votre boutique',
	'PHPSHOP_CONTROL_PANEL' => 'Panneau de contrôle',
	'PHPSHOP_CHANGE_PASSKEY_FORM' => 'Afficher/Modifier les mot de passe/Clé de transaction',
	'PHPSHOP_TYPE_PASSWORD' => 'Veuillez saisir votre mot de passe utilisateur',
	'PHPSHOP_CURRENT_TRANSACTION_KEY' => 'Clé de transaction en cours',
	'PHPSHOP_CHANGE_PASSKEY_SUCCESS' => 'La Clé de transaction a été modifiée.',
	'VM_PAYMENT_CLASS_NAME' => 'Nom de la classe de paiement',
	'VM_PAYMENT_CLASS_NAME_TIP' => '(e.g. <strong>ps_netbanx</strong>) :<br />
default: ps_payment<br />
<i>Laissez vide si vous n\'êtes pas sûr de ce qu\'il faut mettre!</i>',
	'VM_PAYMENT_EXTRAINFO' => 'Information de paiement supplémentaire',
	'VM_PAYMENT_EXTRAINFO_TIP' => 'Est affiché sur la page de confirmation de la commande. Peut être: Formulaire en HTML pour le service de paiement ou un conseil à votre client.',
	'VM_PAYMENT_ACCEPTED_CREDITCARDS' => 'type de cartes de crédit acceptées',
	'VM_PAYMENT_METHOD_DISCOUNT_TIP' => 'Pour une remise, indiquer une valeur positive. Pour des frais indiquer une valeur négative.(Exemple: <strong> -2,00 </ strong>).',
	'VM_PAYMENT_METHOD_DISCOUNT_MAX_AMOUNT' => 'Montant maximal de la remise',
	'VM_PAYMENT_METHOD_DISCOUNT_MIN_AMOUNT' => 'Montant minimal de la remise',
	'VM_PAYMENT_FORM_FORMBASED' => 'Formulaire HTML (e.g. PayPal)',
	'VM_ORDER_EXPORT_MODULE_LIST_LBL' => 'Module d\'exportation liste de commandes',
	'VM_ORDER_EXPORT_MODULE_LIST_NAME' => 'Nom',
	'VM_ORDER_EXPORT_MODULE_LIST_DESC' => 'Description',
	'VM_STORE_FORM_ACCEPTED_CURRENCIES' => 'Liste des devises acceptées',
	'VM_STORE_FORM_ACCEPTED_CURRENCIES_TIP' => 'Cette liste définit toutes les monnaies que vous acceptez dans votre boutique. <strong> Remarque: </ strong> Toutes les monnaies retenus ici peuvent être utilisés lors du passage en caisse! Si vous ne voulez pas utlisez cette fonctionnalité, sélectionner votre pays en devise (= par défaut).',
	'VM_EXPORT_MODULE_FORM_LBL' => 'Export Module Form',
	'VM_EXPORT_MODULE_FORM_NAME' => 'Export Module Name',
	'VM_EXPORT_MODULE_FORM_DESC' => 'Description',
	'VM_EXPORT_CLASS_NAME' => 'Nom de la classe Export',
	'VM_EXPORT_CLASS_NAME_TIP' => '(e.g. <strong>ps_orders_csv</strong>) :<br /> default: ps_xmlexport<br /> <i>Leave blank if you\'re not sure what to fill in!</i>',
	'VM_EXPORT_CONFIG' => 'Configuration supplémentaire Export',
	'VM_EXPORT_CONFIG_TIP' => 'Préciser la configuration Export pour les modules définies par les utlisateursou de définir de nouveaux modules de configuration. Code doit être du code PHP correct.',
	'VM_SHIPPING_MODULE_LIST_NAME' => 'Nom',
	'VM_SHIPPING_MODULE_LIST_E_VERSION' => 'Version',
	'VM_SHIPPING_MODULE_LIST_HEADER_AUTHOR' => 'Auteur',
	'PHPSHOP_STORE_ADDRESS_FORMAT' => 'Format de l\'adresse de la boutique',
	'PHPSHOP_STORE_ADDRESS_FORMAT_TIP' => 'Vous pouvez utiliser les paramètres fictifs suivants ici',
	'PHPSHOP_STORE_DATE_FORMAT' => 'Format de la date de la boutique',
	'VM_PAYMENT_METHOD_ID_NOT_PROVIDED' => 'Erreur: ID de la méthode de pamet non trouvé.',
	'VM_SHIPPING_MODULE_CONFIG_LBL' => 'Configuration de la méthode d\'expedition',
	'VM_SHIPPING_MODULE_CLASSERROR' => 'Impossible d\'instancier la classe shipping_module ()'
); $VM_LANG->initModule( 'store', $langvars );
?>