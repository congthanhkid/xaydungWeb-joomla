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
?>
<script type="text/javascript">
/* <![CDATA[ */
window.addEvent('domready', function() { sefStartUpdate(); });

var sefAjaxUpdate = null;
var sefTimer = null;

var urlsTotal = <?php echo $this->totalUrls; ?>;
var urlsLeft = <?php echo $this->totalUrls; ?>;
var urlsUpdated = 0;

function sefCreateAjax() {
    if (sefAjaxUpdate) {
        return;
    }
    
    try {
    	sefAjaxUpdate = new XMLHttpRequest();
    }
    catch (e) {
        try {
        	sefAjaxUpdate = new ActiveXObject("Microsoft.XMLHttp");
        }
        catch (e) {
        }
    }
}

function sefStartUpdate()
{
    sefCreateAjax();
    sefUpdate();
}

function sefUpdate()
{
    if (!sefAjaxUpdate) {
        return;
    }
    
    try {
    	sefAjaxUpdate.open('POST', 'index.php', true);
    	sefAjaxUpdate.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded;');
    	sefAjaxUpdate.onreadystatechange = sefHandleUpdate;
    	sefAjaxUpdate.send('option=com_sef&controller=sefurls&task=updateNext&tmpl=component');
    }
    catch (e) {
    }
}

function sefHandleUpdate()
{
    if (sefAjaxUpdate.readyState == 4) {
        if (sefAjaxUpdate.status == 200) {
            try {
                // Create the response object from JSON syntax
                var response = eval('(' + sefAjaxUpdate.responseText + ')');
                
                if (response.type == 'completed') {
                	sefUpdateProgress(response);
                    sefUpdateCompleted();
                }
                else if (response.type == 'updatestep') {
                	sefUpdateProgress(response);
                	sefUpdate();
                }
                else {
                	alert(sefAjaxUpdate.responseText);
                }
            }
            catch (e){
                alert(sefAjaxUpdate.responseText);
                return;
            }
        }
        else {
        	document.getElementById('urls_errors').innerHTML = sefAjaxUpdate.responseText;
    		document.getElementById('urls_errors_table').style.display = 'block';
    		document.getElementById('urls_table').style.display = 'none';
        }
    }
}

function sefUpdateProgress(response)
{
	var updated = response.updated;

	urlsUpdated += updated;
	urlsLeft -= updated;
	
	document.getElementById('urls_updated').innerHTML = urlsUpdated;
	document.getElementById('urls_left').innerHTML = urlsLeft;
}

function sefUpdateCompleted()
{
	document.getElementById('urls_message').innerHTML = '<?php echo JText::_('URLS_UPDATE_COMPLETED'); ?>';
	document.getElementById('update_finished').disabled = false;
}
/* ]]> */
</script>

<form action="index.php" method="post" name="adminForm">
<fieldset class="adminform">
<legend><?php echo JText::_('URLS_UPDATE_TITLE'); ?></legend>
<div id="urls_table">
<table class="adminform">
<tr>
    <th colspan="2" id="urls_message">
        <?php echo JText::_('URLS_UPDATE_PROGRESS'); ?>
    </th>
</tr>
<tr>
    <td width="100"><?php echo JText::_('URLS_UPDATE_UPDATED'); ?>:</td>
    <td id="urls_updated">0</td>
</tr>
<tr>
    <td width="100"><?php echo JText::_('URLS_UPDATE_LEFT'); ?>:</td>
    <td id="urls_left"><?php echo $this->totalUrls; ?></td>
</tr>
<tr>
    <td width="100"><?php echo JText::_('URLS_UPDATE_TOTAL'); ?>:</td>
    <td id="urls_total"><?php echo $this->totalUrls; ?></td>
</tr>
<tr>
    <td colspan="2"><input type="submit" value="Finish" disabled="disabled" id="update_finished" /></td>
</tr>
</table>
</div>

<div id="urls_errors_table" style="display: none">
<table class="adminform">
<tr>
    <th><?php echo JText::_('URLS_UPDATE_ERROR'); ?></th>
</tr>
<tr>
    <td id="urls_errors">&nbsp;</td>
</tr>
</table>
</div>

</fieldset>

<input type="hidden" name="option" value="com_sef" />
<input type="hidden" name="controller" value="<?php echo $this->controllerVal; ?>" />
<input type="hidden" name="task" value="" />
</form>
