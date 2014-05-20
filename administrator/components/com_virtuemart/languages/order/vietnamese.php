<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : vietnamese.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'CHARSET' => 'UTF-8',
	'PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL' => 'Nhật ký thanh toán',
	'PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL' => 'Giá vận chuyển',
	'PHPSHOP_ORDER_STATUS_LIST_CODE' => 'Mã',
	'PHPSHOP_ORDER_STATUS_LIST_NAME' => 'Tên',
	'PHPSHOP_ORDER_STATUS_FORM_LBL' => 'Tình trạng hóa đơn',
	'PHPSHOP_ORDER_STATUS_FORM_CODE' => 'Mã',
	'PHPSHOP_ORDER_STATUS_FORM_NAME' => 'Tên',
	'PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER' => 'Số thứ tự',
	'PHPSHOP_COMMENT' => 'Bình luận',
	'PHPSHOP_ORDER_LIST_NOTIFY' => 'Báo cho khách hàng?',
	'PHPSHOP_ORDER_LIST_NOTIFY_ERR' => 'Xin vui lòng thay đổi tình trạng đơn hàng đầu tiên!',
	'PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT' => 'Bao gồm bình luận này?',
	'PHPSHOP_ORDER_HISTORY_DATE_ADDED' => 'Ngày thêm',
	'PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED' => 'Báo cho khách hàng?',
	'PHPSHOP_ORDER_STATUS_CHANGE' => 'Thay đổi tình trạng hóa đơn',
	'PHPSHOP_ORDER_LIST_PRINT_LABEL' => 'In nhãn',
	'PHPSHOP_ORDER_LIST_VOID_LABEL' => 'Void Label',
	'PHPSHOP_ORDER_LIST_TRACK' => 'Track',
	'VM_DOWNLOAD_STATS' => 'THỐNG KÊ TẢI XUỐNG',
	'VM_DOWNLOAD_NOTHING_LEFT' => 'không tải xuống phần còn lại',
	'VM_DOWNLOAD_REENABLE' => 'Cho phép tải xuống lại',
	'VM_DOWNLOAD_REMAINING_DOWNLOADS' => 'Remaining Downloads',
	'VM_DOWNLOAD_RESEND_ID' => 'Resend Download ID',
	'VM_EXPIRY' => 'Thời hạn',
	'VM_UPDATE_STATUS' => 'Trạng thái cập nhật',
	'VM_ORDER_LABEL_ORDERID_NOTVALID' => 'Xin vui lòng cung cấp hợp lệ, số, Mã đơn hàng "{order_id}"',
	'VM_ORDER_LABEL_NOTFOUND' => 'Đơn hàng không ghi nhãn được tìm thấy trong cơ sở dữ liệu.',
	'VM_ORDER_LABEL_NEVERGENERATED' => 'Nhãn đã không được tạo ra',
	'VM_ORDER_LABEL_CLASSCANNOT' => 'Lớp ship_class () có thể không nhận được nhãn hình ảnh, chúng tôi chưa xác định được lỗi tại đây?',
	'VM_ORDER_LABEL_SHIPPINGLABEL_LBL' => 'Nhãn vận chuyển',
	'VM_ORDER_LABEL_SIGNATURENEVER' => 'Chữ ký không bao giờ được lấy',
	'VM_ORDER_LABEL_TRACK_TITLE' => 'Track',
	'VM_ORDER_LABEL_VOID_TITLE' => 'Void Label',
	'VM_ORDER_LABEL_VOIDED_MSG' => 'Label for waybill {tracking_number} has been voided.',
	'VM_ORDER_PRINT_PO_IPADDRESS' => 'Địa chỉ IP',
	'VM_ORDER_STATUS_ICON_ALT' => 'Biểu tưởng trạng thái',
	'VM_ORDER_PAYMENT_CCV_CODE' => 'Mã CVV',
	'VM_ORDER_NOTFOUND' => 'Đơn hàng không được tìm thấy! Nó có thể đã bị xóa.',
	'PHPSHOP_ORDER_EDIT_ACTIONS' => 'Hành động',
	'PHPSHOP_ORDER_EDIT' => 'Thay đổi chi tiết đơn hàng',
	'PHPSHOP_ORDER_EDIT_ADD' => 'Thêm',
	'PHPSHOP_ORDER_EDIT_ADD_PRODUCT' => 'Thêm sản phẩm',
	'PHPSHOP_ORDER_EDIT_EDIT_ORDER' => 'Thay đổi đơn hàng',
	'PHPSHOP_ORDER_EDIT_ERROR_QUANTITY_MUST_BE_HIGHER_THAN_0' => 'Số lượng phải lớn hơn 0.',
	'PHPSHOP_ORDER_EDIT_PRODUCT_ADDED' => 'Các sản phẩm đã được bổ sung vào đơn hàng',
	'PHPSHOP_ORDER_EDIT_PRODUCT_DELETED' => 'Các sản phẩm này đã được xoá khỏi đơn hàng',
	'PHPSHOP_ORDER_EDIT_QUANTITY_UPDATED' => 'Số lượng đã được cập nhật',
	'PHPSHOP_ORDER_EDIT_RETURN_PARENTS' => 'Trở lại sản phẩm chủ lực',
	'PHPSHOP_ORDER_EDIT_CHOOSE_PRODUCT' => 'Chọn một sản phẩm',
	'PHPSHOP_ORDER_CHANGE_UPD_BILL' => 'Thay đổi địa chỉ Billto',
	'PHPSHOP_ORDER_CHANGE_UPD_SHIP' => 'Thay đổi địa chỉ Shipto',
	'PHPSHOP_ORDER_EDIT_SOMETHING_HAS_CHANGED' => ' đã được thay đổi',
	'PHPSHOP_ORDER_EDIT_CHOOSE_PRODUCT_BY_SKU' => 'Chọn SKU'
); $VM_LANG->initModule( 'order', $langvars );
?>
