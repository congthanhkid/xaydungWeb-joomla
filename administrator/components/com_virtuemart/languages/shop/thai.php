<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
** @version : thai.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'PHPSHOP_BROWSE_LBL' => 'เลือกซื้อ',
	'PHPSHOP_FLYPAGE_LBL' => 'รายละเอียดสินค้า',
	'PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT' => 'แก้ไขรายการสินค้านี้',
	'PHPSHOP_DOWNLOADS_START' => 'เริ่มต้นดาวน์โหลด',
	'PHPSHOP_DOWNLOADS_INFO' => 'กรุณาใส่รหัส Download-ID ที่ส่งให้ท่านทางอีเมล์ แล้วกดปุ่ม เริ่มต้นดาวน์โหลด',
	'PHPSHOP_WAITING_LIST_MESSAGE' => 'กรุณาใส่อีเมล์ของท่าน เพื่อที่จะได้แจ้งกลับให้ทราบเมื่อมีรายการสินค้าในสต็อค เราจะไม่แบ่ง , ให้เช่า , ขาย หรือใช้อีเมล์ของท่านสำหรับรายการอื่นๆนอกจากแจ้งให้ท่านทราบเมื่อมีสินค้าในสต็อค<br /><br />Thank you!',
	'PHPSHOP_WAITING_LIST_THANKS' => 'ขอบคุณที่กรุณารอ! <br />เราจะแจ้งให้คุณทราบเมื่อมีรายการในคลังสินค้า',
	'PHPSHOP_WAITING_LIST_NOTIFY_ME' => 'แจ้งให้ทราบ!',
	'PHPSHOP_SEARCH_ALL_CATEGORIES' => 'ค้นหาจากหมวดทั้งหมด',
	'PHPSHOP_SEARCH_ALL_PRODINFO' => 'ค้นหารายละเอียดสินค้าทั้งหมด',
	'PHPSHOP_SEARCH_PRODNAME' => 'ชื่อสินค้าอย่างเดียว',
	'PHPSHOP_SEARCH_MANU_VENDOR' => 'ผู้ขาย/ผู้ผลิต อย่างเดียว',
	'PHPSHOP_SEARCH_DESCRIPTION' => 'รายละเอียดสินค้าอย่างเดียว',
	'PHPSHOP_SEARCH_AND' => 'และ',
	'PHPSHOP_SEARCH_NOT' => 'ไม่',
	'PHPSHOP_SEARCH_TEXT1' => 'รายการแรกสำหรับการเลือกหมวดหมู่ .รายการที่สองสำหรับเลือกรายละเอียด หรือส่วนประกอบเกี่ยวกับสินค้า (เช่น ชื่อสินค้า) เมื่อเลือกรายการแล้ว ให้ใส่คำที่ต้องการค้นหาเพื่อค้นหาสินค้า ',
	'PHPSHOP_SEARCH_TEXT2' => 'ท่านสามารถค้นหาแบบเจาะจงมากขึ้น โดยการเพิ่มคำที่ต้องการค้นหา และเลือกใช้คำสั่ง AND หรือ OR  -  เลือก AND หมายถึงจะค้นหาสินค้าที่มีคำค้นหาทั้งสองคำ,  เลือก OR หมายถึงจะค้นหาสินค้าที่มีคำค้นหาคำแรก และไม่มีคำที่สอง',
	'PHPSHOP_CONTINUE_SHOPPING' => 'เลือกสินค้าต่อ',
	'PHPSHOP_AVAILABLE_IMAGES' => 'รูปภาพสำหรับ',
	'PHPSHOP_BACK_TO_DETAILS' => 'รายละเอียดสินค้า',
	'PHPSHOP_IMAGE_NOT_FOUND' => 'ไม่พบรูปภาพ!',
	'PHPSHOP_PARAMETER_SEARCH_TEXT1' => 'Do you will find products according to technical parametrs?<BR>You can used any prepared form:',
	'PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE' => 'ขออภัย ไม่พบประเภทที่ท่านค้นหา.',
	'PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE' => 'ขออภัย ไม่พบชนิดสินค้าชื่อนี้.',
	'PHPSHOP_PARAMETER_SEARCH_IS_LIKE' => 'Is Like',
	'PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE' => 'Is NOT Like',
	'PHPSHOP_PARAMETER_SEARCH_FULLTEXT' => 'Full-Text Search',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL' => 'เลือกทั้งหมด',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY' => 'เลือกทั้งหมด',
	'PHPSHOP_PARAMETER_SEARCH_RESET_FORM' => 'คืนค่าฟอร์ม',
	'PHPSHOP_PRODUCT_NOT_FOUND' => 'ขออภัย ไม่พบสินค้าที่ท่านค้นหา!',
	'PHPSHOP_PRODUCT_PACKAGING1' => 'จำนวน {unit}s ในแพคเกจ:',
	'PHPSHOP_PRODUCT_PACKAGING2' => 'จำนวน {unit}s ในกล่อง:',
	'PHPSHOP_CART_PRICE_PER_UNIT' => 'ราคาต่อหน่วย',
	'VM_PRODUCT_ENQUIRY_LBL' => 'สอบถามเกี่ยวกับสินค้า',
	'VM_RECOMMEND_FORM_LBL' => 'แนะนำสินค้านี้กับเพื่อน',
	'PHPSHOP_EMPTY_YOUR_CART' => 'รถเข็นว่าง',
	'VM_RETURN_TO_PRODUCT' => 'กลับไปยังสินค้า',
	'EMPTY_CATEGORY' => 'แคตตาล๊อกนี้ว่าง.',
	'ENQUIRY' => 'สอบถาม',
	'NAME_PROMPT' => 'กรุณาใส่ชื่อ',
	'EMAIL_PROMPT' => 'อีเมล์',
	'MESSAGE_PROMPT' => 'ใส่ข้อความ',
	'SEND_BUTTON' => 'ส่ง',
	'THANK_MESSAGE' => 'ขอบคุณสำหรับคำถาม. เราจะติดต่อคุณไปเร็วๆนี้.',
	'PROMPT_CLOSE' => 'ปิด',
	'VM_RECOVER_CART_REPLACE' => 'แทนที่สินค้าในตะกร้าจากรายการที่บันทึก',
	'VM_RECOVER_CART_MERGE' => 'เพิ่มการบันทึกสินค้าในตะกร้าปัจจุบัน',
	'VM_RECOVER_CART_DELETE' => 'ลบสินค้าในตะกร้าที่บันทึก',
	'VM_EMPTY_YOUR_CART_TIP' => 'ล้างตะกร้าสินค้าของทุกเนื้อหา',
	'VM_SAVED_CART_TITLE' => 'บันทึกตะกร้า',
	'VM_SAVED_CART_RETURN' => 'ย้อนกลับ'
); $VM_LANG->initModule( 'shop', $langvars );
?>