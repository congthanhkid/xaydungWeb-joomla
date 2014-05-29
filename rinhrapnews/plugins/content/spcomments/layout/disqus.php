<?php
/**
* @author    JoomShaper http://www.joomshaper.com
* @copyright Copyright (C) 2010 - 2013 JoomShaper
* @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2
*/
?>

<div style="clear:both"></div>
<div class="spcomments_disqus">
<div id="disqus_thread"></div>
<script type="text/javascript">
  /**
	* var disqus_identifier; [Optional but recommended: Define a unique identifier (e.g. post id or slug) for this thread] 
	*/
	<?php
	$devmode = $this->params->get('disqus_devmode'); // return the boolean 
	if ($devmode) 
		echo 'var disqus_developer = "1";';
	?>
	
	var disqus_url= "<?php echo $this->_url; ?>";
	var disqus_identifier = "<?php echo $this->_postID; ?>";
	var disqus_config = function () {
	  this.language = "<?php echo $this->params->get('disqus_lang','en') ?>"; // get language id
	};
  (function() {
   var dsq = document.createElement('script');
   dsq.type = 'text/javascript';
   dsq.async = true;
   dsq.src = 'http://<?php echo $this->params->get('disqus_subdomain'); ?>.disqus.com/embed.js';
   (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
  })();
</script>
<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript=<?php echo $this->params->get('disqus_subdomain'); ?>">comments powered by Disqus.</a></noscript>
</div>