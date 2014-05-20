menusys_hover = function() {

	var mEls = document.getElementById("menusub_split").getElementsByTagName("li");

	for (var i=0; i<mEls.length; ++i) {

		mEls[i].onmouseover=function() {

			clearTimeout(this.timer);

			if(this.className.indexOf("hover") == -1)

				this.className+=" hover";

		}

		mEls[i].onmouseout=function() {

			this.timer = setTimeout(menusys_out.bind(this), 50);

		}

	}

}

function menusys_out() {

	clearTimeout(this.timer);

	this.className=this.className.replace(new RegExp(" hover\\b"), "");

}

if (window.attachEvent) window.attachEvent("onload", menusys_hover);