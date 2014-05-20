<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : greek.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'PHPSHOP_RB_INDIVIDUAL' => 'Κατάλογος Ανεξαρτήτων Προϊόντων',
	'PHPSHOP_RB_SALE_TITLE' => 'Αναφορές Πωλήσεων',
	'PHPSHOP_RB_SALES_PAGE_TITLE' => 'Επισκόπιση Δραστηριότητας Πωλήσεων',
	'PHPSHOP_RB_INTERVAL_TITLE' => 'Ορίστε Περίοδο',
	'PHPSHOP_RB_INTERVAL_MONTHLY_TITLE' => 'Ανά Μήνα',
	'PHPSHOP_RB_INTERVAL_WEEKLY_TITLE' => 'Ανά Εβδομάδα',
	'PHPSHOP_RB_INTERVAL_DAILY_TITLE' => 'Ανά Ημέρα',
	'PHPSHOP_RB_THISMONTH_BUTTON' => 'Τρέχον μήνας',
	'PHPSHOP_RB_LASTMONTH_BUTTON' => 'Προηγούμενος μήνας',
	'PHPSHOP_RB_LAST60_BUTTON' => 'Τελευτ. 60 ημέρες',
	'PHPSHOP_RB_LAST90_BUTTON' => 'Τελευτ. 90 ημέρες',
	'PHPSHOP_RB_START_DATE_TITLE' => 'Εναρξη στις',
	'PHPSHOP_RB_END_DATE_TITLE' => 'Λήξη στις',
	'PHPSHOP_RB_SHOW_SEL_RANGE' => 'Εμφάνιση επιλεγμένης περιόδου',
	'PHPSHOP_RB_REPORT_FOR' => 'Αναφορά για ',
	'PHPSHOP_RB_DATE' => 'Ημερομηνία',
	'PHPSHOP_RB_ORDERS' => 'Παραγγελίες',
	'PHPSHOP_RB_TOTAL_ITEMS' => 'Σύνολο Ειδών που πωλήθηκαν',
	'PHPSHOP_RB_REVENUE' => 'Έσοδα',
	'PHPSHOP_RB_PRODLIST' => 'Εμφάνιση Προϊόντων'
); $VM_LANG->initModule( 'reportbasic', $langvars );
?>