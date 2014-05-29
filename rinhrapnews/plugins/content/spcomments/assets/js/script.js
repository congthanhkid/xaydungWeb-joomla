/**
* @author    JoomShaper http://www.joomshaper.com
* @copyright Copyright (C) 2010 - 2013 JoomShaper
* @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2
*/

window.addEvent("domready",function(){
	
	showParams();//Display Params
	
	document.id("jform_params_commenting_engine").addEvents({//On change comments type
		change: function(){
			showParams();
		},
		blur: function(){
			showParams();
		}
	});	

	function showParams() {//Function to Show/Hide params
		hideAll();
		if (document.id("jform_params_commenting_engine").value=="disqus") {
			disquss();
		} else if (document.id("jform_params_commenting_engine").value=="intensedebate") {
			intenseDebate ();
		} else {
			facebook ();
		}		
	}

	function disquss() {//Show disquss params
		document.id("jform_params_disqus_subdomain").getParent().setStyle('display', null);
		document.id("jform_params_disqus_devmode-lbl").getParent().setStyle('display', null);
		document.id("jform_params_disqus_lang").getParent().setStyle('display', null);		
	}
	
	function facebook () {//Show facebook params
		document.id("jform_params_fb_appID").getParent().setStyle('display', null);
		document.id("jform_params_fb_width").getParent().setStyle('display', null);
		document.id("jform_params_fb_cpp").getParent().setStyle('display', null);	
		document.id("jform_params_fb_lang").getParent().setStyle('display', null);
	}

	function intenseDebate () {//Show intenseDebate params
		document.id("jform_params_intensedebate_acc").getParent().setStyle('display', null);	
	}	

	function hideAll() {//Hide all params
		document.id("jform_params_disqus_subdomain").getParent().setStyle('display', 'none');
		document.id("jform_params_disqus_devmode-lbl").getParent().setStyle('display', 'none');
		document.id("jform_params_disqus_lang").getParent().setStyle('display', 'none');
		document.id("jform_params_intensedebate_acc").getParent().setStyle('display', 'none');
		document.id("jform_params_fb_appID").getParent().setStyle('display', 'none');
		document.id("jform_params_fb_lang").getParent().setStyle('display', 'none');
		document.id("jform_params_fb_width").getParent().setStyle('display', 'none');
		document.id("jform_params_fb_cpp").getParent().setStyle('display', 'none');
	}
});