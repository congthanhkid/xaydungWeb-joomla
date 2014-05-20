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

jimport( 'joomla.html.pane');
$pane =& JPane::getInstance('Tabs');
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
	    if (form.customurl.checked == true ) {
	        form.dateadd.value = "<?php echo date('Y-m-d'); ?>"
	    } else {
	        form.dateadd.value = "0000-00-00"
	    }
	    if (form.origurl.value == "") {
	        alert( "<?php echo JText::_('You must provide a URL for the redirection.'); ?>" );
	        return;
	    }
        if (form.origurl.value.match(/^index.php/)) {
            <?php if( $sefConfig->useMoved ) { ?>
            // Ask to save the changed url to Moved Permanently table
            if( (form.sefurl.value != form.unchanged.value) && (form.id.value != "0" && form.id.value != "") ) {
                <?php if( $sefConfig->useMovedAsk ) { ?>
                if( !confirm("<?php echo JText::_('CONFIRM_AUTO_301'); ?>") ) {
                    form.unchanged.value = "";
                }
                <?php } ?>
            } else {
                form.unchanged.value = "";
            }
            <?php } else { echo 'form.unchanged.value="";'; } ?>

            
            submitform( pressbutton );
        } else {
            alert( "<?php echo JText::_('The Old Non-SEF Url must begin with index.php'); ?>" );
        }
	}
	
    function addMetaTag() {
        var tbl = document.getElementById('tblMetatags');
        if( !tbl ) {
            return;
        }
        var tbody = tbl.getElementsByTagName('tbody')[0];
        if( !tbody ) {
            return;
        }
        
        var row = document.createElement('tr');
        var td1 = document.createElement('td');
        td1.width = '30%';
        td1.innerHTML = '<input type="text" value="" style="width:100%" name="metanames[]" />';
        var td2 = document.createElement('td');
        //td2.width = '70%';
        td2.innerHTML = '<input type="text" value="" style="width:100%" name="metacontents[]" />';
        var td3 = document.createElement('td');
        td3.width = '100';
        td3.innerHTML = '<input type="button" value="<?php echo JText::_('Remove Meta tag'); ?>" onclick="removeMetaTag(this);" />';
        row.appendChild(td1);
        row.appendChild(td2);
        row.appendChild(td3);
        tbody.appendChild(row);
    }
    
    function removeMetaTag(el) {
        var tbl = document.getElementById('tblMetatags');
        if( !tbl ) {
            return;
        }
        var tbody = tbl.getElementsByTagName('tbody')[0];
        if( !tbody ) {
            return;
        }

        while( el ) {
            if( el.nodeName && (el.nodeName.toLowerCase() == 'tr') ) {
                break;
            }
            el = el.parentNode;
        }
        
        if( el.nodeName && (el.nodeName.toLowerCase() == 'tr') ) {
           tbody.removeChild(el);
        }
    }

	//-->
	</script>
	<ul id="autocomplete" style="display: none;"><li>dummy</li></ul>
	
	<form action="index2.php" method="post" name="adminForm" id="adminForm">
	
	<?php
	echo $pane->startPane('sefurl-pane');
	echo $pane->startPanel(JText::_('URL'), 'url-panel');
	?>
	<fieldset class="adminform">
	   <legend><?php echo JText::_('URL'); ?></legend>
    	<table class="admintable">
    		<tr>
    			<td class="key"><?php echo JText::_('New SEF URL'); ?></td>
    			<td><input class="inputbox" type="text" size="100" name="sefurl" value="<?php echo $this->sef->sefurl; ?>">
    			<?php echo JHTML::_('tooltip', JText::_('TT_SEF_URL'), JText::_('New SEF URL')); ?>
    			</td>
    		</tr>
    		<tr>
    			<td class="key"><?php echo JText::_('Old Non-SEF Url');?></td>
    			<td align="left"><input class="inputbox" type="text" size="100" name="origurl" value="<?php echo $this->sef->origurl; ?>">
    			<?php echo JHTML::_('tooltip', JText::_('TT_ORIG_URL'), JText::_('Old Non-SEF Url'));?>
    			</td>
    		</tr>
    		<tr>
    			<td class="key"><?php echo JText::_('Itemid');?></td>
    			<td align="left"><input class="inputbox" type="text" size="10" name="Itemid" value="<?php echo $this->sef->Itemid; ?>">
    			<?php echo JHTML::_('tooltip', JText::_('TT_ITEMID'), JText::_('Itemid'));?>
    			</td>
    		</tr>		
    		<tr>
          		<td class="key"><?php echo JText::_('Save as Custom Redirect'); ?></td>
          		<td>
          			<input type="checkbox" name="customurl" value="0" checked="checked" />
          		</td>
    		</tr>
    		<tr>
    		  <td class="key"><?php echo JText::_('Enabled'); ?></td>
    		  <td>
    		      <input type="checkbox" name="enabled" value="1" <?php if ($this->sef->enabled) echo 'checked="checked"'; ?> />
    		      <?php echo JHTML::_('tooltip', JText::_('TT_URL_ENABLED'), JText::_('Enabled'));?>
    		  </td>
    		</tr>
    		<tr>
    		  <td class="key"><?php echo JText::_('SEF'); ?></td>
    		  <td>
    		      <input type="checkbox" name="sef" value="1" <?php if ($this->sef->sef) echo 'checked="checked"'; ?> />
    		      <?php echo JHTML::_('tooltip', JText::_('TT_URL_SEF'), JText::_('SEF'));?>
    		  </td>
    		</tr>
    		<tr>
    		  <td class="key"><?php echo JText::_('Locked'); ?></td>
    		  <td>
    		      <input type="checkbox" name="locked" value="1" <?php if ($this->sef->locked) echo 'checked="checked"'; ?> />
    		      <?php echo JHTML::_('tooltip', JText::_('TT_URL_LOCKED'), JText::_('Locked'));?>
    		  </td>
    		</tr>

		<?php $config =& SEFConfig::getConfig(); ?>
		<?php if ($config->trace) : ?>		
		<tr><th colspan="2"><?php echo JText::_('URL Source Tracing'); ?></th></tr>
		<tr>
		  <td valign="top" class="key"><?php echo JText::_('Trace Information'); ?>:</td>
		  <td align="left"><?php echo nl2br(htmlspecialchars($this->sef->trace)); ?>
		  </td>
		</tr>
		<?php endif; ?>
		</table>
	</fieldset>
	
	<?php
	echo $pane->endPanel();
	echo $pane->startPanel(JText::_('Aliases'), 'alias-panel');
	?>
	<fieldset class="adminform">
	   <legend><?php echo JText::_('Aliases'); ?></legend>
    	<table class="admintable">
    		<tr>
    			<td class="key" valign="top"><?php echo JText::_('Alias list'); ?></td>
    			<td>
        			<textarea class="inputbox" rows="10" cols="80" name="aliases" id="aliases"><?php echo $this->sef->aliases; ?></textarea>
        			<?php echo JHTML::_('tooltip', JText::_('TT_ALIAS_LIST'), JText::_('Alias list')); ?>
    			</td>
    		</tr>
    	</table>
    </fieldset>
	
	<?php
	echo $pane->endPanel();
	echo $pane->startPanel(JText::_('Meta Tags'), 'meta-panel');
	?>
	
	<div class="col width-50">
    	<fieldset class="adminform">
    	   <legend><?php echo JText::_('Predefined Meta Tags'); ?></legend>
    	   <table class="admintable" width="100%">
    		<tr><td colspan="2"><?php echo  JHTML::_('tooltip', JText::_('INFO_JOOMSEF_PLUGIN'), JText::_('JoomSEF Plugin Notice')); ?></td></tr>
    		<tr>
    		  <td class="key"><?php echo JText::_('Title'); ?>:</td>
    		  <td align="left"><input class="inputbox" type="text" style="width:100%" maxlength="255" name="metatitle" value="<?php echo htmlspecialchars($this->sef->metatitle); ?>">
    		  </td>
    		</tr>
    		<tr>
    		  <td class="key"><?php echo JText::_('Meta Descrition'); ?>:</td>
    		  <td align="left"><input class="inputbox" type="text" style="width:100%" maxlength="255" name="metadesc" value="<?php echo htmlspecialchars($this->sef->metadesc); ?>">
    		  </td>
    		</tr>
    		<tr>
    		  <td class="key"><?php echo JText::_('Meta Keywords'); ?>:</td>
    		  <td align="left"><input class="inputbox" type="text" style="width:100%" maxlength="255" name="metakey" value="<?php echo htmlspecialchars($this->sef->metakey); ?>">
    		  </td>
    		</tr>
    		<tr>
    		  <td class="key"><?php echo JText::_('Meta Content-Language'); ?>:</td>
    		  <td align="left"><input class="inputbox" type="text" style="width:100%" maxlength="30" name="metalang" value="<?php echo htmlspecialchars($this->sef->metalang); ?>">
    		  </td>
    		</tr>
    		<tr>
    		  <td class="key"><?php echo JText::_('Meta Robots'); ?>:</td>
    		  <td align="left"><input class="inputbox" type="text" style="width:100%" maxlength="30" name="metarobots" value="<?php echo htmlspecialchars($this->sef->metarobots); ?>">
    		  </td>
    		</tr>
    		<tr>
    		  <td class="key"><?php echo JText::_('Meta Googlebot'); ?>:</td>
    		  <td align="left"><input class="inputbox" type="text" style="width:100%" maxlength="30" name="metagoogle" value="<?php echo htmlspecialchars($this->sef->metagoogle); ?>">
    		  </td>
    		</tr>
    		<tr>
    		  <td class="key"><?php echo JText::_('Canonical Link'); ?>:</td>
    		  <td align="left"><input class="inputbox" type="text" style="width:100%" maxlength="255" name="canonicallink" value="<?php echo htmlspecialchars($this->sef->canonicallink); ?>">
    		  </td>
    		</tr>
    	</table>
    	</fieldset>
	</div>
	<div class="col width-50">
        <fieldset class="adminform">
            <legend><?php echo JText::_('Custom Meta Tags'); ?></legend>
            <table class="adminform" id="tblMetatags">
              <tr>
                  <th width="30%"><?php echo JText::_('Name'); ?></th>
                  <th><?php echo JText::_('Content'); ?></th>
                  <th width="100">&nbsp;</th>
              </tr>
              <?php
              // Custom meta tags
              if (is_array($this->sef->metacustom)) {
                  foreach($this->sef->metacustom as $name => $content) {
                      ?>
                      <tr>
                          <td width="30%"><input type="text" name="metanames[]" style="width:100%" value="<?php echo $name; ?>" /></td>
                          <td><input type="text" name="metacontents[]" style="width:100%" value="<?php echo htmlspecialchars($content); ?>" /></td>
                          <td width="100"><input type="button" value="<?php echo JText::_('Remove Meta tag'); ?>" onclick="removeMetaTag(this);" /></td>
                      </tr>
                      <?php
                  }
              }
              ?>
            </table>
            <input type="button" value="<?php echo JText::_('Add Meta tag'); ?>" onclick="addMetaTag();" />
        </fieldset>
        <fieldset class="adminform">
            <legend><?php echo JText::_('COM_SEF_OPTIONS'); ?></legend>
            <table class="admintable">
                <tr>
                    <td class="key"><?php echo JText::_('COM_SEF_USE_SITENAME_IN_TITLE'); ?>:</td>
                    <td align="left"><?php echo $this->lists['showsitename']; ?></td>
                </tr>
            </table>
        </fieldset>
	</div>
	<div style="clear: both;"></div>
	
	<?php
	echo $pane->endPanel();
	echo $pane->startPanel(JText::_('SiteMap'), 'sitemap-panel');
	JoomSEF::OnlyPaidVersion();
	echo $pane->endPanel();
	echo $pane->startPanel(JText::_('Internal Links'), 'internal-panel');
    JoomSEF::OnlyPaidVersion();
	echo $pane->endPanel();
	echo $pane->endPane();
	?>

<input type="hidden" name="option" value="com_sef" />
<input type="hidden" name="task" value="" />
<input type="hidden" name="controller" value="sefurls" />
<input type="hidden" name="unchanged" value="<?php echo $this->sef->sefurl; ?>" />
<input type="hidden" name="dateadd" value="<?php echo $this->sef->dateadd; ?>" />
<input type="hidden" name="id" value="<?php echo $this->sef->id; ?>" />
<input type="hidden" name="wordsArray" value="" />

</form>
