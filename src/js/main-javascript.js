(function ($) {
    "use strict";
    $(document).ready(function () {

        // Open and close menu
        $("#toggle-menu").click(function () {
            $(".menu-container").toggleClass('open');
            $(".fimi").toggleClass('active');
            $("body").toggleClass('darken');
        });

       

        //Vertical scroll
        scrollVert();
        var scrollLeft = 0;

        function scrollVert() {
            $('html, body, *').off('mousewheel').mousewheel(function (e, delta) {
                this.scrollTop -= (delta * 40);
                e.preventDefault();
                setTimeout(function () {
                    if ($(window).scrollTop() + $(window).height() == $(document).height())
                        scrollHoriz();
                }, 0)

            });
        }
        function scrollHoriz() {
            $('html, body, *').off('mousewheel').mousewheel(function (e, delta) {
                this.scrollLeft -= (delta * 80);
                e.preventDefault();
                scrollLeft = this.scrollLeft
                setTimeout(function () {
                    if (scrollLeft == 0) scrollVert();
                }, 0)
            });
        }

         


    });
})(jQuery);

// Adding smooth and realistic scrolling behaviour. 
/* $(function () {
    jQuery.scrollSpeed(100, 800);
}); */