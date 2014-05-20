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

$file = dirname(__FILE__).'/.cleanup';
if(mz_get('manual') || !file_exists($file) || filemtime($file) < time() - MZ_CLEANUP_INTERVAL){
    mz_jimport('joomla.filesystem.file');
    JFile::write($file, time());

    $cleanup = new ps_DB();

    $queries[] = "DELETE FROM #__{vm}_mz_product_files    WHERE file_id    NOT IN (SELECT file_id         FROM #__{vm}_product_files)";
    $queries[] = "DELETE FROM #__{vm}_mz_product_hotspots WHERE product_id NOT IN (SELECT file_product_id FROM #__{vm}_product_files)";

    foreach($queries as $q){
        $cleanup->query($q);
    }
    if(mz_get('manual')){
        mz_redirect($_SERVER['HTTP_REFERER'],"Clean!");
    }
    //echo 'Cleaned';
} else {
    //echo 'Not cleaned';
}
?>
