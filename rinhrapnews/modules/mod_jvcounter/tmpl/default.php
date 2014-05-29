<?php
/**
 # Module		JV Counter
 # @version		3.0.1
 # ------------------------------------------------------------------------
 # author    Open Source Code Solutions Co
 # copyright Copyright Â© 2008-2012 joomlavi.com. All Rights Reserved.
 # @license - http://www.gnu.org/licenses/gpl-3.0.html GNU/GPL or later.
 # Websites: http://www.joomlavi.com
 # Technical Support:  http://www.joomlavi.com/my-tickets.html
-------------------------------------------------------------------------*/
// No direct access to this file
defined( '_JEXEC' ) or die( 'Restricted access' );

$moduleStyle = $params->get('themes','style1');

$document = JFactory::getDocument();
$document->addStyleSheet('modules/mod_jvcounter/assets/styles/'.$moduleStyle.'/default.css');
?>

<div class="jvcounter_contain jvcounter_<?php echo $moduleStyle;?>">
    <?php if($headertext = $params->get('headertext')){?>
        <div class="jvcounter_rows jvcounter_headertext">
        	<span class="title_header"></span>
            <?php
                echo $headertext;
            ?>
        </div>
    <?php }?>
    
    <div class="digitstype"><?php echo $totalImage;?></div>
    
    <div class="counterday"> 
    <?php if(isset($visits['today']) && $visits['today']){?>
        <div class="jvcounter_rows jvcounter_today">
			<span><?php echo $params->get('texttoday','Today').'</span> '. count($visits['today']);?></span>
        </div>
    <?php }?>
    
    <?php if(isset($visits['yesterday']) && $visits['yesterday']){?>
        <div class="jvcounter_rows jvcounter_yesterday">
            <span><?php echo $params->get('textyesterday','Yesterday').'</span>'. count($visits['yesterday']);?></span>
        </div>
    <?php }?>
    
    <?php if(isset($visits['thisweek']) && $visits['thisweek']){?>
        <div class="jvcounter_rows jvcounter_thisweek">
            <span><?php echo $params->get('textthisweek','This week').' </span> '. count($visits['thisweek']);?></span>
        </div>
    <?php }?>
    
    <?php if(isset($visits['lastweek']) && $visits['lastweek']){?>
        <div class="jvcounter_rows jvcounter_lastweek">
            <span><?php echo $params->get('textlastweek','Last week').' </span> '. count($visits['lastweek']);?></span>
        </div>
    <?php }?>
    
    <?php if(isset($visits['thismonth']) && $visits['thismonth']) {?>
        <div class="jvcounter_rows jvcounter_thismonth">
            <span><?php echo $params->get('textthismonth','This month').' </span> '. count($visits['thismonth']);?></span>
        </div>
    <?php }?>
    
    <?php if(isset ($visits['lastmonth']) && $visits['lastmonth']){?>
        <div class="jvcounter_rows jvcounter_lastmonth">
            <span><?php echo $params->get('textlastmonth','Last month').' </span> '. count($visits['lastmonth']);?></span>
        </div>
    <?php }?>
    
    <?php if($params->get('showalldays',1)){?>
        <div class="jvcounter_rows jvcounter_alldays">
            <span><?php echo $params->get('textalldays','All days').' </span> '. $visits['total'];?></span>
        </div>
    <?php }?>
    </div>
    
    <div class="counteronline">
    <?php if($params->get('showip',1)){?>
        <div class="jvcounter_rows jvcounter_today">
            <?php
                $ip = $_SERVER['REMOTE_ADDR'] == '::1'?'local':$_SERVER['REMOTE_ADDR']; 
                echo '<span>'.$params->get('textyourip','Your IP').'</span>'.$ip;
            ?>
        </div>
    <?php }?>
    
    <?php if($params->get('showdatetoday',1)){?>
        <div class="jvcounter_rows jvcounter_datetoday">
            <?php 
                $dateformat = $params->get('datetodayformat','Y-m-d');
                $timeoffset = time() + 60*60*(int)$params->get('timeoffset',7);
                echo  '<span>'.$params->get('texttoday','To Day').'</span>'.JFactory::getDate($timeoffset)->format($dateformat);
            ?>
        </div>
    <?php }?>    
    
    <?php if(isset($visits['online']) && $visits['online']){?>
        <div class="jvcounter_rows jvcounter_today">
            
            <span><?php echo $params->get('textuseronline','User Online').' </span>'. $count['user'];?></span><br/>
            <span><?php echo $params->get('textguestonline','Guest Online').' </span>'. $count['guest'];?></span><br/>
        </div>
    <?php }?>
    </div>
    
    <span class="linebottom"></span>   
    
</div>