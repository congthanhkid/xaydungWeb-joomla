<?php
/**
* @author    JoomShaper http://www.joomshaper.com
* @copyright Copyright (C) 2010 - 2013 JoomShaper
* @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2
*/
?>
<div style="clear:both"></div>
<div class="spcomments_intenseDebate">
	<script>
	var idcomments_acct = '<?php echo $this->params->get('intensedebate_acc'); ?>';
	var idcomments_post_id = '<?php echo $this->_postID; ?>';
	var idcomments_post_url = '<?php echo $this->_url; ?>';
	</script>
	<span id="IDCommentsPostTitle" style="display:none"></span>
	<script type='text/javascript' src='http://www.intensedebate.com/js/genericCommentWrapperV2.js'></script>
</div>