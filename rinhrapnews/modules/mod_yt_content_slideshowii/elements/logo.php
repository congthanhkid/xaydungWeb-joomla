<?php

/*------------------------------------------------------------------------
 # Yt Content Slick Slider  - Version 1.0
 # ------------------------------------------------------------------------
 # Copyright (C) 2009-2010 The YouTech Company. All Rights Reserved.
 # @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 # Author: The YouTech Company
 # Websites: http://addon.ytcvn.com
 -------------------------------------------------------------------------*/




// Check to ensure this file is within the rest of the framework

defined('JPATH_BASE') or die();



/**

* Renders the TC logo

*

* @package Joomla.Framework

* @subpackage Parameter

* @since 1.5

*/



class JElementLogo extends JElement

{

/**

* Element name

*

* @access protected

* @var string

*/

var $_name = 'Logo';



function fetchTooltip($label, $description, &$node, $control_name, $name) {

return '&nbsp;';

}



function fetchElement($name, $value, &$node, $control_name)

{

if ($value) {

return JText::_($value);

} else {

return '<img border="0" src="../modules/mod_ytc_content_slideshow/elements/logo.png"  title="Ytc Content Slideshow Module" alt="Ytc Content Slideshow Module">';

}

}

}