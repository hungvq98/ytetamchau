export default function () {
  const collapseHeads = document.querySelectorAll(
    ".head-js"
  );
  const lstShape = document.querySelectorAll(".shape-item-sm");
  if (collapseHeads) {
    collapseHeads.forEach((item) => {
      item.addEventListener("click", () => {
        const body = item.parentElement.querySelector(".body-js");
        const collapse = item.parentElement
        
        $(body).slideToggle();
        $(item).toggleClass("active");
        $(collapse).toggleClass("active");
      });
    });
  }
  if (lstShape) {
    const createCollapse = () => {
      const windowWidth = window.innerWidth;
      const lstShapeInfo = document.querySelectorAll(".shape-info-content");
      lstShape.forEach((ele, i) => {
        let zindex = 30;
        ele.style.zIndex = zindex - i;
        if (windowWidth > 1024) {
          console.log("> 1024")
          $(ele).hover(function () {
            $(lstShapeInfo[i])
              .stop()
              .slideToggle(300, () => {});
          });
        } else {
          console.log("< 1024")
          $(ele).click(function () {
            $(lstShapeInfo[i])
              .stop()
              .slideToggle(300, () => {});
          });
        }
      });
    };

    createCollapse();

    window.addEventListener("resize", () => {
      createCollapse();
    });
  }
}
