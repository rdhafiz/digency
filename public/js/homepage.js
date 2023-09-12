/* banner sliders*/
$(document).ready(function () {
    PreLoader()
    $(".home-banner").owlCarousel();
});


$('.slider-wrap').owlCarousel({
    loop: true,
    autoplay: true,
    animateOut: 'fadeOut',
    margin: 10,
    nav: false,
   items:1,
})

$('.client-slider-wrap').owlCarousel({
    loop: true,
    // autoplay: true,
    margin: 20,
    nav: true,
    navText: [
        '<i class="fa-solid fa-chevron-left"></i>',
        '<i class="fa-solid fa-chevron-right"></i>'
    ],
    dots: false,
    responsive: {
        0: {
            items: 2
        },
        600: {
            items: 4
        },
        1000: {
            items: 6
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
        0: {items: 1},
        600: {items: 2},
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


/*counters*/
window.addEventListener('load', function () {
    const nums = document.querySelectorAll('.num')
    nums.forEach((num) => {
        if (num.classList.contains('num-1')) {
            countUP('.num-1', 368)
        } else if (num.classList.contains('num-2')) {
            countUP('.num-2', 937)
        } else if (num.classList.contains('num-3')) {
            countUP('.num-3', 442)
        } else if (num.classList.contains('num-4')) {
            countUP('.num-4', 1946)
        }
    })

})

function countUP(c, number) {
    const count1 = document.querySelector(c)
    const count1val = parseInt(document.querySelector('.num-1').innerText)
    let count = count1val
    let timeout = null
    timeout = setInterval(() => {
        if (count >= number) {
            clearInterval(timeout)
        }
        count1.innerText = count++

    }, .1)
}
