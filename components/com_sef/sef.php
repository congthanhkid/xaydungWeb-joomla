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
defined('_JEXEC') or die;

jimport('joomla.application.component.controller');

require_once('sef.router.php');

class JoomSEFController extends JController
{
    function display()
    {
        $this->setRedirect(JURI::root());
    }
}

$cmd = JRequest::getCmd('controller');
$classname = 'JoomSEFController'.$cmd;

if (!class_exists($classname)) {
    $file = JPATH_COMPONENT.DS.'controllers'.DS.$cmd.'.php';
    if (file_exists($file)) {
        require_once($file);
    }
    else {
        $classname = 'JoomSEFController';
    }
    
    if (!class_exists($classname)) {
        JError::raiseError(403, JText::_('Access Forbidden'));
    }
}

$controller = new $classname();
$controller->execute(JRequest::getCmd('task'));
$controller->redirect();
