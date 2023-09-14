/*page preloader*/
function PreLoader(){
    setTimeout(()=>{
        $('.page-loader').addClass('d-none')
    },1000)
}


let header = $(".header");
let scrollChange = 10;
$(window).scroll(function () {
    let scroll = $(window).scrollTop();
    if (scroll >= scrollChange) {
        header.addClass('header-scrolled');
    } else {
        header.removeClass("header-scrolled");
    }
});

$(document).ready(function() {
    $(".header-link").click(function() {
        $(".header-link").removeClass("active");
        $(this).addClass("active");
    });
});

function dropdownToggle(e) {
    let dropdown = e.target.closest('.header-item').querySelector('.menu-dropdown');
    const dropdowns = document.querySelectorAll('.menu-dropdown');
    dropdowns.forEach(drop => {
        if(drop !== dropdown){
            drop.classList.remove('active');
        } else {
            if (dropdown.classList.contains('active')) {
                dropdown.classList.remove('active');
            } else {
                dropdown.classList.add('active');
            }
        }
    })
};

function dropIconToggle(e) {
    let dropdown = e.target.closest('.header-link').querySelector('.drop-icon');
    const dropdowns = document.querySelectorAll('.drop-icon');
    dropdowns.forEach(drop => {
        if(drop !== dropdown){
            drop.classList.remove('active');
        } else{
            if (dropdown.classList.contains('active')) {
                dropdown.classList.remove('active');
            } else {
                dropdown.classList.add('active');
            }
        }
    })
}

// header menu-content-controller
function btnController() {
    let menuController = document.querySelector('.header-menu');
    if (menuController.classList.contains('active')) {
        menuController.classList.remove('active');
    } else {
        menuController.classList.add('active');
    }
}
