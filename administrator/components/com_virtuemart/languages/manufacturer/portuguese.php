<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : portuguese.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'PHPSHOP_MANUFACTURER_LIST_LBL' => 'Listar Fabricante',
	'PHPSHOP_MANUFACTURER_LIST_MANUFACTURER_NAME' => 'Nome do Fabricante',
	'PHPSHOP_MANUFACTURER_FORM_LBL' => 'Adiocionar informaчуo',
	'PHPSHOP_MANUFACTURER_FORM_CATEGORY' => 'Categoria do Fabricante',
	'PHPSHOP_MANUFACTURER_FORM_EMAIL' => 'Email',
	'PHPSHOP_MANUFACTURER_CAT_LIST_LBL' => 'Listar a categoria do Fabricante',
	'PHPSHOP_MANUFACTURER_CAT_NAME' => 'Nome da Categoria',
	'PHPSHOP_MANUFACTURER_CAT_DESCRIPTION' => 'Descriчуo da Categoria',
	'PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS' => 'Fabricantes',
	'PHPSHOP_MANUFACTURER_CAT_FORM_LBL' => 'Detalhes da Categoria do Fabricante',
	'PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL' => 'Informaчуo da Categoria',
	'PHPSHOP_MANUFACTURER_CAT_FORM_NAME' => 'Nome da Categoria',
	'PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION' => 'Descriчуo da Categoria'
); $VM_LANG->initModule( 'manufacturer', $langvars );
?>