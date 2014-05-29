<?php/** * @package 	mod_bt_floater - BT Floater Module * @version		1.0 * @created		April 2012 * @author		BowThemes * @email		support@bowthems.com * @website		http://bowthemes.com * @support		Forum - http://bowthemes.com/forum/ * @copyright	Copyright (C) 2011 Bowthemes. All rights reserved. * @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL * */// no direct accessdefined('_JEXEC') or die('Restricted access');
jimport('joomla.form.formfield');
class JFormFieldAbout extends JFormField {
	protected $type = 'About';
	protected function getInput() {
		return '<div id="bt-about">					<div class="bt-desc"><img src="'.JURI::root().$this->element['path'].'/logo.png">						'.JText::_("BT_ABOUT_DESC").'					</div>					<br clear="both">					<div class="bt-license">'.JText::_("BT_ABOUT_LICENSE").'</div>				</div>';
	}
}
/* eof */?>