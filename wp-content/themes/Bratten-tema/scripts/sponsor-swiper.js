"use strict";

var swiper = new Swiper('div.sponsor-swiper', {
    loop: true,
    slidesPerView: 6,
    draggable: true,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    breakpoints: {
        1024: {
            slidesPerView: 5,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 4,
            spaceBetween: 20,
        },
        650: {
            slidesPerView: 3,
            spaceBetween: 20,
        }
    }
});