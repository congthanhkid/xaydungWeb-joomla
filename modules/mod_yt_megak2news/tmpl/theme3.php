<?php    
/*------------------------------------------------------------------------
 # Yt Mega K2 News - Version 1.0
 # Copyright (C) 2009-2010 The YouTech Company. All Rights Reserved.
 # @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 # Author: The YouTech Company
 # Websites: http://joomla.ytcvn.com
 -------------------------------------------------------------------------*/
?>


<?php defined( '_JEXEC' ) or die( 'Restricted access' ); ?>

   <div id="yt-megak2-news" class="yt_mega_k2_news">
     <div style="text-align: left; float: left; width: 100%"><?php echo $intro_text; ?></div>
        <div id="ytc_tabs<?php echo $module->id;?>" class="theme3">
                 <?php    
           //var_dump($items); die;
               if(!empty($items)){$i=1;	$counttotal = count($items);   		   
                foreach ($items as $key=>$value) {    
			
			if ($i==1) {
			?>		 
			<div style="width:<?php echo $width_module;?>%; float: left;"> <?php }?>
			 <div class="box" style="width:<?php echo ($width_category-1);?>%;"> 			
			<div class="tabs" >			   
				<div class="category_title_left">&nbsp;</div>
				<div class="category_title_center">
				<div class="category_name">
				<a href="<?php echo (modK2MegaNewsHelper::getcategorylink($key));?>" target="<?php echo $target;?>">
				<?php echo strtoupper(modK2MegaNewsHelper::getCategoryName($key)); ?>
				</a>
				</div>
				</div> 
				<div class="category_title_right">&nbsp;&nbsp;&nbsp; </div>
			</div> <!--end tabs-->
			 
            <div class="box-wrapper">   
				<?php 
                 $j=1;  
                ?> 
                    <div id="<?php echo $module->id;?><?php echo $key;?>" class="content-box <?php if($j==1) echo "current";?>">
                     <?php 	$ij=1;	$counttotal_item = count($value);   
									
					 foreach ($value as $key1=>$value1) {				
				     if($ij==1){?> 					 
					 <div class="normal-content" style="width: <?php echo $width_normal_content;?>%"><?php }?>					 
					  <div class="content" style="width: <?php echo ($width_item);?>%">
						<div class="sub-content" style="overflow: hidden; margin-right: 10px">
							<div class="col-one col">							
								 <?php if($show_title ==1){?>
								 <a href="<?php echo $value1['link'];?>" target="<?php echo $target;?>">
								 <?php echo $value1['sub_title'];?> 
								 </a>
										 <?php }
								?>                     
							</div>						
						    <div class="col-two col">
							   <?php if (($show_image == 1)&& ($value1['thumb']!='')){ ?>
									<div class="image">
										<?php                                        
							
								 if($link_image ==1) {?>
								
								<a href="<?php echo $value1['link'];?>" target="<?php echo $target;?>">
								<img src="<?php echo $value1['thumb']?>" href="<?php echo $value1['link'];?>" target = "<?php echo $target;?>"/><br>
								</a>
								
								<?php  } 
								else 
								{?>
								<img src="<?php echo $value1['thumb']?>"/>
								<?php } ?>
							</div>
							<?php } ?>
							<div class="sub_content">						
							<?php if (($show_description == 1)&& ($value1['sub_content']!='')) {?>
								<div class="item_desc" style="line-height: 1.5;">
								<?php echo $value1['sub_content'];?>
								</div>
								<?php }?>						
							<?php if(($show_price ==1) && ($value1['price']!='')){?>
							<div class="item-price">					
								<span style="color:<?php echo $price_color;?>; font-weight: bold">
								<?php echo JText::_("Price:").' '. $value1['price'];?>   						                   
								</span>                    						 
							</div> <!--end item-price-->
							<?php }?>
                            <?php if ($show_read_more_link == 1) {?>   
                             <div class="read_more"> <a href="<?php echo $value1['link'];?>" target="<?php echo $target;?>"><?php echo $read_more_text;?></a></div>
                            <?php }?>
                            </div>			
					      </div>   
					  </div><!--end sub-content-->
                    </div>		<!-- END content -->			
					    <?php if(($counttotal_item) == $ij){?>
                        </div><?php } else {?>
                        <?php if($ij%$num_items==0) {?> </div><div class="normal-content"> <?php }?>
                        <?php }?>                             
                        <?php $ij++;} ?>      
								  <ul class="link_category"> <?php if ($show_all_items ==1) { ?>
									<li>
									<div class="arrow1"> &nbsp;</div> 
									<a href="<?php echo (modK2MegaNewsHelper::getcategorylink($key));?>" target="<?php echo $target;?>"><?php echo $view_all_text;?></a></li>
									<?php }?>                      
								  </ul>	
                                     					</div>
						        
				
		         </div> <!-- END box-wrapper -->	 
			     </div> <!-- END box -->
				 <?php if(($counttotal) == $i){?>
                        </div><?php } else {?>
                        <?php if($i% $numcols==0) {?> </div><div style="width:<?php echo $width_module;?>%; float: left;"><?php }?>
                        <?php }?>                             
                        <?php $j++; $i++;}} ?>                                    
                         
										</div>
        <div style="text-align: left; float: left; width: 100%"><?php echo $footer_text; ?></div>
    </div>