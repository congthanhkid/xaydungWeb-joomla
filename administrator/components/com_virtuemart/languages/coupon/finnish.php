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
	'PHPSHOP_COUPON_EDIT_HEADER' => 'Päivitä kuponki',
	'PHPSHOP_COUPON_CODE_HEADER' => 'Koodi',
	'PHPSHOP_COUPON_PERCENT_TOTAL' => 'Prosentti tai kiinteä summa',
	'PHPSHOP_COUPON_TYPE' => 'Kuponkityyppi',
	'PHPSHOP_COUPON_TYPE_TOOLTIP' => 'Lahjakuponki poistetaan heti, kun se on hyvitetty ostoksen yhteydessä. Kestokuponki on käytettävissä niin usein kuin asiakas haluaa.',
	'PHPSHOP_COUPON_TYPE_GIFT' => 'Lahjakuponki',
	'PHPSHOP_COUPON_TYPE_PERMANENT' => 'Kestokuponki',
	'PHPSHOP_COUPON_VALUE_HEADER' => 'Arvo',
	'PHPSHOP_COUPON_PERCENT' => 'Prosentti',
	'PHPSHOP_COUPON_TOTAL' => 'Kiinteä summa'
); $VM_LANG->initModule( 'coupon', $langvars );
?>