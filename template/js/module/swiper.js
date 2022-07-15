export default function SwiperF() {
    const glPro = document.querySelector(".product-gallery");
    const relatedpro = document.querySelector(".related-list");
    const glPu = document.querySelector(".product-gallery-pu")
  
    if (glPro) {
      const galleryThumbs = new Swiper(".gallery-thumbs", {
        spaceBetween: 10,
        slidesPerView: 3,
        slidesPerGroup: 1,
        watchSlidesProgress: true,
        breakpoints: {
          360:{
            spaceBetween: 15,
          },
          600:{
            spaceBetween: 20,
          },
          1024:{
            spaceBetween: 30,
          }
        }
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
          426:{
            slidesPerView: 2,
          },
          650:{
            slidesPerView: 3,
          },
          870:{
            slidesPerView: 4,
          }
        }
      });
    }

    if (glPu) {
      const galleryTop = new Swiper(".product-gallery-pu", {
        spaceBetween: 50,
        slidesPerView: 1,
        navigation: {
          nextEl: '.pu-next',
          prevEl: '.pu-prev',
        },
      });
    }
  }