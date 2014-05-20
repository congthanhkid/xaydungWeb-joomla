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

class SEFControllerConfig extends SEFController
{
    function __construct()
    {
        parent::__construct();
        
        $this->registerTask('apply', 'save');
    }

    function edit()
    {

        JRequest::setVar( 'view', 'config' );

        parent::display();
    }

    function save()
    {
        $model = $this->getModel('config');

        if ($model->store()) {
            $msg = JText::_('Configuration updated').' - '.JText::_('INFO_CONFIG_UPDATE');
        } else {
            $msg = JText::_('Error writing config');
        }
        
        $task = JRequest::getCmd('task');
        if( $task == 'save' ) {
            $link = 'index.php?option=com_sef';
        }
        elseif( $task == 'apply' ) {
            $link = 'index.php?option=com_sef&controller=config&task=edit';
        }            
        
        $this->setRedirect($link, $msg);
    }

    function cancel()
    {
        $this->setRedirect( 'index.php?option=com_sef' );
    }
    
    function setinfotext()
    {
        // Get new state
        $state = JRequest::getVar('state');
        if (is_null($state)) {
            jexit();
        }
        
        $sefConfig =& SEFConfig::getConfig();
        $sefConfig->showInfoTexts = ($state ? true : false);
        $sefConfig->saveConfig(0);
        
        jexit();
    }
}
?>
