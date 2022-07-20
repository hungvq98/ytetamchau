export default function tabModule() {
  const lstTab = document.querySelectorAll(".tab-lst .tab-item ");
  const lstTabContent = document.querySelectorAll(
    ".tab-content .tab-content-item"
  );
  const itemInro = document.querySelectorAll(".introduce-lst-item")
  const lstImageIntro = document.querySelectorAll(".introduce-lstImg-item")

  const resetTabActive = (lstTabi, lstTab) => {
    lstTabi.forEach((ele) => {
      ele.classList.remove("active");
    });
    lstTab.forEach((ele) => {
      ele.classList.remove("active");
    });
  };

  if (lstTab && lstTabContent) {
    lstTab.forEach((tab, i) => {
      tab.addEventListener("click", () => {
        resetTabActive(lstTab, lstTabContent);
        tab.classList.add("active");

        if (lstTabContent[i]) {
          lstTabContent[i].classList.add("active");
        }
      });
    });
  }

  if (itemInro) {
    itemInro.forEach((ele, i) => {
      ele.addEventListener("click", () => {
        resetTabActive(itemInro, lstImageIntro);
        ele.classList.add("active");

        if (lstImageIntro[i]) {
          lstImageIntro[i].classList.add("active");
        }
      });
    })
  }
}
