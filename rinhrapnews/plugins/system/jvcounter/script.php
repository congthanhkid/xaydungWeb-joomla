<?php
 /**
# plugin 
# @versions: 3.0.1
# ------------------------------------------------------------------------
# author    Open Source Code Solutions Co
# copyright Copyright (C) 2011 joomlavi.com. All Rights Reserved.
# @license - http://www.gnu.org/licenseses/gpl-3.0.html GNU/GPL or later.
# Websites: http://www.joomlavi.com
# Technical Support:  http://www.joomlavi.com/my-tickets.html
-------------------------------------------------------------------------*/
defined('_JEXEC') or die('Restricted access');

class plgSystemJvcounterInstallerScript {
   function install($parent) {
        $db = JFactory::getDbo();
        $query = "update #__extensions set enabled = 1  where element = 'jvcounter'";
        $db->setquery($query);
        if($db->query()){
            echo 'JV JQuery Libraries is enabled!';
        }
   }
}
?>
