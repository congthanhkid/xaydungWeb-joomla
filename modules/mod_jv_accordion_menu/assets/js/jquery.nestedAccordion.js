/* ---------------------------------------------
Nested Accordion v.1.4.3
Script to create 'accordion' functionality on a hierarchically structured content.
http://adipalaz.com/experiments/jquery/nested_accordion_hover_demo.html
Requires: jQuery v1.3+
Copyright (c) 2009 Adriana Palazova
Dual licensed under the MIT (http://adipalaz.com/docs/mit-license.txt) and GPL (http://adipalaz.com/docs/gpl-license.txt) licenses.
@Modified by joomvision to create module accordon menu
------------------------------------------------ */
(function($) {
//$.fn.orphans - http://www.mail-archive.com/jquery-en@googlegroups.com/msg43851.html
$.fn.orphans = function(){
var txt = [];
this.each(function(){$.each(this.childNodes, function() {
  if (this.nodeType == 3 && $.trim(this.nodeValue)) txt.push(this)})}); return $(txt);
};  
$.fn.accordion = function(options) {
    var defaults = {
        obj : 'ul', //the element that contains the accordion - 'ul', 'ol', 'div' 
        objClass : '.accordion', //the class name of the accordion
        objID : '', //the ID of the accordion (optional)
        wrapper :'li', //the common parent of 'a.trigger' and 'o.next' - 'li', 'div'
        el : 'li', //the parent of 'a.trigger' - 'li', '.h'
        head : '', //the headings that are parents of 'a.trigger' (if any)
        next : 'ul', //the collapsible element - 'ul', 'ol', 'div'
        initShow : '', //the initially expanded section (optional)
        showMethod : 'slideDown', //'slideDown', 'show', 'fadeIn', or custom
        hideMethod : 'slideUp', //'slideUp', 'hide', 'fadeOut', or custom
        showSpeed: 400,      
        hideSpeed: 800,
        activeLink : true, //'true' if the accordion is used for site navigation
        event : 'click', //'click', 'hover'*
        collapsible : true, //'true' - makes the accordion fully collapsible, 'false' - forces one section to be open at any time
        standardExpansible : false // if 'true', the functonality will be standard Expand/Collapse without 'accordion' effect
    };
    // * The option {event:'hover'} requires an additional plug-in that adds a small delay and prevents the accidental activation of animations 
    // (e.g., http://blog.threedubmedia.com/2008/08/eventspecialhover.html)    
    var o = $.extend({}, defaults, options);     
    return this.each(function() {
        var containerID = '#' + this.id,
          Obj = containerID + ' ' + o.obj + o.objID + o.objClass,
          El = Obj + ' ' + o.el,
          loc = window.location.href;		
        $(Obj).find(o.head).addClass('h');          
       if(o.event =='click') { 
       	$(containerID).find('li.jv_amenu_item').each(function(){
        	var $nodeActive = $(this);
        	if(!$nodeActive.find(' ul').length) $nodeActive.find('a.trigger').remove();
        }); 
       }           
        $(El).each(function(){
          var $node = $(this);         		 
          if ($node.find(o.next).length || $node.next(o.next).length) {        	
            if ($node.find('> a').length) {            	
                $node.find('> a').addClass("trigger").css('display', "block").attr('title', "open/close");
            } else {
                $node.orphans().wrap('<a class="trigger" style="display:block" href="#" title="open/close" />');
            }
          } else {        	  
        	  $node.addClass('last-child');          		         
          }
        });
        
        $(El + '+ div:not(.outer)').wrap('<div class="outer" />'); 

        $(Obj + ' .h').each(function(){
          var $this = $(this);
          if (o.wrapper == 'div') {$this.add( $this.next('div.outer') ).wrapAll('<div class="new"></div>');}
        }); 
        
        $(El + ' a.trigger').closest(o.wrapper).find('> ' + o.next).hide();        
        
        if (o.activeLink) {$(Obj + ' a:not([href $= "#"])[href="' + loc + '"]').addClass('active').closest(o.next).addClass('current');}

        $(Obj).find(o.initShow).show()
          .parents(o.next).show().end()
          .parents(o.wrapper).find('> a.trigger, > ' + o.el + ' a.trigger').addClass('open');      
        if (o.event == 'click') {
            var ev = 'click';
        } else  {
            var ev = [o.event] + ' focus';
        }  
      if(o.event !='click'){
       $(El).find('a.trigger').hover(function(){	  
    	  doHover(this);
        },
        function(){        	
        });}
      function doHover(obj){
    	 var $thislink = $(obj);
    	 if(o.slide == 0){
	         $nextEl = $(obj).closest(o.wrapper).find('> ' + o.next);
	         $(containerID).find("li.jv_amenu_item").find("a.active").removeClass("active");
	         $(obj).addClass("active");
	         $siblings = $(obj).closest(o.wrapper).siblings(o.wrapper);
	         if($nextEl.length){
	         if (($nextEl).length && ($nextEl.is(':visible')) && (o.collapsible)) {
	         	 $(containerID).find("ul.amenu_items_active").removeClass("amenu_items_active");
	         	 $(containerID).find("li.amenu_item_active").removeClass("amenu_item_active");
	         	 $(obj).removeClass('open');
	         	 if(o.event == 'click'){         		
	         		 $nextEl.filter(':visible')[o.hideMethod](o.hideSpeed);
	         	 } else {
	         		$childNextEl = $(obj).closest(o.wrapper).find('> ' + o.next).find('> ' + o.wrapper).find('> ' + o.next);
	         		if($childNextEl.length) $childNextEl.filter(':visible')[o.hideMethod](o.hideSpeed);
	         	 }				
	         } 
	         if (($nextEl).length && ($nextEl.is(':hidden'))) {                	
	             if (!o.standardExpansible) {
	               $siblings.find('> a.open, >'+ o.el + ' a.open').removeClass('open').end()
	               .find('> ' + o.next + ':visible')[o.hideMethod](o.hideSpeed);
	             }
	             $(containerID).find("ul.amenu_items_active").removeClass("amenu_items_active");
	             $(containerID).find("li.amenu_item_active").removeClass("amenu_item_active");                  
	             $(obj).parents("ul.jv_amenu_items").addClass('amenu_items_active');//Add css class for ul parent
	             $(obj).parents("li.jv_amenu_item").addClass('amenu_item_active');//Add css class for ul parent
	             $(obj).addClass('open');
	             $nextEl[o.showMethod](o.showSpeed);
	         }				
	         if (o.event != 'click') {
	             $thislink.click(function() {
	                 $thislink.blur();
	                 if ($thislink.attr('href')== '#') {
	                     $thislink.blur();
	                     return false;
	                 }
	             });
	         }
	         if (o.event == 'click') return false;
	         } else {        	 
	        	 $siblings.each(function(){
	        		 $nextEl1 = $(this).find('> ' + o.next); 
	        		 if($nextEl1.length && ($nextEl1.is(':visible')) && (o.collapsible)){
	        			 $nextEl1.filter(':visible')[o.hideMethod](o.hideSpeed); 
	        		 }
	        	 });
	         }
	         } else {
    		 $nextEl = $(obj).closest(o.wrapper).find('> ' + o.next);
        	 if (($nextEl).length && ($nextEl.is(':visible')) && (o.collapsible)) {             	     		
        		 //if(o.event == 'click'){  
        		 	$(obj).removeClass('open');
	         		 $nextEl.filter(':visible')[o.hideMethod](o.hideSpeed);
	         	 //} else {
	         		//$childNextEl = $(obj).closest(o.wrapper).find('> ' + o.next).find('> ' + o.wrapper).find('> ' + o.next);
	         		//if($childNextEl.length) $childNextEl.filter(':visible')[o.hideMethod](o.hideSpeed);
	         	 //}	                				
            } 
            if (($nextEl).length && ($nextEl.is(':hidden'))) {               
                $nextEl[o.showMethod](o.showSpeed);
                $(obj).addClass('open');
            }		
        	if (o.event == 'click') return false;
    	 }
       };
       if(o.event == 'click') { 
       $(El).find('a.trigger').bind('click', function() {   	   		
        	    var $thislink = $(this);
        	    if(o.slide == 0){
	        	    $(containerID).find("li.jv_amenu_item").find("a.active").removeClass("active"); 	        	        	   
	                $nextEl = $(this).closest(o.wrapper).find('> ' + o.next);               
	                $siblings = $(this).closest(o.wrapper).siblings(o.wrapper);	                
	                if (($nextEl).length && ($nextEl.is(':visible')) && (o.collapsible)) {
	                	 $(containerID).find("ul.amenu_items_active").removeClass("amenu_items_active");
	                	 $(containerID).find("li.amenu_item_active").removeClass("amenu_item_active");
	                	 $(this).removeClass('open');
	                	 if(o.event == 'click'){         		
	                		 $nextEl.filter(':visible')[o.hideMethod](o.hideSpeed);
	                	 } else {
	                		$childNextEl = $(this).closest(o.wrapper).find('> ' + o.next).find('> ' + o.wrapper).find('> ' + o.next);
	                		if($childNextEl.length) $childNextEl.filter(':visible')[o.hideMethod](o.hideSpeed);
	                	 }				
	                } 
	                if (($nextEl).length && ($nextEl.is(':hidden'))) {                	
	                    if (!o.standardExpansible) {	                   
	                      $siblings.find('> div.wrap_link a.open, >'+ o.el + ' div.wrap_link a.open').removeClass('open').end()
	                      .find('> ' + o.next + ':visible')[o.hideMethod](o.hideSpeed);
	                    }
	                    $(containerID).find("ul.amenu_items_active").removeClass("amenu_items_active");
	                    $(containerID).find("li.amenu_item_active").removeClass("amenu_item_active");                  
	                    $(this).parents("ul.jv_amenu_items").addClass('amenu_items_active');//Add css class for ul parent
	                    $(this).parents("li.jv_amenu_item").addClass('amenu_item_active');//Add css class for ul parent
	                    $(this).addClass('open');                 
	                    $nextEl[o.showMethod](o.showSpeed);
	                }				
	                if (o.event != 'click') {
	                    $thislink.click(function() {
	                        $thislink.blur();
	                        if ($thislink.attr('href')== '#') {
	                            $thislink.blur();
	                            return false;
	                        }
	                    });
	                }
	                if (o.event == 'click') return false;
             } else {
            	 $nextEl = $(this).closest(o.wrapper).find('> ' + o.next);
            	 if (($nextEl).length && ($nextEl.is(':visible')) && (o.collapsible)) { 
            		 $(this).removeClass('open');
            		 $nextEl.filter(':visible')[o.hideMethod](o.hideSpeed);                				
                } 
                if (($nextEl).length && ($nextEl.is(':hidden'))) {               
                    $nextEl[o.showMethod](o.showSpeed);
                    $(this).addClass('open'); 
                }		
            	if (o.event == 'click') return false;
             }
        });    	  
       }      
    });    
};

})(jQuery);
