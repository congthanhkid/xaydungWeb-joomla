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
	'PHPSHOP_ACC_CUSTOMER_ACCOUNT' => 'Asiakastiedot:',
	'PHPSHOP_ACC_UPD_BILL' => 'Tässä voit päivittää laskutustiedot.',
	'PHPSHOP_ACC_UPD_SHIP' => 'Tässä voit lisätä ja muuttaa toimitustietoja.',
	'PHPSHOP_ACC_ACCOUNT_INFO' => 'Asiakastiedot',
	'PHPSHOP_ACC_SHIP_INFO' => 'Toimitustiedot',
	'PHPSHOP_DOWNLOADS_CLICK' => 'Klikkaa tuotteen nimeä, kun haluat ladata tiedoston.',
	'PHPSHOP_DOWNLOADS_EXPIRED' => 'Olet jo ladannut tiedoston sallitun määrän, tai latausaika on kulunut loppuun.'
); $VM_LANG->initModule( 'account', $langvars );
?>