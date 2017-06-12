jQuery(function($) {

	$(document).scroll(function(){
	    var topWindow = $(window).scrollTop();
	    if(topWindow > 70) {
	       $("header").addClass('header_close');
	    }else {
	       $("header").removeClass('header_close');
	    };
	});

	
});
