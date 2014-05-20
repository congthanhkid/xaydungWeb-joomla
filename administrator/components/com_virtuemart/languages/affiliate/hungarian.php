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
	'PHPSHOP_USER_FORM_EMAIL' => 'E-mail',
	'PHPSHOP_SHOPPER_LIST_LBL' => 'Vásárlók',
	'PHPSHOP_SHOPPER_FORM_BILLTO_LBL' => 'Számlázási információ',
	'PHPSHOP_SHOPPER_FORM_USERNAME' => 'Felhasználónév',
	'PHPSHOP_AFFILIATE_MOD' => 'Csatlakozott cégek adminisztrációja',
	'PHPSHOP_AFFILIATE_LIST_LBL' => 'Csatlakozott cégek listája',
	'PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME' => 'Csatlakozott cég neve',
	'PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE' => 'Aktív',
	'PHPSHOP_AFFILIATE_LIST_RATE' => 'Kamatláb',
	'PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL' => 'Havi összeg',
	'PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION' => 'Havi jutalék',
	'PHPSHOP_AFFILIATE_LIST_ORDERS' => 'Megrendelések listázása',
	'PHPSHOP_AFFILIATE_EMAIL_WHO' => 'Kinek akar e-mailt küldeni (* = mind)?',
	'PHPSHOP_AFFILIATE_EMAIL_CONTENT' => 'E-mail címe',
	'PHPSHOP_AFFILIATE_EMAIL_SUBJECT' => 'Tárgy',
	'PHPSHOP_AFFILIATE_EMAIL_STATS' => 'Jelen statisztikák belefoglalva',
	'PHPSHOP_AFFILIATE_FORM_RATE' => 'Jutalék (százalék)',
	'PHPSHOP_AFFILIATE_FORM_ACTIVE' => 'Aktív?',
	'VM_AFFILIATE_SHOWINGDETAILS_FOR' => 'Részletek:',
	'VM_AFFILIATE_LISTORDERS' => 'Rendelések listája',
	'VM_AFFILIATE_MONTH' => 'Hónap',
	'VM_AFFILIATE_CHANGEVIEW' => 'Nézet váltása',
	'VM_AFFILIATE_ORDERSUMMARY_LBL' => 'Rendelés összegzése',
	'VM_AFFILIATE_ORDERLIST_ORDERREF' => 'Rendelés azonosító',
	'VM_AFFILIATE_ORDERLIST_DATEORDERED' => 'Dátum',
	'VM_AFFILIATE_ORDERLIST_ORDERTOTAL' => 'Végösszeg',
	'VM_AFFILIATE_ORDERLIST_COMMISSION' => 'Jutalék (arány)',
	'VM_AFFILIATE_ORDERLIST_ORDERSTATUS' => 'Állapota'
); $VM_LANG->initModule( 'affiliate', $langvars );
?>