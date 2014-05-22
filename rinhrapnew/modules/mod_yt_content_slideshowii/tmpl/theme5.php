<?php
/*------------------------------------------------------------------------
# Yt Content SlideShow II - Version 1.0
# Copyright (C) 2009-2010 The YouTech Company. All Rights Reserved.
# @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Author: The YouTech Company
# Websites: http://www.ytcvn.com
-------------------------------------------------------------------------*/

?>

<?php defined( '_JEXEC' ) or die( 'Restricted access' ); ?>

<?php if(count($items)>0):?>

<script type="text/javascript">
//<![CDATA[
$jYtc(document).ready(function($) {
	   $jYtc('#featured<?php echo $module->id;?>').cycle({
    		fx:     '<?php echo $effect;?>',
    		timeout: <?php echo $timer_speed;?>,
    		speed:  <?php echo $slideshow_speed;?>, 
    		next:   '#next<?php echo $module->id;?>', 
    		prev:   '#prev<?php echo $module->id;?>',
    		pause: <?php echo ($play)?1:0;?>,
    		divId: <?php echo $module->id;?>,
    		theme:'<?php echo $theme;?>',
    		linktarget:'<?php echo $target;?>',
    		linkcaption:<?php echo $link_caption;?>,
    		autoPlay:<?php echo $auto_play;?>,
    		startingSlide:<?php echo $start;?>,
            totalItemScroll:<?php echo $count_items;?>,
            startNormalScroll: 0,
            totalArt: <?php echo $total;?>,
            endNormalScroll: <?php echo $num_item_per_page - 1;?>,
            leftScroll:<?php echo ($small_thumb_width + 10);?>,
            bottomTheme5:<?php echo $thumb_height;?>,
            num_item_per_page:<?php echo $num_item_per_page;?>
	   });

    });
//]]>
</script>
<!--Intro Text-->
<?php if($intro): ?>
<div style="text-align:left; width:<?php echo $width_module_slide_ii; ?>px">
	<?php  echo $intro;?>
</div>
<br/>
<?php endif;?>
<!--End Intro Text-->

<div class="yt_slideshowii_module" id="yt_slideshowii_module_<?php echo $module->id;?>" style="background:white; width: <?php echo $thumb_width;?>px; height: <?php echo $thumb_height?>px;">
    <?php ob_start();?>
    	<div class="ytc-content-slideshow-theme1" style="width: <?php echo $thumb_width?>px; height:<?php echo $thumb_height?>px; z-index:4; float: none !important; position:relative;overflow:hidden;<?php if(!$show_img_on_right){?>float:left;<?php }?>">
            <div id="featured<?php echo $module->id;?>" style="width:<?php echo $thumb_width;?>px !important;height:<?php echo $thumb_height?>px !important;">
                <?php foreach($items as $key=>$item) {?>
    				<div style="text-decoration: none;">
                        <div style="z-index:1;width:<?php echo $thumb_width?>px; height:<?php echo $thumb_height;?>px; ">
                            <?php if($show_main_image == 1):?><?php if($link_image == 1):?><a href="<?php echo ($link_image)?$item['link']:"#";?>" target = "<?php echo $target;?>" style="display:<?php echo ($show_main_image)?"block":"none";?>;background: none !important;"><?php endif;?>
                                <?php if($item['thumb'] !=''):?><img src="<?php echo $item['thumb']?>" title="<?php echo $item['title'];?>" alt="" border="none"/><?php endif;?>
                                <?php if($item['thumb'] ==''):?>&nbsp;<?php endif;?>
                            <?php if($link_image == 1):?></a><?php endif;?><?php endif;?>
    				    </div>
                        <?php if($show_caption_slide == 1):?>
                        <div class="caption_opacity_theme3 caption_opacity_theme3_<?php echo $module->id?>" id="caption_<?php echo $module->id.$key?>" style="<?php if(!$key){echo "bottom:{$thumb_height}px; display: block;";}?> ">
                            <div class="caption_top_bg_theme3">&nbsp;</div>
                            <div class="caption_center_bg_theme3">
                                <div style="font-size: 12px; padding-bottom:5px; text-transform: uppercase; text-align: left; padding-left: 8px;" title="<?php echo $item['title'];?>"><a href="<?php echo $item['link']?>" title="<?php echo $item['title'];?>"  target="<?php echo $target;?>" style="color:#FFFFFF;font-weight:bold;text-decoration:none;background: none;"><?php echo $item['sub_title']?></a></div>
                                <div style="width:265px; padding: 0px 7px 0px 8px;color:<?php echo $main_color;?>; text-align: left;"><?php echo $item['sub_main_content']?></div>
                                <?php if($show_readmore_slideii == 1):?>
                                <div style="text-align: right; padding-right: 20px;" class="readmore_sliderii"><a href="<?php echo $item['link'];?>" target = "<?php echo $target;?>" title="<?php echo $item['title'];?>" style="color:#FFFFFF; font-weight: bold;text-decoration:none;background: none;"><?php echo $readmore_sliderii?></a></div>
                                <?php endif;?>
                            </div>
                            <div class="caption_bottom_bg_theme3">&nbsp;</div>
                        </div>
                        <?php endif;?> 
                    </div>
    			<?php } ?> 
            </div>			
    	</div>
    
    <?php $slide_image = ob_get_contents(); ob_end_clean();?>
    <?php ob_start();?>
        <div class="content-box-normal-theme5" style="width:<?php echo $thumb_width;?>px; height:<?php echo ($small_thumb_height + 15)?>px;">
            <div class="content-preview-theme5" style="height:<?php echo ($small_thumb_height + 20)?>px;">
                <div id="prev<?php echo $module->id;?>" class="preview_theme5" style="height:<?php echo ($small_thumb_height + 20)?>px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
            </div>
            <div id="content_box_theme5<?php echo $module->id;?>" class="content_box_theme5<?php echo $module->id;?> content_box_theme5" style="width:<?php echo ($small_thumb_width + 10) * $num_item_per_page?>px;height:<?php echo ($small_thumb_height + 15)?>px !important;" >	
                <div id="cover_buttons_<?php echo $module->id;?>" class="cover_item_box" style="width:<?php echo ($small_thumb_width + 10) * $total?>px; display:<?php echo ($prenext_show)?'block':'none'?>">
        			<div class="<?php echo $theme;?>">		
						<div class="buttons_<?php echo $theme;?> content_box_item">					
							<ul id="image_button_<?php echo $module->id;?>" class="content_box_item_ul" style="list-style: none;position: relative;padding:0px;margin:0;margin-top:6px;">
								<?php foreach($items as $key=>$item) {?>
									<li class="li_height_item_<?php echo $module->id;?> <?php echo ($key==$start)?"button_img_selected_theme5_{$module->id}":"button_img_theme5_{$module->id}";?>" value="<?php echo $key;?>">
                                        <div class="yt_post_item_theme5 yt_post_item_multi_<?php echo $module->id;?>" style="display:<?php echo $show_normal_image?"block":"none";?>;height:<?php echo $small_thumb_height;?>px;width:<?php echo $small_thumb_width;?>px; float: left;background: #FFFFFF;">
                                			<div class="yt_meta_img_theme5 yt_meta_img_theme" style="display:<?php echo $show_normal_image?"block":"none";?>;">
                                				<?php if($item['small_thumb'] !=''):?><a href="<?php echo ($link_image)?$item['link']:"#";?>" target = "<?php echo $target;?>" style="padding: 0px;"><img src="<?php echo $item['small_thumb']?>" title="<?php echo $item['title'];?>" alt="" border="none" /></a><?php endif;?>
                                                <?php if($item['small_thumb'] ==''):?>&nbsp;<?php endif;?>
                                			</div>
                                        </div> 
                                    
                                    </li>
								<?php } ?> 
							</ul>
						</div>	
        			</div>	
        		</div>	
        	</div>
            <div style="float: right; width: 60px; height:<?php echo ($small_thumb_height + 20)?>px; position: relative;">
                <div id="next<?php echo $module->id;?>" class="next_theme5" style="width: auto; height:<?php echo ($small_thumb_height + 20)?>px; margin-left: 15px;">&nbsp;</div>
            </div>
        </div>
    <?php $slide_desc = ob_get_contents(); ob_end_clean();?>
     
    <div class="ytc-content ytc_background_<?php echo $theme;?>" style="width: <?php echo $thumb_width;?>px; height: <?php echo $thumb_height?>px; position:relative; overflow:hidden">
        <?php
        	if($show_img_on_right)
        	{
                echo $slide_image.$slide_desc;	
        	}
        	else
        	{
        		echo $slide_desc.$slide_image;
        	}
        ?>	
    </div>
    
    <div style="display:none">
    <?php foreach($items as $key=>$item) {?>
    	<div id="arrContent_<?php echo $module->id;?>_<?php echo $key;?>"><?php echo $item['sub_content']?></div>
    <?php } ?> 
    </div>
    <?php else: echo JText::_('Has no content to show!');?>
    <?php endif;?>

</div>

<!--Start Footer Text-->
<?php if($note): ?>
<br/>
<div style="text-align:left; width:<?php echo $width_module_slide_ii; ?>px">
	<?php  echo $note;?>
</div>
<?php endif;?>
<!--End Footer Text-->