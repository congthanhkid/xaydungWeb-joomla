<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : traditional_chinese.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'CHARSET' => 'BIG5',
	'PHPSHOP_RB_INDIVIDUAL' => '�ӧO���~�C��',
	'PHPSHOP_RB_SALE_TITLE' => '�P����i',
	'PHPSHOP_RB_SALES_PAGE_TITLE' => '�P�⬡�ʤ@��',
	'PHPSHOP_RB_INTERVAL_TITLE' => '�]�m���j',
	'PHPSHOP_RB_INTERVAL_MONTHLY_TITLE' => '�C��',
	'PHPSHOP_RB_INTERVAL_WEEKLY_TITLE' => '�C�g',
	'PHPSHOP_RB_INTERVAL_DAILY_TITLE' => '�C��',
	'PHPSHOP_RB_THISMONTH_BUTTON' => '����',
	'PHPSHOP_RB_LASTMONTH_BUTTON' => '�W�Ӥ�',
	'PHPSHOP_RB_LAST60_BUTTON' => '�̪�60��',
	'PHPSHOP_RB_LAST90_BUTTON' => '�̪�90��',
	'PHPSHOP_RB_START_DATE_TITLE' => '�}�l��',
	'PHPSHOP_RB_END_DATE_TITLE' => '������',
	'PHPSHOP_RB_SHOW_SEL_RANGE' => '��ܩҿ�ܪ��d��',
	'PHPSHOP_RB_REPORT_FOR' => '���i�� ',
	'PHPSHOP_RB_DATE' => '���',
	'PHPSHOP_RB_ORDERS' => '�q��',
	'PHPSHOP_RB_TOTAL_ITEMS' => '������X����',
	'PHPSHOP_RB_REVENUE' => '���J',
	'PHPSHOP_RB_PRODLIST' => '�ӫ~�C��'
); $VM_LANG->initModule( 'reportbasic', $langvars );
?>