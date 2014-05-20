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

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

class SEFControllerLogger extends SEFController
{
    function display()
    {
        JRequest::setVar( 'view', 'logger' );
        parent::display();
    }
    
    function clear()
    {
        $model = $this->getModel('logger');
        if (!$model->clearLogs()) {
            $msg = JText::_('COM_SEF_LOGS_CLEARED_ERROR');
            $type = 'error';
        }
        else {
            $msg = JText::_('COM_SEF_LOGS_CLEARED');
            $type = 'message';
        }
        
        $this->setRedirect('index.php?option=com_sef&controller=logger', $msg, $type);
    }
}
