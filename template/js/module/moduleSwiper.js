export default function moduleSwiper() {
  var swiper = new Swiper(".brandSwiper", {
    slidesPerView: 1.5,
    spaceBetween: 10,
    centeredSlides: true,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      320: {
        slidesPerView: 1.5,
      },
      600: {
        slidesPerView: 2.8,
        spaceBetween: 10,
      },
      800: {
        slidesPerView: 3.5,
        spaceBetween: 20,
      },
      1024: {
        slidesPerView: 3.8,
        spaceBetween: 20,
      },
      1200: {
        slidesPerView: 4.3,
        spaceBetween: 30,
      },
    },
  });
  var swiper = new Swiper(".homeSwiper", {
    speed: 1000,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
}