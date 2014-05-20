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

defined( '_VM_IS_BACKEND' ) or define( '_VM_IS_BACKEND', '1' );

define('MZ_PER_PAGE',10);
define('MZ_CLEANUP_INTERVAL', 3600*24);
define('MZ_PATH', dirname(__FILE__));
define('PATH_APPENDIX', 'product');

defined('JPATH_BASE') or define('JPATH_BASE',MZ_PATH);
defined('JPATH_SITE') or define('JPATH_SITE',MZ_PATH);

defined('DS') or define('DS',DIRECTORY_SEPARATOR);

require_once join(DS,array(dirname(__FILE__),'lib','magictoolbox.functions.php'));
