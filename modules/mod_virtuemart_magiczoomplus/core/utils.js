function MagicZoomPlusToolVMloadNewPage(el, url) {
    var tool = 'magiczoomplus';

    if(/index2\.php/i.test(url)) {
        url = url.replace(/index2\.php/i,'index.php');
    }

    new Ajax(url+"&magiczoomplustool_vm_only_page=1", {
        method: 'get',
        onComplete: function(responseText) {
            //if(tool=='magicmagnify' || tool=='magicmagnifyplus') MagicMagnify_stopMagnifiers();
            if(tool=='magicmagnify') MagicMagnify.stop();
            if(tool=='magicmagnifyplus') MagicMagnifyPlus.stop();
            magicLightBoxLinks = false;
            $(el).innerHTML = responseText;
            if(tool=='magiczoom') MagicZoom.refresh();
            if(tool=='magiczoomplus') MagicZoomPlus.refresh();
            if(tool=='magicthumb') MagicThumb.refresh();
            //if(tool=='magicmagnify' || tool=='magicmagnifyplus') MagicMagnify_findMagnifiers();
            if(tool=='magicmagnify') MagicMagnify.start();
            if(tool=='magicmagnifyplus') MagicMagnifyPlus.start();
        }
    }).request();
}

var magicLightBoxLinks = false;

function magicLightBox(a) {
    if(magicLightBoxLinks == false) {
        magicLightBoxLinks = [];
        var shouldAddMainImage = true;
        $each(document.links, function(el) {
            if(!(/MagicZoom/.test(el.className)) && el.rel == a.id) {
                magicLightBoxLinks.push([el.href, el.title, el.getAttribute('rev')]);
                if(el.getAttribute('rev') == decodeURI(a.firstChild.src)) {
                    shouldAddMainImage = false;
                }
            }
        });
        
        if(shouldAddMainImage) {
            // if we have additional thumbnails we should add main image at the start
            if(magicLightBoxLinks.length > 0) {
                var i = 0, tmp = magicLightBoxLinks, l = tmp.length;
                magicLightBoxLinks = [];
                magicLightBoxLinks.push([a.getAttribute('href'), a.getAttribute('title'), a.firstChild.getAttribute('src')]);
                for (i = 0; i < tmp.length; i++) {
                    magicLightBoxLinks.push(tmp[i]);
                }
            } else {
                magicLightBoxLinks.push([a.getAttribute('href'), a.getAttribute('title'), a.firstChild.getAttribute('src')]);
            }
        }
    }
    
    //var lbox = Lightbox || Slimbox;
    var lbox = {};
    var lboxShowFuncName = 'show';
    try {
        lbox = Lightbox;
    } catch(e) {
        lbox = Slimbox;
        lboxShowFuncName = 'open';
    }    
    
    if(magicLightBoxLinks.length == 1) return lbox[lboxShowFuncName](magicLightBoxLinks[0][0], magicLightBoxLinks[0][1]);
    
    var i, num;
    
    for (i = 0; i < magicLightBoxLinks.length; i++) {
        //use getAttribute instead src property because src return encoded url
        if (magicLightBoxLinks[i][2] == decodeURI(a.firstChild.src)) {
            num = i;
            break;
        }
    }
    
    return lbox.open(magicLightBoxLinks, num);

}
