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

class SEFViewWords extends SEFView
{
	function display($tpl = null)
	{
	    $icon = 'manage-words.png';
		JToolBarHelper::title(JText::_('JoomSEF Words Manager'), $icon);
		
        JToolBarHelper::back('Back', 'index.php?option=com_sef');
        
        
        JHTML::_('behavior.tooltip');
        
		parent::display($tpl);
	}

}
