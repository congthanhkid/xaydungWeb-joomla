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
	'PHPSHOP_ACC_CUSTOMER_ACCOUNT' => 'Ügyfélszámla:',
	'PHPSHOP_ACC_UPD_BILL' => 'Számlázási adatok módosítása.',
	'PHPSHOP_ACC_UPD_SHIP' => 'Szállítási cím hozzáadása/módosítása.',
	'PHPSHOP_ACC_ACCOUNT_INFO' => 'Ügyfél adatok',
	'PHPSHOP_ACC_SHIP_INFO' => 'Szállítási adatok',
	'PHPSHOP_DOWNLOADS_CLICK' => 'Klikk a névre a letöltéshez.',
	'PHPSHOP_DOWNLOADS_EXPIRED' => 'Sajnos elérte a maximális letöltés-számot!'
); $VM_LANG->initModule( 'account', $langvars );
?>