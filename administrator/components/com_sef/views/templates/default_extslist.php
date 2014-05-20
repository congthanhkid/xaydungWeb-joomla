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

<fieldset>
<legend><?php echo JText::_('Installed SEF Extensions'); ?></legend>

<table class="adminlist">
<thead>
    <tr>
        <th width="15%" class="title">
            <?php echo JText::_('SEF Extension'); ?>
        </th>
        <th width="15%" class="title">
            <?php echo JText::_('Component'); ?>
        </th>
        <!--  <th width="15%" class="title">
            <?php echo JText::_('Option'); ?>
        </th>-->
        <th width="15%" class="title">
            <?php echo JText::_('Author'); ?>
        </th>
        <th width="5%" class="title">
            <?php echo JText::_('Version'); ?>
        </th>
        <th width="10%" class="title">
            <?php echo JText::_('Date'); ?>
        </th>
        <th width="5%" class="title">
            <?php echo JText::_('Newest Version'); ?>
        </th>
        <th width="5%" class="title">
            <?php echo JText::_('Type'); ?>
        </th>
        <th width="5%" class="title">
            <?php echo JText::_('Upgrade'); ?>
        </th>
        <th width="10%" class="title">
            <?php echo JText::_('Active Handler'); ?>
        </th>
    </tr>
</thead>
<tbody>
    <?php
    $k = 0;
    $i = 0;
    foreach (array_keys($this->extensions) as $key) {
        $row = &$this->extensions[$key];
        ?>
        <tr class="<?php echo 'row'. $k; ?>">
            <td>
                <input type="radio" id="cb<?php echo $i;?>" name="cid[]" value="<?php echo $row->id; ?>" onclick="isChecked(this.checked);" />
                <span class="editlinktip hasTip" title="<?php echo JText::_('Click to open parameters for this extension'); ?>">
                <a href="javascript:void(0);" onclick="return listItemTask('cb<?php echo $i;?>', 'editext')">
                <?php echo $row->name; ?>
                </a>
                </span>
            </td>
            <td>
                <?php
                if( !is_null(@$row->component) ) {
                    echo $row->component->name;
                }
                else {
                    echo '- ' . JText::_('Not Installed') . ' -';
                }
                ?>
            </td>
            <!-- <td>
                <?php echo @$row->option != '' ? $row->option : "&nbsp;"; ?>
            </td>-->
            <td>
                <?php
                if( @$row->authorUrl != '' ) {
                    echo '<span class="editlinktip hasTip" title="' . JText::_('Click to open author\'s site on a new page') . '">';
                    echo '<a href="' . (substr( $row->authorUrl, 0, 7) == 'http://' ? $row->authorUrl : 'http://'.$row->authorUrl) . '" target="_blank">';
                    echo @$row->author != '' ? $row->author : "&nbsp;";
                    echo '</a>';
                    echo '</span>';
                }
                else {
                    echo @$row->author != '' ? $row->author : "&nbsp;";
                }
                
                /*if( @$row->authorEmail != '' ) {
                    echo '<span class="editlinktip hasTip" title="' . JText::_('Click to send an e-mail to author') . '">';
                    echo ', ';
                    echo '<a href="mailto:' . $row->authorEmail . '">';
                    echo $row->authorEmail;
                    echo '</a>';
                    echo '</span>';
                }*/
                ?>
            </td>
            <td align="center">
                <?php
                    if (isset($row->version) && !empty($row->version)) {
                        if (is_null($row->newestVersion) || version_compare($row->version, $row->newestVersion, '>=')) {
                            echo '<span style="color: green">'.$row->version.'</span>';
                        }
                        else {
                            echo '<span style="color: red">'.$row->version.'</span>';
                        }
                    }
                    else {
                        echo "&nbsp;";
                    }
                ?>
            </td>
            <td align="center">
                <?php echo @$row->creationdate != '' ? $row->creationdate : "&nbsp;"; ?>
            </td>
            <td align="center">
                <?php
                if( is_null($row->newestVersion) ) {
                    echo JText::_('-');
                }
                else {
                    echo $row->newestVersion;
                }
                ?>
            </td>
            <td align="center">
                <?php
                if( is_null($row->type) ) {
                    echo JText::_('-');
                }
                else {
                    if ($row->type == 'Paid') {
                        $img = 'icon-16-key';
                        $ttl = JText::_('Download ID set');
                        $txt = JText::_('Click to change');
                        if ($row->params->get('downloadId', '') == '') {
                            $img .= '_bw';
                            $ttl = JText::_('Download ID not set');
                            $txt = JText::_('Click to set');
                        }
                        
                        $href = 'index.php?option=com_sef&amp;controller=extension&amp;cid[]='.$row->option.'.xml&amp;task=editId&amp;tmpl=component';
                        echo '<span class="editlinktip hasTip" title="'.$ttl.'::'.$txt.'">';
                        echo '<a class="modal" href="'.$href.'" rel="{handler: \'iframe\', size: {x: 570, y: 150}}"><img src="components/com_sef/assets/images/'.$img.'.png" /></a>';
                        echo '</span>&nbsp;';
                    }
                    
                    echo JText::_($row->type);
                }
                ?>
            </td>
            <td>
                <?php
                if( is_null($row->newestVersion) ) {
                    echo JText::_('-');
                }
                else if( ((strnatcasecmp($row->newestVersion, $row->version) > 0) ||
                     (strnatcasecmp($row->newestVersion, substr($row->version, 0, strpos($row->version, '-'))) == 0)) )
                {
                    ?>
                    <input class="button hasTip" type="button" value="<?php echo JText::_('Upgrade'); ?>" onclick="upgradeExt('<?php echo $row->option; ?>')" title="<?php echo JText::_('Click to automatically upgrade this extension from ARTIO server'); ?>" />
                    <?php
                }
                else {
                    echo JText::_('Up to date');
                }
                ?>
            </td>
            <td>
                <span class="editlinktip hasTip" title="<?php echo JText::_('Click to change active handler'); ?>">
                <a href="javascript:void(0);" onclick="return changeHandler('<?php echo $row->option;?>');" style="color: <?php echo $row->handler->color; ?>">
                <?php echo $row->handler->text; ?>
                </a>
                </span>
            </td>
        </tr>
        <?php
        $k = 1 - $k;
        $i++;
    }
    ?>
</tbody>
</table>
</fieldset>
