var JVTabVertical = new Class({
	options:{		
	},
	initialize:function(options){
		this.setOptions(options);
		this.container = $(this.options.container);
		this.tabContainer = $ES('.vleft_title',this.options.container)[0]; 
		this.tabTitles = $ES('ul.jv_tabs_title li',this.options.container);
		this.panel = $ES('div.vleft_panel',this.options.container)[0];
		this.tabPanels = $ES('div.vleft_panel_item',this.options.container);
		this.fx = new Fx.Elements(this.tabPanels, {duration: this.options.duration});
		this.currentTab = 0;	
		this.effectType = this.options.effectType;	
		//this.initSlide();	
		this.firstLoad();
	},
	firstLoad:function(){
		var panelWidth = this.container.offsetWidth.toInt() - this.tabContainer.offsetWidth.toInt() - 10;
		this.panel.setStyle('width',panelWidth);	
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
	initJVNews2:function(){
		this.tabPanels[0].setStyle('display','');
		this.panel.setStyle('height',this.tabPanels[0].offsetHeight);
		this.tabTitles.each(function(item,i){
			item.addEvent(this.options.eventType,function(){this.changeTabJVNews2(i);}.bind(this));
		}.bind(this));
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
					this.panel.setStyle('height',this.tabPanels[i].offsetHeight+10);				
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
					this.panel.setStyle('height',this.tabPanels[i].offsetHeight+10);				
				}
				obj[j] = {'top':[item.offsetTop.toInt(), item.offsetTop.toInt()- offset]};				
			}.bind(this));		
			this.fx.start(obj);
			this.currentTab = i;
		}
	}
	/*
	initSlide:function(){		
		this.tabPanels.each(function(item,i){
			if(i!=0){
				item.setStyle('opacity',0);
				item.setStyle('display','block');
			} else {
				item.setStyle('opacity',1);
				item.setStyle('display','block');
			}
		}.bind(this));
		var panelWidth = this.container.offsetWidth.toInt() - this.tabContainer.offsetWidth.toInt() - 10;
		this.tabPanel.setStyle('width',panelWidth);
		this.tabPanel.setStyle('height',this.tabPanels[0].offsetHeight);
		this.tabTitles.each(function(item,i){
			item.addEvent(this.options.eventType,function(){
				this.changeTab(i);
			}.bind(this));
		}.bind(this));
	},
	changeTab:function(i){		
		if(this.currentTab != i ){
			this.changeEffect.stop();
			var obj = {};
			this.tabPanels.each(function(item,j){
				if(i!=j){
					this.tabTitles[j].removeClass('active');
					obj[j] = {'opacity':0 }; 
				} else {
					this.tabTitles[i].addClass('active');
					obj[j] = {'opacity':1};
					this.tabPanel.setStyle('height',this.tabPanels[j].offsetHeight);
				}
			}.bind(this));
			this.changeEffect.start(obj);
			this.currentTab = i;
		} 
	}*/
});
JVTabVertical.implement(new Events);
JVTabVertical.implement(new Options);