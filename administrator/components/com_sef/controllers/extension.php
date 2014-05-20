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

class SEFControllerExtension extends SEFController
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
        JRequest::setVar('view', 'extensions');
        
        parent::display();
    }
    
    function save()
    {
        JRequest::checkToken() or jexit( 'Invalid Token' );
        
        $task = JRequest::getCmd('task');
        $file = JRequest::getVar('file');
        
        $model = $this->getModel('extension');

        if ($model->store()) {
            $msg = JText::_( 'Extension Saved' );
        } else {
            $msg = JText::_( 'Error Saving Extension' );
        }

        $redir = JRequest::getVar('redirto', '');
        if( $task == 'save' ) {
            $link = 'index.php?option=com_sef';
            if( !empty($redir) ) {
                $link .= '&'.$redir;
            }
        }
        elseif( $task == 'apply' ) {
            $link = 'index.php?option=com_sef&task=editext&cid[]='.$file;
            if( !empty($redir) ) {
                $link .= '&redirto='.urlencode($redir);
            }
        }
        
        $this->setRedirect($link, $msg);
    }
    
    function cancel()
    {
        $redir = JRequest::getVar('redirto', '');
        $link = 'index.php?option=com_sef';
        if( !empty($redir) ) {
            $link .= '&'.$redir;
        }
        
        $this->setRedirect($link);
    }
    
    function editId()
    {
        $model =& $this->getModel('extension');
        $view = $this->getView('extension', 'html', 'sefview');
        $view->setModel($model, true);
        $view->showEditId();
    }
    
    function saveId()
    {
        JRequest::checkToken() or jexit( 'Invalid Token' );
        
        $model =& $this->getModel('extension');
        $model->storeId();
        jexit();
    }
    
    function changeHandler()
    {
        JRequest::checkToken() or jexit( 'Invalid Token' );
        $model =& $this->getModel('extension');
        $msg = '';
        if (!$model->changeHandler()) {
            $msg = 'Could not change handler';
        }
        
        $redir = JRequest::getVar('redirto', '');
        $link = 'index.php?option=com_sef';
        if( !empty($redir) ) {
            $link .= '&'.$redir;
        }
        
        $this->setRedirect($link, $msg);
    }
}
?>
