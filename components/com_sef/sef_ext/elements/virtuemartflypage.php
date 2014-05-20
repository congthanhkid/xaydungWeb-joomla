<?php 
// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die( 'Restricted access' );

class JElementVirtuemartFlypage extends JElement
{
	var $_name = 'VirtuemartFlypage';
	
	function fetchElement($name, $value, &$node, $control_name)
	{
		global $mosConfig_absolute_path;
		if (empty($mosConfig_absolute_path)) {
			$mosConfig_absolute_path = JPATH_ROOT;
		}
		
		if (!class_exists('ps_html')) {
			include(JPATH_ADMINISTRATOR.DS.'components'.DS.'com_virtuemart'.DS.'classes'.DS.'ps_html.php');
		}
		if (!function_exists('vmReadDirectory')) {
			include(JPATH_ADMINISTRATOR.DS.'components'.DS.'com_virtuemart'.DS.'classes'.DS.'ps_main.php');
		}
		if (!function_exists('shopMakeHtmlSafe')) {
			include(JPATH_ADMINISTRATOR.DS.'components'.DS.'com_virtuemart'.DS.'classes'.DS.'htmlTools.class.php');
		}
		
		$fieldName	= $control_name.'['.$name.']';
		
		return ps_html::list_template_files($fieldName, 'product_details', $value);
	}
}
?>