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

// Security check to ensure this file is being included by a parent file.
defined('_JEXEC') or die('Restricted access');

JLoader::register('SEFConfig', JPATH_ADMINISTRATOR.DS.'components'.DS.'com_sef'.DS.'classes'.DS.'config.php');
JLoader::register('SEFTools', JPATH_ADMINISTRATOR.DS.'components'.DS.'com_sef'.DS.'classes'.DS.'seftools.php');

class plgSystemJoomsef extends JPlugin
{
    var $linksDivs = array();

    function plgSystemJoomsef( &$subject )
    {
        parent::__construct($subject);

        // load plugin parameters
        $this->_plugin = & JPluginHelper::getPlugin('system', 'joomsef');
        $this->_params = new JParameter($this->_plugin->params);

        $mainframe =& JFactory::getApplication();
        
        // Do not run plugin in administration area
        if ($mainframe->isAdmin()) return;

        // Do not run plugin if SEF is disabled
        $config =& JFactory::getConfig();
        if (!$config->getValue('sef')) return;

        // check if joomsef is enabled
        $sefConfig =& SEFConfig::getConfig();

        if ($sefConfig->enabled) {
            require_once( JPATH_ROOT.DS.'components'.DS.'com_sef'.DS.'sef.router.php' );
            
            $router =& $mainframe->getRouter();

            // Store the router for later use
            JoomSEF::set('sef.global.jrouter', $router);

            $router = new JRouterJoomsef();
            
            // Load custom files only if there's at least one subdomain configured
            $subdomains = SEFTools::getAllSubdomains();
            if (count($subdomains) > 0) {
                JLoader::register('JRoute',JPATH_SITE.DS.'components'.DS.'com_sef'.DS.'helpers'.DS.'methods.php',true);
                JLoader::register('JText',JPATH_SITE.DS.'components'.DS.'com_sef'.DS.'helpers'.DS.'methods.php',true);
            }
        }
    }

    function onAfterInitialise()
    {
        $mainframe =& JFactory::getApplication();

        // Do not run plugin in administration area
        if ($mainframe->isAdmin()) return true;

        // Do not run plugin if SEF is disabled
        $config =& JFactory::getConfig();
        if (!$config->getValue('sef')) return true;

        // check if joomsef is enabled
        $sefConfig =& SEFConfig::getConfig();

        if ($sefConfig->enabled) {
            // Redirect only when there's no POST variables
            if (($sefConfig->wwwHandling != _COM_SEF_WWW_NONE) && empty($_POST)) {
                // Handle www and non-www domain
                $uri  =& JURI::getInstance();
                $host =& $uri->getHost();
                $redirect = false;

                if ($sefConfig->wwwHandling == _COM_SEF_WWW_USE_WWW && strpos($host, 'www.') !== 0) {
                    // host must begin with www.
                    $redirect = true;
                    $uri->setHost('www.'.$host);
                }
                else if ($sefConfig->wwwHandling == _COM_SEF_WWW_USE_NONWWW && strpos($host, 'www.') === 0) {
                    // host must not begin with www.
                    $redirect = true;
                    $uri->setHost(substr($host, 4));
                }

                // Redirect if needed
                if ($redirect) {
                    $url = $uri->toString();
                    header('Location: ' . $url, true, 301);
                    jexit();
                }
            }
        }
        
        return true;
    }

    
    function onAfterDispatch()
    {
        $mainframe =& JFactory::getApplication();

        // do not run plugin in administration area
        if ($mainframe->isAdmin()) return true;

        // check if SEF and plugin are enabled
        if (!class_exists('JoomSEF') || !JoomSEF::enabled($this)) return true;

        // check page base href value
        $this->_checkBaseHref();

        // do not run if metadata generation is disabled
        $sefConfig =& SEFConfig::getConfig();
        if ($sefConfig->enable_metadata > 0) {
            // generate page title
            $this->_checkSEFTitle();

            // generate page metadata
            $this->_generateMeta();
        }
        
        
        return true;
    }
    
    function onAfterRender()
    {
        $mainframe =& JFactory::getApplication();

        // Do not run plugin in administration area
        if ($mainframe->isAdmin()) return;

        // Check if SEF and plugin are enabled
        if (!class_exists('JoomSEF') || !JoomSEF::enabled($this)) return;

        // Change the index.php links to /
        $sefConfig =& SEFConfig::getConfig();
        if ($sefConfig->fixIndexPhp) {
            $this->_fixIndexLinks();
        }

        // Fix links with missing question mark (ie. VM issue)
        if ($sefConfig->fixQuestionMark) {
            $this->_fixQuestionMark();
        }
    }
    
    /**
     * Generate metadata
     */
    function _generateMeta()
    {
        $mainframe = &JFactory::getApplication();

        $document = &JFactory::getDocument();
        $sefConfig = &SEFConfig::getConfig();

        $rewriteKey  = $sefConfig->rewrite_keywords;
        $rewriteDesc = $sefConfig->rewrite_description;

        $metadesc       = htmlspecialchars(JoomSEF::get('sef.meta.desc'));
        $metakey        = htmlspecialchars(JoomSEF::get('sef.meta.key'));
        $metalang       = htmlspecialchars(JoomSEF::get('sef.meta.lang'));
        $metarobots     = htmlspecialchars(JoomSEF::get('sef.meta.robots'));
        $metagoogle     = htmlspecialchars(JoomSEF::get('sef.meta.google'));
        $canonicallink  = htmlspecialchars(JoomSEF::get('sef.link.canonical'));
        $metacustom     = JoomSEF::get('sef.meta.custom');
        $generator      = htmlspecialchars($sefConfig->tag_generator);
        $googlekey      = htmlspecialchars($sefConfig->tag_googlekey);
        $livekey        = htmlspecialchars($sefConfig->tag_livekey);
        $yahookey       = htmlspecialchars($sefConfig->tag_yahookey);

        // global custom meta tags
        if (is_array($sefConfig->customMetaTags)) {
            foreach($sefConfig->customMetaTags as $name => $content) {
                $content = htmlspecialchars($content);
                $document->setMetaData($name, $content);
            }
        }
        
        // description metatag
        if (!empty($metadesc)) {
            // get original description
            $oldDesc = $document->getDescription();

            // override by JoomSEF desc
            if ($rewriteDesc == _COM_SEF_META_PR_JOOMSEF
                || $oldDesc == '') {
                $document->setDescription($metadesc);
            // or join both
            } elseif ($rewriteDesc == _COM_SEF_META_PR_JOIN && $oldDesc != '') {
                $document->setDescription($metadesc . ', ' . $oldDesc);
            }
            // otherwise leave intact
        }

        // keywords metatag
        if (!empty($metakey)) {
            // get original keywords
            $oldKey = $document->getMetaData('keywords');

            // override by JoomSEF desc
            if ($rewriteKey == _COM_SEF_META_PR_JOOMSEF
                || $oldKey == '') {
                $document->setMetaData('keywords', $metakey);
            // or join both
            } elseif ($rewriteKey == _COM_SEF_META_PR_JOIN && $oldKey != '') {
                $document->setMetaData('keywords', $metakey . ', ' . $oldKey);
            }
            // otherwise leave intact
        }

        if (!empty($metalang))   $document->setMetaData('lang', $metalang);
        if (!empty($metarobots)) $document->setMetaData('robots', $metarobots);
        if (!empty($metagoogle)) $document->setMetaData('google', $metagoogle);
        if (!empty($generator))  $document->setGenerator($generator);
        if (!empty($googlekey))  $document->setMetaData('google-site-verification', $googlekey);
        if (!empty($livekey))    $document->setMetaData('msvalidate.01', $livekey);
        if (!empty($yahookey))   $document->setMetaData('y_key', $yahookey);

        // URL custom meta tags
        if (is_array($metacustom)) {
            foreach($metacustom as $name => $content) {
                $content = htmlspecialchars($content);
                $document->setMetaData($name, $content);
            }
        }

        if (method_exists($document, 'addHeadLink')) {
            if (!empty($canonicallink)) $document->addHeadLink($canonicallink, 'canonical');
        }
    }

    /**
     * Check page title.
     */
    function _checkSEFTitle()
    {
        $mainframe =& JFactory::getApplication();

        $document = &JFactory::getDocument();
        $config = &JFactory::getConfig();
        $sefConfig =& SEFConfig::getConfig();

        $sitename     = $config->getValue('sitename');
        $useMetaTitle = $config->getValue('MetaTitle');
        $preferTitle = $sefConfig->prefer_joomsef_title;
        $sitenameSep = ' '.trim($sefConfig->sitename_sep).' ';
        $preventDupl = $sefConfig->prevent_dupl;

        $useSitename = JoomSEF::get('sef.meta.showsitename', _COM_SEF_SITENAME_GLOBAL);
        if ($useSitename == _COM_SEF_SITENAME_GLOBAL) {
            $useSitename = $sefConfig->use_sitename;
        }
        
        if ($sitenameSep == '  ') $sitenameSep = ' ';

        // Page title
        $pageTitle = JoomSEF::get('sef.meta.title');

        if (empty($pageTitle)) {
            $pageTitle = $document->getTitle();

            // Dave: replaced regular expression as it was causing problems
            //       with site names like [ index-i.cz ] with str_replace
            // Dave: 3.2.9 fix - added check for !empty($sitename) - was causing
            //       problems with empty site names

            /*$pageSep = '( - |'.$sitenameSep.')';
            if (preg_match('/('.$GLOBALS['mosConfig_sitename'].$pageSep.')?(.*)?/', $pageTitle, $matches) > 0) {
            $pageTitle = strtr($pageTitle, array($matches[1] => ''));
            }*/
            if (!empty($sitename)) {
                $pageTitle = str_replace(array($sitename.' - ', ' - '.$sitename, $sitename.$sitenameSep, $sitenameSep.$sitename), '', $pageTitle);
            }
        }

        if ($preferTitle) {
            $pageTitle = trim($pageTitle);

            // Prevent name duplicity if set to
            if ($preventDupl && strcmp($pageTitle, trim($sitename)) == 0) {
                $pageTitle = '';
            }

            if (empty($pageTitle)) $sitenameSep = '';

            if ($useSitename == _COM_SEF_SITENAME_BEFORE && $sitename) {
                $pageTitle = $sitename . $sitenameSep . $pageTitle;
            }
            elseif ($useSitename == _COM_SEF_SITENAME_AFTER && $sitename) {
                $pageTitle .= $sitenameSep . $sitename;
            }

            $pageTitle = htmlspecialchars_decode($pageTitle);
            $pageTitleEscaped = htmlspecialchars($pageTitle);
            
            // set page title and (optionally) meta title tag
            if ($pageTitle) {
                // Joomla escapes the title automatically
                $document->setTitle($pageTitle);

                // set title meta tag (if enabled in global Joomla config)
                if ($useMetaTitle) {
                    // but we need to use escaped string for meta data
                    $document->setMetaData('title', $pageTitleEscaped);
                }
            }
        }
    }

    function _checkBaseHref()
    {
        $sefConfig =& SEFConfig::getConfig();

        $checkBaseHref = $sefConfig->check_base_href;

        // now we can set base href
        $document =& JFactory::getDocument();
        if ($checkBaseHref == _COM_SEF_BASE_HOMEPAGE) {
            $uri =& JURI::getInstance();
            $curUri = clone($uri);
            $domain = JoomSEF::get('real_domain');
            if ($domain) {
                $curUri->setHost($domain);
            }
            $document->setBase($curUri->toString(array('scheme', 'host', 'port')).JURI::base(true));
        }
        elseif ($checkBaseHref == _COM_SEF_BASE_CURRENT) {
            $uri =& JURI::getInstance();
            $curUri = clone($uri);
            $domain = JoomSEF::get('real_domain');
            if ($domain) {
                $curUri->setHost($domain);
            }
            $document->setBase($curUri->toString(array('scheme', 'host', 'port', 'path')));
        }
        elseif ($checkBaseHref == _COM_SEF_BASE_NONE) {
            $document->setBase('');
        }
        else return;
    }

    
    function _fixIndexLinks()
    {
        // Check the document type
        $document =& JFactory::getDocument();
        if ($document->getType() != 'html') {
            return;
        }
        
        // Get the response body
        $body = JResponse::getBody();
        
        // Get the root URL
        $url = JURI::root();
        if (substr($url, -1) != '/') {
            $url .= '/';
        }
        
        // Replace the index.php links in "<a href" and "<form action"
        $body = preg_replace('|<a(\\s[^>]*)href="/?index\\.php"|', '<a$1href="'.$url.'"', $body);
        $body = preg_replace('|<a(\\s[^>]*)href="'.$url.'index\\.php"|', '<a$1href="'.$url.'"', $body);
        $body = preg_replace('|<form(\\s[^>]*)action="/?index\\.php"|', '<form$1action="'.$url.'"', $body);
        $body = preg_replace('|<form(\\s[^>]*)action="'.$url.'index\\.php"|', '<form$1action="'.$url.'"', $body);
        
        // Set new response body
        JResponse::setBody($body);
    }

    function _fixQuestionMark()
    {
        // Check the document type
        $document =& JFactory::getDocument();
        if ($document->getType() != 'html') {
            return;
        }
        
        // Get the response body
        $body = JResponse::getBody();
        
        // Replace links
        $body = preg_replace('/<a(\\s[^>]*)href=([\'"])([^?"\'&]*)(&amp;|&)([^?"\']+=[^?"\']*)([\'"])/', '<a$1href=$2$3?$5$6', $body);
        $body = preg_replace('/<form(\\s[^>]*)action=([\'"])([^?"\'&]*)(&amp;|&)([^?"\']+=[^?"\']*)([\'"])/', '<form$1action=$2$3?$5$6', $body);

        // Set new response body
        JResponse::setBody($body);
    }

}
?>