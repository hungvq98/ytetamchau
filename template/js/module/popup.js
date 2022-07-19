export default function Popup() {
  const itemPr = document.querySelectorAll(".list-item");
  const pu = document.querySelector(".popup-detail");
  const clode = document.querySelector(".popup-detail .close");
  const faeBg = document.querySelector(".bg-fade");
  const pucv = document.querySelector(".popup-cv");
  const btncv = document.querySelector(".cv-pops");

  if (itemPr) {
    itemPr.forEach((ele, i) => {
      ele.addEventListener("click", () => {
        pu.classList.add("active");
        faeBg.classList.add("show");
      });
    });

    if (clode) {
      clode.addEventListener("click", () => {
        pu.classList.remove("active");
        faeBg.classList.remove("show");
      });
    }
  }

  if (pucv) {
    btncv.addEventListener("click", (e) => {
      console.log("rregeg")
      pucv.classList.add("active");
      faeBg.classList.add("show");
      const close = pucv.querySelector(".close");
      close.addEventListener("click", () => {
        pucv.classList.remove("active");
        faeBg.classList.remove("show");
      });
    });
  }
}
