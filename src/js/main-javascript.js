(function ($) {
    "use strict";
    $(document).ready(function () {

        // Open and close menu
        $("#toggle-menu").click(function () {
            $(".menu-container").toggleClass('open');
            $(".fimi").toggleClass('active');
            $("body").toggleClass('darken');
        });

       

         


    });
})(jQuery);

// Adding smooth and realistic scrolling behaviour. 
/* $(function () {
    jQuery.scrollSpeed(100);
}); */

$(window).ready(function(){
    // Horizontal scroll
    if($("#js-page-scroll").length){
        $("#js-page-scroll").mCustomScrollbar({
            axis:"x",
            theme:"dark-3",
            scrollInertia: 700,
            autoHideScrollbar: true,
            mouseWheel:{ scrollAmount: 200, preventDefault: false },
            
            scrollbarPosition: 'outside',
            contentTouchScroll: true,
            advanced:{ autoExpandHorizontalScroll:true }
        });
    }
});
 