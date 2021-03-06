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

    $(".user-cabinet__itemOrders_item--content").on("click", function (event) {
        event.preventDefault();
        $(this).children().toggleClass("active");
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


    $(".deliveryItem").on("click", function (event) {
        event.preventDefault();
        $(".deliveryItem").removeClass("active");
        $(this).addClass("active");
    });
    $(".paymentItem").on("click", function (event) {
        event.preventDefault();
        $(".paymentItem").removeClass("active");
        $(this).addClass("active");
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

    $(".plusBtn").on("click", function (event) {
        var temp = $(this).next().val();
        var temp2 = parseInt(temp);
        if(temp2<1) {
            var temp2 = 1;
            $(".product__card_chooseAmount--input").val(temp2);
        }
        else {
            var temp2 = temp2+1;
            $(".product__card_chooseAmount--input").val(temp2);
        }
    });
    $(".minusBtn").on("click", function (event) {
        var temp = $(this).prev().val();
        var temp2 = parseInt(temp);
        if(temp2<=1) {
            var temp2 = 1;
            $(".product__card_chooseAmount--input").val(temp2);
        }
        else {
            var temp2 = temp2-1;
            $(".product__card_chooseAmount--input").val(temp2);
        }
    });


    $(".basketMax").on("click", function (event) {
        var temp = $(this).parent();
        var temp2 = temp.find("input").val();
        var temp3 = parseInt(temp2);
        if(temp3<1) {
            var temp3 = 1;
            temp.find("input").val(temp3);
        }
        else {
            var temp3 = temp3+1;
            temp.find("input").val(temp3);
        }
    });
    $(".basketMin").on("click", function (event) {
        var temp = $(this).parent();
        var temp2 = temp.find("input").val();
        var temp3 = parseInt(temp2);
        if(temp3<=1) {
            var temp3 = 1;
            temp.find("input").val(temp3);
        }
        else {
            var temp3 = temp3-1;
            temp.find("input").val(temp3);
        }
    });

    $('[type="submit"]').on('click', function () {
        // this adds 'required' class to all the required inputs under the same <form> as the submit button
        $(this)
            .closest('form')
            .find('[required]')
            .addClass('required');
    });


    $('.checkbox-item').on('click', function (event) {
        event.preventDefault();
        $(this).parent().toggleClass("active");
        if(!$('#availability').attr('checked', true)) {
            $('#availability').attr('checked', false);
        }
        else {
            $('#availability').attr('checked', true);
        }
    });
    $('.checkbox-active').on('click', function (event) {
        event.preventDefault();
        $(this).parent().toggleClass("active");
        if($('#availability').attr('checked', true)) {
            $('#availability').attr('checked', false);
        }
        else {
            $('#availability').attr('checked', true);
        }
    });

    $(function () {
        if ( $(window).width() > 768 ) {
            var nameHeight = $("#productCardItemName").height();
            $("#productPricingDiv").css({'height':($("#productDiv").height()+'px')});
            $("#productPhotoDiv").css({'height':($("#productDiv").height()-nameHeight+'px')});
        }
        else {
            $("#productPricingDiv").css({'height': '530px'});
        }
    });



    $(window).resize(function() {
        if ( $(window).width() > 768 ) {
            var nameHeight = $("#productCardItemName").height();
            $("#productPricingDiv").css({'height':($("#productDiv").height()+'px')});
            $("#productPhotoDiv").css({'height':($("#productDiv").height()-nameHeight+'px')});
        }
        else {
            $("#productPricingDiv").css({'height': '530px'});
        }
    });








    if($('.js-sticky-container').length){$('.js-filter-sticky').stickySidebar({containerSelector:'.js-sticky-container',topSpacing:20,bottomSpacing:20,minWidth:768});}
    if($('.js-sidebar-container-sticky').length){$('.js-sidebar-sticky').stickySidebar({containerSelector:'.js-sidebar-container-sticky',topSpacing:20,bottomSpacing:20,minWidth:768});}

    $(window).scroll(function() {
     $(window).scrollTop() > $(window).height() ? $(".header__main").addClass("header__main_fixed_menu") : $(".header__main").removeClass("header__main_fixed_menu") });

});


