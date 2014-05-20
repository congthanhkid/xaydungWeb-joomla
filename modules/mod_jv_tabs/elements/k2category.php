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
		if(is_dir(JPATH_SITE.DS.'components'.DS.'com_k2')){	
		$query = 'SELECT id,name as title,parent  
					FROM #__k2_categories m 
					WHERE published=1 AND trash = 0 ORDER BY parent, ordering';
		$db->setQuery($query);				
	 	$mitems = $db->loadObjectList();
	 	$query1 = 'SELECT id,name as title 
					FROM #__k2_categories m 
					WHERE published=1 AND trash = 0 ORDER BY parent, ordering';
	 	$db->setQuery($query1);
	 	$options = $db->loadObjectList();
        $children = array();
        if ($mitems){
            foreach ( $mitems as $v ){
                $pt     = $v->parent;
                $list = @$children[$pt] ? $children[$pt] : array();
                array_push( $list, $v );
                $children[$pt] = $list;
            }
        }     
        $mitems = array();
        $id_str='';
		$position_str='';
		$catname_str='';
		$i=0;
		$cattitle_str = '';
		foreach($options as $option){
			if ($i==0){
				$id_str = '\''.$option->id . '\'';
				$cattitle_str = '\'' . $option->title . '\'';
			}else{
				$id_str = $id_str . ',' . '\''. $option->id . '\'';
				$cattitle_str = $cattitle_str . ',' . '"' . $option->title . '"';
			}
			$i++;
		} 
		} else {
			$options = array();
			$id_str='';
			$position_str='';
			$catname_str='';
			$cattitle_str = '';
		}    	
		//$selections				= JHTML::_('menu.linkoptions');
		$html_return = "
		<table width='95%' border='0' cellspacing='0' cellpadding='1' align='center' class='jv_catagory_info'>
			<tr><td>";
		$html_return .= JHTML::_('select.genericlist',  $options, 'jv_selectK2Cat', 'class="'.$class.'" MULTIPLE size="10" onchange="save_k2catagory_list(this)"', 'id', 'title', $value, $control_name.$name );
		$html_return .="
			</td><td>
				<table>
				<tr><td>
				<input class='button' type='button' value='Add' id ='paramsK2category-add' name='Add' onClick='addK2Catagory()'/>
				</td></tr>
				<tr><td>
				<input class='button' type='button' value='Remove' id ='paramsK2category-remove' name='Remove' onClick='RemoveK2Catagory()'/>
				</td></tr>
				</table>
			</td><td>
				<select id='paramsK2category-list-selected' class='inputbox' onchange='save_k2catagory_list(this)' size='10' multiple='' name='jv_selectedK2Cat'>
				</select>
			</td></tr>
		</table>
        <input type='hidden' name='".$control_name."[".$name."]' id='k2catagory_list' value='".$value."' />
        <script type=\"text/javascript\">
        	function reload_K2catagorylist(){
        		var array_cat_id = new Array(".$id_str.");
        		var array_cat_title = new Array(".$cattitle_str.");
        		var select_box = document.forms['adminForm'].elements['jv_selectK2Cat'];        		
        		var selected_box = document.forms['adminForm'].elements['jv_selectedK2Cat'];    			
    			var hidden_list = $('k2catagory_list');
                var list_cat = hidden_list.value.split(',');                
                select_box.options.length =0;
                selected_box.options.length =0;					
                for(var i=0; i<array_cat_id.length;i++){
					var isSelected=false;
					for(var j=0; j<list_cat.length; j++){
						if (list_cat[j]==array_cat_id[i]){
							isSelected=true;
							break;
						}
					}						
					if (isSelected==false){
						var opt       = document.createElement('option');							
		  				opt.value     = array_cat_id[i];
		  				opt.innerHTML = array_cat_title[i];
		  				select_box.appendChild(opt);
					}else{
						var opt       = document.createElement('option');
						opt.value     = array_cat_id[i];
		  				opt.innerHTML = array_cat_title[i];
		  				selected_box.appendChild(opt);
					}
				}								    					      
        	}
        	function addK2Catagory(){
        		var array_cat_id = new Array(".$id_str.");
        		var array_cat_title = new Array(".$cattitle_str.");
        		var select_box = document.forms['adminForm'].elements['jv_selectK2Cat'];
        		var selected_box = document.forms['adminForm'].elements['jv_selectedK2Cat'];
                for (var i=select_box.options.length-1; i >= 0;i--) {
                    if (select_box.options[i].selected) {
                    	var opt       = document.createElement('option');
		  				opt.value     = select_box.options[i].value;
		  				opt.innerHTML = select_box.options[i].innerHTML;
		  				selected_box.appendChild(opt);		  				
		  				select_box.removeChild(select_box.options[i]);
                    }
                }
                save_k2catagory_list();
        	}
        	function RemoveK2Catagory(){
        		var array_cat_id = new Array(".$id_str.");
        		var array_cat_title = new Array(".$cattitle_str.");
        		var select_box = document.forms['adminForm'].elements['jv_selectK2Cat'];
        		var selected_box = document.forms['adminForm'].elements['jv_selectedK2Cat'];
                for (var i=selected_box.options.length-1; i >= 0;i--) {
                    if (selected_box.options[i].selected) {
		  				selected_box.removeChild(selected_box.options[i]);
                    }
                }
                save_k2catagory_list();
                reload_K2catagorylist();
        	}
            function save_k2catagory_list() {
                //alert(values.options.selectedIndex);
                var hidden_list = $('k2catagory_list');
                hidden_list.value = '';
                var selected_box = document.forms['adminForm'].elements['jv_selectedK2Cat'];
                
                for (var i=selected_box.options.length-1; i >= 0;i--) {
					if (hidden_list.value == '') {
						hidden_list.value = selected_box.options[i].value;
					} else {
						hidden_list.value += ',' + selected_box.options[i].value;
					}
                }
             }                                       
             window.addEvent('domready',reload_K2catagorylist);
        </script>
        ";
		return $html_return;
		//return JHTML::_('select.genericlist',   $mitems, ''.$control_name.'['.$name.'][]', 'class="inputbox" style="width:90%;" size="10" multiple="multiple"', 'value', 'text', $value, $control_name.$name );
	}
}