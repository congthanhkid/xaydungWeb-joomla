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

class SEFViewImportExport extends JView
{
	function display($tpl = null)
	{
		JToolBarHelper::title( JText::_('JoomSEF URL Manager'), 'url-edit.png' );
		
		JToolBarHelper::back('Back', 'index.php?option=com_sef&controller=sefurls');
		
		$this->assign('aceSefPresent', $this->get('AceSefTablePresent'));
		$this->assign('shSefPresent', $this->get('ShTablePresent'));
		
		parent::display($tpl);
	}
	
}
