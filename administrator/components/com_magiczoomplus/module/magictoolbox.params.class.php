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


if(!in_array('MagicToolboxParams', get_declared_classes())) {

    require_once(dirname(__FILE__) . '/magictoolbox.options.class.php');

    class MagicToolboxParams extends MagicToolboxOptions {
        var $params;

        function profile($name) {
            parent::profile($name);
            $this->params = & $this->profiles[$this->cur];
        }

        function getValue() {
            $args = func_get_args();
            return call_user_func_array(array($this, 'get'), $args);
        }

        function getValues() {
            $args = func_get_args();
            return call_user_func_array(array($this, 'values'), $args);
        }

        function getArray() {
            $args = func_get_args();
            return call_user_func_array(array($this, 'all'), $args);
        }

        function appendArray() {
            $args = func_get_args();
            return call_user_func_array(array($this, 'append'), $args);
        }

        function checkValue() {
            $args = func_get_args();
            return call_user_func_array(array($this, 'check'), $args);
        }

    }

}
?>
