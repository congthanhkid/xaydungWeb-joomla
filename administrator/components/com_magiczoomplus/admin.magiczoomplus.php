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

include_once 'init.php';

if(mz_vm_installed()) {
    include(join(DS,array(dirname(__FILE__),'..','com_virtuemart','compat.joomla1.5.php')));

    global $page, $sess;
    $allowedPages = array(
        'magiczoomplus.config.php',
        'magiczoomplus.config.save.php',
        'product.alternates.php',
        'product.hotspots.php',
        'product.list.php',
        'product.save.php',
        'product.cleanup.php',

    );

    if(isset($my)) {
        $my_ = $my;
    }

    if (file_exists( join(DS,array($mosConfig_absolute_path,'components','com_virtuemart','virtuemart_parser.php')) )) {
        require_once( join(DS,array($mosConfig_absolute_path,'components','com_virtuemart','virtuemart_parser.php')));
        if(!isset($vm_mainframe)) {
            $my = $my_;
        }

        if(mz_installed()) {
            //make some cleanup once a MZ_CLEANUP_INTERVAL
            if($page != 'product.cleanup'){
                include(dirname(__FILE__).DS.'product.cleanup.php');
            }
            //-----------------


            if($vm_mainframe) {
                $vm_mainframe->addStyleSheet( $mosConfig_live_site.'/components/com_virtuemart/js/admin_menu/css/menu.css');
                $vm_mainframe->addScript($mosConfig_live_site.'/components/com_virtuemart/js/functions.js');
            } else {
                $mainframe->addCustomHeadTag( '<script type="text/javascript" href="' . $mosConfig_live_site . '/components/com_virtuemart/js/functions.js" ></script>' );
            }

            $filename = dirname(__FILE__).DS.$page.'.php';
            if(file_exists($filename) && in_array(basename($filename),$allowedPages)) {
                include $filename;
            } else {
                include 'magiczoomplus.config.php';
            }
        } else {
            $INSTALLMODE = 'install';
            include('install.php');
        }

        if($vm_mainframe) {
            $vm_mainframe->close();
        }
    } else {
		echo	"<h1>File not found: ".join(DS,array($mosConfig_absolute_path,'components','com_virtuemart','virtuemart_parser.php'))."</h1>";
	}
} else {
    echo "<h1>VirtueMart not yet installed!</h1>";
}
