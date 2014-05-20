<?php 
JHTML::_('behavior.mootools');
JHTML::_('script','jv_tab_lago2.js','modules/mod_jv_tabs/assets/js/');
JHTML::_('stylesheet','style.css','modules/mod_jv_tabs/assets/stylies/jv_lago2/');
$moduleWidth = $params->get('Width','100%');
$titleHeight = $params->get('tHeight',30);
$lago2ModWidth = "width:100%";
$moduleId = $module->id;
if(is_numeric($moduleWidth) && $moduleWidth) $lago2ModWidth = "width:".$moduleWidth."px";
$titleHeight = "height:".$titleHeight."px";
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
   var jvTabLago2<?php echo $module->id; ?>  = new JVTabLago2({
       container:'jv_tablago2<?php echo $moduleId;?>',
       height:<?php echo $height;?>,
       duration:<?php echo $params->get('duration',1000); ?>,
       eventType:'<?php echo $params->get('mouseType'); ?>',
       effectType:'<?php echo $params->get('effect_type'); ?>'     
   });       
};
window.addEvent('domready',startJVTabs<?php echo $module->id; ?>);
</script>
<div style="display: none;"><a href="http://www.joomlavision.com" title="Joomla Templates">Joomla Templates</a> and Joomla Extensions by JoomlaVision.Com</div>
<div class="jv_tab_lago2_wrap" style="<?php echo $lago2ModWidth.";".$modHeight; ?>">
<div class="jv_tab_container">
	<div class="jv_tablago2" id="jv_tablago2<?php echo $moduleId; ?>">
		<div class="jv_tabs_cl">
		<div class="jv_tabs_cr">
		<div class="jv_tabs_bc">
		<div class="jv_tabs_tc">
		<div class="jv_tabs_br">
		<div class="jv_tabs_bl">
		<div class="jv_tabs_tr">
		<div class="jv_tabs_tl">

		<div class="lago2_title" style="<?php echo $titleHeight; ?>">
			<ul class="tabs_title">
			<?php if($tabType != 'moduleID') { ?>
				<?php $i=0; foreach($listCats as $itemCat) { ?>
					<li title="<?php echo $itemCat->title; ?>" <?php if($i==0) echo 'class="first active"'; if($i==count($listCats)-1) echo 'class="last"'; ?>><h3><span><?php echo $itemCat->title; ?></span></h3></li>
				<?php $i++; } ?>
				<?php } else { 
				$i = 0;
				foreach($aryMod as $moduleItem) {
			?>
			<li title="<?php echo $moduleItem; ?>" <?php if($i==0) echo 'class="first active"'; if($i==count($aryModule)-1) echo 'class="last"'; ?>><h3><span><?php echo $moduleItem; ?></span></h3></li>
			<?php $i++; } } ?>	
			</ul>
		</div>
		<div class="jv_tabs_panel">
		<?php if($tabType != 'moduleID') { ?>
			<?php for($i=0;$i<count($listCats);$i++) {?>
			<div class="jv_lago2_content" style="display:none;">			
			<div class="lago2_content_wrap">	
			<?php for($j=0;$j<count($listArticles[$i]);$j++) {?>
					<div class="latest_newsitem">
					<div class="latest_mainitem">				
					<?php if($listArticles[$i][$j]->thumb && ($isShowThumb == 1) &&($j<$noHeadline)) {?>
							<a href="<?php echo $listArticles[$i][$j]->link;?>" title="<?php echo $listArticles[$i][$j]->title; ?>"><img align="left" src="<?php echo $listArticles[$i][$j]->thumb;?>" /></a>							
					<?php }?> 
					<h4><a class="item_title" href="<?php echo $listArticles[$i][$j]->link; ?>" title="<?php echo $listArticles[$i][$j]->title; ?>"><?php echo $listArticles[$i][$j]->title; ?></a></h4>	
					<?php if($j<$noHeadline) { ?>
					<div class="intro"><?php echo $listArticles[$i][$j]->introtext; ?></div>					
					<?php } ?>
					<div class="cls"></div>
					</div>
				<?php if($isReadMore && ($j < $noHeadline)){ ?><p class="readmore"><a href="<?php echo $listArticles[$i][$j]->link; ?>" title="<?php echo $listArticles[$i][$j]->title; ?>"><?php echo $readMoreText; ?></a></p><?php } ?>
					</div>
				<?php }?>			
			</div>
			</div>
			<?php } } else { foreach($aryModule as $moduleItem) {?>
				<div class="jv_lago2_content" style="position: absolute;display:none;left:0px;top:0px">
				<div class="lago2_content_wrap">
				<?php echo JModuleHelper::renderModule ( $moduleItem ); ?>
				</div>				
				</div>
			<?php } } ?>
		</div>

		</div>
		</div>
		</div>
		</div>
		</div>
		</div>
		</div>
		</div>

	</div>	
</div>	
</div>