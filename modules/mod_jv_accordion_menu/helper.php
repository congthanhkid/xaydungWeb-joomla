<?php
class modJVAMenuHelper {
	var $moduleId;	
	var $aryMenuItem = array();
	function __construct($moduleId){
		$this->moduleId = $moduleId;		
	}
	/*
	 * Function show menu from menutype
	 * @Created by joomvision
	 */
	function showMenu($params,$itemId){
		$menu = & JSite::getMenu();
		$rows = $menu->getItems('menutype', $params->get('menutype'));		
		$children = array();		
		if(is_array($rows) && count($rows)) {
			foreach ($rows as $v) {
				$pt = $v->parent;
				$list = @ $children[$pt] ? $children[$pt] : array ();				
				array_push($list, $v);
				$children[$pt] = $list;
			}
		}			
		if($params->get('event_type') == 0){
			$this->mosHoverEventRecurseMenu(0, 0, $children, $params,$itemId);
		} else {
			echo $this->mosClickEventRecurseMenu(0,0,$children,$params,$itemId,1);			
		}
	}
	//End function

	/*
	 * Function check menu whether contain child menu
	 * @Created by joomvision
	 */
	function haveChidren($itemId){
		$db =& JFactory::getDBO();
		$sql = "SELECT COUNT(*) AS total FROM #__menu WHERE parent=".$itemId." AND parent >0  AND published = 1";
		$db->setQuery( $sql );
		return $db->loadResult();
	}
	//End function

	/*
	 * Function get menu and all child of menu using recurse function
	 * @Created by joomvision
	 */
	function mosHoverEventRecurseMenu($id, $level, & $children, & $params,$id1,$isAccept=1){
		$str = $this->limitMenu($params,$level);
		$startLevel = $params->get('start_level',0);
		if (@ $children[$id]) {
			if($isAccept == 1){
				if($level == $startLevel || $str) {		
				if($this->haveChidren($id)  > 0 || $level == $startLevel){
					if($level == $startLevel){
						echo "<ul class=\"jv_maccordion\">";
					} else {
						echo "<ul class=\"jv_amenu_items\" style=\"display: none;\">";
					}
					} else {
						echo "<ul class=\"jv_amenu_items\" style=\"display: none;\">";
					}
				}
			}
			foreach ($children[$id] as $row) {
				if($params->get('follow_current_menu')) $condition = (($level == 0 && $row->id == $id1)|| ($level !=0)) ? true :false; 
				else $condition = true;
				if($condition) {
					if($level == $startLevel || $str) {				
						$url = $this->getUrlFromMenuItem($row);
						if($url == '') $url ="#";				
						$itemId  = "jv_amenu".$this->moduleId."_".$row->id;				
							echo "<li id=\"$itemId\" class=\"jv_amenu_item\"><a style=\"display:block;\" class=\"trigger\" href=\"$url\">".$row->name."</a>";							
						$this->mosHoverEventRecurseMenu($row->id,$level+1,$children,$params,$id1,1);				
						echo "</li>";
					} else {
						$this->mosHoverEventRecurseMenu($row->id,$level+1,$children,$params,$id1,1);
					}
				} else {
					$this->mosHoverEventRecurseMenu($row->id,$level+1,$children,$params,$id1,0);
				}
			}
			if($isAccept == 1){ if($level == $startLevel || $str) { echo "</ul>";	} }
		}
	}
	//End function
	
	/*
	 * Function get menu and all child when selecting event click type
	 * @Created by joomvision
	 */
	function mosClickEventRecurseMenu($id, $level, & $children, & $params,$id1,$isAccept=1){
		$str = $this->limitMenu($params,$level);		
		$startLevel = $params->get('start_level',0);			 			
		if (@ $children[$id]) {
			if($isAccept == 1){ 
			if($level == $startLevel || $str) { 			
			if($this->haveChidren($id)  > 0 || $level == $startLevel){ 			
				if($level == $startLevel){
					echo "<ul class=\"jv_maccordion\">";
				} else {
					echo "<ul class=\"jv_amenu_items\" style=\"display: none;\">";
				}
			} else {
				echo "<ul class=\"jv_amenu_items\" style=\"display: none;\">";
			}	
			}	
			}	
			foreach ($children[$id] as $row) {	
				//if($level == 0) echo $row->id.'_';
				if($params->get('follow_current_menu')) $condition = (($level == 0 && $row->id == $id1)|| ($level !=0)) ? true :false; 
				else $condition = true;				
				if($condition) {
				if($level == $startLevel || $str) {											
					$isHasChild = $this->haveChidren($row->id);
					$url = $this->getUrlFromMenuItem($row);				
					if($url == '') $url ="#";
					$itemId  = "jv_amenu".$this->moduleId."_".$row->id;												
					if($isHasChild){
						echo "<li id=\"$itemId\" class=\"jv_amenu_item\"><div class=\"wrap_link\"><a style=\"display:block;\" class=\"readmore\" href=\"$url\">".$row->name."</a><a class=\"trigger\" href=\"$url\"></a></div>";
					} else {
						echo "<li id=\"$itemId\" class=\"jv_amenu_item last-child\"><a style=\"display:block;\" href=\"$url\">".$row->name."</a>";
					}
					echo "<div class=\"clear\"></div>";
					$this->mosClickEventRecurseMenu($row->id,$level+1,$children,$params,$id1,1);				
					echo "</li>";
				} else {
					$this->mosClickEventRecurseMenu($row->id,$level+1,$children,$params,$id1,1);
				}	
			} else {
				$this->mosClickEventRecurseMenu($row->id,0,$children,$params,$id1,0);
			}							
			}
			if($isAccept == 1){ if($level == $startLevel || $str) {	echo "</ul>";} }
		}	
	}		
	//End
		
	/*
	 * Function limit item from start and end level
	 * @Created by joomvision
	 */
	function limitMenu($params,$level){
		$startLevel = $params->get('start_level',0);		
		$endLevel = $params->get('end_level',0);
		$str ='';	
		if($startLevel !=0){
			if($endLevel !=0){
				$str = (($level>=$startLevel) && ($level <=$endLevel)) ? true : false;
			} else { 
				$str = ($level>=$startLevel) ? true:false;
			}
		} else {
			if($endLevel!=0) $str = ($level <=$endLevel)?true:false;
		}
		if($str === '') $str = true;		
		$str = ($str) ? $str :false;
		return $str;
	}
	//End
	
	
	/*
	 * Function get link from row menu item
	 * @Created by joomvision
	 */
	function getUrlFromMenuItem($row){
		$menu = &JSite::getMenu();
		$iParams = new JParameter($row->params);
		switch($row->type){
			case 'separator':
				return '';
				break;
			case 'url':
				if ((strpos($row->link, 'index.php?') === 0) && (strpos($row->link, 'Itemid=') === false)) {
					$url = $row->link.'&amp;Itemid='.$row->id;
				} else {
					$url = $row->link;
				}
				break;
			default :
				$router = JSite::getRouter();
				$url = $router->getMode() == JROUTER_MODE_SEF ? 'index.php?Itemid='.$row->id : $row->link.'&Itemid='.$row->id;
				break;	
		}		
		if($url !=''){//If url not null or empty
			// Handle SSL links
			$iSecure = $iParams->def('secure', 0);
			if ($row->home == 1) {
				$url = JURI::base();
			} elseif (strcasecmp(substr($url, 0, 4), 'http') && (strpos($row->link, 'index.php?') !== false)) {
				$url = JRoute::_($url, true, $iSecure);
			} else {
				$url = str_replace('&', '&amp;', $url);
			}
		}		
		return $url;
	}
	//End get link
}

?>