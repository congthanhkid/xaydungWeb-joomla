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

class SEFModelConfig extends JModel
{
    function __construct()
    {
        parent::__construct();
    }

    function &getLists()
    {
        $db =& JFactory::getDBO();
        $sefConfig = SEFConfig::getConfig();

        $std_opt = 'class="inputbox" size="2"';

        $lists['enabled']           = JHTML::_('select.booleanlist', 'enabled',             $std_opt, $sefConfig->enabled);
        $lists['professionalMode']  = JHTML::_('select.booleanlist', 'professionalMode',    $std_opt, $sefConfig->professionalMode);
        $lists['lowerCase']         = JHTML::_('select.booleanlist', 'lowerCase',           $std_opt, $sefConfig->lowerCase);
        $lists['disableNewSEF']     = JHTML::_('select.booleanlist', 'disableNewSEF',       $std_opt, $sefConfig->disableNewSEF);
        $lists['dontRemoveSid']     = JHTML::_('select.booleanlist', 'dontRemoveSid',       $std_opt, $sefConfig->dontRemoveSid);
        $lists['setQueryString']    = JHTML::_('select.booleanlist', 'setQueryString',      $std_opt, $sefConfig->setQueryString);
        $lists['parseJoomlaSEO']    = JHTML::_('select.booleanlist', 'parseJoomlaSEO',      $std_opt, $sefConfig->parseJoomlaSEO);
        $lists['redirectJoomlaSEF'] = JHTML::_('select.booleanlist', 'redirectJoomlaSEF',   $std_opt, $sefConfig->redirectJoomlaSEF);
        $lists['checkJunkUrls']     = JHTML::_('select.booleanlist', 'checkJunkUrls',       $std_opt, $sefConfig->checkJunkUrls);
        $lists['preventNonSefOverwrite']    = JHTML::_('select.booleanlist', 'preventNonSefOverwrite', $std_opt, $sefConfig->preventNonSefOverwrite);

        $basehrefs[] = JHTML::_('select.option', _COM_SEF_BASE_HOMEPAGE,    JText::_('Yes - always use only base URL'));
        $basehrefs[] = JHTML::_('select.option', _COM_SEF_BASE_CURRENT,     JText::_('Yes - always use full SEO URL'));
        $basehrefs[] = JHTML::_('select.option', _COM_SEF_BASE_NONE,        JText::_('No - disable base href generation'));
        $basehrefs[] = JHTML::_('select.option', _COM_SEF_BASE_IGNORE,      JText::_('No - leave original'));
        $lists['check_base_href'] = JHTML::_('select.genericlist', $basehrefs, 'check_base_href', 'class="inputbox" size="1"', 'value', 'text', $sefConfig->check_base_href);
        
        // www and non-www handling
        $wwws[] = JHTML::_('select.option', _COM_SEF_WWW_NONE,          JText::_('Don\'t handle'));
        $wwws[] = JHTML::_('select.option', _COM_SEF_WWW_USE_WWW,       JText::_('Always use www domain'));
        $wwws[] = JHTML::_('select.option', _COM_SEF_WWW_USE_NONWWW,    JText::_('Always use non-www domain'));
        $lists['wwwHandling'] = JHTML::_('select.genericlist', $wwws, 'wwwHandling', 'class="inputbox" size="1"', 'value', 'text', $sefConfig->wwwHandling);
        
        if( SEFTools::JoomFishInstalled() ) {
            $jfrouterEnabled = JPluginHelper::isEnabled('system', 'jfrouter');
            
            // lang placement
            $langPlacement[] = JHTML::_('select.option', _COM_SEF_LANG_PATH,   JText::_('include in path'));
            $langPlacement[] = JHTML::_('select.option', _COM_SEF_LANG_SUFFIX, JText::_('add as suffix'));
            $langPlacement[] = JHTML::_('select.option', _COM_SEF_LANG_DOMAIN, JText::_('use different domains'));
            $langPlacement[] = JHTML::_('select.option', _COM_SEF_LANG_NONE,   JText::_('do not add'));
            $lists['langPlacement'] = JHTML::_('select.genericlist', $langPlacement, 'langPlacement', 'class="inputbox" size="1" onchange="langTypeChanged(this.value);"', 'value', 'text', $sefConfig->langPlacement);
            
            // Prepare main language array
            $mainlangs = array();
            $mainlangs[] = JHTML::_('select.option', '0', JText::_('(none)'));
    
            // language domains and main language
            $jfm =& JoomFishManager::getInstance();
            $langs = $jfm->getActiveLanguages();
            if( @count(@$langs) ) {
                $uri =& JURI::getInstance();
                $host = $uri->getHost();
                
                foreach($langs as $lang) {
                    $l = new stdClass();
                    $l->code = $lang->shortcode;
                    $l->name = $lang->name;
                    $l->value = isset($sefConfig->jfSubDomains[$lang->shortcode]) ? $sefConfig->jfSubDomains[$lang->shortcode] : $host;
                    
                    // domain list
                    $langlist[] = $l;
                    
                    // main language list
                    $mainlangs[] = JHTML::_('select.option', $l->code, $l->name);
                }
                //$lists['jfSubDomains'] = '<table width="100%" border="0" cellpadding="0" cellspacing="0"><tr>'. implode('</tr><tr>', $langlist) .'</tr></table>';
                $lists['jfSubDomains'] = $langlist;
            }
            
            // Create the main language list
            $disabled = ($sefConfig->langPlacement == _COM_SEF_LANG_DOMAIN) ? ' disabled="disabled"' : '';
            $lists['mainLanguage'] = JHTML::_('select.genericlist', $mainlangs, 'mainLanguage', 'class="inputbox" size="1"'.$disabled, 'value', 'text', $sefConfig->mainLanguage);
            
            $disabled = '';
            if ($jfrouterEnabled) {
                $disabled = ' disabled="disabled"';
            }

            $lists['jfBrowserLang']     = JHTML::_('select.booleanlist', 'jfBrowserLang', $std_opt.$disabled, $sefConfig->jfBrowserLang);
            $lists['jfLangCookie']      = JHTML::_('select.booleanlist', 'jfLangCookie',  $std_opt.$disabled, $sefConfig->jfLangCookie);
            
            // Options to handle domain and SEF URL languages mismatch
            $opts = array();
            $opts[] = JHTML::_('select.option', _COM_SEF_WRONG_DOMAIN_REDIRECT,     JText::_('COM_SEF_WRONG_DOMAIN_REDIRECT'));
            $opts[] = JHTML::_('select.option', _COM_SEF_WRONG_DOMAIN_404,          JText::_('COM_SEF_WRONG_DOMAIN_SHOW_404'));
            $opts[] = JHTML::_('select.option', _COM_SEF_WRONG_DOMAIN_DO_NOTHING,   JText::_('COM_SEF_WRONG_DOMAIN_DO_NOTHING'));
            $lists['wrongDomainHandling'] = JHTML::_('select.genericlist', $opts, 'wrongDomainHandling', 'class="inputbox" size="1"', 'value', 'text', $sefConfig->wrongDomainHandling);
        }
        
        $lists['record404']         = JHTML::_('select.booleanlist', 'record404',           $std_opt, $sefConfig->record404);
        $lists['template404']       = JHTML::_('select.booleanlist', 'template404',         $std_opt, $sefConfig->template404);
        $lists['msg404']            = JHTML::_('select.booleanlist', 'showMessageOn404',    $std_opt, $sefConfig->showMessageOn404);
        $lists['use404itemid']      = JHTML::_('select.booleanlist', 'use404itemid',        $std_opt, $sefConfig->use404itemid);
        $lists['nonSefRedirect']    = JHTML::_('select.booleanlist', 'nonSefRedirect',      $std_opt, $sefConfig->nonSefRedirect);
        $lists['useMoved']          = JHTML::_('select.booleanlist', 'useMoved',            $std_opt, $sefConfig->useMoved);
        $lists['useMovedAsk']       = JHTML::_('select.booleanlist', 'useMovedAsk',         $std_opt, $sefConfig->useMovedAsk);
        $lists['alwaysUseLang']     = JHTML::_('select.booleanlist', 'alwaysUseLang',       $std_opt, $sefConfig->alwaysUseLang);
        $lists['translateNames']    = JHTML::_('select.booleanlist', 'translateNames',      $std_opt, $sefConfig->translateNames);
        $lists['contentUseIndex']   = JHTML::_('select.booleanlist', 'contentUseIndex',     $std_opt, $sefConfig->contentUseIndex);
        $lists['allowUTF']          = JHTML::_('select.booleanlist', 'allowUTF',            $std_opt, $sefConfig->allowUTF);
        $lists['excludeSource']     = JHTML::_('select.booleanlist', 'excludeSource',       $std_opt, $sefConfig->excludeSource);
        $lists['reappendSource']    = JHTML::_('select.booleanlist', 'reappendSource',      $std_opt, $sefConfig->reappendSource);
        $lists['ignoreSource']      = JHTML::_('select.booleanlist', 'ignoreSource',        $std_opt, $sefConfig->ignoreSource);
        $lists['appendNonSef']      = JHTML::_('select.booleanlist', 'appendNonSef',        $std_opt, $sefConfig->appendNonSef);
        $lists['transitSlash']      = JHTML::_('select.booleanlist', 'transitSlash',        $std_opt, $sefConfig->transitSlash);
        $lists['redirectSlash']      = JHTML::_('select.booleanlist', 'redirectSlash',        $std_opt, $sefConfig->redirectSlash);
        $lists['useCache']          = JHTML::_('select.booleanlist', 'useCache',            $std_opt, $sefConfig->useCache);
        $lists['numberDuplicates']  = JHTML::_('select.booleanlist', 'numberDuplicates',    $std_opt, $sefConfig->numberDuplicates);
        $lists['autoCanonical']     = JHTML::_('select.booleanlist', 'autoCanonical',       $std_opt, $sefConfig->autoCanonical);
        $lists['cacheRecordHits']   = JHTML::_('select.booleanlist', 'cacheRecordHits',     $std_opt, $sefConfig->cacheRecordHits);
        $lists['cacheShowErr']      = JHTML::_('select.booleanlist', 'cacheShowErr',        $std_opt, $sefConfig->cacheShowErr);
        $lists['sefComponentUrls']  = JHTML::_('select.booleanlist', 'sefComponentUrls',    $std_opt, $sefConfig->sefComponentUrls);
        $lists['versionChecker']    = JHTML::_('select.booleanlist', 'versionChecker',      $std_opt, $sefConfig->versionChecker);
        $lists['artioFeedDisplay']  = JHTML::_('select.booleanlist', 'artioFeedDisplay',    $std_opt, $sefConfig->artioFeedDisplay);
        $lists['fixIndexPhp']       = JHTML::_('select.booleanlist', 'fixIndexPhp',         $std_opt, $sefConfig->fixIndexPhp);
        $lists['fixQuestionMark']   = JHTML::_('select.booleanlist', 'fixQuestionMark',     $std_opt, $sefConfig->fixQuestionMark);
        $lists['fixDocumentFormat'] = JHTML::_('select.booleanlist', 'fixDocumentFormat',   $std_opt, $sefConfig->fixDocumentFormat);
        $lists['autolock_urls']= JHTML::_('select.booleanlist', 'autolock_urls',   $std_opt, $sefConfig->autolock_urls);
        $lists['indexPhpCurrentMenu']   = JHTML::_('select.booleanlist', 'indexPhpCurrentMenu',         $std_opt, $sefConfig->indexPhpCurrentMenu);
        $lists['spaceTolerant']         = JHTML::_('select.booleanlist', 'spaceTolerant',           $std_opt, $sefConfig->spaceTolerant);
        $lists['nonSefQueryVariables']  = JHTML::_('select.booleanlist', 'nonSefQueryVariables',    $std_opt, $sefConfig->nonSefQueryVariables);
        $lists['cacheSize']         = '<input type="text" name="cacheSize" size="10" class="inputbox" value="'.$sefConfig->cacheSize.'" />';
        $lists['cacheMinHits']      = '<input type="text" name="cacheMinHits" size="10" class="inputbox" value="'.$sefConfig->cacheMinHits.'" />';
        $lists['junkWords']         = '<input type="text" name="junkWords" size="60" class="inputbox" value="'.$sefConfig->junkWords.'" />';
        $lists['junkExclude']       = '<input type="text" name="junkExclude" size="60" class="inputbox" value="'.$sefConfig->junkExclude.'" />';
        
        $lists['tag_generator']     = '<input type="text" name="tag_generator" size="60" class="inputbox" value="'.$sefConfig->tag_generator.'" />';
        $lists['tag_googlekey']     = '<input type="text" name="tag_googlekey" size="60" class="inputbox" value="'.$sefConfig->tag_googlekey.'" />';
        $lists['tag_livekey']       = '<input type="text" name="tag_livekey" size="60" class="inputbox" value="'.$sefConfig->tag_livekey.'" />';
        $lists['tag_yahookey']      = '<input type="text" name="tag_yahookey" size="60" class="inputbox" value="'.$sefConfig->tag_yahookey.'" />';

        $lists['artioUserName']     = '<input type="text" name="artioUserName" size="60" class="inputbox" value="'.$sefConfig->artioUserName.'" />';
        $lists['artioPassword']     = '<input type="password" name="artioPassword" size="60" class="inputbox" value="'.$sefConfig->artioPassword.'" />';
        $lists['artioDownloadId']   = '<input type="text" name="artioDownloadId" size="60" class="inputbox" value="'.$sefConfig->artioDownloadId.'" />';

        $lists['logErrors']         = JHTML::_('select.booleanlist', 'logErrors', $std_opt, $sefConfig->logErrors);
        $lists['trace']             = JHTML::_('select.booleanlist', 'trace', $std_opt, $sefConfig->trace);
        $lists['traceLevel']        = '<input type="text" name="traceLevel" size="2" class="inputbox" value="'.$sefConfig->traceLevel.'" />';
        
        $useSitenameOpts[] = JHTML::_('select.option', _COM_SEF_SITENAME_BEFORE,    JText::_('Yes - before page title'));
        $useSitenameOpts[] = JHTML::_('select.option', _COM_SEF_SITENAME_AFTER,     JText::_('Yes - after page title'));
        $useSitenameOpts[] = JHTML::_('select.option', _COM_SEF_SITENAME_NO,        JText::_('No'));
        $lists['use_sitename']  = JHTML::_('select.genericlist', $useSitenameOpts, 'use_sitename', 'class="inputbox" size="1"', 'value', 'text', $sefConfig->use_sitename);
        
        // metadata
        $lists['enable_metadata'] = JHTML::_('select.booleanlist', 'enable_metadata',    $std_opt, $sefConfig->enable_metadata);
        
        $metadataGenerateOpts[] = JHTML::_('select.option', _COM_SEF_META_GEN_EMPTY,    JText::_('Only if original empty'));
        $metadataGenerateOpts[] = JHTML::_('select.option', _COM_SEF_META_GEN_ALWAYS,   JText::_('Always'));
        $metadataGenerateOpts[] = JHTML::_('select.option', _COM_SEF_META_GEN_NEVER,    JText::_('Never'));
        $lists['metadata_auto']  = JHTML::_('select.genericlist', $metadataGenerateOpts, 'metadata_auto', 'class="inputbox" size="1"', 'value', 'text', $sefConfig->metadata_auto);        
        
        $metadataPriorityOpts[] = JHTML::_('select.option', _COM_SEF_META_PR_ORIGINAL,   JText::_('Prefer original'));
        $metadataPriorityOpts[] = JHTML::_('select.option', _COM_SEF_META_PR_JOOMSEF,    JText::_('Prefer JoomSEF'));
        $metadataPriorityOpts[] = JHTML::_('select.option', _COM_SEF_META_PR_JOIN,       JText::_('Join both'));
        $lists['rewrite_keywords']  = JHTML::_('select.genericlist', $metadataPriorityOpts, 'rewrite_keywords', 'class="inputbox" size="1"', 'value', 'text', $sefConfig->rewrite_keywords);
        $lists['rewrite_description']  = JHTML::_('select.genericlist', $metadataPriorityOpts, 'rewrite_description', 'class="inputbox" size="1"', 'value', 'text', $sefConfig->rewrite_description);
        
        $lists['prefer_joomsef_title']  = JHTML::_('select.booleanlist', 'prefer_joomsef_title',    $std_opt, $sefConfig->prefer_joomsef_title);
        $lists['sitename_sep']          = '<input type="text" name="sitename_sep" size="10" class="inputbox" value="'.$sefConfig->sitename_sep.'" />';
        //$lists['rewrite_keywords']      = JHTML::_('select.booleanlist', 'rewrite_keywords',    $std_opt, $sefConfig->rewrite_keywords);
        //$lists['rewrite_description']   = JHTML::_('select.booleanlist', 'rewrite_description',    $std_opt, $sefConfig->rewrite_description);
        $lists['prevent_dupl']          = JHTML::_('select.booleanlist', 'prevent_dupl',    $std_opt, $sefConfig->prevent_dupl);
        

        $aliases[] = JHTML::_('select.option', '0', JText::_('Full Title'));
        $aliases[] = JHTML::_('select.option', '1', JText::_('Title Alias'));
        $lists['useAlias'] = JHTML::_('select.radiolist', $aliases, 'useAlias', $std_opt, 'value', 'text', $sefConfig->useAlias);

        // get a list of the static content items for 404 page
        $query = "SELECT id, title"
        ."\n FROM #__content"
        ."\n WHERE sectionid = 0 AND title != '404'"
        ."\n AND catid = 0"
        ."\n ORDER BY ordering"
        ;

        $db->setQuery( $query );
        $items = $db->loadObjectList();

        $options = array();
        $options[] = JHTML::_('select.option', _COM_SEF_404_DEFAULT, '('.JText::_('Custom 404 Page').')');
        $options[] = JHTML::_('select.option', _COM_SEF_404_FRONTPAGE, '('.JText::_('Front Page').')');
        $options[] = JHTML::_('select.option', _COM_SEF_404_JOOMLA, '('.JText::_('Joomla! Error Page').')');

        // assemble menu items to the array
        foreach ( $items as $item ) {
            $options[] = JHTML::_('select.option', $item->id, $item->title);
        }

        $lists['page404'] = JHTML::_('select.genericlist', $options, 'page404', 'class="inputbox" size="1"', 'value', 'text', $sefConfig->page404 );

        // Get the menu selection list
        $selections = JHTML::_('menu.linkoptions');
        $lists['itemid404'] = JHTML::_('select.genericlist', $selections, 'itemid404', 'class="inputbox" size="15"', 'value', 'text', $sefConfig->itemid404 );
        
        $sql="SELECT `id`, `introtext` FROM `#__content` WHERE `title` = '404'";
        $row = null;
        $db->setQuery($sql);
        $row = $db->loadObject();

        $lists['txt404'] = isset($row->introtext) ? $row->introtext : JText::_('ERROR_DEFAULT_404');
        $lists['txt404'] = htmlspecialchars($lists['txt404']);

        // Statistics
        $lists["google_email"]=$sefConfig->google_email;
        $lists["google_password"]=$sefConfig->google_password;
        $lists["google_id"]=$sefConfig->google_id;
        $lists["google_apikey"]=$sefConfig->google_apikey;
        $lists["google_enable"]=JHTML::_('select.booleanlist', 'google_enable', $std_opt, $sefConfig->google_enable);
        $lists["google_exclude_ip"]=$sefConfig->google_exclude_ip;
        
        // Exclude access level
        $acl =& JFactory::getACL();
        $gtree = $acl->get_group_children_tree( null, 'USERS', false );
        $lists["google_exclude_level"] = JHTML::_('select.genericlist', $gtree, 'google_exclude_level[]', 'class="inputbox" size="10" multiple="multiple"', 'value', 'text', $sefConfig->google_exclude_level);
        
        $lists['subdomains_menus'] = JHTML::_('select.genericlist', $selections, 'subdomain_Itemid[][]', 'class="inputbox" size="10" multiple="multiple"');
        $lists['subdomains_titles'] = JHTML::_('select.genericlist', $selections, 'subdomain_titlepage[]', 'class="inputbox" size="1"');
        $lists['subdomains_remove'] = '<input class="button" type="button" onclick="remove_subdomain(this);" value="'.Jtext::_('COM_SEF_REMOVE_SUBDOMAIN').'" />';
        
        $this->_lists = $lists;

        return $this->_lists;
    }

    function getSubDomains() {
    	$menu = JHTML::_('menu.linkoptions');
    	
    	$query = "SELECT * FROM #__sef_subdomains WHERE `option`=".$this->_db->quote('').' ORDER BY `subdomain`';
    	$this->_db->setQuery($query);
    	$subdomains_o = $this->_db->loadObjectList();
    	
    	for ($i = 0; $i < count($subdomains_o); $i++) {
    		$subdomains_o[$i]->Itemid = JHTML::_('select.genericlist', $menu, 'subdomain_Itemid['.$i.'][]', 'class="inputbox" size="10" multiple="multiple"', 'value', 'text', explode(',',$subdomains_o[$i]->Itemid));
    		$subdomains_o[$i]->Itemid_titlepage = JHTML::_('select.genericlist', $menu, 'subdomain_titlepage['.$i.']', 'class="inputbox" size="1"', 'value', 'text', $subdomains_o[$i]->Itemid_titlepage);
    	}
   		return $subdomains_o;
    }
    
    /**
	 * Method to store a record
	 *
	 * @access	public
	 * @return	boolean	True on success
	 */
    function store()
    {
        $db =& JFactory::getDBO();
        $sefConfig =& SEFConfig::getConfig();
        $sef_config_file = JPATH_COMPONENT . DS . 'configuration.php';
        
        // Get post variables through Joomla to support magic_quotes_gpc correctly
        $post = JRequest::get('POST', JREQUEST_NOTRIM | JREQUEST_ALLOWRAW);
        
        // Unset the empty meta tags
        if (isset($post['metanames']) && is_array($post['metanames'])) {
            for ($i = 0, $n = count($post['metanames']); $i < $n; $i++) {
                if (empty($post['metanames'][$i])) {
                    unset($post['metanames'][$i]);
                    if (isset($post['metacontents'][$i])) {
                        unset($post['metacontents'][$i]);
                    }
                }
            }
            
            // Create the associative array of custom meta tags
            $post['customMetaTags'] = array_combine($post['metanames'], $post['metacontents']);
        }
        else {
            // No meta tags
            $post['customMetaTags'] = array();
        }
        
        // Parse the sitemap ping services
        if (isset($post['sitemap_services']) && !empty($post['sitemap_services'])) {
            $services = str_replace("\r", '', $post['sitemap_services']);
            $services = array_map('trim', explode("\n", $services));
            $post['sitemap_services'] = $services;
        }
        else {
            $post['sitemap_services'] = array();
        }
        
        // Check empty google_exclude_level
        if (!isset($post['google_exclude_level'])) {
            $post['google_exclude_level'] = array();
        }
		
        // Set values
        foreach($post as $key => $value) {
            $sefConfig->set($key, $value);
        }

        // 404
        $sql = 'SELECT * FROM #__content WHERE `title` = "404"';
        $db->setQuery( $sql );
        $article = $db->loadObject();

        $introtext = $post['introtext'];
        if (!is_null($article)){
            $state = '';
            if ($article->state != 1) {
                $state = ", state = '1'";
            }
            $sql = 'UPDATE #__content SET introtext='.$db->quote($introtext).',  modified='.$db->quote(date("Y-m-d H:i:s")).$state.' WHERE `id` = '.$db->quote($article->id).';';
        }
        else {
            $sql='SELECT MAX(id)  FROM #__content';
            $db->setQuery($sql);
            if ($max = $db->loadResult()) {
                $max++;
                $sql = 'INSERT INTO #__content (id, title, alias, introtext, `fulltext`, state, sectionid, mask, catid, created, created_by, created_by_alias, modified, modified_by, checked_out, checked_out_time, publish_up, publish_down, images, urls, attribs, version, parentid, ordering, metakey, metadesc, access, hits) '.
                'VALUES( "'.$max.'", "404", "404", '.$db->quote($introtext).', "", "1", "0", "0", "0", "2004-11-11 12:44:38", "62", "", '.$db->quote(date("Y-m-d H:i:s")).', "0", "62", "2004-11-11 12:45:09", "2004-10-17 00:00:00", "0000-00-00 00:00:00", "", "", "menu_image=-1\nitem_title=0\npageclass_sfx=\nback_button=\nrating=0\nauthor=0\ncreatedate=0\nmodifydate=0\npdf=0\nprint=0\nemail=0", "1", "0", "0", "", "", "0", "750");';
            }
        }

        $db->setQuery( $sql );
        if (!$db->query()) {
            echo "<script> alert('".addslashes($db->getErrorMsg())."'); window.history.go(-1); </script>\n";
            exit();
        }

        // Check the domains configuration
        if( count($sefConfig->jfSubDomains) ) {
            foreach($sefConfig->jfSubDomains as $code => $domain) {
                $domain = str_replace(array('http://', 'https://'), '', $domain);
                $domain = preg_replace('#/.*$#', '', $domain);
                $sefConfig->jfSubDomains[$code] = $domain;
            }
        }

        // Remove current subdomains
        $query = "DELETE FROM `#__sef_subdomains` WHERE `option` = ".$this->_db->quote('');
        $this->_db->setQuery($query);
        if (!$this->_db->query()) {
    		$this->setError($db->stderr(true));
    		return false;
    	}
        
        // Store new subdomains configuration
        $subdomain_titles=JRequest::getVar('subdomain_title',array(),'post','array');
        $subdomain_Itemids=JRequest::getVar('subdomain_Itemid',array(),'post','array');
        $subdomain_titlepage=JRequest::getVar('subdomain_titlepage',array(),'post','array');
        $keys = array_keys($subdomain_titles);
        foreach ($keys as $i) {
        	if(strlen($subdomain_titles[$i])==0) {
        		continue;
        	}
            $Itemids = array();
            if (isset($subdomain_Itemids[$i])) {
                $Itemids = $subdomain_Itemids[$i];
            }
        	$query="INSERT INTO `#__sef_subdomains` SET `subdomain`=".$this->_db->quote($subdomain_titles[$i]).", `Itemid`=".$this->_db->quote(implode(",",$Itemids)).", `Itemid_titlepage`=".$this->_db->quote($subdomain_titlepage[$i]);
        	$this->_db->setQuery($query);
        	if(!$this->_db->query()) {
        		$this->setError($db->stderr(true));
        		return false;
        	}
        }
        
        $config_written = $sefConfig->saveConfig(0);

        if( $config_written != 0 ) {
            return true;
        } else {
            return false;
        }
    }

}
?>
