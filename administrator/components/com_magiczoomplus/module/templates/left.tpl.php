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

if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' );

$m = intval(self::$options->getValue('selectors-margin'));
$ws = intval(self::$options->getValue('selector-max-width'));
$wm = intval(self::$options->getValue('thumb-max-width'));
$hm = intval(self::$options->getValue('thumb-max-height'));
?>
<!-- Begin magiczoomplus -->
<div class="MagicToolboxContainer selectorsLeft" style="width: <?php echo ($wm + $ws + $m)?>px">
    <?php if(count($thumbs)):?>
    <div id="MagicToolboxSelectors<?php echo $pid?>" class="MagicToolboxSelectorsContainer<?php echo $magicscroll;?>" style="width: <?php echo $ws?>px;margin-right: <?php echo $m?>px;">
        <?php echo join("\n\t",$thumbs)?>
    </div>
    <?php endif?>
    <div class="MagicToolboxMainContainer" style="width: <?php echo $wm?>px">
        <?php echo $main?>
        <?php if(isset($message)):?>
            <div class="MagicToolboxMessage"><?php echo $message?></div>
        <?php endif?>
        <?php if(!empty($magicscroll)): ?>
            <script type="text/javascript">
                MagicScroll.extraOptions.MagicToolboxSelectors<?php echo $pid?> = MagicScroll.extraOptions.MagicToolboxSelectors<?php echo $pid?> || {};
                MagicScroll.extraOptions.MagicToolboxSelectors<?php echo $pid?>.direction = 'bottom';
                <?php if(self::$options->checkValue('height', 0)): ?>
                MagicScroll.extraOptions.MagicToolboxSelectors<?php echo $pid?>.height = <?php echo $hm?>;
                <?php endif?>
            </script>
        <?php endif?>
    </div>
    <div style="clear:both"></div>
    <?php if(isset($hotspots)):?>
    <div>
        <?php echo $hotspots?>
    </div>
    <?php endif?>

</div>
<!-- End magiczoomplus -->
