

function treeInfo() {
    var showitem = document.getElementById("tree-image_showitem");
  var name = document.getElementById("tree-info-name");
 var ncss = document.getElementById("tree-normal_css");
  var ocss = document.getElementById("tree-over_css");

    var image = document.getElementById("tree-imagehidden");
    var image_width = document.getElementById("tree-image_width");
    var image_height = document.getElementById("tree-image_height");
    var image_hspace = document.getElementById("tree-image_hspace");
    var image_vspace = document.getElementById("tree-image_vspace");
    var image_over_width = document.getElementById("tree-image_over_width");
    var image_over_height = document.getElementById("tree-image_over_height");
    var image_over_hspace = document.getElementById("tree-image_over_hspace");
    var image_over_vspace = document.getElementById("tree-image_over_vspace");
   
 var showitem = document.getElementById("tree-image_showitem");
  var islink = document.getElementById("tree-image_islink");
 var showname = document.getElementById("tree-image_showname");
    var image_align = document.getElementById("tree-image_align");

    var imagesrc = document.getElementById("tree-image");
    var image_over = document.getElementById("tree-image_overhidden");
    var image_oversrc = document.getElementById("tree-image_over");
  //  var href = document.getElementById("tree-info-href");
 // var title = document.getElementById("tree-info-title");
    var target = document.getElementById("tree-image_target");

    name.innerHTML = "none";
  //  href.value = "";
   // ncss.value = "";
   ncss.value="";
	ocss.value="";
		 image.value = "";
     image_width.value = "";
     image_height.value = "";
     image_hspace.value = "";
     image_vspace.value = "";
     image_over_width.value = "";
     image_over_height.value = "";
     image_over_hspace.value = "";
     image_over_vspace.value = "";
      showname.value = "";
	   showitem.value = "";
	    target.value = "";
     image_align.value = "left";
     image_over.value = "";
	//sel_item.innerHTML="none";
    if (tree.active) {
        var node = tree.getActiveNode();
        name.innerHTML = node.text;
     //   href.value = node.href;
	//	normal_css.value = document.getElementById(node.id+"_normal_css").value;
	//	over_css.value = document.getElementById(node.id+"_over_css").value;
	//	showitem.value = document.getElementById(node.id+"_showitem").value;
	//	target.value = document.getElementById(node.id+"_target").value;

        image.value = node.image;
        image_width.value = node.image_width;
        image_height.value = node.image_height;
        image_hspace.value = node.image_hspace;
        image_vspace.value = node.image_vspace;
        image_over_width.value = node.image_over_width;
        image_over_height.value = node.image_over_height;
        image_over_hspace.value = node.image_over_hspace;
        image_over_vspace.value = node.image_over_vspace;
        showname.value = node.showname;
		 showitem.value = node.showitem;
		  target.value = node.target;
        image_align.value = node.image_align;
        imagesrc.src = node.image;
        image_oversrc.src = node.image_over;
        image_over.value = node.image_over;
//alert(node.image);
		 ocss.value = node.ocss;
        ncss.value = node.ncss;
        
    }
}
function treeInfoUpdate() {
	 var showitem = document.getElementById("tree-image_showitem");
	 var normal_css = document.getElementById("tree-normal_css");
     var over_css = document.getElementById("tree-over_css");
     var image = document.getElementById("tree-imagehidden");
     var image_width = document.getElementById("tree-image_width");
     var image_height = document.getElementById("tree-image_height");
     var image_hspace = document.getElementById("tree-image_hspace");
     var image_vspace = document.getElementById("tree-image_vspace");
     var image_over_width = document.getElementById("tree-image_over_width");
     var image_over_height = document.getElementById("tree-image_over_height");
     var image_over_hspace = document.getElementById("tree-image_over_hspace");
     var image_over_vspace = document.getElementById("tree-image_over_vspace");
     var showname = document.getElementById("tree-image_showname");
     var image_align = document.getElementById("tree-image_align");
     var image_over = document.getElementById("tree-image_overhidden");
  //   var name = document.getElementById("tree-info-name");
  //   var href = document.getElementById("tree-info-href");
  // var title = document.getElementById("tree-info-title");
     var target = document.getElementById("tree-image_target");
    
//	name.value = name.value.trim();
 //   href.value = href.value.trim();
  //  if (!name.value) {
  //      return false;
  //  }
    if (tree.active) {
        var node = tree.getActiveNode();
	
    node.image = image.value;
    node.image_over_width = image_over_width.value;
    node.image_over_height = image_over_height.value;
    node.image_over_hspace = image_over_hspace.value;
    node.image_over_vspace = image_over_vspace.value;
    node.image_width = image_width.value;
    node.image_height = image_height.value;
    node.image_hspace = image_hspace.value;
    node.image_vspace = image_vspace.value;
    node.showname = showname.value;
	node.showitem = showitem.value;
    node.image_align = image_align.value;
    node.image_over = image_over.value;

	 node.ncss = normal_css.value;
    node.ocss = over_css.value;
  //  node.text = name.value;
  //  node.href = href.value;
    // node.title = title.value;
     node.target = target.value;
	
       // tree.updateHtml();
    }
}

if (!Array.prototype.indexOf) {
    Array.prototype.indexOf = function(item) {
        for (var i = 0; i < this.length; ++i) {
            if (this[i] === item) { return i; }
        }
        return -1;
    };
}

// ---------
// ! PLUGINS
// ---------


function treePluginExportPhp() {

     document.getElementById("php_out").value = tree.exportToSql().replace(/</g, "&lt;").replace(/>/g, "&gt;");
      document.getElementById("task").value = "savemenu";

//document.mm.target="win1";
document.mm.action="index2.php";

 //window.open('', 'win1', 'status=no,toolbar=no,scrollbars=auto,titlebar=no,menubar=no,resizable=yes,width=600,height=500,directories=no,location=no');
 setTimeout('document.mm.submit()',200) ;
 setTimeout('document.mm.target="_self"',300);
// setTimeout('document.adminForm.action="index2.php"',300);

//var w = window.open("", "exportToPhp", "width=600,height=600,scrollbars=yes,resizable=yes");
 //   w.document.write('<pre>'+tree.exportToPhp().replace(/</g, "&lt;").replace(/>/g, "&gt;")+'</pre>');
}

//document.getElementById("tree-plugin-export-php").onclick = function() { treePluginExportPhp(); };
hide_all();