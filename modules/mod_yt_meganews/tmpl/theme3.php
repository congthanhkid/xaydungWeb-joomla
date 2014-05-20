<?php    
/*------------------------------------------------------------------------
 # Yt New Mega News  - Version 1.0
 # Copyright (C) 2010-2011 The YouTech Company. All Rights Reserved.
 # @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 # Author: The YouTech Company
 # Websites: http://www.ytcvn.com
 -------------------------------------------------------------------------*/
?>


<?php defined( '_JEXEC' ) or die( 'Restricted access' ); ?>

    <div id="yt-mega-news" class="yt_mega_news">
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
				<a href="<?php echo (modMegaNewsHelper::getcategorylink($key)). '&layout= blog';?>" target="<?php echo $target;?>">
				<?php echo strtoupper(modMegaNewsHelper::getCategoryName($key)); ?>
				</a>
				</div>
				</div> 
				<div class="category_title_right">&nbsp;&nbsp;&nbsp; </div>
			 </div> <!--end tabs-->
			 
            <div class="box-wrapper">   
				<?php 
                 $j=1;  
                ?> 
                    <div class="content-box <?php if($j==1) echo "current";?>">
                     <?php 	$ij=1;	$counttotal_item = count($value);   
									
					 foreach ($value as $key1=>$value1) {				
				     if($ij==1){?> 					 
					 <div class="normal-content" style="width: <?php echo $width_normal_content;?>%"><?php }?>					 
					  <div class="content" style="width: <?php echo ($width_item);?>%">
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
								<p style="line-height: 1.5;"><?php if ($show_description == 1) {
										 echo $value1['sub_content']; }?></p>
								<?php if ($show_read_more_link == 1) {?>   
							   <div class="read_more"> <a href="<?php echo $value1['link'];?>" target="<?php echo $target;?>"><?php echo $read_more_link;?></a></div>
                            <?php }?>
                            </div>
					    </div>               
                        </div>		<!-- END content -->			
					    <?php if(($counttotal_item) == $ij){?>
                        </div><?php } else {?>
                        <?php if($ij%$num_items==0) {?> </div><div class="normal-content"> <?php }?>
                        <?php }?>                             
                        <?php $ij++;} ?>          
								 <ul class="link_category"> <?php if ($show_all_articles ==1) { ?>
                                <li><a href="<?php echo (modMegaNewsHelper::getcategorylink($key)). '&layout= blog';?>" target="<?php echo $target;?>"><?php echo $view_all;?></a></li>
											
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