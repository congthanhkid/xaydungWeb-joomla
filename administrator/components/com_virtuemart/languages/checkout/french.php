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
	'PHPSHOP_NO_CUSTOMER' => 'Vous n\'êtes pas encore client(e) enregistré(e). Veuillez fournir vos informations de facturation en vous enregistrant. Merci.',
	'PHPSHOP_THANKYOU' => 'Merci pour votre commande.',
	'PHPSHOP_EMAIL_SENDTO' => 'Un email de confirmation a été envoyé à ',
	'PHPSHOP_CHECKOUT_NEXT' => 'Suivant',
	'PHPSHOP_CHECKOUT_CONF_BILLINFO' => 'Information de facturation',
	'PHPSHOP_CHECKOUT_CONF_COMPANY' => 'Société',
	'PHPSHOP_CHECKOUT_CONF_NAME' => 'Nom',
	'PHPSHOP_CHECKOUT_CONF_ADDRESS' => 'Adresse',
	'PHPSHOP_CHECKOUT_CONF_EMAIL' => 'Email',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO' => 'Information d\'expédition',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY' => 'Société',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME' => 'Nom',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS' => 'Adresse',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE' => 'Téléphone',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX' => 'Fax',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD' => 'Méthode de paiement',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO' => 'Information obligatoire quand vous choisissez le paiement par carte bancaire',
	'PHPSHOP_PAYPAL_THANKYOU' => 'Merci pour votre règlement. 
            L\'autorisation de paiement a été acceptée. Vous allez recevoir une confirmation de règlement de la part de Pay-Pal par email.
            Vous pouvez maintenant continuer ou vous connecter sur <a href=\'http://www.paypal.com\'>www.paypal.com</a> pour voir le détail de la transaction.',
	'PHPSHOP_PAYPAL_ERROR' => 'Une erreur est survenue durant le traitement de la transaction. Le statut de votre commande ne peut être mis à jour.',
	'PHPSHOP_THANKYOU_SUCCESS' => 'Votre commande a été prise en compte!',
	'VM_CHECKOUT_TITLE_TAG' => 'Validation de la commande: étape %s sur %s',
	'VM_CHECKOUT_ORDERIDNOTSET' => 'ID de la commande n\'est pas précisé ou est vide',
	'VM_CHECKOUT_FAILURE' => 'Echec',
	'VM_CHECKOUT_SUCCESS' => 'Succès',
	'VM_CHECKOUT_PAGE_GATEWAY_EXPLAIN_1' => 'Cette page se trouve sur le site Web de la boutique',
	'VM_CHECKOUT_PAGE_GATEWAY_EXPLAIN_2' => 'La passerelle exécute la page sur le site, et montre le résultat chiffré en SSL.',
	'VM_CHECKOUT_CCV_CODE' => 'Cryptogramme visuel de la carte de crédit',
	'VM_CHECKOUT_CCV_CODE_TIPTITLE' => 'Qu\'est ce que le cryptogramme visuel de la carte de crédit?',
	'VM_CHECKOUT_MD5_FAILED' => 'Echec de la vérification MD5',
	'VM_CHECKOUT_ORDERNOTFOUND' => 'Commande non trouvée',
	'PHPSHOP_EPAY_PAYMENT_CARDTYPE' => 'The payment is
created by %s <img
src="/components/com_virtuemart/shop_image/ps_image/epay_images/%s"
border="0">'
); $VM_LANG->initModule( 'checkout', $langvars );
?>