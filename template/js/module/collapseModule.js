export default function () {
  const collapseHeads = document.querySelectorAll(".head-js");
  const lstShape = document.querySelectorAll(".shape-item-sm");
  if (collapseHeads) {
    collapseHeads.forEach((item) => {
      item.addEventListener("click", () => {
        const body = item.parentElement.querySelector(".body-js");
        const collapse = item.parentElement;

        $(body).slideToggle();
        $(item).toggleClass("active");
        $(collapse).toggleClass("active");
      });
    });
  }
  if (lstShape) {
    const createCollapse = () => {
      const lstShapeInfo = document.querySelectorAll(".shape-info-content");
      lstShape.forEach((ele, i) => {
        let zindex = 30;
        ele.style.zIndex = zindex - i;
        $(ele).click(function () {
          ele.classList.toggle("show");
          $(lstShapeInfo[i])
            .stop()
            .slideToggle(300, () => {});
        });
        $(document).click((e) => {
          if (!ele.contains(e.target)) {
            ele.classList.remove("show");
            $(lstShapeInfo[i]).slideUp()
          }
        })
      });
    };

    createCollapse();
  }
}
