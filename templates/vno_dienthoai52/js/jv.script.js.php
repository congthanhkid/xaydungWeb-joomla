<?php 

// Gzip Javascript 
// http://wyome.com/docs/Compressing_Javascript_with_PHP

if (extension_loaded('zlib') && !ini_get('zlib.output_compression')) @ob_start('ob_gzhandler');
header('Content-type: text/javascript; charset: UTF-8');
header('Cache-Control: must-revalidate');
header('Expires: ' . gmdate('D, d M Y H:i:s', time() + 3600) . ' GMT');

define('DS', DIRECTORY_SEPARATOR);
define('ROOT_DIR', dirname(__FILE__) . DS);

/* Mootools framework */
include(ROOT_DIR . 'mootools.js');

/* JV script */
include(ROOT_DIR . 'jv.script.js');

/* JV Collapse modules */
//include(ROOT_DIR . 'jv.collapse.js');

/* JV Slimbox */

?>