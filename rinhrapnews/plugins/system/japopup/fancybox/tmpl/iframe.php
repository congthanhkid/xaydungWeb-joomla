<?php
/**
 * ------------------------------------------------------------------------
 * JA Popup Plugin for Joomla 2.5
 * ------------------------------------------------------------------------
 * Copyright (C) 2004-2011 J.O.O.M Solutions Co., Ltd. All Rights Reserved.
 * @license - GNU/GPL, http://www.gnu.org/licenses/gpl.html
 * Author: J.O.O.M Solutions Co., Ltd
 * Websites: http://www.joomlart.com - http://www.joomlancers.com
 * ------------------------------------------------------------------------
 */

// no direct access
defined('_JEXEC') or die('Restricted access');
?>
<a <?php echo $arrData['rel'];?> class="<?php echo $arrData['class']; ?>"  href="<?php echo $arrData['href']; ?>" title="<?php echo $arrData['title'] ?>" ><?php echo $arrData['content'] ?></a>
<?php if ($arrData['rel'] != ''){ ?>
	<script language="javascript" type="text/javascript">
		/* <![CDATA[ */
		jQuery(document).ready(function() {
		if( ! jQuery("a.<?php echo $arrData['group']; ?>").fancybox({
					hideOnContentClick: false,
					<?php if($arrData['onopen'] != "") echo "callbackOnShow: ".$arrData['onopen'].","; ?>
					<?php if($arrData['onclose'] != "") echo "callbackOnClose: ".$arrData['onclose'].","; ?>
					zoomSpeedIn: <?php echo $arrData['zoomSpeedIn']; ?>,
					zoomSpeedOut: <?php echo $arrData['zoomSpeedOut']; ?>,
					overlayShow: <?php echo $arrData['overlayShow']; ?>,
					overlayOpacity: <?php echo $arrData['overlayOpacity']; ?>,
					centerOnScroll: <?php echo $arrData['centerOnScroll']; ?>,
					frameWidth: <?php echo $arrData['frameWidth']; ?>,
					frameHeight: <?php echo $arrData['frameHeight']; ?> }) )
			jQuery("a.<?php echo $arrData['group']; ?>").fancybox();
		});
		/* ]]> */
		</script>
<?php
	}else{
	?>
		<script language="javascript" type="text/javascript">
			/* <![CDATA[ */
			jQuery(document).ready(function() {
			jQuery("a.<?php echo $arrData['group']; ?>").fancybox({
						hideOnContentClick: false,
						<?php if($arrData['onopen'] != "") echo "callbackOnShow: ".$arrData['onopen'].","; ?>
						<?php if($arrData['onclose'] != "") echo "callbackOnClose: ".$arrData['onclose'].","; ?>
						zoomSpeedIn: <?php echo $arrData['zoomSpeedIn']; ?>,
						zoomSpeedOut: <?php echo $arrData['zoomSpeedOut']; ?>,
						overlayShow: <?php echo $arrData['overlayShow']; ?>,
						overlayOpacity: <?php echo $arrData['overlayOpacity']; ?>,
						centerOnScroll: <?php echo $arrData['centerOnScroll']; ?>,
						frameWidth: <?php echo $arrData['frameWidth']; ?>,
						frameHeight: <?php echo $arrData['frameHeight']; ?> })
			});
			/* ]]> */
			</script>
		<?php
	}
?>