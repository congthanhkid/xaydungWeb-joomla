<?php 
JHTML::_('behavior.mootools');
JHTML::_('script','jv_tab_default.js','modules/mod_jv_tabs/assets/js/');
JHTML::_('stylesheet','style.css','modules/mod_jv_tabs/assets/stylies/jv_default/');
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
if($tabType != 'moduleID') $isModule = 0;
else $isModule = 1;
?>
<script type="text/javascript">
var startJVTabs<?php echo $moduleId; ?> = function() {
   var jvTabDefault<?php echo $module->id; ?>  = new JVTabDefault({
       container:'jv_tabdefault<?php echo $moduleId;?>',
       height:<?php echo $height;?>,
       duration:<?php echo $params->get('duration',1000); ?>,
       eventType:'<?php echo $params->get('mouseType'); ?>',
       isModule:<?php echo $isModule; ?>,
       effectType:'<?php echo $params->get('effect_type'); ?>'        
   });       
};
window.addEvent('domready',startJVTabs<?php echo $module->id; ?>);
</script>
<div style="display: none;"><a href="http://www.joomlavision.com" title="Joomla Templates">Joomla Templates</a> and Joomla Extensions by JoomlaVision.Com</div>
<div class="jv_tab_default_wrap" style="<?php echo $lago2ModWidth.";".$modHeight; ?>">
<div class="jv_default_container">
	<div class="jv_tabdefault" id="jv_tabdefault<?php echo $moduleId; ?>">		
			<ul class="tabs_title">
			<?php if($tabType != 'moduleID') { ?>
				<?php $i=0; foreach($listCats as $itemCat) { ?>
					<li title="<?php echo $itemCat->title; ?>" <?php if($i==0) echo 'class="first active"'; if($i==count($listCats)-1) echo 'class="last"'; ?>><h3><span><?php echo $itemCat->title; ?></span></h3></li>
				<?php $i++; } ?>				
				<?php } else { 
				$i = 0;
				foreach($aryMod as $moduleItem) {
			?>
			<li title="<?php echo $moduleItem;?>" <?php if($i==0) echo 'class="first active"'; if($i==count($aryMod)-1) echo 'class="last"'; ?>><h3><span><?php echo $moduleItem; ?></span></h3></li>
			<?php $i++; } } ?>	
			</ul>				
		<div class="jv_tabs_panel">	
		<div class="jv_tabs_panel_r">
		<div class="jv_tabs_panel_bc">
		<div class="jv_tabs_panel_bl">
		<div class="jv_tabs_panel_br">
		<div class="panel_tc">
		<div class="panel_tl">
		<div class="panel_tr">	
		<div class="jv_default_wrap1">
		<div class="jv_default_wrap2">
		<?php if($tabType != 'moduleID') { ?>
			<?php for($i=0;$i<count($listCats);$i++) {?>
			<div class="jv_default_content" style="display:none" >			
				<ul>
				<?php for($j=0;$j<count($listArticles[$i]);$j++) {?>
					<li class="jv_default_item"><h3 class="news_title_wrap"><a title="<?php echo $listArticles[$i][$j]->title; ?>" href="<?php echo $listArticles[$i][$j]->link; ?>"><?php echo $listArticles[$i][$j]->title;?></a></h3>					
					<?php if($j<$noHeadline)  { ?>
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
			<?php } } else { foreach($aryModule as $moduleItem) { ?>
				<div class="jv_default_content" style="display:none;">
				<div class="jv_default_conten_wrap">
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
</div>