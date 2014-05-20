<?php if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' );
mm_showMyFileName(__FILE__);
 ?>
<div class="ctsph3">Chi tiết sản phẩm</div>
<div class="chitietsanpham">
	
<div class="anhchitietsanpham">
	
	<div class="anh-san-pham">
		<?php echo urldecode( $product_image ) ?>
	</div>
	<div class="gia-san-pham">
		<div class="ten-san-pham"><?php echo $product_name ?></div>
		<div class="mo-ta"><?php echo $product_s_desc ?></div>		
		<div class="gia-ca">Giá: <?php echo $product_price ?></div>
	</div>
</div>
<div class="chi-tiet-san-pham">
<?php echo $product_description ?>
	
</div>

</div>
	
<div class="sanphamlienquan"><?php echo $related_products ?></div>
<div class="sanpham_lienquan_end"></div>