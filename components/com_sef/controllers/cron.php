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

// no direct access
defined('_JEXEC') or die('Restricted access');

require_once(JPATH_COMPONENT_ADMINISTRATOR.DS.'classes'.DS.'config.php');
require_once(JPATH_COMPONENT_ADMINISTRATOR.DS.'classes'.DS.'seftools.php');
require_once(JPATH_COMPONENT_ADMINISTRATOR.DS.'controller.php');
require_once(JPATH_COMPONENT_ADMINISTRATOR.DS.'controllers'.DS.'crawler.php');
require_once(JPATH_COMPONENT_ADMINISTRATOR.DS.'models'.DS.'sefurls.php');

class JoomSEFControllerCron extends JController
{
    function display()
    {
        $this->setRedirect(JURI::root());
    }
    
}