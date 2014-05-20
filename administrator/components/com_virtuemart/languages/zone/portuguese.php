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
	'PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL' => 'Paнs',
	'PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL' => 'Atribuir Zona',
	'PHPSHOP_ASSIGN_ZONE_PG_LBL' => 'Atribuir Zonas',
	'PHPSHOP_ZONE_FORM_NAME_LBL' => 'Nome da Zona',
	'PHPSHOP_ZONE_FORM_DESC_LBL' => 'Descriзгo da Zona',
	'PHPSHOP_ZONE_FORM_COST_PER_LBL' => 'Custo por Zona Por Artigo',
	'PHPSHOP_ZONE_FORM_COST_LIMIT_LBL' => 'Limite de Custo da Zona',
	'PHPSHOP_ZONE_LIST_LBL' => 'Lista das Zonas',
	'PHPSHOP_ZONE_LIST_NAME_LBL' => 'Nome da Zona',
	'PHPSHOP_ZONE_LIST_DESC_LBL' => 'Descriзгo da Zona',
	'PHPSHOP_ZONE_LIST_COST_PER_LBL' => 'Custo da Zona Por Artigo',
	'PHPSHOP_ZONE_LIST_COST_LIMIT_LBL' => 'Lнmite de Custo da Zona',
	'VM_ZONE_ASSIGN_PERITEM' => 'Pero Item',
	'VM_ZONE_ASSIGN_LIMIT' => 'Limite',
	'VM_ZONE_EDITZONE' => 'Alterar Esta Zona'
); $VM_LANG->initModule( 'zone', $langvars );
?>