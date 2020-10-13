// document ready
(function ($) {

    $('body,html').bind('scroll mousedown wheel DOMMouseScroll mousewheel keyup', function(e){
        if ( e.which > 0 || e.type == "mousedown" || e.type == "mousewheel"){
         $("html,body").stop();
        }
       })

    $('#1_nav').fadeIn('1000');

    if ($(window).width() < 768) {
        $('#carousel').css("padding-top",$('#navbar').height());
        console.log($('#navbar').height());
    }


    // scroll functions
    $(window).scroll(function(e) {
        
        if ($(window).width() > 768)
        // add/remove class to navbar when scrolling to hide/show
        var scroll = $(window).scrollTop();
        if (scroll >= 50) {
            $('.navbar').addClass("navbar-hide");
        } else {
            $('.navbar').removeClass("navbar-hide");
        }
    
    });
    
    $("#scrollbtn").click(function() {
        $([document.documentElement, document.body]).animate({
            scrollTop: $("#3_nations").offset().top
        }, 2000);
        $([document.documentElement, document.body]).delay("3000").animate({
            scrollTop: $("#4_specials").offset().top
        }, 2000);
        $([document.documentElement, document.body]).delay("3000").animate({
            scrollTop: $("#5_company").offset().top
        }, 2000);
        $([document.documentElement, document.body]).delay("3000").animate({
            scrollTop: $("#6_work").offset().top
        }, 2000);
        $([document.documentElement, document.body]).delay("3000").animate({
            scrollTop: $("#7_recruit").offset().top
        }, 2000);
        $([document.documentElement, document.body]).delay("3000").animate({
            scrollTop: $("#8_footer").offset().top
        }, 2000);

        
    });
    
    $("#gotop").click(function() {
        $([document.documentElement, document.body]).animate({
            scrollTop: $("#1_nav").offset().top
        }, 2000);
    });

    $(window).scroll(function() {
        var windowBottom = $(this).scrollTop() + $(this).innerHeight();
        $(".fade").each(function() {
          /* Check the location of each desired element */
          var objectTop = $(this).offset().top ;
          
          /* If the element is completely within bounds of the window, fade it in */
          if (objectTop < windowBottom) { //object comes into view (scrolling down)
            if ($(this).css("opacity")==0) {$(this).delay(1000).fadeTo(500,1);}
          }
        });
      }).scroll(); //invoke scroll-handler on page-load
})(jQuery);    