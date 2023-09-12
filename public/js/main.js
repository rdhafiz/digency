/*page preloader*/
function PreLoader(){
    setTimeout(()=>{
        $('.page-loader').addClass('d-none')
    },1000)
}



/* banner sliders*/
$(document).ready(function () {
    PreLoader()
    $(".owl-carousel").owlCarousel();
});

/*banner slider*/
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


/*client slider*/
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
        console.log(num)
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
