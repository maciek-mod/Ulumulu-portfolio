$(document).ready(function() {
    var body = $("html, body")

    // scroll menu
    function scrollMenu() {
        $(".menu_content ul li").click(function(e) {
            var element = $(this).data("href");
            $(".menu_slide").toggleClass("menu_toggle");
            $("#hamburger").toggleClass("open");
            if ($("#project").length) {
                if ($(window).width() <= 768) {
                    body.stop().animate({
                        scrollTop: $("#" + element + "").offset().top - 70
                    }, 1000, "swing");
                }else {
                    body.stop().animate({
                        scrollTop: $("#" + element + "").offset().top
                    }, 1000, "swing");
                }
            }
        });
    }
    scrollMenu();

    // pojawianie sie napisu

    $(".header_title h2").animate({
        opacity: 1,
    }, 2000, function() {
        $(".header_title p").animate({
            opacity: 1,
        }, 1300);
    });

    // scroll down

    $(".scroll").click(function(e) {
        $("html, body").stop().animate({
            scrollTop: $("section#form").position().top
        }, 700, 'swing');
    });

    // btn go up

    $(".go_up").click(function(e) {
        body.stop().animate({
            scrollTop: 0
        }, 700, 'swing');
    });

    function visibleGoUp() {
        var posDoc = $(window).scrollTop();

        if ($("#isolation").length) {
            var showBtn = $("#isolation").position().top;
            if ((posDoc + $(window).height()) > 1500) {
                $(".go_up").fadeIn();
            } else {
                $(".go_up").fadeOut();
            }
        } else {
            var showBtn = $(".btn_load_more").position().top;
            if ((posDoc + $(window).height()) > showBtn) {
                $(".go_up").fadeIn();
            } else {
                $(".go_up").fadeOut();
            }
        }

    };

    function mobile_background_menu() {
        var posDoc2 = $(window).scrollTop();

        if (posDoc2 > 70 && $(window).width() <= 768) {
            $("#top_header .menu").addClass("background_menu");
            $("#view_post .menu").addClass("background_menu");
        } else {
            $("#top_header .menu").removeClass("background_menu");
            $("#view_post .menu").removeClass("background_menu");

        }

    }
    // if ($("#project").length && $(window).width() >= 992) {
    //
    //
    //     $("#competences").addClass("hidden_section");
    //     $("#reviews_section").addClass("hidden_section");
    //     $("#form").addClass("hidden_section");
    // }

    function showSection() {
        if ($("#project").length && $(window).width() >= 992) {
            var posDoc = $(window).scrollTop(),
                section_project = $("#project"),
                section_competences = $("#competences"),
                secttion_reviews = $("#reviews_section"),
                section_form = $("#form"),
                footer = $("footer");

            if ((posDoc + $(window).height()) > (section_project.position().top + 200 + section_project.outerHeight())) {
                section_competences.removeClass("hidden_section");
            }

            if ((posDoc + $(window).height()) > (secttion_reviews.position().top + secttion_reviews.outerHeight())) {
                secttion_reviews.removeClass("hidden_section");
            }
            if ((posDoc + $(window).height()) > (section_form.position().top -200 + section_form.outerHeight())) {
                section_form.removeClass("hidden_section");
            }

        }

    };

    function label_form() {
        if ($("#form").length) {
            $(".inputs_actived").focus(function() {
                    var label_width = $(this).parent().parent().find("label").width();
                    $(this).parent().parent().find("label").addClass("label_right").css("left", "calc(100% - " + label_width + "px)");
            });
        }
    }
    label_form();

    // showSection();
    visibleGoUp();
    mobile_background_menu();


    $(window).scroll(function(e) {
        visibleGoUp();
        // showSection();
        mobile_background_menu();

    });

    $(window).resize(function() {
        scrollMenu();
    });


});
