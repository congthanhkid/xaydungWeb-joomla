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
	'PHPSHOP_TAX_LIST_LBL' => 'Adózási ráták lista',
	'PHPSHOP_TAX_LIST_STATE' => 'Adózási állam vagy régió',
	'PHPSHOP_TAX_LIST_COUNTRY' => 'Adózási ország',
	'PHPSHOP_TAX_FORM_LBL' => 'Új adózási ráta',
	'PHPSHOP_TAX_FORM_STATE' => 'Adózási állam vagy régió',
	'PHPSHOP_TAX_FORM_COUNTRY' => 'Adózási ország',
	'PHPSHOP_TAX_FORM_RATE' => 'Adózási ráta (16%-hoz 0,16-ot adjon meg)'
); $VM_LANG->initModule( 'tax', $langvars );
?>