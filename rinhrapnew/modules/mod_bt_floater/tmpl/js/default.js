function createFloating(dir){
	var body   = document.body || document.getElementsByTagName('body')[0],
    newpar = document.createElement('div');
    newpar.setAttribute("id","floater_"+dir);
	newpar.innerHTML = document.getElementById("floater_content_"+dir).innerHTML;
	body.insertBefore(newpar,body.childNodes[0]);
}
function moveFollowleft(topX,topY) {
	 var heightwindows = $(window).getSize().y;
	 var target = $("floater_left");
	 
	 var max = window.getScrollSize().y - target.getSize().y - 75;
	 
	 var scrollPos = document.documentElement.scrollTop;
	 if (scrollPos == 0)	{
		scrollPos = document.body.scrollTop;
	}
	 var y = Math.min(scrollPos + ((heightwindows - target.getSize().y) / 2), max);
	 
	 if ((y < topY) || (scrollPos == 0))  y = topY;
	 
 	 if (typeof fx_left != "undefined") fx_left.stop();
 	 
	 fx_left = new Fx.Morph(target, {duration: 1000, wait: false, link: 'chain'});
 	 fx_left.options.transition = Fx.Transitions.Back.easeInOut;
	 fx_left.start({
		'top': [y],
		'left': topX
	 });
}
function moveFollowright(topX,topY) {
	 var heightwindows = $(window).getSize().y;
	 var target = $("floater_right");
	 
	 var max = window.getScrollSize().y - target.getSize().y - 75;
	 
	 var scrollPos = document.documentElement.scrollTop;
	 if (scrollPos == 0)	{
		scrollPos = document.body.scrollTop;
	}
	 var y = Math.min(scrollPos + ((heightwindows - target.getSize().y) / 2), max);
	 
	 if ((y < topY) || (scrollPos == 0))  y = topY;
	 
 	 if (typeof fx_right != "undefined") fx_right.stop();
 	 
	 fx_right = new Fx.Morph(target, {duration: 1000, wait: false, link: 'chain'});
 	 fx_right.options.transition = Fx.Transitions.Back.easeInOut;
	 fx_right.start({
		'top': [y],
		'right': topX
	 });
}
