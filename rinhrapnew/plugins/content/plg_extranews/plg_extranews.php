<?php
/**
 * @version		$Id: Extranews.php 20196 2011-01-09 02:40:25Z ian $
 * @package		Joomla
 * @subpackage	Content
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die;

jimport('joomla.plugin.plugin');

/**
 * Extranews Content Plugin
 *
 * @package		Joomla
 * @subpackage	Content
 * @since		1.5
 */
class plgContentPlg_extranews extends JPlugin
{
	var $type, $term, $IsIphone = false, $extranewsOn, $catid;
	var $mainframe, $doc;
	
	public function __construct(& $subject, $config)
	{  
		parent::__construct($subject, $config);    
		$this->mainframe = & JFactory::getApplication();
		$this->doc = & JFactory::getDocument();
		if(strpos($_SERVER['HTTP_USER_AGENT'], 'iPhone') || strpos($_SERVER['HTTP_USER_AGENT'], 'iPod')) $this->IsIphone = true;
		$this->extranewsOn = true;
		$this->type = 'n';
		$this->catid = -1;
		$this->term = null;
		if (JPlugin::loadLanguage('plg_content_extranews')) ;  //Call language file 
        else JPlugin::loadLanguage('plg_content_extranews', JPATH_ADMINISTRATOR);
	}	
  
	function sized_image($article, $w=90, $h=68)
	{
		$w = (int) $w;
		$h = (int) $h;
		$rootpath = JPATH_SITE.DS.'images'.DS;
		$imagefolder = 'plg_imagesized';
		
		if(!file_exists($rootpath.$imagefolder)) $this->make_folder($rootpath,$imagefolder);
		
		$urlbaseimage = JURI::base(true).'/images/' . $imagefolder . '/';
		$articleImag = $this->search_extranews_image( $article->introtext );
		if( $articleImag == '' ) $articleImag= $this->search_extranews_image( $article->fulltext );
		
		if($articleImag){			
			$filepart = explode('/', $articleImag);
			$filename  = array_pop($filepart);
			$thumb = "thumb_{$w}_{$h}_".$filename;
			$thenewimg = $rootpath.$imagefolder.DS.$thumb;
			$imgx = $this->extranews_image_fixlink($articleImag);
			if(!file_exists($thenewimg) && $this->isimage($imgx) ){
				/*******Load class SimpleImage****************************************************/
				   if (!class_exists('SimpleImage'))
				   ////plg_imagesized
					  include(JPATH_SITE.DS.'plugins'.DS.'content'.DS.'plg_extranews'.DS.'lib'.DS.'simpleimage.php');
				/*********************************************************************************/  			
				$image = new SimpleImage();								 
				$image->load($imgx);
				$image->resize($w,$h);
				$returnvalue = $image->save($thenewimg);
				if(!$returnvalue)return $articleImag;
			}
			if(file_exists($thenewimg)) $articleImag= $urlbaseimage.$thumb;
		}
				
		return $articleImag;		
	}

	/**
	 * Searches for all images inside a text and returns the first one found
	 *
	 * @param string $content
	 * @return string
	 */
	function search_extranews_image( $content )
	{		
		preg_match_all("#\<img(.*)src\=\"(.*)\"#Ui", $content, $mathes);		
		return isset($mathes[2][0]) ? $mathes[2][0] : '';			
	}	

	function extranews_image_fixlink($articleImag){
		if(strpos($articleImag, 'http://') === 0) return $articleImag; 
		else return (JPATH_SITE.DS.str_replace('/',DS,$articleImag));
	}
	function isimage($imageurl)  //Write to a log file for checking what has been done
	{
		return in_array(strtolower(substr(strrchr($imageurl, "."), 1)), array('gif','jpg','png','jpeg'));
	} 

	function strip_newline($text){
	//strip \r\n
	$order = array("\r\n","\n","\r");
	//$replace = '<br />';
	$replace = ' ';
	$text=str_replace($order,$replace,$text);
	return $text;
	}

		  
	function removetag($string){
		  $pattern = "|{[^}]+}(.*){/[^}]+}|U";
		  $replacement = '';
		  return preg_replace($pattern, $replacement, $string);
	}


/***************************************************************************************************/	  

	/**
	 * Extranews prepare content method
	 *
	 * Method is called by the view
	 *
	 * @param	string	The context of the content being passed to the plugin.
	 * @param	object	The content object.  Note $article->text is also available
	 * @param	object	The content params
	 * @param	int		The 'page' number
	 * @since	1.6
	 */
	public function onContentBeforeDisplay($context, &$article, &$params, $limitstart = 0) //onContentPrepare //onContentBeforeDisplay
	{
		$option     = JRequest::getCmd('option'); //JRequest::getCmd
		$document = & JFactory::getDocument();
		$view    = JRequest::getCmd('view'); //JRequest::getCmd
		$plugin_enabled = $this->params->get('enabled','1');
		
		$regex = "#{extranews\s*(.*?)}(.*?){/extranews}#s";
		if($this->doc->gettype()=='pdf' || !$plugin_enabled){
			$article->text = preg_replace($regex, '', $article->text);
			return;
		}

		if($plugin_enabled && $option=="com_content" && $view=="article"){

			$this->extranewsOn = true;
			//Category
			$render_method = $this->params->get("render_method", 0);
			$render_cat = $this->params->get("render_cat", null);		
			if($render_method && $render_cat) {
				if(!is_array($render_cat)) $render_cat = array($render_cat);
				if($render_method == 1) $this->extranewsOn = in_array($article->catid, $render_cat);
				else $this->extranewsOn = !in_array($article->catid, $render_cat);
			}
		
			if (preg_match_all($regex, $article->text, $matches, PREG_SET_ORDER) > 0) {
				foreach ($matches as $match) {
					$match[2] = trim(strip_tags($match[2]));
					$theparams = & JUtility::parseAttributes(htmlspecialchars_decode(trim(strip_tags($match[1])))); //parameters
					$nitems = isset($theparams["items"])?$theparams["items"]:1;
					$title = isset($theparams["title"])?$theparams["title"]:'';
					$this->catid = isset($theparams["catid"])?$theparams["catid"]:-1;
					$this->term = isset($theparams["term"])?$theparams["term"]:null;
					
					$replace = '';
					switch($match[2]) {
						case 'off':
							
							$this->extranewsOn = false;
							$article->text = preg_replace($regex, '', $article->text);
							//return;						
						break;
						case 'related':
						case 'newer':
						case 'older':
						case 'latest':
						case 'random':
						case 'popular':
							$this->type = $match[2][0]; 
							if($match[2] == 'random') $this->type = 'm';
							$article->text = preg_replace($regex, '<!--noparsing-->'.$this->built_news_list($article,$nitems,$title).'<!--/noparsing-->', $article->text, 1);
							JHTML::_('behavior.tooltip');
							/* add styles and scripts */ 
							$document->addStyleSheet(JURI::base() . 'plugins/content/plg_extranews/css/extranews.css');						
						break;
					}					
				}
			}
		
			if($this->extranewsOn){
				
				//$tooltip_width = 320;

				//$initial_tooltip_css ='.tip { max-width: '.$tooltip_width.'px;}';

				//$document->addStyleDeclaration($initial_tooltip_css);
				//$toolTipArray = array('className'=>'tipextranews');
				//JHTML::_('behavior.tooltip', '.TipExtranews', $toolTipArray);
				JHTML::_('behavior.tooltip');
				/* add styles and scripts */ 
				$document->addStyleSheet(JURI::base() . 'plugins/content/plg_extranews/css/extranews.css');				
				$content = '';

				$showextranews = $this->params->get('showextranews', 'r,n,o');
				if(strpos($showextranews,',')>0) $showextranews = explode(',',$showextranews); else $showextranews = array($showextranews);
				
				foreach($showextranews as $thenews) switch($thenews){
					case 'r':
					case 'n':
					case 'l':
					case 'o':
					case 'm': //Random
					case 'p': //Most read
						$this->type = $thenews;
						$content .= $this->built_news_list($article);
					break;
					default: $content .= '';			
				}
				//assigned content
				if($content) //str_replace(array('{','}'),array('<','>'),$this->params->get( 'textbefore', ''))
				$article->text .= '<div class="extranews_separator"></div>' . $content;
			}
		}
	}
	function built_news_list(& $article, $numitems = false, $overidetitle = false) {
		$listtitle = array('n'=>JText::_('LBL_NEWERNAME'), 'o'=>JText::_('LBL_OLDERNAME'),'r'=>JText::_('LBL_RELATEDNAME'),'l'=>JText::_('LBL_LATESTNAME'),'m'=>JText::_('LBL_RANDOMNAME'), 'p'=>JText::_('LBL_HITNAME'));
		$listclass = array('n'=>'newer', 'o'=>'older','r'=>'related','l'=>'newer', 'm'=>'random', 'p'=>'popular');
		$type = $this->type;
		$content = '';
		if ($type == 'l') $heading = $this->params->get("n_heading",'h3');
		else $heading = $this->params->get("{$type}_heading",'h3'); 
		
		if(!$overidetitle) $overidetitle = $listtitle[$type];

		
		if($ItemsList = $this->ExtranewsItems($article,$numitems)){	
			$content .= '<div class="extranews_box"><'.$heading.'><strong>'.JText::_($overidetitle).'</strong></'.$heading.'><div class="extranews_'.$listclass[$type].'"><ul class="'.$listclass[$type].'">';
			$tooltip = $this->params->get("{$type}_enable_tooltip",'1'); 
			foreach($ItemsList as $item){
						$content .= '<li>'.$this->built_tooltip($item, $tooltip).'</li>';
			}
			$content .= '</ul></div></div>';
		}
		return $content;
		
	}
	function built_tooltip(& $item, $tooltip = '1')
	{
		if($this->type == 'l') $type = 'n'; else $type = $this->type;
		
		$title = JText::sprintf($this->params->get($type.'_linkedtitleformat','%1$s - %2$s - %3$s'), $item['title'], '<span class="extranews_date">'.$item['date'].'</span>','<span class="extranews_hit">'.$item['hits'].'</span>');
		$t_content = '<p class="'.$this->params->get($type.'_textalign','extranews_justify').'">'.$item['intro'].'</p>'; 
		$img_align = $this->params->get($type.'_imgalign','icenter');
		$img = ''; 
		if($item['img']) $img = '<img src="'.$item['img'].'" alt="" class="iextranews '.$img_align.'" />';

		if($img_align == 'icenter2') $t_content = $t_content.'<pan class="extranews_clear"></span>'.$img;
		else $t_content = $img.$t_content;
		if($tooltip=='1') return JHTML::tooltip($t_content, $item['title'], '', $title, $item['link']);
		else return '<a href="'.$item['link'].'" title="'.$item['title'].'">'.$title.'</a>';
	}

	function ExtranewsItems(&$article, $article_items = null) 
	{
		//$type
		//o: older news
		//n: newer news
		//r: related news
		//l: latest news -> newer
		$type = $this->type;
		if($type == 'l') $type= 'n';
		$nitems 		= $this->params->get ($type.'_items',7);
		if($article_items) $nitems = (int) $article_items;
		$ordering 		= $this->params->get ($type.'_ordering',5);// 1 = ordering | 2 = popular | 3 = random 
		$chars 			= $this->params->get ($type.'_chars',150);
		$allow_tags		= $this->params->get ($type.'_allow_tags');
		$allow_tags = str_replace(" />", ">", $allow_tags);			
		$date_format	= $this->params->get ($type.'_dateformat',' (Y-m-d H:m)');
		$time_zone	= $this->params->get ('timezone',1); //0: Global 1: User timezone
		
		$imgW 		= $this->params->get ($type.'_imgw',90);
		$imgH 		= $this->params->get ($type.'_imgh',68);
		
		/* prepare database */
		$db			=& JFactory::getDBO();
		$user		=& JFactory::getUser();
		$userId		= (int) $user->get('id');
		
		$aid		= $authorised = JAccess::getAuthorisedViewLevels($userId); //JFactory::getUser()->get('id')
		//$authorised = JAccess::getAuthorisedViewLevels((int) $user->get('id'));
		$contentConfig = & JComponentHelper::getParams( 'com_content' );
		$access		= ! JComponentHelper::getParams('com_content')->get('show_noauth');
		$nullDate	= $db->getNullDate();
		$date =       & JFactory::getDate();
		$now =         $date->toMySQL(); //date('Y-m-d H:i:s');
		//JError::raiseWarning(500, $db->Quote($now));
		
		//$app =& JFactory::getApplication();
		$config =& JFactory::getConfig();
		if($time_zone) $offset = $user->getParam('timezone');
		else $offset = $config->getValue('config.offset');
		
		//$date = JFactory::getDate();
		///$date =& JFactory::getDate();
		//JError::raiseWarning(500, $article->catid );
		if ($this->catid < 0) $catid = $article->catid; else $catid = $this->catid;
		$where		= 'a.state = 1'
			. ' AND ( a.publish_up = '.$db->Quote($nullDate).' OR a.publish_up <= '.$db->Quote($now).' )'
			. ' AND ( a.publish_down = '.$db->Quote($nullDate).' OR a.publish_down >= '.$db->Quote($now).' )'
			;
		
		$where .= ' AND a.id !='.$article->id;
		if($this->catid != 'all'){
			
			if(strpos($this->catid, ',') > 0) {
				$catlist = explode ( ',' , $this->catid);
					for($i = 0; $i < count($catlist); $i++) $catlist[$i] = intval($catlist[$i]);
				$where .= ' AND cc.id IN (' . implode ( ',' , $catlist).')';				
				}
			else $where .= ' AND cc.id = '. (int)$catid;
		}
		
		//JError::raiseWarning(500, $catid );

		/* set items order */
		$ord = array(
			1=>'ordering',
			2=>'hits',
			3=>'RAND()',
			4=>'created ASC',
			5=>'created DESC'
		);
			$order = $ord[$ordering];

		switch ($this->type){
			case 'n':
				$where .= ' AND a.created >= '.$db->Quote($article->created);
				$ordering = 4;
				$order = $ord[$ordering];
			break;				
			case 'l':
				$ordering = 5;
				$order = $ord[$ordering];
			break;
			case 'o':
			$where .= ' AND a.created <= '.$db->Quote($article->created);
			break;
			case 'm'://Random
				$ordering = 3;
				$order = $ord[$ordering];
			break;
			case 'p'://Most read - hits
				$ordering = 2;
				$order = $ord[$ordering] . ' DESC';
			break;			
			case 'u'://User
				$ordering = 3;
				$order = $ord[$ordering];
			break;			
			case 'r':
				$likes = array();

				if(is_null($this->term) && empty($article->metakey)) return null;
				if($this->term) $keys = explode( ',', $this->term );
				else $keys = explode( ',', $article->metakey );
				// assemble any non-blank word(s)
				foreach ($keys as $key) {
					$key = trim( $key );
					if ($key) {
						$likes[] = $db->getEscaped( $key );
					}
				}
				//JError::raiseWarning(500, print_r($keys,true));
				$where .= " AND ( a.metakey LIKE '%" . implode( "%' OR a.metakey LIKE '%", $likes ) ."%' )";

			default:
		}

		//JError::raiseWarning(500,$this->extranewsOn.' xxx '.$this->type. ' '.$article->metakey);
		/* get items */
		$sql = 	'SELECT a.*, ' .
				' CASE WHEN CHAR_LENGTH(a.alias) THEN CONCAT_WS(":", a.id, a.alias) ELSE a.id END as slug,'. 
				' CASE WHEN CHAR_LENGTH(cc.alias) THEN CONCAT_WS(":", cc.id, cc.alias) ELSE cc.id END as catslug,'.
				'cc.title as cattitle'.
		
				' FROM #__content AS a' .
				' INNER JOIN #__categories AS cc ON cc.id = a.catid' .
				' WHERE '. $where .'' .
				($access ? ' AND a.access <= ' .(int) $aid. ' AND cc.access <= ' .(int) $aid : '').
				' AND cc.published = 1' .
				' ORDER BY '.$order .' LIMIT 0,'.$nitems.'';
		if($this->type =='n') $sql = "SELECT * FROM ({$sql}) as b ORDER by b.created DESC";
		//if() JError::raiseWarning(500,$this->type.'  : '.$article->metakey. $sql); 
		$db->setQuery( $sql );
		
		//JError::raiseWarning(500, $sql );
		$loaded_items = $db->loadObjectList();
		
		$extranews_items =array();
		foreach ( $loaded_items as $item ) {
			//$item->slug = $item->id.':'.$item->alias;
			//$item->catslug = $item->catid.':'.$item->category_alias;

			if ($access || in_array($item->access, $authorised)) {
				// We know that user has the privilege to view the article
				$item->link = JRoute::_(ContentHelperRoute::getArticleRoute($item->slug, $item->catslug));
			} else {
				$item->link = JRoute::_('index.php?option=com_users&view=login');
			}
			$intro = trim($this->removetag(strip_tags($item->introtext,$allow_tags)));
			if(strlen($intro)>$chars) $intro = JString::substr($intro,0,$chars) . ' &hellip;';
			$extranews_item = array( //Offset TIME
					'date' 	=> JHTML::_('date', $item->created,JText::_($date_format),$offset),
					'intro' 	=> $intro,
					'link' 	=> htmlspecialchars($item->link, ENT_QUOTES, 'UTF-8'),
					'img' 		=>$this->sized_image($item, $imgW,$imgH),
					'title' 	=> htmlspecialchars($item->title, ENT_QUOTES, 'UTF-8'),
					'id'	 	=> $item->id,
					'hits'	 	=> JText::sprintf(JText::_('LBL_HITSTRING'),$item->hits), //LBL_HITSTRING
					'ctitle' 	=> htmlspecialchars($item->cattitle, ENT_QUOTES, 'UTF-8')
				);
					//JError::raiseWarning(500, $item->link.' : '.$item->hits);
				$extranews_items[] = $extranews_item;				
			}			
		return $extranews_items;			
	} 
private function make_folder($rootpath, $imagefolder, $chmod = 0755){
	$folders = explode(DS,$imagefolder);         
	$tmppath = $rootpath;
	for($i=0;$i <= count($folders)-1; $i++){
        if(!file_exists($tmppath.$folders[$i])) {
		if(!mkdir($tmppath.$folders[$i],$chmod)) return 0; //can not create folder
	} //Folder exist
        $tmppath = $tmppath.$folders[$i].DS;
        //make a blank content
        $ffilename = $tmppath . 'index.html';
	        if(!file_exists($ffilename)){
	                $filecontent = '<html><body bgcolor="#FFFFFF"></body></html>';
	                $handle = fopen($ffilename, 'x+');
	                fwrite($handle, $filecontent);
	                fclose($handle);  
	        }       
        }
	return 1;
}	
	/*
	public function onContentAfterDisplay($context, &$article, &$params, $limitstart)
	{
		$app = JFactory::getApplication();

	}	// End Function
	*/
}