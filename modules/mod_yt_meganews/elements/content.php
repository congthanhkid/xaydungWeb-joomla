<?php
/*------------------------------------------------------------------------
 # Yt Mega News - Version 1.0
 # ------------------------------------------------------------------------
 # Copyright (C) 2010-2011 The YouTech Company. All Rights Reserved.
 # @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 # Author: The YouTech Company
 # Websites: http://www.ytcvn.com
 -------------------------------------------------------------------------*/

class JElementContent extends JElement {
  var   $_name = 'content';
  function fetchElement($name, $value, &$node, $control_name){
  		$document = &JFactory::getDocument();
  		$selected =  $this->_parent->get('sec_or_cat');
  		if(!$selected){
  			$selected = 0;
  		}
  		$db = &JFactory::getDBO();
  		$radiolist   = "<div style='height:160px;width:100%;overflow:hidden;'>";
  		/*SHOW SECTIONS*/
  		$radiolist  .= "<div id='sections'>";
  		$query = "SELECT title,id FROM `#__sections` WHERE `published`='1'";
  		$db->setQuery($query);
  		$sections = $db->loadObjectList();
  		
  		foreach ($sections as $s){
		$sec[]			= JHTML::_('select.option', $s->id, $s->title);//select.option tao ra 1 mang doi tuong
		}
		
		$lists['sections']	= JHTML::_('select.genericlist', $sec,$control_name."[sections][]", 'class="inputbox" size="12"  style="width:100%"  multiple="multiple"', 'value', 'text',$this->_parent->get('sections'));
  		$radiolist .= $lists['sections'];
  		$radiolist .= "</div>" ;
  	  
  		/*SHOW CATEGORYS*/
  		$radiolist  .= "<div id='categories'>";
  		$query = "SELECT c.title, c.id, s.title as section_title FROM `#__categories` c INNER JOIN `#__sections` s ON s.id = c.section WHERE c.published='1'";
  		$db->setQuery($query);
  		$categories = $db->loadObjectList();
  		
  		foreach ($categories as $c){
		$cats[]			= JHTML::_('select.option', $c->id, $c->section_title . ' -> ' . $c->title);//select.option tao ra 1 mang doi tuong
		}
		
		$lists['categories']	= JHTML::_('select.genericlist', $cats,$control_name."[categories][]", 'class="inputbox" size="12"  style="width:100%"  multiple="multiple"', 'value', 'text',$this->_parent->get('categories'));
  		$radiolist .= $lists['categories'];
  		$radiolist .= "</div>" ;
  		/*SHOW CATEGORYS*/
  		$radiolist .= "</div>" ;
  		JHTML::script('jquery-1.4.2.min.js','modules/mod_yt_meganews/assets/');
  		$document->addScriptDeclaration('
						jQuery.noConflict();
						jQuery(document).ready(function(){
							var selected = '.$selected.'
							if(selected==0){
								jQuery("div#sections").show();
								jQuery("div#categories").hide();
  							}else{
  							    jQuery("div#sections").hide();
							    jQuery("div#categories").show();
  							}
						jQuery("#paramssec_or_cat0").click(function(){
							jQuery("div#sections").show();
							jQuery("div#categories").hide();
						});
						jQuery("#paramssec_or_cat1").click(function(){
							jQuery("div#sections").hide();
							jQuery("div#categories").show();
						});
					});
  		');

    return  $radiolist;

  }
}
?>
		

				