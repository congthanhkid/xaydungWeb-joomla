/*Plugin show item and all parents of active item and closest child of item
@Created by joomvision
*/
(function($){
	$.fn.aMenuLoad = function(options){
		var defaults ={
			objClass:'.accordion',
			obj : 'ul',
			el:'li', 
			next : 'ul'
		};
		var o = $.extend({}, defaults, options);	
		return this.each(function(){
			var containerId = "#" + this.id;
			Obj = containerId + ' ' + o.obj + o.objClass;
			El = Obj + ' ' + o.el;			
			actItem = "#jv_amenu"+o.moduleId+"_"+o.activeItemId;//Get DOM ID of actived item			
			$(containerId).find("li.jv_amenu_item").find("a.active").removeClass("active");				
			$(actItem).find("a").slice(0,1).addClass("active");						
			var parents = $(actItem).parents("ul");
			if(o.eventType == 1) {
				$(actItem).find('> div.wrap_link a.trigger').addClass('open');
				$(actItem).parents("li").find('> div.wrap_link a.trigger').addClass('open');
			} else {			
				$(actItem).find('> a.trigger').addClass('open');
				$(actItem).parents("li").find('> a.trigger').addClass('open');
			}				
			parents.each(function(){			
				$(this).show();
			});
			//End show all parents of actived item	
			
			//Show closest child of actived item
			var child = $(actItem).children("ul");			
			child.show();		
			//End show closest child
			$(containerId).find("ul.jv_amenu_items").addClass("amenu_items_active");//Add css class for tag parents ul of actived menu
			$(containerId).find("li.jv_amenu_item").addClass("amenu_item_active");//Add css class for tag parents li of actived menu			
		});	
	};
})(jQuery);