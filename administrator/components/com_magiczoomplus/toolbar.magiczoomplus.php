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

defined( '_VM_IS_BACKEND') or define( '_VM_IS_BACKEND', 1 );
defined('_VM_TOOLBAR_LOADED' ) or define('_VM_TOOLBAR_LOADED', 1 );

$joomla_compat_file = join(DS,array(dirname(__FILE__),'..','com_virtuemart','compat.joomla1.5.php'));
if(file_exists($joomla_compat_file)) {

    if (file_exists( join(DS,array($mosConfig_absolute_path,'components','com_virtuemart','virtuemart_parser.php')) )) {
        require_once( join(DS,array($mosConfig_absolute_path,'components','com_virtuemart','virtuemart_parser.php')));

        require_once( CLASSPATH . "menuBar.class.php" );

        vmMenuBar::startTable();
        vmMenuBar::customHref(
            '?option=com_magiczoomplus&page=product.list',
            $mosConfig_live_site.'/components/com_virtuemart/themes/default/images/administration/dashboard/shop_products.png',
            $mosConfig_live_site.'/components/com_virtuemart/themes/default/images/administration/dashboard/shop_products.png',
            'Products'
        );
        vmMenuBar::customHref(
            '?option=com_magiczoomplus&page=magiczoomplus.config',
            $mosConfig_live_site.'/components/com_virtuemart/themes/default/images/administration/dashboard/shop_configuration.png',
            $mosConfig_live_site.'/components/com_virtuemart/themes/default/images/administration/dashboard/shop_configuration.png',
            'Config'
        );
        vmMenuBar::endTable();
    }
}
