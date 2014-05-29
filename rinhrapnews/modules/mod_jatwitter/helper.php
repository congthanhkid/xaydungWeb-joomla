<?php
/**
 * ------------------------------------------------------------------------
 * JA Twitter Module for Joomla 2.5
 * ------------------------------------------------------------------------
 * Copyright (C) 2004-2011 J.O.O.M Solutions Co., Ltd. All Rights Reserved.
 * @license - GNU/GPL, http://www.gnu.org/licenses/gpl.html
 * Author: J.O.O.M Solutions Co., Ltd
 * Websites: http://www.joomlart.com - http://www.joomlancers.com
 * ------------------------------------------------------------------------
 */

// no direct access
defined('_JEXEC') or die('Restricted access');
/**
 * modJaTwitterHelper  class.
 */
class modJaTwitterHelper
{

    /**
     * @var JATwitter $jaTwitter
     *
     * @access public.
     */
    var $jaTwitter = null;

    /**
     * @var boolean $isCache
     *
     * @access public.
     */
    var $isCache = false;

    /**
     * @var integer $cacheTimeLife
     *
     * @access public.
     */

    var $cacheTimeLife = 30;


    /**
     * constructor
     */
    function modJaTwitterHelper($username = '', $password = '')
    {
        $this->jaTwitter = new JATwitter();
    }


    /**
     * set options using for cache data
     *
     * @param boolean enable $use equal true
     */
    function setCache($use = true, $timeLife = 30)
    {
        $this->isCache = $use;
        $this->cacheTimeLife = $timeLife;
    }


    /**
     * get twitter's data base on method call, and process get and store data in  cache file
     *
     * @param string $twitterMethod api twitter method (@see http://apiwiki.twitter.com/Twitter-API-Documentation)
     * @param string $screenName
     * @param integer $count
     * @param integer $overrideCacheTime
     * @return array.
     */
    function getTwitter($twitterMethod = 'show', $screenName, $count = 10, $overrideCacheTime = false)
    {
        // check data valid
        if ($screenName == '') {
            return false;
        }

        $this->jaTwitter->setScreenName($screenName);
        // if enable cache data
        if ($this->isCache) {
            $cache = & JFactory::getCache();
            $cache->setCaching(true);
            if ($overrideCacheTime) {
                $cache->setLifeTime($overrideCacheTime * 60);
            } else {
                $cache->setLifeTime($this->cacheTimeLife * 60);
            }
            $data = $cache->get(array($this->jaTwitter, 'getTweets'), array($twitterMethod, $count));

        } else {
            $data = $this->jaTwitter->getTweets($twitterMethod, $count);
        }
        return $data;
    }


    /**
     * add hyper link......
     *
     * @var string $description
     * @return string.
     */
    function convert($description)
    {

        $description = preg_replace('#(^|[\n ])@([^ \"\t\n\r<]*)#ise', "'\\1<a href=\"http://www.twitter.com/\\2\" >@\\2</a>'", $description);
        $description = preg_replace('#(^|[\n ])([\w]+?://[\w]+[^ \"\n\r\t<]*)#ise', "'\\1<a href=\"\\2\" >\\2</a>'", $description);
        $description = preg_replace('#(^|[\n ])((www|ftp)\.[^ \"\t\n\r<]*)#ise', "'\\1<a href=\"http://\\2\" >\\2</a>'", $description);
        $description = preg_replace('#(^|[\n ])\#([^ \"\t\n\r<:]*)#ise', "'\\1<a target=\"_blank\" href=\"http://twitter.com/search?q=#\\2\" >\\2</a>'", $description);
        $description = str_replace('&amp;', '&', $description);
        $description = str_replace('&', '&amp;', $description);
        return $description;
    }


    /**
     * convert twitter's data to friendly date.
     *
     * @param string $createAt.
     * @return string.
     */
    function getDate($createdAt)
    {

        $now = & JFactory::getDate();
        $createdAt = preg_replace('(\+\d{4}\s+)', "", $createdAt);

        $date = & JFactory::getDate(strtotime($createdAt) + ($now->toUnix() - time()));

        $diff = $now->toUnix() - $date->toUnix();

        if ($diff < 60) {
            $createdDate = JText::_('LESS_THAN_A_MINUTE_AGO');
        } elseif ($diff < 120) {
            $createdDate = JText::_('ABOUT_A_MINUTE_AGO');
        } elseif ($diff < (45 * 60)) {
            $createdDate = JText::sprintf('S_MINUTES_AGO', round($diff / 60));
        } elseif ($diff < (90 * 60)) {
            $createdDate = JText::_('ABOUT_AN_HOUR_AGO');
        } elseif ($diff < (24 * 3600)) {
            $createdDate = JText::sprintf('ABOUT_S_HOURS_AGO', round($diff / 3600));
        } else {
            $createdDate = JHTML::_('date', $date->toUnix(), JText::_('DATE_FORMAT_LC2'));
        }

        return $createdDate;
    }


    /**
     * load css and js file.
     *
     * @param JParameter $params
     * @param stdClass contain module information.
     */
    function loadFiles($params, $module)
    {
        //if( $params->get('load_css_file') ) {
        JHTML::stylesheet('modules/' . $module . '/assets/style.css');
        if (is_file(JPATH_SITE . DS . 'templates' . DS . JFactory::getApplication()->getTemplate() . DS . 'css' . DS . $module . ".css"))
            JHTML::stylesheet('templates/' . JFactory::getApplication()->getTemplate() . '/css/' . $module . ".css");

     //}
    }


    /**
     * get list from RSS resouce, it's legacy help to run old version
     *
     * @params JParam $params
     * @return Object xml. or boolean
     */
    function getList($params)
    {

        if (trim($params->get('taccount')) == '') {
            return false;
        }
        $rssUrl = "http://api.twitter.com/1/statuses/user_timeline/" . $params->get('taccount') . ".rss?count=" . $params->get('show_limit');

        //  get RSS parsed object
        $options = array();
        $options['rssUrl'] = $rssUrl;
        if ($params->get('enable_cache')) {
            $options['cache_time'] = $params->get('cache_time');
            $options['cache_time'] *= 60;
        } else {
            $options['cache_time'] = null;
        }

        $rssDoc = & JFactory::getXMLparser('RSS', $options);

        if ($rssDoc != false) {
            $items = $rssDoc->get_items();
            return $items;
        } else {
            return false;
        }
    }


    function getFollowButton($params)
    {
        $typeOfFollow = $params->get('typefollowbutton', 'apiconnect');
        $apikey = $params->get('apikey');
        $screenName = $params->get('taccount');
        $stylebutton = $params->get("style_of_follow_button");
        $followbutton = "";
        $followbuttonclass = "";
        if ($typeOfFollow == "simple") {
            $image = "";
            if ($stylebutton == "none") {
                $image = JText::_("Follow me!");
                $followbuttonclass = "followbutton-none";
            } else {
                $image = '<img src="http://twitter-badges.s3.amazonaws.com/' . $stylebutton . '" alt="Follow ' . $screenName . ' on Twitter"/>';
            }
            $followbutton = '
				<form target="hidden_frame" id="form_follow" action="http://twitter.com/intent/follow?screen_name=' . $screenName . '" method="post">
					<a href="javascript:;" onclick="clickFollow();" class="' . $followbuttonclass . '">' . $image . '</a>
				</form>
				 <script type="text/javascript">
				   function clickFollow()
				   {
					  $("form_follow").submit();
					  return true;
				   }
				 </script>
			';

        } else {
            $followbutton = '
				<script src="http://platform.twitter.com/anywhere.js?id=' . $apikey . '&amp;v=1" type="text/javascript"></script>
				  <div id="anywhere-block-follow-button"></div>
				  <script type="text/javascript">
				  twttr.anywhere(function (twitter) {
						  twitter("#anywhere-block-follow-button").followButton("' . $screenName . '");
					  });
				  </script>
				';
        }
        return $followbutton;
    }
}
?>