export default function tabModule() {
  const lstTab = document.querySelectorAll(".tab-lst .tab-item ");
  const lstTabContent = document.querySelectorAll(
    ".tab-content .tab-content-item"
  );

  const resetTabActive = () => {
    lstTab.forEach((ele) => {
      ele.classList.remove("active");
    });
    lstTabContent.forEach((ele) => {
      ele.classList.remove("active");
    });
  };

  if (lstTab && lstTabContent) {
    lstTab.forEach((tab, i) => {
      tab.addEventListener("click", () => {
        resetTabActive();
        tab.classList.add("active");

        if (lstTabContent[i]) {
          lstTabContent[i].classList.add("active");
        }
      });
    });
  }
}
