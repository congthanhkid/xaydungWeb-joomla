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
	'VM_HELP_YOURVERSION' => 'Uw {product} versie',
	'VM_HELP_ABOUT' => '<span style="font-weight: bold;">
                VirtueMart</span> is een volledige Open Source E-Commerce oplossing voor Mambo en Joomla!.
                Het is een applicatie, welke bestaat uit een component en meer dan 8 Modules en Mambots/Plugins.
                Virtuemart is ontstaan uit een Shopping Cart Script genaamd "phpShop" (Authors: Edikon Corp. & the <a href="http://www.virtuemart.org/" target="_blank">phpShop</a> community).',
	'VM_HELP_LICENSE_DESC' => 'VirtueMart is gelicenseerd onder de <a href="{licenseurl}" target="_blank">{licensename} Licentie</a>.',
	'VM_HELP_TEAM' => 'Er is een klein team van ontwikkelaars die werken aan de verdere ontwikkeling van het Shopping Cart Script.',
	'VM_HELP_PROJECTLEADER' => 'Projectleider',
	'VM_HELP_HOMEPAGE' => 'Homepage',
	'VM_HELP_DONATION_DESC' => 'Maak een kleine donatie aan het VirtueMart project om ons de mogelijkheid te bieden verder te werken aan dit component en nieuwe mogelijkheden toe te kunnen voegen.',
	'VM_HELP_DONATION_BUTTON_ALT' => 'Maak een donatie met PayPal - Het is snel, gratis en veilig!'
); $VM_LANG->initModule( 'help', $langvars );
?>