<?php
/**
* @version		$Id: category.php 10707 2008-08-21 09:52:47Z eddieajau $
* @package		Joomla.Framework
* @subpackage	Parameter
* @copyright	Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
* Joomla! is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

// Check to ensure this file is within the rest of the framework
defined('JPATH_BASE') or die();

/**
 * Renders a category element
 *
 * @package 	Joomla.Framework
 * @subpackage		Parameter
 * @since		1.5
 */

class JElementK2category extends JElement
{
	/**
	* Element name
	*
	* @access	protected
	* @var		string
	*/
	var	$_name = 'k2category';

	function fetchElement($name, $value, &$node, $control_name)
	{
		$db = &JFactory::getDBO();		
		//$section	= $node->attributes('section');
		$class		= $node->attributes('class');	
		$query = 'SELECT m.* 
					FROM #__k2_categories m 
					WHERE published=1 AND trash = 0 ORDER BY parent, ordering';
		$db->setQuery($query);
		$mitems = $db->loadObjectList();
        $children = array();
        if ($mitems){
            foreach ( $mitems as $v ){
                $pt     = $v->parent;
                $list = @$children[$pt] ? $children[$pt] : array();
                array_push( $list, $v );
                $children[$pt] = $list;
            }
        }       
        $list = JHTML::_('menu.treerecurse', 0, '', array(), $children, 9999, 0, 0 );
        $mitems = array();
        foreach ( $list as $item ) {
            $mitems[] = JHTML::_('select.option',  $item->id, '&nbsp;&nbsp;&nbsp;'.$item->treename );
        } 	
		//$selections				= JHTML::_('menu.linkoptions');
		return JHTML::_('select.genericlist',   $mitems, ''.$control_name.'['.$name.'][]', 'class="inputbox" style="width:90%;" size="10" multiple="multiple"', 'value', 'text', $value, $control_name.$name );
	}
}