require('./bootstrap');

(function ($) {
    "use strict";

    $(window).on('scroll load', function () {
        if (window.pageYOffset > 100) {

            $("nav").addClass("bg-light");
            $("nav").addClass("navbar-light");
            $("nav").removeClass("navbar-dark");
            $("#logoPojok").addClass("brand-dark");
            $("#logoPojok").removeClass("brand-light");
            $("#posisilogo").removeClass("navbar-brand-position");
            $("#navbarsExampleDefault").removeClass("navbar-link-position");
            $("#myBtn").addClass("show");

        }
        else {
            $("nav").removeClass("bg-light");
            $("nav").addClass("navbar-dark");
            $("#logoPojok").addClass("brand-light");
            $("#logoPojok").removeClass("brand-dark");
            $("#posisilogo").addClass("navbar-brand-position");
            $("#navbarsExampleDefault").addClass("navbar-link-position");
            $("#myBtn").removeClass("show");

        }
    });
}
)(jQuery);
