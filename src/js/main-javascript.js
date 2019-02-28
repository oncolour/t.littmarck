(function ($) {
    "use strict";
    $(document).ready(function () {

        // Open and close menu
        $("#toggle-menu").click(function () {
            $("body").toggleClass('menuOpen');
            $(".menu-container").toggleClass('open');
            $(".fimi").toggleClass('active');
            $("#page-header").toggleClass('darken');
        });

        var filterContainer = document.querySelector('#js-page-scroll');
        var mixer = mixitup(filterContainer);

       
        
        $(".filterBtn").click(function () {
            $(".active").toggleClass('active');
            $(this).toggleClass('active');
            $("#js-page-scroll").mCustomScrollbar("scrollTo", "left", {
                scrollInertia: 0
            });
        });

         $('#js-page-scroll').on('mixEnd', function(e, state) {
            var state = mixer.getState();
            //console.log(state.totalShow + ' targets are currently shown');
            if(state.totalShow <= 2) {
                $('.post-teaser').toggleClass('hover');
            }
        }); 
          
        // Prevent default
        $(window).scroll(function() {
            var top_of_element = $(".post-teaser").offset().top;
            var bottom_of_element = $(".post-teaser").offset().top + $(".post-teaser").outerHeight();
            var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
            var top_of_screen = $(window).scrollTop();

            
            var scrollDistance = $(window).innerHeight();
            //console.log(scrollDistance);
            //console.log(window.pageYOffset);
            

            if (window.pageYOffset > scrollDistance) {
                //console.log("scroll horizontal now");
                

                
                
            } else {
               // console.log("no scroll");
                //$("#js-page-scroll").mCustomScrollbar("disable", true);
                
            }
        });

    });
})(jQuery);

// Adding smooth and realistic scrolling behaviour. 
/* $(function () {
    jQuery.scrollSpeed(100);
}); */
    

    if (window.innerWidth > 769) {
        $(window).ready(function(){
         // Horizontal scroll
         if($("#js-page-scroll").length){
            $("#js-page-scroll").mCustomScrollbar({
                axis:"x",
                theme:"dark-3",
                scrollInertia: 700,
                autoHideScrollbar: true,
                scrollbarPosition: 'outside',
                contentTouchScroll: true,
                advanced:{ autoExpandHorizontalScroll: 3 }
            });
        }
    });
    } 





 