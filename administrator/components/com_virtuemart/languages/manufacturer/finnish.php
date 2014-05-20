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
	'PHPSHOP_MANUFACTURER_LIST_LBL' => 'Valmistajaluettelo',
	'PHPSHOP_MANUFACTURER_LIST_MANUFACTURER_NAME' => 'Valmistajan nimi',
	'PHPSHOP_MANUFACTURER_FORM_LBL' => 'Lisהה/muokkaa valmistajan tiedot',
	'PHPSHOP_MANUFACTURER_FORM_CATEGORY' => 'Valmistajan kategoria',
	'PHPSHOP_MANUFACTURER_FORM_EMAIL' => 'Sהhkצposti',
	'PHPSHOP_MANUFACTURER_CAT_LIST_LBL' => 'Valmistaja kategorialuettelo',
	'PHPSHOP_MANUFACTURER_CAT_NAME' => 'Kategorian nimi',
	'PHPSHOP_MANUFACTURER_CAT_DESCRIPTION' => 'Kategorian kuvaus',
	'PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS' => 'Valmistajat',
	'PHPSHOP_MANUFACTURER_CAT_FORM_LBL' => 'Lisהה/muokkaa valmistajakategorian tiedot',
	'PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL' => 'Kategorian tiedot',
	'PHPSHOP_MANUFACTURER_CAT_FORM_NAME' => 'Kategorian nimi',
	'PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION' => 'Kategorian kuvaus'
); $VM_LANG->initModule( 'manufacturer', $langvars );
?>