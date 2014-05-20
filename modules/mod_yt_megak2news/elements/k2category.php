<?php
/*------------------------------------------------------------------------
 # Yt Mega K2 News - Version 1.0
 # Copyright (C) 2009-2010 The YouTech Company. All Rights Reserved.
 # @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 # Author: The YouTech Company
 # Websites: http://joomla.ytcvn.com
 -------------------------------------------------------------------------*/


// no direct access

defined('_JEXEC') or die ('Restricted access');





class JElementK2category extends JElement

{

    /**

     * @access private

     */

    var    $_name = 'k2category';



    function fetchElement($name, $value, &$node, $control_name) {

        $db = &JFactory::getDBO();
        
        $query = 'SELECT m.* FROM #__k2_categories m WHERE published=1 AND trash = 0 ORDER BY parent, ordering';

        $db->setQuery( $query );

        $mitems = $db->loadObjectList();
 
        $children = array();

        if ( $mitems )

        {

            foreach ( $mitems as $v )

            {

                $pt     = $v->parent;

                $list     = @$children[$pt] ? $children[$pt] : array();

                array_push( $list, $v );

                $children[$pt] = $list;

            }

        }

        $list = JHTML::_('menu.treerecurse', 0, '', array(), $children, 9999, 0, 0 );

        $mitems = array();

        foreach ( $list as $item ) {

            $mitems[] = JHTML::_('select.option',  $item->id, '---| '.$item->treename );

        }

        

        $output= JHTML::_('select.genericlist',  $mitems, ''.$control_name.'['.$name.'][]', 

                        'class="inputbox" style="width:90%;" multiple="multiple" size="10"', 'value', 'text', $value );

        return $output;

    }

    

}

