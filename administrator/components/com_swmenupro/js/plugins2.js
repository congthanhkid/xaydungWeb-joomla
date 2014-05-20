function DynamicTreePlugins() {
   
    this.exportToSql = function() {
        var ret = "";
        for (var p in this.allNodes) {
            if (!this.allNodes[p]) { continue; }
            var node = this.allNodes[p];
            ret += '?;;?;;?;;?;;?;;?;;?;;?;;?;;?;;?;;?;;?;;?;;?;;?;;?;;?;;?;;?;;?;;?;;?;;?}}\n'.format(
				node.id,
                node.parentNode.id,
                node.isDoc ? "doc" : "folder",
                node.text,
                node.href,
                node.title,
                node.target,
				node.getIndex(),
                node.image,
                node.image_over,
                node.image_width,
                node.image_height,
                node.image_hspace,
                node.image_vspace,
                node.image_over_width,
                node.image_over_height,
                node.image_over_hspace,
                node.image_over_vspace,
                node.showname,
                node.image_align,
				node.ncss,
                node.ocss,
				node.showitem,
				node.act_id
            );
        }
        return ret;
    };
}

/* Repeat string n times */
if (!String.prototype.repeat) {
    String.prototype.repeat = function(n) {
        var ret = "";
        for (var i = 0; i < n; ++i) {
            ret += this;
        }
        return ret;
    };
}


		