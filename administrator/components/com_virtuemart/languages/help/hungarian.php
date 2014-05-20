<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : hungarian.php 1247 2008-02-13 08:42:28Z pedrohsi $
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2007 soeren - All rights reserved.
* @translator soeren, pedrohsi
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
	'CHARSET' => 'UTF-8',
	'VM_HELP_YOURVERSION' => '{product} verzió',
	'VM_HELP_ABOUT' => 'A <span style="font-weight: bold;">
		VirtueMart</span> teljeskörű nyílt forráskódú e-kereskedelmi megoldás Mambóhoz és Joomlához!. 
		A komponenst számos modul és plugin teszi teljessé. Gyökerei a "phpShop" nevű Shopping Cart Script-ig nyúlnak vissza (készítők: Edikon Corp. és a <a href="http://www.virtuemart.org/" target="_blank">phpShop</a> közösség).',
	'VM_HELP_LICENSE_DESC' => 'VirtueMart licenc: <a href="{licenseurl}" target="_blank">{licensename} Licenc</a>.',
	'VM_HELP_TEAM' => 'Fejlesztők egy kis csoportja dolgozik folyamatosan a Shopping Cart Script-en.',
	'VM_HELP_PROJECTLEADER' => 'Projektvezető',
	'VM_HELP_HOMEPAGE' => 'Honlap',
	'VM_HELP_DONATION_DESC' => 'Kérjük, vegye fontolóra egy kisebb adomány elküldését a VirtueMart Project számára, hogy ezzel is támogassa a további fejlesztést.',
	'VM_HELP_DONATION_BUTTON_ALT' => 'Fizessen PayPallal - gyors, ingyenes és biztonságos!'
); $VM_LANG->initModule( 'help', $langvars );
?>
