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

jimport( 'joomla.installer.installer' );
jimport( 'joomla.filesystem.file' );

function com_uninstall()
{
    // uninstall JoomSEF plugin
    $path = JPATH_ROOT.DS.'plugins'.DS.'system'.DS;
    
    $res = JFile::delete($path.'joomsef.php');
    $res = $res && JFile::delete($path.'joomsef.xml');
    
    $db =& JFactory::getDBO();
    $db->setQuery("DELETE FROM `#__plugins` WHERE `folder` = 'system' AND `element` = 'joomsef' LIMIT 1");
    $res = $res && $db->query();
    
    $res = $res && JFile::delete($path.'joomsefgoogle.php');
    $res = $res && JFile::delete($path.'joomsefgoogle.xml');
    
    $db =& JFactory::getDBO();
    $db->setQuery("DELETE FROM `#__plugins` WHERE `folder` = 'system' AND `element` = 'joomsefgoogle' LIMIT 1");
    $res = $res && $db->query();
    
    if (!$res) {
        JError::raiseWarning(100, JText::_('WARNING_PLUGIN_NOT_UNINSTALLED'));
    }
    
    // uninstall JoomSEF extension installer adapter
    $path = JPATH_LIBRARIES.DS.'joomla'.DS.'installer'.DS.'adapters'.DS.'sef_ext.php';
    if( JFile::exists($path) ) {
        JFile::delete($path);
    }

    echo '<h3>ARTIO JoomSEF succesfully uninstalled.</h3>';
}
?>
