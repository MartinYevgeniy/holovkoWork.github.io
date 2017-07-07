
$(document).ready(function() {
$(".description").equalHeights();
$(".investments-heading").equalHeights();
$(".support ul li").equalHeights();


// nav trigger
    $(".nav-trigger").click(function(){
        if($(this).hasClass("is-active")){
            $(this).removeClass("is-active");
        }else{
            $(this).addClass("is-active");
        }
        $(".menu-mobile").slideToggle(500);
    });
    new WOW().init();

    //script for videos
    $("#radchenko").click(function(){
        if($("#v_radchenko").hasClass("hidden")){
            $("#v_radchenko").removeClass("hidden");
            $("#v_savchenko").addClass("hidden");
        }
    });

    $("#savchenko").click(function(){
        if($("#v_savchenko").hasClass("hidden")){
            $("#v_savchenko").removeClass("hidden");
            $("#v_radchenko").addClass("hidden");
        }
    });

    //UPBUTTON
    $(".upbutton").click(function() {
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });
});
