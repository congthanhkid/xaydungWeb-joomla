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


<form action="index.php" method="post" name="adminForm">

<div class="col width-60">
    <fieldset class="adminform">
        <legend><?php echo JText::_( 'Parameters' ); ?></legend>
        
        <?php
        echo $this->pane->startPane('ext-pane');
        
        // Render each parameters group
        $groups = $this->extension->params->getGroups();
        if (is_array($groups) && count($groups) > 0) {
            $i = 0;
            foreach ($groups as $group => $count) {
                if ($count > 0) {
                    if ($group == 'varfilter') continue;
                    if ($group == '_default') $label = JText::_('Extension');
                    else $label = JText::_($group);
                    $i++;
                    echo $this->pane->startPanel($label, 'page-'.$i);
                    echo $this->extension->params->render('params', $group);
                    echo $this->pane->endPanel();
                }
            }
        }
        
        echo $this->pane->startPanel(JText::_('Variables filtering'), 'varfilter');
        ?>

        <div id="filterdiv">
        <?php
        JoomSEF::OnlyPaidVersion();
        ?>
        </div>
        
        <?php
        echo $this->pane->endPanel();
        
        if (is_array($this->extension->texts) && (count($this->extension->texts) > 0)) {
            echo $this->pane->startPanel(JText::_('Default texts'), 'defaulttexts');
            echo JText::_('DESC_DEFAULT_TEXTS');
            if (SEFTools::JoomFishInstalled()) {
                $langId = SEFTools::getLangId();
                $url = 'index.php?option=com_joomfish&amp;task=translate.overview&amp;catid=sefexttexts&amp;select_language_id='.$langId.'&amp;jsextension_filter_value='.$this->extension->option;
                echo '<br />'.sprintf(JText::_('DESC_DEFAULT_TEXTS_TRANSLATION'), '<a href="'.$url.'">JoomFish</a>');
            }
            ?>
            <table class="admintable">
                <tr>
                    <th><?php echo JText::_('Text name'); ?></th>
                    <th><?php echo JText::_('Text value'); ?></th>
                </tr>
                <?php
                foreach ($this->extension->texts as $text) {
                    echo '<tr>';
                    echo '<td width="40%" class="key">'.$text->name.'</td>';
                    echo '<td><input type="text" name="defaulttexts['.$text->id.']" value="'.$text->value.'" /></td>';
                    echo '</tr>';
                }
                ?>
            </table>
            <?php
            echo $this->pane->endPanel();
        }
        
        echo $this->pane->endPane();
        ?>
    </fieldset>
</div>

<div class="col width-40">
    <?php
    if( !empty($this->extension->name) ) {
        ?>
        <fieldset class="adminform">
            <legend><?php echo JText::_( 'Extension Details' ); ?></legend>
            
            <table class="admintable">
                <tr>
                    <td class="key">
                        <?php echo JText::_('Name'); ?>:
                    </td>
                    <td>
                        <?php echo $this->extension->name; ?>
                    </td>
                </tr>
                <tr>
                    <td class="key">
                        <?php echo JText::_('Version'); ?>:
                    </td>
                    <td>
                        <?php echo $this->extension->version; ?>
                    </td>
                </tr>
                <tr>
                    <td class="key">
                        <?php echo JText::_('Description'); ?>:
                    </td>
                    <td>
                        <?php echo $this->extension->description; ?>
                    </td>
                </tr>
            </table>
        </fieldset>
        <?php
    }
    ?>
    
    <?php
    if( !is_null($this->extension->component) ) {
        ?>
        <fieldset class="adminform">
            <legend><?php echo JText::_( 'Component Details' ); ?></legend>
            
            <table class="admintable">
                <tr>
                    <td class="key">
                        <?php echo JText::_('Name'); ?>:
                    </td>
                    <td>
                        <?php echo $this->extension->component->name; ?>
                    </td>
                </tr>
                <tr>
                    <td class="key">
                        <?php echo JText::_('Option'); ?>:
                    </td>
                    <td>
                        <?php echo $this->extension->component->option; ?>
                    </td>
                </tr>
            </table>
        </fieldset>
        <?php
    }
    ?>
</div>
<div class="clr"></div>

<input type="hidden" name="option" value="com_sef" />
<input type="hidden" name="controller" value="extension" />
<input type="hidden" name="task" value="" />
<input type="hidden" name="file" value="<?php echo $this->extension->file; ?>" />
<input type="hidden" name="redirto" value="<?php echo $this->redirto; ?>" />
<input type="hidden" name="filters" value="" />

<?php echo JHTML::_( 'form.token' ); ?>
</form>
