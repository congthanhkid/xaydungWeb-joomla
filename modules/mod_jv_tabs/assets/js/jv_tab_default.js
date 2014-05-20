var JVTabDefault = new Class({
	options:{		
	},
	initialize:function(options){
		this.setOptions(options);
		this.container = $(this.options.container);
		this.tabTitles = $ES('ul.tabs_title li',this.options.container);
		this.panel = $ES('div.jv_default_wrap2',this.options.container)[0];		
		this.tabPanels = $ES('.jv_default_content',this.options.container);		
		this.currentTab = 0;
		this.fx = new Fx.Elements(this.tabPanels, {duration:this.options.duration});
		this.effectType = this.options.effectType;		
		this.firstLoad();		
		if(this.options.isModule == 0) this.hoverItem();		
	},
	firstLoad:function(){	
		switch(this.effectType){
			case "scroll_tb":			
				this.initScrollTopBottom();
			break;
			case "scroll_lr":			
				this.initScrollLeftRight();
			break;	
			case "jv_news2":
				this.initJVNews2();
			break;
			case "fade":
				this.initJVFade();
			break;	
		}
	},
	initJVFade:function(){
		this.tabPanels.each(function(item,i){
			if(i!=0){
				item.setStyle('opacity',0);
				item.setStyle('display','block');
			} else {
				item.setStyle('opacity',1);
				item.setStyle('display','block');
			}
			this.tabTitles[i].addEvent(this.options.eventType,function(){
				this.changeTabFade(i);
			}.bind(this));
		}.bind(this));	
		this.panel.setStyle('height',this.tabPanels[0].offsetHeight);		
	},
	changeTabFade:function(i){
		if(this.currentTab != i ){
			this.fx.stop();
			var obj = {};
			this.tabPanels.each(function(item,j){
				if(i!=j){
					this.tabTitles[j].removeClass('active');
					obj[j] = {'opacity':0 }; 
				} else {
					this.tabTitles[i].addClass('active');
					obj[j] = {'opacity':1};
					this.panel.setStyle('height',this.tabPanels[j].offsetHeight);
				}
			}.bind(this));
			this.fx.start(obj);
			this.currentTab = i;
		} 
	},
	initJVNews2:function(){
		this.tabPanels[0].setStyle('display','');
		this.panel.setStyle('height',this.tabPanels[0].offsetHeight);
		this.tabTitles.each(function(item,i){
			item.addEvent(this.options.eventType,function(){this.changeTabJVNews2(i);}.bind(this));
		}.bind(this));
	},
	initScrollTopBottom:function(){
		var top_height = 0;			
		this.tabPanels.each(function(item,i){
			item.setStyles('display:block;left:0px;top:'+top_height+'px');				
			top_height += item.offsetHeight; 
			this.tabTitles[i].addEvent(this.options.eventType,function(){this.changeTabScrollTb(i);}.bind(this));
		}.bind(this));
		this.panel.setStyle('height',this.tabPanels[0].offsetHeight);
	},
	initScrollLeftRight:function(){	
		var left_width = 0;
		this.tabPanels.each(function(item,i){			
			item.setStyles('display:block;left:'+left_width+'px;top:0px');	
			left_width += item.offsetWidth; 			
			this.tabTitles[i].addEvent(this.options.eventType,function(){this.changeTabScrollLr(i);}.bind(this));
		}.bind(this));
		this.panel.setStyle('height',this.tabPanels[0].offsetHeight);
	},
	changeTabJVNews2:function(i){
		if(this.currentTab != i){					
			this.tabPanels.each(function(item,j){
				if(j!=i){
					this.tabPanels[j].setStyle('display','none');	
					this.tabTitles[j].removeClass('active');					
				} else {										
					this.tabTitles[i].addClass('active');
					this.tabPanels[i].setStyle('display','');						
					this.panel.setStyle('height',this.tabPanels[i].offsetHeight+5);				
				}							
			}.bind(this));		
			this.currentTab = i;
		}
	},
	changeTabScrollLr:function(i){
		if(this.currentTab != i){
			var obj = {};
			this.fx.stop();
			var offset = this.tabPanels[i].offsetLeft.toInt();			
			this.tabPanels.each(function(item,j){
				if(j!=i){
					this.tabTitles[j].removeClass('active');					
				} else {										
					this.tabTitles[i].addClass('active');						
					this.panel.setStyle('height',this.tabPanels[i].offsetHeight+5);				
				}
				obj[j] = {'left':[item.offsetLeft.toInt(), item.offsetLeft.toInt()- offset]};				
			}.bind(this));		
			this.fx.start(obj);
			this.currentTab = i;
		}
	},
	changeTabScrollTb:function(i){	
		if(this.currentTab != i){
			var obj = {};
			this.fx.stop();
			var offset = this.tabPanels[i].offsetTop.toInt();			
			this.tabPanels.each(function(item,j){
				if(j!=i){
					this.tabTitles[j].removeClass('active');					
				} else {										
					this.tabTitles[i].addClass('active');						
					this.panel.setStyle('height',this.tabPanels[i].offsetHeight+5);				
				}
				obj[j] = {'top':[item.offsetTop.toInt(), item.offsetTop.toInt()- offset]};				
			}.bind(this));		
			this.fx.start(obj);
			this.currentTab = i;
		}
	},
	hoverItem:function(){
		this.items = $ES('div.panel_tr li.jv_default_item',this.options.container);
		this.items.each(function(item,i){			
			item.addEvent('mouseenter',function(){item.addClass('item_active');});
			item.addEvent('mouseleave',function(){item.removeClass('item_active');});				
		}.bind(this));
	}
});
JVTabDefault.implement(new Events);
JVTabDefault.implement(new Options);