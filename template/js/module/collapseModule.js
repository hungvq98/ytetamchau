export default function () {
  const collapseHeads = document.querySelectorAll(
    ".collapse-item-head.collapseHead-js"
  );
  const childHeads = document.querySelectorAll(
    ".collapse-child.collapseChild-js .collapse-child-head"
  );
  const lstShape = document.querySelectorAll(".shape-item-sm");
  if (collapseHeads) {
    collapseHeads.forEach((item) => {
      item.addEventListener("click", () => {
        const body = item.parentElement.querySelector(
          ".collapse-item-body.body-js"
        );
        $(body).slideToggle();
        $(item).toggleClass("active");
      });
    });
  }
  if (childHeads) {
    childHeads.forEach((item) => {
      item.addEventListener("click", () => {
        const body = item.parentElement.querySelector(".collapse-child-body");
        console.log(body);
        $(body).slideToggle();
        $(item).toggleClass("active");
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
