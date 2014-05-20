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
	'PHPSHOP_ACC_CUSTOMER_ACCOUNT' => 'Klantaccount:',
	'PHPSHOP_ACC_UPD_BILL' => 'Hier kunt u uw factuurgegevens aanpassen.',
	'PHPSHOP_ACC_UPD_SHIP' => 'Hier kunt u uw verzendgegevens aanpassen.',
	'PHPSHOP_ACC_ACCOUNT_INFO' => 'Accountinformatie',
	'PHPSHOP_ACC_SHIP_INFO' => 'Verzendinformatie',
	'PHPSHOP_DOWNLOADS_CLICK' => 'Klik op de productnaam om het bestand(en)te downloaden.',
	'PHPSHOP_DOWNLOADS_EXPIRED' => 'U heeft het bestand al het maximaal aantal keren gedownload of de download periode is verstreken.'
); $VM_LANG->initModule( 'account', $langvars );
?>