<?php
/**
* @author    JoomShaper http://www.joomshaper.com
* @copyright Copyright (C) 2010 - 2013 JoomShaper
* @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2
*/

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport('joomla.form.formfield');

class JFormFieldAsset extends JFormField
{
	protected	$type = 'Asset';
	
	protected function getInput() {
		$doc = JFactory::getDocument();
		if (JVERSION<3) {
			$js_path = JURI::root(true).'/plugins/content/spcomments/assets/js/script.js';
		} else {
			JHtml::_('jquery.framework');
			$js_path = JURI::root(true).'/plugins/content/spcomments/assets/js/script-j3.js';
		}	
		$doc->addScript($js_path);
		return null;
	}
}