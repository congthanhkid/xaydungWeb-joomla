<?php
/**
 * SEF component for Joomla!
 * 
 * @package   JoomSEF
 * @version   3.9.8
 * @author    ARTIO s.r.o., http://www.artio.net
 * @copyright Copyright (C) 2012 ARTIO s.r.o. 
 * @license   GNU/GPLv3 http://www.artio.net/license/gnu-general-public-license
 */
 
// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');

$sefConfig =& SEFConfig::getConfig();
?>

	<script language="javascript">
	<!--
	function submitbutton(pressbutton)
	{
	    var form = document.adminForm;
	    if (pressbutton == 'cancel') {
	        submitform( pressbutton );
	        return;
	    }
	    // do field validation
	    if (form.new.value == "" || form.old.value == "") {
	        alert( "<?php echo JText::_('ERROR_EMPTY_URL'); ?>" );
	    } else {
	        submitform( pressbutton );
	    }
	}
	//-->
	</script>
	<form action="index2.php" method="post" name="adminForm" id="adminForm">
	<table class="adminform">
	    <tr><th colspan="2"><?php echo JText::_('URL'); ?></th></tr>
		<tr>
			<td><?php echo JText::_('Moved from URL'); ?></td>
			<td><input class="inputbox" type="text" size="100" name="old" value="<?php echo $this->url->old; ?>">
			<?php echo JHTML::_('tooltip', JText::_('This is URL to redirect from.')); ?>
			</td>
		</tr>
		<tr>
			<td><?php echo JText::_('Moved to URL');?></td>
			<td align="left"><input class="inputbox" type="text" size="100" name="new" value="<?php echo $this->url->new; ?>">
			<?php echo JHTML::_('tooltip', JText::_('This is URL to redirect to.'));?>
			</td>
		</tr>
	</table>

	<input type="hidden" name="option" value="com_sef" />
	<input type="hidden" name="id" value="<?php echo $this->url->id; ?>" />
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="controller" value="movedurls" />
	</form>
