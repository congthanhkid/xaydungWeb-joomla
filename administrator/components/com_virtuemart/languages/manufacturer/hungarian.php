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
	'PHPSHOP_MANUFACTURER_LIST_LBL' => 'Gyártók/kiadók',
	'PHPSHOP_MANUFACTURER_LIST_MANUFACTURER_NAME' => 'Gyártó/kiadó neve',
	'PHPSHOP_MANUFACTURER_FORM_LBL' => 'Új gyártó/kiadó',
	'PHPSHOP_MANUFACTURER_FORM_CATEGORY' => 'Gyártó/kiadó kategória',
	'PHPSHOP_MANUFACTURER_FORM_EMAIL' => 'E-mail',
	'PHPSHOP_MANUFACTURER_CAT_LIST_LBL' => 'Gyártó/kiadó kategóriák',
	'PHPSHOP_MANUFACTURER_CAT_NAME' => 'Kategória neve',
	'PHPSHOP_MANUFACTURER_CAT_DESCRIPTION' => 'Kategória leírás',
	'PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS' => 'Gyártók/kiadók',
	'PHPSHOP_MANUFACTURER_CAT_FORM_LBL' => 'Új gyártó/kiadó kategória',
	'PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL' => 'Kategória adatok',
	'PHPSHOP_MANUFACTURER_CAT_FORM_NAME' => 'Kategória neve',
	'PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION' => 'Kategória leírás'
); $VM_LANG->initModule( 'manufacturer', $langvars );
?>