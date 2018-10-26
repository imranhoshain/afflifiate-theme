(function ($) {
    "use strict";

    jQuery(document).ready(function ($) {

 /*---------------------------------------------------
                    Scrool Top
---------------------------------------------------*/

        $('#scrollTop').on('click', function () {
            $("html, body").animate({
                scrollTop: 0
            }, 1000);
            return false;
        });





 });

    jQuery(window).load(function () {

    });

}(jQuery));
    