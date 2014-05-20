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
	'CHARSET' => 'UTF-8',
	'PHPSHOP_NO_CUSTOMER' => 'Bạn chưa đăng ký khách hàng. Hãy chuẩn bị các thông tin cần thiết cho việc đăng ký.',
	'PHPSHOP_THANKYOU' => 'Cảm ơn đã mua hàng.',
	'PHPSHOP_EMAIL_SENDTO' => 'Email xác nhận đã gửi cho',
	'PHPSHOP_CHECKOUT_NEXT' => 'Next',
	'PHPSHOP_CHECKOUT_CONF_BILLINFO' => 'Billing Thông tin',
	'PHPSHOP_CHECKOUT_CONF_COMPANY' => 'Công ty',
	'PHPSHOP_CHECKOUT_CONF_NAME' => 'Tên',
	'PHPSHOP_CHECKOUT_CONF_ADDRESS' => 'Địa chỉ',
	'PHPSHOP_CHECKOUT_CONF_EMAIL' => 'Email',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO' => 'Thông tin vận chuyển',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY' => 'Công ty',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME' => 'Tên',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS' => 'Địa chỉ',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE' => 'Điện thoại',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX' => 'Fax',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD' => 'Cách thanh toán',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO' => 'yêu cầu thông tin khi chọn cách trả tiền bằng thẻ tín dụng',
	'PHPSHOP_PAYPAL_THANKYOU' => 'Cám ơn bạn đã thanh toán. 
        Các giao dịch đã thành công. Bạn sẽ có được một e-mail xác nhận cho các giao dịch bằng PayPal. 
        Bây giờ bạn có thể tiếp tục hay đăng nhập tại <a href=http://www.paypal.com>www.paypal.com</a> để xem chi tiết thông giao dịch.',
	'PHPSHOP_PAYPAL_ERROR' => 'Đã xảy ra lỗi trong khi xử lý giao dịch của bạn. Tình trạng đặt hàng của bạn có thể không được cập nhật.',
	'PHPSHOP_THANKYOU_SUCCESS' => 'Quá trình mua hàng đã hoàn tất!',
	'VM_CHECKOUT_TITLE_TAG' => 'Thanh toán: Bước %s of %s',
	'VM_CHECKOUT_ORDERIDNOTSET' => 'Mã đơn hàng là không thiết lập hoặc rỗng!',
	'VM_CHECKOUT_FAILURE' => 'Thất bại',
	'VM_CHECKOUT_SUCCESS' => 'Thành công',
	'VM_CHECKOUT_PAGE_GATEWAY_EXPLAIN_1' => 'Trang web này nằm trên WebShop \s website.',
	'VM_CHECKOUT_PAGE_GATEWAY_EXPLAIN_2' => 'Các cửa ngõ thực hiện các trang trên trang web, và hiển thị các kết quả đã được mã hóa SSL.',
	'VM_CHECKOUT_CCV_CODE' => 'Mã số xác nhận thẻ tín dụng',
	'VM_CHECKOUT_CCV_CODE_TIPTITLE' => 'Thẻ tín dụng Xác Nhận Mã số?',
	'VM_CHECKOUT_MD5_FAILED' => 'MD5 Kiểm tra không thành công',
	'VM_CHECKOUT_ORDERNOTFOUND' => 'Không được tìm thấy đơn hàng',
	'PHPSHOP_EPAY_PAYMENT_CARDTYPE' => 'Các thanh toán được tạo ra bởi %s <img
src="/components/com_virtuemart/shop_image/ps_image/epay_images/%s"
border="0">'
); $VM_LANG->initModule( 'checkout', $langvars );
?>