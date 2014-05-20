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

jimport('joomla.application.component.controller');

class SEFController extends JController
{
    function __construct()
    {
        parent::__construct();
    }

    function display()
    {
        $model =& $this->getModel('extensions');
        $view =& $this->getView('sef', 'html', 'sefview');
        $view->setModel($model);

        SEFTools::checkExtVersions();
        
        parent::display();
    }

    function editExt()
    {
        JRequest::setVar('view', 'extension');

        parent::display();
    }

    function installExt()
    {
        JRequest::setVar('view', 'install');

        $model =& $this->getModel('extensions');
        $view =& $this->getView('install', 'html', 'sefview');
        $view->setModel($model);

        parent::display();
    }

    function doInstall()
    {
        JRequest::checkToken() or jexit( 'Invalid Token' );

        $model =& $this->getModel('extension');
        $view =& $this->getView('install', 'html', 'sefview');
        
        $model->install();
        
        $view->setModel($model, true);
        $view->showMessage();
    }

    function uninstallExt()
    {
        JRequest::checkToken() or jexit( 'Invalid Token' );

        $model =& $this->getModel('extension');

        if( $model->delete() ) {
            $msg = 'Extension Uninstalled';
        } else {
            $msg = 'Error Uninstalling Extension';
        }

        $redir = JRequest::getVar('redirto', '');
        $link = 'index.php?option=com_sef';
        if( !empty($redir) ) {
            $link .= '&'.$redir;
        }

        $this->setRedirect($link, $msg);
    }
    
    function showUpgrade()
    {
        JRequest::setVar('view', 'upgrade');
        
        $this->display();
    }
    
    function doUpgrade()
    {
        JRequest::checkToken() or jexit( 'Invalid Token' );
        
        $model =& $this->getModel('upgrade');
        $result = $model->upgrade();
        $model->setState('result', $result);
        
        $view =& $this->getView('upgrade', 'html', 'sefview');
        $view->setModel($model, true);
        $view->showMessage();
    }

    function cleanCache()
    {
        require_once(JPATH_COMPONENT.DS.'controllers'.DS.'urls.php');
        $controller = new SEFControllerURLs();
        $controller->execute( 'cleancache' );
        $this->setRedirect('index.php?option=com_sef', JText::_('Cache Cleaned'));
    }
    
    function URLsUpdated()
    {
        $view =& $this->getView('sefurls', 'html');
        $view->showUpdated();
    }
    
    function enableStatus()
    {
        $this->setStatus(1);
    }
    
    function disableStatus()
    {
        $this->setStatus(0);
    }
    
    function setStatus($state)
    {
        JRequest::checkToken() or jexit( 'Invalid Token' );
        
        $type = JRequest::getVar('statusType', '', 'post', 'string');
        $types = array('sef', 'mod_rewrite', 'joomsef', 'plugin', 'newurls', 'versioncheck', 'jfrouter');
        $msg = '';
        
        if( in_array($type, $types) ) {
            // SEF and mod_rewrite settings
            if( $type == 'sef' || $type == 'mod_rewrite' ) {
                jimport('joomla.client.helper');
        		jimport('joomla.filesystem.path');
                jimport('joomla.filesystem.file');
                
                $config =& JFactory::getConfig();
                
                if( $type == 'sef' ) {
                    $config->setValue('config.sef', $state);
                }
                else {
                    $config->setValue('config.sef_rewrite', $state);
                }
                
                // Store the configuration
                $file = JPATH_CONFIGURATION.DS.'configuration.php';
                
        		// Try to make configuration.php writeable
                $ftp = JClientHelper::getCredentials('ftp');
        		if (!$ftp['enabled'] && JPath::isOwner($file) && !JPath::setPermissions($file, '0644')) {
        			$msg = JText::_('Could not make configuration.php writable');
        		}

        		if( !JFile::write($file, $config->toString('PHP', 'config', array('class' => 'JConfig'))) ) {
        			$msg = JText::_('Error writing config');
        		}
            }
            else if( $type == 'joomsef' || $type == 'newurls' || $type == 'versioncheck' ) {
                // JoomSEF and new URLs settings
                $sefConfig =& SEFConfig::getConfig();
                
                if( $type == 'joomsef' ) {
                    $sefConfig->enabled = $state;
                }
                else if( $type == 'newurls' ) {
                    $sefConfig->disableNewSEF = 1 - $state;
                }
                else {
                    $sefConfig->versionChecker = $state;
                }
                
                // Store the configuration
                if( !$sefConfig->saveConfig() ) {
                    $msg = JText::_('Error writing config');
                }
            }
            else if( $type == 'plugin' || $type == 'jfrouter' ) {
                // Plugins settings
                $db =& JFactory::getDBO();
                
                if( $type == 'plugin' ) {
                    $plg = 'joomsef';
                }
                else if( $type == 'jfrouter' ) {
                    $plg = 'jfrouter';
                }
                
                $query = "UPDATE `#__plugins` SET `published` = '{$state}' WHERE (`element` = '{$plg}') AND (`folder` = 'system') LIMIT 1";
                $db->setQuery($query);
                if( !$db->query() ) {
                    $msg = JText::_('Error writing config');
                }
            }
        }
        
        $return = JRequest::getVar('return', 'index.php?option=com_sef');
        
        $this->setRedirect($return, $msg);
    }
}
?>
