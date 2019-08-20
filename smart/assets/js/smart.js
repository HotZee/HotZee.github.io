// SLIDER

$('#right__arrow').click(function () {
    var currentSlide = $('.slide.active');
    var nextSlide = currentSlide.next();

    currentSlide.fadeOut(300).removeClass('active');
    nextSlide.fadeIn(300).addClass('active');

    if(nextSlide.length == 0) {
        $('.slide').first().fadeIn(300).addClass('active');
    }
});


$('#left__arrow').click(function () {
    var currentSlide = $('.slide.active');
    var prevSlide = currentSlide.prev();

    currentSlide.fadeOut(300).removeClass('active');
    prevSlide.fadeIn(300).addClass('active');

    if(prevSlide.length == 0) {
        $('.slide').last().fadeIn(300).addClass('active');
    }
});


// SERVICES
$(".service__logo").on("click", function (event) {
    event.preventDefault();
    $(".service__logo").removeClass("logo__active");
    $("[data-intro]").removeClass("active");
    $("[data-image]").removeClass("active");
    var id = $(this).attr('data-services');
    var numID = parseInt(id.match(/\d+/));
    $('[data-intro="#intro'+numID+'"]').addClass('active');
    $('[data-intro="#intro'+numID+'"]').addClass('animated fadeInUp');
    $('[data-image="#image'+numID+'"]').addClass('active');
    $('[data-image="#image'+numID+'"]').addClass('animated fadeInUp');
    $(this).toggleClass("logo__active");
});


//FADEIN OF SECTION`S DIV
jQuery(window).scroll(function(){
    var $sections = $('section');
    $sections.each(function(i,el){
        var top  = $('#services').offset().top-450;
        var bottom = top +$('#services').height();
        var scroll = $(window).scrollTop();
        if( scroll > top && scroll < bottom){
            $('[data-intro="#intro1"]').addClass('animated fadeInUp');
            $('[data-image="#image1"]').addClass('animated fadeInUp');
            $('[data-intro="#intro1"]').addClass('active');
            $('[data-image="#image1"]').addClass('active');
        }
    })
});