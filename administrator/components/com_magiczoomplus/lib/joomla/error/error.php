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


defined('JPATH_BASE') or die();

class JError
{
	function isError(& $object)
	{}

	function & getError($unset = false)
	{}

	function & getErrors()
	{}

	function & raise($level, $code, $msg, $info = null, $backtrace = false)
	{}

	function & raiseError($code, $msg, $info = null)
	{}

	function & raiseWarning($code, $msg, $info = null)
	{}

	function & raiseNotice($code, $msg, $info = null)
	{}

    function getErrorHandling( $level )
    {}

	function setErrorHandling($level, $mode, $options = null)
	{}

	function attachHandler()
	{}

	/**
  	 * Method that dettaches the error handler from JError
  	 *
  	 * @access public
  	 * @see restore_error_handler
  	 */
	function detachHandler()
	{}

	function registerErrorLevel( $level, $name, $handler = 'ignore' )
	{}

	function translateErrorLevel( $level )
	{}

	function & handleIgnore(&$error, $options)
	{}
	function & handleEcho(&$error, $options)
	{}

	function & handleVerbose(& $error, $options)
	{}

	function & handleDie(& $error, $options)
	{}

	
	function & handleMessage(& $error, $options)
	{}

	function & handleLog(& $error, $options){}

	function &handleCallback( &$error, $options )
	{}

	function customErrorPage(& $error)
	{}

	function customErrorHandler($level, $msg)
	{}
}
