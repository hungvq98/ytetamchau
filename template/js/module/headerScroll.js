export default function headerScroll() {
  const header = document.querySelector(".header");

  if (header) {
    document.addEventListener("scroll", () => {
      const height = window.pageYOffset;

      if (height > 150) {
        header.classList.add("out-of-top");
      }

      else {
        header.classList.remove("out-of-top");
        // header.classList.add("on-top");
      }
    });
  }
}
