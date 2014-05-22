<?php
/*------------------------------------------------------------------------
 # Yt Content Slide Show II  - Version 1.0
 # Copyright (C) 2009-2010 The YouTech Company. All Rights Reserved.
 # @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 # Author: The YouTech Company
 # Websites: http://joomla.ytcvn.com
 -------------------------------------------------------------------------*/
defined( '_JEXEC' ) or die( 'Restricted access' );
 
jimport('joomla.html.html');
jimport('joomla.form.formfield');
class JFormFieldContent extends JFormField
{
	/**
  * The form field type.
  *
  * @var  string
  * @since	1.6
  */
	protected $type = 'content'; //the form field type
  /**
  * Method to get content articles
  * @return	array	The field option objects.
  * @since	1.6
  */
    protected function getInput()
    {
        // Initialize variables.
        $session = JFactory::getSession();
        $options = array();
        $attr = '';
        // Initialize some field attributes.
        $attr .= $this->element['class'] ? ' class="'.(string) $this->element['class'].'"' : '';
        // To avoid user's confusion, readonly="true" should imply disabled="true".
        if ( (string) $this->element['readonly'] == 'true' || (string) $this->element['disabled'] == 'true') { 
            $attr .= ' disabled="disabled"';
        }
        $attr .= $this->element['size'] ? ' size="'.(int) $this->element['size'].'"' : '';
        $attr .= $this->multiple ? ' multiple="multiple"' : '';
        // Initialize JavaScript field attributes.
        $attr .= $this->element['onchange'] ? ' onchange="'.(string) $this->element['onchange'].'"' : '';
        //now get to the business of finding the articles
        $db = &JFactory::getDBO();
        $query = 'SELECT * FROM #__categories WHERE published=1 AND extension = "com_content" ORDER BY parent_id';
        $db->setQuery($query);
        $categories = $db->loadObjectList();
        if ( $categories )
        {
            foreach ( $categories as $val )
            {
                $pt_list 	= $val->parent_id;
                $list 	= @$children[$pt_list] ? $children[$pt_list] : array();
                array_push( $list, $val );
                $children[$pt_list] = $list;
            }
        }
        $list = JHTML::_('menu.treerecurse', 1, '', array(), $children, 9999, 0, 0 );
       //var_dump($list);die;
        $mitems = array();
        $mitems[] = JHTML::_('select.option', '0', '-- '.JText::_('All Categories'));
        foreach ( $list as $item ){//
            $mitems[] = JHTML::_('select.option',  $item->id, '---| '. str_replace("&#160;","-",$item->treename) );
        } 
        
        return JHTML::_( 'select.genericlist', $mitems, $this->name,trim($attr), 'value', 'text', $this->value, $this->id ); 
    }
}
?>
		

				