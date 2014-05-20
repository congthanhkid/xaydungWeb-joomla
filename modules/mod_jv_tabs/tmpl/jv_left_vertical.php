<?php 
JHTML::_('behavior.mootools');
JHTML::_('script','jv_left_vertical.js','modules/mod_jv_tabs/assets/js/');
JHTML::_('stylesheet','style.css','modules/mod_jv_tabs/assets/stylies/jv_left_vertical/');
$moduleWidth = $params->get('Width','100%');
$titleHeight = $params->get('tHeight',30);
$titleWidth = $params->get('tWidth',120);
$modWidth = "width:100%";
$moduleId = $module->id;
if(is_numeric($moduleWidth) && $moduleWidth) $modWidth = "width:".$moduleWidth."px";
$titleHeight = "height:".$titleHeight."px";
if(is_numeric($titleWidth) && $titleWidth) $titleWidth = "width:".$titleWidth."px";
$moduleHeight = $params->get('Height','auto');
$modHeight = "";
if(is_numeric($moduleHeight) && $moduleHeight) {
	$height = $moduleHeight;
	$modHeight = "height:".$moduleHeight."px";
} else {
	$height = 0;
}
?>
<script type="text/javascript">
var startJVTabs<?php echo $moduleId; ?> = function() {
   var jvTabVertical<?php echo $module->id; ?>  = new JVTabVertical({
       container:'vleft_container<?php echo $moduleId;?>',
       height:<?php echo $height;?>,
       duration:<?php echo $params->get('duration',1000); ?>,
       eventType:'<?php echo $params->get('mouseType'); ?>',
       effectType:'<?php echo $params->get('effect_type'); ?>'         
   });     
};
window.addEvent('domready',startJVTabs<?php echo $module->id; ?>);
</script>
<div style="display: none;"><a href="http://www.joomlavision.com" title="Joomla Templates">Joomla Templates</a> and Joomla Extensions by JoomlaVision.Com</div>
<div class="jv_tab_vleft" style="<?php echo $modWidth.";".$modHeight; ?>">
	<div class="container" id="vleft_container<?php echo $moduleId; ?>">
		<div class="vleft_title" style="<?php echo $titleWidth; ?>" >
			<ul class="jv_tabs_title">
			<?php if($tabType != 'moduleID') { ?>
				<?php for($i=0;$i<count($listCats);$i++) {?>
					<li title="<?php echo $listCats[$i]->title; ?>" <?php if($i==0) echo 'class="first active"'; if($i==count($listCats)-1) echo 'class="last"'; ?> title="<?php echo $listCats[$i]->title; ?>"><h3><?php echo $listCats[$i]->title;?></h3></li>
				<?php } } else {				
				$i = 0;
				foreach($aryMod as $moduleItem) {
			?>
			<li title="<?php echo $moduleItem; ?>" <?php if($i==0) echo 'class="first active"'; if($i==count($aryModule)-1) echo 'class="last"'; ?>><h3><span><?php echo $moduleItem;?></span></h3></li>
			<?php $i++; } } ?>
			</ul>
		</div>
		<div class="vleft_panel">
		<?php if($tabType != 'moduleID') { ?>
			<?php for($i=0;$i<count($listCats);$i++) {?>
				<div class="vleft_panel_item" style="display:none">
				<ul>
					<?php for($j=0;$j<count($listArticles[$i]);$j++) {?>
					<li><h3 class="vleft_title_wrap"><a title="<?php echo $listArticles[$i][$j]->title; ?>" href="<?php echo $listArticles[$i][$j]->link; ?>"><?php echo $listArticles[$i][$j]->title;?></a></h3>					
					<?php if($j<$noHeadline) { ?>
					<div class="vleft_item">
						<div class="main_item"><?php if($listArticles[$i][$j]->thumb && ($isShowThumb == 1)) {?>
							<a href="<?php echo $listArticles[$i][$j]->link;?>" title="<?php echo $listArticles[$i][$j]->title; ?>"><img align="left" src="<?php echo $listArticles[$i][$j]->thumb;?>" /></a>							
						<?php }?> 	
						<?php  echo $listArticles[$i][$j]->introtext;?>				
					</div>
					<?php if($params->get('categoryID-readmore')) { ?><p class="readmore"><a href="<?php echo $listArticles[$i][$j]->link;?>" title="<?php echo $listArticles[$i][$j]->title; ?>"><?php echo $params->get('categoryID-readmoreText'); ?></a></p> <?php } ?>
					</div>
					<?php } ?>					
					</li>
					<?php }?>
				</ul>	
				</div>
			<?php } } else { foreach($aryModule as $moduleItem) {?>
				<div class="vleft_panel_item" style="display:none">
				<div class="vleft_panel_container">
				<?php echo JModuleHelper::renderModule ( $moduleItem ); ?>
				</div>				
				</div>
			<?php } } ?>
		</div>
	</div>
</div>