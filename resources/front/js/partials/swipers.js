/**
 * Declaração dos swipers
 * Exemplo:
 * let swiper = new Swiper(".swiper-teste", {opcoes})
 */

new Swiper(".banner-swiper", {
    /*autoplay: {
        delay: 7500,
        disableOnInteraction: false,
    },*/
    effect: "fade",
    navigation: {
        nextEl: ".banner-swiper .swiper-button-next",
        prevEl: ".banner-swiper .swiper-button-prev",
    },
    pagination: {
        el: ".banner-swiper .swiper-pagination",
        type: "bullets",
        clickable: true,
    },
});
new Swiper(".destaques-swiper", {
    spaceBetween: 100,
    initialSlide: 1,
    centeredSlides: true,

    navigation: {
        nextEl: ".destaques-swiper .swiper-button-next",
        prevEl: ".destaques-swiper .swiper-button-prev",
    },
    pagination: {
        el: ".destaques-swiper .swiper-pagination",
        type: "bullets",
        clickable: true,
    },
});

new Swiper(".gallery-swiper", {
    rewind: false,
    slidesPerView: 1,
    spaceBetween: 1,
    navigation: {
        nextEl: ".gallery-swiper .swiper-button-next",
        prevEl: ".gallery-swiper .swiper-button-prev",
    },
    pagination: {
        el: ".gallery-swiper .swiper-pagination",
        type: "bullets",
        dynamicBullets: true,
        clickable: true,
    },
});
new Swiper(".detalhes-swiper", {
    rewind: false,
    slidesPerView: 1,
    spaceBetween: 1,
    navigation: {
        nextEl: ".detalhes-swiper .swiper-button-next",
        prevEl: ".detalhes-swiper .swiper-button-prev",
    },
    pagination: {
        el: ".detalhes-swiper .swiper-pagination",
        type: "bullets",
        dynamicBullets: true,
        clickable: true,
    },
});
new Swiper(".depoimentos-swiper", {
    rewind: false,
    slidesPerView: 1,
    spaceBetween: 45,
    navigation: {
        nextEl: ".depoimentos-swiper .swiper-button-next",
        prevEl: ".depoimentos-swiper .swiper-button-prev",
    },
    pagination: {
        el: ".depoimentos-swiper .swiper-pagination",
        type: "bullets",
        //dynamicBullets: true,
        clickable: true,
    },
});
new Swiper(".blog-swiper", {
    rewind: false,
    slidesPerView: 1,
    spaceBetween: 50,
    navigation: {
        nextEl: ".blog-swiper .swiper-button-next",
        prevEl: ".blog-swiper .swiper-button-prev",
    },
    pagination: {
        el: ".blog-swiper .swiper-pagination",
        type: "bullets",
        dynamicBullets: true,
        clickable: true,
    },
    breakpoints: {
        992: {
            slidesPerView: 3,
        },
        767: {
            slidesPerView: 3,
        },
        576: {
            slidesPerView: 2,
        },
    },
});
new Swiper(".diferenciais-swiper", {
    rewind: false,
    slidesPerView: 2,
    spaceBetween: 100,
    navigation: {
        nextEl: ".diferenciais-swiper .swiper-button-next",
        prevEl: ".diferenciais-swiper .swiper-button-prev",
    },
    pagination: {
        el: ".diferenciais-swiper .swiper-pagination",
        type: "bullets",
        //dynamicBullets: true,
        clickable: true,
    },
    breakpoints: {
        1200: {
            slidesPerView: 5,
        },
        992: {
            slidesPerView: 4,
        },
        767: {
            slidesPerView: 3,
        },
        576: {
            slidesPerView: 2,
        },
    },
});
new Swiper(".empresa2-swiper", {
    slidesPerView: 3,
    spaceBetween: 15,
    navigation: {
        nextEl: ".empresa2-swiper .swiper-button-next",
        prevEl: ".empresa2-swiper .swiper-button-prev",
    },
    pagination: {
        el: ".empresa2-swiper .swiper-pagination",
        type: "bullets",
        clickable: true,
    },
    breakpoints: {
        1200: {
            slidesPerView: 5,
        },
        992: {
            slidesPerView: 4,
        },
        767: {
            slidesPerView: 3,
        },
    },
});
new Swiper(".solutions-swiper", {
    slidesPerView: 1,
    spaceBetween: 1,
    navigation: {
        nextEl: ".solutions-swiper .swiper-button-next",
        prevEl: ".solutions-swiper .swiper-button-prev",
    },
    pagination: {
        el: ".solutions-swiper .swiper-pagination",
        type: "bullets",
        clickable: true,
    },
});
