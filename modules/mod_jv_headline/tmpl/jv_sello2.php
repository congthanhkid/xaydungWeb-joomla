<?php 
JHTML::_('behavior.mootools');
$doc = JFactory::getDocument();
$doc->addStyleSheet(JURI::base()."modules/mod_jv_headline/assets/css/horizotal.css");
JHTML::_('script','horizotal.js','modules/mod_jv_headline/assets/js/');
$line = ceil(count($list)/$number_items_per_line);
$padding = 27;
$item_width=($moduleWidth/$number_items_per_line-$padding);
$pl_jvcarousel = "jvcarousel".$moduleId;
$pl_handles = "handles".$moduleId;
?>
	<script type="text/javascript">
	window.addEvent('load',function(){        
		var slid = new noobSlide({			
			box: $('<?php echo $pl_jvcarousel?>'),						
			items: $ES('.jvcarousel-slide','<?php echo $pl_jvcarousel; ?>'),
			size: <?php echo $moduleWidth?>,
			handles: $ES('.handles_item','<?php echo $pl_handles; ?>'),
			interval:<?php echo $slideDelay; ?>,
			play: function(delay,direction,wait)
			{				
				delay: 100;
				direction: "next";
				wait: true;
			},
			onWalk: function(currentItem,currentHandle)
			{			
				this.handles.removeClass('active');
				currentHandle.addClass('active');
			},
			autoPlay: <?php echo $params->get('sello2_autorun'); ?>
		});	
		<?php if($showButNext == 1) { ?>
			slid.addActionButtons('previous',$ES('.pre','<?php echo $pl_handles; ?>'));
        	slid.addActionButtons('next',$ES('.next','<?php echo $pl_handles; ?>'));
		<?php } ?>
		slid.play;
	});
	</script>
<div style="display: none;"><a title="Joomla Templates" href="http://www.joomlavision.com">Joomla Templates</a> and Joomla Extensions by JoomlaVision.Com</div>
<div class="mod_jvsello2_headline" style="height:<?php echo $moduleHeight.'px'; ?>; width: <?php echo $moduleWidth.'px'; ?>">	
	
	<div class="jvcarousel_frame" style="height:<?php echo ($moduleHeight-20).'px'; ?>; width: <?php echo $moduleWidth.'px'; ?>">
		<div class="jvcarousel" id = "<?php echo $pl_jvcarousel; ?>">
		<?php 
		for($i=0;$i<$line;$i++)
		{
			echo "<div class='jvcarousel-slide' style='width:".$moduleWidth."px'>";
			for($j=0;$j<$number_items_per_line;$j++)
			{	
				if(	isset( $list[$i*$number_items_per_line+$j]))
				{		
					$item = $list[$i*$number_items_per_line+$j];					
					
				?>				
					<div class="jvcarousel-item" style="width: <?php echo $item_width.'px'; ?>" >
						<?php if($item->thumbs) { ?><img alt="<?php echo $item->title?>" src="<?php echo $item->thumbs; ?>" border="0" /> <?php } ?>
						<p class="jvcarousel_title">
							<a class="jvcarousel_mtitle" title="" href="<?php echo $item->link;?>"><?php echo $item->title; ?>&nbsp;</a>							
						</p>
						<?php						
							echo "<p>".$item->introtext."</p>";
						 ?>
						<?php if($showReadmore) { ?>
						<p><a class="readmore" title="" href="<?php echo $item->link;?>"><?php echo JText::_('ReadMore'); ?></a></p>	  
						<?php } ?>
					</div>
					
					<?php
					
				}
			}
			echo "</div>";
		}
		?>
		</div>
	</div>
	<div class="jvcarousel-pagi clearfix">		
		<p class="buttons handles" id="<?php echo $pl_handles; ?>" >
		<?php 
			if($showButNext == 1) echo "<span class='pre'>Pre</span>";
			for($i=0;$i<$line;$i++)
			{
				$item = $list[$i];
				if($i==0)
				{
					echo "<span class='handles_item active'>  ".($i+1)."  </span>";
				}
				else
				{
					echo "<span class='handles_item' >  ".($i+1)."  </span>";;
				}		
			}
			if($showButNext == 1) echo "<span class='next'>Next</span>";
		?>
		</p>

	</div>
</div>





