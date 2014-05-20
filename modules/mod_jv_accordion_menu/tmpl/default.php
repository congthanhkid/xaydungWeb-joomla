<?php
JHTML::_('script','jquery.min.js','modules/mod_jv_accordion_menu/assets/js/');
JHTML::_('script','jquery.nestedAccordion.js','modules/mod_jv_accordion_menu/assets/js/');
if($isActiveExpand == 1) JHTML::_('script','amenu_load.js','modules/mod_jv_accordion_menu/assets/js/');
$eventType = $params->get('event_type');
if($eventType == 0) {
	JHTML::_('stylesheet','style_hover.css','modules/mod_jv_accordion_menu/assets/css/');
} else{
	JHTML::_('stylesheet','style_click.css','modules/mod_jv_accordion_menu/assets/css/');
}
$itemId = JRequest::getVar('Itemid',1);
$document = &JFactory::getDocument();
$document->addCustomTag( '<script type="text/javascript">jQuery.noConflict();</script>' );
?>
<script type="text/javascript">
<!--//--><![CDATA[//><!--
//jQuery.noConflict();

jQuery(document).ready(function(){
	<?php if($eventType == 0) { ?>
		jQuery("#jv_amenu_side<?php echo $module->id; ?>").accordion({	
			 event : "hover",		 			
			 initShow : "ul.current",
			 objClass:".jv_maccordion",
			 slide:<?php echo $params->get('is_slide'); ?>			
		});	
	<?php } else {?>
		 jQuery("#jv_amenu_side<?php echo $module->id; ?>").accordion({						
			 initShow : "ul.current",
			 objClass:".jv_maccordion",
			 slide:<?php echo $params->get('is_slide'); ?>
		});
	<?php } ?>
	<?php if($isActiveExpand == 1){ ?>
		jQuery("#jv_amenu_side<?php echo $module->id; ?>").aMenuLoad({
			 activeItemId:<?php echo $actItemId; ?>,
			 moduleId:<?php echo $module->id; ?>,
			eventType:<?php echo $eventType; ?>				
		});		
	<?php } ?>	
});
//--><!]]>
</script>
<div style="display: none;"><a href="http://www.joomlavision.com" title="Joomla Templates">Joomla Templates</a> and Joomla Extensions by JoomlaVision.Com</div>
<?php if($eventType == 0) {?>
<div class="jv_ahovermenu_wrap">
<?php }else {?>
<div class="jv_aclickmenu_wrap">
<?php }?>
	<div id="jv_amenu_side<?php echo $module->id; ?>">
		<?php $jvAMenuHelper->showMenu($params,$itemId); ?>
	</div>
</div>