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

class SEFControllerSEFUrls extends SEFController
{
    /**
     * constructor (registers additional tasks to methods)
     * @return void
     */
    function __construct()
    {
        parent::__construct();
        
        $this->registerTask('add', 'edit');
    }

    function display()
    {
        JRequest::setVar( 'view', 'sefurls' );
        
        parent::display();
    }
    
    function edit()
    {
        JRequest::setVar( 'view', 'sefurl' );
        
        parent::display();
    }
    
    function save()
    {
        $model = $this->getModel('sefurl');

        if ($model->store()) {
            $msg = JText::_( 'URL Saved' );
        } else {
            $msg = JText::_( 'Error Saving URL' ) . ': ' . $model->getError();
        }

        $this->setRedirect('index.php?option=com_sef&controller=sefurls', $msg);
    }
    
    function setActive()
    {
        $model =& $this->getModel('sefurl');
        
        if( !$model->setActive() ) {
            $msg = JText::_( 'Error: URL could not be set active' );
        } else {
            $msg = JText::_( 'URL Activated' );
        }
        
        $this->setRedirect( 'index.php?option=com_sef&controller=sefurls', $msg );
    }
    
    function _getWhere()
    {
        $selection = JRequest::getVar('selection', 'selected', 'post');
        $model =& $this->getModel('sefurls');
        
        $where = '';
        if ($selection == 'selected') {
            $where = $model->_getWhereIds();
        }
        else {
            $where = $model->_getWhere();
        }
        
        return $where;
    }
    
    function enable()
    {
        $this->_setEnabled(1);
    }
    
    function disable()
    {
        $this->_setEnabled(0);
    }
    
    function lock()
    {
        $this->_setLocked(1);
    }
    
    function unlock()
    {
        $this->_setLocked(0);
    }
    
    function sefEnable()
    {
        $this->_setSEF(1);
    }
    
    function sefDisable()
    {
        $this->_setSEF(0);
    }
    
    function trash()
    {
        $model =& $this->getModel('sefurls');
        $where = $this->_getWhere();

        if (!$model->trash($where)) {
            $msg = JText::_( 'Error: One or More URLs Could not be Trashed' );
        } else {
            $msg = JText::_( 'URL(s) Trashed' );
        }
        
        $this->setRedirect( 'index.php?option=com_sef&controller=sefurls', $msg );
    }
    
    function restore()
    {
        $model =& $this->getModel('sefurls');
        $where = $this->_getWhere();

        if (!$model->restore($where)) {
            $msg = JText::_( 'Error: One or More URLs Could not be Restored' );
        } else {
            $msg = JText::_( 'URL(s) Restored' );
        }
        
        $this->setRedirect( 'index.php?option=com_sef&controller=sefurls', $msg );
    }
    
    function delete()
    {
        $model =& $this->getModel('sefurls');
        $where = $this->_getWhere();

        if (!$model->delete($where)) {
            $msg = JText::_( 'Error: One or More URLs Could not be Deleted' );
        } else {
            $msg = JText::_( 'URL(s) Deleted' );
        }
        
        $this->setRedirect( 'index.php?option=com_sef&controller=sefurls', $msg );
    }
    
    function cancel()
    {
        $this->setRedirect( 'index.php?option=com_sef&controller=sefurls' );
    }
    
    function showimport()
    {
        $model =& $this->getModel('import');
        $view =& $this->getView('importexport', 'html');
        $view->setModel($model, true);
        
        $view->display();
    }
    
    function import()
    {
        $model =& $this->getModel('import');
        $view =& $this->getView('importexport', 'html');
        $view->setModel($model);
        $view->setLayout('importstats');
        
		if(!$model->import()) {
		    $view->assign('success', false);
		} else {
		    $view->assign('success', true);
		}
		
		$view->assign('filetype', $model->type);
		$view->assign('total', $model->total);
		$view->assign('imported', $model->imported);
		$view->assign('notImported', $model->notImported);
		
		$view->display();
    }
    
    function importdbace()
    {
        $model =& $this->getModel('import');
        $view =& $this->getView('importexport', 'html');
        $view->setModel($model);
        $view->setLayout('importstats');
        
		if(!$model->importDBAce()) {
		    $view->assign('success', false);
		} else {
		    $view->assign('success', true);
		}
		
		$view->assign('filetype', $model->type);
		$view->assign('total', $model->total);
		$view->assign('imported', $model->imported);
		$view->assign('notImported', $model->notImported);
		
		$view->display();
    }
    
    function importdbsh()
    {
        $model =& $this->getModel('import');
        $view =& $this->getView('importexport', 'html');
        $view->setModel($model);
        $view->setLayout('importstats');
        
		if(!$model->importDBSh()) {
		    $view->assign('success', false);
		} else {
		    $view->assign('success', true);
		}
		
		$view->assign('filetype', $model->type);
		$view->assign('total', $model->total);
		$view->assign('imported', $model->imported);
		$view->assign('notImported', $model->notImported);
		
		$view->display();
    }
    
    function export()
    {
        $model =& $this->getModel('sefurls');
        $where = $this->_getWhere();
        
		if(!$model->export($where)) {
			$msg = JText::_( 'Error: URLs could not be exported.' );
		} else {
			$msg = JText::_( 'URL(s) Exported' );
		}

		$this->setRedirect( 'index.php?option=com_sef&controller=sefurls', $msg );
    }
    
    function create301()
    {
        $model =& $this->getModel('sefurl');
        $url301 =& $model->getData();
        
        $sefurl = '';
        if( !empty($url301->sefurl) ) {
            $sefurl = '&sefurl='.urlencode($url301->sefurl);
        }
        
        $this->setRedirect('index.php?option=com_sef&controller=movedurls&task=add'.$sefurl);
    }
    
    function _setEnabled($state)
    {
        $model =& $this->getModel('sefurls');
        $where = $this->_getWhere();
        
        $msg = '';
        if( !$model->setEnabled($state, $where) ) {
            $msg = JText::_( 'Error Saving URL' );
        }
        
        $this->setRedirect( 'index.php?option=com_sef&controller=sefurls', $msg );
    }
    
    function _setLocked($state)
    {
        $model =& $this->getModel('sefurls');
        $where = $this->_getWhere();
        
        $msg = '';
        if( !$model->setLocked($state, $where) ) {
            $msg = JText::_( 'Error Saving URL' );
        }
        
        $this->setRedirect( 'index.php?option=com_sef&controller=sefurls', $msg );
    }
    
    function _setSEF($state)
    {
        $model =& $this->getModel('sefurls');
        $where = $this->_getWhere();
        
        $msg = '';
        if( !$model->setSEF($state, $where) ) {
            $msg = JText::_( 'Error Saving URL' );
        }
        
        $this->setRedirect( 'index.php?option=com_sef&controller=sefurls', $msg );
    }
    
    function createLinks()
    {
        $model =& $this->getModel('sefurls');
        
        $model->CreateHomeLinks();
        
        $this->setRedirect( 'index.php?option=com_sef&controller=sefurls' );
    }
    
    function updateUrls()
    {
        $model =& $this->getModel('sefurls');
        $view =& $this->getView('sefurls', 'html');
        $view->setModel($model, true);
        
        if (!$model->prepareUpdate()) {
            $msg = JText::_('COM_SEF_UPDATE_URLS_PREPARE_FAILED');
            $this->setRedirect('index.php?option=com_sef', $msg);
            return;
        }
        
        $view->showUpdate();
    }
    
    function update_urls()
    {
        $model =& $this->getModel('sefurls');
        $view =& $this->getView('sefurls', 'html');
        $view->setModel($model, true);
        
        $where = $this->_getWhere();
        if (!$model->prepareUpdateWhere($where)) {
            $msg = JText::_('COM_SEF_UPDATE_URLS_PREPARE_FAILED');
            $this->setRedirect('index.php?option=com_sef&controller=sefurls', $msg);
            return;
        }
        
        $view->showUpdate('sefurls');
    }
    
    function update_metas()
    {
        $model =& $this->getModel('sefurls');
        $view =& $this->getView('sefurls', 'html');
        $view->setModel($model, true);
        
        $where = $this->_getWhere();
        if (!$model->prepareUpdateWhere($where)) {
            $msg = JText::_('COM_SEF_UPDATE_META_PREPARE_FAILED');
            $this->setRedirect('index.php?option=com_sef&controller=sefurls', $msg);
            return;
        }
        
        $view->showUpdateMeta('sefurls');
    }
    
    
    function updateNext()
    {
        $model =& $this->getModel('sefurls');
        
        $res = $model->updateNext();
        echo $res;
        jexit();
    }

    function updateMeta()
    {
        $model =& $this->getModel('sefurls');
        $view =& $this->getView('sefurls', 'html');
        $view->setModel($model, true);
        
        if (!$model->prepareUpdate()) {
            $msg = JText::_('COM_SEF_UPDATE_META_PREPARE_FAILED');
            $this->setRedirect('index.php?option=com_sef', $msg);
            return;
        }
        
        $view->showUpdateMeta();
    }
    
    function updateMetaNext()
    {
        $model =& $this->getModel('sefurls');
        
        $res = $model->updateMetaNext();
        echo $res;
        jexit();
    }
}
?>
