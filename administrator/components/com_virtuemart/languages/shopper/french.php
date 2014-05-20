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
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX' => 'Afficher les prix TTC?',
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN' => 'Si la case est cochée, les prix sont affichés TVA incluses.  Sinon ils sont affichés sans la TVA',
	'PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL' => 'Nom de l\'adresse',
	'PHPSHOP_SHOPPER_GROUP_LIST_LBL' => 'Liste des groupes de clients',
	'PHPSHOP_SHOPPER_GROUP_LIST_NAME' => 'Nom du groupe',
	'PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION' => 'Description du groupe',
	'PHPSHOP_SHOPPER_GROUP_FORM_LBL' => 'Formulaire du groupe de clients',
	'PHPSHOP_SHOPPER_GROUP_FORM_NAME' => 'Nom du groupe',
	'PHPSHOP_SHOPPER_GROUP_FORM_DESC' => 'Description du groupe',
	'PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT' => 'Remise sur les prix pour le groupe  par défaut des acheteurs(en %)',
	'PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP' => 'Un montant positif de X veut dire: si le Produit n\'a aucun prix affecté à CE groupe d\'acheteurs, le prix par défaut est diminué de X %. Un montant négatif a l\'effet inverse.'
); $VM_LANG->initModule( 'shopper', $langvars );
?>