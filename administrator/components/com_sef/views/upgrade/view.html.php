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

jimport( 'joomla.application.component.view' );

class SEFViewUpgrade extends JView
{
	function __construct($config = null)
	{
		parent::__construct($config);
		//$this->_addPath('template', $this->_basePath.DS.'views'.DS.'templates');
	}

	function display($tpl = null)
	{
		JToolBarHelper::title( JText::_( 'JoomSEF' ).' - '.JText::_('Upgrade Manager'), 'update.png' );
		
		JToolBarHelper::back('Back', 'index.php?option=com_sef');

		$exts = $this->get('UpgradeExts');
		$this->assignRef('extensions', $exts);
		
		$oldVer = SEFTools::getSEFVersion();
		$this->assignRef('oldVer', $oldVer);
		
		$newVer = $this->get('newSEFVersion');
		$this->assignRef('newVer', $newVer);
		
		$regInfo = $this->get('RegisteredInfo');
		$this->assignRef('regInfo', $regInfo);
		
		$isPaidVersion = $this->get('IsPaidVersion');
		$this->assignRef('isPaidVersion', $isPaidVersion);
		
        JHTML::_('behavior.tooltip');
        JHTML::_('behavior.modal');
        
		parent::display($tpl);
	}

	function showMessage()
	{
	    JToolBarHelper::title( JText::_( 'JoomSEF' ).' '.JText::_('Upgrade Manager'), 'update.png' );
	    
        $url = 'index.php?option=com_sef&task=showupgrade';
        $redir = JRequest::getVar('redirto', null, 'post');
        if( !is_null($redir) ) {
            $url = 'index.php?option=com_sef&'.$redir;
        }
	    JToolBarHelper::back('Continue', $url);
	    
	    $this->assign('url', $url);
	    
	    $this->setLayout('message');
	    parent::display();
	}
}
