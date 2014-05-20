<?php if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); ?>
<?php JHTML::_('behavior.tooltip');
$quantity_in_stock = ps_product::get_field( $product_id, 'product_in_stock');

if( CHECK_STOCK == '1' && ( $quantity_in_stock < 1 ) ) {
	$button_lbl = $VM_LANG->_('VM_CART_NOTIFY');
	$button_cls = 'notify_button_module';
	$notify = true;
} else {
	$button_lbl = $VM_LANG->_('PHPSHOP_CART_ADD_TO');
	$button_cls = 'addtocart_button_module';
	$notify = false;
}

?>

<div class="list-sanpham">
	
 
		  <div class="anhsanpham-list"><a class="hasTip" title="<?php echo htmlspecialchars($product_name).'::'.htmlspecialchars('' .'
'. $product_s_desc);?>" href="<?php echo $product_link ?>">
				<?php

					echo ps_product::image_tag( $product_thumb_image, "alt=\"".$product_name."\"");
				?>
			</a>
		</div>
		  <div class="motasanpham">
		  			
		  			  <div class="tensanpham-list"><a class="hasTip" title="<?php echo htmlspecialchars($product_name).'::'.htmlspecialchars('' .'
'. $product_s_desc);?>" href="<?php echo $product_link ?>"><?php echo $product_name; ?></a></div>
							  			
			<div class="giasanpham">Giá: 
			<?php
				if( !empty($price) ) {
					echo $price;
				}
				?>
			</div>

	</div>

</div>
