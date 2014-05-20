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

require_once dirname(__FILE__).'/lib/magictoolbox.functions.php';

function com_uninstall(){
    global $mosConfig_absolute_path;

    if(file_exists(dirname(__FILE__).'/../com_virtuemart/compat.joomla1.5.php')){
        include(dirname(__FILE__).'/../com_virtuemart/compat.joomla1.5.php');
        require_once( $mosConfig_absolute_path.'/components/com_virtuemart/virtuemart_parser.php');
    }

    $INSTALLMODE = 'uninstall';
    include dirname(__FILE__).'/install.un.php';
}
?>
