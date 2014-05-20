<?php
/**
* @version 1.5.x
* @package JoomVision Project
* @email webmaster@joomvision.com
* @copyright (C) 2008 http://www.JoomVision.com. All rights reserved.
*/
// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die( 'Restricted access' );

class JElementJvType extends JElement
{
	/**
	* Element type
	*
	* @access	protected
	* @var		string
	*/
	var	$_name = 'Jalist';

	function fetchElement($name, $value, &$node, $control_name)
	{	
		$options = array ();
		$db =& JFactory::getDBO();		
		foreach ($node->children() as $option)
		{
			$val	= $option->attributes('value');
			$text	= $option->data();
			$options[] = JHTML::_('select.option', $val, JText::_($text));
		}
		$class = ( $node->attributes('class') ? 'class="'.$node->attributes('class').'"' : 'class="inputbox"' );
		//$class .= " onchange=\"javascript: switchGroup(this)\"";
		$str = JHTML::_('select.genericlist',  $options, ''.$control_name.'['.$name.']', $class, 'value', 'text', $value, $control_name.$name);		
		$cId = JRequest::getVar('cid','');
		if($cId !='') $cId = $cId[0];
		if($cId == ''){
			$cId = JRequest::getVar('id');
		}
		$sql = "SELECT params FROM #__modules WHERE id=$cId";
		$db->setQuery($sql);
		$paramsConfigObj = $db->loadObjectList();
		$db->setQuery($sql);
		$data = $db->loadResult();
		$params = new JParameter($data);
		$tabType = $params->get('type','moduleID');	
		$viewContent = $params->get('categoryID-view','word_count');
		$effectType = $params->get('jv_tabs_style','jv_default');	
		?>
		<script type="text/javascript">	
			window.addEvent('load',function(){						
				var selectType = function(type){
					switch(type){
						case "moduleID":
							var els = document.adminForm.elements;							
							for(i=0;i<els.length;i++){
								var el = els[i];
								if(el.id != '' && el.id != null){
									if(el.id.test('paramsmoduleID-')) el.disabled = false;
									if(el.id.test('categoryID-')) el.disabled = true;
								}
							}
							$('paramsk2_category').disabled = true;	
							$('paramscategory_ordering').disabled = true;
							$('paramsK2category-list-selected').disabled = true;
							$('paramsK2category-add').disabled = true;
							$('paramsK2category-remove').disabled = true;
							$('paramsintro_length').disabled = true;						
							break;
						case "categoryID":
							var els = document.adminForm.elements;							
							for(i=0;i<els.length;i++){
								var el = els[i];
								if(el.id != '' && el.id != null){
									if(el.id.test('paramsmoduleID-')) el.disabled = true;
									if(el.id.test('categoryID-')) el.disabled = false;
								}
							}
							$('paramsk2_category').disabled = true;	
							$('paramscategory_ordering').disabled = false;
							$('paramsK2category-list-selected').disabled = true;
							$('paramsK2category-add').disabled = true;
							$('paramsK2category-remove').disabled = true;	
							$('paramsintro_length').disabled = false;
							break;
						case "k2_content":
							var els = document.adminForm.elements;							
							for(i=0;i<els.length;i++){
								var el = els[i];
								if(el.id != '' && el.id != null){
									if(el.id.test('paramsmoduleID-')) el.disabled = true;
									if(el.id.test('categoryID-')) el.disabled = false;
								}
							}
							$('paramscategoryID-list').disabled = true;
							$('paramscategoryID-add').disabled = true;
							$('paramscategoryID-remove').disabled = true;
							$('paramscategoryID-list-selected').disabled = true;
							$('paramsk2_category').disabled = false;
							$('paramscategory_ordering').disabled = false;
							$('paramsK2category-list-selected').disabled = false;
							$('paramsK2category-add').disabled = false;
							$('paramsK2category-remove').disabled = false;	
							$('paramsintro_length').disabled = false;
							break;	
					}
				};
				var selectViewContent = function(type){
					switch(type){
						case "word_count":
							$('paramsintro_length').getParent().getParent().setStyle('display','');
						break;
						case "introtext":
							$('paramsintro_length').getParent().getParent().setStyle('display','none');
						break;	
						case "fulltext":
							$('paramsintro_length').getParent().getParent().setStyle('display','none');
						break;
					}
				};				
				selectViewContent("<?php echo $viewContent; ?>");
				selectType("<?php echo $tabType; ?>");				
				$('paramscategoryID-view').addEvent('change',function(){
					selectViewContent(this.value);
				});
				$('paramstype').addEvent('change',function(){
					selectType(this.value);                
		  		});		  		
			});
		</script>
	<?php 	
			return $str;
	}
}
?>
