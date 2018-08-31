$(document).ready(function() {
    var count = 1;
    var sortName = "All" ;
    var countSort = 0;
    $('.menu_hamburger').click(function() {
        $(this).find("#hamburger").toggleClass('open');
        $(".menu_slide").toggleClass("menu_toggle");
    });
    $(".close_menu").click(function(e) {
        // $(this).parent().parent().removeClass("menu_slide");
        $(".menu_slide").removeClass("menu_toggle");
        $("#hamburger").toggleClass('open');

    });
    if ($("#project").length) {
        $('.reviews-carousel').owlCarousel({
            loop: true,
            nav: false,
            responsive: {
                0: {
                    items: 1
                }
            }
        });
        var owl = $('.reviews-carousel').owlCarousel();
        $(".prev_slide").click(function() {
            owl.trigger('prev.owl.carousel');
        });

        $(".next_slide").click(function() {
            owl.trigger('next.owl.carousel');
        });
    }


    function gallery_style() {
        $(".galery_box:nth-child(7n + 1)").addClass("first");
        $(".galery_box:nth-child(7n + 2)").addClass("second");
        $(".galery_box:nth-child(7n + 3)").addClass("third");
        $(".galery_box:nth-child(7n + 4)").addClass("fourth");
        $(".galery_box:nth-child(7n + 5)").addClass("fifth");
        $(".galery_box:nth-child(7n + 6)").addClass("sixth");
    }
    gallery_style();

    function gallery_style_sort_2(sort_attr) {
        $(".galery .row").remove();

        $(".galery div").removeAttr('class');
        var searchElement = $(".galery").find("[data-sort~=" + sort_attr + "]");
        var length = Math.floor(searchElement.length / 6);
        var nth = 0;

        searchElement.each(function(index, element) {

            if (nth <= length) {
                if (index === (0 + (nth * 6))) {
                    $(this).addClass("first galery_box");
                } else if (index === (1 + (nth * 6))) {
                    $(this).addClass("second galery_box");
                } else if (index === (2 + (nth * 6))) {
                    $(this).addClass("third galery_box");
                } else if (index === (3 + (nth * 6))) {
                    $(this).addClass("fourth galery_box");
                } else if (index === (4 + (nth * 6))) {
                    $(this).addClass("fifth galery_box");
                } else if (index === (5 + (nth * 6))) {
                    $(this).addClass("sixth galery_box");
                    $(this).after("<div class=" + "row" + "></div>")
                    nth++;
                }
            }
        });
    }


    function move_hover() {
        if ($("#project").length && $(window).width() > 768) {
            var sort_btn = $(".btn_sort_project .nav_sort"),
                hover_svg = $(".hover_sort").width(),
                hover_element = $(".hover_sort");

            sort_btn.click(function(e) {
                var sort_attr = $(this).data("sort"),
                    galery_box = $(".galery div"),
                    galery_box_sort = $(".galery").find("[data-sort~=" + sort_attr + "]");

                sort_btn.removeClass("actived");
                $(this).addClass("actived");
                var position_hover = ($(this).position().left + ($(this).outerWidth() / 2)) - (hover_svg / 2);

                hover_element.stop().animate({
                    left: position_hover + "px"
                });
                if (sort_attr === "all") {
                    galery_box.hide();
                    gallery_style_sort_2(sort_attr);
                    galery_box.css({
                        "opacity": "0",
                        "display": "inline-block",
                    }).show().animate({
                        opacity: 1
                    });
                    galery_box.removeAttr('style');
                    $(".btn_load_more p").show();
                    count = 1;
                    countSort = 0;
                    sortName = "All";

                } else {
                    galery_box.hide();
                    gallery_style_sort_2(sort_attr);
                    galery_box_sort.each(function(index, element) {
                        if (index <= 5) {
                            $(this).css({
                                "opacity": "0",
                                "display": "inline-block",
                            }).show().animate({
                                opacity: 1
                            });
                        }
                    });
                    count = 1;
                    countSort = 2;
                    sortName = sort_attr;

                    $(".btn_load_more p").show();
                    if ($(".galery").find("[data-sort~=" + sortName + "]").last().css('display') !== 'none') {
                        $(".btn_load_more p").hide();
                    }
                }
            });
        }
    }

    function sort_mobile() {
        if ($("#project").length && $(window).width() < 768) {
            var sort_btn_mobile = $(".btn_sort_project .mobile_item");

            sort_btn_mobile.click(function(e) {
                var sort_attr = $(this).data("sort");

                var sort_attr_mobile = $(this).data("sort");
                var galery_box = $(".galery div");
                var galery_box_sort = $(".galery").find("[data-sort~=" + sort_attr_mobile + "]");

                if (sort_attr_mobile === "all") {

                    galery_box.hide();
                    gallery_style_sort_2(sort_attr_mobile);

                    galery_box.css({
                        "opacity": "0",
                        "display": "inline-block",
                    }).show().animate({
                        opacity: 1
                    });
                    galery_box.removeAttr('style');
                    $(".btn_load_more p").show();
                    setTimeout(function(){
                        $(".mobile >div").addClass("no_touch");
                        $(".mobile").removeAttr('style');
                        $(".mobile .slide").slideUp().removeClass("slide_open");
                    }, 200);
                    count = 1;
                    countSort = 0;
                    sortName = "All";

                } else {

                    galery_box.hide();
                    gallery_style_sort_2(sort_attr_mobile);
                    galery_box_sort.each(function(index, element) {
                        if (index <= 2) {
                            $(this).css({
                                "opacity": "0",
                                "display": "inline-block",
                            }).show().animate({
                                opacity: 1
                            });
                        }
                    });
                    var catchHtml = $(this).html();
                    count = 1;
                    countSort = 2;
                    sortName = sort_attr;
                    $(".btn_load_more p").show();
                    if ($(".galery").find("[data-sort~=" + sortName + "]").last().css('display') !== 'none') {
                        $(".btn_load_more p").hide();
                    }
                    setTimeout(function(){
                        $(".mobile >div").addClass("no_touch");
                        $(".mobile").removeAttr('style');
                        $(".mobile .slide").slideUp().removeClass("slide_open");
                        $(".mobile_item_show").hide();
                        $(".mobile_item_catch").show();
                        $(".mobile_item_catch").html(catchHtml);

                    }, 200);

                }
            });
        }
    }
    sort_mobile();

    function hide_and_show(sort) {

        if ($("#project").length) {

            $(".btn_load_more p").click(function(e) {
                if (countSort == 0) {
                    var elementsAll = $(".galery div:not(.row)");
                    if ($(window).width() < 768) {
                        elementsAll.each(function(index, element) {
                            if (count <= (Math.floor(elementsAll.length / 3))) {
                                if (index >= (count * (3 -1)) && index < (3 + (count * 3))) {
                                    $(this).css({
                                        "opacity": "0",
                                        "display": "inline-block",
                                    }).show().animate({
                                        opacity: 1
                                    });
                                }
                            }
                        });
                    } else {
                        gallery_style_sort_2("all");
                        var elementsAll = $(".galery div");
                        elementsAll.each(function(index, element) {
                            if (count < ((elementsAll.length / 6))) {
                                if (index >= (count * (7-1)) && index < (7 + (count * 7))) {
                                    $(this).css({
                                        "opacity": "0",
                                        "display": "inline-block",
                                    }).show().animate({
                                        opacity: 1
                                    });
                                }
                            }
                        });
                    }
                    if ($(".galery div").last().css('display') !== 'none') {
                        $(".btn_load_more p").hide();
                    }
                } else if (countSort == 2) {
                    if ($(window).width() < 768) {
                        var searchElement = $(".galery").find("[data-sort~=" + sortName + "]");
                        searchElement.each(function(index, element) {
                            if (count <= (Math.floor(searchElement.length / 3))) {
                                if (index >= (count * (3 -1)) && index < (3 + (count * 3))) {
                                    $(this).css({
                                        "opacity": "0",
                                        "display": "inline-block",
                                    }).show().animate({
                                        opacity: 1
                                    });
                                }
                            }
                        });
                        if ($(".galery").find("[data-sort~=" + sortName + "]").last().css('display') !== 'none') {
                            $(".btn_load_more p").hide();
                        }
                    } else {
                        var searchElement = $(".galery").find("[data-sort~=" + sortName + "]");
                        searchElement.each(function(index, element) {
                            if (count < ((searchElement.length / 6))) {
                                if (index >= (count * (7-1)) && index < (7 + (count * 7))) {
                                    $(this).css({
                                        "opacity": "0",
                                        "display": "inline-block",
                                    }).show().animate({
                                        opacity: 1
                                    });
                                }
                            }
                        });
                        if ($(".galery").find("[data-sort~=" + sortName + "]").last().css('display') !== 'none') {
                            $(".btn_load_more p").hide();
                        }
                    }

                }
                count++;

            });
        }
    };
    hide_and_show();

    function actived_hover() {
        if ($("#project").length) {
            $(".hover_sort").stop().animate({
                left: ($(".btn_sort_project .actived").position().left + ($(".btn_sort_project .actived").outerWidth() / 2)) - ($(".hover_sort").outerWidth() / 2) + "px"
            });
        }
    };

    move_hover();


    $(".mobile").click(function(e) {
        $(this).toggleClass("rotate");
        if ($(".mobile>div").hasClass("no_touch")) {

            $(this).find(".no_touch").removeClass("no_touch");
            $(this).css("cursor", "auto");
            $(this).find(".slide").slideDown().addClass("slide_open");
            if ($(".mobile_item_catch").css('display') == 'block') {
                $(".mobile_item_catch").hide();
                $(".mobile_item_show").show();
            }
        } else {
            $(this).find(".mobile_div").addClass("no_touch");
            $(this).find(".slide").slideUp("slow").addClass("slide_open");
        }

    });

    $(window).on('load', function(e) {
        actived_hover();
    });

    $(window).resize(function() {
        if ($(window).width() > 768){
            actived_hover();
            move_hover();
            $(".galery div").removeAttr('style');
            count = 1;
            $(".btn_load_more p").show();
        }
    });

    $(".wpcf7-response-output ,.wpcf7-mail-sent-ok").click(function(e){
        $(this).fadeOut();
    });


});
