export default function moduleSwiper() {
    var swiper = new Swiper(".brandSwiper", {
        slidesPerView: 6,
        spaceBetween: 30,
        centeredSlides: true,
        loop:true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        breakpoints: {
            320: {
              slidesPerView: 1.5,
            },
            426: {
              slidesPerView: 2,
            },
            768: {
              slidesPerView: 4,
            },
            1200: {
              slidesPerView: 6,
            },
          },
      });
}