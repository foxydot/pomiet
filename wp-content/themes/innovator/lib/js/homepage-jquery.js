jQuery(document).ready(function($) {	
	var numwidgets = $('#homepage-one .wrap div.widget').length;
	$('#homepage-one .wrap').addClass('cols-'+numwidgets);
	var numwidgets = $('#homepage-four .wrap .widgets div.widget').length;
	$('#homepage-four .wrap .widgets').addClass('cols-'+numwidgets);
	var numwidgets = $('#homepage-five .wrap .widgets div.widget').length;
	$('#homepage-five .wrap .widgets').addClass('cols-'+numwidgets);
});