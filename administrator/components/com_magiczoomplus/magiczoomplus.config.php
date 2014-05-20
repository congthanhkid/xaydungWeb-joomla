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

require_once dirname(__FILE__).'/../../../modules/mod_virtuemart_magiczoomplus/magiczoomplus.module.core.class.php';

$magictoolClass = 'MagicZoomPlusModuleCoreClass';
$magictool = new $magictoolClass;

$pages = array(
    'default' => 'Default values',
    'browse' => 'Category browse page',
    'details' => 'Product details page',
    'latest' => 'Latest products module',
    'featured' => 'Featured products module',
    'random' => 'Random products module',
    'custom' => 'Custom Magic Zoom Plus'
);

$profiles = new ps_DB;

$profileId = false;
isset($_GET['profile']) && $_GET['profile'] && $profileId = intval($_GET['profile']);

$vmmodules = new ps_DB;
$query = "SELECT module FROM #__modules WHERE module in ('mod_virtuemart_latestprod','mod_virtuemart_featureprod','mod_virtuemart_randomprod')";
$vmmodules->query($query);
$_modules = array(
    'mod_virtuemart_randomprod' => '\'random\'',
    'mod_virtuemart_featureprod' => '\'featured\'',
    'mod_virtuemart_latestprod' => '\'latest\'',
);
if($magictool->type == 'category' || $magictool->type == 'circle') {
    $modules = array("'default'","'details'");
} else {
    $modules = array("'default'","'browse'","'details'");
}

while($vmmodules->next_record()){
    $m = mz_get_row($vmmodules);
    $modules[] = $_modules[$m->module];
}
if($magictool->type == 'category' || $magictool->type == 'circle') {
    $modules[] = '\'custom\'';
}

//print_r($modules); die();

$query = "SELECT * FROM #__{vm}_magiczoomplus_config WHERE profile IN (" . implode(',', $modules) . ")".($profileId?(' AND id in (1, '.$profileId.')'):'');
$profiles->query($query);

if($profileId && $profileId != 1 && $profiles->num_rows() < 2){
    mz_redirect($_SERVER['HTTP_REFERER'],'Profile not found');
}

$configs = array();
while($profiles->next_record()){
    $profile = mz_get_row($profiles);
    $configs[] = array('id' => $profile->id,'name'=>$profile->profile,'params' => mz_parseProfile($profile->config));
    $magictool->params->unserialize($profile->config, $profile->profile);
}

if($profileId && $profileId == 1) {
    $configs[] = $configs[0];
}

$defaults = array();
foreach($magictool->params->getArray() as $param){

    if(!defined('_JEXEC') && $param['id'] == 'preserve-lightbox') continue;
    if($param['id'] == 'disable-zoom' || $param['id'] == 'disable-expand') continue;
    if($param['id'] == 'direction' && $param['scope'] == 'MagicScroll') continue;

    if(isset($param['group'])){
        $group = $param['group'];
    } else if(isset($param['scope'])){
        $group = $param['scope'];
    } else {
        $group = 'other';
    }

    if(!isset($param['value'])) {
        $param['value'] = $param['default'];
    }

    $defaults[$group]['params'][] = $param;
    $defaults[$group]['id']       = str_replace(array('_',' '),'-',strtolower($group));
    $defaults[$group]['alias']    = ucwords(str_replace('_',' ',$group));
}

echo mz_inlineCss('config');
?>
<style>
    .red {
        color: red !important;
    }
    .green {
        color: green !important;
    }

    .hidden {
        display: none;
    }
</style>
<h2>
    Magic Zoom Plus profile configuration
    <?php if($profileId !== false) {
        echo ' - ' . $pages[$configs[1]['name']];
//        echo ' - '.ucwords(str_replace('_',' ',$configs[0]['name']));
    }?>
</h2>
<?php /*<p>Move mouse over parameter to see it's description</p>*/ ?>

<div style="float:none; margin: 5px; ">
    <?php if($profileId !== false) {
        include_once 'magiczoomplus.config.edit.php';
                                                } else {
        include_once 'magiczoomplus.config.view.php';
    }?>
            </div>
<script type="text/javascript">
if (window.console === undefined) {
    window.console = {
        log: function () {},
        debug: function () {}
    };
}

Cookie = {
    set: function(name, value, expires, path, domain, secure) {
          document.cookie = name + "=" + escape(value) +
            ((expires) ? "; expires=" + expires : "") +
            ((path) ? "; path=" + path : "") +
            ((domain) ? "; domain=" + domain : "") +
            ((secure) ? "; secure" : "");
        },

    get: function(name) {
        var cookie = " " + document.cookie;
        var search = " " + name + "=";
        var setStr = null;
        var offset = 0;
        var end = 0;
        if (cookie.length > 0) {
            offset = cookie.indexOf(search);
            if (offset != -1) {
                offset += search.length;
                end = cookie.indexOf(";", offset)
                if (end == -1) {
                    end = cookie.length;
                }
                setStr = unescape(cookie.substring(offset, end));
            }
        }
        return(setStr);
    }
}


function GroupOptions (){
    this.total      = 0;
    this.hidden     = 0;
};

function SearchTarget(elem) {
    //console.log('Construct')
    this.elem = elem;
    this.index = [];

    this.init();
}

SearchTarget.prototype.init = function () {
    this.initGroup();
}

SearchTarget.prototype.initGroup = function () {
    if(!this.getGroupNode().options){
        this.getGroupNode().options = new GroupOptions();
    }

    this.getGroupNode().options.total++;
};

SearchTarget.prototype.getParentNode = function () {
    return this.elem.parentNode.parentNode;
};

SearchTarget.prototype.getGroupNode = function () {
    return this.elem.parentNode.parentNode.parentNode.parentNode.parentNode;
};

SearchTarget.prototype.updateIndex = function () {
    this.index = [];

    this.index.push(this.getTitle());
    this.index.push(this.getText());

    return this;
};

SearchTarget.prototype.getTitle = function () {
    return this.getParentNode().title;
};

SearchTarget.prototype.getText = function () {
    return this.elem.childNodes[0].textContent;
};

SearchTarget.prototype.getSearchData = function () {
    if (!this.index.length) {
        this.updateIndex();
    }
    return this.index.join(' ');
};

SearchTarget.prototype.hide = function () {
    if (!this.getParentNode().className.match(/hidden/)) {
        this.getParentNode().className += ' hidden';
    }

    this.hideGroup();
};

SearchTarget.prototype.show = function () {
    this.getParentNode().className = this.getParentNode().className.replace(' hidden', '');

    this.showGroup();
};

SearchTarget.prototype.showGroup = function () {
    var group = this.getGroupNode();
    group.options.hidden = 0;

    group.className = group.className.replace(' hidden', '');
}

SearchTarget.prototype.hideGroup = function () {
    var group = this.getGroupNode();
    group.options.hidden++;

    if(group.options.hidden == group.options.total && !group.className.match(/hidden/)){
        group.className += ' hidden';
    }
}

SearchCollection    = {
    elements    :[],
    matchesElem : null,
    searchElem  : null,

    lastCheck   :  new Date(),
    delay       :  400,//ms
    waiting     :  0,

    matches     :  0,
    key         : 'mz-search-query'
}

SearchCollection.init = function(){
    this.matchesElem = document.getElementById('search-matches');
    this.searchElem = document.getElementById('search-query');

    if(!this.matchesElem || !this.searchElem) return;

    var query = Cookie.get(this.key);
    if(query){
        this.keyCallback(query, false);
        this.searchElem.value = query;
    }

    var targets = document.getElementsByTagName('b');
    for (var i in targets) {
        if (typeof(targets[i]) === 'object' && targets[i].className === 'search-target' && targets[i].tagName.toLowerCase() === 'b') {
            SearchCollection.push(targets[i]);
}
    }
}

SearchCollection.push = function (el) {
        if (typeof(el) === 'object') {
            if (!(el instanceof SearchTarget)) {
                el = new SearchTarget(el);
            }
            this.elements.push(el);
        }
    };

SearchCollection.filter = function (text, delayed) {
        this.matches = 0;
        if (delayed === undefined) {
            delayed = '';
        } else {
            delayed = ', Delayed search';
        }

        //console.log('Searching: ' + text + delayed);
        if (text === '') {
            text = '-';
        }
        var reg = new RegExp(text.replace(/[^a-z0-9]/gi, '.*'), 'i');
        console.log(reg);

        for (var i in this.elements) if (this.elements[i] instanceof SearchTarget) {
            if (this.elements[i].getSearchData().match(reg)) {
                this.elements[i].show();
                this.matches++;
            } else {
                this.elements[i].hide();
            }
        }

        this.matchesElem.innerHTML = 'Found ' + this.matches + ' parameters';
    };

SearchCollection.checkDate = function () {
        var newDate = new Date(),
            timeDiff = newDate.getTime() - this.lastCheck.getTime(),
            pass = false;

        if (timeDiff > this.delay) {
            this.lastCheck = newDate;
            pass = true;
        }

        return pass;
    };

SearchCollection.keyCallback = function (el, delayed) {
        clearTimeout(this.waiting);
        var text = '';
        if (typeof(el) === 'object') {
            text = el.value;
        } else {
            text = el;
        }

        Cookie.set(this.key, text);

        if (this.checkDate()) {
            this.filter(text, delayed);
        } else {
            var _self = this;
            this.waiting = setTimeout(function () {
                _self.keyCallback(text, true);
            }, this.delay);
        }
};

SearchCollection.init();
</script>
