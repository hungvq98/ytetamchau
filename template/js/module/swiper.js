export default function SwiperF() {
    const glPro = document.querySelector(".product-gallery");
  
    if (glPro) {
      const galleryThumbs = new Swiper(".gallery-thumbs", {
        spaceBetween: 30,
        slidesPerView: 3,
        slidesPerGroup: 1,
        watchSlidesProgress: true,
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