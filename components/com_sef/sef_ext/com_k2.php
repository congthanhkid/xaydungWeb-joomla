<?php
/**
 * K2 SEF extension for ARTIO JoomSEF
 * 
 * @package   JoomSEF
 * @author    ARTIO s.r.o., http://www.artio.net
 * @copyright Copyright (C) 2012 ARTIO s.r.o. 
 * @license   GNU/GPLv3 http://www.artio.net/license/gnu-general-public-license
 */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access.');

class SefExt_com_k2 extends SefExt
{
    var $params;

    function getNonSefVars(&$uri)
    {
        $this->_createNonSefVars($uri);
        
        return array($this->nonSefVars, $this->ignoreVars);
    }
    
    function _createNonSefVars(&$uri)
    {
        if (isset($this->nonSefVars) && isset($this->ignoreVars))
            return;
            
        $this->nonSefVars = array();
        $this->ignoreVars = array();
        
        if (!is_null($uri->getVar('limit')))
            $this->nonSefVars['limit'] = $uri->getVar('limit');
        if (!is_null($uri->getVar('limitstart')))
            $this->nonSefVars['limitstart'] = $uri->getVar('limitstart');
    }
    
    function AddNamePart(&$name, $object, $part)
    {
        if (isset($object->$part)) {
            $name[] = $object->$part;
        }
    }
    
    function BuildName($object, $fieldname, $defaultText)
    {
        $name = array();
        $object->text = $this->params->get($fieldname.'text', $defaultText);
        $this->AddNamePart($name, $object, $this->params->get($fieldname.'1', 'none'));
        $this->AddNamePart($name, $object, $this->params->get($fieldname.'2', 'title'));
        $this->AddNamePart($name, $object, $this->params->get($fieldname.'3', 'none'));
        
        return implode('-', $name);
    }

    function getCategoryTitle($id) {
        $cats = $this->params->get('category_inc', '2');
        $categories = array();
        
        if ($cats == '0')
            $id = 0;
        while ($id > 0) {
            $database =& JFactory::getDBO();
            $database->setQuery("SELECT id, name AS title, alias, parent FROM #__k2_categories WHERE id = ".$id);
            $row = $database->loadObject();
            if (is_null($row)) {
                return null;
            }
            
            $name = $this->BuildName($row, 'catname', 'Category');
            array_unshift($categories, $name);
            
            $id = $row->parent;
            if ($cats == '1')
                break;
        }
        return $categories;
    }
    
    function getItemTitle($id) {
        $database =& JFactory::getDBO();
        $database->setQuery("SELECT id, title, alias, catid FROM #__k2_items WHERE id =".$id);
        $row = $database->loadObject();
        if (is_null($row)) {
            return null;
        }

        $category    = $this->getCategoryTitle($row->catid);
        if (is_null($category)) {
            return null;
        }
        
        $name = $this->BuildName($row, 'itemname', 'Item');
        array_push($category, $name);
        
        return $category;
    }

    function getAuthorTitle($id) {
        $database =& JFactory::getDBO();
        $database->setQuery ( 'SELECT id, name FROM #__users WHERE id = '.$id);
        $rows = $database->loadRow();
        
        $name = (($this->params->get('authorid_inc', '0') != '0') ? $id.'-' : '').$rows[1];
        
        return $name;
    }
    
    function getMetaData ($type, $id) {
        
        $database =& JFactory::getDBO();
        $sefConfig =& SEFConfig::getConfig();

        // JF translate extension.
        $jfTranslate = $sefConfig->translateNames ? ', `id`' : '';
        
        $addCatToTitle = $this->params->get('meta_titlecat', '0');
        
        $descField = $metakeySource = null;
        
        switch ($type) {
             
             case 'item':
                 $sql = "SELECT `title`, `catid`, `introtext`, CONCAT(`introtext`, ' ', `fulltext`) AS `text`$jfTranslate FROM `#__k2_items` WHERE `id` = '".(int)$id."'";
                $descField = 'introtext';
                $metakeySource = 'text';
                 break;
             
             case 'category':
                 $sql = "SELECT `name` AS `title`, `description`$jfTranslate FROM `#__k2_categories` WHERE `id` = '".(int)$id."'";
                $descField = 'description';
                $metakeySource = 'description';
                 break;
                              
             case 'user':
                 $sql = "SELECT `name` AS `title` FROM `#__users` WHERE `id` = '".(int)$id."'";
                $descField = 'title';
                $metakeySource = 'title';
                 break;
                 
            default:
                $sql = '';
        }
        
        if (!empty($sql)) {
            $database->setQuery($sql);
            $row = $database->loadObject();
            
            if (isset($row->$descField)) $this->metadesc = $row->$descField;
            if (isset($row->$metakeySource))  $this->metakeySource = $row->$metakeySource;
            if (isset($row->metakey))  $this->origmetakey  = $row->metakey;
            if (isset($row->metadesc)) $this->origmetadesc = $row->metadesc;
            
            if (isset($row->title)){
                
                $this->metatitle=$row->title;
                
                if ($addCatToTitle && $type=='item')
                {
                    $database->setQuery("SELECT `name` AS `title`$jfTranslate FROM `#__k2_categories` WHERE `id` = '".(int)$row->catid."'");
                    if ($rowCat = $database->loadObject())
                        $this->metatitle.= ' - '.$rowCat->title;
                }
            }
            
            return true;
                        
        }
        elseif ($type=='tag')
        {
            $this->metadesc = $id;
            $this->metakeySource = $id;
            $this->metatitle = 'Tag: '.$id;
            
            return true;
        }
        
        return false;
            
    }
    
    function googleNews($title, $id) {
        $num = '';
        $add = $this->params->get('google_news', '0');

        if($add == '1') {
            // Article ID
            $digits = trim($this->params->get('google_news_digits', '2'));
            if(!is_numeric($digits)) {
                $digits = '3';
            }

            $num = sprintf('%0'.$digits.'d', $id);
        }
        else if($add == '2') {
            // Publish date
            $db =& JFactory::getDBO();
            $query = "SELECT `publish_up` FROM `#__k2_items` WHERE `id` = '$id'";
            $db->setQuery($query);
            $time = $db->loadResult();

            $time = strtotime($time);

            $date = $this->params->get('google_news_dateformat', 'ddmm');

            $search = array('dd', 'd', 'mm', 'm', 'yyyy', 'yy');
            $replace = array(date('d', $time), date('j', $time), date('m', $time), date('n', $time), date('Y', $time), date('y', $time));
            $num = str_replace($search, $replace, $date);
        }

        if(!empty($num)) {
            $where = $this->params->get('google_news_pos', '1');
            
            $sep = $this->params->get('google_news_sep', '');
            if (empty($sep)) {
                $sefConfig =& SEFConfig::getConfig();
                $sep = $sefConfig->replacement;
            }

            if($where == '1') {
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
        $name = $this->googleNews($name, $id);
        
        // Handle the slash correctly
        $name = explode('/', $name);
        
        // Add back to URL parts
        $title = array_merge($title, $name);
    }
    
    function beforeCreate(&$uri) {
        // Remove the part after ':' from variables
        if(!is_null($uri->getVar('id')))
            SEFTools::fixVariable($uri, 'id');
            
        $layout = $uri->getVar('layout');
        if (!is_null($layout)) {
            if (is_null($uri->getVar('task')) && ($layout != 'item')) {
                $uri->setVar('task', $layout);
            }
            $uri->delVar('layout');
        }
        
        // Remove empty task
        if ($uri->getVar('task') == '') {
            $uri->delVar('task');
        }
    }

    function create(&$uri) {
        $vars = $uri->getQuery(true);
        extract($vars);
        $title = array();

        $this->params = SEFTools::getExtParams('com_k2');
        
        $title[] = JoomSEF::_getMenuTitle(@$option, @$task, @$Itemid);
        
        if(isset($view)) {
            switch($view) {
                case 'itemlist':
                    unset($view);
                    break;
                case 'item':
                    if(isset($id)){
                        $itemTitle = $this->getItemTitle($id);
                        if (is_null($itemTitle)) {
                            return $uri;
                        }
                        $title = array_merge($title, $itemTitle);
                        $this->getMetaData('item', $id);
                    }
                    if($this->params->get('google_news', '0') != '0') {
                        $this->addGoogleNews($title, $id);
                    }
                    unset($view);
                    break;
                default:
                    $title[] = $view;
            }
        }
        
        if (isset($task)) {
            switch ($task) {
                case 'category':
                    if (isset($id)) {
                        $cats = $this->getCategoryTitle($id);
                        if (is_null($cats)) {
                            return $uri;
                        }
                        $title = array_merge($title, $cats);
                        $this->getMetaData('category', $id);
                    }
                    unset($task);
                    break;
                case 'tag':
                    $title = null;
                    if ($this->params->get('tags_inc', '1') == '1') {
                       $title[] = JText::_('TAGS');
                    }
                    if (isset($tag)) {
                        $title[] = $tag;
                        $this->getMetaData('tag', $tag);
                    }
                    unset($task);
                    break;
                case 'user':
                    $title[] = JText::_('Author');
                    if(isset($id)){
                        $title[] = $this->getAuthorTitle($id);
                        $this->getMetaData('user', $id);}
                    unset($task);
                    break;
                case 'edit':
                    if (isset($cid)) {
                        $itemTitle = $this->getItemTitle($cid);
                        if (is_null($itemTitle)) {
                            return $uri;
                        }
                        $title = array_merge($title, $itemTitle);
                    }
                    $title[] = JText::_('Edit');
                    unset($task);
                    break;
                case 'search':
                    $title[] = JText::_('Search');
                    if (!empty($searchword))
                      $title[] = $searchword;
                    unset($task);
                    unset($searchword);
                    break;
                case 'date':
                    $title[] = 'date';
                    if (!empty($year))
                        $title[] = $year;
                    if (!empty($month))
                        $title[] = $month;
                    if (!empty($day))
                        $title[] = $day;
                    unset($task);
                    unset($year);
                    unset($month);
                    unset($day);
                    break;
                case 'latest':
                    // Don't add
                    unset($task);
                    break;
                default:
                    $title[] = $task;
            }
        }
        
        if (isset($format))
            $title[] = $format;
        
        if (isset($type))
            $title[] = $type;
        
        if (isset($print) && $print == '1')
            $title[] = JText::_('PRINT');
        
        // Generate meta tags
        $metatags = $this->getMetaTags();
        if (isset($this->metatitle)) {
            $metatags['metatitle'] = $this->metatitle;
        }
            
        $this->_createNonSefVars($uri);
        
        $newUri = $uri;
        if (count($title) > 0) {
            $newUri = JoomSEF::_sefGetLocation($uri, $title, null, null, null, @$lang, $this->nonSefVars, null, $metatags);
        }
            
        return $newUri;
    }
}
?>