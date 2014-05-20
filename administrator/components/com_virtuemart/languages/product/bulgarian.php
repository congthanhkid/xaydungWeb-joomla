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
	'CHARSET' => 'cp1251',
	'PHPSHOP_MODULE_LIST_ORDER' => '����������',
	'PHPSHOP_PRODUCT_INVENTORY_LBL' => '�����',
	'PHPSHOP_PRODUCT_INVENTORY_STOCK' => '�����',
	'PHPSHOP_PRODUCT_INVENTORY_WEIGHT' => '�����',
	'PHPSHOP_PRODUCT_LIST_PUBLISH' => '����������',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE' => '������� �� �������',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRODUCT' => '��������',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRICE' => '� ��������� ����',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_WITHOUTPRICE' => '��� ����',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_AFTER' => '����',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_BEFORE' => '�����',
	'PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE' => '������������� ������� �� �������� �������� �� �������� � ��������',
	'PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL' => '��� �������',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL' => '���������� �� ��������',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL' => '������ �� ��������',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL' => '������ � ����� �� ��������',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL' => '����������� �� ��������',
	'PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL' => '������� �� ��������',
	'PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL' => '���������� �� ��������',
	'PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL' => '������ �� ��������',
	'PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL' => '������ � ����� �� ��������',
	'PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL' => '����������� �� ����������',
	'PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL' => '�� ������� �� �������� ����������� �������� ��� ��� �� ������ �����������.',
	'PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL' => '��������� �� �������� �����������.',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL' => '�������� �� �������',
	'PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL' => '�������� �� ��������',
	'PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG' => '������� �� ���, �� ������ �� �������� ��������\n� ����������, ����� �� ������� ��� ����?',
	'PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG' => '������� �� ���, �� ������ �� �������� ���� �������?',
	'PHPSHOP_PRODUCT_FORM_MANUFACTURER' => '������������',
	'PHPSHOP_PRODUCT_FORM_SKU' => '���',
	'PHPSHOP_PRODUCT_FORM_NAME' => '���',
	'PHPSHOP_PRODUCT_FORM_CATEGORY' => '���������',
	'PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE' => '���� �� ���������',
	'PHPSHOP_PRODUCT_FORM_SPECIAL' => '��������� (�� �����������)',
	'PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE' => '��� ��������',
	'PHPSHOP_PRODUCT_FORM_PUBLISH' => '�����������?',
	'PHPSHOP_PRODUCT_FORM_LENGTH' => '�������',
	'PHPSHOP_PRODUCT_FORM_WIDTH' => '������',
	'PHPSHOP_PRODUCT_FORM_HEIGHT' => '��������',
	'PHPSHOP_PRODUCT_FORM_DIMENSION_UOM' => '����� �������',
	'PHPSHOP_PRODUCT_FORM_WEIGHT_UOM' => '����� �������',
	'PHPSHOP_PRODUCT_FORM_FULL_IMAGE' => '����������� � ����� ������',
	'PHPSHOP_PRODUCT_FORM_WEIGHT_UOM_DEFAULT' => '������',
	'PHPSHOP_PRODUCT_FORM_DIMENSION_UOM_DEFAULT' => '����',
	'PHPSHOP_PRODUCT_FORM_PACKAGING' => '������� � ��������',
	'PHPSHOP_PRODUCT_FORM_PACKAGING_DESCRIPTION' => '��� ���� �� ��������� ���� ������� � 1 ��������. (����. 65535)',
	'PHPSHOP_PRODUCT_FORM_BOX' => '������� � �����',
	'PHPSHOP_PRODUCT_FORM_BOX_DESCRIPTION' => '��� ���� �� ��������� ���� ������� � �����. (����. 65535)',
	'PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL' => '�������� �� �������� �� �������',
	'PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL' => '�������� �� ������� �� �������',
	'PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL' => '�������� �� �������� �� �������',
	'PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL' => '�������� �� ������� �� �������',
	'PHPSHOP_CATEGORY_FORM_LBL' => '���������� �� ���������',
	'PHPSHOP_CATEGORY_FORM_NAME' => '��� �� �����������',
	'PHPSHOP_CATEGORY_FORM_PARENT' => '�������',
	'PHPSHOP_CATEGORY_FORM_DESCRIPTION' => '�������� �� �����������',
	'PHPSHOP_CATEGORY_FORM_PUBLISH' => '�����������?',
	'PHPSHOP_CATEGORY_FORM_FLYPAGE' => 'Flypage �� �����������',
	'PHPSHOP_ATTRIBUTE_LIST_LBL' => '������ �� ���������� ��',
	'PHPSHOP_ATTRIBUTE_LIST_NAME' => '��� �� ��������',
	'PHPSHOP_ATTRIBUTE_LIST_ORDER' => '����������',
	'PHPSHOP_ATTRIBUTE_FORM_LBL' => '�������� �� �������',
	'PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT' => '��� ������� �� �������',
	'PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT' => '������� �� ������� �� �������',
	'PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM' => '��� ������� �� �������',
	'PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM' => '������� �� ������� �� �������',
	'PHPSHOP_ATTRIBUTE_FORM_NAME' => '��� �� �������',
	'PHPSHOP_ATTRIBUTE_FORM_ORDER' => '����������',
	'PHPSHOP_PRICE_LIST_FOR_LBL' => '���� ��',
	'PHPSHOP_PRICE_LIST_GROUP_NAME' => '��� �� �������',
	'PHPSHOP_PRICE_LIST_PRICE' => '����',
	'PHPSHOP_PRODUCT_LIST_CURRENCY' => '������',
	'PHPSHOP_PRICE_FORM_LBL' => '���������� �� ����',
	'PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT' => '���� ���� �� �������',
	'PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT' => '������� �� ���� �� �������',
	'PHPSHOP_PRICE_FORM_NEW_FOR_ITEM' => '���� ���� �� �������',
	'PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM' => '������� �� ���� �� �������',
	'PHPSHOP_PRICE_FORM_PRICE' => '����',
	'PHPSHOP_PRICE_FORM_CURRENCY' => '������',
	'PHPSHOP_PRICE_FORM_GROUP' => '��������� �����',
	'PHPSHOP_LEAVE_BLANK' => '(�������� ������, ��� ������<br />������� php-���� �� ����!)',
	'PHPSHOP_PRODUCT_FORM_ITEM_LBL' => '�������',
	'PHPSHOP_PRODUCT_DISCOUNT_STARTDATE' => '���������� ���� ��',
	'PHPSHOP_PRODUCT_DISCOUNT_STARTDATE_TIP' => 'Ot koi DEN vaji otstupkata',
	'PHPSHOP_PRODUCT_DISCOUNT_ENDDATE' => '���������� ���� ��',
	'PHPSHOP_PRODUCT_DISCOUNT_ENDDATE_TIP' => 'Do koi DEN vaji otstupkata',
	'PHPSHOP_FILEMANAGER_PUBLISHED' => '�����������?',
	'PHPSHOP_FILES_LIST' => '������ �������::������ �� �����������/������� ��',
	'PHPSHOP_FILES_LIST_FILENAME' => '��� �� �����',
	'PHPSHOP_FILES_LIST_FILETITLE' => '�������� �� �����',
	'PHPSHOP_FILES_LIST_FILETYPE' => '��� �� �����',
	'PHPSHOP_FILES_LIST_FULL_IMG' => '����������� � ����� ������',
	'PHPSHOP_FILES_LIST_THUMBNAIL_IMG' => '����������� � ������ ������ (Thumbnail)',
	'PHPSHOP_FILES_FORM' => '������� �� ���� ��',
	'PHPSHOP_FILES_FORM_CURRENT_FILE' => '����� ����',
	'PHPSHOP_FILES_FORM_FILE' => '����',
	'PHPSHOP_FILES_FORM_IMAGE' => '�����������',
	'PHPSHOP_FILES_FORM_UPLOAD_TO' => '������� �',
	'PHPSHOP_FILES_FORM_UPLOAD_IMAGEPATH' => '�� ������������',
	'PHPSHOP_FILES_FORM_UPLOAD_OWNPATH' => '����� �������� �� ����',
	'PHPSHOP_FILES_FORM_UPLOAD_DOWNLOADPATH' => '��� �� ������� (����. ��� ��������� �� ��������� ��������, ����� �� ������ �� �������!)',
	'PHPSHOP_FILES_FORM_AUTO_THUMBNAIL' => '����������� ��������� �� ������ ������ (Thumbnail)?',
	'PHPSHOP_FILES_FORM_FILE_PUBLISHED' => '������ � ����������?',
	'PHPSHOP_FILES_FORM_FILE_TITLE' => '�������� �� ����� (����� �� ����� �� ��������)',
	'PHPSHOP_FILES_FORM_FILE_URL' => 'URL �� ����� (�� � ������������)',
	'PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP1' => '��������� � �����, ����� �� ������� �� �� ������� � ���������� � �������� ���������� �� ��������.<br />����.: 24 ����, 48 ����, 3-5 ���, ��� ������...',
	'PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP2' => '��� �������� �����������, ����� �� �� ������� � ���������� � �������� ���������� �� �������� (flypage).<br />������������� �� ���������� � ���������� <i>%s</i><br />',
	'PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST_EXAMPLES' => '<h4>������� �� ����������� �� ������� � custom ��������:</h4>
        <pre>Name;Extras;</strong>...</pre>',
	'PHPSHOP_IMAGE_ACTION' => '��������',
	'PHPSHOP_PARAMETERS_LBL' => '���������',
	'PHPSHOP_PRODUCT_TYPE_LBL' => '��� �� ��������',
	'PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_LBL' => '������ �� �������� ��������',
	'PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_LBL' => '�������� �� ��� ������� ��',
	'PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_PRODUCT_TYPE' => '��� �������',
	'PHPSHOP_PRODUCT_TYPE_FORM_NAME' => '��� �� ����',
	'PHPSHOP_PRODUCT_TYPE_FORM_DESCRIPTION' => '�������� �� ����',
	'PHPSHOP_PRODUCT_TYPE_FORM_PARAMETERS' => '���������',
	'PHPSHOP_PRODUCT_TYPE_FORM_LBL' => '���������� �� ���� �������',
	'PHPSHOP_PRODUCT_TYPE_FORM_PUBLISH' => '�����������?',
	'PHPSHOP_PRODUCT_TYPE_FORM_BROWSEPAGE' => '�������� �� ��������� �� �������� ��������',
	'PHPSHOP_PRODUCT_TYPE_FORM_FLYPAGE' => 'Flypage �� �������� ��������',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_LIST_LBL' => '��������� �� ��� ��������',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LBL' => '���������� �� ���������',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NOT_FOUND' => '����� �������� �� � �������!',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME' => '��� �� ���������',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME_DESCRIPTION' => '���� ��� �� � �������� �� �������� � ���������. ������ �� � �������� � �� �� ������� ���������.<br/>��������: main_material',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LABEL' => '������ �� ���������',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_INTEGER' => '���� �����',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TEXT' => '�����',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_SHORTTEXT' => '������ �����',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_FLOAT' => '��������� �����',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_CHAR' => '������',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATETIME' => '���� � �����',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE' => '����',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME' => '�����',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_BREAK' => '������������ �����',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_MULTIVALUE' => '��������� ���������',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES' => '�������� ���������',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_MULTISELECT' => '����������� �� ����� �� ������� �������� ��������. <br />(��� �������� ������ - �� ���� �� �� ������ ���� ����)',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES_DESCRIPTION' => '<strong>��� ���������� ��������� �� �������, ��������� �� ����� �� ������� ���� ����. ������ �� �������� ���������:</strong><br/><span class="sectionname">�����;�����;���������;...</span>',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT' => '�������� �� ������������',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT_HELP_TEXT' => '�� �������� �� ������������ �� ��������� ��������� ������� ������:<ul><li>����: ����-��-��</li><li>�����: ��:��:��</li><li>���� � �����: ����-��-�� ��:��:��</li></ul>',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_UNIT' => '�������',
	'PHPSHOP_PRODUCT_CLONE' => '��������� �� �������',
	'PHPSHOP_HIDE_OUT_OF_STOCK' => '�������� �� ����������, ����� �� �� ������� �� �����',
	'PHPSHOP_FEATURED_PRODUCTS_LIST_LBL' => '����������� �������� � �������� � ��������',
	'PHPSHOP_FEATURED' => '�����������',
	'PHPSHOP_SHOW_FEATURED_AND_DISCOUNTED' => '����������� �������� � �������� � ��������',
	'PHPSHOP_SHOW_DISCOUNTED' => '�������� � ��������',
	'PHPSHOP_FILTER' => '������',
	'PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE' => '���� � ��������',
	'PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE_TIP' => '��� ������ �� ���������� ����������� �� �������� ���� �������� ���� � �������� �� ���� �������.<br/>��������� ����������� �� ������� ����� � ����������.',
	'PHPSHOP_PRODUCT_LIST_QUANTITY_START' => '���������� ��',
	'PHPSHOP_PRODUCT_LIST_QUANTITY_END' => '���������� ��',
	'VM_PRODUCTS_MOVE_LBL' => 'Move products from one category to another',
	'VM_PRODUCTS_MOVE_LIST' => 'You have chosen to move the following %s products',
	'VM_PRODUCTS_MOVE_TO_CATEGORY' => 'Move to the following category',
	'VM_PRODUCT_LIST_REORDER_TIP' => 'Select a product category to reorder products in a category',
	'VM_REVIEW_FORM_LBL' => 'Add Review',
	'PHPSHOP_REVIEW_EDIT' => 'Add/Edit a Review',
	'SEL_CATEGORY' => 'Select a category',
	'VM_PRODUCT_FORM_MIN_ORDER' => 'Minimum Purchase Quantity',
	'VM_PRODUCT_FORM_MAX_ORDER' => 'Maximum Purchase Quantity',
	'VM_DISPLAY_TABLE_HEADER' => 'Display Table Header',
	'VM_DISPLAY_LINK_TO_CHILD' => 'Link to child product from list',
	'VM_DISPLAY_INCLUDE_PRODUCT_TYPE' => 'Include Product Type With Child',
	'VM_DISPLAY_USE_LIST_BOX' => 'Use List box for child products',
	'VM_DISPLAY_LIST_STYLE' => 'List Style',
	'VM_DISPLAY_USE_PARENT_LABEL' => 'Use Parent Settings:',
	'VM_DISPLAY_LIST_TYPE' => 'List:',
	'VM_DISPLAY_QUANTITY_LABEL' => 'Quantity:',
	'VM_DISPLAY_QUANTITY_DROPDOWN_LABEL' => 'Drop Down Box Values',
	'VM_DISPLAY_CHILD_DESCRIPTION' => 'Display Child Description',
	'VM_DISPLAY_DESC_WIDTH' => 'Child Description Width',
	'VM_DISPLAY_ATTRIB_WIDTH' => 'Child Attribute Width',
	'VM_DISPLAY_CHILD_SUFFIX' => 'Child Class Suffix',
	'VM_INCLUDED_PRODUCT_ID' => 'Product IDs to include',
	'VM_EXTRA_PRODUCT_ID' => 'Extra IDs',
	'PHPSHOP_DISPLAY_RADIOBOX' => 'Use Radio Box',
	'PHPSHOP_PRODUCT_FORM_ITEM_DISPLAY_LBL' => 'Display Options',
	'PHPSHOP_DISPLAY_USE_PARENT' => 'Override Child products Display Values and use parents',
	'PHPSHOP_DISPLAY_NORMAL' => 'Standard Quantity Box',
	'PHPSHOP_DISPLAY_HIDE' => 'Hide Quantity Box',
	'PHPSHOP_DISPLAY_DROPDOWN' => 'Use Dropdown Box',
	'PHPSHOP_DISPLAY_CHECKBOX' => 'Use Check Box',
	'PHPSHOP_DISPLAY_ONE' => 'One Add to Cart Button',
	'PHPSHOP_DISPLAY_MANY' => 'Add to Cart Button for each Child',
	'PHPSHOP_DISPLAY_START' => 'Start Value',
	'PHPSHOP_DISPLAY_END' => 'End Value',
	'PHPSHOP_DISPLAY_STEP' => 'Step Value',
	'PRODUCT_WAITING_LIST_TAB' => 'Waiting List',
	'PRODUCT_WAITING_LIST_USERLIST' => 'Users waiting to be notified when this product is back in stock',
	'PRODUCT_WAITING_LIST_NOTIFYUSERS' => 'Notify these users now (when you have updated the number of products stock)',
	'PRODUCT_WAITING_LIST_NOTIFIED' => 'notified',
	'VM_PRODUCT_FORM_AVAILABILITY_SELECT_IMAGE' => 'Select Image',
	'VM_PRODUCT_RELATED_SEARCH' => 'Search for Products or Categories here:',
	'VM_FILES_LIST_ROLE' => 'Role',
	'VM_FILES_LIST_UP' => 'Up',
	'VM_FILES_LIST_GO_UP' => 'Go Up',
	'VM_CATEGORY_FORM_PRODUCTS_PER_ROW' => 'Show x products per row',
	'VM_CATEGORY_FORM_BROWSE_PAGE' => 'Category Browse Page',
	'VM_PRODUCT_CLONE_OPTIONS_TAB' => 'Clone Product Otions',
	'VM_PRODUCT_CLONE_OPTIONS_LBL' => 'Also clone these Child Items',
	'VM_PRODUCT_LIST_MEDIA' => 'Media',
	'VM_REVIEW_LIST_NAMEDATE' => 'Name/Date',
	'VM_PRODUCT_SELECT_ONE_OR_MORE' => 'Select one or more Products',
	'VM_PRODUCT_SEARCHING' => 'Searching...',
	'PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST_EXAMPLES' => '<h4>Examples for the Attribute List Format:</h4>
Title = Color, Property = Red ; Click on New Property to add a new color: Green ; Then click on New attribute to add a new attribute, and so on.
<h4>Inline price adjustments for using the Advanced Attributes modification:</h4>
Price = +10 to add this amount to the configured price.<br />  Price = -10 to subtract this amount from the configured price.<br />  Price = 10 to set the product\'s price to this amount.',
	'VM_FILES_FORM_PRODUCT_IMAGE' => 'Product Image (full and thumb)',
	'VM_FILES_FORM_DOWNLOADABLE' => 'Downloadable Product File (to be sold!)',
	'VM_FILES_FORM_RESIZE_IMAGE' => 'Resize Full Image File?'
); $VM_LANG->initModule( 'product', $langvars );
?>