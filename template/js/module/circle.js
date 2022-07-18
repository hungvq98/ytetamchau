export default function Circle() {
  const circle = document.querySelector(".shape-wrap");

  if (circle) {
    const setHeight = () => {
      const width = circle.offsetWidth;
      circle.style.height = width + "px";
    };
    setHeight();

    window.addEventListener("resize", () => {
      setHeight();
    });
  }
}
