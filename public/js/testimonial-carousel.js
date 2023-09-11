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
