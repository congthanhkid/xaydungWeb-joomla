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
	'VM_HELP_YOURVERSION' => 'Votre version du  {produit} ',
	'VM_HELP_ABOUT' => '<span Style="font-weight: bold;">
VirtueMart </ span> est une solution de E-Commerce Open Source pour Mambo et Joomla!.
C\'est une application composée  d\'un composant, et de 8 Modules et Mambots / Plugins.
L\'origine de ces scripts est PhpShop (Auteurs: Edikon Corp & le <a href="http://www.virtuemart.org/" target="_blank"> phpShop </ a>) .',
	'VM_HELP_LICENSE_DESC' => 'VirtueMart est sous licens <a href="{licenseurl}" target="_blank">License {licensename} </a>.',
	'VM_HELP_TEAM' => 'Une petite équipe de développeurs nous aident à faire évoluer le script.',
	'VM_HELP_PROJECTLEADER' => 'Chef de projet',
	'VM_HELP_HOMEPAGE' => 'Site Web',
	'VM_HELP_DONATION_DESC' => 'S\'il vous plait, envisagez un don au projet VirtueMart pour nous aider à poursuivre les travaux sur ce composant et à créer de nouvelles fonctionnalités.',
	'VM_HELP_DONATION_BUTTON_ALT' => 'Paiement avec PayPal - c\'est rapide, gratuit et sécurisé!'
); $VM_LANG->initModule( 'help', $langvars );
?>