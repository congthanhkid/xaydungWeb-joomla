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

define('_COM_SEF_VIEWMODE_ALL', 3);
define('_COM_SEF_VIEWMODE_CUSTOM', 2);
define('_COM_SEF_VIEWMODE_AUTOMATIC', 0);
define('_COM_SEF_VIEWMODE_HOMEPAGE', 4);
define('_COM_SEF_VIEWMODE_404', 1);
define('_COM_SEF_VIEWMODE_DUPLICATES', 5);
define('_COM_SEF_VIEWMODE_TRASH', 6);

class SEFModelSEFUrls extends JModel
{
    /**
     * Constructor that retrieves variables from the request
     */
    function __construct()
    {
        parent::__construct();
        $this->_getVars();
    }

    function _getVars()
    {
        $mainframe =& JFactory::getApplication();

        $this->viewmode = $mainframe->getUserStateFromRequest('sef.sefurls.viewmode', 'viewmode', 0);
        //$this->sortby = $mainframe->getUserStateFromRequest('sef.sefurls.sortby', 'sortby', 0);
        $this->filterComponent = $mainframe->getUserStateFromRequest("sef.sefurls.comFilter", 'comFilter', '');
        $this->filterSEF = $mainframe->getUserStateFromRequest("sef.sefurls.filterSEF", 'filterSEF', '');
        $this->filterReal = $mainframe->getUserStateFromRequest("sef.sefurls.filterReal", 'filterReal', '');
        $this->filterHitsCmp = $mainframe->getUserStateFromRequest("sef.sefurls.filterHitsCmp", 'filterHitsCmp', 0);
        $this->filterHitsVal = $mainframe->getUserStateFromRequest("sef.sefurls.filterHitsVal", 'filterHitsVal', '');
        $this->filterItemid = $mainframe->getUserStateFromRequest("sef.sefurls.filterItemId", 'filterItemid', '');
        $this->filterLang = $mainframe->getUserStateFromRequest('sef.sefurls.filterLang', 'filterLang', '');
        $this->filterOrder = $mainframe->getUserStateFromRequest('sef.sefurls.filter_order', 'filter_order', 'sefurl');
        $this->filterOrderDir = $mainframe->getUserStateFromRequest('sef.sefurls.filter_order_Dir', 'filter_order_Dir', 'asc');

        $this->limit		= $mainframe->getUserStateFromRequest('global.list.limit', 'limit', $mainframe->getCfg('list_limit'), 'int');
        $this->limitstart	= $mainframe->getUserStateFromRequest('sef.sefurls.limitstart', 'limitstart', 0, 'int');

        // in case limit has been changed, adjust limitstart accordingly
        $this->limitstart = ($this->limit != 0 ? (floor($this->limitstart / $this->limit) * $this->limit) : 0);

        $total = $this->getTotal();

        // Fix limitstart if there's not enough pages to display
        while ($this->limitstart >= $total) {
            if ($total == 0 || $this->limit == 0) {
                $this->limitstart = 0;
                break;
            }
            $this->limitstart -= $this->limit;
        }
        if ($this->limitstart < 0) {
            $this->limitstart = 0;
        }
        
        // tracking on?
        $config =& SEFConfig::getConfig();
        $this->trace = $config->trace;        
    }

    /**
	 * Returns the query
	 * @return string The query to be used to retrieve the rows from the database
	 */
    function _buildQuery()
    {
        $limit = '';
        if (($this->limit != 0) || ($this->limitstart != 0)) {
            $limit = " LIMIT {$this->limitstart},{$this->limit}";
        }

        $where = $this->_getWhere();
        $query = '';
        if ($where != '') {
            $query = "SELECT * FROM #__sefurls WHERE ".$this->_getWhere()." ORDER BY ".$this->_getSort().$limit;
        }

        return $query;
    }

    function _getSort()
    {
        if( !isset($this->_sort) ) {
            $this->_sort = '`' . $this->filterOrder . '` ' . $this->filterOrderDir;
        }

        return $this->_sort;
    }

    function _getWhere()
    {
        if( empty($this->_where) ) {
            $db =& JFactory::getDBO();
            
            // filter ViewMode
            if ($this->viewmode == _COM_SEF_VIEWMODE_404) {
                $where = "`dateadd` > '0000-00-00' AND `origurl` = '' ";
            } elseif ( $this->viewmode == _COM_SEF_VIEWMODE_CUSTOM ) {
                $where = "`dateadd` > '0000-00-00' AND `origurl` != '' ";
            } elseif ( $this->viewmode == _COM_SEF_VIEWMODE_AUTOMATIC ) {
                $where = "`dateadd` = '0000-00-00' ";
            } elseif ( $this->viewmode == _COM_SEF_VIEWMODE_HOMEPAGE ) {
                list ($q, $id) = SEFTools::getHomeQueries();
                
                $qNL = preg_replace('/[&?]lang=/', '', $q);
                $q = str_replace('index.php?', 'index\\.php\\?', $q);
                $q = preg_replace('/([&?]lang=)/', '$1[^&]*', $q);
                
                $q = $db->quote($q);
                $qNL = $db->quote($qNL);
                
                $where = "(`origurl` != '') AND (`origurl` = {$qNL} OR `origurl` REGEXP {$q}) ";
            } else {
                $where = "`origurl` != '' ";
            }

            // filter URLs
            if ($this->filterComponent != '' && $this->viewmode != 1) {
                $where .= "AND (`origurl` LIKE '%option={$this->filterComponent}&%' OR `origurl` LIKE '%option={$this->filterComponent}') ";
            }
            if (($this->filterLang != '') && ($this->viewmode != _COM_SEF_VIEWMODE_404)) {
                $where .= "AND (`origurl` LIKE '%lang={$this->filterLang}%') ";
            }
            if ($this->filterSEF != '') {
                if( substr($this->filterSEF, 0, 4) == 'reg:' ) {
                    $val = substr($this->filterSEF, 4);
                    $neg = '';
                    if ($val[0] == '!') {
                        $val = substr($val, 1);
                        $neg = 'NOT';
                    }
                    if( $val != '' ) {
                        // Regular expression search
                        $val = $db->Quote($val);
                        $where .= "AND `sefurl` {$neg} REGEXP $val ";
                    }
                }
                else {
                    $val = $db->Quote('%'.$this->filterSEF.'%');
                    $where .= "AND `sefurl` LIKE $val ";
                }
            }
            if ($this->filterReal != '' && $this->viewmode != _COM_SEF_VIEWMODE_404) {
                if( substr($this->filterReal, 0, 4) == 'reg:' ) {
                    $val = substr($this->filterReal, 4);
                    $neg = '';
                    if ($val[0] == '!') {
                        $val = substr($val, 1);
                        $neg = 'NOT';
                    }
                    if( $val != '' ) {
                        // Regular expression search
                        $val = $db->Quote($val);
                        $where .= "AND `origurl` {$neg} REGEXP $val ";
                    }
                }
                else {
                    $val = $db->Quote('%'.$this->filterReal.'%');
                    $where .= "AND `origurl` LIKE $val ";
                }
            }

            // filter hits
            if ($this->filterHitsVal != '') {
                $cmp = ($this->filterHitsCmp == 0) ? '=' : (($this->filterHitsCmp == 1) ? '>' : '<');
                $val = $db->Quote($this->filterHitsVal);
                $where .= "AND `cpt` $cmp $val ";
            }

            // Filter Itemid
            if ($this->filterItemid != '' && $this->viewmode != _COM_SEF_VIEWMODE_404) {
                $val = $db->Quote($this->filterItemid);
                $where .= "AND `Itemid` = $val ";
            }
            
            // Filter trashed
            if ($this->viewmode != _COM_SEF_VIEWMODE_TRASH) {
                $where .= "AND `trashed` = '0' ";
            }
            else {
                $where .= "AND `trashed` = '1' ";
            }

            // Filter duplicities
            if( $this->viewmode == _COM_SEF_VIEWMODE_DUPLICATES ) {
                // Get the list of duplicate ids
                //$where .= " GROUP BY `sefurl` HAVING COUNT(`sefurl`) > 1";
                $sql = "SELECT `id` FROM `#__sefurls` AS `t1` INNER JOIN (SELECT `sefurl` FROM `#__sefurls` WHERE `trashed` = '0' GROUP BY `sefurl` HAVING COUNT(`sefurl`) > 1) AS `t2` ON `t1`.`sefurl` = `t2`.`sefurl` WHERE {$where}";
                $this->_db->setQuery($sql);
                $ids = $this->_db->loadResultArray();
                
                // Create the IDs list
                $where = '';
                if (count($ids) > 0) {
                    $where = ' `id` IN (' . implode(', ', $ids) . ')';
                }
            }
            
            $this->_where = $where;
        }

        return $this->_where;
    }

    function _getWhereIds()
    {
        $ids = JRequest::getVar('cid', array(), 'post', 'array');

        $where = '';
        if( count($ids) > 0 ) {
            $where = '`id` IN (' . implode(', ', $ids) . ')';
        }

        return $where;
    }

    function getTotal()
    {
        if (!isset($this->_total)) {
            $where = $this->_getWhere();
            if ($where != '') {
                $sql = "SELECT COUNT(*) FROM `#__sefurls` WHERE ".$where;
                $this->_db->setQuery($sql);
                $this->_total = intval($this->_db->loadResult());
            }
            else {
                $this->_total = 0;
            }
        }

        return $this->_total;
    }

    /**
     * Retrieves the data
     */
    function getData()
    {
        // Lets load the data if it doesn't already exist
        if (empty( $this->_data ))
        {
            $query = $this->_buildQuery();
            if ($query != '') {
                $this->_data = $this->_getList( $query );
            }
            else {
                $this->_data = array();
            }
        }

        return $this->_data;
    }

    function getLists()
    {
        // Make the input boxes for hits filter
        $hitsCmp[] = JHTML::_('select.option', '0', '=');
        $hitsCmp[] = JHTML::_('select.option', '1', '>');
        $hitsCmp[] = JHTML::_('select.option', '2', '<');
        $lists['hitsCmp'] = JHTML::_('select.genericlist', $hitsCmp, 'filterHitsCmp', "class=\"inputbox\" onkeydown=\"return handleKeyDown(event);\" size=\"1\"" , 'value', 'text', $this->filterHitsCmp);
        $lists['hitsVal'] = "<input type=\"text\" name=\"filterHitsVal\" value=\"".htmlspecialchars($this->filterHitsVal)."\" size=\"5\" maxlength=\"10\" onkeydown=\"return handleKeyDown(event);\" />";

        // Make the input box for Itemid filter
        $lists['itemid'] = "<input type=\"text\" name=\"filterItemid\" value=\"".htmlspecialchars($this->filterItemid)."\" size=\"5\" maxlength=\"10\" onkeydown=\"return handleKeyDown(event);\" />";

        // make the select list for the component filter
        $comList[] = JHTML::_('select.option', '', JText::_('(All)'));
        //$comList[] = JHTML::_('select.option', 'com_content', 'Content');
        $this->_db->setQuery("SELECT `name`,`option` FROM `#__components` WHERE `parent` = '0' ORDER BY `name`");
        $rows = $this->_db->loadObjectList();
        if ($this->_db->getErrorNum()) {
            echo $this->_db->stderr();
            return false;
        }
        foreach(array_keys($rows) as $i) {
            $row = &$rows[$i];
            $comList[] = JHTML::_('select.option', $row->option, JText::_($row->name));
        }
        $lists['comList'] = JHTML::_( 'select.genericlist', $comList, 'comFilter', "class=\"inputbox\" onchange=\"document.adminForm.submit();\" size=\"1\"", 'value', 'text', $this->filterComponent);

        // make the filter text boxes
        $lists['filterSEF']  = "<input class=\"hasTip\" type=\"text\" name=\"filterSEF\" value=\"".htmlspecialchars($this->filterSEF)."\" size=\"40\" maxlength=\"255\" onkeydown=\"return handleKeyDown(event);\" title=\"".JText::_('TT_FILTER_SEF')."\" />";
        $lists['filterReal'] = "<input class=\"hasTip\" type=\"text\" name=\"filterReal\" value=\"".htmlspecialchars($this->filterReal)."\" size=\"40\" maxlength=\"255\" onkeydown=\"return handleKeyDown(event);\" title=\"".JText::_('TT_FILTER_REAL')."\" />";
        
        $lists['filterSEFRE'] = JText::_('Use RE').'&nbsp;<input type="checkbox" ' . ((substr($this->filterSEF, 0, 4) == 'reg:') ? 'checked="checked"' : '') . ' onclick="useRE(this, document.adminForm.filterSEF);" />';
        $lists['filterRealRE'] = JText::_('Use RE').'&nbsp;<input type="checkbox" ' . ((substr($this->filterReal, 0, 4) == 'reg:') ? 'checked="checked"' : '') . ' onclick="useRE(this, document.adminForm.filterReal);" />';
        
        // Load the active languages
        if( SEFTools::JoomFishInstalled() ) {
            $jfm =& JoomFishManager::getInstance();
            $langs = $jfm->getActiveLanguages();
            
            $langList = array();
            $langList[] = JHTML::_('select.option', '', JText::_('(All)'));
            foreach($langs as $lang) {
                $langList[] = JHTML::_('select.option', $lang->shortcode, $lang->name);
            }
            
            // Make the language filter
            $lists['filterLang'] = JHTML::_('select.genericlist', $langList, 'filterLang', 'class="inputbox" onchange="document.adminForm.submit();" size="1"', 'value', 'text', $this->filterLang);
        }
        
        $lists['filterReset'] = '<input type="button" value="'.JText::_('Reset').'" onclick="resetFilters();" />';
        
        // Ordering
        $lists['filter_order'] = $this->filterOrder;
        $lists['filter_order_Dir'] = $this->filterOrderDir;
        
        // Selection
        $sel[] = JHTML::_('select.option', 'selected', JText::_('Only selected'));
        $sel[] = JHTML::_('select.option', 'filtered', JText::_('All filtered'));
        $lists['selection'] = JHTML::_('select.genericlist', $sel, 'sef_selection', 'class="inputbox" size="1"');
        
        // Actions
        switch ($this->viewmode) {
            case _COM_SEF_VIEWMODE_404:
                $acts[] = JHTML::_('select.option', 'delete', JText::_('Delete'));
                break;
            case _COM_SEF_VIEWMODE_TRASH:
                $acts[] = JHTML::_('select.option', 'restore', JText::_('Restore'));
                $acts[] = JHTML::_('select.option', 'delete', JText::_('Delete'));
                break;
            default:
                $acts[] = JHTML::_('select.option', 'enable', JText::_('Enable'));
                $acts[] = JHTML::_('select.option', 'disable', JText::_('Disable'));
                $acts[] = JHTML::_('select.option', 'sefenable', JText::_('SEF'));
                $acts[] = JHTML::_('select.option', 'sefdisable', JText::_('Don\'t SEF'));
                $acts[] = JHTML::_('select.option', 'lock', JText::_('Lock'));
                $acts[] = JHTML::_('select.option', 'unlock', JText::_('Unlock'));
                $acts[] = JHTML::_('select.option', 'sep', '---');
                $acts[]=JHTML::_('select.option','update_urls',JText::_('COM_SEF_UPDATE_URLS'));
                $acts[]=JHTML::_('select.option','update_metas',JText::_('COM_SEF_UPDATE_META_TAGS'));
                $acts[] = JHTML::_('select.option', 'sep', '---');
                $acts[] = JHTML::_('select.option', 'trash', JText::_('Trash'));
                $acts[] = JHTML::_('select.option', 'delete', JText::_('Delete'));
                $acts[] = JHTML::_('select.option', 'export', JText::_('Export'));
                break;
        }
        $lists['actions'] = JHTML::_('select.genericlist', $acts, 'sef_actions', 'class="inputbox" size="1"');

        return $lists;
    }

    function getPagination()
    {
        jimport('joomla.html.pagination');
        $pagination = new JPagination($this->getTotal(), $this->limitstart, $this->limit);

        return $pagination;
    }

    function trash($where = '')
    {
        if (empty($where)) {
            return true;
        }
        
        // Set the URLs that are not locked as trashed
        // (don't remove aliases or words associations)
        $query = "UPDATE `#__sefurls` SET `trashed` = '1' WHERE {$where} AND `locked` = '0'";
        $this->_db->setQuery($query);
        if (!$this->_db->query()) {
            $this->setError($this->_db->getErrorMsg());
            return false;
        }
        
        return true;
    }
    
    function restore($where = '')
    {
        if (empty($where)) {
            return true;
        }
        
        // Set the URLs as not trashed
        $query = "UPDATE `#__sefurls` SET `trashed` = '0' WHERE {$where}";
        $this->_db->setQuery($query);
        if (!$this->_db->query()) {
            $this->setError($this->_db->getErrorMsg());
            return false;
        }
        
        return true;
    }
    
    function delete($where = '')
    {
        if (empty($where)) {
            return true;
        }
        
        // Get IDs to delete
        $query = "SELECT `id` FROM `#__sefurls` WHERE {$where} AND `locked` = '0'";
        $this->_db->setQuery($query);
        $ids = $this->_db->loadResultArray();
        if (!is_array($ids)) {
            // Error
            $this->setError($this->_db->getErrorMsg());
            return false;
        }
        if (count($ids) == 0) {
            // Nothing to delete
            return true;
        }
        
        // Remove URLs
        $ids = implode(',', $ids);
        $query = "DELETE FROM `#__sefurls` WHERE `id` IN ($ids) AND `locked` = '0'";
        $this->_db->setQuery($query);
        if (!$this->_db->query()) {
            $this->setError($this->_db->getErrorMsg());
            return false;
        }
        
        // Remove aliases
        $query = "DELETE FROM `#__sefaliases` WHERE `url` IN ($ids)";
        $this->_db->setQuery($query);
        if (!$this->_db->query()) {
            $this->setError($this->_db->getErrorMsg());
            return false;
        }
        
        
        return true;
    }
    
    function setEnabled($state, $where = '')
    {
        if (empty($where)) {
            return true;
        }
        
        $state = intval($state);
        $query = "UPDATE `#__sefurls` SET `enabled` = '$state' WHERE $where";
        $this->_db->setQuery( $query );
        if( !$this->_db->query() ) {
            $this->setError($this->_db->getErrorMsg());
            return false;
        }

        return true;
    }

    function setLocked($state, $where = '')
    {
        if (empty($where)) {
            return true;
        }
        
        $state = intval($state);
        $query = "UPDATE `#__sefurls` SET `locked` = '$state' WHERE $where";
        $this->_db->setQuery( $query );
        if( !$this->_db->query() ) {
            $this->setError($this->_db->getErrorMsg());
            return false;
        }

        return true;
    }

    function setSEF($state, $where = '')
    {
        if (empty($where)) {
            return true;
        }
        
        $state = intval($state);
        $query = "UPDATE `#__sefurls` SET `sef` = '$state' WHERE $where";
        $this->_db->setQuery( $query );
        if( !$this->_db->query() ) {
            $this->setError($this->_db->getErrorMsg());
            return false;
        }
        
        return true;
    }

    function export($where = '')
    {
        $config =& JFactory::getConfig();
        $dbprefix = $config->getValue('config.dbprefix');
        $sql_data = '';
        $filename = 'joomsef_custom_urls.sql';
        $fields = array('cpt', 'sefurl', 'origurl', 'Itemid', 'metadesc', 'metakey', 'metatitle', 'metalang', 'metarobots', 'metagoogle', 'metacustom', 'canonicallink', 'dateadd', 'priority', 'trace', 'enabled', 'locked', 'sef', 'sm_indexed', 'sm_date', 'sm_frequency', 'sm_priority', 'trashed', 'host', 'showsitename');

        // Get number of records
        $query = "SELECT COUNT(*) FROM `#__sefurls`";
        if( !empty($where) ) {
            $query .= " WHERE " . $where;
        }
        $this->_db->setQuery( $query );
        $count = $this->_db->loadResult();
        if (!$count) {
            return false;
        }
        
        if( !headers_sent() ) {
            // flush the output buffer
            while( ob_get_level() > 0 ) {
                ob_end_clean();
            }

            header ('Expires: 0');
            header ('Last-Modified: '.gmdate ('D, d M Y H:i:s', time()) . ' GMT');
            header ('Pragma: public');
            header ('Cache-Control: must-revalidate, post-check=0, pre-check=0');
            header ('Accept-Ranges: bytes');
            //header ('Content-Length: ' . strlen($sql_data));
            header ('Transfer-Encoding: chunked');
            //header ('Content-Type: application/octet-stream');
            header ('Content-Type: application/x-unknown');
            header ('Content-Disposition: attachment; filename="' . $filename . '"');
            header ('Connection: close');
        } else {
            return false;
        }
        
        $step = 200;
        $curStep = 0;
        
        $query = "SELECT * FROM `#__sefurls`";
        if( !empty($where) ) {
            $query .= " WHERE " . $where;
        }
        while ($curStep < $count) {
            $this->_db->setQuery( $query, $curStep, $step );
            $rows = $this->_db->loadObjectList();
    
            if (!empty($rows)) {
                $sql_data = '';
                foreach ($rows as $row) {
                    $values = array();
                    foreach ($fields as $field) {
                        if (isset($row->$field)) {
                            $values[] = $this->_db->Quote($row->$field);
                        } else {
                            $values[] = '\'\'';
                        }
                    }
                    $sql_data .= "INSERT INTO `{$dbprefix}sefurls` (".implode(', ', $fields).") VALUES (".implode(', ', $values).");\n";
                }
                
                // Send data chunk
                echo dechex(strlen($sql_data)) . "\r\n";
                echo $sql_data . "\r\n";
                
                $curStep += $step;
            } else {
                return false;
            }
        }
        
        echo "0\r\n";
        
        jexit();
        return true;
    }
    
    function CreateHomeLinks()
    {
        $db =& JFactory::getDBO();
        $sefConfig =& SEFConfig::getConfig();
        
        $links = array();
        
        // Create array of links for each language
        if (SEFTools::JoomFishInstalled()) {
            list($homelink, $itemid) = SEFTools::getHomeQueries(true);
            
            $query = "SELECT `shortcode` FROM `#__languages` WHERE `active` = '1'";
            $db->setQuery($query);
            $langs = $db->loadResultArray();
            foreach($langs as $lang) {
                $link = preg_replace('/([&?]lang=)/', '$1'.$lang, $homelink);
                if ($lang == $sefConfig->mainLanguage) {
                    $lang = '';
                }
                $links[$lang] = $link;
            }
        }
        else {
            list($homelink, $itemid) = SEFTools::getHomeQueries(false);
            
            $links[''] = $homelink;
        }
        
        // Store the links in database if they don't already exist
        foreach($links as $sef => $orig) {
            $orig = $db->quote($orig);
            $query = "SELECT `id`, `trashed` FROM `#__sefurls` WHERE `origurl` = {$orig}";
            $db->setQuery($query);
            $row = $db->loadObject();
            if (!is_null($row) && !((bool)($row->trashed))) {
                continue;
            }
            
            if (is_null($row)) {
                $query = "INSERT INTO `#__sefurls` (`sefurl`, `origurl`, `Itemid`) VALUES ('{$sef}', {$orig}, '{$itemid}')";
            }
            else {
                // Trashed
                $query = "UPDATE `#__sefurls` SET `sefurl` = '{$sef}', `origurl` = {$orig}, `Itemid` = '{$itemid}', `trashed` = '0' WHERE `id` = '{$row->id}'";
            }
            $db->setQuery($query);
            $db->query();
        }
    }
    
    /**
     * Prepares the database and configuration for SEF URLs update
     */
    function prepareUpdate()
    {
        $db =& JFactory::getDBO();
        
        $sql = "UPDATE `#__sefurls` SET `flag` = IF(`dateadd` = '0000-00-00' AND `locked` = '0' AND `trashed` = '0', '1', '0')";
        $db->setQuery($sql);
        if (!$db->query()) {
            return false;
        }
        
        return true;
    }
    
    function prepareUpdateWhere($where = '')
    {
        if (empty($where)) {
            return true;
        }
        
        $db =& JFactory::getDBO();
        
        $sql = "UPDATE `#__sefurls` SET `flag` = IF(`locked` = '0' AND `trashed` = '0' AND {$where}, '1', '0')";
        $db->setQuery($sql);
        if (!$db->query()) {
            return false;
        }
        
        return true;
    }
    
    function getUrlsToUpdate()
    {
        $db =& JFactory::getDBO();
        $db->setQuery("SELECT COUNT(`id`) FROM `#__sefurls` WHERE `dateadd` = '0000-00-00' AND `locked` = '0' AND `trashed` = '0'");
        $count = $db->loadResult();
        
        return $count;
    }
    
    function getUrlsPrepared()
    {
        $db =& JFactory::getDBO();
        $db->setQuery("SELECT COUNT(`id`) FROM `#__sefurls` WHERE `locked` = '0' AND `trashed` = '0' AND `flag` = '1'");
        $count = $db->loadResult();
        
        return $count;
    }
    
    function updateNext()
    {
        $db =& JFactory::getDBO();
        $sefConfig =& SEFConfig::getConfig();
        
        // Load all the URLs
        $query = "SELECT `id`, `sefurl`, `origurl`, `Itemid` FROM `#__sefurls` WHERE `locked` = '0' AND `trashed` = '0' AND `flag` = '1' LIMIT 25";
        $db->setQuery($query);
        $rows = $db->loadObjectList();
        
        // Check that there's anything to update
        if( is_null($rows) || count($rows) == 0 ) {
            // Done
            //$db->setQuery("SELECT COUNT(`id`) FROM `#__sefurls` WHERE `dateadd` = '0000-00-00' AND `locked` = '0' AND `trashed` = '0'");
            //$count = $db->loadResult();
            $obj = new stdClass();
            $obj->type = 'completed';
            $obj->updated = 0;
            return json_encode($obj);
        }

        // Load the needed classes
        jimport('joomla.application.router');
        require_once(JPATH_ROOT.DS.'includes'.DS.'application.php');
        require_once(JPATH_ROOT.DS.'components'.DS.'com_sef'.DS.'sef.router.php');
        
        if (SEFTools::JoomFishInstalled()) {
            require_once( JPATH_ROOT .DS. 'components' .DS. 'com_joomfish' .DS. 'helpers' .DS. 'defines.php' );
            JLoader::register('JoomfishManager', JOOMFISH_ADMINPATH .DS. 'classes' .DS. 'JoomfishManager.class.php' );
            JLoader::register('JoomFishVersion', JOOMFISH_ADMINPATH .DS. 'version.php' );
            JLoader::register('JoomFish', JOOMFISH_PATH .DS. 'helpers' .DS. 'joomfish.class.php' );
        } 
        
        // OK, we've got some data, let's update them
        // First, we need to trash all the URLs to be updated without the meta tags loss
        $ids = array();
        $count = count($rows);
        for ($i = 0; $i < $count; $i++) {
            $ids[] = $rows[$i]->id;
        }
        $ids = implode(',', $ids);
        $query = "UPDATE `#__sefurls` SET `trashed` = '1', `flag` = '0' WHERE `id` IN ({$ids})";
        $db->setQuery($query);
        if (!$db->query()) {
            return "{ type: 'error' }";
        }
        
        // Create an instance of JoomSEF router
        $router = new JRouterJoomsef();
        
        // Check if JoomFish is present
        if (SEFTools::JoomFishInstalled() ) {
            // We need to fool JoomFish to think we're running in frontend
            $mainframe =& JFactory::getApplication();
            $mainframe->_clientId = 0;
            
            // Load and initialize JoomFish plugin
            if( !class_exists('plgSystemJFDatabase') ) {
                require(JPATH_PLUGINS.DS.'system'.DS.'jfdatabase.php');
            }
            $params =& JPluginHelper::getPlugin('system', 'jfdatabase');
            $dispatcher = & JDispatcher::getInstance();
            $plugin = new plgSystemJFDatabase($dispatcher, (array)($params));
            $plugin->onAfterInitialise();
            
            // Set the mainframe back to its original state
            $mainframe->_clientId = 1;
        }
        
        // Suppress all the normal output
        ob_start();
        
        // Loop through URLs and update them one by one
        for( $i = 0; $i < $count; $i++ ) {
            $row =& $rows[$i];
            $url = $row->origurl;
            $oldSef = $row->sefurl;
            if( !empty($row->Itemid) ) {
                if( strpos($url, '?') !== false ) {
                    $url .= '&';
                } else {
                    $url .= '?';
                }
                $url .= 'Itemid='.$row->Itemid;
            }
            
            $newSefUri = $router->build($url);
            
            // JURI::toString() returns bad results when used with some UTF characters!
            $newSef = ltrim(str_replace(JURI::root(), '', $newSefUri->_uri), '/');
            
            // If the SEF URL changed, we need to add it to 301 redirection table
            if( $oldSef != $newSef ) {
                // Check that the redirect does not already exist
                $query = "SELECT `id` FROM `#__sefmoved` WHERE `old` = '{$oldSef}' AND `new` = '{$newSef}' LIMIT 1";
                $db->setQuery($query);
                $id = $db->loadResult();
                
                if( !$id ) {
                    $query = "INSERT INTO `#__sefmoved` (`old`, `new`) VALUES ('{$oldSef}', '{$newSef}')";
                    $db->setQuery($query);
                    $db->query();
                }
            }
        }
        
        ob_end_clean();
        
        $obj = new stdClass();
        $obj->type = 'updatestep';
        $obj->updated = $count;
        return json_encode($obj);
    }


    function updateMetaNext()
    {
        $db =& JFactory::getDBO();
        $sefConfig =& SEFConfig::getConfig();
        
        // Load all the URLs
        $query = "SELECT `id`, `sefurl`, `origurl`, `Itemid` FROM `#__sefurls` WHERE `locked` = '0' AND `trashed` = '0' AND `flag` = '1' LIMIT 25";
        $db->setQuery($query);
        $rows = $db->loadObjectList();
        
        // Check that there's anything to update
        if( is_null($rows) || count($rows) == 0 ) {
            // Done
            //$db->setQuery("SELECT COUNT(`id`) FROM `#__sefurls` WHERE `dateadd` = '0000-00-00' AND `locked` = '0' AND `trashed` = '0'");
            //$count = $db->loadResult();
            $obj = new stdClass();
            $obj->type = 'completed';
            $obj->updated = 0;
            return json_encode($obj);
        }

        // Load the needed classes
        jimport('joomla.application.router');
        require_once(JPATH_ROOT.DS.'includes'.DS.'application.php');
        require_once(JPATH_ROOT.DS.'components'.DS.'com_sef'.DS.'sef.router.php');
        
        if (SEFTools::JoomFishInstalled()) {
            require_once( JPATH_ROOT .DS. 'components' .DS. 'com_joomfish' .DS. 'helpers' .DS. 'defines.php' );
            JLoader::register('JoomfishManager', JOOMFISH_ADMINPATH .DS. 'classes' .DS. 'JoomfishManager.class.php' );
            JLoader::register('JoomFishVersion', JOOMFISH_ADMINPATH .DS. 'version.php' );
            JLoader::register('JoomFish', JOOMFISH_PATH .DS. 'helpers' .DS. 'joomfish.class.php' );
        } 
        
        // OK, we've got some data, let's update them
        $count = count($rows);
        
        // Check if JoomFish is present
        if (SEFTools::JoomFishInstalled() ) {
            // We need to fool JoomFish to think we're running in frontend
            $mainframe =& JFactory::getApplication();
            $mainframe->_clientId = 0;
            
            // Load and initialize JoomFish plugin
            if( !class_exists('plgSystemJFDatabase') ) {
                require(JPATH_PLUGINS.DS.'system'.DS.'jfdatabase.php');
            }
            $params =& JPluginHelper::getPlugin('system', 'jfdatabase');
            $dispatcher = & JDispatcher::getInstance();
            $plugin = new plgSystemJFDatabase($dispatcher, (array)($params));
            $plugin->onAfterInitialise();
            
            // Set the mainframe back to its original state
            $mainframe->_clientId = 1;
        }
        
        // Suppress all the normal output
        ob_start();
        
        // Loop through URLs and update them one by one
        for( $i = 0; $i < $count; $i++ ) {
            $row =& $rows[$i];
            $url = $row->origurl;
            if( !empty($row->Itemid) ) {
                if( strpos($url, '?') !== false ) {
                    $url .= '&';
                } else {
                    $url .= '?';
                }
                $url .= 'Itemid='.$row->Itemid;
            }
            
            $uri = new JURI($url);
            
            // Check if we have an extension for this URL
            $updated = false;
            $option = $uri->getVar('option');
            if (!empty($option)) {
                $file = JPATH_ROOT.DS.'components'.DS.'com_sef'.DS.'sef_ext'.DS.$option.'.php';
                $class = 'SefExt_'.$option;
                
                if (!class_exists($class) && file_exists($file)) {
                    require($file);
                }
                
                if (class_exists($class)) {
                    $ext = new $class();
                    $metadata = $ext->generateMeta($uri);
                    
                    if (is_array($metadata) && count($metadata) > 0) {
                        $metas = '';
                        foreach($metadata as $metakey => $metaval) {
                            $metas .= ", `$metakey` = ".$db->Quote($metaval,true);
                        }
                        
                        $query = "UPDATE `#__sefurls` SET `flag` = '0'".$metas." WHERE `id` = '{$row->id}'";
                        $db->setQuery($query);
                        if(!$db->query()) {
                        	return $db->stderr(true);
                        	$updated = false;
                        } else {
                        	$updated = true;
                        }
                    }
                }
            }
            
            if ($updated==false) {
                // Remove flag
                $query = "UPDATE `#__sefurls` SET `flag` = '0' WHERE `id` = '{$row->id}'";
                $db->setQuery($query);
                $db->query();
            }
        }
        
        ob_end_clean();
        
        $obj = new stdClass();
        $obj->type = 'updatestep';
        $obj->updated = $count;
        return json_encode($obj);
    }
}
?>