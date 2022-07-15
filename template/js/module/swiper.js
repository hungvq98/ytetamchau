export default function SwiperF() {
    const glPro = document.querySelector(".product-gallery");
  
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
  }