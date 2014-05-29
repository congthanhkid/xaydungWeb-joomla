<?php
/**
* @author    JoomShaper http://www.joomshaper.com
* @copyright Copyright (C) 2010 - 2013 JoomShaper
* @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2
*/
?>
<script type='text/javascript'>
//<![CDATA[ 
	<?php
	$devmode = $this->params->get('disqus_devmode'); // return the boolean 
	if ($devmode) 
		echo 'var disqus_developer = "1";';
	?>
	var disqus_shortname = '<?php echo $this->params->get('disqus_subdomain'); ?>';
	(function () {
	  var s = document.createElement('script'); s.async = true;
	  s.src = 'http://disqus.com/forums/' + disqus_shortname + '/count.js?v=<?php echo time(); ?>';
	  (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(s);
	}());
//]]> 
</script>
