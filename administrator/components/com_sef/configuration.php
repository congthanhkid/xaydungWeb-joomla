<?php
/**
 * SEF component for Joomla! 1.5
 *
 * @author      ARTIO s.r.o.
 * @copyright   ARTIO s.r.o., http://www.artio.cz
 * @package     JoomSEF
 * @version     3.1.0
 * @license     GNU/GPLv3 http://www.artio.net/license/gnu-general-public-license
 */

$alwaysUseLang = "1";
$enabled = "1";
$replacement = "-";
$pagerep = "-";
$stripthese = ",|~|!|@|%|^|*|(|)|+|<|>|:|;|{|}|[|]|---|--|..|.";
$suffix = ".html";
$addFile = "";
$friendlytrim = "-|.";
$canonicalLink = true;
$pagetext = "JText::_('PAGE')-%s";
$langPlacement = "0";
$lowerCase = "0";
$useAlias = "0";
$excludeSource = "0";
$reappendSource = "0";
$ignoreSource = "1";
$appendNonSef = "1";
$transitSlash = "1";
$useCache = "1";
$cacheSize = "1000";
$cacheMinHits = "10";
$cacheRecordHits = "0";
$cacheShowErr = "0";
$translateNames = "1";
$page404 = "0";
$record404 = "0";
$template404 = "1";
$showMessageOn404 = "0";
$use404itemid = "0";
$itemid404 = 0;
$nonSefRedirect = "1";
$useMoved = "1";
$useMovedAsk = "1";
$replacements = "Á|A, Â|A, Å|A, Ă|A, Ä|A, À|A, Ć|C, Ç|C, Č|C, Ď|D, É|E, È|E, Ë|E, Ě|E, Ì|I, Í|I, Î|I, Ï|I, Ĺ|L, Ń|N, Ň|N, Ñ|N, Ò|O, Ó|O, Ô|O, Õ|O, Ö|O, Ŕ|R, Ř|R, Š|S, Ś|O, Ť|T, Ů|U, Ú|U, Ű|U, Ü|U, Ý|Y, Ž|Z, Ź|Z, á|a, â|a, å|a, ä|a, à|a, ć|c, ç|c, č|c, ď|d, đ|d, é|e, ę|e, ë|e, ě|e, è|e, ì|i, í|i, î|i, ï|i, ĺ|l, ń|n, ň|n, ñ|n, ò|o, ó|o, ô|o, ő|o, ö|o, š|s, ś|s, ř|r, ŕ|r, ť|t, ů|u, ú|u, ű|u, ü|u, ý|y, ž|z, ź|z, ˙|-, ß|ss, Ą|A, µ|u, Ą|A, µ|u, ą|a, Ą|A, ę|e, Ę|E, ś|s, Ś|S, ż|z, Ż|Z, ź|z, Ź|Z, ć|c, Ć|C, ł|l, Ł|L, ó|o, Ó|O, ń|n, Ń|N
á|a, à|a, ả|a, ã|a, ạ|a, â|a, ấ|a, ầ|a, ẩ|a, ẫ|a, ậ|a, ă|a, ắ|a, ằ|a, ẳ|a, ẵ|a, ặ|a, đ|d, é|e, è|e, ẻ|e, ẽ|e, ẹ|e, ê|e, ế|e, ề|e, ể|e, ễ|e, ệ|e, í|i, ì|i, ỉ|i, ĩ|i, ị|i, ó|o, ò|o, ỏ|o, õ|o, ọ|o, ô|o, ố|o, ồ|o, ổ|o, ỗ|o, ộ|o, ơ|o, ớ|o, ờ|o, ở|o, ỡ|o, ợ|o, ú|u, ù|u, ủ|u, ũ|u, ụ|u, ư|u, ứ|u, ừ|u, ử|u, ữ|u, ự|u, ý|y, ỳ|y, ỷ|y, ỹ|y, ỵ|y, Á|A, À|A, Ả|A, Ã|A, Ạ|A, Â|A, Ấ|A, Ầ|A, Ẩ|A, Ẫ|A, Ậ|A, Ă|A, Ắ|A, Ằ|A, Ẳ|A, Ẵ|A, Ặ|A, Đ|D, É|E, È|E, Ẻ|E, Ẽ|E, Ẹ|E, Ê|E, Ế|E, Ề|E, Ể|E, Ễ|E, Ệ|E, Í|I, Ì|I, Ỉ|I, Ĩ|I, Ị|I, Ó|O, Ò|O, Ỏ|O, Õ|O, Ọ|O, Ô|O, Ố|O, Ồ|O, Ổ|O, Ỗ|O, Ộ|O, Ơ|O, Ớ|O, Ờ|O, Ở|O, Ỡ|O, Ợ|O, Ú|U, Ù|U, Ủ|U, Ũ|U, Ụ|U, Ư|U, Ứ|U, Ừ|U, Ử|U, Ữ|U, Ự|U, Ý|Y, Ỳ|Y, Ỷ|Y, Ỹ|Y, Ỵ|Y";
$predefined = array('0' => "com_login",'1' => "com_newsfeeds",'2' => "com_sef",'3' => "com_weblinks",'4' => "com_joomfish");
$serverUpgradeURL = "http://www.artio.cz/updates/joomsef3/upgrade.zip";
$serverNewVersionURL = "http://www.artio.cz/updates/joomla/joomsef3/version";
$serverAutoUpgrade = "http://www.artio.net/joomla-auto-upgrade";
$serverLicenser = "http://www.artio.net/license-check";
$langDomain = array();
$altDomain = null;
$disableNewSEF = "0";
$dontRemoveSid = "0";
$setQueryString = "1";
$parseJoomlaSEO = "1";
$customNonSef = "";
$jfBrowserLang = true;
$jfLangCookie = true;
$jfSubDomains = array();
$contentUseIndex = "0";
$checkJunkUrls = "1";
$junkWords = "http:// http// https:// https// www. @";
$junkExclude = "";
$preventNonSefOverwrite = "1";
$mainLanguage = 0;
$allowUTF = "0";
$numberDuplicates = "0";
$artioUserName = "";
$artioPassword = "";
$artioDownloadId = "";
$trace = "0";
$traceLevel = "3";
$autoCanonical = "1";
$sefComponentUrls = "0";
$versionChecker = "1";
$tag_generator = "";
$tag_googlekey = "";
$tag_livekey = "";
$tag_yahookey = "";
$customMetaTags = array();
$wwwHandling = "0";
$enable_metadata = "1";
$metadata_auto = "1";
$prefer_joomsef_title = "1";
$use_sitename = "2";
$sitename_sep = "-";
$rewrite_keywords = "1";
$rewrite_description = "1";
$prevent_dupl = "1";
$check_base_href = "1";
$sitemap_changed = true;
$sitemap_filename = "sitemap";
$sitemap_indexed = false;
$sitemap_frequency = "weekly";
$sitemap_priority = "0.5";
$sitemap_show_date = true;
$sitemap_show_frequency = true;
$sitemap_show_priority = true;
$sitemap_pingauto = true;
$sitemap_yahooId = "";
$sitemap_services = array('0' => "http://blogsearch.google.com/ping/RPC2",'1' => "http://rpc.pingomatic.com/");
$external_nofollow = false;
$internal_enable = true;
$internal_nofollow = false;
$internal_newwindow = false;
$internal_maxlinks = 1;
$artioFeedDisplay = "1";
$artioFeedUrl = "http://www.artio.net/joomsef-news/rss";
$fixIndexPhp = "1";
$fixQuestionMark = "1";
$fixDocumentFormat = "0";
$indexPhpCurrentMenu = "1";
$useGlobalFilters = true;
$spaceTolerant = "1";
$redirectJoomlaSEF = "1";
?>