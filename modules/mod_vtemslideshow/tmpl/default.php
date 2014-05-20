<?php
/**
* @Copyright Copyright (C) 2010 VTEM . All rights reserved.
* @license GNU/GPL http://www.gnu.org/copyleft/gpl.html
* @link     	http://www.vtem.net
**/

// no direct access
defined('_JEXEC') or die('Restricted access');
        $strips 	= $params->get( 'strips', 10 );
		$delay 	= $params->get( 'delay', 5000 );
		$stripDelay = $params->get('stripDelay', 50);
		$titleSpeed = $params->get('titleSpeed', 1000);
		$width = $params->get( 'width', 500 );
		$height = $params->get( 'height', 300 );
		$position = $params->get( 'position', 'bottom' );
		$direction = $params->get( 'direction', 'fountainAlternate');
		$effect = $params->get( 'effect', '');
		$links = $params->get( 'links', false);
		$navigation = $params->get( 'navigation', true);
		$slideID = $params->get( 'slideID');
		$nav_style = $params->get( 'nav_style');
		$nextprev = $params->get( 'nextprev');
		$Hor_pos = $params->get( 'Hor_pos');
		$Ver_pos = $params->get( 'Ver_pos');
		$border = $params->get( 'border');
		$active_color = $params->get( 'active_color','#000');
		
$keyarr=explode(";",$params->get('linkimage'));
foreach($keyarr  as  $key=>$value){
if(!empty($value)){
   $linkimage[] = $value;
   }
}

if($params->get('jqueryslideshow', 1) == 1){	
?>
<script type="text/javascript" src="<?php echo JURI::root();?>modules/mod_vtemslideshow/js/jquery-1.4.2.min.js"></script>
<?php }?>
<script type="text/javascript" src="<?php echo JURI::root();?>modules/mod_vtemslideshow/js/slideshow.js"></script>
<script type="text/javascript">
var vtemslideshow = jQuery.noConflict();
(function($) {
$(document).ready(function(){
$('#<?php echo $slideID;?>').jqFancyTransitions({ 
width:<?php echo $width;?>, 
height: <?php echo $height;?>,
strips: <?php echo $strips;?>,
delay: <?php echo $delay;?>,
stripDelay: <?php echo $stripDelay;?>,
titleOpacity: 0.7,
titleSpeed: 1000,
position: '<?php echo $position;?>',
direction: '<?php echo $direction;?>',
effect: '<?php echo $effect;?>',
navigation: true,
links : <?php echo $links;?>
});
});
})(jQuery);
</script>
<style type="text/css">
.vtem_wapper{
position:relative;
width:<?php echo $width;?>px;
border:<?php echo $border;?>;
overflow:hidden;
}
.slidemain .ft-title{display:none;}
.item_photo,.slidemain{
width:<?php echo $width;?>px;
height:<?php echo $height;?>px;
}
.ft-prev,.ft-next{
color:#333 !important;
font-weight:bold !important;
padding:4px;
text-indent:-999999px;
width:30px;
<?php if($nextprev == 0){?>
display:none;
visibility:hidden
<?php }?>
}
.ft-prev{
background:url(<?php echo JURI::root();?>modules/mod_vtemslideshow/images/go_<?php echo $nav_style;?>.png) right top no-repeat;
_background:#f5f5f5;
<?php if($nav_style == "style1"){echo "left:0;";}else{echo "left:8px !important;";}?>
}
.ft-prev:hover{background-position:right bottom;}
.ft-next{
background:url(<?php echo JURI::root();?>modules/mod_vtemslideshow/images/go_<?php echo $nav_style;?>.png) left top no-repeat;
_background:#f5f5f5;
<?php if($nav_style == "style1"){echo "right:0;";}else{echo "right:8px !important;";}?>
}
.ft-next:hover{background-position:left bottom;}
<?php if($navigation == 0){?>
.vtem_button{
display:none;
visibility:hidden;
}
<?php }?>
<?php if(($nav_style == "style1") || ($nav_style == "style2")){?>
.vtem_button{
position:absolute;
<?php echo $Hor_pos;?>:0;
<?php echo $Ver_pos;?>:0;
background:url(<?php echo JURI::root();?>modules/mod_vtemslideshow/images/<?php echo $nav_style;?>_right.png) right top no-repeat;
padding-right:15px;
margin:8px 10px;
_width:50px;
}
.vtem_button div{
display:block;
padding-left:15px;
background:url(<?php echo JURI::root();?>modules/mod_vtemslideshow/images/<?php echo $nav_style;?>_left.png) left top no-repeat;
height:28px;
line-height:27px;
}
.vtem_button div a{
font-weight:bold;
padding:2px 5px;
margin:2px;
font-weight:bold;
text-decoration:none !important;
}
<?php }?>
<?php if(($nav_style == "style3") || ($nav_style == "style4")){?>
.vtem_button{
position:absolute;
<?php echo $Hor_pos;?>:0;
<?php echo $Ver_pos;?>:0;
margin:10px;
}
.vtem_button div{height:30px; line-height:27px; margin:0; padding:0;}
.vtem_button div a{
background:url(<?php echo JURI::root();?>modules/mod_vtemslideshow/images/<?php echo $nav_style;?>.png) center 0 no-repeat;
padding:5px 9px;
margin:2px;
font-weight:bold;
text-decoration:none !important;
}
<?php }?>
<?php if($nav_style == "style5"){?>
.vtem_button{
position:absolute;
<?php echo $Hor_pos;?>:0;
<?php echo $Ver_pos;?>:0;
margin:10px;
}
.vtem_button div{height:20px;line-height:21px; margin:0; padding:0;}
.vtem_button div a{
background:url(<?php echo JURI::root();?>modules/mod_vtemslideshow/images/<?php echo $nav_style;?>.png) center 0 no-repeat;
padding:10px;
margin:2px;
font-size:0px;
width:19px;
height:19px;
color:#ccc !important;
}
.vtem_button a.ft-button-<?php echo $slideID;?>-active{
background:url(<?php echo JURI::root();?>modules/mod_vtemslideshow/images/<?php echo $nav_style;?>.png) center -22px no-repeat !important;
color:#900 !important;
}
<?php }?>
.ft-button-<?php echo $slideID;?>-active{
color:<?php echo $active_color;?> !important;
}
</style>
<div class="vtem_wapper nav_<?php echo $nav_style;?>" style="clear:both;">
 <div id="<?php echo $slideID;?>" class="slidemain">
			<?php 
				foreach($images as $key => $img) {
					echo "<img src='".JURI::root().$imagePath.$img."' alt='VTEM Slideshow' />"; 
					if($links ==1)echo "<a href='".trim($linkimage[$key])."'></a>";
					}
	?>
 </div>
</div>