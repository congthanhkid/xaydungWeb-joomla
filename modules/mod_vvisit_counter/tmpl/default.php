<?php
/**
* @version		$Id: default.php 2009-12-05 vinaora $
* @package		VINAORA VISITORS COUNTER
* @copyright	Copyright (C) 2007 - 2010 VINAORA. All rights reserved.
* @license		GNU/GPL
* @website		http://vinaora.com
* @email		admin@vinaora.com
* 
* @warning		DON'T EDIT OR DELETE LINK HTTP://VINAORA.COM ON THE FOOTER OF MODULE. PLEASE CONTACT ME IF YOU WANT.
*
*/

// no direct access
defined('_JEXEC') or die('Restricted access'); 
?>
<?php

JHTML::stylesheet("mod_vvisit_counter.css", "modules/mod_vvisit_counter/css/");

$html	=	'<!-- Vinaora Visitors Counter for Joomla! -->';
$html 	.= 	'<div id="vvisit_counter">';
if (!empty($pretext)) $html .= '<div>'.$pretext.'</div>';


/* ------------------------------------------------------------------------------------------------ */
// BEGIN: TABLE STATISTICS

if ( $s_stats ){

	$html		.=	'<div>';
	$html		.=	'<table cellpadding="0" cellspacing="0" style="width: '.$widthtable.'%;">';
	$html		.=	'<tbody>';
	
	// Show today, yestoday, this week, this month, and all visits
	if($s_today){
		$timeline	=	modVisitCounterHelper::showTimeLine( $local_daystart, 0, $offset );
		$html		.=	modVisitCounterHelper::showStatisticsRows( $stats_type, "vtoday", $timeline, $today, $today_visits );
	}
	if($s_yesterday){
		$timeline	=	modVisitCounterHelper::showTimeLine( $local_yesterdaystart, 0, $offset );
		$html		.=	modVisitCounterHelper::showStatisticsRows( $stats_type, "vyesterday", $timeline, $yesterday, $yesterday_visits );
	}
	if($s_week){
		$timeline	=	modVisitCounterHelper::showTimeLine( $local_weekstart, $local_daystart, $offset );
		$html		.=	modVisitCounterHelper::showStatisticsRows( $stats_type, "vweek", $timeline, $x_week, $week_visits );
	}
	if($s_lweek){
		$timeline	=	modVisitCounterHelper::showTimeLine( $local_lweekstart, $local_weekstart, $offset );
		$html		.=	modVisitCounterHelper::showStatisticsRows( $stats_type, "vlweek", $timeline, $l_week, $lweek_visits );
	}
	if($s_month){
		$timeline	=	modVisitCounterHelper::showTimeLine( $local_monthstart, $local_daystart, $offset );
		$html		.=	modVisitCounterHelper::showStatisticsRows( $stats_type, "vmonth", $timeline, $x_month, $month_visits );
	}
	if($s_lmonth){
		$timeline	=	modVisitCounterHelper::showTimeLine( $local_lmonthstart, $local_monthstart, $offset );
		$html		.=	modVisitCounterHelper::showStatisticsRows( $stats_type, "vlmonth", $timeline, $l_month, $lmonth_visits );
	}
	if($s_all){
		$timeline	=	empty($beginday)?"Vinaora Visitors Counter":JText::sprintf('Since',$beginday);
		$html	.=	modVisitCounterHelper::showStatisticsRows( $stats_type, "vall", $timeline, $all, $all_visits );
	}
	
	$html		.= "</tbody></table></div>";
}
// END: TABLE STATISTICS
/* ------------------------------------------------------------------------------------------------ */

/* ------------------------------------------------------------------------------------------------ */
if (!empty($posttext)){
	$html		.= '<div>'.$posttext.'</div>';
}

$html .= '</div>';
/* ------------------------------------------------------------------------------------------------ */

echo $html;
?>