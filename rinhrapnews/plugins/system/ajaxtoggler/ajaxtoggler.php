<?php
/**
 * @package		AJAX Toggler
 * @copyright	Copyright (C) 2009 - 2011 Blogomunity.com. All rights reserved.
 * @license		GNU/GPL, see LICENSE.txt
 */

defined('_JEXEC') or die;

if (JFactory::getApplication()->isAdmin() && !JRequest::getInt('nojatoggler')) {

	jimport('joomla.plugin.plugin');
	
	class plgSystemAjaxtoggler extends JPlugin {
		private $active 	= false;
		private $messages 	= null;
	
		public function __construct(&$subject, $config) {
			parent::__construct($subject, $config);
			
			if ($this->params->get('exclude') && in_array(JRequest::getCmd('option'), $this->params->get('exclude'))) {
				return;
			}
	
			$this->active = true;
			
			if (JRequest::getBool('jatoggler')) {
				$session = JFactory::getSession();
				$session->set('jatoggler', 1);
				
				// we should normal redirect in $app->redirect, else we fail with stupied IE, spent 4!!!!! hours finding this issue
				jimport('joomla.environment.browser');
				$navigator = JBrowser::getInstance();
				if ($navigator->isBrowser('msie')) {
					$navigator->setBrowser('chrome');
				}
			}
		}
	
		public function onAfterRoute() {
			if (!$this->active) {
				return;
			}
			
			JFactory::getDocument()->addScriptDeclaration('window.addEvent("domready", function(){window.AT = new AjaxToggler({base: "'.JUri::root().'"})})');
			JHTML::script('ajaxtoggler.js', JUri::root().'plugins/system/ajaxtoggler/', true);
		}
		
		public function onAfterDispatch() {
			if (!$this->active) {
				return;
			}
	
			$session = JFactory::getSession();
			 
			if ($session->get('jatoggler')) {
				$session->set('jatoggler', 0);
				
				if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
					header('Content-Type: text/html; charset=utf-8');
					echo $this->getTable() . $this->getMessages() . $this->getToolbar();
					$this->clearMessages();
					exit();
				}
			 }
		}
		
		private function getTable() {
			$buf = '';
			if (preg_match_all('/(<table.*<\/table>)/Us', JFactory::getDocument()->getBuffer('component'), $m)) {
				$m = $m[1];
				for($i=0, $c=sizeof($m); $i<$c; $i++) {
					if (JString::strpos($m[$i], ' class="adminlist"')) {
						$buf = $m[$i];
						break;
					}
				}
			}
			
			// small house-keeping
			$buf = strtr($buf, array(
				"\r" => '',
				"\n" => '',
				"\t" => ''
			));
			
			return $buf;
		}
		
		private function getMessages() {
			$messages = '';
			$this->messages = JFactory::getSession()->get('application.queue', array());
			if (is_array($this->messages) && !empty($this->messages)) {
				foreach ($this->messages as $msg) {
					if (isset($msg['type']) && isset($msg['message'])) {
						$messages[$msg['type']][] = $msg['message'];
					}
				}
				// PHP >= 5.3
				if (defined('JSON_HEX_TAG')) {
					$messages = '<div id="jatogglerMessages" style="display:none">'.json_encode($messages, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP).'</div>';
				} else {
					$messages = '<div id="jatogglerMessages" style="display:none">'.json_encode($messages).'</div>';
				}
			}
			return $messages;
		}
		
		private function clearMessages() {
			$session = JFactory::getSession();
			$session->set('application.queue', null);
			
			$app = JFactory::getApplication();
			$app->set('_messageQueue', array());
		}
		
		private function getToolbar() {
			$toolbar = '';
			
			// Reload toolbar if Trashed state changed
			$state1 	= JFactory::getSession()->get('jatoggler_filter_published');
			$state2		= JRequest::getCmd('filter_published');
			
			if (
				// Reload toolbar for selected components;
				($this->params->get('toolbar') && in_array(JRequest::getCmd('option'), $this->params->get('toolbar')))
				||
				// Reload toolbar if Trashed state changed
				($state1 == -2 || $state2 == -2) && ($state1 != $state2)
			) {
				JFactory::getSession()->set('jatoggler_filter_published', $state2);
				
				// render toolbar
				jimport('joomla.html.toolbar');
				$toolbar = JToolBar::getInstance('toolbar')->render('toolbar');
				
				// ugly div, don't like it :)
				$toolbar = JString::str_ireplace('<div class="toolbar-list" id="toolbar">', '<div>', $toolbar);
				
				// PHP >= 5.3
				if (defined('JSON_HEX_TAG')) {
					$toolbar = '<div id="jatogglerToolbar" style="display:none">'.json_encode($toolbar, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP).'</div>';
				} else {
					$toolbar = '<div id="jatogglerToolbar" style="display:none">'.json_encode($toolbar).'</div>';
				}
			}
			return $toolbar;
		}
	
	}
}