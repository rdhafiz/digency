/* banner sliders*/
$(document).ready(function () {
    PreLoader();
    $(".home-banner").owlCarousel();
});

$(".slider-wrap").owlCarousel({
    loop: true,
    autoplay: false,
    animateOut: "fadeOut",
    margin: 10,
    nav: false,
    items: 1,
});

$(".client-slider-wrap").owlCarousel({
    loop: true,
    // autoplay: true,
    margin: 20,
    nav: true,
    navText: [
        '<i class="fa-solid fa-chevron-left"></i>',
        '<i class="fa-solid fa-chevron-right"></i>',
    ],
    dots: false,
    responsive: {
        0: {
            items: 2,
        },
        600: {
            items: 4,
        },
        1000: {
            items: 6,
        },
    },
});

$(".tab-content-change").owlCarousel({
    loop: true,
    margin: 0,
    nav: false,
    dots: false,
    autoplay: true,
    responsive: {
        0: { items: 1 },
        600: { items: 2 },
        1000: { items: 4 },
    },
});

$(".customer-feedback").owlCarousel({
    loop: true,
    margin: 20,
    nav: true,
    dots: false,
    autoplay: true,
    responsive: {
        0: { items: 1 },
        600: { items: 2 },
        1000: { items: 3 },
    },
});

/*counters*/

let timeout1 = null;
let timeout2 = null;
let timeout3 = null;
let timeout4 = null;

function countUP(c, number) {
    const elem = document.querySelector(c);
    let count = parseInt(document.querySelector(c).innerText);
    if (c == ".num-1") {
        timeout1 = setInterval(() => {
            if (count >= number) {
                clearInterval(timeout1);
            }
            elem.innerText = count++;
        }, 0.1);
    } else if (c == ".num-2") {
        timeout2 = setInterval(() => {
            if (count >= number) {
                clearInterval(timeout2);
            }
            elem.innerText = count++;
        }, 0.1);
    } else if (c == ".num-3") {
        timeout3 = setInterval(() => {
            if (count >= number) {
                clearInterval(timeout3);
            }
            elem.innerText = count++;
        }, 0.1);
    } else if (c == ".num-4") {
        timeout4 = setInterval(() => {
            if (count >= number) {
                clearInterval(timeout4);
            }
            elem.innerText = count++;
        }, 0.1);
    }
}

const nums = document.querySelectorAll(".num");
const observer = new IntersectionObserver((nums) => {
    nums.forEach((num) => {
        if (num.isIntersecting) {
            if (num.target.classList.contains("num-1")) {
                clearInterval(timeout1);
                num.target.innerText = 0;
                countUP(".num-1", 368);
            } else if (num.target.classList.contains("num-2")) {
                clearInterval(timeout2);
                num.target.innerText = 0;
                countUP(".num-2", 937);
            } else if (num.target.classList.contains("num-3")) {
                clearInterval(timeout3);
                num.target.innerText = 0;
                countUP(".num-3", 442);
            } else if (num.target.classList.contains("num-4")) {
                clearInterval(timeout4);
                num.target.innerText = 0;
                countUP(".num-4", 1946);
            }
        }
    });
});
nums.forEach((num) => observer.observe(num));
$(document).ready(function () {
    let parallaxSpeed = 0.3;
    $(window).on("scroll", function () {
        let scrollTop = $(this).scrollTop();
        $(".background-parallax").css(
            "transform",
            "translateY(" + scrollTop * parallaxSpeed + "px)"
        );
    });
});
