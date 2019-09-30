$(function () {


    // NAV

    $(".menu__item").on("click", function (event) {
        if ($(this).hasClass("active")) {
            $(this).removeClass("active");
            $(this).children().removeClass("active");
        }
        else {
            $(".menu__item").removeClass("active");
            $(".menu__item").children().removeClass("active");
            $(this).toggleClass("active");
            $(this).children().toggleClass("active");
        }
    });

    $("#burger_menu").on("click", function (event) {
        event.preventDefault();
        $("#burger_menu").toggleClass("active");
        $("#menu-item").toggleClass("active");
    });



    // USER CABINET ITEMS

    $(".user-cabinet__triangle").on("click", function (event) {
        event.preventDefault();
        $(".user-cabinet__triangle").parent().toggleClass("active");
    });

    $("#autoFillButton").on("click", function (event) {
        event.preventDefault();
        $(this).addClass("active");
        $("#ordersButton").removeClass("active");
        $(".user-cabinet__item").addClass("active");
        $(".user-cabinet__itemOrders").removeClass("active");
    });

    $("#ordersButton").on("click", function (event) {
        event.preventDefault();
        $(this).addClass("active");
        $("#autoFillButton").removeClass("active");
        $(".user-cabinet__itemOrders").addClass("active");
        $(".user-cabinet__item").removeClass("active");
    });

    // CHECKOUT

    $(".tbody-buttonDelivery").on("click", function (event) {
        event.preventDefault();
        $(".checkout__main_delivery--tbody").children().removeClass("active");

        var parent = $(this).parent();
        parent.parent().addClass("active");
    });

    $(".tbody-buttonPayment").on("click", function (event) {
        event.preventDefault();
        $(".checkout__main_payment--tbody").children().removeClass("active");

        var parent = $(this).parent();
        parent.parent().addClass("active");
    });




});


$(document).ready(function(){
    $('.main__slider_wrapper').slick({
        vertical: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        verticalSwiping: true,
        adaptiveHeight: true,
        prevArrow: $('.slider__arrows.prev'),
        nextArrow: $('.slider__arrows.next'),
    });
});