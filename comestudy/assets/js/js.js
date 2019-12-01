$(function () {

    /*AKORDION HORIZONTAL*/

    var panel = $('.at-accordion__panel');

    panel.click( function(){
        // console.log('click');
        panel.removeClass('is-open');

        $(this).addClass('is-open');
    });


    // AKORDION VERTICAL

    $(".akordion_item").on("click", function (event) {
        var thisContent = $(this).find(".akordion_content");

        if($(this).hasClass("active")) {
            thisContent.slideToggle();
            $(this).removeClass("active");
        }

        else {
            $(".akordion_content").slideUp();
            $(".akordion_item").removeClass("active");
            thisContent.slideToggle();
            $(this).addClass("active");
        }


    });


    function setEqualHeight(columns)
    {
        if ( $(window).width() > 768 ) {
            var tallestLevelColumn = 0;
            var tallestDiscountColumn = 0;

            $(".level-item").each(
                function()
                {
                    currentHeight = $(this).height();
                    if(currentHeight > tallestLevelColumn)
                    {
                        tallestLevelColumn = currentHeight;
                    }
                }
            );
            $(".discounts-item").each(
                function()
                {
                    currentHeight = $(this).height();
                    if(currentHeight > tallestDiscountColumn)
                    {
                        tallestDiscountColumn = currentHeight;
                    }
                }
            );
            $(".level-item").height(tallestLevelColumn);
            $(".discounts-item").height(tallestDiscountColumn);
        }
        else {

        }
    }

    $(document).ready(function() {
        setEqualHeight($(".container > div"));
    });

});


