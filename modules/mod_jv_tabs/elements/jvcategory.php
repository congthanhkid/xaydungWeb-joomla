<?php
/**
* @version 1.5.x
* @package JoomVision Project
* @email webmaster@joomvision.com
* @copyright (C) 2008 http://www.JoomVision.com. All rights reserved.
*/
// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die( 'Restricted access' );

class JElementJvcategory extends JElement
{
	/**
	 * Element name
	 *
	 * @access	protected
	 * @var		string
	 */
	var	$_name = 'JvCategory'; 

	function fetchElement($name, $value, &$node, $control_name)
    {
        $db = &JFactory::getDBO();

        $section    = $node->attributes('section');
        $class        = $node->attributes('class');
        if (!$class) {
            $class = "inputbox";
        }

        if (!isset ($section)) {
            // alias for section
            $section = $node->attributes('scope');
            if (!isset ($section)) {
                $section = 'content';
            }
        }

        if ($section == 'content') {
            // This might get a conflict with the dynamic translation - TODO: search for better solution
            $query = 'SELECT c.id, CONCAT_WS( "/",s.title, c.title ) AS title' .
                ' FROM #__categories AS c' .
                ' LEFT JOIN #__sections AS s ON s.id=c.section' .
                ' WHERE c.published = 1' .
                ' AND s.scope = '.$db->Quote($section).
                ' ORDER BY s.title, c.title';
        } else {
            $query = 'SELECT c.id, c.title' .
                ' FROM #__categories AS c' .
                ' WHERE c.published = 1' .
                ' AND c.section = '.$db->Quote($section).
                ' ORDER BY c.title';
        }
        $db->setQuery($query);
		$options = $db->loadObjectList();		
		$id_str='';
		$position_str='';
		$catname_str='';
		$i=0;
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
		$html_return = "
		<table width='95%' border='0' cellspacing='0' cellpadding='1' align='center' class='jv_catagory_info'>
			<tr><td>";
		$html_return .= JHTML::_('select.genericlist',  $options, 'jv_selectCat', 'class="'.$class.'" MULTIPLE size="10" onchange="save_catagory_list(this)"', 'id', 'title', $value, $control_name.$name );
		$html_return .="
			</td><td>
				<table>
				<tr><td>
				<input class='button' type='button' value='Add' id ='paramscategoryID-add' name='Add' onClick='addCatagory()'/>
				</td></tr>
				<tr><td>
				<input class='button' type='button' value='Remove' id ='paramscategoryID-remove' name='Remove' onClick='RemoveCatagory()'/>
				</td></tr>
				</table>
			</td><td>
				<select id='paramscategoryID-list-selected' class='inputbox' onchange='save_catagory_list(this)' size='10' multiple='' name='jv_selectedCat'>
				</select>
			</td></tr>
		</table>
        <input type='hidden' name='".$control_name."[".$name."]' id='catagory_list' value='".$value."' />
        <script type=\"text/javascript\">
        	function reload_catagorylist(){
        		var array_cat_id = new Array(".$id_str.");
        		var array_cat_title = new Array(".$cattitle_str.");
        		var select_box = document.forms['adminForm'].elements['jv_selectCat'];
        		var selected_box = document.forms['adminForm'].elements['jv_selectedCat'];    		
    			var hidden_list = $('catagory_list');
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
        	function addCatagory(){
        		var array_cat_id = new Array(".$id_str.");
        		var array_cat_title = new Array(".$cattitle_str.");
        		var select_box = document.forms['adminForm'].elements['jv_selectCat'];
        		var selected_box = document.forms['adminForm'].elements['jv_selectedCat'];
                for (var i=select_box.options.length-1; i >= 0;i--) {
                    if (select_box.options[i].selected) {
                    	var opt       = document.createElement('option');
		  				opt.value     = select_box.options[i].value;
		  				opt.innerHTML = select_box.options[i].innerHTML;
		  				selected_box.appendChild(opt);
		  				select_box.removeChild(select_box.options[i]);
                    }
                }
                save_catagory_list();
        	}
        	function RemoveCatagory(){
        		var array_cat_id = new Array(".$id_str.");
        		var array_cat_title = new Array(".$cattitle_str.");
        		var select_box = document.forms['adminForm'].elements['jv_selectCat'];
        		var selected_box = document.forms['adminForm'].elements['jv_selectedCat'];
                for (var i=selected_box.options.length-1; i >= 0;i--) {
                    if (selected_box.options[i].selected) {
		  				selected_box.removeChild(selected_box.options[i]);
                    }
                }
                save_catagory_list();
                reload_catagorylist();
        	}
            function save_catagory_list() {              
                var hidden_list = $('catagory_list');
                hidden_list.value = '';
                var selected_box = document.forms['adminForm'].elements['jv_selectedCat'];                
                for (var i=selected_box.options.length-1; i >= 0;i--) {
					if (hidden_list.value == '') {
						hidden_list.value = selected_box.options[i].value;
					} else {
						hidden_list.value += ',' + selected_box.options[i].value;
					}
                }
             }                                       
             window.addEvent('domready',reload_catagorylist);
        </script>
        ";
		return $html_return;
	}

}
