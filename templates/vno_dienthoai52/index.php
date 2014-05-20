<?php
/**
 * @copyright	Copyright (C) 2008 - 2009 JoomVision.com. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
include_once (dirname(__FILE__).DS.'libs'.DS.'jv_tools.php');
include_once (dirname(__FILE__).DS.'jv_menus'.DS.'jv.common.php');
include_once (dirname(__FILE__).DS.'libs'.DS.'jv_vars.php');
unset($this->_scripts[$this->baseurl . '/media/system/js/caption.js']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>">
<head>
<jdoc:include type="head" />
<?php JHTML::_('behavior.mootools'); ?>
<link rel="stylesheet" href="<?php echo $jvTools->baseurl() ; ?>templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $jvTools->baseurl() ; ?>templates/system/css/general.css" type="text/css" />
	<?php if($gzip == "true") : ?>
    <link rel="stylesheet" href="<?php echo $jvTools->templateurl(); ?>css/template.css.php" type="text/css" />
	<?php else: ?>
    <link rel="stylesheet" href="<?php echo $jvTools->templateurl(); ?>css/default.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $jvTools->templateurl(); ?>css/template.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $jvTools->templateurl(); ?>css/typo.css" type="text/css" />
	<?php endif; ?>
	<link href="<?php echo $jvTools->parse_jvcolor_cookie($jvcolorstyle); ?>" rel="stylesheet" type="text/css" />
	<script type="text/javascript">
		var baseurl = "<?php echo $jvTools->baseurl() ; ?>";
		var jvpathcolor = '<?php echo $jvTools->templateurl(); ?>css/colors/';
		var tmplurl = '<?php echo $jvTools->templateurl();?>';
		var CurrentFontSize = parseInt('<?php echo $jvTools->getParam('jv_font');?>');
	</script>
	<script type="text/javascript" src="<?php echo $jvTools->templateurl() ?>js/jv.script.js"></script>
	<!--[if lte IE 6]>
	<link rel="stylesheet" href="<?php echo $jvTools->templateurl(); ?>css/ie6.css" type="text/css" />
	<script type="text/javascript" src="<?php echo $jvTools->templateurl() ?>js/ie_png.js"></script>
	<script type="text/javascript">
	window.addEvent ('load', function() {
	   ie_png.fix('.png');
	});
	</script>
	<![endif]-->
	<!--[if lte IE 7]>
	<link rel="stylesheet" href="<?php echo $jvTools->templateurl(); ?>/css/ie7.css" type="text/css" />
	<![endif]-->

<style type="text/css">

#marqueecontainer{
position: relative;
width: 204px; /*marquee width */
height: 300px; /*marquee height */
overflow: hidden;
border-left: 1px solid #cfcece; border-bottom: 1px solid #cfcece; border-right: 1px solid #cfcece;
}

</style>

<script type="text/javascript">

/***********************************************
* Cross browser Marquee II- © Dynamic Drive (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for this script and 100s more.
***********************************************/

var delayb4scroll=2000 //Specify initial delay before marquee starts to scroll on page (2000=2 seconds)
var marqueespeed=2 //Specify marquee scroll speed (larger is faster 1-10)
var pauseit=1 //Pause marquee onMousever (0=no. 1=yes)?

////NO NEED TO EDIT BELOW THIS LINE////////////

var copyspeed=marqueespeed
var pausespeed=(pauseit==0)? copyspeed: 0
var actualheight=''

function scrollmarquee(){
if (parseInt(cross_marquee.style.top)>(actualheight*(-1)+8))
cross_marquee.style.top=parseInt(cross_marquee.style.top)-copyspeed+"px"
else
cross_marquee.style.top=parseInt(marqueeheight)+8+"px"
}

function initializemarquee(){
cross_marquee=document.getElementById("vmarquee")
cross_marquee.style.top=0
marqueeheight=document.getElementById("marqueecontainer").offsetHeight
actualheight=cross_marquee.offsetHeight
if (window.opera || navigator.userAgent.indexOf("Netscape/7")!=-1){ //if Opera or Netscape 7x, add scrollbars to scroll and exit
cross_marquee.style.height=marqueeheight+"px"
cross_marquee.style.overflow="scroll"
return
}
setTimeout('lefttime=setInterval("scrollmarquee()",30)', delayb4scroll)
}

if (window.addEventListener)
window.addEventListener("load", initializemarquee, false)
else if (window.attachEvent)
window.attachEvent("onload", initializemarquee)
else if (document.getElementById)
window.onload=initializemarquee


</script>

</head>
<body id="bd" class="fs<?php echo $jvTools->getParam('jv_font'); ?> <?php echo $jvTools->getParam('jv_display'); ?> <?php echo $jvTools->getParam('jv_display_style'); ?>">

<div id="jv-wrapper">
	<div id="jv-wrapper-inner">

	<div id="jv-header2"  class="clearfix">
		<div class="jv-wrapper">
			<div id="jv-header2-inner">
				<div class="banner_logo"><jdoc:include type="modules" name="banner_logo" style="jvxhtml" /></div>
			</div>
		</div>
	</div>

	<div id="jv-header"  class="clearfix">
		<div class="jv-wrapper">
		
			<div id="jv-header-inner">
                <div id="jv-header-r">
                    <div id="jv-mainmenu" class="clearfix">
                        <div id="jv-mainmenu-inner">
                            <?php if($menustyle == 'split' || $menustyle == 'submoo') : ?>
                               <?php $menu->show(0,0); ?>
                            <?php else : ?>
                                <?php $menu->show(); ?>
                            <?php endif; ?>
                        </div>
                     </div>
                </div>
				<?php if (($menustyle == 'split' || $menustyle == 'submoo') && ($menu->hasChild(1))): ?>
                    <div id="jv-submenu" class="clearfix">
                        <div class="jv-wrapper">
                            <div id="jv-submenu-inner">
                                <?php $menu->show(1,6); ?>
                            </div>
                        </div>
                    </div>
                    <?php else : ?>
                 <?php endif; ?>
                
                				<div class="time">
					<script type="text/javascript">
								var mydate = new Date()   ;
								var year = mydate.getFullYear();
								var day = mydate.getDay();
								var month = mydate.getMonth();
								var daym = mydate.getDate();
								if (daym < 10)   
									daym = '0' + daym ; 
								var dayarray = new Array(
									'Chủ nhật', 
									'Thứ 2', 
									'Thứ 3', 
									'Thứ 4', 
									'Thứ 5', 
									'Thứ 6', 
									'Thứ 7'
								);  
								document.write( dayarray[day] + ': Ngày ' + daym + '/' + (month+1) + '/' + year);
						</script>
				</div>
							
			</div>
		</div>
	</div>
							
	<?php if($this->countModules('slideshow1')) : ?>
	<div id="jv-userwrap11" class="clearfix">
		<div class="jv-wrapper">
			<div id="jv-userwrap11-inner">
				<?php if($this->countModules('slideshow1')) : ?>
				<jdoc:include type="modules" name="slideshow1" />
				<?php endif; ?>
			</div>
		</div>
	</div>
	<?php endif; ?>

	<!-- MAINBODY -->
	<div id="jv-mainbody" class="clearfix">
		<div class="jv-wrapper">
			<div id="jv-mainbody-inner">

	<?php if($this->countModules('breadcrumb')) : ?>
	<div id="jv-breadcrumb" class="clearfix">
		<div class="jv-wrapper">
			<div id="jv-breadcrumb-inner">
			<jdoc:include type="modules" name="breadcrumb" />
			</div>
		</div>
	</div>
	<?php endif; ?>

				<!-- CONTAINER -->
				<div id="jv-container<?php echo $jv_width;?>" class="clearfix">				
					<?php if($this->countModules('left')) : ?>
					<div id="jv-left">
						<jdoc:include type="modules" name="hangdienthoai" style="jvxhtml" />
						<jdoc:include type="modules" name="phukiendienthoai" style="jvxhtml" />
						<jdoc:include type="modules" name="tintucsukien" style="jvxhtml" />
						<jdoc:include type="modules" name="giohang" style="jvxhtml" />
						<jdoc:include type="modules" name="thongke" style="jvxhtml" />
						<jdoc:include type="modules" name="tienich" style="jvxhtml" />
						<div class="lienketweb">Liên kết website</div>
						<div class="lk">
						<div id="marqueecontainer" onMouseover="copyspeed=pausespeed" onMouseout="copyspeed=marqueespeed">
						<div id="vmarquee" style="position: absolute;">
							<jdoc:include type="modules" name="left" style="jvxhtml" />
						</div>
						</div>
						</div>
					</div>
					<?php endif; ?>                    
					<div id="jv-content">
						<div id="jv-content-inner">						
								<?php if($this->countModules('user5')) : ?>
                                <div id="jv-user5" class="clearfix">
                                    <jdoc:include type="modules" name="user5" style="jvxhtml" />
                                </div>
                                <?php endif; ?>
                                
                                <div id="jv-component" class="clearfix">
                                    <jdoc:include type="message" />
                                    <jdoc:include type="component" />
                                </div>
    
                               <?php if($this->countModules('user6')) : ?>
                                   <div id="jv-user6" class="clearfix"><jdoc:include type="modules" name="user6" style="jvxhtml" /></div>
                                <?php endif; ?>
                                   
								<?php if($this->countModules('tintuc_sukien')) : ?>
                                   <div id="jv-user6" class="clearfix"><jdoc:include type="modules" name="tintuc_sukien" style="jvxhtml" /></div>
                                <?php endif; ?>
                           
						</div>
					</div>
				
					<?php if($this->countModules('right')) : ?>
					<div id="jv-right"><jdoc:include type="modules" name="right" style="jvxhtml" /></div>
					<?php endif; ?>

				</div>
				<!-- END CONTAINER -->


            </div>
        </div>
    </div>
</div>
	<!-- END MAINBODY -->




	<?php
		$spotlight = array ('col1','col2','col3');
		$botsl1 = $jvTools->calSpotlight($spotlight,$jvTools->isOP()?100:100,'%');
		if( $botsl1 ) :
	?>
	<div id="jv-userwrap4" class="clearfix">
		<div class="jv-wrapper">
			<div id="jv-userwrap4-inner">
				
					<?php if($this->countModules('col1')) : ?>
						<div id="jv-col1"  style="width: 33%;">
							<div class="jv-box-inside">
								<jdoc:include type="modules" name="col1" style="jvxhtml" />
							</div>
						</div>
					<?php endif; ?>
                    
					<?php if($this->countModules('col2')) : ?>
						<div id="jv-col2"  style="width: 33%;">
							<div class="jv-box-inside">
								<jdoc:include type="modules" name="col2" style="jvxhtml" />
							</div>
						</div>
					<?php endif; ?>
                    <?php if($this->countModules('col3')) : ?>
						<div id="jv-col3" style="width: 33%;">
							<div class="jv-box-inside">
								<jdoc:include type="modules" name="col3" style="jvxhtml" />
							</div>
						</div>
					<?php endif; ?>
                    <br />
					
				
			</div>
		</div>
	</div>
	<?php endif; ?>



	<div id="jv-bottom" class="clearfix">
		<div class="jv-wrapper">
			<div id="jv-bottom-inner">
				                    
						<div id="jv-footer">
							<div id="jv-footer-inner"><jdoc:include type="modules" name="footer" /></div>
							<div class="footer-thongke"><jdoc:include type="modules" name="chantrang" /></div>
						</div>
             
			</div>
		</div>
	</div>

</div>

</body>
</html>
