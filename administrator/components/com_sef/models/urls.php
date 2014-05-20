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

jimport('joomla.application.component.model');
JLoader::register('SEFCache', JPATH_ROOT.DS.'components'.DS.'com_sef'.DS.'sef.cache.php');

define('_COM_SEF_COUNT_AUTOMATIC', 0);
define('_COM_SEF_COUNT_404', 1);
define('_COM_SEF_COUNT_CUSTOM', 2);
define('_COM_SEF_COUNT_MOVED', 3);
define('_COM_SEF_COUNT_DISABLED', 4);
define('_COM_SEF_COUNT_NOT_SEFED', 5);
define('_COM_SEF_COUNT_LOCKED', 6);
define('_COM_SEF_COUNT_CACHED', 7);
define('_COM_SEF_COUNT_TRASHED', 8);
define('_COM_SEF_COUNT_ERRORS', 9);

class SEFModelURLs extends JModel
{
    function __construct()
    {
        parent::__construct();
    }
    
    function purge()
    {
        if( $this->_getTableWhere($table, $where) === false ) {
            return false;
        }
        
        $db =& JFactory::getDBO();
        $sql = "UPDATE $table SET `trashed` = '1'" . (!empty($where) ? " WHERE $where" : '');
        $db->setQuery($sql);
        
        return $db->query();
    }
    
    /**
     * 0 - SEF
     * 1 - 404
     * 2 - Custom
     * 3 - Moved
     * 4 - Disabled
     * 5 - Not SEFed
     * 6 - Locked
     * 7 - Cached
     *
     * @param int $type
     * @return int
     */
    function getCount($type = null)
    {
        if( $this->_getTableWhere($table, $where, $type) === false ) {
            return 0;
        }
        
        $db =& JFactory::getDBO();
        $sql = "SELECT COUNT(*) FROM $table" . (!empty($where) ? " WHERE $where" : '');
        $db->setQuery($sql);
        $this->_count = $db->loadResult();
        
        return $this->_count;
    }
    
    function getStatistics()
    {
        $sefConfig =& SEFConfig::getConfig();
        
        $stats = array();
        
        $stat = new stdClass();
        $stat->text = 'Automatic SEF URLs';
        $stat->value = $this->getCount(_COM_SEF_COUNT_AUTOMATIC);
        $stat->link = 'index.php?option=com_sef&controller=sefurls&viewmode=0';
        $stats[] = $stat;
        
        $stat = new stdClass();
        $stat->text = 'Custom SEF URLs';
        $stat->value = $this->getCount(_COM_SEF_COUNT_CUSTOM);
        $stat->link = 'index.php?option=com_sef&controller=sefurls&viewmode=2';
        $stats[] = $stat;
        
        $stat = new stdClass();
        $stat->text = 'Trashed SEF URLs';
        $stat->value = $this->getCount(_COM_SEF_COUNT_TRASHED);
        $stat->link = 'index.php?option=com_sef&controller=sefurls&viewmode=6';
        $stats[] = $stat;
        
        $stat = new stdClass();
        $stat->text = '404 URLs';
        $stat->value = $this->getCount(_COM_SEF_COUNT_404);
        $stat->link = 'index.php?option=com_sef&controller=sefurls&viewmode=1';
        $stats[] = $stat;
        
        $stat = new stdClass();
        $stat->text = 'Moved URLs';
        $stat->value = $this->getCount(_COM_SEF_COUNT_MOVED);
        $stat->link = 'index.php?option=com_sef&controller=movedurls';
        $stats[] = $stat;
        
        $stat = new stdClass();
        $stat->text = 'Total URLs';
        $stat->value = $stats[0]->value + $stats[1]->value + $stats[2]->value + $stats[3]->value + $stats[4]->value;
        $stats[] = $stat;
        
        $stat = new stdClass();
        $stat->text = '';
        $stats[] = $stat;
        
        $stat = new stdClass();
        $stat->text = 'Disabled URLs';
        $stat->value = $this->getCount(_COM_SEF_COUNT_DISABLED);
        $stats[] = $stat;
        
        $stat = new stdClass();
        $stat->text = 'Not SEFed URLs';
        $stat->value = $this->getCount(_COM_SEF_COUNT_NOT_SEFED);
        $stats[] = $stat;
        
        $stat = new stdClass();
        $stat->text = 'Locked URLs';
        $stat->value = $this->getCount(_COM_SEF_COUNT_LOCKED);
        $stats[] = $stat;
        
        $stat = new stdClass();
        $stat->text = 'Cache entries';
        
        if ($sefConfig->useCache) {
            $cache =& sefCache::getInstance();
            $stat->value = $cache->getCount();
        } else {
            $stat->value = JText::_('Cache disabled');
        }
        $stats[] = $stat;
        
        $stat = new stdClass();
        $stat->text = '';
        $stats[] = $stat;
        
        $stat = new stdClass();
        $stat->text = JText::_('COM_SEF_ERRORS_LOGGED');
        $stat->value = $this->getCount(_COM_SEF_COUNT_ERRORS);
        $stat->link = 'index.php?option=com_sef&controller=logger';
        $stats[] = $stat;
        
        return $stats;
    }
    
    function _getTableWhere(&$table, &$where, $type = null)
    {
        if (is_null($type)) {
            $type = JRequest::getInt('type', null);
            if (!is_null($type) && (($type < 0) || ($type > 3))) {
                // Can purge only types 0 - 3
                $type = null;
            }
        }
        if( is_null($type) ) {
            return false;
        }
        
        if( ($type >= 0) && ($type <= 2) ) {
            $table = '`#__sefurls`';
            if( $type == _COM_SEF_COUNT_AUTOMATIC ) {
                // Automatic SEF
                $where = "`dateadd` = '0000-00-00' AND `locked` = '0' AND `trashed` = '0'";
            }
            elseif( $type == _COM_SEF_COUNT_404 ) {
                // 404
                $where = "`dateadd` > '0000-00-00' AND `origurl` = '' AND `locked` = '0' AND `trashed` = '0'";
            }
            elseif( $type == _COM_SEF_COUNT_CUSTOM ) {
                // Custom
                $where = "`dateadd` > '0000-00-00' AND `origurl` != '' AND `locked` = '0' AND `trashed` = '0'";
            }
        } elseif ( $type == _COM_SEF_COUNT_MOVED ) {
            // Moved
            $table = '`#__sefmoved`';
            $where = '';
        } elseif (($type >= 4) && ($type <= 6)) {
            $table = '`#__sefurls`';
            if ($type == _COM_SEF_COUNT_DISABLED) {
                // Disabled
                $where = "`enabled` = '0' AND `trashed` = '0'";
            }
            elseif ($type == _COM_SEF_COUNT_NOT_SEFED) {
                // Not SEFed
                $where = "`sef` = '0' AND `trashed` = '0'";
            }
            elseif ($type == _COM_SEF_COUNT_LOCKED) {
                // Locked
                $where = "`locked` = '1' AND `trashed` = '0'";
            }
        } elseif ($type == _COM_SEF_COUNT_CACHED) {
            // Cached
            
        } elseif ($type == _COM_SEF_COUNT_TRASHED) {
            // Trashed
            $table = '`#__sefurls`';
            $where = "`trashed` = '1'";
        } elseif ($type == _COM_SEF_COUNT_ERRORS) {
            // Errors
            $table = '`#__seflog`';
            $where = '';
        } else {
            return false;
        }
        
        return true;
    }

}
?>
