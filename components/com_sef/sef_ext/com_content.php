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

define( '_COM_SEF_PRIORITY_CONTENT_ARTICLE_ITEMID',         15 );
define( '_COM_SEF_PRIORITY_CONTENT_ARTICLE',                20 );
define( '_COM_SEF_PRIORITY_CONTENT_SECTIONLIST_ITEMID',     25 );
define( '_COM_SEF_PRIORITY_CONTENT_SECTIONLIST',            30 );
define( '_COM_SEF_PRIORITY_CONTENT_CATEGORYLIST_ITEMID',    35 );
define( '_COM_SEF_PRIORITY_CONTENT_CATEGORYLIST',           40 );
define( '_COM_SEF_PRIORITY_CONTENT_SECTIONBLOG_ITEMID',     45 );
define( '_COM_SEF_PRIORITY_CONTENT_SECTIONBLOG',            50 );
define( '_COM_SEF_PRIORITY_CONTENT_CATEGORYBLOG_ITEMID',    55 );
define( '_COM_SEF_PRIORITY_CONTENT_CATEGORYBLOG',           60 );

class SefExt_com_content extends SefExt
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
            
        $this->params =& SEFTools::GetExtParams('com_content');
        $sefConfig =& SEFConfig::getConfig();
        
        $this->nonSefVars = array();
        $this->ignoreVars = array();
        
        if ($sefConfig->appendNonSef && ($this->params->get('pagination', '0') != '0')) {
            if (!is_null($uri->getVar('limit')))
                $this->nonSefVars['limit'] = $uri->getVar('limit');
            if (!is_null($uri->getVar('limitstart')))
                $this->nonSefVars['limitstart'] = $uri->getVar('limitstart');
        }
        if (!is_null($uri->getVar('filter')))
            $this->nonSefVars['filter'] = $uri->getVar('filter');
    }
    
    /**
     * Get SEF titles of content items.
     *
     * @param  string $task
     * @param  int $id
     * @return string
     */
    function _getContentTitles($task, $id)
    {
        $database =& JFactory::getDBO();
        $sefConfig =& SEFConfig::getConfig();

        $title = array();
        // JF translate extension.
        $jfTranslate = $sefConfig->translateNames ? ', `id`' : '';
        
        // Fields
        $title_field = 'title';
        if( SEFTools::UseAlias($this->params, 'title_alias') ) {
            $title_field = 'title_alias';
        }
        $category_field = 'category';
        if( SEFTools::UseAlias($this->params, 'category_alias') ) {
            $category_field = 'cat_alias';
        }
        $section_field = 'section';
        if( SEFTools::UseAlias($this->params, 'section_alias') ) {
            $section_field = 'sec_alias';
        }
        
        $showSection = $this->params->get('show_section', '0');
        $showCategory = $this->params->get('show_category', '1');
        $addCatToTitle = $this->params->get('meta_titlecat', '0');

        $descField = null;
        
        $id = intval($id);
        $type = '';
        switch ($task) {
            case 'section':
            case 'blogsection': {
                if (isset($id)) {
                    $sql = "SELECT `title` AS `section`, `alias` AS `sec_alias`, `description` AS `sec_desc`$jfTranslate FROM `#__sections` WHERE `id` = '$id'";
                }
                $descField = 'sec_desc';
                $metakeySource = 'sec_desc';
                $type = 'Section';
                break;
            }
            case 'category':
            case 'blogcategory':
                if (isset($id)) {
                    if ($showSection) {
                        $sql = 'SELECT s.title AS section, s.alias AS sec_alias, s.description AS sec_desc'.($jfTranslate ? ', s.id AS section_id' : '')
                        .($showCategory ? ', c.title AS category, c.alias AS cat_alias, c.description AS cat_desc'.($jfTranslate ? ', c.id' : '') : '')
                        .' FROM #__categories as c '
                        .'LEFT JOIN #__sections AS s ON c.section = s.id '
                        .'WHERE c.id = '.$id;
                    }
                    else {
                        $sql = "SELECT `title` AS `category`, `alias` AS `cat_alias`, `description` AS `cat_desc`$jfTranslate FROM #__categories WHERE `id` = $id";
                    }
                    /*if ($showCategory) {
                        $descField = 'cat_desc';
                    } else {
                        $descField = 'sec_desc';
                    }*/
                    // if this is category URL, use category alias although $showCategory is FALSE
                    $descField = 'cat_desc';
                    $metakeySource = 'cat_desc';
                    $showCategory = true;
                }
                $type = 'Category';
                break;
            case 'article':
                if (isset($id)) {
                    /*
                    Alias should not be empty, Joomla 1.5 ensures that when saving content
                    if ($sefConfig->useAlias) {
                        // verify title alias is not empty
                        $database->setQuery("SELECT alias$jfTranslate FROM #__content WHERE id = $id");
                        $title_field = $database->loadResult() ? 'alias' : 'title';
                    }
                    */
                    $selects = array();
                    $joins = array();
                    if ($showSection) {
                        $selects[] = 's.title AS section, s.alias AS sec_alias'.($jfTranslate ? ', s.id AS section_id' : '').', ';
                        $joins[] = 'LEFT JOIN #__sections AS s ON a.sectionid = s.id';
                    }
                    if ($showCategory || $addCatToTitle) {
                        $selects[] = 'c.title AS category, c.alias AS cat_alias'.($jfTranslate ? ', c.id AS category_id' : '').', ';
                        $joins[] = 'LEFT JOIN #__categories AS c ON a.catid = c.id';
                    }
                    $sql = 'SELECT '.implode('', $selects).
                        'a.title AS title, a.alias AS title_alias, a.`fulltext`, a.introtext AS item_desc, a.metakey, a.metadesc'.($jfTranslate ? ', a.id' : '').' FROM #__content as a '.
                        implode(' ', $joins).
                        ' WHERE a.id = '.$id;
                    $descField = 'item_desc';
                    $metakeySource = 'fulltext';
                }
                $type = 'Article';
                break;
            default:
                $sql = '';
        }

        if ($sql) {
            $database->setQuery($sql);
            $row = $database->loadObject();
            
            if (is_null($row)) {
                JoomSefLogger::Log($type." with ID {$id} could not be found.", $this, 'com_content');
                return $title;
            }
            
            if (isset($row->section)) {
                $title[] = $row->$section_field;
                if ($sefConfig->contentUseIndex && ($task == 'section')) {
                    $title[] = '/';
                }
            }
            if (isset($row->category) && $showCategory) {
                $title[] = $row->$category_field;
                if ($sefConfig->contentUseIndex && ($task == 'category')) {
                    $title[] = '/';
                }
            }
            if (isset($row->$title_field)) $title[] = $row->$title_field;
            
            if ($addCatToTitle && isset($row->category) && isset($row->title)) {
                $this->metatitle = $row->title . ' - ' . $row->category;
            }
            
            if (isset($row->title)) {
                $this->pageTitle = $row->title;
            }
            
            if (isset($row->$descField)) $this->metadesc = $row->$descField;
            if (isset($row->$metakeySource))  $this->metakeySource = $row->$metakeySource;
            if (isset($row->metakey))  $this->origmetakey  = $row->metakey;
            if (isset($row->metadesc)) $this->origmetadesc = $row->metadesc;
            
            if (isset($row->item_desc) || isset($row->fulltext)) {
                $this->articleText = $row->item_desc . chr(13).chr(13) . $row->fulltext;
            }
        }
        return $title;
    }

    function _getPageTitle($page)
    {
        if (empty($this->articleText)) {
            return null;
        }
        
        //simple performance check to determine whether bot should process further
        if (strpos($this->articleText, 'class="system-pagebreak') === false && strpos($this->articleText, 'class=\'system-pagebreak') === false) {
            return null;
        }
        
        // regex
        $regex = '#<hr([^>]*?)class=(\"|\')system-pagebreak(\"|\')([^>]*?)\/*>#iU';
        
        // Find all occurences
        $matches = array();
        preg_match_all($regex, $this->articleText, $matches, PREG_SET_ORDER);
        
        if (!isset($matches[$page-1]) || !isset($matches[$page-1][2])) {
            return null;
        }
        
        $attrs = JUtility::parseAttributes($matches[$page-1][0]);
        
        if (empty($attrs['title'])) {
            return null;
        }
        
        return $attrs['title'];
    }
    
    function beforeCreate(&$uri)
    {
        $db =& JFactory::getDBO();

        $params = SEFTools::GetExtParams('com_content');

        // Compatibility mode
        $comp = $params->get('compatibility', '0');
        
        // Change task=view to view=article for old urls
        if( !is_null($uri->getVar('task')) && ($uri->getVar('task') == 'view') ) {
            if( $comp == '0' ) {
                $uri->delVar('task');
            }
            $uri->setVar('view', 'article');
        }
        
        // Add the task=view in compatibility mode
        if ($comp != '0') {
            if (is_null($uri->getVar('task')) && !is_null($uri->getVar('view')) && ($uri->getVar('view') == 'article')) {
                $uri->setVar('task', 'view');
            }
        }

        // remove the limitstart and limit variables if they point to the first page
        if (!is_null($uri->getVar('limitstart')) && ($uri->getVar('limitstart') == '0')) {
            $uri->delVar('limitstart');
            $uri->delVar('limit');
        }

        // Try to guess the correct Itemid if set to
        if ($params->get('guessId', '0') != '0') {
            if (!is_null($uri->getVar('Itemid')) && !is_null($uri->getVar('id'))) {
                $mainframe =& JFactory::getApplication();
                $i = $mainframe->getItemid($uri->getVar('id'));
                $uri->setVar('Itemid', $i);
            }
        }

        // Remove the part after ':' from variables
        if (!is_null($uri->getVar('id')))    SEFTools::fixVariable($uri, 'id');
        if (!is_null($uri->getVar('catid'))) SEFTools::fixVariable($uri, 'catid');

        // TODO: We should remove this, as it generates 1 unnecessary SQL query for each article link,
        // instead the catid should just be always removed from article URL (but when updating JoomSEF,
        // we'll need to update URLs already in database to reflect such change = remove catid from them!)
        // If catid not given, try to find it
        $catid = $uri->getVar('catid');
        if (!is_null($uri->getVar('view')) && ($uri->getVar('view') == 'article') && !is_null($uri->getVar('id')) && empty($catid)) {
            $id = intval($uri->getVar('id'));
            $query = "SELECT `catid` FROM `#__content` WHERE `id` = '{$id}'";
            $db->setQuery($query);
            $catid = $db->loadResult();
            
            if (is_null($catid)) {
                JoomSefLogger::Log("Article with ID {$id} could not be found.", $this, 'com_content');
            }
            
            if (!empty($catid)) {
                $uri->setVar('catid', $catid);
            }
        }

        // add the view variable if it's not set
        if (is_null($uri->getVar('view'))) {
            if (is_null($uri->getVar('id'))) {
                $uri->setVar('view', 'frontpage');
            } else {
                $uri->setVar('view', 'article');
            }
        }

        return;
    }

    function GoogleNews($title, $id)
    {
        $db =& JFactory::getDBO();

        $num = '';
        $add = $this->params->get('googlenewsnum', '0');

        $id = intval($id);
        if ($add == '1' || $add == '3') {
            // Article ID
            $digits = trim($this->params->get('digits', '3'));
            if (!is_numeric($digits)) {
                $digits = '3';
            }

            $num1 = sprintf('%0'.$digits.'d', $id);
        }
        if ($add == '2' || $add == '3') {
            // Publish date
            $query = "SELECT `publish_up` FROM `#__content` WHERE `id` = '$id'";
            $db->setQuery($query);
            $time = $db->loadResult();

            $time = strtotime($time);

            $date = $this->params->get('dateformat', 'ddmm');

            $search = array('dd', 'd', 'mm', 'm', 'yyyy', 'yy');
            $replace = array(date('d', $time),
            date('j', $time),
            date('m', $time),
            date('n', $time),
            date('Y', $time),
            date('y', $time) );
            $num2 = str_replace($search, $replace, $date);
        }

        if ($add == '1') {
            $num = $num1;
        }
        else if ($add == '2') {
            $num = $num2;
        }
        else if ($add == '3') {
            $sep = $this->params->get('iddatesep', '');
            if ($this->params->get('iddateorder', '0') == '0') {
                $num = $num2.$sep.$num1;
            }
            else {
                $num = $num1.$sep.$num2;
            }
        }
        
        if (!empty($num)) {
            $onlyNum = ($this->params->get('title_alias', 'global') == 'googlenews');
            
            if ($onlyNum) {
                return $num;
            }
            
            $sep = $this->params->get('iddatesep', '');
            if (empty($sep)) {
                $sefConfig =& SEFConfig::getConfig();
                $sep = $sefConfig->replacement;
            }

            $where = $this->params->get('numberpos', '1');

            if( $where == '1' ) {
                $title = $title.$sep.$num;
            } else {
                $title = $num.$sep.$title;
            }
        }

        return $title;
    }

    function addGoogleNews(&$title, $id)
    {
        // Get and remove last part of title
        $name = array_pop($title);
        
        // Generate Google News number from name
        $name = $this->GoogleNews($name, $id);
        
        // Handle the slash correctly
        $name = explode('/', $name);
        
        // Add back to URL parts
        $title = array_merge($title, $name);
    }
    
    function create(&$uri)
    {
        $sefConfig =& SEFConfig::getConfig();
        $mainframe =& JFactory::getApplication();

        $this->params =& SEFTools::GetExtParams('com_content');

        $vars = $uri->getQuery(true);
        extract($vars);

        // Do not SEF URLs with exturl variable
        //if( !empty($exturl) )   return $string;

        // Do not SEF edit urls
        if (isset($task) && ($task == 'edit')) {
            return $uri;
        }

        // Set title.
        $title = array();

        switch (@$view) {
            case 'new':
            case 'edit': {
                /*
                $title[] = getMenuTitle($option, $task, $Itemid, $string);
                $title[] = 'new' . $sefConfig->suffix;
                */
                break;
            }
            case 'archive': {
                $title[] = JText::_($view);
                
                if( !empty($year) ) {
                    $title[] = $year;
                }
                if( !empty($month) ) {
                    $title[] = $month;
                }
                
                break;
            }
            /*
            case 'archivecategory':
            case 'archivesection': {
            if (eregi($task.".*id=".$id, $_SERVER['REQUEST_URI'])) break;
            }
            */            
            default: {
                if (isset($format)) {
                    if ($format == 'pdf') {
                        // wrong ID
                        if (intval($id) == 0) return $uri;
                        
                        // create PDF
                        $title = $this->_getContentTitles(!empty($view) ? $view : 'article', $id);
                        if (count($title) === 0) $title[] = JoomSEF::_getMenuTitle(@$option, @$task, @$Itemid);

                        // Add Google News number if set to
                        if ((@$view == 'article') && ($this->params->get('googlenewsnum', '0') != '0')) {
                            $this->addGoogleNews($title, $id);
                        }
                        
                        $title[] = JText::_('PDF');
                    } elseif ($format == 'feed') {
                        // Create feed
                        if (@$view != 'frontpage') {
                            // wrong ID
                            if (intval($id) == 0) return $uri;
                            
                            $title = $this->_getContentTitles(!empty($view) ? $view : 'article', $id);

                            // Add Google News number if set to
                            if ((@$view == 'article') && ($this->params->get('googlenewsnum', '0') != '0')) {
                                $this->addGoogleNews($title, $id);
                            }
                        }
                        if ((count($title) === 0) && empty($type)) {
                            $title[] = JoomSEF::_getMenuTitle(@$option, @$task, @$Itemid);
                        }

                        if (!empty($type)) $title[] = $type;
                    }
                } else {
                    if (isset($id)) {
                        // wrong ID
                        if (intval($id) == 0) return $uri;
                        
                        $title = $this->_getContentTitles(@$view, @$id);
                        if (count($title) === 0) $title[] = JoomSEF::_getMenuTitle(@$option, @$task, @$Itemid);

                        // Add Google News number if set to
                        if ((@$view == 'article') && ($this->params->get('googlenewsnum', '0') != '0')) {
                            $this->addGoogleNews($title, $id);
                        }
                    } else {
                        $title[] = JoomSEF::_getMenuTitle(@$option, @$task, @$Itemid);
                        //$title[] = JText::_('Submit');
                    }
                    
                    // Layout
                    $addLayout = $this->params->get('add_layout', '2');
                    if (isset($layout) && !empty($layout) && ($addLayout != '0')) {
                        if ($addLayout == '2') {
                            $defLayout = $this->params->get('def_layout', 'default');
                            if ($layout != $defLayout) {
                                $title[] = $layout;
                            }
                        }
                        else {
                            $title[] = $layout;
                        }
                    }
                    if (isset($limitstart) && (!$sefConfig->appendNonSef || ($this->params->get('pagination', '0') == '0'))) {
                        $pagetext = null;
                        if( @$view == 'article' ) {
                            // Multipage article - get the correct page title
                            $page = $limitstart + 1;
                            if ($this->params->get('multipagetitles', '1') == '1') {
                                $pagetext = $this->_getPageTitle($limitstart);
                            }
                        }
                        else {
                            // Is limit set?
                            if( !isset($limit) ) {
                                // Try to get limit from menu parameters
                                $menu =& JSite::getMenu();
                                
                                if( !isset($Itemid) ) {
                                    // We need to find Itemid first
                                    $active =& $menu->getActive();
                                    $Itemid = $active->id;
                                }
                                
                                $menuParams =& $menu->getParams($Itemid);
                                $leading = $menuParams->get('num_leading_articles', 1);
                                $intro   = $menuParams->get('num_intro_articles', 4);
                                $links   = $menuParams->get('num_links', 4);
                                
                                if ((isset($layout) && ($layout == 'blog')) ||
                                    (isset($view) && ($view == 'frontpage'))) {
                                    $limit = $leading + $intro; // + $links;
                                }
                                else {
                                    $limit = $menuParams->get('display_num', $mainframe->getCfg('list_limit'));
                                    $limit = $mainframe->getUserStateFromRequest('com_content.'.$uri->getVar('layout', 'default').'.limit', 'limit', $limit, 'int');
                                }
                            }
                            if (intval($limit) == 0) {
                                $limit = 1;
                            }
                            $page = intval($limitstart / $limit)  + 1;
                        }
                        
                        if (is_null($pagetext)) {
                            $pagetext = strval($page);
                            if (($cnfPageText = $sefConfig->getPageText())) {
                                $pagetext = str_replace('%s', $page, $cnfPageText);
                            }
                            $this->pageNumberText = $pagetext;
                        }
                        $title = array_merge($title, explode('/', $pagetext));
                        //$title[] = $pagetext;
                    }

                    // show all
                    if (isset($showall) && ($showall == 1)) {
                        $title[] = JText::_('All Pages');
                    }

                    // print article
                    if (isset($print) && ($print == 1)) {                        
                        $title[] = JText::_('Print') . (!empty($page) ? '-'.($page+1) : '');
                    }
                }
            }
        }

        $newUri = $uri;
        if (count($title) > 0) {
            // Generate meta tags
            $metatags = $this->getMetaTags();
            if (isset($this->metatitle)) {
                $metatags['metatitle'] = $this->metatitle;
            }
            if (($this->params->get('meta_titlepage', '0') == '1') && !empty($this->pageNumberText)) {
                // Add page number to page title
                if (!empty($metatags["metatitle"])) {
                    $metatags["metatitle"] .= ' - '.$this->pageNumberText;
                }
                else {
                    $metatags["metatitle"] = (!empty($this->pageTitle) ? $this->pageTitle.' - ' : '') . $this->pageNumberText;
                }
            }
            
            $this->_createNonSefVars($uri);

            $priority = $this->getPriority($uri);
            $sitemap = $this->getSitemapParams($uri);
            $newUri = JoomSEF::_sefGetLocation($uri, $title, null, null, null, @$lang, $this->nonSefVars, null, $metatags, $priority, true, null, $sitemap);
        }

        return $newUri;
    }
    
    function getSitemapParams(&$uri)
    {
        if ($uri->getVar('format', 'html') != 'html') {
            // Handle only html links
            return array();
        }
        
        $view = $uri->getVar('view');
        
        $sm = array();
        switch ($view)
        {
            case 'article':
            case 'category':
            case 'section':
                $indexed = $this->params->get('sm_'.$view.'_indexed', '1');
                $freq = $this->params->get('sm_'.$view.'_freq', '');
                $priority = $this->params->get('sm_'.$view.'_priority', '');
                
                if (!empty($indexed)) $sm['indexed'] = $indexed;
                if (!empty($freq)) $sm['frequency'] = $freq;
                if (!empty($priority)) $sm['priority'] = $priority;
                
                break;
        }
        
        return $sm;
    }

    function getPriority(&$uri)
    {
        $itemid = $uri->getVar('Itemid');
        $view = $uri->getVar('view');
        $layout = $uri->getVar('layout');
        
        switch($view)
        {
            case 'article':
                if( is_null($itemid) ) {
                    return _COM_SEF_PRIORITY_CONTENT_ARTICLE;
                } else {
                    return _COM_SEF_PRIORITY_CONTENT_ARTICLE_ITEMID;
                }
                break;
                
            case 'section':
                if( $layout == 'blog' ) {
                    if( is_null($itemid) ) {
                        return _COM_SEF_PRIORITY_CONTENT_SECTIONBLOG;
                    } else {
                        return _COM_SEF_PRIORITY_CONTENT_SECTIONBLOG_ITEMID;
                    }
                } else {
                    if( is_null($itemid) ) {
                        return _COM_SEF_PRIORITY_CONTENT_SECTIONLIST;
                    } else {
                        return _COM_SEF_PRIORITY_CONTENT_SECTIONLIST_ITEMID;
                    }
                }
                break;
                
            case 'category':
                if( $layout == 'blog' ) {
                    if( is_null($itemid) ) {
                        return _COM_SEF_PRIORITY_CONTENT_CATEGORYBLOG;
                    } else {
                        return _COM_SEF_PRIORITY_CONTENT_CATEGORYBLOG_ITEMID;
                    }
                } else {
                    if( is_null($itemid) ) {
                        return _COM_SEF_PRIORITY_CONTENT_CATEGORYLIST;
                    } else {
                        return _COM_SEF_PRIORITY_CONTENT_CATEGORYLIST_ITEMID;
                    }
                }
                break;
                
            default:
                return null;
                break;
        }
    }

}
?>
