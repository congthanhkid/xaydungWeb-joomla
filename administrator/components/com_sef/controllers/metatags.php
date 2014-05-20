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

class SEFControllerMetaTags extends SEFController
{
    /**
     * constructor (registers additional tasks to methods)
     * @return void
     */
    function __construct()
    {
        parent::__construct();
        
        $this->registerTask('apply', 'save');
    }

    function display()
    {
        JRequest::setVar( 'view', 'metatags' );
        
        parent::display();
    }
    
    function save()
    {
        $model = $this->getModel('metatags');

        if ($model->store()) {
            $msg = JText::_( 'Meta Tags Saved' );
        } else {
            $msg = JText::_( 'Error Saving Meta Tags' ) . ': ' . $model->getError();
        }
        
        $task = JRequest::getCmd('task');
        $link = 'index.php?option=com_sef';
        if ($task == 'apply') {
            $link = 'index.php?option=com_sef&controller=metatags';
        }

        $this->setRedirect($link, $msg);
    }
    
    function cancel()
    {
        $this->setRedirect( 'index.php?option=com_sef' );
    }
    
}
?>
