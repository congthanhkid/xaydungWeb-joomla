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
	'PHPSHOP_USER_FORM_FIRST_NAME' => 'Tên họ',
	'PHPSHOP_USER_FORM_LAST_NAME' => 'Tên đệm',
	'PHPSHOP_USER_FORM_MIDDLE_NAME' => 'Tên',
	'PHPSHOP_USER_FORM_COMPANY_NAME' => 'Tên công ty',
	'PHPSHOP_USER_FORM_ADDRESS_1' => 'Địa chỉ 1',
	'PHPSHOP_USER_FORM_ADDRESS_2' => 'Địa chỉ 2',
	'PHPSHOP_USER_FORM_CITY' => 'Thành phố',
	'PHPSHOP_USER_FORM_STATE' => 'Quận/huyện/vùng',
	'PHPSHOP_USER_FORM_ZIP' => 'Zip/ Mã bưu điện',
	'PHPSHOP_USER_FORM_COUNTRY' => 'Quốc gia',
	'PHPSHOP_USER_FORM_PHONE' => 'Điện thoại',
	'PHPSHOP_USER_FORM_PHONE2' => 'Điện thoại Mobile',
	'PHPSHOP_USER_FORM_FAX' => 'Fax',
	'PHPSHOP_ISSHIP_LIST_PUBLISH_LBL' => 'Kích hoạt',
	'PHPSHOP_ISSHIP_FORM_UPDATE_LBL' => 'Phương pháp xác định cấu hình giao hàng',
	'PHPSHOP_STORE_FORM_FULL_IMAGE' => 'Xem hình đầy đủ',
	'PHPSHOP_STORE_FORM_UPLOAD' => 'Upload Image',
	'PHPSHOP_STORE_FORM_STORE_NAME' => 'Tên Cửa hàng',
	'PHPSHOP_STORE_FORM_COMPANY_NAME' => 'Tên công ty Store',
	'PHPSHOP_STORE_FORM_ADDRESS_1' => 'Địa chỉ 1',
	'PHPSHOP_STORE_FORM_ADDRESS_2' => 'Địa chỉ 2',
	'PHPSHOP_STORE_FORM_CITY' => 'Thành phố',
	'PHPSHOP_STORE_FORM_STATE' => 'Quận/huyện/vùng',
	'PHPSHOP_STORE_FORM_COUNTRY' => 'Quốc gia',
	'PHPSHOP_STORE_FORM_ZIP' => 'Zip/Mã bưu điện',
	'PHPSHOP_STORE_FORM_CURRENCY' => 'tiền tệ',
	'PHPSHOP_STORE_FORM_LAST_NAME' => 'Tên đệm',
	'PHPSHOP_STORE_FORM_FIRST_NAME' => 'Tên họ',
	'PHPSHOP_STORE_FORM_MIDDLE_NAME' => 'Tên',
	'PHPSHOP_STORE_FORM_TITLE' => 'Chức danh',
	'PHPSHOP_STORE_FORM_PHONE_1' => 'Điện thoại 1',
	'PHPSHOP_STORE_FORM_PHONE_2' => 'Điện thoại 2',
	'PHPSHOP_STORE_FORM_DESCRIPTION' => 'Mô tả',
	'PHPSHOP_PAYMENT_METHOD_LIST_LBL' => 'Danh sách phương thức thanh toán',
	'PHPSHOP_PAYMENT_METHOD_LIST_NAME' => 'Tên',
	'PHPSHOP_PAYMENT_METHOD_LIST_CODE' => 'Mã',
	'PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP' => 'Nhóm Shopper',
	'PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR' => 'Cách thanh toán',
	'PHPSHOP_PAYMENT_METHOD_FORM_LBL' => 'Các mẫu thanh toán',
	'PHPSHOP_PAYMENT_METHOD_FORM_NAME' => 'Tên cách thanh toán',
	'PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP' => 'Nhóm Shopper',
	'PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT' => 'Bớt tiền',
	'PHPSHOP_PAYMENT_METHOD_FORM_CODE' => 'Mã',
	'PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER' => 'Danh sách đơn hàng',
	'PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR' => 'Thanh toán tiền bằng',
	'PHPSHOP_PAYMENT_FORM_CC' => 'Thẻ tín dụng',
	'PHPSHOP_PAYMENT_FORM_USE_PP' => 'Xử lý thanh toán',
	'PHPSHOP_PAYMENT_FORM_BANK_DEBIT' => 'Ghi nợ ngân hàng',
	'PHPSHOP_PAYMENT_FORM_AO' => 'Địa chỉ / Phân phối bằng tiền mặt',
	'PHPSHOP_STATISTIC_STATISTICS' => 'Thống kê',
	'PHPSHOP_STATISTIC_CUSTOMERS' => 'Khách hàng',
	'PHPSHOP_STATISTIC_ACTIVE_PRODUCTS' => 'Sản phẩm đã kích hoạt',
	'PHPSHOP_STATISTIC_INACTIVE_PRODUCTS' => 'Sản phẩm chưa kích hoạt',
	'PHPSHOP_STATISTIC_NEW_ORDERS' => 'Đơn hàng mới',
	'PHPSHOP_STATISTIC_NEW_CUSTOMERS' => 'Khách hàng mới',
	'PHPSHOP_CREDITCARD_NAME' => 'Tên thẻ tín dụng',
	'PHPSHOP_CREDITCARD_CODE' => 'Mã ngắn',
	'PHPSHOP_YOUR_STORE' => 'Cửa hàng của bạn',
	'PHPSHOP_CONTROL_PANEL' => 'Bảng điều khiển',
	'PHPSHOP_CHANGE_PASSKEY_FORM' => 'Hiện/ Thay đổi mật khẩu / Các giao dịch',
	'PHPSHOP_TYPE_PASSWORD' => 'Xin vui lòng nhập mật khẩu Thành viên của bạn',
	'PHPSHOP_CURRENT_TRANSACTION_KEY' => 'Các giao dịch hiện tại',
	'PHPSHOP_CHANGE_PASSKEY_SUCCESS' => 'Giao dịch chủ chốt đã đã được thay đổi thành công.',
	'VM_PAYMENT_CLASS_NAME' => 'Tên lớp thanh toán',
	'VM_PAYMENT_CLASS_NAME_TIP' => '(ví dụ <strong>ps_netbanx</strong>) :<br />
mặc định: ps_payment<br />
<i>Để trống nếu bạn không chắc chắn những gì để điền vào!</i>',
	'VM_PAYMENT_EXTRAINFO' => 'Thông tin thanh toán thêm',
	'VM_PAYMENT_EXTRAINFO_TIP' => 'Đơn hàng xác định được hiển thị trên trang. Có thể là: mẫu HTML, Mã số  ung cấp dịch vụ thanh toán của bạn từ khách hàng vv...',
	'VM_PAYMENT_ACCEPTED_CREDITCARDS' => 'Chấp nhận loại thẻ tín dụng',
	'VM_PAYMENT_METHOD_DISCOUNT_TIP' => 'Giảm một khoản phí (Ví dụ: <strong>-2.00</strong>).',
	'VM_PAYMENT_METHOD_DISCOUNT_MAX_AMOUNT' => 'Số tiền giảm giá tối đa',
	'VM_PAYMENT_METHOD_DISCOUNT_MIN_AMOUNT' => 'Số tiền giảm tối thiểu',
	'VM_PAYMENT_FORM_FORMBASED' => 'HTML-Form based (e.g. PayPal)',
	'VM_ORDER_EXPORT_MODULE_LIST_LBL' => 'Danh sách Đơn hàng xuất khẩu',
	'VM_ORDER_EXPORT_MODULE_LIST_NAME' => 'Tên',
	'VM_ORDER_EXPORT_MODULE_LIST_DESC' => 'Mô tả',
	'VM_STORE_FORM_ACCEPTED_CURRENCIES' => 'Chấp nhận danh sách các loại ngoại tệ',
	'VM_STORE_FORM_ACCEPTED_CURRENCIES_TIP' => 'Danh sách này xác định tất cả các loại tiền tệ bạn chấp nhận khi khách hàng mua một sản phẩm trong cửa hàng của bạn. <strong> Lưu ý: </ strong> Tất cả các loại tiền tệ được lựa chọn ở đây có thể được sử dụng tại khách sạn kiểm tra! 
	\t Nếu bạn không muốn, bạn chỉ cần chọn loại tiền tệ của nước bạn (= mặc định).',
	'VM_EXPORT_MODULE_FORM_LBL' => 'Export Module Form',
	'VM_EXPORT_MODULE_FORM_NAME' => 'Export Module Name',
	'VM_EXPORT_MODULE_FORM_DESC' => 'Mô tả',
	'VM_EXPORT_CLASS_NAME' => 'Tên lớp của mặt hàng xuất khẩu',
	'VM_EXPORT_CLASS_NAME_TIP' => '(ví dụ <strong>ps_orders_csv</strong>) :<br /> mặc định: ps_xmlexport<br /> <i>Để trống nếu bạn không chắc chắn những gì để điền vào!</i>',
	'VM_EXPORT_CONFIG' => 'Công cụ cấu hình mặt hàng xuất khẩu',
	'VM_EXPORT_CONFIG_TIP' => 'Mặt hàng xuất khẩu Xác định cấu hình cho người dùng xác định mô-đun, hàng xuất khẩu hoặc xác định bổ sung cấu hình. Mã số phải được hợp lệ PHP-Mã số.',
	'VM_SHIPPING_MODULE_LIST_NAME' => 'Tên',
	'VM_SHIPPING_MODULE_LIST_E_VERSION' => 'Phiên bản',
	'VM_SHIPPING_MODULE_LIST_HEADER_AUTHOR' => 'Tác giả',
	'PHPSHOP_STORE_ADDRESS_FORMAT' => 'Định dạng địa chỉ Cửa hàng',
	'PHPSHOP_STORE_ADDRESS_FORMAT_TIP' => 'Bạn có thể sử dụng placeholders sau đây',
	'PHPSHOP_STORE_DATE_FORMAT' => 'Định dạng ngày cho Cửa hàng',
	'VM_PAYMENT_METHOD_ID_NOT_PROVIDED' => 'Lỗi: ID Phương thức thanh toán không được cung cấp.',
	'VM_SHIPPING_MODULE_CONFIG_LBL' => 'Cấu hình Mô-đun vận chuyển',
	'VM_SHIPPING_MODULE_CLASSERROR' => 'Không thể instantiate Class {shipping_module}'
); $VM_LANG->initModule( 'store', $langvars );
?>