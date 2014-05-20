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

class SEFViewConfig extends JView
{

	function display($tpl = null)
	{
		JToolBarHelper::title( JText::_('JoomSEF Configuration'), 'config.png' );
		
		JToolBarHelper::save();
		JToolBarHelper::apply();
		JToolBarHelper::spacer();
		JToolBarHelper::cancel();
		
		// Get data from the model
		$lists = & $this->get('Lists');

		$this->assignRef('lists', $lists);
        $this->subdomains = $this->get('subdomains');
		
		// Which tab to show?
        $sefConfig =& SEFConfig::getConfig();
        $tabs = array('basic');
        if ($sefConfig->professionalMode) {
            $tabs[] = 'advanced';
        }
        $tabs[] = 'cache';
        $tabs[] = 'metatags';
        $tabs[] = 'seo';
        $tabs[] = 'sitemap';
        if (SEFTools::JoomFishInstalled()) {
            $tabs[] = 'joomfish';
        }
        $tabs[] = 'analytics';
        if (!SEFTools::JoomFishInstalled()) {
            $tabs[] = 'subdomains';
        }
        $tabs[] = 'tab404';
        $tabs[] = 'registration';
        
		$tab = JRequest::getVar('tab', 'basic');
		$tabIdx = array_search($tab, $tabs);
        if ($tabIdx === false) {
            $tabIdx = 0;
        }
		$this->assign('tab', $tabIdx);
		
		JHTML::_('behavior.tooltip');

        $sefConfig =& SEFConfig::getConfig();
        if (!$sefConfig->professionalMode) {
            $mainframe =& JFactory::getApplication();
            $mainframe->enqueueMessage(JText::_('COM_SEF_BEGINNER_MODE_INFO'));
        }

		parent::display($tpl);
	}

}
?>