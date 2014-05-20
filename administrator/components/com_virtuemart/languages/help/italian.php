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
	'CHARSET' => 'ISO-8859-1',
	'VM_HELP_YOURVERSION' => 'La tua versione di {product}',
	'VM_HELP_ABOUT' => '<span style="font-weight: bold;">
		VirtueMart</span> è la soluzione open source E-Commerce completa per Mambo e Joomla!. 
		E\' una Applicazione, composta da un Componente, più di 8 Moduli e Mambot/Plugin.
		Ha le sue radici in uno script per il carrello virtuale chiamato "phpShop" (Autori: Edikon Corp. & la community <a href="http://www.virtuemart.org/" target="_blank">phpShop</a>).',
	'VM_HELP_LICENSE_DESC' => 'VirtueMart è rilasciato sotto la licenza <a href="{licenseurl}" target="_blank">{licensename}</a>.',
	'VM_HELP_TEAM' => 'C\'è un piccolo team di sviluppatori che aiuta questo script di carrello virtuale ad evolversi.',
	'VM_HELP_PROJECTLEADER' => 'Capo Progetto',
	'VM_HELP_HOMEPAGE' => 'Homepage',
	'VM_HELP_DONATION_DESC' => 'Per favore considera una piccola donazione al Progetto VirtueMart per aiutarci a mantenere il lavoro su questo componente e creare nuove funzionalità.',
	'VM_HELP_DONATION_BUTTON_ALT' => 'Paga con PayPal - è veloce, gratuito e sicuro!'
); $VM_LANG->initModule( 'help', $langvars );
?>