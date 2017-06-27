$(function() {

	$(".hamburger").on('click', function(){
	    $(this).toggleClass('is-active');
        $(".top_nav").slideToggle();
    });

});
