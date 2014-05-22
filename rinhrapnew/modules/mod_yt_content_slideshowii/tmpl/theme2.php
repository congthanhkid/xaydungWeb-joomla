<?php
/*------------------------------------------------------------------------
# Yt Content SlideShow II - Version 1.0
# Copyright (C) 2009-2010 The YouTech Company. All Rights Reserved.
# @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Author: The YouTech Company
# Websites: http://joomla.ytcvn.com
-------------------------------------------------------------------------*/

?>

<?php defined( '_JEXEC' ) or die( 'Restricted access' ); ?>

<?php if(count($items)>0):?>

<script type="text/javascript">
//<![CDATA[
$jYtc(document).ready(function($) {
       <?php if($show_buttons_slideii == 2):?>
        $("#yt_slideshowii_module_<?php echo $module->id;?>").hover(
        function(){$('.buttons-theme-hover_<?php echo $module->id;?>').addClass("buttons-theme2")},
        function(){$('.buttons-theme-hover_<?php echo $module->id;?>').removeClass("buttons-theme2")}
        );
       <?php endif;?>  
       var arrContent = $jYtc('.caption_content_<?php echo $module->id?>');
       var arrHMC = {};
       $.each(arrContent,function(key,val){
            arrHMC[key] = $(val).height();
       
            if(key == arrContent.length-1) 
            {
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
                endNormalScroll: <?php echo $num_item_per_page - 1;?>,
                num_item_per_page:<?php echo $num_item_per_page;?>,
                arrHMC:arrHMC
    	   });
                
            }
       })
        
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

<div class="yt_slideshowii_module" id="yt_slideshowii_module_<?php echo $module->id;?>" style="background:white; width: <?php echo $width_module_slide_ii;?>px; height: <?php echo $thumb_height?>">
    <?php ob_start();?>
    	<div class="ytc-content-slideshow-theme1" style="width: <?php echo $thumb_width?>px; height:<?php echo $thumb_height?>px; z-index:4; float: left !important; position:relative;overflow:hidden;<?php if(!$show_img_on_right){?>float:left;<?php }?>">
            <div class="buttons-theme-hover_<?php echo $module->id;?> <?php if($show_buttons_slideii == 1|| $show_buttons_slideii == 0){echo "buttons-theme2";}?>" style="<?php if($show_buttons_slideii==0){echo "display:none";}?>">
            	<div style="float:left; position:relative; z-index:2; top:8px; padding-left: 10px; display:<?php echo ($prenext_show)?'block':'none'?>">
            		<div id="prev<?php echo $module->id;?>" class="preview">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
            	</div>
            	<div style="position:relative; z-index:2; float:right; top:8px; padding-right: 10px; display:<?php echo ($prenext_show)?'block':'none'?>">
            		<div id="next<?php echo $module->id;?>" class="next">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
            	</div>
            	<div class="cover_pause" style="top: 8px;">
            		<div id="play_pause_<?php echo $module->id;?>" class="pause">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
            	</div>	
            </div>
            <div id="featured<?php echo $module->id;?>" style="width:<?php echo $thumb_width;?>px !important;">
                <?php foreach($items as $key=>$item) {?>
    				<div style="text-decoration: none;height:<?php echo $thumb_height?>px!important;position:absolute;overflow:hidden;">
                        <div style="z-index:1;width:<?php echo $thumb_width?>px; height:<?php echo $thumb_height;?>px; ">
                            <?php if($show_main_image == 1):?><?php if($link_image == 1):?><a href="<?php echo ($link_image)?$item['link']:"#";?>" target = "<?php echo $target;?>" style="display:<?php echo ($show_main_image)?"block":"none";?>;background: none !important;"><?php endif;?>
                                <?php if($item['thumb'] !=''):?><img src="<?php echo $item['thumb']?>" title="<?php echo $item['title'];?>" alt="" border="none"/><?php endif;?>
                                <?php if($item['thumb'] !=''):?>&nbsp;<?php endif;?>
                            <?php if($link_image == 1):?></a><?php endif;?><?php endif;?>
    				    </div>
                        <div id="caption_content_<?php echo $module->id.$key?>" class="caption_content caption_content_<?php echo $module->id?>" style="width:<?php echo $thumb_width?>px;<?php if(!$key){echo "bottom: 0px";}?>;">
                                <?php if($show_caption_slide == 1):?>
                                <div style="width:<?php echo $thumb_width - 18?>px; color:<?php echo $main_color;?>; text-align: left;margin-top:6px;"><?php echo $item['sub_main_content']?></div>
                                <?php endif;?> 
                                <?php if($show_readmore_slideii == 1):?>
                                <div class="readmore_sliderii" style="text-align: right;padding-right: 18px;"><a href="<?php echo $item['link'];?>" target = "<?php echo $target;?>" title="<?php echo $item['title'];?>" style="color:<?php echo $main_color;?>; font-weight: bold;background: none;text-decoration: none;"><?php echo $readmore_sliderii?></a></div>
                                <?php endif;?>
                            
                        </div>
                        
                    </div>
    			<?php } ?> 
            </div>		
    	</div>
    
    <?php $slide_image = ob_get_contents(); ob_end_clean();?>
    <?php ob_start();?>
    	<div id="content_box_<?php echo $module->id;?>" class="content_box_<?php echo $module->id;?>" style="overflow:hidden; width:<?php echo ($width_module_slide_ii - $thumb_width);?>px; height:<?php echo $heightItem * $num_item_per_page?>px;  position:relative; float: left;" >	
    		<div id="cover_buttons_<?php echo $module->id;?>" style=" <?php if(!$show_img_on_right){?>float:left;<?php }else{?> float:right;<?php }?> position:relative; width:<?php echo ($width_module_slide_ii - $thumb_width);?>px; display:<?php echo ($prenext_show)?'block':'none'?>">
    			<div class="<?php echo $theme;?>">	
    				<div class="right">
    					<div class="center">	
    						<div style="position:relative; z-index:1;" class="buttons_<?php echo $theme;?>">					
    							<ul id="image_button_<?php echo $module->id;?>" class="ul-item-ii" style="list-style: none; cursor: pointer;padding-left: 0px; margin-top: 0px; margin-left: 0px; background: white;">
    								<?php foreach($items as $key=>$item) {?>
    									<li class="li_height_item_<?php echo $module->id;?> <?php echo ($key==$start)?"button_img_selected_{$module->id}":"button_img_{$module->id}";?>" value="<?php echo $key;?>" style="overflow: hidden;">
                                            <div class="yt_post_item yt_post_item_multi_<?php echo $module->id;?>" style="border-bottom: 1px #c0c0c0 solid; height: <?php echo $normalHeight;?>px;overflow:hidden;">
                                    			<div class="yt_meta_img_theme2 yt_meta_img_theme" style="display:<?php echo $show_normal_image?"block":"none";?>;">
                                    				<?php if($item['small_thumb'] !=''):?><a href="<?php echo ($link_image)?$item['link']:"#";?>" target = "<?php echo $target;?>" style="padding: 0px;" ><img src="<?php echo $item['small_thumb']?>" title="<?php echo $item['title'];?>" alt="" border="none" /></a><?php endif;?>
                                                    <?php if($item['small_thumb'] ==''):?>&nbsp;<?php endif;?>
                                                    
                                    			</div>
                                    			<div class="yt_item_title" style="display:<?php echo ($show_title_slideshowii)?"block":"none"?>"><a href="<?php echo $item['link']?>" title="<?php echo $item['title'];?>"><?php echo $item['sub_title']?></a></div>
                                    			<div class="yt_item_desc" style="display:<?php echo ($show_normal_description)?"block":"none";?>">
                                    				<?php echo $item['sub_normal_content']?>
                                    			</div>
                                            </div> 
                                        
                                        </li>
    								<?php } ?> 
    							</ul>
    						</div>
                            						
    					</div>
    				</div>		
    			</div>	
    		</div>	
    	</div>
    <?php $slide_desc = ob_get_contents(); ob_end_clean();?>
     
    <div class="ytc-content ytc_background_<?php echo $theme;?>" style="width: <?php echo $width_module_slide_ii;?>px; position:relative; overflow:hidden">
        <?php
        	if($show_img_on_right)
        	{
                echo $slide_desc.$slide_image;	
        	}
        	else
        	{
                echo $slide_image.$slide_desc;
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