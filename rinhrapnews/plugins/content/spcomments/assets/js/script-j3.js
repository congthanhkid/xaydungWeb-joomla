/**
* @author    JoomShaper http://www.joomshaper.com
* @copyright Copyright (C) 2010 - 2013 JoomShaper
* @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2
*/

jQuery(document).ready(function(){
	
	showParams();//Display Params
	
	jQuery('#jform_params_commenting_engine').change(function() {showParams()});
	jQuery('#jform_params_commenting_engine').blur(function() {showParams()});

	function showParams() {//Function to Show/Hide params
		hideAll();
		if (jQuery("#jform_params_commenting_engine").val()=="disqus") {
			disquss();
		} else if (jQuery("#jform_params_commenting_engine").val()=="intensedebate") {
			intenseDebate ();
		} else {
			facebook ();
		}		
	}

	function disquss() {//Show disquss params
		jQuery("#jform_params_disqus_subdomain").parent().parent().css('display', 'block');
		jQuery("#jform_params_disqus_devmode-lbl").parent().parent().css('display', 'block');
		jQuery("#jform_params_disqus_lang").parent().parent().css('display', 'block');		
	}
	
	function facebook () {//Show facebook params
		jQuery("#jform_params_fb_appID").parent().parent().css('display', 'block');
		jQuery("#jform_params_fb_width").parent().parent().css('display', 'block');
		jQuery("#jform_params_fb_cpp").parent().parent().css('display', 'block');	
		jQuery("#jform_params_fb_lang").parent().parent().css('display', 'block');
	}

	function intenseDebate () {//Show intenseDebate params
		jQuery("#jform_params_intensedebate_acc").parent().parent().css('display', 'block');	
	}	

	function hideAll() {//Hide all params
		jQuery("#jform_params_disqus_subdomain").parent().parent().css('display', 'none');
		jQuery("#jform_params_disqus_devmode-lbl").parent().parent().css('display', 'none');
		jQuery("#jform_params_disqus_lang").parent().parent().css('display', 'none');
		jQuery("#jform_params_intensedebate_acc").parent().parent().css('display', 'none');
		jQuery("#jform_params_fb_appID").parent().parent().css('display', 'none');
		jQuery("#jform_params_fb_lang").parent().parent().css('display', 'none');
		jQuery("#jform_params_fb_width").parent().parent().css('display', 'none');
		jQuery("#jform_params_fb_cpp").parent().parent().css('display', 'none');
	}
});