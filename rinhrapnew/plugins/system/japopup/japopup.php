<?php
/**
 * ------------------------------------------------------------------------
 * JA Popup Plugin for Joomla 2.5
 * ------------------------------------------------------------------------
 * Copyright (C) 2004-2011 J.O.O.M Solutions Co., Ltd. All Rights Reserved.
 * @license - GNU/GPL, http://www.gnu.org/licenses/gpl.html
 * Author: J.O.O.M Solutions Co., Ltd
 * Websites: http://www.joomlart.com - http://www.joomlancers.com
 * ------------------------------------------------------------------------
 */

defined('_JEXEC') or die();
jimport('joomla.plugin.plugin');
jimport('joomla.application.module.helper');
// Import library dependencies
jimport('joomla.event.plugin');

/**
 * JAPopup Content Plugin
 *
 * @package		Joomla
 * @subpackage	Content
 * @since 		1.7
 */
class plgSystemJAPopup extends JPlugin
{

    /** @var object $_modalObject  */
    var $_modalObject;
    var $_params;


    /**
     * Constructor
     *
     * For PHP 5 compatability we must not use the __constructor as a constructor for plugins
     * because func_get_args ( void ) returns a copy of all passed arguments, NOT references.
     * This causes problems with cross-referencing necessary for the observer design pattern.
     *
     * @param	object	$subject The object to observe
     */
    function plgSystemJAPopup(&$subject)
    {
        parent::__construct($subject);

        // load plugin parameters
        $this->_plugin = JPluginHelper::getPlugin('system', 'japopup');
        $this->_params = new JRegistry();
        $this->_params->loadJSON($this->_plugin->params);

        // Get modal window type
        $modalWindowType = $this->_params->get("group1", "fancybox");

        // Require library for each Popup type
        require_once (dirname(__FILE__) . '/popupHelper.php');
        if (!file_exists(dirname(__FILE__) . '/' . $modalWindowType . '/' . $modalWindowType . '.php'))
            return;
        require_once (dirname(__FILE__) . '/' . $modalWindowType . '/' . $modalWindowType . '.php');
        $modalWindowType = $modalWindowType . "Class";
        $modalWindowTypeObject = new $modalWindowType($this->_params);

        // Assign modal type object
        $this->_modalObject = $modalWindowTypeObject;
    }


    /**
     * Popup prepare content method
     *
     * @param 	string		The body string content.
     * @return 	string
     */
    function replaceContent($bodyContent)
    {
        $mainframe = JFactory::getApplication();
        // Get plugin identifier in article content
        if (JString::strpos($bodyContent, '{japopup') === false) {
            $HSmethodDIRECT = false;
        } else {
            $HSmethodDIRECT = true;
        }

        if ($HSmethodDIRECT) {
            require_once (dirname(__FILE__) . '/helper.php');
            $parser = new ReplaceCallbackParsers('japopup', $this->_params);
            $bodyContent = $parser->parse($bodyContent, array($this->_modalObject, 'getContent', 'getHeaderLibrary'));
        }
        return $bodyContent;
    }


    /**
     *
     * Process data when after render
     */
    function onAfterRender()
    {
        // Return if page is not html
        $mainframe = JFactory::getApplication();

        if ($mainframe->isAdmin()) {
            return;
        }

        if (!isset($this->_plugin))
            return;

        $_body = JResponse::getBody();

        // Replace {japopup} tag by appropriate content to show popup
        $_body = $this->replaceContent($_body);

        if ($_body) {
            JResponse::setBody($_body);
        }
        return true;
    }
}
?>