Element.extend({
	tooltip: function(){
		
		
		if ((this.status == '0' && this.style.visibility != 'visible') 
			|| (this.status == '1' && this.style.visibility == 'visible' && !this.hidding)) {
			return;
		}
		
		if (this.status == '1') {
			this.hidding = 1;
		} 
		
		var left 	= this.ev.page.x	-	(this.tooltipwidth/2);
			
		var top		= this.ev.page.y 	- 	this.tooltipheight;

		if(this.status)
		{	
			
			this.setStyles({
				'visibility': 'visible',
				'left' 		: left,
				'top'		: top - 5
				
			});

			this.fx.start({							
				'opacity'	: [0.0000009, 1],
				'top'		: [top-10, top - 20]				
			});
		}
		else
		{			

			this.fx.start({							
				'opacity'	: [1, 0],
				'top'		: [top-20, top - 30]
			});
		}
	},
	
	tooltipFx: function() {

		this.tooltipwidth 	= this.offsetWidth;
		
		this.tooltipheight 	= this.offsetHeight;	
		
		if(this.fx) return false;
		
		this.fx = new Fx.Styles(this, {
			duration: 600,
			wait: false
		});
		
		this.setStyle('visibility', 'hidden');
		
		fxComplete = function(){

			if (this.status == '0'){
			
				this.hidding = 0;
				this.setStyle('visibility', 'hidden');
				
			}
		}
		
		this.fx.addEvent ('onComplete', fxComplete.bind(this));
		
	},
	
	init2: function(type, timeout){				
		$clear(this.timeout);
		this.timeout = this[type].delay(timeout, this);
	}
});
				
var jvClass = new Class({

	initialize: function(options){	
	
		this.options = $merge(this.options, options);
		
		this.options.handler.each(function(el, index){
		
			this['getItems'].call(this, el);	
			this['callback'].call(this, el)
			
		}, this);
		
		return this;

	},
		
	options: {
	},	
	
	getItems: function(name){
	
		// get options of effect
		var options	= this['options'][name];
		
		if(options){
			
			if (options.selector){
				this['items'][name] = $$(options.selector);
				if(!this['items'][name].length){						
					this['log']['init'].call(this['log'], {type: 'warming', text: 'Selector ' + options.selector + ' of option ' + name + ' not found'});						
					return false;
				}
			}
			else{
				this['log']['warming'].push('Please set selector for option ' +name);				
				return false;
			}
		}
		else{
			this['log']['warming'].push('Option ' + name + ' not found');	
			return false;
		}
		
	},
	
	callback: function(name){
	
		if(!this['items'][name].length) return;
		
		if(!this['options'][name].callback) return;
		
		this['items']['_'+name][this['options'][name].callback].call(this);
		
	},
	
	items:{
		
	},
	
	log: {
		message : new Array(),
		warming	: new Array(),
		errors	: new Array(),
		init	: function(arg){
			this[arg.type].push(arg.text);			
		}
	}
	
});


jvClass.implement({
	options: {
		handler		: ['tooltip'],
		
		tooltip		: {
			selector	: '.jvtooltip',
			duration	: 100,
			trans		: Fx.Transitions.linear,			
			callback	: 'build'
		}
		
	},
	
	items:{
		_tooltip: {
			
			build: function(){
			
				var self 	= this['items']['_tooltip'];
				var els 	= this['items']['tooltip'];
				
				els.each(function(el, i){
					var opt 	= Json.evaluate(el.getProperty('rel'));

					var options = {
						'styles' 	: {
							'width' 	: '300px',
							'position' 	: 'absolute',
							'left'		: '0px',
							'top'		: '0px',
							'visibility': 'hidden',
							'opacity'	: '0',
							'overflow'	: 'hidden'
						},
						'class'		: 'default',
						'enClose'	: 'hidden',
						'title'		: 'jvTooltip',
						'content'	: 'dannv'
					};
					
					options	= $merge(options, opt);
					
					el._parent 		= self.createBox(options);
					
					
					
					$(document.body).adopt(el._parent);
					
					el.setStyle('cursor', 'pointer');
					
					el._parent.tooltipFx();
					
					el.addEvent('mouseover', function(e){
					
						var ev = new Event(e);
						el._parent.status = 1;
						el._parent.ev = ev;						
						el._parent.init2('tooltip', 1);
						ev.stop();
						
					//	ev.fx = new Fx.style
					});
					
					if(options.enClose == 'hidden'){
						el.addEvent('mouseout', function(e){
							var ev = new Event(e);
							el._parent.status 	= 0;
						//	el._parent.ev 		= ev;						
							el._parent.init2('tooltip', 20);
							ev.stop();
						});
					}
					
					
					
				});
			}, 
			
			createBox: function(opt){
			
				options	= opt;
				
				
				// start top
				var Tooltip_tm	= new Element('div', {
					'class' : 'tooltip-tm'
				});
				
				var Tooltip_tr	= new Element('div', {
					'class' : 'tooltip-tr'
				}).adopt(Tooltip_tm);
				
				var Tooltip_close = new Element('div', {
					'class' 	: 'tooltip-close',
					'styles'	: {
						'visibility'	: options.enClose
					}
				});
				
				var Tooltip_tl	= new Element('div', {
					'styles'	: {
						'width'			: options.styles.width						
					},
					'class'		: 'tooltip-tl'
				}).adopt(Tooltip_tr, Tooltip_close);				
				// end top
				
				// start middle
				var Tooltip_mt = new Element('div', {
					'class' : 'tooltip-mt'
				}).setHTML(options.title);
				
				var Tooltip_mc = new Element('div', {
					'class' : 'tooltip-mm'
				}).setHTML(options.content);
				
				var Tooltip_mr = new Element('div', {
					'class' : 'tooltip-mr'
				}).adopt(Tooltip_mt, Tooltip_mc);
				
				var Tooltip_ml	= new Element('div', {
					'styles'	: {
						'width'	: options.styles.width						
					},
					'class'		: 'tooltip-ml'
				}).adopt(Tooltip_mr);
				// end middle
				
				// start bottom
				var Tooltip_arrow 	= new Element('div', {
					'class' : 'tooltip-arrow'
				});
				
				var Tooltip_bm 	= new Element('div', {
					'class' : 'tooltip-bm'
				}).adopt(Tooltip_arrow);
				
				var Tooltip_br 	= new Element('div', {
					'class' : 'tooltip-br'
				}).adopt(Tooltip_bm);
				
				var Tooltip_bl	= new Element('div', {
					'styles'	: {
						'width'	: options.styles.width						
					},
					'class'		: 'tooltip-bl'
				}).adopt(Tooltip_br);
				// end bottom
				
				
				var Tooltip 	= new Element('div', {
					'class' 	: 'jvtooltip-box',
					'styles'	: options.styles					
				}).adopt(Tooltip_tl, Tooltip_ml, Tooltip_bl);
				
				Tooltip.addClass(options['class']);
				if(options.enClose == "visible"){
				
					Tooltip_close.addEvent('click', function(){
						Tooltip.status = 0;
						Tooltip.init2('tooltip', 0);
					});
				}
				return Tooltip;
			}
		}
	} 
});