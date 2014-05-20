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
	'PHPSHOP_USER_FORM_EMAIL' => 'E-mail',
	'PHPSHOP_SHOPPER_LIST_LBL' => 'Klantenlijst',
	'PHPSHOP_SHOPPER_FORM_BILLTO_LBL' => 'Facturatiegegevens',
	'PHPSHOP_SHOPPER_FORM_USERNAME' => 'Gebruikersnaam',
	'PHPSHOP_AFFILIATE_MOD' => 'Wederverkopers administratie',
	'PHPSHOP_AFFILIATE_LIST_LBL' => 'Lijst wederverkopers',
	'PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME' => 'Naam wederverkoper',
	'PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE' => 'Actief',
	'PHPSHOP_AFFILIATE_LIST_RATE' => 'Percentage',
	'PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL' => 'Maandtotaal',
	'PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION' => 'Maandelijkse commissie',
	'PHPSHOP_AFFILIATE_LIST_ORDERS' => 'Bekijk orders',
	'PHPSHOP_AFFILIATE_EMAIL_WHO' => 'E-mail naar wie (* = Allemaal)',
	'PHPSHOP_AFFILIATE_EMAIL_CONTENT' => 'Uw E-mail',
	'PHPSHOP_AFFILIATE_EMAIL_SUBJECT' => 'Het onderwerp',
	'PHPSHOP_AFFILIATE_EMAIL_STATS' => 'Invoegen huidige statistieken',
	'PHPSHOP_AFFILIATE_FORM_RATE' => 'Commissie percentage',
	'PHPSHOP_AFFILIATE_FORM_ACTIVE' => 'Actief?',
	'VM_AFFILIATE_SHOWINGDETAILS_FOR' => 'Toon details voor',
	'VM_AFFILIATE_LISTORDERS' => 'Toon bestellingen',
	'VM_AFFILIATE_MONTH' => 'Maand',
	'VM_AFFILIATE_CHANGEVIEW' => 'Verander overzicht',
	'VM_AFFILIATE_ORDERSUMMARY_LBL' => 'Bestelling overzicht',
	'VM_AFFILIATE_ORDERLIST_ORDERREF' => 'Bestelling referentie',
	'VM_AFFILIATE_ORDERLIST_DATEORDERED' => 'Datum besteld',
	'VM_AFFILIATE_ORDERLIST_ORDERTOTAL' => 'Ordertotaal',
	'VM_AFFILIATE_ORDERLIST_COMMISSION' => 'Commissie (percentage)',
	'VM_AFFILIATE_ORDERLIST_ORDERSTATUS' => 'Status bestelling'
); $VM_LANG->initModule( 'affiliate', $langvars );
?>