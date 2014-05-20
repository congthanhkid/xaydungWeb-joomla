<?php 
/**
* @version 1.5.x
* @package JoomVision Project
* @email webmaster@joomvision.com
* @copyright (C) 2008 http://www.JoomVision.com. All rights reserved.
*/
// no direct access
defined('_JEXEC') or die('Restricted access');
JHTML::_('behavior.mootools');
JHTML::_('stylesheet','slideshow7.css','modules/mod_jv_headline/assets/css/');
JHTML::_('script','slideshow7.js','modules/mod_jv_headline/assets/js/');
$container = "jv_slide7_container".$moduleId;
$slideItem = "#jv_slide7_container".$moduleId." div.jv_slide7_item";
$butPre = "#jv_slide7_container".$moduleId." div.jv_but_pre";
$butNext = "#jv_slide7_container".$moduleId." div.jv_but_next";
$slideMain = "#jv_slide7_container".$moduleId." div.jv_slide7_main";
$slideDes = "#jv_slide7_container".$moduleId." div.jv_slide7_des_item";
?>
<script type="text/javascript">
     var startSlideshow<?php echo $moduleId; ?> = function() {
        var mySlideShow7<?php echo $module->id; ?>  = new JVSlideShow7({
            container:'<?php echo $container; ?>',
            slideItem:'<?php echo $slideItem; ?>',
            butPre:'<?php echo $butPre; ?>',
            slideMain:'<?php echo $slideMain; ?>',
            slideDes:'<?php echo $slideDes; ?>',
            butNext:'<?php echo $butNext; ?>',
            mainWidth:<?php echo $mainModWidth; ?>,
            mainHeight:<?php echo $mainModHeight; ?>,
            autoRun:<?php echo $params->get('jv7_autorun'); ?>,
            slide7Delay:<?php echo $slideDelay; ?>,
            slide7Duration:<?php echo $params->get('trans_duration'); ?>,
            showButNext:<?php echo $showButNext; ?>   
        });       
    };
    window.addEvent('load',startSlideshow<?php echo $module->id; ?>);
</script>
<div style="display: none;"><a title="Joomla Templates" href="http://www.joomlavision.com">Joomla Templates</a> and Joomla Extensions by JoomlaVision.Com</div>
<div class="jv_headline7_wrap" id="jv_slide7<?php echo $moduleId; ?>">
    <div class="jv_headline7_container" id="jv_slide7_container<?php echo $moduleId; ?>">
        <div class="jv_slide7_main">  
            <?php foreach($list as $item) { ?>
                <div class="jv_slide7_item"><img src="<?php echo $item->thumb; ?>" alt="img" /></div>
            <?php } ?>      
        </div>
        <?php if($showButNext == 1) { ?>
        <div class="jv_but_pre"></div>
        <div class="jv_but_next"></div>
        <?php } ?>       
        <?php foreach($list as $item) { ?>
        <div class="jv_slide7_des_item opaque" style="height:0px;opacity:0">
             <h3 class="title"><?php echo $item->title; ?></h3>        
             <p><?php echo $item->introtext; ?></p>
             <?php if($isReadMore){?> 
                <a class="readon" href="<?php echo $item->link; ?>"><?php echo JText::_('Read more'); ?></a>
             <?php } ?>
        </div>
        <?php } ?>       
    </div>
</div>
