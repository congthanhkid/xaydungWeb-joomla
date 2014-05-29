
JANewSticker=new Class({initialize:function(_options){this.options=$extend({modes:{horizontal:['left','width'],horizontal_right:['left','width'],verticald:['top','height'],vertical:['top','height']},size:240,mode:'horizontal',buttonEvent:'click',handlerEvent:'click',interval:5000,autoRun:true,previousIndex:null,nextIndex:null,currentIndex:0,startItem:0,onRunning:null},_options||{});this.fx=new Array();this.fx2=new Array();$$(this.options.items).each(function(item){if(item.getStyle('visibility')=='hidden'){item.setStyles({visibility:'visible',opacity:0});}});if(this.options.mode=='horizontal_stripe'){}else{this.onRunning=this.options.onRunning;if(isNaN(this.options.startItem)||(this.options.startItem>this.options.items.length||this.options.startItem<0)){this.options.startItem=0;}
var maxWidth=0;this.options.items.each(function(_item,index){_item.setStyle('z-index',this.options.items.length-index);_item.setStyle('width',_item.offsetWidth);if(_item.offsetWidth>maxWidth){maxWidth=_item.offsetWidth;}
this.fx2[index]=new Fx.Tween(_item,_options.fxOptions);this.fx2[index].offsetWidth=_item.offsetWidth;if(this.options.mode!='opacity'){this.fx[index]=new Fx.Tween(_item,_options.fxOptions||{duration:500,wait:false});}}.bind(this));if(this.options.box.offsetWidth<=0){this.options.box.setStyle('width',maxWidth);}
if(this.options.mode=='vertical'||this.options.mode=='verticald'){this.options.size=this.options.box.offsetHeight;}else{this.options.size=this.options.box.offsetWidth;}
this.buttons={previous:[],next:[],play:[],playback:[],stop:[]};this.options.autoRun=true;if(_options.buttons){for(var action in _options.buttons){this.bindingButtonsEvent(action,$type(_options.buttons[action])=='array'?_options.buttons[action]:[_options.buttons[action]]);}}
if(this.options.autoRun){this.play(this.options.interval,'next',true);}
var wrapper2=this.options.wrapper;wrapper2.addEvent("mouseenter",function(){this.stop();}.bind(this));wrapper2.addEvent("mouseleave",function(){this.play(this.options.interval,'next',true);}.bind(this));}},previous:function(manual){this.options.currentIndex+=this.options.currentIndex>0?-1:this.options.items.length-1;this.running(null,manual,'previous');},next:function(manual){this.options.currentIndex+=(this.options.currentIndex<this.options.items.length-1)?1:(1-this.options.items.length);this.running(null,manual,'next');},play:function(delay,direction,wait){this.stop();if(!wait){this[direction](false);}
this.options.autoRun=this[direction].periodical(delay,this,false);},stop:function(){$clear(this.options.autoRun);},running:function(item,manual,runningMode){this.options.previousIndex=this.options.currentIndex+(this.options.currentIndex>0?-1:this.options.items.length-1);this.options.nextIndex=this.options.currentIndex+(this.options.currentIndex<this.options.items.length-1?1:1-this.options.items.length);if(this.options.mode!='opacity'){var size1;var size2;if(this.options.mode=='horizontal_right'||this.options.mode=='verticald'){size1=-(this.options.size);size2=(this.options.size);}else{size1=(this.options.size);size2=-(this.options.size);}
if(runningMode=='next'){this.fx2[this.options.previousIndex].start('opacity',1,0);this.fx[this.options.previousIndex].start(this.options.modes[this.options.mode][0],0,size1);this.fx2[this.options.currentIndex].start('opacity',0,1);this.fx[this.options.currentIndex].start(this.options.modes[this.options.mode][0],+size2,0);}else if(runningMode=='previous'){this.fx2[this.options.nextIndex].start('opacity',1,0);this.fx[this.options.nextIndex].start(this.options.modes[this.options.mode][0],0,-(this.options.size));this.fx2[this.options.currentIndex].start('opacity',0,1);this.fx[this.options.currentIndex].start(this.options.modes[this.options.mode][0],+(this.options.size),0);}}else{if(runningMode=='next'){this.fx2[this.options.previousIndex].start('opacity',1,0);this.fx2[this.options.currentIndex].start('opacity',0,1);}else{this.fx2[this.options.nextIndex].start('opacity',1,0);this.fx2[this.options.currentIndex].start('opacity',0,1);}}
if(manual){this.stop();}
if(this.onRunning){this.onRunning(this.options.items[this.options.currentIndex],(this.buttons?this.buttons[this.options.currentIndex]:null));}
if(manual&&this.options.autoRun){this.play(this.options.interval,'next',true);}},bindingButtonsEvent:function(action,buttons){for(var i=0;i<buttons.length;i++){switch(action){case'previous':buttons[i].addEvent(this.options.buttonEvent,this.previous.bind(this,true));break;case'next':buttons[i].addEvent(this.options.buttonEvent,this.next.bind(this,true));break;case'play':buttons[i].addEvent(this.options.buttonEvent,this.play.bind(this,[this.options.interval,'next',false]));break;case'playback':buttons[i].addEvent(this.options.buttonEvent,this.play.bind(this,[this.options.interval,'previous',false]));break;case'stop':buttons[i].addEvent(this.options.buttonEvent,this.stop.bind(this));break;}
this.buttons[action].push(buttons[i]);}}});