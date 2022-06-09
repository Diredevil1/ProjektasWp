$(document).ready(function () {
    $('.carousel').carousel({
        interval: 6000
    })
});

// When the user scrolls the page, execute myFunction
window.onscroll = function () { myFunction() };

//Selecting NAV
const navbar = document.querySelector('#navbar')

const sticky = navbar.offsetTop;
function myFunction() {
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
    }
}


//<<<<-----------Hamburger------->!!!!!!

const menu_btn = document.querySelector('.hamburger');
const mobile_menu = document.querySelector('.mobile-nav');

menu_btn.addEventListener('click', function () {
    menu_btn.classList.toggle('is-active');
    mobile_menu.classList.toggle('is-active');
});

//<<<<<-------------------------OWL CAORUSEL ------------------------->>>>>>>>>>>>>>>>>>>>

$(document).ready(function () {
    $(".owl-carousel").owlCarousel({
        center: true,
        loop: true,
        margin: 10,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true,
                loop: true,
            },
            600: {
                items: 3,
                nav: true,
                loop: true
            },
            1000: {
                items: 4,
                nav: true,
                loop: true
            }
        }
    });
});

