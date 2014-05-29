<?php
/**
* FeedGator - Aggregate RSS newsfeed content into a Joomla! database
* @version 2.3.4
* @package FeedGator
* @author Original author Stephen Simmons
* @now continued and modified by Matt Faulds, Remco Boom & Stephane Koenig and others
* @email mattfaulds@gmail.com
* @Joomla 1.5 Version by J. Kapusciarz (mrjozo)
* @copyright (C) 2005 by Stephen Simmons - All rights reserved
* @license GNU/GPL: http://www.gnu.org/copyleft/gpl.html
*
**/

defined('_JEXEC') or die('Restricted access');

jimport('joomla.html.pane');
$options =  array('allowAllClose'=>1,'startOffset'=>-1,'startTransition'=>0,'opacityTransition'=>1);
$pane = &JPane::getInstance('sliders', $options);

?>
<div class="fgsupport">
	<div class="fglogo"></div>
	<h1>FeedGator Support</h1>
	<ul>
		<li>Are you <strong class="blue">having problems</strong> using FeedGator?</li>
		<li>Do you have questions about <strong class="blue">how to use FeedGator?</strong></li>
		<li>Do you want to configure FeedGator to <strong class="blue">run automatically?</strong></li>
		<li>Do you need <strong class="blue">custom content aggregation</strong> or other development services?</li>
	</ul>
	<h3>Here's the help you're looking for:</h3>
	<br />
	
	<?php echo $pane->startPane('pane'); ?>
	<?php echo $pane->startPanel('FeedGator development site','panel1'); ?>
	
	<?php echo $pane->endPanel(); ?>
	<?php echo $pane->startPanel('Configuring automatic imports using cron','panel2'); ?>
	
		<p>In order to have FeedGator import your RSS feeds automatically at regular intervals you must have the ability to run cron jobs on your server. If you're not sure what a cron job is, just do a Google search or contact your hosting provider for assistance.</p>
		<p>I'm working on a way to run FeedGator automatically for users without access to the cron utility, but for now, cron is the only option.</p>
		<p>Here's an example of a cron entry for cPanel hosting:</p>
		<pre>/home/youraccount/public_html/administrator/components/com_feedgator/cron.feedgator.php >/dev/null 2>&1</pre>
		
		<p>In this example the frequency is set using the interface in cPanel.</p>
		
		<pre>*/30 * * * * /usr/local/bin/php /var/www/your.web.site/htdocs/administrator/components/com_feedgator/cron.feedgator.php >> /dev/null</pre>
		
		<br/>
		<p>When debugging/setting up cron it is often worthwhile ommitting ">> /dev/null" or ">/dev/null 2>&1" which is at the end of each of the above examples. This is because that expression prevents email notification from the cron job itself which becomes irritating when you have a stable setup. However, the errors generated can be invaluable for diagnosing problems.</p>
		
		<p><strong>NOTE: cron.feedgator.php is designed to be run from the directory that it was installed to. If you move the file to another directory, you will need to edit the file to set to the proper location.</strong></p>
	
	<?php echo $pane->endPanel(); ?>
	<?php echo $pane->startPanel('Report a bad feed','panel3'); ?>
	
		<p>If you have recieved an error while trying to import a feed, please let me know. I investigate EVERY feed that is reported, because I want FeedGator to work with ALL feeds, even ones that don't conform to the RSS validation standard. I'm serious about this. BUT please follow these steps before reporting a feed.</p>
			<li>First make sure the feed URL is correct - I hate wasting time checking bogus URLs. You can do this by copy and pasting the feed URL into your browser's address bar. If you see an error when trying to view the feed with a browser, then it cannot be imported using FeedGator. If you see a web site instead of a feed when you view the URL in a browser, then it cannot be imported. This will also help to make sure you've typed the URL correctly. </li>
		</ol>
	
	<?php echo $pane->endPanel(); ?>
	<?php echo $pane->startPanel('Custom development services or support','panel4'); ?>
	
		<p>If you need personalised priority support or custom development (i.e. a plugin to support com_xxxx) then it may be available. Contact via the <a href="http://joomlacode.org/gf/project/feedgator/forum">JoomlaCode</a> forum or <a href="http://www.trafalgardesign.com">Trafalgar Design</a> for more details.</p>
		
	<?php echo $pane->endPanel(); ?>
	<?php echo $pane->endPane(); ?>
</div>