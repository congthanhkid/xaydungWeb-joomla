<?php
/**
 * jSecure Authentication components for Joomla!
 * jSecure Authentication extention prevents access to administration (back end)
 * login page without appropriate access key.
 *
 * @author      $Author: Ajay Lulia $
 * @copyright   Joomla Service Provider - 2010
 * @package     jSecure2.1.8
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version     $Id: controller.php  $
 */
	
// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport('joomla.application.component.controller');
require_once(JPATH_COMPONENT_ADMINISTRATOR .'/models/jsecurelog.php');

class jsecureControllerjsecure extends JController
{
	function display(){
	  	$view   = $this->getView('basic','html');
		$model = $this->getModel( 'jsecurelog' );
		$view->setModel($model);
	 	$view->display();
	}
	
	function advanced(){
	  	$view   = $this->getView('advanced','html');
	 	$view->display();
	}
    
	function help(){
	 	$view   = $this->getView('help','html');
	 	$view->display();
	}

	function saveBasic(){

		$view   = $this->getView('basic','html');
		$model 	= $this->getModel( 'jsecurelog' );
		$view->setModel($model);
	 	$view->save();
 	
	}
	
	function saveAdvanced(){

		$view   = $this->getView('advanced','html');
		$model = $this->getModel( 'jsecurelog' );
		$view->setModel($model);
	 	$view->save();
 	
	}

	function isMasterLogged(){
		
		jimport('joomla.filesystem.file');	

		$basepath   = JPATH_ADMINISTRATOR .'/components/com_jsecure';
		$configFile	 = $basepath.'/params.php';
		
		require_once($configFile);
		
		$JSecureConfig = new JSecureConfig();
		
		if($JSecureConfig->enableMasterPassword == '0')
			return true;
		
		$session = JFactory::getSession();
		
		return $session->get('jsecure_master_logged', false);

	}

	function auth(){
		$view		= $this->getView('auth','html');
	 	$view->display();
	}

	function login(){
		$view   = $this->getView('auth','html');
		$model = $this->getModel( 'jsecurelog' );
		$view->setModel($model);
	 	$view->login();
	}

	function setAdminType(){
		$view   = $this->getView('config','html');
		$view->setAdminType();
	}
		
	function log(){
		$view   = $this->getView('log','html');
		$model = $this->getModel( 'jsecurelog' );
		$view->setModel($model);
	 	$view->display();
	}
	
	function ipinfo(){
		$view   = $this->getView('log','html');
		$model = $this->getModel( 'jsecurelog' );
		$view->setModel($model);
		$view->setLayout('ipinfo');
	 	$view->ipInfo();
		exit;
	}
}