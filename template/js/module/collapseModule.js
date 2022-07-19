export default function () {
  const collapseHeads = document.querySelectorAll(
    ".head-js"
  );
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
}
