<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : polish.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'PHPSHOP_CARRIER_LIST_LBL' => 'Lista spedytorów',
	'PHPSHOP_RATE_LIST_LBL' => 'Lista stawek wysy³kowych',
	'PHPSHOP_CARRIER_LIST_NAME_LBL' => 'Nazwa',
	'PHPSHOP_CARRIER_LIST_ORDER_LBL' => 'Kolejno¶æ na li¶cie',
	'PHPSHOP_CARRIER_FORM_LBL' => 'Utwórz/edytuj spedytora',
	'PHPSHOP_RATE_FORM_LBL' => 'Utwórz/edytuj stawkê wysy³kow±',
	'PHPSHOP_RATE_FORM_NAME' => 'Opis stawki wysy³kowej',
	'PHPSHOP_RATE_FORM_CARRIER' => 'Spedytor',
	'PHPSHOP_RATE_FORM_COUNTRY' => 'Kraj',
	'PHPSHOP_RATE_FORM_ZIP_START' => 'pocz±tek zakresu kodu pocztowego',
	'PHPSHOP_RATE_FORM_ZIP_END' => 'koniec zakresu kodu pocztowego',
	'PHPSHOP_RATE_FORM_WEIGHT_START' => 'Najni¿sza waga',
	'PHPSHOP_RATE_FORM_WEIGHT_END' => 'Najwy¿sza waga',
	'PHPSHOP_RATE_FORM_PACKAGE_FEE' => 'Twoja op³ata za paczkê',
	'PHPSHOP_RATE_FORM_CURRENCY' => 'Waluta',
	'PHPSHOP_RATE_FORM_LIST_ORDER' => 'Kolejno¶æ na li¶cie',
	'PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL' => 'Spedytor',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME' => 'Opis stawki wysy³kowej',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART' => 'Waga od ...',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND' => '... do',
	'PHPSHOP_CARRIER_FORM_NAME' => 'Firma spedycyjna',
	'PHPSHOP_CARRIER_FORM_LIST_ORDER' => 'Kolejno¶æ na li¶cie'
); $VM_LANG->initModule( 'shipping', $langvars );
?>