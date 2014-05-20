<?php
/**
* @version 1.5.x
* @package JoomVision Project
* @email webmaster@joomvision.com
* @copyright (C) 2008 http://www.JoomVision.com. All rights reserved.
*/
// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die( 'Restricted access' );

class JElementJvModuleList extends JElement
{
	/**
	 * Element name
	 *
	 * @access	protected
	 * @var		string
	 */
	var	$_name = 'JvModuleList';

	function fetchElement($name, $value, &$node, $control_name)
	{

		$db = &JFactory::getDBO();
		$class        = $node->attributes('class');

		if (!$class) {
			$class = "inputbox";
		}

		$query = 'SELECT a.*'
		. ' FROM #__modules AS a'
		. ' WHERE a.published = 1'			//TODO: rem it if don't want to check
		. ' AND a.module <> \'mod_jv_tabs\''
		//. ' ORDER BY a.id'
		;

		$db->setQuery($query);
		$options = $db->loadObjectList();		
		$id_str='';
		$position_str='';
		$modname_str='';
		$i=0;
		foreach($options as $option){
			if ($i==0){
				$id_str = '\''.$option->id . '\'';
				$position_str = '\'' . $option->position . '\'';
				$modtitle_str = '\'' . $option->title . '\'';
			}else{
				$id_str = $id_str . ',' . '\''. $option->id . '\'';
				$position_str = $position_str . ',' . '"' . $option->position .'"';
				$modtitle_str = $modtitle_str . ',' . '"' . $option->title . '"';
			}
			$i++;
		}		
		$html_return = "
		<table width='95%' border='0' cellspacing='0' cellpadding='1' align='center' class='jv_module_info'>
			<tr><td>";
		$html_return .= JHTML::_('select.genericlist',  $options, 'jv_selectMod', 'class="'.$class.'" MULTIPLE size="10" onchange="save_module_list(this)"', 'id', 'title', $value, $control_name.$name );
		$html_return .="
			</td><td>
				<table>
				<tr><td>
				<input class='button' type='button' value='Add' id ='paramsmoduleID-add' name='Add' onClick='addModule()'/>
				</td></tr>
				<tr><td>
				<input class='button' type='button' value='Remove' id ='paramsmoduleID-remove' name='Remove' onClick='RemoveModule()'/>
				</td></tr>
				</table>
			</td><td>
				<select id='paramsmoduleID-list-selected' class='inputbox' onchange='save_module_list(this)' size='10' multiple='' name='jv_selectedMod'>
				</select>
			</td></tr>
		</table>
        <input type='hidden' name='".$control_name."[".$name."]' id='module_list' value='".$value."' />
        <script type=\"text/javascript\">
        	function reload_modulelist(position){
        		var array_mod_id = new Array(".$id_str.");
        		var array_mod_position = new Array(".$position_str.");
        		var array_mod_title = new Array(".$modtitle_str.");
        		var select_box = document.forms['adminForm'].elements['jv_selectMod'];
        		var selected_box = document.forms['adminForm'].elements['jv_selectedMod'];
    			var length = select_box.options.length;
    			var hidden_list = $('module_list');
                var list_mod = hidden_list.value.split(',');                
                
                select_box.options.length =0;
                selected_box.options.length =0;	  					

				for(var i=0; i<array_mod_id.length;i++){
					var isSelected=false;
					for(var j=0; j<list_mod.length; j++){
						if (list_mod[j]==array_mod_id[i]){
							isSelected=true;
							break;
						}
					}
					if (array_mod_position[i]==position){						
						if (isSelected==false){
							var opt       = document.createElement('option');							
		  					opt.value     = array_mod_id[i];
		  					opt.innerHTML = array_mod_title[i];
		  					select_box.appendChild(opt);
	  					}
					}
					if (isSelected==true){
						var opt       = document.createElement('option');
						opt.value     = array_mod_id[i];
		  				opt.innerHTML = array_mod_position[i] + '-' + array_mod_title[i];
		  				selected_box.appendChild(opt);
					}
				}								    					      
        	}
        	function addModule(){
        		var array_mod_id = new Array(".$id_str.");
        		var array_mod_position = new Array(".$position_str.");
        		var array_mod_title = new Array(".$modtitle_str.");
        		var select_box = document.forms['adminForm'].elements['jv_selectMod'];
        		var selected_box = document.forms['adminForm'].elements['jv_selectedMod'];
        		var mod_position = $('paramsmoduleID-position');
                for (var i=select_box.options.length-1; i >= 0;i--) {
                    if (select_box.options[i].selected) {
                    	var opt       = document.createElement('option');
		  				opt.value     = select_box.options[i].value;
		  				opt.innerHTML = (mod_position.value + '-' + select_box.options[i].innerHTML);
		  				selected_box.appendChild(opt);
		  				select_box.remove(i);
                    }
                }
                save_module_list();
        	}
        	function RemoveModule(){
        		var array_mod_id = new Array(".$id_str.");
        		var array_mod_position = new Array(".$position_str.");
        		var array_mod_title = new Array(".$modtitle_str.");
        		var select_box = document.forms['adminForm'].elements['jv_selectMod'];
        		var selected_box = document.forms['adminForm'].elements['jv_selectedMod'];
        		var mod_position = $('paramsmoduleID-position');
                for (var i=selected_box.options.length-1; i >= 0;i--) {
                    if (selected_box.options[i].selected) {
		  				selected_box.remove(i);
                    }
                }
                save_module_list();
                var pos_select_box = document.forms['adminForm'].elements['params[moduleID-position]'];
             	reload_modulelist(pos_select_box.value);
        	}
            function save_module_list() {
                //alert(values.options.selectedIndex);
                var hidden_list = $('module_list');
                hidden_list.value = '';
                var selected_box = document.forms['adminForm'].elements['jv_selectedMod'];
                
                for (var i=selected_box.options.length-1; i >= 0;i--) {
					if (hidden_list.value == '') {
						hidden_list.value = selected_box.options[i].value;
					} else {
						hidden_list.value += ',' + selected_box.options[i].value;
					}
                }
             }
             var pos_select_box = document.forms['adminForm'].elements['params[moduleID-position]'];
             reload_modulelist(pos_select_box.value);                                       
             //window.addEvent('domready',reload_modulelist);
        </script>
        ";
		return $html_return;
	}

}

