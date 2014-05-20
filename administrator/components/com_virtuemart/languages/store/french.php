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
	'PHPSHOP_USER_FORM_FIRST_NAME' => 'Pr�nom',
	'PHPSHOP_USER_FORM_LAST_NAME' => 'Nom',
	'PHPSHOP_USER_FORM_MIDDLE_NAME' => '2�me pr�nom',
	'PHPSHOP_USER_FORM_COMPANY_NAME' => 'Nom de la soci�t�',
	'PHPSHOP_USER_FORM_ADDRESS_1' => 'Adresse 1',
	'PHPSHOP_USER_FORM_ADDRESS_2' => 'Adresse 2',
	'PHPSHOP_USER_FORM_CITY' => 'Ville',
	'PHPSHOP_USER_FORM_STATE' => 'Etat/Province/R�gion',
	'PHPSHOP_USER_FORM_ZIP' => 'Code postal',
	'PHPSHOP_USER_FORM_COUNTRY' => 'Pays',
	'PHPSHOP_USER_FORM_PHONE' => 'T�l�phone',
	'PHPSHOP_USER_FORM_PHONE2' => 'Portable',
	'PHPSHOP_USER_FORM_FAX' => 'Fax',
	'PHPSHOP_ISSHIP_LIST_PUBLISH_LBL' => 'Actif',
	'PHPSHOP_ISSHIP_FORM_UPDATE_LBL' => 'Configurer la m�thode de livraison',
	'PHPSHOP_STORE_FORM_FULL_IMAGE' => 'Image grande taille',
	'PHPSHOP_STORE_FORM_UPLOAD' => 'Transf�rer  une image',
	'PHPSHOP_STORE_FORM_STORE_NAME' => 'Nom de la boutique',
	'PHPSHOP_STORE_FORM_COMPANY_NAME' => 'Nom de la soci�t� boutique',
	'PHPSHOP_STORE_FORM_ADDRESS_1' => 'Adresse 1',
	'PHPSHOP_STORE_FORM_ADDRESS_2' => 'Adresse 2',
	'PHPSHOP_STORE_FORM_CITY' => 'Ville',
	'PHPSHOP_STORE_FORM_STATE' => 'Etat/Province/R�gion',
	'PHPSHOP_STORE_FORM_COUNTRY' => 'Pays',
	'PHPSHOP_STORE_FORM_ZIP' => 'Code postal',
	'PHPSHOP_STORE_FORM_CURRENCY' => 'Devise',
	'PHPSHOP_STORE_FORM_LAST_NAME' => 'Nom',
	'PHPSHOP_STORE_FORM_FIRST_NAME' => 'Pr�nom',
	'PHPSHOP_STORE_FORM_MIDDLE_NAME' => '2�me Pr�nom',
	'PHPSHOP_STORE_FORM_TITLE' => 'Civilit�',
	'PHPSHOP_STORE_FORM_PHONE_1' => 'T�l�phone 1',
	'PHPSHOP_STORE_FORM_PHONE_2' => 'T�l�phone 2',
	'PHPSHOP_STORE_FORM_DESCRIPTION' => 'Description',
	'PHPSHOP_PAYMENT_METHOD_LIST_LBL' => 'Liste des m�thodes de paiement',
	'PHPSHOP_PAYMENT_METHOD_LIST_NAME' => 'Nom',
	'PHPSHOP_PAYMENT_METHOD_LIST_CODE' => 'Code',
	'PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP' => 'Groupe de client',
	'PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR' => 'Activer type m�thode de paiement',
	'PHPSHOP_PAYMENT_METHOD_FORM_LBL' => 'Formulaire de m�thode de paiement',
	'PHPSHOP_PAYMENT_METHOD_FORM_NAME' => 'Nom de la m�thode de paiement',
	'PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP' => 'Groupe de client',
	'PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT' => 'Remise',
	'PHPSHOP_PAYMENT_METHOD_FORM_CODE' => 'Code',
	'PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER' => 'Ordre d\\\'affichage',
	'PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR' => 'Activer type m�thode de paiement',
	'PHPSHOP_PAYMENT_FORM_CC' => 'Carte de cr�dit',
	'PHPSHOP_PAYMENT_FORM_USE_PP' => 'Utiliser un terminal de paiement',
	'PHPSHOP_PAYMENT_FORM_BANK_DEBIT' => 'Virement bancaire',
	'PHPSHOP_PAYMENT_FORM_AO' => 'Adresse seulement / Paiement � la livraison',
	'PHPSHOP_STATISTIC_STATISTICS' => 'Statistiques',
	'PHPSHOP_STATISTIC_CUSTOMERS' => 'Clients',
	'PHPSHOP_STATISTIC_ACTIVE_PRODUCTS' => 'Produits actifs',
	'PHPSHOP_STATISTIC_INACTIVE_PRODUCTS' => 'Produits inactifs',
	'PHPSHOP_STATISTIC_NEW_ORDERS' => 'Nouvelles commandes',
	'PHPSHOP_STATISTIC_NEW_CUSTOMERS' => 'Nouveaux clients',
	'PHPSHOP_CREDITCARD_NAME' => 'Nom carte de cr�dit',
	'PHPSHOP_CREDITCARD_CODE' => 'Carte de cr�dit - Code court',
	'PHPSHOP_YOUR_STORE' => 'Votre boutique',
	'PHPSHOP_CONTROL_PANEL' => 'Panneau de contr�le',
	'PHPSHOP_CHANGE_PASSKEY_FORM' => 'Afficher/Modifier les mot de passe/Cl� de transaction',
	'PHPSHOP_TYPE_PASSWORD' => 'Veuillez saisir votre mot de passe utilisateur',
	'PHPSHOP_CURRENT_TRANSACTION_KEY' => 'Cl� de transaction en cours',
	'PHPSHOP_CHANGE_PASSKEY_SUCCESS' => 'La Cl� de transaction a �t� modifi�e.',
	'VM_PAYMENT_CLASS_NAME' => 'Nom de la classe de paiement',
	'VM_PAYMENT_CLASS_NAME_TIP' => '(e.g. <strong>ps_netbanx</strong>) :<br />
default: ps_payment<br />
<i>Laissez vide si vous n\'�tes pas s�r de ce qu\'il faut mettre!</i>',
	'VM_PAYMENT_EXTRAINFO' => 'Information de paiement suppl�mentaire',
	'VM_PAYMENT_EXTRAINFO_TIP' => 'Est affich� sur la page de confirmation de la commande. Peut �tre: Formulaire en HTML pour le service de paiement ou un conseil � votre client.',
	'VM_PAYMENT_ACCEPTED_CREDITCARDS' => 'type de cartes de cr�dit accept�es',
	'VM_PAYMENT_METHOD_DISCOUNT_TIP' => 'Pour une remise, indiquer une valeur positive. Pour des frais indiquer une valeur n�gative.(Exemple: <strong> -2,00 </ strong>).',
	'VM_PAYMENT_METHOD_DISCOUNT_MAX_AMOUNT' => 'Montant maximal de la remise',
	'VM_PAYMENT_METHOD_DISCOUNT_MIN_AMOUNT' => 'Montant minimal de la remise',
	'VM_PAYMENT_FORM_FORMBASED' => 'Formulaire HTML (e.g. PayPal)',
	'VM_ORDER_EXPORT_MODULE_LIST_LBL' => 'Module d\'exportation liste de commandes',
	'VM_ORDER_EXPORT_MODULE_LIST_NAME' => 'Nom',
	'VM_ORDER_EXPORT_MODULE_LIST_DESC' => 'Description',
	'VM_STORE_FORM_ACCEPTED_CURRENCIES' => 'Liste des devises accept�es',
	'VM_STORE_FORM_ACCEPTED_CURRENCIES_TIP' => 'Cette liste d�finit toutes les monnaies que vous acceptez dans votre boutique. <strong> Remarque: </ strong> Toutes les monnaies retenus ici peuvent �tre utilis�s lors du passage en caisse! Si vous ne voulez pas utlisez cette fonctionnalit�, s�lectionner votre pays en devise (= par d�faut).',
	'VM_EXPORT_MODULE_FORM_LBL' => 'Export Module Form',
	'VM_EXPORT_MODULE_FORM_NAME' => 'Export Module Name',
	'VM_EXPORT_MODULE_FORM_DESC' => 'Description',
	'VM_EXPORT_CLASS_NAME' => 'Nom de la classe Export',
	'VM_EXPORT_CLASS_NAME_TIP' => '(e.g. <strong>ps_orders_csv</strong>) :<br /> default: ps_xmlexport<br /> <i>Leave blank if you\'re not sure what to fill in!</i>',
	'VM_EXPORT_CONFIG' => 'Configuration suppl�mentaire Export',
	'VM_EXPORT_CONFIG_TIP' => 'Pr�ciser la configuration Export pour les modules d�finies par les utlisateursou de d�finir de nouveaux modules de configuration. Code doit �tre du code PHP correct.',
	'VM_SHIPPING_MODULE_LIST_NAME' => 'Nom',
	'VM_SHIPPING_MODULE_LIST_E_VERSION' => 'Version',
	'VM_SHIPPING_MODULE_LIST_HEADER_AUTHOR' => 'Auteur',
	'PHPSHOP_STORE_ADDRESS_FORMAT' => 'Format de l\'adresse de la boutique',
	'PHPSHOP_STORE_ADDRESS_FORMAT_TIP' => 'Vous pouvez utiliser les param�tres fictifs suivants ici',
	'PHPSHOP_STORE_DATE_FORMAT' => 'Format de la date de la boutique',
	'VM_PAYMENT_METHOD_ID_NOT_PROVIDED' => 'Erreur: ID de la m�thode de pamet non trouv�.',
	'VM_SHIPPING_MODULE_CONFIG_LBL' => 'Configuration de la m�thode d\'expedition',
	'VM_SHIPPING_MODULE_CLASSERROR' => 'Impossible d\'instancier la classe shipping_module ()'
); $VM_LANG->initModule( 'store', $langvars );
?>