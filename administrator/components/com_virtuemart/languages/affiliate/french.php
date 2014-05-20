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
	'PHPSHOP_USER_FORM_EMAIL' => 'Email',
	'PHPSHOP_SHOPPER_LIST_LBL' => 'Liste des clients',
	'PHPSHOP_SHOPPER_FORM_BILLTO_LBL' => 'Information de facturation',
	'PHPSHOP_SHOPPER_FORM_USERNAME' => 'Nom d\'utilisateur',
	'PHPSHOP_AFFILIATE_MOD' => 'Administration affiliés',
	'PHPSHOP_AFFILIATE_LIST_LBL' => 'Liste des affiliés',
	'PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME' => 'Nom affilié',
	'PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE' => 'Actif',
	'PHPSHOP_AFFILIATE_LIST_RATE' => 'Taux',
	'PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL' => 'Total mensuel',
	'PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION' => 'Commissions mensuelles',
	'PHPSHOP_AFFILIATE_LIST_ORDERS' => 'Liste des commandes',
	'PHPSHOP_AFFILIATE_EMAIL_WHO' => 'A qui envoyer le mail (* = TOUS)',
	'PHPSHOP_AFFILIATE_EMAIL_CONTENT' => 'Votre email',
	'PHPSHOP_AFFILIATE_EMAIL_SUBJECT' => 'Le sujet',
	'PHPSHOP_AFFILIATE_EMAIL_STATS' => 'Inclure les statistiques en cours',
	'PHPSHOP_AFFILIATE_FORM_RATE' => 'Taux de commission (pourcentage)',
	'PHPSHOP_AFFILIATE_FORM_ACTIVE' => 'Actif ?',
	'VM_AFFILIATE_SHOWINGDETAILS_FOR' => 'Affiche les détails pour',
	'VM_AFFILIATE_LISTORDERS' => 'Liste des commandes',
	'VM_AFFILIATE_MONTH' => 'Mois',
	'VM_AFFILIATE_CHANGEVIEW' => 'Modifier l\'affichage',
	'VM_AFFILIATE_ORDERSUMMARY_LBL' => 'Sommaire des commandes',
	'VM_AFFILIATE_ORDERLIST_ORDERREF' => 'Ref. commande',
	'VM_AFFILIATE_ORDERLIST_DATEORDERED' => 'Date de la commande',
	'VM_AFFILIATE_ORDERLIST_ORDERTOTAL' => 'Toatal de la commande',
	'VM_AFFILIATE_ORDERLIST_COMMISSION' => 'Commission (taux)',
	'VM_AFFILIATE_ORDERLIST_ORDERSTATUS' => 'Statut de la commande'
); $VM_LANG->initModule( 'affiliate', $langvars );
?>