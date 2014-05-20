<?php
// Check to ensure this file is included in Joomla!
defined ( '_JEXEC' ) or die ( 'Restricted access' );

class JElementJvPosition extends JElement {
	/**
	 * Element name
	 *
	 * @access protected
	 * @var  string
	 */
	var $_name = 'Position';
	
	function fetchElement($name, $value, &$node, $control_name) {
		$class = $node->attributes ( 'class' );
		if (! $class) {
			$class = "inputbox";
		}
		
		$options = $this->getPositions ();
		
		$arrOpt = array ();
		for($i = 0; $i < count ( $options ); $i ++) {
			//   $arrOpt[$i]['keys'] = $options[$i]->id;
			//   $arrOpt[$i]['value'] = $options[$i]->position;
			$arrOpt [$i] ['keys'] = $arrOpt [$i] ['value'] = $options [$i]->position;
		}
		array_unshift ( $arrOpt, JHTML::_ ( 'select.option', '0', '- ' . JText::_ ( 'Select position' ) . ' -', 'keys', 'value' ) );
		$html_return = JHTML::_ ( 'select.genericlist', $arrOpt, '' . $control_name . '[' . $name . ']', 'class=' . $class . ' onchange="javascript:change_position(this.value);"', 'keys', 'value', $value, $control_name . $name );
		$html_return .= "<script type=\"text/javascript\">
			function change_position(value) {
				reload_modulelist(value);					   
   }</script>";
		return $html_return;
	}
	
	function getPositions() {
		$db = & JFactory::getDBO ();
		
		$query = 'SELECT DISTINCT position' 
		. ' FROM #__modules AS a' 
		. ' WHERE a.published = 1'
		. ' AND a.position <> \'cpanel\'' 
		. ' ORDER BY a.position';
		$db->setQuery ( $query );
		$db->getQuery ();
		$options = $db->loadObjectList ();
		
		return $options;
	}

}
?>