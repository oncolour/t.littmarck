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
                mouseWheel:{ scrollAmount: 250, preventDefault: false },
                scrollbarPosition: 'outside',
                contentTouchScroll: true,
                advanced:{ autoExpandHorizontalScroll:true }
            });
        }
    });
        console.log("I'm 769 px wide");
    } else {
        console.log("I'm Mobile");
    } 





 