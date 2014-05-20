<?php
/**
 * SEF component for Joomla!
 * 
 * @package   JoomSEF
 * @version   3.9.8
 * @author    ARTIO s.r.o., http://www.artio.net
 * @copyright Copyright (C) 2012 ARTIO s.r.o. 
 * @license   GNU/GPLv3 http://www.artio.net/license/gnu-general-public-license
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

// Load the CSS
$document = & JFactory::getDocument();
$document->addStyleSheet('components/com_sef/assets/css/default.css');

// Require the base controller
require_once (JPATH_COMPONENT.DS.'controller.php');
require_once (JPATH_COMPONENT.DS.'classes'.DS.'config.php');
require_once (JPATH_COMPONENT.DS.'classes'.DS.'seftools.php');
require_once (JPATH_COMPONENT.DS.'view.php');

// Require specific controller if requested
if($controller = JRequest::getVar('controller')) {
	$path = JPATH_COMPONENT.DS.'controllers'.DS.$controller.'.php';
	if( file_exists($path) ) {
	    require_once($path);
	} else {
	    $controller = '';
	}
}

// Create the controller
$classname	= 'SEFController'.$controller;
$controller = new $classname( );

// Perform the Request task
$controller->execute( JRequest::getVar('task') );

// Redirect if set by the controller
$controller->redirect();

?>
