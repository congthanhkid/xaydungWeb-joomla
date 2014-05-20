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

require_once JPATH_COMPONENT_ADMINISTRATOR.DS.'classes'.DS.'config.php';

class Google_Analytics extends JObject {
	private $_config=null;
	private $_info=null;
	private $_feed="https://www.google.com/analytics/feeds/";
	private $_default_id=null;
    private $_certFile;
	function __construct() {
		$this->_config=SEFConfig::getConfig();
		
		$auth_url="https://www.google.com/accounts/ClientLogin";
		$auth_params=array();
		$auth_params["accountType"]="GOOGLE";
		$auth_params["Email"]=$this->_config->google_email;
		$auth_params["Passwd"]=$this->_config->google_password;
		$auth_params["service"]="analytics";
		$auth_params["source"]=JFactory::getApplication()->getCfg('sitename')."-joomsef-4.1.2";
        
        $this->_certFile = realpath(dirname(__FILE__).'/../cacert.pem');
		
        if (function_exists('curl_init')) {
            // Use CURL
    		$c=curl_init($auth_url);
    		curl_setopt($c,CURLOPT_RETURNTRANSFER,1);
    		curl_setopt($c,CURLOPT_POST,1);
    		curl_setopt($c,CURLOPT_POSTFIELDS,$auth_params);
            curl_setopt($c, CURLOPT_CAINFO, $this->_certFile);
    		$data=curl_exec($c);
    		curl_close($c);
        }
        else {
            // Try to use OpenSSL
            $response = SEFTools::PostRequest($auth_url, null, $auth_params);
            if ($response === false) {
                return;
            }
            $data = $response->content;
        }
		
        if (!$data) {
            return;
        }
        
		$data=(explode("\n",$data));
		array_pop($data);
		
		$this->_info=array();
		for($i=0;$i<count($data);$i++) {
			$row=explode("=",$data[$i]);
			$this->_info[$row[0]]=$row[1];
		}
	}
	
	static function getInstance() {
		static $instance;
		
		if(empty($instance)) {
			$instance=new Google_Analytics();
		}
		if(isset($instance->_info["Error"])) {
			return false;
		}
		if(!isset($instance->_info["Auth"])) {
			return false;
		}
		return $instance;
	}
	
	function getAccounts() {
		$google_url=$this->_feed."accounts/default";
		$headers=array();
		$headers[]="GData-Version: 2";
		$headers[]="Authorization: GoogleLogin auth=\"".$this->_info["Auth"]."\"";
		
		$url_params["prettyprint"]="true";
		$google_url.="?".http_build_query($url_params);

        if (function_exists('curl_init')) {
            // Use CURL
    		$c=curl_init($google_url);
    		curl_setopt($c,CURLOPT_RETURNTRANSFER,1);
    		curl_setopt($c,CURLOPT_HTTPHEADER,$headers);
            curl_setopt($c, CURLOPT_CAINFO, $this->_certFile);
    		$data=curl_exec($c);
    		curl_close($c);
        }
        else {
            // Try to use OpenSSL
            $response = SEFTools::PostRequest($google_url, null, null, 'get', null, $headers);
            if ($response === false) {
                return array();
            }
            $data = $response->content;
        }
		
        if (!$data) {
            return array();
        }
		
		$xml=new DomDocument("1.0");
		if ($xml->loadXML($data) === false) {
            return array();
		}
		
		$accounts=array();
		foreach($xml->getElementsByTagName('entry') as $item) {
			$id=explode(":",$item->getElementsByTagName('tableId')->item(0)->firstChild->nodeValue);
			$account=new stdClass();
			$account->id=array_pop($id);		
			foreach($item->getElementsByTagName('property') as $property) {
				switch($property->getAttribute('name')) {
					case 'ga:accountName':
						$account->title=$property->getAttribute('value');
						break;
					case 'ga:webPropertyId':
						if($property->getAttribute('value')==$this->_config->google_id) {
							$this->_default_id=$account->id;
						}
						break;		
				}
			}
			
			$accounts[]=$account;
		}
		
		return $accounts;
	}
	
	function getDefaultId() {
		return $this->_default_id;
	}
	
	function getData($metrics,$dimensions="",$sort="",$max_results="50") {
		$google_url=$this->_feed."data";
		
		$headers=array();
		$headers[]="GData-Version: 2";
		$headers[]="Authorization: GoogleLogin auth=\"".$this->_info["Auth"]."\"";
		
		$url_params=array();
		$url_params["ids"]="ga:".JRequest::getInt('account_id',$this->_default_id);
		$url_params["start-date"]=JRequest::getString('start_date',JFactory::getDate((JFactory::getDate()->toUnix()-(60*60*24*7)))->toFormat("%Y-%m-%d"));
		$url_params["end-date"]=JRequest::getString('end_date',JFactory::getDate()->toFormat("%Y-%m-%d"));
		$url_params["prettyprint"]="true";
		$url_params["metrics"]=$metrics;
		$url_params["dimensions"]=$dimensions;
		$url_params["sort"]=$sort;
		$url_params["max-results"]=$max_results;
		
		$google_url.="?".http_build_query($url_params);
		
        if (function_exists('curl_init')) {
            // Use CURL
    		$c=curl_init($google_url);
    		curl_setopt($c,CURLOPT_RETURNTRANSFER,1);
    		curl_setopt($c,CURLOPT_HTTPHEADER,$headers);
            curl_setopt($c, CURLOPT_CAINFO, $this->_certFile);
    		$data=curl_exec($c);
    		curl_close($c);
        }
        else {
            // Try to use OpenSSL
            $response = SEFTools::PostRequest($google_url, null, null, 'get', null, $headers);
            if ($response === false) {
                return array();
            }
            $data = $response->content;
        }
		
        if (!$data) {
            return array();
        }
		
		$xml=new DomDocument("1.0");
		if ($xml->loadXML($data) === false) {
            return array();
		}
		
		return $this->_processData($xml->getElementsByTagName('entry'));
	}
	
	private function _processData($entry) {
		$data=array();
		$i=0;
		foreach($entry as $item) {
			foreach($item->getElementsByTagName('metric') as $value) {
				$data[$i][str_replace("ga:","",$value->getAttribute('name'))]=$value->getAttribute('value');
			}
			foreach($item->getElementsByTagName('dimension') as $value) {
				$data[$i][str_replace("ga:","",$value->getAttribute('name'))]=$value->getAttribute('value');
			}
			$i++;
		}
		
		return $data;
	}
}
?>
