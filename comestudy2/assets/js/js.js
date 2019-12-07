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


    function setEqualHeight()
    {
        if ( $(window).width() > 960 ) {
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

            var temp1 = tallestLevelColumn+36;
            var temp2 = tallestDiscountColumn+36;

            // $(".level-item").height(tallestLevelColumn);
            $(".level-item").css({'min-height': temp1 + 'px'});
            // $(".discounts-item").height(tallestDiscountColumn);
            $(".discounts-item").css({'min-height': temp2 + 'px'});
        }
        else {
            $(".level-item").css({'min-height': 2 + 'px'});
            $(".discounts-item").css({'min-height': 2 + 'px'});
        }
    }
    $(document).ready(function() {
        setEqualHeight($(".container > div"));
        $('.js-example-basic-multiple').select2(
                {
                    width: '100%',
                    placeholder: 'Цель обучения',
                    fontStyle: 'normal'
                }
            );
        $('.select2-selection').css({
            'width': '100%',
            'border-radius': '2px',
            'border-weight': '1px',
            'border-color': '#DBDBDB',
            'border-style': 'dashed',
            'min-height': '3vw'
        });
        $('.select2-selection').children().css({

        });

        $('.js-example-basic-multiple').on('change', function() {
            var last = $(this).find('option').last().val();
            if ($(this).val() == last) {
                $('.first-form_textarea-wrapper').addClass('active');
            }
            else {
                $('.first-form_textarea-wrapper').removeClass('active');
            }
        });
    });


    $(window).resize(function() {

        function setEqualHeight()
        {
            if ( $(window).width() > 960 ) {
                $(".level-item").css({'min-height': 2 + 'px'});
                $(".discounts-item").css({'min-height': 2 + 'px'});
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

                var temp1 = tallestLevelColumn+36;
                var temp2 = tallestDiscountColumn+36;

                // $(".level-item").height(tallestLevelColumn);
                $(".level-item").css({'min-height': temp1 + 'px'});
                // $(".discounts-item").height(tallestDiscountColumn);
                $(".discounts-item").css({'min-height': temp2 + 'px'});
            }
            else {
                $(".level-item").css({'min-height': 2 + 'px'});
                $(".discounts-item").css({'min-height': 2 + 'px'});
            }
        }
        $(document).ready(function() {
            setEqualHeight($(".container > div"));
        });
    });



});


