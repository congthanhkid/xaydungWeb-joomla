la<?php 
/**
* @version 1.5.x
* @package JoomVision Project
* @email webmaster@joomvision.com
* @copyright (C) 2008 http://www.JoomVision.com. All rights reserved.
*/
// no direct access
defined('_JEXEC') or die('Restricted access');
JHTML::_('behavior.mootools');
JHTML::_('stylesheet','slideshow6.css','modules/mod_jv_headline/assets/css/');
JHTML::_('script','slideshow6.js','modules/mod_jv_headline/assets/js/');
$cssModuleWidth = "width:".$moduleWidth."px";
$rightW = 0;
if($moduleWidth != $imgSlideWidth) $rightW = $moduleWidth - $imgSlideWidth - 10;
$leftWidth = "width:".$imgSlideWidth."px";
$rightWidth = "width:".$rightW."px";
$cssSlideImgHeight = "height:".$imgSlideHeight."px";
$slideImg = "#slide_image".$moduleId." div.slide_img";
$slideBar = "#s6bar_container".$moduleId." div.s6_itembar";
$descItem = "#des_container".$moduleId." div.descript_item";
$slideImgContainer = "slide_image".$moduleId;
$butNext = "#slide_image".$moduleId." div.s6_itembar_next";
$butPre = "#slide_image".$moduleId." div.s6_itembar_pre";
?>
<script type="text/javascript">
    var startSlideshow<?php echo $moduleId; ?> = function() {
        var mySlideShow6<?php echo $module->id; ?>  = new JVSlideShow6({
            slideImg:'<?php echo $slideImg; ?>',
            slideBar:'<?php echo $slideBar; ?>',
            descItem:'<?php echo $descItem ?>',
            slideHeight:<?php echo $imgSlideHeight; ?>,
            slideWidth:<?php echo $imgSlideWidth; ?>,
            styleEffect:'<?php echo $params->get('sello1_animation'); ?>',
            delay:<?php echo $slideDelay; ?>,
            slide6transition:<?php echo $params->get('trans_duration'); ?>,
            slideImgContainer:'<?php echo $slideImgContainer; ?>',
            butNext:'<?php echo $butNext; ?>',
            butPre:'<?php echo $butPre; ?>',
            showButNext:<?php echo $showButNext;?>          
        })
    };
    window.addEvent('load',function(){
        setTimeout(startSlideshow<?php echo $moduleId; ?>,200);
      }
    );
</script>
<div style="display: none;"><a title="Joomla Templates" href="http://www.joomlavision.com">Joomla Templates</a> and Joomla Extensions by JoomlaVision.Com</div>
<div class="jv_slideshow6_wrap" style="<?php echo $cssModuleWidth; ?>">
<div class="jv_slide6_wrap">
    <div class="jv_lslide6_wrap" style="<?php echo $leftWidth.";".$cssSlideImgHeight; ?>">
        <div class="slide_img_wrap loading" id="slide_image<?php echo $moduleId; ?>" style="<?php echo $cssSlideImgHeight; ?>">
         <?php if($showButNext == 1) {?> <div class="s6_itembar_pre" style="height:<?php echo $imgSlideHeight."px"; ?>"></div>
					<?php } ?>
            <?php foreach($list as $item) { ?>
            <div class="slide_img opaque1" style="opacity:0">
                <img height="<?php echo $imgSlideHeight ?>" width="<?php echo $imgSlideWidth; ?>" src="<?php echo $item->thumbl; ?>" alt="image" />
            </div>
            <?php } ?>
            <?php if($showButNext == 1){ ?>  <div class="s6_itembar_next" style="height:<?php echo $imgSlideHeight."px"; ?>"></div> 
						<?php } ?>
        </div>       
    </div>
    <?php if($rightW !=0) { ?>    
    <div class="jv_rslide_wrap" style="<?php echo $rightWidth.";".$cssSlideImgHeight; ?>" >
    <?php } else { ?>
     <div class="jv_rslide_wrap" style="<?php echo $rightWidth.";".$cssSlideImgHeight.";display:none"; ?>" >
    <?php } ?>
        <div class="des_item_container" id="des_container<?php echo $moduleId; ?>">
        <?php foreach($list as $item) { ?>
        <div class="descript_item opaque1" style="opacity:0">          
              <h3 class="title"><?php echo $item->title; ?></h3>        
              <p><?php echo $item->introtext; ?></p> 
               <?php if($isReadMore){?> 
                <a class="readmore" href="<?php echo $item->link; ?>"><?php echo JText::_('Read more'); ?></a>
             <?php } ?>          
        </div>
        <?php } ?>
        </div>
    </div>
  </div>  
    <div class="slide6_itembar_wrap">
           <div class="s6bar_container" id="s6bar_container<?php echo $moduleId; ?>">          
           <?php foreach($list as $item) { ?>
            <div class="s6_itembar opaque" style="opacity:0.5">
                <img src="<?php echo $item->thumbs; ?>" alt="img" />
            </div>
            <?php } ?>          
           </div> 
    </div>
</div>

