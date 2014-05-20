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
defined('_JEXEC') or die();

?>
<script type="text/javascript">
/* <![CDATA[ */
function sefChangeView(viewmode)
{
	window.location = 'index.php?option=com_sef&controller=sefurls&viewmode='+viewmode;
}
/* ]]> */
</script>
<dl class="tabs">
    <dt onclick="sefChangeView(<?php echo _COM_SEF_VIEWMODE_ALL; ?>);" class="<?php echo ($this->viewmode == _COM_SEF_VIEWMODE_ALL) ? 'open' : 'closed'; ?>" style="cursor: pointer"><span><?php echo JText::_('All SEF URLs'); ?></span></dt>
    <dt onclick="sefChangeView(<?php echo _COM_SEF_VIEWMODE_CUSTOM; ?>);" class="<?php echo ($this->viewmode == _COM_SEF_VIEWMODE_CUSTOM) ? 'open' : 'closed'; ?>" style="cursor: pointer"><span><?php echo JText::_('Custom SEF URLs'); ?></span></dt>
    <dt onclick="sefChangeView(<?php echo _COM_SEF_VIEWMODE_AUTOMATIC; ?>);" class="<?php echo ($this->viewmode == _COM_SEF_VIEWMODE_AUTOMATIC) ? 'open' : 'closed'; ?>" style="cursor: pointer"><span><?php echo JText::_('Automatic SEF URLs'); ?></span></dt>
    <dt onclick="sefChangeView(<?php echo _COM_SEF_VIEWMODE_HOMEPAGE; ?>);" class="<?php echo ($this->viewmode == _COM_SEF_VIEWMODE_HOMEPAGE) ? 'open' : 'closed'; ?>" style="cursor: pointer"><span><?php echo JText::_('Homepage URLs'); ?></span></dt>
    <dt onclick="sefChangeView(<?php echo _COM_SEF_VIEWMODE_404; ?>);" class="<?php echo ($this->viewmode == _COM_SEF_VIEWMODE_404) ? 'open' : 'closed'; ?>" style="cursor: pointer"><span><?php echo JText::_('404 Log'); ?></span></dt>
    <dt onclick="sefChangeView(<?php echo _COM_SEF_VIEWMODE_TRASH; ?>);" class="<?php echo ($this->viewmode == _COM_SEF_VIEWMODE_TRASH) ? 'open' : 'closed'; ?>" style="cursor: pointer"><span><?php echo JText::_('URLs Trash'); ?></span></dt>
    <dt onclick="sefChangeView(<?php echo _COM_SEF_VIEWMODE_DUPLICATES; ?>);" class="<?php echo ($this->viewmode == _COM_SEF_VIEWMODE_DUPLICATES) ? 'open' : 'closed'; ?>" style="cursor: pointer"><span><?php echo JText::_('Duplicates'); ?></span></dt>
</dl>