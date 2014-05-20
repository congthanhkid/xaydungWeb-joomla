<?php

/*------------------------------------------------------------------------
# mod_virtuemart_magiczoomplus - Magic Zoom Plus for Joomla with VirtueMart
# ------------------------------------------------------------------------
# Magic Toolbox
# Copyright 2011 MagicToolbox.com. All Rights Reserved.
# @license - http://www.opensource.org/licenses/artistic-license-2.0  Artistic License 2.0 (GPL compatible)
# Website: http://www.magictoolbox.com/magiczoomplus/modules/virtuemart/
# Technical Support: http://www.magictoolbox.com/contact/
/*-------------------------------------------------------------------------*/

if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' );

if(!function_exists('array_combine')) {
    function array_combine($arr1, $arr2) {
        $out = array();

        $arr1 = array_values($arr1);
        $arr2 = array_values($arr2);

        foreach($arr1 as $key1 => $value1) {
            $out[(string)$value1] = $arr2[$key1];
        }

        return $out;
    }
}

function mz_jimport($path){
    return function_exists('jimport')?jimport($path):_jimport($path);
}

function _jimport($path){
    $path = mz_createPath(MZ_PATH,'lib',explode('.', $path)).'.php';
    require_once $path;
}

function mz_createPath(){
    $args = func_get_args();
    $path = array();
    foreach($args as $ar) if(is_array($ar)){
        $path[] = join(DS,$ar);
    } else {
        $path[] = $ar;
    }
    return join(DS,$path);
}


if(!function_exists('scandir')) {
    function scandir($dir,$listDirectories=true, $skipDots=true) {
        $dirArray = array();
        if ($handle = opendir($dir)) {
            while (false !== ($file = readdir($handle))) {
                if (($file != "." && $file != "..") || $skipDots == true) {
                    if($listDirectories == false) { if(is_dir("$dir/$file")) { continue; } }
                    array_push($dirArray,basename($file));
                }
            }
            closedir($handle);
        }
        return $dirArray;
    }
}

function mz_get($name) {
    return isset($_GET[$name])?$_GET[$name]:false;
}

function mz_inlineCss($name = null) {
    if(!$name) $name = 'magiczoomplus';
    $css = file_get_contents(MZ_PATH.'/css/'.$name.'.css');

    if(!defined('_JEXEC')) {
        $url = $GLOBALS['mosConfig_live_site'];
    } else {
        $url = JURI::base();
    }
    $css = str_replace('{IMAGEURL}', $url . 'components/com_magiczoomplus/image', $css);

    return "<style type=\"text/css\"><!--\n$css\n--></style>";
}

function mz_parseProfile($config='') {
    if(!$config) return false;
    preg_match_all("/([a-z_\-]+):([^;]*)/ui", $config, $matches);

    return array_combine($matches[1], $matches[2]);
}

function mz_serializeProfile($config = false) {
    if(!$config || !count($config)) return false;

    $str = array();
    foreach($config as $key => $value) {
        $str[]="$key:$value";
    }
    return join(';',$str);
}

function mz_installed() {
    $install_file = MZ_PATH.'/install.php';
    return !file_exists($install_file);
}

function mz_vm_installed() {
    $install_file = MZ_PATH.'/../com_virtuemart/compat.joomla1.5.php';
    return file_exists($install_file);
}

function mz_selectList($arr,$selected = false,$htmlOptions = array(),$options = array()) {
    if(isset($options['name_as_value'])) {
        $options['name_as_value'] = true;
    } else {
        $options['name_as_value'] = false;
    }

    $htmlOptions_new = array();
    if(is_array($htmlOptions)) {
        foreach($htmlOptions as $name => $opt) {
            $htmlOptions_new[$name] = "$name = \"$opt\"";
        }
        $htmlOptions = join(' ',$htmlOptions_new);
    } else {
        $htmlOptions = '';
    }

    $html[] = '<select '.$htmlOptions.'>';
    foreach($arr as $name => $value) {
        if($options['name_as_value']) {
            $name = $value;
        }
        $html[] = '<option'.($name == $selected?' selected="selected"':'')." value=\"$name\">$value</option>";
    }
    $html[] = '</select>';

    return join("\n",$html);
}

function mz_radioList($arr,$selected = false,$htmlOptions = array(),$options = array()) {
    if(isset($options['name_as_value'])) {
        $options['name_as_value'] = true;
    } else {
        $options['name_as_value'] = false;
    }

    $htmlOptions_new = array();
    if(is_array($htmlOptions)) {
        foreach($htmlOptions as $name => $opt) {
            $htmlOptions_new[$name] = "$name = \"$opt\"";
        }
        $htmlOptions = join(' ',$htmlOptions_new);
    } else {
        $htmlOptions = '';
    }

    foreach($arr as $name => $value) {
        if($options['name_as_value']) {
            $name = $value;
        }
        if(in_array(strtolower($value), array('yes', 'no', 'top', 'bottom', 'left', 'right', 'disable', 'enable'))) {
            $value = strtolower($value);
            if($value == 'disable') $value = 'no';
            if($value == 'enable') $value = 'yes';

            if(!defined('_JEXEC')) {
                $url = $GLOBALS['mosConfig_live_site'];
            } else {
                $url = JURI::base();
            }
            $url .= 'components/com_magiczoomplus/image';
            $value = '<img src="' . $url . '/' . $value . '.gif" />';
        }
        $html[] = "<input type=\"radio\" id=\"".md5($htmlOptions.$name)."\" $htmlOptions ".($name == $selected?' checked':'')." value=\"$name\"/><label for=\"".md5($htmlOptions.$name)."\">$value</label>&nbsp;";
    }

    return join("\n",$html);
}

function mz_categoryList($selected = false,$htmlOptions = array(),$options = array()) {
    $categories = new ps_DB();
    $query = "SELECT c.category_id, c.category_name, cr.category_parent_id FROM #__{vm}_category c, #__{vm}_category_xref cr WHERE c.category_id = cr.category_child_id";
    $categories->query($query);

    $res = array(0 => 'All');
    foreach($categories->record as $c) {
        $res[$c->category_id]=$c->category_name;
    }

    return mz_selectList($res,$selected,$htmlOptions,$options);
}

function mz_getPageUrl($from=0,$url='') {
    $params = $_GET;
    $params['from'] = $from;

    $res = array();
    foreach($params as $name => $value) {
        $res[] = $name."=".$value;
    }

    return $url.'?'.join('&',$res);
}
function mz_getPagination($count,$from=0,$url='',$perpage=MZ_PER_PAGE,$maxpages=5) {
    $maxpages >= 3 or $maxpages = 3;

    $from = floor($from/$perpage);

    $pages = ceil($count/$perpage);
    $pages = min(array($pages,$maxpages));

    $start = $from - floor($maxpages/2);
    $start = max(array(0,$start));

    $end = ceil($count/$perpage);
    $end = min(array($start + $pages,$end));

    //$start = $start - ($maxpages - ($end - $start));
    $start = $end - $maxpages;

    $start = max(array(0,$start));

    $onclick = 'this.blur()';

    $html = array();
    $html[] = '<ul id="pagination">';

    if($from != 0) {
        $html[] = '<li><a onclick="'.$onclick.'" href="'.mz_getPageUrl().'">&lt;&lt;</a></li>';
        $html[] = '<li><a onclick="'.$onclick.'" href="'.mz_getPageUrl(($from-1)*$perpage).'">&lt;</a></li>';
    } else {
        $html[] = '<li><span>&lt;&lt;</span></li>';
        $html[] = '<li><span>&lt;</span></li>';
    }

    for($i = $start; $i < $end;$i++) if ($i==$from) {
            $html[] = '<li><span class="selected">'.($i+1).'</span></li>';
        } else {
            $html[] = '<li><a onclick="'.$onclick.'" href="'.mz_getPageUrl($i*$perpage).'">'.($i+1).'</a></li>';
        }

    if($from != $end-1) {
        $html[] = '<li><a onclick="'.$onclick.'" href="'.mz_getPageUrl(($from+1)*$perpage).'">&gt;</a></li>';
        $html[] = '<li><a onclick="'.$onclick.'" href="'.mz_getPageUrl((ceil($count/$perpage)-1)*$perpage).'">&gt;&gt;</a></li>';
    } else {
        $html[] = '<li><span>&gt;</span></li>';
        $html[] = '<li><span>&gt;&gt;</span></li>';
    }
    $html[] = '</ul>';

    return join("\n",$html);
}

function mz_deleteDirRecursive($path) {
    if(file_exists($path)) {
        if(is_dir($path)) {
            foreach(scandir($path) as $file) if(!in_array($file, array('.','..'))) {
                    $nextpath = $path.DS.$file;
                    if(!mz_deleteDirRecursive($nextpath)) {
                        return false;
                    }
                }
            return is_writable($path) && rmdir($path);
        } else {
            return is_writable($path) && unlink($path);
        }
    } else {
        return false;
    }
}

function mz_isUrl($string){
    return preg_match('/^https?:\/\//ui',$string);
}

function mz_redirect($url, $msg = '') {
    if(function_exists('vmRedirect')) {
        return vmRedirect($url, $msg);
    } else {
        return mosRedirect($url, $msg);
    }
}

function mz_resolveImageUrl($string){
    if(!mz_isUrl($string)){
        $string = IMAGEURL.PATH_APPENDIX.DS.basename($string);
    }
    return $string;
}

function mz_resolveImagePath($string){
    if(!mz_isUrl($string)){
        $string = IMAGEPATH.PATH_APPENDIX.DS.basename($string);
    }
    return $string;
}

function mz_YesNo($bool, $isKey = false){
    if(trim($bool) == 'true'){
        $bool = true;
    }
    
    if(trim($bool) == 'false'){
        $bool = false;
    }

    if(!is_bool($bool)) {
        return $bool;
    }

    if($isKey){
        return $bool?'true':'false';
    }

    return $bool?'Yes':'No';
}

function mz_confValueView($value) {
    $value = mz_YesNo($value);
    if($value == 'Yes' || $value == 'enable') {
        return '<span class="yes">' . $value . '</span>';
    }
    if($value == 'No' || $value == 'disable') {
        return '<span class="no">' . $value . '</span>';
    }
    return $value;
}

function mz_YesNoCallback(&$bool, $key, $isKey = false){
    $bool = mz_YesNo($bool, $isKey);
}

function mz_get_row(&$db) {
    return $db->record[$db->row];

}
