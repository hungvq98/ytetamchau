export default function () {
  const collapseHeads = document.querySelectorAll(
    ".collapse-item-head.collapseHead-js"
  );
  const childHeads = document.querySelectorAll(
    ".collapse-child.collapseChild-js .collapse-child-head"
  );
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
}
