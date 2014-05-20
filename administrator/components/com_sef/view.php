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

class SEFView extends JView
{
    function __construct($config = null)
    {
        parent::__construct($config);
        $this->_addPath('template', $this->_basePath.DS.'views'.DS.'templates');
    }
    
    function showInfoText($str)
    {
        $sefConfig =& SEFConfig::getConfig();
        
        $this->assign('infoString', JText::_($str));
        $this->assign('infoShown', $sefConfig->showInfoTexts);
        
        // Prepare JS variables
        $document =& JFactory::getDocument();
        $js = "var jsInfoTextShown = ".($sefConfig->showInfoTexts ? 'true' : 'false').";\n";
        $js .= "var jsInfoTextHide = '".JText::_('COM_SEF_INFOTEXT_HIDE', true)."';\n";
        $js .= "var jsInfoTextShow = '".JText::_('COM_SEF_INFOTEXT_SHOW', true)."';\n";
        $js .= "var jsInfoTextUrl = '".JURI::root()."administrator/index.php?option=com_sef&controller=config&task=setinfotext';\n";
        $document->addScriptDeclaration($js);
        
        // Load JS
        JHTML::script('infotexts.js', 'administrator/components/com_sef/assets/js/', false);
        JHTML::_('behavior.mootools');
        
        $prevLayout = $this->setLayout('default');
        echo $this->loadTemplate('infotext');
        $this->setLayout($prevLayout);
    }
}