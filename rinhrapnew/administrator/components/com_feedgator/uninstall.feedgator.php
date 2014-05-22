<?php

/**

* FeedGator - Aggregate RSS newsfeed content into a Joomla! database
* @version 2.3 (stable)
* @package FeedGator
* @author Original author Stephen Simmons
* @now continued and modified by Matt Faulds, Remco Boom & Stephane Koenig and others
* @email mattfaulds@gmail.com
* @Joomla 1.5 Version by J. Kapusciarz (mrjozo)
* @copyright (C) 2005 by Stephen Simmons - All rights reserved
* @license GNU/GPL: http://www.gnu.org/copyleft/gpl.html

**/
// no direct access
defined('_JEXEC') or die('Restricted access');

/**
 * This function is called when the component is installed.
 */
function com_uninstall() {

	$version = '2.3.6';

	/** Remove the settings table */
	$db = & JFactory::getDBO();
	$querys[] = 'DROP TABLE IF EXISTS #__feedgator';
	$querys[] = 'DROP TABLE IF EXISTS #__feedgator_plugins';
	$querys[] = 'DROP TABLE iF EXISTS #__feedgator_imports';
	foreach ($querys as $query) {
		$db->setQuery( $query );
		if( $db->query() === FALSE ) {
			echo stripslashes($db->getErrorMsg());
		}
	}
	?>
	<h2><?php echo JText::_('FeedGator Uninstallation Status'); ?></h2>
	<div>Uninstalling version <strong><?php echo $version; ?></strong><br />
	<br />
	Database tables removed. Uninstall complete!
	<br />
	</div>
	<?php
}