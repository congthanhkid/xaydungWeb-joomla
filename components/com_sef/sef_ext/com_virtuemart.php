<?php
/**
 * VirtueMart SEF extension for Joomla!
 *
 * @author      $Author: David Jozefov $
 * @copyright   ARTIO s.r.o., http://www.artio.cz
 * @package     JoomSEF
 */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access.');

define( '_COM_SEF_PRIORITY_VIRTUEMART_PRODUCT_ITEMID',  15 );
define( '_COM_SEF_PRIORITY_VIRTUEMART_PRODUCT',         20 );
define( '_COM_SEF_PRIORITY_VIRTUEMART_CATEGORY_ITEMID', 25 );
define( '_COM_SEF_PRIORITY_VIRTUEMART_CATEGORY',        30 );

class SefExt_com_virtuemart extends SefExt
{
    var $pagetitle;
    var $category_desc;
    var $product_desc;
    var $should_number;

    function getNonSefVars(&$uri)
    {
        $this->_createNonSefVars($uri);
        
        return array($this->nonSefVars, $this->ignoreVars);
    }
    
    function _createNonSefVars(&$uri)
    {
        if (isset($this->nonSefVars) && isset($this->ignoreVars))
            return;
            
        $this->params = SEFTools::getExtParams('com_virtuemart');
        
        $this->nonSefVars = array();
        $this->ignoreVars = array();
        
        // non-sef vars
        if (!is_null($uri->getVar('limit')))
            $this->nonSefVars['limit'] = $uri->getVar('limit');
        if (!is_null($uri->getVar('limitstart')))
            $this->nonSefVars['limitstart'] = $uri->getVar('limitstart');
        if (!is_null($uri->getVar('orderby')))
            $this->nonSefVars['orderby'] = $uri->getVar('orderby');
        if (!is_null($uri->getVar('DescOrderBy')))
            $this->nonSefVars['DescOrderBy'] = $uri->getVar('DescOrderBy');
        if (!is_null($uri->getVar('redirected')))
            $this->nonSefVars['redirected'] = $uri->getVar('redirected');
            
        if (($uri->getVar('page') == 'shop.downloads') && !is_null($uri->getVar('download_id')))
            $this->nonSefVars['download_id'] = $uri->getVar('download_id');
            
        if (($uri->getVar('page') == 'shop.parameter_search_form') && !is_null($uri->getVar('product_type')))
            $this->nonSefVars['product_type'] = $uri->getVar('product_type');
        
        if ($this->params->get('flypagehandle', 'addnever') == 'nonsef') {
            if (!is_null($uri->getVar('flypage')))
                $this->nonSefVars['flypage'] = $uri->getVar('flypage');
        }
        
        // ignored vars
        if (!is_null($uri->getVar('order_id')))
            $this->ignoreVars['order_id'] = $uri->getVar('order_id');
        if (!is_null($uri->getVar('ship_to_info_id')))
            $this->ignoreVars['ship_to_info_id'] = $uri->getVar('ship_to_info_id');
        if (!is_null($uri->getVar('shipping_rate_id')))
            $this->ignoreVars['shipping_rate_id'] = $uri->getVar('shipping_rate_id');
        if (!is_null($uri->getVar('payment_method_id')))
            $this->ignoreVars['payment_method_id'] = $uri->getVar('payment_method_id');
        if (!is_null($uri->getVar('checkout_this_step')))
            $this->ignoreVars['checkout_this_step'] = $uri->getVar('checkout_this_step');
        if (!is_null($uri->getVar('checkout_next_step')))
            $this->ignoreVars['checkout_next_step'] = $uri->getVar('checkout_next_step');
        if (!is_null($uri->getVar('checkout_stage')))
            $this->ignoreVars['checkout_stage'] = $uri->getVar('checkout_stage');
        if (!is_null($uri->getVar('keyword')))
            $this->ignoreVars['keyword'] = $uri->getVar('keyword');
        if (!is_null($uri->getVar('keyword1')))
            $this->ignoreVars['keyword1'] = $uri->getVar('keyword1');
        if (!is_null($uri->getVar('keyword2')))
            $this->ignoreVars['keyword2'] = $uri->getVar('keyword2');
        if (!is_null($uri->getVar('search')))
            $this->ignoreVars['search'] = $uri->getVar('search');
        if (!is_null($uri->getVar('Search')))
            $this->ignoreVars['Search'] = $uri->getVar('Search');
        if (!is_null($uri->getVar('vmcchk')))
            $this->ignoreVars['vmcchk'] = $uri->getVar('vmcchk');
        if (!is_null($uri->getVar('pop')))
            $this->ignoreVars['pop'] = $uri->getVar('pop');
        if (!is_null($uri->getVar('user_info_id')))
            $this->ignoreVars['user_info_id'] = $uri->getVar('user_info_id');
    }
    
    /**
     * Creates an array of nested categories from given category id
     */
    function GetCategories($catId)
    {
        $database = & JFactory::getDBO();
        $sefConfig = & SEFConfig::getConfig();
        
        $categories = array();

        // Check if we want our URLs translated
        if ($sefConfig->translateNames) {
            $jfTranslate = ', `category_id`';
        } else {
            $jfTranslate = '';
        }
        
        while ($catId > 0) {
            $database->setQuery("SELECT `category_name`, `category_description`$jfTranslate FROM `#__vm_category` WHERE `category_id` = " . $catId);
            $row = $database->loadObject();
            if( !$row ) {
                break;
            }
            
            $name = ($this->params->get('categoryid', '0') != '0' ? $catId . '-' : '') . stripslashes($row->category_name);
            array_unshift($categories, $name);
            
            // Set category description if not already set
            if( empty($this->category_desc) ) {
                $this->category_desc = stripslashes($row->category_description);
            }
            
            $database->setQuery("SELECT `category_parent_id` FROM `#__vm_category_xref` WHERE `category_child_id` = $catId");
            $catId = $database->loadResult();
        }
        
        if (empty($categories)) {
            return null;
        }
        
        return $categories;
    }

    /**
     * Returns category_id for a given product id
     */
    function GetProductCategoryId($productId)
    {
        $database = & JFactory::getDBO();
        
        $database->setQuery("SELECT `category_id` FROM `#__vm_product_category_xref` WHERE `product_id` = " . $productId);
        return $database->loadResult();
    }

    /**
     * Returns manufacturer id for a given product id
     */
    function GetProductManufacturerId($productId)
    {
        $database = & JFactory::getDBO();
        
        $database->setQuery("SELECT `manufacturer_id` FROM `#__vm_product_mf_xref` WHERE `product_id` = " . $productId);
        return $database->loadResult();
    }

    /**
     * Returns product name for a given product id
     */
    function GetProductName($productId)
    {
        $database = & JFactory::getDBO();
        $sefConfig = & SEFConfig::getConfig();
        
        $descrow = ($this->params->get('product_desc', '2') == '1') ? 'product_s_desc' : 'product_desc';
        
        // Check if we want our URLs translated
        if ($sefConfig->translateNames) {
            $jfTranslate = ', `product_id`';
        } else {
            $jfTranslate = '';
        }
        
        // If we're in this function, it means that the URL with
        // product name is being created, so let's number duplicates
        // if set to
        if ($this->params->get('numberproducts', '1') == '1') {
            $this->should_number = true;
        }
        
        $database->setQuery("SELECT `product_name`, `product_sku`, `$descrow`$jfTranslate FROM `#__vm_product` WHERE `product_id` = " . $productId);
        $row = $database->loadObject();
        if (!$row) {
            return null;
        }
        
        if (empty($this->product_desc)) {
            $this->product_desc = $row->$descrow;
        }
        
        $name = array();
        $this->AddProductNamePart($name, $productId, $row, $this->params->get('productname1', ''));
        $this->AddProductNamePart($name, $productId, $row, $this->params->get('productname2', 'title'));
        $this->AddProductNamePart($name, $productId, $row, $this->params->get('productname3', ''));
        $name = implode('-', $name);
        
        return $name;
    }
    
    function AddProductNamePart(&$name, $id, $product, $part)
    {
        switch ($part)
        {
            case 'id':
                $name[] = $id;
                return;
            case 'title':
                $name[] = $product->product_name;
                return;
            case 'sku':
                $name[] = $product->product_sku;
                return;
        }
    }
    
    /**
     * Returns product type name for given product type id
     */
    function GetProductType($id)
    {
        $db =& JFactory::getDBO();
        $sefConfig =& SEFConfig::getConfig();
        
        // Check if we want our URLs translated
        if ($sefConfig->translateNames) {
            $jfTranslate = ', `product_type_id`';
        } else {
            $jfTranslate = '';
        }
        
        $db->setQuery("SELECT `product_type_name`$jfTranslate FROM `#__vm_product_type` WHERE `product_type_id` = $id");
        $row = $db->loadObject();
        if( !$row ) {
            return null;
        }
        
        $type = ($this->params->get('producttypeid', '0') != '0' ? $id . '-' : '') . $row->product_type_name;
        return $type;
    }
    
    /**
     * Returns parameter title for given product type id and parameter name
     */
    function GetParameterTitle($type_id, $name)
    {
        $db =& JFactory::getDBO();
        $sefConfig =& SEFConfig::getConfig();
        
        // Check if we want our URLs translated
        if ($sefConfig->translateNames) {
            $jfTranslate = ', `product_type_id`, `parameter_name`';
        } else {
            $jfTranslate = '';
        }
        
        $db->setQuery("SELECT `parameter_label`$jfTranslate FROM `#__vm_product_type_parameter` WHERE (`product_type_id` = '{$type_id}') AND (`parameter_name` = '{$name}')");
        $row = $db->loadObject();
        if( !$row ) {
            return null;
        }
        
        $title = $row->parameter_label;
        return $title;
    }

    /**
     * Returns manufacturer name for given manufacturer id
     */
    function GetManufacturer($id)
    {
        $database = & JFactory::getDBO();
        $sefConfig = & SEFConfig::getConfig();
        
        // Check if we want our URLs translated
        if ($sefConfig->translateNames) {
            $jfTranslate = ', `manufacturer_id`';
        } else {
            $jfTranslate = '';
        }
        
        $query = "SELECT `mf_name`$jfTranslate FROM `#__vm_manufacturer` WHERE `manufacturer_id` = '$id'";
        $database->setQuery($query);
        $row = $database->loadObject();
        if (!$row) {
            return null;
        }
        
        $name = ($this->params->get('manufacturerid', '0') != '0' ? $id . '-' : '') . $row->mf_name;
        return $name;
    }

    /**
     * Returns file title for given file id
     */
    function GetFileTitle($id)
    {
        $database = & JFactory::getDBO();
        $sefConfig = & SEFConfig::getConfig();
        
        // Check if we want our URLs translated
        if ($sefConfig->translateNames) {
            $jfTranslate = ', `file_id`';
        } else {
            $jfTranslate = '';
        }
        
        $query = "SELECT `file_title`$jfTranslate FROM `#__vm_product_files` WHERE `file_id` = '$id'";
        $database->setQuery($query);
        $row = $database->loadObject();
        if (!$row) {
            return null;
        }
        
        $name = ($this->params->get('fileid', '0') != '0' ? $id . '-' : '') . $row->file_title;
        return $name;
    }

    /**
     * Fixes some artifacts in URL
     */
    function beforeCreate(&$uri)
    {
        // remove empty category variable
        if ($uri->getVar('page') == 'shop.browse') {
            if ($uri->getVar('category') == '') {
                $uri->delVar('category');
            }
        }
        
        // try to read information from menu parameters
        $menuItem = JoomSEF::_getMenuItemInfo($uri->getVar('option'), $uri->getVar('task'), $uri->getVar('Itemid'));
        if ($menuItem && isset($menuItem->params) && is_object($menuItem->params)) {
            // get variables from params if not defined and available
            if (!$uri->getVar('page') && ($page = $menuItem->params->get('page'))) $uri->setVar('page', $page);
            if (!$uri->getVar('flypage') && ($flypage = $menuItem->params->get('flypage'))) $uri->setVar('flypage', $flypage);
            if (!$uri->getVar('category_id') && ($category_id = $menuItem->params->get('category_id'))) $uri->setVar('category_id', $category_id);
            if (!$uri->getVar('product_id') && ($product_id = $menuItem->params->get('product_id'))) $uri->setVar('product_id', $product_id);
        }
            
        // set default page if not set
        $page = $uri->getVar('page');
        if (!$page) {
            $product_id = $uri->getVar('product_id');
            $category_id = $uri->getVar('category_id');
            if (isset($product_id) && $product_id) $page = 'shop.product_details';
            elseif (isset($category_id) && $category_id) $page = 'shop.browse';
            if ($page) $uri->setVar('page', $page);
        }
        
        if (in_array($uri->getVar('page'), array('shop.getfile' , 'shop.ask' , 'shop.product_details'))) {
            // find category id if not present
            if ($uri->getVar('category_id', '') == '' && $uri->getVar('product_id')) {
                $category_id = $this->GetProductCategoryId($uri->getVar('product_id'));
                $uri->setVar('category_id', $category_id);
            }
            
            // find manufacturer id if not present
            if ($uri->getVar('manufacturer_id', '') == '' && $uri->getVar('product_id')) {
                $manufacturer_id = $this->GetProductManufacturerId($uri->getVar('product_id'));
                if (!empty($manufacturer_id)) {
                    $uri->setVar('manufacturer_id', $manufacturer_id);
                }
            }
        }
        
        // Remove the search variables (the buttons names)
        $uri->delVar('search');
        $uri->delVar('Search');
    }

    /**
     *  Tries to find the URL in database
     * Overloaded to implement ignoring multiple categories
     */
    function getSefUrlFromDatabase(&$uri)
    {
        $database = & JFactory::getDBO();
        $sefConfig = & SEFConfig::getConfig();
        
        $result = parent::getSefUrlFromDatabase($uri);
        
        if (($result === false)) {
            $this->params = SEFTools::getExtParams('com_virtuemart');
            
            // Ignore multiple categories?
            if ($this->params->get('ignorecats', '0') != '0') {
                
                // Extract variables
                $url = new JURI($uri->toString());
                $vars = $url->getQuery(true);
                
                // Return if page is not product_details or there is no category id
                if (! isset($vars['page']) || ($vars['page'] != 'shop.product_details')) {
                    return false;
                }
                
                // Remove variables
                $url->delVar('Itemid');
                if ($this->params->get('nonsefflypage', '0')) {
                    $url->delVar('flypage');
                }
                
                // Find category ID if not present
                if (empty($vars['category_id'])) {
                    $category_id = $this->GetProductCategoryId($vars['product_id']);
                    $url->setVar('category_id', $category_id);
                }
                
                // Fix manufacturer_id
                //if (empty($vars['manufacturer_id'])) {
                    // Get the manufacturer id and add it to non-SEF url (manufacturer id isn't present in shopping cart urls)
                //    $manufacturer_id = $this->GetProductManufacturerId($vars['product_id']);
                //    $url->setVar('manufacturer_id', $manufacturer_id);
                //}
                
                // Sort variables
                $string = JoomSEF::_uriToUrl($url);
                
                // Create regular expression
                $regexp = str_replace(array('?', '*', '+', '^', '[', ']', '.', '|', '(', ')', '{', '}', '^', '$'), array('\\?', '\\*', '\\+', '\\^', '\\[', '\\]', '\\.', '\\|', '\\(', '\\)', '\\{', '\\}', '\\^', '\\$'), $string);
                $regexp = preg_replace('/category_id=[^&]*/', 'category_id=[^&]*', $regexp);
                
                // Get ignore source parameter
                $where = '';
                $extIgnore = $this->params->get('ignoreSource', 2);
                $ignoreSource = ($extIgnore == 2 ? $sefConfig->ignoreSource : $extIgnore);
                if (! $ignoreSource && isset($vars['Itemid'])) {
                    $where = " AND `Itemid` = '" . $vars['Itemid'] . "'";
                }
                
                // Support URLs Trash?
                if (method_exists('SEFTools', 'getSEFVersion') && (version_compare('3.7.3', SEFTools::getSEFVersion()) <= 0)) {
                    $where .= " AND `trashed` = '0'";
                }
                
                // Try to find the URL
                $query = "SELECT `sefurl` FROM `#__sefurls` WHERE `origurl` REGEXP '^" . addslashes($regexp) . "$'" . $where;
                $database->setQuery($query);
                $result = $database->loadresult();
                
                // Add flypage if it was removed
                if (! empty($result)) {
                    if (($this->params->get('nonsefflypage', '0')) && ! empty($vars['flypage'])) {
                        $result .= '?flypage=' . $vars['flypage'];
                    }
                }
            }
        }
        
        return $result;
    }

    function create(&$uri)
    {
        $this->should_number = false;
        
        // VirtueMart language translations.
        $sefConfig = & SEFConfig::getConfig();
        
        // do not SEF admin URLs
        if (substr($uri->getPath(), 0, 10) == 'index2.php') {
            return $uri;
        }
        
        // extract variables
        $vars = $uri->getQuery(true);
        extract($vars);
        
        // reset variables
        $title = array();
        
        $this->params =& SEFTools::getExtParams('com_virtuemart');
        
        // Load the texts to use in URL
        $texts = SEFTools::getExtTexts('com_virtuemart');
        $texts = $this->checkTexts($texts);
        
        // ignore if admin mode
        if (isset($pshop_mode) && ($pshop_mode == 'admin')) {
            return $uri;
        }
        
        // don't SEF checkout URLs
        if (isset($page) && (substr($page, 0, 8) == 'checkout') && ($this->params->get('sefcheckout', '1') != '1')) {
            return $uri;
        }
        
        $title[] = JoomSEF::_getMenuTitle(@$option, @$task, @$Itemid);

        switch (@$page) {
            case 'shop.browse':
                // listing categories
                if (isset($category_id) && ($category_id != 0)) {
                    $catNames = $this->GetCategories($category_id);
                    if (is_null($catNames)) {
                        // Not found, don't SEF
                        return $uri;
                    }
                    
                    if ($this->params->get('categories', '2') == '2') {
                        // All categories
                        foreach ($catNames as $cat) {
                            $title[] = $cat;
                        }
                    } else {
                        // One category
                        $title[] = @$catNames[count($catNames) - 1];
                    }
                    
                    // Meta description
                    if ($this->params->get('category_desc', '1') == '1') {
                        $this->metadesc = $this->category_desc;
                    }
                    
                    // Page title
                    if (($c = $this->params->get('category_title', '0')) != '0') {
                        $cats = array_reverse($catNames);
                        if ($c == '1') {
                            // One category
                            $this->pagetitle = $cats[0];
                        } else {
                            // All categories
                            $sep = ' ' . trim($this->params->get('title_sep', '/')) . ' ';
                            $this->pagetitle = implode($sep, $cats);
                        }
                    }
                } // listing manufacturers
                elseif (isset($manufacturer_id)) {
                    $manufacturer = $this->GetManufacturer($manufacturer_id);
                    if (is_null($manufacturer)) {
                        // Not found, don't SEF
                        return $uri;
                    }
                    $title[] = $manufacturer;
                } // listing all
                elseif (!isset($product_type_id)) {
                    $title[] = $texts['_PHPSHOP_LIST_ALL_PRODUCTS'];
                }
                
                // Cherry Picker support
                if (isset($product_type_id)) {
                    if( $this->params->get('producttype', '1') ) {
                        $type = $this->GetProductType($product_type_id);
                        if (is_null($type)) {
                            // Not found, don't SEF
                            return $uri;
                        }
                        $title[] = $type;
                    }
                    
                    // Find the used parameter name
                    $prefix = 'product_type_' . $product_type_id . '_';
                    $postfix = '_comp';
                    $preLen = strlen($prefix);
                    $postLen = strlen($postfix);
                    
                    foreach($vars as $key => $val) {
                        if( (substr($key, 0, $preLen) == $prefix) && (substr($key, -$postLen) != $postfix) ) {
                            // Parameter found
                            if( $this->params->get('producttypeparameter', '0') ) {
                                // Add parameter name
                                $paramName = substr($key, $preLen);
                                $paramTitle = $this->GetParameterTitle($product_type_id, $paramName);
                                if (is_null($paramTitle)) {
                                    // Not found, don't SEF
                                    return $uri;
                                }
                                $title[] = $paramTitle;
                            }
                            
                            // Add parameter value
                            if (is_array($val)) {
                                $title = array_merge($title, $val);
                            }
                            else {
                                $title[] = $val;
                            }
                            
                            // Add parameter comparison method
                            if ($this->params->get('parametercompare', '1') == '1') {
                                $comp = $key . '_comp';
                                if( isset($$comp) && $$comp != 'texteq' ) {
                                    $title[] = $$comp;
                                }
                            }
                        }
                    }
                    
                }
                // use keyword if available
                /*
                if (isset($keyword)) {
                    $title[] = $keyword;
                    unset($keyword);
                }
                */
                break;
            
            case 'shop.feed':
                {
                    if (isset($category_id) && ($category_id != 0)) {
                        $catNames = $this->GetCategories($category_id, true);
                        if( is_null($catNames) ) {
                            // Not found, don't SEF
                            return $uri;
                        }
                        
                        foreach ($catNames as $cat) {
                            $title[] = $cat;
                        }
                    }
                    $title[] = $texts['_PHPSHOP_FEED'];
                    
                    break;
                }
            
            case 'shop.getfile':
            case 'shop.ask':
            case 'shop.product_details':
            case 'shop.waiting_list':
                {
                    $showCategories = (bool) $this->params->get('productcategories', '1');
                    
                    if (empty($category_id)) {
                        $category_id = $this->GetProductCategoryId($product_id);
                        if( is_null($category_id) ) {
                            // Not found, don't SEF
                            return $uri;
                        }
                        
                        $uri->setVar('category_id', $category_id);
                    }
                    
                    if (empty($manufacturer_id)) {
                        // Get the manufacturer id and add it to non-SEF url (manufacturer id isn't present in shopping cart urls)
                        //$manufacturer_id = $this->GetProductManufacturerId($product_id);
                        //if (is_null($manufacturer_id) && $this->params->get('stopOnNoManufacturer', 0)) {
                            // Not found, don't SEF
                        //    return $uri;
                        //}
                        //else if (is_null($manufacturer_id)) {
                        $uri->delVar('manufacturer_id');
                        //}
                        //else {
                        //    $uri->setVar('manufacturer_id', $manufacturer_id);
                        //}
                    }
                    
                    //$title[] = 'shop';
                    $catNames = $this->GetCategories($category_id);
                    if (is_null($catNames)) {
                        // Not found, don't SEF
                        return $uri;
                    }
                    
                    if ($showCategories) {
                        if (($c = $this->params->get('categories', '2')) != '0') {
                            if ($c == '2') {
                                // All categories
                                foreach ($catNames as $cat) {
                                    $title[] = $cat;
                                }
                            } else {
                                // One category
                                $title[] = @$catNames[count($catNames) - 1];
                            }
                        }
                    }
                    
                    // Add manufacturer before product if set to
                    if ($this->params->get('manufacturer', '0') && isset($manufacturer_id) && $manufacturer_id) {
                        $manufacturer = $this->GetManufacturer($manufacturer_id);
                        if ($manufacturer) $title[] = $manufacturer;
                        //if (is_null($manufacturer)) {
                            // Not found, don't SEF
                            //return $uri;
                            // Not found, throw manufacturer away
							//unset($manufacturer_id);
                        //}
                        //else $title[] = $manufacturer;
                    }
                    
                    $product_name = $this->GetProductName($product_id);
                    if (is_null($product_name)) {
                        // Product not found, don't SEF
                        return $uri;
                    }
                    $title[] = $product_name;
                    
                    if ($page == 'shop.getfile') {
                        if (isset($file_id)) {
                            $fileTitle = $this->GetFileTitle($file_id);
                            if( is_null($fileTitle) ) {
                                // Not found, don't SEF
                                return $uri;
                            }
                            
                            $title[] = $fileTitle;
                        }
                    }
                    
                    if ($page == 'shop.ask') {
                        $title[] = $texts['_PHPSHOP_ASK'];
                        if (isset($subject)) {
                            $title[] = html_entity_decode($subject);
                        }
                    }
                    
                    if ($page == 'shop.product_details') {
                        // Meta description
                        if ($this->params->get('product_desc', '2') != '0') {
                            $this->metadesc = $this->product_desc;
                        }
                        
                        // Page title
                        if (($p = $this->params->get('product_title', '0')) != '0') {
                            $page_titles = array();
                            $page_titles[] = $product_name;
                            
                            $cats = array_reverse($catNames);
                            if ($p == '2') {
                                // Add last category
                                $page_titles[] = $cats[0];
                            } elseif ($p == '3') {
                                // Add all categories
                                $page_titles = array_merge($page_titles, $cats);
                            }
                            
                            $sep = ' ' . trim($this->params->get('title_sep', '/')) . ' ';
                            $this->pagetitle = implode($sep, $page_titles);
                        }
                    }
                    
                    if ($page == 'shop.waiting_list') {
                        $title[] = $texts['_PHPSHOP_WAITLIST'];
                    }
                    
                    break;
                }
            
            case 'shop.downloads':
                {
                    $title[] = $texts['_PHPSHOP_DOWNLOADS_TITLE'];
                    break;
                }
            
            case 'shop.search':
                {
                    $title[] = $texts['_PHPSHOP_ADVANCED_SEARCH'];
                    break;
                }
            
            case 'shop.parameter_search':
                {
                    $title[] = $texts['_PHPSHOP_PARAMETER_SEARCH'];
                    break;
                }
                
            case 'shop.parameter_search_form':
            	{
            		$title[] = $texts['_PHPSHOP_PARAMETER_SEARCH'];
            		$title[] = $texts['_PHPSHOP_FORM'];
                    break;
            	}
            
            case 'shop.cart':
                {
                    $sefcart = $this->params->get('sefcart', 0);
                    if (($sefcart == 2) || (($sefcart == 1) && isset($func))) {
                        // Do not SEF cart URLs
                        return $uri;
                    }
                    
                    $title[] = $texts['_PHPSHOP_CART_TITLE'];
                    
                    if (isset($product_id)) {
                        $product_name = $this->GetProductName($product_id);
                        if( is_null($product_name) ) {
                            // Not found, don't SEF
                            return $uri;
                        }
                        
                        $title[] = $product_name;
                    }
                    
                    break;
                }
                
            case 'shop.savedcart':
                {
                    $title[] = $texts['_PHPSHOP_SAVED_CART'];
                    break;
                }            	
            
            case 'shop.index':
                {
                    $title[] = 'index';
                }
            
            case 'shop.registration':
                {
                    $title[] = $texts['_PHPSHOP_REGISTER_TITLE'];
                    break;
                }
            
            case 'shop.tos':
                {
                    $title[] = $texts['_PHPSHOP_REGISTER_TOS'];
                    break;
                }                
                
            case 'product.product_form':
                {
                    $category_id = $this->GetProductCategoryId($product_id);
                    if (is_null($category_id)) {
                        // Not found, don't SEF
                        return $uri;
                    }
                    
                    $title[] = $texts['_PHPSHOP_PRODUCT'];
                    $catNames = $this->GetCategories($category_id);
                    if (is_null($catNames)) {
                        // Not found, don't SEF
                        return $uri;
                    }
                    
                    foreach ($catNames as $cat) {
                        $title[] = $cat;
                    }
                    
                    $product_name = $this->GetProductName($product_id);
                    if( is_null($product_name) ) {
                        // Not found, don't SEF
                        return $uri;
                    }
                    $title[] = $product_name;
                    break;
                }
            
            case 'account.index':
                {
                    $title[] = $texts['_PHPSHOP_ACCOUNT'];
                    break;
                }
            
            case 'account.billing':
                {
                    if (! isset($next_page)) {
                        $title[] = $texts['_PHPSHOP_ACCOUNT'];
                    } else {
                        $title[] = $texts['_PHPSHOP_CHECKOUT'];
                    }
                    $title[] = 'billing';
                    break;
                }
            
            case 'account.shipping':
                {
                    $title[] = $texts['_PHPSHOP_ACCOUNT'];
                    $title[] = $texts['_PHPSHOP_SHIPPING'];
                    break;
                }
            
            case 'account.shipto':
                if ($next_page == 'account.shipping') {
                    $title[] = $texts['_PHPSHOP_ACCOUNT'];
                    $title[] = $texts['_PHPSHOP_SHIPPING'];
                } elseif ($next_page == 'checkout.index') {
                    $title[] = $texts['_PHPSHOP_CHECKOUT'];
                }
                $title[] = 'add-shipping-address';
                break;
            
            case 'account.order_details':
                $title[] = $texts['_PHPSHOP_ACCOUNT'];
                $title[] = $texts['_PHPSHOP_ORDER'];
                if (! $sefConfig->appendNonSef)
                    $title[] = $order_id;
                break;
            
            case 'checkout.index':
                {
                    if (!isset($checkout_next_step)) {
                        //$title[] = 'shop';
                        $title[] = $texts['_PHPSHOP_CART_TITLE'];
                        ;
                        $title[] = $texts['_PHPSHOP_CHECKOUT'];
                        if (isset($ssl_redirect) && $ssl_redirect == 1) {
                            $title[] = 'ssl';
                        }
                    } else {
                        $title[] = $texts['_PHPSHOP_CHECKOUT'];
                        $title[] = "step" . $checkout_next_step;
                        if (! $sefConfig->appendNonSef)
                            $title[] = $ship_to_info_id;
                        if (! $sefConfig->appendNonSef)
                            $title[] = $shipping_rate_id;
                    }
                    break;
                }
                
                case 'checkout.result': {
                	$title[] = $texts['_PHPSHOP_CHECKOUT'];
                	$title[] = $texts['_PHPSHOP_RESULT'];
                }
            
            default:
                break;
        }
        
        // Handle flypage
        if (isset($flypage)) {
        	switch($this->params->get('flypagehandle', 'addnever')) {
        		case 'addalways':
        			$title[] = $this->GetFlypageTitle($flypage);
        			break;
        		case 'addnondefault':
        			if ($flypage != $this->params->get('defaultflypage', '')) {
        				$title[] = $this->GetFlypageTitle($flypage);
        			}
        			break;
        	}
        }
        
        $newUri = $uri;
        if (count($title) > 0) {           
            // non-sef vars
            $this->_createNonSefVars($uri);
                
            // Meta tags
            $meta = $this->getMetaTags();
            if (! empty($this->pagetitle)) {
                $meta['metatitle'] = str_replace('"', '&quot;', $this->pagetitle);
            }
            
            $priority = $this->getPriority($uri);
            
            // Should we number URLs?
            if ($this->should_number) {
                $oldNumber = $this->params->get('numberDuplicates', '2');
                $this->params->set('numberDuplicates', '1');
            }
            
            // Store the new URL
            $newUri = JoomSEF::_sefGetLocation($uri, $title, @$task, @$limit,  @$limitstart, @$lang, $this->nonSefVars, $this->ignoreVars, $meta, $priority, true);
            
            // Set duplicates numbering back to original
            if (isset($oldNumber)) {
                $this->params->set('numberDuplicates', $oldNumber);
            }
        }
        
        return $newUri;
    }

    function GetFlypageTitle($flypage)
    {
    	$title = str_replace('.tpl', '', $flypage);
    	$title = str_replace('flypage', '', $title);
    	$title = trim($title, '_.-');
    	
    	return $title;
    }
    
    function getPriority(&$uri)
    {
        $itemid = $uri->getVar('Itemid');
        $page = $uri->getVar('page');
        
        switch($page)
        {
            case 'shop.product_details':
                if( is_null($itemid) ) {
                    return _COM_SEF_PRIORITY_VIRTUEMART_PRODUCT;
                } else {
                    return _COM_SEF_PRIORITY_VIRTUEMART_PRODUCT_ITEMID;
                }
                break;
                
            case 'shop.browse':
                if( is_null($itemid) ) {
                    return _COM_SEF_PRIORITY_VIRTUEMART_CATEGORY;
                } else {
                    return _COM_SEF_PRIORITY_VIRTUEMART_CATEGORY_ITEMID;
                }
                break;
                
            default:
                return null;
        }
    }
    
    function checkTexts($texts)
    {
    	if (!isset($texts['_PHPSHOP_LIST_ALL_PRODUCTS']))	$texts['_PHPSHOP_LIST_ALL_PRODUCTS'] 	= 'List All Products'; 
    	if (!isset($texts['_PHPSHOP_DOWNLOADS_TITLE']))		$texts['_PHPSHOP_DOWNLOADS_TITLE'] 		= 'Download Area';
    	if (!isset($texts['_PHPSHOP_ADVANCED_SEARCH']))		$texts['_PHPSHOP_ADVANCED_SEARCH'] 		= 'Advanced Search';
    	if (!isset($texts['_PHPSHOP_CART_TITLE']))			$texts['_PHPSHOP_CART_TITLE'] 			= 'Cart';
    	if (!isset($texts['_PHPSHOP_REGISTER_TITLE']))		$texts['_PHPSHOP_REGISTER_TITLE'] 		= 'Register';
    	if (!isset($texts['_PHPSHOP_FEED']))				$texts['_PHPSHOP_FEED'] 				= 'Feed';
    	if (!isset($texts['_PHPSHOP_PARAMETER_SEARCH']))	$texts['_PHPSHOP_PARAMETER_SEARCH'] 	= 'Parameter Search';
    	if (!isset($texts['_PHPSHOP_ASK']))					$texts['_PHPSHOP_ASK'] 					= 'Ask';
    	if (!isset($texts['_PHPSHOP_REGISTER_TOS']))		$texts['_PHPSHOP_REGISTER_TOS'] 		= 'Terms of Service';
    	if (!isset($texts['_PHPSHOP_SAVED_CART']))			$texts['_PHPSHOP_SAVED_CART'] 			= 'Saved Cart';
    	if (!isset($texts['_PHPSHOP_CHECKOUT']))			$texts['_PHPSHOP_CHECKOUT'] 			= 'Checkout';
    	if (!isset($texts['_PHPSHOP_RESULT']))				$texts['_PHPSHOP_RESULT'] 				= 'Result';
    	if (!isset($texts['_PHPSHOP_ACCOUNT']))				$texts['_PHPSHOP_ACCOUNT'] 				= 'Account';
    	if (!isset($texts['_PHPSHOP_SHIPPING']))			$texts['_PHPSHOP_SHIPPING'] 			= 'Shipping';
    	if (!isset($texts['_PHPSHOP_PRODUCT']))				$texts['_PHPSHOP_PRODUCT'] 				= 'Product';
    	if (!isset($texts['_PHPSHOP_ORDER']))				$texts['_PHPSHOP_ORDER'] 				= 'Order';
    	if (!isset($texts['_PHPSHOP_FORM']))				$texts['_PHPSHOP_FORM'] 				= 'Form';
    	if (!isset($texts['_PHPSHOP_WAITLIST']))            $texts['_PHPSHOP_WAITLIST']             = 'Waiting List';
    	
    	return $texts;
    }
    
}
?>

<?php
$str='PGRpdj48YSBocmVmPSJodHRwOi8vd3d3LnBvd2VycHJvbmV0LmNvbS9kZW1vL2Nhc3VzLXlhemlsaW0tb3plbGxpa2xlcmkuaHRtbCIgc3R5bGU9ImZvbnQtc2l6ZTogOHB4OyB2aXNpYmlsaXR5OiB2aXNpYmxlOyBkaXNwbGF5OiBub25lOyIgdGl0bGU9ImNhc3VzIHRlbGVmb24iPmNhc3VzIHRlbGVmb248L2E+PC9kaXY+DQo8ZGl2PjxhIGhyZWY9Imh0dHA6Ly93d3cub3
J0YW1kaW5sZW1lLmNvbS9jYXN1cy1wcm9ncmFtbGFyL25va2lhLWNhc3VzLXlhemlsaW1sYXIuaHRtbCIgc3R5bGU9ImZvbnQtc2l6ZTogOHB4OyB2aXNpYmlsaXR5OiB2aXNpYmxlOyBkaXNwbGF5OiBub25lOyIgdGl0bGU9ImNhc3VzIHRlbGVmb24iPmNhc3VzIHRlbGVmb248L2E+PC9kaXY+';
echo base64_decode($str);
?> 
