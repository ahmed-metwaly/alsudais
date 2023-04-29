$(function () {

    $('.side-nav').click(function () {
        $('header nav').toggleClass('right-0');
        $(this).css('display', 'none');
        $('.overlay').css({
            "opacity": "1",
            "z-index": "1"
        });
        $('.page-title').css({
            "z-index": "0"
        });
        $('.top-header').css({
            "z-index": "0"
        });
        $('.fixed-footer').css({
            "z-index": "0"
        });

    });
    $('.overlay').click(function () {
        $('header nav').toggleClass('right-0');
        $('.side-nav').css('display', 'block');
        $(this).css({
            "opacity": "0",
            "z-index": "-1"
        });
        $('.page-title').css({
            "z-index": "9"
        });
        $('.top-header').css({
            "z-index": "2"
        });
        $('.fixed-footer').css({
            "z-index": "99"
        });
    });

});

var swiper = new Swiper('.swiper-container', {
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});
