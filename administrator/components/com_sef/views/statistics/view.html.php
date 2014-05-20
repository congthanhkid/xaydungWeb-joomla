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
 
defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.view');

class SEFViewStatistics extends JView {
	function display($tpl=null) {
		$icon = 'statistics.png';
            JToolbarHelper::title(JText::_('COM_SEF_STATISTICS'), $icon);
            JToolBarHelper::back('COM_SEF_BACK', 'index.php?option=com_sef');
		
		parent::display($tpl);

	}
	
}
?>