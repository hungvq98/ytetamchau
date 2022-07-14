export default function moduleSwiper() {
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true
    });
    var swiper2 = new Swiper(".mySwiper2", {
        spaceBetween: 10,
        autoplay: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        },
        thumbs: {
            swiper: swiper
        }
    });

    var swiperHome = new Swiper(".sliderSwiper", {
        slidesPerView: 2.5,
        spaceBetween: 30,
        loop: true,
        autoplay: true,

        pagination: {
            el: ".swiper-pagination",
            clickable: true
        },
        breakpoints: {
            0: {
                slidesPerView: 1
            },
            768: {
                slidesPerView: 2
            },
            1050: {
                slidesPerView: 3
            },
            1200: {
                slidesPerView: 2.5
            }
        }
    });

    var swiperfeel = new Swiper(".feelSwiper", {
        slidesPerView: 3.5,
        spaceBetween: 30,
        loop: true,
        autoplay: true,
        breakpoints: {
            0: {
                slidesPerView: 1
            },
            500: {
                slidesPerView: 1.5
            },
            768: {
                slidesPerView: 2.5
            },
            1200: {
                slidesPerView: 3.5
            }
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true
        }
    });

    var swiperSlider = new Swiper(".newsSlider-swiper", {
        slidesPerView: 4,
        spaceBetween: 24,
        centeredSlides: true,
        loop: true,
        autoplay: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true
        },
        breakpoints: {
            0: {
                slidesPerView: 1
            },
            500: {
                slidesPerView: 1.5
            },
            768: {
                slidesPerView: 2.5
            },
            1200: {
                slidesPerView: 4
            }
        }
    });
    var swiperSliders = new Swiper(".newsSmall-swiper", {
        slidesPerView: 3,
        spaceBetween: 24,
        loop: true,
        autoplay: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true
        },
        breakpoints: {
            0: {
                slidesPerView: 1
            },
            500: {
                slidesPerView: 1.5
            },
            768: {
                slidesPerView: 2.5
            },
            1200: {
                slidesPerView: 3
            }
        }
    });
}