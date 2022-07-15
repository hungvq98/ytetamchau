export default function Popup() {
  const itemPr = document.querySelectorAll(".list-item");
  const pu = document.querySelector(".popup-detail");
  const clode = document.querySelector(".popup-detail .close");
  const faeBg = document.querySelector(".bg-fade")

  if (itemPr) {
    itemPr.forEach((ele, i) => {
      ele.addEventListener("click", () => {
        pu.classList.add("active");
        faeBg.classList.add("show");
      });
    });

    clode.addEventListener("click", () => {
        pu.classList.remove("active");
        faeBg.classList.remove("show");
    })
  }
}
