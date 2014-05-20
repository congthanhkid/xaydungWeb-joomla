<?php if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); ?>
<?php
	$j = 0;
?>
<div class="title-webvn">Sản phẩm liên quan</div>
 
<div class="relatepro">
    <?php 
    while( $products->next_record() ) { 
	$j++;
	?>
      	<div class="relatepro-items">
      		<?php echo $ps_product->product_snapshot( $products->f('product_sku') ) ?>
      	</div>
	<?php 
    }
	?>
</div>
