export default function SwiperF() {
    const glPro = document.querySelector(".product-gallery");
  
    if (glPro) {
      const galleryThumbs = new Swiper(".gallery-thumbs", {
        spaceBetween: 30,
        slidesPerView: 3,
        watchSlidesProgress: true,
      });
      const galleryTop = new Swiper(".product-gallery", {
        spaceBetween: 10,
        thumbs: {
          swiper: galleryThumbs,
        },
      });
    }
  }