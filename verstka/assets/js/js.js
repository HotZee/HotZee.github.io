$(function() {

    var header = $("#header"),
        introH = $("#intro").innerHeight(),
        scrollOffset = $(window).scrollTop();
    checkScroll(scrollOffset);


    /*FIXED HEADER*/
    $(window).on("scroll",function () {
        scrollOffset = $(this).scrollTop();
        checkScroll(scrollOffset);
    });

    function checkScroll(scrollOffset) {
        if (scrollOffset >= introH) {
            header.addClass("fixed");
        } else {
            header.removeClass("fixed");
        }
    }


    /*SMOOTH SCROLL*/
    $("[data-scroll]").on("click",function (event) {
        event.preventDefault();

        var sectionId = $(this).data('scroll'),
            sectionOffset = $(sectionId).offset().top;

        $("#nav,a").removeClass("active");
        $(this).addClass("active");

        $("html, body").animate({
           scrollTop: sectionOffset-40
        });
    });


    /*BURGER MENU*/
    $("#burger_menu").on("click", function (event) {
        event.preventDefault();
        $("#nav").toggleClass("active");
        $("#burger_menu").toggleClass("active");
    });
    $("#nav,a").on("click", function (event) {
        event.preventDefault();
        $("#burger_menu").removeClass("active");
        $("#nav").removeClass("active");
        $("#nav,a").removeClass("active");
    });


    /*AKORDION*/
    $("[data-collapse]").on("click", function (event) {
       event.preventDefault();
       var sectionId = $(this).data('collapse');
       $(sectionId).slideToggle();
       $(this).toggleClass("active");
    });


    /*SLIDER*/
    $("[data-slider]").slick({
        infinite: true,
        fade: false,
        slidesToShow: 1,
        slidesToScroll: 1
    });
});