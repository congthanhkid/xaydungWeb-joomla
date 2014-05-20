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

class SEFViewExtensions extends JView
{
	function __construct($config = null)
	{
		parent::__construct($config);
		$this->_addPath('template', $this->_basePath.DS.'views'.DS.'templates');
	}

	function display($tpl = null)
	{
		JToolBarHelper::title('JoomSEF - '. JText::_('Extensions Management'), 'plugin.png' );
		
		$bar = & JToolBar::getInstance();
		JToolBarHelper::custom('installext', 'install', '', 'Install', false);
		$bar->appendButton('Confirm', 'Are you sure you want to uninstall selected extension?', 'uninstall', 'Uninstall', 'uninstallext', true, false);
		JToolBarHelper::editList('editext');
		JToolBarHelper::spacer();
		JToolBarHelper::back('Back', 'index.php?option=com_sef');
		
		$exts = $this->get('extensions', 'extensions');
		$this->assignRef('extensions', $exts);
		
		$noExts = $this->get('ComponentsWithoutExtension', 'extensions');
		$this->assignRef('components', $noExts);
        
        JHTML::_('behavior.tooltip');
        JHTML::_('behavior.modal');
        
		parent::display($tpl);
	}

}
