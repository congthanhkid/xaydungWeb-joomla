<?php
/*------------------------------------------------------------------------
 # Yt Mega K2 News - Version 1.0
 # Copyright (C) 2009-2010 The YouTech Company. All Rights Reserved.
 # @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 # Author: The YouTech Company
 # Websites: http://joomla.ytcvn.com
 -------------------------------------------------------------------------*/

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

// Category element
class JElementK2Articles extends JElement {

	var	$_name = 'k2articles';
	
	function fetchElement($name, $value, &$node, $control_name){
		$db = &JFactory::getDBO();
		$query = 'SELECT * FROM #__k2_categories WHERE published=1 AND trash=0';
		$db->setQuery( $query );
		$categories = $db->loadObjectList();
		
		if(count($categories) == 0)
		{
			return JTEXT::_('K2NOARTICLES');
		 
	    }
		
		$articles=array();
		
		// set up first element of the array as all articles
		$articles[0]->id = '';
		$articles[0]->title = JText::_("All Items");
		
		//loop through categories 
		foreach ($categories as $category) {
			$optgroup = JHTML::_('select.optgroup',$category->name,'id','title');
			$query = 'SELECT id,title FROM #__k2_items WHERE catid='.$category->id .' AND trash=0 AND published=1';
			$db->setQuery( $query );
			$results = $db->loadObjectList();
			array_push($articles,$optgroup);
			foreach ($results as $result) {
				array_push($articles,$result);
			}
		}
		
		$output = '';
		if(count($articles) == 0)
		{
			$output = JTEXT::_('K2NOARTICLES');
		 
	    }
        else
		{
		// Output
		   $output = JHTML::_('select.genericlist',  $articles, ''.$control_name.'['.$name.'][]', 'class="inputbox" style="width:90%;" multiple="multiple" size="8"', 'id', 'title', $value );
		}
		return $output;
	}
	
} 
