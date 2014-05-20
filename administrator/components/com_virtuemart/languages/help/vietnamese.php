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
	'VM_HELP_YOURVERSION' => 'Phiên bản sản phẩm của bạn',
	'VM_HELP_ABOUT' => '<span style="font-weight: bold;">
		VirtueMart</span> là mã nguồn mở hoàn toàn cho Thương mại điện tử và giải pháp cho Mambo Joomla!. 
		Nó là một ứng dụng, có kèm theo một phần, nhiều hơn 8 và Modules Mambots / Plugins.
		Nó có nguồn gốc là một Giỏ hàng chữ viết được gọi là "phpShop" (Tác giả: Edikon Corp. & the <a href="http://www.virtuemart.org/" target="_blank">phpShop</a> cộng đồng).',
	'VM_HELP_LICENSE_DESC' => 'VirtueMart được cấp giấy phép theo <a href="{licenseurl}" target="_blank">{licensename} Giấy phép</a>.',
	'VM_HELP_TEAM' => 'Có một nhóm nhỏ của những người giúp đỡ phát triển trong Shopping Cart Script.',
	'VM_HELP_PROJECTLEADER' => 'Quản lý dự án',
	'VM_HELP_HOMEPAGE' => 'Trang chủ',
	'VM_HELP_DONATION_DESC' => 'Vui lòng xem xét nhỏ về VirtueMart để đóng góp vào dự án giúp chúng tôi tiếp tục phát triển trên phần này và tạo ra nhiều tính năng mới.',
	'VM_HELP_DONATION_BUTTON_ALT' => 'Thực hiện thanh toán với nhanh PayPal, miễn phí và an toàn!'
); $VM_LANG->initModule( 'help', $langvars );
?>