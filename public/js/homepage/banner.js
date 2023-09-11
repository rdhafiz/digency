/*sliders*/
$(document).ready(function () {
    $(".owl-carousel").owlCarousel();
});

$('.slider-wrap').owlCarousel({
    loop: true,
    autoplay: true,
    animateOut: 'fadeOut',
    margin: 10,
    nav: false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
})



$('.tab-content-change').owlCarousel({
    loop: true,
    margin: 0,
    nav: false,
    dots: false,
    autoplay: true,
    responsive: {
        0: {items: 2},
        600: {items: 3},
        1000: {items: 4}
    }
});

$('.customer-feedback').owlCarousel({
    loop: true,
    margin: 20,
    nav: true,
    dots: false,
    autoplay: true,
    responsive: {
        0: {items: 1},
        600: {items: 2},
        1000: {items: 3}
    }
});
