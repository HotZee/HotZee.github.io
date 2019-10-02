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
        $(this).parent().toggleClass("active");
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



// RATE

    $(".star-rating__ico").on("click", function (event) {
        var temp = $(this).attr("data-value");
        $("#score").attr("value", temp);
    });

    // MODAL FEEDBACK

    $("#reviews-button").on("click", function (event) {
       $("#modalFeedback").addClass("active");
    });

    $("#close-feedback").on("click", function (event) {
        $("#modalFeedback").removeClass("active");
    });

    // MODAL ONECLICKBUY

    $("#onClickBuy-btn").on("click", function (event) {
        $("#modalOneClick").addClass("active");
    });

    $("#close-oneClickBuy").on("click", function (event) {
        $("#modalOneClick").removeClass("active");
    });

    // MODAL CALLMEBACK

    $(".header__contacts_text").on("click", function (event) {
        $("#modalCallMeBack").addClass("active");
    });

    $("#close-callMeBack").on("click", function (event) {
        $("#modalCallMeBack").removeClass("active");
    });



    $(".popup-overlay").on("click", function (event) {
        var modal = $(".popup-body *");
        var modal2 = $(".popup-body")
        var input = $("input");
        var textarea = $("textarea");
        var button = $("button");
        var popupTitle = $(".popup-title");
        var popupRate = $(".popup-rate");
        var popupRateInner = $(".popup-rate *");
        if(!modal.is(event.target) && !modal2.is(event.target) && !input.is(event.target) && !textarea.is(event.target) && !button.is(event.target) && !popupTitle.is(event.target) && !popupRate.is(event.target) && !popupRateInner.is(event.target)) {
            $(this).parent().removeClass("active");
        }
    });



});

// SLICK SLIDER

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