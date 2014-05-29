<?php
/**
 * ------------------------------------------------------------------------
 * JA News Pro Module for Joomla 2.5
 * ------------------------------------------------------------------------
 * Copyright (C) 2004-2011 J.O.O.M Solutions Co., Ltd. All Rights Reserved.
 * @license - GNU/GPL, http://www.gnu.org/licenses/gpl.html
 * Author: J.O.O.M Solutions Co., Ltd
 * Websites: http://www.joomlart.com - http://www.joomlancers.com
 * ------------------------------------------------------------------------
 */
// no direct access
defined ( '_JEXEC' ) or die ( 'Restricted access' ); 


$db  = JFactory::getDBO();
$moduleid = $module->id;
$showcattitle 			= 	trim( $helper->get( 'showcattitle' ));
$showusersetting		=	intval (trim( $helper->get( 'showusersetting', 0 ) ));
$groupbysubcat			=	intval (trim( $helper->get( 'groupbysubcat', 0 ) ));
/* Cols by Parent group */
$cols 	= intval (trim( $helper->get( 'cols', 1 ) ));
if(!$cols) $cols = 1;
$width = 99.9/$cols;

/* Cols by sub categorogy */
$subcols 	= intval (trim( $helper->get( 'subcols', 1 ) ));
if(!$subcols) $subcols = 1;
$subwidth = 99.9/$subcols;
$t = 0;
$count_sections = count($helper->_section);

?>

<div id="ja-zinwrap-<?php echo $module->id?>">

<div id="ja-zin" class="ja-movable-container clearfix">
<?php if($count_sections){?>
		
			
	 <?php 
		for ($z = 0; $z < $cols; $z ++) {
			$k = $z;
			?>
	  <div class="items-row" id="items-row<?PHP echo $z; ?>" style="width: <?php echo $width?>%">	
	    <?php 
			$j = 1;
		
			foreach ($helper->_section as $secid=>$section){
				    
			     	$pos = $j==0?'row-first':($j == count($helper->_section)-1?'row-last':'');
			
				$params_new = new JParameter('');
				
				$catid = $secid;
				
				$cooki_name = 'mod'.$moduleid.'_'.$catid;
				if(isset($_COOKIE[$cooki_name]) && $_COOKIE[$cooki_name]!=''){
					$cookie_user_setting = $_COOKIE[$cooki_name];
					$arr_values = explode('&', $cookie_user_setting);
					if($arr_values){
						foreach ($arr_values as $row){
							list($k, $value) = explode('=', $row);
							if($k!=''){
								$params_new->set($k, $value);
							}
						}
					}
				}
								
				$introitems 	= 	intval (trim( $params_new->get( 'introitems', $helper->get( 'introitems', 1 ) )));
				$linkitems 		= 	intval (trim( $params_new->get( 'linkitems', $helper->get( 'linkitems', 0 ) ) ));
				$showimage		= 	intval (trim( $params_new->get( 'showimage', $helper->get( 'showimage', 1 ) ) ));
				if(!intval($secid) && in_array(substr($secid, 0, 3), array('sec', 'cat'))){
					$catid = substr($secid, 3);
				}
			     	?>	
	            <div class="article_row <?php echo "cols$subcols $pos";?> ja-zintheme-<?php echo isset($helper->_themes[$catid])?$helper->_themes[$catid]:''?> clearfix">			
								
		<div class="ja-zinsec clearfix">
		    <?php if($showcattitle){?>
			<h2>
				<a href="<?php echo $helper->cat_link[$secid];?>" title="<?php echo trim(strip_tags($helper->cat_desc[$secid]));?>">
					<span><?php echo $helper->cat_title[$secid];?></span>
				</a>
			</h2>
		    <?php }?>
		       <!-- User setting form -->
			<?php
						if($showusersetting){
				    		$path = JModuleHelper::getLayoutPath( 'mod_janewspro', $helper->get('themes', 'default').DS.'blog_usersetting' );
							if (file_exists($path)) {
			                    require($path);
			                }
						}
		    ?>
		<!-- End -->
		</div>
		
				<?php if(!$groupbysubcat){?>
							<div class="jazin-full" style="width: 100%">
								<?php
						    		$rows = $helper->articles[$secid];
						    		$path = JModuleHelper::getLayoutPath( 'mod_janewspro', $helper->get('themes', 'default').DS.'blog_item' );
									if (file_exists($path)) {
					                    require($path);
					                }
				                ?>
			                </div>  
			            </div>    
		<?php }else{?> <!-- Group by sub category -->
		<?php
				    		$subcol = 0;
				    		$number_cats = count($helper->_categories[$secid]);		
		for ($sz = 0; $sz < $subcols; $sz ++) :
								$cls = $subcols==1?'full':($sz==0?'left':($sz==$subcols-1?'right':'center'));
								$sk = $sz;
								$spos = $sz==0?'col-first':($sz == $subcols-1?'col-last':'');
								$subcol++;
		?>
	  
		<div class="article_column <?php echo "column$subcol $spos";?> clearfix">
			<?php for ($y = 0; $y < ($number_cats / $subcols) && $sk<$number_cats; $y ++) :
										$cat = $helper->_categories[$secid][$sk];
										if(!isset($helper->articles[$secid][$cat->id])) $helper->articles[$secid][$cat->id] = array();
										$rows = $helper->articles[$secid][$cat->id];
										$path = JModuleHelper::getLayoutPath( 'mod_janewspro', $helper->get('themes', 'default').DS.'blog_item' );
										if (file_exists($path)) {
											require($path);
										}
										$sk += $subcols;
									endfor; ?>
		</div>
		<?php endfor; ?>
		
	</div>
	<?php 
		}
				$k += $cols;
				$t++;
				$j++;
				unset($helper->_section[$secid]);
				if($j >= ($count_sections / $cols) && $k>=$count_sections){
					break;
				}
				?>

<?php	
         }
         ?>
       </div>  
<?php         
		}
		?>
		
<?php 		
		
   }    
?>

	<script type="text/javascript">
		var janewspro = null;
		var jasiteurl = '<?php echo JURI::root()?>';
		window.addEvent('domready', function(){
			janewspro = new JANEWSPRO(); 
			janewspro._bindingAndprocessingEventForm($('ja-zinwrap-<?php echo $module->id?>'));			
		})
	</script>
	<script type="text/javascript">
		window.addEvent('load', function(){
			document.getElements('.jahasTip').each(function(el) {
			var title = el.get('title');
			if (title) {
			 var parts = title.split('::', 2);
			 el.store('tip:title', parts[0]);
			 el.store('tip:text', parts[1]);
			}
		   });
			new Tips($('ja-zinwrap-<?php echo $module->id?>').getElements('.jahasTip'), { maxTitleChars: 50, fixed: false, className: 'tool-tip janews-tool'});
		})
	</script>

	<script type="text/javascript">
	window.addEvent('domready',function(){
		new JADDModules($$("#ja-zinwrap-<?php echo $module->id?> .ja-movable-container .items-row"), {src_collap_1:src_collap_1, src_collap_2:src_collap_2, 'cookieprefix':'', title: '.ja-zinsec'});
	});
	
	</script>
</div>


	
</div>
