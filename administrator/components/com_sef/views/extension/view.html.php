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
jimport( 'joomla.html.pane' );

class SEFViewExtension extends JView
{
	function display($tpl = null)
	{
		// Get data from the model
		$extension =& $this->get('extension');
		$this->assignRef('extension', $extension);
		
		$filters =& SEFTools::getExtFilters($extension->option, false);
		$this->assignRef('filters', $filters);
		
		$acceptVars =& SEFTools::getExtAcceptVars($extension->option, false);
		sort($acceptVars, SORT_STRING);
		$this->assignRef('acceptVars', $acceptVars);
		
		JToolBarHelper::title( JText::_( 'SEF Extension' ).' <small>'.JText::_( 'Edit' ).' [ ' . $extension->name . ' ]</small>', 'plugin.png' );
		
		JToolBarHelper::save();
		JToolBarHelper::apply();
		JToolBarHelper::spacer();
		JToolBarHelper::cancel();
		
		JHTML::_('behavior.tooltip');
		
		$redir = JRequest::getVar('redirto', '');
		$this->assignRef('redirto', $redir);
		
		// Sliding pane
		$pane = &JPane::getInstance('tabs');
		$this->assignRef('pane', $pane);
		
		parent::display($tpl);
	}
	
	function showEditId()
	{
	    $ext = $this->get('extension');
	    
	    $this->assignRef('ext', $ext);
	    
	    $this->setLayout('editid');
	    parent::display(null);
	}
}
