<?php if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' );
mm_showMyFileName(__FILE__); ?>
<?php if(!@is_object( $pagenav)) return;  ?>
<!-- BEGIN PAGE NAVIGATION -->
<div class="phantrang">
	<?php $pagenav->writePagesLinks( $search_string ); ?>
</div>
<!-- END PAGE NAVIGATION -->