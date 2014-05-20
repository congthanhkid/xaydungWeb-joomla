<?php 
JHTML::_('behavior.mootools');
JHTML::_('script','jv_tab_news.js','modules/mod_jv_tabs/assets/js/');
JHTML::_('stylesheet','style.css','modules/mod_jv_tabs/assets/stylies/jv_news/');
$moduleWidth = $params->get('Width','100%');
$titleHeight = $params->get('tHeight',31);
$newsModWidth = "width:100%";
$moduleId = $module->id;
if(is_numeric($moduleWidth) && $moduleWidth) $newsModWidth = "width:".$moduleWidth."px";
$titleHeight = "height:".$titleHeight."px";
?>
<script type="text/javascript">
     var startJVTabs<?php echo $moduleId; ?> = function() {
        var jvTabNews<?php echo $module->id; ?>  = new JVTabNews({
            container:'jv_tabnews<?php echo $moduleId;?>',
            duration:<?php echo $params->get('duration',1000); ?>,
            eventType:'<?php echo $params->get('mouseType'); ?>',
            isLinkSubTab:<?php echo $isLinkSubTab; ?>,
            effectType:'<?php echo $params->get('effect_type'); ?>'         
        });       
    };
   window.addEvent('domready',startJVTabs<?php echo $module->id; ?>);
</script>
<div style="display: none;"><a href="http://www.joomlavision.com" title="Joomla Templates">Joomla Templates</a> and Joomla Extensions by JoomlaVision.Com</div>
<div class="jv_tab_news_container" style="<?php echo $newsModWidth; ?>">
<div class="jv_tab_news_wrap">
	<div class="jv_tabnews" id="jv_tabnews<?php echo $moduleId; ?>">
	<div class="jv_tabnews_bl">
		<div class="news_title" style="<?php echo $titleHeight; ?>">
			<ul class="tabs_title">
			<?php if($tabType != 'moduleID') { ?>
				<?php $i=0; foreach($listCats as $itemCat) { ?>
					<li title="<?php echo $itemCat->title; ?>" <?php if($i==0) echo 'class="first active"'; if($i==count($listCats)-1) echo 'class="last"'; ?>><h3><span><?php echo $itemCat->title; ?></span></h3></li>
				<?php $i++; } ?>
			<?php } else { 
				$i = 0;
				foreach($aryMod as $moduleItem) {
			?>					
			<li title="<?php echo $moduleItem; ?>" <?php if($i==0) echo 'class="first active"'; if($i==count($moduleItem)-1) echo 'class="last"'; ?>><h3><span><?php echo $moduleItem; ?></span></h3></li>
			<?php $i++; } } ?>	
			</ul>
		</div>
		<div class="jv_tabs_panel">
			<?php if($tabType != 'moduleID') { ?>
			<?php for($i=0;$i<count($listCats);$i++) {?>
			<div class="jv_news_content" style="position: absolute;display:none">
				<ul>
				<?php for($j=0;$j<count($listArticles[$i]);$j++) {?>
					<li><h3 class="news_title_wrap"><a title="<?php echo $listArticles[$i][$j]->title; ?>" href="<?php echo $listArticles[$i][$j]->link; ?>"><?php echo $listArticles[$i][$j]->title;?></a></h3>					
					<?php if($j<$noHeadline) { ?>
					<div class="news_item">
					<div class="news_main_item">
						<?php if($listArticles[$i][$j]->thumb && ($isShowThumb == 1)) {?>
							<a href="<?php echo $listArticles[$i][$j]->link;?>" title="<?php echo $listArticles[$i][$j]->title; ?>"><img align="left" src="<?php echo $listArticles[$i][$j]->thumb;?>" /></a>							
						<?php }?> 	
						<?php  echo $listArticles[$i][$j]->introtext;?>				
					</div>
					<?php if($isReadMore) { ?><p class="readmore"><a href="<?php echo $listArticles[$i][$j]->link;?>" title="<?php echo $listArticles[$i][$j]->title; ?>"><?php echo $readMoreText; ?></a></p>	<?php } ?>				
					</div>	
					<?php } ?>				
					</li>
				<?php }?>
				</ul>
			</div>
			<?php } } else { foreach($aryModule as $moduleItem) {?>
				<div class="jv_news_content" style="position: absolute;display:none">
					<div class="jv_news_wrap">				
					<?php echo JModuleHelper::renderModule ( $moduleItem ); ?>
					</div>
				</div>
			<?php } } ?>
		</div>
	</div>
	</div>
</div>
</div>