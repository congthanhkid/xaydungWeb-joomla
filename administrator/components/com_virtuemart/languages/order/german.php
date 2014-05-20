<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : german.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL' => 'Daten zur Bezahlung',
	'PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL' => 'Lieferung Preis',
	'PHPSHOP_ORDER_STATUS_LIST_CODE' => 'Bestellstatus-Code',
	'PHPSHOP_ORDER_STATUS_LIST_NAME' => 'Name des Bestellstatus',
	'PHPSHOP_ORDER_STATUS_FORM_LBL' => 'Bestellstatus',
	'PHPSHOP_ORDER_STATUS_FORM_CODE' => 'Bestellstatus Code',
	'PHPSHOP_ORDER_STATUS_FORM_NAME' => 'Bestellstatus Name',
	'PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER' => 'Reihenfolge',
	'PHPSHOP_COMMENT' => 'Kommentar',
	'PHPSHOP_ORDER_LIST_NOTIFY' => 'Kunden benachrichtigen?',
	'PHPSHOP_ORDER_LIST_NOTIFY_ERR' => 'Bitte erst den Status ändern!',
	'PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT' => 'Diesen Kommentar einbinden?',
	'PHPSHOP_ORDER_HISTORY_DATE_ADDED' => 'Datum',
	'PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED' => 'Kunde benachrichtigt?',
	'PHPSHOP_ORDER_STATUS_CHANGE' => 'Änderung des Bestellstatus',
	'PHPSHOP_ORDER_LIST_PRINT_LABEL' => 'Label ausdrucken',
	'PHPSHOP_ORDER_LIST_VOID_LABEL' => 'Labe erstellenl',
	'PHPSHOP_ORDER_LIST_TRACK' => 'Nachverfolgen',
	'VM_DOWNLOAD_STATS' => 'DOWNLOAD STATS',
	'VM_DOWNLOAD_NOTHING_LEFT' => 'no downloads remaining',
	'VM_DOWNLOAD_REENABLE' => 'Re-Enable Download',
	'VM_DOWNLOAD_REMAINING_DOWNLOADS' => 'Remaining Downloads',
	'VM_DOWNLOAD_RESEND_ID' => 'Resend Download ID',
	'VM_EXPIRY' => 'Expiry',
	'VM_UPDATE_STATUS' => 'Update Status',
	'VM_ORDER_LABEL_ORDERID_NOTVALID' => 'Please provide a valid, numeric, Order ID, not "{order_id}"',
	'VM_ORDER_LABEL_NOTFOUND' => 'Order record not found in shipping label database.',
	'VM_ORDER_LABEL_NEVERGENERATED' => 'Label has not been generated yet',
	'VM_ORDER_LABEL_CLASSCANNOT' => 'Class {ship_class} cannot get label images, why are we here?',
	'VM_ORDER_LABEL_SHIPPINGLABEL_LBL' => 'Shipping Label',
	'VM_ORDER_LABEL_SIGNATURENEVER' => 'Signature was never retrieved',
	'VM_ORDER_LABEL_TRACK_TITLE' => 'Track',
	'VM_ORDER_LABEL_VOID_TITLE' => 'Void Label',
	'VM_ORDER_LABEL_VOIDED_MSG' => 'Label for waybill {tracking_number} has been voided.',
	'VM_ORDER_PRINT_PO_IPADDRESS' => 'IP-ADDRESS',
	'VM_ORDER_STATUS_ICON_ALT' => 'Status Icon',
	'VM_ORDER_PAYMENT_CCV_CODE' => 'CVV Code',
	'VM_ORDER_NOTFOUND' => 'Order not found! It may have been deleted.',
	'PHPSHOP_ORDER_CHANGE_UPD_BILL' => 'Rechnungsadresse ändern',
	'PHPSHOP_ORDER_EDIT_ACTIONS' => 'Aktionen',
	'PHPSHOP_ORDER_EDIT' => 'Bestellung ändern',
	'PHPSHOP_ORDER_EDIT_ADD' => 'Hinzufügen',
	'PHPSHOP_ORDER_EDIT_ADD_PRODUCT' => 'Produkt hinzufügen',
	'PHPSHOP_ORDER_EDIT_EDIT_ORDER' => 'Bestellung ändern',
	'PHPSHOP_ORDER_EDIT_ERROR_QUANTITY_MUST_BE_HIGHER_THAN_0' => 'Die Menge muss größer 0 sein',
	'PHPSHOP_ORDER_EDIT_PRODUCT_ADDED' => 'Produkt erfolgreich zur Bestellung hinzugefügt',
	'PHPSHOP_ORDER_EDIT_PRODUCT_DELETED' => 'Produkt erfolgreich aus der Bestellung gelöscht',
	'PHPSHOP_ORDER_EDIT_QUANTITY_UPDATED' => 'Menge erfolgreich geändert',
	'PHPSHOP_ORDER_EDIT_RETURN_PARENTS' => 'Zurück zum übergeordneten Produkt',
	'PHPSHOP_ORDER_EDIT_CHOOSE_PRODUCT' => 'Produktnamen auswählen',
	'PHPSHOP_ORDER_CHANGE_UPD_BILL' => 'Rechnungsadresse ändern',
	'PHPSHOP_ORDER_CHANGE_UPD_SHIP' => 'Lieferadresse ändern',
	'PHPSHOP_ORDER_EDIT_SOMETHING_HAS_CHANGED' => ' wurde geändert',
	'PHPSHOP_ORDER_EDIT_CHOOSE_PRODUCT_BY_SKU' => 'Art.-Nr. auswählen'
); $VM_LANG->initModule( 'order', $langvars );
?>
