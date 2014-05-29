<?php
/**
* @author    JoomShaper http://www.joomshaper.com
* @copyright Copyright (C) 2010 - 2013 JoomShaper
* @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2
*/
?>
<div style="clear:both"></div>
<div class="spcomments_fb">
	<div id="fb-root"></div>
	<script src="http://connect.facebook.net/<?php echo $this->params->get('fb_lang','en_US'); ?>/all.js#appId=APP_ID&amp;xfbml=1"></script>
	<fb:comments href="<?php echo $this->_url; ?>" width="<?php echo $this->params->get('fb_width'); ?>" num_posts="<?php echo $this->params->get('fb_cpp'); ?>"></fb:comments>
</div>