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
 
defined('_JEXEC') or die('Restricted access');

jimport('joomla.plugin.plugin');
require_once JPATH_SITE.DS.'components'.DS.'com_sef'.DS.'joomsef.php';
require_once JPATH_ADMINISTRATOR.DS.'components'.DS.'com_sef'.DS.'classes'.DS.'config.php';
require_once JPATH_ADMINISTRATOR.DS.'components'.DS.'com_sef'.DS.'helpers'.DS.'ipaddress.php';

class plgSystemJoomSEFGoogle extends JPlugin {
	function __construct(&$subject,$config) {
		parent::__construct($subject,$config);
	}
	
	function onAfterDispatch() {	
		if(JFactory::getApplication()->isAdmin()) {
			return;
		}
		if(JFactory::getApplication()->getCfg('sef')==0) {
			return;
		}
		if(JFactory::getURI()->getVar('tmpl')=='component') {
			return;
		}
		
		$config=SEFConfig::getConfig();
        if (!$config->enabled) {
            return;
        }
		if($config->google_enable==0) {
			return;
		}
		
		if(JRequest::getInt('google_analytics_exclude',0,'cookie')==1) {
			return;
		}
		
		$ips_exclude=explode("\r\n",$config->google_exclude_ip);
		if(in_array(IPAddressHelper::getip(),$ips_exclude)) {
			return;
		}
		
        $user = JFactory::getUser();
		if (in_array($user->gid, $config->google_exclude_level)) {
			return;
		}
		
		JFactory::getDocument()->addScriptDeclaration(" var _gaq = _gaq || [];
  _gaq.push(['_setAccount', '".$config->google_id."']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
");
		
	}
}
?>