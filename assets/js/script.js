window.addEventListener('DOMContentLoaded', () => {

    const navBtn = document.querySelector('.nav-button');
    const nav = document.querySelector('.nav');
    const body = document.querySelector('body');
    const gallery = document.querySelector('.gallery');
    const singleGallery = document.querySelector('.single-gallery');

    navBtn.addEventListener('click', () => {
        navBtn.classList.toggle("is-active");
        nav.classList.toggle("is-active");
        body.classList.toggle("body-lock");
    });

    const swiper = new Swiper('.training__wrapper', {
        slidesPerView: 3,
        loop: true,
        spaceBetween: 40,

        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 1.2,
                spaceBetween: 20
            },
            // when window width is >= 480px
            600: {
                slidesPerView: 2,
                spaceBetween: 30
            },

            768: {
                slidesPerView: 2,
                spaceBetween: 30
            },

            1023: {
                slidesPerView: 3,
                spaceBetween: 30
            },
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    const swiperReviews = new Swiper('.training-reviews__slider', {
        slidesPerView: 1,
        loop: true,
        spaceBetween: 40,

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: 'true',
        },
    });

    let elem = document.querySelector('.main-articles__list');
    if (elem) {
        let msnry = new Masonry(elem, {
            // options
            itemSelector: '.main-articles__item',
            gutter: 30,
        });
    }

    if (gallery) {
        baguetteBox.run('.gallery');
    }

    if (singleGallery) {
        baguetteBox.run('.single-gallery');
    }
});