/*
 * DO NOT REMOVE THIS NOTICE
 *
 * PROJECT:   mygosuMenu
 * VERSION:   1.3.3
 * COPYRIGHT: (c) 2003,2004 Cezary Tomczak
 * LINK:      http://gosu.pl/dhtml/mygosumenu.html
 * LICENSE:   BSD (revised)
 */

function ClickShowHideMenu(id,act,autoclose) {
    this.box1Hover = false;
    this.box2Hover = true;
    this.highlightActive = false;

    this.init = function() {
        if (!document.getElementById(this.id)) {
            alert("Element '"+this.id+"' does not exist in this document. ClickShowHideMenu cannot be initialized");
            return;
        }
        this.parse(document.getElementById(this.id).childNodes, this.tree, this.id);
        this.load();
        
    };

    this.parse = function(nodes, tree, id) {
        for (var i = 0; i < nodes.length; i++) {
            if (nodes[i].nodeType != 1) {
                continue;
            }
            if (nodes[i].className) {
                if ("box1" == nodes[i].className.substr(0, 4)) {
                    nodes[i].id = id + "-" + tree.length;
                    tree[tree.length] = new Array();
                    eval('nodes[i].onmouseover = function() { self.box1over("'+nodes[i].id+'"); }');
                    eval('nodes[i].onmouseout = function() { self.box1out("'+nodes[i].id+'"); }');
                    eval('nodes[i].onclick = function() { self.box1click("'+nodes[i].id+'"); }');
                }
                if ("section" == nodes[i].className) {
                    id = id + "-" + (tree.length - 1);
                    nodes[i].id = id + "-section";
                    tree = tree[tree.length - 1];
                }
                if ("box2" == nodes[i].className.substr(0, 4)) {
                    nodes[i].id = id + "-" + tree.length;
                    tree[tree.length] = new Array();
                    eval('nodes[i].onmouseover = function() { self.box2over("'+nodes[i].id+'", "'+nodes[i].className+'"); }');
                    eval('nodes[i].onmouseout = function() { self.box2out("'+nodes[i].id+'", "'+nodes[i].className+'"); }');
                }
            }
            if (this.highlightActive && nodes[i].tagName && nodes[i].tagName == "A") {
                if (document.location.href == nodes[i].href) {
                    nodes[i].className = (nodes[i].className ? ' active' : 'active')
                }
            }
            if (nodes[i].childNodes) {
                this.parse(nodes[i].childNodes, tree, id);
            }
        }
    };

    this.box1over = function(id) {
        if (!this.box1Hover) return;
        if (!document.getElementById(id)) return;
        document.getElementById(id).className = (this.id_openbox == id ? "box1-open-hover" : "box1-hover");
    };

    this.box1out = function(id) {
        if (!this.box1Hover) return;
        if (!document.getElementById(id)) return;
        document.getElementById(id).className = (this.id_openbox == id ? "box1-open" : "box1");
    };

    this.box1click = function(id) {
        if (!document.getElementById(id)) {
            return;
        }
        var id_openbox = this.id_openbox;
		var className = document.getElementById(id).className;
       if(autoclose=='0'){
		if(className=="box1"){
			this.show(id);
			document.getElementById(id).className = "box1-open";
		}else{
			this.hide(id);
			document.getElementById(id).className = "box1";
		}
	   }else{
		
		
		if (this.id_openbox) {
            if (!document.getElementById(id + "-section")) {
                return;
            }
            this.hide2();
            if (id_openbox == id) {
                if (this.box1hover) {
                    document.getElementById(id_openbox).className = "box1-hover";
                } else {
                    document.getElementById(id_openbox).className = "box1";
                }
            } else
            {
               document.getElementById(id_openbox).className = "box1";
            }
        }
        if (id_openbox != id) {
            this.show(id);
            var className = document.getElementById(id).className;
            if ("box1-hover" == className) {
                document.getElementById(id).className = "box1-open-hover";
            }
            if ("box1" == className) {
                document.getElementById(id).className = "box1-open";
            }
        }
	   }
		
    };

    this.box2over = function(id, className) {
        if (!this.box2Hover) return;
        if (!document.getElementById(id)) return;
        document.getElementById(id).className = className + "-hover";
    };

    this.box2out = function(id, className) {
        if (!this.box2Hover) return;
        if (!document.getElementById(id)) return;
        document.getElementById(id).className = className;
    };

    this.show = function(id) {
        if (document.getElementById(id + "-section")) {
            document.getElementById(id + "-section").style.display = "block";

        }
         this.id_openbox = id ? id : "";
    };

    this.hide = function(id) {
        document.getElementById(id + "-section").style.display = "none";
    };

	 this.hide2 = function() {
        if (document.getElementById(this.id_openbox + "-section")) {
        document.getElementById(this.id_openbox + "-section").style.display = "none";
        this.id_openbox = "";
        }
    };

    

    this.load = function() {
         
		 var id_openbox = "";
		 if (act)
		 {
		  id_openbox = id+"-"+act;
		  activeitem= id+"-"+act;
		 }

        if (id_openbox) {
            this.show(id_openbox);
            document.getElementById(id_openbox).className = "box1-open";
        }
    };

    

    var self = this;
    this.id = id;
    this.tree = new Array();
   
    this.id_openbox = "";
}

if (typeof String.prototype.trim == "undefined") {
    String.prototype.trim = function() {
        var s = this.replace(/^\s*/, "");
        return s.replace(/\s*$/, "");
    }
}
