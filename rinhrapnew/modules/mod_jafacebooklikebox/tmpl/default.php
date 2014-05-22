<?php
/**
 * ------------------------------------------------------------------------
 * JA Facebook Like Box Module for Joomla 2.5
 * ------------------------------------------------------------------------
 * Copyright (C) 2004-2011 J.O.O.M Solutions Co., Ltd. All Rights Reserved.
 * @license - GNU/GPL, http://www.gnu.org/licenses/gpl.html
 * Author: J.O.O.M Solutions Co., Ltd
 * Websites: http://www.joomlart.com - http://www.joomlancers.com
 * ------------------------------------------------------------------------
 */

// no direct access
defined('_JEXEC') or die('Restricted accessd');

echo '<iframe src="http://www.facebook.com/plugins/likebox.php?'.$sFacebookQuery.'"
		scrolling="no" frameborder="0"
		style="
		overflow:hidden;
		width:'.$aParams['width'].'px;
		height:'.$aParams['height'].'px; allowTransparency: true;"></iframe>';
?>