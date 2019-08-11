$(function () {

function getTimeRemaining(endtime) {
    var t = Date.parse(endtime) - Date.parse(new Date());
    var seconds = Math.floor((t / 1000) % 60);
    var minutes = Math.floor((t / 1000 / 60) % 60);
    var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
    var days = Math.floor(t / (1000 * 60 * 60 * 24));
    return {
        'total': t,
        'days': days,
        'hours': hours,
        'minutes': minutes,
        'seconds': seconds
    };
}

function initializeClock(id, endtime) {
    var clock = document.getElementById(id);
    var daysSpan = clock.querySelector('.days');
    var hoursSpan = clock.querySelector('.hours');
    var minutesSpan = clock.querySelector('.minutes');
    var secondsSpan = clock.querySelector('.seconds');

    function updateClock() {
        var t = getTimeRemaining(endtime);

        daysSpan.innerHTML = t.days;
        hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
        minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
        secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

        if (t.total <= 0) {
            clearInterval(timeinterval);
        }
    }

    updateClock();
    var timeinterval = setInterval(updateClock, 1000);
}

var deadline = new Date(Date.parse(new Date()) + 15 * 24 * 60 * 60 * 1000); // for endless timer
initializeClock('countdown', deadline);




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
        $("#nav").addClass("test-class");
    } else {
        header.removeClass("fixed");
        $("#nav").removeClass("test-class");
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

    /*ACTIVE NAV WHILE SCROLLING*/
    jQuery(window).scroll(function(){
        var $sections = $('section');
        $sections.each(function(i,el){
            var top  = $(el).offset().top-100;
            var bottom = top +$(el).height();
            var scroll = $(window).scrollTop();
            var id = $(el).attr('id');
            if( scroll > top && scroll < bottom){
                $('a.active').removeClass('active');
                $('a[data-scroll="#'+id+'"]').addClass('active');
            }
        })
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
});