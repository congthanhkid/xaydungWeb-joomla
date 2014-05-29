/**
 * ------------------------------------------------------------------------
 * JA News Featured Module for Joomla 2.5
 * ------------------------------------------------------------------------
 * Copyright (C) 2004-2011 J.O.O.M Solutions Co., Ltd. All Rights Reserved.
 * @license - GNU/GPL, http://www.gnu.org/licenses/gpl.html
 * Author: J.O.O.M Solutions Co., Ltd
 * Websites: http://www.joomlart.com - http://www.joomlancers.com
 * ------------------------------------------------------------------------
 */

var requesting = false;

var JANEWSFP_DEFAULT = new Class({
	initialize: function(options) {
		
		this.options = $extend({
			moduleid: 0,
			duration: 400,
			autoplay_duration:1000,
			autoplay: 1,
			animType: 'animNewsMoveHor',
			changeTransition:	Fx.Transitions.Pow.easeIn
		}, options || {});
		
		var moduleid = this.options.moduleid;
		this.panelwrap = $('ja-zinfp-'+moduleid).getElement('div.ja-zinfp-featured');	
		this.cur_activePanel = this.panelwrap.getElement('div.active');
		var obwrap = $('ja-zinfp-'+moduleid).getElement('.ja-zinfp-featured-border');
		this.panelwrap.setStyle('height', this.cur_activePanel.offsetHeight);
		this.panelwrap.setStyle('width', this.panelwrap.getParent().getCoordinates().width-2);
		//Set equal height
		var HN = Math.max($('ja-zinfp-'+moduleid).getElement('.ja-zinfp-normal-wrap').offsetHeight+13,this.panelwrap.offsetHeight );
			
		this.panelwrap.getParent().setStyle('height', HN);
		//this.jaTooltips = new Tips($('ja-zinfp-'+moduleid).getElements('.jahasTip'), { maxTitleChars: 50, fixed: false, className: 'tool-tip janews-tool'});
		$$('.jahasTip').each(function(el) {
			var title = el.get('title');
			if (title) {
				var parts = title.split('::', 2);
				el.store('tip:title', parts[0]);
				el.store('tip:text', parts[1]);
			}
		});
		this.jaTooltips = new Tips($$('.jahasTip'), { maxTitleChars: 50, fixed: false});
		
		this.panels = this.panelwrap.getElements('.ja-zincontent-wrap');
		if(this.panels.length<=1) return;
		
		this.panels.each(function(el){
			el.setStyle('width', this.panelwrap.offsetWidth);
		}.bind(this))
		
		this.next_bt = $('ja-zinfp-'+moduleid).getElement('.ja-zinfp-links-actions a.next');
		this.prev_bt = $('ja-zinfp-'+moduleid).getElement('.ja-zinfp-links-actions a.prev');
		this.next_img	= $('ja-zinfp-'+moduleid).getElement('.ja-zinfp-links-actions span.next');
		this.counter = $('ja-zinfp-'+moduleid).getElement('.ja-zinfp-links-actions span.counter');
					
		if(this.next_bt!=null){
			
			this.anim = eval ('new '+this.options.animType + '(this)');
			
			this.time = $time();
			if(this.options.autoplay==1){
				this.timer = this.next.periodical(this.options.autoplay_duration, this);	
			}
			var H = Math.max($('ja-zinfp-'+moduleid).getElement('.ja-zinfp-normal-wrap').offsetHeight+13, (this.panelwrap.offsetHeight + $('ja-zinfp-'+moduleid).getElement('.ja-zinfp-links-actions').offsetHeight));
			this.panelwrap.getParent().setStyle('height', H);
			this.next_bt.addEvent('click', function () {
				this.timer = $clear(this.timer);
		    	this.next();
				if(this.options.autoplay==1){
				this.timer = this.next.periodical(this.options.autoplay_duration, this);	
			    }
		    }.bind(this));
		    
		    this.prev_bt.addEvent('click', function () {
		    	this.timer = $clear(this.timer);
		    	this.previous();
				if(this.options.autoplay==1){
				this.timer = this.next.periodical(this.options.autoplay_duration, this);	
			    } 
		    }.bind(this));		    
		}
	},
	    
    next: function(){  
		if (!this.mainfx) this.mainfx = new Fx.Tween(this.panelwrap,{duration:this.options.duration});
		
		var moduleid = this.options.moduleid;
		this.current_activePanel = this.panelwrap.getElement('div.active');
		
		if(this.current_activePanel.getNext()==null){
			
			this.activePanel = this.panelwrap.getFirst();
			
			this.counter.set('text', 1);
		}
		else{
			this.activePanel = this.current_activePanel.getNext();
			this.counter.set('text', this.counter.get('text').toInt()+1);
		}
		
		this.current_activePanel.removeClass('active');		
		this.activePanel.addClass('active');				
    	this.anim.move (this.current_activePanel, this.activePanel, false);      	    			
		this.mainfx.start('height', this.activePanel.offsetHeight);		
    },
    
    previous: function(){
    	this.current_activePanel = this.panelwrap.getElement('div.active');    	
    	var activePanel = this.current_activePanel.getPrevious();

    	if(activePanel!=null){
    		
    		if (!this.mainfx) this.mainfx = new Fx.Tween(this.panelwrap,{duration:this.options.duration});
    		//this.mainfx.stop();
    		
    		this.activePanel = activePanel;
    		this.current_activePanel.removeClass('active');
    		this.activePanel.addClass('active');
    		this.anim.move (this.current_activePanel, this.activePanel, false);
    		
    		this.counter.set('text', this.counter.get('text').toInt()-1);    		    		
    		this.mainfx.start('height', this.activePanel.offsetHeight);
    	}    	
    }
	
});

var animNewsMoveHor = new Class ({
	initialize: function(tabwrap) {
		this.options = tabwrap.options || {};
		this.tabwrap = tabwrap;
		this.changeEffect = new Fx.Elements(this.tabwrap.panels, {duration: this.options.duration});
		var left = 0;
	    this.tabwrap.panels.each (function (panel) {
	      panel.setStyle('left', left);
	      left += panel.offsetWidth;
	    });
	    this.tabwrap.panels.setStyle('top', 0);
	},

	move: function (curTab, newTab, skipAnim) {
		if(this.options.changeTransition != 'none' && !skipAnim)
		{
			//this.changeEffect.stop();
			var obj = {};
			var offset = newTab.offsetLeft.toInt();
			i=0;			
			
			this.tabwrap.panels.each(function(panel) {
				obj[i++] = {'left':[panel.offsetLeft.toInt(), panel.offsetLeft.toInt() - offset] };			
			});
			this.changeEffect.start(obj);
		}
	}
});


var animNewsMoveVir = new Class ({
	initialize: function(tabwrap) {
		this.options = tabwrap.options || {};
		this.tabwrap = tabwrap;
		this.changeEffect = new Fx.Elements(this.tabwrap.panels, {duration: this.options.duration});
	
	    var top = 0;
	    this.tabwrap.panels.each (function (panel) {
	      panel.setStyle('top', top);     
	      top += Math.max(panel.offsetHeight,  panel.getParent().offsetHeight);
	    });
	    this.tabwrap.panels.setStyle('left', 0);
	},
	move: function (curTab, newTab, skipAnim) {
		if(skipAnim==false)
		{
      //reposition newTab
      
			//this.changeEffect.stop();
			var obj = {}; 
			var offset = newTab.offsetTop.toInt();
			i=0;
			this.tabwrap.panels.each(function(panel) {
				obj[i++] = {'top':[panel.offsetTop.toInt(), panel.offsetTop.toInt() - offset]};			
			});
			this.changeEffect.start(obj);
		}
	}
});


var animNewsFade = new Class ({
	initialize: function(tabwrap) {
		
		this.options = tabwrap.options || {};
		this.tabwrap = tabwrap;
		this.changeEffect = new Fx.Elements(this.tabwrap.panels, {duration: this.options.duration});
		
		this.tabwrap.panels.setStyles({'opacity':0,'width':'100%'});		
		this.tabwrap.panels[0].setStyle('opacity',1);
	},

	move: function (curTab, newTab, skipAnim) {
		
		if(this.options.changeTransition != 'none' && !skipAnim)
		{
			if (curTab)
			{
				curOpac = curTab.getStyle('opacity');
				var changeEffect1 = new Fx.Tween(curTab, {duration: this.options.duration, transition: this.options.changeTransition});
				changeEffect1.start('opacity',curOpac,0);
			}
			curOpac = newTab.getStyle('opacity');
			var changeEffect = new Fx.Tween(newTab, {duration: this.options.duration, transition: this.options.changeTransition});
			changeEffect.start('opacity', curOpac,1);
		} else {
			if (curTab) curTab.setStyle('opacity', 0);
			newTab.setStyle('opacity', 1);
		}
	}
});