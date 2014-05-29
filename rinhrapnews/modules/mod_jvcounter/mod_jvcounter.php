<?php
/**
 # Module		JV Counter
 # @version		3.0.1
 # ------------------------------------------------------------------------
 # author    Open Source Code Solutions Co
 # copyright Copyright © 2008-2012 joomlavi.com. All Rights Reserved.
 # @license - http://www.gnu.org/licenses/gpl-3.0.html GNU/GPL or later.
 # Websites: http://www.joomlavi.com
 # Technical Support:  http://www.joomlavi.com/my-tickets.html
-------------------------------------------------------------------------*/
// No direct access to this file
defined( '_JEXEC' ) or die( 'Restricted access' );

if(class_exists('plgSystemJVCounter')){
   require_once dirname(__FILE__) . '/helper.php';

    $visits = modJVCounterHelper::getVisits($params);
    $totalImage = modJVCounterHelper::getTotalImage($params,(int)$visits['total']);    
    $template = $params->get('template','default');
    $count	= modJVCounterHelper::getOnlineCount();
    require JModuleHelper::getLayoutPath('mod_jvcounter',$template);
}else{
    echo 'Please install plugin JVCounter!';
}

?>