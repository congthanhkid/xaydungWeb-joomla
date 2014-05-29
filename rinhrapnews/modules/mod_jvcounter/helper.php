<?php
/**
 # Module		JV Counter
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


class modJVCounterHelper
{   
    function getTotalImage($params,$totalNumber){
        
        $arrNumber = modJVCounterHelper::getArrayNumber($params->get('numberofdigits',5),$totalNumber);
        $type = $params->get('digittype','type1');
        
        $html = '';
        if($arrNumber) foreach($arrNumber as $number){
            $html .= modJVCounterHelper::getDigitImage($number,$type);
        }
       
        return $html;
    }
    
    function getArrayNumber($length,$number){
        $strlen = strlen($number);
		
		$arr	=	array();
		$diff	=	$length -  $strlen;
		
		while ( $diff>0 ){
			array_push( $arr,0 );
			$diff--;
		}
		
		$arrNumber	=	str_split( $number );
		
		$arr		=	array_merge( $arr,$arrNumber );
		
		return $arr;
    }
    
    function getDigitImage($number,$type){
        $html = '';
        $html .= '<img class="jvcounter_digit" src="modules/mod_jvcounter/assets/images/digitstype/'.$type.'/'.$number.'.png" alt=""/>';
        return $html;
    }
    //=========================================================//
    function getVisits($params){
        $options   = modJVCounterHelper::getOptions($params);
        $timestart = modJVCounterHelper::getTimeStart($options);
        $startdaycounter = $params->get('startdaycounter');
       
     if($startdaycounter == '')
     {
     	$startdaycounter = "2013-01-01 00:00:00";
     }
            $startdaycounterUnix = JFactory::getDate($startdaycounter)->toUnix();
            
            $where = "WHERE a.timelast >= $startdaycounterUnix";

        
        $db = &JFactory::getDbo();
        $query = "SELECT a.*,u.name,u.username,u.email
                    FROM #__jvcounter_logs as a
                    LEFT JOIN #__users as u ON u.id = a.user_id
                    $where
                    ORDER BY a.timelast desc
                 ";
        $db->setQuery($query);
     
        $rows = $db->loadObjectList();
       
        $visits['total'] = count($rows) + (int)$params->get('startofcounter',0);
        
        if($rows) foreach($rows as $row){
            
            $timelast = (int)$row->timelast + $options['timeoffset'];
            
            if($timelast >= (int)$timestart['online'] && $params->get('showonline',1)){
            	
                if($row->user_id){
               
                    $visits['online']['user'] = $row;
                   
                }else{
                    $visits['online']['guest'] = $row;

                }
            }
            
            if($timelast >= $timestart['thismonth'] && $params->get('showthismonth',1)){
                $visits['thismonth'][] = $row;
                
                if($timelast >= $timestart['thisweek'] && $params->get('showthisweek',1)){
                    $visits['thisweek'][] = $row;
                    
                    if($timelast >= $timestart['today'] && $params->get('showtoday',1)){
                        $visits['today'][] = $row;
                    }else if($timelast >= $timestart['yesterday'] && $params->get('showyesterday',1)){
                        $visits['yesterday'][] = $row;
                    }
                    
                }else if($timelast >= $timestart['lastweek'] && $params->get('showlastweek',1)){
                    $visits['lastweek'][] = $row;
                }
            }else if($timelast >= $timestart['lastmonth'] && $params->get('showlastmonth',1)){
                $visits['lastmonth'][] = $row;
            }
        }
        
        return $visits;
    }
  
    function getOptions($params){
        $config			                  = &JFactory::getConfig();
		$options['lifetime']              = 60*(int)$config->get('lifetime');
        $options['timeoffset']            = 60*60*(int)$params->get('timeoffset',7);
        
        $options['now']['unix']           = mktime() + $options['timeoffset'];
        $options['now']['daymonthyear']   = explode('-',JFactory::getDate($options['now']['unix'])->format('d-m-Y'));
       
        $options['durationDay']           = 24*60*60;
        $options['onlinestarttime']       = $options['now']['unix'] - $options['lifetime'];
        return $options;
    }
    
    function getTimeStart($options){
    	
        $timestart['online']    = $options['onlinestarttime'];
        $timestart['today']     = $options['now']['unix'] - ($options['now']['unix'] % $options['durationDay']);
        $timestart['yesterday'] = $timestart['today'] - $options['durationDay'];
        
        $nameToday     = modJVCounterHelper::getNameOfDay($options['now']['daymonthyear'][0],$options['now']['daymonthyear'][1],$options['now']['daymonthyear'][2]);
        $positionToday = modJVCounterHelper::getPositionOfDay($nameToday);
        $timestart['thisweek']  = $timestart['today'] - $positionToday*$options['durationDay'];
        $timestart['lastweek']  = $timestart['thisweek'] - 7*$options['durationDay'];
        $timestart['thismonth'] = $timestart['today'] - ((int)$options['now']['daymonthyear'][0] - 1)*$options['durationDay'];
        
        $daysoflastmonth = modJVCounterHelper::getDaysofMonth((int)$options['now']['daymonthyear'][1] - 1,$options['now']['daymonthyear'][2]);
        $timestart['lastmonth'] = $timestart['thismonth'] - $daysoflastmonth*$options['durationDay'];
           
        return $timestart;
    }
    
    function getPositionOfDay($name){
        $arrDay = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
        foreach($arrDay as $key=>$day){
            if($day==$name){
                return $key;
            }
        }
        return;
    }
    
    function getDaysofMonth($month,$year){
    	
        $ts = mktime(0,0,0,$month,1,$year);
       
        return date("t", $ts);
       
    }
    function getNameOfDay($day,$month,$year){
        $ts = mktime(0,0,0,$month,$day,$year);
       
        return date("l", $ts);
    }
    
    
    // show online count
    static function getOnlineCount() {
    	$db		= JFactory::getDbo();
    	// calculate number of guests and users
    	$result	= array();
    	$user_array  = 0;
    	$guest_array = 0;
    	$query	= $db->getQuery(true);
    	$query->select('guest, client_id');
    	$query->from('#__session');
    	$query->where('client_id = 0');
    	$db->setQuery($query);
    	$sessions = (array) $db->loadObjectList();
    
    	if (count($sessions)) {
    		foreach ($sessions as $session) {
    			// if guest increase guest count by 1
    			if ($session->guest == 1) {
    				$guest_array ++;
    			}
    			// if member increase member count by 1
    			if ($session->guest == 0) {
    				$user_array ++;
    			}
    		}
    	}
    
    	$result['user']  = $user_array;
    	$result['guest'] = $guest_array;
       
    	return $result;
    }
    
    // show online member names
    static function getOnlineUserNames($params) {
    	$db		= JFactory::getDbo();
    	$query	= $db->getQuery(true);
    	$query->select('a.username, a.time, a.userid, a.usertype, a.client_id');
    	$query->from('#__session AS a');
    	$query->where('a.userid != 0');
    	$query->where('a.client_id = 0');
    	$query->group('a.userid');
    	$user = JFactory::getUser();
    	if (!$user->authorise('core.admin') && $params->get('filter_groups', 0) == 1)
    	{
    		$groups = $user->getAuthorisedGroups();
    		if (empty($groups))
    		{
    			return array();
    		}
    		$query->leftJoin('#__user_usergroup_map AS m ON m.user_id = a.userid');
    		$query->leftJoin('#__usergroups AS ug ON ug.id = m.group_id');
    		$query->where('ug.id in (' . implode(',', $groups) . ')');
    		$query->where('ug.id <> 1');
    	}
    	$db->setQuery($query);
    	return (array) $db->loadObjectList();
    }
    
}
?>