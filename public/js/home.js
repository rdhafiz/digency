// btn-hence working on service button carousel

$('.btn-hence').owlCarousel({
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

// testimonial carousel

$('.testimonial').owlCarousel({
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
