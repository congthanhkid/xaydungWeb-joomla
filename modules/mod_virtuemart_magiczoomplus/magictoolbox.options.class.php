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


@ini_set('memory_limit', '512M');

if(!function_exists('lcfirst')) {
    function lcfirst($str) {
        $str[0] = strtolower($str[0]);
        return $str;
    }
}

if(!function_exists('htmlspecialchars_decode')) {
    function htmlspecialchars_decode($string,$style=ENT_COMPAT) {
        $translation = array_flip(get_html_translation_table(HTML_SPECIALCHARS,$style));
        if($style === ENT_QUOTES){ $translation['&#039;'] = '\''; }
        return strtr($string,$translation);
    }
}

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

if(!in_array('MagicToolboxOptions', get_declared_classes())) {

    class MagicToolboxOptions {

        var $profiles;
        var $cur;
        var $tool;

        function MagicToolboxOptions($tool = '') {
            $this->profiles = array();
            $this->profile('default');
            $this->tool = $tool;
        }

        function resolveProfileName($name = null) {
            return $name == null ? $this->cur : $name;
        }

        function profile($name) {
            $this->cur = $name;
            if(!isset($this->profiles[$this->cur])) {
                $this->profiles[$this->cur] = array();
            }
        }

        function exists($name, $profile = null) {
            $profile = $this->resolveProfileName($profile);
            return isset($this->profiles[$profile][$name]);
        }

        function get($name, $profile = null) {
            $profile = $this->resolveProfileName($profile);
            if($this->exists($name, $profile)) {
                if(isset($this->profiles[$profile][$name]['value'])) {
                    return $this->profiles[$profile][$name]['value'];
                } else if($profile == 'default') {
                    return $this->profiles[$profile][$name]['default'];
                } else {
                    return $this->get($name, 'default');
                }
            } else if($profile == 'default') {
                return null;
            } else {
                return $this->get($name, 'default');
            }
        }

        function values($name) {
            if($this->exists($name, 'default') && isset($this->profiles['default'][$name]['values'])) {
                return $this->profiles['default'][$name]['values'];
            } else {
                return null;
            }
        }

        function set($name, $value, $profile = null) {
            $profile = $this->resolveProfileName($profile);
            $this->profiles[$profile][$name]['value'] = $value;
            return $value;
        }

        function all($profile = null) {
            $profile = $this->resolveProfileName($profile);
            return $this->profiles[$profile];
        }

        function append($options, $profile = null) {
            $profile = $this->resolveProfileName($profile);
            $this->profiles[$profile] = array_merge($this->profiles[$profile], $options);
            return $this->profiles[$profile];
        }

        function check($name, $value = false, $profile = null) {
            if(!is_array($value)) $value = array($value);
            return in_array(strtolower($this->get($name, $profile)), array_map('strtolower', $value));
        }

        function ini($file, $profile = null) {
            if(!file_exists($file)) return false;
            $ini = file($file);
            foreach($ini as $num => $line) {
                $line = trim($line);
                if(empty($line) || in_array(substr($line, 0, 1), array(';','#'))) continue;
                $cur = explode('=', $line);
                if(count($cur) != 2) {
                    error_log("WARNING: You have errors in you INI file ({$file}) on line " . ($num+1) . "!");
                    continue;
                }
                $this->set(trim($cur[0]), trim($cur[1]), $profile);
            }
            return true;
        }

        function unserialize($str, $profile = null) {
            preg_match_all("/([a-z_\-]+):([^;]*)/ui", $str, $matches);
            if(count($matches[1]) > 0) {
                $options = array_combine($matches[1], $matches[2]);
                foreach($options as $name => $value) {
                    $this->set($name, $value, $profile);
                }
            }
            return true;
        }

        function serialize($profile = null, $script = false) {
            $str = array();
            foreach($this->all('default') as $p) {
                if((!isset($p['scope']) || empty($p['scope']) || $p['scope'] != 'tool' || !$this->exists($p['id'])) || $this->check($p['id'], $this->get($p['id'], 'default'), $profile)) {
                    continue;
                }
                $value = $this->get($p['id'], $profile);
                if(!$script) {
                    $str[]= $p['id'] . ':' . $value;
                } else {
                    switch($p['type']) {
                        case 'float':
                        case 'num':
                            if($value != 'auto') break;
                        case 'text':
                        default:
                            if(in_array($value, array('false', 'true', 'yes', 'no', 'Yes', 'No'))) break;
                            $value = '\'' . $value . '\'';
                    }
                    $str[]= '\'' . $p['id'] . '\':' . $value;
                }
            }
            $str = join($script ? ',' : ';', $str);
            $str = str_replace('Yes', 'true', $str);
            $str = str_replace('No', 'false', $str);
            return $str;
        }

    }
}
