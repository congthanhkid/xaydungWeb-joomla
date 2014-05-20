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

class SEFModelSEFUrl extends JModel
{
    /**
     * Constructor that retrieves the ID from the request
     *
     * @access    public
     * @return    void
     */
    function __construct()
    {
        parent::__construct();

        $array = JRequest::getVar('cid',  0, '', 'array');
        $this->setId((int)$array[0]);
    }

    function setId($id)
    {
        // Set id and wipe data
        $this->_id      = $id;
        $this->_data    = null;
    }

    function &getData()
    {
        // Load the data
        if (empty($this->_data)) {
            if ($this->_id != 0) {
                $query = "SELECT * FROM `#__sefurls` WHERE `id` = '{$this->_id}'";
                $this->_db->setQuery( $query );
                $this->_data = $this->_db->loadObject();
                if (isset($this->_data->metacustom)) {
                    $this->_data->metacustom = @unserialize($this->_data->metacustom);
                }
            }
        }
        if (!$this->_data) {
            $sefConfig =& SEFConfig::getConfig();

            $this->_data = new stdClass();
            $this->_data->id = 0;
            $this->_data->cpt = null;
            $this->_data->sefurl = null;
            $this->_data->origurl = null;
            $this->_data->Itemid = null;
            $this->_data->metadesc = null;
            $this->_data->metakey = null;
            $this->_data->metatitle = null;
            $this->_data->metalang = null;
            $this->_data->metarobots = null;
            $this->_data->metagoogle = null;
            $this->_data->metacustom = null;
            $this->_data->canonicallink = null;
            $this->_data->dateadd = null;
            $this->_data->enabled = 1;
            $this->_data->locked = 0;
            $this->_data->sef = 1;
            $this->_data->sm_indexed = ($sefConfig->sitemap_indexed ? 1 : 0);
            $this->_data->sm_date = date('Y-m-d');
            $this->_data->sm_frequency = $sefConfig->sitemap_frequency;
            $this->_data->sm_priority = $sefConfig->sitemap_priority;
            $this->_data->trace = null;
            $this->_data->aliases = null;
            $this->_data->showsitename = _COM_SEF_SITENAME_GLOBAL;
        }
        else {
            // Get the aliases
            $query = "SELECT * FROM `#__sefaliases` WHERE `url` = '{$this->_id}'";
            $this->_db->setQuery($query);
            $objs = $this->_db->loadObjectList();
            
            $aliases = array();
            if ($objs) {
                foreach ($objs as $obj) {
                    $aliases[] = $this->_aliasToString($obj);
                }
            }
            $this->_data->aliases = implode("\n", $aliases);
        }

        return $this->_data;
    }
    
    function _aliasToString($row)
    {
        $alias = $row->alias;
        
        if (!empty($row->vars)) {
            $vars = trim(str_replace("\n", '&amp;', $row->vars));
            $alias .= '?'.$vars;
        }
        
        return $alias;
    }

    function getLists()
    {
        $lists = array();

        if (empty($this->_data)) {
            $this->getData();
        }

        $useSitenameOpts[] = JHTML::_('select.option', _COM_SEF_SITENAME_GLOBAL,    JText::_('COM_SEF_USE_GLOBAL_CONFIG'));
        $useSitenameOpts[] = JHTML::_('select.option', _COM_SEF_SITENAME_BEFORE,    JText::_('Yes - before page title'));
        $useSitenameOpts[] = JHTML::_('select.option', _COM_SEF_SITENAME_AFTER,     JText::_('Yes - after page title'));
        $useSitenameOpts[] = JHTML::_('select.option', _COM_SEF_SITENAME_NO,        JText::_('No'));
        $lists['showsitename']  = JHTML::_('select.genericlist', $useSitenameOpts, 'showsitename', 'class="inputbox" size="1"', 'value', 'text', $this->_data->showsitename);
        
        
        return $lists;
    }

    function _getWords()
    {
        $words = array();
        if ($this->_id != 0) {
            $query = "SELECT `w`.`id`, `w`.`word` FROM `#__sefwords` AS `w` INNER JOIN `#__sefurlword_xref` AS `x` ON `w`.`id` = `x`.`word` WHERE `x`.`url` = '{$this->_id}'";
            $this->_db->setQuery($query);
            $words = $this->_db->loadObjectList();
        }

        return $words;
    }

    function store()
    {
        $row =& $this->getTable();

        $data = JRequest::get('post', 2);

        // Handle the enabled, sef and locked checkboxes
        if (!isset($data['enabled'])) {
            $data['enabled'] = '0';
        }
        if (!isset($data['sef'])) {
            $data['sef'] = '0';
        }
        if (!isset($data['locked'])) {
            $data['locked'] = '0';
        }

        
        // Create the array of custom meta tags
        if (isset($data['metanames']) && is_array($data['metanames'])) {
            for ($i = 0, $n = count($data['metanames']); $i < $n; $i++) {
                if (empty($data['metanames'][$i])) {
                    unset($data['metanames'][$i]);
                    if (isset($data['metacontents'][$i])) {
                        unset($data['metacontents'][$i]);
                    }
                }
            }
            
            // Create the associative array of custom meta tags
            $data['metacustom'] = array_combine($data['metanames'], $data['metacontents']);
        }
        else {
            // No meta tags
            $data['metacustom'] = array();
        }
        $data['metacustom'] = serialize($data['metacustom']);
        
        // Bind the form fields to the table
        if (!$row->bind($data)) {
            $this->setError($this->_db->getErrorMsg());
            return false;
        }

        // Make sure the record is valid
        if (!$row->check()) {
            $this->setError($row->_error);
            return false;
        }

        // Set the priority according to Itemid
        if ($row->Itemid != '') {
            $row->priority = _COM_SEF_PRIORITY_DEFAULT_ITEMID;
        }
        else {
            $row->priority = _COM_SEF_PRIORITY_DEFAULT;
        }

        // Store the table to the database
        if (!$row->store()) {
            $this->setError( $row->getError() );
            return false;
        }

        
        // Handle the aliases references
        // remove the current bindings
        $this->_db->setQuery("DELETE FROM `#__sefaliases` WHERE `url` = '{$row->id}'");
        if (!$this->_db->query()) {
            $this->setError($this->_db->getErrorMsg());
            return false;
        }
        
        // add all the aliases for current URL
        $data['aliases'] = trim($data['aliases']);
        if (!empty($data['aliases'])) {
            $aliases = str_replace("\r", '', $data['aliases']);
            $aliases = explode("\n", $aliases);
            
            $vals = array();
            foreach ($aliases as $arow) {
                if (strpos($arow, '?') !== false) {
                    list($alias, $vars) = explode('?', $arow);
                    
                    $vars = str_replace('&', "\n", $vars);
                }
                else {
                    $alias = $arow;
                    $vars = '';
                }
                $alias = ltrim($alias, '/');
                
                $vals[] = '(' . $this->_db->Quote($alias) . ', ' . $this->_db->Quote($vars) . ", '{$row->id}')";
            }
            
            $query = "INSERT INTO `#__sefaliases` (`alias`, `vars`, `url`) VALUES " . implode(', ', $vals);
            $this->_db->setQuery($query);
            if (!$this->_db->query()) {
                $this->setError($this->_db->getErrorMsg());
                return false;
            }
        }

        // check if there's old url to save to Moved Permanently table
        $unchanged = JRequest::getVar('unchanged');
        if (!empty($unchanged)) {
            $row =& $this->getTable('MovedUrl');
            $row->old = $unchanged;
            $row->new = JRequest::getVar('sefurl');

            // pre-save checks
            if (!$row->check()) {
                $this->setError($row->getError());
                return false;
            }

            // save the changes
            if (!$row->store()) {
                $this->setError($row->getError());
                return false;
            }
        }

        return true;
    }

    function setActive()
    {
        if( $this->_id == 0 ) {
            return false;
        }

        // Get the SEF URL for given id
        $row =& $this->getData();

        // Set priority to 0 for given id
        $query = "UPDATE `#__sefurls` SET `priority` = '0' WHERE `id` = '{$this->_id}' LIMIT 1";
        $this->_db->setQuery( $query );
        if( !$this->_db->query() ) {
            $this->setError($this->_db->getErrorMsg());
            return false;
        }

        // Set priority to 100 for every other same SEF URL
        $query = "UPDATE `#__sefurls` SET `priority` = '100' WHERE (`sefurl` = '{$row->sefurl}') AND (`id` != '{$this->_id}')";
        $this->_db->setQuery( $query );
        if( !$this->_db->query() ) {
            $this->setError($this->_db->getErrorMsg());
            return false;
        }

        return true;
    }

}
?>