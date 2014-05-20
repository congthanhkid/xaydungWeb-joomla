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

    if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' );

    $action = $_REQUEST['action'];


    switch ($action) {
        case 'savealternates':
            $alternates = $_GET['alts'];

            $productId = $_REQUEST['productId'];

            if(is_array($alternates)) {
                $product = new ps_DB;
                $query = array();
                foreach($alternates as $id => $params){
                    $w = array();

                    $w[] = intval($id);
                    $w[] = isset($params['checked'])?1:0;
                    $w[] = "'".$product->getEscaped($params['advanced'])."'";

                    $values[] = "(".join(',',$w).")";
                }

                $query = "INSERT INTO #__{vm}_mz_product_files(file_id,is_alternate,advanced_option) VALUES".join(',',$values)." ON DUPLICATE KEY UPDATE is_alternate = VALUES(is_alternate),advanced_option = VALUES(advanced_option)";

                $product->query($query);
            }
            break;
        case 'newhotspot':
            $product = new ps_DB;

            $height = intval($_GET['height']);
            $width = intval($_GET['width']);

            $imageId = intval($_REQUEST['imageId']);
            $productId = intval($_REQUEST['productId']);

            $w = array();
            $w[] = 'product_id = '.$productId;
            $w[] = 'file_id = '.($imageId?$imageId:'NULL');
            $w[] = 'mode = \'magicthumb\'';
            $w[] = 'x1 = 0';
            $w[] = 'y1 = 0';
            $w[] = 'x2 = '.(50/$width);
            $w[] = 'y2 = '.(50/$height);
            $w[] = '`option` = \'Hotspot text\'';
            $w[] = 'active = 1';

            $query = 'INSERT INTO #__{vm}_mz_product_hotspots SET '.join(',',$w);

            $product->query($query);
//Yes, there is no break;
        case 'savehotspots':
            $height = intval($_GET['height']);
            $width = intval($_GET['width']);

            $hotspots = $_GET['hotspots'];


            $imageId = $_REQUEST['imageId'];
            $productId = $_REQUEST['productId'];

            $query = array();
            $delete = array();

            $product = new ps_DB;

            foreach($hotspots as $id => $params) {

                if(isset($params['delete'])) {
                    $delete[] = $id;
                } else {
                    $i = array();
                    $i[] = 'mode = \''.$product->getEscaped($params['mode']).'\'';
                    $i[] = 'product_id = '.$productId;
                    $i[] = 'file_id = '.($imageId?$imageId:'NULL');
                    $i[] = 'active = '.($params['active']?1:0);

                    switch ($params['mode']) {
                        case 'magicthumb':
                        case 'download':
                            $i[] = 'linked_file_id = '.intval($params['file']);
                            break;

                        default:
                            $i[] = '`option` = \''.$product->getEscaped($params['input']).'\'';
                            break;
                    }

                    $p = $params['coord']['x1']/$width;
                    $i[] = 'x1 = '.$p;

                    $p = $params['coord']['y1']/$height;
                    $i[] = 'y1 = '.$p;

                    $p = $params['coord']['x2']/$width;
                    $i[] = 'x2 = '.$p;

                    $p = $params['coord']['y2']/$height;
                    $i[] = 'y2 = '.$p;

                    $query[] = 'UPDATE #__{vm}_mz_product_hotspots SET '.join(',',$i)." WHERE id = $id";
                }
            }

            if(count($delete)){
                $query[] = 'DELETE FROM #__{vm}_mz_product_hotspots WHERE id IN('.join(',',$delete).')';
            }

            foreach($query as $q) {
                $product->query($q);
            }
            //        $product->query(join(';',$query));
            break;

    }

    mz_redirect($_SERVER['HTTP_REFERER']);
?>
