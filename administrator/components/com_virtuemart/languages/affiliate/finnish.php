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
	'PHPSHOP_USER_FORM_EMAIL' => 'Sähköposti',
	'PHPSHOP_SHOPPER_LIST_LBL' => 'Ostajaluettelo',
	'PHPSHOP_SHOPPER_FORM_BILLTO_LBL' => 'Laskutustiedot',
	'PHPSHOP_SHOPPER_FORM_USERNAME' => 'Käyttäjänimi',
	'PHPSHOP_AFFILIATE_MOD' => 'Filiaalien hallinta',
	'PHPSHOP_AFFILIATE_LIST_LBL' => 'Filiaaliluettelo',
	'PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME' => 'Filiaalin nimi',
	'PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE' => 'Aktiivinen',
	'PHPSHOP_AFFILIATE_LIST_RATE' => 'Taksa',
	'PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL' => 'Kuukausi yhteensä',
	'PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION' => 'Kuukauden komissio',
	'PHPSHOP_AFFILIATE_LIST_ORDERS' => 'Luettelojärjestys',
	'PHPSHOP_AFFILIATE_EMAIL_WHO' => 'Kenelle sähköposti(* = KAIKKI)',
	'PHPSHOP_AFFILIATE_EMAIL_CONTENT' => 'Teidän sähköposti',
	'PHPSHOP_AFFILIATE_EMAIL_SUBJECT' => 'Aihe',
	'PHPSHOP_AFFILIATE_EMAIL_STATS' => 'Sisällytä tämänhetkinen tilasto ',
	'PHPSHOP_AFFILIATE_FORM_RATE' => 'Komissiotaksa',
	'PHPSHOP_AFFILIATE_FORM_ACTIVE' => 'Aktiivinen?',
	'VM_AFFILIATE_SHOWINGDETAILS_FOR' => 'Näytä tiedot',
	'VM_AFFILIATE_LISTORDERS' => 'Tilaukset',
	'VM_AFFILIATE_MONTH' => 'Kuukausi',
	'VM_AFFILIATE_CHANGEVIEW' => 'Muuta näyttö',
	'VM_AFFILIATE_ORDERSUMMARY_LBL' => 'Tilaustiedot',
	'VM_AFFILIATE_ORDERLIST_ORDERREF' => 'Tilaus ref.',
	'VM_AFFILIATE_ORDERLIST_DATEORDERED' => 'Tilauspäivä',
	'VM_AFFILIATE_ORDERLIST_ORDERTOTAL' => 'Tilauksen summa',
	'VM_AFFILIATE_ORDERLIST_COMMISSION' => 'Komissio (rate)',
	'VM_AFFILIATE_ORDERLIST_ORDERSTATUS' => 'Tilauksen tila'
); $VM_LANG->initModule( 'affiliate', $langvars );
?>