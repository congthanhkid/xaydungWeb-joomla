<?php
defined('_JEXEC') or die('Restricted access');
JHTML::_('behavior.mootools');
JHTML::_('script','jv_eoty.js','modules/mod_jv_headline/assets/js/');
JHTML::_('stylesheet','jv_eoty.css','modules/mod_jv_headline/assets/css/');
$cssMod = "width:".$params->get('jv2_width',960)."px;height:".$params->get('jv2_height',337)."px";
?>
<script type="text/javascript">
	var startSlideshow<?php echo $moduleId; ?> = function() {
	var jvEoty = new JVSlideEoty({
		container:'slider<?php echo $moduleId; ?>',
		slices:<?php echo (int)$params->get('dilo_no_slice',15); ?>,
		effect:'<?php echo $params->get('dilo_effect_type','random'); ?>',
		autoRun:<?php echo$params->get('jv2_autorun',1); ?>,
		directionNav:<?php echo $params->get('dilo_enable_btn',1); ?>,
		enableDes:<?php echo $params->get('dilo_enable_description',1); ?>,
		heightDesc:<?php echo $params->get('dilo_height_des',50); ?>
	}); 
};
window.addEvent('domready',startSlideshow<?php echo $moduleId; ?>);
</script>
<div style="display: none;"><a title="Joomla Templates" href="http://www.joomlavision.com">Joomla Templates</a> and Joomla Extensions by JoomlaVision.Com</div>
<div class="jv_eoty_wrap" style="<?php echo $cssMod; ?>">
	<div class="eotySlider" id="slider<?php echo $moduleId; ?>">
		<?php foreach($slides as $item) { ?>
			<?php if($item->thumbl) { ?><img src="<?php echo $item->thumbl; ?>" alt="" /> <?php } ?>
		<?php } ?>
		<?php foreach($slides as $item) { ?>
			<div class="description" style="display:none">
				<?php if($params->get('eoty_enable_link_article')) { ?>
				<h2><a href="<?php echo $item->link; ?>"><?php echo $item->title; ?></a></h2>
				<?php } else { ?>
				<h2><?php echo $item->title; ?></h2>	
				<?php } ?>
				<p><?php echo $item->introtext; ?></p>
			</div>
		<?php } ?>
	</div>
</div>