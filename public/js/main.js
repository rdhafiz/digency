// preloader controller
setTimeout(() => {
    const preloader = document.getElementById('preloader');
    setTimeout(() => {
        document.body.removeChild(preloader)
    }, 2000)
}, 3000);


// header scroll maintain
let header = $(".header");
let scrollChange = 1;
$(window).scroll(function () {
    let scroll = $(window).scrollTop();
    if (scroll >= scrollChange) {
        header.addClass('header-scrolled');
    } else {
        header.removeClass("header-scrolled");
    }
});
$(document).ready(function() {
    $(".link").click(function() {
        $(".active").removeClass("active");
        $(this).addClass("active");
    });
});

// header menu-content-controller

function btnController() {
    let menuController = document.querySelector('.header-menu');
    if (menuController.classList.contains('active')) {
        menuController.classList.remove('active');
    } else {
        menuController.classList.add('active');
    }
}
