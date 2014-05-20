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

class SEFViewCrawler extends SEFView
{
	function display($tpl = null)
	{
		JToolBarHelper::title(JText::_('JoomSEF Website Crawler'), 'web-crawl.png');
		JToolBarHelper::back('Back', 'index.php?option=com_sef');
        
        // Prepare vars for JS
        $document = & JFactory::getDocument();
        $js = "var jsCrawlerTextRunning = '".JText::_('COM_SEF_CRAWLER_RUNNING', true)."';\n";
        $js .= "var jsCrawlerTextCancel = '".JText::_('COM_SEF_CRAWLER_CANCEL', true)."';\n";
        $js .= "var jsCrawlerTextFinish = '".JText::_('COM_SEF_CRAWLER_FINISH', true)."';\n";
        $js .= "var jsCrawlerTextSuccess = '".JText::_('COM_SEF_CRAWLER_SUCCESS', true)."';\n";
        $js .= "var jsCrawlerTextCancelled = '".JText::_('COM_SEF_CRAWLER_CANCELLED', true)."';\n";
        $js .= "var jsCrawlerTextError = '".JText::_('COM_SEF_CRAWLER_ERROR', true)."';\n";
        $js .= "var jsCrawlerTextErrorMsg = '".JText::_('COM_SEF_CRAWLER_ERROR_MSG', true)."';\n";
        $js .= "var jsCrawlerTextResponseTime = '".JText::_('COM_SEF_CRAWLER_RESPONSE_TIME', true)."';\n";
        $js .= "var jsCrawlerScriptUrl = '".JURI::root()."administrator/index.php?option=com_sef&controller=crawler&task=crawl';\n";
        $js .= "var jsCrawlerRootUrl = '".JURI::root()."';\n";
        $document->addScriptDeclaration($js);
        
        // Load JS
        JHTML::script('crawler.js', 'administrator/components/com_sef/assets/js/', false);
        JHTML::_('behavior.mootools');
        JHTML::_('behavior.tooltip');
        
		parent::display($tpl);
	}
}
