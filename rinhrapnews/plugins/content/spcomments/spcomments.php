<?php
/**
* @package   SP Comments - Three in One comments plugin for Joomla by JoomShaper.com
* @author    JoomShaper http://www.joomshaper.com
* @copyright Copyright (C) 2010 - 2013 JoomShaper
* @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2
*/

// no direct access
defined('_JEXEC') or die('Restricted Access');

jimport('joomla.plugin.plugin');

class plgContentSPComments extends JPlugin
{	
	var $_path;
	var $_url;
	var $_postID;
	
	function plgContentSPComments(&$subject, $config)
    {
        parent::__construct($subject, $config);
		$this->plugin = JPluginHelper::getPlugin('content', 'spcomments');
		JPlugin::loadLanguage('plg_content_spcomments', JPATH_PLUGINS);		
    }
	
	// function to work when preparing the content on the detail page
	function onContentPrepare($context, &$article, &$params, $page = 0)
	{	
		$mainframe = JFactory::getApplication();
		if ($mainframe->isAdmin()) {
			return '';
		}	

		if ($this->isArticlePage())
			$this->getSPCommentsContent($context, $article, $params, $page, $text = 'text');
	}
	
	// function to work when preparing the content on frontpage or listing pages
	function onContentBeforeDisplay($context, &$article, &$params, $page=0)
	{
		$mainframe = JFactory::getApplication();
		if ($mainframe->isAdmin()) {
			return '';
		}	

		if (!$this->isArticlePage())
			$this->getSPCommentsContent($context, $article, $params, $page, $text = (JRequest::getCmd('option') == 'com_k2') ? 'text' : 'introtext');
			
	}
	
	// k2 specific
	function onK2BeforeDisplay( & $item, & $params, $page=0) {
		$mainframe = JFactory::getApplication();
		if ($mainframe->isAdmin()) {
			return '';
		}
		
		if (!$this->isArticlePage())
			$this->getSPCommentsContent('', $item, $params, $page, $text = 'introtext');
	}		
	
	function getSPCommentsContent($context, &$article, &$params, $page, $text = 'text')
	{
		global $option;

		if (!isset($article->catid)) {
			$article->catid = 0;
		}

		$option = JRequest::getCmd('option');
				
		$commentingEngine = $this->params->get('commenting_engine');
		
		//Joomla Category
		$categories = array();
		$cats = $this->params->get('catids');
		
		if (is_array($cats)) {
			$categories = $cats;
		} else {
			$categories[] = $cats;
		}
		
		//K2 category
		$k2categories 		= array();
		$k2cats 			= $this->params->get('k2catids');
		
		if (is_array($k2cats)) {
			$k2categories 	= $k2cats;
		} else {
			$k2categories[] = $k2cats;
		}		

		// enable commenting if everything is alright
		if 	((preg_match("{spcomments on}", $article->$text) || 
			(in_array($article->catid, $categories) && !$this->isEmptyArr($categories)) || 
			(in_array($article->catid, $k2categories) && !$this->isEmptyArr($k2categories))) && 
			!preg_match("{spcomments off}", $article->$text)) {
			
			if ($option == 'com_content') {
				$this->_path 	= ContentHelperRoute::getArticleRoute($article->id.':'.$article->alias, $article->catid.':'.$article->category_alias);
			} elseif($option == "com_k2") {
				$this->_path = K2HelperRoute::getItemRoute($article->id.':'.urlencode($article->alias), $article->catid.':'.urlencode($article->category->alias));
			} 
			
			/*Article Link*/
			$url 			= JURI::base();
			$url 			= new JURI($url);
			$root 			= $url->getScheme() . '://' . $url->getHost();
			$link 			= JRoute::_($this->_path);
			$this->_url 	= $root . $link;
			$this->_postID	= md5($this->_url);
			/*End Article Link*/
			
			if ($this->isArticlePage()) {
				if ($commentingEngine == 'disqus') {
					$output = $this->loadLayout('disqus');
					$article->$text .= $output;
				} elseif ($commentingEngine == 'facebook') {
					$doc = JFactory::getDocument();
					$doc->addCustomTag('<meta property="fb:app_id" content="'.$this->params->get('fb_appID').'"/>');
					
					$output = $this->loadLayout('facebook');
					$article->$text .= $output;
				} else {
					$output = $this->loadLayout('intensedebate');
					$article->$text .= $output;
				}
			} else {
				$commentsCount = $this->params->get('comments_count');

				if ($commentsCount) {
				
					if ($commentingEngine == 'disqus') {
						$output = '<a class="spcomments" href="'.$this->_url.'#disqus_thread" data-disqus-identifier="'.$this->_postID.'"></a>';
						$article->$text .= $output;

					} elseif ($commentingEngine == 'facebook') {
						$output = $this->loadLayout('facebook_counts');
						$article->$text .= $output;
					} else {
						$output = $this->loadLayout('intensedebate_count');
						$article->$text .= $output;
					}
				}
			}
			
			//Add stylesheet		
			$doc 		= Jfactory::getDocument();
			$cssPath 	= JURI::root(true).'/plugins/content/spcomments/assets/css/style.css';
			$doc->addStyleSheet($cssPath);			
		}
		
		// removing the {spcomments on/off} tag
		if (preg_match("{spcomments on}", $article->$text)) {
			$article->$text = str_replace("{spcomments on}", " ", $article->$text);
		} elseif (preg_match("{spcomments off}", $article->$text)) {
			$article->$text = str_replace("{spcomments off}", " ", $article->$text);
		}
	}
	
	// after preparing the <body> tag set the disqus comments count JS script
	function onAfterRender() 
	{
		$commentsCount 		= $this->params->get('comments_count');
		$commentingEngine 	= $this->params->get('commenting_engine');
		$body 				= JResponse::getBody();
		$option 			= JRequest::getVar('option');
		$view 				= JRequest::getVar('view');	
		if (($option == 'com_content' && ($view == "category" || $view == "featured")) || ($option == 'com_k2' && $view == "itemlist")) {
			
			if ($commentingEngine == 'disqus') {
				if ($commentsCount) {
					$body 	= str_replace('</body>', $this->loadLayout('disqus_count')."\n</body>", $body);
				}
			} elseif ($commentingEngine == 'facebook') {
				if (!$this->isArticlePage()) {
					$body 	= str_replace('</head>', '<script src="http://connect.facebook.net/'. $this->params->get('fb_lang','en_US') .'/all.js#xfbml=1"></script>'."\n</head>", $body);
				}
			}
			
		}
		
		JResponse::setBody($body);
	}
	
	// load comment type layout
	function loadLayout($tpl)
	{
		$path = JPATH_BASE.'/plugins/content/spcomments/layout/'.$tpl.'.php';
		if(file_exists($path)) {
			ob_start();
			include $path;
			$return = ob_get_contents();
			ob_end_clean();
			return $return;
		}
	}
	
	// Check Empty Array
	function isEmptyArr($arr = array())
	{
		if(!empty($arr))
		{
			$count = count($arr);
			$check = 0;
			foreach($arr as $id=>$item)
			{
				if(empty($item)) $check++;
			}
			if($check != $count) return false;
		}
		return true;
	}		
	
	// detect whether the current state is a detail page
	function isArticlePage()
	{
		$option 	 = JRequest::getVar('option');
		$view 		 = JRequest::getVar('view');
		if (($option == 'com_content' && $view == 'article'/*Joomla Specific*/) || ($option == 'com_k2' && $view == 'item'/*K2 Specific*/)) {
			return true;
		} 
		return false;
	}
}