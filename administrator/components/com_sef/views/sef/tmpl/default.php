<?php
/**
 * SEF component for Joomla!
 * 
 * @package   JoomSEF
 * @version   3.9.8
 * @author    ARTIO s.r.o., http://www.artio.net
 * @copyright Copyright (C) 2012 ARTIO s.r.o. 
 * @license   GNU/GPLv3 http://www.artio.net/license/gnu-general-public-license
 */
 
// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');

// Panes
$params1 = array('allowAllClose' => true);
$pane = JPane::getInstance('sliders', $params1);
$iconsPane = JPane::getInstance('tabs');
?>

<script type="text/javascript">
/* <![CDATA[ */
function updateWarning()
{
    var res = confirm('<?php echo JText::_('CONFIRM_URL_UPDATE'); ?>');
    if( res ) {
        alert('<?php echo JText::_('Please, DO NOT interrupt the next step, it may take some time to complete!'); ?>');
    }
    return res;
}
function updateMetaWarning()
{
    var res = confirm('<?php echo JText::_('CONFIRM_METATAGS_UPDATE'); ?>');
    if( res ) {
        alert('<?php echo JText::_('Please, DO NOT interrupt the next step, it may take some time to complete!'); ?>');
    }
    return res;
}
function updateSitemapWarning()
{
    var res = confirm('<?php echo JText::_('CONFIRM_SITEMAP_UPDATE'); ?>');
    if( res ) {
        alert('<?php echo JText::_('Please, DO NOT interrupt the next step, it may take some time to complete!'); ?>');
    }
    return res;
}
function cacheClearWarning()
{
    var res = confirm('<?php echo JText::_('CONFIRM_CACHE_CLEAR'); ?>');
    return res;
}
function purgeWarning()
{
    var res = confirm('<?php echo sprintf(JText::_('CONFIRM_URL_PURGE'), $this->purgeCount); ?>');
    return res;
}
function enableStatus(type)
{
    var form = document.adminForm;
    if( !form ) {
        return;
    }
    
    form.statusType.value = type;
    submitbutton('enableStatus');
}

function disableStatus(type)
{
    var form = document.adminForm;
    if( !form ) {
        return;
    }
    
    form.statusType.value = type;
    submitbutton('disableStatus');
}

function showUpgrade()
{
    submitbutton('showUpgrade');
}
/* ]]> */
</script>

<div class="col width-60">
	<div class="icons" id="cpanel">
	    
    	<?php
    	echo $iconsPane->startPane('icons-pane');
    	echo $iconsPane->startPanel(JText::_('JoomSEF Configuration'), 'config-panel');
    	?>
	
		<div class="config">
			<h2><?php echo JText::_('JoomSEF Configuration'); ?></h2>
	    	<!-- Global Configuration -->
	    	<div class="icon">
	    		<a href="index.php?option=com_sef&amp;controller=config&amp;task=edit" title="Configure all ARTIO JoomSEF functionality">
	       		<img src="templates/khepri/images/header/icon-48-config.png" alt="" width="48" height="48" border="0"/>
	       		<span><?php echo JText::_('Global Configuration'); ?></span>
	       	</a>
	       </div>
	       <!--  Extensions Management -->
	       <div class="icon">
	    		<a href="index.php?option=com_sef&amp;controller=extension" title="Extensions Management">
	       		<img src="templates/khepri/images/header/icon-48-plugin.png" alt="" width="48" height="48" border="0"/>
	       		<span><?php echo JText::_('Extensions Management'); ?></span>
	       	</a>
	       </div>
	       <!--  Edit .htaccess -->
	      	<div class="icon">
	       	<a href="index.php?option=com_sef&amp;controller=htaccess" title="Edit .htaccess file">
	      			<img src="components/com_sef/assets/images/icon-48-edit.png" alt="" width="48" height="48" border="0"/>
	      			<span><?php echo JText::_('Edit') . ' .htaccess'; ?></span>
	      		</a>
	      	</div>
	       <!--  Updates -->
	      	<div class="icon">
	       	<a href="index.php?option=com_sef&amp;task=showUpgrade" title="Component and plugin online and local upgrades">
	      			<img src="components/com_sef/assets/images/icon-48-update.png" alt="" width="48" height="48" border="0"/>
	      			<span><?php echo JText::_('Check Component and Extension Updates'); ?></span>
	      		</a>
	      	</div>            	
	
	      	<div style="clear: both;"></div>
	    </div>
	                  
    	<?php
    	echo $iconsPane->endPanel();
    	echo $iconsPane->startPanel(JText::_('URLs Management'), 'urls-panel');
    	?>
	
		<div class="urls">
	   		<h2><?php echo JText::_('URLs Management'); ?></h2>
	   		<!-- URLs Edit -->
	   		<div class="icon">
	   			<a href="index.php?option=com_sef&amp;controller=sefurls&amp;viewmode=3" title="View/Edit SEF URLs">
	      			<img src="components/com_sef/assets/images/icon-48-url-edit.png" alt="" width="48" height="48" border="0"/>
	      			<span><?php echo JText::_('Manage') . ' ' . JText::_('SEF URLs'); ?></span>
	      		</a>
	   		</div>
	   		<!--  Custom URLs -->
	    	<div class="icon">
				<a href="index.php?option=com_sef&amp;controller=sefurls&amp;viewmode=2" title="View/Edit Custom Redirects">
	       			<img src="components/com_sef/assets/images/icon-48-url-user.png" alt="" width="48" height="48" border="0"/>
	       			<span><?php echo JText::_('Manage Custom URLs'); ?></span>
	      		</a>
	      	</div>	        	
	   		<!--  Manage Meta Tags -->
	   		<div class="icon">
	   			<a href="index.php?option=com_sef&amp;controller=metatags" title="Manage Meta Tags">
	        		 <img src="components/com_sef/assets/images/icon-48-manage-tags.png" alt="" width="48" height="48" align="middle" border="0"/>
	      			<span><?php echo JText::_('Manage Meta Tags'); ?></span>
	      		</a>
	      	</div>
	      	<!--  Manage 301 Redirects -->
	      	<div class="icon">
	      		<a href="index.php?option=com_sef&amp;controller=movedurls" title="View/Edit Moved Permanently Redirects">
	      			<img src="components/com_sef/assets/images/icon-48-301-redirects.png" alt="" width="48" height="48" border="0"/>
	      			<span><?php echo JText::_('Manage') . ' ' . JText::_('Internal 301 Redirects'); ?></span>
	      		</a>
	      	</div>
	      	<div style="clear: both;"></div>
	   	</div>
	   		
    	<?php
    	echo $iconsPane->endPanel();
    	echo $iconsPane->startPanel(JText::_('Extras Management'), 'extras-panel');
    	?>
	
		<div class="extras">
	   		<h2><?php echo JText::_('Extras Management'); ?></h2>
            <!--  Manage Sitemap -->
	   		<div class="icon">
	   			<a href="index.php?option=com_sef&amp;controller=sitemap" title="Manage SiteMap">
	        		 <img src="components/com_sef/assets/images/icon-48-manage-sitemap.png" alt="" width="48" height="48" align="middle" border="0"/>
	      			<span><?php echo JText::_('Manage SiteMap'); ?></span>
	      		</a>
	      	</div>
            <!--  Manage Words -->
	   		<div class="icon">
	   			<a href="index.php?option=com_sef&amp;controller=words" title="Manage Words for Internal Links">
	        		 <img src="components/com_sef/assets/images/icon-48-manage-words.png" alt="" width="48" height="48" align="middle" border="0"/>
	      			<span><?php echo JText::_('Manage Words'); ?></span>
	      		</a>
	      	</div>
            <div style="clear: both;"></div>
            
            <!--  Statistics -->
            <div class="icon">
	   			<a href="index.php?option=com_sef&amp;view=statistics" title="Statistics">
	        		 <img src="components/com_sef/assets/images/icon-48-statistics.png" alt="" width="48" height="48" align="middle" border="0"/>
	      			<span><?php echo JText::_('COM_SEF_STATISTICS'); ?></span>
	      		</a>
	      	</div>
            <!--  Crawl Website -->
	   		<div class="icon">
	   			<a href="index.php?option=com_sef&amp;controller=crawler" title="Crawl Website">
	        		 <img src="components/com_sef/assets/images/icon-48-web-crawl.png" alt="" width="48" height="48" align="middle" border="0"/>
	      			<span><?php echo JText::_('Crawl Website'); ?></span>
	      		</a>
	      	</div>
            <!--  Set Up Cron -->
            <div class="icon">
                <a href="index.php?option=com_sef&amp;controller=cron" title="Set up cron job to run specified tasks automatically.">
                    <img src="components/com_sef/assets/images/icon-48-cron.png" alt="" width="48" height="48" align="middle" border="0"/>
                    <span><?php echo JText::_('COM_SEF_CRON'); ?></span>
                </a>
            </div>
	   		<div style="clear: both;"></div>
	   	</div>
	   	
    	<?php
    	echo $iconsPane->endPanel();
    	echo $iconsPane->startPanel(JText::_('COM_SEF_URLS_MAINTENANCE'), 'maintenance-panel');
    	?>
        
        <div class="maintenance">
            <h2><?php echo JText::_('COM_SEF_URLS_MAINTENANCE'); ?></h2>
	      	<!--  Update URLs -->
	   		<div class="icon">
	   			<a href="index.php?option=com_sef&amp;controller=sefurls&amp;task=updateurls" onclick="return updateWarning();" title="Update stored URLs after configuration change">
	         		<img src="components/com_sef/assets/images/icon-48-url-update.png" alt="" width="48" height="48" align="middle" border="0"/>
	      			<span><?php echo JText::_('Update URLs'); ?></span>
	      		</a>
	      	</div>       	
            <!--  Update Metatags -->
            <div class="icon">
                <a href="index.php?option=com_sef&amp;controller=sefurls&amp;task=updatemeta" onclick="return updateMetaWarning();" title="Update stored meta tags after configuration change">
                    <img src="components/com_sef/assets/images/icon-48-update-tags.png" alt="" width="48" height="48" align="middle" border="0"/>
                    <span><?php echo JText::_('Update Meta Tags'); ?></span>
                </a>
            </div>
            <div style="clear: both;"></div>
            
            <!-- URLs Purge -->
            <div class="icon">
                <a href="index.php?option=com_sef&amp;controller=urls&amp;task=purge&amp;type=0&amp;confirmed=1" onclick="return purgeWarning();" title="Purge auto-generated SEF Urls">
                    <img src="components/com_sef/assets/images/icon-48-url-delete.png" alt="" width="48" height="48" border="0"/>
                    <span><?php echo JText::_('Purge') . ' ' . JText::_('SEF URLs'); ?></span>
                </a>
            </div>
	   		<!--  Clear Cache -->
	   		<div class="icon">
	   			<a href="index.php?option=com_sef&amp;task=cleancache" onclick="return cacheClearWarning();" title="Clear URLs included in JoomSEF cache">
	        		 <img src="components/com_sef/assets/images/icon-48-clear.png" alt="" width="48" height="48" align="middle" border="0"/>
	      			<span><?php echo JText::_('Clear Cache'); ?></span>
	      		</a>
	      	</div>
	      	<!--  404 Logs -->
	      	<div class="icon">
	      		<a href="index.php?option=com_sef&amp;controller=sefurls&amp;viewmode=1" title="View/Edit 404 Logs">
	      			<img src="components/com_sef/assets/images/icon-48-404-logs.png" alt="" width="48" height="48" border="0"/>
	      			<span><?php echo JText::_('View') . ' ' . JText::_('404 Logs'); ?></span>
	     		</a>
	     	</div>
	      	<!--  Error Logs -->
	      	<div class="icon">
	      		<a href="index.php?option=com_sef&amp;controller=logger" title="View Errors Log">
	      			<img src="components/com_sef/assets/images/icon-48-error-logs.png" alt="" width="48" height="48" border="0"/>
	      			<span><?php echo JText::_('COM_SEF_VIEW_LOGS'); ?></span>
	     		</a>
	     	</div>
            <div style="clear: both;"></div>
        </div>
	
    	<?php
    	echo $iconsPane->endPanel();
    	echo $iconsPane->startPanel(JText::_('Help and Support'), 'help-panel');
    	?>
	
	   	<div class="help">
	   		<h2><?php echo JText::_('Help and Support'); ?></h2>
	   		<!--  Documentation -->
	   		<div class="icon">
				<a href="http://www.artio.net/en/joomsef/artio-joomsef-documentation" title="View ARTIO JoomSEF Documentation" target="_blank">
	        		<img src="components/com_sef/assets/images/icon-48-docs.png" alt="" width="48" height="48" align="middle" border="0"/>
	      			<span><?php echo JText::_('Documentation'); ?></span>
	      		</a>
	      	</div>
	      	<!--  Changelog -->
	      	<div class="icon">
	   			<a href="index.php?option=com_sef&amp;controller=info&amp;task=changelog" title="View ARTIO JoomSEF Changelog">
	        		<img src="components/com_sef/assets/images/icon-48-info.png" alt="" width="48" height="48" align="middle" border="0"/>
	      			<span><?php echo JText::_('Changelog'); ?></span>
	      		</a>
	      	</div>
	      	<!--  Support -->
	      	<div class="icon">
	   			<a href="index.php?option=com_sef&amp;controller=info&amp;task=help" title="Need help with ARTIO JoomSEF?">
	         		<img src="components/com_sef/assets/images/icon-48-help.png" alt="" width="48" height="48" align="middle" border="0"/>
	      			<span><?php echo JText::_('Support'); ?></span>
	      		</a>
	      	</div>
	
	      	<div style="clear: both;"></div>
	   	</div>
	
    	<?php
    	echo $iconsPane->endPanel();
    	echo $iconsPane->endPane();
    	?>
    	
    </div>
</div>

<div class="col width-40">
	<?php
	$sefInfo = SEFTools::getSEFInfo();
	?>
	
	<?php
	echo $pane->startPane('info-pane');
	echo $pane->startPanel(JText::_('ARTIO JoomSEF'), 'info-panel');
	?>
	
	<table class="admintable">
	   <tr>
			<td class="key"></td>
			<td>
	      		<a href="http://www.artio.net/en/joomla-extensions/artio-joomsef" target="_blank">
	          		<img src="components/com_sef/assets/images/box.png" align="middle" alt="JoomSEF logo" style="border: none; margin: 8px;" />
	        	</a>
			</td>
		</tr>
	   <tr>
	      <td class="key" width="120"></td>
	      <td><a href="<?php echo $sefInfo['authorUrl']; ?>" target="_blank">ARTIO</a> JoomSEF</td>
	   </tr>	
	   <tr>
	      <td class="key"><?php echo JText::_('Version'); ?>:</td>
	      <td><?php echo $sefInfo['version']; ?></td>
	   </tr>
	   <tr>
	      <td class="key"><?php echo JText::_('Newest version'); ?>:</td>
	      <td><?php echo $this->newestVersion; ?></td>
	   </tr>
	   <tr>
	      <td class="key"><?php echo JText::_('Date'); ?>:</td>
	      <td><?php echo $sefInfo['creationDate']; ?></td>
	   </tr>
	   <tr>
	      <td class="key" valign="top"><?php echo JText::_('Copyright'); ?>:</td>
	      <td>&copy; 2006 - <?php echo date('Y', strtotime($sefInfo['creationDate'])); ?>, <?php echo $sefInfo['copyright']; ?></td>
	   </tr>
	   <tr>
	      <td class="key"><?php echo JText::_('Author'); ?>:</td>
	      <td><a href="<?php echo $sefInfo['authorUrl']; ?>" target="_blank"><?php echo $sefInfo['author']; ?></a>,
	      <a href="mailto:<?php echo $sefInfo['authorEmail']; ?>"><?php echo $sefInfo['authorEmail']; ?></a></td>
	   </tr>
	   <tr>
	      <td class="key" valign="top"><?php echo JText::_('Description'); ?>:</td>
	      <td><?php echo $sefInfo['description']; ?></td>
	   </tr>
	   <tr>
	      <td class="key"><?php echo JText::_('License'); ?>:</td>
	      <td><a href="<?php echo $sefInfo['license']; ?>" target="_blank"><?php echo JText::_('Combined license') ?></a></td>
	   </tr>
	   <tr>
	      <td class="key"><?php echo JText::_('Support us'); ?>:</td>
	      <td>
	          <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
	          <input name="cmd" type="hidden" value="_s-xclick"></input>
	          <input name="submit" type="image" style="border: none;" src="https://www.paypal.com/en_US/i/btn/x-click-but04.gif" title="Support JoomSEF"></input>
	          <img src="https://www.paypal.com/en_US/i/scr/pixel.gif" border="0" alt="" width="1" height="1" />
	          <input name="encrypted" type="hidden" value="-----BEGIN PKCS7-----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-----END PKCS7-----"></input>
	          </form>
	      </td>
	   </tr>
	</table>
	
	<?php
	echo $pane->endPanel();
	echo $pane->endPane();
	?>
	<?php
	echo $pane->startPane('status-pane');
	echo $pane->startPanel(JText::_('SEF Status'), 'status-panel');
	?>

	<?php
	function showStatus($type)
	{
	    static $status;
	    if( !isset($status) ) {
	        $status = SEFTools::getSEOStatus();
	    }
	    
	    if( isset($status[$type]) ) {
	        if( $status[$type] ) {
	            echo '<span style="font-weight: bold; color: green;">' . JText::_('Enabled') . '</span>';
	            echo ' <input type="button" onclick="disableStatus(\'' . $type . '\');" value="' . JText::_('Disable') . '" />';
	        }
	        else {
	            echo '<span style="font-weight: bold; color: red;">' . JText::_('Disabled') . '</span>';
	            echo ' <input type="button" onclick="enableStatus(\'' . $type . '\');" value="' . JText::_('Enable') . '" />';
	        }
	    }
	}
	?>
	   <table class="admintable">
	       <tr>
	           <td class="key"><?php echo JText::_('Global SEF URLs'); ?></td>
	           <td><?php showStatus('sef'); ?></td>
	       </tr>
	       <tr>
	           <td class="key"><?php echo JText::_('Apache mod_rewrite'); ?></td>
	           <td><?php showStatus('mod_rewrite'); ?></td>
	       </tr>
	       <tr>
	           <td class="key"><?php echo JText::_('JoomSEF'); ?></td>
	           <td><?php showStatus('joomsef'); ?></td>
	       </tr>
	       <tr>
	           <td class="key"><?php echo JText::_('JoomSEF plugin'); ?></td>
	           <td><?php showStatus('plugin'); ?></td>
	       </tr>
	       <tr>
	           <td class="key"><?php echo JText::_('Creation of new URLs'); ?></td>
	           <td><?php showStatus('newurls'); ?></td>
	       </tr>
	   </table>
	
	<?php
	echo $pane->endPanel();
	echo $pane->endPane();
	?>
    	
	<?php
	$sefConfig =& SEFConfig::getConfig();
	if ($sefConfig->artioFeedDisplay) {
    	echo $pane->startPane('feed-pane');
    	echo $pane->startPanel(JText::_('ARTIO Newsfeed'), 'feed-panel');
	   ?>
	       <div class="joomsef_feed">
	       <?php echo $this->feed; ?>
	       </div>
	   <?php
    	echo $pane->endPanel();
    	echo $pane->endPane();
	}
	?>
	
	<?php
	echo $pane->startPane('stat-pane');
	echo $pane->startPanel(JText::_('Statistics'), 'stat-panel');
	?>
    	
	   <table class="admintable">
	       <?php
	       if (is_array($this->stats)) {
	           foreach($this->stats as $stat) {
	               if ($stat->text == '') {
	                   ?>
	                   <tr>
	                       <td class="key">&nbsp;</td>
	                       <td>&nbsp;</td>
	                   </tr>
	                   <?php
	               } else {
	                   $isTotal = (strpos(strtolower($stat->text), 'total') !== false);
	                   $strong1 = $isTotal ? '<strong>' : '';
	                   $strong2 = $isTotal ? '</strong>' : '';
	                   
	                   $text = JText::_($stat->text).':';
	                   if (isset($stat->link) && !empty($stat->link)) {
	                       $span1 = '<span class="hasTip" title="'.JText::_('View').' '.JText::_($stat->text).'">';
	                       $text = '<a href="'.$stat->link.'">'.$text.'</a>';
	                       $span2 = '</span>';
	                       $text = $span1 . $text . $span2;
	                   }
    	               ?>
    	               <tr>
    	                   <td class="key"><?php echo $text; ?></td>
    	                   <td><?php echo $strong1 . $stat->value . $strong2; ?></td>
    	               </tr>
    	               <?php
	               }
	           }
	       }
	       ?>
	   </table>

	<?php
	echo $pane->endPanel();
	echo $pane->endPane();
	?>
    	
</div>

<form action="index.php" method="post" name="adminForm" id="adminForm">

<input type="hidden" name="option" value="com_sef" />
<input type="hidden" name="boxchecked" value="0" />
<input type="hidden" name="task" value="" />
<input type="hidden" name="statusType" value="" />
<input type="hidden" name="controller" value="" />
<?php echo JHTML::_('form.token'); ?>
</form>
