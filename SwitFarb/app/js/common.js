$(function() {

    $(".nav-trigger").click(function(){
        if($(this).hasClass("is-active")){
            $(this).removeClass("is-active");
        }else{
            $(this).addClass("is-active");
        }
        $(".top_nav_mob").slideToggle(500);
    });
});
