var requesting = false;
var themerequesting = false;
var jSonRequestTheme = null;
var JAPARAM2 = new Class({		
	
	initialize: function(optionid) {
		if($('menu-pane')==null) return;
		this.group = 'japarams';
		this.el = $(optionid);
		
		var table = $('menu-pane').getElement('table.paramlist tbody');
		if(table!=null){	
			var tr = new Element('tr', {'class':'clearfix level2'});
			tr.inject(table); 
			var td = new Element('td', {'colspan':'2', 'id':'japrams-form'});
			td.inject(tr);			
		}						
	},
	
	hideChildren: function(catname, display){
		var els = $(catname).options;
		if(els==null) return;
		var el = null;
		for(var i=0; i<els.length; i++){
			el = els[i];
			if($(el).hasClass('subcat')){
				if(disabled){
					el.selected = false;
				}
				el.disabled = disabled;
			}
		}
	},
	
	changeProfile: function(profile){
		if(profile=='') return;
		
		this.profileactive = profile;
		
		this.fillData();
		this.changeTheme(profiles[profile]['themes'], true);		
	},
	
	showForm: function (){
		
		if($('japrams-form')!=null){										
			$('ja-layout-container').inject($('japrams-form')); 
			$('ja-layout-container').show();	
									
		}
			
	},
	
	serializeArray: function(){
		var els = new Array();
		var allelements = document.adminForm.elements;
		
		var k = 0;
		for (i=0;i<allelements.length;i++) {
		    var el = $(allelements[i]);
		    if (el.name && ( el.name.test (this.group+'\\[.*\\]' || el.name.test (this.group+'\\[.*\\]\\[\\]'))) ){
		    	els[k] = $(el);
		    	k++;
		    }
		}
		return els;
	},

	fillData: function (){
		profile = this.profileactive;
		var els = this.serializeArray(this.group);
		
		if(els.length==0) return;				
		
		if (profiles[profile] == undefined) return;
		var cprofile = profiles[profile];
		
		els.each( function(el){	
			var name = this.getName(el);
			var value = (cprofile!=null && cprofile[name] != undefined)?cprofile[name]:'';
			
			el.setValue(value);
			
		}, this);
	},	
	
	
	getName: function (el){
		if (matches = el.name.match(this.group+'\\[([^\\]]*)\\]')) return matches[1];
		return '';
	},
	
	/****  Functions of Profile  ----------------------------------------------   ****/
	deleteProfile: function(){
		profile = this.profileactive;
		if(confirm(lg_confirm_delete_profile)){			
			var url = mod_url+'?japaramaction=deleteProfile&profile='+profile + '&template='+ templateactive;		;							
			this.submitForm(url, Json.evaluate('{}'), 'profile');
		}		
	},
	
	cloneProfile: function (){
		var profilename = prompt(lg_enter_profile_name);
		
		if($type(profilename)){	
			if(profilename.clean()==''){
				alert(lg_please_enter_profile_name);
				return this.cloneProfile();
			}
			
			profilename = profilename.clean().replace(' ', '').toLowerCase().trim();
			
			profiles[profilename] = profiles[this.profileactive];
			
			var url = mod_url+'?japaramaction=cloneProfile&profile='+profilename+'&fromprofile='+this.profileactive+'&template='+templateactive;				
			this.submitForm(url, Json.evaluate('{}'), 'profile');
		}
		
	},
	
	saveProfile: function (){
		/* Rebuild data */		
		profiles[this.profileactive] = this.rebuildData();				
		var url = mod_url+'?japaramaction=saveProfile&profile='+this.profileactive;				
		this.submitForm(url, profiles[this.profileactive], 'profile');
	},
	
	/****  Functions of Theme  ----------------------------------------------   ****/
	changeTheme: function(theme, dochangeProfile){
		if(themerequesting){
			jSonRequestTheme.cancel();
			themerequesting = false;
    	}		    	
		themerequesting = true;
		
			
		var selection = $('japaramsthemes');
		var url = mod_url+'?japaramaction=changeTheme&theme='+theme + '&template='+ templateactive;				
				
		jSonRequestTheme = new Json.Remote(url, {
			onComplete: function(result){
				themerequesting = false; 
				if(result.theme){
					switch (result.type){	
						case 'change':{
							
							if($('ext_params_from_template')==null ){	
								var tr = new Element('tr', {'class':'level3'});
								tr.injectAfter(selection.getParent().getParent()); 
								var td = new Element('td', {'colspan':'2', 'id':'ext_params_from_template'});
								td.inject(tr);			
							}
							if(result.html!=''){
								$('ext_params_from_template').getParent().show('table-row');
								
							}
							else{
								$('ext_params_from_template').getParent().hide();
							}
												
							$('ext_params_from_template').innerHTML = result.html;
							this.fillDataTheme();
						}
					}
				}
				
				if(dochangeProfile) this.showForm();
				
				/*tooltip*/
               	var JTooltips = new Tips($$('#ext_params_from_template .hasTip'), { maxTitleChars: 50, fixed: false});
               	
			}.bind(this)
		}).send(Json.evaluate('{}'));
	},
	
	fillDataTheme: function (){
		var els = $('ext_params_from_template').getElements ('*[id^=japarams]');
		if(els.length==0) return;				
		
		if (profiles[profile] == undefined) return;
		var cprofile = profiles[profile];
		
		els.each( function(el){	
			if(el.tagName.toLowerCase()!='label'){
				var name = this.getName(el);
				var value = (cprofile!=null && cprofile[name] != undefined)?cprofile[name]:'';
				
				el.setValue(value);
			}
			
		}, this);
	},
	
	submitForm: function(url, request,  type) {
		if(requesting){
			jSonRequest.cancel();
    		requesting = false;
    	}		    	
    	requesting = true;
		jSonRequest = new Json.Remote(url, {
			onComplete: function(result){
				requesting = false;
				
				var contentHTML = '';
				if (result.successful && result.type!=null && result.type!='new') {
					contentHTML += "<div class=\"success-message\"><span class=\"success-icon\">"+result.successful+"</span></div>";
				}
				if (result.error) {
					contentHTML += "<div class=\"error-message\"><span class=\"error-icon\">"+result.error+"</span></div>";
				}
				
				if($type($('toolbar-box'))){
					if(!$type($('system-message'))){
						var msgobj = new Element('div', {'id': 'system-message', 'class':'clearfix'});
						msgobj.injectAfter($('toolbar-box'));
					}
					$('system-message').innerHTML = contentHTML;
					if (!this.msgslider) {
						this.msgslider = new Fx.Slide('system-message');
					}
					$clear(this.timer);
					this.msgslider.hide ();
					this.msgslider.slideIn.delay (100, this.msgslider);
					this.timer = this.msgslider.slideOut.delay (10000, this.msgslider);
				}
				
				if(result.profile){
					switch (result.type){	
						case 'new':{
							document.adminForm.submit();
						}break;
						case 'delete':{
							if(result.template==0){
								for(var j=0; j<this.el.options.length; j++){
									if(this.el.options[j].value==result.profile){
										this.el.remove(j);
									}
								}
							}
							else{
								profiles[result.profile] = Tempprofiles[result.profile];
							}
							this.el.options[0].selected = true;					
							this.changeProfile(this.el.options[0].value);
						}break;
						
						case 'clone':{							
							this.el.options[this.el.options.length] = new Option(result.profile, result.profile);							
							this.el.options[this.el.options.length-1].selected = true;
							this.changeProfile(result.profile);
						}break;
						
						default:
							//nothing
					}
					
				}
				else if(result.theme){
					switch (result.type){	
						case 'change':{
							
							if($('ext_params_from_template')==null){	
								var tr = new Element('tr', {'class':'level3'});
								tr.injectAfter(this.selThemes.getParent().getParent()); 
								var td = new Element('td', {'colspan':'2', 'id':'ext_params_from_template'});
								td.inject(tr);			
							}
							if(result.html!=''){
								$('ext_params_from_template').getParent().show('table-row');
								
							}
							else{
								$('ext_params_from_template').getParent().hide();
							}
												
							$('ext_params_from_template').innerHTML = result.html;
							this.fillDataTheme();
						}
					}
				}
				
			}.bind(this)
		}).send(request);
	},
	
	rebuildData: function (){
		var els = this.serializeArray(this.group);
		var json = {};
		els.each(function(el){
			var name = this.getName(el);
			
			if( name!='' ){
				json[name] = el.getValue().toString().replace (/\n/g, '\\n').replace (/\t/g, '\\t').replace (/\r/g, '');
			}
			
		}, this);
		
		return json;
	}
	
	
});


if (MooTools.version >= '1.2') {
	Element._extend = Element.implement;
} else {
	Element._extend = Element.extend;
}

Element._extend ({
	getType: function() {
		var tag = this.tagName.toLowerCase();
		switch (tag) {
			case 'select':
			case 'textarea':
				return tag;	
			case 'input':
				if($type(this.type) && ( this.type=='text' || this.type=='password' || this.type=='hidden')){
					return this.type;
				}
				else{
					return  document.getElementsByName(this.name)[0].type;
				}
			default:
				return '';
		}
	},
	show: function(display){
		if(display==null) display = 'block';
		this.setStyle('display', display);
	},
	hide: function(){
		this.setStyle('display', 'none');
	},
	
	disable: function (){
		switch (this.getType().toLowerCase()) {
			case 'submit':
			case 'hidden':
			case 'password':
			case 'text':
			case 'textarea':
			case 'select':
				this.disabled = true;
				break;
			case 'checkbox':
			case 'radio':
				fields = document.getElementsByName(this.name);		
				$each(fields, function(option){
					option.disabled = true;
				});
			
		}
	},
		
	enable: function (){
		switch (this.getType().toLowerCase()) {
			case 'submit':
			case 'hidden':
			case 'password':
			case 'text':
			case 'textarea':
			case 'select':
				this.disabled = false;
				break;
			case 'checkbox':
			case 'radio':
				fields = document.getElementsByName(this.name);		
				$each(fields, function(option){
					option.disabled = false;						
				});
			
		}
	},
	
	setValue : function(newValue, rel) {
		
		switch (this.getType().toLowerCase()) {
			case 'submit':
			case 'hidden':
			case 'password':
			case 'text':
			case 'textarea':
				this.value=newValue;
				break;
			case 'checkbox':
				this.setInputCheckbox(newValue);
				break;
			case 'radio':
				this.setInputRadio(newValue);
				break;
			case 'select':	
				this.setSelect(newValue);
				break;
		}
		this.fireEvent('change');
		this.fireEvent('click');			
		
	},
	
	getValue: function (){
		
		switch (this.getType().toLowerCase()) {
			case 'submit':
			case 'hidden':
			case 'password':
			case 'text':
			case 'textarea':
				return this.value;
			case 'checkbox':
				return this.getInputCheckbox();
			case 'radio':
				return this.getInputRadio();
			case 'select':	
				return this.getSelect();
		}
		
		return false;
		
	},
	
	setInputCheckbox : function( newValue) {		
		fields = document.getElementsByName(this.name);
		arr_value = fields.length>1?newValue.split(','):new Array(newValue);
		
		for(var i=0; i<fields.length; i++){
			var option = fields[i];
			option.checked = false;
			if(arr_value.contains(option.value)){
				option.checked = true;
			}
		}		
	},
	
	setInputRadio : function( newValue) {
		fields = document.getElementsByName(this.name);		
		
		for(var i=0; i<fields.length; i++){
			var option = fields[i];
			option.checked = false;
			if(option.value==newValue){
				option.checked = true;
			}
		}			
	},

	setSelect : function(newValue) {
		arr_value = this.multiple? newValue.split(','):new Array(newValue);
		var selected = false;
		
		for(var i=0; i<this.options.length; i++){
			var option = this.options[i];
			option.selected = false;
			if (arr_value.contains (option.value)) {
				option.selected = true;
				selected = true;
			}
		}
		
		if(!selected){
			this.options[0].selected = true;
		}
	},

	getInputCheckbox : function() {
		var values = [];
		fields = document.getElementsByName(this.name);		
		for(var i=0; i<fields.length; i++){
			var option = fields[i];
			if (option.checked) values.push($pick(option.value, option.text));
		}		
		return values;
	},
	
	getInputRadio : function( ) {
		var values = [];
		fields = document.getElementsByName(this.name);		
		$each(fields, function(option){
			if (option.checked) values.push($pick(option.value, option.text));
		});
		return values;
	},

	getSelect : function() {
		var values = [];
		for(var i=0; i<this.options.length; i++){
			var option = this.options[i];
			if (option.selected) values.push($pick(option.value, option.text));
		}				
		return (this.multiple) ? values : values[0];
	}
	
});
