export default function Popup() {
  const itemPr = document.querySelectorAll(".list-item");
  const pu = document.querySelector(".popup-detail");
  const faeBg = document.querySelector(".bg-fade");
  const pucv = document.querySelector(".popup-cv");
  const btncv = document.querySelector(".cv-pops");
  const puEqipment = document.querySelector(".popup-equipment");
  const lstItemEqip = document.querySelectorAll(".equipment-product");

  const showPU = (btn, pupc) => {
    btn.addEventListener("click", (e) => {
      pupc.classList.add("active");
      faeBg.classList.add("show");
      document.body.style.overflow = "hidden";
      const close = pu.querySelector(".close");
      close.addEventListener("click", () => {
        pupc.classList.remove("active");
        faeBg.classList.remove("show");
        document.body.style.overflow = "auto";
      });
    });
  };

  const showPUListBtn = (listBtn, pupc) => {
    if (pupc) {
      listBtn.forEach((ele, i) => {
        ele.addEventListener("click", () => {
          pupc.classList.add("active");
          faeBg.classList.add("show");
          document.body.style.overflow = "hidden";

          // const readMore = ele.querySelector(".btn");
          // readMore.addEventListener("click", () => {
          //   pupc.classList.remove("active");
          //   faeBg.classList.remove("show");
          //   document.body.style.overflow = "auto";
          // });
        });
      });

      const close = pupc.querySelector(".close");

      if (close) {
        close.addEventListener("click", () => {
          pupc.classList.remove("active");
          faeBg.classList.remove("show");
          document.body.style.overflow = "auto";
        });
      }
    }
  };

  if (itemPr) {
    showPUListBtn(itemPr, pu);
  }

  if (pucv) {
    showPU(btncv, pucv);
  }

  if (lstItemEqip) {
    showPUListBtn(lstItemEqip, puEqipment);
    lstItemEqip.forEach((ele) => {
      console.log("click");
    });
  }
}
