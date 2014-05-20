<?php JHTML::_('behavior.tooltip');?>
<div class="list-sanpham">

		  <div class="anhsanpham-list"><a class="hasTip" title="<?php echo htmlspecialchars($product_name).'::'.htmlspecialchars('' .'
'. $product_s_desc);?>" href="<?php echo $product_flypage ?>"><?php echo ps_product::image_tag( urldecode($product_thumb_image), 'class="browseProductImage" border="0" title="'.$product_name.'" alt="'.$product_name .'"' ) ?></a></div>
		  <div class="motasanpham">
		  	  
	<div class="tensanpham-list"><a class="hasTip" title="<?php echo htmlspecialchars($product_name).'::'.htmlspecialchars('' .'
'. $product_s_desc);?>" href="<?php echo $product_flypage ?>"><?php echo $product_name ?></a>
	</div>
			<div class="giasanpham">Giá: <?php echo $product_price ?></div>

	</div>
</div>
