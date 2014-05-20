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
	'PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL' => 'Land',
	'PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL' => 'Toewijzen aan zone',
	'PHPSHOP_ASSIGN_ZONE_PG_LBL' => 'Zones toewijzen',
	'PHPSHOP_ZONE_FORM_NAME_LBL' => 'Zone naam',
	'PHPSHOP_ZONE_FORM_DESC_LBL' => 'Zone omschrijving',
	'PHPSHOP_ZONE_FORM_COST_PER_LBL' => 'Zone kosten per item',
	'PHPSHOP_ZONE_FORM_COST_LIMIT_LBL' => 'Zone kosten limiet',
	'PHPSHOP_ZONE_LIST_LBL' => 'Zone lijst',
	'PHPSHOP_ZONE_LIST_NAME_LBL' => 'Zone naam',
	'PHPSHOP_ZONE_LIST_DESC_LBL' => 'Zone omschrijving',
	'PHPSHOP_ZONE_LIST_COST_PER_LBL' => 'Zone kosten per item',
	'PHPSHOP_ZONE_LIST_COST_LIMIT_LBL' => 'Zone kosten limiet',
	'VM_ZONE_ASSIGN_PERITEM' => 'Per item',
	'VM_ZONE_ASSIGN_LIMIT' => 'Limiet',
	'VM_ZONE_EDITZONE' => 'Bewerk deze zone'
); $VM_LANG->initModule( 'zone', $langvars );
?>