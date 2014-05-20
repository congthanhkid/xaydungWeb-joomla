<?php 
JHTML::_('behavior.mootools');
JHTML::_('script','jv_tab_news2.js','modules/mod_jv_tabs/assets/js/');
JHTML::_('stylesheet','style.css','modules/mod_jv_tabs/assets/stylies/jv_news2/');
$moduleWidth = $params->get('Width','100%');
$titleHeight = $params->get('tHeight',30);
$modWidth = "width:100%";
$moduleId = $module->id;
if(is_numeric($moduleWidth) && $moduleWidth) $modWidth = "width:".$moduleWidth."px";
$titleHeight = "height:".$titleHeight."px";
?>
<script type="text/javascript">
var startJVTabs<?php echo $moduleId; ?> = function() {
    var jvTabNews<?php echo $module->id; ?>  = new JVTabNews2({
        container:'default_container<?php echo $moduleId;?>',
        duration:<?php echo $params->get('duration',1000); ?>,
        eventType:'<?php echo $params->get('mouseType'); ?>',
        effectType:'<?php echo $params->get('effect_type'); ?>'       
    });       
};
window.addEvent('domready',startJVTabs<?php echo $module->id; ?>);
</script>
<div style="display: none;"><a href="http://www.joomlavision.com" title="Joomla Templates">Joomla Templates</a> and Joomla Extensions by JoomlaVision.Com</div>
<div class="jv_tab_news2_wrap" style="<?php echo $modWidth; ?>">
	<div class="default_container" id="default_container<?php echo $moduleId; ?>">		
			<ul class="tabs_title">
			<?php if($tabType != 'moduleID') { ?>
				<?php $i=0; foreach($listCats as $itemCat) { ?>
					<li title="<?php echo $itemCat->title; ?>" <?php if($i==0) echo 'class="first active"'; if($i==count($listCats)-1) echo 'class="last"'; ?>><a><span><?php echo $itemCat->title; ?></span></a></li>
				<?php $i++; } ?>
				<?php } else {
					$i = 0;
					foreach($aryMod as $moduleItem) {
				?>
				<li title="<?php echo $moduleItem; ?>" <?php if($i==0) echo 'class="first active"'; if($i==count($aryModule)-1) echo 'class="last"'; ?>><a><span><?php echo $moduleItem; ?></span></a></li>		
				<?php $i++; } } ?>
			</ul>	
		<div class="jv_tabs_panel_news2">
			<div class="jv_tab_panel_wrap">
			<?php if($tabType != 'moduleID') { ?>
			<?php for($i=0;$i<count($listCats);$i++) { ?>
				<div class="tab_default_content" style="display:none">
					<ul class="item">
					<?php for($j=0;$j<count($listArticles[$i]);$j++) {?>
						<?php if($j < $noHeadline) {?>
						<li <?php if($j==0) echo 'class="first"'; ?>>
						<div class="main_item">
							<?php if($listArticles[$i][$j]->thumb && ($isShowThumb == 1)) {?>
							<a href="<?php echo $listArticles[$i][$j]->link; ?>" title="<?php echo $listArticles[$i][$j]->title;?>">
								<img align="left" src="<?php echo $listArticles[$i][$j]->thumb;?>" alt="image" />
							</a>
							<?php }?>
							<h4><a class="item_title" href="<?php echo $listArticles[$i][$j]->link; ?>" title="<?php echo $listArticles[$i][$j]->title; ?>"><?php echo $listArticles[$i][$j]->title; ?></a></h4>
							<div class="intro"><?php echo $listArticles[$i][$j]->introtext; ?></div>							
						</div>
						<?php if($isReadMore) { ?><p class="readmore"><a href=""><?php echo $readMoreText; ?><a></p><?php } ?>
						</li>						
						<?php } else {?>
						<li class="title"><a href="<?php echo $listArticles[$i][$j]->link; ?>" title="<?php echo $listArticles[$i][$j]->title; ?>"><?php echo $listArticles[$i][$j]->title; ?></a></li>
						<?php }?>												
					<?php }?>
					</ul>
				</div>
			<?php } } else { foreach($aryModule as $moduleItem) {?>
				<div class="tab_default_content" style="display:none">
				<div class="tab_default_container">
					<?php echo JModuleHelper::renderModule ( $moduleItem ); ?>
				</div>	
				</div>
			<?php } } ?>
			</div>
		</div>
	</div>	
</div>