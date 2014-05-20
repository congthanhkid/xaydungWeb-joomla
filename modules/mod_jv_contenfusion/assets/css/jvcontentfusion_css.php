<?php
header("Content-type: text/css; charset: UTF-8");
$id = $_GET['id'];
$slide = $_GET['slide'];
$height = $_GET['height'];
$width = $_GET['width'];
$total = $_GET['total'];
?>
div.scrollablewrap<?php echo $id; ?> {
	width: 100%;
	<?php if($slide) : ?>
	height: <?php echo $height + 20; ?>px;
	<?php endif; ?>
	clear: both;
	position: relative;
}
div.scrollable<?php echo $id; ?> {
	position: relative;
	<?php if($slide) : ?>
	width: <?php echo $width; ?>px;
	float: left;
	height: <?php echo $height; ?>px;
	padding: 10px 30px;
	<?php else : ?>
	padding: 10px 0;
	<?php endif; ?>
	overflow: hidden;
}
.mask<?php echo $id; ?> {
	margin: 0 auto;
	position: relative;
	<?php if($slide) : ?>
	width: <?php echo $width; ?>px;
	height: <?php echo $height; ?>px;
	<?php endif; ?>
	overflow: hidden;
}
#jvcf_<?php echo $id; ?>_content {
	margin: 0;
	<?php if($slide) : ?>
	position: absolute;
	width: <?php echo ($width * $total * 3); ?>px;
	<?php endif; ?>
}
#jvcf_<?php echo $id; ?>_content li a { 
	display: block;
	float: left;
}
#jvcf_<?php echo $id; ?>_content li.jvcf_<?php echo $id; ?>_item {
	<?php if($slide) : ?>
	padding: 0 5px 0 0;
	<?php else : ?>
	padding: 0 9px 9px 0;
	<?php endif; ?>
	display: block;
	float: left;
}
#jvcf_<?php echo $id; ?>_content li.jvcf_<?php echo $id; ?>_item img {
	display: block;
	padding: 4px;
	background: #242424;
	border: solid 1px #3C3C3C;
}
span#jvcf_<?php echo $id; ?>_previous,
span#jvcf_<?php echo $id; ?>_next {
	top: <?php echo ((int)($height/2) - 5); ?>px;
}
