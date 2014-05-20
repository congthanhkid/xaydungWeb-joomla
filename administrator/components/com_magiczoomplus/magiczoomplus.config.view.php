<?php

/*------------------------------------------------------------------------
# mod_virtuemart_magiczoomplus - Magic Zoom Plus for Joomla with VirtueMart
# ------------------------------------------------------------------------
# Magic Toolbox
# Copyright 2011 MagicToolbox.com. All Rights Reserved.
# @license - http://www.opensource.org/licenses/artistic-license-2.0  Artistic License 2.0 (GPL compatible)
# Website: http://www.magictoolbox.com/magiczoomplus/modules/virtuemart/
# Technical Support: http://www.magictoolbox.com/contact/
/*-------------------------------------------------------------------------*/

if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' )
?>

<table class="adminlist magictoolbox" style="width: auto;">
    <tr>
        <th class="title" width="200px">Parameter</th>
        <?php foreach($configs as $c):?>
        <th class="title<?php if($c['name'] == 'default') echo ' def';?>" width="100px">
            <?php echo $pages[$c['name']]?>
            <br />
            <a class="settings" href="index2.php?option=com_magiczoomplus&page=magiczoomplus.config&profile=<?php echo $c['id']?>">Edit</a>
        </th>
        <?php endforeach ?>
    </tr>
    <?php $j=0;foreach($defaults as $groupName => $group):$j++;
        if(!in_array($groupName,array('module'))):?>
            <th colspan="7" class="subtitle"><?php echo $groupName;?></th>
            <?php $i=0;foreach($group['params'] as $param):$i++;?>
                <?php if(isset($param['scope']) && $param['scope']!='profile' && $param['scope']!='tool' && $param['scope']!='MagicScroll') {continue;} ?>
                <?php
                if(isset($param['values']) && $param['type'] != 'array') {
                    $param['description'] = (!empty($param['description']) ? $param['description'] . ', ' : '') . 'allowed values: ' . implode(', ', $param['values']);
                }
                ?>
                <tr class="row<?php echo $i%2?>" title="<?php if(isset($param['description'])) echo $param['description']; ?>">
                    <?php
                        preg_match('/^(.*?) \((.*?)\)$/is', $param['label'], $labels);
                        if(count($labels) == 0) {
                            $labels = array('', $param['label'], '');
                        }
                        if($labels[2] == 'px') $labels[2] = 'in pixels';
                    ?>
                    <th><b><?php echo $labels['1'];?></b><span><?php echo $labels['2'];?></span></th>
                    <?php foreach($configs as $k => $c) { ?>
                        <td<?php 
                            if($c['name'] == 'default') echo ' class="def"';
                            else if((in_array($param['group'], array('Scroll', 'Scroll Arrows', 'Scroll Slider', 'Scroll effect', 'Multiple images')) && $c['name'] != 'details') && $magictool->type == 'standard') {
                                //echo ' style="background:#DFDFDF";';
                            }
                            else if(isset($c['params'][$param['id']]) && (!in_array($c['params'][$param['id']],array('',$param['value'])))) {
                                echo ' class="def_changed"';
                            }
                        ?>><?php
                            if(!in_array($param['group'], array('Scroll', 'Scroll Arrows', 'Scroll Slider', 'Scroll effect', 'Multiple images')) && !in_array($param['id'], array('template', 'magicscroll')) || $c['name'] == 'details' || $magictool->type != 'standard' || $c['name'] == 'default') {
                                if(isset($c['params'][$param['id']]) && (!in_array($c['params'][$param['id']],array('',$param['value'])))){
                                    echo mz_confValueView($c['params'][$param['id']]);
                                } else {
                                    echo mz_confValueView($param['value']);
                                }
                            } else {
                                echo '-';
                            }
                            ?>
                        </td>
                    <?php } ?>
                </tr>
            <?php endforeach//foreach($group['params'] as $param)?>
        <?php endif//if(!in_array($groupName,array('module')))?>
    <?php endforeach//foreach($defaults as $groupName => $group)?>
</table>
        
