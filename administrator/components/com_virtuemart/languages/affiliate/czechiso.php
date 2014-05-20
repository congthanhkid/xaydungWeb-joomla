<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : czechiso.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'PHPSHOP_USER_FORM_EMAIL' => 'e-mail',
	'PHPSHOP_SHOPPER_LIST_LBL' => 'Seznam z�kazn�k�',
	'PHPSHOP_SHOPPER_FORM_BILLTO_LBL' => 'Faktura�n� informace',
	'PHPSHOP_SHOPPER_FORM_USERNAME' => 'U�ivatelsk� jm�no',
	'PHPSHOP_AFFILIATE_MOD' => 'Adminjistrace pobo�ek',
	'PHPSHOP_AFFILIATE_LIST_LBL' => 'Pobo�ky',
	'PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME' => 'N�zev pobo�ky',
	'PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE' => 'Aktivn�',
	'PHPSHOP_AFFILIATE_LIST_RATE' => 'Sazba',
	'PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL' => 'Celkem za m�s�c',
	'PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION' => 'M�s��n� provize',
	'PHPSHOP_AFFILIATE_LIST_ORDERS' => 'Seznam objedn�vek',
	'PHPSHOP_AFFILIATE_EMAIL_WHO' => 'Komu(* = v�em)',
	'PHPSHOP_AFFILIATE_EMAIL_CONTENT' => 'Text zpr�vy',
	'PHPSHOP_AFFILIATE_EMAIL_SUBJECT' => 'P�edm�t',
	'PHPSHOP_AFFILIATE_EMAIL_STATS' => 'Vlo�it sou�asnou statistiku',
	'PHPSHOP_AFFILIATE_FORM_RATE' => 'Provize (%)',
	'PHPSHOP_AFFILIATE_FORM_ACTIVE' => 'Aktivn�?',
	'VM_AFFILIATE_SHOWINGDETAILS_FOR' => 'Showing Details for',
	'VM_AFFILIATE_LISTORDERS' => 'List Orders',
	'VM_AFFILIATE_MONTH' => 'Month',
	'VM_AFFILIATE_CHANGEVIEW' => 'Change View',
	'VM_AFFILIATE_ORDERSUMMARY_LBL' => 'Order Summary',
	'VM_AFFILIATE_ORDERLIST_ORDERREF' => 'Order Ref',
	'VM_AFFILIATE_ORDERLIST_DATEORDERED' => 'Date Ordered',
	'VM_AFFILIATE_ORDERLIST_ORDERTOTAL' => 'Order Total',
	'VM_AFFILIATE_ORDERLIST_COMMISSION' => 'Commission (rate)',
	'VM_AFFILIATE_ORDERLIST_ORDERSTATUS' => 'Order Status'
); $VM_LANG->initModule( 'affiliate', $langvars );
?>