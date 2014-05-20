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
defined('_JEXEC') or die('Restricted access.');

class SefExt_com_banners extends SefExt
{
    var $params;
    
    function GetBannerName($id) {
        $database =& JFactory::getDBO();
        $sefConfig =& SEFConfig::getConfig();
        
        $field = 'name';
        if( SEFTools::UseAlias($this->params, 'banner_alias') ) {
            $field = 'alias';
        }
        
        $jfTranslate = $sefConfig->translateNames ? ', `bid`' : '';
        $id = intval($id);
        $query = "SELECT `$field` AS `name` $jfTranslate FROM `#__banner` WHERE `bid` = '$id'";
        $database->setQuery($query);
        $row = $database->loadObject();
        
        $name = '';
        if (is_null($row)) {
            JoomSefLogger::Log("Banner with ID {$id} could not be found.", $this, 'com_banners');
        }
        else {
            $name = isset($row->name) ? $row->name : '';
            if( $this->params->get('banner_id', '0') ) {
                $name = $id . '-' . $name;
            }
        }
        
        return $name;
    }
    
    function create(&$uri) {
        $sefConfig =& SEFConfig::getConfig();
        $this->params =& SEFTools::getExtParams('com_banners');
        
        $vars = $uri->getQuery(true);
        extract($vars);
        
        //$title[] = 'banners';
        //$title[] = '/';
        //$title[] = $task.$bid.$sefConfig->suffix;
        $title[] = JoomSEF::_getMenuTitle(@$option, @$task, @$Itemid);
        
        switch(@$task) {
            case 'click':
                $title[] = $this->GetBannerName($bid);
                unset($task);
                break;
        }

        $newUri = $uri;
        if (count($title) > 0) $newUri = JoomSEF::_sefGetLocation($uri, $title, @$task, null, null, @$vars['lang']);
        
        return $newUri;
    }
}
?>
