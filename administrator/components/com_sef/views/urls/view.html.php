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

class SEFViewURLs extends JView
{
	function display($tpl = null)
	{
		JToolBarHelper::title( JText::_('JoomSEF'), 'url-delete.png' );
		
		JToolBarHelper::back('Back', 'index.php?option=com_sef');
		
		// Get data from the model
		$count		= & $this->get( 'Count' );
		if( $count == 0 ) {
		    $msg = JText::_('No records found.');
		}
		elseif( $count == 1 ) {
		    $msg = JText::_('WARNING!!!<br/>You are about to delete') . ' ' . $count . ' ' . JText::_('record');
		}
		else {
		    $msg = JText::_('WARNING!!!<br/>You are about to delete') . ' ' . $count . ' ' . JText::_('records');
		}
		$this->assignRef( 'count', $count );
		$this->assignRef( 'msg', $msg );

		parent::display($tpl);
	}
}
