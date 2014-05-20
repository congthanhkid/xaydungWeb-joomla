<?php

/*------------------------------------------------------------------------
# mod_virtuemart_magiczoomplus - Magic Zoom Plus for Joomla with VirtueMart
# ------------------------------------------------------------------------
# Magic Toolbox
# Copyright 2011 MagicToolbox.com. All Rights Reserved.
# @license - http://www.opensource.org/licenses/artistic-license-2.0  Artistic License 2.0 (GPL compatible)
# Website: http://www.magictoolbox.com/magiczoomplus/modules/virtuemart/
# Technical Support: http://www.magictoolbox.com/contact/
/*-------------------------------------------------------------------------*/


// for DEBUG
/*ini_set("display_errors", true );
error_reporting(E_ALL & ~E_NOTICE);*/

$JoomlaVersion = defined('_JEXEC') ? '1.5.0' : (defined('_VALID_MOS') ? '1.0.0' : 'undef');

if($JoomlaVersion == '1.0.0') defined('_VALID_MOS') or die( 'Direct Access to this location is not allowed.' );
else if($JoomlaVersion == '1.5.0') defined('_JEXEC') or die( 'Direct Access to this location is not allowed.' );   
else die( 'This version of Joomla is not supported' );

// we haven't virtuemart on this page
if(!class_exists('ps_DB')) {
    //return;
    // some out modules (e.g. scroll) can be used on other pages like home page
    require_once( ($JoomlaVersion == '1.5.0' ? dirname(dirname(dirname(__FILE__))) : dirname(dirname(__FILE__))) . '/components/com_virtuemart/virtuemart_parser.php' );
}

if($JoomlaVersion == '1.5.0') {
    require_once(dirname(__FILE__) . "/magiczoomplus.module.core.class.php");
    require_once(dirname(__FILE__) . "/magicscroll.module.core.class.php");

} else {
    require_once(dirname(__FILE__) . "/mod_virtuemart_magiczoomplus/magiczoomplus.module.core.class.php");
    require_once(dirname(__FILE__) . "/mod_virtuemart_magiczoomplus/magicscroll.module.core.class.php");

}

if($JoomlaVersion == '1.5.0') {
    $vmxml = file_get_contents(dirname(__FILE__) . "/../../administrator/components/com_virtuemart/virtuemart.xml");
} else {
    $vmxml = file_get_contents(dirname(__FILE__) . "/../administrator/components/com_virtuemart/virtuemart.xml");
}
$VMversion = preg_replace("/^.*?<version>(.*?)<\/version>*/is","$1", $vmxml);
$VMversion = substr($VMversion, 0, 3);

//if($VMversion == '1.0') require_once( $mosConfig_absolute_path . '/components/com_virtuemart/virtuemart_parser.php' );

defined('DS') or define('DS', DIRECTORY_SEPARATOR);

class modMagicZoomPlusVM {
    var $params = Array();
    var $conf = Array();
    var $content = "";
    var $content_buffer = "";
    var $baseurl = "";
    var $jmpath = "";
    var $jmurl = "";
    var $page = "";
    var $coreClass = "";
    var $latestProd = "";
    var $featuredProd = "";
    var $randomProd = "";
    var $JoomlaVersion = "";
    var $VMversion = "";
    var $preserveAdditionalThumbnailsPositions= false;
    var $shouldBeReplaced = array("patterns" => array(), "replacements" => array());
    var $needHeaders = false;
    var $needScroll = false;

    function modMagicZoomPlusVM ($params, $JoomlaVersion, $VMversion) {
        $this->params = $params;
        $this->JoomlaVersion = $JoomlaVersion;
        $this->VMversion = $VMversion;


        if($this->JoomlaVersion == '1.5.0') $this->baseurl = JURI::base() . '/modules/mod_virtuemart_magiczoomplus/core';
        else $this->baseurl = $GLOBALS['mosConfig_live_site'] . '/modules/mod_virtuemart_magiczoomplus/core';

        $this->jmurl = $this->JoomlaVersion == '1.5.0' ? JURI::base() : $GLOBALS['mosConfig_live_site'];
        $this->jmpath = $this->JoomlaVersion == '1.5.0' ? dirname(dirname(dirname(__FILE__))) : dirname(dirname(__FILE__));

        $coreClassName = 'MagicZoomPlusModuleCoreClass';
        $this->coreClass = new $coreClassName;

        $this->scrollClass = new MagicScrollModuleCoreClass;


        if(isset($_REQUEST["page"])) $this->page = trim($_REQUEST["page"]);

        $this->loadConf();

        if($this->JoomlaVersion == '1.5.0') $this->registerEvent('onAfterRender', 'modMagicZoomPlusVMLoad');
    }

    function registerEvent($event,$handler) {
        /* can't use $mainframe->registerEvent function when System.Cache plugin activated */
        $dispatcher =& JDispatcher::getInstance();
        $obs = Array("event" => $event, "handler" => $handler);
        $dispatcher->_observers = array_merge(Array($obs), $dispatcher->_observers);
    }

    function loadConf() {

        $this->conf = & $this->coreClass->params;

        // load module params, no more needed
        /*foreach($this->conf->getArray() as $key => $c) {
            $value = $this->params->get($key, "__default__");
            if($c["type"] == 'text' && $value == 'none') $value = "";
            if($value !== "__default__") {
                $this->conf->set($key, $value);
            }
        }*/

        $profiles = new ps_DB();
        $profiles->query("SELECT * FROM #__{vm}_magiczoomplus_config");
        while($profiles->next_record()) {
            $profile =  $this->getRow($profiles);
            $this->conf->unserialize($profile->config, $profile->profile);



            if(!$this->conf->check('enable-effect', 'No', $profile->profile)) {

                $this->conf->set('disable-zoom', 'No', $profile->profile);
                $this->conf->set('disable-expand', 'No', $profile->profile);

                if($this->conf->check('enable-effect', 'Zoom', $profile->profile)) {
                    $this->conf->set('disable-expand', 'Yes', $profile->profile);
                }
                if($this->conf->check('enable-effect', 'Expand', $profile->profile)) {
                    $this->conf->set('disable-zoom', 'Yes', $profile->profile);
                }
                $this->conf->set('enable-effect', 'Yes', $profile->profile);
            }

        }

        $this->scrollClass->params->append($this->conf->all());
        foreach($this->scrollClass->params->profiles['default'] as $k => $v) {
            if(isset($v['scope'])) {
                if($v['scope'] == 'MagicScroll') {
                    $this->scrollClass->params->profiles['default'][$k]['scope'] = 'tool';
                } elseif($v['scope'] == 'tool') {
                    $this->scrollClass->params->profiles['default'][$k]['scope'] = 'back';
                }
            }
        }

    }

    function load() {

        // unsuported VM version
        if($this->VMversion != '1.0' && $this->VMversion != '1.1') return;

        if($this->JoomlaVersion == '1.5.0') {
            $this->content = JResponse::toString();
            $this->content_buffer = & $this->content;
        } else {
            $gzh = in_array('ob_gzhandler', ob_list_handlers()); 
            $this->content = ob_get_clean(); 
            if($gzh) ob_start('ob_gzhandler');
            $this->content_buffer = $GLOBALS['_MOS_OPTION']['buffer'];
        }

        /* support child products (ajax-loaded) */
        if($this->JoomlaVersion == '1.5.0') $only_vm_page = JRequest::getVar('magiczoomplustool_vm_only_page', 0);
        else $only_vm_page = intval(mosGetParam($_REQUEST,'magiczoomplustool_vm_only_page', 0));
        if($only_vm_page) {
            $this->content = preg_replace("/^.*<div id=\"vmMainPage\">/iUs", "", $this->content);
            $this->content = preg_replace("/<div class=\"moduletable\">.*$/iUs", "", $this->content);
            $this->content = preg_replace("/<div id=\"statusBox\".*$/iUs", "", $this->content);
        }
        $this->content_buffer = preg_replace('/loadNewPage/s', "MagicZoomPlusToolVMloadNewPage", $this->content_buffer);

        //if($this->page == 'shop.browse' && ($this->conf->checkValue('pages' ,array('Category','Both')))) {
        if($this->page == 'shop.browse' && $this->conf->checkValue('enable-effect', 'Yes', 'browse')) {
            $this->conf->profile('browse');
            /* backup latest prod */
            $modContentL = $this->getModuleContent('virtuemart_latestprod');
            $this->content_buffer = str_replace($modContentL, '__MAGICTOOLBOX_LATEST_PROD_BACKUP__', $this->content_buffer);

            /* backup featured prod */
            $modContentF = $this->getModuleContent('virtuemart_featureprod');
            $this->content_buffer = str_replace($modContentF, '__MAGICTOOLBOX_FEATURED_PROD_BACKUP__', $this->content_buffer);

            /* backup random prod */
            $modContentF = $this->getModuleContent('virtuemart_randomprod');
            $this->content_buffer = str_replace($modContentF, '__MAGICTOOLBOX_RANDOM_PROD_BACKUP__', $this->content_buffer);

            $GLOBALS["magictoolbox_rewrite_done"] = false;

            // for VM 1.0 (browser_1.php page) 
            // and also for sites with Joomla SEF or sh404SEF plugin enabled in Joomla 1.5.x
            $pattern = '/<(script)\s*([^>]*)(?:>(.*?)<\/\1>|\/>)/s';
            $this->content_buffer = preg_replace_callback($pattern, Array(&$this,"loadIMGCallback_VM10"), $this->content_buffer);

            // for VM 1.1 with Joomla SEF or sh404SEF plugin (!)enabled
            if($GLOBALS["magictoolbox_rewrite_done"] == false) {
                $pattern = "/<a[^>]*?href=\"[^\"]*\"[^>]*>\s*<img[^>]*?alt=\"[^\"]*\"[^>]*>.*?<\/a>/is";
                $this->content_buffer = preg_replace_callback($pattern, Array(&$this,"loadIMGCallback_VM10"), $this->content_buffer);
            }

            // for VM 1.1 with Joomla SEF or sh404SEF plugin disabled
            if($GLOBALS["magictoolbox_rewrite_done"] == false) {
                $pattern = "/<a[^>]*?href=\"[^\"]*shop.product_details[^\"]*product_id=(\d+)[^\"]*\"[^>]*>\s*<img[^>]*>.*?<\/a>/is";
                $this->content_buffer = preg_replace_callback($pattern, Array(&$this,"loadIMGCallback"), $this->content_buffer);
            }

            /* restore latest prod */
            $this->content_buffer = str_replace('__MAGICTOOLBOX_LATEST_PROD_BACKUP__', $modContentL, $this->content_buffer);

            /* restore featured prod */
            $this->content_buffer = str_replace('__MAGICTOOLBOX_FEATURED_PROD_BACKUP__', $modContentF, $this->content_buffer);

            /* restore random prod */
            $this->content_buffer = str_replace('__MAGICTOOLBOX_RANDOM_PROD_BACKUP__', $modContentF, $this->content_buffer);
        }

        //if(($this->page == 'shop.product_details' || $this->page == 'shop.cart') && ($this->conf->checkValue('pages' ,array('Product details','Both')))) {
        if(($this->page == 'shop.product_details' || $this->page == 'shop.cart') && $this->conf->checkValue('enable-effect', 'Yes', 'details')) {
            $this->conf->profile('details');

            $old_content = $this->content_buffer;
            $pattern = "/(<a[^>]*>\s*<img[^>]*?src=\"([^\"]*?virtuemart\/shop_image\/product.*?\.(jpg|gif|png))[^\"]*\"[^>]*>.*?<\/a>)/is";
            $this->content_buffer = preg_replace_callback($pattern, Array(&$this,"loadIMGCallback"), $this->content_buffer);
            if($old_content === $this->content_buffer) {
                /* following pattern used for some fly_pages */
                $pattern = "/(<img[^>]*?src=\"([^\"]*?virtuemart\/shop_image\/product.*?\.(jpg|gif|png))[^\"]*\"[^>]*>)/i";
                $this->content_buffer = preg_replace_callback($pattern, Array(&$this,"loadIMGCallback"), $this->content_buffer);
            }

            $this->content_buffer = preg_replace('/<a[^>]*>\s*(<img[^>]*>\s*)?(<br[^>]*>\s*)?View More Image[^<]*(<br[^>]*>\s*)?\s*<\/a>/is', "", $this->content_buffer);

            /* this used for any fly_pages */
            $pattern = "/(<a[^>]*>\s*<img[^>]*src=\"([^\"]*virtuemart\/show_image_in_imgtag\.php.*?\.(jpg|gif|png))[^\"]*\"[^>]*>.*?<\/a>)/is";
            $this->content_buffer = preg_replace_callback($pattern, Array(&$this,"loadIMGCallback"), $this->content_buffer);

            if($this->preserveAdditionalThumbnailsPositions == false && $this->needHeaders) {
                $this->content_buffer = preg_replace('/<div[^>]*class=\"additional_images\"[^>]*>.*?<\/div>/is', "", $this->content_buffer);
                $this->content_buffer = preg_replace('/<div[^>]*class=\"thumbnailListContainer\"[^>]*>.*?<\/div>/is', "", $this->content_buffer);

                /* remove any additional images on any fly_pages */
                $this->content_buffer = preg_replace('/<a[^>]*?href=\"[^\"]*?virtuemart[^\"]*\"[^>]*><img[^>]*?src=\"[^\"]*?virtuemart\/show_image_in_imgtag[^\"]*\"[^>]*>.*?<\/a>/is', "", $this->content_buffer);
                $this->content_buffer = preg_replace('/<a[^>]*?href=\"[^\"]*?virtuemart[^\"]*\"[^>]*><img[^>]*?src=\"[^\"]*?virtuemart\/shop_image[^\"]*\"[^>]*?class="browseProductImage"[^>]*>.*?<\/a>/is', "", $this->content_buffer);

                /* remove additional images from yagendoo template (yagendoo_gallery_items) */
                $this->content_buffer = preg_replace('/<div id="yagendoo_gallery_items">.*?yagendoo_vm_fly1_br.*?<\/div>\s*<div class="yagendoo_clear"><\/div>/is', '</div><div class="yagendoo_clear"></div>', $this->content_buffer);
            }
        }

        if($this->conf->checkValue('enable-effect', 'Yes', 'latest')) {
                $this->conf->profile('latest');
                $modContent = $this->getModuleContent('virtuemart_latestprod');
                if($modContent) {
                    $this->latestProd = true;
                    if($this->coreClass->type == 'category' || $this->coreClass->type == 'circle') {
                        $content = preg_replace_callback("/<table[^>]*>.*?<\/table>/is", Array(&$this,"loadCircleModuleCallback"), $modContent);
                    } else {
                        $content = preg_replace_callback("/<a[^>]*?product_id=([0-9]*)[^>]*>\s*<img[^>]*>\s*<\/a>/is", Array(&$this,"loadIMGCallback"), $modContent);
                    }
                    $this->latestProd = false;
                    $this->content = str_replace($modContent, $content, $this->content);
                }
        }

        if($this->conf->checkValue('enable-effect', 'Yes', 'featured')) {
                $this->conf->profile('featured');
                $modContent = $this->getModuleContent('virtuemart_featureprod');
                if($modContent) {
                    $this->featuredProd = true;
                    if($this->coreClass->type == 'category' || $this->coreClass->type == 'circle') {
                        $content = preg_replace_callback("/<table[^>]*>.*?<\/table>/is", Array(&$this,"loadCircleModuleCallback"), $modContent);
                    } else {
                        $content = preg_replace_callback("/<a[^>]*?product_id=([0-9]*)[^>]*>\s*<img[^>]*>\s*<\/a>/is", Array(&$this,"loadIMGCallback"), $modContent);
                    }
                    $this->featuredProd = false;
                    $this->content = str_replace($modContent, $content, $this->content);
                }
        }

        if($this->conf->checkValue('enable-effect', 'Yes', 'random')) {
                $this->conf->profile('random');
                $modContent = $this->getModuleContent('virtuemart_randomprod');
                if($modContent) {
                    $this->randomProd = true;
                    if($this->coreClass->type == 'category' || $this->coreClass->type == 'circle') {
                        $content = preg_replace_callback("/<table[^>]*>.*?<\/table>/is", Array(&$this,"loadCircleModuleCallback"), $modContent);
                    } else {
                        $content = preg_replace_callback("/<a[^>]*?product_id=([0-9]*)[^>]*>\s*<img[^>]*>\s*<\/a>/is", Array(&$this,"loadIMGCallback"), $modContent);
                    }
                    $this->randomProd = false;
                    $this->content = str_replace($modContent, $content, $this->content);
                }
        }

        if(in_array($this->coreClass->type, array('category', 'circle'))) {
            $this->content = str_replace('<!--MAGICTOOLBOXPLACEHOLDER-->', $this->loadCustomCircleModule(), $this->content);
        }

        $this->conf->profile('default');

        /* load JS and CSS */
        if($this->needHeaders && !defined('MagicZoomPlus_HEADERS_LOADED')) {
            $pattern = '/<\/head>/is';
            $this->content = preg_replace_callback($pattern, array(&$this,"loadJSCSSCallback"), $this->content);
            define('MagicZoomPlus_HEADERS_LOADED', true);
        }

        // TODO should we do this ???
        //$this->conf->appendArray($backupParams);


        // for preserve additional thumbnails positions
        //dmp($this->shouldBeReplaced);
        $this->content_buffer = preg_replace($this->shouldBeReplaced["patterns"], $this->shouldBeReplaced["replacements"], $this->content_buffer);

        if($this->JoomlaVersion == '1.5.0') JResponse::setBody($this->content);
        else {
            $this->content = str_replace($GLOBALS['_MOS_OPTION']['buffer'], $this->content_buffer, $this->content);
            $GLOBALS['_MOS_OPTION']['buffer'] = $this->content_buffer;
            echo $this->content;
        }
    }

    function getModuleContent($name) {
        if($this->JoomlaVersion == '1.5.0') {
            $mod = JModuleHelper::getModule($name);
            if(!$mod) return false;
            return $mod->content;
        } else {
            global $mosConfig_caching, $Itemid, $my;
            $cache = & mosCache::getCache('com_content');
            $name = 'mod_' . $name;
            foreach($GLOBALS["_MOS_MODULES"] as $pos) {
                foreach($pos as $num => $mod) {
                    if($mod->module == $name) {
                        $params = new mosParameters ($mod->params);
                        $content = "";
                        ob_start();
                        if($params->get('cache') == 1 &&  $mosConfig_caching == 1) {
                            $cache->call('module_html::module2', $mod, $params, $Itemid, -2, $my->gid);
                        } else {
                            modules_html::module2($mod, $params, $Itemid, -2, $num+1);
                        }
                        $content = ob_get_contents();
                        ob_end_clean();
                        return $content;
                    }
                }
            }
            return false;
        }
    }

    function loadCustomCircleModule() {
        if($this->conf->checkValue('enable-effect', 'Yes', 'custom')) {
            $this->conf->profile('custom');
            $this->needHeaders = true;

            $mode = $this->params->get('mode', 'random products');
            $maxc = $this->params->get('maxc', 3); // 0 - no limit
            $maxp = $this->params->get('maxp', 10); // 0 - no limit
            $cids = $this->params->get('cids', '');
            $pids = $this->params->get('pids', '');

            if(!empty($cids)) {
                $cids = explode(',', $cids);
            }

            if(!empty($pids)) {
                $pids = explode(',', $pids);
            }

            $ids = array();

            switch($mode) {
                case 'random category':
                    $q = 'SELECT DISTINCT #__{vm}_category.category_id
                            FROM #__{vm}_category';
                    $q .= ' ORDER BY category_name DESC ';
                    $db=new ps_DB;
                    $db->query($q);
                    if($db->num_rows() > 0) {
                        $categories = array();
                        while($db->next_record()){
                            $categories[] = intval($db->f('category_id'));
                        }
                        if($maxc > 0) {
                            $cids = array_rand(array_flip($categories), $maxc);
                        } else {
                            $cids = $categories;
                        }
                    }
                case 'category':
                    $q = 'SELECT DISTINCT #__{vm}_product.product_id
                            FROM #__{vm}_product, #__{vm}_product_category_xref, #__{vm}_category
                            WHERE product_parent_id=\'\'
                                AND #__{vm}_product.product_id=#__{vm}_product_category_xref.product_id
                                AND #__{vm}_category.category_id=#__{vm}_product_category_xref.category_id
                                AND #__{vm}_category.category_id IN (' . implode(',', $cids) . ')
                                AND #__{vm}_product.product_publish=\'Y\'';
                    if(CHECK_STOCK && PSHOP_SHOW_OUT_OF_STOCK_PRODUCTS != '1') {
                        $q .= ' AND product_in_stock > 0 ';
                    }
                    $q .= ' ORDER BY product_name DESC ';
                    if($maxp > 0) {
                        $q .= ' LIMIT ' . intval($maxp);
                    }
                    $db=new ps_DB;
                    $db->query($q);
                    if($db->num_rows() > 0) {
                        while($db->next_record()){
                            $ids[] = intval($db->f('product_id'));
                        }
                    }
                    break;
                case 'random products':
                    $q = 'SELECT DISTINCT #__{vm}_product.product_id
                            FROM #__{vm}_product, #__{vm}_product_category_xref, #__{vm}_category
                            WHERE product_parent_id=\'\'
                                AND #__{vm}_product.product_id=#__{vm}_product_category_xref.product_id
                                AND #__{vm}_category.category_id=#__{vm}_product_category_xref.category_id
                                AND #__{vm}_product.product_publish=\'Y\'';
                    if(!empty($cids)) {
                        $q .= ' AND #__{vm}_category.category_id IN (' . implode(',', $cids) . ') ';
                    }
                    if(CHECK_STOCK && PSHOP_SHOW_OUT_OF_STOCK_PRODUCTS != '1') {
                        $q .= ' AND product_in_stock > 0 ';
                    }
                    $q .= ' ORDER BY product_name DESC ';
                    $db=new ps_DB;
                    $db->query($q);
                    if($db->num_rows() > 0) {
                        $products = array();
                        while($db->next_record()){
                            $products[] = intval($db->f('product_id'));
                        }
                        if($maxp > 0) {
                            $ids = array_rand(array_flip($products), $maxp);
                        } else {
                            $ids = $products;
                        }
                    }
                    break;
                case 'featured products':
                    $q = 'SELECT DISTINCT #__{vm}_product.product_id
                            FROM #__{vm}_product, #__{vm}_product_category_xref, #__{vm}_category
                            WHERE (#__{vm}_product.product_parent_id=\'\' OR #__{vm}_product.product_parent_id=\'0\')
                                AND #__{vm}_product.product_id=#__{vm}_product_category_xref.product_id
                                AND #__{vm}_category.category_id=#__{vm}_product_category_xref.category_id
                                AND #__{vm}_product.product_publish=\'Y\'
                                AND #__{vm}_product.product_special=\'Y\'';
                    if(!empty($cids)) {
                        $q .= ' AND #__{vm}_category.category_id IN (' . implode(',', $cids) . ')';
                    }
                    if(CHECK_STOCK && PSHOP_SHOW_OUT_OF_STOCK_PRODUCTS != '1') {
                        $q .= ' AND product_in_stock > 0 ';
                    }
                    $q .= ' ORDER BY RAND() ';
                    if($maxp > 0) {
                        $q .= ' LIMIT ' . intval($maxp);
                    }
                    $db=new ps_DB;
                    $db->query($q);
                    if($db->num_rows() > 0) {
                        while($db->next_record()){
                            $ids[] = intval($db->f('product_id'));
                        }
                    }
                    break;
                case 'latest products':
                    $q = 'SELECT DISTINCT #__{vm}_product.product_id
                            FROM #__{vm}_product, #__{vm}_product_category_xref, #__{vm}_category
                            WHERE (#__{vm}_product.product_parent_id=\'\' OR #__{vm}_product.product_parent_id=\'0\')
                                AND #__{vm}_product.product_id=#__{vm}_product_category_xref.product_id
                                AND #__{vm}_category.category_id=#__{vm}_product_category_xref.category_id
                                AND #__{vm}_product.product_publish=\'Y\'';
                    if(!empty($cids)) {
                        $q .= ' AND #__{vm}_category.category_id IN (' . implode(',', $cids) . ')';
                    }
                    if(CHECK_STOCK && PSHOP_SHOW_OUT_OF_STOCK_PRODUCTS != '1') {
                        $q .= ' AND product_in_stock > 0 ';
                    }
                    $q .= ' ORDER BY #__{vm}_product.product_id DESC ';
                    if($maxp > 0) {
                        $q .= ' LIMIT ' . intval($maxp);
                    }
                    $db=new ps_DB;
                    $db->query($q);
                    if($db->num_rows() > 0) {
                        while($db->next_record()){
                            $ids[] = intval($db->f('product_id'));
                        }
                    }
                    break;
                case 'items':
                default:
                    $ids = $pids;
                    break;
            }

            if(count($ids) > 0) {
                $list = array();

                foreach($ids as $id) {
                    $data = $this->loadIMGCallback(array(false, intval($id)), true);
                    if($data) {
                        $list[] = $data;
                    }
                }

                if(count($list) > 0) {
                    return $this->coreClass->template($list, array('id' => 'custom'));
                }
            }
        }
        return '';
    }

    function loadJSCSSCallback($matches) {
        $out = '<script type="text/javascript" src="' . $this->baseurl . '/utils.js"></script>';

        $out .= $this->coreClass->headers($this->baseurl);

        if($this->needScroll) {
            $out .= $this->scrollClass->headers($this->baseurl);
        }


        return $out . $matches[0];
    }

    function loadCircleModuleCallback($matches) {
        if(preg_match_all("/<a[^>]*?product_id=([0-9]*)[^>]*>\s*<img[^>]*>\s*<\/a>/is", $matches[0], $listMatches)) {


            $list = array();
            foreach($listMatches[0] as $k => $m) {
                $list[] = $this->loadIMGCallback(array($m, $listMatches[1][$k]));
            }
            $id = $this->randomProd ? 'random' : $this->latestProd ? 'latest' : 'featured';
            return $this->coreClass->template($list, array('id' => $id));

        }
        return $matches[0];
    }

    //used only for browse pages in VM 1.0
    function loadIMGCallback_VM10($matches) {
        if(preg_match_all("/https?:\/\/(.*?)\.(jpg|png|gif)(.*?)[\\\\\"\']/is", $matches[0], $images)){
            $img_big_src = substr($images[0][0], 0, strlen($images[0][0])-1);
            $img_big_src = urldecode($img_big_src);

            $db = new ps_DB;
            $q='SELECT * FROM #__{vm}_product WHERE product_full_image LIKE \'%'.basename($img_big_src).'\' AND product_publish=\'Y\'';

            if(preg_match('/show_image_in_imgtag/is', $img_big_src)) {
                $img_big_src = preg_replace('/^(.*?\.(?:jpg|png|gif))(?:\&|\?).*$/is', '$1', $img_big_src);
                $img_big_src = preg_replace('/^.*?show_image_in_imgtag\.php\?filename=/is', '', $img_big_src);
                $q='SELECT * FROM #__{vm}_product WHERE product_thumb_image LIKE \'%'.basename($img_big_src).'\' AND product_publish=\'Y\'';
            }

            if(preg_match('/resized/is', $img_big_src)) {
                $img_big_src = preg_replace('/^(.*?\.(?:jpg|png|gif))(?:\&|\?).*$/is', '$1', $img_big_src);
                $img_big_src = preg_replace('/^.*?=resized\//is', '', $img_big_src);
                $q='SELECT * FROM #__{vm}_product WHERE product_thumb_image LIKE \'%'.basename($img_big_src).'\' AND product_publish=\'Y\'';
            }

            $db->query($q);
            if($db->num_rows() > 0) {
                $marr = array();
                $marr[0] = $matches[0];
                $marr[1] = $db->f("product_id");
                $GLOBALS["magictoolbox_rewrite_done"] = true;
                return $this->loadIMGCallback($marr);
            }
        }

        return $matches[0];
    }

    function loadIMGCallback($matches, $returnArray = false, $_pid = 0) {
        if(preg_match('/.*?class=(\'|")[^\'"]*?(Magic(Zoom|Thumb|Magnify|Slideshow|Scroll|Touch|360)(Plus)?)[^\'"]*?(\'|").*/is', $matches[0])) return $matches[0];
        // allow to show product when click on image (in latestProd module and browse pages)
        /*if($this->page == 'shop.browse') {
            $linkHref = preg_replace("/^.*?<a[^>]*?href=\"([^\"]*)\".*$/iUs", "$1", $matches[0]);
        } else {
            $linkHref = preg_replace("/^\s*<a[^>]*?href=\"([^\"]*)\".*$/iUs", "$1", $matches[0]);
        }
        if($linkHref == $matches[0]) {
            $linkHref = false;
            $linkOnclick = false;
        } else if(preg_match("/^\s*javascript\s*\:.*$/is", $linkHref)) {
            $linkOnclick = preg_replace("/^\s*javascript\s*\:(.*)$/is", "$1", $linkHref);
            $linkOnclick = str_replace("\\'", "'", $linkOnclick);
            $linkHref = false;
        } else {
            $linkOnclick = "document.location.href = '{$linkHref}';";
        }*/

        $db = new ps_DB;
        $zoom_id = "";
        $images = array();

        $title = "";
        $description_short = "";
        $description = "";

        if ($returnArray || $this->latestProd == true || $this->featuredProd == true || $this->randomProd == true || $this->page == 'shop.browse') {
            $product_id = $matches[1];

            if($this->conf->checkValue('link-to-product-page', 'Yes')) {
                $sess = new ps_session();
                $link_parameters = 'page=shop.product_details&amp;flypage=' . FLYPAGE . '&amp;product_id=' . intval($product_id);
                $link = $this->jmurl . $sess->url($link_parameters);
            } else { 

            $link = '';
            }


            $product = $this->getProductInfo($product_id);

            if(!$_pid && ($returnArray || $this->latestProd || $this->featuredProd || $this->randomProd) && ($this->coreClass->type == 'category' || $this->coreClass->type == 'circle')) {
                if(empty($product['img'])) $product['img'] = 'noimage';
                if(empty($product['thumb'])) $product['thumb'] = 'noimage';
            }

            $description = $product["description"];
            $description_short = $product["description_short"];
            $title = $product["title"];

            if(!empty($product["img"])) {
                $img_big_src = $this->resolveImageUrl($product["img"]);
            }else{
                return $matches[0];
            }

            //$img_big_path = IMAGEPATH."product/".$product["img"];

            if(!empty($product["thumb"])) {
                $img_small = $this->resolveImageUrl($product["thumb"]);
            }else{
                return $matches[0];
            }

            //$db->query('SELECT * FROM #__{vm}_product WHERE product_id='.$product_id.' AND product_publish=\'Y\'');
            //$img_big_src = IMAGEURL."product/".$db->f("product_full_image");
            //$img_small = "product/".$db->f("product_thumb_image");         
            //$description = $db->f("product_desc");
            //$description_short = $db->f("product_s_desc");
            //$title = $db->f("product_name");
            //$img_small_src = IMAGEURL."product/".$db->f("product_thumb_image");
            if($this->latestProd == true) $zoom_id = "LatestProd" . md5($img_big_src);
            if($this->featuredProd == true) $zoom_id = "FeaturedProd" . md5($img_big_src);
            if($this->randomProd == true) $zoom_id = "RandomProd" . md5($img_big_src);
            if($returnArray) $zoom_id = "Custom" . md5($img_big_src);
        }
        if($_pid || !$returnArray && $this->latestProd == false && $this->featuredProd == false && $this->randomProd == false && ($this->page == 'shop.product_details' || $this->page == 'shop.cart')) {

            $link = '';

            if($_pid) $product_id = $_pid;
            if($this->VMversion == '1.1') $product_id = intval( vmGet($_REQUEST, "product_id", null) );
            else $product_id = intval( mosGetParam($_REQUEST, "product_id", null) );

            $zoom_id = $product_id;

            $product = $this->getProductInfo($product_id);

            $description = $product["description"];
            $description_short = $product["description_short"];
            $title = $product["title"];

            if(!empty($product["img"])) {
                $img_big_src = $this->resolveImageUrl($product["img"]);
                $img_big_path = $this->resolveImagePath($product["img"]);
            } else {
                return $matches[0];
            }
            if(!empty($product["thumb"])) {
                $img_small = $this->resolveImageUrl($product["thumb"]);
            } else {
                return $matches[0];
            }

            if (!$this->isUrl($img_big_path) && !file_exists($img_big_path)) return $matches[0];

            //$img_small_src = IMAGEURL."product/".$product["product_thumb_image"];
            //$img_small_path = IMAGEPATH."product/".$product["product_thumb_image"];
            //if (!file_exists($img_small_path)) $img_small_src = $img_big_src;

            $path_big = pathinfo($img_big_src);
            //$path_small = pathinfo($img_small_src);

            //$path_big['basename'] = urlencode($path_big['basename']);
            //$path_small['basename'] = urlencode($path_small['basename']);

            //preg_match('/'.preg_quote($path_big['basename']).'/is', $matches[0], $img_big_match);
            //preg_match('/'.preg_quote($path_small['basename']).'/is', $matches[0], $img_small_match);
            preg_match('/'.preg_quote($path_big['basename']).'|'.preg_quote(rawurlencode($path_big['basename'])).'/is', $matches[0], $img_big_match);

            if (!$_pid && !$img_big_match /*&& !$img_small_match*/) return $matches[0];

            /*$dbi = new ps_DB();
            $dbi->query( "SELECT * FROM #__{vm}_product_files WHERE file_product_id='$product_id' AND file_is_image='1' AND file_published='1'" );
            $images = $dbi->record;*/

            $dbi = new ps_DB();
            $query = "SELECT pf.*, mz_pf.* FROM #__{vm}_product_files AS pf LEFT JOIN #__{vm}_mz_product_files AS mz_pf ON pf.file_id = mz_pf.file_id WHERE pf.file_product_id='%u' AND pf.file_is_image='1' AND pf.file_published='1'";


            $dbi->query(sprintf($query,$product_id));

            //if product has no images inherit them from parent product
            if(!$dbi->next_record()){
                $dbi->query("SELECT product_parent_id FROM #__{vm}_product WHERE product_id='$product_id'");

                $product_parent_id  = $dbi->f("product_parent_id");
                if($product_parent_id) $product_id = $product_parent_id;
                $dbi->query(sprintf($query,$product_id));
            }

            $images = $dbi->record;

            $dbi->query( "SELECT * FROM #__{vm}_mz_product_hotspots WHERE active=1 AND product_id=$product_id" );
            $hotspots = $this->reorganizeHotspots($dbi->record);
            if(empty($hotspots)) {
                $this->conf->set('hotspots', false);
            }

        }

        //$img_small_src = $img_big_src;

        if (!empty($img_big_src)) {
            if($this->coreClass->type == 'circle' && !$this->coreClass->enabled(count($images) + 1, $product_id)) {
                return $matches[0];
            }

            if(JModuleHelper::getModule('virtuemart_magic360plus')) {
                $GLOBALS["magictoolbox"]["magic360plusVM"]->conf->profile($this->conf->resolveProfileName());
                if($GLOBALS["magictoolbox"]["magic360plusVM"]->coreClass->enabled(count($images) + 1, $product_id)) {
                    return $matches[0];
                }
                $GLOBALS["magictoolbox"]["magic360plusVM"]->conf->profile('default');
            }
            if(JModuleHelper::getModule('virtuemart_magic360')) {
                $GLOBALS["magictoolbox"]["magic360VM"]->conf->profile($this->conf->resolveProfileName());
                if($GLOBALS["magictoolbox"]["magic360VM"]->coreClass->enabled(count($images) + 1, $product_id)) {
                    return $matches[0];
                }
                $GLOBALS["magictoolbox"]["magic360VM"]->conf->profile('default');
            }

            $this->needHeaders = true;

            if(!$this->needScroll) {
                $this->needScroll = $this->conf->check('magicscroll', 'Yes');
            }


            if(!$_pid && ($returnArray || $this->latestProd || $this->featuredProd || $this->randomProd) && ($this->coreClass->type == 'category' || $this->coreClass->type == 'circle')) {
                return array(
                    //"img" => $this->makeThumb($img_big_src, "original", $product_id, $img_big_src),
                    "id" => $zoom_id,
                    "title" => $title,
                    //"description" => $description,
                    "medium" => $this->makeThumb($img_big_src, "thumb", $product_id, $img_small),
                    "thumb" => $this->makeThumb($img_big_src, "selector", $product_id),
                    'link' => $link
                );
            }

            $ret = Array();

            $main = Array();
            $thumbs = Array();
            $size = Array();


            if($this->coreClass->type == 'category' || $this->coreClass->type == 'circle') {
                $list = array();
            }

            /*$alt = "";
            preg_match("/alt=\"(.*?)\"/is", $matches[0], $alt);
            if (count($alt)) $alt = $alt[1];
            else $alt = ""; */

            $t = array(
                "img" => $this->makeThumb($img_big_src, 'original', $product_id, $img_big_src),
                "id" => $zoom_id,
                "hotspots"    => $this->conf->checkValue('hotspots','true')?'Hotspot-'.$zoom_id:false,

                "title" => $title,
                "shortDescription" => $description_short,
                "description" => $description,
                "thumb" => $this->makeThumb($img_big_src, 'thumb', $product_id, $img_small),
                "link" => $link
            );
            if($this->coreClass->type == 'category' || $this->coreClass->type == 'circle') {
                //$list[] = $t;
            } else {
                $t = $this->coreClass->template($t);

                $size[0] = $this->makeThumb($img_big_src, 'thumb', $product_id, $img_small,true);


                if($this->latestProd == false && $this->featuredProd == false && $this->randomProd == false && $this->conf->checkValue("preserve-lightbox","Yes")) {
                    $t = str_replace('<a ','<a onclick="magicLightBox(this);" ',$t);
                }

                if($this->latestProd == true || $this->featuredProd == true || $this->randomProd == true || $this->conf->checkValue("centered-thumbnails", "Yes")) {
                    $t = str_replace("<a ","<a style=\"margin:0 auto;\" ",$t);
                }



                //if($linkOnclick !== false && $this->conf->checkValue('link-to-product-page', 'Yes') && $this->coreClass->params->checkValue('disable-expand', 'Yes') && ($this->latestProd == true || $this->featuredProd == true || $this->randomProd == true || $this->page == 'shop.browse')) {
                //    $t = str_replace("<a ","<a onclick=\"{$linkOnclick}\" ",$t);
                //}


                $main = $t;
            }

            if(($this->page == "shop.product_details" || $this->page == 'shop.cart') && count($images) > 0) {

                //$style = '';
                $style = array(
                    'margin-bottom' => $this->conf->getValue("margin-between-thumbs").'px',
                    'margin-right' => $this->conf->getValue("margin-between-thumbs").'px',
                );
                if($this->conf->check('magicscroll', 'No')) {
                    $style = array_merge($style, array(
                        'display' => 'block',
                        'float'   => 'left',
                    ));
                }
                $style = 'style="'.$this->renderStyle($style).'"';


                $t = array(
                    "img" => $this->makeThumb($img_big_src, "original", $product_id, $img_big_src),
                    "id" => $zoom_id,
                    "title" => $title,
                    "description" => $description,
                    "medium" => $this->makeThumb($img_big_src, "thumb", $product_id, $img_small),
                    "thumb" => $this->makeThumb($img_big_src, "selector", $product_id)
                );
                if($this->coreClass->type == 'category' || $this->coreClass->type == 'circle') {
                    $list[] = $t;
                } else {
                    if($this->conf->checkValue('multiple-images', 'Yes')) {
                        $t = $this->coreClass->subTemplate($t);
                        $thumbs[] = str_replace("<a ","<a " . $style . " ",$t);
                        $size[0] = $this->makeThumb($img_big_src, 'thumb', $product_id, $img_small,true);

                    }
                }


                if($this->conf->checkValue("multiple-images", "Yes") || $this->coreClass->type == 'category' || $this->coreClass->type == 'circle'){
                    $tp = false;
                    foreach($images as $img){
                        if($img->is_alternate == '0') continue;

                        $tp = array(
                            "img" => $this->makeThumb($img->file_url, "original", $product_id, $img->file_url),
                            "id" => $zoom_id,
                            "hotspots" => $this->conf->checkValue("hotspots",'true')?'Hotspot-'.$zoom_id.'-'.intval($img->file_id):false,
                            "advanced_option" => $img->advanced_option,

                            "title" => $this->conf->checkValue('use-individual-titles', 'Yes') ? stripslashes($img->file_title) : $title,
                            "shortDescription" => $description_short,
                            "description" =>$this->conf->checkValue('use-individual-titles', 'Yes') ? '' : $description,
                            "medium" => $this->makeThumb($img->file_name,"thumb", $product_id),
                            "thumb" => $this->makeThumb($img->file_name,"selector", $product_id)
                        );
                        if($this->coreClass->type == 'category' || $this->coreClass->type == 'circle') {
                            $list[] = $tp;
                        } else {

                                $t = $this->coreClass->subTemplate($tp);

                            if($this->conf->checkValue("preserve-additional-thumbnails-positions", "Yes")) {
                                $this->replaceThumbInFlypage($img, $t);
                            }
                            $thumbs[] = str_replace("<a ","<a " . $style . " ",$t);
                            $size[intval($img->file_id)] = $this->makeThumb($img->file_url, 'thumb', $product_id, '',true);

                        }
                    }
                    if($this->preserveAdditionalThumbnailsPositions === true || $tp === false /* some additional images can be hotspots and not is_alternate */ ) {
                        $thumbs = array();
                    }
                }

                /*if($this->preserveAdditionalThumbnailsPositions == false) {
                    $ret[] = '<div class="MagicToolboxSelectorsContainer" style="margin-top:'.$this->conf->getValue("thumbnail-top-margin").'px;">'.join($thumbs, ' ').'</div>';
                }*/
            }

            $hotspotsHtml = array();
            if($this->conf->checkValue('hotspots','true') && isset($hotspots)) {
                foreach($hotspots as $id => $hs) {
                    $hotspotsHtml[] = "<div id=\"Hotspot-".$zoom_id.($id==0?'':'-'.$id)."\" class=\"MagicHotspots\">";
                    foreach($hs as $h) {
                        $title = '';
                        $href = '#';
                        $onclick = '';

                        $h->x1 = round($h->x1 * $size[$id]->w);
                        $h->y1 = round($h->y1 * $size[$id]->h);
                        $h->x2 = round($h->x2 * $size[$id]->w);
                        $h->y2 = round($h->y2 * $size[$id]->h);

                        //!!! take care on quotes
                        switch ($h->mode) {
//
//                            case 'custom':
//                                $onclick=str_replace('"',"\'",stripslashes($h->option));
//                                break;
//                            case 'link':
//                                $link = str_replace(array("'",'"'),"\'",stripslashes($h->option));
//                                $onclick="window.open('$link')";
//                                break;
//                            case 'alert':
//                            default:
//                                $onclick="alert('".str_replace(array("'",'"'), "\'", stripslashes($h->option))."')";
                            default:
                            case 'magicthumb':
                                unset($foundImage);
                                foreach($images as $img) {
                                    if($img->file_id == $h->linked_file_id) {
                                        $foundImage = $img;
                                        break;
                                    }
                                }
                                if(isset($foundImage)) {
                                    $href = $foundImage->file_url;
                                    $title = $foundImage->file_title;
                                } else {
                                    $onclick="alert('Sorry, an error has occurred.')";
                                }
                                break;
                        }
                        //be sure to use double quotes for 'onclick' attribute
                        $hotspotsHtml[]= "\t<a href=\"$href\" class='MagicThumb' title=\"$title\" coords=\"{$h->x1},{$h->y1},{$h->x2},{$h->y2}\"></a>";
                    }
                    $hotspotsHtml[]="</div>";
                }
            }
            $hotspotsHtml = join("\n\t",$hotspotsHtml);


            /*if($this->conf->check('show-message', 'Yes')) {
                $message = $this->conf->get('message');
            } else $message = '';*/

            if($this->coreClass->type == 'category' || $this->coreClass->type == 'circle') {
                if(count($list) < 2) {
                    return $matches[0];
                }

                if($returnArray) {
                    return $list;
                } else {
                    return $this->coreClass->template($list, array('id' => 'detailed' . $product_id));
                }
            } else {
                $scroll = '';
                if($this->conf->check('magicscroll', 'Yes')) {
                    $this->scrollClass->params->profile($this->conf->resolveProfileName());
                    $this->scrollClass->params->append($this->conf->all());
                    $this->scrollClass->params->set('direction', $this->conf->check('template', array('left', 'right')) ? 'bottom' : 'right');
                    $scroll = $this->scrollClass->getPersonalOptions('MagicToolboxSelectors' . $zoom_id);
                    $this->scrollClass->params->profile('default');
                }

                return $scroll . $this->renderTemplate(array(
                    'main' => $main,
                    'thumbs' => $thumbs,
                    //'classes' => $this->conf->check('magicscroll', 'Yes') ? 'MagicScroll' : '',
                    'pid' => $zoom_id,

                    //'message' => $message,
                    'hotspots' => $hotspotsHtml

                ));
            }

            //return '<div class="MagicToolboxContainer" style="text-align: ' . (($this->latestProd == true || $this->featuredProd == true || $this->randomProd == true || $this->conf->checkValue("centered-thumbnails", "Yes")) ? 'center' : 'left') . ' !important; ' . ($this->conf->checkValue("use-original-vm-thumbnails", "Yes")?'':('width: ' .$this->conf->getValue("thumb-max-width").'px;')) . '" >'.join($ret, ' ').'</div>';
        }
        else return $matches[0];
    }

    function replaceThumbInFlypage($img, $tpl) {
        $patterns = array(
            "/<a[^>]*>\s*<img[^>]*?src=\"(" . preg_quote($img->file_url, "/") . "[^\"]*)\"[^>]*>.*?<\/a>/is",
            "/<a[^>]*>\s*<img[^>]*?src=\"([^\"]*?virtuemart\/show_image_in_imgtag\.php\?[^\"]*?" . preg_quote($img->file_name, "/") . "[^\"]*)\"[^>]*>.*?<\/a>/is",
            "/<a[^>]*>\s*<img[^>]*?src=\"([^\"]*?virtuemart\/show_image_in_imgtag\.php\?[^\"]*?" . preg_quote(urlencode($img->file_name), "/") . "[^\"]*)\"[^>]*>.*?<\/a>/is"
        );
        foreach($patterns as $pattern) {
            if(preg_match($pattern, $this->content_buffer, $matches)) {
                if($this->conf->checkValue("use-original-vm-thumbnails", "Yes")) {
                    $tpl2 = preg_replace('/src=\".*?\"/is', 'src="' . $matches[1] . '"', $tpl);
                } else $tpl2 = $tpl;
                $this->preserveAdditionalThumbnailsPositions = true;
                // we can't replace becase main preg_replace will be restore all chnages
                //$this->content_buffer = preg_replace($pattern, $tpl, $this->content_buffer);
                $this->shouldBeReplaced["patterns"][] = $pattern;
                $this->shouldBeReplaced["replacements"][] = $tpl2;
                break;
            }
        }
    }

    function getProductInfo($id, $field = null, $value = null) {
        if($field !== null && $value !== null && !empty($value)) return $value;

        if(intval($id) < 1) return false;

        if(!isset($GLOBALS["magictoolbox"]["products_cache"])) $GLOBALS["magictoolbox"]["products_cache"] = array();

        if(isset($GLOBALS["magictoolbox"]["products_cache"][$id])) {
            // get from magictoolbox cashe
            $product = $GLOBALS["magictoolbox"]["products_cache"][$id];
        } else if(isset($GLOBALS["product_info"]) && isset($GLOBALS["product_info"][$id]) && isset($GLOBALS["product_info"][$id]["product_full_image"])) {
            // get from globals (virtuemart cashe)
            $parentID = $GLOBALS["product_info"][$id]["product_parent_id"];
            $product = array();
            $product["title"] = $GLOBALS["product_info"][$id]["product_name"];
            $product["description"] = $this->getProductInfo($parentID, "description", $GLOBALS["product_info"][$id]["product_desc"]);
            $product["description_short"] = $this->getProductInfo($parentID, "description_short", $GLOBALS["product_info"][$id]["product_s_desc"]);

            $product["img"] = $this->getProductInfo($parentID, "img", $GLOBALS["product_info"][$id]["product_full_image"]);
            $product["thumb"] = $this->getProductInfo($parentID, "thumb", $GLOBALS["product_info"][$id]["product_thumb_image"]);
        } else {
            //get from DB
            $db = new ps_DB;
            $db->query('SELECT * FROM #__{vm}_product WHERE product_id='.$id.' AND product_publish=\'Y\'');
            $parentID = $db->f("product_parent_id");
            $product = array();
            $product["title"] = $db->f("product_name");
            $product["description"] = $this->getProductInfo($parentID, "description", $db->f("product_desc"));
            $product["description_short"] = $this->getProductInfo($parentID, "description_short", $db->f("product_s_desc"));

            $product["img"] = $this->getProductInfo($parentID, "img", $db->f("product_full_image"));
            $product["thumb"] = $this->getProductInfo($parentID, "thumb", $db->f("product_thumb_image"));
        }

        // add to cashe
        $GLOBALS["magictoolbox"]["products_cache"][$id] = $product;

        if($field !== null) return $product[$field];
        else return $product;
    }

    function makeThumb($filename, $size, $pid = null, $origThumb = '', $returnSize = false) {
        if(!empty($origThumb) && $this->conf->checkValue('use-original-vm-thumbnails', 'Yes')) {
            if($this->isUrl($origThumb)) {
                return $origThumb;
            }
            if(file_exists(IMAGEPATH . $origThumb)) {
                return IMAGEURL . $origThumb;
            }
        }

        $isUrl = $this->isUrl($filename);
        $noImage = VM_THEMEURL.'images/'.NO_IMAGE;

        $info = pathinfo($filename);
        if(intval(phpversion()) < 5 || !isset($info["filename"])) {
            //$info["filename"] = basename($info["basename"], ".".$info["extension"]);
            $info["filename"] = preg_replace("/\." . preg_quote($info["extension"]) . "$/is", "", $info["basename"]);
        }

        $imgpath = str_replace($this->jmpath, '', IMAGEPATH);

        $path_full = IMAGEPATH . "product/" . $info["basename"];
        if($isUrl && !file_exists($path_full)) {
            $remote_file = @file_get_contents($info['dirname'].'/'.rawurlencode($info['basename']));
            if($remote_file){
                file_put_contents($path_full, $remote_file);
            } else {
                return $noimage;
            }
        }
        if(!file_exists($path_full) || filesize($path_full) == 0) {
            return $noImage;
        }

        if($returnSize === true) {
            $maxW = intval(str_replace("px", "", $this->conf->getValue($size . '-max-width')));
            $maxH = intval(str_replace("px", "", $this->conf->getValue($size . '-max-height')));
            $size = getimagesize($path_full);
            $originalW = $size[0];
            $originalH = $size[1];
            if(!$maxW && !$maxH) {
                return (object)array('w'=>$originalW,'h'=>$originalH);
            } elseif(!$maxW) {
                $maxW = ($maxH * $originalW) / $originalH;
            } elseif(!$maxH) {
                $maxH = ($maxW * $originalH) / $originalW;
            }
            $sizeDepends = $originalW/$originalH;
            $placeHolderDepends = $maxW/$maxH;
            if($sizeDepends > $placeHolderDepends) {
                $newW = $maxW;
                $newH = $originalH * ($maxW / $originalW);
            } else {
                $newW = $originalW * ($maxH / $originalH);  
                $newH = $maxH;
            }
            return (object)array('w'=>round($newW),'h'=>round($newH));
        }

        require_once(dirname(__FILE__) . ($this->JoomlaVersion == '1.0.0' ? '/mod_virtuemart_magiczoomplus' : '') . '/magictoolbox.imagehelper.class.php');
        $helper = new MagicToolboxImageHelper($this->jmpath, $imgpath . 'product/resized/magictoolbox_cache', $this->conf, null, $this->jmurl);
        return $helper->create($imgpath . 'product/' . $info["basename"], $size, $pid);
    }

    function reorganizeHotspots($hotspots) {
        if(!is_array($hotspots) || !count($hotspots)) return array();

        $res = array();
        foreach($hotspots as $hs) {
            $res[intval($hs->file_id)][]=$hs;
        }
        return $res;
    }


    function isUrl($string) {
        return preg_match('/^https?:\/\//is',$string);
    }

    function resolveImageUrl($string) {
        if(!$this->isUrl($string) && $string != 'noimage') {
            $string = IMAGEURL.'product/'.$string;
        }
        return $string;
    }

    function resolveImagePath($string,$thumb = false) {
        if(!$this->isUrl($string) && !file_exists($string)) {
            $string = IMAGEPATH.'product/'.($thumb?'resized/':'').basename($string);
        }
        return $string;
    }

    function renderStyle($css){
        $style = array();

        foreach($css as $attr => $value){
            $style[] = "$attr: $value";
        }
        return join('; ',$style);
    }

    function renderTemplate($options){
        /*extract($options);
        ob_start();
        if($this->JoomlaVersion == '1.5.0') {
            require dirname(__FILE__).DS.'templates'.DS.preg_replace('/[^\w\d]+/', '-', $name).'.php';
        } else {
            require dirname(__FILE__).DS.'mod_virtuemart_magiczoomplus'.DS.'templates'.DS.preg_replace('/[^\w\d]+/', '-', $name).'.php';
        }
        $html = ob_get_clean();
        return str_replace("\n", ' ', str_replace("\r", ' ', $html));*/
        require_once(dirname(__FILE__) . DS . 'magictoolbox.templatehelper.class.php');
        if($this->JoomlaVersion == '1.5.0') {
            MagicToolboxTemplateHelper::setPath(dirname(__FILE__).DS.'templates');
        } else {
            MagicToolboxTemplateHelper::setPath(dirname(__FILE__).DS.'mod_virtuemart_magiczoomplus'.DS.'templates');
        }
        MagicToolboxTemplateHelper::setOptions($this->conf);
        return MagicToolboxTemplateHelper::render($options);
    }

    function getRow(&$db) {
        return $db->record[$db->row];
    }
}

$GLOBALS["magictoolbox"]["magiczoomplusVM"] = new modMagicZoomPlusVM($params, $JoomlaVersion, $VMversion);

if(in_array($GLOBALS["magictoolbox"]["magiczoomplusVM"]->coreClass->type, array('category', 'circle'))) {
    echo '<!--MAGICTOOLBOXPLACEHOLDER-->';
}

function modMagicZoomPlusVMLoad() {
    $GLOBALS["magictoolbox"]["magiczoomplusVM"]->load();
}

if($JoomlaVersion == '1.0.0') modMagicZoomPlusVMLoad();

?>
