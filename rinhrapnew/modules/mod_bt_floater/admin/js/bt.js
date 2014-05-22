jQuery.noConflict();
window.addEvent("domready",function(){
	$$("#jform_params_asset-lbl").getParent().destroy();
	
	$$('.bt_switch').each(function(el)
	{
			
			var options = el.getElements('option');		
			if(options.length==2){
			
				el.setStyle('display','none');
				var value = new Array();
				value[0] = options[0].value;
				value[1] = options[1].value;
				
				var text = new Array();
				text[0] = options[0].text.replace(" ","-").toLowerCase().trim();
				text[1] = options[1].text.replace(" ","-").toLowerCase().trim();
				
				var switchClass = (el.value == value[0]) ? text[0] : text[1];
			
				var switcher = new Element('div',{'class' : 'switcher-'+switchClass});

				switcher.inject(el, 'after');
				switcher.addEvent("click", function(){
					if(el.value == value[1]){
						switcher.setProperty('class','switcher-'+text[0]);
						el.value = value[0];
					} else {
						switcher.setProperty('class','switcher-'+text[1]);
						el.value = value[1];
					}
				});
		}
	});

	jQuery('.bt_color').ColorPicker({
		color: '#0000ff',
		onShow: function (colpkr) {
			jQuery(colpkr).fadeIn(500);
			return false;
		},
		onHide: function (colpkr) {
			jQuery(colpkr).fadeOut(500);
			return false;
		},
		onSubmit: function(hsb, hex, rgb, el) {
			jQuery(el).val("#"+hex);
			//jQuery(el).css('background',jQuery(el).val())
			jQuery(el).ColorPickerHide();
		},
		onBeforeShow: function () {
			jQuery(this).ColorPickerSetColor(this.value);
		}
	})
	.bind('keyup', function(){
		jQuery(this).ColorPickerSetColor(this.value);
	});
	jQuery(".pane-sliders select").each(function(){
	
		if(jQuery(this).is(":visible")) {
		//jQuery(this).css("width",parseInt(jQuery(this).width())+20);
		if(jQuery(this).attr('multiple')){
			jQuery(this).css("width","65%");
		}else{
			jQuery(this).css("width",parseInt(jQuery(this).width())+20);
		}
		jQuery(this).chosen()
		};
	})
	jQuery(".pane-sliders select").each(function(){
	
		if(jQuery(this).is(":visible")) {
		jQuery(this).chosen()
		};
	})		
	jQuery(".chzn-container").click(function(){
		jQuery(".panel .pane-slider,.panel .panelform").css("overflow","visible");	
	})
	jQuery(".panel .title").click(function(){
		jQuery(".panel .pane-slider,.panel .panelform").css("overflow","hidden");		
	})	
})



