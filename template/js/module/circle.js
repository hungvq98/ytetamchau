export default function Circle() {
  const circle = document.querySelector(".shape-wrap");
  const circle1 = document.querySelector(".bg-shape");

  const setHeight = (circleEle) => {
    if (circleEle) {
      const width = circleEle.offsetWidth;
      circleEle.style.height = width + "px";
    }
  };

  if (circle) {
    setHeight(circle);

    window.addEventListener("resize", () => {
      setHeight(circle);
    });
  }

  if (circle1) {
    setHeight(circle1);

    window.addEventListener("resize", () => {
      setHeight(circle1);
    });
  }
}
