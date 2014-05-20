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
 if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' );?>

Quick search: <input id="search-query" onkeyup="SearchCollection.keyCallback(this)"/> <span id="search-matches"></span>

<form method="POST">
    <input type="hidden" name="profileId" value="<?php echo $profileId?>"/>
    <input type="hidden" name="option" value="com_magiczoomplus"/>
    <input type="hidden" name="action" value="save"/>
    <input type="hidden" name="page" value="magiczoomplus.config.save"/>

    <?php $j=0;
    foreach($defaults as $groupName => $group):
    if(!in_array($groupName,array('module'))):
    if(!in_array($groupName, array('Scroll', 'Scroll Arrows', 'Scroll Slider', 'Scroll effect', 'Multiple images')) || $configs[1]['name'] == 'details' || $magictool->type != 'standard' || $configs[1]['name'] == 'default'):
        $j++;
    ?>
        <div id="group-<?php echo $group['id']?>">
            <h3 class="magictoolbox"><?php echo $group['alias']?> parameters</h3>

        <table class="adminlist magictoolbox" style="width: 100%;">
            <tr>
                <th class="title" width="200px">Parameter</span></th>
                <th class="title">
                    <input class="mBtn" type="submit" value="Save"/>
                </th>
            </tr>
            <?php
                $i=0;
                foreach($group['params'] as $param):
                if(isset($param['scope']) && $param['scope']!='profile' && $param['scope']!='tool' && $param['scope']!='MagicScroll') continue;
                if(!in_array($param['id'], array('magicscroll', 'template')) || $configs[1]['name'] == 'details' || $magictool->type != 'standard' || $configs[1]['name'] == 'default'):
                $i++;

                if(isset($param['values']) && $param['type'] != 'array') {
                    $param['description'] = (!empty($param['description']) ? $param['description'] . ', ' : '') . 'allowed values: ' . implode(', ', $param['values']);
                }
            ?>
                <tr class="row<?php echo $i%2?>" title="<?php if(isset($param['description'])) echo $param['description']; ?>">
                    <th>
                        <?php
                            preg_match('/^(.*?) \((.*?)\)$/is', $param['label'], $labels);
                            if(count($labels) == 0) {
                                $labels = array('', $param['label'], '');
                            }
                            if($labels[2] == 'px') $labels[2] = 'in pixels';
                            if(!empty($labels[2])) {
                                $labels[2] .= ', ';
                            }
                            $labels[2] .= '<i>default:</i> ' . mz_YesNo(empty($param['value']) ? 'empty' : $param['value']);
                        ?>
                        <b class="search-target"><?php echo $labels['1'];?><span>(<?php echo $labels['2'];?>)</span>
                    </th>
                    <?php foreach($configs as $k => $c): if($k == 0) continue;?>
                        <td>
                            <?php
                                switch($param['type']){
                                    case 'text':
                                    case 'num':
                                    case 'float':
                                        if(isset($c['params'][$param['id']])) {
                                            $v = $c['params'][$param['id']];
                                            $s = ' style="font-weight:bold"';
                                        } else {
                                            $v = $param['value'];
                                            $s = '';
                                        }
                                        echo "<input name=\"config[{$param['id']}]\" value=\"".mz_YesNo($v)."\"{$s} class=\"mzinp\" />";
                                        break;
                                    case 'array':

                                        $defaultKey = null;
                                        $pKeys = $param['values'];
                                        $pVals = $param['values'];
                                        array_walk($pKeys, 'mz_YesNoCallback',true);
                                        array_walk($pVals, 'mz_YesNoCallback',false);

                                        foreach($pVals as $key => $value){
                                            if(mz_YesNo($param['value']) === $value){
                                                /*if($c['name'] != 'default') {
                                                    $pVals[$key].=' (default)';
                                                }*/
                                                $defaultKey = $param['value'];
                                            }
                                        }

                                        $values = array_combine($pKeys, $pVals);

                                        if($param['subType'] == 'radio'){
                                            //echo mz_radioList($values,isset($c['params'][$param['id']])?$c['params'][$param['id']]:'',array("name" => "config[{$param['id']}]"));
                                            echo mz_radioList($values,isset($c['params'][$param['id']])?$c['params'][$param['id']]:$defaultKey,array("name" => "config[{$param['id']}]", 'class' => 'mzr'));
                                            //echo mz_selectList($values,isset($c['params'][$param['id']])?$c['params'][$param['id']]:$defaultKey,array("name" => "config[{$param['id']}]"));
                                        } else {
                                            echo mz_selectList($values,isset($c['params'][$param['id']])?$c['params'][$param['id']]:$defaultKey,array("name" => "config[{$param['id']}]"));
                                        }
                                        break;
                                }?>
                        </td>
                    <?php endforeach ?>
                </tr>
            <?php endif?>
            <?php endforeach//foreach($group['params'] as $param):?>
        </table>
        </div>
    <?php endif?>
    <?php endif//if(!in_array($groupName,array('module')))?>
    <?php endforeach?>
</form>
