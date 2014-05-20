-- phpMyAdmin SQL Dump
-- version 2.11.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 03, 2012 at 06:05 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `2012_dienthoai52`
--

-- --------------------------------------------------------

--
-- Table structure for table `webvn_banner`
--

CREATE TABLE IF NOT EXISTS `webvn_banner` (
  `bid` int(11) NOT NULL auto_increment,
  `cid` int(11) NOT NULL default '0',
  `type` varchar(30) NOT NULL default 'banner',
  `name` varchar(255) NOT NULL default '',
  `alias` varchar(255) NOT NULL default '',
  `imptotal` int(11) NOT NULL default '0',
  `impmade` int(11) NOT NULL default '0',
  `clicks` int(11) NOT NULL default '0',
  `imageurl` varchar(100) NOT NULL default '',
  `clickurl` varchar(200) NOT NULL default '',
  `date` datetime default NULL,
  `showBanner` tinyint(1) NOT NULL default '0',
  `checked_out` tinyint(1) NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `editor` varchar(50) default NULL,
  `custombannercode` text,
  `catid` int(10) unsigned NOT NULL default '0',
  `description` text NOT NULL,
  `sticky` tinyint(1) unsigned NOT NULL default '0',
  `ordering` int(11) NOT NULL default '0',
  `publish_up` datetime NOT NULL default '0000-00-00 00:00:00',
  `publish_down` datetime NOT NULL default '0000-00-00 00:00:00',
  `tags` text NOT NULL,
  `params` text NOT NULL,
  PRIMARY KEY  (`bid`),
  KEY `viewbanner` (`showBanner`),
  KEY `idx_banner_catid` (`catid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `webvn_banner`
--

INSERT INTO `webvn_banner` (`bid`, `cid`, `type`, `name`, `alias`, `imptotal`, `impmade`, `clicks`, `imageurl`, `clickurl`, `date`, `showBanner`, `checked_out`, `checked_out_time`, `editor`, `custombannercode`, `catid`, `description`, `sticky`, `ordering`, `publish_up`, `publish_down`, `tags`, `params`) VALUES
(1, 1, 'banner', 'OSM 1', 'osm-1', 0, 43, 0, 'osmbanner1.png', 'http://www.opensourcematters.org', '2004-07-07 15:31:29', 1, 0, '0000-00-00 00:00:00', '', '', 13, '', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(2, 1, 'banner', 'OSM 2', 'osm-2', 0, 49, 0, 'osmbanner2.png', 'http://www.opensourcematters.org', '2004-07-07 15:31:29', 1, 0, '0000-00-00 00:00:00', '', '', 13, '', 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(3, 1, '', 'Joomla!', 'joomla', 0, 129, 0, '', 'http://www.joomla.org', '2006-05-29 14:21:28', 1, 0, '0000-00-00 00:00:00', '', '<a href="{CLICKURL}" target="_blank">{NAME}</a>\r\n<br/>\r\nJoomla! The most popular and widely used Open Source CMS Project in the world.', 14, '', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(4, 1, '', 'JoomlaCode', 'joomlacode', 0, 129, 0, '', 'http://joomlacode.org', '2006-05-29 14:19:26', 1, 0, '0000-00-00 00:00:00', '', '<a href="{CLICKURL}" target="_blank">{NAME}</a>\r\n<br/>\r\nJoomlaCode, development and distribution made easy.', 14, '', 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(5, 1, '', 'Joomla! Extensions', 'joomla-extensions', 0, 124, 0, '', 'http://extensions.joomla.org', '2006-05-29 14:23:21', 1, 0, '0000-00-00 00:00:00', '', '<a href="{CLICKURL}" target="_blank">{NAME}</a>\r\n<br/>\r\nJoomla! Components, Modules, Plugins and Languages by the bucket load.', 14, '', 0, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(6, 1, '', 'Joomla! Shop', 'joomla-shop', 0, 124, 0, '', 'http://shop.joomla.org', '2006-05-29 14:23:21', 1, 0, '0000-00-00 00:00:00', '', '<a href="{CLICKURL}" target="_blank">{NAME}</a>\r\n<br/>\r\nFor all your Joomla! merchandise.', 14, '', 0, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(7, 1, '', 'Joomla! Promo Shop', 'joomla-promo-shop', 0, 229, 1, 'shop-ad.jpg', 'http://shop.joomla.org', '2007-09-19 17:26:24', 1, 0, '0000-00-00 00:00:00', '', '', 33, '', 0, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(8, 1, '', 'Joomla! Promo Books', 'joomla-promo-books', 0, 208, 0, 'shop-ad-books.jpg', 'http://shop.joomla.org/amazoncom-bookstores.html', '2007-09-19 17:28:01', 1, 0, '0000-00-00 00:00:00', '', '', 33, '', 0, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `webvn_bannerclient`
--

CREATE TABLE IF NOT EXISTS `webvn_bannerclient` (
  `cid` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL default '',
  `contact` varchar(255) NOT NULL default '',
  `email` varchar(255) NOT NULL default '',
  `extrainfo` text NOT NULL,
  `checked_out` tinyint(1) NOT NULL default '0',
  `checked_out_time` time default NULL,
  `editor` varchar(50) default NULL,
  PRIMARY KEY  (`cid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `webvn_bannerclient`
--

INSERT INTO `webvn_bannerclient` (`cid`, `name`, `contact`, `email`, `extrainfo`, `checked_out`, `checked_out_time`, `editor`) VALUES
(1, 'Open Source Matters', 'Administrator', 'admin@opensourcematters.org', '', 0, '00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `webvn_bannertrack`
--

CREATE TABLE IF NOT EXISTS `webvn_bannertrack` (
  `track_date` date NOT NULL,
  `track_type` int(10) unsigned NOT NULL,
  `banner_id` int(10) unsigned NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `webvn_bannertrack`
--


-- --------------------------------------------------------

--
-- Table structure for table `webvn_categories`
--

CREATE TABLE IF NOT EXISTS `webvn_categories` (
  `id` int(11) NOT NULL auto_increment,
  `parent_id` int(11) NOT NULL default '0',
  `title` varchar(255) NOT NULL default '',
  `name` varchar(255) NOT NULL default '',
  `alias` varchar(255) NOT NULL default '',
  `image` varchar(255) NOT NULL default '',
  `section` varchar(50) NOT NULL default '',
  `image_position` varchar(30) NOT NULL default '',
  `description` text NOT NULL,
  `published` tinyint(1) NOT NULL default '0',
  `checked_out` int(11) unsigned NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `editor` varchar(50) default NULL,
  `ordering` int(11) NOT NULL default '0',
  `access` tinyint(3) unsigned NOT NULL default '0',
  `count` int(11) NOT NULL default '0',
  `params` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `cat_idx` (`section`,`published`,`access`),
  KEY `idx_access` (`access`),
  KEY `idx_checkout` (`checked_out`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `webvn_categories`
--

INSERT INTO `webvn_categories` (`id`, `parent_id`, `title`, `name`, `alias`, `image`, `section`, `image_position`, `description`, `published`, `checked_out`, `checked_out_time`, `editor`, `ordering`, `access`, `count`, `params`) VALUES
(2, 0, 'Joomla! Specific Links', '', 'joomla-specific-links', 'clock.jpg', 'com_weblinks', 'left', 'A selection of links that are all related to the Joomla! Project.', 1, 0, '0000-00-00 00:00:00', NULL, 1, 0, 0, ''),
(4, 0, 'Joomla!', '', 'joomla', '', 'com_newsfeeds', 'left', '', 1, 0, '0000-00-00 00:00:00', NULL, 2, 0, 0, ''),
(5, 0, 'Free and Open Source Software', '', 'free-and-open-source-software', '', 'com_newsfeeds', 'left', 'Read the latest news about free and open source software from some of its leading advocates.', 1, 0, '0000-00-00 00:00:00', NULL, 3, 0, 0, ''),
(6, 0, 'Related Projects', '', 'related-projects', '', 'com_newsfeeds', 'left', 'Joomla builds on and collaborates with many other free and open source projects. Keep up with the latest news from some of them.', 1, 0, '0000-00-00 00:00:00', NULL, 4, 0, 0, ''),
(12, 0, 'Contacts', '', 'contacts', '', 'com_contact_details', 'left', 'Contact Details for this Web site', 1, 0, '0000-00-00 00:00:00', NULL, 0, 0, 0, ''),
(13, 0, 'Joomla', '', 'joomla', '', 'com_banner', 'left', '', 1, 0, '0000-00-00 00:00:00', NULL, 0, 0, 0, ''),
(14, 0, 'Text Ads', '', 'text-ads', '', 'com_banner', 'left', '', 1, 0, '0000-00-00 00:00:00', NULL, 0, 0, 0, ''),
(15, 0, 'Features', '', 'features', '', 'com_content', 'left', '', 0, 0, '0000-00-00 00:00:00', NULL, 6, 0, 0, ''),
(17, 0, 'Benefits', '', 'benefits', '', 'com_content', 'left', '', 0, 0, '0000-00-00 00:00:00', NULL, 4, 0, 0, ''),
(18, 0, 'Platforms', '', 'platforms', '', 'com_content', 'left', '', 0, 0, '0000-00-00 00:00:00', NULL, 3, 0, 0, ''),
(19, 0, 'Other Resources', '', 'other-resources', '', 'com_weblinks', 'left', '', 1, 0, '0000-00-00 00:00:00', NULL, 2, 0, 0, ''),
(33, 0, 'Joomla! Promo', '', 'joomla-promo', '', 'com_banner', 'left', '', 1, 0, '0000-00-00 00:00:00', NULL, 1, 0, 0, ''),
(36, 0, 'Về chúng tôi', '', 'v-chung-toi', '', '4', 'left', '', 1, 0, '0000-00-00 00:00:00', NULL, 1, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `webvn_components`
--

CREATE TABLE IF NOT EXISTS `webvn_components` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL default '',
  `link` varchar(255) NOT NULL default '',
  `menuid` int(11) unsigned NOT NULL default '0',
  `parent` int(11) unsigned NOT NULL default '0',
  `admin_menu_link` varchar(255) NOT NULL default '',
  `admin_menu_alt` varchar(255) NOT NULL default '',
  `option` varchar(50) NOT NULL default '',
  `ordering` int(11) NOT NULL default '0',
  `admin_menu_img` varchar(255) NOT NULL default '',
  `iscore` tinyint(4) NOT NULL default '0',
  `params` text NOT NULL,
  `enabled` tinyint(4) NOT NULL default '1',
  PRIMARY KEY  (`id`),
  KEY `parent_option` (`parent`,`option`(32))
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=69 ;

--
-- Dumping data for table `webvn_components`
--

INSERT INTO `webvn_components` (`id`, `name`, `link`, `menuid`, `parent`, `admin_menu_link`, `admin_menu_alt`, `option`, `ordering`, `admin_menu_img`, `iscore`, `params`, `enabled`) VALUES
(1, 'Banners', '', 0, 0, '', 'Banner Management', 'com_banners', 0, 'js/ThemeOffice/component.png', 0, 'track_impressions=0\ntrack_clicks=0\ntag_prefix=\n\n', 1),
(2, 'Banners', '', 0, 1, 'option=com_banners', 'Active Banners', 'com_banners', 1, 'js/ThemeOffice/edit.png', 0, '', 1),
(3, 'Clients', '', 0, 1, 'option=com_banners&c=client', 'Manage Clients', 'com_banners', 2, 'js/ThemeOffice/categories.png', 0, '', 1),
(4, 'Web Links', 'option=com_weblinks', 0, 0, '', 'Manage Weblinks', 'com_weblinks', 0, 'js/ThemeOffice/component.png', 0, 'show_comp_description=1\ncomp_description=\nshow_link_hits=1\nshow_link_description=1\nshow_other_cats=1\nshow_headings=1\nshow_page_title=1\nlink_target=0\nlink_icons=\n\n', 1),
(5, 'Links', '', 0, 4, 'option=com_weblinks', 'View existing weblinks', 'com_weblinks', 1, 'js/ThemeOffice/edit.png', 0, '', 1),
(6, 'Categories', '', 0, 4, 'option=com_categories&section=com_weblinks', 'Manage weblink categories', '', 2, 'js/ThemeOffice/categories.png', 0, '', 1),
(7, 'Contacts', 'option=com_contact', 0, 0, '', 'Edit contact details', 'com_contact', 0, 'js/ThemeOffice/component.png', 1, 'contact_icons=0\nicon_address=\nicon_email=\nicon_telephone=\nicon_fax=\nicon_misc=\nshow_headings=1\nshow_position=1\nshow_email=0\nshow_telephone=1\nshow_mobile=1\nshow_fax=1\nbannedEmail=\nbannedSubject=\nbannedText=\nsession=1\ncustomReply=0\n\n', 1),
(8, 'Contacts', '', 0, 7, 'option=com_contact', 'Edit contact details', 'com_contact', 0, 'js/ThemeOffice/edit.png', 1, '', 1),
(9, 'Categories', '', 0, 7, 'option=com_categories&section=com_contact_details', 'Manage contact categories', '', 2, 'js/ThemeOffice/categories.png', 1, 'contact_icons=0\nicon_address=\nicon_email=\nicon_telephone=\nicon_fax=\nicon_misc=\nshow_headings=1\nshow_position=1\nshow_email=0\nshow_telephone=1\nshow_mobile=1\nshow_fax=1\nbannedEmail=\nbannedSubject=\nbannedText=\nsession=1\ncustomReply=0\n\n', 1),
(10, 'Polls', 'option=com_poll', 0, 0, 'option=com_poll', 'Manage Polls', 'com_poll', 0, 'js/ThemeOffice/component.png', 0, '', 1),
(11, 'News Feeds', 'option=com_newsfeeds', 0, 0, '', 'News Feeds Management', 'com_newsfeeds', 0, 'js/ThemeOffice/component.png', 0, '', 1),
(12, 'Feeds', '', 0, 11, 'option=com_newsfeeds', 'Manage News Feeds', 'com_newsfeeds', 1, 'js/ThemeOffice/edit.png', 0, 'show_headings=1\nshow_name=1\nshow_articles=1\nshow_link=1\nshow_cat_description=1\nshow_cat_items=1\nshow_feed_image=1\nshow_feed_description=1\nshow_item_description=1\nfeed_word_count=0\n\n', 1),
(13, 'Categories', '', 0, 11, 'option=com_categories&section=com_newsfeeds', 'Manage Categories', '', 2, 'js/ThemeOffice/categories.png', 0, '', 1),
(14, 'User', 'option=com_user', 0, 0, '', '', 'com_user', 0, '', 1, '', 1),
(15, 'Search', 'option=com_search', 0, 0, 'option=com_search', 'Search Statistics', 'com_search', 0, 'js/ThemeOffice/component.png', 1, 'enabled=0\n\n', 1),
(16, 'Categories', '', 0, 1, 'option=com_categories&section=com_banner', 'Categories', '', 3, '', 1, '', 1),
(17, 'Wrapper', 'option=com_wrapper', 0, 0, '', 'Wrapper', 'com_wrapper', 0, '', 1, '', 1),
(18, 'Mail To', '', 0, 0, '', '', 'com_mailto', 0, '', 1, '', 1),
(19, 'Media Manager', '', 0, 0, 'option=com_media', 'Media Manager', 'com_media', 0, '', 1, 'upload_extensions=bmp,csv,doc,epg,gif,ico,jpg,odg,odp,ods,odt,pdf,png,ppt,swf,txt,xcf,xls,BMP,CSV,DOC,EPG,GIF,ICO,JPG,ODG,ODP,ODS,ODT,PDF,PNG,PPT,SWF,TXT,XCF,XLS\nupload_maxsize=10000000\nfile_path=images\nimage_path=images/stories\nrestrict_uploads=1\nallowed_media_usergroup=3\ncheck_mime=1\nimage_extensions=bmp,gif,jpg,png\nignore_extensions=\nupload_mime=image/jpeg,image/gif,image/png,image/bmp,application/x-shockwave-flash,application/msword,application/excel,application/pdf,application/powerpoint,text/plain,application/x-zip\nupload_mime_illegal=text/html\nenable_flash=0\n\n', 1),
(20, 'Articles', 'option=com_content', 0, 0, '', '', 'com_content', 0, '', 1, 'show_noauth=0\nshow_title=1\nlink_titles=0\nshow_intro=1\nshow_section=0\nlink_section=0\nshow_category=0\nlink_category=0\nshow_author=0\nshow_create_date=0\nshow_modify_date=0\nshow_item_navigation=0\nshow_readmore=1\nshow_vote=0\nshow_icons=0\nshow_pdf_icon=0\nshow_print_icon=0\nshow_email_icon=0\nshow_hits=0\nfeed_summary=0\nfilter_tags=\nfilter_attritbutes=\n\n', 1),
(21, 'Configuration Manager', '', 0, 0, '', 'Configuration', 'com_config', 0, '', 1, '', 1),
(22, 'Installation Manager', '', 0, 0, '', 'Installer', 'com_installer', 0, '', 1, '', 1),
(23, 'Language Manager', '', 0, 0, '', 'Languages', 'com_languages', 0, '', 1, 'site=vi-VN\nadministrator=vi-VN\n\n', 1),
(24, 'Mass mail', '', 0, 0, '', 'Mass Mail', 'com_massmail', 0, '', 1, 'mailSubjectPrefix=\nmailBodySuffix=\n\n', 1),
(25, 'Menu Editor', '', 0, 0, '', 'Menu Editor', 'com_menus', 0, '', 1, '', 1),
(27, 'Messaging', '', 0, 0, '', 'Messages', 'com_messages', 0, '', 1, '', 1),
(28, 'Modules Manager', '', 0, 0, '', 'Modules', 'com_modules', 0, '', 1, '', 1),
(29, 'Plugin Manager', '', 0, 0, '', 'Plugins', 'com_plugins', 0, '', 1, '', 1),
(30, 'Template Manager', '', 0, 0, '', 'Templates', 'com_templates', 0, '', 1, '', 1),
(31, 'User Manager', '', 0, 0, '', 'Users', 'com_users', 0, '', 1, 'allowUserRegistration=1\nnew_usertype=Registered\nuseractivation=0\nfrontend_userparams=1\n\n', 1),
(32, 'Cache Manager', '', 0, 0, '', 'Cache', 'com_cache', 0, '', 1, '', 1),
(33, 'Control Panel', '', 0, 0, '', 'Control Panel', 'com_cpanel', 0, '', 1, '', 1),
(34, 'VirtueMart', 'option=com_virtuemart', 0, 0, 'option=com_virtuemart', 'VirtueMart', 'com_virtuemart', 0, '../components/com_virtuemart/shop_image/ps_image/menu_icon.png', 0, '', 1),
(35, 'virtuemart_version', '', 0, 9999, '', '', '', 0, '', 0, 'RELEASE=1.1.9\nDEV_STATUS=stable', 1),
(36, 'swMenuPro', 'option=com_swmenupro', 0, 0, 'option=com_swmenupro', 'swMenuPro', 'com_swmenupro', 0, 'js/ThemeOffice/component.png', 0, '', 1),
(37, 'jSecure Authentication', 'option=com_jsecure', 0, 0, 'option=com_jsecure', 'jSecure Authentication', 'com_jsecure', 0, 'components/com_jsecure/images/jSecure_icon_16x16.png', 0, '', 1),
(38, 'Basic Configuration', '', 0, 37, 'option=com_jsecure&task=basic', 'Basic Configuration', 'com_jsecure', 0, 'js/ThemeOffice/component.png', 0, '', 1),
(39, 'Advanced Configuration', '', 0, 37, 'option=com_jsecure&task=advanced', 'Advanced Configuration', 'com_jsecure', 1, 'js/ThemeOffice/component.png', 0, '', 1),
(40, 'View Log', '', 0, 37, 'option=com_jsecure&task=log', 'View Log', 'com_jsecure', 2, 'js/ThemeOffice/component.png', 0, '', 1),
(41, 'Help', '', 0, 37, 'option=com_jsecure&task=help', 'Help', 'com_jsecure', 3, 'js/ThemeOffice/component.png', 0, '', 1),
(42, 'Vinaora Visitors Counter', 'option=com_vvisit_counter', 0, 0, 'option=com_vvisit_counter', 'Vinaora Visitors Counter', 'com_vvisit_counter', 0, 'js/ThemeOffice/component.png', 0, '', 1),
(43, 'COM_K2', 'option=com_k2', 0, 0, 'option=com_k2', 'COM_K2', 'com_k2', 0, '../media/k2/assets/images/system/k2_16x16.png', 0, 'enable_css=1\njQueryHandling=1.7remote\nbackendJQueryHandling=remote\nuserName=1\nuserImage=1\nuserDescription=1\nuserURL=1\nuserFeedLink=1\nuserFeedIcon=1\nuserItemCount=10\nuserItemTitle=1\nuserItemTitleLinked=1\nuserItemDateCreated=1\nuserItemImage=1\nuserItemIntroText=1\nuserItemCategory=1\nuserItemTags=1\nuserItemCommentsAnchor=1\nuserItemReadMore=1\nuserItemK2Plugins=1\ntagItemCount=10\ntagItemTitle=1\ntagItemTitleLinked=1\ntagItemDateCreated=1\ntagItemImage=1\ntagItemIntroText=1\ntagItemCategory=1\ntagItemReadMore=1\ntagFeedLink=1\ntagFeedIcon=1\ngenericItemCount=10\ngenericItemTitle=1\ngenericItemTitleLinked=1\ngenericItemDateCreated=1\ngenericItemImage=1\ngenericItemIntroText=1\ngenericItemCategory=1\ngenericItemReadMore=1\ngenericFeedLink=1\ngenericFeedIcon=1\nfeedLimit=10\nfeedItemImage=1\nfeedImgSize=S\nfeedItemIntroText=1\nfeedItemFullText=1\nlinkPopupWidth=900\nlinkPopupHeight=600\nimagesQuality=100\nitemImageXS=100\nitemImageS=200\nitemImageM=400\nitemImageL=600\nitemImageXL=900\nitemImageGeneric=300\ncatImageWidth=100\ncatImageDefault=1\nuserImageWidth=100\nuserImageDefault=1\ncommenterImgWidth=48\nonlineImageEditor=splashup\nfacebookImage=Small\ncomments=1\ncommentsOrdering=DESC\ncommentsLimit=10\ncommentsFormPosition=below\ncommentsPublishing=1\ncommentsReporting=2\ngravatar=1\ncommentsFormNotes=1\nfrontendEditing=1\nshowImageTab=1\nshowImageGalleryTab=1\nshowVideoTab=1\nshowExtraFieldsTab=1\nshowAttachmentsTab=1\nshowK2Plugins=1\nmergeEditors=1\nsideBarDisplay=1\ntaggingSystem=1\ngoogleSearchContainer=k2Container\nK2UserProfile=1\nadminSearch=simple\nrecaptcha_theme=clean\nshowItemsCounterAdmin=1\nshowChildCatItems=1\nmetaDescLimit=150\nsh404SefLabelUser=blog\nsh404SefLabelItem=2\nsh404SefTitleAlias=alias\nsh404SefModK2ContentFeedAlias=feed\n', 1),
(44, 'K2_ITEMS', '', 0, 43, 'option=com_k2&view=items', 'K2_ITEMS', 'com_k2', 0, 'js/ThemeOffice/component.png', 0, '', 1),
(45, 'K2_CATEGORIES', '', 0, 43, 'option=com_k2&view=categories', 'K2_CATEGORIES', 'com_k2', 1, 'js/ThemeOffice/component.png', 0, '', 1),
(46, 'K2_TAGS', '', 0, 43, 'option=com_k2&view=tags', 'K2_TAGS', 'com_k2', 2, 'js/ThemeOffice/component.png', 0, '', 1),
(47, 'K2_COMMENTS', '', 0, 43, 'option=com_k2&view=comments', 'K2_COMMENTS', 'com_k2', 3, 'js/ThemeOffice/component.png', 0, '', 1),
(48, 'K2_USERS', '', 0, 43, 'option=com_k2&view=users', 'K2_USERS', 'com_k2', 4, 'js/ThemeOffice/component.png', 0, '', 1),
(49, 'K2_USER_GROUPS', '', 0, 43, 'option=com_k2&view=usergroups', 'K2_USER_GROUPS', 'com_k2', 5, 'js/ThemeOffice/component.png', 0, '', 1),
(50, 'K2_EXTRA_FIELDS', '', 0, 43, 'option=com_k2&view=extrafields', 'K2_EXTRA_FIELDS', 'com_k2', 6, 'js/ThemeOffice/component.png', 0, '', 1),
(51, 'K2_EXTRA_FIELD_GROUPS', '', 0, 43, 'option=com_k2&view=extrafieldsgroups', 'K2_EXTRA_FIELD_GROUPS', 'com_k2', 7, 'js/ThemeOffice/component.png', 0, '', 1),
(52, 'K2_MEDIA_MANAGER', '', 0, 43, 'option=com_k2&view=media', 'K2_MEDIA_MANAGER', 'com_k2', 8, 'js/ThemeOffice/component.png', 0, '', 1),
(53, 'K2_INFORMATION', '', 0, 43, 'option=com_k2&view=info', 'K2_INFORMATION', 'com_k2', 9, 'js/ThemeOffice/component.png', 0, '', 1),
(55, 'Magic Zoom Plus', 'option=com_magiczoomplus', 0, 0, 'option=com_magiczoomplus', 'Magic Zoom Plus', 'com_magiczoomplus', 0, '../administrator/components/com_magiczoomplus/image/magiczoomplus.png', 0, '', 1),
(56, 'ARTIO JoomSEF', 'option=com_sef', 0, 0, 'option=com_sef', 'ARTIO JoomSEF', 'com_sef', 0, 'components/com_sef/assets/images/icon.png', 0, '', 1),
(57, 'Control Panel', '', 0, 56, 'option=com_sef', 'Control Panel', 'com_sef', 0, 'components/com_sef/assets/images/icon-16-sefcpanel.png', 0, '', 1),
(58, 'Configuration', '', 0, 56, 'option=com_sef&controller=config&task=edit', 'Configuration', 'com_sef', 1, 'components/com_sef/assets/images/icon-16-sefconfig.png', 0, '', 1),
(59, 'Manage Extensions', '', 0, 56, 'option=com_sef&controller=extension', 'Manage Extensions', 'com_sef', 2, 'components/com_sef/assets/images/icon-16-sefplugin.png', 0, '', 1),
(60, 'Edit .htaccess', '', 0, 56, 'option=com_sef&controller=htaccess', 'Edit .htaccess', 'com_sef', 3, 'components/com_sef/assets/images/icon-16-edit.png', 0, '', 1),
(61, '', '', 0, 56, 'option=com_sef', '', 'com_sef', 4, 'components/com_sef/assets/images/icon-10-blank.png', 0, '', 1),
(62, 'Manage SEF URLs', '', 0, 56, 'option=com_sef&controller=sefurls&viewmode=3', 'Manage SEF URLs', 'com_sef', 5, 'components/com_sef/assets/images/icon-16-url-edit.png', 0, '', 1),
(63, 'Manage Meta Tags', '', 0, 56, 'option=com_sef&controller=metatags', 'Manage Meta Tags', 'com_sef', 6, 'components/com_sef/assets/images/icon-16-manage-tags.png', 0, '', 1),
(64, 'SiteMap', '', 0, 56, 'option=com_sef&controller=sitemap', 'SiteMap', 'com_sef', 7, 'components/com_sef/assets/images/icon-16-manage-sitemap.png', 0, '', 1),
(65, 'Manage 301 Redirects', '', 0, 56, 'option=com_sef&controller=movedurls', 'Manage 301 Redirects', 'com_sef', 8, 'components/com_sef/assets/images/icon-16-301-redirects.png', 0, '', 1),
(66, '', '', 0, 56, 'option=com_sef', '', 'com_sef', 9, 'components/com_sef/assets/images/icon-10-blank.png', 0, '', 1),
(67, 'Upgrade', '', 0, 56, 'option=com_sef&task=showUpgrade', 'Upgrade', 'com_sef', 10, 'components/com_sef/assets/images/icon-16-update.png', 0, '', 1),
(68, 'Support', '', 0, 56, 'option=com_sef&controller=info&task=help', 'Support', 'com_sef', 11, 'components/com_sef/assets/images/icon-16-help.png', 0, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `webvn_contact_details`
--

CREATE TABLE IF NOT EXISTS `webvn_contact_details` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL default '',
  `alias` varchar(255) NOT NULL default '',
  `con_position` varchar(255) default NULL,
  `address` text,
  `suburb` varchar(100) default NULL,
  `state` varchar(100) default NULL,
  `country` varchar(100) default NULL,
  `postcode` varchar(100) default NULL,
  `telephone` varchar(255) default NULL,
  `fax` varchar(255) default NULL,
  `misc` mediumtext,
  `image` varchar(255) default NULL,
  `imagepos` varchar(20) default NULL,
  `email_to` varchar(255) default NULL,
  `default_con` tinyint(1) unsigned NOT NULL default '0',
  `published` tinyint(1) unsigned NOT NULL default '0',
  `checked_out` int(11) unsigned NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `ordering` int(11) NOT NULL default '0',
  `params` text NOT NULL,
  `user_id` int(11) NOT NULL default '0',
  `catid` int(11) NOT NULL default '0',
  `access` tinyint(3) unsigned NOT NULL default '0',
  `mobile` varchar(255) NOT NULL default '',
  `webpage` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `catid` (`catid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `webvn_contact_details`
--

INSERT INTO `webvn_contact_details` (`id`, `name`, `alias`, `con_position`, `address`, `suburb`, `state`, `country`, `postcode`, `telephone`, `fax`, `misc`, `image`, `imagepos`, `email_to`, `default_con`, `published`, `checked_out`, `checked_out_time`, `ordering`, `params`, `user_id`, `catid`, `access`, `mobile`, `webpage`) VALUES
(1, 'Liên hệ', 'name', 'Position', 'Street', 'Suburb', 'State', 'Country', 'Zip Code', 'Telephone', 'Fax', 'Miscellanous info', '', 'top', 'email@email.com', 0, 1, 0, '0000-00-00 00:00:00', 1, 'show_name=1\nshow_position=0\nshow_email=0\nshow_street_address=0\nshow_suburb=0\nshow_state=0\nshow_postcode=0\nshow_country=0\nshow_telephone=0\nshow_mobile=0\nshow_fax=0\nshow_webpage=0\nshow_misc=0\nshow_image=0\nallow_vcard=0\ncontact_icons=0\nicon_address=\nicon_email=\nicon_telephone=\nicon_mobile=\nicon_fax=\nicon_misc=\nshow_email_form=1\nemail_description=1\nshow_email_copy=1\nbanned_email=\nbanned_subject=\nbanned_text=', 62, 12, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `webvn_content`
--

CREATE TABLE IF NOT EXISTS `webvn_content` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `title` varchar(255) NOT NULL default '',
  `alias` varchar(255) NOT NULL default '',
  `title_alias` varchar(255) NOT NULL default '',
  `introtext` mediumtext NOT NULL,
  `fulltext` mediumtext NOT NULL,
  `state` tinyint(3) NOT NULL default '0',
  `sectionid` int(11) unsigned NOT NULL default '0',
  `mask` int(11) unsigned NOT NULL default '0',
  `catid` int(11) unsigned NOT NULL default '0',
  `created` datetime NOT NULL default '0000-00-00 00:00:00',
  `created_by` int(11) unsigned NOT NULL default '0',
  `created_by_alias` varchar(255) NOT NULL default '',
  `modified` datetime NOT NULL default '0000-00-00 00:00:00',
  `modified_by` int(11) unsigned NOT NULL default '0',
  `checked_out` int(11) unsigned NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `publish_up` datetime NOT NULL default '0000-00-00 00:00:00',
  `publish_down` datetime NOT NULL default '0000-00-00 00:00:00',
  `images` text NOT NULL,
  `urls` text NOT NULL,
  `attribs` text NOT NULL,
  `version` int(11) unsigned NOT NULL default '1',
  `parentid` int(11) unsigned NOT NULL default '0',
  `ordering` int(11) NOT NULL default '0',
  `metakey` text NOT NULL,
  `metadesc` text NOT NULL,
  `access` int(11) unsigned NOT NULL default '0',
  `hits` int(11) unsigned NOT NULL default '0',
  `metadata` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `idx_section` (`sectionid`),
  KEY `idx_access` (`access`),
  KEY `idx_checkout` (`checked_out`),
  KEY `idx_state` (`state`),
  KEY `idx_catid` (`catid`),
  KEY `idx_createdby` (`created_by`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=65 ;

--
-- Dumping data for table `webvn_content`
--

INSERT INTO `webvn_content` (`id`, `title`, `alias`, `title_alias`, `introtext`, `fulltext`, `state`, `sectionid`, `mask`, `catid`, `created`, `created_by`, `created_by_alias`, `modified`, `modified_by`, `checked_out`, `checked_out_time`, `publish_up`, `publish_down`, `images`, `urls`, `attribs`, `version`, `parentid`, `ordering`, `metakey`, `metadesc`, `access`, `hits`, `metadata`) VALUES
(60, 'Giới thiệu', 'gii-thiu', '', '<p>Giới thiệu...!</p>', '', 1, 4, 0, 36, '2012-06-21 19:20:06', 62, '', '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '2012-06-21 19:20:06', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 1, 0, 4, '', '', 0, 11, 'robots=\nauthor='),
(61, 'Báo giá', 'bao-gia', '', '<p>Báo giá...!</p>', '', 1, 4, 0, 36, '2012-06-21 19:20:23', 62, '', '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '2012-06-21 19:20:23', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 1, 0, 3, '', '', 0, 0, 'robots=\nauthor='),
(62, 'Khuyến mãi', 'khuyn-mai', '', '<p>Khuyến mãi...!</p>', '', 1, 4, 0, 36, '2012-06-21 19:20:36', 62, '', '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '2012-06-21 19:20:36', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 1, 0, 2, '', '', 0, 1, 'robots=\nauthor='),
(63, 'Chính sách bảo hành', 'chinh-sach-bo-hanh', '', '<p>Chính sách bảo hành...!</p>', '', 1, 4, 0, 36, '2012-06-21 19:20:49', 62, '', '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '2012-06-21 19:20:49', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 1, 0, 1, '', '', 0, 1, 'robots=\nauthor='),
(64, '404', '404', '', '<h1>404: Not Found</h1>\r\n<h2>Sorry, but the content you requested could not be found</h2>', '', 1, 0, 0, 0, '2004-11-11 12:44:38', 62, '', '2012-09-11 16:53:54', 0, 62, '2004-11-11 12:45:09', '2004-10-17 00:00:00', '0000-00-00 00:00:00', '', '', 'menu_image=-1\nitem_title=0\npageclass_sfx=\nback_button=\nrating=0\nauthor=0\ncreatedate=0\nmodifydate=0\npdf=0\nprint=0\nemail=0', 1, 0, 0, '', '', 0, 750, '');

-- --------------------------------------------------------

--
-- Table structure for table `webvn_content_frontpage`
--

CREATE TABLE IF NOT EXISTS `webvn_content_frontpage` (
  `content_id` int(11) NOT NULL default '0',
  `ordering` int(11) NOT NULL default '0',
  PRIMARY KEY  (`content_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `webvn_content_frontpage`
--


-- --------------------------------------------------------

--
-- Table structure for table `webvn_content_rating`
--

CREATE TABLE IF NOT EXISTS `webvn_content_rating` (
  `content_id` int(11) NOT NULL default '0',
  `rating_sum` int(11) unsigned NOT NULL default '0',
  `rating_count` int(11) unsigned NOT NULL default '0',
  `lastip` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`content_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `webvn_content_rating`
--


-- --------------------------------------------------------

--
-- Table structure for table `webvn_core_acl_aro`
--

CREATE TABLE IF NOT EXISTS `webvn_core_acl_aro` (
  `id` int(11) NOT NULL auto_increment,
  `section_value` varchar(240) NOT NULL default '0',
  `value` varchar(240) NOT NULL default '',
  `order_value` int(11) NOT NULL default '0',
  `name` varchar(255) NOT NULL default '',
  `hidden` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `webvn_section_value_value_aro` (`section_value`(100),`value`(100)),
  KEY `webvn_gacl_hidden_aro` (`hidden`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `webvn_core_acl_aro`
--

INSERT INTO `webvn_core_acl_aro` (`id`, `section_value`, `value`, `order_value`, `name`, `hidden`) VALUES
(10, 'users', '62', 0, 'Administrator', 0),
(11, 'users', '63', 0, 'Demo', 0);

-- --------------------------------------------------------

--
-- Table structure for table `webvn_core_acl_aro_groups`
--

CREATE TABLE IF NOT EXISTS `webvn_core_acl_aro_groups` (
  `id` int(11) NOT NULL auto_increment,
  `parent_id` int(11) NOT NULL default '0',
  `name` varchar(255) NOT NULL default '',
  `lft` int(11) NOT NULL default '0',
  `rgt` int(11) NOT NULL default '0',
  `value` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `webvn_gacl_parent_id_aro_groups` (`parent_id`),
  KEY `webvn_gacl_lft_rgt_aro_groups` (`lft`,`rgt`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `webvn_core_acl_aro_groups`
--

INSERT INTO `webvn_core_acl_aro_groups` (`id`, `parent_id`, `name`, `lft`, `rgt`, `value`) VALUES
(17, 0, 'ROOT', 1, 22, 'ROOT'),
(28, 17, 'USERS', 2, 21, 'USERS'),
(29, 28, 'Public Frontend', 3, 12, 'Public Frontend'),
(18, 29, 'Registered', 4, 11, 'Registered'),
(19, 18, 'Author', 5, 10, 'Author'),
(20, 19, 'Editor', 6, 9, 'Editor'),
(21, 20, 'Publisher', 7, 8, 'Publisher'),
(30, 28, 'Public Backend', 13, 20, 'Public Backend'),
(23, 30, 'Manager', 14, 19, 'Manager'),
(24, 23, 'Administrator', 15, 18, 'Administrator'),
(25, 24, 'Super Administrator', 16, 17, 'Super Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `webvn_core_acl_aro_map`
--

CREATE TABLE IF NOT EXISTS `webvn_core_acl_aro_map` (
  `acl_id` int(11) NOT NULL default '0',
  `section_value` varchar(230) NOT NULL default '0',
  `value` varchar(100) NOT NULL,
  PRIMARY KEY  (`acl_id`,`section_value`,`value`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `webvn_core_acl_aro_map`
--


-- --------------------------------------------------------

--
-- Table structure for table `webvn_core_acl_aro_sections`
--

CREATE TABLE IF NOT EXISTS `webvn_core_acl_aro_sections` (
  `id` int(11) NOT NULL auto_increment,
  `value` varchar(230) NOT NULL default '',
  `order_value` int(11) NOT NULL default '0',
  `name` varchar(230) NOT NULL default '',
  `hidden` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `webvn_gacl_value_aro_sections` (`value`),
  KEY `webvn_gacl_hidden_aro_sections` (`hidden`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `webvn_core_acl_aro_sections`
--

INSERT INTO `webvn_core_acl_aro_sections` (`id`, `value`, `order_value`, `name`, `hidden`) VALUES
(10, 'users', 1, 'Users', 0);

-- --------------------------------------------------------

--
-- Table structure for table `webvn_core_acl_groups_aro_map`
--

CREATE TABLE IF NOT EXISTS `webvn_core_acl_groups_aro_map` (
  `group_id` int(11) NOT NULL default '0',
  `section_value` varchar(240) NOT NULL default '',
  `aro_id` int(11) NOT NULL default '0',
  UNIQUE KEY `group_id_aro_id_groups_aro_map` (`group_id`,`section_value`,`aro_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `webvn_core_acl_groups_aro_map`
--

INSERT INTO `webvn_core_acl_groups_aro_map` (`group_id`, `section_value`, `aro_id`) VALUES
(25, '', 10),
(25, '', 11);

-- --------------------------------------------------------

--
-- Table structure for table `webvn_core_log_items`
--

CREATE TABLE IF NOT EXISTS `webvn_core_log_items` (
  `time_stamp` date NOT NULL default '0000-00-00',
  `item_table` varchar(50) NOT NULL default '',
  `item_id` int(11) unsigned NOT NULL default '0',
  `hits` int(11) unsigned NOT NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `webvn_core_log_items`
--


-- --------------------------------------------------------

--
-- Table structure for table `webvn_core_log_searches`
--

CREATE TABLE IF NOT EXISTS `webvn_core_log_searches` (
  `search_term` varchar(128) NOT NULL default '',
  `hits` int(11) unsigned NOT NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `webvn_core_log_searches`
--


-- --------------------------------------------------------

--
-- Table structure for table `webvn_groups`
--

CREATE TABLE IF NOT EXISTS `webvn_groups` (
  `id` tinyint(3) unsigned NOT NULL default '0',
  `name` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `webvn_groups`
--

INSERT INTO `webvn_groups` (`id`, `name`) VALUES
(0, 'Public'),
(1, 'Registered'),
(2, 'Special');

-- --------------------------------------------------------

--
-- Table structure for table `webvn_jsecurelog`
--

CREATE TABLE IF NOT EXISTS `webvn_jsecurelog` (
  `id` int(11) NOT NULL auto_increment,
  `date` datetime NOT NULL,
  `ip` varchar(16) NOT NULL,
  `userid` int(11) NOT NULL default '0',
  `code` varchar(255) NOT NULL,
  `change_variable` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `webvn_jsecurelog`
--

INSERT INTO `webvn_jsecurelog` (`id`, `date`, `ip`, `userid`, `code`, `change_variable`) VALUES
(1, '2011-11-03 22:21:01', '118.71.97.90', 62, 'JSECURE_EVENT_CONFIGURATION_FILE_CHANGED', 'Pass key has been changed\n'),
(2, '2011-11-03 22:49:22', '118.71.97.90', 0, 'JSECURE_EVENT_ACCESS_ADMIN_USING_CORRECT_KEY', ''),
(3, '2011-11-03 22:55:09', '118.71.97.90', 0, 'JSECURE_EVENT_ACCESS_ADMIN_USING_WRONG_KEY', 'Wrong Key = option=com_login'),
(4, '2011-11-04 08:28:34', '113.178.40.170', 0, 'JSECURE_EVENT_ACCESS_ADMIN_USING_CORRECT_KEY', ''),
(5, '2011-11-04 08:29:28', '113.178.40.170', 0, 'JSECURE_EVENT_ACCESS_ADMIN_USING_CORRECT_KEY', ''),
(6, '2011-11-04 08:53:20', '113.178.40.170', 0, 'JSECURE_EVENT_ACCESS_ADMIN_USING_WRONG_KEY', 'Wrong Key = pshop_mode=admin&amp;page=product.product_form&amp;option=com_virtuemart'),
(7, '2011-11-04 08:53:21', '113.178.40.170', 0, 'JSECURE_EVENT_ACCESS_ADMIN_USING_WRONG_KEY', 'Wrong Key = pshop_mode=admin&amp;page=product.product_list&amp;option=com_virtuemart'),
(8, '2011-11-04 08:53:52', '113.178.40.170', 0, 'JSECURE_EVENT_ACCESS_ADMIN_USING_WRONG_KEY', 'Wrong Key = pshop_mode=admin&amp;page=product.product_form&amp;option=com_virtuemart'),
(9, '2011-11-04 08:54:27', '113.178.40.170', 0, 'JSECURE_EVENT_ACCESS_ADMIN_USING_WRONG_KEY', 'Wrong Key = joomla.webvn.com.vn..:AnhKetEm%20:..:%20demo/112233'),
(10, '2011-11-04 08:54:41', '113.178.40.170', 0, 'JSECURE_EVENT_ACCESS_ADMIN_USING_CORRECT_KEY', ''),
(11, '2011-11-04 10:11:42', '113.178.40.170', 0, 'JSECURE_EVENT_ACCESS_ADMIN_USING_CORRECT_KEY', ''),
(12, '2011-11-04 10:21:20', '113.178.40.170', 0, 'JSECURE_EVENT_ACCESS_ADMIN_USING_WRONG_KEY', 'Wrong Key = '),
(13, '2011-11-04 10:21:39', '113.178.40.170', 0, 'JSECURE_EVENT_ACCESS_ADMIN_USING_WRONG_KEY', 'Wrong Key = option=com_virtuemart'),
(14, '2011-11-04 10:21:51', '113.178.40.170', 0, 'JSECURE_EVENT_ACCESS_ADMIN_USING_WRONG_KEY', 'Wrong Key = option=com_virtuemart'),
(15, '2011-11-04 10:22:20', '113.178.40.170', 0, 'JSECURE_EVENT_ACCESS_ADMIN_USING_CORRECT_KEY', ''),
(16, '2011-11-04 11:03:23', '113.178.40.170', 0, 'JSECURE_EVENT_ACCESS_ADMIN_USING_WRONG_KEY', 'Wrong Key = pshop_mode=admin&amp;page=product.product_form&amp;option=com_virtuemart'),
(17, '2011-11-04 11:04:03', '113.178.40.170', 0, 'JSECURE_EVENT_ACCESS_ADMIN_USING_CORRECT_KEY', ''),
(18, '2011-11-07 08:52:10', '123.24.211.90', 0, 'JSECURE_EVENT_ACCESS_ADMIN_USING_CORRECT_KEY', ''),
(19, '2012-06-04 01:46:20', '127.0.0.1', 0, 'JSECURE_EVENT_ACCESS_ADMIN_USING_WRONG_KEY', 'Wrong Key = '),
(20, '2012-06-04 01:46:40', '127.0.0.1', 0, 'JSECURE_EVENT_ACCESS_ADMIN_USING_CORRECT_KEY', ''),
(21, '2012-06-19 14:27:06', '127.0.0.1', 0, 'JSECURE_EVENT_ACCESS_ADMIN_USING_CORRECT_KEY', ''),
(22, '2012-06-19 16:56:34', '127.0.0.1', 0, 'JSECURE_EVENT_ACCESS_ADMIN_USING_CORRECT_KEY', ''),
(23, '2012-06-20 11:44:43', '127.0.0.1', 0, 'JSECURE_EVENT_ACCESS_ADMIN_USING_CORRECT_KEY', ''),
(24, '2012-06-20 13:00:18', '127.0.0.1', 0, 'JSECURE_EVENT_ACCESS_ADMIN_USING_CORRECT_KEY', ''),
(25, '2012-06-20 16:31:13', '127.0.0.1', 0, 'JSECURE_EVENT_ACCESS_ADMIN_USING_CORRECT_KEY', ''),
(26, '2012-06-20 17:09:57', '127.0.0.1', 0, 'JSECURE_EVENT_ACCESS_ADMIN_USING_WRONG_KEY', 'Wrong Key = '),
(27, '2012-06-20 17:10:03', '127.0.0.1', 0, 'JSECURE_EVENT_ACCESS_ADMIN_USING_CORRECT_KEY', ''),
(28, '2012-06-20 17:49:18', '127.0.0.1', 0, 'JSECURE_EVENT_ACCESS_ADMIN_USING_CORRECT_KEY', ''),
(29, '2012-06-21 01:38:35', '127.0.0.1', 0, 'JSECURE_EVENT_ACCESS_ADMIN_USING_CORRECT_KEY', ''),
(30, '2012-06-21 02:37:12', '127.0.0.1', 0, 'JSECURE_EVENT_ACCESS_ADMIN_USING_WRONG_KEY', 'Wrong Key = '),
(31, '2012-06-21 02:37:20', '127.0.0.1', 0, 'JSECURE_EVENT_ACCESS_ADMIN_USING_CORRECT_KEY', ''),
(32, '2012-06-22 03:17:49', '127.0.0.1', 0, 'JSECURE_EVENT_ACCESS_ADMIN_USING_CORRECT_KEY', ''),
(33, '2012-06-22 03:39:37', '127.0.0.1', 0, 'JSECURE_EVENT_ACCESS_ADMIN_USING_WRONG_KEY', 'Wrong Key = option=com_k2&amp;view=items'),
(34, '2012-06-22 03:40:04', '127.0.0.1', 0, 'JSECURE_EVENT_ACCESS_ADMIN_USING_CORRECT_KEY', ''),
(35, '2012-06-22 12:27:03', '127.0.0.1', 0, 'JSECURE_EVENT_ACCESS_ADMIN_USING_CORRECT_KEY', ''),
(36, '2012-06-26 13:09:01', '127.0.0.1', 0, 'JSECURE_EVENT_ACCESS_ADMIN_USING_CORRECT_KEY', ''),
(37, '2012-09-11 11:15:16', '127.0.0.1', 0, 'JSECURE_EVENT_ACCESS_ADMIN_USING_WRONG_KEY', 'Wrong Key = '),
(38, '2012-09-11 11:15:25', '127.0.0.1', 0, 'JSECURE_EVENT_ACCESS_ADMIN_USING_CORRECT_KEY', ''),
(39, '2012-09-11 12:01:46', '127.0.0.1', 0, 'JSECURE_EVENT_ACCESS_ADMIN_USING_CORRECT_KEY', ''),
(40, '2012-09-11 12:33:46', '127.0.0.1', 0, 'JSECURE_EVENT_ACCESS_ADMIN_USING_WRONG_KEY', 'Wrong Key = option=com_messages&amp;task=add'),
(41, '2012-09-11 12:33:55', '127.0.0.1', 0, 'JSECURE_EVENT_ACCESS_ADMIN_USING_CORRECT_KEY', ''),
(42, '2012-09-11 15:19:08', '127.0.0.1', 0, 'JSECURE_EVENT_ACCESS_ADMIN_USING_CORRECT_KEY', ''),
(43, '2012-09-11 16:03:42', '127.0.0.1', 0, 'JSECURE_EVENT_ACCESS_ADMIN_USING_WRONG_KEY', 'Wrong Key = option=com_installer'),
(44, '2012-09-11 16:03:50', '127.0.0.1', 0, 'JSECURE_EVENT_ACCESS_ADMIN_USING_CORRECT_KEY', ''),
(45, '2012-09-12 10:50:44', '127.0.0.1', 0, 'JSECURE_EVENT_ACCESS_ADMIN_USING_WRONG_KEY', 'Wrong Key = pshop_mode=admin&amp;page=admin.show_cfg&amp;option=com_virtuemart'),
(46, '2012-09-12 10:50:51', '127.0.0.1', 0, 'JSECURE_EVENT_ACCESS_ADMIN_USING_WRONG_KEY', 'Wrong Key = pshop_mode=admin&amp;page=admin.show_cfg&amp;option=com_virtuemart');

-- --------------------------------------------------------

--
-- Table structure for table `webvn_k2_attachments`
--

CREATE TABLE IF NOT EXISTS `webvn_k2_attachments` (
  `id` int(11) NOT NULL auto_increment,
  `itemID` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `titleAttribute` text NOT NULL,
  `hits` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `itemID` (`itemID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `webvn_k2_attachments`
--


-- --------------------------------------------------------

--
-- Table structure for table `webvn_k2_categories`
--

CREATE TABLE IF NOT EXISTS `webvn_k2_categories` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `parent` int(11) default '0',
  `extraFieldsGroup` int(11) NOT NULL,
  `published` smallint(6) NOT NULL default '0',
  `access` int(11) NOT NULL default '0',
  `ordering` int(11) NOT NULL default '0',
  `image` varchar(255) NOT NULL,
  `params` text NOT NULL,
  `trash` smallint(6) NOT NULL default '0',
  `plugins` text NOT NULL,
  `language` char(7) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `category` (`published`,`access`,`trash`),
  KEY `parent` (`parent`),
  KEY `ordering` (`ordering`),
  KEY `published` (`published`),
  KEY `access` (`access`),
  KEY `trash` (`trash`),
  KEY `language` (`language`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `webvn_k2_categories`
--

INSERT INTO `webvn_k2_categories` (`id`, `name`, `alias`, `description`, `parent`, `extraFieldsGroup`, `published`, `access`, `ordering`, `image`, `params`, `trash`, `plugins`, `language`) VALUES
(1, 'Tin tức', 'tin-tức', '', 0, 0, 1, 0, 1, '', 'inheritFrom=0\ntheme=\nnum_leading_items=10\nnum_leading_columns=1\nleadingImgSize=Large\nnum_primary_items=0\nnum_primary_columns=2\nprimaryImgSize=Medium\nnum_secondary_items=0\nnum_secondary_columns=1\nsecondaryImgSize=Small\nnum_links=0\nnum_links_columns=1\nlinksImgSize=XSmall\ncatCatalogMode=0\ncatFeaturedItems=1\ncatOrdering=\ncatPagination=2\ncatPaginationResults=1\ncatTitle=0\ncatTitleItemCounter=0\ncatDescription=0\ncatImage=0\ncatFeedLink=0\ncatFeedIcon=0\nsubCategories=0\nsubCatColumns=2\nsubCatOrdering=\nsubCatTitle=0\nsubCatTitleItemCounter=0\nsubCatDescription=0\nsubCatImage=0\nitemImageXS=\nitemImageS=\nitemImageM=\nitemImageL=150\nitemImageXL=150\ncatItemTitle=1\ncatItemTitleLinked=1\ncatItemFeaturedNotice=0\ncatItemAuthor=0\ncatItemDateCreated=0\ncatItemRating=0\ncatItemImage=1\ncatItemIntroText=1\ncatItemIntroTextWordLimit=\ncatItemExtraFields=0\ncatItemHits=0\ncatItemCategory=0\ncatItemTags=0\ncatItemAttachments=0\ncatItemAttachmentsCounter=0\ncatItemVideo=0\ncatItemVideoWidth=\ncatItemVideoHeight=\ncatItemAudioWidth=\ncatItemAudioHeight=\ncatItemVideoAutoPlay=0\ncatItemImageGallery=0\ncatItemDateModified=0\ncatItemReadMore=0\ncatItemCommentsAnchor=0\ncatItemK2Plugins=1\nitemDateCreated=0\nitemTitle=1\nitemFeaturedNotice=0\nitemAuthor=0\nitemFontResizer=0\nitemPrintButton=0\nitemEmailButton=0\nitemSocialButton=0\nitemVideoAnchor=0\nitemImageGalleryAnchor=0\nitemCommentsAnchor=0\nitemRating=0\nitemImage=0\nitemImgSize=Large\nitemImageMainCaption=0\nitemImageMainCredits=0\nitemIntroText=1\nitemFullText=1\nitemExtraFields=0\nitemDateModified=0\nitemHits=0\nitemCategory=1\nitemTags=0\nitemAttachments=0\nitemAttachmentsCounter=0\nitemVideo=0\nitemVideoWidth=\nitemVideoHeight=\nitemAudioWidth=\nitemAudioHeight=\nitemVideoAutoPlay=0\nitemVideoCaption=0\nitemVideoCredits=0\nitemImageGallery=0\nitemNavigation=0\nitemComments=0\nitemTwitterButton=0\nitemFacebookButton=0\nitemGooglePlusOneButton=0\nitemAuthorBlock=1\nitemAuthorImage=1\nitemAuthorDescription=1\nitemAuthorURL=1\nitemAuthorEmail=0\nitemAuthorLatest=1\nitemAuthorLatestLimit=5\nitemRelated=1\nitemRelatedLimit=5\nitemRelatedTitle=1\nitemRelatedCategory=0\nitemRelatedImageSize=0\nitemRelatedIntrotext=0\nitemRelatedFulltext=0\nitemRelatedAuthor=0\nitemRelatedMedia=0\nitemRelatedImageGallery=0\nitemK2Plugins=1\ncatMetaDesc=\ncatMetaKey=\ncatMetaRobots=\ncatMetaAuthor=\n\n', 0, '', ''),
(2, 'Ứng dụng & Games', 'ứng-dụng--games', '', 0, 0, 1, 0, 2, '', 'inheritFrom=0\ntheme=\nnum_leading_items=10\nnum_leading_columns=1\nleadingImgSize=Large\nnum_primary_items=0\nnum_primary_columns=2\nprimaryImgSize=Medium\nnum_secondary_items=0\nnum_secondary_columns=1\nsecondaryImgSize=Small\nnum_links=0\nnum_links_columns=1\nlinksImgSize=XSmall\ncatCatalogMode=0\ncatFeaturedItems=1\ncatOrdering=\ncatPagination=2\ncatPaginationResults=1\ncatTitle=0\ncatTitleItemCounter=0\ncatDescription=0\ncatImage=0\ncatFeedLink=0\ncatFeedIcon=0\nsubCategories=0\nsubCatColumns=2\nsubCatOrdering=\nsubCatTitle=0\nsubCatTitleItemCounter=0\nsubCatDescription=0\nsubCatImage=0\nitemImageXS=\nitemImageS=\nitemImageM=\nitemImageL=200\nitemImageXL=200\ncatItemTitle=1\ncatItemTitleLinked=1\ncatItemFeaturedNotice=0\ncatItemAuthor=0\ncatItemDateCreated=0\ncatItemRating=0\ncatItemImage=1\ncatItemIntroText=1\ncatItemIntroTextWordLimit=\ncatItemExtraFields=0\ncatItemHits=0\ncatItemCategory=0\ncatItemTags=0\ncatItemAttachments=0\ncatItemAttachmentsCounter=0\ncatItemVideo=0\ncatItemVideoWidth=\ncatItemVideoHeight=\ncatItemAudioWidth=\ncatItemAudioHeight=\ncatItemVideoAutoPlay=0\ncatItemImageGallery=0\ncatItemDateModified=0\ncatItemReadMore=0\ncatItemCommentsAnchor=0\ncatItemK2Plugins=1\nitemDateCreated=0\nitemTitle=1\nitemFeaturedNotice=0\nitemAuthor=0\nitemFontResizer=0\nitemPrintButton=0\nitemEmailButton=0\nitemSocialButton=0\nitemVideoAnchor=0\nitemImageGalleryAnchor=0\nitemCommentsAnchor=0\nitemRating=0\nitemImage=0\nitemImgSize=Large\nitemImageMainCaption=0\nitemImageMainCredits=0\nitemIntroText=1\nitemFullText=1\nitemExtraFields=0\nitemDateModified=0\nitemHits=0\nitemCategory=1\nitemTags=0\nitemAttachments=0\nitemAttachmentsCounter=0\nitemVideo=0\nitemVideoWidth=\nitemVideoHeight=\nitemAudioWidth=\nitemAudioHeight=\nitemVideoAutoPlay=0\nitemVideoCaption=0\nitemVideoCredits=0\nitemImageGallery=0\nitemNavigation=0\nitemComments=0\nitemTwitterButton=0\nitemFacebookButton=0\nitemGooglePlusOneButton=0\nitemAuthorBlock=1\nitemAuthorImage=1\nitemAuthorDescription=1\nitemAuthorURL=1\nitemAuthorEmail=0\nitemAuthorLatest=1\nitemAuthorLatestLimit=5\nitemRelated=1\nitemRelatedLimit=5\nitemRelatedTitle=1\nitemRelatedCategory=0\nitemRelatedImageSize=0\nitemRelatedIntrotext=0\nitemRelatedFulltext=0\nitemRelatedAuthor=0\nitemRelatedMedia=0\nitemRelatedImageGallery=0\nitemK2Plugins=1\ncatMetaDesc=\ncatMetaKey=\ncatMetaRobots=\ncatMetaAuthor=\n\n', 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `webvn_k2_comments`
--

CREATE TABLE IF NOT EXISTS `webvn_k2_comments` (
  `id` int(11) NOT NULL auto_increment,
  `itemID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `commentDate` datetime NOT NULL,
  `commentText` text NOT NULL,
  `commentEmail` varchar(255) NOT NULL,
  `commentURL` varchar(255) NOT NULL,
  `published` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `itemID` (`itemID`),
  KEY `userID` (`userID`),
  KEY `published` (`published`),
  KEY `latestComments` (`published`,`commentDate`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `webvn_k2_comments`
--


-- --------------------------------------------------------

--
-- Table structure for table `webvn_k2_extra_fields`
--

CREATE TABLE IF NOT EXISTS `webvn_k2_extra_fields` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `type` varchar(255) NOT NULL,
  `group` int(11) NOT NULL,
  `published` tinyint(4) NOT NULL,
  `ordering` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `group` (`group`),
  KEY `published` (`published`),
  KEY `ordering` (`ordering`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `webvn_k2_extra_fields`
--


-- --------------------------------------------------------

--
-- Table structure for table `webvn_k2_extra_fields_groups`
--

CREATE TABLE IF NOT EXISTS `webvn_k2_extra_fields_groups` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `webvn_k2_extra_fields_groups`
--


-- --------------------------------------------------------

--
-- Table structure for table `webvn_k2_items`
--

CREATE TABLE IF NOT EXISTS `webvn_k2_items` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(255) NOT NULL,
  `alias` varchar(255) default NULL,
  `catid` int(11) NOT NULL,
  `published` smallint(6) NOT NULL default '0',
  `introtext` mediumtext NOT NULL,
  `fulltext` mediumtext NOT NULL,
  `video` text,
  `gallery` varchar(255) default NULL,
  `extra_fields` text character set utf8 collate utf8_unicode_ci,
  `extra_fields_search` text NOT NULL,
  `created` datetime NOT NULL,
  `created_by` int(11) NOT NULL default '0',
  `created_by_alias` varchar(255) NOT NULL,
  `checked_out` int(10) unsigned NOT NULL,
  `checked_out_time` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `modified_by` int(11) NOT NULL default '0',
  `publish_up` datetime NOT NULL,
  `publish_down` datetime NOT NULL,
  `trash` smallint(6) NOT NULL default '0',
  `access` int(11) NOT NULL default '0',
  `ordering` int(11) NOT NULL default '0',
  `featured` smallint(6) NOT NULL default '0',
  `featured_ordering` int(11) NOT NULL default '0',
  `image_caption` text NOT NULL,
  `image_credits` varchar(255) NOT NULL,
  `video_caption` text NOT NULL,
  `video_credits` varchar(255) NOT NULL,
  `hits` int(10) unsigned NOT NULL,
  `params` text NOT NULL,
  `metadesc` text NOT NULL,
  `metadata` text NOT NULL,
  `metakey` text NOT NULL,
  `plugins` text NOT NULL,
  `language` char(7) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `item` (`published`,`publish_up`,`publish_down`,`trash`,`access`),
  KEY `catid` (`catid`),
  KEY `created_by` (`created_by`),
  KEY `ordering` (`ordering`),
  KEY `featured` (`featured`),
  KEY `featured_ordering` (`featured_ordering`),
  KEY `hits` (`hits`),
  KEY `created` (`created`),
  KEY `language` (`language`),
  FULLTEXT KEY `search` (`title`,`introtext`,`fulltext`,`extra_fields_search`,`image_caption`,`image_credits`,`video_caption`,`video_credits`,`metadesc`,`metakey`),
  FULLTEXT KEY `title` (`title`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `webvn_k2_items`
--

INSERT INTO `webvn_k2_items` (`id`, `title`, `alias`, `catid`, `published`, `introtext`, `fulltext`, `video`, `gallery`, `extra_fields`, `extra_fields_search`, `created`, `created_by`, `created_by_alias`, `checked_out`, `checked_out_time`, `modified`, `modified_by`, `publish_up`, `publish_down`, `trash`, `access`, `ordering`, `featured`, `featured_ordering`, `image_caption`, `image_credits`, `video_caption`, `video_credits`, `hits`, `params`, `metadesc`, `metadata`, `metakey`, `plugins`, `language`) VALUES
(1, 'Những hình ảnh về Windows Phone 8', 'những-hình-ảnh-về-windows-phone-8', 1, 1, '<p>Bên cạnh việc hỗ trợ phần cứng cao cấp hơn, Windows Phone 8 cũng có những cải tiến về giao diện giúp cho hệ điều hành này trở nên quyến rũ hơn.\r\n', '\r\n</p>\r\n<table style="width: 1px;" border="0" cellspacing="0" cellpadding="3" align="center">\r\n<tbody>\r\n<tr>\r\n<td><img src="http://sohoa.vnexpress.net/Files/Subject/3B/9B/64/74/Fullscreen_capture_6212012_83916_AM.jpg" border="1" alt="Giao diện màn hình khóa với ảnh nền bao phủ toàn màn hình cùng các thông tin, thông báo hiển thị đơn giản của Windows Phone 8 vẫn tương tự như các phiên bản trước." width="500" height="320" align="middle" /></td>\r\n</tr>\r\n<tr>\r\n<td>Giao diện màn hình khóa với ảnh nền bao phủ toàn màn  hình cùng các thông tin, thông báo hiển thị đơn giản của Windows Phone 8  vẫn tương tự như các phiên bản trước.</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<table style="width: 1px;" border="0" cellspacing="0" cellpadding="0" align="center">\r\n<tbody>\r\n<tr>\r\n<td><img src="http://sohoa.vnexpress.net/Files/Subject/3B/9B/64/74/Windows-Phone-8-3.jpg" border="1" alt="Tuy nhiên giao diện màn hình chủ theo kiểu Tile Live của Windows Phone 8 (bên trái) đã có những thay đổi so với Windows Phone 7.5 và 7 tiền nhiệm." width="500" height="449" /></td>\r\n</tr>\r\n<tr>\r\n<td>Tuy nhiên giao diện màn hình chủ theo kiểu Tile Live  của Windows Phone 8 (bên trái) đã có những thay đổi so với Windows Phone  7.5 và 7 tiền nhiệm.</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<table style="width: 1px;" border="0" cellspacing="0" cellpadding="3" align="center">\r\n<tbody>\r\n<tr>\r\n<td><img src="http://sohoa.vnexpress.net/Files/Subject/3B/9B/64/74/Windows-Phone-8-1.jpg" border="1" alt="Các ô hiển thị có tới ba kích thước khác nhau gồm nhỏ, vừa và lớn giúp hiển thị nhiều thông tin hơn. Bên cạnh đó các ô Tile về điện thoại, tin nhắn hay E-mail... cũng cho phép hiển thị thông tin bên trong nhiều hơn." width="500" height="410" align="middle" /></td>\r\n</tr>\r\n<tr>\r\n<td>Các ô hiển thị có tới ba kích thước khác nhau gồm nhỏ,  vừa và lớn giúp hiển thị nhiều thông tin hơn. Bên cạnh đó các ô Tile về  điện thoại, tin nhắn hay E-mail... cũng cho phép hiển thị thêm nội dung  bên trong.</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<table style="width: 1px;" border="0" cellspacing="0" cellpadding="3" align="center">\r\n<tbody>\r\n<tr>\r\n<td><img src="http://sohoa.vnexpress.net/Files/Subject/3B/9B/64/74/Fullscreen_capture_6212012_83953_AM.jpg" border="1" alt="Tùy theo ý thích và nhu cầu của người dùng có thể điều chỉnh lại các kích thước thông qua nút mũi tên nằm ở góc." width="500" height="284" align="middle" /></td>\r\n</tr>\r\n<tr>\r\n<td>Tùy theo ý thích và nhu cầu của người dùng có thể điều  chỉnh lại các kích thước thông qua nút mũi tên nằm ở góc. Microsoft  cũng bổ sung thêm nhiều màu sắc mới giúp người dùng tùy biến giao diện  máy đa dạng hơn.</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<table style="width: 1px;" border="0" cellspacing="0" cellpadding="3" align="center">\r\n<tbody>\r\n<tr>\r\n<td><img src="http://sohoa.vnexpress.net/Files/Subject/3B/9B/64/74/WP-8-4.jpg" border="1" alt="Trên Windows Phone 8, Microsoft tích hợp Skype và khả năng gọi điện VoIP sâu vào hệ thống. Phần danh bạ liên kết trực tiếp với tài khoản Skype." width="380" height="640" align="middle" /></td>\r\n</tr>\r\n<tr>\r\n<td>Trên Windows Phone 8, Microsoft tích hợp Skype và khả  năng gọi điện VoIP sâu vào hệ thống. Phần danh bạ liên kết trực tiếp với  tài khoản Skype.</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<table style="width: 1px;" border="0" cellspacing="0" cellpadding="3" align="center">\r\n<tbody>\r\n<tr>\r\n<td><img src="http://sohoa.vnexpress.net/Files/Subject/3B/9B/64/74/Windows-Phone-8-2.jpg" border="1" alt="Skype cho phép đàm thoại video call, gửi tin nhắn thông qua kết nối mạng Wi-Fi, 3G." width="500" height="416" align="middle" /></td>\r\n</tr>\r\n<tr>\r\n<td>Skype cho phép đàm thoại video call, gửi tin nhắn thông qua kết nối mạng Wi-Fi, 3G.</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<table style="width: 1px;" border="0" cellspacing="0" cellpadding="3" align="center">\r\n<tbody>\r\n<tr>\r\n<td><img src="http://sohoa.vnexpress.net/Files/Subject/3B/9B/64/74/WP-8-6.jpg" border="1" alt="Windows Phone 8 hỗ trợ NFC tốt hơn bởi vậy ứng dụng Wallet được Microsoft bổ sung thêm, cho phép biến điện thoại thành một ví điện tử để thanh toán. NFC trên hệ điều hành mới cũng hỗ trợ chức năng đọc thông tin từ thẻ NFC và chuyển đổi dữ liệu giữa các máy có NFC." width="500" height="214" align="middle" /></td>\r\n</tr>\r\n<tr>\r\n<td>Windows Phone 8 hỗ trợ NFC tốt hơn bởi vậy ứng dụng  Wallet được Microsoft bổ sung thêm, cho phép biến điện thoại thành một  ví điện tử để thanh toán. NFC trên hệ điều hành mới cũng hỗ trợ chức  năng đọc thông tin từ thẻ NFC và chuyển đổi dữ liệu giữa các máy có NFC.</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<table style="width: 1px;" border="0" cellspacing="0" cellpadding="3" align="center">\r\n<tbody>\r\n<tr>\r\n<td><img src="http://sohoa.vnexpress.net/Files/Subject/3B/9B/64/74/Windows-Phone-8-4.jpg" border="1" alt="Trên phiên bản mới, Microsoft cũng tập trung vào khả năng phục vụ cho doanh nghiệp và công việc, nâng cao tính bảo mật. Company Hub cho phép các công ty có thể đưa ra các ứng dụng riêng của mình dành cho nhân viên. Các ứng dụng trên Windows Phone 8 sẽ hỗ trợ thêm tính năng thanh toán ngay trong ứng dụng (in-app purchase)." width="500" height="276" align="middle" /></td>\r\n</tr>\r\n<tr>\r\n<td>Trên phiên bản mới, Microsoft còn tập trung vào khả  năng phục vụ cho doanh nghiệp và công việc, nâng cao tính bảo mật.  Company Hub cho phép các công ty có thể đưa ra các ứng dụng riêng của  mình dành cho nhân viên. Các ứng dụng trên Windows Phone 8 sẽ hỗ trợ  thêm tính năng thanh toán ngay trong ứng dụng (in-app purchase).</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<table style="width: 1px;" border="0" cellspacing="0" cellpadding="3" align="center">\r\n<tbody>\r\n<tr>\r\n<td><img src="http://sohoa.vnexpress.net/Files/Subject/3B/9B/64/74/WP-8-18.jpg" border="1" alt="Do sử dụng cùng nhân hệ điều hành với Windows 8, nên trình duyệt Internet Explorer 10 được Microsoft mang lên Windows Phone 8. Giao diện vẫn tương tự như trên Windows Phone 7 và 7.5 nhưng tốc độ xử lý Java Script nhanh gấp 4 lần và HTML5 nhanh gấp 2 lần trên Windows Phone phiên bản mới." width="500" height="276" align="middle" /></td>\r\n</tr>\r\n<tr>\r\n<td>Do sử dụng cùng nhân hệ điều hành với Windows 8, nên  trình duyệt Internet Explorer 10 được Microsoft mang lên Windows Phone  8. Giao diện vẫn tương tự như trên Windows Phone 7 và 7.5 nhưng tốc độ  xử lý Java Script nhanh gấp 4 lần và HTML5 nhanh gấp 2 lần trên Windows  Phone phiên bản mới.</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<table style="width: 1px;" border="0" cellspacing="0" cellpadding="3" align="center">\r\n<tbody>\r\n<tr>\r\n<td><img src="http://sohoa.vnexpress.net/Files/Subject/3B/9B/64/74/WP-8-19.jpg" border="1" alt="Bản đồ được Microsoft sử dụng dữ liệu các công nghệ Nokia Map với dữ liệu của Navteq, hỗ trợ xem offline, chạy ngầm và có tính năng dẫn đường Turn-by-turn." width="500" height="276" align="middle" /></td>\r\n</tr>\r\n<tr>\r\n<td>Bản đồ được Microsoft sử dụng dữ liệu các công nghệ  Nokia Map với dữ liệu của Navteq, hỗ trợ xem offline, chạy ngầm và có  tính năng dẫn đường Turn-by-turn.</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<table style="width: 1px;" border="0" cellspacing="0" cellpadding="3" align="center">\r\n<tbody>\r\n<tr>\r\n<td><img src="http://sohoa.vnexpress.net/Files/Subject/3B/9B/64/74/WP-8-17.jpg" border="1" alt="Phải tới mùa thu tới, các thiết bị chạy Windows Phone 8 đầu tiên mới có mặt trên thị trường. Các mẫu Windows Phone hiện tại sẽ chỉ được nâng cấp lên phiên bản 7.8 tuy nhiên vẫn có một số tính năng và giao diện như phiên bản 8 vừa ra mắt." width="500" height="276" align="middle" /></td>\r\n</tr>\r\n<tr>\r\n<td>Phải tới mùa thu tới, các thiết bị chạy Windows Phone 8  đầu tiên mới có mặt trên thị trường. Trong khi đó các mẫu Windows Phone  hiện tại sẽ chỉ được nâng cấp lên phiên bản 7.8 tuy nhiên vẫn có một số  tính năng và giao diện như phiên bản 8 vừa ra mắt.</td>\r\n</tr>\r\n</tbody>\r\n</table>', NULL, NULL, '[]', '', '2012-06-21 19:40:18', 62, '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '2012-06-21 19:40:18', '0000-00-00 00:00:00', 0, 0, 1, 0, 0, '', '', '', '', 4, 'catItemTitle=\ncatItemTitleLinked=\ncatItemFeaturedNotice=\ncatItemAuthor=\ncatItemDateCreated=\ncatItemRating=\ncatItemImage=\ncatItemIntroText=\ncatItemExtraFields=\ncatItemHits=\ncatItemCategory=\ncatItemTags=\ncatItemAttachments=\ncatItemAttachmentsCounter=\ncatItemVideo=\ncatItemVideoWidth=\ncatItemVideoHeight=\ncatItemAudioWidth=\ncatItemAudioHeight=\ncatItemVideoAutoPlay=\ncatItemImageGallery=\ncatItemDateModified=\ncatItemReadMore=\ncatItemCommentsAnchor=\ncatItemK2Plugins=\nitemDateCreated=\nitemTitle=\nitemFeaturedNotice=\nitemAuthor=\nitemFontResizer=\nitemPrintButton=\nitemEmailButton=\nitemSocialButton=\nitemVideoAnchor=\nitemImageGalleryAnchor=\nitemCommentsAnchor=\nitemRating=\nitemImage=\nitemImgSize=\nitemImageMainCaption=\nitemImageMainCredits=\nitemIntroText=\nitemFullText=\nitemExtraFields=\nitemDateModified=\nitemHits=\nitemCategory=\nitemTags=\nitemAttachments=\nitemAttachmentsCounter=\nitemVideo=\nitemVideoWidth=\nitemVideoHeight=\nitemAudioWidth=\nitemAudioHeight=\nitemVideoAutoPlay=\nitemVideoCaption=\nitemVideoCredits=\nitemImageGallery=\nitemNavigation=\nitemComments=\nitemTwitterButton=\nitemFacebookButton=\nitemGooglePlusOneButton=\nitemAuthorBlock=\nitemAuthorImage=\nitemAuthorDescription=\nitemAuthorURL=\nitemAuthorEmail=\nitemAuthorLatest=\nitemAuthorLatestLimit=\nitemRelated=\nitemRelatedLimit=\nitemRelatedTitle=\nitemRelatedCategory=\nitemRelatedImageSize=\nitemRelatedIntrotext=\nitemRelatedFulltext=\nitemRelatedAuthor=\nitemRelatedMedia=\nitemRelatedImageGallery=\nitemK2Plugins=\n\n', '', 'robots=\nauthor=', '', '', ''),
(2, '4 hãng sẽ sản xuất smartphone Windows Phones 8 đầu tiên', '4-hãng-sẽ-sản-xuất-smartphone-windows-phones-8-đầu-tiên', 1, 1, '<p>Có 4 đơn vị xác nhận sẽ sản xuất máy chạy Windows Phone 8 là Nokia, Samsung, HTC và Huawei. LG lần này đã thiếu vắng trong cuộc đua.\r\n', '\r\n</p>\r\n<table style="width: 1px;" border="0" cellspacing="0" cellpadding="3" align="center">\r\n<tbody>\r\n<tr>\r\n<td><img src="http://sohoa.vnexpress.net/Files/Subject/3B/9B/64/8A/windows_phone_8.jpg" border="1" alt="Phần cứng của Windows Phone 8 sẽ do Nokia, Samsung, HTC, Huawei và Qualcomm phụ trách. Ảnh: Gsmarena." width="500" height="276" /></td>\r\n</tr>\r\n<tr>\r\n<td>Phần cứng của Windows Phone 8 sẽ do Nokia, Samsung, HTC, Huawei và Qualcomm phụ trách. Ảnh: <em>Gsmarena.</em></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>Với vị trí hiện tại và canh bạc "bỏ trứng một giỏ"  hiện tại, Nokia nghiễm nhiên trở thành một trong những công ty sản xuất  điện thoại đầu tiên xác nhận sẽ ra mắt các smartphone chạy Windows Phone  8.</p>\r\n<p>Theo sau đó là Samsung, HTC và Huawei. Điều thú vị  trong danh sách này là sự vắng mặt của LG, một thành viên khá mờ nhạt  trong làng Windows Phone gần đây, trong khi đó, Huawei tuyên bố bước  chân vào nền tảng này. Thực tế, sự có mặt của Huawei sẽ là thuận lợi lớn  cho Microsoft, khi hãng sẽ giúp mở rộng hình ảnh của Windows Phone tại  thị trường Trung Quốc khổng lồ.</p>\r\n<p>Cùng với đó, Qualcomm sẽ trở thành đơn vị cung cấp chủ  đạo các chipset dành cho thiết bị chạy Windows Phone 8. Microsoft cho  hay, hãng sẽ tập trung hơn vào các loại CPU lõi kép, và nhiều khả năng  sự lựa chọn này cũng chỉ loanh quanh với chip Snapdragon S3 hoặc S4.</p>\r\n<p>Trang <em>AnandTech</em> khẳng định, các thiết bị chạy  Windows Phone 8 sẽ sử dụng bộ xử lý Qualcomm MSM8960. Đây là mẫu chip  cùng loại với Snapdragon S4 (Krait) đang được lắp đặt trong mẫu HTC One S  và HTC One X phiên bản lõi kép cho nhà mạng AT&amp;T của Mỹ. Như vậy,  các thế hệ máy Windows Phone 8 sắp ra mắt sẽ hứa hẹn những trải nghiệm  và khả năng hoạt động đáng để lưu tâm.</p>\r\n<p align="right"><strong>Anh Quân</strong></p>', NULL, NULL, '[]', '', '2012-06-21 19:41:25', 62, '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '2012-06-21 19:41:25', '0000-00-00 00:00:00', 0, 0, 2, 0, 0, '', '', '', '', 31, 'catItemTitle=\ncatItemTitleLinked=\ncatItemFeaturedNotice=\ncatItemAuthor=\ncatItemDateCreated=\ncatItemRating=\ncatItemImage=\ncatItemIntroText=\ncatItemExtraFields=\ncatItemHits=\ncatItemCategory=\ncatItemTags=\ncatItemAttachments=\ncatItemAttachmentsCounter=\ncatItemVideo=\ncatItemVideoWidth=\ncatItemVideoHeight=\ncatItemAudioWidth=\ncatItemAudioHeight=\ncatItemVideoAutoPlay=\ncatItemImageGallery=\ncatItemDateModified=\ncatItemReadMore=\ncatItemCommentsAnchor=\ncatItemK2Plugins=\nitemDateCreated=\nitemTitle=\nitemFeaturedNotice=\nitemAuthor=\nitemFontResizer=\nitemPrintButton=\nitemEmailButton=\nitemSocialButton=\nitemVideoAnchor=\nitemImageGalleryAnchor=\nitemCommentsAnchor=\nitemRating=\nitemImage=\nitemImgSize=\nitemImageMainCaption=\nitemImageMainCredits=\nitemIntroText=\nitemFullText=\nitemExtraFields=\nitemDateModified=\nitemHits=\nitemCategory=\nitemTags=\nitemAttachments=\nitemAttachmentsCounter=\nitemVideo=\nitemVideoWidth=\nitemVideoHeight=\nitemAudioWidth=\nitemAudioHeight=\nitemVideoAutoPlay=\nitemVideoCaption=\nitemVideoCredits=\nitemImageGallery=\nitemNavigation=\nitemComments=\nitemTwitterButton=\nitemFacebookButton=\nitemGooglePlusOneButton=\nitemAuthorBlock=\nitemAuthorImage=\nitemAuthorDescription=\nitemAuthorURL=\nitemAuthorEmail=\nitemAuthorLatest=\nitemAuthorLatestLimit=\nitemRelated=\nitemRelatedLimit=\nitemRelatedTitle=\nitemRelatedCategory=\nitemRelatedImageSize=\nitemRelatedIntrotext=\nitemRelatedFulltext=\nitemRelatedAuthor=\nitemRelatedMedia=\nitemRelatedImageGallery=\nitemK2Plugins=\n\n', '', 'robots=\nauthor=', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `webvn_k2_rating`
--

CREATE TABLE IF NOT EXISTS `webvn_k2_rating` (
  `itemID` int(11) NOT NULL default '0',
  `rating_sum` int(11) unsigned NOT NULL default '0',
  `rating_count` int(11) unsigned NOT NULL default '0',
  `lastip` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`itemID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `webvn_k2_rating`
--


-- --------------------------------------------------------

--
-- Table structure for table `webvn_k2_tags`
--

CREATE TABLE IF NOT EXISTS `webvn_k2_tags` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `published` smallint(6) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `published` (`published`),
  FULLTEXT KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `webvn_k2_tags`
--


-- --------------------------------------------------------

--
-- Table structure for table `webvn_k2_tags_xref`
--

CREATE TABLE IF NOT EXISTS `webvn_k2_tags_xref` (
  `id` int(11) NOT NULL auto_increment,
  `tagID` int(11) NOT NULL,
  `itemID` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `tagID` (`tagID`),
  KEY `itemID` (`itemID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `webvn_k2_tags_xref`
--


-- --------------------------------------------------------

--
-- Table structure for table `webvn_k2_users`
--

CREATE TABLE IF NOT EXISTS `webvn_k2_users` (
  `id` int(11) NOT NULL auto_increment,
  `userID` int(11) NOT NULL,
  `userName` varchar(255) default NULL,
  `gender` enum('m','f') NOT NULL default 'm',
  `description` text NOT NULL,
  `image` varchar(255) default NULL,
  `url` varchar(255) default NULL,
  `group` int(11) NOT NULL default '0',
  `plugins` text NOT NULL,
  `ip` varchar(15) NOT NULL,
  `hostname` varchar(255) NOT NULL,
  `notes` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `userID` (`userID`),
  KEY `group` (`group`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `webvn_k2_users`
--


-- --------------------------------------------------------

--
-- Table structure for table `webvn_k2_user_groups`
--

CREATE TABLE IF NOT EXISTS `webvn_k2_user_groups` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `permissions` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `webvn_k2_user_groups`
--

INSERT INTO `webvn_k2_user_groups` (`id`, `name`, `permissions`) VALUES
(1, 'Registered', 'frontEdit=0\nadd=0\neditOwn=0\neditAll=0\npublish=0\ncomment=1\ninheritance=0\ncategories=all\n\n'),
(2, 'Site Owner', 'frontEdit=1\nadd=1\neditOwn=1\neditAll=1\npublish=1\ncomment=1\ninheritance=1\ncategories=all\n\n');

-- --------------------------------------------------------

--
-- Table structure for table `webvn_menu`
--

CREATE TABLE IF NOT EXISTS `webvn_menu` (
  `id` int(11) NOT NULL auto_increment,
  `menutype` varchar(75) default NULL,
  `name` varchar(255) default NULL,
  `alias` varchar(255) NOT NULL default '',
  `link` text,
  `type` varchar(50) NOT NULL default '',
  `published` tinyint(1) NOT NULL default '0',
  `parent` int(11) unsigned NOT NULL default '0',
  `componentid` int(11) unsigned NOT NULL default '0',
  `sublevel` int(11) default '0',
  `ordering` int(11) default '0',
  `checked_out` int(11) unsigned NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `pollid` int(11) NOT NULL default '0',
  `browserNav` tinyint(4) default '0',
  `access` tinyint(3) unsigned NOT NULL default '0',
  `utaccess` tinyint(3) unsigned NOT NULL default '0',
  `params` text NOT NULL,
  `lft` int(11) unsigned NOT NULL default '0',
  `rgt` int(11) unsigned NOT NULL default '0',
  `home` int(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `componentid` (`componentid`,`menutype`,`published`,`access`),
  KEY `menutype` (`menutype`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=126 ;

--
-- Dumping data for table `webvn_menu`
--

INSERT INTO `webvn_menu` (`id`, `menutype`, `name`, `alias`, `link`, `type`, `published`, `parent`, `componentid`, `sublevel`, `ordering`, `checked_out`, `checked_out_time`, `pollid`, `browserNav`, `access`, `utaccess`, `params`, `lft`, `rgt`, `home`) VALUES
(1, 'mainmenu', 'Trang chủ', 'home', 'index.php?option=com_content&view=frontpage', 'component', 1, 0, 20, 0, 34, 0, '0000-00-00 00:00:00', 0, 0, 0, 3, 'num_leading_articles=0\nnum_intro_articles=0\nnum_columns=0\nnum_links=0\norderby_pri=\norderby_sec=front\nmulti_column_order=1\nshow_pagination=2\nshow_pagination_results=1\nshow_feed_link=1\nshow_noauth=\nshow_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_item_navigation=\nshow_readmore=\nshow_vote=\nshow_icons=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nshow_hits=\nfeed_summary=\npage_title=Webvn.com.vn\nshow_page_title=0\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 1),
(2, 'mainmenu', 'Layouts', 'layouts', 'index.php?option=com_content&view=article&id=33', 'component', -2, 0, 20, 0, 27, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'show_noauth=0\nshow_title=\nlink_titles=0\nshow_intro=1\nshow_section=0\nlink_section=0\nshow_category=0\nlink_category=0\nshow_author=1\nshow_create_date=1\nshow_modify_date=1\nshow_item_navigation=0\nshow_readmore=1\nshow_vote=0\nshow_icons=1\nshow_pdf_icon=1\nshow_print_icon=1\nshow_email_icon=1\nshow_hits=1\nfeed_summary=\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(41, 'mainmenu', 'Blogs', 'blogs', 'http://www.joomlavision.com/blog.html', 'url', -2, 0, 0, 0, 26, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'menu_image=-1\n\n', 0, 0, 0),
(95, 'sanpham', 'Dell', 'dell', 'index.php?option=com_virtuemart', 'component', 1, 0, 34, 0, 11, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'product_id=\ncategory_id=11\nflypage=\npage=\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(94, 'sanpham', 'Motorola', 'motorola', 'index.php?option=com_virtuemart', 'component', 1, 0, 34, 0, 10, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'product_id=\ncategory_id=10\nflypage=\npage=\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(93, 'sanpham', 'Lenovo', 'lenovo', 'index.php?option=com_virtuemart', 'component', 1, 0, 34, 0, 9, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'product_id=\ncategory_id=9\nflypage=\npage=\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(91, 'sanpham', 'Philips', 'philips', 'index.php?option=com_virtuemart', 'component', 1, 0, 34, 0, 7, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'product_id=\ncategory_id=7\nflypage=\npage=\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(92, 'sanpham', 'LG', 'lg', 'index.php?option=com_virtuemart', 'component', 1, 0, 34, 0, 8, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'product_id=\ncategory_id=8\nflypage=\npage=\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(20, 'usermenu', 'Your Details', 'your-details', 'index.php?option=com_user&view=user&task=edit', 'component', 1, 0, 14, 0, 1, 0, '0000-00-00 00:00:00', 0, 0, 1, 3, 'welcome_desc=\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(24, 'usermenu', 'Logout', 'logout', 'index.php?option=com_user&view=login', 'component', 1, 0, 14, 0, 4, 0, '0000-00-00 00:00:00', 0, 0, 1, 3, '', 0, 0, 0),
(27, 'mainmenu', 'Typhography', 'typhography', 'index.php?option=com_content&view=article&id=19', 'component', -2, 0, 20, 0, 23, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'show_noauth=\nshow_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_item_navigation=\nshow_readmore=\nshow_vote=\nshow_icons=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nshow_hits=\nfeed_summary=\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(89, 'sanpham', 'Samsung', 'samsung', 'index.php?option=com_virtuemart', 'component', 1, 0, 34, 0, 5, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'product_id=\ncategory_id=3\nflypage=\npage=\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(90, 'sanpham', 'Sony Ericsson', 'sony-ericsson', 'index.php?option=com_virtuemart', 'component', 1, 0, 34, 0, 6, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'product_id=\ncategory_id=6\nflypage=\npage=\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(87, 'sanpham', 'Blackberry', 'blackberry', 'index.php?option=com_virtuemart', 'component', 1, 0, 34, 0, 3, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'product_id=\ncategory_id=4\nflypage=\npage=\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(88, 'sanpham', 'Nokia', 'nokia', 'index.php?option=com_virtuemart', 'component', 1, 0, 34, 0, 4, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'product_id=\ncategory_id=5\nflypage=\npage=\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(85, 'sanpham', 'iPhone - iPad - iPod', 'apple-iphone-ipad-ipod', 'index.php?option=com_virtuemart', 'component', 1, 0, 34, 0, 1, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'product_id=\ncategory_id=1\nflypage=\npage=\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(86, 'sanpham', 'HTC', 'htc', 'index.php?option=com_virtuemart', 'component', 1, 0, 34, 0, 2, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'product_id=\ncategory_id=2\nflypage=\npage=\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(34, 'mainmenu', 'Features', 'features', 'index.php?option=com_content&view=article&id=22', 'component', -2, 0, 20, 0, 32, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'show_noauth=0\nshow_title=1\nlink_titles=0\nshow_intro=1\nshow_section=0\nlink_section=0\nshow_category=0\nlink_category=0\nshow_author=1\nshow_create_date=1\nshow_modify_date=1\nshow_item_navigation=0\nshow_readmore=1\nshow_vote=0\nshow_icons=1\nshow_pdf_icon=1\nshow_print_icon=1\nshow_email_icon=1\nshow_hits=1\nfeed_summary=\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(37, 'mainmenu', 'Join Now', 'join-now', 'http://www.joomlavision.com/Legal/Joomla-Templates-Club.html', 'url', -2, 0, 0, 0, 20, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'menu_image=-1\n\n', 0, 0, 0),
(99, 'sanpham', 'iNo', 'ino', 'index.php?option=com_virtuemart', 'component', 1, 0, 34, 0, 15, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'product_id=\ncategory_id=15\nflypage=\npage=\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(96, 'sanpham', 'Q-Mobile', 'q-mobile', 'index.php?option=com_virtuemart', 'component', 1, 0, 34, 0, 12, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'product_id=\ncategory_id=12\nflypage=\npage=\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(97, 'sanpham', 'Alcatel', 'alcatel', 'index.php?option=com_virtuemart', 'component', 1, 0, 34, 0, 13, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'product_id=\ncategory_id=13\nflypage=\npage=\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(98, 'sanpham', 'Avio', 'avio', 'index.php?option=com_virtuemart', 'component', 1, 0, 34, 0, 14, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'product_id=\ncategory_id=14\nflypage=\npage=\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(48, 'mainmenu', 'Web Links', 'web-links', 'index.php?option=com_weblinks&view=categories', 'component', -2, 0, 4, 1, 21, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'image=-1\nimage_align=right\nshow_feed_link=1\nshow_comp_description=1\ncomp_description=\nshow_link_hits=1\nshow_link_description=1\nshow_other_cats=1\nshow_headings=1\ntarget=\nlink_icons=\npage_title=Weblinks\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(49, 'mainmenu', 'Navigations', 'navigations', 'index.php?option=com_newsfeeds&view=categories', 'component', -2, 0, 11, 0, 22, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'show_limit=1\nshow_comp_description=1\ncomp_description=\nimage=-1\nimage_align=right\nshow_headings=1\nshow_name=1\nshow_articles=1\nshow_link=1\nshow_cat_description=1\nshow_cat_items=1\nshow_feed_image=1\nshow_feed_description=1\nshow_item_description=1\nfeed_word_count=0\npage_title=Newsfeeds\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(50, 'mainmenu', 'The News', 'the-news', 'index.php?option=com_content&view=category&layout=blog&id=1', 'component', -2, 0, 20, 1, 19, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'show_description=0\nshow_description_image=0\nnum_leading_articles=1\nnum_intro_articles=4\nnum_columns=2\nnum_links=4\norderby_pri=\norderby_sec=\nmulti_column_order=0\nshow_pagination=2\nshow_pagination_results=1\nshow_feed_link=1\nshow_noauth=0\nshow_title=1\nlink_titles=0\nshow_intro=1\nshow_section=0\nlink_section=0\nshow_category=0\nlink_category=0\nshow_author=1\nshow_create_date=1\nshow_modify_date=1\nshow_item_navigation=0\nshow_readmore=1\nshow_vote=0\nshow_icons=1\nshow_pdf_icon=1\nshow_print_icon=1\nshow_email_icon=1\nshow_hits=1\nfeed_summary=\npage_title=The News\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(51, 'usermenu', 'Submit an Article', 'submit-an-article', 'index.php?option=com_content&view=article&layout=form', 'component', 1, 0, 20, 0, 2, 0, '0000-00-00 00:00:00', 0, 0, 2, 0, '', 0, 0, 0),
(52, 'usermenu', 'Submit a Web Link', 'submit-a-web-link', 'index.php?option=com_weblinks&view=weblink&layout=form', 'component', 1, 0, 4, 0, 3, 0, '0000-00-00 00:00:00', 0, 0, 2, 0, '', 0, 0, 0),
(53, 'mainmenu', 'Web Links', 'web-links', 'index.php?option=com_weblinks&view=categories', 'component', -2, 0, 4, 1, 24, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'image=-1\nimage_align=right\nshow_feed_link=1\nshow_comp_description=1\ncomp_description=\nshow_link_hits=1\nshow_link_description=1\nshow_other_cats=1\nshow_headings=1\ntarget=\nlink_icons=\npage_title=Weblinks\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(54, 'mainmenu', 'The News', 'the-news', 'index.php?option=com_content&view=category&layout=blog&id=1', 'component', -2, 0, 20, 2, 25, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'show_description=0\nshow_description_image=0\nnum_leading_articles=1\nnum_intro_articles=4\nnum_columns=2\nnum_links=4\norderby_pri=\norderby_sec=\nmulti_column_order=0\nshow_pagination=2\nshow_pagination_results=1\nshow_feed_link=1\nshow_noauth=0\nshow_title=1\nlink_titles=0\nshow_intro=1\nshow_section=0\nlink_section=0\nshow_category=0\nlink_category=0\nshow_author=1\nshow_create_date=1\nshow_modify_date=1\nshow_item_navigation=0\nshow_readmore=1\nshow_vote=0\nshow_icons=1\nshow_pdf_icon=1\nshow_print_icon=1\nshow_email_icon=1\nshow_hits=1\nfeed_summary=\npage_title=The News\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(55, 'mainmenu', 'The News', 'the-news', 'index.php?option=com_content&view=category&layout=blog&id=1', 'component', -2, 0, 20, 1, 28, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'show_description=0\nshow_description_image=0\nnum_leading_articles=1\nnum_intro_articles=4\nnum_columns=2\nnum_links=4\norderby_pri=\norderby_sec=\nmulti_column_order=0\nshow_pagination=2\nshow_pagination_results=1\nshow_feed_link=1\nshow_noauth=0\nshow_title=1\nlink_titles=0\nshow_intro=1\nshow_section=0\nlink_section=0\nshow_category=0\nlink_category=0\nshow_author=1\nshow_create_date=1\nshow_modify_date=1\nshow_item_navigation=0\nshow_readmore=1\nshow_vote=0\nshow_icons=1\nshow_pdf_icon=1\nshow_print_icon=1\nshow_email_icon=1\nshow_hits=1\nfeed_summary=\npage_title=The News\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(56, 'mainmenu', 'Web Links', 'web-links', 'index.php?option=com_weblinks&view=categories', 'component', -2, 0, 4, 2, 29, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'image=-1\nimage_align=right\nshow_feed_link=1\nshow_comp_description=1\ncomp_description=\nshow_link_hits=1\nshow_link_description=1\nshow_other_cats=1\nshow_headings=1\ntarget=\nlink_icons=\npage_title=Weblinks\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(57, 'mainmenu', 'The News', 'the-news', 'index.php?option=com_content&view=category&layout=blog&id=1', 'component', -2, 0, 20, 2, 30, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'show_description=0\nshow_description_image=0\nnum_leading_articles=1\nnum_intro_articles=4\nnum_columns=2\nnum_links=4\norderby_pri=\norderby_sec=\nmulti_column_order=0\nshow_pagination=2\nshow_pagination_results=1\nshow_feed_link=1\nshow_noauth=0\nshow_title=1\nlink_titles=0\nshow_intro=1\nshow_section=0\nlink_section=0\nshow_category=0\nlink_category=0\nshow_author=1\nshow_create_date=1\nshow_modify_date=1\nshow_item_navigation=0\nshow_readmore=1\nshow_vote=0\nshow_icons=1\nshow_pdf_icon=1\nshow_print_icon=1\nshow_email_icon=1\nshow_hits=1\nfeed_summary=\npage_title=The News\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(58, 'mainmenu', 'Left + Content', 'left-content', 'index.php?option=com_content&view=frontpage', 'component', -2, 0, 20, 1, 31, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'num_leading_articles=1\nnum_intro_articles=4\nnum_columns=2\nnum_links=4\norderby_pri=\norderby_sec=front\nmulti_column_order=1\nshow_pagination=2\nshow_pagination_results=1\nshow_feed_link=1\nshow_noauth=0\nshow_title=1\nlink_titles=0\nshow_intro=1\nshow_section=0\nlink_section=0\nshow_category=0\nlink_category=0\nshow_author=1\nshow_create_date=1\nshow_modify_date=1\nshow_item_navigation=0\nshow_readmore=1\nshow_vote=0\nshow_icons=1\nshow_pdf_icon=1\nshow_print_icon=1\nshow_email_icon=1\nshow_hits=1\nfeed_summary=\npage_title=The News\nshow_page_title=0\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(61, 'mainmenu', 'Section Blog', 'section-blog', 'index.php?option=com_content&view=section&layout=blog&id=3', 'component', -2, 0, 20, 1, 33, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'show_description=0\nshow_description_image=0\nnum_leading_articles=1\nnum_intro_articles=4\nnum_columns=2\nnum_links=4\norderby_pri=\norderby_sec=\nmulti_column_order=0\nshow_pagination=2\nshow_pagination_results=1\nshow_feed_link=1\nshow_noauth=0\nshow_title=1\nlink_titles=0\nshow_intro=1\nshow_section=0\nlink_section=0\nshow_category=0\nlink_category=0\nshow_author=1\nshow_create_date=1\nshow_modify_date=1\nshow_item_navigation=0\nshow_readmore=1\nshow_vote=0\nshow_icons=1\nshow_pdf_icon=1\nshow_print_icon=1\nshow_email_icon=1\nshow_hits=1\nfeed_summary=\npage_title=Example of Section Blog layout (FAQ section)\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(59, 'mainmenu', 'Right + Content', 'left-content', 'index.php?option=com_content&view=article&id=19', 'component', -2, 0, 20, 1, 18, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'show_noauth=0\nshow_title=1\nlink_titles=0\nshow_intro=1\nshow_section=0\nlink_section=0\nshow_category=0\nlink_category=0\nshow_author=1\nshow_create_date=1\nshow_modify_date=1\nshow_item_navigation=0\nshow_readmore=1\nshow_vote=0\nshow_icons=1\nshow_pdf_icon=1\nshow_print_icon=1\nshow_email_icon=1\nshow_hits=1\nfeed_summary=\npage_title=The News\nshow_page_title=0\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(60, 'mainmenu', 'Full Content', 'left-content', 'index.php?option=com_content&view=article&id=19', 'component', -2, 0, 20, 1, 4, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'show_noauth=0\nshow_title=1\nlink_titles=0\nshow_intro=1\nshow_section=0\nlink_section=0\nshow_category=0\nlink_category=0\nshow_author=1\nshow_create_date=1\nshow_modify_date=1\nshow_item_navigation=0\nshow_readmore=1\nshow_vote=0\nshow_icons=0\nshow_pdf_icon=0\nshow_print_icon=0\nshow_email_icon=0\nshow_hits=0\nfeed_summary=\npage_title=The News\nshow_page_title=0\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(62, 'mainmenu', 'Section Table', 'section-table', 'index.php?option=com_content&view=frontpage', 'component', -2, 0, 20, 1, 5, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'num_leading_articles=1\nnum_intro_articles=4\nnum_columns=2\nnum_links=4\norderby_pri=\norderby_sec=front\nmulti_column_order=0\nshow_pagination=2\nshow_pagination_results=1\nshow_feed_link=1\nshow_noauth=0\nshow_title=1\nlink_titles=\nshow_intro=1\nshow_section=0\nlink_section=0\nshow_category=0\nlink_category=0\nshow_author=1\nshow_create_date=1\nshow_modify_date=1\nshow_item_navigation=0\nshow_readmore=1\nshow_vote=0\nshow_icons=1\nshow_pdf_icon=1\nshow_print_icon=1\nshow_email_icon=1\nshow_hits=1\nfeed_summary=\npage_title=Example of Table Blog layout (FAQ section)\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(63, 'mainmenu', 'Category Blog', 'categoryblog', 'index.php?option=com_content&view=category&layout=blog&id=31', 'component', -2, 0, 20, 1, 6, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'show_description=0\nshow_description_image=0\nnum_leading_articles=1\nnum_intro_articles=4\nnum_columns=2\nnum_links=4\norderby_pri=\norderby_sec=\nmulti_column_order=0\nshow_pagination=2\nshow_pagination_results=1\nshow_feed_link=1\nshow_noauth=0\nshow_title=1\nlink_titles=0\nshow_intro=1\nshow_section=0\nlink_section=0\nshow_category=0\nlink_category=0\nshow_author=1\nshow_create_date=1\nshow_modify_date=1\nshow_item_navigation=0\nshow_readmore=1\nshow_vote=0\nshow_icons=1\nshow_pdf_icon=1\nshow_print_icon=1\nshow_email_icon=1\nshow_hits=1\nfeed_summary=\npage_title=Example of Category Blog layout (FAQs/General category)\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(64, 'mainmenu', 'Category Table', 'category-table', 'index.php?option=com_content&view=category&id=32', 'component', -2, 0, 20, 1, 7, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'display_num=10\nshow_headings=1\nshow_date=0\ndate_format=\nfilter=1\nfilter_type=title\norderby_sec=\nshow_pagination=1\nshow_pagination_limit=1\nshow_feed_link=1\nshow_noauth=0\nshow_title=1\nlink_titles=0\nshow_intro=1\nshow_section=0\nlink_section=0\nshow_category=0\nlink_category=0\nshow_author=1\nshow_create_date=1\nshow_modify_date=1\nshow_item_navigation=0\nshow_readmore=1\nshow_vote=0\nshow_icons=1\nshow_pdf_icon=1\nshow_print_icon=1\nshow_email_icon=1\nshow_hits=1\nfeed_summary=\npage_title=Example of Category Table layout (FAQs/Languages category)\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(65, 'mainmenu', 'Moo Sub Menu', '-moo-sub-menu', 'index.php?option=com_content&view=article&id=21', 'component', -2, 0, 20, 0, 37, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'show_noauth=\nshow_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_item_navigation=\nshow_readmore=\nshow_vote=\nshow_icons=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nshow_hits=\nfeed_summary=\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(66, 'mainmenu', 'Moo Sub Menu', '-moo-sub-menu-', 'index.php?option=com_content&view=archive', 'component', -2, 0, 20, 0, 39, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'orderby=\nshow_noauth=\nshow_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_item_navigation=\nshow_readmore=\nshow_vote=\nshow_icons=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nshow_hits=\nfeed_summary=\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(67, 'mainmenu', 'Moo Sub Menu', '-moo-sub-menu-', '?menustyle=submoo', 'url', -2, 0, 0, 1, 8, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'menu_image=-1\n\n', 0, 0, 0),
(68, 'mainmenu', 'MooMenu', 'moomenu-', '?menustyle=moo', 'url', -2, 0, 0, 1, 9, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'menu_image=-1\n\n', 0, 0, 0),
(74, 'mainmenu', 'Extensions', 'extensions', 'http://www.joomlavision.com/joomla-extensions.html', 'url', -2, 0, 0, 1, 10, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'menu_image=-1\n\n', 0, 0, 0),
(75, 'mainmenu', 'Demo', 'demo', 'http://www.joomlavision.com/demo/', 'url', -2, 0, 0, 1, 11, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'menu_image=-1\n\n', 0, 0, 0),
(76, 'mainmenu', 'Content', 'content', 'index.php?option=com_content&view=section&id=4', 'component', -2, 0, 20, 0, 12, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'show_description=0\nshow_description_image=0\nshow_categories=1\nshow_empty_categories=0\nshow_cat_num_articles=1\nshow_category_description=1\norderby=\norderby_sec=\nshow_feed_link=1\nshow_noauth=0\nshow_title=1\nlink_titles=0\nshow_intro=1\nshow_section=0\nlink_section=0\nshow_category=0\nlink_category=0\nshow_author=1\nshow_create_date=1\nshow_modify_date=1\nshow_item_navigation=0\nshow_readmore=1\nshow_vote=0\nshow_icons=1\nshow_pdf_icon=1\nshow_print_icon=1\nshow_email_icon=1\nshow_hits=1\nfeed_summary=\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(69, 'mainmenu', 'Split Menu', 'split-menu', '?menustyle=split', 'url', -2, 0, 0, 1, 13, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'menu_image=-1\n\n', 0, 0, 0),
(70, 'mainmenu', 'CSS Menu', 'css-menu', '?menustyle=css', 'url', -2, 0, 0, 1, 14, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'menu_image=-1\n\n', 0, 0, 0),
(73, 'mainmenu', 'Downloads', 'downloads', 'http://www.joomlavision.com/forums/downloads.php', 'url', -2, 0, 0, 1, 15, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'menu_image=-1\n\n', 0, 0, 0),
(71, 'mainmenu', 'Joomla! Template Club', 'joomla-template-club', 'http://www.joomlavision.com/', 'url', -2, 0, 0, 1, 16, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'menu_image=-1\n\n', 0, 0, 0),
(72, 'mainmenu', 'Forums', 'forums', 'http://www.joomlavision.com/forums/', 'url', -2, 0, 0, 1, 17, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'menu_image=-1\n\n', 0, 0, 0),
(77, 'mainmenu', 'Category Table', 'category-table', 'index.php?option=com_content&view=category&id=32', 'component', -2, 0, 20, 0, 35, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'show_page_title=1\npage_title=Example of Category Table layout (FAQs/Languages category)\nshow_headings=1\nshow_date=0\ndate_format=\nfilter=1\nfilter_type=title\npageclass_sfx=\nmenu_image=-1\nsecure=0\norderby_sec=\nshow_pagination=1\nshow_pagination_limit=1\nshow_noauth=0\nshow_title=1\nlink_titles=0\nshow_intro=1\nshow_section=0\nlink_section=0\nshow_category=0\nlink_category=0\nshow_author=1\nshow_create_date=1\nshow_modify_date=1\nshow_item_navigation=0\nshow_readmore=1\nshow_vote=0\nshow_icons=1\nshow_pdf_icon=1\nshow_print_icon=1\nshow_email_icon=1\nshow_hits=1\n\n', 0, 0, 0),
(78, 'mainmenu', 'Section Blog', 'section-blog', 'index.php?option=com_content&view=section&layout=blog&id=3', 'component', -2, 0, 20, 1, 3, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'show_description=0\nshow_description_image=0\nnum_leading_articles=1\nnum_intro_articles=4\nnum_columns=2\nnum_links=4\norderby_pri=\norderby_sec=\nmulti_column_order=0\nshow_pagination=2\nshow_pagination_results=1\nshow_feed_link=1\nshow_noauth=0\nshow_title=1\nlink_titles=0\nshow_intro=1\nshow_section=0\nlink_section=0\nshow_category=0\nlink_category=0\nshow_author=1\nshow_create_date=1\nshow_modify_date=1\nshow_item_navigation=0\nshow_readmore=1\nshow_vote=0\nshow_icons=1\nshow_pdf_icon=1\nshow_print_icon=1\nshow_email_icon=1\nshow_hits=1\nfeed_summary=\npage_title=Example of Section Blog layout (FAQ section)\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(79, 'mainmenu', 'Giới thiệu', 'khuyn-mi', 'index.php?option=com_content&view=article&id=60', 'component', 1, 0, 20, 0, 36, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'show_noauth=\nshow_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_item_navigation=\nshow_readmore=\nshow_vote=\nshow_icons=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nshow_hits=\nfeed_summary=\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(80, 'mainmenu', 'Tin tức', 'tin-tc', 'index.php?option=com_k2&view=itemlist&layout=category&task=category&id=1', 'component', 1, 0, 43, 0, 38, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'categories=1\nsingleCatOrdering=\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(81, 'mainmenu', 'Báo giá', 'bao-gia', 'index.php?option=com_content&view=article&id=61', 'component', -2, 0, 20, 0, 0, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'show_noauth=\nshow_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_item_navigation=\nshow_readmore=\nshow_vote=\nshow_icons=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nshow_hits=\nfeed_summary=\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(82, 'mainmenu', 'Khuyến mãi', 'khuyn-mai', 'index.php?option=com_content&view=article&id=62', 'component', 1, 0, 20, 0, 41, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'show_noauth=\nshow_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_item_navigation=\nshow_readmore=\nshow_vote=\nshow_icons=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nshow_hits=\nfeed_summary=\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(83, 'mainmenu', 'Bản đồ', 'bn-', '', 'url', -2, 0, 0, 0, 1, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'menu_image=-1\n\n', 0, 0, 0),
(84, 'mainmenu', 'Liên hệ', 'lien-h', 'index.php?option=com_contact&view=contact&id=1', 'component', 1, 0, 7, 0, 44, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'show_contact_list=0\nshow_category_crumb=0\ncontact_icons=\nicon_address=\nicon_email=\nicon_telephone=\nicon_mobile=\nicon_fax=\nicon_misc=\nshow_headings=\nshow_position=\nshow_email=\nshow_telephone=\nshow_mobile=\nshow_fax=\nallow_vcard=\nbanned_email=\nbanned_subject=\nbanned_text=\nvalidate_session=\ncustom_reply=\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(100, 'mainmenu', 'Ứng dụng & Games', 'ng-dng-a-games', 'index.php?option=com_k2&view=itemlist&layout=category&task=category&id=2', 'component', -2, 0, 43, 0, 0, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'categories=2\nsingleCatOrdering=\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(101, 'mainmenu', 'Chính sách bảo hành', 'chinh-sach-bo-hanh', 'index.php?option=com_content&view=article&id=63', 'component', 1, 0, 20, 0, 43, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'show_noauth=\nshow_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_item_navigation=\nshow_readmore=\nshow_vote=\nshow_icons=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nshow_hits=\nfeed_summary=\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(102, 'C1', 'Về chúng tôi', 'v-chung-toi', '', 'url', 1, 0, 0, 0, 1, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'menu_image=-1\n\n', 0, 0, 0),
(103, 'C1', 'Tin tức Mobile', 'tin-tc-mobile', '', 'url', 1, 0, 0, 0, 2, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'menu_image=-1\n\n', 0, 0, 0),
(104, 'C1', 'Sơ đồ đường đi', 's--ng-i', '', 'url', 1, 0, 0, 0, 3, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'menu_image=-1\n\n', 0, 0, 0),
(105, 'C1', 'Thông tin liên hệ', 'thong-tin-lien-h', '', 'url', 1, 0, 0, 0, 4, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'menu_image=-1\n\n', 0, 0, 0),
(106, 'C2', 'Hướng dẫn mua hàng', 'hng-dn-mua-hang', '', 'url', 1, 0, 0, 0, 1, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'menu_image=-1\n\n', 0, 0, 0),
(107, 'C2', 'Hướng dẫn thanh toán', 'hng-dn-thanh-toan', '', 'url', 1, 0, 0, 0, 2, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'menu_image=-1\n\n', 0, 0, 0),
(108, 'C2', 'Hình thức giao hàng', 'hinh-thc-giao-hang', '', 'url', 1, 0, 0, 0, 3, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'menu_image=-1\n\n', 0, 0, 0),
(109, 'C2', 'Tài khoản ngân hàng', 'tai-khon-ngan-hang', '', 'url', 1, 0, 0, 0, 4, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'menu_image=-1\n\n', 0, 0, 0),
(110, 'C3', 'Thư mời hợp tác', 'th-mi-hp-tac', '', 'url', 1, 0, 0, 0, 1, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'menu_image=-1\n\n', 0, 0, 0),
(111, 'C3', 'Hình thức hợp tác', 'hinh-thc-hp-tac', '', 'url', 1, 0, 0, 0, 2, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'menu_image=-1\n\n', 0, 0, 0),
(112, 'C3', 'Phương thức giao nhận', 'phng-thc-giao-nhn', '', 'url', 1, 0, 0, 0, 3, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'menu_image=-1\n\n', 0, 0, 0),
(113, 'C3', 'Nhà cung cấp mới', 'nha-cung-cp-mi', '', 'url', 1, 0, 0, 0, 4, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'menu_image=-1\n\n', 0, 0, 0),
(114, 'mainmenu', 'Thiết kế website', 'thit-k-website', '', 'url', -2, 0, 0, 1, 2, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'menu_image=-1\n\n', 0, 0, 0),
(115, 'PhuKien', 'Phụ kiện cho Apple', 'ph-kin-cho-apple', 'index.php?option=com_virtuemart', 'component', 1, 0, 34, 0, 1, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'product_id=\ncategory_id=\nflypage=\npage=\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(116, 'PhuKien', 'Tai nghe-Bluetooth', 'tai-nghe-bluetooth', 'index.php?option=com_virtuemart', 'component', 1, 0, 34, 0, 2, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'product_id=\ncategory_id=\nflypage=\npage=\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(117, 'PhuKien', 'Thẻ nhớ', 'th-nh', 'index.php?option=com_virtuemart', 'component', 1, 0, 34, 0, 3, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'product_id=\ncategory_id=\nflypage=\npage=\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(118, 'PhuKien', 'Pin-sạc-Nguồn', 'pin-sc-ngun', 'index.php?option=com_virtuemart', 'component', 1, 0, 34, 0, 4, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'product_id=\ncategory_id=\nflypage=\npage=\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(119, 'PhuKien', 'Kết nối Internet - Wifi', 'kt-ni-internet-wifi', 'index.php?option=com_virtuemart', 'component', 1, 0, 34, 0, 5, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'product_id=\ncategory_id=\nflypage=\npage=\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(120, 'PhuKien', 'Bao Da + Ốp Iphone 4/4S', 'bao-da--p-iphone-44s', 'index.php?option=com_virtuemart', 'component', 1, 0, 34, 0, 6, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'product_id=\ncategory_id=\nflypage=\npage=\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(121, 'PhuKien', 'Bao Da Ipad', 'bao-da-ipad', 'index.php?option=com_virtuemart', 'component', 1, 0, 34, 0, 7, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'product_id=\ncategory_id=\nflypage=\npage=\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(122, 'PhuKien', 'Các loại khác', 'cac-loi-khac', 'index.php?option=com_virtuemart', 'component', 1, 0, 34, 0, 8, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'product_id=\ncategory_id=\nflypage=\npage=\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(123, 'Tintuc', 'Xã hội số', 'xa-hi-s', '', 'url', 1, 0, 0, 0, 1, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'menu_image=-1\n\n', 0, 0, 0),
(124, 'Tintuc', 'Tin kinh tế', 'tin-kinh-t', '', 'url', 1, 0, 0, 0, 2, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'menu_image=-1\n\n', 0, 0, 0),
(125, 'Tintuc', 'Tin công nghệ', 'tin-cong-ngh', '', 'url', 1, 0, 0, 0, 3, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'menu_image=-1\n\n', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `webvn_menu_types`
--

CREATE TABLE IF NOT EXISTS `webvn_menu_types` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `menutype` varchar(75) NOT NULL default '',
  `title` varchar(255) NOT NULL default '',
  `description` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `menutype` (`menutype`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `webvn_menu_types`
--

INSERT INTO `webvn_menu_types` (`id`, `menutype`, `title`, `description`) VALUES
(1, 'mainmenu', 'Main Menu', 'The main menu for the site'),
(2, 'usermenu', 'User Menu', 'A Menu for logged in Users'),
(7, 'sanpham', 'SanPham', 'SanPham'),
(8, 'C1', 'c1', 'c1'),
(9, 'C2', 'c2', 'c2'),
(10, 'C3', 'c3', 'c3'),
(11, 'PhuKien', 'PhuKien', 'PhuKien'),
(12, 'Tintuc', 'Tintuc', 'Tintuc');

-- --------------------------------------------------------

--
-- Table structure for table `webvn_messages`
--

CREATE TABLE IF NOT EXISTS `webvn_messages` (
  `message_id` int(10) unsigned NOT NULL auto_increment,
  `user_id_from` int(10) unsigned NOT NULL default '0',
  `user_id_to` int(10) unsigned NOT NULL default '0',
  `folder_id` int(10) unsigned NOT NULL default '0',
  `date_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `state` int(11) NOT NULL default '0',
  `priority` int(1) unsigned NOT NULL default '0',
  `subject` text NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY  (`message_id`),
  KEY `useridto_state` (`user_id_to`,`state`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `webvn_messages`
--


-- --------------------------------------------------------

--
-- Table structure for table `webvn_messages_cfg`
--

CREATE TABLE IF NOT EXISTS `webvn_messages_cfg` (
  `user_id` int(10) unsigned NOT NULL default '0',
  `cfg_name` varchar(100) NOT NULL default '',
  `cfg_value` varchar(255) NOT NULL default '',
  UNIQUE KEY `idx_user_var_name` (`user_id`,`cfg_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `webvn_messages_cfg`
--


-- --------------------------------------------------------

--
-- Table structure for table `webvn_migration_backlinks`
--

CREATE TABLE IF NOT EXISTS `webvn_migration_backlinks` (
  `itemid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `url` text NOT NULL,
  `sefurl` text NOT NULL,
  `newurl` text NOT NULL,
  PRIMARY KEY  (`itemid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `webvn_migration_backlinks`
--


-- --------------------------------------------------------

--
-- Table structure for table `webvn_modules`
--

CREATE TABLE IF NOT EXISTS `webvn_modules` (
  `id` int(11) NOT NULL auto_increment,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `ordering` int(11) NOT NULL default '0',
  `position` varchar(50) default NULL,
  `checked_out` int(11) unsigned NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `published` tinyint(1) NOT NULL default '0',
  `module` varchar(50) default NULL,
  `numnews` int(11) NOT NULL default '0',
  `access` tinyint(3) unsigned NOT NULL default '0',
  `showtitle` tinyint(3) unsigned NOT NULL default '1',
  `params` text NOT NULL,
  `iscore` tinyint(4) NOT NULL default '0',
  `client_id` tinyint(4) NOT NULL default '0',
  `control` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `published` (`published`,`access`),
  KEY `newsfeeds` (`module`,`published`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=108 ;

--
-- Dumping data for table `webvn_modules`
--

INSERT INTO `webvn_modules` (`id`, `title`, `content`, `ordering`, `position`, `checked_out`, `checked_out_time`, `published`, `module`, `numnews`, `access`, `showtitle`, `params`, `iscore`, `client_id`, `control`) VALUES
(1, 'Main Menu', '', 1, 'right', 0, '0000-00-00 00:00:00', 0, 'mod_mainmenu', 0, 0, 1, 'menutype=mainmenu\nmenu_style=list\nstartLevel=0\nendLevel=0\nshowAllChildren=0\nwindow_open=\nshow_whitespace=0\ncache=1\ntag_id=\nclass_sfx=_right\nmoduleclass_sfx=_right\nmaxdepth=10\nmenu_images=0\nmenu_images_align=0\nmenu_images_link=0\nexpand_menu=0\nactivate_parent=0\nfull_active_id=0\nindent_image=0\nindent_image1=\nindent_image2=\nindent_image3=\nindent_image4=\nindent_image5=\nindent_image6=\nspacer=\nend_spacer=\n\n', 1, 0, ''),
(2, 'Login', '', 1, 'login', 0, '0000-00-00 00:00:00', 1, 'mod_login', 0, 0, 1, '', 1, 1, ''),
(3, 'Popular', '', 3, 'cpanel', 0, '0000-00-00 00:00:00', 0, 'mod_popular', 0, 2, 1, '', 0, 1, ''),
(4, 'Recent added Articles', '', 4, 'cpanel', 0, '0000-00-00 00:00:00', 0, 'mod_latest', 0, 2, 1, 'ordering=c_dsc\nuser_id=0\ncache=0\n\n', 0, 1, ''),
(5, 'Menu Stats', '', 5, 'cpanel', 0, '0000-00-00 00:00:00', 0, 'mod_stats', 0, 2, 1, '', 0, 1, ''),
(6, 'Unread Messages', '', 1, 'header', 0, '0000-00-00 00:00:00', 1, 'mod_unread', 0, 2, 1, '', 1, 1, ''),
(7, 'Online Users', '', 2, 'header', 0, '0000-00-00 00:00:00', 1, 'mod_online', 0, 2, 1, '', 1, 1, ''),
(8, 'Toolbar', '', 1, 'toolbar', 0, '0000-00-00 00:00:00', 1, 'mod_toolbar', 0, 2, 1, '', 1, 1, ''),
(9, 'Quick Icons', '', 1, 'icon', 0, '0000-00-00 00:00:00', 1, 'mod_quickicon', 0, 2, 1, '', 1, 1, ''),
(10, 'Logged in Users', '', 2, 'cpanel', 0, '0000-00-00 00:00:00', 0, 'mod_logged', 0, 2, 1, '', 0, 1, ''),
(11, 'Footer', '', 0, 'footer', 0, '0000-00-00 00:00:00', 0, 'mod_footer', 0, 0, 1, '', 1, 1, ''),
(12, 'Admin Menu', '', 1, 'menu', 0, '0000-00-00 00:00:00', 1, 'mod_menu', 0, 2, 1, '', 0, 1, ''),
(13, 'Admin SubMenu', '', 1, 'submenu', 0, '0000-00-00 00:00:00', 1, 'mod_submenu', 0, 2, 1, '', 0, 1, ''),
(14, 'User Status', '', 1, 'status', 0, '0000-00-00 00:00:00', 1, 'mod_status', 0, 2, 1, '', 0, 1, ''),
(15, 'Title', '', 1, 'title', 0, '0000-00-00 00:00:00', 1, 'mod_title', 0, 2, 1, '', 0, 1, ''),
(59, 'Main Menu', '', 5, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_mainmenu', 0, 0, 1, 'menutype=mainmenu\nmenu_style=list\nstartLevel=0\nendLevel=0\nshowAllChildren=0\nwindow_open=\nshow_whitespace=0\ncache=1\ntag_id=\nclass_sfx=_right\nmoduleclass_sfx=_right\nmaxdepth=10\nmenu_images=0\nmenu_images_align=0\nmenu_images_link=0\nexpand_menu=0\nactivate_parent=0\nfull_active_id=0\nindent_image=0\nindent_image1=\nindent_image2=\nindent_image3=\nindent_image4=\nindent_image5=\nindent_image6=\nspacer=\nend_spacer=\n\n', 0, 0, ''),
(18, 'Đăng nhập / Đăng ký', '', 7, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_login', 0, 0, 1, 'cache=0\nmoduleclass_sfx=\npretext=\nposttext=\nlogin=\nlogout=\ngreeting=1\nname=0\nusesecure=0\n\n', 1, 0, ''),
(69, 'Features Today', '<img  src="images/stories/img_last.png"  border="0" alt="Joomla! Logo" title="Example Caption" hspace="6" vspace="0" width="232" height="203" align="left" />\r\n<p>\r\nNec pellentesque Donec Nulla Phasellus sapien felis pede arcu augue. Sed sagittis wisi lorem nulla congue lorem\r\n</p>', 0, 'user4', 0, '0000-00-00 00:00:00', 0, 'mod_custom', 0, 0, 0, 'moduleclass_sfx=\n\n', 0, 0, ''),
(67, 'who''s  online', '', 0, 'right', 0, '0000-00-00 00:00:00', 0, 'mod_whosonline', 0, 0, 1, 'cache=0\nshowmode=0\nmoduleclass_sfx=_online\n\n', 0, 0, ''),
(43, 'Date time', 'Wednesday, Oct 14th. Last update:04:16:07 AM GMT', 0, 'top', 0, '0000-00-00 00:00:00', 0, 'mod_custom', 0, 0, 0, 'moduleclass_sfx=\n\n', 0, 0, ''),
(27, 'Search', '', 0, 'search', 0, '0000-00-00 00:00:00', 0, 'mod_search', 0, 0, 0, 'moduleclass_sfx=\nwidth=20\ntext=Sample search...\nbutton=1\nbutton_pos=right\nimagebutton=\nbutton_text=Search\nset_itemid=\ncache=1\ncache_time=900\n\n', 0, 0, ''),
(74, 'Sản Phẩm Ngẫu Nhiên', '', 0, 'user6', 0, '0000-00-00 00:00:00', 1, 'mod_virtuemart_randomprod', 0, 0, 1, 'max_items=9\nshow_price=1\nshow_addtocart=1\ndisplay_style=table\nproducts_per_row=3\ncategory_id=\nmoduleclass_sfx=_sanpham\nclass_sfx=\n\n', 0, 0, ''),
(75, 'iPhone - iPad - iPod', '', 0, 'user6', 0, '0000-00-00 00:00:00', 1, 'mod_virtuemart_latestprod', 0, 0, 1, 'max_items=9\nshow_price=1\nshow_addtocart=1\ndisplay_style=table\nproducts_per_row=3\ncategory_id=1\ncache=0\nmoduleclass_sfx=_sanpham\nclass_sfx=\n\n', 0, 0, ''),
(35, 'Breadcrumbs', '', 0, 'breadcrumb', 0, '0000-00-00 00:00:00', 1, 'mod_breadcrumbs', 0, 0, 1, 'showHome=1\nhomeText=Trang chủ\nshowLast=1\nseparator=\nmoduleclass_sfx=\ncache=0\n\n', 1, 0, ''),
(36, 'Syndication', '', 3, 'syndicate', 0, '0000-00-00 00:00:00', 0, 'mod_syndicate', 0, 0, 0, '', 1, 0, ''),
(47, 'Featured Projects', '<table border="0" cellspacing="0" cellpadding="0" width="100%">\r\n<tbody>\r\n<tr>\r\n<td height="92"><img class="personal" src="images/stories/irrit/fimg_1.jpg" border="0" alt="irrit" /></td>\r\n<td><img class="personal" src="images/stories/irrit/fimg_2.jpg" border="0" alt="irrit" /></td>\r\n<td><img class="personal" src="images/stories/irrit/fimg_3.jpg" border="0" alt="irrit" /></td>\r\n</tr>\r\n<tr>\r\n<td><img class="personal" src="images/stories/irrit/fimg_4.jpg" border="0" alt="irrit" /></td>\r\n<td><img class="personal" src="images/stories/irrit/fimg_5.jpg" border="0" alt="irrit" /></td>\r\n<td><img class="personal" src="images/stories/irrit/fimg_6.jpg" border="0" alt="irrit" /></td>\r\n</tr>\r\n</tbody>\r\n</table>', 3, 'right', 0, '0000-00-00 00:00:00', 0, 'mod_custom', 0, 0, 1, 'moduleclass_sfx=\n\n', 0, 0, ''),
(64, 'who''s  online', '', 12, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_whosonline', 0, 0, 0, 'cache=0\nshowmode=0\nmoduleclass_sfx=_online\n\n', 0, 0, ''),
(41, 'Welcome to Joomla!', '<div style="padding: 5px">  <p>   Congratulations on choosing Joomla! as your content management system. To   help you get started, check out these excellent resources for securing your   server and pointers to documentation and other helpful resources. </p> <p>   <strong>Security</strong><br /> </p> <p>   On the Internet, security is always a concern. For that reason, you are   encouraged to subscribe to the   <a href="http://feedburner.google.com/fb/a/mailverify?uri=JoomlaSecurityNews" target="_blank">Joomla!   Security Announcements</a> for the latest information on new Joomla! releases,   emailed to you automatically. </p> <p>   If this is one of your first Web sites, security considerations may   seem complicated and intimidating. There are three simple steps that go a long   way towards securing a Web site: (1) regular backups; (2) prompt updates to the   <a href="http://www.joomla.org/download.html" target="_blank">latest Joomla! release;</a> and (3) a <a href="http://docs.joomla.org/Security_Checklist_2_-_Hosting_and_Server_Setup" target="_blank" title="good Web host">good Web host</a>. There are many other important security considerations that you can learn about by reading the <a href="http://docs.joomla.org/Category:Security_Checklist" target="_blank" title="Joomla! Security Checklist">Joomla! Security Checklist</a>. </p> <p>If you believe your Web site was attacked, or you think you have discovered a security issue in Joomla!, please do not post it in the Joomla! forums. Publishing this information could put other Web sites at risk. Instead, report possible security vulnerabilities to the <a href="http://developer.joomla.org/security/contact-the-team.html" target="_blank" title="Joomla! Security Task Force">Joomla! Security Task Force</a>.</p><p><strong>Learning Joomla!</strong> </p> <p>   A good place to start learning Joomla! is the   "<a href="http://docs.joomla.org/beginners" target="_blank">Absolute Beginner''s   Guide to Joomla!.</a>" There, you will find a Quick Start to Joomla!   <a href="http://help.joomla.org/ghop/feb2008/task048/joomla_15_quickstart.pdf" target="_blank">guide</a>   and <a href="http://help.joomla.org/ghop/feb2008/task167/index.html" target="_blank">video</a>,   amongst many other tutorials. The   <a href="http://community.joomla.org/magazine/view-all-issues.html" target="_blank">Joomla!   Community Magazine</a> also has   <a href="http://community.joomla.org/magazine/article/522-introductory-learning-joomla-using-sample-data.html" target="_blank">articles   for new learners</a> and experienced users, alike. A great place to look for   answers is the   <a href="http://docs.joomla.org/Category:FAQ" target="_blank">Frequently Asked   Questions (FAQ)</a>. If you are stuck on a particular screen in the   Administrator (which is where you are now), try clicking the Help toolbar   button to get assistance specific to that page. </p> <p>   If you still have questions, please feel free to use the   <a href="http://forum.joomla.org/" target="_blank">Joomla! Forums.</a> The forums   are an incredibly valuable resource for all levels of Joomla! users. Before   you post a question, though, use the forum search (located at the top of each   forum page) to see if the question has been asked and answered. </p> <p>   <strong>Getting Involved</strong> </p> <p>   <a name="twjs" title="twjs"></a> If you want to help make Joomla! better, consider getting   involved. There are   <a href="http://www.joomla.org/about-joomla/contribute-to-joomla.html" target="_blank">many ways   you can make a positive difference.</a> Have fun using Joomla!.</p></div>', 0, 'cpanel', 0, '0000-00-00 00:00:00', 0, 'mod_custom', 0, 2, 1, 'moduleclass_sfx=\n\n', 1, 1, ''),
(42, 'Joomla! Security Newsfeed', '', 6, 'cpanel', 62, '2008-10-25 20:15:17', 0, 'mod_feed', 0, 0, 1, 'cache=1\ncache_time=15\nmoduleclass_sfx=\nrssurl=http://feeds.joomla.org/JoomlaSecurityNews\nrssrtl=0\nrsstitle=1\nrssdesc=0\nrssimage=1\nrssitems=1\nrssitemdesc=1\nword_count=0\n\n', 0, 1, ''),
(76, 'Footer', '<p><strong>CÔNG TY TNHH ĐẦU TƯ THƯƠNG MẠI VIỄN THÔNG QUỐC TẾ V&amp;V</strong><br />24 Điện Biên Phủ - Ba Đình - Hà Nội         :::   Tel: 04-374 782 55<br />26 Điện Biên Phủ - Ba Đình - Hà Nội         :::   Tel: 04-374 787 89<br />52c Hai Bà Trưng - Hoàn Kiếm - Hà Nội   :::   Tel: 04-393 629 39<br />Thiết kế và Phát triển bởi <a href="http://vietnamonline.vn/index.php" target="_blank" title="Vietnamonline.vn">Vietnamonline.vn</a></p>', 0, 'footer', 0, '0000-00-00 00:00:00', 1, 'mod_custom', 0, 0, 0, 'moduleclass_sfx=\n\n', 0, 0, ''),
(70, 'Lastest Post', '<p>Joomla! provides an easy-to-use graphical user interface that simplifies  molestie faucibus nisl adipiscing cras. Joomla! provides an easy-to-use  graphical user interface that simplifies molestie faucibus nisl  adipiscing cras.</p>\r\n<p>Joomla! provides an easy-to-use graphical user interface that simplifies  molestie faucibus nisl adipiscing cras. Joomla! provides an easy-to-use  graphical user interface that simplifies molestie faucibus nisl  adipiscing cras.</p>\r\n<p>Joomla! provides an easy-to-use graphical user interface that simplifies  molestie faucibus nisl adipiscing cras. Joomla! provides an easy-to-use  graphical user interface that simplifies molestie faucibus nisl  adipiscing cras.</p>', 0, 'user5', 0, '0000-00-00 00:00:00', 0, 'mod_custom', 0, 0, 0, 'moduleclass_sfx=\n\n', 0, 0, ''),
(46, 'Features Today      ', '<img src="images/stories/img_today.png" border="0" alt="Joomla! Logo" title="Example Caption" />\r\n<p><b>Adipiscing nibh consequat senectus </b></p>\r\nNec pellentesque Donec Nulla Phasellus sapien felis pede arcu augue accumsan in arcu.Praesent sollicitudin porta molestie.', 0, 'user15', 0, '0000-00-00 00:00:00', 0, 'mod_custom', 0, 0, 0, 'moduleclass_sfx=\n\n', 0, 0, ''),
(68, 'JV Accordion Menu', '', 2, 'right', 0, '0000-00-00 00:00:00', 0, 'mod_jv_accordion_menu', 0, 0, 1, 'moduleclass_sfx=\nmenutype=mainmenu\nevent_type=0\nfollow_current_menu=0\nis_exppand_active=0\nstart_level=0\nend_level=0\nis_slide=0\ncache=0\ncache_time=900\n\n', 0, 0, ''),
(49, 'Enjoy This Attractions? Share it!', '<table width="100%" border="0" cellspacing="0" cellpadding="0">\r\n  <tr>\r\n    <td width="55%">\r\n         Lorem ipsum dolor sit amet consectetuer penatibus \r\n          morbi auctor pretium quis. Mauris enim justo\r\n    </td>\r\n    <td>\r\n     <a href="#" class="lmagrin_10"><img src="images/stories/irrit/share_1.jpg" alt="irrit" /></a>\r\n     <a href="#" class="lmagrin_10"><img src="images/stories/irrit/share_2.jpg" alt="irrit" /></a>\r\n     <a href="#" class="lmagrin_10"><img src="images/stories/irrit/share_3.jpg" alt="irrit" /></a>\r\n     <a href="#" class="lmagrin_10"><img src="images/stories/irrit/share_4.jpg" alt="irrit" /></a>\r\n     <a href="#" class="lmagrin_10"><img src="images/stories/irrit/share_5.jpg" alt="irrit" /></a>     \r\n\r\n    </td>\r\n  </tr>\r\n</table>', 3, 'user6', 0, '0000-00-00 00:00:00', 0, 'mod_custom', 0, 0, 1, 'moduleclass_sfx=_enjoy\n\n', 0, 0, ''),
(50, 'Banner', '<a href="#"  title="banner"><img class="personal" src="images/stories/irrit/img_1.png" alt="banner" /></a>', 4, 'user6', 0, '0000-00-00 00:00:00', 0, 'mod_custom', 0, 0, 0, 'moduleclass_sfx=_banner\n\n', 0, 0, ''),
(51, 'Features photos', '<ul class="col" >\r\n<li>\r\n   <div class="float-left"><img class="personal "  src="images/stories/irrit/colimg_1.jpg" alt="" /></div>\r\n   <div class="col1-content">\r\n     <span class="arial_13" >Suspendisse consequat </span><br />\r\n     <span class="blue">Comment: 120</span><br />\r\n     <span class="color1">Saturday, 27 December 2008 06:49 </span>\r\n    \r\n   </div>\r\n</li>\r\n\r\n<li>\r\n    <div class="float-left"><img class="personal "  src="images/stories/irrit/colimg_2.jpg" alt="" /></div>\r\n   <div class="col1-content">\r\n      <span class="arial_13" >Morbi varius aliquet venenatis </span><br />\r\n     <span class="blue">Comment: 150</span><br />\r\n     <span class="color1">Tuesday, 27 December 2008 12: 54  </span>\r\n    \r\n   </div>\r\n</li>\r\n\r\n<li>\r\n     <div class="float-left"><img class="personal "  src="images/stories/irrit/colimg_3.jpg" alt="" /></div>\r\n   <div class="col1-content">\r\n      <span class="arial_13" > Ribendum nibh tellus a tortor </span><br />\r\n     <span class="blue">Comment: 100</span><br />\r\n     <span class="color1">Monday, 27 December 2008 06:49  </span>\r\n    \r\n   </div>\r\n</li>\r\n</ul>', 0, 'col1', 0, '0000-00-00 00:00:00', 0, 'mod_custom', 0, 0, 1, 'moduleclass_sfx=\n\n', 0, 0, ''),
(52, 'Popular photos', '<ul class="col" >\r\n<li>\r\n   <div class="float-left"><img class="personal "  src="images/stories/irrit/colimg_4.jpg" alt="" /></div>\r\n   <div class="col1-content">\r\n     <span class="arial_13" >Lorem ipsum dolor sit ame</span> <br />\r\n     <span class="blue">Comment: 110</span><br />\r\n     <span class="color1">Friday, 27 December 2009 06:49 </span>\r\n    \r\n   </div>\r\n</li>\r\n\r\n<li>\r\n    <div class="float-left"><img class="personal "  src="images/stories/irrit/colimg_5.jpg" alt="" /></div>\r\n   <div class="col1-content">\r\n     <span class="arial_13" >Consectetur adipiscing elit</span> <br />\r\n     <span class="blue">Comment: 160</span><br />\r\n     <span class="color1"> Saturday, 27 December 2008 06:49 </span>\r\n    \r\n   </div>\r\n</li>\r\n\r\n<li>\r\n     <div class="float-left"><img class="personal "  src="images/stories/irrit/colimg_6.jpg" alt="" /></div>\r\n   <div class="col1-content">\r\n     <span class="arial_13" >Pellentesque  ligula luctus</span> <br />\r\n     <span class="blue">Comment: 130</span><br />\r\n     <span class="color1">Sunday, 27 December 2009 11:49  </span>\r\n    \r\n   </div>\r\n</li>\r\n</ul>', 0, 'col2', 0, '0000-00-00 00:00:00', 0, 'mod_custom', 0, 0, 1, 'moduleclass_sfx=\n\n', 0, 0, ''),
(53, 'Lastest photos', '<ul class="col" >\r\n<li>\r\n   <div class="float-left"><img class="personal "  src="images/stories/irrit/colimg_7.jpg" alt="" /></div>\r\n   <div class="col1-content">\r\n     <span class="arial_13" >Donec sodales tortor laoreet </span><br />\r\n     <span class="blue">Comment: 110</span><br />\r\n     <span class="color1">Friday, 27 December 2008 06:49 </span>\r\n    \r\n   </div>\r\n</li>\r\n\r\n<li>\r\n    <div class="float-left"><img class="personal "  src="images/stories/irrit/colimg_8.jpg" alt="" /></div>\r\n   <div class="col1-content">\r\n     <span class="arial_13" >Ginteger tincidunt diam nec</span> <br />\r\n     <span class="blue">Comment: 150</span><br />\r\n     <span class="color1">Saturday, 27 December 2008 06:49 </span>\r\n    \r\n   </div>\r\n</li>\r\n\r\n\r\n<li>\r\n     <div class="float-left"><img class="personal "  src="images/stories/irrit/colimg_9.jpg" alt="" /></div>\r\n   <div class="col1-content">\r\n     <span class="arial_13" > Morbi fringilla consequat metus</span> <br />\r\n     <span class="blue">Comment: 100</span><br />\r\n     <span class="color1">Monday, 27 December 2008 01:23  </span>\r\n   </div>\r\n</li>\r\n</ul>', 0, 'col3', 0, '0000-00-00 00:00:00', 0, 'mod_custom', 0, 0, 1, 'moduleclass_sfx=\n\n', 0, 0, ''),
(72, 'SanPham', '', 8, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_mainmenu', 0, 0, 1, 'menutype=sanpham', 0, 0, ''),
(73, 'Sản phẩm theo hãng', '', 6, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_swmenupro', 0, 0, 1, 'menutype=sanpham\nmenustyle=gosumenu\nmoduleID=73\nlevels=0\nparentid=0\nparent_level=0\nhybrid=0\nactive_menu=0\ntables=0\ncssload=0\nsub_indicator=0\nselectbox_hack=0\nshow_shadow=0\ncache=0\ncache_time=1 hour\nmoduleclass_sfx=\neditor_hack=0\npadding_hack=0\nauto_position=0\ntemplate=All\nlanguage=\ncomponent=All\n', 0, 0, ''),
(57, '[JoomlaVision] Headline', '', 0, 'user2', 62, '2010-07-29 04:57:50', 0, 'mod_jv_headline', 0, 0, 0, 'moduleclass_sfx=_blank\ncontent_type=content\ncategories=34\nintro_length=30\ntimming=5000\ntrans_duration=500\nordering=created\nsort_order=desc\nlayout_style=jv_slide3\njv_news_height=360\nnews_thumb_width=300\nnews_thumb_height=200\nnews_no_item=10\nnews_event_type=mouseover\njv_news_slidebar_width=300\nnews_autorun=1\njv2_width=655\njv2_height=375\njv2_autorun=1\njv2_no_item=5\ndilo_enable_description=1\ndilo_height_des=50\ndilo_enable_link_article=1\ndilo_enable_btn=1\ndilo_no_slice=15\ndilo_effect_type=random\njv_lago_height=375\njv_lago_main_width=655\njv_lago_slidebar_width=340\nlago_hitem_sliderbar=85\nlago_thumb_width=75\nlago_thumb_height=75\nlago_no_item=5\nmax_show_item=5\nlago_show_next=1\nlago_enable_link_apanel=1\nlago_enable_link_artslidebar=1\nlago_animation=jvslideshow\njv_sello2_height=140\njv_sello2_width=915\nsello2_no_items_per_line=2\nsello2_thumb_width=168\nsello2_thumb_height=69\nsello2_no_item=10\nsello2_show_next=1\nsello2_readmore=0\nsello2_autorun=1\njv_sello1_width=980\nsello1_imgslide_height=340\nsello1_imgslide_width=980\nsello1_no_item=8\nsello1_animation=fadeslideleft\nsello1_thumb_width=102\nsello1_thumb_height=38\nsello1_show_next=1\nsello1_readmore=1\njv_maju_width=640\njv_maju_height=306\nmaju_thumb_width=56\nmaju_thumb_height=45\nmaju_no_item=4\nmaju_animation=jvslideshow\nmaju_show_next=0\nmaju_readmore=1\njv7_main_width=644\njv7_height=300\njv7_no_item=10\njv7_show_next=1\njv7_autorun=1\njv7_readmore=1\njv_pedon_width=640\njv_pedon_height=306\npedon_thumb_width=84\npedon_thumb_height=35\npedon_no_item=6\npedon_animation=fadeslideright\npedon_show_next=1\npedon_readmore=1\njv9_main_width=960\njv9_main_height=320\njv9_expand_width=700\njv9_height_desc=80\njv9_no_item=5\njv9_eventtype=mouseenter\n\n', 0, 0, ''),
(58, 'Conten Fusion', '', 0, 'user5', 0, '0000-00-00 00:00:00', 0, 'mod_jv_contenfusion', 0, 0, 0, 'moduleclass_sfx=_blank\ncontent=com_content\nitemsOrdering=\nslide=1\ntooltips=1\ncount=5\nheight=97\nwidth=560\ncatid=35\nthumbsize=125\nintro_lenght=100\ntimming=5000\nevent_type=mouseover\n\n', 0, 0, ''),
(60, 'Login Form', '', 10, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_login', 0, 0, 1, 'cache=0\nmoduleclass_sfx=_login\npretext=\nposttext=\nlogin=\nlogout=\ngreeting=1\nname=0\nusesecure=0\n\n', 0, 0, ''),
(61, 'Featured Projects', '<table border="0" cellspacing="0" cellpadding="0" width="100%">\r\n<tbody>\r\n<tr>\r\n<td height="92"><img class="personal" src="images/stories/irrit/fimg_1.jpg" border="0" alt="irrit" /></td>\r\n<td><img class="personal" src="images/stories/irrit/fimg_2.jpg" border="0" alt="irrit" /></td>\r\n<td><img class="personal" src="images/stories/irrit/fimg_3.jpg" border="0" alt="irrit" /></td>\r\n</tr>\r\n<tr>\r\n<td><img class="personal" src="images/stories/irrit/fimg_4.jpg" border="0" alt="irrit" /></td>\r\n<td><img class="personal" src="images/stories/irrit/fimg_5.jpg" border="0" alt="irrit" /></td>\r\n<td><img class="personal" src="images/stories/irrit/fimg_6.jpg" border="0" alt="irrit" /></td>\r\n</tr>\r\n</tbody>\r\n</table>', 11, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_custom', 0, 0, 1, 'moduleclass_sfx=_Features\n\n', 0, 0, ''),
(71, 'JV Tabs', '', 0, 'user3', 62, '2010-07-23 15:26:01', 0, 'mod_jv_tabs', 0, 0, 0, 'moduleclass_sfx=_blank\ntype=moduleID\nmoduleID-position=user15\nmoduleID-list=70,46\ncategoryID-list=\nk2_category=\njv_tabs_style=jv_news\neffect_type=scroll_lr\nHeight=auto\nWidth=100%\ntHeight=\ntWidth=\nthumb_display=display\nthumb_width=70\nthumb_height=50\nmouseType=click\nduration=1000\n\n', 0, 0, ''),
(77, 'Blackberry', '', 5, 'user6', 62, '2011-11-04 03:17:36', 0, 'mod_virtuemart_latestprod', 0, 0, 1, 'max_items=3\nshow_price=1\nshow_addtocart=1\ndisplay_style=table\nproducts_per_row=3\ncategory_id=4\ncache=0\nmoduleclass_sfx=_sanpham\nclass_sfx=\n\n', 0, 0, ''),
(78, 'HTC', '', 2, 'user6', 0, '0000-00-00 00:00:00', 0, 'mod_virtuemart_latestprod', 0, 0, 1, 'max_items=3\nshow_price=1\nshow_addtocart=1\ndisplay_style=table\nproducts_per_row=3\ncategory_id=2\ncache=0\nmoduleclass_sfx=_sanpham\nclass_sfx=\n\n', 0, 0, ''),
(79, 'Giỏ Hàng', '', 9, 'giohang', 0, '0000-00-00 00:00:00', 1, 'mod_virtuemart_cart', 0, 0, 1, 'moduleclass_sfx=_giohang\nvmCartDirection=0\nvmEnableGreyBox=0\n\n', 0, 0, ''),
(104, 'Liên kế website', '<p><a href="index.php"><img src="images/stories/adv/lienketweb_1.png" border="0" /></a></p>\r\n<p><a href="index.php"><img src="images/stories/adv/lienketweb_2.png" border="0" /></a></p>\r\n<p><a href="index.php"><img src="images/stories/adv/lienketweb_3.png" border="0" /></a></p>\r\n<p><a href="index.php"><img src="images/stories/adv/lienketweb_4-37.png" border="0" /></a></p>\r\n<p><a href="index.php"><img src="images/stories/adv/lienketweb_4.png" border="0" /></a></p>\r\n<p><a href="index.php"><img src="images/stories/adv/lienketweb_6.png" border="0" /></a></p>', 0, 'left', 0, '0000-00-00 00:00:00', 1, 'mod_custom', 0, 0, 0, 'moduleclass_sfx=_lienketweb\n\n', 0, 0, ''),
(81, 'Về chúng tôi', '', 0, 'col1', 0, '0000-00-00 00:00:00', 0, 'mod_mainmenu', 0, 0, 1, 'menutype=C1\nmenu_style=list\nstartLevel=0\nendLevel=0\nshowAllChildren=0\nwindow_open=\nshow_whitespace=0\ncache=1\ntag_id=\nclass_sfx=\nmoduleclass_sfx=\nmaxdepth=10\nmenu_images=0\nmenu_images_align=0\nmenu_images_link=0\nexpand_menu=0\nactivate_parent=0\nfull_active_id=0\nindent_image=0\nindent_image1=\nindent_image2=\nindent_image3=\nindent_image4=\nindent_image5=\nindent_image6=\nspacer=\nend_spacer=\n\n', 0, 0, ''),
(82, 'Hỗ trợ mua hàng', '', 0, 'col2', 0, '0000-00-00 00:00:00', 0, 'mod_mainmenu', 0, 0, 1, 'menutype=C2\nmenu_style=list\nstartLevel=0\nendLevel=0\nshowAllChildren=0\nwindow_open=\nshow_whitespace=0\ncache=1\ntag_id=\nclass_sfx=\nmoduleclass_sfx=\nmaxdepth=10\nmenu_images=0\nmenu_images_align=0\nmenu_images_link=0\nexpand_menu=0\nactivate_parent=0\nfull_active_id=0\nindent_image=0\nindent_image1=\nindent_image2=\nindent_image3=\nindent_image4=\nindent_image5=\nindent_image6=\nspacer=\nend_spacer=\n\n', 0, 0, ''),
(83, 'Dành cho nhà cung cấp', '', 0, 'col3', 0, '0000-00-00 00:00:00', 0, 'mod_mainmenu', 0, 0, 1, 'menutype=C3\nmenu_style=list\nstartLevel=0\nendLevel=0\nshowAllChildren=0\nwindow_open=\nshow_whitespace=0\ncache=1\ntag_id=\nclass_sfx=\nmoduleclass_sfx=\nmaxdepth=10\nmenu_images=0\nmenu_images_align=0\nmenu_images_link=0\nexpand_menu=0\nactivate_parent=0\nfull_active_id=0\nindent_image=0\nindent_image1=\nindent_image2=\nindent_image3=\nindent_image4=\nindent_image5=\nindent_image6=\nspacer=\nend_spacer=\n\n', 0, 0, ''),
(84, 'Hãng điện thoại', '', 2, 'hangdienthoai', 0, '0000-00-00 00:00:00', 1, 'mod_mainmenu', 0, 0, 1, 'menutype=sanpham\nmenu_style=list\nstartLevel=0\nendLevel=0\nshowAllChildren=0\nwindow_open=\nshow_whitespace=0\ncache=1\ntag_id=\nclass_sfx=\nmoduleclass_sfx=_left_menu\nmaxdepth=10\nmenu_images=0\nmenu_images_align=0\nmenu_images_link=0\nexpand_menu=0\nactivate_parent=0\nfull_active_id=0\nindent_image=0\nindent_image1=\nindent_image2=\nindent_image3=\nindent_image4=\nindent_image5=\nindent_image6=\nspacer=\nend_spacer=\n\n', 0, 0, ''),
(85, 'Slideshow', '', 0, 'slideshow1', 62, '2012-09-11 03:27:38', 1, 'mod_vtemslideshow', 0, 0, 0, 'slideID=slideshow1\nwidth=1016\nheight=199\nborder=0px solid #F5F5F5\nimagePath=images/stories/slide\nsortCriteria=0\nsortOrder=0\nsortOrderManual=\nstrips=10\ndelay=5000\nstripDelay=50\nposition=bottom\ndirection=fountainAlternate\neffect=\nnavigation=0\nnav_style=style4\nHor_pos=left\nVer_pos=bottom\nactive_color=#cc0000\nnextprev=1\nlinks=0\nlinkimage=http://webvn.com.vn\nmoduleclass_sfx=\njqueryslideshow=1\n\n', 0, 0, ''),
(86, 'Phụ kiện', '', 4, 'phukiendienthoai', 0, '0000-00-00 00:00:00', 1, 'mod_mainmenu', 0, 0, 1, 'menutype=PhuKien\nmenu_style=list\nstartLevel=0\nendLevel=0\nshowAllChildren=0\nwindow_open=\nshow_whitespace=0\ncache=1\ntag_id=\nclass_sfx=\nmoduleclass_sfx=_phukien\nmaxdepth=10\nmenu_images=0\nmenu_images_align=0\nmenu_images_link=0\nexpand_menu=0\nactivate_parent=0\nfull_active_id=0\nindent_image=0\nindent_image1=\nindent_image2=\nindent_image3=\nindent_image4=\nindent_image5=\nindent_image6=\nspacer=\nend_spacer=\n\n', 0, 0, ''),
(87, 'Quảng cáo', '<p style="text-align: center;"><a href="http://webvn.com.vn/Thiet-ke-website.html" target="_blank" title="Thiết kế website"><img src="images/stories/webvn_banner1.jpg" border="0" /></a></p>\r\n<p style="text-align: center;"> </p>\r\n<p style="text-align: center;"><a href="http://hdbox.vn/" target="_blank" title="Thế giới phim siêu nét"><img src="images/stories/hdbox.gif" border="0" /></a></p>', 13, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_custom', 0, 0, 1, 'moduleclass_sfx=_quangcao\n\n', 0, 0, ''),
(88, 'Logo-Banner', '<p><a href="index.php"><img src="images/stories/logo.gif" border="0" /></a></p>', 1, 'logo_banner', 0, '0000-00-00 00:00:00', 1, 'mod_custom', 0, 0, 0, 'moduleclass_sfx=\n\n', 0, 0, ''),
(89, 'K2 Comments', '', 14, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_k2_comments', 0, 0, 1, 'comments_limit=5\ncomments_word_limit=10\ncommenterName=1\ncommentAvatar=1\ncommentAvatarWidthSelect=custom\ncommentAvatarWidth=50\ncommentDate=1\ncommentDateFormat=absolute\ncommentLink=1\nitemTitle=1\nitemCategory=1\nfeed=1\ncommenters_limit=5\ncommenterNameOrUsername=1\ncommenterAvatar=1\ncommenterAvatarWidthSelect=custom\ncommenterAvatarWidth=50\ncommenterLink=1\ncommenterCommentsCounter=1\ncommenterLatestComment=1\n', 0, 0, ''),
(90, 'K2 Content', '', 15, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_k2_content', 0, 0, 1, 'getTemplate=Default\nsource=filter\nitemCount=5\nFeaturedItems=1\nitemTitle=1\nitemAuthor=1\nitemAuthorAvatar=1\nitemAuthorAvatarWidthSelect=custom\nitemAuthorAvatarWidth=50\nuserDescription=1\nitemIntroText=1\nitemImage=1\nitemImgSize=Small\nitemVideo=1\nitemVideoCaption=1\nitemVideoCredits=1\nitemAttachments=1\nitemTags=1\nitemCategory=1\nitemDateCreated=1\nitemHits=1\nitemReadMore=1\nitemCommentsCounter=1\nfeed=1\nitemCustomLinkURL=http://\n', 0, 0, ''),
(91, 'K2 Login', '', 16, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_k2_login', 0, 0, 1, 'name=1\nuserAvatar=1\nuserAvatarWidthSelect=custom\nuserAvatarWidth=50\n', 0, 0, ''),
(92, 'K2 Tools', '', 17, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_k2_tools', 0, 0, 1, 'archiveItemsCounter=1\nauthorItemsCounter=1\nauthorAvatar=1\nauthorAvatarWidthSelect=custom\nauthorAvatarWidth=50\nauthorLatestItem=1\ncategoriesListItemsCounter=1\nwidth=20\nmin_size=75\nmax_size=300\ncloud_limit=30\n', 0, 0, ''),
(93, 'K2 Users', '', 18, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_k2_users', 0, 0, 1, 'getTemplate=Default\nfilter=1\nordering=1\nlimit=4\nuserName=1\nuserAvatar=1\nuserAvatarWidthSelect=custom\nuserAvatarWidth=50\nuserDescription=1\nuserURL=1\nuserFeed=1\nuserItemCount=1\n', 0, 0, ''),
(94, 'K2 User', '', 19, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_k2_user', 0, 0, 1, 'name=1\nuserAvatar=1\nuserAvatarWidthSelect=custom\nuserAvatarWidth=50\n', 0, 0, ''),
(95, 'K2 Quick Icons (admin)', '', 99, 'icon', 0, '0000-00-00 00:00:00', 0, 'mod_k2_quickicons', 0, 2, 1, 'modCSSStyling=1\nmodLogo=1\n', 0, 1, ''),
(96, 'K2 Stats (admin)', '', 0, 'cpanel', 0, '0000-00-00 00:00:00', 0, 'mod_k2_stats', 0, 2, 1, 'latestItems=1\npopularItems=1\nmostCommentedItems=1\nlatestComments=1\nstatistics=1\n', 0, 1, ''),
(99, 'Banner', '<p><img src="images/stories/banner.png" border="0" /></p>', 1, 'banner_logo', 0, '0000-00-00 00:00:00', 1, 'mod_custom', 0, 0, 0, 'moduleclass_sfx=\n\n', 0, 0, ''),
(97, 'AJAX Live Search', '', 0, 'timkiem', 62, '2012-06-22 05:19:57', 0, 'mod_universal_ajaxlivesearch', 0, 0, 0, 'targetsearch=0\nsearchareaalign=left\nresultalign=0\ncatchooser=1\nimage=1\nitemsperplugin=3\nminchars=2\nscrolling=1\nstimeout=500\nintro=1\nintrolength=50\nlinktarget=0\nplugins=40|37|6\npluginsname=40|Search - Virtuemart|37|Search - K2|6|Search - Content|11|Search - Weblinks|7|Search - Contacts|8|Search - Categories|9|Search - Sections|10|Search - Newsfeeds\nsearchbox=Tìm kiếm...\nnoresultstitle=Results(0)\nnoresults=No results found for the keyword!\nmoduleclass_sfx=\nsearchareawidth=150\nimagew=60\nimageh=60\nresultareawidth=250\nborderw=4\nadmindebug=0\nsuggest=0\nsuggestionlang=en\nusecurl=0\nscount=10\nstext=No results found. Did you mean?\n\n', 0, 0, ''),
(100, 'Tintuc', '', 1, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_mainmenu', 0, 0, 1, 'menutype=Tintuc', 0, 0, ''),
(101, 'Tin tức - Sự kiện', '', 5, 'tintucsukien', 0, '0000-00-00 00:00:00', 1, 'mod_mainmenu', 0, 0, 1, 'menutype=Tintuc\nmenu_style=list\nstartLevel=0\nendLevel=0\nshowAllChildren=0\nwindow_open=\nshow_whitespace=0\ncache=1\ntag_id=\nclass_sfx=\nmoduleclass_sfx=_phukien\nmaxdepth=10\nmenu_images=0\nmenu_images_align=0\nmenu_images_link=0\nexpand_menu=0\nactivate_parent=0\nfull_active_id=0\nindent_image=0\nindent_image1=\nindent_image2=\nindent_image3=\nindent_image4=\nindent_image5=\nindent_image6=\nspacer=\nend_spacer=\n\n', 0, 0, ''),
(102, 'Thống Kê', '', -1, 'thongke', 0, '0000-00-00 00:00:00', 1, 'mod_vvisit_counter', 0, 0, 1, 'moduleclass_sfx=_thongke\nmode=custom\ninitialvalue=0\ndigit_type=default\nnumber_digits=6\nstats_type=default\nwidthtable=90\ntoday=Hôm nay\nyesterday=Hôm qua\nweek=Trong tuần\nlweek=Tuần trước\nmonth=Trong tháng\nlmonth=Tháng trước\nall=Tất cả\nautohide=0\nhrline=1\nbeginday=\nonline=We have\nguestip=Your IP\nguestinfo=Yes\nformattime=Today: %b %d, %Y\nissunday=1\ncache_time=15\npretext=\nposttext=\n\n', 0, 0, ''),
(103, 'Tiện ích', '<p><a href="index.php"><img src="images/stories/chantrang/tienich_tigia.png" border="0" /></a></p>\r\n<p><a href="index.php"><img src="images/stories/chantrang/tienich_giavang.png" border="0" /></a></p>\r\n<p><a href="index.php"><img src="images/stories/chantrang/tienich_thoitiet.png" border="0" /></a></p>\r\n<p><a href="index.php"><img src="images/stories/chantrang/tienich_chungkhoan.png" border="0" /></a></p>', 1, 'tienich', 0, '0000-00-00 00:00:00', 1, 'mod_custom', 0, 0, 1, 'moduleclass_sfx=_tienich\n\n', 0, 0, ''),
(98, 'Chân Trang', '<table class="chantrang" style="width: 100%;" border="0" cellspacing="0" cellpadding="0">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p><a href="index.php"><img src="images/stories/chantrang/facebook.png" border="0" /></a><a href="index.php"><img src="images/stories/chantrang/plusone.png" border="0" /></a><a href="index.php"><img src="images/stories/chantrang/youtube.png" border="0" /></a></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>', 0, 'chantrang', 0, '0000-00-00 00:00:00', 1, 'mod_custom', 0, 0, 0, 'moduleclass_sfx=\n\n', 0, 0, ''),
(105, 'Magic Zoom Plus', '', 0, 'left', 0, '0000-00-00 00:00:00', 1, 'mod_virtuemart_magiczoomplus', 0, 0, 0, 'use-virtuemart-to-create-image-thumbnails=Yes\nuse-effect-on-product-page=Yes\nuse-effect-on-category-page=Yes\nuse-tool-for-featured-prod-mod=No\nuse-tool-for-latest-prod-mod=No\nuse-tool-for-random-prod-mod=No\n\n', 0, 0, ''),
(106, 'Yt Mega News', '', 20, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_yt_meganews', 0, 0, 1, 'numcols=2\nsec_cat_list=1\nfeatured=2\nsort_order_field=created\nlimit_articles=6\nnum_items=2\ncount_character=1\nmax_description=200\nshow_description=1\nshow_title=1\ntarget=_self\nlimit_title=25\nshow_image=1\nthumb_width=200\nthumb_height=200\nthumbnail_mode=1\ntheme=theme1\nshow_all_articles=1\nshow_read_more_link=1\nread_more_text=read more...\nview_all_text=view all\n', 0, 0, ''),
(107, 'Tin tức - Sự kiện', '', 0, 'tintuc_sukien', 0, '0000-00-00 00:00:00', 1, 'mod_yt_megak2news', 0, 0, 1, 'moduleclass_sfx=_tintuc_sukien\nnumcols=1\ncategory=1\nfeatured=1\nsort_order_field=c_dsc\nlimit_items=6\nnum_items=2\ncount_character=1\nDescription_max=2000\nshow_description=1\nshow_title=1\nlimit_title=250\ntarget=_self\nshow_price=0\nprice_color=#8B0000\nshow_image=1\nlink_image=1\nthumb_width=100\nthumb_height=100\nthumbnail_mode=1\ntheme=theme2\nshow_read_more_link=0\nread_more_text=read more...\nshow_all_items=0\nview_all_text=view all\ncustomUrl=\nIntro_text=\nFooter_text=\ncache=0\ncache_time=300\n\n', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `webvn_modules_menu`
--

CREATE TABLE IF NOT EXISTS `webvn_modules_menu` (
  `moduleid` int(11) NOT NULL default '0',
  `menuid` int(11) NOT NULL default '0',
  PRIMARY KEY  (`moduleid`,`menuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `webvn_modules_menu`
--

INSERT INTO `webvn_modules_menu` (`moduleid`, `menuid`) VALUES
(1, 1),
(1, 2),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 20),
(1, 24),
(1, 27),
(1, 28),
(1, 30),
(1, 34),
(1, 37),
(1, 38),
(1, 40),
(1, 41),
(1, 43),
(1, 45),
(1, 46),
(1, 47),
(1, 48),
(1, 49),
(1, 50),
(1, 51),
(1, 52),
(1, 53),
(1, 54),
(1, 55),
(1, 56),
(1, 57),
(1, 59),
(1, 62),
(1, 63),
(1, 64),
(1, 67),
(1, 68),
(1, 69),
(1, 70),
(1, 71),
(1, 72),
(1, 73),
(1, 74),
(1, 75),
(1, 76),
(1, 78),
(18, 0),
(27, 0),
(29, 0),
(35, 20),
(35, 24),
(35, 51),
(35, 52),
(35, 79),
(35, 80),
(35, 82),
(35, 84),
(35, 85),
(35, 86),
(35, 87),
(35, 88),
(35, 89),
(35, 90),
(35, 91),
(35, 92),
(35, 93),
(35, 94),
(35, 95),
(35, 96),
(35, 97),
(35, 98),
(35, 99),
(35, 101),
(35, 102),
(35, 103),
(35, 104),
(35, 105),
(35, 106),
(35, 107),
(35, 108),
(35, 109),
(35, 110),
(35, 111),
(35, 112),
(35, 113),
(35, 115),
(35, 116),
(35, 117),
(35, 118),
(35, 119),
(35, 120),
(35, 121),
(35, 122),
(35, 123),
(35, 124),
(35, 125),
(36, 0),
(43, 0),
(44, 0),
(46, 0),
(47, 1),
(47, 59),
(47, 62),
(47, 63),
(47, 64),
(47, 78),
(49, 0),
(50, 0),
(51, 0),
(52, 0),
(53, 0),
(57, 0),
(58, 1),
(59, 0),
(60, 58),
(61, 58),
(64, 0),
(67, 0),
(68, 1),
(68, 59),
(69, 0),
(70, 1),
(71, 0),
(72, 0),
(73, 0),
(74, 1),
(75, 1),
(76, 0),
(77, 1),
(78, 1),
(79, 0),
(81, 0),
(82, 0),
(83, 0),
(84, 0),
(85, 1),
(86, 0),
(87, 0),
(88, 0),
(89, 0),
(90, 0),
(91, 0),
(92, 0),
(93, 0),
(94, 0),
(95, 0),
(96, 0),
(97, 0),
(98, 0),
(99, 0),
(100, 0),
(101, 0),
(102, 0),
(103, 0),
(104, 0),
(105, 0),
(106, 0),
(107, 1);

-- --------------------------------------------------------

--
-- Table structure for table `webvn_newsfeeds`
--

CREATE TABLE IF NOT EXISTS `webvn_newsfeeds` (
  `catid` int(11) NOT NULL default '0',
  `id` int(11) NOT NULL auto_increment,
  `name` text NOT NULL,
  `alias` varchar(255) NOT NULL default '',
  `link` text NOT NULL,
  `filename` varchar(200) default NULL,
  `published` tinyint(1) NOT NULL default '0',
  `numarticles` int(11) unsigned NOT NULL default '1',
  `cache_time` int(11) unsigned NOT NULL default '3600',
  `checked_out` tinyint(3) unsigned NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `ordering` int(11) NOT NULL default '0',
  `rtl` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `published` (`published`),
  KEY `catid` (`catid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `webvn_newsfeeds`
--

INSERT INTO `webvn_newsfeeds` (`catid`, `id`, `name`, `alias`, `link`, `filename`, `published`, `numarticles`, `cache_time`, `checked_out`, `checked_out_time`, `ordering`, `rtl`) VALUES
(4, 1, 'Joomla! Announcements', 'joomla-official-news', 'http://feeds.joomla.org/JoomlaAnnouncements', '', 1, 5, 3600, 0, '0000-00-00 00:00:00', 1, 0),
(4, 2, 'Joomla! Core Team Blog', 'joomla-core-team-blog', 'http://feeds.joomla.org/JoomlaCommunityCoreTeamBlog', '', 1, 5, 3600, 0, '0000-00-00 00:00:00', 2, 0),
(4, 3, 'Joomla! Community Magazine', 'joomla-community-magazine', 'http://feeds.joomla.org/JoomlaMagazine', '', 1, 20, 3600, 0, '0000-00-00 00:00:00', 3, 0),
(4, 4, 'Joomla! Developer News', 'joomla-developer-news', 'http://feeds.joomla.org/JoomlaDeveloper', '', 1, 5, 3600, 0, '0000-00-00 00:00:00', 4, 0),
(4, 5, 'Joomla! Security News', 'joomla-security-news', 'http://feeds.joomla.org/JoomlaSecurityNews', '', 1, 5, 3600, 0, '0000-00-00 00:00:00', 5, 0),
(5, 6, 'Free Software Foundation Blogs', 'free-software-foundation-blogs', 'http://www.fsf.org/blogs/RSS', NULL, 1, 5, 3600, 0, '0000-00-00 00:00:00', 4, 0),
(5, 7, 'Free Software Foundation', 'free-software-foundation', 'http://www.fsf.org/news/RSS', NULL, 1, 5, 3600, 62, '2008-09-14 00:24:25', 3, 0),
(5, 8, 'Software Freedom Law Center Blog', 'software-freedom-law-center-blog', 'http://www.softwarefreedom.org/feeds/blog/', NULL, 1, 5, 3600, 0, '0000-00-00 00:00:00', 2, 0),
(5, 9, 'Software Freedom Law Center News', 'software-freedom-law-center', 'http://www.softwarefreedom.org/feeds/news/', NULL, 1, 5, 3600, 0, '0000-00-00 00:00:00', 1, 0),
(5, 10, 'Open Source Initiative Blog', 'open-source-initiative-blog', 'http://www.opensource.org/blog/feed', NULL, 1, 5, 3600, 0, '0000-00-00 00:00:00', 5, 0),
(6, 11, 'PHP News and Announcements', 'php-news-and-announcements', 'http://www.php.net/feed.atom', NULL, 1, 5, 3600, 62, '2008-09-14 00:25:37', 1, 0),
(6, 12, 'Planet MySQL', 'planet-mysql', 'http://www.planetmysql.org/rss20.xml', NULL, 1, 5, 3600, 62, '2008-09-14 00:25:51', 2, 0),
(6, 13, 'Linux Foundation Announcements', 'linux-foundation-announcements', 'http://www.linuxfoundation.org/press/rss20.xml', NULL, 1, 5, 3600, 62, '2008-09-14 00:26:11', 3, 0),
(6, 14, 'Mootools Blog', 'mootools-blog', 'http://feeds.feedburner.com/mootools-blog', NULL, 1, 5, 3600, 62, '2008-09-14 00:26:51', 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `webvn_plugins`
--

CREATE TABLE IF NOT EXISTS `webvn_plugins` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL default '',
  `element` varchar(100) NOT NULL default '',
  `folder` varchar(100) NOT NULL default '',
  `access` tinyint(3) unsigned NOT NULL default '0',
  `ordering` int(11) NOT NULL default '0',
  `published` tinyint(3) NOT NULL default '0',
  `iscore` tinyint(3) NOT NULL default '0',
  `client_id` tinyint(3) NOT NULL default '0',
  `checked_out` int(11) unsigned NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `params` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `idx_folder` (`published`,`client_id`,`access`,`folder`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `webvn_plugins`
--

INSERT INTO `webvn_plugins` (`id`, `name`, `element`, `folder`, `access`, `ordering`, `published`, `iscore`, `client_id`, `checked_out`, `checked_out_time`, `params`) VALUES
(1, 'Authentication - Joomla', 'joomla', 'authentication', 0, 1, 1, 1, 0, 0, '0000-00-00 00:00:00', ''),
(2, 'Authentication - LDAP', 'ldap', 'authentication', 0, 2, 0, 1, 0, 0, '0000-00-00 00:00:00', 'host=\nport=389\nuse_ldapV3=0\nnegotiate_tls=0\nno_referrals=0\nauth_method=bind\nbase_dn=\nsearch_string=\nusers_dn=\nusername=\npassword=\nldap_fullname=fullName\nldap_email=mail\nldap_uid=uid\n\n'),
(3, 'Authentication - GMail', 'gmail', 'authentication', 0, 4, 0, 0, 0, 0, '0000-00-00 00:00:00', ''),
(4, 'Authentication - OpenID', 'openid', 'authentication', 0, 3, 0, 0, 0, 0, '0000-00-00 00:00:00', ''),
(5, 'User - Joomla!', 'joomla', 'user', 0, 0, 1, 0, 0, 0, '0000-00-00 00:00:00', 'autoregister=1\n\n'),
(6, 'Search - Content', 'content', 'search', 0, 3, 1, 1, 0, 0, '0000-00-00 00:00:00', 'search_limit=50\nsearch_content=1\nsearch_uncategorised=1\nsearch_archived=1\n\n'),
(7, 'Search - Contacts', 'contacts', 'search', 0, 5, 1, 1, 0, 0, '0000-00-00 00:00:00', 'search_limit=50\n\n'),
(8, 'Search - Categories', 'categories', 'search', 0, 6, 1, 0, 0, 0, '0000-00-00 00:00:00', 'search_limit=50\n\n'),
(9, 'Search - Sections', 'sections', 'search', 0, 7, 1, 0, 0, 0, '0000-00-00 00:00:00', 'search_limit=50\n\n'),
(10, 'Search - Newsfeeds', 'newsfeeds', 'search', 0, 8, 1, 0, 0, 0, '0000-00-00 00:00:00', 'search_limit=50\n\n'),
(11, 'Search - Weblinks', 'weblinks', 'search', 0, 4, 1, 1, 0, 0, '0000-00-00 00:00:00', 'search_limit=50\n\n'),
(12, 'Content - Pagebreak', 'pagebreak', 'content', 0, 10000, 1, 1, 0, 0, '0000-00-00 00:00:00', 'enabled=1\ntitle=1\nmultipage_toc=1\nshowall=1\n\n'),
(13, 'Content - Rating', 'vote', 'content', 0, 4, 1, 1, 0, 0, '0000-00-00 00:00:00', ''),
(14, 'Content - Email Cloaking', 'emailcloak', 'content', 0, 5, 1, 0, 0, 0, '0000-00-00 00:00:00', 'mode=1\n\n'),
(15, 'Content - Code Hightlighter (GeSHi)', 'geshi', 'content', 0, 5, 0, 0, 0, 0, '0000-00-00 00:00:00', ''),
(16, 'Content - Load Module', 'loadmodule', 'content', 0, 6, 1, 0, 0, 0, '0000-00-00 00:00:00', 'enabled=1\nstyle=0\n\n'),
(17, 'Content - Page Navigation', 'pagenavigation', 'content', 0, 2, 1, 1, 0, 0, '0000-00-00 00:00:00', 'position=1\n\n'),
(18, 'Editor - No Editor', 'none', 'editors', 0, 0, 1, 1, 0, 0, '0000-00-00 00:00:00', ''),
(19, 'Editor - TinyMCE', 'tinymce', 'editors', 0, 0, 1, 1, 0, 0, '0000-00-00 00:00:00', 'mode=extended\nskin=0\ncompressed=0\ncleanup_startup=0\ncleanup_save=2\nentity_encoding=raw\nlang_mode=0\nlang_code=en\ntext_direction=ltr\ncontent_css=1\ncontent_css_custom=\nrelative_urls=1\nnewlines=0\ninvalid_elements=applet\nextended_elements=\ntoolbar=top\ntoolbar_align=left\nhtml_height=550\nhtml_width=750\nelement_path=1\nfonts=1\npaste=1\nsearchreplace=1\ninsertdate=1\nformat_date=%Y-%m-%d\ninserttime=1\nformat_time=%H:%M:%S\ncolors=1\ntable=1\nsmilies=1\nmedia=1\nhr=1\ndirectionality=1\nfullscreen=1\nstyle=1\nlayer=1\nxhtmlxtras=1\nvisualchars=1\nnonbreaking=1\nblockquote=1\ntemplate=0\nadvimage=1\nadvlink=1\nautosave=1\ncontextmenu=1\ninlinepopups=1\nsafari=1\ncustom_plugin=\ncustom_button=\n\n'),
(20, 'Editor - XStandard Lite 2.0', 'xstandard', 'editors', 0, 0, 0, 1, 0, 0, '0000-00-00 00:00:00', ''),
(21, 'Editor Button - Image', 'image', 'editors-xtd', 0, 0, 1, 0, 0, 0, '0000-00-00 00:00:00', ''),
(22, 'Editor Button - Pagebreak', 'pagebreak', 'editors-xtd', 0, 0, 1, 0, 0, 0, '0000-00-00 00:00:00', ''),
(23, 'Editor Button - Readmore', 'readmore', 'editors-xtd', 0, 0, 1, 0, 0, 0, '0000-00-00 00:00:00', ''),
(24, 'XML-RPC - Joomla', 'joomla', 'xmlrpc', 0, 7, 0, 1, 0, 0, '0000-00-00 00:00:00', ''),
(25, 'XML-RPC - Blogger API', 'blogger', 'xmlrpc', 0, 7, 0, 1, 0, 0, '0000-00-00 00:00:00', 'catid=1\nsectionid=0\n\n'),
(27, 'System - SEF', 'sef', 'system', 0, 1, 1, 0, 0, 0, '0000-00-00 00:00:00', ''),
(28, 'System - Debug', 'debug', 'system', 0, 2, 1, 0, 0, 0, '0000-00-00 00:00:00', 'queries=1\nmemory=1\nlangauge=1\n\n'),
(29, 'System - Legacy', 'legacy', 'system', 0, 3, 0, 1, 0, 0, '0000-00-00 00:00:00', 'route=0\n\n'),
(30, 'System - Cache', 'cache', 'system', 0, 4, 0, 1, 0, 0, '0000-00-00 00:00:00', 'browsercache=0\ncachetime=15\n\n'),
(31, 'System - Log', 'log', 'system', 0, 5, 0, 1, 0, 0, '0000-00-00 00:00:00', ''),
(32, 'System - Remember Me', 'remember', 'system', 0, 6, 1, 1, 0, 0, '0000-00-00 00:00:00', ''),
(33, 'System - Backlink', 'backlink', 'system', 0, 7, 0, 1, 0, 0, '0000-00-00 00:00:00', ''),
(34, 'System - Mootools Upgrade', 'mtupgrade', 'system', 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00', ''),
(35, 'System - jsecure', 'jsecure', 'system', 0, 7, 1, 0, 0, 0, '0000-00-00 00:00:00', ''),
(36, 'System - Vinaora Visitors Counter', 'vvisit_counter', 'system', 0, -100, 1, 0, 0, 0, '0000-00-00 00:00:00', ''),
(37, 'Search - K2', 'k2', 'search', 0, 2, 1, 0, 0, 0, '0000-00-00 00:00:00', 'search_limit=50\n'),
(38, 'System - K2', 'k2', 'system', 0, 0, 1, 0, 0, 0, '0000-00-00 00:00:00', ''),
(39, 'User - K2', 'k2', 'user', 0, 0, 1, 0, 0, 0, '0000-00-00 00:00:00', ''),
(40, 'Search - Virtuemart', 'virtuemart.search', 'search', 0, 1, 1, 0, 0, 0, '0000-00-00 00:00:00', 'density_flag=1\nname_flag=1\nsku_flag=1\ndesc_flag=1\nsdesc_flag=1\nurl_flag=1\nreview_flag=1\nmanufacturer_flag=1\ncategory_flag=1\nparent_filter=both\n'),
(41, 'Tabs & Sliders', 'jw_ts', 'content', 0, 0, 1, 0, 0, 0, '0000-00-00 00:00:00', 'template=Simplistic\ntabContentHeight=\n\n'),
(42, 'System - ARTIO JoomSEF', 'joomsef', 'system', 0, -110, 1, 0, 0, 0, '0000-00-00 00:00:00', ''),
(43, 'System - ARTIO JoomSEF Google Analytics', 'joomsefgoogle', 'system', 0, 0, 1, 0, 0, 0, '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `webvn_polls`
--

CREATE TABLE IF NOT EXISTS `webvn_polls` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `title` varchar(255) NOT NULL default '',
  `alias` varchar(255) NOT NULL default '',
  `voters` int(9) NOT NULL default '0',
  `checked_out` int(11) NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `published` tinyint(1) NOT NULL default '0',
  `access` int(11) NOT NULL default '0',
  `lag` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `webvn_polls`
--

INSERT INTO `webvn_polls` (`id`, `title`, `alias`, `voters`, `checked_out`, `checked_out_time`, `published`, `access`, `lag`) VALUES
(14, 'Joomla! is used for?', 'joomla-is-used-for', 11, 0, '0000-00-00 00:00:00', 1, 0, 86400);

-- --------------------------------------------------------

--
-- Table structure for table `webvn_poll_data`
--

CREATE TABLE IF NOT EXISTS `webvn_poll_data` (
  `id` int(11) NOT NULL auto_increment,
  `pollid` int(11) NOT NULL default '0',
  `text` text NOT NULL,
  `hits` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `pollid` (`pollid`,`text`(1))
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `webvn_poll_data`
--

INSERT INTO `webvn_poll_data` (`id`, `pollid`, `text`, `hits`) VALUES
(1, 14, 'Community Sites', 2),
(2, 14, 'Public Brand Sites', 3),
(3, 14, 'eCommerce', 1),
(4, 14, 'Blogs', 0),
(5, 14, 'Intranets', 0),
(6, 14, 'Photo and Media Sites', 2),
(7, 14, 'All of the Above!', 3),
(8, 14, '', 0),
(9, 14, '', 0),
(10, 14, '', 0),
(11, 14, '', 0),
(12, 14, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `webvn_poll_date`
--

CREATE TABLE IF NOT EXISTS `webvn_poll_date` (
  `id` bigint(20) NOT NULL auto_increment,
  `date` datetime NOT NULL default '0000-00-00 00:00:00',
  `vote_id` int(11) NOT NULL default '0',
  `poll_id` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `poll_id` (`poll_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `webvn_poll_date`
--

INSERT INTO `webvn_poll_date` (`id`, `date`, `vote_id`, `poll_id`) VALUES
(1, '2006-10-09 13:01:58', 1, 14),
(2, '2006-10-10 15:19:43', 7, 14),
(3, '2006-10-11 11:08:16', 7, 14),
(4, '2006-10-11 15:02:26', 2, 14),
(5, '2006-10-11 15:43:03', 7, 14),
(6, '2006-10-11 15:43:38', 7, 14),
(7, '2006-10-12 00:51:13', 2, 14),
(8, '2007-05-10 19:12:29', 3, 14),
(9, '2007-05-14 14:18:00', 6, 14),
(10, '2007-06-10 15:20:29', 6, 14),
(11, '2007-07-03 12:37:53', 2, 14);

-- --------------------------------------------------------

--
-- Table structure for table `webvn_poll_menu`
--

CREATE TABLE IF NOT EXISTS `webvn_poll_menu` (
  `pollid` int(11) NOT NULL default '0',
  `menuid` int(11) NOT NULL default '0',
  PRIMARY KEY  (`pollid`,`menuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `webvn_poll_menu`
--


-- --------------------------------------------------------

--
-- Table structure for table `webvn_sections`
--

CREATE TABLE IF NOT EXISTS `webvn_sections` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(255) NOT NULL default '',
  `name` varchar(255) NOT NULL default '',
  `alias` varchar(255) NOT NULL default '',
  `image` text NOT NULL,
  `scope` varchar(50) NOT NULL default '',
  `image_position` varchar(30) NOT NULL default '',
  `description` text NOT NULL,
  `published` tinyint(1) NOT NULL default '0',
  `checked_out` int(11) unsigned NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `ordering` int(11) NOT NULL default '0',
  `access` tinyint(3) unsigned NOT NULL default '0',
  `count` int(11) NOT NULL default '0',
  `params` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `idx_scope` (`scope`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `webvn_sections`
--

INSERT INTO `webvn_sections` (`id`, `title`, `name`, `alias`, `image`, `scope`, `image_position`, `description`, `published`, `checked_out`, `checked_out_time`, `ordering`, `access`, `count`, `params`) VALUES
(4, 'About', '', 'about', '', 'content', 'left', '', 1, 0, '0000-00-00 00:00:00', 2, 0, 21, '');

-- --------------------------------------------------------

--
-- Table structure for table `webvn_sefaliases`
--

CREATE TABLE IF NOT EXISTS `webvn_sefaliases` (
  `id` int(11) NOT NULL auto_increment,
  `alias` varchar(255) NOT NULL default '',
  `vars` text NOT NULL,
  `url` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `alias` (`alias`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `webvn_sefaliases`
--


-- --------------------------------------------------------

--
-- Table structure for table `webvn_sefexts`
--

CREATE TABLE IF NOT EXISTS `webvn_sefexts` (
  `id` int(11) NOT NULL auto_increment,
  `file` varchar(100) NOT NULL,
  `filters` text,
  `params` text,
  `title` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `webvn_sefexts`
--

INSERT INTO `webvn_sefexts` (`id`, `file`, `filters`, `params`, `title`) VALUES
(1, 'com_wrapper.xml', NULL, 'ignoreSource=0\nitemid=1\noverrideId=', NULL),
(2, 'com_content.xml', '', 'pagination=0\nmultipagetitles=1\nguessId=0\ncompatibility=0\nshow_category=1\nshow_section=0\ntitle_alias=global\ncategory_alias=global\nsection_alias=global\nadd_layout=0\ndef_layout=default\ngooglenewsnum=0\ndigits=3\ndateformat=ddmm\niddatesep=\niddateorder=0\nnumberpos=1\nmeta_titlecat=0\nmeta_desc=1\ndesc_len=150\nmeta_keys=1\nkeys_minlen=3\nkeys_count=8\nblacklist=a, able, about, above, abroad, according, accordingly, across, actually, adj, after, afterwards, again, against, ago, ahead, ain''t, all, allow, allows, almost, alone, along, alongside, already, also, although, always, am, amid, amidst, among, amongst, an, and, another, any, anybody, anyhow, anyone, anything, anyway, anyways, anywhere, apart, appear, appreciate, appropriate, are, aren''t, around, as, a''s, aside, ask, asking, associated, at, available, away, awfully, b, back, backward, backwards, be, became, because, become, becomes, becoming, been, before, beforehand, begin, behind, being, believe, below, beside, besides, best, better, between, beyond, both, brief, but, by, c, came, can, cannot, cant, can''t, caption, cause, causes, certain, certainly, changes, clearly, c''mon, co, co., com, come, comes, concerning, consequently, consider, considering, contain, containing, contains, corresponding, could, couldn''t, course, c''s, currently, d, dare, daren''t, definitely, described, despite, did, didn''t, different, directly, do, does, doesn''t, doing, done, don''t, down, downwards, during, e, each, edu, eg, eight, eighty, either, else, elsewhere, end, ending, enough, entirely, especially, et, etc, even, ever, evermore, every, everybody, everyone, everything, everywhere, ex, exactly, example, except, f, fairly, far, farther, few, fewer, fifth, first, five, followed, following, follows, for, forever, former, formerly, forth, forward, found, four, from, further, furthermore, g, get, gets, getting, given, gives, go, goes, going, gone, got, gotten, greetings, h, had, hadn''t, half, happens, hardly, has, hasn''t, have, haven''t, having, he, he''d, he''ll, hello, help, , hence, her, here, hereafter, hereby, herein, here''s, hereupon, hers, herself, he''s, hi, him, himself, his, hither, hopefully, how, howbeit, however, hundred, i, i''d, ie, if, ignored, i''ll, i''m, immediate, in, inasmuch, inc, inc., indeed, indicate, indicated, indicates, inner, inside, insofar, instead, into, inward, is, isn''t, it, it''d, it''ll, its, it''s, itself, i''ve, j, just, k, keep, keeps, kept, know, known, knows, l, last, lately, later, latter, latterly, least, less, lest, let, let''s, like, liked, likely, likewise, little, look, looking, looks, low, lower, ltd, m, made, mainly, make, makes, many, may, maybe, mayn''t, me, mean, meantime, meanwhile, merely, might, mightn''t, mine, minus, miss, more, moreover, most, mostly, mr, mrs, much, must, mustn''t, my, myself, n, name, namely, nd, near, nearly, necessary, need, needn''t, needs, neither, never, neverf, neverless, nevertheless, new, next, nine, ninety, no, nobody, non, none, nonetheless, noone, no-one, nor, normally, not, nothing, notwithstanding, novel, now, nowhere, o, obviously, of, off, often, oh, ok, okay, old, on, once, one, ones, one''s, only, onto, opposite, or, other, others, otherwise, ought, oughtn''t, our, ours, ourselves, out, outside, over, overall, own, p, particular, particularly, past, per, perhaps, placed, please, plus, possible, presumably, probably, provided, provides, q, que, quite, qv, r, rather, rd, re, really, reasonably, recent, recently, regarding, regardless, regards, relatively, respectively, right, round, s, said, same, saw, say, saying, says, second, secondly, , see, seeing, seem, seemed, seeming, seems, seen, self, selves, sensible, sent, serious, seriously, seven, several, shall, shan''t, she, she''d, she''ll, she''s, should, shouldn''t, since, six, so, some, somebody, someday, somehow, someone, something, sometime, sometimes, somewhat, somewhere, soon, sorry, specified, specify, specifying, still, sub, such, sup, sure, t, take, taken, taking, tell, tends, th, than, thank, thanks, thanx, that, that''ll, thats, that''s, that''ve, the, their, theirs, them, themselves, then, thence, there, thereafter, thereby, there''d, therefore, therein, there''ll, there''re, theres, there''s, thereupon, there''ve, these, they, they''d, they''ll, they''re, they''ve, thing, things, think, third, thirty, this, thorough, thoroughly, those, though, three, through, throughout, thru, thus, till, to, together, too, took, toward, towards, tried, tries, truly, try, trying, t''s, twice, two, u, un, under, underneath, undoing, unfortunately, unless, unlike, unlikely, until, unto, up, upon, upwards, us, use, used, useful, uses, using, usually, v, value, various, versus, very, via, viz, vs, w, want, wants, was, wasn''t, way, we, we''d, welcome, well, we''ll, went, were, we''re, weren''t, we''ve, what, whatever, what''ll, what''s, what''ve, when, whence, whenever, where, whereafter, whereas, whereby, wherein, where''s, whereupon, wherever, whether, which, whichever, while, whilst, whither, who, who''d, whoever, whole, who''ll, whom, whomever, who''s, whose, why, will, willing, wish, with, within, without, wonder, won''t, would, wouldn''t, x, y, yes, yet, you, you''d, you''ll, your, you''re, yours, yourself, yourselves, you''ve, z, zero\nnumberDuplicates=2\nautoCanonical=2\nignoreSource=2\nitemid=0\noverrideId=\nignoreItemids=\nuseSitename=1\ncustomSitename=\npageLimit=\nhandling=0\nshowMenuTitle=1\ncustomMenuTitle=\ncustomNonSef=\nstopRule=\ndownloadId=\n\n', ''),
(3, 'com_k2.xml', NULL, NULL, NULL),
(4, 'com_virtuemart.xml', '+^[a-zA-Z0-9._-]*$=page,flypage\n+^[0-9]*$=product_id,category_id,manufacturer_id', 'acceptVars=product_id; category_id; manufacturer_id; flypage; page', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `webvn_sefexttexts`
--

CREATE TABLE IF NOT EXISTS `webvn_sefexttexts` (
  `id` int(11) NOT NULL auto_increment,
  `extension` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `value` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `webvn_sefexttexts`
--

INSERT INTO `webvn_sefexttexts` (`id`, `extension`, `name`, `value`) VALUES
(1, 'com_virtuemart', '_PHPSHOP_LIST_ALL_PRODUCTS', 'List All Products'),
(2, 'com_virtuemart', '_PHPSHOP_DOWNLOADS_TITLE', 'Download Area'),
(3, 'com_virtuemart', '_PHPSHOP_ADVANCED_SEARCH', 'Advanced Search'),
(4, 'com_virtuemart', '_PHPSHOP_CART_TITLE', 'Cart'),
(5, 'com_virtuemart', '_PHPSHOP_REGISTER_TITLE', 'Register'),
(6, 'com_virtuemart', '_PHPSHOP_FEED', 'Feed'),
(7, 'com_virtuemart', '_PHPSHOP_PARAMETER_SEARCH', 'Parameter Search'),
(8, 'com_virtuemart', '_PHPSHOP_ASK', 'Ask'),
(9, 'com_virtuemart', '_PHPSHOP_REGISTER_TOS', 'Terms of Service'),
(10, 'com_virtuemart', '_PHPSHOP_SAVED_CART', 'Saved cart'),
(11, 'com_virtuemart', '_PHPSHOP_CHECKOUT', 'Checkout'),
(12, 'com_virtuemart', '_PHPSHOP_RESULT', 'Result'),
(13, 'com_virtuemart', '_PHPSHOP_ACCOUNT', 'Account'),
(14, 'com_virtuemart', '_PHPSHOP_SHIPPING', 'Shipping'),
(15, 'com_virtuemart', '_PHPSHOP_PRODUCT', 'Prodct'),
(16, 'com_virtuemart', '_PHPSHOP_ORDER', 'Order'),
(17, 'com_virtuemart', '_PHPSHOP_FORM', 'Form'),
(18, 'com_virtuemart', '_PHPSHOP_WAITLIST', 'Waiting List');

-- --------------------------------------------------------

--
-- Table structure for table `webvn_seflog`
--

CREATE TABLE IF NOT EXISTS `webvn_seflog` (
  `id` int(11) NOT NULL auto_increment,
  `time` datetime NOT NULL,
  `message` varchar(255) default NULL,
  `url` varchar(255) NOT NULL default '',
  `component` varchar(255) default NULL,
  `page` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `webvn_seflog`
--


-- --------------------------------------------------------

--
-- Table structure for table `webvn_sefmoved`
--

CREATE TABLE IF NOT EXISTS `webvn_sefmoved` (
  `id` int(11) NOT NULL auto_increment,
  `old` varchar(255) NOT NULL,
  `new` varchar(255) NOT NULL,
  `lastHit` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`id`),
  KEY `old` (`old`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `webvn_sefmoved`
--


-- --------------------------------------------------------

--
-- Table structure for table `webvn_sefurls`
--

CREATE TABLE IF NOT EXISTS `webvn_sefurls` (
  `id` int(11) NOT NULL auto_increment,
  `cpt` int(11) NOT NULL default '0',
  `sefurl` varchar(255) NOT NULL,
  `origurl` varchar(255) character set utf8 collate utf8_bin NOT NULL,
  `Itemid` varchar(20) default NULL,
  `metadesc` varchar(255) default '',
  `metakey` varchar(255) default '',
  `metatitle` varchar(255) default '',
  `metalang` varchar(30) default '',
  `metarobots` varchar(30) default '',
  `metagoogle` varchar(30) default '',
  `metacustom` text,
  `canonicallink` varchar(255) default '',
  `dateadd` date NOT NULL default '0000-00-00',
  `priority` int(11) NOT NULL default '0',
  `trace` text,
  `enabled` tinyint(1) NOT NULL default '1',
  `locked` tinyint(1) NOT NULL default '0',
  `sef` tinyint(1) NOT NULL default '1',
  `sm_indexed` tinyint(1) NOT NULL default '0',
  `sm_date` date NOT NULL default '0000-00-00',
  `sm_frequency` varchar(20) NOT NULL default 'weekly',
  `sm_priority` varchar(10) NOT NULL default '0.5',
  `trashed` tinyint(1) NOT NULL default '0',
  `flag` tinyint(1) NOT NULL default '0',
  `host` varchar(255) NOT NULL default '',
  `showsitename` int(1) NOT NULL default '3',
  PRIMARY KEY  (`id`),
  KEY `sefurl` (`sefurl`),
  KEY `origurl` (`origurl`,`Itemid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=97 ;

--
-- Dumping data for table `webvn_sefurls`
--

INSERT INTO `webvn_sefurls` (`id`, `cpt`, `sefurl`, `origurl`, `Itemid`, `metadesc`, `metakey`, `metatitle`, `metalang`, `metarobots`, `metagoogle`, `metacustom`, `canonicallink`, `dateadd`, `priority`, `trace`, `enabled`, `locked`, `sef`, `sm_indexed`, `sm_date`, `sm_frequency`, `sm_priority`, `trashed`, `flag`, `host`, `showsitename`) VALUES
(1, 0, 'rss.html', 'index.php?option=com_content&format=feed&type=rss&view=frontpage', '1', '', '', '', '', '', '', NULL, '', '0000-00-00', 90, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(2, 0, 'atom.html', 'index.php?option=com_content&format=feed&type=atom&view=frontpage', '1', '', '', '', '', '', '', NULL, '', '0000-00-00', 90, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(3, 0, 'Samsung/Samsung/Samsung-I9003-Galaxy-SL.html', 'index.php?option=com_virtuemart&category_id=3&flypage=flypage.tpl&manufacturer_id=1&page=shop.product_details&product_id=29', '89', '', '', '', '', '', '', NULL, '', '0000-00-00', 15, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(4, 0, 'Dell/Cart/Samsung-I9003-Galaxy-SL.html', 'index.php?option=com_virtuemart&category_id=11&func=cartAdd&page=shop.cart&product_id=29', '95', '', '', '', '', '', '', NULL, '', '0000-00-00', 90, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(5, 0, 'Samsung/Samsung/Samsung-B5722.html', 'index.php?option=com_virtuemart&category_id=3&flypage=flypage.tpl&manufacturer_id=1&page=shop.product_details&product_id=30', '89', '', '', '', '', '', '', NULL, '', '0000-00-00', 15, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(6, 0, 'Dell/Cart/Samsung-B5722.html', 'index.php?option=com_virtuemart&category_id=11&func=cartAdd&page=shop.cart&product_id=30', '95', '', '', '', '', '', '', NULL, '', '0000-00-00', 90, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(7, 0, 'Philips/Philips/Philips-X710.html', 'index.php?option=com_virtuemart&category_id=7&flypage=flypage.tpl&manufacturer_id=1&page=shop.product_details&product_id=36', '91', '', '', '', '', '', '', NULL, '', '0000-00-00', 15, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(8, 0, 'Dell/Cart/Philips-X710.html', 'index.php?option=com_virtuemart&category_id=11&func=cartAdd&page=shop.cart&product_id=36', '95', '', '', '', '', '', '', NULL, '', '0000-00-00', 90, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(9, 0, 'LG/LG/LG1.html', 'index.php?option=com_virtuemart&category_id=8&flypage=flypage.tpl&manufacturer_id=1&page=shop.product_details&product_id=40', '92', '', '', '', '', '', '', NULL, '', '0000-00-00', 15, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(10, 0, 'Dell/Dell/LG1/Ask/Goi-de-biet-gia-LG1.html', 'index.php?option=com_virtuemart&category_id=11&manufacturer_id=1&page=shop.ask&product_id=40&subject=Gọi để biết giá: LG1', '95', '', '', '', '', '', '', NULL, '', '0000-00-00', 90, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(11, 0, 'LG/LG/LG-KU990.html', 'index.php?option=com_virtuemart&category_id=8&flypage=flypage.tpl&manufacturer_id=1&page=shop.product_details&product_id=38', '92', '', '', '', '', '', '', NULL, '', '0000-00-00', 15, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(12, 0, 'Dell/Cart/LG-KU990.html', 'index.php?option=com_virtuemart&category_id=11&func=cartAdd&page=shop.cart&product_id=38', '95', '', '', '', '', '', '', NULL, '', '0000-00-00', 90, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(13, 7, 'iPhone-iPad-iPod/iPhone-iPad-iPod/Iphone-4-32GB-Quoc-Te-Moi-100.html', 'index.php?option=com_virtuemart&category_id=1&flypage=flypage.tpl&manufacturer_id=1&page=shop.product_details&product_id=17', '85', 'Mã s?n ph?m: Iphone 4 32GB Apple FaceTime - Phone calls like you''ve never seen before. Restina Display - 960 by 640 by Wow. Multitasking. Give everything your individed attention. HD Video Recording - Life looks better in HD. H?p bao g?m: Iphone 4', 'iphone, 32gb, bao, g?m, h?p, recording, phiên, video', '', '', '', '', NULL, '', '0000-00-00', 15, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(14, 0, 'Dell/Cart/Iphone-4-32GB-Quoc-Te-Moi-100.html', 'index.php?option=com_virtuemart&category_id=11&func=cartAdd&page=shop.cart&product_id=17', '95', '', '', '', '', '', '', NULL, '', '0000-00-00', 90, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(15, 1, 'HTC/HTC/HTC-Desire-HD.html', 'index.php?option=com_virtuemart&category_id=2&flypage=flypage.tpl&manufacturer_id=1&page=shop.product_details&product_id=20', '86', '', '', '', '', '', '', NULL, '', '0000-00-00', 15, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(16, 0, 'Dell/Cart/HTC-Desire-HD.html', 'index.php?option=com_virtuemart&category_id=11&func=cartAdd&page=shop.cart&product_id=20', '95', '', '', '', '', '', '', NULL, '', '0000-00-00', 90, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(17, 3, 'HTC/HTC/HTC-Desire.html', 'index.php?option=com_virtuemart&category_id=2&flypage=flypage.tpl&manufacturer_id=1&page=shop.product_details&product_id=21', '86', '', '', '', '', '', '', NULL, '', '0000-00-00', 15, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(18, 0, 'Dell/Cart/HTC-Desire.html', 'index.php?option=com_virtuemart&category_id=11&func=cartAdd&page=shop.cart&product_id=21', '95', '', '', '', '', '', '', NULL, '', '0000-00-00', 90, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(19, 1, 'iPhone-iPad-iPod/iPhone-iPad-iPod/Apple-iPhone-4-16gb-Quoc-Te-Den.html', 'index.php?option=com_virtuemart&category_id=1&flypage=flypage.tpl&manufacturer_id=1&page=shop.product_details&product_id=19', '85', 'T?i s? ki?n Apple WWDC 2010, t?ng giám ??c ?i?u h? nh Apple, Steve Jobs ?ã chính th?c thông báo r?ng, chi?c iPhone th? h? k? ti?p s? có tên g?i iPhone 4. iPhone 4 ???c gi?i thi?u v?i h?n 100 tính n?ng m?i. M? n hình r?ng 3,5 inch, ?? phân gi?i 960 x', 'iphone, v?i, cho, n?ng, khác, thông, tính, camera', '', '', '', '', NULL, '', '0000-00-00', 15, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(20, 0, 'Dell/Cart/Apple-iPhone-4-16gb-Quoc-Te-Den.html', 'index.php?option=com_virtuemart&category_id=11&func=cartAdd&page=shop.cart&product_id=19', '95', '', '', '', '', '', '', NULL, '', '0000-00-00', 90, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(21, 0, 'HTC/HTC/HTC-HD-7-16Gb.html', 'index.php?option=com_virtuemart&category_id=2&flypage=flypage.tpl&manufacturer_id=1&page=shop.product_details&product_id=22', '86', '', '', '', '', '', '', NULL, '', '0000-00-00', 15, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(22, 0, 'Dell/Cart/HTC-HD-7-16Gb.html', 'index.php?option=com_virtuemart&category_id=11&func=cartAdd&page=shop.cart&product_id=22', '95', '', '', '', '', '', '', NULL, '', '0000-00-00', 90, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(23, 1, 'iPhone-iPad-iPod/iPhone-iPad-iPod/Apple-Ipad-2-16G-3G-Wifi-Black.html', 'index.php?option=com_virtuemart&category_id=1&flypage=flypage.tpl&manufacturer_id=1&page=shop.product_details&product_id=18', '85', '? Ipad 2 m?ng h?n c? iPhone 4, x? lý ?? h?a nhanh g?p 9 l?n, bán ra t? 11/3 v?i giá b?t ??u t? 499 USD... Ông Steve Jobs, CEO c?a Apple b?t ng? xu?t hi?n v? o lúc 1h sáng 3/3 (tính theo gi? Vi?t Nam), t?i s? ki?n do hãng n? y t? ch?c ? San Francisco', 'ipad, v?i, c?a, m?t, jobs, tính, còn, máy', '', '', '', '', NULL, '', '0000-00-00', 15, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(24, 0, 'Dell/Cart/Apple-Ipad-2-16G-3G-Wifi-Black.html', 'index.php?option=com_virtuemart&category_id=11&func=cartAdd&page=shop.cart&product_id=18', '95', '', '', '', '', '', '', NULL, '', '0000-00-00', 90, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(25, 0, 'Dell/Cart.html', 'index.php?option=com_virtuemart&category_id=11&page=shop.cart', '95', '', '', '', '', '', '', NULL, '', '0000-00-00', 90, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(26, 0, 'Phu-kien-cho-Apple.html', 'index.php?option=com_virtuemart', '115', '', '', '', '', '', '', NULL, '', '0000-00-00', 90, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(27, 5, 'iPhone-iPad-iPod/iPhone-iPad-iPod.html', 'index.php?option=com_virtuemart&category_id=1&page=shop.browse', '85', '', '', '', '', '', '', NULL, '', '0000-00-00', 25, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(28, 2, 'HTC/HTC.html', 'index.php?option=com_virtuemart&category_id=2&page=shop.browse', '86', '', '', '', '', '', '', NULL, '', '0000-00-00', 25, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(29, 0, 'Blackberry/Blackberry.html', 'index.php?option=com_virtuemart&category_id=4&page=shop.browse', '87', '', '', '', '', '', '', NULL, '', '0000-00-00', 25, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(30, 0, 'Nokia/Nokia.html', 'index.php?option=com_virtuemart&category_id=5&page=shop.browse', '88', '', '', '', '', '', '', NULL, '', '0000-00-00', 25, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(31, 0, 'Samsung/Samsung.html', 'index.php?option=com_virtuemart&category_id=3&page=shop.browse', '89', '', '', '', '', '', '', NULL, '', '0000-00-00', 25, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(32, 0, 'Sony-Ericsson/Sony-Ericsson.html', 'index.php?option=com_virtuemart&category_id=6&page=shop.browse', '90', '', '', '', '', '', '', NULL, '', '0000-00-00', 25, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(33, 0, 'Philips/Philips.html', 'index.php?option=com_virtuemart&category_id=7&page=shop.browse', '91', '', '', '', '', '', '', NULL, '', '0000-00-00', 25, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(34, 0, 'LG/LG.html', 'index.php?option=com_virtuemart&category_id=8&page=shop.browse', '92', '', '', '', '', '', '', NULL, '', '0000-00-00', 25, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(35, 0, 'Lenovo/Lenovo.html', 'index.php?option=com_virtuemart&category_id=9&page=shop.browse', '93', '', '', '', '', '', '', NULL, '', '0000-00-00', 25, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(36, 0, 'Motorola/Motorola.html', 'index.php?option=com_virtuemart&category_id=10&page=shop.browse', '94', '', '', '', '', '', '', NULL, '', '0000-00-00', 25, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(37, 0, 'Dell/Dell.html', 'index.php?option=com_virtuemart&category_id=11&page=shop.browse', '95', '', '', '', '', '', '', NULL, '', '0000-00-00', 25, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(38, 0, 'Q-Mobile/Q-Mobile.html', 'index.php?option=com_virtuemart&category_id=12&page=shop.browse', '96', '', '', '', '', '', '', NULL, '', '0000-00-00', 25, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(39, 0, 'Alcatel/Alcatel.html', 'index.php?option=com_virtuemart&category_id=13&page=shop.browse', '97', '', '', '', '', '', '', NULL, '', '0000-00-00', 25, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(40, 0, 'Avio/Avio.html', 'index.php?option=com_virtuemart&category_id=14&page=shop.browse', '98', '', '', '', '', '', '', NULL, '', '0000-00-00', 25, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(41, 0, 'iNo/iNo.html', 'index.php?option=com_virtuemart&category_id=15&page=shop.browse', '99', '', '', '', '', '', '', NULL, '', '0000-00-00', 25, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(42, 0, '', 'index.php?option=com_content&view=frontpage', '1', '', '', '', '', '', '', NULL, '', '0000-00-00', 90, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(43, 1, 'Ve-chung-toi/Gioi-thieu.html', 'index.php?option=com_content&catid=36&id=60&view=article', '79', 'Gi?i thi?u...!', 'thi?u, gi?i', '', '', '', '', NULL, '', '0000-00-00', 15, NULL, 1, 0, 1, 1, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(44, 5, 'Tin-tuc/Tin-tuc.html', 'index.php?option=com_k2&id=1&task=category&view=itemlist', '80', '', '', 'Tin t?c', '', '', '', NULL, '', '0000-00-00', 90, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(45, 1, 'Ve-chung-toi/Khuyen-mai.html', 'index.php?option=com_content&catid=36&id=62&view=article', '82', 'Khuy?n mãi...!', 'mãi, khuy?n', '', '', '', '', NULL, '', '0000-00-00', 15, NULL, 1, 0, 1, 1, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(46, 0, 'Ve-chung-toi/Chinh-sach-bao-hanh.html', 'index.php?option=com_content&catid=36&id=63&view=article', '101', 'Chính sách b?o h? nh...!', 'b?o, sách, chính', '', '', '', '', NULL, '', '0000-00-00', 15, NULL, 1, 0, 1, 1, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(47, 1, 'Lien-he/Contacts/Lien-he.html', 'index.php?option=com_contact&id=1&view=contact', '84', 'Contact Details for this Web site', 'site, web, details, contact', '', '', '', '', NULL, '', '0000-00-00', 15, NULL, 1, 0, 1, 1, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(48, 0, 'iPhone-iPad-iPod/iPhone-iPad-iPod/HTC-Desire.html', 'index.php?option=com_virtuemart&category_id=1&flypage=flypage.tpl&manufacturer_id=1&page=shop.product_details&product_id=21', '85', '', '', '', '', '', '', NULL, '', '0000-00-00', 15, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(49, 0, 'iPhone-iPad-iPod/iPhone-iPad-iPod/HTC-Desire-HD.html', 'index.php?option=com_virtuemart&category_id=1&flypage=flypage.tpl&manufacturer_id=1&page=shop.product_details&product_id=20', '85', '', '', '', '', '', '', NULL, '', '0000-00-00', 15, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(50, 0, 'iPhone-iPad-iPod/iPhone-iPad-iPod/HTC-HD-7-16Gb.html', 'index.php?option=com_virtuemart&category_id=1&flypage=flypage.tpl&manufacturer_id=1&page=shop.product_details&product_id=22', '85', '', '', '', '', '', '', NULL, '', '0000-00-00', 15, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(51, 0, 'Dell/Dell/Apple-iPhone-4-16gb-Quoc-Te-Den.html', 'index.php?option=com_virtuemart&category_id=11&flypage=flypage.tpl&manufacturer_id=1&page=shop.product_details&product_id=19', '95', 'T?i s? ki?n Apple WWDC 2010, t?ng giám ??c ?i?u h? nh Apple, Steve Jobs ?ã chính th?c thông báo r?ng, chi?c iPhone th? h? k? ti?p s? có tên g?i iPhone 4. iPhone 4 ???c gi?i thi?u v?i h?n 100 tính n?ng m?i. M? n hình r?ng 3,5 inch, ?? phân gi?i 960 x', 'iphone, v?i, cho, n?ng, khác, thông, tính, camera', '', '', '', '', NULL, '', '0000-00-00', 15, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(52, 0, 'iPhone-iPad-iPod/iPhone-iPad-iPod/Apple-Ipad-2-16G-3G-Wifi-Black/Ask.html', 'index.php?option=com_virtuemart&category_id=1&flypage=flypage.tpl&manufacturer_id=1&page=shop.ask&product_id=18', '85', '', '', '', '', '', '', NULL, '', '0000-00-00', 90, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(53, 0, 'Dell/Dell/HTC-HD-7-16Gb.html', 'index.php?option=com_virtuemart&category_id=11&flypage=flypage.tpl&manufacturer_id=1&page=shop.product_details&product_id=22', '95', '', '', '', '', '', '', NULL, '', '0000-00-00', 15, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(54, 0, 'iPhone-iPad-iPod/iPhone-iPad-iPod/Iphone-4-32GB-Quoc-Te-Moi-100/Ask.html', 'index.php?option=com_virtuemart&category_id=1&flypage=flypage.tpl&manufacturer_id=1&page=shop.ask&product_id=17', '85', '', '', '', '', '', '', NULL, '', '0000-00-00', 90, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(55, 2, 'Tin-tuc/Tin-tuc/4-hang-se-san-xuat-smartphone-Windows-Phones-8-dau-tien.html', 'index.php?option=com_k2&id=2&view=item', '80', 'Có 4 ??n v? xác nh?n s? s?n xu?t máy ch?y Windows Phone 8 l? Nokia, Samsung, HTC v? Huawei. LG l?n n? y ?ã thi?u v?ng trong cu?c ?ua.', 'phone, windows, trong, các, htc, huawei, c?a, cho', '4 hãng s? s?n xu?t smartphone Windows Phones 8 ??u tiên', '', '', '', NULL, '', '0000-00-00', 90, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(56, 3, 'Tin-tuc/Tin-tuc/Nhung-hinh-anh-ve-Windows-Phone-8.html', 'index.php?option=com_k2&id=1&view=item', '80', 'Bên c?nh vi?c h? tr? ph?n c?ng cao c?p h?n, Windows Phone 8 c?ng có nh?ng c?i ti?n v? giao di?n giúp cho h? ?i?u h? nh n? y tr? nên quy?n r? h?n.', 'windows, phone, các, cho, trên, d?ng, microsoft, thông', 'Nh?ng hình ?nh v? Windows Phone 8', '', '', '', NULL, '', '0000-00-00', 90, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(57, 0, 'Tin-tuc/Tin-tuc/feed.html', 'index.php?option=com_k2&format=feed&id=1&task=category&view=itemlist', '80', '', '', 'Tin t?c', '', '', '', NULL, '', '0000-00-00', 90, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(58, 0, 'Tin-tuc/Author/Administrator.html', 'index.php?option=com_k2&id=62&task=user&view=itemlist', '80', 'Administrator', 'administrator', 'Administrator', '', '', '', NULL, '', '0000-00-00', 90, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(59, 0, 'Sony-Ericsson/Sony-Ericsson/SonyEricsson-Satio-Idou-U1.html', 'index.php?option=com_virtuemart&category_id=6&flypage=flypage.tpl&manufacturer_id=1&page=shop.product_details&product_id=34', '90', '', '', '', '', '', '', NULL, '', '0000-00-00', 15, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(60, 0, 'Dell/Cart/SonyEricsson-Satio-Idou-U1.html', 'index.php?option=com_virtuemart&category_id=11&func=cartAdd&page=shop.cart&product_id=34', '95', '', '', '', '', '', '', NULL, '', '0000-00-00', 90, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(61, 0, 'Sony-Ericsson/Sony-Ericsson/Sony-Ericsson-W150i-Yendo.html', 'index.php?option=com_virtuemart&category_id=6&flypage=flypage.tpl&manufacturer_id=1&page=shop.product_details&product_id=32', '90', '', '', '', '', '', '', NULL, '', '0000-00-00', 15, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(62, 0, 'Dell/Cart/Sony-Ericsson-W150i-Yendo.html', 'index.php?option=com_virtuemart&category_id=11&func=cartAdd&page=shop.cart&product_id=32', '95', '', '', '', '', '', '', NULL, '', '0000-00-00', 90, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(63, 0, 'Philips/Philips/Philips-Xenium-X503.html', 'index.php?option=com_virtuemart&category_id=7&flypage=flypage.tpl&manufacturer_id=1&page=shop.product_details&product_id=35', '91', '', '', '', '', '', '', NULL, '', '0000-00-00', 15, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(64, 0, 'Dell/Cart/Philips-Xenium-X503.html', 'index.php?option=com_virtuemart&category_id=11&func=cartAdd&page=shop.cart&product_id=35', '95', '', '', '', '', '', '', NULL, '', '0000-00-00', 90, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(65, 0, 'Nokia/Nokia/Nokia-E7.html', 'index.php?option=com_virtuemart&category_id=5&flypage=flypage.tpl&manufacturer_id=1&page=shop.product_details&product_id=26', '88', '', '', '', '', '', '', NULL, '', '0000-00-00', 15, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(66, 0, 'Dell/Cart/Nokia-E7.html', 'index.php?option=com_virtuemart&category_id=11&func=cartAdd&page=shop.cart&product_id=26', '95', '', '', '', '', '', '', NULL, '', '0000-00-00', 90, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(67, 0, 'Blackberry/Blackberry/BlackBerry-Bold-Touch-9900.html', 'index.php?option=com_virtuemart&category_id=4&flypage=flypage.tpl&manufacturer_id=1&page=shop.product_details&product_id=25', '87', '', '', '', '', '', '', NULL, '', '0000-00-00', 15, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(68, 0, 'Dell/Dell/BlackBerry-Bold-Touch-9900/Ask/Goi-de-biet-gia-BlackBerry-Bold-Touch-9900.html', 'index.php?option=com_virtuemart&category_id=11&manufacturer_id=1&page=shop.ask&product_id=25&subject=Gọi để biết giá: BlackBerry Bold Touch 9900', '95', '', '', '', '', '', '', NULL, '', '0000-00-00', 90, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(69, 0, 'Philips/Philips/Philips-Xenium-F511.html', 'index.php?option=com_virtuemart&category_id=7&flypage=flypage.tpl&manufacturer_id=1&page=shop.product_details&product_id=37', '91', '', '', '', '', '', '', NULL, '', '0000-00-00', 15, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(70, 0, 'Dell/Cart/Philips-Xenium-F511.html', 'index.php?option=com_virtuemart&category_id=11&func=cartAdd&page=shop.cart&product_id=37', '95', '', '', '', '', '', '', NULL, '', '0000-00-00', 90, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(71, 0, 'Sony-Ericsson/Sony-Ericsson/Sony-Eericsson-Gaming.html', 'index.php?option=com_virtuemart&category_id=6&flypage=flypage.tpl&manufacturer_id=1&page=shop.product_details&product_id=33', '90', '', '', '', '', '', '', NULL, '', '0000-00-00', 15, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(72, 0, 'Dell/Dell/Sony-Eericsson-Gaming/Ask/Goi-de-biet-gia-Sony-Eericsson-Gaming.html', 'index.php?option=com_virtuemart&category_id=11&manufacturer_id=1&page=shop.ask&product_id=33&subject=Gọi để biết giá: Sony Eericsson Gaming', '95', '', '', '', '', '', '', NULL, '', '0000-00-00', 90, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(73, 0, 'Dell/Dell/HTC-Desire.html', 'index.php?option=com_virtuemart&category_id=11&flypage=flypage.tpl&manufacturer_id=1&page=shop.product_details&product_id=21', '95', '', '', '', '', '', '', NULL, '', '0000-00-00', 15, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(74, 0, 'HTC/HTC/HTC-Desire-HD/Ask.html', 'index.php?option=com_virtuemart&category_id=2&flypage=flypage.tpl&manufacturer_id=1&page=shop.ask&product_id=20', '86', '', '', '', '', '', '', NULL, '', '0000-00-00', 90, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(75, 0, 'iPhone-iPad-iPod/iPhone-iPad-iPod/1234.html', 'index.php?option=com_virtuemart&category_id=1&flypage=flypage.tpl&manufacturer_id=1&page=shop.product_details&product_id=41', '85', '1243', '1243', '', '', '', '', NULL, '', '0000-00-00', 15, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(76, 0, 'Dell/Dell/1234/Ask/Goi-de-biet-gia-1234.html', 'index.php?option=com_virtuemart&category_id=11&manufacturer_id=1&page=shop.ask&product_id=41&subject=Gọi để biết giá: 1234', '95', '', '', '', '', '', '', NULL, '', '0000-00-00', 90, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(77, 0, 'Samsung/Samsung/Samsung-Star-S5233S.html', 'index.php?option=com_virtuemart&category_id=3&flypage=flypage.tpl&manufacturer_id=1&page=shop.product_details&product_id=31', '89', 'T?NG QUAN M?ng : GSM 850 / 900 / 1800 / 1900 Mhz Ngôn ng? : Ti?ng Anh, Ti?ng Vi?t KÍCH TH??C Kích th??c : 104 x 53 x 11.9 mm Tr?ng l??ng : 94g HI?N TH? M? n hình : TFT, c?m ?ng 262.144 m? u NH?? C CHUÔNG Ki?u chuông : Nh?c Chuông 64 âm s?c, MP3 Rung :', 'g?i, không, ??n, cu?c, chuông, lên, nh?, hình', '', '', '', '', NULL, '', '0000-00-00', 15, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(78, 0, 'Dell/Cart/Samsung-Star-S5233S.html', 'index.php?option=com_virtuemart&category_id=11&func=cartAdd&page=shop.cart&product_id=31', '95', '', '', '', '', '', '', NULL, '', '0000-00-00', 90, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(79, 2, 'Nokia/Nokia/Nokia-8800-Carbon-Arte.html', 'index.php?option=com_virtuemart&category_id=5&flypage=flypage.tpl&manufacturer_id=1&page=shop.product_details&product_id=27', '88', 'T?ng quan M?ng 2G GSM? 900 / 1800 / 1900 M?ng 3G UMTS 2100 Hi?n tr?ng ?ang có h? ng Kích th??c Kích th??c 109 x 45.6 x 14.6 mm, 65 cc Tr?ng l??ng 150g M? n hình Ki?u M? n hình OLED, 16 tri?u m? u 240 x 320 pixels Âm thanh Ki?u Âm thanh ?a âm, MP3 Loa ngo', 'cu?c, g?i, ??n, pin, mp3, ki?u, pixels, thanh', '', '', '', '', NULL, '', '0000-00-00', 15, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(80, 0, 'Dell/Cart/Nokia-8800-Carbon-Arte.html', 'index.php?option=com_virtuemart&category_id=11&func=cartAdd&page=shop.cart&product_id=27', '95', '', '', '', '', '', '', NULL, '', '0000-00-00', 90, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(81, 0, 'Blackberry/Blackberry/BlackBerry-Bold-9780-black-Brandnew.html', 'index.php?option=com_virtuemart&category_id=4&flypage=flypage.tpl&manufacturer_id=1&page=shop.product_details&product_id=24', '87', 'Sau m?t hình ?nh BB 9780 rò r? ???c phát tán trên Internet thì nay, trang web Driphter ?ã cho ??ng t?i video chi ti?t v? chi?c BlackBerry Bold 9780 ch?y OS 6. BlackBerry 9780 ???c xem l? phiên b?n nâng c?p c?a model BlackBerry 9700 Bold. Ngo? i vi?c', '9780, blackberry, 9700, ???c, bold, nâng, c?p, vi?c', '', '', '', '', NULL, '', '0000-00-00', 15, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(82, 0, 'Dell/Cart/BlackBerry-Bold-9780-black-Brandnew.html', 'index.php?option=com_virtuemart&category_id=11&func=cartAdd&page=shop.cart&product_id=24', '95', '', '', '', '', '', '', NULL, '', '0000-00-00', 90, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(83, 4, 'Nokia/Nokia/Nokia-8800-Sapphire-Black.html', 'index.php?option=com_virtuemart&category_id=5&flypage=flypage.tpl&manufacturer_id=1&page=shop.product_details&product_id=28', '88', '', '', '', '', '', '', NULL, '', '0000-00-00', 15, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(84, 0, 'Dell/Cart/Nokia-8800-Sapphire-Black.html', 'index.php?option=com_virtuemart&category_id=11&func=cartAdd&page=shop.cart&product_id=28', '95', '', '', '', '', '', '', NULL, '', '0000-00-00', 90, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(85, 0, 'Blackberry/Blackberry/Blackberry-bold-9930.html', 'index.php?option=com_virtuemart&category_id=4&flypage=flypage.tpl&manufacturer_id=1&page=shop.product_details&product_id=23', '87', 'L? model ch?y c? m?ng CDMA v? GSM c?a Bold 9900, BlackBerry Bold 9930 có nhi?u c?i ti?n ?áng chú ý so v?i dòng Bold 9780 nh?: s? d?ng h? ?i?u h? nh BlackBerry OS 7, vi x? lýt?c ?? 1.2 GHz, RAM 768MB, b? nh? trong 8GB (cho m? r?ng dung l??ng t?i ?a 32GB', 'blackberry, bold, v?i, 9930, c?a, cho, gi?, trong', '', '', '', '', NULL, '', '0000-00-00', 15, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(86, 0, 'Dell/Cart/Blackberry-bold-9930.html', 'index.php?option=com_virtuemart&category_id=11&func=cartAdd&page=shop.cart&product_id=23', '95', '', '', '', '', '', '', NULL, '', '0000-00-00', 90, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(87, 0, 'LG/LG/LG.html', 'index.php?option=com_virtuemart&category_id=8&flypage=flypage.tpl&manufacturer_id=1&page=shop.product_details&product_id=39', '92', '', '', '', '', '', '', NULL, '', '0000-00-00', 15, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(88, 0, 'Dell/Dell/LG/Ask/Goi-de-biet-gia-LG.html', 'index.php?option=com_virtuemart&category_id=11&manufacturer_id=1&page=shop.ask&product_id=39&subject=Gọi để biết giá: LG', '95', '', '', '', '', '', '', NULL, '', '0000-00-00', 90, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(89, 0, 'Dell/Dell/Apple-Ipad-2-16G-3G-Wifi-Black.html', 'index.php?option=com_virtuemart&category_id=11&flypage=flypage.tpl&manufacturer_id=1&page=shop.product_details&product_id=18', '95', '? Ipad 2 m?ng h?n c? iPhone 4, x? lý ?? h?a nhanh g?p 9 l?n, bán ra t? 11/3 v?i giá b?t ??u t? 499 USD... Ông Steve Jobs, CEO c?a Apple b?t ng? xu?t hi?n v? o lúc 1h sáng 3/3 (tính theo gi? Vi?t Nam), t?i s? ki?n do hãng n? y t? ch?c ? San Francisco', 'ipad, v?i, c?a, m?t, jobs, tính, còn, máy', '', '', '', '', NULL, '', '0000-00-00', 15, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(90, 0, 'iPhone-iPad-iPod/iPhone-iPad-iPod/Apple-iPhone-4-16gb-Quoc-Te-Den/Ask.html', 'index.php?option=com_virtuemart&category_id=1&flypage=flypage.tpl&manufacturer_id=1&page=shop.ask&product_id=19', '85', '', '', '', '', '', '', NULL, '', '0000-00-00', 90, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(91, 0, 'Dell/Dell/HTC-Desire-HD.html', 'index.php?option=com_virtuemart&category_id=11&flypage=flypage.tpl&manufacturer_id=1&page=shop.product_details&product_id=20', '95', '', '', '', '', '', '', NULL, '', '0000-00-00', 15, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(92, 0, 'HTC/HTC/HTC-Desire/Ask.html', 'index.php?option=com_virtuemart&category_id=2&flypage=flypage.tpl&manufacturer_id=1&page=shop.ask&product_id=21', '86', '', '', '', '', '', '', NULL, '', '0000-00-00', 90, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(93, 0, 'Nokia/Nokia/Nokia-8800-Carbon-Arte/Ask.html', 'index.php?option=com_virtuemart&category_id=5&flypage=flypage.tpl&manufacturer_id=1&page=shop.ask&product_id=27', '88', '', '', '', '', '', '', NULL, '', '0000-00-00', 90, NULL, 1, 0, 1, 0, '2012-09-11', 'weekly', '0.5', 0, 0, '', 3),
(94, 0, 'Dell/Dell/Nokia-E7.html', 'index.php?option=com_virtuemart&category_id=11&flypage=flypage.tpl&manufacturer_id=1&page=shop.product_details&product_id=26', '95', '', '', '', '', '', '', NULL, '', '0000-00-00', 15, NULL, 1, 0, 1, 0, '2012-09-17', 'weekly', '0.5', 0, 0, '', 3),
(95, 0, 'Dell/Dell/Nokia-8800-Carbon-Arte.html', 'index.php?option=com_virtuemart&category_id=11&flypage=flypage.tpl&manufacturer_id=1&page=shop.product_details&product_id=27', '95', 'T?ng quan M?ng 2G GSM? 900 / 1800 / 1900 M?ng 3G UMTS 2100 Hi?n tr?ng ?ang có h? ng Kích th??c Kích th??c 109 x 45.6 x 14.6 mm, 65 cc Tr?ng l??ng 150g M? n hình Ki?u M? n hình OLED, 16 tri?u m? u 240 x 320 pixels Âm thanh Ki?u Âm thanh ?a âm, MP3 Loa ngo', 'cu?c, g?i, ??n, pin, mp3, ki?u, pixels, thanh', '', '', '', '', NULL, '', '0000-00-00', 15, NULL, 1, 0, 1, 0, '2012-09-17', 'weekly', '0.5', 0, 0, '', 3),
(96, 0, 'Nokia/Nokia/Nokia-8800-Sapphire-Black/Ask.html', 'index.php?option=com_virtuemart&category_id=5&flypage=flypage.tpl&manufacturer_id=1&page=shop.ask&product_id=28', '88', '', '', '', '', '', '', NULL, '', '0000-00-00', 90, NULL, 1, 0, 1, 0, '2012-09-17', 'weekly', '0.5', 0, 0, '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `webvn_sefurlword_xref`
--

CREATE TABLE IF NOT EXISTS `webvn_sefurlword_xref` (
  `word` int(11) NOT NULL,
  `url` int(11) NOT NULL,
  PRIMARY KEY  (`word`,`url`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webvn_sefurlword_xref`
--


-- --------------------------------------------------------

--
-- Table structure for table `webvn_sefwords`
--

CREATE TABLE IF NOT EXISTS `webvn_sefwords` (
  `id` int(11) NOT NULL auto_increment,
  `word` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `webvn_sefwords`
--


-- --------------------------------------------------------

--
-- Table structure for table `webvn_sef_statistics`
--

CREATE TABLE IF NOT EXISTS `webvn_sef_statistics` (
  `url_id` int(11) NOT NULL,
  `page_rank` int(3) NOT NULL,
  `total_indexed` int(10) NOT NULL,
  `popularity` int(10) NOT NULL,
  `facebook_indexed` int(10) NOT NULL,
  `twitter_indexed` int(10) NOT NULL,
  `validation_score` varchar(255) NOT NULL,
  `page_speed_score` mediumtext NOT NULL,
  PRIMARY KEY  (`url_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webvn_sef_statistics`
--


-- --------------------------------------------------------

--
-- Table structure for table `webvn_sef_subdomains`
--

CREATE TABLE IF NOT EXISTS `webvn_sef_subdomains` (
  `subdomain` varchar(255) NOT NULL default '',
  `Itemid` mediumtext NOT NULL,
  `Itemid_titlepage` int(10) NOT NULL,
  `option` varchar(255) NOT NULL default '',
  `lang` varchar(10) NOT NULL default '',
  PRIMARY KEY  (`subdomain`,`lang`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webvn_sef_subdomains`
--


-- --------------------------------------------------------

--
-- Table structure for table `webvn_session`
--

CREATE TABLE IF NOT EXISTS `webvn_session` (
  `username` varchar(150) default '',
  `time` varchar(14) default '',
  `session_id` varchar(200) NOT NULL default '0',
  `guest` tinyint(4) default '1',
  `userid` int(11) default '0',
  `usertype` varchar(50) default '',
  `gid` tinyint(3) unsigned NOT NULL default '0',
  `client_id` tinyint(3) unsigned NOT NULL default '0',
  `data` longtext,
  PRIMARY KEY  (`session_id`(64)),
  KEY `whosonline` (`guest`,`usertype`),
  KEY `userid` (`userid`),
  KEY `time` (`time`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `webvn_session`
--

INSERT INTO `webvn_session` (`username`, `time`, `session_id`, `guest`, `userid`, `usertype`, `gid`, `client_id`, `data`) VALUES
('', '1349258488', '939e39e93b7a48387f08b2e1a9252430', 1, 0, '', 0, 0, '__default|a:7:{s:15:"session.counter";i:1;s:19:"session.timer.start";i:1349258488;s:18:"session.timer.last";i:1349258488;s:17:"session.timer.now";i:1349258488;s:22:"session.client.browser";s:67:"Mozilla/5.0 (Windows NT 6.1; rv:15.0) Gecko/20100101 Firefox/15.0.1";s:8:"registry";O:9:"JRegistry":3:{s:17:"_defaultNameSpace";s:7:"session";s:9:"_registry";a:1:{s:7:"session";a:1:{s:4:"data";O:8:"stdClass":0:{}}}s:7:"_errors";a:0:{}}s:4:"user";O:5:"JUser":19:{s:2:"id";i:0;s:4:"name";N;s:8:"username";N;s:5:"email";N;s:8:"password";N;s:14:"password_clear";s:0:"";s:8:"usertype";s:15:"Public Frontend";s:5:"block";N;s:9:"sendEmail";i:0;s:3:"gid";i:0;s:12:"registerDate";N;s:13:"lastvisitDate";N;s:10:"activation";N;s:6:"params";N;s:3:"aid";i:0;s:5:"guest";i:1;s:7:"_params";O:10:"JParameter":7:{s:4:"_raw";s:0:"";s:4:"_xml";N;s:9:"_elements";a:0:{}s:12:"_elementPath";a:1:{i:0;s:81:"F:\\VertrigoServ\\www\\Demo\\2012\\Dienthoai52\\libraries\\joomla\\html\\parameter\\element";}s:17:"_defaultNameSpace";s:8:"_default";s:9:"_registry";a:1:{s:8:"_default";a:1:{s:4:"data";O:8:"stdClass":0:{}}}s:7:"_errors";a:0:{}}s:9:"_errorMsg";N;s:7:"_errors";a:0:{}}}auth|a:11:{s:11:"show_prices";i:1;s:7:"user_id";i:0;s:8:"username";s:4:"demo";s:5:"perms";s:0:"";s:10:"first_name";s:5:"guest";s:9:"last_name";s:0:"";s:16:"shopper_group_id";s:1:"5";s:22:"shopper_group_discount";s:4:"0.00";s:24:"show_price_including_tax";s:1:"1";s:21:"default_shopper_group";i:1;s:22:"is_registered_customer";b:0;}cart|a:1:{s:3:"idx";i:0;}recent|a:1:{s:3:"idx";i:0;}ps_vendor_id|i:1;minimum_pov|s:4:"0.00";vendor_currency|s:3:"VND";product_sess|a:14:{i:34;a:4:{s:7:"flypage";s:11:"flypage.tpl";s:13:"discount_info";a:3:{s:6:"amount";i:0;s:10:"is_percent";i:0;s:11:"create_time";i:1349258499;}s:9:"vendor_id";s:1:"1";s:8:"tax_rate";i:0;}i:24;a:4:{s:7:"flypage";s:11:"flypage.tpl";s:13:"discount_info";a:3:{s:6:"amount";i:0;s:10:"is_percent";i:0;s:11:"create_time";i:1349258500;}s:9:"vendor_id";s:1:"1";s:8:"tax_rate";i:0;}i:28;a:4:{s:7:"flypage";s:11:"flypage.tpl";s:13:"discount_info";a:3:{s:6:"amount";i:0;s:10:"is_percent";i:0;s:11:"create_time";i:1349258500;}s:9:"vendor_id";s:1:"1";s:8:"tax_rate";i:0;}i:36;a:4:{s:7:"flypage";s:11:"flypage.tpl";s:13:"discount_info";a:3:{s:6:"amount";i:0;s:10:"is_percent";i:0;s:11:"create_time";i:1349258500;}s:9:"vendor_id";s:1:"1";s:8:"tax_rate";i:0;}i:18;a:4:{s:7:"flypage";s:11:"flypage.tpl";s:13:"discount_info";a:3:{s:6:"amount";i:0;s:10:"is_percent";i:0;s:11:"create_time";i:1349258500;}s:9:"vendor_id";s:1:"1";s:8:"tax_rate";i:0;}i:33;a:3:{s:7:"flypage";s:11:"flypage.tpl";s:13:"discount_info";a:3:{s:6:"amount";i:0;s:10:"is_percent";i:0;s:11:"create_time";i:1349258500;}s:9:"vendor_id";s:1:"1";}i:25;a:3:{s:7:"flypage";s:11:"flypage.tpl";s:13:"discount_info";a:3:{s:6:"amount";i:0;s:10:"is_percent";i:0;s:11:"create_time";i:1349258500;}s:9:"vendor_id";s:1:"1";}i:31;a:4:{s:7:"flypage";s:11:"flypage.tpl";s:13:"discount_info";a:3:{s:6:"amount";i:0;s:10:"is_percent";i:0;s:11:"create_time";i:1349258500;}s:9:"vendor_id";s:1:"1";s:8:"tax_rate";i:0;}i:30;a:4:{s:7:"flypage";s:11:"flypage.tpl";s:13:"discount_info";a:3:{s:6:"amount";i:0;s:10:"is_percent";i:0;s:11:"create_time";i:1349258500;}s:9:"vendor_id";s:1:"1";s:8:"tax_rate";i:0;}i:22;a:4:{s:7:"flypage";s:11:"flypage.tpl";s:13:"discount_info";a:3:{s:6:"amount";i:0;s:10:"is_percent";i:0;s:11:"create_time";i:1349258501;}s:9:"vendor_id";s:1:"1";s:8:"tax_rate";i:0;}i:21;a:4:{s:7:"flypage";s:11:"flypage.tpl";s:13:"discount_info";a:3:{s:6:"amount";i:0;s:10:"is_percent";i:0;s:11:"create_time";i:1349258501;}s:9:"vendor_id";s:1:"1";s:8:"tax_rate";i:0;}i:20;a:4:{s:7:"flypage";s:11:"flypage.tpl";s:13:"discount_info";a:3:{s:6:"amount";i:0;s:10:"is_percent";i:0;s:11:"create_time";i:1349258501;}s:9:"vendor_id";s:1:"1";s:8:"tax_rate";i:0;}i:19;a:4:{s:7:"flypage";s:11:"flypage.tpl";s:13:"discount_info";a:3:{s:6:"amount";i:0;s:10:"is_percent";i:0;s:11:"create_time";i:1349258501;}s:9:"vendor_id";s:1:"1";s:8:"tax_rate";i:0;}i:17;a:4:{s:7:"flypage";s:11:"flypage.tpl";s:13:"discount_info";a:3:{s:6:"amount";i:0;s:10:"is_percent";i:0;s:11:"create_time";i:1349258501;}s:9:"vendor_id";s:1:"1";s:8:"tax_rate";i:0;}}taxrate|a:1:{i:1;i:0;}vmUseGreyBox|s:1:"0";vmCartDirection|s:1:"0";'),
('', '1349258540', 'ee9db82b59cdc03db7185a7f87c01839', 1, 0, '', 0, 0, '__default|a:7:{s:15:"session.counter";i:1;s:19:"session.timer.start";i:1349258540;s:18:"session.timer.last";i:1349258540;s:17:"session.timer.now";i:1349258540;s:22:"session.client.browser";s:171:"Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET4.0C; .NET4.0E)";s:8:"registry";O:9:"JRegistry":3:{s:17:"_defaultNameSpace";s:7:"session";s:9:"_registry";a:1:{s:7:"session";a:1:{s:4:"data";O:8:"stdClass":0:{}}}s:7:"_errors";a:0:{}}s:4:"user";O:5:"JUser":19:{s:2:"id";i:0;s:4:"name";N;s:8:"username";N;s:5:"email";N;s:8:"password";N;s:14:"password_clear";s:0:"";s:8:"usertype";s:15:"Public Frontend";s:5:"block";N;s:9:"sendEmail";i:0;s:3:"gid";i:0;s:12:"registerDate";N;s:13:"lastvisitDate";N;s:10:"activation";N;s:6:"params";N;s:3:"aid";i:0;s:5:"guest";i:1;s:7:"_params";O:10:"JParameter":7:{s:4:"_raw";s:0:"";s:4:"_xml";N;s:9:"_elements";a:0:{}s:12:"_elementPath";a:1:{i:0;s:81:"F:\\VertrigoServ\\www\\Demo\\2012\\Dienthoai52\\libraries\\joomla\\html\\parameter\\element";}s:17:"_defaultNameSpace";s:8:"_default";s:9:"_registry";a:1:{s:8:"_default";a:1:{s:4:"data";O:8:"stdClass":0:{}}}s:7:"_errors";a:0:{}}s:9:"_errorMsg";N;s:7:"_errors";a:0:{}}}auth|a:11:{s:11:"show_prices";i:1;s:7:"user_id";i:0;s:8:"username";s:4:"demo";s:5:"perms";s:0:"";s:10:"first_name";s:5:"guest";s:9:"last_name";s:0:"";s:16:"shopper_group_id";s:1:"5";s:22:"shopper_group_discount";s:4:"0.00";s:24:"show_price_including_tax";s:1:"1";s:21:"default_shopper_group";i:1;s:22:"is_registered_customer";b:0;}cart|a:1:{s:3:"idx";i:0;}recent|a:1:{s:3:"idx";i:0;}ps_vendor_id|i:1;minimum_pov|s:4:"0.00";vendor_currency|s:3:"VND";product_sess|a:13:{i:34;a:4:{s:7:"flypage";s:11:"flypage.tpl";s:13:"discount_info";a:3:{s:6:"amount";i:0;s:10:"is_percent";i:0;s:11:"create_time";i:1349258541;}s:9:"vendor_id";s:1:"1";s:8:"tax_rate";i:0;}i:31;a:4:{s:7:"flypage";s:11:"flypage.tpl";s:13:"discount_info";a:3:{s:6:"amount";i:0;s:10:"is_percent";i:0;s:11:"create_time";i:1349258541;}s:9:"vendor_id";s:1:"1";s:8:"tax_rate";i:0;}i:30;a:4:{s:7:"flypage";s:11:"flypage.tpl";s:13:"discount_info";a:3:{s:6:"amount";i:0;s:10:"is_percent";i:0;s:11:"create_time";i:1349258541;}s:9:"vendor_id";s:1:"1";s:8:"tax_rate";i:0;}i:28;a:4:{s:7:"flypage";s:11:"flypage.tpl";s:13:"discount_info";a:3:{s:6:"amount";i:0;s:10:"is_percent";i:0;s:11:"create_time";i:1349258541;}s:9:"vendor_id";s:1:"1";s:8:"tax_rate";i:0;}i:27;a:4:{s:7:"flypage";s:11:"flypage.tpl";s:13:"discount_info";a:3:{s:6:"amount";i:0;s:10:"is_percent";i:0;s:11:"create_time";i:1349258541;}s:9:"vendor_id";s:1:"1";s:8:"tax_rate";i:0;}i:38;a:4:{s:7:"flypage";s:11:"flypage.tpl";s:13:"discount_info";a:3:{s:6:"amount";i:0;s:10:"is_percent";i:0;s:11:"create_time";i:1349258541;}s:9:"vendor_id";s:1:"1";s:8:"tax_rate";i:0;}i:20;a:4:{s:7:"flypage";s:11:"flypage.tpl";s:13:"discount_info";a:3:{s:6:"amount";i:0;s:10:"is_percent";i:0;s:11:"create_time";i:1349258541;}s:9:"vendor_id";s:1:"1";s:8:"tax_rate";i:0;}i:21;a:4:{s:7:"flypage";s:11:"flypage.tpl";s:13:"discount_info";a:3:{s:6:"amount";i:0;s:10:"is_percent";i:0;s:11:"create_time";i:1349258541;}s:9:"vendor_id";s:1:"1";s:8:"tax_rate";i:0;}i:24;a:4:{s:7:"flypage";s:11:"flypage.tpl";s:13:"discount_info";a:3:{s:6:"amount";i:0;s:10:"is_percent";i:0;s:11:"create_time";i:1349258541;}s:9:"vendor_id";s:1:"1";s:8:"tax_rate";i:0;}i:22;a:4:{s:7:"flypage";s:11:"flypage.tpl";s:13:"discount_info";a:3:{s:6:"amount";i:0;s:10:"is_percent";i:0;s:11:"create_time";i:1349258542;}s:9:"vendor_id";s:1:"1";s:8:"tax_rate";i:0;}i:19;a:4:{s:7:"flypage";s:11:"flypage.tpl";s:13:"discount_info";a:3:{s:6:"amount";i:0;s:10:"is_percent";i:0;s:11:"create_time";i:1349258542;}s:9:"vendor_id";s:1:"1";s:8:"tax_rate";i:0;}i:18;a:4:{s:7:"flypage";s:11:"flypage.tpl";s:13:"discount_info";a:3:{s:6:"amount";i:0;s:10:"is_percent";i:0;s:11:"create_time";i:1349258542;}s:9:"vendor_id";s:1:"1";s:8:"tax_rate";i:0;}i:17;a:4:{s:7:"flypage";s:11:"flypage.tpl";s:13:"discount_info";a:3:{s:6:"amount";i:0;s:10:"is_percent";i:0;s:11:"create_time";i:1349258542;}s:9:"vendor_id";s:1:"1";s:8:"tax_rate";i:0;}}taxrate|a:1:{i:1;i:0;}vmUseGreyBox|s:1:"0";vmCartDirection|s:1:"0";');

-- --------------------------------------------------------

--
-- Table structure for table `webvn_stats_agents`
--

CREATE TABLE IF NOT EXISTS `webvn_stats_agents` (
  `agent` varchar(255) NOT NULL default '',
  `type` tinyint(1) unsigned NOT NULL default '0',
  `hits` int(11) unsigned NOT NULL default '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `webvn_stats_agents`
--


-- --------------------------------------------------------

--
-- Table structure for table `webvn_swmenu_config`
--

CREATE TABLE IF NOT EXISTS `webvn_swmenu_config` (
  `id` int(11) NOT NULL default '0',
  `main_top` smallint(8) default '0',
  `main_left` smallint(8) default '0',
  `main_height` smallint(8) default '20',
  `sub_border_over` varchar(30) default '0',
  `main_width` smallint(8) default '100',
  `sub_width` smallint(8) default '100',
  `main_back` varchar(7) default '#4682B4',
  `main_over` varchar(7) default '#5AA7E5',
  `sub_back` varchar(7) default '#4682B4',
  `sub_over` varchar(7) default '#5AA7E5',
  `sub_border` varchar(30) default '#FFFFFF',
  `main_font_size` smallint(8) default '0',
  `sub_font_size` smallint(8) default '0',
  `main_border_over` varchar(30) default '0',
  `sub_font_color` varchar(7) default '#000000',
  `main_border` varchar(30) default '#FFFFFF',
  `main_font_color` varchar(7) default '#000000',
  `sub_font_color_over` varchar(7) default '#FFFFFF',
  `main_font_color_over` varchar(7) default '#FFFFFF',
  `main_align` varchar(8) default 'left',
  `sub_align` varchar(8) default 'left',
  `sub_height` smallint(7) default '20',
  `position` varchar(10) default 'absolute',
  `orientation` varchar(20) default 'horizontal',
  `font_family` varchar(50) default 'Arial',
  `font_weight` varchar(10) default 'normal',
  `font_weight_over` varchar(10) default 'normal',
  `level2_sub_top` int(11) default '0',
  `level2_sub_left` int(11) default '0',
  `level1_sub_top` int(11) NOT NULL default '0',
  `level1_sub_left` int(11) NOT NULL default '0',
  `main_back_image` varchar(100) default NULL,
  `main_back_image_over` varchar(100) default NULL,
  `sub_back_image` varchar(100) default NULL,
  `sub_back_image_over` varchar(100) default NULL,
  `specialA` varchar(50) default '80',
  `main_padding` varchar(40) default '0px 0px 0px 0px',
  `sub_padding` varchar(40) default '0px 0px 0px 0px',
  `specialB` varchar(100) default '50',
  `sub_font_family` varchar(50) default 'Arial',
  `extra` mediumtext,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `webvn_swmenu_config`
--

INSERT INTO `webvn_swmenu_config` (`id`, `main_top`, `main_left`, `main_height`, `sub_border_over`, `main_width`, `sub_width`, `main_back`, `main_over`, `sub_back`, `sub_over`, `sub_border`, `main_font_size`, `sub_font_size`, `main_border_over`, `sub_font_color`, `main_border`, `main_font_color`, `sub_font_color_over`, `main_font_color_over`, `main_align`, `sub_align`, `sub_height`, `position`, `orientation`, `font_family`, `font_weight`, `font_weight_over`, `level2_sub_top`, `level2_sub_left`, `level1_sub_top`, `level1_sub_left`, `main_back_image`, `main_back_image_over`, `sub_back_image`, `sub_back_image_over`, `specialA`, `main_padding`, `sub_padding`, `specialB`, `sub_font_family`, `extra`) VALUES
(73, 0, 0, 41, '0px solid #124170', 200, 0, '#2F82CC', '#6BA6DE', '#FFF2AB', '#FFFFCC', '0px solid #FFFFFF', 12, 12, '0px solid #124170', '#E18246', '0px solid #FFFFFF', '#333', '#FF9900', '#000', 'left', 'left', 0, 'left', 'vertical', 'Arial, Helvetica, sans-serif', 'bold', 'bold', 0, 0, 0, 0, '', '', '', '', '85', '0px 0px 0px 0px ', '5px 5px 5px 5px', '50', 'Arial, Helvetica, sans-serif', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `webvn_swmenu_extended`
--

CREATE TABLE IF NOT EXISTS `webvn_swmenu_extended` (
  `ext_id` int(11) NOT NULL auto_increment,
  `menu_id` int(11) NOT NULL default '0',
  `image` varchar(100) default NULL,
  `image_over` varchar(100) default NULL,
  `moduleID` int(11) NOT NULL default '0',
  `show_name` int(2) NOT NULL default '1',
  `image_align` varchar(20) NOT NULL default 'left',
  `target_level` int(11) NOT NULL default '1',
  `normal_css` mediumtext,
  `over_css` mediumtext,
  `show_item` int(11) NOT NULL default '1',
  `extra` mediumtext,
  PRIMARY KEY  (`ext_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `webvn_swmenu_extended`
--

INSERT INTO `webvn_swmenu_extended` (`ext_id`, `menu_id`, `image`, `image_over`, `moduleID`, `show_name`, `image_align`, `target_level`, `normal_css`, `over_css`, `show_item`, `extra`) VALUES
(1, 1, '', '', 73, 1, '', 1, '', '', 1, ''),
(2, 79, '', '', 73, 1, '', 1, '', '', 1, ''),
(3, 80, '', '', 73, 1, '', 1, '', '', 1, ''),
(4, 81, '', '', 73, 1, '', 1, '', '', 1, ''),
(5, 82, '', '', 73, 1, '', 1, '', '', 1, ''),
(6, 83, '', '', 73, 1, '', 1, '', '', 1, ''),
(7, 84, '', '', 73, 1, '', 1, '', '', 1, ''),
(8, 85, 'modules/mod_swmenupro/images/iphone.jpg,200,41,,', 'modules/mod_swmenupro/images/iphone.jpg,200,41,,', 73, 0, 'left', 1, '', '', 1, ''),
(9, 86, 'modules/mod_swmenupro/images/htc.jpg,200,41,,', 'modules/mod_swmenupro/images/htc.jpg,200,41,,', 73, 0, 'left', 1, '', '', 1, ''),
(10, 87, 'modules/mod_swmenupro/images/Blackberry.jpg,200,41,,', 'modules/mod_swmenupro/images/Blackberry.jpg,200,41,,', 73, 0, 'left', 1, '', '', 1, ''),
(11, 88, 'modules/mod_swmenupro/images/nokia.jpg,200,41,,', 'modules/mod_swmenupro/images/nokia.jpg,200,41,,', 73, 0, 'left', 1, '', '', 1, ''),
(12, 89, 'modules/mod_swmenupro/images/samsung.jpg,200,41,,', 'modules/mod_swmenupro/images/samsung.jpg,200,41,,', 73, 0, 'left', 1, '', '', 1, ''),
(13, 90, 'modules/mod_swmenupro/images/Sony Ericsson.jpg,200,41,,', 'modules/mod_swmenupro/images/Sony Ericsson.jpg,200,41,,', 73, 0, 'left', 1, '', '', 1, ''),
(14, 91, 'modules/mod_swmenupro/images/Philips.jpg,200,41,,', 'modules/mod_swmenupro/images/Philips.jpg,200,41,,', 73, 0, 'left', 1, '', '', 1, ''),
(15, 92, 'modules/mod_swmenupro/images/LG.jpg,200,41,,', 'modules/mod_swmenupro/images/LG.jpg,200,41,,', 73, 0, 'left', 1, '', '', 1, ''),
(16, 93, 'modules/mod_swmenupro/images/Lenovo.jpg,200,41,,', 'modules/mod_swmenupro/images/Lenovo.jpg,200,41,,', 73, 0, 'left', 1, '', '', 1, ''),
(17, 94, 'modules/mod_swmenupro/images/Motorola.jpg,200,41,,', 'modules/mod_swmenupro/images/Motorola.jpg,200,41,,', 73, 0, 'left', 1, '', '', 1, ''),
(18, 95, 'modules/mod_swmenupro/images/Dell.jpg,200,41,,', 'modules/mod_swmenupro/images/Dell.jpg,200,41,,', 73, 0, 'left', 1, '', '', 1, ''),
(19, 96, 'modules/mod_swmenupro/images/Q-Mobile.jpg,200,41,,', 'modules/mod_swmenupro/images/Q-Mobile.jpg,200,41,,', 73, 0, 'left', 1, '', '', 1, ''),
(20, 97, 'modules/mod_swmenupro/images/Alcatel.jpg,200,41,,', 'modules/mod_swmenupro/images/Alcatel.jpg,200,41,,', 73, 0, 'left', 1, '', '', 1, ''),
(21, 98, 'modules/mod_swmenupro/images/Avio.jpg,200,41,,', 'modules/mod_swmenupro/images/Avio.jpg,200,41,,', 73, 0, 'left', 1, '', '', 1, ''),
(22, 99, 'modules/mod_swmenupro/images/iNo.jpg,200,41,,', 'modules/mod_swmenupro/images/iNo.jpg,200,41,,', 73, 0, 'left', 1, '', '', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `webvn_templates_menu`
--

CREATE TABLE IF NOT EXISTS `webvn_templates_menu` (
  `template` varchar(255) NOT NULL default '',
  `menuid` int(11) NOT NULL default '0',
  `client_id` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`menuid`,`client_id`,`template`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `webvn_templates_menu`
--

INSERT INTO `webvn_templates_menu` (`template`, `menuid`, `client_id`) VALUES
('vno_dienthoai52', 0, 0),
('vno_dienthoai52', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `webvn_users`
--

CREATE TABLE IF NOT EXISTS `webvn_users` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL default '',
  `username` varchar(150) NOT NULL default '',
  `email` varchar(100) NOT NULL default '',
  `password` varchar(100) NOT NULL default '',
  `usertype` varchar(25) NOT NULL default '',
  `block` tinyint(4) NOT NULL default '0',
  `sendEmail` tinyint(4) default '0',
  `gid` tinyint(3) unsigned NOT NULL default '1',
  `registerDate` datetime NOT NULL default '0000-00-00 00:00:00',
  `lastvisitDate` datetime NOT NULL default '0000-00-00 00:00:00',
  `activation` varchar(100) NOT NULL default '',
  `params` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `usertype` (`usertype`),
  KEY `idx_name` (`name`),
  KEY `gid_block` (`gid`,`block`),
  KEY `username` (`username`),
  KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `webvn_users`
--

INSERT INTO `webvn_users` (`id`, `name`, `username`, `email`, `password`, `usertype`, `block`, `sendEmail`, `gid`, `registerDate`, `lastvisitDate`, `activation`, `params`) VALUES
(62, 'Administrator', 'Administrator', 'zonotek.vn@gmail.com', 'd55efc31bf45f58cd43d7cb4b9172dc6:SnEcraS9zzYhuMGrF5dtjzJExc6F3Als', 'Super Administrator', 0, 1, 25, '2011-11-01 15:41:45', '2012-09-11 08:03:57', '', 'admin_language=\nlanguage=\neditor=\nhelpsite=\ntimezone=7\n\n'),
(63, 'Demo', 'Demo', 'Demo@Admin.com', 'e9773a6845750dff7b94fe2caab34768:P6CBWP4q7YCEgCoSHCTIqJP5TRrxm6CH', 'Super Administrator', 0, 0, 25, '2011-11-04 01:28:55', '2011-11-04 04:04:08', '', 'admin_language=\nlanguage=\neditor=\nhelpsite=\ntimezone=7\n\n');

-- --------------------------------------------------------

--
-- Table structure for table `webvn_vm_auth_group`
--

CREATE TABLE IF NOT EXISTS `webvn_vm_auth_group` (
  `group_id` int(11) NOT NULL auto_increment,
  `group_name` varchar(128) default NULL,
  `group_level` int(11) default NULL,
  PRIMARY KEY  (`group_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Holds all the user groups' AUTO_INCREMENT=5 ;

--
-- Dumping data for table `webvn_vm_auth_group`
--

INSERT INTO `webvn_vm_auth_group` (`group_id`, `group_name`, `group_level`) VALUES
(1, 'admin', 0),
(2, 'storeadmin', 250),
(3, 'shopper', 500),
(4, 'demo', 750);

-- --------------------------------------------------------

--
-- Table structure for table `webvn_vm_auth_user_group`
--

CREATE TABLE IF NOT EXISTS `webvn_vm_auth_user_group` (
  `user_id` int(11) NOT NULL default '0',
  `group_id` int(11) default NULL,
  PRIMARY KEY  (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Maps the user to user groups';

--
-- Dumping data for table `webvn_vm_auth_user_group`
--

INSERT INTO `webvn_vm_auth_user_group` (`user_id`, `group_id`) VALUES
(62, 2);

-- --------------------------------------------------------

--
-- Table structure for table `webvn_vm_auth_user_vendor`
--

CREATE TABLE IF NOT EXISTS `webvn_vm_auth_user_vendor` (
  `user_id` int(11) default NULL,
  `vendor_id` int(11) default NULL,
  KEY `idx_auth_user_vendor_user_id` (`user_id`),
  KEY `idx_auth_user_vendor_vendor_id` (`vendor_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Maps a user to a vendor';

--
-- Dumping data for table `webvn_vm_auth_user_vendor`
--

INSERT INTO `webvn_vm_auth_user_vendor` (`user_id`, `vendor_id`) VALUES
(62, 1);

-- --------------------------------------------------------

--
-- Table structure for table `webvn_vm_cart`
--

CREATE TABLE IF NOT EXISTS `webvn_vm_cart` (
  `user_id` int(11) NOT NULL,
  `cart_content` text NOT NULL,
  `last_updated` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Stores the cart contents of a user';

--
-- Dumping data for table `webvn_vm_cart`
--


-- --------------------------------------------------------

--
-- Table structure for table `webvn_vm_category`
--

CREATE TABLE IF NOT EXISTS `webvn_vm_category` (
  `category_id` int(11) NOT NULL auto_increment,
  `vendor_id` int(11) NOT NULL default '0',
  `category_name` varchar(128) NOT NULL default '',
  `category_description` text,
  `category_thumb_image` varchar(255) default NULL,
  `category_full_image` varchar(255) default NULL,
  `category_publish` char(1) default NULL,
  `cdate` int(11) default NULL,
  `mdate` int(11) default NULL,
  `category_browsepage` varchar(255) NOT NULL default 'browse_1',
  `products_per_row` tinyint(2) NOT NULL default '1',
  `category_flypage` varchar(255) default NULL,
  `list_order` int(11) default NULL,
  PRIMARY KEY  (`category_id`),
  KEY `idx_category_vendor_id` (`vendor_id`),
  KEY `idx_category_name` (`category_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Product Categories are stored here' AUTO_INCREMENT=16 ;

--
-- Dumping data for table `webvn_vm_category`
--

INSERT INTO `webvn_vm_category` (`category_id`, `vendor_id`, `category_name`, `category_description`, `category_thumb_image`, `category_full_image`, `category_publish`, `cdate`, `mdate`, `category_browsepage`, `products_per_row`, `category_flypage`, `list_order`) VALUES
(1, 1, 'iPhone - iPad - iPod', '', '', '', 'Y', 950319905, 1340163969, 'browse_3', 4, 'flypage.tpl', 1),
(2, 1, 'HTC', '', '', '', 'Y', 950319916, 1320291452, 'browse_3', 3, 'flypage.tpl', 2),
(7, 1, 'Philips', '', '', '', 'Y', 1320313561, 1320313561, 'browse_3', 3, 'flypage.tpl', 7),
(3, 1, 'Samsung', '', '', '', 'Y', 950321122, 1320296646, 'browse_3', 3, 'flypage.tpl', 3),
(6, 1, 'Sony Ericsson', '', '', '', 'Y', 1320313552, 1320313552, 'browse_3', 3, 'flypage.tpl', 6),
(4, 1, 'Blackberry', '', '', '', 'Y', 955626629, 1320296600, 'browse_3', 3, 'flypage.tpl', 4),
(5, 1, 'Nokia', '', '', '', 'Y', 958892894, 1320296621, 'browse_3', 3, 'flypage.tpl', 5),
(8, 1, 'LG', '', '', '', 'Y', 1320313571, 1320313571, 'browse_3', 3, 'flypage.tpl', 8),
(9, 1, 'Lenovo', '', '', '', 'Y', 1320313580, 1320313580, 'browse_3', 3, 'flypage.tpl', 9),
(10, 1, 'Motorola', '', '', '', 'Y', 1320313589, 1320313589, 'browse_3', 3, 'flypage.tpl', 10),
(11, 1, 'Dell', '', '', '', 'Y', 1320313599, 1320313599, 'browse_3', 3, 'flypage.tpl', 11),
(12, 1, 'Q-Mobile', '', '', '', 'Y', 1320313612, 1320313612, 'browse_3', 3, 'flypage.tpl', 12),
(13, 1, 'Alcatel', '', '', '', 'Y', 1320313623, 1320313623, 'browse_3', 3, 'flypage.tpl', 13),
(14, 1, 'Avio', '', '', '', 'Y', 1320313632, 1320313632, 'browse_3', 3, 'flypage.tpl', 14),
(15, 1, 'iNo', '', '', '', 'Y', 1320313641, 1320313641, 'browse_3', 3, 'flypage.tpl', 15);

-- --------------------------------------------------------

--
-- Table structure for table `webvn_vm_category_xref`
--

CREATE TABLE IF NOT EXISTS `webvn_vm_category_xref` (
  `category_parent_id` int(11) NOT NULL default '0',
  `category_child_id` int(11) NOT NULL default '0',
  `category_list` int(11) default NULL,
  PRIMARY KEY  (`category_child_id`),
  KEY `category_xref_category_parent_id` (`category_parent_id`),
  KEY `idx_category_xref_category_list` (`category_list`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Category child-parent relation list';

--
-- Dumping data for table `webvn_vm_category_xref`
--

INSERT INTO `webvn_vm_category_xref` (`category_parent_id`, `category_child_id`, `category_list`) VALUES
(0, 1, NULL),
(0, 2, NULL),
(0, 3, NULL),
(0, 4, NULL),
(0, 5, NULL),
(0, 6, NULL),
(0, 7, NULL),
(0, 8, NULL),
(0, 9, NULL),
(0, 10, NULL),
(0, 11, NULL),
(0, 12, NULL),
(0, 13, NULL),
(0, 14, NULL),
(0, 15, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `webvn_vm_country`
--

CREATE TABLE IF NOT EXISTS `webvn_vm_country` (
  `country_id` int(11) NOT NULL auto_increment,
  `zone_id` int(11) NOT NULL default '1',
  `country_name` varchar(64) default NULL,
  `country_3_code` char(3) default NULL,
  `country_2_code` char(2) default NULL,
  PRIMARY KEY  (`country_id`),
  KEY `idx_country_name` (`country_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Country records' AUTO_INCREMENT=246 ;

--
-- Dumping data for table `webvn_vm_country`
--

INSERT INTO `webvn_vm_country` (`country_id`, `zone_id`, `country_name`, `country_3_code`, `country_2_code`) VALUES
(1, 1, 'Afghanistan', 'AFG', 'AF'),
(2, 1, 'Albania', 'ALB', 'AL'),
(3, 1, 'Algeria', 'DZA', 'DZ'),
(4, 1, 'American Samoa', 'ASM', 'AS'),
(5, 1, 'Andorra', 'AND', 'AD'),
(6, 1, 'Angola', 'AGO', 'AO'),
(7, 1, 'Anguilla', 'AIA', 'AI'),
(8, 1, 'Antarctica', 'ATA', 'AQ'),
(9, 1, 'Antigua and Barbuda', 'ATG', 'AG'),
(10, 1, 'Argentina', 'ARG', 'AR'),
(11, 1, 'Armenia', 'ARM', 'AM'),
(12, 1, 'Aruba', 'ABW', 'AW'),
(13, 1, 'Australia', 'AUS', 'AU'),
(14, 1, 'Austria', 'AUT', 'AT'),
(15, 1, 'Azerbaijan', 'AZE', 'AZ'),
(16, 1, 'Bahamas', 'BHS', 'BS'),
(17, 1, 'Bahrain', 'BHR', 'BH'),
(18, 1, 'Bangladesh', 'BGD', 'BD'),
(19, 1, 'Barbados', 'BRB', 'BB'),
(20, 1, 'Belarus', 'BLR', 'BY'),
(21, 1, 'Belgium', 'BEL', 'BE'),
(22, 1, 'Belize', 'BLZ', 'BZ'),
(23, 1, 'Benin', 'BEN', 'BJ'),
(24, 1, 'Bermuda', 'BMU', 'BM'),
(25, 1, 'Bhutan', 'BTN', 'BT'),
(26, 1, 'Bolivia', 'BOL', 'BO'),
(27, 1, 'Bosnia and Herzegowina', 'BIH', 'BA'),
(28, 1, 'Botswana', 'BWA', 'BW'),
(29, 1, 'Bouvet Island', 'BVT', 'BV'),
(30, 1, 'Brazil', 'BRA', 'BR'),
(31, 1, 'British Indian Ocean Territory', 'IOT', 'IO'),
(32, 1, 'Brunei Darussalam', 'BRN', 'BN'),
(33, 1, 'Bulgaria', 'BGR', 'BG'),
(34, 1, 'Burkina Faso', 'BFA', 'BF'),
(35, 1, 'Burundi', 'BDI', 'BI'),
(36, 1, 'Cambodia', 'KHM', 'KH'),
(37, 1, 'Cameroon', 'CMR', 'CM'),
(38, 1, 'Canada', 'CAN', 'CA'),
(39, 1, 'Cape Verde', 'CPV', 'CV'),
(40, 1, 'Cayman Islands', 'CYM', 'KY'),
(41, 1, 'Central African Republic', 'CAF', 'CF'),
(42, 1, 'Chad', 'TCD', 'TD'),
(43, 1, 'Chile', 'CHL', 'CL'),
(44, 1, 'China', 'CHN', 'CN'),
(45, 1, 'Christmas Island', 'CXR', 'CX'),
(46, 1, 'Cocos (Keeling) Islands', 'CCK', 'CC'),
(47, 1, 'Colombia', 'COL', 'CO'),
(48, 1, 'Comoros', 'COM', 'KM'),
(49, 1, 'Congo', 'COG', 'CG'),
(50, 1, 'Cook Islands', 'COK', 'CK'),
(51, 1, 'Costa Rica', 'CRI', 'CR'),
(52, 1, 'Cote D''Ivoire', 'CIV', 'CI'),
(53, 1, 'Croatia', 'HRV', 'HR'),
(54, 1, 'Cuba', 'CUB', 'CU'),
(55, 1, 'Cyprus', 'CYP', 'CY'),
(56, 1, 'Czech Republic', 'CZE', 'CZ'),
(57, 1, 'Denmark', 'DNK', 'DK'),
(58, 1, 'Djibouti', 'DJI', 'DJ'),
(59, 1, 'Dominica', 'DMA', 'DM'),
(60, 1, 'Dominican Republic', 'DOM', 'DO'),
(61, 1, 'East Timor', 'TMP', 'TP'),
(62, 1, 'Ecuador', 'ECU', 'EC'),
(63, 1, 'Egypt', 'EGY', 'EG'),
(64, 1, 'El Salvador', 'SLV', 'SV'),
(65, 1, 'Equatorial Guinea', 'GNQ', 'GQ'),
(66, 1, 'Eritrea', 'ERI', 'ER'),
(67, 1, 'Estonia', 'EST', 'EE'),
(68, 1, 'Ethiopia', 'ETH', 'ET'),
(69, 1, 'Falkland Islands (Malvinas)', 'FLK', 'FK'),
(70, 1, 'Faroe Islands', 'FRO', 'FO'),
(71, 1, 'Fiji', 'FJI', 'FJ'),
(72, 1, 'Finland', 'FIN', 'FI'),
(73, 1, 'France', 'FRA', 'FR'),
(74, 1, 'France, Metropolitan', 'FXX', 'FX'),
(75, 1, 'French Guiana', 'GUF', 'GF'),
(76, 1, 'French Polynesia', 'PYF', 'PF'),
(77, 1, 'French Southern Territories', 'ATF', 'TF'),
(78, 1, 'Gabon', 'GAB', 'GA'),
(79, 1, 'Gambia', 'GMB', 'GM'),
(80, 1, 'Georgia', 'GEO', 'GE'),
(81, 1, 'Germany', 'DEU', 'DE'),
(82, 1, 'Ghana', 'GHA', 'GH'),
(83, 1, 'Gibraltar', 'GIB', 'GI'),
(84, 1, 'Greece', 'GRC', 'GR'),
(85, 1, 'Greenland', 'GRL', 'GL'),
(86, 1, 'Grenada', 'GRD', 'GD'),
(87, 1, 'Guadeloupe', 'GLP', 'GP'),
(88, 1, 'Guam', 'GUM', 'GU'),
(89, 1, 'Guatemala', 'GTM', 'GT'),
(90, 1, 'Guinea', 'GIN', 'GN'),
(91, 1, 'Guinea-bissau', 'GNB', 'GW'),
(92, 1, 'Guyana', 'GUY', 'GY'),
(93, 1, 'Haiti', 'HTI', 'HT'),
(94, 1, 'Heard and Mc Donald Islands', 'HMD', 'HM'),
(95, 1, 'Honduras', 'HND', 'HN'),
(96, 1, 'Hong Kong', 'HKG', 'HK'),
(97, 1, 'Hungary', 'HUN', 'HU'),
(98, 1, 'Iceland', 'ISL', 'IS'),
(99, 1, 'India', 'IND', 'IN'),
(100, 1, 'Indonesia', 'IDN', 'ID'),
(101, 1, 'Iran (Islamic Republic of)', 'IRN', 'IR'),
(102, 1, 'Iraq', 'IRQ', 'IQ'),
(103, 1, 'Ireland', 'IRL', 'IE'),
(104, 1, 'Israel', 'ISR', 'IL'),
(105, 1, 'Italy', 'ITA', 'IT'),
(106, 1, 'Jamaica', 'JAM', 'JM'),
(107, 1, 'Japan', 'JPN', 'JP'),
(108, 1, 'Jordan', 'JOR', 'JO'),
(109, 1, 'Kazakhstan', 'KAZ', 'KZ'),
(110, 1, 'Kenya', 'KEN', 'KE'),
(111, 1, 'Kiribati', 'KIR', 'KI'),
(112, 1, 'Korea, Democratic People''s Republic of', 'PRK', 'KP'),
(113, 1, 'Korea, Republic of', 'KOR', 'KR'),
(114, 1, 'Kuwait', 'KWT', 'KW'),
(115, 1, 'Kyrgyzstan', 'KGZ', 'KG'),
(116, 1, 'Lao People''s Democratic Republic', 'LAO', 'LA'),
(117, 1, 'Latvia', 'LVA', 'LV'),
(118, 1, 'Lebanon', 'LBN', 'LB'),
(119, 1, 'Lesotho', 'LSO', 'LS'),
(120, 1, 'Liberia', 'LBR', 'LR'),
(121, 1, 'Libyan Arab Jamahiriya', 'LBY', 'LY'),
(122, 1, 'Liechtenstein', 'LIE', 'LI'),
(123, 1, 'Lithuania', 'LTU', 'LT'),
(124, 1, 'Luxembourg', 'LUX', 'LU'),
(125, 1, 'Macau', 'MAC', 'MO'),
(126, 1, 'Macedonia, The Former Yugoslav Republic of', 'MKD', 'MK'),
(127, 1, 'Madagascar', 'MDG', 'MG'),
(128, 1, 'Malawi', 'MWI', 'MW'),
(129, 1, 'Malaysia', 'MYS', 'MY'),
(130, 1, 'Maldives', 'MDV', 'MV'),
(131, 1, 'Mali', 'MLI', 'ML'),
(132, 1, 'Malta', 'MLT', 'MT'),
(133, 1, 'Marshall Islands', 'MHL', 'MH'),
(134, 1, 'Martinique', 'MTQ', 'MQ'),
(135, 1, 'Mauritania', 'MRT', 'MR'),
(136, 1, 'Mauritius', 'MUS', 'MU'),
(137, 1, 'Mayotte', 'MYT', 'YT'),
(138, 1, 'Mexico', 'MEX', 'MX'),
(139, 1, 'Micronesia, Federated States of', 'FSM', 'FM'),
(140, 1, 'Moldova, Republic of', 'MDA', 'MD'),
(141, 1, 'Monaco', 'MCO', 'MC'),
(142, 1, 'Mongolia', 'MNG', 'MN'),
(143, 1, 'Montserrat', 'MSR', 'MS'),
(144, 1, 'Morocco', 'MAR', 'MA'),
(145, 1, 'Mozambique', 'MOZ', 'MZ'),
(146, 1, 'Myanmar', 'MMR', 'MM'),
(147, 1, 'Namibia', 'NAM', 'NA'),
(148, 1, 'Nauru', 'NRU', 'NR'),
(149, 1, 'Nepal', 'NPL', 'NP'),
(150, 1, 'Netherlands', 'NLD', 'NL'),
(151, 1, 'Netherlands Antilles', 'ANT', 'AN'),
(152, 1, 'New Caledonia', 'NCL', 'NC'),
(153, 1, 'New Zealand', 'NZL', 'NZ'),
(154, 1, 'Nicaragua', 'NIC', 'NI'),
(155, 1, 'Niger', 'NER', 'NE'),
(156, 1, 'Nigeria', 'NGA', 'NG'),
(157, 1, 'Niue', 'NIU', 'NU'),
(158, 1, 'Norfolk Island', 'NFK', 'NF'),
(159, 1, 'Northern Mariana Islands', 'MNP', 'MP'),
(160, 1, 'Norway', 'NOR', 'NO'),
(161, 1, 'Oman', 'OMN', 'OM'),
(162, 1, 'Pakistan', 'PAK', 'PK'),
(163, 1, 'Palau', 'PLW', 'PW'),
(164, 1, 'Panama', 'PAN', 'PA'),
(165, 1, 'Papua New Guinea', 'PNG', 'PG'),
(166, 1, 'Paraguay', 'PRY', 'PY'),
(167, 1, 'Peru', 'PER', 'PE'),
(168, 1, 'Philippines', 'PHL', 'PH'),
(169, 1, 'Pitcairn', 'PCN', 'PN'),
(170, 1, 'Poland', 'POL', 'PL'),
(171, 1, 'Portugal', 'PRT', 'PT'),
(172, 1, 'Puerto Rico', 'PRI', 'PR'),
(173, 1, 'Qatar', 'QAT', 'QA'),
(174, 1, 'Reunion', 'REU', 'RE'),
(175, 1, 'Romania', 'ROM', 'RO'),
(176, 1, 'Russian Federation', 'RUS', 'RU'),
(177, 1, 'Rwanda', 'RWA', 'RW'),
(178, 1, 'Saint Kitts and Nevis', 'KNA', 'KN'),
(179, 1, 'Saint Lucia', 'LCA', 'LC'),
(180, 1, 'Saint Vincent and the Grenadines', 'VCT', 'VC'),
(181, 1, 'Samoa', 'WSM', 'WS'),
(182, 1, 'San Marino', 'SMR', 'SM'),
(183, 1, 'Sao Tome and Principe', 'STP', 'ST'),
(184, 1, 'Saudi Arabia', 'SAU', 'SA'),
(185, 1, 'Senegal', 'SEN', 'SN'),
(186, 1, 'Seychelles', 'SYC', 'SC'),
(187, 1, 'Sierra Leone', 'SLE', 'SL'),
(188, 1, 'Singapore', 'SGP', 'SG'),
(189, 1, 'Slovakia (Slovak Republic)', 'SVK', 'SK'),
(190, 1, 'Slovenia', 'SVN', 'SI'),
(191, 1, 'Solomon Islands', 'SLB', 'SB'),
(192, 1, 'Somalia', 'SOM', 'SO'),
(193, 1, 'South Africa', 'ZAF', 'ZA'),
(194, 1, 'South Georgia and the South Sandwich Islands', 'SGS', 'GS'),
(195, 1, 'Spain', 'ESP', 'ES'),
(196, 1, 'Sri Lanka', 'LKA', 'LK'),
(197, 1, 'St. Helena', 'SHN', 'SH'),
(198, 1, 'St. Pierre and Miquelon', 'SPM', 'PM'),
(199, 1, 'Sudan', 'SDN', 'SD'),
(200, 1, 'Suriname', 'SUR', 'SR'),
(201, 1, 'Svalbard and Jan Mayen Islands', 'SJM', 'SJ'),
(202, 1, 'Swaziland', 'SWZ', 'SZ'),
(203, 1, 'Sweden', 'SWE', 'SE'),
(204, 1, 'Switzerland', 'CHE', 'CH'),
(205, 1, 'Syrian Arab Republic', 'SYR', 'SY'),
(206, 1, 'Taiwan', 'TWN', 'TW'),
(207, 1, 'Tajikistan', 'TJK', 'TJ'),
(208, 1, 'Tanzania, United Republic of', 'TZA', 'TZ'),
(209, 1, 'Thailand', 'THA', 'TH'),
(210, 1, 'Togo', 'TGO', 'TG'),
(211, 1, 'Tokelau', 'TKL', 'TK'),
(212, 1, 'Tonga', 'TON', 'TO'),
(213, 1, 'Trinidad and Tobago', 'TTO', 'TT'),
(214, 1, 'Tunisia', 'TUN', 'TN'),
(215, 1, 'Turkey', 'TUR', 'TR'),
(216, 1, 'Turkmenistan', 'TKM', 'TM'),
(217, 1, 'Turks and Caicos Islands', 'TCA', 'TC'),
(218, 1, 'Tuvalu', 'TUV', 'TV'),
(219, 1, 'Uganda', 'UGA', 'UG'),
(220, 1, 'Ukraine', 'UKR', 'UA'),
(221, 1, 'United Arab Emirates', 'ARE', 'AE'),
(222, 1, 'United Kingdom', 'GBR', 'GB'),
(223, 1, 'United States', 'USA', 'US'),
(224, 1, 'United States Minor Outlying Islands', 'UMI', 'UM'),
(225, 1, 'Uruguay', 'URY', 'UY'),
(226, 1, 'Uzbekistan', 'UZB', 'UZ'),
(227, 1, 'Vanuatu', 'VUT', 'VU'),
(228, 1, 'Vatican City State (Holy See)', 'VAT', 'VA'),
(229, 1, 'Venezuela', 'VEN', 'VE'),
(230, 1, 'Viet Nam', 'VNM', 'VN'),
(231, 1, 'Virgin Islands (British)', 'VGB', 'VG'),
(232, 1, 'Virgin Islands (U.S.)', 'VIR', 'VI'),
(233, 1, 'Wallis and Futuna Islands', 'WLF', 'WF'),
(234, 1, 'Western Sahara', 'ESH', 'EH'),
(235, 1, 'Yemen', 'YEM', 'YE'),
(236, 1, 'Serbia', 'SRB', 'RS'),
(237, 1, 'The Democratic Republic of Congo', 'DRC', 'DC'),
(238, 1, 'Zambia', 'ZMB', 'ZM'),
(239, 1, 'Zimbabwe', 'ZWE', 'ZW'),
(240, 1, 'East Timor', 'XET', 'XE'),
(241, 1, 'Jersey', 'XJE', 'XJ'),
(242, 1, 'St. Barthelemy', 'XSB', 'XB'),
(243, 1, 'St. Eustatius', 'XSE', 'XU'),
(244, 1, 'Canary Islands', 'XCA', 'XC'),
(245, 1, 'Montenegro', 'MNE', 'ME');

-- --------------------------------------------------------

--
-- Table structure for table `webvn_vm_coupons`
--

CREATE TABLE IF NOT EXISTS `webvn_vm_coupons` (
  `coupon_id` int(16) NOT NULL auto_increment,
  `coupon_code` varchar(32) NOT NULL default '',
  `percent_or_total` enum('percent','total') NOT NULL default 'percent',
  `coupon_type` enum('gift','permanent') NOT NULL default 'gift',
  `coupon_value` decimal(12,2) NOT NULL default '0.00',
  PRIMARY KEY  (`coupon_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Used to store coupon codes' AUTO_INCREMENT=5 ;

--
-- Dumping data for table `webvn_vm_coupons`
--

INSERT INTO `webvn_vm_coupons` (`coupon_id`, `coupon_code`, `percent_or_total`, `coupon_type`, `coupon_value`) VALUES
(1, 'test1', 'total', 'gift', '6.00'),
(2, 'test2', 'percent', 'permanent', '15.00'),
(3, 'test3', 'total', 'permanent', '4.00'),
(4, 'test4', 'total', 'gift', '15.00');

-- --------------------------------------------------------

--
-- Table structure for table `webvn_vm_creditcard`
--

CREATE TABLE IF NOT EXISTS `webvn_vm_creditcard` (
  `creditcard_id` int(11) NOT NULL auto_increment,
  `vendor_id` int(11) NOT NULL default '0',
  `creditcard_name` varchar(70) NOT NULL default '',
  `creditcard_code` varchar(30) NOT NULL default '',
  PRIMARY KEY  (`creditcard_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Used to store credit card types' AUTO_INCREMENT=8 ;

--
-- Dumping data for table `webvn_vm_creditcard`
--

INSERT INTO `webvn_vm_creditcard` (`creditcard_id`, `vendor_id`, `creditcard_name`, `creditcard_code`) VALUES
(1, 1, 'Visa', 'VISA'),
(2, 1, 'MasterCard', 'MC'),
(3, 1, 'American Express', 'amex'),
(4, 1, 'Discover Card', 'discover'),
(5, 1, 'Diners Club', 'diners'),
(6, 1, 'JCB', 'jcb'),
(7, 1, 'Australian Bankcard', 'australian_bc');

-- --------------------------------------------------------

--
-- Table structure for table `webvn_vm_csv`
--

CREATE TABLE IF NOT EXISTS `webvn_vm_csv` (
  `field_id` int(11) NOT NULL auto_increment,
  `field_name` varchar(128) NOT NULL default '',
  `field_default_value` text,
  `field_ordering` int(3) NOT NULL default '0',
  `field_required` char(1) default 'N',
  PRIMARY KEY  (`field_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Holds all fields which are used on CVS Ex-/Import' AUTO_INCREMENT=26 ;

--
-- Dumping data for table `webvn_vm_csv`
--

INSERT INTO `webvn_vm_csv` (`field_id`, `field_name`, `field_default_value`, `field_ordering`, `field_required`) VALUES
(1, 'product_sku', '', 1, 'Y'),
(2, 'product_s_desc', '', 5, 'N'),
(3, 'product_desc', '', 6, 'N'),
(4, 'product_thumb_image', '', 7, 'N'),
(5, 'product_full_image', '', 8, 'N'),
(6, 'product_weight', '', 9, 'N'),
(7, 'product_weight_uom', 'KG', 10, 'N'),
(8, 'product_length', '', 11, 'N'),
(9, 'product_width', '', 12, 'N'),
(10, 'product_height', '', 13, 'N'),
(11, 'product_lwh_uom', '', 14, 'N'),
(12, 'product_in_stock', '0', 15, 'N'),
(13, 'product_available_date', '', 16, 'N'),
(14, 'product_discount_id', '', 17, 'N'),
(15, 'product_name', '', 2, 'Y'),
(16, 'product_price', '', 4, 'N'),
(17, 'category_path', '', 3, 'Y'),
(18, 'manufacturer_id', '', 18, 'N'),
(19, 'product_tax_id', '', 19, 'N'),
(20, 'product_sales', '', 20, 'N'),
(21, 'product_parent_id', '0', 21, 'N'),
(22, 'attribute', '', 22, 'N'),
(23, 'custom_attribute', '', 23, 'N'),
(24, 'attributes', '', 24, 'N'),
(25, 'attribute_values', '', 25, 'N');

-- --------------------------------------------------------

--
-- Table structure for table `webvn_vm_currency`
--

CREATE TABLE IF NOT EXISTS `webvn_vm_currency` (
  `currency_id` int(11) NOT NULL auto_increment,
  `currency_name` varchar(64) default NULL,
  `currency_code` char(3) default NULL,
  PRIMARY KEY  (`currency_id`),
  KEY `idx_currency_name` (`currency_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Used to store currencies' AUTO_INCREMENT=159 ;

--
-- Dumping data for table `webvn_vm_currency`
--

INSERT INTO `webvn_vm_currency` (`currency_id`, `currency_name`, `currency_code`) VALUES
(1, 'Andorran Peseta', 'ADP'),
(2, 'United Arab Emirates Dirham', 'AED'),
(3, 'Afghanistan Afghani', 'AFA'),
(4, 'Albanian Lek', 'ALL'),
(5, 'Netherlands Antillian Guilder', 'ANG'),
(6, 'Angolan Kwanza', 'AOK'),
(7, 'Argentine Peso', 'ARS'),
(9, 'Australian Dollar', 'AUD'),
(10, 'Aruban Florin', 'AWG'),
(11, 'Barbados Dollar', 'BBD'),
(12, 'Bangladeshi Taka', 'BDT'),
(14, 'Bulgarian Lev', 'BGL'),
(15, 'Bahraini Dinar', 'BHD'),
(16, 'Burundi Franc', 'BIF'),
(17, 'Bermudian Dollar', 'BMD'),
(18, 'Brunei Dollar', 'BND'),
(19, 'Bolivian Boliviano', 'BOB'),
(20, 'Brazilian Real', 'BRL'),
(21, 'Bahamian Dollar', 'BSD'),
(22, 'Bhutan Ngultrum', 'BTN'),
(23, 'Burma Kyat', 'BUK'),
(24, 'Botswanian Pula', 'BWP'),
(25, 'Belize Dollar', 'BZD'),
(26, 'Canadian Dollar', 'CAD'),
(27, 'Swiss Franc', 'CHF'),
(28, 'Chilean Unidades de Fomento', 'CLF'),
(29, 'Chilean Peso', 'CLP'),
(30, 'Yuan (Chinese) Renminbi', 'CNY'),
(31, 'Colombian Peso', 'COP'),
(32, 'Costa Rican Colon', 'CRC'),
(33, 'Czech Koruna', 'CZK'),
(34, 'Cuban Peso', 'CUP'),
(35, 'Cape Verde Escudo', 'CVE'),
(36, 'Cyprus Pound', 'CYP'),
(40, 'Danish Krone', 'DKK'),
(41, 'Dominican Peso', 'DOP'),
(42, 'Algerian Dinar', 'DZD'),
(43, 'Ecuador Sucre', 'ECS'),
(44, 'Egyptian Pound', 'EGP'),
(46, 'Ethiopian Birr', 'ETB'),
(47, 'Euro', 'EUR'),
(49, 'Fiji Dollar', 'FJD'),
(50, 'Falkland Islands Pound', 'FKP'),
(52, 'British Pound', 'GBP'),
(53, 'Ghanaian Cedi', 'GHC'),
(54, 'Gibraltar Pound', 'GIP'),
(55, 'Gambian Dalasi', 'GMD'),
(56, 'Guinea Franc', 'GNF'),
(58, 'Guatemalan Quetzal', 'GTQ'),
(59, 'Guinea-Bissau Peso', 'GWP'),
(60, 'Guyanan Dollar', 'GYD'),
(61, 'Hong Kong Dollar', 'HKD'),
(62, 'Honduran Lempira', 'HNL'),
(63, 'Haitian Gourde', 'HTG'),
(64, 'Hungarian Forint', 'HUF'),
(65, 'Indonesian Rupiah', 'IDR'),
(66, 'Irish Punt', 'IEP'),
(67, 'Israeli Shekel', 'ILS'),
(68, 'Indian Rupee', 'INR'),
(69, 'Iraqi Dinar', 'IQD'),
(70, 'Iranian Rial', 'IRR'),
(73, 'Jamaican Dollar', 'JMD'),
(74, 'Jordanian Dinar', 'JOD'),
(75, 'Japanese Yen', 'JPY'),
(76, 'Kenyan Shilling', 'KES'),
(77, 'Kampuchean (Cambodian) Riel', 'KHR'),
(78, 'Comoros Franc', 'KMF'),
(79, 'North Korean Won', 'KPW'),
(80, '(South) Korean Won', 'KRW'),
(81, 'Kuwaiti Dinar', 'KWD'),
(82, 'Cayman Islands Dollar', 'KYD'),
(83, 'Lao Kip', 'LAK'),
(84, 'Lebanese Pound', 'LBP'),
(85, 'Sri Lanka Rupee', 'LKR'),
(86, 'Liberian Dollar', 'LRD'),
(87, 'Lesotho Loti', 'LSL'),
(89, 'Libyan Dinar', 'LYD'),
(90, 'Moroccan Dirham', 'MAD'),
(91, 'Malagasy Franc', 'MGF'),
(92, 'Mongolian Tugrik', 'MNT'),
(93, 'Macau Pataca', 'MOP'),
(94, 'Mauritanian Ouguiya', 'MRO'),
(95, 'Maltese Lira', 'MTL'),
(96, 'Mauritius Rupee', 'MUR'),
(97, 'Maldive Rufiyaa', 'MVR'),
(98, 'Malawi Kwacha', 'MWK'),
(99, 'Mexican Peso', 'MXP'),
(100, 'Malaysian Ringgit', 'MYR'),
(101, 'Mozambique Metical', 'MZM'),
(102, 'Nigerian Naira', 'NGN'),
(103, 'Nicaraguan Cordoba', 'NIC'),
(105, 'Norwegian Kroner', 'NOK'),
(106, 'Nepalese Rupee', 'NPR'),
(107, 'New Zealand Dollar', 'NZD'),
(108, 'Omani Rial', 'OMR'),
(109, 'Panamanian Balboa', 'PAB'),
(110, 'Peruvian Nuevo Sol', 'PEN'),
(111, 'Papua New Guinea Kina', 'PGK'),
(112, 'Philippine Peso', 'PHP'),
(113, 'Pakistan Rupee', 'PKR'),
(114, 'Polish Złoty', 'PLN'),
(116, 'Paraguay Guarani', 'PYG'),
(117, 'Qatari Rial', 'QAR'),
(118, 'Romanian Leu', 'RON'),
(119, 'Rwanda Franc', 'RWF'),
(120, 'Saudi Arabian Riyal', 'SAR'),
(121, 'Solomon Islands Dollar', 'SBD'),
(122, 'Seychelles Rupee', 'SCR'),
(123, 'Sudanese Pound', 'SDP'),
(124, 'Swedish Krona', 'SEK'),
(125, 'Singapore Dollar', 'SGD'),
(126, 'St. Helena Pound', 'SHP'),
(127, 'Sierra Leone Leone', 'SLL'),
(128, 'Somali Shilling', 'SOS'),
(129, 'Suriname Guilder', 'SRG'),
(130, 'Sao Tome and Principe Dobra', 'STD'),
(131, 'Russian Ruble', 'RUB'),
(132, 'El Salvador Colon', 'SVC'),
(133, 'Syrian Potmd', 'SYP'),
(134, 'Swaziland Lilangeni', 'SZL'),
(135, 'Thai Bath', 'THB'),
(136, 'Tunisian Dinar', 'TND'),
(137, 'Tongan Pa''anga', 'TOP'),
(138, 'East Timor Escudo', 'TPE'),
(139, 'Turkish Lira', 'TRY'),
(140, 'Trinidad and Tobago Dollar', 'TTD'),
(141, 'Taiwan Dollar', 'TWD'),
(142, 'Tanzanian Shilling', 'TZS'),
(143, 'Uganda Shilling', 'UGS'),
(144, 'US Dollar', 'USD'),
(145, 'Uruguayan Peso', 'UYP'),
(146, 'Venezualan Bolivar', 'VEB'),
(147, 'Vietnamese Dong', 'VND'),
(148, 'Vanuatu Vatu', 'VUV'),
(149, 'Samoan Tala', 'WST'),
(150, 'Democratic Yemeni Dinar', 'YDD'),
(151, 'Yemeni Rial', 'YER'),
(152, 'Dinar', 'RSD'),
(153, 'South African Rand', 'ZAR'),
(154, 'Zambian Kwacha', 'ZMK'),
(155, 'Zaire Zaire', 'ZRZ'),
(156, 'Zimbabwe Dollar', 'ZWD'),
(157, 'Slovak Koruna', 'SKK'),
(158, 'Armenian Dram', 'AMD');

-- --------------------------------------------------------

--
-- Table structure for table `webvn_vm_export`
--

CREATE TABLE IF NOT EXISTS `webvn_vm_export` (
  `export_id` int(11) NOT NULL auto_increment,
  `vendor_id` int(11) default NULL,
  `export_name` varchar(255) default NULL,
  `export_desc` text NOT NULL,
  `export_class` varchar(50) NOT NULL,
  `export_enabled` char(1) NOT NULL default 'N',
  `export_config` text NOT NULL,
  `iscore` tinyint(3) NOT NULL default '0',
  PRIMARY KEY  (`export_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Export Modules' AUTO_INCREMENT=1 ;

--
-- Dumping data for table `webvn_vm_export`
--


-- --------------------------------------------------------

--
-- Table structure for table `webvn_vm_function`
--

CREATE TABLE IF NOT EXISTS `webvn_vm_function` (
  `function_id` int(11) NOT NULL auto_increment,
  `module_id` int(11) default NULL,
  `function_name` varchar(32) default NULL,
  `function_class` varchar(32) default NULL,
  `function_method` varchar(32) default NULL,
  `function_description` text,
  `function_perms` varchar(255) default NULL,
  PRIMARY KEY  (`function_id`),
  KEY `idx_function_module_id` (`module_id`),
  KEY `idx_function_name` (`function_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Used to map a function alias to a ''real'' class::function' AUTO_INCREMENT=195 ;

--
-- Dumping data for table `webvn_vm_function`
--

INSERT INTO `webvn_vm_function` (`function_id`, `module_id`, `function_name`, `function_class`, `function_method`, `function_description`, `function_perms`) VALUES
(1, 1, 'userAdd', 'ps_user', 'add', '', 'admin,storeadmin'),
(2, 1, 'userDelete', 'ps_user', 'delete', '', 'admin,storeadmin'),
(3, 1, 'userUpdate', 'ps_user', 'update', '', 'admin,storeadmin'),
(31, 2, 'productAdd', 'ps_product', 'add', '', 'admin,storeadmin'),
(6, 1, 'functionAdd', 'ps_function', 'add', '', 'admin'),
(7, 1, 'functionUpdate', 'ps_function', 'update', '', 'admin'),
(8, 1, 'functionDelete', 'ps_function', 'delete', '', 'admin'),
(9, 1, 'userLogout', 'ps_user', 'logout', '', 'none'),
(10, 1, 'userAddressAdd', 'ps_user_address', 'add', '', 'admin,storeadmin,shopper,demo'),
(11, 1, 'userAddressUpdate', 'ps_user_address', 'update', '', 'admin,storeadmin,shopper'),
(12, 1, 'userAddressDelete', 'ps_user_address', 'delete', '', 'admin,storeadmin,shopper'),
(13, 1, 'moduleAdd', 'ps_module', 'add', '', 'admin'),
(14, 1, 'moduleUpdate', 'ps_module', 'update', '', 'admin'),
(15, 1, 'moduleDelete', 'ps_module', 'delete', '', 'admin'),
(16, 1, 'userLogin', 'ps_user', 'login', '', 'none'),
(17, 3, 'vendorAdd', 'ps_vendor', 'add', '', 'admin'),
(18, 3, 'vendorUpdate', 'ps_vendor', 'update', '', 'admin,storeadmin'),
(19, 3, 'vendorDelete', 'ps_vendor', 'delete', '', 'admin'),
(20, 3, 'vendorCategoryAdd', 'ps_vendor_category', 'add', '', 'admin'),
(21, 3, 'vendorCategoryUpdate', 'ps_vendor_category', 'update', '', 'admin'),
(22, 3, 'vendorCategoryDelete', 'ps_vendor_category', 'delete', '', 'admin'),
(23, 4, 'shopperAdd', 'ps_shopper', 'add', '', 'none'),
(24, 4, 'shopperDelete', 'ps_shopper', 'delete', '', 'admin,storeadmin'),
(25, 4, 'shopperUpdate', 'ps_shopper', 'update', '', 'admin,storeadmin,shopper'),
(26, 4, 'shopperGroupAdd', 'ps_shopper_group', 'add', '', 'admin,storeadmin'),
(27, 4, 'shopperGroupUpdate', 'ps_shopper_group', 'update', '', 'admin,storeadmin'),
(28, 4, 'shopperGroupDelete', 'ps_shopper_group', 'delete', '', 'admin,storeadmin'),
(30, 5, 'orderStatusSet', 'ps_order', 'order_status_update', '', 'admin,storeadmin'),
(32, 2, 'productDelete', 'ps_product', 'delete', '', 'admin,storeadmin'),
(33, 2, 'productUpdate', 'ps_product', 'update', '', 'admin,storeadmin'),
(34, 2, 'productCategoryAdd', 'ps_product_category', 'add', '', 'admin,storeadmin'),
(35, 2, 'productCategoryUpdate', 'ps_product_category', 'update', '', 'admin,storeadmin'),
(36, 2, 'productCategoryDelete', 'ps_product_category', 'delete', '', 'admin,storeadmin'),
(37, 2, 'productPriceAdd', 'ps_product_price', 'add', '', 'admin,storeadmin'),
(38, 2, 'productPriceUpdate', 'ps_product_price', 'update', '', 'admin,storeadmin'),
(39, 2, 'productPriceDelete', 'ps_product_price', 'delete', '', 'admin,storeadmin'),
(40, 2, 'productAttributeAdd', 'ps_product_attribute', 'add', '', 'admin,storeadmin'),
(41, 2, 'productAttributeUpdate', 'ps_product_attribute', 'update', '', 'admin,storeadmin'),
(42, 2, 'productAttributeDelete', 'ps_product_attribute', 'delete', '', 'admin,storeadmin'),
(43, 7, 'cartAdd', 'ps_cart', 'add', '', 'none'),
(44, 7, 'cartUpdate', 'ps_cart', 'update', '', 'none'),
(45, 7, 'cartDelete', 'ps_cart', 'delete', '', 'none'),
(46, 10, 'checkoutComplete', 'ps_checkout', 'add', '', 'shopper,storeadmin,admin'),
(48, 8, 'paymentMethodUpdate', 'ps_payment_method', 'update', '', 'admin,storeadmin'),
(49, 8, 'paymentMethodAdd', 'ps_payment_method', 'add', '', 'admin,storeadmin'),
(50, 8, 'paymentMethodDelete', 'ps_payment_method', 'delete', '', 'admin,storeadmin'),
(51, 5, 'orderDelete', 'ps_order', 'delete', '', 'admin,storeadmin'),
(52, 11, 'addTaxRate', 'ps_tax', 'add', '', 'admin,storeadmin'),
(53, 11, 'updateTaxRate', 'ps_tax', 'update', '', 'admin,storeadmin'),
(54, 11, 'deleteTaxRate', 'ps_tax', 'delete', '', 'admin,storeadmin'),
(55, 10, 'checkoutValidateST', 'ps_checkout', 'validate_shipto', '', 'none'),
(59, 5, 'orderStatusUpdate', 'ps_order_status', 'update', '', 'admin,storeadmin'),
(60, 5, 'orderStatusAdd', 'ps_order_status', 'add', '', 'storeadmin,admin'),
(61, 5, 'orderStatusDelete', 'ps_order_status', 'delete', '', 'admin,storeadmin'),
(62, 1, 'currencyAdd', 'ps_currency', 'add', 'add a currency', 'storeadmin,admin'),
(63, 1, 'currencyUpdate', 'ps_currency', 'update', '        update a currency', 'storeadmin,admin'),
(64, 1, 'currencyDelete', 'ps_currency', 'delete', 'delete a currency', 'storeadmin,admin'),
(65, 1, 'countryAdd', 'ps_country', 'add', 'Add a country ', 'storeadmin,admin'),
(66, 1, 'countryUpdate', 'ps_country', 'update', 'Update a country record', 'storeadmin,admin'),
(67, 1, 'countryDelete', 'ps_country', 'delete', 'Delete a country record', 'storeadmin,admin'),
(68, 2, 'product_csv', 'ps_csv', 'upload_csv', '', 'admin'),
(110, 7, 'waitingListAdd', 'zw_waiting_list', 'add', '', 'none'),
(111, 13, 'addzone', 'ps_zone', 'add', 'This will add a zone', 'admin,storeadmin'),
(112, 13, 'updatezone', 'ps_zone', 'update', 'This will update a zone', 'admin,storeadmin'),
(113, 13, 'deletezone', 'ps_zone', 'delete', 'This will delete a zone', 'admin,storeadmin'),
(114, 13, 'zoneassign', 'ps_zone', 'assign', 'This will assign a country to a zone', 'admin,storeadmin'),
(115, 1, 'writeConfig', 'ps_config', 'writeconfig', 'This will write the configuration details to virtuemart.cfg.php', 'admin'),
(116, 12839, 'carrierAdd', 'ps_shipping', 'add', '', 'admin,storeadmin'),
(117, 12839, 'carrierDelete', 'ps_shipping', 'delete', '', 'admin,storeadmin'),
(118, 12839, 'carrierUpdate', 'ps_shipping', 'update', '', 'admin,storeadmin'),
(119, 12839, 'rateAdd', 'ps_shipping', 'rate_add', '', 'admin,storeadmin'),
(120, 12839, 'rateUpdate', 'ps_shipping', 'rate_update', '', 'admin,shopadmin'),
(121, 12839, 'rateDelete', 'ps_shipping', 'rate_delete', '', 'admin,storeadmin'),
(122, 10, 'checkoutProcess', 'ps_checkout', 'process', '', 'none'),
(123, 5, 'downloadRequest', 'ps_order', 'download_request', 'This checks if the download request is valid and sends the file to the browser as file download if the request was successful, otherwise echoes an error', 'none'),
(128, 99, 'manufacturerAdd', 'ps_manufacturer', 'add', '', 'admin,storeadmin'),
(129, 99, 'manufacturerUpdate', 'ps_manufacturer', 'update', '', 'admin,storeadmin'),
(130, 99, 'manufacturerDelete', 'ps_manufacturer', 'delete', '', 'admin,storeadmin'),
(131, 99, 'manufacturercategoryAdd', 'ps_manufacturer_category', 'add', '', 'admin,storeadmin'),
(132, 99, 'manufacturercategoryUpdate', 'ps_manufacturer_category', 'update', '', 'admin,storeadmin'),
(133, 99, 'manufacturercategoryDelete', 'ps_manufacturer_category', 'delete', '', 'admin,storeadmin'),
(134, 7, 'addReview', 'ps_reviews', 'process_review', 'This lets the user add a review and rating to a product.', 'admin,storeadmin,shopper,demo'),
(135, 7, 'productReviewDelete', 'ps_reviews', 'delete_review', 'This deletes a review and from a product.', 'admin,storeadmin'),
(136, 8, 'creditcardAdd', 'ps_creditcard', 'add', 'Adds a Credit Card entry.', 'admin,storeadmin'),
(137, 8, 'creditcardUpdate', 'ps_creditcard', 'update', 'Updates a Credit Card entry.', 'admin,storeadmin'),
(138, 8, 'creditcardDelete', 'ps_creditcard', 'delete', 'Deletes a Credit Card entry.', 'admin,storeadmin'),
(139, 2, 'changePublishState', 'vmAbstractObject.class', 'handlePublishState', 'Changes the publish field of an item, so that it can be published or unpublished easily.', 'admin,storeadmin'),
(140, 2, 'export_csv', 'ps_csv', 'export_csv', 'This function exports all relevant product data to CSV.', 'admin,storeadmin'),
(141, 2, 'reorder', 'ps_product_category', 'reorder', 'Changes the list order of a category.', 'admin,storeadmin'),
(142, 2, 'discountAdd', 'ps_product_discount', 'add', 'Adds a discount.', 'admin,storeadmin'),
(143, 2, 'discountUpdate', 'ps_product_discount', 'update', 'Updates a discount.', 'admin,storeadmin'),
(144, 2, 'discountDelete', 'ps_product_discount', 'delete', 'Deletes a discount.', 'admin,storeadmin'),
(145, 8, 'shippingmethodSave', 'ps_shipping_method', 'save', '', 'admin,storeadmin'),
(146, 2, 'uploadProductFile', 'ps_product_files', 'add', 'Uploads and Adds a Product Image/File.', 'admin,storeadmin'),
(147, 2, 'updateProductFile', 'ps_product_files', 'update', 'Updates a Product Image/File.', 'admin,storeadmin'),
(148, 2, 'deleteProductFile', 'ps_product_files', 'delete', 'Deletes a Product Image/File.', 'admin,storeadmin'),
(149, 12843, 'couponAdd', 'ps_coupon', 'add_coupon_code', 'Adds a Coupon.', 'admin,storeadmin'),
(150, 12843, 'couponUpdate', 'ps_coupon', 'update_coupon', 'Updates a Coupon.', 'admin,storeadmin'),
(151, 12843, 'couponDelete', 'ps_coupon', 'remove_coupon_code', 'Deletes a Coupon.', 'admin,storeadmin'),
(152, 12843, 'couponProcess', 'ps_coupon', 'process_coupon_code', 'Processes a Coupon.', 'admin,storeadmin,shopper,demo'),
(153, 2, 'ProductTypeAdd', 'ps_product_type', 'add', 'Function add a Product Type and create new table product_type_<id>.', 'admin'),
(154, 2, 'ProductTypeUpdate', 'ps_product_type', 'update', 'Update a Product Type.', 'admin'),
(155, 2, 'ProductTypeDelete', 'ps_product_type', 'delete', 'Delete a Product Type and drop table product_type_<id>.', 'admin'),
(156, 2, 'ProductTypeReorder', 'ps_product_type', 'reorder', 'Changes the list order of a Product Type.', 'admin'),
(157, 2, 'ProductTypeAddParam', 'ps_product_type_parameter', 'add_parameter', 'Function add a Parameter into a Product Type and create new column in table product_type_<id>.', 'admin'),
(158, 2, 'ProductTypeUpdateParam', 'ps_product_type_parameter', 'update_parameter', 'Function update a Parameter in a Product Type and a column in table product_type_<id>.', 'admin'),
(159, 2, 'ProductTypeDeleteParam', 'ps_product_type_parameter', 'delete_parameter', 'Function delete a Parameter from a Product Type and drop a column in table product_type_<id>.', 'admin'),
(160, 2, 'ProductTypeReorderParam', 'ps_product_type_parameter', 'reorder_parameter', 'Changes the list order of a Parameter.', 'admin'),
(161, 2, 'productProductTypeAdd', 'ps_product_product_type', 'add', 'Add a Product into a Product Type.', 'admin,storeadmin'),
(162, 2, 'productProductTypeDelete', 'ps_product_product_type', 'delete', 'Delete a Product from a Product Type.', 'admin,storeadmin'),
(163, 1, 'stateAdd', 'ps_country', 'addState', 'Add a State ', 'storeadmin,admin'),
(164, 1, 'stateUpdate', 'ps_country', 'updateState', 'Update a state record', 'storeadmin,admin'),
(165, 1, 'stateDelete', 'ps_country', 'deleteState', 'Delete a state record', 'storeadmin,admin'),
(166, 2, 'csvFieldAdd', 'ps_csv', 'add', 'Add a CSV Field ', 'storeadmin,admin'),
(167, 2, 'csvFieldUpdate', 'ps_csv', 'update', 'Update a CSV Field', 'storeadmin,admin'),
(168, 2, 'csvFieldDelete', 'ps_csv', 'delete', 'Delete a CSV Field', 'storeadmin,admin'),
(169, 1, 'userfieldSave', 'ps_userfield', 'savefield', 'add or edit a user field', 'admin'),
(170, 1, 'userfieldDelete', 'ps_userfield', 'deletefield', '', 'admin'),
(171, 1, 'changeordering', 'vmAbstractObject.class', 'handleordering', '', 'admin'),
(172, 2, 'moveProduct', 'ps_product', 'move', 'Move products from one category to another.', 'admin,storeadmin'),
(173, 7, 'productAsk', 'ps_communication', 'mail_question', 'Lets the customer send a question about a specific product.', 'none'),
(174, 7, 'recommendProduct', 'ps_communication', 'sendRecommendation', 'Lets the customer send a recommendation about a specific product to a friend.', 'none'),
(175, 2, 'reviewUpdate', 'ps_reviews', 'update', 'Modify a review about a specific product.', 'admin'),
(176, 8, 'ExportUpdate', 'ps_export', 'update', '', 'admin,storeadmin'),
(177, 8, 'ExportAdd', 'ps_export', 'add', '', 'admin,storeadmin'),
(178, 8, 'ExportDelete', 'ps_export', 'delete', '', 'admin,storeadmin'),
(179, 1, 'writeThemeConfig', 'ps_config', 'writeThemeConfig', 'Writes a theme configuration file.', 'admin'),
(180, 1, 'usergroupAdd', 'usergroup.class', 'add', 'Add a new user group', 'admin'),
(181, 1, 'usergroupUpdate', 'usergroup.class', 'update', 'Update an user group', 'admin'),
(182, 1, 'usergroupDelete', 'usergroup.class', 'delete', 'Delete an user group', 'admin'),
(183, 1, 'setModulePermissions', 'ps_module', 'update_permissions', '', 'admin'),
(184, 1, 'setFunctionPermissions', 'ps_function', 'update_permissions', '', 'admin'),
(185, 2, 'insertDownloadsForProduct', 'ps_order', 'insert_downloads_for_product', '', 'admin'),
(186, 5, 'mailDownloadId', 'ps_order', 'mail_download_id', '', 'storeadmin,admin'),
(187, 7, 'replaceSavedCart', 'ps_cart', 'replaceCart', 'Replace cart with saved cart', 'none'),
(188, 7, 'mergeSavedCart', 'ps_cart', 'mergeSaved', 'Merge saved cart with cart', 'none'),
(189, 7, 'deleteSavedCart', 'ps_cart', 'deleteCart', 'Delete saved cart', 'none'),
(190, 7, 'savedCartDelete', 'ps_cart', 'deleteSaved', 'Delete items from saved cart', 'none'),
(191, 7, 'savedCartUpdate', 'ps_cart', 'updateSaved', 'Update saved cart items', 'none'),
(192, 1, 'getupdatepackage', 'update.class', 'getPatchPackage', 'Retrieves the Patch Package from the virtuemart.net Servers.', 'admin'),
(193, 1, 'applypatchpackage', 'update.class', 'applyPatch', 'Applies the Patch using the instructions from the update.xml file in the downloaded patch.', 'admin'),
(194, 1, 'removePatchPackage', 'update.class', 'removePackageFile', 'Removes  a Patch Package File and its extracted contents.', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `webvn_vm_magiczoomplus_config`
--

CREATE TABLE IF NOT EXISTS `webvn_vm_magiczoomplus_config` (
  `id` int(11) NOT NULL auto_increment COMMENT 'default profile should have id = 1',
  `profile` varchar(32) NOT NULL,
  `config` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `webvn_vm_magiczoomplus_config`
--

INSERT INTO `webvn_vm_magiczoomplus_config` (`id`, `profile`, `config`) VALUES
(1, 'default', 'thumb-max-width:250;thumb-max-height:250;message: '),
(2, 'browse', 'show-message:No;zoom-position:inner;click-to-activate:true;message:Click to zoom;multiple-images:No'),
(3, 'details', 'enable-effect:Both;'),
(4, 'latest', 'show-message:No;opacity-reverse:true;use-original-vm-thumbnails:Yes'),
(5, 'featured', 'show-message:No;opacity-reverse:true;use-original-vm-thumbnails:Yes'),
(6, 'random', 'show-message:No;opacity-reverse:true;use-original-vm-thumbnails:Yes'),
(7, 'custom', '');

-- --------------------------------------------------------

--
-- Table structure for table `webvn_vm_manufacturer`
--

CREATE TABLE IF NOT EXISTS `webvn_vm_manufacturer` (
  `manufacturer_id` int(11) NOT NULL auto_increment,
  `mf_name` varchar(64) default NULL,
  `mf_email` varchar(255) default NULL,
  `mf_desc` text,
  `mf_category_id` int(11) default NULL,
  `mf_url` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`manufacturer_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Manufacturers are those who create products' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `webvn_vm_manufacturer`
--

INSERT INTO `webvn_vm_manufacturer` (`manufacturer_id`, `mf_name`, `mf_email`, `mf_desc`, `mf_category_id`, `mf_url`) VALUES
(1, 'Manufacturer', 'info@manufacturer.com', 'An example for a manufacturer', 1, 'http://www.a-url.com');

-- --------------------------------------------------------

--
-- Table structure for table `webvn_vm_manufacturer_category`
--

CREATE TABLE IF NOT EXISTS `webvn_vm_manufacturer_category` (
  `mf_category_id` int(11) NOT NULL auto_increment,
  `mf_category_name` varchar(64) default NULL,
  `mf_category_desc` text,
  PRIMARY KEY  (`mf_category_id`),
  KEY `idx_manufacturer_category_category_name` (`mf_category_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Manufacturers are assigned to these categories' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `webvn_vm_manufacturer_category`
--

INSERT INTO `webvn_vm_manufacturer_category` (`mf_category_id`, `mf_category_name`, `mf_category_desc`) VALUES
(1, '-default-', 'This is the default manufacturer category');

-- --------------------------------------------------------

--
-- Table structure for table `webvn_vm_module`
--

CREATE TABLE IF NOT EXISTS `webvn_vm_module` (
  `module_id` int(11) NOT NULL auto_increment,
  `module_name` varchar(255) default NULL,
  `module_description` text,
  `module_perms` varchar(255) default NULL,
  `module_publish` char(1) default NULL,
  `list_order` int(11) default NULL,
  PRIMARY KEY  (`module_id`),
  KEY `idx_module_name` (`module_name`),
  KEY `idx_module_list_order` (`list_order`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='VirtueMart Core Modules, not: Joomla modules' AUTO_INCREMENT=12844 ;

--
-- Dumping data for table `webvn_vm_module`
--

INSERT INTO `webvn_vm_module` (`module_id`, `module_name`, `module_description`, `module_perms`, `module_publish`, `list_order`) VALUES
(1, 'admin', '<h4>ADMINISTRATIVE USERS ONLY</h4>\r\n\r\n<p>Only used for the following:</p>\r\n<OL>\r\n\r\n<LI>User Maintenance</LI>\r\n<LI>Module Maintenance</LI>\r\n<LI>Function Maintenance</LI>\r\n</OL>\r\n', 'admin', 'Y', 1),
(2, 'product', '<p>Here you can adminster your online catalog of products.  The Product Administrator allows you to create product categories, create new products, edit product attributes, and add product items for each attribute value.</p>', 'storeadmin,admin', 'Y', 4),
(3, 'vendor', '<h4>ADMINISTRATIVE USERS ONLY</h4>\r\n<p>Here you can manage the vendors on the phpShop system.</p>', 'admin', 'Y', 6),
(4, 'shopper', '<p>Manage shoppers in your store.  Allows you to create shopper groups.  Shopper groups can be used when setting the price for a product.  This allows you to create different prices for different types of users.  An example of this would be to have a ''wholesale'' group and a ''retail'' group. </p>', 'admin,storeadmin', 'Y', 4),
(5, 'order', '<p>View Order and Update Order Status.</p>', 'admin,storeadmin', 'Y', 5),
(6, 'msgs', 'This module is unprotected an used for displaying system messages to users.  We need to have an area that does not require authorization when things go wrong.', 'none', 'N', 99),
(7, 'shop', 'This is the Washupito store module.  This is the demo store included with the phpShop distribution.', 'none', 'Y', 99),
(8, 'store', '', 'storeadmin,admin', 'Y', 2),
(9, 'account', 'This module allows shoppers to update their account information and view previously placed orders.', 'shopper,storeadmin,admin,demo', 'N', 99),
(10, 'checkout', '', 'none', 'N', 99),
(11, 'tax', 'The tax module allows you to set tax rates for states or regions within a country.  The rate is set as a decimal figure.  For example, 2 percent tax would be 0.02.', 'admin,storeadmin', 'Y', 8),
(12, 'reportbasic', 'The report basic module allows you to do queries on all orders.', 'admin,storeadmin', 'Y', 7),
(13, 'zone', 'This is the zone-shipping module. Here you can manage your shipping costs according to Zones.', 'admin,storeadmin', 'N', 9),
(12839, 'shipping', '<h4>Shipping</h4><p>Let this module calculate the shipping fees for your customers.<br>Create carriers for shipping areas and weight groups.</p>', 'admin,storeadmin', 'Y', 10),
(99, 'manufacturer', 'Manage the manufacturers of products in your store.', 'storeadmin,admin', 'Y', 12),
(12842, 'help', 'Help Module', 'admin,storeadmin', 'Y', 13),
(12843, 'coupon', 'Coupon Management', 'admin,storeadmin', 'Y', 11);

-- --------------------------------------------------------

--
-- Table structure for table `webvn_vm_mz_product_files`
--

CREATE TABLE IF NOT EXISTS `webvn_vm_mz_product_files` (
  `file_id` int(11) NOT NULL,
  `is_alternate` tinyint(1) NOT NULL,
  `advanced_option` varchar(1023) NOT NULL,
  PRIMARY KEY  (`file_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `webvn_vm_mz_product_files`
--


-- --------------------------------------------------------

--
-- Table structure for table `webvn_vm_mz_product_hotspots`
--

CREATE TABLE IF NOT EXISTS `webvn_vm_mz_product_hotspots` (
  `id` int(11) NOT NULL auto_increment,
  `product_id` int(11) NOT NULL,
  `file_id` int(19) default NULL,
  `linked_file_id` int(19) default NULL,
  `mode` varchar(32) NOT NULL,
  `x1` decimal(4,4) NOT NULL,
  `y1` decimal(4,4) NOT NULL,
  `x2` decimal(4,4) NOT NULL,
  `y2` decimal(4,4) NOT NULL,
  `option` varchar(256) default NULL,
  `active` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `file_id` (`file_id`),
  KEY `linked_file_id` (`linked_file_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `webvn_vm_mz_product_hotspots`
--


-- --------------------------------------------------------

--
-- Table structure for table `webvn_vm_orders`
--

CREATE TABLE IF NOT EXISTS `webvn_vm_orders` (
  `order_id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL default '0',
  `vendor_id` int(11) NOT NULL default '0',
  `order_number` varchar(32) default NULL,
  `user_info_id` varchar(32) default NULL,
  `order_total` decimal(15,5) NOT NULL default '0.00000',
  `order_subtotal` decimal(15,5) default NULL,
  `order_tax` decimal(10,2) default NULL,
  `order_tax_details` text NOT NULL,
  `order_shipping` decimal(10,2) default NULL,
  `order_shipping_tax` decimal(10,2) default NULL,
  `coupon_discount` decimal(12,2) NOT NULL default '0.00',
  `coupon_code` varchar(32) default NULL,
  `order_discount` decimal(12,2) NOT NULL default '0.00',
  `order_currency` varchar(16) default NULL,
  `order_status` char(1) default NULL,
  `cdate` int(11) default NULL,
  `mdate` int(11) default NULL,
  `ship_method_id` varchar(255) default NULL,
  `customer_note` text NOT NULL,
  `ip_address` varchar(15) NOT NULL default '',
  PRIMARY KEY  (`order_id`),
  KEY `idx_orders_user_id` (`user_id`),
  KEY `idx_orders_vendor_id` (`vendor_id`),
  KEY `idx_orders_order_number` (`order_number`),
  KEY `idx_orders_user_info_id` (`user_info_id`),
  KEY `idx_orders_ship_method_id` (`ship_method_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Used to store all orders' AUTO_INCREMENT=1 ;

--
-- Dumping data for table `webvn_vm_orders`
--


-- --------------------------------------------------------

--
-- Table structure for table `webvn_vm_order_history`
--

CREATE TABLE IF NOT EXISTS `webvn_vm_order_history` (
  `order_status_history_id` int(11) NOT NULL auto_increment,
  `order_id` int(11) NOT NULL default '0',
  `order_status_code` char(1) NOT NULL default '0',
  `date_added` datetime NOT NULL default '0000-00-00 00:00:00',
  `customer_notified` int(1) default '0',
  `comments` text,
  PRIMARY KEY  (`order_status_history_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Stores all actions and changes that occur to an order' AUTO_INCREMENT=1 ;

--
-- Dumping data for table `webvn_vm_order_history`
--


-- --------------------------------------------------------

--
-- Table structure for table `webvn_vm_order_item`
--

CREATE TABLE IF NOT EXISTS `webvn_vm_order_item` (
  `order_item_id` int(11) NOT NULL auto_increment,
  `order_id` int(11) default NULL,
  `user_info_id` varchar(32) default NULL,
  `vendor_id` int(11) default NULL,
  `product_id` int(11) default NULL,
  `order_item_sku` varchar(64) NOT NULL default '',
  `order_item_name` varchar(64) NOT NULL default '',
  `product_quantity` int(11) default NULL,
  `product_item_price` decimal(15,5) default NULL,
  `product_final_price` decimal(12,2) NOT NULL default '0.00',
  `order_item_currency` varchar(16) default NULL,
  `order_status` char(1) default NULL,
  `cdate` int(11) default NULL,
  `mdate` int(11) default NULL,
  `product_attribute` text,
  PRIMARY KEY  (`order_item_id`),
  KEY `idx_order_item_order_id` (`order_id`),
  KEY `idx_order_item_user_info_id` (`user_info_id`),
  KEY `idx_order_item_vendor_id` (`vendor_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Stores all items (products) which are part of an order' AUTO_INCREMENT=1 ;

--
-- Dumping data for table `webvn_vm_order_item`
--


-- --------------------------------------------------------

--
-- Table structure for table `webvn_vm_order_payment`
--

CREATE TABLE IF NOT EXISTS `webvn_vm_order_payment` (
  `order_id` int(11) NOT NULL default '0',
  `payment_method_id` int(11) default NULL,
  `order_payment_code` varchar(30) NOT NULL default '',
  `order_payment_number` blob,
  `order_payment_expire` int(11) default NULL,
  `order_payment_name` varchar(255) default NULL,
  `order_payment_log` text,
  `order_payment_trans_id` text NOT NULL,
  KEY `idx_order_payment_order_id` (`order_id`),
  KEY `idx_order_payment_method_id` (`payment_method_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='The payment method that was chosen for a specific order';

--
-- Dumping data for table `webvn_vm_order_payment`
--


-- --------------------------------------------------------

--
-- Table structure for table `webvn_vm_order_status`
--

CREATE TABLE IF NOT EXISTS `webvn_vm_order_status` (
  `order_status_id` int(11) NOT NULL auto_increment,
  `order_status_code` char(1) NOT NULL default '',
  `order_status_name` varchar(64) default NULL,
  `order_status_description` text NOT NULL,
  `list_order` int(11) default NULL,
  `vendor_id` int(11) default NULL,
  PRIMARY KEY  (`order_status_id`),
  KEY `idx_order_status_list_order` (`list_order`),
  KEY `idx_order_status_vendor_id` (`vendor_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='All available order statuses' AUTO_INCREMENT=6 ;

--
-- Dumping data for table `webvn_vm_order_status`
--

INSERT INTO `webvn_vm_order_status` (`order_status_id`, `order_status_code`, `order_status_name`, `order_status_description`, `list_order`, `vendor_id`) VALUES
(1, 'P', 'Pending', '', 1, 1),
(2, 'C', 'Confirmed', '', 2, 1),
(3, 'X', 'Cancelled', '', 3, 1),
(4, 'R', 'Refunded', '', 4, 1),
(5, 'S', 'Shipped', '', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `webvn_vm_order_user_info`
--

CREATE TABLE IF NOT EXISTS `webvn_vm_order_user_info` (
  `order_info_id` int(11) NOT NULL auto_increment,
  `order_id` int(11) NOT NULL default '0',
  `user_id` int(11) NOT NULL default '0',
  `address_type` char(2) default NULL,
  `address_type_name` varchar(32) default NULL,
  `company` varchar(64) default NULL,
  `title` varchar(32) default NULL,
  `last_name` varchar(32) default NULL,
  `first_name` varchar(32) default NULL,
  `middle_name` varchar(32) default NULL,
  `phone_1` varchar(32) default NULL,
  `phone_2` varchar(32) default NULL,
  `fax` varchar(32) default NULL,
  `address_1` varchar(64) NOT NULL default '',
  `address_2` varchar(64) default NULL,
  `city` varchar(32) NOT NULL default '',
  `state` varchar(32) NOT NULL default '',
  `country` varchar(32) NOT NULL default 'US',
  `zip` varchar(32) NOT NULL default '',
  `user_email` varchar(255) default NULL,
  `extra_field_1` varchar(255) default NULL,
  `extra_field_2` varchar(255) default NULL,
  `extra_field_3` varchar(255) default NULL,
  `extra_field_4` char(1) default NULL,
  `extra_field_5` char(1) default NULL,
  `bank_account_nr` varchar(32) NOT NULL default '',
  `bank_name` varchar(32) NOT NULL default '',
  `bank_sort_code` varchar(16) NOT NULL default '',
  `bank_iban` varchar(64) NOT NULL default '',
  `bank_account_holder` varchar(48) NOT NULL default '',
  `bank_account_type` enum('Checking','Business Checking','Savings') NOT NULL default 'Checking',
  PRIMARY KEY  (`order_info_id`),
  KEY `idx_order_info_order_id` (`order_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Stores the BillTo and ShipTo Information at order time' AUTO_INCREMENT=1 ;

--
-- Dumping data for table `webvn_vm_order_user_info`
--


-- --------------------------------------------------------

--
-- Table structure for table `webvn_vm_payment_method`
--

CREATE TABLE IF NOT EXISTS `webvn_vm_payment_method` (
  `payment_method_id` int(11) NOT NULL auto_increment,
  `vendor_id` int(11) default NULL,
  `payment_method_name` varchar(255) default NULL,
  `payment_class` varchar(50) NOT NULL default '',
  `shopper_group_id` int(11) default NULL,
  `payment_method_discount` decimal(12,2) default NULL,
  `payment_method_discount_is_percent` tinyint(1) NOT NULL,
  `payment_method_discount_max_amount` decimal(10,2) NOT NULL,
  `payment_method_discount_min_amount` decimal(10,2) NOT NULL,
  `list_order` int(11) default NULL,
  `payment_method_code` varchar(8) default NULL,
  `enable_processor` char(1) default NULL,
  `is_creditcard` tinyint(1) NOT NULL default '0',
  `payment_enabled` char(1) NOT NULL default 'N',
  `accepted_creditcards` varchar(128) NOT NULL default '',
  `payment_extrainfo` text NOT NULL,
  `payment_passkey` blob NOT NULL,
  PRIMARY KEY  (`payment_method_id`),
  KEY `idx_payment_method_vendor_id` (`vendor_id`),
  KEY `idx_payment_method_name` (`payment_method_name`),
  KEY `idx_payment_method_list_order` (`list_order`),
  KEY `idx_payment_method_shopper_group_id` (`shopper_group_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='The payment methods of your store' AUTO_INCREMENT=20 ;

--
-- Dumping data for table `webvn_vm_payment_method`
--

INSERT INTO `webvn_vm_payment_method` (`payment_method_id`, `vendor_id`, `payment_method_name`, `payment_class`, `shopper_group_id`, `payment_method_discount`, `payment_method_discount_is_percent`, `payment_method_discount_max_amount`, `payment_method_discount_min_amount`, `list_order`, `payment_method_code`, `enable_processor`, `is_creditcard`, `payment_enabled`, `accepted_creditcards`, `payment_extrainfo`, `payment_passkey`) VALUES
(1, 1, 'Purchase Order', '', 6, '0.00', 0, '0.00', '0.00', 4, 'PO', 'N', 0, 'Y', '', '', ''),
(2, 1, 'Cash On Delivery', '', 5, '-2.00', 0, '0.00', '0.00', 5, 'COD', 'N', 0, 'Y', '', '', ''),
(3, 1, 'Credit Card', 'ps_authorize', 5, '0.00', 0, '0.00', '0.00', 0, 'AN', 'Y', 0, 'Y', '1,2,6,7,', '', ''),
(4, 1, 'PayPal (new API)', 'ps_paypal_api', 5, '0.00', 0, '0.00', '0.00', 0, 'PP_API', 'Y', 1, 'Y', '', '', ''),
(5, 1, 'PayMate', 'ps_paymate', 5, '0.00', 0, '0.00', '0.00', 0, 'PM', 'P', 0, 'N', '', '<script type="text/javascript" language="javascript">\n  function openExpress(){\n      var url = ''https://www.paymate.com/PayMate/ExpressPayment?mid=<?php echo PAYMATE_USERNAME.\n          "&amt=".$db->f("order_total").\n   "&currency=".$_SESSION[''vendor_currency''].\n       "&ref=".$db->f("order_id").\n      "&pmt_sender_email=".$user->email.\n         "&pmt_contact_firstname=".$user->first_name.\n       "&pmt_contact_surname=".$user->last_name.\n          "&regindi_address1=".$user->address_1.\n     "&regindi_address2=".$user->address_2.\n     "&regindi_sub=".$user->city.\n       "&regindi_pcode=".$user->zip;?>''\n        var newWin = window.open(url, ''wizard'', ''height=640,width=500,scrollbars=0,toolbar=no'');\n  self.name = ''parent'';\n       newWin.focus();\n  }\n  </script>\n  <div align="center">\n  <p>\n  <a href="javascript:openExpress();">\n  <img src="https://www.paymate.com/homepage/images/butt_PayNow.gif" border="0" alt="Pay with Paymate Express">\n  <br />click here to pay your account</a>\n  </p>\n  </div>', ''),
(6, 1, 'WorldPay', 'ps_worldpay', 5, '0.00', 0, '0.00', '0.00', 0, 'WP', 'P', 0, 'N', '', '<form action="https://select.worldpay.com/wcc/purchase" method="post">\n                                                <input type=hidden name="testMode" value="100"> \n                                                  <input type="hidden" name="instId" value="<?php echo WORLDPAY_INST_ID ?>" />\n                                            <input type="hidden" name="cartId" value="<?php echo $db->f("order_id") ?>" />\n                                               <input type="hidden" name="amount" value="<?php echo $db->f("order_total") ?>" />\n                                            <input type="hidden" name="currency" value="<?php echo $_SESSION[''vendor_currency''] ?>" />\n                                           <input type="hidden" name="desc" value="Products" />\n                                            <input type="hidden" name="email" value="<?php echo $user->email?>" />\n                                                 <input type="hidden" name="address" value="<?php echo $user->address_1?>&#10<?php echo $user->address_2?>&#10<?php echo\n                                                $user->city?>&#10<?php echo $user->state?>" />\n                                             <input type="hidden" name="name" value="<?php echo $user->title?><?php echo $user->first_name?>. <?php echo $user->middle_name?><?php echo $user->last_name?>" />\n                                           <input type="hidden" name="country" value="<?php echo $user->country?>"/>\n                                              <input type="hidden" name="postcode" value="<?php echo $user->zip?>" />\n                                                <input type="hidden" name="tel"  value="<?php echo $user->phone_1?>">\n                                                  <input type="hidden" name="withDelivery"  value="true">\n                                                 <br />\n                                                <input type="submit" value ="PROCEED TO PAYMENT PAGE" />\n                                                  </form>', ''),
(7, 1, '2Checkout', 'ps_twocheckout', 5, '0.00', 0, '0.00', '0.00', 0, '2CO', 'P', 0, 'N', '', '<?php\n      $q  = "SELECT * FROM #__users WHERE user_info_id=''".$db->f("user_info_id")."''"; \n    $dbbt = new ps_DB;\n   $dbbt->setQuery($q);\n        $dbbt->query();\n      $dbbt->next_record(); \n       // Get ship_to information\n    if( $db->f("user_info_id") != $dbbt->f("user_info_id")) {\n         $q2  = "SELECT * FROM #__vm_user_info WHERE user_info_id=''".$db->f("user_info_id")."''"; \n    $dbst = new ps_DB;\n   $dbst->setQuery($q2);\n       $dbst->query();\n      $dbst->next_record();\n      }\n     else  {\n         $dbst = $dbbt;\n    }\n                     \n      //Authnet vars to send\n        $formdata = array (\n   ''x_login'' => TWOCO_LOGIN,\n   ''x_email_merchant'' => ((TWOCO_MERCHANT_EMAIL == ''True'') ? ''TRUE'' : ''FALSE''),\n                  \n      // Customer Name and Billing Address\n  ''x_first_name'' => $dbbt->f("first_name"),\n        ''x_last_name'' => $dbbt->f("last_name"),\n  ''x_company'' => $dbbt->f("company"),\n      ''x_address'' => $dbbt->f("address_1"),\n    ''x_city'' => $dbbt->f("city"),\n    ''x_state'' => $dbbt->f("state"),\n  ''x_zip'' => $dbbt->f("zip"),\n      ''x_country'' => $dbbt->f("country"),\n      ''x_phone'' => $dbbt->f("phone_1"),\n        ''x_fax'' => $dbbt->f("fax"),\n      ''x_email'' => $dbbt->f("email"),\n \n       // Customer Shipping Address\n  ''x_ship_to_first_name'' => $dbst->f("first_name"),\n        ''x_ship_to_last_name'' => $dbst->f("last_name"),\n  ''x_ship_to_company'' => $dbst->f("company"),\n      ''x_ship_to_address'' => $dbst->f("address_1"),\n    ''x_ship_to_city'' => $dbst->f("city"),\n    ''x_ship_to_state'' => $dbst->f("state"),\n  ''x_ship_to_zip'' => $dbst->f("zip"),\n      ''x_ship_to_country'' => $dbst->f("country"),\n     \n       ''x_invoice_num'' => $db->f("order_number"),\n       ''x_receipt_link_url'' => SECUREURL."2checkout_notify.php"\n  );\n    \n     if( TWOCO_TESTMODE == "Y" )\n   $formdata[''demo''] = "Y";\n       \n       $version = "2";\n    $url = "https://www2.2checkout.com/2co/buyer/purchase";\n    $formdata[''x_amount''] = number_format($db->f("order_total"), 2, ''.'', '''');\n \n       //build the post string\n       $poststring = '''';\n  foreach($formdata AS $key => $val){\n          $poststring .= "<input type=''hidden'' name=''$key'' value=''$val'' />\n ";\n    }\n    \n      ?>\n    <form action="<?php echo $url ?>" method="post" target="_blank">\n       <?php echo $poststring ?>\n    <p>Click on the Image below to pay...</p>\n     <input type="image" name="submit" src="https://www.2checkout.com/images/buy_logo.gif" border="0" alt="Make payments with 2Checkout, it''s fast and secure!" title="Pay your Order with 2Checkout, it''s fast and secure!" />\n      </form>', ''),
(8, 1, 'NoChex', 'ps_nochex', 5, '0.00', 0, '0.00', '0.00', 0, 'NOCHEX', 'P', 0, 'N', '', '<form action="https://www.nochex.com/nochex.dll/checkout" method="post" target="_blank"> \n                                                                                     <input type="hidden" name="email" value="<?php echo NOCHEX_EMAIL ?>" />\n                                                                                 <input type="hidden" name="amount" value="<?php printf("%.2f", $db->f("order_total"))?>" />\n                                                                                        <input type="hidden" name="ordernumber" value="<?php $db->p("order_id") ?>" />\n                                                                                       <input type="hidden" name="logo" value="<?php echo $vendor_image_url ?>" />\n                                                                                    <input type="hidden" name="returnurl" value="<?php echo SECUREURL ."index.php?option=com_virtuemart&amp;page=checkout.result&amp;order_id=".$db->f("order_id") ?>" />\n                                                                                      <input type="image" name="submit" src="http://www.nochex.com/web/images/paymeanimated.gif"> \n                                                                                    </form>', ''),
(9, 1, 'Credit Card (PayMeNow)', 'ps_paymenow', 5, '0.00', 0, '0.00', '0.00', 0, 'PN', 'Y', 0, 'N', '1,2,3,', '', ''),
(10, 1, 'eWay', 'ps_eway', 5, '0.00', 0, '0.00', '0.00', 0, 'EWAY', 'Y', 0, 'N', '', '', ''),
(11, 1, 'eCheck.net', 'ps_echeck', 5, '0.00', 0, '0.00', '0.00', 0, 'ECK', 'B', 0, 'N', '', '', ''),
(12, 1, 'Credit Card (eProcessingNetwork)', 'ps_epn', 5, '0.00', 0, '0.00', '0.00', 0, 'EPN', 'Y', 0, 'N', '1,2,3,', '', ''),
(13, 1, 'iKobo', '', 5, '0.00', 0, '0.00', '0.00', 0, 'IK', 'P', 0, 'N', '', '<form action="https://www.iKobo.com/store/index.php" method="post"> \n  <input type="hidden" name="cmd" value="cart" />Click on the image below to Pay with iKobo\n  <input type="image" src="https://www.ikobo.com/merchant/buttons/ikobo_pay1.gif" name="submit" alt="Pay with iKobo" /> \n  <input type="hidden" name="poid" value="USER_ID" /> \n  <input type="hidden" name="item" value="Order: <?php $db->p("order_id") ?>" /> \n  <input type="hidden" name="price" value="<?php printf("%.2f", $db->f("order_total"))?>" /> \n  <input type="hidden" name="firstname" value="<?php echo $user->first_name?>" /> \n  <input type="hidden" name="lastname" value="<?php echo $user->last_name?>" /> \n  <input type="hidden" name="address" value="<?php echo $user->address_1?>&#10<?php echo $user->address_2?>" /> \n  <input type="hidden" name="city" value="<?php echo $user->city?>" /> \n  <input type="hidden" name="state" value="<?php echo $user->state?>" /> \n  <input type="hidden" name="zip" value="<?php echo $user->zip?>" /> \n  <input type="hidden" name="phone" value="<?php echo $user->phone_1?>" /> \n  <input type="hidden" name="email" value="<?php echo $user->email?>" /> \n  </form> >', ''),
(14, 1, 'iTransact', '', 5, '0.00', 0, '0.00', '0.00', 0, 'ITR', 'P', 0, 'N', '', '<?php\n  //your iTransact account details\n  $vendorID = "XXXXX";\n  global $vendor_name;\n  $mername = $vendor_name;\n  \n  //order details\n  $total = $db->f("order_total");$first_name = $user->first_name;$last_name = $user->last_name;$address = $user->address_1;$city = $user->city;$state = $user->state;$zip = $user->zip;$country = $user->country;$email = $user->email;$phone = $user->phone_1;$home_page = $mosConfig_live_site."/index.php";$ret_addr = $mosConfig_live_site."/index.php";$cc_payment_image = $mosConfig_live_site."/components/com_virtuemart/shop_image/ps_image/cc_payment.jpg";\n  ?>\n  <form action="https://secure.paymentclearing.com/cgi-bin/mas/split.cgi" method="POST"> \n                <input type="hidden" name="vendor_id" value="<?php echo $vendorID; ?>" />\n              <input type="hidden" name="home_page" value="<?php echo $home_page; ?>" />\n             <input type="hidden" name="ret_addr" value="<?php echo $ret_addr; ?>" />\n               <input type="hidden" name="mername" value="<?php echo $mername; ?>" />\n         <!--Enter text in the next value that should appear on the bottom of the order form.-->\n               <INPUT type="hidden" name="mertext" value="" />\n         <!--If you are accepting checks, enter the number 1 in the next value.  Enter the number 0 if you are not accepting checks.-->\n                <INPUT type="hidden" name="acceptchecks" value="0" />\n           <!--Enter the number 1 in the next value if you want to allow pre-registered customers to pay with a check.  Enter the number 0 if not.-->\n            <INPUT type="hidden" name="allowreg" value="0" />\n               <!--If you are set up with Check Guarantee, enter the number 1 in the next value.  Enter the number 0 if not.-->\n              <INPUT type="hidden" name="checkguar" value="0" />\n              <!--Enter the number 1 in the next value if you are accepting credit card payments.  Enter the number zero if not.-->\n         <INPUT type="hidden" name="acceptcards" value="1">\n              <!--Enter the number 1 in the next value if you want to allow a separate mailing address for credit card orders.  Enter the number 0 if not.-->\n               <INPUT type="hidden" name="altaddr" value="0" />\n                <!--Enter the number 1 in the next value if you want the customer to enter the CVV number for card orders.  Enter the number 0 if not.-->\n             <INPUT type="hidden" name="showcvv" value="1" />\n                \n              <input type="hidden" name="1-desc" value="Order Total" />\n               <input type="hidden" name="1-cost" value="<?php echo $total; ?>" />\n            <input type="hidden" name="1-qty" value="1" />\n          <input type="hidden" name="total" value="<?php echo $total; ?>" />\n             <input type="hidden" name="first_name" value="<?php echo $first_name; ?>" />\n           <input type="hidden" name="last_name" value="<?php echo $last_name; ?>" />\n             <input type="hidden" name="address" value="<?php echo $address; ?>" />\n         <input type="hidden" name="city" value="<?php echo $city; ?>" />\n               <input type="hidden" name="state" value="<?php echo $state; ?>" />\n             <input type="hidden" name="zip" value="<?php echo $zip; ?>" />\n         <input type="hidden" name="country" value="<?php echo $country; ?>" />\n         <input type="hidden" name="phone" value="<?php echo $phone; ?>" />\n             <input type="hidden" name="email" value="<?php echo $email; ?>" />\n             <p><input type="image" alt="Process Secure Credit Card Transaction using iTransact" border="0" height="60" width="210" src="<?php echo $cc_payment_image; ?>" /> </p>\n            </form>', ''),
(15, 1, 'Verisign PayFlow Pro', 'payflow_pro', 5, '0.00', 0, '0.00', '0.00', 0, 'PFP', 'Y', 0, 'Y', '1,2,6,7,', '', ''),
(16, 1, 'Dankort/PBS via ePay', 'ps_epay', 5, '0.00', 0, '0.00', '0.00', 0, 'EPAY', 'P', 0, 'Y', '', '<?php\r\nrequire_once(CLASSPATH ."payment/ps_epay.cfg.php");\r\n$url=basename($mosConfig_live_site);\r\nfunction get_iso_code($code) {\r\nswitch ($code) {\r\ncase "ADP": return "020"; break;\r\ncase "AED": return "784"; break;\r\ncase "AFA": return "004"; break;\r\ncase "ALL": return "008"; break;\r\ncase "AMD": return "051"; break;\r\ncase "ANG": return "532"; break;\r\ncase "AOA": return "973"; break;\r\ncase "ARS": return "032"; break;\r\ncase "AUD": return "036"; break;\r\ncase "AWG": return "533"; break;\r\ncase "AZM": return "031"; break;\r\ncase "BAM": return "977"; break;\r\ncase "BBD": return "052"; break;\r\ncase "BDT": return "050"; break;\r\ncase "BGL": return "100"; break;\r\ncase "BGN": return "975"; break;\r\ncase "BHD": return "048"; break;\r\ncase "BIF": return "108"; break;\r\ncase "BMD": return "060"; break;\r\ncase "BND": return "096"; break;\r\ncase "BOB": return "068"; break;\r\ncase "BOV": return "984"; break;\r\ncase "BRL": return "986"; break;\r\ncase "BSD": return "044"; break;\r\ncase "BTN": return "064"; break;\r\ncase "BWP": return "072"; break;\r\ncase "BYR": return "974"; break;\r\ncase "BZD": return "084"; break;\r\ncase "CAD": return "124"; break;\r\ncase "CDF": return "976"; break;\r\ncase "CHF": return "756"; break;\r\ncase "CLF": return "990"; break;\r\ncase "CLP": return "152"; break;\r\ncase "CNY": return "156"; break;\r\ncase "COP": return "170"; break;\r\ncase "CRC": return "188"; break;\r\ncase "CUP": return "192"; break;\r\ncase "CVE": return "132"; break;\r\ncase "CYP": return "196"; break;\r\ncase "CZK": return "203"; break;\r\ncase "DJF": return "262"; break;\r\ncase "DKK": return "208"; break;\r\ncase "DOP": return "214"; break;\r\ncase "DZD": return "012"; break;\r\ncase "ECS": return "218"; break;\r\ncase "ECV": return "983"; break;\r\ncase "EEK": return "233"; break;\r\ncase "EGP": return "818"; break;\r\ncase "ERN": return "232"; break;\r\ncase "ETB": return "230"; break;\r\ncase "EUR": return "978"; break;\r\ncase "FJD": return "242"; break;\r\ncase "FKP": return "238"; break;\r\ncase "GBP": return "826"; break;\r\ncase "GEL": return "981"; break;\r\ncase "GHC": return "288"; break;\r\ncase "GIP": return "292"; break;\r\ncase "GMD": return "270"; break;\r\ncase "GNF": return "324"; break;\r\ncase "GTQ": return "320"; break;\r\ncase "GWP": return "624"; break;\r\ncase "GYD": return "328"; break;\r\ncase "HKD": return "344"; break;\r\ncase "HNL": return "340"; break;\r\ncase "HRK": return "191"; break;\r\ncase "HTG": return "332"; break;\r\ncase "HUF": return "348"; break;\r\ncase "IDR": return "360"; break;\r\ncase "ILS": return "376"; break;\r\ncase "INR": return "356"; break;\r\ncase "IQD": return "368"; break;\r\ncase "IRR": return "364"; break;\r\ncase "ISK": return "352"; break;\r\ncase "JMD": return "388"; break;\r\ncase "JOD": return "400"; break;\r\ncase "JPY": return "392"; break;\r\ncase "KES": return "404"; break;\r\ncase "KGS": return "417"; break;\r\ncase "KHR": return "116"; break;\r\ncase "KMF": return "174"; break;\r\ncase "KPW": return "408"; break;\r\ncase "KRW": return "410"; break;\r\ncase "KWD": return "414"; break;\r\ncase "KYD": return "136"; break;\r\ncase "KZT": return "398"; break;\r\ncase "LAK": return "418"; break;\r\ncase "LBP": return "422"; break;\r\ncase "LKR": return "144"; break;\r\ncase "LRD": return "430"; break;\r\ncase "LSL": return "426"; break;\r\ncase "LTL": return "440"; break;\r\ncase "LVL": return "428"; break;\r\ncase "LYD": return "434"; break;\r\ncase "MAD": return "504"; break;\r\ncase "MDL": return "498"; break;\r\ncase "MGF": return "450"; break;\r\ncase "MKD": return "807"; break;\r\ncase "MMK": return "104"; break;\r\ncase "MNT": return "496"; break;\r\ncase "MOP": return "446"; break;\r\ncase "MRO": return "478"; break;\r\ncase "MTL": return "470"; break;\r\ncase "MUR": return "480"; break;\r\ncase "MVR": return "462"; break;\r\ncase "MWK": return "454"; break;\r\ncase "MXN": return "484"; break;\r\ncase "MXV": return "979"; break;\r\ncase "MYR": return "458"; break;\r\ncase "MZM": return "508"; break;\r\ncase "NAD": return "516"; break;\r\ncase "NGN": return "566"; break;\r\ncase "NIO": return "558"; break;\r\ncase "NOK": return "578"; break;\r\ncase "NPR": return "524"; break;\r\ncase "NZD": return "554"; break;\r\ncase "OMR": return "512"; break;\r\ncase "PAB": return "590"; break;\r\ncase "PEN": return "604"; break;\r\ncase "PGK": return "598"; break;\r\ncase "PHP": return "608"; break;\r\ncase "PKR": return "586"; break;\r\ncase "PLN": return "985"; break;\r\ncase "PYG": return "600"; break;\r\ncase "QAR": return "634"; break;\r\ncase "ROL": return "642"; break;\r\ncase "RUB": return "643"; break;\r\ncase "RUR": return "810"; break;\r\ncase "RWF": return "646"; break;\r\ncase "SAR": return "682"; break;\r\ncase "SBD": return "090"; break;\r\ncase "SCR": return "690"; break;\r\ncase "SDD": return "736"; break;\r\ncase "SEK": return "752"; break;\r\ncase "SGD": return "702"; break;\r\ncase "SHP": return "654"; break;\r\ncase "SIT": return "705"; break;\r\ncase "SKK": return "703"; break;\r\ncase "SLL": return "694"; break;\r\ncase "SOS": return "706"; break;\r\ncase "SRG": return "740"; break;\r\ncase "STD": return "678"; break;\r\ncase "SVC": return "222"; break;\r\ncase "SYP": return "760"; break;\r\ncase "SZL": return "748"; break;\r\ncase "THB": return "764"; break;\r\ncase "TJS": return "972"; break;\r\ncase "TMM": return "795"; break;\r\ncase "TND": return "788"; break;\r\ncase "TOP": return "776"; break;\r\ncase "TPE": return "626"; break;\r\ncase "TRL": return "792"; break;\r\ncase "TRY": return "949"; break;\r\ncase "TTD": return "780"; break;\r\ncase "TWD": return "901"; break;\r\ncase "TZS": return "834"; break;\r\ncase "UAH": return "980"; break;\r\ncase "UGX": return "800"; break;\r\ncase "USD": return "840"; break;\r\ncase "UYU": return "858"; break;\r\ncase "UZS": return "860"; break;\r\ncase "VEB": return "862"; break;\r\ncase "VND": return "704"; break;\r\ncase "VUV": return "548"; break;\r\ncase "XAF": return "950"; break;\r\ncase "XCD": return "951"; break;\r\ncase "XOF": return "952"; break;\r\ncase "XPF": return "953"; break;\r\ncase "YER": return "886"; break;\r\ncase "YUM": return "891"; break;\r\ncase "ZAR": return "710"; break;\r\ncase "ZMK": return "894"; break;\r\ncase "ZWD": return "716"; break;\r\n}\r\nreturn "XXX"; // return invalid code if the currency is not found \r\n}\r\n\r\nfunction calculateePayCurrency($order_id)\r\n{\r\n$db = new ps_DB;\r\n$currency_code = "208";\r\n$q = "SELECT order_currency FROM #__vm_orders where order_id = " . $order_id;\r\n$db->query($q);\r\nif ($db->next_record()) {\r\n	$currency_code = get_iso_code($db->f("order_currency"));\r\n}\r\nreturn $currency_code;\r\n}\r\n echo $VM_LANG->_(''VM_CHECKOUT_EPAY_PAYMENT_CHECKOUT_HEADER'');\r\n?>\r\n<script type="text/javascript" src="http://www.epay.dk/js/standardwindow.js"></script>\r\n<script type="text/javascript">\r\nfunction printCard(cardId)\r\n{\r\ndocument.write ("<table border=0 cellspacing=10 cellpadding=10>");\r\nswitch (cardId) {\r\ncase 1: document.write ("<input type=hidden name=cardtype value=1>"); break;\r\ncase 2: document.write ("<input type=hidden name=cardtype value=2>"); break;\r\ncase 3: document.write ("<input type=hidden name=cardtype value=3>"); break;\r\ncase 4: document.write ("<input type=hidden name=cardtype value=4>"); break;\r\ncase 5: document.write ("<input type=hidden name=cardtype value=5>"); break;\r\ncase 6: document.write ("<input type=hidden name=cardtype value=6>"); break;\r\ncase 7: document.write ("<input type=hidden name=cardtype value=7>"); break;\r\ncase 8: document.write ("<input type=hidden name=cardtype value=8>"); break;\r\ncase 9: document.write ("<input type=hidden name=cardtype value=9>"); break;\r\ncase 10: document.write ("<input type=hidden name=cardtype value=10>"); break;\r\ncase 12: document.write ("<input type=hidden name=cardtype value=12>"); break;\r\ncase 13: document.write ("<input type=hidden name=cardtype value=13>"); break;\r\ncase 14: document.write ("<input type=hidden name=cardtype value=14>"); break;\r\ncase 15: document.write ("<input type=hidden name=cardtype value=15>"); break;\r\ncase 16: document.write ("<input type=hidden name=cardtype value=16>"); break;\r\ncase 17: document.write ("<input type=hidden name=cardtype value=17>"); break;\r\ncase 18: document.write ("<input type=hidden name=cardtype value=18>"); break;\r\ncase 19: document.write ("<input type=hidden name=cardtype value=19>"); break;\r\ncase 21: document.write ("<input type=hidden name=cardtype value=21>"); break;\r\ncase 22: document.write ("<input type=hidden name=cardtype value=22>"); break;\r\n}\r\ndocument.write ("</table>");\r\n}\r\n</script>\r\n<form action="https://ssl.ditonlinebetalingssystem.dk/popup/default.asp" method="post" name="ePay" target="ePay_window" id="ePay">\r\n<input type="hidden" name="merchantnumber" value="<?php echo EPAY_MERCHANTNUMBER ?>">\r\n<input type="hidden" name="amount" value="<?php echo round($db->f("order_total")*100, 2 ) ?>">\r\n<input type="hidden" name="currency" value="<?php echo calculateePayCurrency($order_id)?>">\r\n<input type="hidden" name="orderid" value="<?php echo $order_id ?>">\r\n<input type="hidden" name="ordretext" value="">\r\n<?php \r\nif (EPAY_CALLBACK == "1")\r\n{\r\n	echo ''<input type="hidden" name="callbackurl" value="'' . $mosConfig_live_site . ''/index.php?page=checkout.epay_result&accept=1&sessionid='' . $sessionid . ''&option=com_virtuemart&Itemid=1">'';\r\n}\r\n?>\r\n<input type="hidden" name="accepturl" value="<?php echo $mosConfig_live_site ?>/index.php?page=checkout.epay_result&accept=1&sessionid=<?php echo $sessionid ?>&option=com_virtuemart&Itemid=1">\r\n<input type="hidden" name="declineurl" value="<?php echo $mosConfig_live_site ?>/index.php?page=checkout.epay_result&accept=0&sessionid=<?php echo $sessionid ?>&option=com_virtuemart&Itemid=1">\r\n<input type="hidden" name="group" value="<?php echo EPAY_GROUP ?>">\r\n<input type="hidden" name="instant" value="<?php echo EPAY_INSTANT_CAPTURE ?>">\r\n<input type="hidden" name="language" value="<?php echo EPAY_LANGUAGE ?>">\r\n<input type="hidden" name="authsms" value="<?php echo EPAY_AUTH_SMS ?>">\r\n<input type="hidden" name="authmail" value="<?php echo EPAY_AUTH_MAIL . (strlen(EPAY_AUTH_MAIL) > 0 && EPAY_AUTHEMAILCUSTOMER == 1 ? ";" : "") . (EPAY_AUTHEMAILCUSTOMER == 1 ? $user->user_email : ""); ?>">\r\n<input type="hidden" name="windowstate" value="<?php echo EPAY_WINDOW_STATE ?>">\r\n<input type="hidden" name="use3D" value="<?php echo EPAY_3DSECURE ?>">\r\n<input type="hidden" name="addfee" value="<?php echo EPAY_ADDFEE ?>">\r\n<input type="hidden" name="subscription" value="<?php echo EPAY_SUBSCRIPTION ?>">\r\n<input type="hidden" name="MD5Key" value="<?php if (EPAY_MD5_TYPE == 2) echo md5( calculateePayCurrency($order_id) . round($db->f("order_total")*100, 2 ) . $order_id  . EPAY_MD5_KEY)?>">\r\n<?php\r\nif (EPAY_CARDTYPES_1 == "1" && EPAY_CARDTYPES_0 != "1") echo "<script>printCard(1)</script>";\r\nif (EPAY_CARDTYPES_2 == "1" && EPAY_CARDTYPES_0 != "1") echo "<script>printCard(2)</script>";\r\nif (EPAY_CARDTYPES_3 == "1" && EPAY_CARDTYPES_0 != "1") echo "<script>printCard(3)</script>";\r\nif (EPAY_CARDTYPES_4 == "1" && EPAY_CARDTYPES_0 != "1") echo "<script>printCard(4)</script>";\r\nif (EPAY_CARDTYPES_5 == "1" && EPAY_CARDTYPES_0 != "1") echo "<script>printCard(5)</script>";\r\nif (EPAY_CARDTYPES_6 == "1" && EPAY_CARDTYPES_0 != "1") echo "<script>printCard(6)</script>";\r\nif (EPAY_CARDTYPES_7 == "1" && EPAY_CARDTYPES_0 != "1") echo "<script>printCard(7)</script>";\r\nif (EPAY_CARDTYPES_8 == "1" && EPAY_CARDTYPES_0 != "1") echo "<script>printCard(8)</script>";\r\nif (EPAY_CARDTYPES_9 == "1" && EPAY_CARDTYPES_0 != "1") echo "<script>printCard(9)</script>";\r\nif (EPAY_CARDTYPES_10 == "1" && EPAY_CARDTYPES_0 != "1") echo "<script>printCard(10)</script>";\r\nif (EPAY_CARDTYPES_11 == "1" && EPAY_CARDTYPES_0 != "1") echo "<script>printCard(11)</script>";\r\nif (EPAY_CARDTYPES_12 == "1" && EPAY_CARDTYPES_0 != "1") echo "<script>printCard(12)</script>";\r\nif (EPAY_CARDTYPES_14 == "1" && EPAY_CARDTYPES_0 != "1") echo "<script>printCard(14)</script>";\r\nif (EPAY_CARDTYPES_15 == "1" && EPAY_CARDTYPES_0 != "1") echo "<script>printCard(15)</script>";\r\nif (EPAY_CARDTYPES_16 == "1" && EPAY_CARDTYPES_0 != "1") echo "<script>printCard(16)</script>";\r\nif (EPAY_CARDTYPES_17 == "1" && EPAY_CARDTYPES_0 != "1") echo "<script>printCard(17)</script>";\r\nif (EPAY_CARDTYPES_18 == "1" && EPAY_CARDTYPES_0 != "1") echo "<script>printCard(18)</script>";\r\nif (EPAY_CARDTYPES_19 == "1" && EPAY_CARDTYPES_0 != "1") echo "<script>printCard(19)</script>";\r\nif (EPAY_CARDTYPES_21 == "1" && EPAY_CARDTYPES_0 != "1") echo "<script>printCard(21)</script>";\r\nif (EPAY_CARDTYPES_22 == "1" && EPAY_CARDTYPES_0 != "1") echo "<script>printCard(22)</script>";;\r\n?>\r\n</form>\r\n<script>open_ePay_window();</script>\r\n<br>\r\n<table border="0" width="100%"><tr><td><input type="button" onClick="open_ePay_window()" value="<?php echo $VM_LANG->_(''VM_CHECKOUT_EPAY_BUTTON_OPEN_WINDOW'') ?>"></td><td width="100%" id="flashLoader"></td></tr></table><br><br><br>\r\n<?php echo $VM_LANG->_(''VM_CHECKOUT_EPAY_PAYMENT_CHECKOUT_FOOTER'') ?>\r\n<br><br>\r\n<img src="components/com_virtuemart/shop_image/ps_image/epay_images/epay_logo.gif" border="0">&nbsp;&nbsp;&nbsp;\r\n<img src="components/com_virtuemart/shop_image/ps_image/epay_images/mastercard_securecode.gif" border="0">&nbsp;&nbsp;&nbsp;\r\n<img src="components/com_virtuemart/shop_image/ps_image/epay_images/pci.gif" border="0">&nbsp;&nbsp;&nbsp;\r\n<img src="components/com_virtuemart/shop_image/ps_image/epay_images/verisign_secure.gif" border="0">&nbsp;&nbsp;&nbsp;\r\n<img src="components/com_virtuemart/shop_image/ps_image/epay_images/visa_secure.gif" border="0">&nbsp;&nbsp;&nbsp;;', ''),
(17, 1, 'PaySbuy', 'ps_paysbuy', 5, '0.00', 0, '0.00', '0.00', 0, 'PSB', 'P', 0, 'N', '', '', ''),
(18, 1, 'PayPal (Legacy)', 'ps_paypal', 5, '0.00', 0, '0.00', '0.00', 0, 'PP', 'P', 0, 'Y', '', '<?php\r\n$db1 = new ps_DB();\r\n$q = "SELECT country_2_code FROM #__vm_country WHERE country_3_code=''".$user->country."'' ORDER BY country_2_code ASC";\r\n$db1->query($q);\r\n\r\n$url = "https://www.paypal.com/cgi-bin/webscr";\r\n$tax_total = $db->f("order_tax") + $db->f("order_shipping_tax");\r\n$discount_total = $db->f("coupon_discount") + $db->f("order_discount");\r\n$post_variables = Array(\r\n"cmd" => "_ext-enter",\r\n"redirect_cmd" => "_xclick",\r\n"upload" => "1",\r\n"business" => PAYPAL_EMAIL,\r\n"receiver_email" => PAYPAL_EMAIL,\r\n"item_name" => $VM_LANG->_(''PHPSHOP_ORDER_PRINT_PO_NUMBER'').": ". $db->f("order_id"),\r\n"order_id" => $db->f("order_id"),\r\n"invoice" => $db->f("order_number"),\r\n"amount" => round( $db->f("order_total")-$db->f("order_shipping"), 2),\r\n"shipping" => sprintf("%.2f", $db->f("order_shipping")),\r\n"currency_code" => $_SESSION[''vendor_currency''],\r\n\r\n"address_override" => "1",\r\n"first_name" => $dbbt->f(''first_name''),\r\n"last_name" => $dbbt->f(''last_name''),\r\n"address1" => $dbbt->f(''address_1''),\r\n"address2" => $dbbt->f(''address_2''),\r\n"zip" => $dbbt->f(''zip''),\r\n"city" => $dbbt->f(''city''),\r\n"state" => $dbbt->f(''state''),\r\n"country" => $db1->f(''country_2_code''),\r\n"email" => $dbbt->f(''user_email''),\r\n"night_phone_b" => $dbbt->f(''phone_1''),\r\n"cpp_header_image" => $vendor_image_url,\r\n\r\n"return" => SECUREURL ."index.php?option=com_virtuemart&page=checkout.result&order_id=".$db->f("order_id"),\r\n"notify_url" => SECUREURL ."administrator/components/com_virtuemart/notify.php",\r\n"cancel_return" => SECUREURL ."index.php",\r\n"undefined_quantity" => "0",\r\n\r\n"test_ipn" => PAYPAL_DEBUG,\r\n"pal" => "NRUBJXESJTY24",\r\n"no_shipping" => "1",\r\n"no_note" => "1"\r\n);\r\nif( $page == "checkout.thankyou" ) {\r\n$query_string = "?";\r\nforeach( $post_variables as $name => $value ) {\r\n$query_string .= $name. "=" . urlencode($value) ."&";\r\n}\r\nvmRedirect( $url . $query_string );\r\n} else {\r\necho ''<form action="''.$url.''" method="post" target="_blank">'';\r\necho ''<input type="image" name="submit" src="https://www.paypal.com/en_US/i/btn/x-click-but6.gif" alt="Click to pay with PayPal - it is fast, free and secure!" />'';\r\n\r\nforeach( $post_variables as $name => $value ) {\r\necho ''<input type="hidden" name="''.$name.''" value="''.htmlspecialchars($value).''" />'';\r\n}\r\necho ''</form>'';\r\n\r\n}\r\n?>', ''),
(19, 1, 'MerchantWarrior', 'ps_merchantwarrior', 5, '0.00', 0, '0.00', '0.00', 1, 'MW', 'Y', 1, 'Y', '1,2,3,5,7,', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `webvn_vm_product`
--

CREATE TABLE IF NOT EXISTS `webvn_vm_product` (
  `product_id` int(11) NOT NULL auto_increment,
  `vendor_id` int(11) NOT NULL default '0',
  `product_parent_id` int(11) NOT NULL default '0',
  `product_sku` varchar(64) NOT NULL default '',
  `product_s_desc` varchar(255) default NULL,
  `product_desc` text,
  `product_thumb_image` varchar(255) default NULL,
  `product_full_image` varchar(255) default NULL,
  `product_publish` char(1) default NULL,
  `product_weight` decimal(10,4) default NULL,
  `product_weight_uom` varchar(32) default 'pounds.',
  `product_length` decimal(10,4) default NULL,
  `product_width` decimal(10,4) default NULL,
  `product_height` decimal(10,4) default NULL,
  `product_lwh_uom` varchar(32) default 'inches',
  `product_url` varchar(255) default NULL,
  `product_in_stock` int(11) NOT NULL default '0',
  `product_available_date` int(11) default NULL,
  `product_availability` varchar(56) NOT NULL default '',
  `product_special` char(1) default NULL,
  `product_discount_id` int(11) default NULL,
  `ship_code_id` int(11) default NULL,
  `cdate` int(11) default NULL,
  `mdate` int(11) default NULL,
  `product_name` varchar(64) default NULL,
  `product_sales` int(11) NOT NULL default '0',
  `attribute` text,
  `custom_attribute` text NOT NULL,
  `product_tax_id` int(11) default NULL,
  `product_unit` varchar(32) default NULL,
  `product_packaging` int(11) default NULL,
  `child_options` varchar(45) default NULL,
  `quantity_options` varchar(45) default NULL,
  `child_option_ids` varchar(45) default NULL,
  `product_order_levels` varchar(45) default NULL,
  PRIMARY KEY  (`product_id`),
  KEY `idx_product_vendor_id` (`vendor_id`),
  KEY `idx_product_product_parent_id` (`product_parent_id`),
  KEY `idx_product_sku` (`product_sku`),
  KEY `idx_product_ship_code_id` (`ship_code_id`),
  KEY `idx_product_name` (`product_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='All products are stored here.' AUTO_INCREMENT=42 ;

--
-- Dumping data for table `webvn_vm_product`
--

INSERT INTO `webvn_vm_product` (`product_id`, `vendor_id`, `product_parent_id`, `product_sku`, `product_s_desc`, `product_desc`, `product_thumb_image`, `product_full_image`, `product_publish`, `product_weight`, `product_weight_uom`, `product_length`, `product_width`, `product_height`, `product_lwh_uom`, `product_url`, `product_in_stock`, `product_available_date`, `product_availability`, `product_special`, `product_discount_id`, `ship_code_id`, `cdate`, `mdate`, `product_name`, `product_sales`, `attribute`, `custom_attribute`, `product_tax_id`, `product_unit`, `product_packaging`, `child_options`, `quantity_options`, `child_option_ids`, `product_order_levels`) VALUES
(17, 1, 0, 'Iphone 4 32GB (Quốc Tế) - Mới 100%', '<p>Bảo hành: 12 tháng  </p>\r\n<p>Tình trạng: Mới 100%  </p>\r\n<p>Khuyến mãi: Dán màn hình  </p>\r\n<p>Kho: Còn hàng </p>', '<p>{tab=Tính năng}</p>\r\n<p>Mã sản phẩm: Iphone 4 32GB Apple                             <br /><br /></p>\r\n<ul>\r\n<li>FaceTime - Phone calls like you''ve never seen before.</li>\r\n<li>Restina Display - 960 by 640 by Wow.</li>\r\n<li>Multitasking. Give everything your individed attention.</li>\r\n<li>HD Video Recording - Life looks better in HD.</li>\r\n</ul>\r\n<p><strong>Hộp bao gồm:</strong></p>\r\n<ul>\r\n<li>Iphone 4 32GB phiên bản quốc tế</li>\r\n<li>Adapter for Iphone 4</li>\r\n<li>Earphone for Iphone 4</li>\r\n<li>Manual User</li>\r\n</ul>\r\n<p>{tab=Thông số kỹ thuật}</p>\r\n<p>Mã sản phẩm: Iphone 4 32GB Apple                             <br /><br /></p>\r\n<ul>\r\n<li>FaceTime - Phone calls like you''ve never seen before.</li>\r\n<li>Restina Display - 960 by 640 by Wow.</li>\r\n<li>Multitasking. Give everything your individed attention.</li>\r\n<li>HD Video Recording - Life looks better in HD.</li>\r\n</ul>\r\n<p><strong>Hộp bao gồm:</strong></p>\r\n<ul>\r\n<li>Iphone 4 32GB phiên bản quốc tế</li>\r\n<li>Adapter for Iphone 4</li>\r\n<li>Earphone for Iphone 4</li>\r\n<li>Manual User</li>\r\n</ul>\r\n<p>{tab=Địa chỉ bào hành}</p>\r\n<p>Mã sản phẩm: Iphone 4 32GB Apple                             <br /><br /></p>\r\n<ul>\r\n<li>FaceTime - Phone calls like you''ve never seen before.</li>\r\n<li>Restina Display - 960 by 640 by Wow.</li>\r\n<li>Multitasking. Give everything your individed attention.</li>\r\n<li>HD Video Recording - Life looks better in HD.</li>\r\n</ul>\r\n<p><strong>Hộp bao gồm:</strong></p>\r\n<ul>\r\n<li>Iphone 4 32GB phiên bản quốc tế</li>\r\n<li>Adapter for Iphone 4</li>\r\n<li>Earphone for Iphone 4</li>\r\n<li>Manual User</li>\r\n</ul>\r\n<p>{/tabs}<br /><br /></p>', 'Iphone_4_32GB__Q_4eb20d9b1efea.jpg', 'Iphone_4_32GB__Q_4eb20d9b200f5.jpg', 'Y', '0.0000', 'cân nặng', '0.0000', '0.0000', '0.0000', 'inches', '', 0, 1320278400, '', 'N', 0, NULL, 1320291739, 1347352670, 'Iphone 4 32GB (Quốc Tế) - Mới 100%', 0, '', '', 0, 'piece', 0, 'N,N,N,N,N,N,20%,10%,', 'none,0,0,1', '', '0,0'),
(18, 1, 0, 'Apple Ipad 2 16G 3G+Wifi (Black)', '<p>Bảo hành: 12 tháng </p>\r\n<p>Tình trạng: Mới 100% </p>\r\n<p>Khuyến mãi: Dán màn hình </p>\r\n<p>Kho: Còn hàng</p>', '<p> </p>\r\n<div class="summary" style="margin-bottom: 7px;">Ipad 2 mỏng hơn cả iPhone 4, xử lý đồ họa nhanh gấp 9 lần, bán ra từ 11/3 với giá bắt đầu từ 499 USD...</div>\r\n<p>Ông  Steve Jobs, CEO của Apple bất ngờ xuất hiện vào lúc 1h sáng 3/3  (tính  theo giờ Việt Nam), tại sự kiện do hãng này tổ chức ở San  Francisco  (Mỹ), để giới thiệu “siêu phẩm” iPad 2.</p>\r\n<table class="ar-image-center" border="0" cellspacing="0" cellpadding="0" align="center">\r\n<tbody>\r\n<tr>\r\n<td><img class="ar-photo" src="http://www.pcworld.com.vn/files/articles/2011/1223996/ipad2-5.jpg" border="0" style="width: 500px;" /></td>\r\n</tr>\r\n<tr>\r\n<td class="ar-image-desc">Steve Jobs và iPad 2 (Ảnh: Reuters)</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>Theo  Steve Jobs, iPad 2 có thiết kế hoàn toàn mới, sử dụng chip A5,  tốc độ  có thể nhanh hơn gấp đôi, và hiệu suất xử lý đồ họa có thể nhanh  hơn gấp  9 lần trong khi năng lượng tiêu thụ vẫn thấp như chip A4. "Đây  sẽ là  máy tính bảng đầu tiên dùng bộ xử lý dual-core bán ra thị trường  với số  lượng lớn", Jobs nói.</p>\r\n<p>Đúng như tin đồn trước đây,  iPad 2 có 2 camera, một phía trước và  một phía sau. Máy cũng được trang  bị con quay hồi chuyển đã xuất hiện  trước trong iPhone và iPod Touch.</p>\r\n<p>Mặc  dù có thêm nhiều tính năng mới, iPad 2 lại mỏng đi khoảng 1/3,  từ  13,4mm (của iPad đời đầu) xuống còn 8,8mm, và nhẹ hơn nhiều (từ 1,5   pound còn 1,3 pound). Thậm chí iPad 2 còn mỏng hơn iPhone 4 (9,3mm).   “Khi cầm iPad mới, bạn sẽ cảm thấy nó khác hẳn”, Steves Jobs nói.</p>\r\n<table class="ar-image-center" border="0" cellspacing="0" cellpadding="0" align="center">\r\n<tbody>\r\n<tr>\r\n<td><img class="ar-photo" src="http://www.pcworld.com.vn/files/articles/2011/1223996/mong-hon-iphone4.jpg" border="0" style="width: 500px;" /></td>\r\n</tr>\r\n<tr>\r\n<td class="ar-image-desc">iPad 2 thậm chí còn mỏng hơn iPhone 4 (Ảnh: Engadget)</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>Thời  lượng dùng pin của iPad 2 cũng tương đương với pin của iPad đời  đầu.  Theo Steve Jobs, quá trình thử nghiệm cho thấy pin của iPad 2  dùng được  trong 10 giờ.</p>\r\n<p>Đáng chú ý là iPad 2 vẫn giữ mức giá như iPad đời trước - 499 USD cho phiên bản Wifi 16GB.</p>\r\n<p>Một  bất ngờ khác là thời điểm bán ra không phải tháng 4 hay tháng 5,  tháng 6  như một số tin đồn, mà ngay từ 11/3/2011 tại Mỹ. Và chỉ sau 2  tuần, đến  ngày 25/3, iPad 2 sẽ được bán tại 26 nước khác.</p>\r\n<table class="ar-image-center" border="0" cellspacing="0" cellpadding="0" align="center">\r\n<tbody>\r\n<tr>\r\n<td><img class="ar-photo" src="http://www.pcworld.com.vn/files/articles/2011/1223996/gia-ban.jpg" border="0" style="width: 500px;" /></td>\r\n</tr>\r\n<tr>\r\n<td class="ar-image-desc">Giá bán các phiên bản của iPad 2 (Ảnh: Engadget)</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>Ipad  2 dùng hệ điều hành iOS 4.3, cũng công bố trong buổi ra mắt  iPad 2.  Theo Apple, iOS 4.3 tăng đáng kể hiệu năng của trình duyệt  Safari, cải  tiến mạnh các ứng dụng iTunes và AirPlay. Đặc biệt, iOS 4.3  hỗ trợ tính  năng FaceTime, nhờ vậy bạn có thể mở hội thoại video giữa 2  iPad với  nhau, giữa iPad với iPhone hoặc máy Mac.</p>\r\n<p>Riêng với iPhone 4, iOS  4.3 còn cung cấp khả năng biến máy thành một  điểm phát Wifi (hotspot) cá  nhân, chuyển sóng điện thoại 3G thành sóng  Wifi và cung cấp sóng này  cho tối đa 5 thiết bị khác.</p>\r\n<p>iPad 2 có 2 màu, trắng và đen, với các model dành cho cả 2 mạng AT&T và Verizon.</p>\r\n<p>Khác  với iPad 1, vỏ cho Ipad 2 thực ra là một chiếc nắp đậy, gọi là  Smart  Cover (nắp thông minh), che chắn và bảo vệ mặt trước của iPad 2.  Khi mở  nắp này ra, iPad tự động chuyển sang chế độ hoạt động, còn khi  đóng lại  thì nó trở về chế độ Sleep (ngủ). Smart Cover làm bằng nhựa  tổng hợp  hoặc da, phía trong lót một lớp vải mềm (microfiber) để tạo độ  êm và làm  sạch bề mặt iPad. Nó dính với mặt iPad bằng nam châm và có  thể dễ dàng  tháo ra.<br /> Loại bằng nhựa có giá 39 USD, còn loại da giá 69 USD.</p>\r\n<table class="ar-image-center" border="0" cellspacing="0" cellpadding="0" align="center">\r\n<tbody>\r\n<tr>\r\n<td><img class="ar-photo" src="http://www.pcworld.com.vn/files/articles/2011/1223996/20110302-10285321-img4575.jpg" border="0" style="width: 500px;" /></td>\r\n</tr>\r\n<tr>\r\n<td class="ar-image-desc">Nắp thông minh của iPad 2 (Ảnh: Engadget)</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>iPad  2 có cổng xuất tín hiệu HDMI với chất lượng lên tới 1080p, đi  kèm cáp  nối giá 39 USD. Máy có thể tải và phát liên tục (streaming) 9  video cùng  một lúc…</p>\r\n<p>Tại buổi ra mắt iPad 2, ông Randy Ubillos, Trưởng nhóm  phát triển  ứng dụng video của Apple cũng giới thiệu 2 ứng dụng trên iOS  4.3 là  iMovie phiên bản mới và đặc biệt là ứng dụng chơi nhạc  GarageBand. Ứng  dụng này có thể biến iPad 2 thành các loại nhạc cụ khác  nhau như piano,  ghi-ta, trống… giúp người không biết về âm nhạc cũng có  thể chơi dễ  dàng… Với bộ dụng cụ âm nhạc thông minh giá 4,99 USD này,  Steve Jobs  cho rằng ai cũng có thể sáng tác và chơi nhạc mà không cần  phải có tài  năng.</p>\r\n<p>Với tất cả những điều trên, Jobs cho rằng iPad 2 là một bước tiến lớn, và “chúng tôi nghĩ rằng 2011 là năm của iPad 2”.</p>\r\n<table class="ar-image-center" border="0" cellspacing="0" cellpadding="0" align="center">\r\n<tbody>\r\n<tr>\r\n<td><img class="ar-photo" src="http://www.pcworld.com.vn/files/articles/2011/1223996/20110302-10025941-img4445-1.jpg" border="0" style="width: 500px;" /></td>\r\n</tr>\r\n<tr>\r\n<td class="ar-image-desc">Steve Jobs: 2011 là năm của iPad 2 (Ảnh: Engadget)</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>Vào  cuối buổi giới thiệu, Steve Jobs nhấn mạnh rằng iPad 2 không còn  đơn  thuần là máy tính (PC): “Đối với Apple, công nghệ không phải là  tất cả.  Công nghệ phải gắn liền với nghệ thuật và tính nhân văn. Điều  đó càng  đúng đối với các sản phẩm hậu PC. Các đối thủ cạnh tranh của  chúng tôi  cho rằng máy tính bảng là một thị trường PC mới. Đó không  phải là một  cách tiếp cận đúng. Đây là những thiết bị hậu PC, cần phải  trực quan và  dễ dùng hơi so với PC. Phần cứng và phần mềm trên máy tính  bảng cần đan  quyện vào nhau chặt chẽ hơn so với cách thức trên PC”.</p>', 'Apple_Ipad_2_16G_4eb210eb91bb0.jpg', 'Apple_Ipad_2_16G_4eb210eb93228.jpg', 'Y', '0.0000', 'cân nặng', '0.0000', '0.0000', '0.0000', 'inches', '', 0, 1320278400, '', 'N', 0, NULL, 1320292587, 1320295579, 'Apple Ipad 2 16G 3G+Wifi (Black)', 0, '', '', 0, 'piece', 0, 'N,N,N,N,N,N,20%,10%,', 'none,0,0,1', '', '0,0'),
(19, 1, 0, 'Apple iPhone 4 16gb Quốc Tế (Đen)', '<p>Bảo hành: 12 tháng </p>\r\n<p>Tình trạng: Mới 100%  </p>\r\n<p>Khuyến mãi: Ốp lưng + Dán màn hình  </p>\r\n<p>Kho: Còn hàng </p>', '<p>Tại sự kiện Apple WWDC 2010, tổng giám đốc  điều hành Apple, Steve  Jobs đã chính thức thông báo rằng, chiếc iPhone  thế hệ kế tiếp sẽ có tên  gọi iPhone 4.</p>\r\n<div class="image-container image-center" style="width: 460px;"><a class="fancybox" href="http://vtcdn.com/files/images/2010/6/8/img-1275939095-1.jpg" rel="lightbox"><img src="http://vtcdn.com/files/imagecache/med/images/2010/6/8/img-1275939095-1.jpg" border="0" /></a></div>\r\n<p>iPhone 4 được giới thiệu với hơn  100 tính năng mới. Màn hình rộng  3,5 inch, độ phân giải 960 x 640, tỉ lệ  tương phản 800:1, tốt hơn 4 lần  so với iPhone 3GS. Ngoài camera và đèn  LED ở phía sau, iPhone 4 còn có  camera ở mặt trước cho phép bạn dể dàng  thực hiện cuộc gọi video.</p>\r\n<div class="image-container image-center" style="width: 460px;"><a class="fancybox" href="http://vtcdn.com/files/images/2010/6/8/img-1275939095-2.jpg" rel="lightbox"><img src="http://vtcdn.com/files/imagecache/med/images/2010/6/8/img-1275939095-2.jpg" border="0" /></a></div>\r\n<p>Tính năng Gyroscope được giới thiệu  đặc biệt hỗ trợ cho việc chơi game.</p>\r\n<div class="image-container image-center" style="width: 460px;"><a class="fancybox" href="http://vtcdn.com/files/images/2010/6/8/img-1275939095-3.jpg" rel="lightbox"><img src="http://vtcdn.com/files/imagecache/med/images/2010/6/8/img-1275939095-3.jpg" border="0" /></a></div>\r\n<p>Thông số kỹ thuật về pin khác ấn  tượng.</p>\r\n<div class="image-container image-center" style="width: 460px;"><a class="fancybox" href="http://vtcdn.com/files/images/2010/6/8/img-1275939095-4.jpg" rel="lightbox"><img src="http://vtcdn.com/files/imagecache/med/images/2010/6/8/img-1275939095-4.jpg" border="0" /></a></div>\r\n<p>iPhone 4 sử dụng chip A4 của Apple,  dung lượng lưu trữ lên đến 32  GB, băng tần HSDPA/HSUPA cho tốc độ  down/up đạt 7,2 Mbps/5,8Mbps, kết  nối Wifi chuẩn 802.11n.</p>\r\n<div class="image-container image-center" style="width: 460px;"><a class="fancybox" href="http://vtcdn.com/files/images/2010/6/8/img-1275939095-5.jpg" rel="lightbox"><img src="http://vtcdn.com/files/imagecache/med/images/2010/6/8/img-1275939095-5.jpg" border="0" /></a></div>\r\n<p>Với độ phân giải gấp 4 lần, chiếc  iPhone mới nhất này cho hình ảnh sắc nét với tỉ lệ 326 pixels / inch.</p>\r\n<div class="image-container image-center" style="width: 460px;"><a class="fancybox" href="http://vtcdn.com/files/images/2010/6/8/img-1275939095-6.jpg" rel="lightbox"><img src="http://vtcdn.com/files/imagecache/med/images/2010/6/8/img-1275939095-6.jpg" border="0" /></a></div>\r\n<p>Các thông số khác của iPhone 4 bao  gồm bề dày 9,4 mm, (mỏng hơn 24%  so với iPhone 3GS), camera 5 Mpx, hỗ  trợ quay video HD 720 và các tính  năng khác như iMovie, iBooks.</p>', 'Apple_iPhone_4_1_4eb211f16708d.jpg', 'Apple_iPhone_4_1_4eb211f1681da.jpg', 'Y', '0.0000', 'cân nặng', '0.0000', '0.0000', '0.0000', 'inches', '', 0, 1320278400, '', 'N', 0, NULL, 1320292849, 1320295599, 'Apple iPhone 4 16gb Quốc Tế (Đen)', 0, '', '', 0, 'piece', 0, 'N,N,N,N,N,N,20%,10%,', 'none,0,0,1', '', '0,0'),
(20, 1, 0, 'HTC Desire HD', '<p>Bảo hành: 12 tháng </p>\r\n<p>Tình trạng: Mới 100% </p>\r\n<p>Khuyến mãi: Dán màn hình </p>\r\n<p>Kho: Còn hàng</p>', '', 'HTC_Desire_HD_4eb3488745071.jpg', 'HTC_Desire_HD_4eb348874583b.jpg', 'Y', '0.0000', 'cân nặng', '0.0000', '0.0000', '0.0000', 'inches', '', 0, 1320364800, '', 'N', 0, NULL, 1320372359, 1340164026, 'HTC Desire HD', 0, '', '', 0, 'piece', 0, 'N,N,N,N,N,N,20%,10%,', 'none,0,0,1', '', '0,0'),
(21, 1, 0, 'HTC Desire', '<p>Bảo hành: 12 tháng </p>\r\n<p>Tình trạng: Mới 100% </p>\r\n<p>Khuyến mãi: Dán màn hình </p>\r\n<p>Kho: Còn hàng</p>', '', 'HTC_Desire_4eb348fd3da32.jpg', 'HTC_Desire_4eb348fd3e201.jpg', 'Y', '0.0000', 'cân nặng', '0.0000', '0.0000', '0.0000', 'inches', '', 0, 1320364800, '', 'N', 0, NULL, 1320372477, 1340164016, 'HTC Desire', 0, '', '', 0, 'piece', 0, 'N,N,N,N,N,N,20%,10%,', 'none,0,0,1', '', '0,0'),
(22, 1, 0, 'HTC HD 7 -16Gb', '<p>Bảo hành: 12 tháng </p>\r\n<p>Tình trạng: Mới 100% </p>\r\n<p>Khuyến mãi: Dán màn hình </p>\r\n<p>Kho: Còn hàng</p>', '', 'HTC_HD_7__16Gb_4eb349531e14a.jpg', 'HTC_HD_7__16Gb_4eb349531e91d.jpg', 'Y', '0.0000', 'cân nặng', '0.0000', '0.0000', '0.0000', 'inches', '', 0, 1320364800, '', 'N', 0, NULL, 1320372563, 1340164034, 'HTC HD 7 -16Gb', 0, '', '', 0, 'piece', 0, 'N,N,N,N,N,N,20%,10%,', 'none,0,0,1', '', '0,0'),
(23, 1, 0, 'Blackberry bold 9930', '<p>Bảo hành: 12 tháng </p>\r\n<p>Tình trạng: Mới 100% </p>\r\n<p>Khuyến mãi: Dán màn hình </p>\r\n<p>Kho: Còn hàng</p>', '<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><img src="http://thegioiblackberry.vn/uploads/gallerys/BlackBerry-Bold-9930-1.jpg" border="0" alt="http://thegioiblackberry.vn/uploads/gallerys/BlackBerry-Bold-9930-1.jpg" width="450" height="366" /></span></span></p>\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><br />Là model chạy cả mạng CDMA và  GSM của Bold 9900, BlackBerry Bold 9930 có  nhiều cải tiến đáng chú ý so  với dòng Bold 9780 như: sử dụng hệ điều  hành BlackBerry OS 7, vi xử  lýtốc độ 1.2 GHz, RAM 768MB, bộ nhớ trong  8GB (cho mở rộng dung lượng  tối đa 32GB qua thẻ nhớ microSD), camera 5  megapixel với đèn flash LED  và quay được video HD 720p, bàn phím QWERTY  (đầy đủ) tốt hơn bao giờ  hết, hỗ trợ công nghệ NFC.<br /> Không những thế, khung viền kim loại  chống gỉ bao quanh Bold 9930 mang  đến cho người dùng cảm giác đang sở  hữu chiếc điện thoại BlackBerry có  thiết kế chắc chắn và cao cấp.<br /><br /> Pin 1230 mAh của máy có thể tháo rời và sạc, cho thời gian trò chuyện   bình thường liên tục trong khoảng 6.6 giờ, trò chuyện với 3G trong   khoảng 5.9 giờ, và khoảng 307 giờ khi ở chế độ chờ. <br /><br /> Với vi xử lý 1,2 GHz, BlackBerry Bold 9930 xử lý các ứng dụng rất nhanh   và chuyển đổi giữa các trình đơn rất mượt. Trình duyệt của BlackBerry   OS 7 cho tốc độ nhanh hơn 40% so với BlackBerry OS 6, hỗ trợ HTML5 và   JavaScript tốt hơn, chơi được video HTML5 dạng nhúng, song vẫn “chào   thua” nội dung Flash. <br /><br /> Nhìn nhung, BlackBerry Bold 9930 đáp ứng tốt nhu cầu duyệt web, nhắn   tin, email và thông tin liên lạc dựa trên văn bản, song vẫn còn hạn chế   về mặt giải trí và nội dung đa phương tiện. <br /><br /> Dẫu BlackBerry Bold 9930 có màn hình cảm ứng đa điểm chỉ 2.8 inch, song   người dùng được an ủi với độ phân giải cao 640 x 480 pixel và mật độ   điểm ảnh 287 dpi, cho chất lượng hiển thị hình ảnh sắc nét và tươi sáng. <br /><br /> Với kích thước 115 x 66 x 10.5 mm và trọng lượng 130 g, BlackBerry Bold   9930 có khả năng hoạt động trên 2 băng tần của mạng CDMA và 4 băng tần   của mạng GSM, đồng thời cũng hỗ trợ kết nối Wi-Fi 802.11 b/g/n, GPS /   aGPS, Bluetooth 2.1.</span></span></p>\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><img src="http://thegioiblackberry.vn/uploads/gallerys/blackberry-bold-9930-verizon.jpg" border="0" alt="http://thegioiblackberry.vn/uploads/gallerys/blackberry-bold-9930-verizon.jpg" width="530" height="417" /></span></span></p>', 'blackberry_bold__4eb34c785df64.jpg', 'blackberry_bold__4eb34c785e738.jpg', 'Y', '0.0000', 'cân nặng', '0.0000', '0.0000', '0.0000', 'inches', '', 0, 1320364800, '', 'N', 0, NULL, 1320373368, 1320376772, 'Blackberry bold 9930', 0, '', '', 0, 'piece', 0, 'N,N,N,N,N,N,20%,10%,', 'none,0,0,1', '', '0,0'),
(24, 1, 0, 'BlackBerry Bold 9780 black (Brandnew)', '<p>Bảo hành: 12 tháng </p>\r\n<p>Tình trạng: Mới 100% </p>\r\n<p>Khuyến mãi: Dán màn hình </p>\r\n<p>Kho: Còn hàng</p>', '<p style="text-align: justify;"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;"><strong>Sau một hình ảnh BB 9780 rò rỉ được phát tán trên Internet thì nay, trang web <em>Driphter </em>đã cho đăng tải video chi tiết về chiếc BlackBerry Bold 9780 chạy OS 6.</strong></span></span></p>\r\n<p style="text-align: justify;"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;"><strong><img src="http://thegioiblackberry.vn/uploads/gallerys/blackberry-bold-9780_t-mobile.jpg" border="0" alt="http://thegioiblackberry.vn/uploads/gallerys/blackberry-bold-9780_t-mobile.jpg" title="http://thegioiblackberry.vn/uploads/gallerys/blackberry-bold-9780_t-mobile.jpg" width="570" height="548" /><br /> </strong></span></span></p>\r\n<p style="text-align: justify;"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;">BlackBerry   9780 được xem là phiên bản nâng cấp của model BlackBerry 9700 Bold.   Ngoài việc chạy hệ điều hành BlackBerry OS 6, chiếc điện thoại này còn   được trang bị bàn phím QWERTY đầy đủ, màn hình độ phân giải HVGA (480 x   320 pixel), hỗ trợ kết nối GSM, Wi-Fi b/g.</span></span></p>\r\n<p style="text-align: justify;"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;">Cùng với đó, BlackBerry 9780 còn có bộ nhớ RAM 512 MB, và một camera 5 megapixel.</span></span></p>\r\n<p style="text-align: justify;"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;">Hiện ngày ra mắt và giá bán của BlackBerry 9780 chưa được tiết lộ.</span></span></p>\r\n<p style="text-align: center;"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;"><img src="http://thegioiblackberry.vn/uploads/gallerys/blackberry_bold_9780.jpg" border="0" alt="Blackberry Bold 9780 T-mobile" title="Blackberry Bold 9780 T-mobile" width="560" height="420" /><br /></span></span></p>\r\n<p style="text-align: center;"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;"><br /></span></span></p>\r\n<h1><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;">So sánh Blackberry Bold 9780 và 9700</span></span></h1>\r\n<div style="margin-left: 10px; margin-top: 5px; margin-bottom: 10px;"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;"><br /></span></span></div>\r\n<table style="width: 380px;" border="0" cellspacing="3" cellpadding="0" align="center">\r\n<tbody>\r\n<tr>\r\n<td><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;"><img src="http://vietcntt.com/news/uploads/image/news/2010/thang09/nss_1283327391.jpg" border="0" alt="So sánh Blackberry Bold 9780 và 9700" width="380" style="border: 1px double #c0c0c0; padding: 1px;" /></span></span></td>\r\n</tr>\r\n<tr>\r\n<td align="center"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;"><br /></span></span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;">Blackberry  Bold 9700 đã ra mắt khá  lâu và cũng có thể nói là rất thành công. Vài  ngày trước đây, chúng ta  lại nghe thêm thông tin về việc nó sẽ được nâng  cấp lên Blackberry 6,  thật là tuyệt. Như vậy đối với những người đang  dùng 9700 là quá đủ  rồi. Nhưng có lẽ RIM thấy chưa đủ, vì thế Bold 9780  sẽ được ra mắt  với  việc nâng gấp đôi bộ nhớ và chạy sẵn OS6.0. Liệu bạn  có sẵn sàng nâng  cấp lên 9780? Những hình ảnh dưới đây so sánh thiết kế  của 9700 và  9780, bạn hãy tự coi và tìm cho mình một lí do nhé.<br /><br /><span style="color: #800000;"><strong>Chi tiết so sánh giữa Bold 9700 và 9780:</strong></span> <br /><br /> * Bên ngoài Bold 9700 và 9780 hoàn toàn giống nhau, ngoại trừ việc 9780 có viền bezen màu đen chứ không trắng bạc như 9700. <br /> * Với việc có 512Mb Ram (gấp đôi 9700), có lẽ OS6.0 trên 9780 sẽ hỗ trợ nhiều tính năng hơn.<br /> * Camera 9780 được nâng cấp lên 5.0 megapixel thay vì 3.2  Megapixel.  Với một số người có lẽ nậng cấp này không thật sự hấp dẫn vì  thực tế  chất lượng ảnh chụp không khác nhau nhiều.<br /> * Trong tương  lại, cả 2  sẽ cùng chạy Blackberry 6.Tuy nhiên 9780 sẽ được cài sẵn  OS6.0 còn số  phận của 9700 thì chưa biết chính xác ngày nâng cấp.<br /><br /><span style="color: #800000;"><strong>Một số hình ảnh:</strong></span></span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;"><br /></span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;"><br /></span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;"><br /></span></span></p>\r\n<h1><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;">BlackBerry Bold 9780</span></span></h1>\r\n<table style="width: 80%;" border="0" cellspacing="2" cellpadding="2" align="center">\r\n<tbody>\r\n<tr>\r\n<td><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;"><img src="http://sohoa.vnexpress.net/Files/Subject/3B/9B/33/28/blackberry-bold-9780-1.jpg" border="1" width="480" height="336" /></span></span></td>\r\n</tr>\r\n<tr>\r\n<td><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;"><img src="http://sohoa.vnexpress.net/Files/Subject/3B/9B/33/28/blackberry-bold-9780-2.jpg" border="1" width="480" height="398" /></span></span></td>\r\n</tr>\r\n<tr>\r\n<td><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;"><img src="http://sohoa.vnexpress.net/Files/Subject/3B/9B/33/28/blackberry-bold-9780-3.jpg" border="1" width="480" height="267" /></span></span></td>\r\n</tr>\r\n<tr>\r\n<td><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;"><img src="http://sohoa.vnexpress.net/Files/Subject/3B/9B/33/28/blackberry-bold-9780-4.jpg" border="1" width="480" height="390" /></span></span></td>\r\n</tr>\r\n<tr>\r\n<td><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;"><img src="http://sohoa.vnexpress.net/Files/Subject/3B/9B/33/28/blackberry-bold-9780-5.jpg" border="1" width="480" height="347" /></span></span></td>\r\n</tr>\r\n<tr>\r\n<td><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;"><img src="http://sohoa.vnexpress.net/Files/Subject/3B/9B/33/28/blackberry-bold-9780-6.jpg" border="1" width="480" height="372" /></span></span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;"> </span></span></p>', 'BlackBerry_Bold__4eb34d14ee9bf.jpg', 'BlackBerry_Bold__4eb34d14ef18a.jpg', 'Y', '0.0000', 'cân nặng', '0.0000', '0.0000', '0.0000', 'inches', '', 0, 1320364800, '', 'N', 0, NULL, 1320373524, 1320376756, 'BlackBerry Bold 9780 black (Brandnew)', 0, '', '', 0, 'piece', 0, 'N,N,N,N,N,N,20%,10%,', 'none,0,0,1', '', '0,0'),
(25, 1, 0, 'BlackBerry Bold Touch 9900', '<p>Bảo hành: 12 tháng </p>\r\n<p>Tình trạng: Mới 100% </p>\r\n<p>Khuyến mãi: Dán màn hình </p>\r\n<p>Kho: Còn hàng</p>', '', 'BlackBerry_Bold__4eb34ea2008d0.jpg', 'BlackBerry_Bold__4eb34ea200cb7.jpg', 'Y', '0.0000', 'cân nặng', '0.0000', '0.0000', '0.0000', 'inches', '', 0, 1320364800, '', 'N', 0, NULL, 1320373922, 1320373947, 'BlackBerry Bold Touch 9900', 0, '', '', 0, 'piece', 0, 'N,N,N,N,N,N,20%,10%,', 'none,0,0,1', '', '0,0'),
(26, 1, 0, 'Nokia E7', '<p>Bảo hành: 12 tháng </p>\r\n<p>Tình trạng: Mới 100% </p>\r\n<p>Khuyến mãi: Dán màn hình </p>\r\n<p>Kho: Còn hàng</p>', '', 'Nokia_E7_4eb3512484a9e.jpg', 'Nokia_E7_4eb3512485221.jpg', 'Y', '0.0000', 'cân nặng', '0.0000', '0.0000', '0.0000', 'inches', '', 0, 1320364800, '', 'N', 0, NULL, 1320374564, 1320374564, 'Nokia E7', 0, '', '', 0, 'piece', 0, 'N,N,N,N,N,N,20%,10%,', 'none,0,0,1', '', '0,0'),
(27, 1, 0, 'Nokia 8800 Carbon Arte', '<p>Bảo hành: 12 tháng </p>\r\n<p>Tình trạng: Mới 100% </p>\r\n<p>Khuyến mãi: Dán màn hình </p>\r\n<p>Kho: Còn hàng</p>', '<table border="1" cellspacing="0" cellpadding="0">\r\n<tbody>\r\n<tr>\r\n<td rowspan="3" width="101" valign="top">\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><span style="color: #000000;"><strong><span style="color: #aa4700;">Tổng quan</span> </strong></span></span></span></p>\r\n</td>\r\n<td width="137" valign="top">\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><span style="color: #000000;"> Mạng 2G</span></span></span></p>\r\n</td>\r\n<td width="286" valign="top">\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><span style="color: #000000;"> GSM  900 / 1800 / 1900</span></span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="137" valign="top"><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><span style="color: #000000;"> Mạng 3G</span></span></span></td>\r\n<td width="286" valign="top"><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><span style="color: #000000;"> UMTS 2100</span></span></span></td>\r\n</tr>\r\n<tr>\r\n<td width="137" valign="top">\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><span style="color: #000000;"> Hiện trạng</span></span></span></p>\r\n</td>\r\n<td width="286" valign="top">\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><span style="color: #000000;"> Đang có hàng </span></span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td rowspan="2" width="101" valign="top">\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><strong><span style="color: #000000;"> <span style="color: #aa4700;">Kích thước</span> </span></strong></span></span></p>\r\n</td>\r\n<td width="137" valign="top">\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><span style="color: #000000;"> Kích thước</span></span></span></p>\r\n</td>\r\n<td width="286" valign="top">\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><span style="color: #000000;"> 109 x 45.6 x 14.6 mm, 65 cc </span></span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="137" valign="top">\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><span style="color: #000000;"> Trọng lượng</span></span></span></p>\r\n</td>\r\n<td width="286" valign="top">\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><span style="color: #000000;"> 150g</span></span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="101" valign="top">\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><strong><span style="color: #000000;"> <span style="color: #aa4700;">Màn hình</span> </span></strong></span></span></p>\r\n</td>\r\n<td width="137" valign="top">\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><span style="color: #000000;"> Kiểu</span></span></span></p>\r\n</td>\r\n<td width="286" valign="top">\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><span style="color: #000000;"> Màn hình OLED, 16 triệu màu<br /> 240 x 320 pixels</span></span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td rowspan="3" width="101" valign="top">\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><strong><span style="color: #000000;"><span style="color: #aa4700;"> Âm thanh</span> </span></strong></span></span></p>\r\n</td>\r\n<td width="137" valign="top">\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><span style="color: #000000;"> Kiểu</span></span></span></p>\r\n</td>\r\n<td width="286" valign="top">\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><span style="color: #000000;"> Âm thanh đa âm, MP3</span></span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="137" valign="top">\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><span style="color: #000000;"> Loa ngoài</span></span></span></p>\r\n</td>\r\n<td width="286" valign="top">\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><span style="color: #000000;"> Có Stereo</span></span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="137" valign="top">\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><span style="color: #000000;"> Rung</span></span></span></p>\r\n</td>\r\n<td width="286" valign="top">\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><span style="color: #000000;"> Có</span></span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td rowspan="3" width="101" valign="top">\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><strong><span style="color: #000000;"> <span style="color: #aa4700;">Bộ nhớ</span> </span></strong></span></span></p>\r\n</td>\r\n<td width="137" valign="top">\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><span style="color: #000000;"> Danh bạ</span></span></span></p>\r\n</td>\r\n<td width="286" valign="top">\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><span style="color: #000000;"> 1000 số</span></span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="137" valign="top"><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><span style="color: #000000;"> Lịch sử cuộc gọi</span></span></span></td>\r\n<td width="286" valign="top"><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><span style="color: #000000;"> 20 cuộc gọi đi, 20 cuộc gọi đến, 20 cuộc gọi nhỡ</span></span></span></td>\r\n</tr>\r\n<tr>\r\n<td width="137" valign="top">\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><span style="color: #000000;"> Bộ nhớ trong</span></span></span></p>\r\n</td>\r\n<td width="286" valign="top">\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><span style="color: #000000;"> 4GB</span></span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td rowspan="8" width="101" valign="top">\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><strong><span style="color: #000000;"> <br /><br /><br /><br /><br /><span style="color: #aa4700;"> Dữ liệu</span> </span></strong></span></span></p>\r\n</td>\r\n<td width="137" valign="top">\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><span style="color: #000000;"> GPRS</span></span></span></p>\r\n</td>\r\n<td width="286" valign="top">\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><span style="color: #000000;"> Class 10 (4+1, 3+2)</span></span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="137" valign="top">\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><span style="color: #000000;"> HSCSD</span></span></span></p>\r\n</td>\r\n<td width="286" valign="top">\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><span style="color: #000000;"> Có</span></span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="137" valign="top">\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><span style="color: #000000;"> EDGE</span></span></span></p>\r\n</td>\r\n<td width="286" valign="top">\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><span style="color: #000000;"> Class 10, 236.8 kbps </span></span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="137" valign="top">\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><span style="color: #000000;"> 3G</span></span></span></p>\r\n</td>\r\n<td width="286" valign="top">\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><span style="color: #000000;"> Có, 384 kbps</span></span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="137" valign="top">\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><span style="color: #000000;"> WLAN</span></span></span></p>\r\n</td>\r\n<td width="286" valign="top">\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><span style="color: #000000;"> Không</span></span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="137" valign="top">\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><span style="color: #000000;"> Bluetooth</span></span></span></p>\r\n</td>\r\n<td width="286" valign="top">\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><span style="color: #000000;"> Bluetooth 2.0 </span></span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="137" valign="top">\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><span style="color: #000000;"> Hồng ngoại</span></span></span></p>\r\n</td>\r\n<td width="286" valign="top">\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><span style="color: #000000;"> Có</span></span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="137" valign="top">\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><span style="color: #000000;"> Cổng kết nối</span></span></span></p>\r\n</td>\r\n<td width="286" valign="top">\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><span style="color: #000000;"> USB</span></span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td rowspan="5">\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><strong><span style="color: #000000;"> <span style="color: #aa4700;">Phần mền</span> </span></strong></span></span></p>\r\n</td>\r\n<td width="137" valign="top">\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><span style="color: #000000;"> Tin nhắn</span></span></span></p>\r\n</td>\r\n<td width="286" valign="top">\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><span style="color: #000000;"> SMS, MMS, Email, IM</span></span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="137" valign="top">\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><span style="color: #000000;"> Trò chơi</span></span></span></p>\r\n</td>\r\n<td width="286" valign="top">\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><span style="color: #000000;"> Có</span></span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="137" valign="top"><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><span style="color: #000000;"> Trình duyệt</span></span></span></td>\r\n<td width="286" valign="top"><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><span style="color: #000000;"> WAP 2.0, XHTML</span></span></span></td>\r\n</tr>\r\n<tr>\r\n<td width="137" valign="top">\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><span style="color: #000000;"> Máy ảnh</span></span></span></p>\r\n</td>\r\n<td width="286" valign="top">\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><span style="color: #000000;"> 3.15 Megapixel, 2048x1536 pixels, autofocus</span></span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="137" valign="top"><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><br /><span style="color: #000000;"> Ứng dụng</span></span></span></td>\r\n<td width="286" valign="top"><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><span style="color: #000000;"> <span style="color: #000000;">Chơi nhạc  MP3, AAC, eAAC<br /> Java MIDP 2.1<br /> Ghi âm<br /> T9</span></span></span></span></td>\r\n</tr>\r\n<tr>\r\n<td rowspan="3" width="101" valign="top">\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><span style="color: #000000;"><strong> <br /><span style="color: #aa4700;"> </span></strong></span><span style="color: #aa4700;"><strong>Pin</strong></span></span></span></p>\r\n</td>\r\n<td width="137" valign="top">\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><span style="color: #000000;"> Pin</span></span></span></p>\r\n</td>\r\n<td width="286" valign="top">\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><span style="color: #000000;"> Pin chuẩn Li - lon, BL-4U 1100 mAh </span></span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="137" valign="top">\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><span style="color: #000000;"> Thời gian chờ</span></span></span></p>\r\n</td>\r\n<td width="286" valign="top">\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><span style="color: #000000;"> Lên đến 300 giờ</span></span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="137" valign="top">\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><span style="color: #000000;"> Thời gian đàm thoại</span></span></span></p>\r\n</td>\r\n<td width="286" valign="top">\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"><span style="color: #000000;"> Lên đến 3 giờ</span></span></span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p><span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: small;"></span></span></p>', 'Nokia_8800_Carbo_4eb3518444343.jpg', 'Nokia_8800_Carbo_4eb3518444ae2.jpg', 'Y', '0.0000', 'cân nặng', '0.0000', '0.0000', '0.0000', 'inches', '', 0, 1320364800, '', 'N', 0, NULL, 1320374660, 1320374660, 'Nokia 8800 Carbon Arte', 0, '', '', 0, 'piece', 0, 'N,N,N,N,N,N,20%,10%,', 'none,0,0,1', '', '0,0'),
(28, 1, 0, 'Nokia 8800 Sapphire (Black)', '<p>Bảo hành: 12 tháng </p>\r\n<p>Tình trạng: Mới 100% </p>\r\n<p>Khuyến mãi: Dán màn hình </p>\r\n<p>Kho: Còn hàng</p>', '', 'Nokia_8800_Sapph_4eb351cb45c32.jpg', 'Nokia_8800_Sapph_4eb351cb461d8.jpg', 'Y', '0.0000', 'cân nặng', '0.0000', '0.0000', '0.0000', 'inches', '', 0, 1320364800, '', 'N', 0, NULL, 1320374731, 1320374731, 'Nokia 8800 Sapphire (Black)', 0, '', '', 0, 'piece', 0, 'N,N,N,N,N,N,20%,10%,', 'none,0,0,1', '', '0,0'),
(29, 1, 0, 'Samsung I9003 Galaxy SL', '<p>Bảo hành: 12 tháng </p>\r\n<p>Tình trạng: Mới 100% </p>\r\n<p>Khuyến mãi: Dán màn hình </p>\r\n<p>Kho: Còn hàng</p>', '', 'Samsung_I9003_Ga_4eb3536ebc0b1.jpg', 'Samsung_I9003_Ga_4eb3536ebcd16.jpg', 'Y', '0.0000', 'cân nặng', '0.0000', '0.0000', '0.0000', 'inches', '', 0, 1320364800, '', 'N', 0, NULL, 1320375150, 1320375150, 'Samsung I9003 Galaxy SL', 0, '', '', 0, 'piece', 0, 'N,N,N,N,N,N,20%,10%,', 'none,0,0,1', '', '0,0'),
(30, 1, 0, 'Samsung B5722', '<p>Bảo hành: 12 tháng </p>\r\n<p>Tình trạng: Mới 100% </p>\r\n<p>Khuyến mãi: Dán màn hình </p>\r\n<p>Kho: Còn hàng</p>', '', 'Samsung_B5722_4eb353ac246ef.jpg', 'Samsung_B5722_4eb353ac24ab6.jpg', 'Y', '0.0000', 'cân nặng', '0.0000', '0.0000', '0.0000', 'inches', '', 0, 1320364800, '', 'N', 0, NULL, 1320375212, 1320375256, 'Samsung B5722', 0, '', '', 0, 'piece', 0, 'N,N,N,N,N,N,20%,10%,', 'none,0,0,1', '', '0,0');
INSERT INTO `webvn_vm_product` (`product_id`, `vendor_id`, `product_parent_id`, `product_sku`, `product_s_desc`, `product_desc`, `product_thumb_image`, `product_full_image`, `product_publish`, `product_weight`, `product_weight_uom`, `product_length`, `product_width`, `product_height`, `product_lwh_uom`, `product_url`, `product_in_stock`, `product_available_date`, `product_availability`, `product_special`, `product_discount_id`, `ship_code_id`, `cdate`, `mdate`, `product_name`, `product_sales`, `attribute`, `custom_attribute`, `product_tax_id`, `product_unit`, `product_packaging`, `child_options`, `quantity_options`, `child_option_ids`, `product_order_levels`) VALUES
(31, 1, 0, 'Samsung Star S5233S', '<p>Bảo hành: 12 tháng </p>\r\n<p>Tình trạng: Mới 100% </p>\r\n<p>Khuyến mãi: Dán màn hình </p>\r\n<p>Kho: Còn hàng</p>', '<table border="1" cellspacing="0" cellpadding="4">\r\n<tbody>\r\n<tr>\r\n<td valign="top" bgcolor="#eeeeee"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;">TỔNG QUAN</span></span></td>\r\n<td bgcolor="#f9f9f9">\r\n<table style="width: 100%;" border="0" cellspacing="0" cellpadding="3">\r\n<tbody>\r\n<tr>\r\n<td style="border-bottom: 1px solid #f2f2f2;" width="140" valign="top"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;"><a href="http://dienthoaididong.com.vn/vn/tudien.php?keyword=M%E1%BA%A1ng&width=450&height=300" title="Mạng">Mạng</a></span></span></td>\r\n<td style="border-bottom: 1px solid #f2f2f2;"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;">: GSM 850 / 900 / 1800 / 1900 Mhz<br /></span></span></td>\r\n</tr>\r\n<tr>\r\n<td style="border-bottom: 1px solid #f2f2f2;" width="140" valign="top"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;"><a href="http://dienthoaididong.com.vn/vn/tudien.php?keyword=Ng%C3%B4n+ng%E1%BB%AF&width=450&height=300" title="Ngôn ngữ">Ngôn ngữ</a></span></span></td>\r\n<td style="border-bottom: 1px solid #f2f2f2;"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;">: Tiếng Anh, Tiếng Việt<br /></span></span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign="top" bgcolor="#eeeeee"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;">KÍCH THƯỚC</span></span></td>\r\n<td bgcolor="#f9f9f9">\r\n<table style="width: 100%;" border="0" cellspacing="0" cellpadding="3">\r\n<tbody>\r\n<tr>\r\n<td style="border-bottom: 1px solid #f2f2f2;" width="140" valign="top"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;"><a href="http://dienthoaididong.com.vn/vn/tudien.php?keyword=K%C3%ADch+th%C6%B0%E1%BB%9Bc&width=450&height=300" title="Kích thước">Kích thước</a></span></span></td>\r\n<td style="border-bottom: 1px solid #f2f2f2;"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;">: 104 x 53 x 11.9 mm<br /></span></span></td>\r\n</tr>\r\n<tr>\r\n<td style="border-bottom: 1px solid #f2f2f2;" width="140" valign="top"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;"><a href="http://dienthoaididong.com.vn/vn/tudien.php?keyword=Tr%E1%BB%8Dng+l%C6%B0%E1%BB%A3ng&width=450&height=300" title="Trọng lượng">Trọng lượng</a></span></span></td>\r\n<td style="border-bottom: 1px solid #f2f2f2;"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;">: 94g<br /></span></span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign="top" bgcolor="#eeeeee"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;">HIỂN THỊ</span></span></td>\r\n<td bgcolor="#f9f9f9">\r\n<table style="width: 100%;" border="0" cellspacing="0" cellpadding="3">\r\n<tbody>\r\n<tr>\r\n<td style="border-bottom: 1px solid #f2f2f2;" width="140" valign="top"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;"><a href="http://dienthoaididong.com.vn/vn/tudien.php?keyword=M%C3%A0n+h%C3%ACnh&width=450&height=300" title="Màn hình">Màn hình</a></span></span></td>\r\n<td style="border-bottom: 1px solid #f2f2f2;"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;">: TFT, cảm ứng 262.144 màu<br /></span></span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign="top" bgcolor="#eeeeee"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;">NHẠC CHUÔNG</span></span></td>\r\n<td bgcolor="#f9f9f9">\r\n<table style="width: 100%;" border="0" cellspacing="0" cellpadding="3">\r\n<tbody>\r\n<tr>\r\n<td style="border-bottom: 1px solid #f2f2f2;" width="140" valign="top"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;"><a href="http://dienthoaididong.com.vn/vn/tudien.php?keyword=Ki%E1%BB%83u+chu%C3%B4ng&width=450&height=300" title="Kiểu chuông">Kiểu chuông</a></span></span></td>\r\n<td style="border-bottom: 1px solid #f2f2f2;"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;">: Nhạc Chuông 64 âm sắc, MP3<br /></span></span></td>\r\n</tr>\r\n<tr>\r\n<td style="border-bottom: 1px solid #f2f2f2;" width="140" valign="top"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;"><a href="http://dienthoaididong.com.vn/vn/tudien.php?keyword=Rung&width=450&height=300" title="Rung">Rung</a></span></span></td>\r\n<td style="border-bottom: 1px solid #f2f2f2;"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;">: Có<br /></span></span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign="top" bgcolor="#eeeeee"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;">BỘ NHỚ</span></span></td>\r\n<td bgcolor="#f9f9f9">\r\n<table style="width: 100%;" border="0" cellspacing="0" cellpadding="3">\r\n<tbody>\r\n<tr>\r\n<td style="border-bottom: 1px solid #f2f2f2;" width="140" valign="top"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;"><a href="http://dienthoaididong.com.vn/vn/tudien.php?keyword=L%C6%B0u+trong+m%C3%A1y&width=450&height=300" title="Lưu trong máy">Lưu trong máy</a></span></span></td>\r\n<td style="border-bottom: 1px solid #f2f2f2;"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;">: 1000 số, hiển thị hình ảnh người gọi<br /></span></span></td>\r\n</tr>\r\n<tr>\r\n<td style="border-bottom: 1px solid #f2f2f2;" width="140" valign="top"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;"><a href="http://dienthoaididong.com.vn/vn/tudien.php?keyword=L%C6%B0u+tr%E1%BB%AF+cu%E1%BB%99c+g%E1%BB%8Di&width=450&height=300" title="Lưu trữ cuộc gọi">Lưu trữ cuộc gọi</a></span></span></td>\r\n<td style="border-bottom: 1px solid #f2f2f2;"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;">: 30 cuộc gọi đến, 30 cuộc gọi đi, 30 cuộc gọi nhỡ<br /></span></span></td>\r\n</tr>\r\n<tr>\r\n<td style="border-bottom: 1px solid #f2f2f2;" width="140" valign="top"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;"><a href="http://dienthoaididong.com.vn/vn/tudien.php?keyword=Khe+c%E1%BA%AFm+th%E1%BA%BB+nh%E1%BB%9B&width=450&height=300" title="Khe cắm thẻ nhớ">Khe cắm thẻ nhớ</a></span></span></td>\r\n<td style="border-bottom: 1px solid #f2f2f2;"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;">: MicroSD hỗ trợ lên đến 8G<br /></span></span></td>\r\n</tr>\r\n<tr>\r\n<td style="border-bottom: 1px solid #f2f2f2;" width="140" valign="top"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;"><a href="http://dienthoaididong.com.vn/vn/tudien.php?keyword=B%E1%BB%99+nh%E1%BB%9B+trong&width=450&height=300" title="Bộ nhớ trong">Bộ nhớ trong</a></span></span></td>\r\n<td style="border-bottom: 1px solid #f2f2f2;"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;">: 50MB<br /></span></span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign="top" bgcolor="#eeeeee"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;">DỮ LIỆU</span></span></td>\r\n<td bgcolor="#f9f9f9">\r\n<table style="width: 100%;" border="0" cellspacing="0" cellpadding="3">\r\n<tbody>\r\n<tr>\r\n<td style="border-bottom: 1px solid #f2f2f2;" width="140" valign="top"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;"><a href="http://dienthoaididong.com.vn/vn/tudien.php?keyword=GPRS&width=450&height=300" title="GPRS">GPRS</a></span></span></td>\r\n<td style="border-bottom: 1px solid #f2f2f2;"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;">: Class 10 (4+1/3+2 slots), 32 - 48 kbps<br /></span></span></td>\r\n</tr>\r\n<tr>\r\n<td style="border-bottom: 1px solid #f2f2f2;" width="140" valign="top"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;"><a href="http://dienthoaididong.com.vn/vn/tudien.php?keyword=HSCSD&width=450&height=300" title="HSCSD">HSCSD</a></span></span></td>\r\n<td style="border-bottom: 1px solid #f2f2f2;"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;">: Không<br /></span></span></td>\r\n</tr>\r\n<tr>\r\n<td style="border-bottom: 1px solid #f2f2f2;" width="140" valign="top"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;"><a href="http://dienthoaididong.com.vn/vn/tudien.php?keyword=EDGE&width=450&height=300" title="EDGE">EDGE</a></span></span></td>\r\n<td style="border-bottom: 1px solid #f2f2f2;"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;">: Class 10, 236.8 kbps<br /></span></span></td>\r\n</tr>\r\n<tr>\r\n<td style="border-bottom: 1px solid #f2f2f2;" width="140" valign="top"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;"><a href="http://dienthoaididong.com.vn/vn/tudien.php?keyword=3G&width=450&height=300" title="3G">3G</a></span></span></td>\r\n<td style="border-bottom: 1px solid #f2f2f2;"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;">: Không<br /></span></span></td>\r\n</tr>\r\n<tr>\r\n<td style="border-bottom: 1px solid #f2f2f2;" width="140" valign="top"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;"><a href="http://dienthoaididong.com.vn/vn/tudien.php?keyword=WLAN&width=450&height=300" title="WLAN">WLAN</a></span></span></td>\r\n<td style="border-bottom: 1px solid #f2f2f2;"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;">: Không<br /></span></span></td>\r\n</tr>\r\n<tr>\r\n<td style="border-bottom: 1px solid #f2f2f2;" width="140" valign="top"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;"><a href="http://dienthoaididong.com.vn/vn/tudien.php?keyword=Bluetooth&width=450&height=300" title="Bluetooth">Bluetooth</a></span></span></td>\r\n<td style="border-bottom: 1px solid #f2f2f2;"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;">: V2.0 với A2DP<br /></span></span></td>\r\n</tr>\r\n<tr>\r\n<td style="border-bottom: 1px solid #f2f2f2;" width="140" valign="top"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;"><a href="http://dienthoaididong.com.vn/vn/tudien.php?keyword=H%E1%BB%93ng+ngo%E1%BA%A1i&width=450&height=300" title="Hồng ngoại">Hồng ngoại</a></span></span></td>\r\n<td style="border-bottom: 1px solid #f2f2f2;"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;">: Không<br /></span></span></td>\r\n</tr>\r\n<tr>\r\n<td style="border-bottom: 1px solid #f2f2f2;" width="140" valign="top"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;"><a href="http://dienthoaididong.com.vn/vn/tudien.php?keyword=USB&width=450&height=300" title="USB">USB</a></span></span></td>\r\n<td style="border-bottom: 1px solid #f2f2f2;"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;">: v2.0<br /></span></span></td>\r\n</tr>\r\n<tr>\r\n<td style="border-bottom: 1px solid #f2f2f2;" width="140" valign="top"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;"><a href="http://dienthoaididong.com.vn/vn/tudien.php?keyword=GPS&width=450&height=300" title="GPS">GPS</a></span></span></td>\r\n<td style="border-bottom: 1px solid #f2f2f2;"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;">: Không<br /></span></span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign="top" bgcolor="#eeeeee"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;">ĐẶC ĐIỂM</span></span></td>\r\n<td bgcolor="#f9f9f9">\r\n<table style="width: 100%;" border="0" cellspacing="0" cellpadding="3">\r\n<tbody>\r\n<tr>\r\n<td style="border-bottom: 1px solid #f2f2f2;" width="140" valign="top"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;"><a href="http://dienthoaididong.com.vn/vn/tudien.php?keyword=Tin+nh%E1%BA%AFn&width=450&height=300" title="Tin nhắn">Tin nhắn</a></span></span></td>\r\n<td style="border-bottom: 1px solid #f2f2f2;"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;">: SMS, MMS, Email, Instant Messaging<br /></span></span></td>\r\n</tr>\r\n<tr>\r\n<td style="border-bottom: 1px solid #f2f2f2;" width="140" valign="top"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;"><a href="http://dienthoaididong.com.vn/vn/tudien.php?keyword=Tr%C3%ACnh+duy%E1%BB%87t&width=450&height=300" title="Trình duyệt">Trình duyệt</a></span></span></td>\r\n<td style="border-bottom: 1px solid #f2f2f2;"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;">: WAP 2.0/xHTML, HTML (NetFront 3.4), RSS reader<br /></span></span></td>\r\n</tr>\r\n<tr>\r\n<td style="border-bottom: 1px solid #f2f2f2;" width="140" valign="top"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;"><a href="http://dienthoaididong.com.vn/vn/tudien.php?keyword=Tr%C3%B2+ch%C6%A1i&width=450&height=300" title="Trò chơi">Trò chơi</a></span></span></td>\r\n<td style="border-bottom: 1px solid #f2f2f2;"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;">: Có sẵn<br /></span></span></td>\r\n</tr>\r\n<tr>\r\n<td style="border-bottom: 1px solid #f2f2f2;" width="140" valign="top"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;"><a href="http://dienthoaididong.com.vn/vn/tudien.php?keyword=Camera&width=450&height=300" title="Camera">Camera</a></span></span></td>\r\n<td style="border-bottom: 1px solid #f2f2f2;"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;">: 3.2 MP, 2048x1536 pixels<br /></span></span></td>\r\n</tr>\r\n<tr>\r\n<td style="border-bottom: 1px solid #f2f2f2;" width="140" valign="top"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;"><a href="http://dienthoaididong.com.vn/vn/tudien.php?keyword=%C4%90%E1%BA%B7c+%C4%91i%E1%BB%83m+kh%C3%A1c&width=450&height=300" title="Đặc điểm khác">Đặc điểm khác</a></span></span></td>\r\n<td style="border-bottom: 1px solid #f2f2f2;"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;">: Java MIDP 2.0<br />: Chế độ cảm biến tự động xoay màn hình, nhận diện chữ viết tay.<br />: Nghe nhạc MP3, AAC++, MIDI, WAV<br />: Nghe đài FM radio với RDS<br />: Xem video MPEG4/3gp<br />: Lịch tổ chức<br />: Xem tài liệu (DOC, XLS, PDF)<br />: Ghi âm giọng nói<br />: Loa ngoài<br />: T9<br /></span></span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign="top" bgcolor="#eeeeee"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;">PIN</span></span></td>\r\n<td bgcolor="#f9f9f9">\r\n<table style="width: 100%;" border="0" cellspacing="0" cellpadding="3">\r\n<tbody>\r\n<tr>\r\n<td style="border-bottom: 1px solid #f2f2f2;" width="140" valign="top"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;"><a href="http://dienthoaididong.com.vn/vn/tudien.php?keyword=Pin&width=450&height=300" title="Pin">Pin</a></span></span></td>\r\n<td style="border-bottom: 1px solid #f2f2f2;"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;">: Lithium ion 900mAh<br /></span></span></td>\r\n</tr>\r\n<tr>\r\n<td style="border-bottom: 1px solid #f2f2f2;" width="140" valign="top"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;"><a href="http://dienthoaididong.com.vn/vn/tudien.php?keyword=Th%E1%BB%9Di+gian+ch%E1%BB%9D&width=450&height=300" title="Thời gian chờ">Thời gian chờ</a></span></span></td>\r\n<td style="border-bottom: 1px solid #f2f2f2;"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;">: Lên đến 350h<br /></span></span></td>\r\n</tr>\r\n<tr>\r\n<td style="border-bottom: 1px solid #f2f2f2;" width="140" valign="top"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;"><a href="http://dienthoaididong.com.vn/vn/tudien.php?keyword=Th%E1%BB%9Di+gian+%C4%91%C3%A0m+tho%E1%BA%A1i&width=450&height=300" title="Thời gian đàm thoại">Thời gian đàm thoại</a></span></span></td>\r\n<td style="border-bottom: 1px solid #f2f2f2;"><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;">: Lên đến 5h</span></span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p><span style="font-size: small;"><span style="font-family: arial,helvetica,sans-serif;"> </span></span></p>', 'Samsung_Star_S52_4eb3541359397.jpg', 'Samsung_Star_S52_4eb3541359f28.jpg', 'Y', '0.0000', 'cân nặng', '0.0000', '0.0000', '0.0000', 'inches', '', 0, 1320364800, '', 'N', 0, NULL, 1320375315, 1320375362, 'Samsung Star S5233S', 0, '', '', 0, 'piece', 0, 'N,N,N,N,N,N,20%,10%,', 'none,0,0,1', '', '0,0'),
(32, 1, 0, 'Sony Ericsson W150i Yendo', '<p>Bảo hành: 12 tháng </p>\r\n<p>Tình trạng: Mới 100% </p>\r\n<p>Khuyến mãi: Dán màn hình </p>\r\n<p>Kho: Còn hàng</p>', '', 'Sony_Ericsson_W1_4eb355e538058.jpg', 'Sony_Ericsson_W1_4eb355e538822.jpg', 'Y', '0.0000', 'cân nặng', '0.0000', '0.0000', '0.0000', 'inches', '', 0, 1320364800, '', 'N', 0, NULL, 1320375781, 1320378063, 'Sony Ericsson W150i Yendo', 0, '', '', 0, 'piece', 0, 'N,N,N,N,N,N,20%,10%,', 'none,0,0,1', '', '0,0'),
(33, 1, 0, 'sony‑ericsson‑gaming', '<p>Bảo hành: 12 tháng </p>\r\n<p>Tình trạng: Mới 100% </p>\r\n<p>Khuyến mãi: Dán màn hình </p>\r\n<p>Kho: Còn hàng</p>', '', 'sony___ericsson__4eb35643b5341.jpg', 'sony___ericsson__4eb35643b5b14.jpg', 'Y', '0.0000', 'cân nặng', '0.0000', '0.0000', '0.0000', 'inches', '', 0, 1320364800, '', 'N', 0, NULL, 1320375875, 1320376826, 'Sony Eericsson Gaming', 0, '', '', 0, 'piece', 0, 'N,N,N,N,N,N,20%,10%,', 'none,0,0,1', '', '0,0'),
(34, 1, 0, 'SonyEricsson Satio(Idou) U1', '<p>Bảo hành: 12 tháng </p>\r\n<p>Tình trạng: Mới 100% </p>\r\n<p>Khuyến mãi: Dán màn hình </p>\r\n<p>Kho: Còn hàng</p>', '', 'SonyEricsson_Sat_4eb356813aa8f.jpg', 'SonyEricsson_Sat_4eb356813b25d.jpg', 'Y', '0.0000', 'cân nặng', '0.0000', '0.0000', '0.0000', 'inches', '', 0, 1320364800, '', 'N', 0, NULL, 1320375937, 1320375937, 'SonyEricsson Satio(Idou) U1', 0, '', '', 0, 'piece', 0, 'N,N,N,N,N,N,20%,10%,', 'none,0,0,1', '', '0,0'),
(35, 1, 0, 'Philips Xenium X503', '<p>Bảo hành: 12 tháng </p>\r\n<p>Tình trạng: Mới 100% </p>\r\n<p>Khuyến mãi: Dán màn hình </p>\r\n<p>Kho: Còn hàng</p>', '', 'Philips_Xenium_X_4eb35abbb5462.jpg', 'Philips_Xenium_X_4eb35abbb5ab5.jpg', 'Y', '0.0000', 'cân nặng', '0.0000', '0.0000', '0.0000', 'inches', '', 0, 1320364800, '', 'N', 0, NULL, 1320377019, 1320377019, 'Philips Xenium X503', 0, '', '', 0, 'piece', 0, 'N,N,N,N,N,N,20%,10%,', 'none,0,0,1', '', '0,0'),
(36, 1, 0, 'Philips X710', '<p>Bảo hành: 12 tháng </p>\r\n<p>Tình trạng: Mới 100% </p>\r\n<p>Khuyến mãi: Dán màn hình </p>\r\n<p>Kho: Còn hàng</p>', '', 'Philips_X710_4eb35c1496db0.jpg', 'Philips_X710_4eb35c149c4ac.jpg', 'Y', '0.0000', 'cân nặng', '0.0000', '0.0000', '0.0000', 'inches', '', 0, 1320364800, '', 'N', 0, NULL, 1320377364, 1320377364, 'Philips X710', 0, '', '', 0, 'piece', 0, 'N,N,N,N,N,N,20%,10%,', 'none,0,0,1', '', '0,0'),
(37, 1, 0, 'Philips Xenium F511', '<p>Bảo hành: 12 tháng </p>\r\n<p>Tình trạng: Mới 100% </p>\r\n<p>Khuyến mãi: Dán màn hình </p>\r\n<p>Kho: Còn hàng</p>', '', 'Philips_Xenium_F_4eb35d98bf5cb.jpg', 'Philips_Xenium_F_4eb35d98bf9b4.jpg', 'Y', '0.0000', 'cân nặng', '0.0000', '0.0000', '0.0000', 'inches', '', 0, 1320364800, '', 'N', 0, NULL, 1320377752, 1320377752, 'Philips Xenium F511', 0, '', '', 0, 'piece', 0, 'N,N,N,N,N,N,20%,10%,', 'none,0,0,1', '', '0,0'),
(38, 1, 0, 'LG KU990', '<p>Bảo hành: 12 tháng </p>\r\n<p>Tình trạng: Mới 100% </p>\r\n<p>Khuyến mãi: Dán màn hình </p>\r\n<p>Kho: Còn hàng</p>', '', 'LG_KU990_4eb3649cc4c3b.jpg', 'LG_KU990_4eb3649cc5273.jpg', 'Y', '0.0000', 'cân nặng', '0.0000', '0.0000', '0.0000', 'inches', '', 0, 1320364800, '', 'N', 0, NULL, 1320379548, 1320379548, 'LG KU990', 0, '', '', 0, 'piece', 0, 'N,N,N,N,N,N,20%,10%,', 'none,0,0,1', '', '0,0'),
(39, 1, 0, 'LG', '<p>Bảo hành: 12 tháng </p>\r\n<p>Tình trạng: Mới 100% </p>\r\n<p>Khuyến mãi: Dán màn hình </p>\r\n<p>Kho: Còn hàng</p>', '', 'LG__4eb364e98df07.jpg', 'LG__4eb364e98e29f.jpg', 'Y', '0.0000', 'cân nặng', '0.0000', '0.0000', '0.0000', 'inches', '', 0, 1320364800, '', 'N', 0, NULL, 1320379625, 1320379625, 'LG', 0, '', '', 0, 'piece', 0, 'N,N,N,N,N,N,20%,10%,', 'none,0,0,1', '', '0,0'),
(40, 1, 0, 'LG1', '<p>Bảo hành: 12 tháng </p>\r\n<p>Tình trạng: Mới 100% </p>\r\n<p>Khuyến mãi: Dán màn hình </p>\r\n<p>Kho: Còn hàng</p>', '', 'LG1_4eb3651bb6699.jpg', 'LG1_4eb3651bb6d64.jpg', 'Y', '0.0000', 'cân nặng', '0.0000', '0.0000', '0.0000', 'inches', '', 0, 1320364800, '', 'N', 0, NULL, 1320379675, 1320379675, 'LG1', 0, '', '', 0, 'piece', 0, 'N,N,N,N,N,N,20%,10%,', 'none,0,0,1', '', '0,0');

-- --------------------------------------------------------

--
-- Table structure for table `webvn_vm_product_attribute`
--

CREATE TABLE IF NOT EXISTS `webvn_vm_product_attribute` (
  `attribute_id` int(11) NOT NULL auto_increment,
  `product_id` int(11) NOT NULL default '0',
  `attribute_name` char(255) NOT NULL default '',
  `attribute_value` char(255) NOT NULL default '',
  PRIMARY KEY  (`attribute_id`),
  KEY `idx_product_attribute_product_id` (`product_id`),
  KEY `idx_product_attribute_name` (`attribute_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Stores attributes + their specific values for Child Products' AUTO_INCREMENT=10 ;

--
-- Dumping data for table `webvn_vm_product_attribute`
--


-- --------------------------------------------------------

--
-- Table structure for table `webvn_vm_product_attribute_sku`
--

CREATE TABLE IF NOT EXISTS `webvn_vm_product_attribute_sku` (
  `product_id` int(11) NOT NULL default '0',
  `attribute_name` char(255) NOT NULL default '',
  `attribute_list` int(11) NOT NULL default '0',
  KEY `idx_product_attribute_sku_product_id` (`product_id`),
  KEY `idx_product_attribute_sku_attribute_name` (`attribute_name`),
  KEY `idx_product_attribute_list` (`attribute_list`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Attributes for a Parent Product used by its Child Products';

--
-- Dumping data for table `webvn_vm_product_attribute_sku`
--


-- --------------------------------------------------------

--
-- Table structure for table `webvn_vm_product_category_xref`
--

CREATE TABLE IF NOT EXISTS `webvn_vm_product_category_xref` (
  `category_id` int(11) NOT NULL default '0',
  `product_id` int(11) NOT NULL default '0',
  `product_list` int(11) default NULL,
  KEY `idx_product_category_xref_category_id` (`category_id`),
  KEY `idx_product_category_xref_product_id` (`product_id`),
  KEY `idx_product_category_xref_product_list` (`product_list`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Maps Products to Categories';

--
-- Dumping data for table `webvn_vm_product_category_xref`
--

INSERT INTO `webvn_vm_product_category_xref` (`category_id`, `product_id`, `product_list`) VALUES
(1, 18, 1),
(1, 17, 1),
(1, 19, 1),
(2, 20, 1),
(2, 21, 1),
(2, 22, 1),
(4, 23, 1),
(4, 24, 1),
(4, 25, 1),
(5, 26, 1),
(5, 27, 1),
(5, 28, 1),
(3, 29, 1),
(3, 30, 1),
(3, 31, 1),
(6, 32, 1),
(6, 33, 1),
(6, 34, 1),
(7, 35, 1),
(7, 36, 1),
(7, 37, 1),
(8, 38, 1),
(8, 39, 1),
(8, 40, 1),
(1, 21, 1),
(1, 20, 1),
(1, 22, 1);

-- --------------------------------------------------------

--
-- Table structure for table `webvn_vm_product_discount`
--

CREATE TABLE IF NOT EXISTS `webvn_vm_product_discount` (
  `discount_id` int(11) NOT NULL auto_increment,
  `amount` decimal(12,2) NOT NULL default '0.00',
  `is_percent` tinyint(1) NOT NULL default '0',
  `start_date` int(11) NOT NULL default '0',
  `end_date` int(11) NOT NULL default '0',
  PRIMARY KEY  (`discount_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Discounts that can be assigned to products' AUTO_INCREMENT=3 ;

--
-- Dumping data for table `webvn_vm_product_discount`
--

INSERT INTO `webvn_vm_product_discount` (`discount_id`, `amount`, `is_percent`, `start_date`, `end_date`) VALUES
(1, '20.00', 1, 1097704800, 1194390000),
(2, '2.00', 0, 1098655200, 0);

-- --------------------------------------------------------

--
-- Table structure for table `webvn_vm_product_download`
--

CREATE TABLE IF NOT EXISTS `webvn_vm_product_download` (
  `product_id` int(11) NOT NULL default '0',
  `user_id` int(11) NOT NULL default '0',
  `order_id` int(11) NOT NULL default '0',
  `end_date` int(11) NOT NULL default '0',
  `download_max` int(11) NOT NULL default '0',
  `download_id` varchar(32) NOT NULL default '',
  `file_name` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`download_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Active downloads for selling downloadable goods';

--
-- Dumping data for table `webvn_vm_product_download`
--


-- --------------------------------------------------------

--
-- Table structure for table `webvn_vm_product_files`
--

CREATE TABLE IF NOT EXISTS `webvn_vm_product_files` (
  `file_id` int(19) NOT NULL auto_increment,
  `file_product_id` int(11) NOT NULL default '0',
  `file_name` varchar(128) NOT NULL default '',
  `file_title` varchar(128) NOT NULL default '',
  `file_description` mediumtext NOT NULL,
  `file_extension` varchar(128) NOT NULL default '',
  `file_mimetype` varchar(64) NOT NULL default '',
  `file_url` varchar(254) NOT NULL default '',
  `file_published` tinyint(1) NOT NULL default '0',
  `file_is_image` tinyint(1) NOT NULL default '0',
  `file_image_height` int(11) NOT NULL default '0',
  `file_image_width` int(11) NOT NULL default '0',
  `file_image_thumb_height` int(11) NOT NULL default '50',
  `file_image_thumb_width` int(11) NOT NULL default '0',
  PRIMARY KEY  (`file_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Additional Images and Files which are assigned to products' AUTO_INCREMENT=6 ;

--
-- Dumping data for table `webvn_vm_product_files`
--

INSERT INTO `webvn_vm_product_files` (`file_id`, `file_product_id`, `file_name`, `file_title`, `file_description`, `file_extension`, `file_mimetype`, `file_url`, `file_published`, `file_is_image`, `file_image_height`, `file_image_width`, `file_image_thumb_height`, `file_image_thumb_width`) VALUES
(1, 17, '/components/com_virtuemart/shop_image/product/05.jpg', 'Iphone 4 32GB (Quốc Tế) - Mới 100%', '', 'jpg', 'image/jpeg', 'http://localhost/Demo/2012/Dienthoai52/components/com_virtuemart/shop_image/product/05.jpg', 1, 1, 403, 500, 72, 90),
(2, 17, '/components/com_virtuemart/shop_image/product/01.jpg', 'Iphone 4 32GB (Quốc Tế) - Mới 100%', '', 'jpg', 'image/jpeg', 'http://localhost/Demo/2012/Dienthoai52/components/com_virtuemart/shop_image/product/01.jpg', 1, 1, 338, 480, 63, 90),
(3, 17, '/components/com_virtuemart/shop_image/product/02.jpg', 'Iphone 4 32GB (Quốc Tế) - Mới 100%', '', 'jpg', 'image/jpeg', 'http://localhost/Demo/2012/Dienthoai52/components/com_virtuemart/shop_image/product/02.jpg', 1, 1, 341, 480, 63, 90),
(4, 17, '/components/com_virtuemart/shop_image/product/03.jpg', 'Iphone 4 32GB (Quốc Tế) - Mới 100%', '', 'jpg', 'image/jpeg', 'http://localhost/Demo/2012/Dienthoai52/components/com_virtuemart/shop_image/product/03.jpg', 1, 1, 302, 480, 56, 90),
(5, 17, '/components/com_virtuemart/shop_image/product/04.jpg', 'Iphone 4 32GB (Quốc Tế) - Mới 100%', '', 'jpg', 'image/jpeg', 'http://localhost/Demo/2012/Dienthoai52/components/com_virtuemart/shop_image/product/04.jpg', 1, 1, 335, 480, 62, 90);

-- --------------------------------------------------------

--
-- Table structure for table `webvn_vm_product_mf_xref`
--

CREATE TABLE IF NOT EXISTS `webvn_vm_product_mf_xref` (
  `product_id` int(11) default NULL,
  `manufacturer_id` int(11) default NULL,
  KEY `idx_product_mf_xref_product_id` (`product_id`),
  KEY `idx_product_mf_xref_manufacturer_id` (`manufacturer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Maps a product to a manufacturer';

--
-- Dumping data for table `webvn_vm_product_mf_xref`
--

INSERT INTO `webvn_vm_product_mf_xref` (`product_id`, `manufacturer_id`) VALUES
(18, 1),
(17, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1);

-- --------------------------------------------------------

--
-- Table structure for table `webvn_vm_product_price`
--

CREATE TABLE IF NOT EXISTS `webvn_vm_product_price` (
  `product_price_id` int(11) NOT NULL auto_increment,
  `product_id` int(11) NOT NULL default '0',
  `product_price` decimal(20,5) default NULL,
  `product_currency` char(16) default NULL,
  `product_price_vdate` int(11) default NULL,
  `product_price_edate` int(11) default NULL,
  `cdate` int(11) default NULL,
  `mdate` int(11) default NULL,
  `shopper_group_id` int(11) default NULL,
  `price_quantity_start` int(11) unsigned NOT NULL default '0',
  `price_quantity_end` int(11) unsigned NOT NULL default '0',
  PRIMARY KEY  (`product_price_id`),
  KEY `idx_product_price_product_id` (`product_id`),
  KEY `idx_product_price_shopper_group_id` (`shopper_group_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Holds price records for a product' AUTO_INCREMENT=37 ;

--
-- Dumping data for table `webvn_vm_product_price`
--

INSERT INTO `webvn_vm_product_price` (`product_price_id`, `product_id`, `product_price`, `product_currency`, `product_price_vdate`, `product_price_edate`, `cdate`, `mdate`, `shopper_group_id`, `price_quantity_start`, `price_quantity_end`) VALUES
(17, 17, '16500000.00000', 'VND', 0, 0, 1320291739, 1347352670, 5, 0, 0),
(18, 18, '14200000.00000', 'VND', 0, 0, 1320292587, 1320295579, 5, 0, 0),
(19, 19, '14700000.00000', 'VND', 0, 0, 1320292849, 1320295599, 5, 0, 0),
(20, 20, '9850000.00000', 'VND', 0, 0, 1320372359, 1340164026, 5, 0, 0),
(21, 21, '9450000.00000', 'VND', 0, 0, 1320372477, 1340164016, 5, 0, 0),
(22, 22, '8750000.00000', 'VND', 0, 0, 1320372563, 1340164034, 5, 0, 0),
(23, 23, '10000000.00000', 'VND', 0, 0, 1320373368, 1320376772, 5, 0, 0),
(24, 24, '8000000.00000', 'VND', 0, 0, 1320373525, 1320376756, 5, 0, 0),
(25, 26, '11399000.00000', 'VND', 0, 0, 1320374564, 1320374564, 5, 0, 0),
(26, 27, '27000000.00000', 'VND', 0, 0, 1320374660, 1320374660, 5, 0, 0),
(27, 28, '24000000.00000', 'VND', 0, 0, 1320374731, 1320374731, 5, 0, 0),
(28, 29, '11200000.00000', 'VND', 0, 0, 1320375150, 1320375150, 5, 0, 0),
(29, 30, '4260000.00000', 'VND', 0, 0, 1320375256, 1320375256, 5, 0, 0),
(30, 31, '2890000.00000', 'VND', 0, 0, 1320375315, 1320375362, 5, 0, 0),
(31, 32, '2090000.00000', 'VND', 0, 0, 1320375781, 1320378063, 5, 0, 0),
(32, 34, '9900000.00000', 'VND', 0, 0, 1320375937, 1320375937, 5, 0, 0),
(33, 35, '3420000.00000', 'VND', 0, 0, 1320377019, 1320377019, 5, 0, 0),
(34, 36, '3940000.00000', 'VND', 0, 0, 1320377364, 1320377364, 5, 0, 0),
(35, 37, '3700000.00000', 'VND', 0, 0, 1320377752, 1320377752, 5, 0, 0),
(36, 38, '1990000.00000', 'VND', 0, 0, 1320379548, 1320379548, 5, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `webvn_vm_product_product_type_xref`
--

CREATE TABLE IF NOT EXISTS `webvn_vm_product_product_type_xref` (
  `product_id` int(11) NOT NULL default '0',
  `product_type_id` int(11) NOT NULL default '0',
  KEY `idx_product_product_type_xref_product_id` (`product_id`),
  KEY `idx_product_product_type_xref_product_type_id` (`product_type_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Maps products to a product type';

--
-- Dumping data for table `webvn_vm_product_product_type_xref`
--


-- --------------------------------------------------------

--
-- Table structure for table `webvn_vm_product_relations`
--

CREATE TABLE IF NOT EXISTS `webvn_vm_product_relations` (
  `product_id` int(11) NOT NULL default '0',
  `related_products` text,
  PRIMARY KEY  (`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `webvn_vm_product_relations`
--


-- --------------------------------------------------------

--
-- Table structure for table `webvn_vm_product_reviews`
--

CREATE TABLE IF NOT EXISTS `webvn_vm_product_reviews` (
  `review_id` int(11) NOT NULL auto_increment,
  `product_id` int(11) NOT NULL default '0',
  `comment` text NOT NULL,
  `userid` int(11) NOT NULL default '0',
  `time` int(11) NOT NULL default '0',
  `user_rating` tinyint(1) NOT NULL default '0',
  `review_ok` int(11) NOT NULL default '0',
  `review_votes` int(11) NOT NULL default '0',
  `published` char(1) NOT NULL default 'Y',
  PRIMARY KEY  (`review_id`),
  UNIQUE KEY `product_id` (`product_id`,`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `webvn_vm_product_reviews`
--


-- --------------------------------------------------------

--
-- Table structure for table `webvn_vm_product_type`
--

CREATE TABLE IF NOT EXISTS `webvn_vm_product_type` (
  `product_type_id` int(11) NOT NULL auto_increment,
  `product_type_name` varchar(255) NOT NULL default '',
  `product_type_description` text,
  `product_type_publish` char(1) default NULL,
  `product_type_browsepage` varchar(255) default NULL,
  `product_type_flypage` varchar(255) default NULL,
  `product_type_list_order` int(11) default NULL,
  PRIMARY KEY  (`product_type_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `webvn_vm_product_type`
--


-- --------------------------------------------------------

--
-- Table structure for table `webvn_vm_product_type_parameter`
--

CREATE TABLE IF NOT EXISTS `webvn_vm_product_type_parameter` (
  `product_type_id` int(11) NOT NULL default '0',
  `parameter_name` varchar(255) NOT NULL default '',
  `parameter_label` varchar(255) NOT NULL default '',
  `parameter_description` text,
  `parameter_list_order` int(11) NOT NULL default '0',
  `parameter_type` char(1) NOT NULL default 'T',
  `parameter_values` varchar(255) default NULL,
  `parameter_multiselect` char(1) default NULL,
  `parameter_default` varchar(255) default NULL,
  `parameter_unit` varchar(32) default NULL,
  PRIMARY KEY  (`product_type_id`,`parameter_name`),
  KEY `idx_product_type_parameter_product_type_id` (`product_type_id`),
  KEY `idx_product_type_parameter_parameter_order` (`parameter_list_order`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Parameters which are part of a product type';

--
-- Dumping data for table `webvn_vm_product_type_parameter`
--


-- --------------------------------------------------------

--
-- Table structure for table `webvn_vm_product_votes`
--

CREATE TABLE IF NOT EXISTS `webvn_vm_product_votes` (
  `product_id` int(255) NOT NULL default '0',
  `votes` text NOT NULL,
  `allvotes` int(11) NOT NULL default '0',
  `rating` tinyint(1) NOT NULL default '0',
  `lastip` varchar(50) NOT NULL default '0',
  PRIMARY KEY  (`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Stores all votes for a product';

--
-- Dumping data for table `webvn_vm_product_votes`
--


-- --------------------------------------------------------

--
-- Table structure for table `webvn_vm_shipping_carrier`
--

CREATE TABLE IF NOT EXISTS `webvn_vm_shipping_carrier` (
  `shipping_carrier_id` int(11) NOT NULL auto_increment,
  `shipping_carrier_name` char(80) NOT NULL default '',
  `shipping_carrier_list_order` int(11) NOT NULL default '0',
  PRIMARY KEY  (`shipping_carrier_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Shipping Carriers as used by the Standard Shipping Module' AUTO_INCREMENT=3 ;

--
-- Dumping data for table `webvn_vm_shipping_carrier`
--

INSERT INTO `webvn_vm_shipping_carrier` (`shipping_carrier_id`, `shipping_carrier_name`, `shipping_carrier_list_order`) VALUES
(1, 'DHL', 0),
(2, 'UPS', 1);

-- --------------------------------------------------------

--
-- Table structure for table `webvn_vm_shipping_label`
--

CREATE TABLE IF NOT EXISTS `webvn_vm_shipping_label` (
  `order_id` int(11) NOT NULL default '0',
  `shipper_class` varchar(32) default NULL,
  `ship_date` varchar(32) default NULL,
  `service_code` varchar(32) default NULL,
  `special_service` varchar(32) default NULL,
  `package_type` varchar(16) default NULL,
  `order_weight` decimal(10,2) default NULL,
  `is_international` tinyint(1) default NULL,
  `additional_protection_type` varchar(16) default NULL,
  `additional_protection_value` decimal(10,2) default NULL,
  `duty_value` decimal(10,2) default NULL,
  `content_desc` varchar(255) default NULL,
  `label_is_generated` tinyint(1) NOT NULL default '0',
  `tracking_number` varchar(32) default NULL,
  `label_image` blob,
  `have_signature` tinyint(1) NOT NULL default '0',
  `signature_image` blob,
  PRIMARY KEY  (`order_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Stores information used in generating shipping labels';

--
-- Dumping data for table `webvn_vm_shipping_label`
--


-- --------------------------------------------------------

--
-- Table structure for table `webvn_vm_shipping_rate`
--

CREATE TABLE IF NOT EXISTS `webvn_vm_shipping_rate` (
  `shipping_rate_id` int(11) NOT NULL auto_increment,
  `shipping_rate_name` varchar(255) NOT NULL default '',
  `shipping_rate_carrier_id` int(11) NOT NULL default '0',
  `shipping_rate_country` text NOT NULL,
  `shipping_rate_zip_start` varchar(32) NOT NULL default '',
  `shipping_rate_zip_end` varchar(32) NOT NULL default '',
  `shipping_rate_weight_start` decimal(10,3) NOT NULL default '0.000',
  `shipping_rate_weight_end` decimal(10,3) NOT NULL default '0.000',
  `shipping_rate_value` decimal(10,2) NOT NULL default '0.00',
  `shipping_rate_package_fee` decimal(10,2) NOT NULL default '0.00',
  `shipping_rate_currency_id` int(11) NOT NULL default '0',
  `shipping_rate_vat_id` int(11) NOT NULL default '0',
  `shipping_rate_list_order` int(11) NOT NULL default '0',
  PRIMARY KEY  (`shipping_rate_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Shipping Rates, used by the Standard Shipping Module' AUTO_INCREMENT=22 ;

--
-- Dumping data for table `webvn_vm_shipping_rate`
--

INSERT INTO `webvn_vm_shipping_rate` (`shipping_rate_id`, `shipping_rate_name`, `shipping_rate_carrier_id`, `shipping_rate_country`, `shipping_rate_zip_start`, `shipping_rate_zip_end`, `shipping_rate_weight_start`, `shipping_rate_weight_end`, `shipping_rate_value`, `shipping_rate_package_fee`, `shipping_rate_currency_id`, `shipping_rate_vat_id`, `shipping_rate_list_order`) VALUES
(1, 'Inland > 4kg', 1, 'DEU', '00000', '99999', '0.000', '4.000', '5.62', '2.00', 47, 0, 1),
(2, 'Inland > 8kg', 1, 'DEU', '00000', '99999', '4.000', '8.000', '6.39', '2.00', 47, 0, 2),
(3, 'Inland > 12kg', 1, 'DEU', '00000', '99999', '8.000', '12.000', '7.16', '2.00', 47, 0, 3),
(4, 'Inland > 20kg', 1, 'DEU', '00000', '99999', '12.000', '20.000', '8.69', '2.00', 47, 0, 4),
(5, 'EU+ >  4kg', 1, 'AND;BEL;DNK;FRO;FIN;FRA;GRC;GRL;GBR;IRL;ITA;LIE;LUX;MCO;NLD;AUT;POL;PRT;SMR;SWE;CHE;SVK;ESP;CZE', '00000', '99999', '0.000', '4.000', '14.57', '2.00', 47, 0, 5),
(6, 'EU+ >  8kg', 1, 'AND;BEL;DNK;FRO;FIN;FRA;GRC;GRL;GBR;IRL;ITA;LIE;LUX;MCO;NLD;AUT;POL;PRT;SMR;SWE;CHE;SVK;ESP;CZE', '00000', '99999', '4.000', '8.000', '18.66', '2.00', 47, 0, 6),
(7, 'EU+ > 12kg', 1, 'AND;BEL;DNK;FRO;FIN;FRA;GRC;GRL;GBR;IRL;ITA;LIE;LUX;MCO;NLD;AUT;POL;PRT;SMR;SWE;CHE;SVK;ESP;CZE', '00000', '99999', '8.000', '12.000', '22.57', '2.00', 47, 0, 7),
(8, 'EU+ > 20kg', 1, 'AND;BEL;DNK;FRO;FIN;FRA;GRC;GRL;GBR;IRL;ITA;LIE;LUX;MCO;NLD;AUT;POL;PRT;SMR;SWE;CHE;SVK;ESP;CZE', '00000', '99999', '12.000', '20.000', '30.93', '2.00', 47, 0, 8),
(9, 'Europe > 4kg', 1, 'ALB;ARM;AZE;BLR;BIH;BGR;EST;GEO;GIB;ISL;YUG;KAZ;HRV;LVA;LTU;MLT;MKD;MDA;NOR;ROM;RUS;SVN;TUR;UKR;HUN;BLR;CYP', '00000', '99999', '0.000', '4.000', '23.78', '2.00', 47, 0, 9),
(10, 'Europe >  8kg', 1, 'ALB;ARM;AZE;BLR;BIH;BGR;EST;GEO;GIB;ISL;YUG;KAZ;HRV;LVA;LTU;MLT;MKD;MDA;NOR;ROM;RUS;SVN;TUR;UKR;HUN;BLR;CYP', '00000', '99999', '4.000', '8.000', '29.91', '2.00', 47, 0, 10),
(11, 'Europe > 12kg', 1, 'ALB;ARM;AZE;BLR;BIH;BGR;EST;GEO;GIB;ISL;YUG;KAZ;HRV;LVA;LTU;MLT;MKD;MDA;NOR;ROM;RUS;SVN;TUR;UKR;HUN;BLR;CYP', '00000', '99999', '8.000', '12.000', '36.05', '2.00', 47, 0, 11),
(12, 'Europe > 20kg', 1, 'ALB;ARM;AZE;BLR;BIH;BGR;EST;GEO;GIB;ISL;YUG;KAZ;HRV;LVA;LTU;MLT;MKD;MDA;NOR;ROM;RUS;SVN;TUR;UKR;HUN;BLR;CYP', '00000', '99999', '12.000', '20.000', '48.32', '2.00', 47, 0, 12),
(13, 'World_1 >  4kg', 1, 'EGY;DZA;BHR;IRQ;IRN;ISR;YEM;JOR;CAN;QAT;KWT;LBN;LBY;MAR;OMN;SAU;SYR;TUN;ARE;USA', '00000', '99999', '0.000', '4.000', '26.84', '2.00', 47, 0, 13),
(14, 'World_1 > 8kg', 1, 'EGY;DZA;BHR;IRQ;IRN;ISR;YEM;JOR;CAN;QAT;KWT;LBN;LBY;MAR;OMN;SAU;SYR;TUN;ARE;USA', '00000', '99999', '4.000', '8.000', '35.02', '2.00', 47, 0, 14),
(15, 'World_1 > 12kg', 1, 'EGY;DZA;BHR;IRQ;IRN;ISR;YEM;JOR;CAN;QAT;KWT;LBN;LBY;MAR;OMN;SAU;SYR;TUN;ARE;USA', '00000', '99999', '8.000', '12.000', '43.20', '2.00', 47, 0, 15),
(16, 'World_1 > 20kg', 1, 'EGY;DZA;BHR;IRQ;IRN;ISR;YEM;JOR;CAN;QAT;KWT;LBN;LBY;MAR;OMN;SAU;SYR;TUN;ARE;USA', '00000', '99999', '12.000', '20.000', '59.57', '2.00', 47, 0, 16),
(17, 'World_2 > 4kg', 1, '', '00000', '99999', '0.000', '4.000', '32.98', '2.00', 47, 0, 17),
(18, 'World_2 > 8kg', 1, '', '00000', '99999', '4.000', '8.000', '47.29', '2.00', 47, 0, 18),
(19, 'World_2 > 12kg', 1, '', '00000', '99999', '8.000', '12.000', '61.61', '2.00', 47, 0, 19),
(20, 'World_2 > 20kg', 1, '', '00000', '99999', '12.000', '20.000', '90.24', '2.00', 47, 0, 20),
(21, 'UPS Express', 2, 'AND;BEL;DNK;FRO;FIN;FRA;GRC;GRL;GBR;IRL;ITA;LIE;LUX;MCO;NLD;AUT;POL;PRT;SMR;SWE;CHE;SVK;ESP;CZE', '00000', '99999', '0.000', '20.000', '5.24', '2.00', 47, 0, 21);

-- --------------------------------------------------------

--
-- Table structure for table `webvn_vm_shopper_group`
--

CREATE TABLE IF NOT EXISTS `webvn_vm_shopper_group` (
  `shopper_group_id` int(11) NOT NULL auto_increment,
  `vendor_id` int(11) default NULL,
  `shopper_group_name` varchar(32) default NULL,
  `shopper_group_desc` text,
  `shopper_group_discount` decimal(5,2) NOT NULL default '0.00',
  `show_price_including_tax` tinyint(1) NOT NULL default '1',
  `default` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`shopper_group_id`),
  KEY `idx_shopper_group_vendor_id` (`vendor_id`),
  KEY `idx_shopper_group_name` (`shopper_group_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Shopper Groups that users can be assigned to' AUTO_INCREMENT=8 ;

--
-- Dumping data for table `webvn_vm_shopper_group`
--

INSERT INTO `webvn_vm_shopper_group` (`shopper_group_id`, `vendor_id`, `shopper_group_name`, `shopper_group_desc`, `shopper_group_discount`, `show_price_including_tax`, `default`) VALUES
(5, 1, '-default-', 'This is the default shopper group.', '0.00', 1, 1),
(6, 1, 'Gold Level', 'Gold Level Shoppers.', '0.00', 1, 0),
(7, 1, 'Wholesale', 'Shoppers that can buy at wholesale.', '0.00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `webvn_vm_shopper_vendor_xref`
--

CREATE TABLE IF NOT EXISTS `webvn_vm_shopper_vendor_xref` (
  `user_id` int(11) default NULL,
  `vendor_id` int(11) default NULL,
  `shopper_group_id` int(11) default NULL,
  `customer_number` varchar(32) default NULL,
  KEY `idx_shopper_vendor_xref_user_id` (`user_id`),
  KEY `idx_shopper_vendor_xref_vendor_id` (`vendor_id`),
  KEY `idx_shopper_vendor_xref_shopper_group_id` (`shopper_group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Maps a user to a Shopper Group of a Vendor';

--
-- Dumping data for table `webvn_vm_shopper_vendor_xref`
--

INSERT INTO `webvn_vm_shopper_vendor_xref` (`user_id`, `vendor_id`, `shopper_group_id`, `customer_number`) VALUES
(62, 1, 5, '');

-- --------------------------------------------------------

--
-- Table structure for table `webvn_vm_state`
--

CREATE TABLE IF NOT EXISTS `webvn_vm_state` (
  `state_id` int(11) NOT NULL auto_increment,
  `country_id` int(11) NOT NULL default '1',
  `state_name` varchar(64) default NULL,
  `state_3_code` char(3) default NULL,
  `state_2_code` char(2) default NULL,
  PRIMARY KEY  (`state_id`),
  UNIQUE KEY `state_3_code` (`country_id`,`state_3_code`),
  UNIQUE KEY `state_2_code` (`country_id`,`state_2_code`),
  KEY `idx_country_id` (`country_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='States that are assigned to a country' AUTO_INCREMENT=452 ;

--
-- Dumping data for table `webvn_vm_state`
--

INSERT INTO `webvn_vm_state` (`state_id`, `country_id`, `state_name`, `state_3_code`, `state_2_code`) VALUES
(1, 223, 'Alabama', 'ALA', 'AL'),
(2, 223, 'Alaska', 'ALK', 'AK'),
(3, 223, 'Arizona', 'ARZ', 'AZ'),
(4, 223, 'Arkansas', 'ARK', 'AR'),
(5, 223, 'California', 'CAL', 'CA'),
(6, 223, 'Colorado', 'COL', 'CO'),
(7, 223, 'Connecticut', 'CCT', 'CT'),
(8, 223, 'Delaware', 'DEL', 'DE'),
(9, 223, 'District Of Columbia', 'DOC', 'DC'),
(10, 223, 'Florida', 'FLO', 'FL'),
(11, 223, 'Georgia', 'GEA', 'GA'),
(12, 223, 'Hawaii', 'HWI', 'HI'),
(13, 223, 'Idaho', 'IDA', 'ID'),
(14, 223, 'Illinois', 'ILL', 'IL'),
(15, 223, 'Indiana', 'IND', 'IN'),
(16, 223, 'Iowa', 'IOA', 'IA'),
(17, 223, 'Kansas', 'KAS', 'KS'),
(18, 223, 'Kentucky', 'KTY', 'KY'),
(19, 223, 'Louisiana', 'LOA', 'LA'),
(20, 223, 'Maine', 'MAI', 'ME'),
(21, 223, 'Maryland', 'MLD', 'MD'),
(22, 223, 'Massachusetts', 'MSA', 'MA'),
(23, 223, 'Michigan', 'MIC', 'MI'),
(24, 223, 'Minnesota', 'MIN', 'MN'),
(25, 223, 'Mississippi', 'MIS', 'MS'),
(26, 223, 'Missouri', 'MIO', 'MO'),
(27, 223, 'Montana', 'MOT', 'MT'),
(28, 223, 'Nebraska', 'NEB', 'NE'),
(29, 223, 'Nevada', 'NEV', 'NV'),
(30, 223, 'New Hampshire', 'NEH', 'NH'),
(31, 223, 'New Jersey', 'NEJ', 'NJ'),
(32, 223, 'New Mexico', 'NEM', 'NM'),
(33, 223, 'New York', 'NEY', 'NY'),
(34, 223, 'North Carolina', 'NOC', 'NC'),
(35, 223, 'North Dakota', 'NOD', 'ND'),
(36, 223, 'Ohio', 'OHI', 'OH'),
(37, 223, 'Oklahoma', 'OKL', 'OK'),
(38, 223, 'Oregon', 'ORN', 'OR'),
(39, 223, 'Pennsylvania', 'PEA', 'PA'),
(40, 223, 'Rhode Island', 'RHI', 'RI'),
(41, 223, 'South Carolina', 'SOC', 'SC'),
(42, 223, 'South Dakota', 'SOD', 'SD'),
(43, 223, 'Tennessee', 'TEN', 'TN'),
(44, 223, 'Texas', 'TXS', 'TX'),
(45, 223, 'Utah', 'UTA', 'UT'),
(46, 223, 'Vermont', 'VMT', 'VT'),
(47, 223, 'Virginia', 'VIA', 'VA'),
(48, 223, 'Washington', 'WAS', 'WA'),
(49, 223, 'West Virginia', 'WEV', 'WV'),
(50, 223, 'Wisconsin', 'WIS', 'WI'),
(51, 223, 'Wyoming', 'WYO', 'WY'),
(52, 38, 'Alberta', 'ALB', 'AB'),
(53, 38, 'British Columbia', 'BRC', 'BC'),
(54, 38, 'Manitoba', 'MAB', 'MB'),
(55, 38, 'New Brunswick', 'NEB', 'NB'),
(56, 38, 'Newfoundland and Labrador', 'NFL', 'NL'),
(57, 38, 'Northwest Territories', 'NWT', 'NT'),
(58, 38, 'Nova Scotia', 'NOS', 'NS'),
(59, 38, 'Nunavut', 'NUT', 'NU'),
(60, 38, 'Ontario', 'ONT', 'ON'),
(61, 38, 'Prince Edward Island', 'PEI', 'PE'),
(62, 38, 'Quebec', 'QEC', 'QC'),
(63, 38, 'Saskatchewan', 'SAK', 'SK'),
(64, 38, 'Yukon', 'YUT', 'YT'),
(65, 222, 'England', 'ENG', 'EN'),
(66, 222, 'Northern Ireland', 'NOI', 'NI'),
(67, 222, 'Scotland', 'SCO', 'SD'),
(68, 222, 'Wales', 'WLS', 'WS'),
(69, 13, 'Australian Capital Territory', 'ACT', 'AC'),
(70, 13, 'New South Wales', 'NSW', 'NS'),
(71, 13, 'Northern Territory', 'NOT', 'NT'),
(72, 13, 'Queensland', 'QLD', 'QL'),
(73, 13, 'South Australia', 'SOA', 'SA'),
(74, 13, 'Tasmania', 'TAS', 'TS'),
(75, 13, 'Victoria', 'VIC', 'VI'),
(76, 13, 'Western Australia', 'WEA', 'WA'),
(77, 138, 'Aguascalientes', 'AGS', 'AG'),
(78, 138, 'Baja California Norte', 'BCN', 'BN'),
(79, 138, 'Baja California Sur', 'BCS', 'BS'),
(80, 138, 'Campeche', 'CAM', 'CA'),
(81, 138, 'Chiapas', 'CHI', 'CS'),
(82, 138, 'Chihuahua', 'CHA', 'CH'),
(83, 138, 'Coahuila', 'COA', 'CO'),
(84, 138, 'Colima', 'COL', 'CM'),
(85, 138, 'Distrito Federal', 'DFM', 'DF'),
(86, 138, 'Durango', 'DGO', 'DO'),
(87, 138, 'Guanajuato', 'GTO', 'GO'),
(88, 138, 'Guerrero', 'GRO', 'GU'),
(89, 138, 'Hidalgo', 'HGO', 'HI'),
(90, 138, 'Jalisco', 'JAL', 'JA'),
(91, 138, 'México (Estado de)', 'EDM', 'EM'),
(92, 138, 'Michoacán', 'MCN', 'MI'),
(93, 138, 'Morelos', 'MOR', 'MO'),
(94, 138, 'Nayarit', 'NAY', 'NY'),
(95, 138, 'Nuevo León', 'NUL', 'NL'),
(96, 138, 'Oaxaca', 'OAX', 'OA'),
(97, 138, 'Puebla', 'PUE', 'PU'),
(98, 138, 'Querétaro', 'QRO', 'QU'),
(99, 138, 'Quintana Roo', 'QUR', 'QR'),
(100, 138, 'San Luis Potosí', 'SLP', 'SP'),
(101, 138, 'Sinaloa', 'SIN', 'SI'),
(102, 138, 'Sonora', 'SON', 'SO'),
(103, 138, 'Tabasco', 'TAB', 'TA'),
(104, 138, 'Tamaulipas', 'TAM', 'TM'),
(105, 138, 'Tlaxcala', 'TLX', 'TX'),
(106, 138, 'Veracruz', 'VER', 'VZ'),
(107, 138, 'Yucatán', 'YUC', 'YU'),
(108, 138, 'Zacatecas', 'ZAC', 'ZA'),
(109, 30, 'Acre', 'ACR', 'AC'),
(110, 30, 'Alagoas', 'ALG', 'AL'),
(111, 30, 'Amapá', 'AMP', 'AP'),
(112, 30, 'Amazonas', 'AMZ', 'AM'),
(113, 30, 'Bahía', 'BAH', 'BA'),
(114, 30, 'Ceará', 'CEA', 'CE'),
(115, 30, 'Distrito Federal', 'DFB', 'DF'),
(116, 30, 'Espirito Santo', 'ESS', 'ES'),
(117, 30, 'Goiás', 'GOI', 'GO'),
(118, 30, 'Maranhão', 'MAR', 'MA'),
(119, 30, 'Mato Grosso', 'MAT', 'MT'),
(120, 30, 'Mato Grosso do Sul', 'MGS', 'MS'),
(121, 30, 'Minas Geraís', 'MIG', 'MG'),
(122, 30, 'Paraná', 'PAR', 'PR'),
(123, 30, 'Paraíba', 'PRB', 'PB'),
(124, 30, 'Pará', 'PAB', 'PA'),
(125, 30, 'Pernambuco', 'PER', 'PE'),
(126, 30, 'Piauí', 'PIA', 'PI'),
(127, 30, 'Rio Grande do Norte', 'RGN', 'RN'),
(128, 30, 'Rio Grande do Sul', 'RGS', 'RS'),
(129, 30, 'Rio de Janeiro', 'RDJ', 'RJ'),
(130, 30, 'Rondônia', 'RON', 'RO'),
(131, 30, 'Roraima', 'ROR', 'RR'),
(132, 30, 'Santa Catarina', 'SAC', 'SC'),
(133, 30, 'Sergipe', 'SER', 'SE'),
(134, 30, 'São Paulo', 'SAP', 'SP'),
(135, 30, 'Tocantins', 'TOC', 'TO'),
(136, 44, 'Anhui', 'ANH', '34'),
(137, 44, 'Beijing', 'BEI', '11'),
(138, 44, 'Chongqing', 'CHO', '50'),
(139, 44, 'Fujian', 'FUJ', '35'),
(140, 44, 'Gansu', 'GAN', '62'),
(141, 44, 'Guangdong', 'GUA', '44'),
(142, 44, 'Guangxi Zhuang', 'GUZ', '45'),
(143, 44, 'Guizhou', 'GUI', '52'),
(144, 44, 'Hainan', 'HAI', '46'),
(145, 44, 'Hebei', 'HEB', '13'),
(146, 44, 'Heilongjiang', 'HEI', '23'),
(147, 44, 'Henan', 'HEN', '41'),
(148, 44, 'Hubei', 'HUB', '42'),
(149, 44, 'Hunan', 'HUN', '43'),
(150, 44, 'Jiangsu', 'JIA', '32'),
(151, 44, 'Jiangxi', 'JIX', '36'),
(152, 44, 'Jilin', 'JIL', '22'),
(153, 44, 'Liaoning', 'LIA', '21'),
(154, 44, 'Nei Mongol', 'NML', '15'),
(155, 44, 'Ningxia Hui', 'NIH', '64'),
(156, 44, 'Qinghai', 'QIN', '63'),
(157, 44, 'Shandong', 'SNG', '37'),
(158, 44, 'Shanghai', 'SHH', '31'),
(159, 44, 'Shaanxi', 'SHX', '61'),
(160, 44, 'Sichuan', 'SIC', '51'),
(161, 44, 'Tianjin', 'TIA', '12'),
(162, 44, 'Xinjiang Uygur', 'XIU', '65'),
(163, 44, 'Xizang', 'XIZ', '54'),
(164, 44, 'Yunnan', 'YUN', '53'),
(165, 44, 'Zhejiang', 'ZHE', '33'),
(166, 104, 'Israel', 'ISL', 'IL'),
(167, 104, 'Gaza Strip', 'GZS', 'GZ'),
(168, 104, 'West Bank', 'WBK', 'WB'),
(169, 151, 'St. Maarten', 'STM', 'SM'),
(170, 151, 'Bonaire', 'BNR', 'BN'),
(171, 151, 'Curacao', 'CUR', 'CR'),
(172, 175, 'Alba', 'ABA', 'AB'),
(173, 175, 'Arad', 'ARD', 'AR'),
(174, 175, 'Arges', 'ARG', 'AG'),
(175, 175, 'Bacau', 'BAC', 'BC'),
(176, 175, 'Bihor', 'BIH', 'BH'),
(177, 175, 'Bistrita-Nasaud', 'BIS', 'BN'),
(178, 175, 'Botosani', 'BOT', 'BT'),
(179, 175, 'Braila', 'BRL', 'BR'),
(180, 175, 'Brasov', 'BRA', 'BV'),
(181, 175, 'Bucuresti', 'BUC', 'B'),
(182, 175, 'Buzau', 'BUZ', 'BZ'),
(183, 175, 'Calarasi', 'CAL', 'CL'),
(184, 175, 'Caras Severin', 'CRS', 'CS'),
(185, 175, 'Cluj', 'CLJ', 'CJ'),
(186, 175, 'Constanta', 'CST', 'CT'),
(187, 175, 'Covasna', 'COV', 'CV'),
(188, 175, 'Dambovita', 'DAM', 'DB'),
(189, 175, 'Dolj', 'DLJ', 'DJ'),
(190, 175, 'Galati', 'GAL', 'GL'),
(191, 175, 'Giurgiu', 'GIU', 'GR'),
(192, 175, 'Gorj', 'GOR', 'GJ'),
(193, 175, 'Hargita', 'HRG', 'HR'),
(194, 175, 'Hunedoara', 'HUN', 'HD'),
(195, 175, 'Ialomita', 'IAL', 'IL'),
(196, 175, 'Iasi', 'IAS', 'IS'),
(197, 175, 'Ilfov', 'ILF', 'IF'),
(198, 175, 'Maramures', 'MAR', 'MM'),
(199, 175, 'Mehedinti', 'MEH', 'MH'),
(200, 175, 'Mures', 'MUR', 'MS'),
(201, 175, 'Neamt', 'NEM', 'NT'),
(202, 175, 'Olt', 'OLT', 'OT'),
(203, 175, 'Prahova', 'PRA', 'PH'),
(204, 175, 'Salaj', 'SAL', 'SJ'),
(205, 175, 'Satu Mare', 'SAT', 'SM'),
(206, 175, 'Sibiu', 'SIB', 'SB'),
(207, 175, 'Suceava', 'SUC', 'SV'),
(208, 175, 'Teleorman', 'TEL', 'TR'),
(209, 175, 'Timis', 'TIM', 'TM'),
(210, 175, 'Tulcea', 'TUL', 'TL'),
(211, 175, 'Valcea', 'VAL', 'VL'),
(212, 175, 'Vaslui', 'VAS', 'VS'),
(213, 175, 'Vrancea', 'VRA', 'VN'),
(214, 105, 'Agrigento', 'AGR', 'AG'),
(215, 105, 'Alessandria', 'ALE', 'AL'),
(216, 105, 'Ancona', 'ANC', 'AN'),
(217, 105, 'Aosta', 'AOS', 'AO'),
(218, 105, 'Arezzo', 'ARE', 'AR'),
(219, 105, 'Ascoli Piceno', 'API', 'AP'),
(220, 105, 'Asti', 'AST', 'AT'),
(221, 105, 'Avellino', 'AVE', 'AV'),
(222, 105, 'Bari', 'BAR', 'BA'),
(223, 105, 'Barletta Andria Trani', 'BTA', 'BT'),
(224, 105, 'Belluno', 'BEL', 'BL'),
(225, 105, 'Benevento', 'BEN', 'BN'),
(226, 105, 'Bergamo', 'BEG', 'BG'),
(227, 105, 'Biella', 'BIE', 'BI'),
(228, 105, 'Bologna', 'BOL', 'BO'),
(229, 105, 'Bolzano', 'BOZ', 'BZ'),
(230, 105, 'Brescia', 'BRE', 'BS'),
(231, 105, 'Brindisi', 'BRI', 'BR'),
(232, 105, 'Cagliari', 'CAG', 'CA'),
(233, 105, 'Caltanissetta', 'CAL', 'CL'),
(234, 105, 'Campobasso', 'CBO', 'CB'),
(235, 105, 'Carbonia-Iglesias', 'CAR', 'CI'),
(236, 105, 'Caserta', 'CAS', 'CE'),
(237, 105, 'Catania', 'CAT', 'CT'),
(238, 105, 'Catanzaro', 'CTZ', 'CZ'),
(239, 105, 'Chieti', 'CHI', 'CH'),
(240, 105, 'Como', 'COM', 'CO'),
(241, 105, 'Cosenza', 'COS', 'CS'),
(242, 105, 'Cremona', 'CRE', 'CR'),
(243, 105, 'Crotone', 'CRO', 'KR'),
(244, 105, 'Cuneo', 'CUN', 'CN'),
(245, 105, 'Enna', 'ENN', 'EN'),
(246, 105, 'Fermo', 'FMO', 'FM'),
(247, 105, 'Ferrara', 'FER', 'FE'),
(248, 105, 'Firenze', 'FIR', 'FI'),
(249, 105, 'Foggia', 'FOG', 'FG'),
(250, 105, 'Forli-Cesena', 'FOC', 'FC'),
(251, 105, 'Frosinone', 'FRO', 'FR'),
(252, 105, 'Genova', 'GEN', 'GE'),
(253, 105, 'Gorizia', 'GOR', 'GO'),
(254, 105, 'Grosseto', 'GRO', 'GR'),
(255, 105, 'Imperia', 'IMP', 'IM'),
(256, 105, 'Isernia', 'ISE', 'IS'),
(257, 105, 'L''Aquila', 'AQU', 'AQ'),
(258, 105, 'La Spezia', 'LAS', 'SP'),
(259, 105, 'Latina', 'LAT', 'LT'),
(260, 105, 'Lecce', 'LEC', 'LE'),
(261, 105, 'Lecco', 'LCC', 'LC'),
(262, 105, 'Livorno', 'LIV', 'LI'),
(263, 105, 'Lodi', 'LOD', 'LO'),
(264, 105, 'Lucca', 'LUC', 'LU'),
(265, 105, 'Macerata', 'MAC', 'MC'),
(266, 105, 'Mantova', 'MAN', 'MN'),
(267, 105, 'Massa-Carrara', 'MAS', 'MS'),
(268, 105, 'Matera', 'MAA', 'MT'),
(269, 105, 'Medio Campidano', 'MED', 'VS'),
(270, 105, 'Messina', 'MES', 'ME'),
(271, 105, 'Milano', 'MIL', 'MI'),
(272, 105, 'Modena', 'MOD', 'MO'),
(273, 105, 'Monza e della Brianza', 'MBA', 'MB'),
(274, 105, 'Napoli', 'NAP', 'NA'),
(275, 105, 'Novara', 'NOV', 'NO'),
(276, 105, 'Nuoro', 'NUR', 'NU'),
(277, 105, 'Ogliastra', 'OGL', 'OG'),
(278, 105, 'Olbia-Tempio', 'OLB', 'OT'),
(279, 105, 'Oristano', 'ORI', 'OR'),
(280, 105, 'Padova', 'PDA', 'PD'),
(281, 105, 'Palermo', 'PAL', 'PA'),
(282, 105, 'Parma', 'PAA', 'PR'),
(283, 105, 'Pavia', 'PAV', 'PV'),
(284, 105, 'Perugia', 'PER', 'PG'),
(285, 105, 'Pesaro e Urbino', 'PES', 'PU'),
(286, 105, 'Pescara', 'PSC', 'PE'),
(287, 105, 'Piacenza', 'PIA', 'PC'),
(288, 105, 'Pisa', 'PIS', 'PI'),
(289, 105, 'Pistoia', 'PIT', 'PT'),
(290, 105, 'Pordenone', 'POR', 'PN'),
(291, 105, 'Potenza', 'PTZ', 'PZ'),
(292, 105, 'Prato', 'PRA', 'PO'),
(293, 105, 'Ragusa', 'RAG', 'RG'),
(294, 105, 'Ravenna', 'RAV', 'RA'),
(295, 105, 'Reggio Calabria', 'REG', 'RC'),
(296, 105, 'Reggio Emilia', 'REE', 'RE'),
(297, 105, 'Rieti', 'RIE', 'RI'),
(298, 105, 'Rimini', 'RIM', 'RN'),
(299, 105, 'Roma', 'ROM', 'RM'),
(300, 105, 'Rovigo', 'ROV', 'RO'),
(301, 105, 'Salerno', 'SAL', 'SA'),
(302, 105, 'Sassari', 'SAS', 'SS'),
(303, 105, 'Savona', 'SAV', 'SV'),
(304, 105, 'Siena', 'SIE', 'SI'),
(305, 105, 'Siracusa', 'SIR', 'SR'),
(306, 105, 'Sondrio', 'SOO', 'SO'),
(307, 105, 'Taranto', 'TAR', 'TA'),
(308, 105, 'Teramo', 'TER', 'TE'),
(309, 105, 'Terni', 'TRN', 'TR'),
(310, 105, 'Torino', 'TOR', 'TO'),
(311, 105, 'Trapani', 'TRA', 'TP'),
(312, 105, 'Trento', 'TRE', 'TN'),
(313, 105, 'Treviso', 'TRV', 'TV'),
(314, 105, 'Trieste', 'TRI', 'TS'),
(315, 105, 'Udine', 'UDI', 'UD'),
(316, 105, 'Varese', 'VAR', 'VA'),
(317, 105, 'Venezia', 'VEN', 'VE'),
(318, 105, 'Verbano Cusio Ossola', 'VCO', 'VB'),
(319, 105, 'Vercelli', 'VER', 'VC'),
(320, 105, 'Verona', 'VRN', 'VR'),
(321, 105, 'Vibo Valenzia', 'VIV', 'VV'),
(322, 105, 'Vicenza', 'VII', 'VI'),
(323, 105, 'Viterbo', 'VIT', 'VT'),
(324, 195, 'A Coruña', 'ACO', '15'),
(325, 195, 'Alava', 'ALA', '01'),
(326, 195, 'Albacete', 'ALB', '02'),
(327, 195, 'Alicante', 'ALI', '03'),
(328, 195, 'Almeria', 'ALM', '04'),
(329, 195, 'Asturias', 'AST', '33'),
(330, 195, 'Avila', 'AVI', '05'),
(331, 195, 'Badajoz', 'BAD', '06'),
(332, 195, 'Baleares', 'BAL', '07'),
(333, 195, 'Barcelona', 'BAR', '08'),
(334, 195, 'Burgos', 'BUR', '09'),
(335, 195, 'Caceres', 'CAC', '10'),
(336, 195, 'Cadiz', 'CAD', '11'),
(337, 195, 'Cantabria', 'CAN', '39'),
(338, 195, 'Castellon', 'CAS', '12'),
(339, 195, 'Ceuta', 'CEU', '51'),
(340, 195, 'Ciudad Real', 'CIU', '13'),
(341, 195, 'Cordoba', 'COR', '14'),
(342, 195, 'Cuenca', 'CUE', '16'),
(343, 195, 'Girona', 'GIR', '17'),
(344, 195, 'Granada', 'GRA', '18'),
(345, 195, 'Guadalajara', 'GUA', '19'),
(346, 195, 'Guipuzcoa', 'GUI', '20'),
(347, 195, 'Huelva', 'HUL', '21'),
(348, 195, 'Huesca', 'HUS', '22'),
(349, 195, 'Jaen', 'JAE', '23'),
(350, 195, 'La Rioja', 'LRI', '26'),
(351, 195, 'Las Palmas', 'LPA', '35'),
(352, 195, 'Leon', 'LEO', '24'),
(353, 195, 'Lleida', 'LLE', '25'),
(354, 195, 'Lugo', 'LUG', '27'),
(355, 195, 'Madrid', 'MAD', '28'),
(356, 195, 'Malaga', 'MAL', '29'),
(357, 195, 'Melilla', 'MEL', '52'),
(358, 195, 'Murcia', 'MUR', '30'),
(359, 195, 'Navarra', 'NAV', '31'),
(360, 195, 'Ourense', 'OUR', '32'),
(361, 195, 'Palencia', 'PAL', '34'),
(362, 195, 'Pontevedra', 'PON', '36'),
(363, 195, 'Salamanca', 'SAL', '37'),
(364, 195, 'Santa Cruz de Tenerife', 'SCT', '38'),
(365, 195, 'Segovia', 'SEG', '40'),
(366, 195, 'Sevilla', 'SEV', '41'),
(367, 195, 'Soria', 'SOR', '42'),
(368, 195, 'Tarragona', 'TAR', '43'),
(369, 195, 'Teruel', 'TER', '44'),
(370, 195, 'Toledo', 'TOL', '45'),
(371, 195, 'Valencia', 'VAL', '46'),
(372, 195, 'Valladolid', 'VLL', '47'),
(373, 195, 'Vizcaya', 'VIZ', '48'),
(374, 195, 'Zamora', 'ZAM', '49'),
(375, 195, 'Zaragoza', 'ZAR', '50'),
(376, 11, 'Aragatsotn', 'ARG', 'AG'),
(377, 11, 'Ararat', 'ARR', 'AR'),
(378, 11, 'Armavir', 'ARM', 'AV'),
(379, 11, 'Gegharkunik', 'GEG', 'GR'),
(380, 11, 'Kotayk', 'KOT', 'KT'),
(381, 11, 'Lori', 'LOR', 'LO'),
(382, 11, 'Shirak', 'SHI', 'SH'),
(383, 11, 'Syunik', 'SYU', 'SU'),
(384, 11, 'Tavush', 'TAV', 'TV'),
(385, 11, 'Vayots-Dzor', 'VAD', 'VD'),
(386, 11, 'Yerevan', 'YER', 'ER'),
(387, 99, 'Andaman & Nicobar Islands', 'ANI', 'AI'),
(388, 99, 'Andhra Pradesh', 'AND', 'AN'),
(389, 99, 'Arunachal Pradesh', 'ARU', 'AR'),
(390, 99, 'Assam', 'ASS', 'AS'),
(391, 99, 'Bihar', 'BIH', 'BI'),
(392, 99, 'Chandigarh', 'CHA', 'CA'),
(393, 99, 'Chhatisgarh', 'CHH', 'CH'),
(394, 99, 'Dadra & Nagar Haveli', 'DAD', 'DD'),
(395, 99, 'Daman & Diu', 'DAM', 'DA'),
(396, 99, 'Delhi', 'DEL', 'DE'),
(397, 99, 'Goa', 'GOA', 'GO'),
(398, 99, 'Gujarat', 'GUJ', 'GU'),
(399, 99, 'Haryana', 'HAR', 'HA'),
(400, 99, 'Himachal Pradesh', 'HIM', 'HI'),
(401, 99, 'Jammu & Kashmir', 'JAM', 'JA'),
(402, 99, 'Jharkhand', 'JHA', 'JH'),
(403, 99, 'Karnataka', 'KAR', 'KA'),
(404, 99, 'Kerala', 'KER', 'KE'),
(405, 99, 'Lakshadweep', 'LAK', 'LA'),
(406, 99, 'Madhya Pradesh', 'MAD', 'MD'),
(407, 99, 'Maharashtra', 'MAH', 'MH'),
(408, 99, 'Manipur', 'MAN', 'MN'),
(409, 99, 'Meghalaya', 'MEG', 'ME'),
(410, 99, 'Mizoram', 'MIZ', 'MI'),
(411, 99, 'Nagaland', 'NAG', 'NA'),
(412, 99, 'Orissa', 'ORI', 'OR'),
(413, 99, 'Pondicherry', 'PON', 'PO'),
(414, 99, 'Punjab', 'PUN', 'PU'),
(415, 99, 'Rajasthan', 'RAJ', 'RA'),
(416, 99, 'Sikkim', 'SIK', 'SI'),
(417, 99, 'Tamil Nadu', 'TAM', 'TA'),
(418, 99, 'Tripura', 'TRI', 'TR'),
(419, 99, 'Uttaranchal', 'UAR', 'UA'),
(420, 99, 'Uttar Pradesh', 'UTT', 'UT'),
(421, 99, 'West Bengal', 'WES', 'WE'),
(422, 101, 'Ahmadi va Kohkiluyeh', 'BOK', 'BO'),
(423, 101, 'Ardabil', 'ARD', 'AR'),
(424, 101, 'Azarbayjan-e Gharbi', 'AZG', 'AG'),
(425, 101, 'Azarbayjan-e Sharqi', 'AZS', 'AS'),
(426, 101, 'Bushehr', 'BUS', 'BU'),
(427, 101, 'Chaharmahal va Bakhtiari', 'CMB', 'CM'),
(428, 101, 'Esfahan', 'ESF', 'ES'),
(429, 101, 'Fars', 'FAR', 'FA'),
(430, 101, 'Gilan', 'GIL', 'GI'),
(431, 101, 'Gorgan', 'GOR', 'GO'),
(432, 101, 'Hamadan', 'HAM', 'HA'),
(433, 101, 'Hormozgan', 'HOR', 'HO'),
(434, 101, 'Ilam', 'ILA', 'IL'),
(435, 101, 'Kerman', 'KER', 'KE'),
(436, 101, 'Kermanshah', 'BAK', 'BA'),
(437, 101, 'Khorasan-e Junoubi', 'KHJ', 'KJ'),
(438, 101, 'Khorasan-e Razavi', 'KHR', 'KR'),
(439, 101, 'Khorasan-e Shomali', 'KHS', 'KS'),
(440, 101, 'Khuzestan', 'KHU', 'KH'),
(441, 101, 'Kordestan', 'KOR', 'KO'),
(442, 101, 'Lorestan', 'LOR', 'LO'),
(443, 101, 'Markazi', 'MAR', 'MR'),
(444, 101, 'Mazandaran', 'MAZ', 'MZ'),
(445, 101, 'Qazvin', 'QAS', 'QA'),
(446, 101, 'Qom', 'QOM', 'QO'),
(447, 101, 'Semnan', 'SEM', 'SE'),
(448, 101, 'Sistan va Baluchestan', 'SBA', 'SB'),
(449, 101, 'Tehran', 'TEH', 'TE'),
(450, 101, 'Yazd', 'YAZ', 'YA'),
(451, 101, 'Zanjan', 'ZAN', 'ZA');

-- --------------------------------------------------------

--
-- Table structure for table `webvn_vm_tax_rate`
--

CREATE TABLE IF NOT EXISTS `webvn_vm_tax_rate` (
  `tax_rate_id` int(11) NOT NULL auto_increment,
  `vendor_id` int(11) default NULL,
  `tax_state` varchar(64) default NULL,
  `tax_country` varchar(64) default NULL,
  `mdate` int(11) default NULL,
  `tax_rate` decimal(10,5) default NULL,
  PRIMARY KEY  (`tax_rate_id`),
  KEY `idx_tax_rate_vendor_id` (`vendor_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='The tax rates for your store' AUTO_INCREMENT=3 ;

--
-- Dumping data for table `webvn_vm_tax_rate`
--

INSERT INTO `webvn_vm_tax_rate` (`tax_rate_id`, `vendor_id`, `tax_state`, `tax_country`, `mdate`, `tax_rate`) VALUES
(2, 1, '-', 'VNM', 1320291765, '0.00000');

-- --------------------------------------------------------

--
-- Table structure for table `webvn_vm_userfield`
--

CREATE TABLE IF NOT EXISTS `webvn_vm_userfield` (
  `fieldid` int(11) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL default '',
  `title` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `type` varchar(50) NOT NULL default '',
  `maxlength` int(11) default NULL,
  `size` int(11) default NULL,
  `required` tinyint(4) default '0',
  `ordering` int(11) default NULL,
  `cols` int(11) default NULL,
  `rows` int(11) default NULL,
  `value` varchar(50) default NULL,
  `default` int(11) default NULL,
  `published` tinyint(1) NOT NULL default '1',
  `registration` tinyint(1) NOT NULL default '0',
  `shipping` tinyint(1) NOT NULL default '0',
  `account` tinyint(1) NOT NULL default '1',
  `readonly` tinyint(1) NOT NULL default '0',
  `calculated` tinyint(1) NOT NULL default '0',
  `sys` tinyint(4) NOT NULL default '0',
  `vendor_id` int(11) default NULL,
  `params` mediumtext,
  PRIMARY KEY  (`fieldid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Holds the fields for the user information' AUTO_INCREMENT=36 ;

--
-- Dumping data for table `webvn_vm_userfield`
--

INSERT INTO `webvn_vm_userfield` (`fieldid`, `name`, `title`, `description`, `type`, `maxlength`, `size`, `required`, `ordering`, `cols`, `rows`, `value`, `default`, `published`, `registration`, `shipping`, `account`, `readonly`, `calculated`, `sys`, `vendor_id`, `params`) VALUES
(1, 'email', 'REGISTER_EMAIL', '', 'emailaddress', 100, 30, 1, 2, NULL, NULL, NULL, NULL, 1, 1, 0, 1, 0, 0, 1, 1, NULL),
(7, 'title', 'PHPSHOP_SHOPPER_FORM_TITLE', '', 'select', 0, 0, 0, 8, NULL, NULL, NULL, NULL, 1, 1, 0, 1, 0, 0, 1, 1, NULL),
(3, 'password', 'PHPSHOP_SHOPPER_FORM_PASSWORD_1', '', 'password', 25, 30, 1, 4, NULL, NULL, NULL, NULL, 1, 1, 0, 1, 0, 0, 1, 1, NULL),
(4, 'password2', 'PHPSHOP_SHOPPER_FORM_PASSWORD_2', '', 'password', 25, 30, 1, 5, NULL, NULL, NULL, NULL, 1, 1, 0, 1, 0, 0, 1, 1, NULL),
(6, 'company', 'PHPSHOP_SHOPPER_FORM_COMPANY_NAME', '', 'text', 64, 30, 0, 7, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 0, 0, 1, 1, NULL),
(5, 'delimiter_billto', 'PHPSHOP_USER_FORM_BILLTO_LBL', '', 'delimiter', 25, 30, 0, 6, NULL, NULL, NULL, NULL, 1, 1, 0, 1, 0, 0, 0, 1, NULL),
(2, 'username', 'REGISTER_UNAME', '', 'text', 25, 30, 1, 3, NULL, NULL, NULL, NULL, 1, 1, 0, 1, 0, 0, 1, 1, ''),
(35, 'address_type_name', 'PHPSHOP_USER_FORM_ADDRESS_LABEL', '', 'text', 32, 30, 1, 6, NULL, NULL, NULL, NULL, 1, 0, 1, 0, 0, 0, 1, 1, NULL),
(8, 'first_name', 'PHPSHOP_SHOPPER_FORM_FIRST_NAME', '', 'text', 32, 30, 1, 9, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 0, 0, 1, 1, NULL),
(9, 'last_name', 'PHPSHOP_SHOPPER_FORM_LAST_NAME', '', 'text', 32, 30, 1, 10, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 0, 0, 1, 1, NULL),
(10, 'middle_name', 'PHPSHOP_SHOPPER_FORM_MIDDLE_NAME', '', 'text', 32, 30, 0, 11, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 0, 0, 1, 1, NULL),
(11, 'address_1', 'PHPSHOP_SHOPPER_FORM_ADDRESS_1', '', 'text', 64, 30, 1, 12, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 0, 0, 1, 1, NULL),
(12, 'address_2', 'PHPSHOP_SHOPPER_FORM_ADDRESS_2', '', 'text', 64, 30, 0, 13, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 0, 0, 1, 1, NULL),
(13, 'city', 'PHPSHOP_SHOPPER_FORM_CITY', '', 'text', 32, 30, 1, 14, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 0, 0, 1, 1, NULL),
(14, 'zip', 'PHPSHOP_SHOPPER_FORM_ZIP', '', 'text', 32, 30, 1, 15, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 0, 0, 1, 1, NULL),
(15, 'country', 'PHPSHOP_SHOPPER_FORM_COUNTRY', '', 'select', 0, 0, 1, 16, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 0, 0, 1, 1, NULL),
(16, 'state', 'PHPSHOP_SHOPPER_FORM_STATE', '', 'select', 0, 0, 1, 17, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 0, 0, 1, 1, NULL),
(17, 'phone_1', 'PHPSHOP_SHOPPER_FORM_PHONE', '', 'text', 32, 30, 1, 18, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 0, 0, 1, 1, NULL),
(18, 'phone_2', 'PHPSHOP_SHOPPER_FORM_PHONE2', '', 'text', 32, 30, 0, 19, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 0, 0, 1, 1, NULL),
(19, 'fax', 'PHPSHOP_SHOPPER_FORM_FAX', '', 'text', 32, 30, 0, 20, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 0, 0, 1, 1, NULL),
(20, 'delimiter_bankaccount', 'PHPSHOP_ACCOUNT_BANK_TITLE', '', 'delimiter', 25, 30, 0, 21, NULL, NULL, NULL, NULL, 1, 0, 0, 1, 0, 0, 0, 1, NULL),
(21, 'bank_account_holder', 'PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_HOLDER', '', 'text', 48, 30, 0, 22, NULL, NULL, NULL, NULL, 1, 0, 0, 1, 0, 0, 1, 1, NULL),
(22, 'bank_account_nr', 'PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_NR', '', 'text', 32, 30, 0, 23, NULL, NULL, NULL, NULL, 1, 0, 0, 1, 0, 0, 1, 1, NULL),
(23, 'bank_sort_code', 'PHPSHOP_ACCOUNT_LBL_BANK_SORT_CODE', '', 'text', 16, 30, 0, 24, NULL, NULL, NULL, NULL, 1, 0, 0, 1, 0, 0, 1, 1, NULL),
(24, 'bank_name', 'PHPSHOP_ACCOUNT_LBL_BANK_NAME', '', 'text', 32, 30, 0, 25, NULL, NULL, NULL, NULL, 1, 0, 0, 1, 0, 0, 1, 1, NULL),
(25, 'bank_account_type', 'PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE', '', 'select', 0, 0, 0, 26, NULL, NULL, NULL, NULL, 1, 0, 0, 1, 1, 0, 1, 1, ''),
(26, 'bank_iban', 'PHPSHOP_ACCOUNT_LBL_BANK_IBAN', '', 'text', 64, 30, 0, 27, NULL, NULL, NULL, NULL, 1, 0, 0, 1, 0, 0, 1, 1, NULL),
(27, 'delimiter_sendregistration', 'BUTTON_SEND_REG', '', 'delimiter', 25, 30, 0, 28, NULL, NULL, NULL, NULL, 1, 1, 0, 0, 0, 0, 0, 1, NULL),
(28, 'agreed', 'PHPSHOP_I_AGREE_TO_TOS', '', 'checkbox', NULL, NULL, 1, 29, NULL, NULL, NULL, NULL, 1, 1, 0, 0, 0, 0, 1, 1, NULL),
(29, 'delimiter_userinfo', 'PHPSHOP_ORDER_PRINT_CUST_INFO_LBL', '', 'delimiter', NULL, NULL, 0, 1, NULL, NULL, NULL, NULL, 1, 1, 0, 1, 0, 0, 0, 1, NULL),
(30, 'extra_field_1', 'PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_1', '', 'text', 255, 30, 0, 31, NULL, NULL, NULL, NULL, 0, 1, 0, 1, 0, 0, 0, 1, NULL),
(31, 'extra_field_2', 'PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_2', '', 'text', 255, 30, 0, 32, NULL, NULL, NULL, NULL, 0, 1, 0, 1, 0, 0, 0, 1, NULL),
(32, 'extra_field_3', 'PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_3', '', 'text', 255, 30, 0, 33, NULL, NULL, NULL, NULL, 0, 1, 0, 1, 0, 0, 0, 1, NULL),
(33, 'extra_field_4', 'PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4', '', 'select', 1, 1, 0, 34, NULL, NULL, NULL, NULL, 0, 1, 0, 1, 0, 0, 0, 1, NULL),
(34, 'extra_field_5', 'PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5', '', 'select', 1, 1, 0, 35, NULL, NULL, NULL, NULL, 0, 1, 0, 1, 0, 0, 0, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `webvn_vm_userfield_values`
--

CREATE TABLE IF NOT EXISTS `webvn_vm_userfield_values` (
  `fieldvalueid` int(11) NOT NULL auto_increment,
  `fieldid` int(11) NOT NULL default '0',
  `fieldtitle` varchar(255) NOT NULL default '',
  `fieldvalue` varchar(255) NOT NULL,
  `ordering` int(11) NOT NULL default '0',
  `sys` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`fieldvalueid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Holds the different values for dropdown and radio lists' AUTO_INCREMENT=4 ;

--
-- Dumping data for table `webvn_vm_userfield_values`
--

INSERT INTO `webvn_vm_userfield_values` (`fieldvalueid`, `fieldid`, `fieldtitle`, `fieldvalue`, `ordering`, `sys`) VALUES
(1, 25, 'PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_BUSINESSCHECKING', 'Checking', 1, 1),
(2, 25, 'PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_CHECKING', 'Business Checking', 2, 1),
(3, 25, 'PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_SAVINGS', 'Savings', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `webvn_vm_user_info`
--

CREATE TABLE IF NOT EXISTS `webvn_vm_user_info` (
  `user_info_id` varchar(32) NOT NULL default '',
  `user_id` int(11) NOT NULL default '0',
  `address_type` char(2) default NULL,
  `address_type_name` varchar(32) default NULL,
  `company` varchar(64) default NULL,
  `title` varchar(32) default NULL,
  `last_name` varchar(32) default NULL,
  `first_name` varchar(32) default NULL,
  `middle_name` varchar(32) default NULL,
  `phone_1` varchar(32) default NULL,
  `phone_2` varchar(32) default NULL,
  `fax` varchar(32) default NULL,
  `address_1` varchar(64) NOT NULL default '',
  `address_2` varchar(64) default NULL,
  `city` varchar(32) NOT NULL default '',
  `state` varchar(32) NOT NULL default '',
  `country` varchar(32) NOT NULL default 'US',
  `zip` varchar(32) NOT NULL default '',
  `user_email` varchar(255) default NULL,
  `extra_field_1` varchar(255) default NULL,
  `extra_field_2` varchar(255) default NULL,
  `extra_field_3` varchar(255) default NULL,
  `extra_field_4` char(1) default NULL,
  `extra_field_5` char(1) default NULL,
  `cdate` int(11) default NULL,
  `mdate` int(11) default NULL,
  `perms` varchar(40) NOT NULL default 'shopper',
  `bank_account_nr` varchar(32) NOT NULL default '',
  `bank_name` varchar(32) NOT NULL default '',
  `bank_sort_code` varchar(16) NOT NULL default '',
  `bank_iban` varchar(64) NOT NULL default '',
  `bank_account_holder` varchar(48) NOT NULL default '',
  `bank_account_type` enum('Checking','Business Checking','Savings') NOT NULL default 'Checking',
  PRIMARY KEY  (`user_info_id`),
  KEY `idx_user_info_user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Customer Information, BT = BillTo and ST = ShipTo';

--
-- Dumping data for table `webvn_vm_user_info`
--

INSERT INTO `webvn_vm_user_info` (`user_info_id`, `user_id`, `address_type`, `address_type_name`, `company`, `title`, `last_name`, `first_name`, `middle_name`, `phone_1`, `phone_2`, `fax`, `address_1`, `address_2`, `city`, `state`, `country`, `zip`, `user_email`, `extra_field_1`, `extra_field_2`, `extra_field_3`, `extra_field_4`, `extra_field_5`, `cdate`, `mdate`, `perms`, `bank_account_nr`, `bank_name`, `bank_sort_code`, `bank_iban`, `bank_account_holder`, `bank_account_type`) VALUES
('cb7b298bbce2f9582eb00b5e17300101', 62, 'BT', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '', '', 'US', '', 'admin@admin.com', NULL, NULL, NULL, NULL, NULL, 1320136905, 1320264096, 'shopper', '', '', '', '', '', 'Checking');

-- --------------------------------------------------------

--
-- Table structure for table `webvn_vm_vendor`
--

CREATE TABLE IF NOT EXISTS `webvn_vm_vendor` (
  `vendor_id` int(11) NOT NULL auto_increment,
  `vendor_name` varchar(64) default NULL,
  `contact_last_name` varchar(32) NOT NULL default '',
  `contact_first_name` varchar(32) NOT NULL default '',
  `contact_middle_name` varchar(32) default NULL,
  `contact_title` varchar(32) default NULL,
  `contact_phone_1` varchar(32) NOT NULL default '',
  `contact_phone_2` varchar(32) default NULL,
  `contact_fax` varchar(32) default NULL,
  `contact_email` varchar(255) default NULL,
  `vendor_phone` varchar(32) default NULL,
  `vendor_address_1` varchar(64) NOT NULL default '',
  `vendor_address_2` varchar(64) default NULL,
  `vendor_city` varchar(32) NOT NULL default '',
  `vendor_state` varchar(32) NOT NULL default '',
  `vendor_country` varchar(32) NOT NULL default 'US',
  `vendor_zip` varchar(32) NOT NULL default '',
  `vendor_store_name` varchar(128) NOT NULL default '',
  `vendor_store_desc` text,
  `vendor_category_id` int(11) default NULL,
  `vendor_thumb_image` varchar(255) default NULL,
  `vendor_full_image` varchar(255) default NULL,
  `vendor_currency` varchar(16) default NULL,
  `cdate` int(11) default NULL,
  `mdate` int(11) default NULL,
  `vendor_image_path` varchar(255) default NULL,
  `vendor_terms_of_service` text NOT NULL,
  `vendor_url` varchar(255) NOT NULL default '',
  `vendor_min_pov` decimal(10,2) default NULL,
  `vendor_freeshipping` decimal(10,2) NOT NULL default '0.00',
  `vendor_currency_display_style` varchar(64) NOT NULL default '',
  `vendor_accepted_currencies` text NOT NULL,
  `vendor_address_format` text NOT NULL,
  `vendor_date_format` varchar(255) NOT NULL,
  PRIMARY KEY  (`vendor_id`),
  KEY `idx_vendor_name` (`vendor_name`),
  KEY `idx_vendor_category_id` (`vendor_category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Vendors manage their products in your store' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `webvn_vm_vendor`
--

INSERT INTO `webvn_vm_vendor` (`vendor_id`, `vendor_name`, `contact_last_name`, `contact_first_name`, `contact_middle_name`, `contact_title`, `contact_phone_1`, `contact_phone_2`, `contact_fax`, `contact_email`, `vendor_phone`, `vendor_address_1`, `vendor_address_2`, `vendor_city`, `vendor_state`, `vendor_country`, `vendor_zip`, `vendor_store_name`, `vendor_store_desc`, `vendor_category_id`, `vendor_thumb_image`, `vendor_full_image`, `vendor_currency`, `cdate`, `mdate`, `vendor_image_path`, `vendor_terms_of_service`, `vendor_url`, `vendor_min_pov`, `vendor_freeshipping`, `vendor_currency_display_style`, `vendor_accepted_currencies`, `vendor_address_format`, `vendor_date_format`) VALUES
(1, 'Washupito\\''s Tiendita', 'Owner', 'Demo', 'Store', 'Mr.', '555-555-1212', '555-555-1212', '555-555-1212', 'admin@admin.com', '555-555-1212', '100 Washupito Avenue, N.W.', '', 'Lake Forest', 'CA', 'USA', '92630', 'Washupito\\''s Tiendita', '', 0, '', 'c19970d6f2970cb0d1b13bea3af3144a.gif', 'VND', 950302468, 1320291788, '', '', 'http://localhost/Demo/Webvn/dienthoaididong', '0.00', '0.00', '1| VNĐ|0|.| |0|15', 'VND', '{storename}\r\n{address_1}\r\n{address_2}\r\n{city}, {zip}', '%A, %d %B %Y %H:%M');

-- --------------------------------------------------------

--
-- Table structure for table `webvn_vm_vendor_category`
--

CREATE TABLE IF NOT EXISTS `webvn_vm_vendor_category` (
  `vendor_category_id` int(11) NOT NULL auto_increment,
  `vendor_category_name` varchar(64) default NULL,
  `vendor_category_desc` text,
  PRIMARY KEY  (`vendor_category_id`),
  KEY `idx_vendor_category_category_name` (`vendor_category_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='The categories that vendors are assigned to' AUTO_INCREMENT=7 ;

--
-- Dumping data for table `webvn_vm_vendor_category`
--

INSERT INTO `webvn_vm_vendor_category` (`vendor_category_id`, `vendor_category_name`, `vendor_category_desc`) VALUES
(6, '-default-', 'Default');

-- --------------------------------------------------------

--
-- Table structure for table `webvn_vm_waiting_list`
--

CREATE TABLE IF NOT EXISTS `webvn_vm_waiting_list` (
  `waiting_list_id` int(11) NOT NULL auto_increment,
  `product_id` int(11) NOT NULL default '0',
  `user_id` int(11) NOT NULL default '0',
  `notify_email` varchar(150) NOT NULL default '',
  `notified` enum('0','1') default '0',
  `notify_date` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`waiting_list_id`),
  KEY `product_id` (`product_id`),
  KEY `notify_email` (`notify_email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Stores notifications, users waiting f. products out of stock' AUTO_INCREMENT=1 ;

--
-- Dumping data for table `webvn_vm_waiting_list`
--


-- --------------------------------------------------------

--
-- Table structure for table `webvn_vm_zone_shipping`
--

CREATE TABLE IF NOT EXISTS `webvn_vm_zone_shipping` (
  `zone_id` int(11) NOT NULL auto_increment,
  `zone_name` varchar(255) default NULL,
  `zone_cost` decimal(10,2) default NULL,
  `zone_limit` decimal(10,2) default NULL,
  `zone_description` text NOT NULL,
  `zone_tax_rate` int(11) NOT NULL default '0',
  PRIMARY KEY  (`zone_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='The Zones managed by the Zone Shipping Module' AUTO_INCREMENT=5 ;

--
-- Dumping data for table `webvn_vm_zone_shipping`
--

INSERT INTO `webvn_vm_zone_shipping` (`zone_id`, `zone_name`, `zone_cost`, `zone_limit`, `zone_description`, `zone_tax_rate`) VALUES
(1, 'Default', '6.00', '35.00', 'This is the default Shipping Zone. This is the zone information that all countries will use until you assign each individual country to a Zone.', 2),
(2, 'Zone 1', '1000.00', '10000.00', 'This is a zone example', 2),
(3, 'Zone 2', '2.00', '22.00', 'This is the second zone. You can use this for notes about this zone', 2),
(4, 'Zone 3', '11.00', '64.00', 'Another usefull thing might be details about this zone or special instructions.', 2);

-- --------------------------------------------------------

--
-- Table structure for table `webvn_vvcounter_logs`
--

CREATE TABLE IF NOT EXISTS `webvn_vvcounter_logs` (
  `time` int(10) unsigned NOT NULL,
  `visits` mediumint(8) unsigned NOT NULL default '0',
  `guests` mediumint(8) unsigned NOT NULL default '0',
  `members` mediumint(8) unsigned NOT NULL default '0',
  `bots` mediumint(8) unsigned NOT NULL default '0',
  UNIQUE KEY `time` (`time`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `webvn_vvcounter_logs`
--

INSERT INTO `webvn_vvcounter_logs` (`time`, `visits`, `guests`, `members`, `bots`) VALUES
(1320631318, 3, 2, 1, 0),
(1320632219, 0, 0, 0, 0),
(1320633132, 0, 0, 0, 0),
(1320732000, 0, 0, 0, 0),
(1320734840, 1, 1, 0, 0),
(1320807600, 0, 0, 0, 0),
(1320810125, 1, 1, 0, 0),
(1320811200, 0, 0, 0, 0),
(1320813890, 1, 1, 0, 0),
(1320825600, 0, 0, 0, 0),
(1320826927, 1, 1, 0, 0),
(1320854400, 0, 0, 0, 0),
(1320857004, 1, 1, 0, 0),
(1320915600, 0, 0, 0, 0),
(1320916916, 1, 1, 0, 0),
(1320973200, 0, 0, 0, 0),
(1320974233, 1, 1, 0, 0),
(1321099200, 0, 0, 0, 0),
(1321102499, 1, 1, 0, 0),
(1321423200, 0, 0, 0, 0),
(1321425130, 1, 1, 0, 0),
(1321426800, 0, 0, 0, 0),
(1321428799, 1, 1, 0, 0),
(1321430400, 0, 0, 0, 0),
(1321433102, 1, 1, 0, 0),
(1321437600, 0, 0, 0, 0),
(1321438849, 1, 1, 0, 0),
(1321440336, 3, 1, 0, 2),
(1321444800, 0, 0, 0, 0),
(1321446582, 1, 1, 0, 0),
(1321448400, 0, 0, 0, 0),
(1321450183, 1, 1, 0, 0),
(1321451227, 11, 1, 0, 10),
(1321452000, 0, 0, 0, 0),
(1321453363, 1, 1, 0, 0),
(1321454613, 1, 1, 0, 0),
(1321455538, 1, 1, 0, 0),
(1321470000, 0, 0, 0, 0),
(1321473532, 1, 1, 0, 0),
(1321473600, 0, 0, 0, 0),
(1321476904, 1, 1, 0, 0),
(1321477200, 3, 0, 0, 3),
(1321478819, 1, 1, 0, 0),
(1321480605, 1, 1, 0, 0),
(1321480800, 0, 0, 0, 0),
(1321483125, 1, 1, 0, 0),
(1321484400, 0, 0, 0, 0),
(1321486041, 3, 1, 0, 2),
(1321487134, 5, 1, 0, 4),
(1321488000, 0, 0, 0, 0),
(1321490709, 1, 1, 0, 0),
(1321491600, 0, 0, 0, 0),
(1321494503, 1, 1, 0, 0),
(1321531200, 0, 0, 0, 0),
(1321533653, 1, 1, 0, 0),
(1321570800, 0, 0, 0, 0),
(1321571790, 1, 1, 0, 0),
(1321573286, 1, 1, 0, 0),
(1321610400, 0, 0, 0, 0),
(1321613549, 1, 1, 0, 0),
(1321657200, 0, 0, 0, 0),
(1321700400, 0, 0, 0, 0),
(1321732800, 0, 0, 0, 0),
(1321736180, 1, 1, 0, 0),
(1321765200, 0, 0, 0, 0),
(1321768671, 1, 1, 0, 0),
(1321779600, 0, 0, 0, 0),
(1321782456, 1, 1, 0, 0),
(1321938000, 0, 0, 0, 0),
(1321939396, 1, 1, 0, 0),
(1322020800, 0, 0, 0, 0),
(1322023182, 1, 1, 0, 0),
(1322064000, 0, 0, 0, 0),
(1322065591, 1, 1, 0, 0),
(1322103600, 0, 0, 0, 0),
(1322105581, 1, 1, 0, 0),
(1322107200, 0, 0, 0, 0),
(1322108981, 1, 1, 0, 0),
(1322110800, 0, 0, 0, 0),
(1322111889, 1, 1, 0, 0),
(1322179200, 0, 0, 0, 0),
(1322180472, 1, 1, 0, 0),
(1322181471, 7, 1, 0, 6),
(1322247600, 0, 0, 0, 0),
(1322248573, 1, 1, 0, 0),
(1322250949, 1, 1, 0, 0),
(1322251200, 1, 0, 0, 1),
(1322305200, 0, 0, 0, 0),
(1322306749, 1, 1, 0, 0),
(1322308800, 0, 0, 0, 0),
(1322310355, 1, 1, 0, 0),
(1322409600, 0, 0, 0, 0),
(1322410917, 3, 3, 0, 0),
(1322413200, 0, 0, 0, 0),
(1322445600, 0, 0, 0, 0),
(1322447855, 1, 1, 0, 0),
(1322448977, 2, 2, 0, 0),
(1322449200, 1, 1, 0, 0),
(1322450591, 1, 1, 0, 0),
(1322452664, 1, 1, 0, 0),
(1322452800, 0, 0, 0, 0),
(1322453878, 3, 1, 0, 2),
(1322455127, 1, 1, 0, 0),
(1322460000, 0, 0, 0, 0),
(1322463371, 1, 1, 0, 0),
(1322463600, 0, 0, 0, 0),
(1322465360, 1, 1, 0, 0),
(1322470800, 0, 0, 0, 0),
(1322472324, 1, 1, 0, 0),
(1322473329, 2, 2, 0, 0),
(1322528400, 0, 0, 0, 0),
(1322531022, 1, 1, 0, 0),
(1322532000, 0, 0, 0, 0),
(1322550000, 0, 0, 0, 0),
(1322553582, 1, 1, 0, 0),
(1322553600, 0, 0, 0, 0),
(1322578800, 0, 0, 0, 0),
(1322618400, 0, 0, 0, 0),
(1322620102, 1, 1, 0, 0),
(1322625600, 0, 0, 0, 0),
(1322640000, 0, 0, 0, 0),
(1322641659, 1, 1, 0, 0),
(1322643044, 1, 1, 0, 0),
(1322643600, 0, 0, 0, 0),
(1322644722, 1, 1, 0, 0),
(1322647200, 0, 0, 0, 0),
(1322648646, 1, 1, 0, 0),
(1322719200, 0, 0, 0, 0),
(1322722098, 1, 1, 0, 0),
(1322726400, 0, 0, 0, 0),
(1322737200, 0, 0, 0, 0),
(1322738101, 3, 3, 0, 0),
(1322739734, 1, 1, 0, 0),
(1322755200, 0, 0, 0, 0),
(1322756156, 1, 1, 0, 0),
(1322758800, 0, 0, 0, 0),
(1322791200, 0, 0, 0, 0),
(1322793959, 1, 1, 0, 0),
(1322794800, 0, 0, 0, 0),
(1322796990, 1, 1, 0, 0),
(1322798400, 0, 0, 0, 0),
(1322801189, 1, 1, 0, 0),
(1322805600, 0, 0, 0, 0),
(1322808884, 1, 1, 0, 0),
(1322809200, 0, 0, 0, 0),
(1322811887, 1, 1, 0, 0),
(1322874000, 0, 0, 0, 0),
(1322877277, 1, 1, 0, 0),
(1322971200, 0, 0, 0, 0),
(1322973153, 1, 1, 0, 0),
(1323003600, 0, 0, 0, 0),
(1323006021, 1, 1, 0, 0),
(1323014400, 0, 0, 0, 0),
(1323032400, 0, 0, 0, 0),
(1323050400, 0, 0, 0, 0),
(1323053520, 1, 1, 0, 0),
(1323140400, 0, 0, 0, 0),
(1323141409, 1, 1, 0, 0),
(1323147600, 0, 0, 0, 0),
(1323165600, 0, 0, 0, 0),
(1323166965, 1, 1, 0, 0),
(1323331200, 0, 0, 0, 0),
(1323334514, 1, 1, 0, 0),
(1323334800, 2, 0, 0, 2),
(1323335935, 5, 1, 0, 4),
(1323336983, 6, 1, 0, 5),
(1323338392, 1, 1, 0, 0),
(1323338400, 0, 0, 0, 0),
(1323363600, 0, 0, 0, 0),
(1323366653, 1, 1, 0, 0),
(1323367200, 0, 0, 0, 0),
(1323368344, 1, 1, 0, 0),
(1323370239, 1, 1, 0, 0),
(1323370800, 0, 0, 0, 0),
(1323374270, 1, 1, 0, 0),
(1323374400, 1, 0, 0, 1),
(1323403200, 0, 0, 0, 0),
(1323404788, 1, 1, 0, 0),
(1323410400, 0, 0, 0, 0),
(1323413138, 1, 1, 0, 0),
(1338742800, 0, 0, 0, 0),
(1338745571, 1, 1, 0, 0),
(1339124400, 0, 0, 0, 0),
(1339127585, 1, 1, 0, 0),
(1340074800, 0, 0, 0, 0),
(1340077110, 1, 1, 0, 0),
(1340082000, 0, 0, 0, 0),
(1340085577, 1, 1, 0, 0),
(1340085600, 0, 0, 0, 0),
(1340087226, 1, 1, 0, 0),
(1340092800, 0, 0, 0, 0),
(1340095333, 1, 1, 0, 0),
(1340096235, 2, 1, 1, 0),
(1340161200, 0, 0, 0, 0),
(1340163137, 1, 1, 0, 0),
(1340164051, 2, 1, 1, 0),
(1340164800, 0, 0, 0, 0),
(1340166382, 1, 1, 0, 0),
(1340167384, 0, 0, 0, 0),
(1340168377, 0, 0, 0, 0),
(1340168400, 0, 0, 0, 0),
(1340169320, 2, 1, 1, 0),
(1340179200, 0, 0, 0, 0),
(1340180899, 1, 1, 0, 0),
(1340181894, 2, 1, 1, 0),
(1340182800, 0, 0, 0, 0),
(1340183717, 2, 1, 1, 0),
(1340184635, 0, 0, 0, 0),
(1340185568, 0, 0, 0, 0),
(1340211600, 0, 0, 0, 0),
(1340213365, 1, 1, 0, 0),
(1340214313, 3, 2, 1, 0),
(1340215200, 0, 0, 0, 0),
(1340216106, 0, 0, 0, 0),
(1340217131, 0, 0, 0, 0),
(1340218047, 2, 1, 1, 0),
(1340298000, 0, 0, 0, 0),
(1340299907, 1, 1, 0, 0),
(1340301600, 0, 0, 0, 0),
(1340303110, 1, 1, 0, 0),
(1340304017, 0, 0, 0, 0),
(1340304955, 0, 0, 0, 0),
(1340305200, 0, 0, 0, 0),
(1340306124, 0, 0, 0, 0),
(1340307036, 2, 1, 1, 0),
(1340307957, 2, 1, 1, 0),
(1340308800, 0, 0, 0, 0),
(1340309733, 1, 1, 0, 0),
(1340334000, 0, 0, 0, 0),
(1340336714, 1, 1, 0, 0),
(1340337600, 0, 0, 0, 0),
(1340339222, 1, 1, 0, 0),
(1340340339, 1, 1, 0, 0),
(1340341200, 0, 0, 0, 0),
(1340342362, 0, 0, 0, 0),
(1340686800, 0, 0, 0, 0),
(1342177200, 0, 0, 0, 0),
(1342178963, 1, 1, 0, 0),
(1345604400, 0, 0, 0, 0),
(1347325200, 0, 0, 0, 0),
(1347327569, 1, 1, 0, 0),
(1347328800, 0, 0, 0, 0),
(1347329809, 1, 1, 0, 0),
(1347330807, 0, 0, 0, 0),
(1347331774, 0, 0, 0, 0),
(1347332400, 0, 0, 0, 0),
(1347333315, 1, 1, 0, 0),
(1347334247, 0, 0, 0, 0),
(1347335254, 0, 0, 0, 0),
(1347336000, 0, 0, 0, 0),
(1347336902, 2, 1, 1, 0),
(1347338025, 1, 1, 0, 0),
(1347338953, 1, 0, 1, 0),
(1347339600, 0, 0, 0, 0),
(1347340510, 0, 0, 0, 0),
(1347343200, 0, 0, 0, 0),
(1347346128, 1, 1, 0, 0),
(1347346800, 0, 0, 0, 0),
(1347347718, 0, 0, 0, 0),
(1347348662, 2, 1, 1, 0),
(1347349585, 0, 0, 0, 0),
(1347350400, 2, 2, 0, 0),
(1347351314, 2, 1, 1, 0),
(1347352248, 0, 0, 0, 0),
(1347353149, 0, 0, 0, 0),
(1347354000, 0, 0, 0, 0),
(1347354900, 0, 0, 0, 0),
(1347355828, 0, 0, 0, 0),
(1347356732, 0, 0, 0, 0),
(1347415200, 0, 0, 0, 0),
(1347417154, 1, 1, 0, 0),
(1347418168, 1, 1, 0, 0),
(1347865200, 0, 0, 0, 0),
(1349258400, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `webvn_weblinks`
--

CREATE TABLE IF NOT EXISTS `webvn_weblinks` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `catid` int(11) NOT NULL default '0',
  `sid` int(11) NOT NULL default '0',
  `title` varchar(250) NOT NULL default '',
  `alias` varchar(255) NOT NULL default '',
  `url` varchar(250) NOT NULL default '',
  `description` text NOT NULL,
  `date` datetime NOT NULL default '0000-00-00 00:00:00',
  `hits` int(11) NOT NULL default '0',
  `published` tinyint(1) NOT NULL default '0',
  `checked_out` int(11) NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `ordering` int(11) NOT NULL default '0',
  `archived` tinyint(1) NOT NULL default '0',
  `approved` tinyint(1) NOT NULL default '1',
  `params` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `catid` (`catid`,`published`,`archived`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `webvn_weblinks`
--

INSERT INTO `webvn_weblinks` (`id`, `catid`, `sid`, `title`, `alias`, `url`, `description`, `date`, `hits`, `published`, `checked_out`, `checked_out_time`, `ordering`, `archived`, `approved`, `params`) VALUES
(1, 2, 0, 'Joomla!', 'joomla', 'http://www.joomla.org', 'Home of Joomla!', '2005-02-14 15:19:02', 6, 1, 0, '0000-00-00 00:00:00', 1, 0, 1, 'target=0'),
(2, 2, 0, 'php.net', 'php', 'http://www.php.net', 'The language that Joomla! is developed in', '2004-07-07 11:33:24', 9, 1, 0, '0000-00-00 00:00:00', 3, 0, 1, ''),
(3, 2, 0, 'MySQL', 'mysql', 'http://www.mysql.com', 'The database that Joomla! uses', '2004-07-07 10:18:31', 4, 1, 0, '0000-00-00 00:00:00', 5, 0, 1, ''),
(4, 2, 0, 'OpenSourceMatters', 'opensourcematters', 'http://www.opensourcematters.org', 'Home of OSM', '2005-02-14 15:19:02', 14, 1, 0, '0000-00-00 00:00:00', 2, 0, 1, 'target=0'),
(5, 2, 0, 'Joomla! - Forums', 'joomla-forums', 'http://forum.joomla.org', 'Joomla! Forums', '2005-02-14 15:19:02', 7, 1, 0, '0000-00-00 00:00:00', 4, 0, 1, 'target=0'),
(6, 2, 0, 'Ohloh Tracking of Joomla!', 'ohloh-tracking-of-joomla', 'http://www.ohloh.net/projects/20', 'Objective reports from Ohloh about Joomla''s development activity. Joomla! has some star developers with serious kudos.', '2007-07-19 09:28:31', 4, 1, 0, '0000-00-00 00:00:00', 6, 0, 1, 'target=0\n\n');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `webvn_vm_mz_product_hotspots`
--
ALTER TABLE `webvn_vm_mz_product_hotspots`
  ADD CONSTRAINT `webvn_vm_mz_product_hotspots_ibfk_1` FOREIGN KEY (`linked_file_id`) REFERENCES `webvn_vm_mz_product_files` (`file_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `webvn_vm_mz_product_hotspots_ibfk_2` FOREIGN KEY (`file_id`) REFERENCES `webvn_vm_mz_product_files` (`file_id`) ON DELETE CASCADE ON UPDATE CASCADE;
