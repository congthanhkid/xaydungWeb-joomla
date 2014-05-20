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
if ($sefConfig->useCache) {
    require(JPATH_ROOT.DS.'components'.DS.'com_sef'.DS.'sef.cache.php');
    $cache =& sefCache::getInstance();
}
?>
<form action="index.php" method="post" name="adminForm" id="adminForm">

<script type="text/javascript">
<!--
function useRE(el1, el2)
{
    if( !el1 || !el2 ) {
        return;
    }
    
    if( el1.checked && el2.value.substr(0, 4) != 'reg:' ) {
        el2.value = 'reg:' + el2.value;
    }
    else if( !el1.checked && el2.value.substr(0,4) == 'reg:' ) {
        el2.value = el2.value.substr(4);
    }
}

function handleKeyDown(e)
{
    var code;
    code = e.keyCode;
    
    if (code == 13) {
        // Enter pressed
        document.adminForm.submit();
        return false;
    }
    
    return true;
}

function resetFilters()
{
    document.adminForm.filterHitsCmp.value = '0';
    document.adminForm.filterHitsVal.value = '';
    document.adminForm.filterItemid.value = '';
    document.adminForm.filterSEF.value = '';
    document.adminForm.filterReal.value = '';
    document.adminForm.comFilter.value = '';
    <?php if( SEFTools::JoomFishInstalled() ) { ?>
    document.adminForm.filterLang.value = '';
    <?php } ?>
    
    document.adminForm.submit();
}

function doAction()
{
    var sel = document.getElementById('sef_selection').value;
    var action = document.getElementById('sef_actions').value;
    
    if (action == 'sep') {
        return;
    }
    
    if (sel == 'selected') {
        // Check that there is at least one URL selected
        if (document.adminForm.boxchecked.value == 0) {
            alert('<?php echo JText::_('Please make a selection from the list'); ?>');
            return;
        }
    }
    
    // If trash or delete, show warning
    if (action == 'trash') {
        if (!confirm('<?php echo JText::_('Are you sure you want to trash selected URLs? The associated aliases, meta tags and internal links will be preserved.'); ?>')) {
            return;
        }
    }
    else if (action == 'delete') {
        if (!confirm('<?php echo JText::_('Are you sure you want to completely delete selected URLs? The associated aliases, meta tags and internal links will also be deleted.'); ?>')) {
            return;
        }
    }
    
    // Call the action
    document.adminForm.selection.value = sel;
    submitbutton(action);
}
-->
</script>

<?php require('navigation.php'); ?>

<div class="current">
<fieldset>
    <legend><?php echo JText::_('Filters'); ?></legend>
<table>
    <tr>
        <td width="100%" valign="bottom">
        </td>
        <td nowrap="nowrap" align="right">
            <?php
            echo JText::_('Hits') . ':';
            ?>
        </td>
        <?php if( $this->viewmode != _COM_SEF_VIEWMODE_404 ) { ?>
        <td nowrap="nowrap" align="right">
            <?php
            echo JText::_('ItemID') . ':';
            ?>
        </td>
        <?php } ?>
        <td nowrap="nowrap">
            <?php echo $this->lists['filterSEFRE']; ?>
        </td>
        <td nowrap="nowrap" align="right">
            <?php
            echo (($this->viewmode == _COM_SEF_VIEWMODE_404) ? JText::_('Filter Urls') : JText::_('Filter SEF Urls')) . ':';
            ?>
        </td>
        <?php if( $this->viewmode != _COM_SEF_VIEWMODE_404 ) { ?>
        <td nowrap="nowrap">
            <?php echo $this->lists['filterRealRE']; ?>
        </td>
        <td nowrap="nowrap" align="right">
            <?php
            echo JText::_('Filter Real Urls') . ':';
            ?>
        </td>
        <?php } ?>
        <td nowrap="nowrap" align="right">
            <?php
            echo JText::_('Component') . ':';
            ?>
        </td>
        <?php if (SEFTools::JoomFishInstalled() && ($this->viewmode != _COM_SEF_VIEWMODE_404)) { ?>
        <td nowrap="nowrap" align="right">
            <?php
            echo JText::_('Language') . ':';
            ?>
        </td>
        <?php } ?>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td nowrap="nowrap">
            <?php echo $this->lists['hitsCmp'] . $this->lists['hitsVal']; ?>
        </td>
        <?php if ($this->viewmode != _COM_SEF_VIEWMODE_404) { ?>
        <td>
            <?php echo $this->lists['itemid']; ?>
        </td>
        <?php } ?>
        <td colspan="2">
            <?php echo $this->lists['filterSEF']; ?>
        </td>
        <?php if ($this->viewmode != _COM_SEF_VIEWMODE_404) { ?>
        <td colspan="2">
            <?php echo $this->lists['filterReal']; ?>
        </td>
        <?php } ?>
        <td>
            <?php echo $this->lists['comList']; ?>
        </td>
        <?php if (SEFTools::JoomFishInstalled() && ($this->viewmode != _COM_SEF_VIEWMODE_404)) { ?>
        <td>
            <?php echo $this->lists['filterLang']; ?>
        </td>
        <?php } ?>
        <td>
            <?php echo $this->lists['filterReset']; ?>
        </td>
    </tr>
</table>
<?php
// Links to homepage
if ($this->viewmode == _COM_SEF_VIEWMODE_HOMEPAGE) { ?>
<table width="100%">
    <tr>
        <td nowrap="nowrap" align="right">
        <input type="button" value="<?php echo JText::_('Create links to homepage'); ?>" onclick="submitbutton('createlinks');" />
        </td>
    </tr>
</table>
<?php } ?>
</fieldset>

<table class="adminlist">
<thead>
    <tr>
        <th width="5">
            <?php echo JText::_('Num'); ?>
        </th>
        <th width="20">
            <input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count( $this->items ); ?>);" />
        </th>
        <th class="title" width="40px">
            <?php echo JHTML::_('grid.sort', JText::_('Hits'), 'cpt', $this->lists['filter_order'] == 'cpt' ? $this->lists['filter_order_Dir'] : 'desc', $this->lists['filter_order']); ?>
        </th>
        <th class="title">
            <?php
            if ($this->viewmode == _COM_SEF_VIEWMODE_404) {
                echo JHTML::_('grid.sort', JText::_('Date Added'), 'dateadd', $this->lists['filter_order'] == 'dateadd' ? $this->lists['filter_order_Dir'] : 'desc', $this->lists['filter_order']);
            } else {
                echo JHTML::_('grid.sort', JText::_('SEF Url'), 'sefurl', $this->lists['filter_order'] == 'sefurl' ? $this->lists['filter_order_Dir'] : 'desc', $this->lists['filter_order']);
            }
            ?>
        </th>
        <th class="title">
            <?php
            if ($this->viewmode == _COM_SEF_VIEWMODE_404) {
                echo JHTML::_('grid.sort', JText::_('Url'), 'sefurl', $this->lists['filter_order'] == 'sefurl' ? $this->lists['filter_order_Dir'] : 'desc', $this->lists['filter_order']);
            } else {
                echo JHTML::_('grid.sort', JText::_('Real Url'), 'origurl', $this->lists['filter_order'] == 'origurl' ? $this->lists['filter_order_Dir'] : 'desc', $this->lists['filter_order']);
            }
            ?>
        </th>
		<?php if ($this->trace) : ?>
        <th class="title" width="40px">
	        <?php echo JText::_('Trace'); ?>
        </th>
		<?php endif; ?>        
		<?php if ($this->viewmode != _COM_SEF_VIEWMODE_404) : ?>
		<th class="title" width="55px">
		    <?php echo JHTML::_('grid.sort', JText::_('Enabled'), 'enabled', $this->lists['filter_order'] == 'enabled' ? $this->lists['filter_order_Dir'] : 'desc', $this->lists['filter_order']); ?>
        </th>
		<th class="title" width="50px">
		    <?php echo JHTML::_('grid.sort', JText::_('SEF'), 'sef', $this->lists['filter_order'] == 'sef' ? $this->lists['filter_order_Dir'] : 'desc', $this->lists['filter_order']); ?>
        </th>
		<th class="title" width="50px">
        	<?php echo JHTML::_('grid.sort', JText::_('Locked'), 'locked', $this->lists['filter_order'] == 'locked' ? $this->lists['filter_order_Dir'] : 'desc', $this->lists['filter_order']); ?>
        </th>
		<th class="title" width="50px">
        	<?php echo JHTML::_('grid.sort', JText::_('Active'), 'priority', $this->lists['filter_order'] == 'priority' ? $this->lists['filter_order_Dir'] : 'desc', $this->lists['filter_order']); ?>
        </th>
        <?php if ($sefConfig->useCache) : ?>
		<th class="title" width="50px">
        	<?php echo JText::_('Cached'); ?>
        </th>
		<?php endif; ?>
        <th class="title">
            <?php echo JText::_('COM_SEF_HOST'); ?>
        </th>
		<?php endif; ?>
    </tr>
</thead>
<?php
	$colspan = 5;
	if ($this->viewmode != _COM_SEF_VIEWMODE_404) {
	    $colspan += 5;
	    if ($sefConfig->useCache) $colspan++;
	}
	if ($this->trace )$colspan++;
?>
<tfoot>
    <tr>
        <td colspan="<?php echo $colspan; ?>">
            <?php echo $this->pagination->getListFooter(); ?>
        </td>
    </tr>
</tfoot>
<tbody>
    <?php
    $k = 0;
    //for ($i=0, $n=count( $rows ); $i < $n; $i++) {
    foreach (array_keys($this->items) as $i) {
        $row = &$this->items[$i];
        ?>
        <tr class="<?php echo 'row'. $k; ?>">
            <td align="center">
                <?php echo $this->pagination->getRowOffset($i); ?>
            </td>
            <td>
                <?php echo JHTML::_('grid.id', $i, $row->id ); ?>
            </td>
            <td>
                <?php echo $row->cpt; ?>
            </td>
            <td style="text-align:left;">
                <?php if ($this->viewmode == _COM_SEF_VIEWMODE_404) {
                    echo $row->dateadd;
                } else if ($this->viewmode == _COM_SEF_VIEWMODE_TRASH) {
                    echo htmlspecialchars($row->sefurl);
                } else { ?>
                    <a href="javascript:void(0);" onclick="return listItemTask('cb<?php echo $i;?>', 'edit')">
                    <?php echo htmlspecialchars($row->sefurl);?>
                    </a>
                <?php } ?>
            </td>
            <td style="text-align:left;">
                <?php if ($this->viewmode == _COM_SEF_VIEWMODE_404 ) { ?>
                    <a href="javascript:void(0);" onclick="return listItemTask('cb<?php echo $i;?>', 'edit')">
                    <?php echo $row->sefurl; ?>
                    </a>
                <?php } else {
                    echo htmlspecialchars($row->origurl . ($row->Itemid == '' ? '' : (strpos($row->origurl, '?') ? '&' : '?') . 'Itemid='.$row->Itemid ) );
                } ?>
            </td>
            <?php if ($this->trace) : ?>
            <td style="text-align: center;">
            	<?php echo JHTML::_('tooltip', nl2br($row->trace), JText::_('Trace Information'));?>
            </td>
            <?php endif; ?>
            <?php
            if( $this->viewmode != _COM_SEF_VIEWMODE_404 ) {
                ?>
                <td style="text-align: center;">
                    <?php
                    if( $row->enabled ) {
                        if ($this->viewmode == _COM_SEF_VIEWMODE_TRASH) {
                            echo '<img src="images/tick.png" border="0" alt="'.JText::_('Enabled').'" />';
                        }
                        else {
                        ?>
                        <span class="editlinktip hasTip" title="<?php echo JText::_('Disable').'::'.JText::_('Disabled URL will throw 404 error.'); ?>">
                        <a href="javascript:void(0);" onclick="return listItemTask('cb<?php echo $i; ?>', 'disable')">
                        <img src="images/tick.png" border="0" alt="<?php echo JText::_('Enabled'); ?>" />
                        </a>
                        </span>
                        <?php
                        }
                    }
                    else {
                        if ($this->viewmode == _COM_SEF_VIEWMODE_TRASH) {
                            echo '<img src="images/publish_x.png" border="0" alt="'.JText::_('Disabled').'" />';
                        }
                        else {
                        ?>
                        <span class="editlinktip hasTip" title="<?php echo JText::_('Enable').'::'.JText::_('Enabled URL will be normally accessible.'); ?>">
                        <a href="javascript:void(0);" onclick="return listItemTask('cb<?php echo $i; ?>', 'enable')">
                        <img src="images/publish_x.png" border="0" alt="<?php echo JText::_('Disabled'); ?>" />
                        </a>
                        </span>
                        <?php
                        }
                    }
                    ?>
                </td>
                <td style="text-align: center;">
                    <?php
                    if( $row->sef ) {
                        if ($this->viewmode == _COM_SEF_VIEWMODE_TRASH) {
                            echo '<img src="images/tick.png" border="0" alt="'.JText::_('SEF').'" />';
                        }
                        else {
                        ?>
                        <span class="editlinktip hasTip" title="<?php echo JText::_('Don\'t SEF').'::'.JText::_('Real URL will be shown.'); ?>">
                        <a href="javascript:void(0);" onclick="return listItemTask('cb<?php echo $i; ?>', 'sefdisable')">
                        <img src="images/tick.png" border="0" alt="<?php echo JText::_('SEF'); ?>" />
                        </a>
                        </span>
                        <?php
                        }
                    }
                    else {
                        if ($this->viewmode == _COM_SEF_VIEWMODE_TRASH) {
                            echo '<img src="images/publish_x.png" border="0" alt="'.JText::_('Don\'t SEF').'" />';
                        }
                        else {
                        ?>
                        <span class="editlinktip hasTip" title="<?php echo JText::_('SEF').'::'.JText::_('SEF URL will be shown.'); ?>">
                        <a href="javascript:void(0);" onclick="return listItemTask('cb<?php echo $i; ?>', 'sefenable')">
                        <img src="images/publish_x.png" border="0" alt="<?php echo JText::_('Don\'t SEF'); ?>" />
                        </a>
                        </span>
                        <?php
                        }
                    }
                    ?>
                </td>
                <td style="text-align: center;">
                    <?php
                    if( $row->locked ) {
                        if ($this->viewmode == _COM_SEF_VIEWMODE_TRASH) {
                            echo '<img src="images/checked_out.png" border="0" alt="'.JText::_('Locked').'" />';
                        }
                        else {
                        ?>
                        <span class="editlinktip hasTip" title="<?php echo JText::_('Unlock').'::'.JText::_('Unlocked URLs can be deleted and updated.'); ?>">
                        <a href="javascript:void(0);" onclick="return listItemTask('cb<?php echo $i; ?>', 'unlock')">
                        <img src="images/checked_out.png" border="0" alt="<?php echo JText::_('Locked'); ?>" />
                        </a>
                        </span>
                        <?php
                        }
                    }
                    else {
                        if ($this->viewmode == _COM_SEF_VIEWMODE_TRASH) {
                            echo '<img src="images/publish_x.png" border="0" alt="'.JText::_('Unlocked').'" />';
                        }
                        else {
                        ?>
                        <span class="editlinktip hasTip" title="<?php echo JText::_('Lock').'::'.JText::_('Locked URLs cannot be deleted or updated.'); ?>">
                        <a href="javascript:void(0);" onclick="return listItemTask('cb<?php echo $i; ?>', 'lock')">
                        <img src="images/publish_x.png" border="0" alt="<?php echo JText::_('Unlocked'); ?>" />
                        </a>
                        </span>
                        <?php
                        }
                    }
                    ?>
                </td>
                <td style="text-align: center;">
                    <?php
                    if( $row->priority == 0 ) {
                        if ($this->viewmode == _COM_SEF_VIEWMODE_TRASH) {
                            echo '<img src="images/tick.png" border="0" alt="'.JText::_('Active').'" />';
                        }
                        else {
                        ?>
                        <span class="hasTip" title="<?php echo JText::_('This is the active link for SEF URL'); ?>">
                        <img src="images/tick.png" border="0" alt="<?php echo JText::_('Active'); ?>" />
                        </span>
                        <?php
                        }
                    }
                    else {
                        $img = ($row->priority == 100 ? 'publish_r.png' : 'publish_g.png');
                        if ($this->viewmode == _COM_SEF_VIEWMODE_TRASH) {
                            echo '<img src="images/'.$img.'" border="0" alt="'.JText::_('Not active').'" />';
                        }
                        else {
                        ?>
                        <span class="editlinktip hasTip" title="<?php echo JText::_('Make this link active for SEF URL'); ?>">
                        <a href="javascript:void(0);" onclick="return listItemTask('cb<?php echo $i; ?>', 'setActive')">
                        <img src="images/<?php echo $img; ?>" border="0" alt="<?php echo JText::_('Not active'); ?>" />
                        </a>
                        </span>
                        <?php
                        }
                    }
                    ?>
                </td>
                <?php
                if ($sefConfig->useCache) {
                    ?>
                    <td style="text-align: center;">
                    <?php
                    if( $cache->getNonSefUrl($row->sefurl) !== false ) {
                        ?>
                        <span class="hasTip" title="<?php echo JText::_('Cached').'::'.JText::_('This URL is stored in cache.'); ?>">
                        <img src="images/tick.png" border="0" alt="Active" />
                        </span>
                        <?php
                    }
                    else {
                        ?>
                        <span class="hasTip" title="<?php echo JText::_('Not cached').'::'.JText::_('This URL is not stored in cache.'); ?>">
                        <img src="images/publish_x.png" border="0" alt="Active" />
                        </span>
                        <?php
                    }
                    ?>
                    </td>
                    <?php
                }
                ?>
                <td>
                <?php echo $row->host; ?>
                </td>
                <?php
            }
            ?>
        </tr>
        <?php
        $k = 1 - $k;
    }
    ?>
</tbody>
</table>
</div>

<input type="hidden" name="option" value="com_sef" />
<input type="hidden" name="task" value="" />
<input type="hidden" name="boxchecked" value="0" />
<input type="hidden" name="controller" value="sefurls" />
<input type="hidden" name="filter_order" value="<?php echo $this->lists['filter_order']; ?>" />
<input type="hidden" name="filter_order_Dir" value="<?php echo $this->lists['filter_order_Dir']; ?>" />
<input type="hidden" name="selection" value="selected" />
<input type="hidden" name="viewmode" value="<?php echo $this->viewmode; ?>" />
</form>