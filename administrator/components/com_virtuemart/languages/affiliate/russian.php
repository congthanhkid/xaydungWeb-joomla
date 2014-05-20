<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version $Id: russian.php 1071 2008-02-03 08:42:28Z alex_rus $
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
* http://www.alex-rus.com
* http://www.virtuemart.ru
* http://www.joomlaforum.ru
*/

global $VM_LANG;
$langvars = array (
	'CHARSET' => 'utf-8',
	'PHPSHOP_USER_FORM_EMAIL' => 'е-mail',
	'PHPSHOP_SHOPPER_LIST_LBL' => 'Список покупателей',
	'PHPSHOP_SHOPPER_FORM_BILLTO_LBL' => 'Контактная информация плательщика',
	'PHPSHOP_SHOPPER_FORM_USERNAME' => 'Имя покупателя',
	'PHPSHOP_AFFILIATE_MOD' => 'Администрирование партнерской программы',
	'PHPSHOP_AFFILIATE_LIST_LBL' => 'Список партнёров',
	'PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME' => 'Имя партнёра',
	'PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE' => 'Активен',
	'PHPSHOP_AFFILIATE_LIST_RATE' => 'Ставка',
	'PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL' => 'Итог за месяц',
	'PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION' => 'Комиссия за месяц',
	'PHPSHOP_AFFILIATE_LIST_ORDERS' => 'Порядок отображения',
	'PHPSHOP_AFFILIATE_EMAIL_WHO' => 'Кому отправить e-mail(* = Всем)',
	'PHPSHOP_AFFILIATE_EMAIL_CONTENT' => 'Ваш e-mail',
	'PHPSHOP_AFFILIATE_EMAIL_SUBJECT' => 'Тема',
	'PHPSHOP_AFFILIATE_EMAIL_STATS' => 'Включая текущую статистику',
	'PHPSHOP_AFFILIATE_FORM_RATE' => 'Комиссионная ставка (проценты)',
	'PHPSHOP_AFFILIATE_FORM_ACTIVE' => 'Активен?',
	'VM_AFFILIATE_SHOWINGDETAILS_FOR' => 'Показать детали для',
	'VM_AFFILIATE_LISTORDERS' => 'Порядок отображения',
	'VM_AFFILIATE_MONTH' => 'Месяц',
	'VM_AFFILIATE_CHANGEVIEW' => 'Изменить вид',
	'VM_AFFILIATE_ORDERSUMMARY_LBL' => 'Сводная информация по заказу',
	'VM_AFFILIATE_ORDERLIST_ORDERREF' => 'Номер заказа',
	'VM_AFFILIATE_ORDERLIST_DATEORDERED' => 'Дата заказа',
	'VM_AFFILIATE_ORDERLIST_ORDERTOTAL' => 'Итого',
	'VM_AFFILIATE_ORDERLIST_COMMISSION' => 'Комиссия (ставка)',
	'VM_AFFILIATE_ORDERLIST_ORDERSTATUS' => 'Статус заказа'
); $VM_LANG->initModule( 'affiliate', $langvars );
?>