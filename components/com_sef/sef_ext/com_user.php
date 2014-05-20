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

class SefExt_com_user extends SefExt
{
    function getNonSefVars(&$uri)
    {
        $this->_createNonSefVars($uri);

        return array($this->nonSefVars, $this->ignoreVars);
    }

    function _createNonSefVars(&$uri)
    {
        if (isset($this->nonSefVars) && isset($this->ignoreVars))
            return;

		$vars = $uri->getQuery(true);
        $this->nonSefVars = array();
        $this->ignoreVars = array();

        if (isset($vars['task'])) {
        	if($vars['task']=='activate') {
        		$this->nonSefVars['activation']=$vars['activation'];
        	}
        }
        
        // Removed: URLs with "return" variable are not SEFed at all now,
        // it was causing infinite redirection loop in some cases
        //if (!is_null($uri->getVar('return')))
        //    $this->nonSefVars['return'] = $uri->getVar('return');
    }

    function create(&$uri)
    {
        $vars = $uri->getQuery(true);
        extract($vars);
        
        // Don't SEF URLs with "return" variable
        if (!empty($return)) {
            return $uri;
        }

        $title = array();
        $title[] = JoomSEF::_getMenuTitle(@$option, null, @$Itemid);

        if (isset($task)) {
            if ($task == 'register') {
                $title[] = JText::_('Register');
                unset($task);
            }
            /*if($task=='activate') {
            	$title[]=$vars['activation'];
            }*/
        }

        if (!empty($view)) {
            $title[] = JText::_($view);
        }

        if (!empty($layout)) {
            $title[] = JText::_($layout);
        }

        $newUri = $uri;
        if (count($title) > 0) {
            $this->_createNonSefVars($uri);
            $newUri = JoomSEF::_sefGetLocation($uri, $title, @$task, null, null, @$lang, $this->nonSefVars);
        }

        return $newUri;
    }

}
?>
