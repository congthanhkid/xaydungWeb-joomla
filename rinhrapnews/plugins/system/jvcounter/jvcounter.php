<?php
/**
 # Plugin		JV Counter
 # @version		2.5.3
 # ------------------------------------------------------------------------
 # author    Open Source Code Solutions Co
 # copyright Copyright © 2008-2012 joomlavi.com. All Rights Reserved.
 # @license - http://www.gnu.org/licenses/gpl-3.0.html GNU/GPL or later.
 # Websites: http://www.joomlavi.com
 # Technical Support:  http://www.joomlavi.com/my-tickets.html
-------------------------------------------------------------------------*/
// No direct access to this file
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.plugin.plugin' );

class plgSystemJVCounter extends JPlugin{
    
    function onAfterRender(){
       
        $mainframe = JFactory::getApplication();
        
        if($mainframe->isAdmin()) return;
        
        $this->_db = JFactory::getDbo();
        $this->saveData();
        
        return;
    }
	
	
    /**
     * search table session
     * compare table counterlog
     * check data[key] ? update : insert
     * 
     */
    
    private function saveData(){
        $db = $this->_db;
        $config = JFactory::getConfig();
        $lifetime = $config->get('lifetime');
        $lifetime = $lifetime * 60;
        
        $jsession = JFactory::getSession();
        $mysessionid = $jsession->getId();
        
       
        
        $data = $this->getDataLogs();//get jvcounter log
        
        $sessions = $this->getSession($mysessionid);//get current session log joomla
        
      
        if($sessions) foreach($sessions as $key=>$session){
            
            $sessionData = $this->parseSessionData($session->data);
            
            
            $session_id     = $session->session_id;
            $user_id        = $session->userid;
            $timelast       = $session->time;
            $counter        = (int)$sessionData['session.counter'];
            $lasturl        = '';
           
            
            if(isset($data[$key])){
                //update logs
                if($timelast > $data[$key]->timelast + $lifetime){
                    //update
                   
                    $query="UPDATE #__jvcounter_logs
                              SET user_id   = '$user_id', 
                                  timelast  = '$timelast',
                                  counter   = '$counter',
                                  lasturl   = '$lasturl'
                              WHERE session_id = '$key'";
                   
                }
                
            }else{
                //insert new  
                
                $ip             = $this->getRemoteIP();
                $timestart      = $sessionData['session.timer.start']?$sessionData['session.timer.start']:$timelast;
                
                $timezone       = $sessionData['user']?$sessionData['user']->get('_params')->get('timezone'):'';
                $browser        = $sessionData['session.client.browser']?$sessionData['session.client.browser']:$_SERVER['HTTP_USER_AGENT'];
                $query		= "INSERT INTO #__jvcounter_logs (session_id,user_id,ip,timestart,timelast,counter,browser,timezone,lasturl) VALUES('$session_id','$user_id','$ip','$timestart','$timelast','$counter','$browser','$timezone','$lasturl')";
                
            }
            
        }
        if(isset($query) && $query ){
        	
        	$db->setQuery($query);
        	if(!$db->query()){
        		JError::raiseError(500,$db->getErrorMsg());
        	}
        }
    	
        return;
    }
    
    function getDataLogs(){
        $db = $this->_db;
        $query = "select * from #__jvcounter_logs";
        $db->setQuery($query);
        return $db->loadObjectList('session_id');
    }
    
    function getSession($id=null){
	   $db = $this->_db;
	   
	   if($id){
	   	$where[] = "session_id = '$id'";
	   }
	   
	   $where[] = "client_id=0";
	   
	   $where = ' where '.implode(' and ',$where);
	   
       $query = "select * from #__session $where "; //site
       $db->setQuery($query);
       $items = $db->loadObjectList('session_id');
       
       return $items;
	}
    function parseSessionData($data){
        $tmp = explode('|',$data);
        return @unserialize($tmp[1]);
        
    }
    function getRemoteIP(){
        
        $ip = $_SERVER['REMOTE_ADDR'];
        if($ip=='::1'){
            $ip = 'local';
        }
        return $ip;
    }
    
    
    
}

?>