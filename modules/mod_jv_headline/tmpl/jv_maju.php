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
JHTML::_('stylesheet','proshow.css','modules/mod_jv_headline/assets/css/');
JHTML::_('script','slideshow5.js','modules/mod_jv_headline/assets/js/');
$cssHeight= "height:".$height."px";
$cssWidth = "width:".$moduleWidth."px";
$jvSlideShow = "jv_slideshow5_".$module->id;
$jvSlideShowBg = '#jv_slideshow5_'.$module->id.' div.jv-proshow-display';
$jvSlideShowMenu = '#proshow_menu'.$module->id.' .item_proshow';
$jvSlideMenuImg =  '#proshow_menu'.$module->id.' a';
$jvSlideInfo = '#jv_slideshow5_'.$module->id.' div.jv-proshow-intro';
$butPre = "#proshow_menu".$moduleId." li.but_pre";
$butNext = "#proshow_menu".$moduleId." li.but_next";
?>
<script type="text/javascript">
    var startSlideshow<?php echo $module->id; ?> = function() {
        var mySlideShow5<?php echo $module->id; ?>  = new JVSlideShow5({
            jvSlide5Bg:'<?php echo $jvSlideShowBg; ?>',
            jvSlide5Menu:'<?php echo $jvSlideShowMenu; ?>',
            jvSlide5Info:'<?php echo $jvSlideInfo; ?>',
            jvSlideMenuImg:'<?php echo $jvSlideMenuImg; ?>',
            moduleWidth:'<?php echo $moduleWidth; ?>',
            moduleHeight:'<?php echo $height; ?>',
            transaction:'<?php echo $slideDelay; ?>',
            durationSlide5:<?php echo $params->get('trans_duration',500); ?>,
            jvStyleEffect:'<?php echo $params->get('maju_animation'); ?>',
            jvSlide:'<?php echo $jvSlideShow; ?>',
            butPre:'<?php echo $butPre; ?>',
            butNext:'<?php echo $butNext; ?>',
            showButtonNext:<?php echo $showButNext; ?>
        })
    };
    window.addEvent('load',function(){
        setTimeout(startSlideshow<?php echo $module->id; ?>,200);
      }
    );
</script>
<div style="display: none;"><a title="Joomla Templates" href="http://www.joomlavision.com">Joomla Templates</a> and Joomla Extensions by JoomlaVision.Com</div>
<div class="jv-majuheadline-wrapper" style="<?php echo $cssWidth; ?>">
    <div class="jv-proshowwrap">
        <div class="jv-proshow loading" style="<?php echo $cssWidth.";".$cssHeight;?>" id="jv_slideshow5_<?php echo $module->id; ?>">
            <?php foreach($list as $item){//Set background ?>
                <div class="jv-proshow-display" style="opacity:0">
                   <?php if($item->thumbl) { ?> <img src="<?php echo $item->thumbl; ?>" alt="banner" />
                   <?php } else { echo $item->title; }?> 
                </div>
            <?php } ?>
            <div class="jv-proshow-group">
                <ul id="proshow_menu<?php echo $module->id; ?>">
               <?php if($showButNext == 1) { ?> <li style="width:<?php echo $imgWidth."px"; ?>; height:29px" class="but_pre">&nbsp;</li>
               <?php } ?>
                <?php foreach($list as $item) {//Set menu ?>
                    <li class="item item_proshow"><a href="#" title="image">
                    <?php if($item->thumbs) { ?>
                    <img width="<?php echo $imgWidth; ?>" height="<?php echo $imgHeight; ?>" class="png" src="<?php echo $item->thumbs; ?>" alt="image" />
                    <?php } else {  echo $item->title;  } ?>                   
                    </a></li>
                <?php } ?>
               <?php if($showButNext == 1) { ?> <li style="width:<?php echo $imgWidth."px"; ?>; height:29px" class="but_next">&nbsp;</li> 
               <?php } ?>
                </ul>
            </div>
            <?php foreach($list as $item) { ?>
            <div class="jv-proshow-intro" style="opacity:0">
                <div class="jv-proshow-intro-bb png">
                    <div class="jv-proshow-intro-bt png">                  
                        <div class="jv-proshow-intro-inner">
                            <h3><?php echo $item->title; ?></h3>
                            <p><?php echo $item->introtext ; ?></p>
                             <?php if($isReadMore == 1) { ?>
                                <a class="readon" href="<?php echo $item->link; ?>" title="Title content">Read more...</a>
                             <?php } ?> 
                        </div>                   
                    </div>
                </div>            
            </div>
            <?php } ?>             
        </div>
    </div>
</div>
