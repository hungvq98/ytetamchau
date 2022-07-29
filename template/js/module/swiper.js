export default function SwiperF() {
  const glPro = document.querySelector(".product-gallery");
  const relatedpro = document.querySelector(".related-list");
  const glPu = document.querySelector(".product-gallery-pu");
  const circle = document.querySelector(".shape-slide");
  const partner = document.querySelector(".partner-silde");

  if (glPro) {
    const galleryThumbs = new Swiper(".gallery-thumbs", {
      spaceBetween: 10,
      slidesPerView: 3,
      slidesPerGroup: 1,
      watchSlidesProgress: true,
      breakpoints: {
        360: {
          spaceBetween: 15,
        },
        600: {
          spaceBetween: 20,
        },
        1024: {
          spaceBetween: 30,
        },
      },
    });
    const galleryTop = new Swiper(".product-gallery", {
      spaceBetween: 50,
      slidesPerView: 1,
      thumbs: {
        swiper: galleryThumbs,
      },
    });
  }

  if (relatedpro) {
    const swiper = new Swiper(".related-list", {
      slidesPerView: 1,
      breakpoints: {
        426: {
          slidesPerView: 2,
        },
        650: {
          slidesPerView: 3,
        },
        870: {
          slidesPerView: 4,
        },
      },
    });
  }

  if (glPu) {
    const galleryTop = new Swiper(".product-gallery-pu", {
      spaceBetween: 50,
      slidesPerView: 1,
      navigation: {
        nextEl: ".pu-next",
        prevEl: ".pu-prev",
      },
    });
  }

  if (circle) {
    const swiper = new Swiper(".shape-slide", {
      spaceBetween: 20,
      slidesPerView: 1,
      slidesPerGroup: 1,
      pagination: {
        el: ".shape-pagination",
        clickable: true,
      },
    });
  }

  if (partner) {
    const swiper = new Swiper(".partner-silde", {
      spaceBetween: 20,
      slidesPerView: 1,
      centeredSlides: true,
      speed:800,
      loop: true,
      navigation: {
        nextEl: ".navigation-partner-next",
        prevEl: ".navigation-partner-prev",
      },
      breakpoints: {
        420: {
          slidesPerView: 1.5,
          spaceBetween: 20,
        },
        600: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        800: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 40,
        },
        1200: {
          slidesPerView: 3,
          spaceBetween: 60,
        },
      },
    });
  }
}
