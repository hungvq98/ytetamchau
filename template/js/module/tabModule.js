export default function tabModule() {
  //big tab
  let tab = document.querySelectorAll(".tab-js");
  let tabrun = document.querySelector(".runtab");

  if (tab) {
    tab.forEach((t) => {
      let tBtn = t.querySelectorAll(".tabBtn-js");
      let tPanel = t.querySelectorAll(".tabPanel-js");

      // for tab
      if (tBtn.length !== 0 && tPanel.length === tBtn.length) {
        tBtn[0].classList.add("active");
        tPanel[0].classList.add("open");
        tabrun.style.left = tBtn[0].offsetLeft + "px";
        
        for (let i = 0; i < tBtn.length; i++) {
          tBtn[i].addEventListener("click", showPanel);
          tabrun.style.width = tBtn[i].offsetWidth + "px";

          function showPanel(e) {
            e.preventDefault();
            for (let a = 0; a < tBtn.length; a++) {
              tBtn[a].classList.remove("active");
              tPanel[a].classList.remove("open");
            }
            tBtn[i].classList.add("active");
            tPanel[i].classList.add("open");
            tabrun.style.width = tBtn[i].offsetWidth + "px";
            tabrun.style.left = tBtn[i].offsetLeft + "px";
          }
        }
      }
      const tabjsChild = t.querySelectorAll('.tabjsChild');
      
      tabjsChild.forEach(t => {
        let tBtnchild = t.querySelectorAll(".tabBtnchild-js");
        let tPanelchild = t.querySelectorAll(".tabPanelchild-js");
        if (tBtnchild.length !== 0 && tPanelchild.length === tBtnchild.length) {
          tBtnchild[0].classList.add("active");
          tPanelchild[0].classList.add("open");
  
          for (let i = 0; i < tBtnchild.length; i++) {
            tBtnchild[i].addEventListener("click", showPanel);
  
            function showPanel(e) {
              e.preventDefault();
              console.log(e)
              for (let a = 0; a < tBtnchild.length; a++) {
                tBtnchild[a].classList.remove("active");
                tPanelchild[a].classList.remove("open");
              }
              tBtnchild[i].classList.add("active");
              tPanelchild[i].classList.add("open");
            }
          }
        }
      })
    });
  }

  //small tab

  let tabs = document.querySelectorAll(".requires-js");

  if (tabs) {
    tabs.forEach((t) => {
      let tBtns = t.querySelectorAll(".requires-btn-js");
      let tPanels = t.querySelectorAll(".info-panel-js");

      // for tab
      if (tBtns.length !== 0 && tPanels.length === tBtns.length) {
        tBtns[0].classList.add("active");
        tPanels[0].classList.add("open");

        for (let i = 0; i < tBtns.length; i++) {
          tBtns[i].addEventListener("click", showPanel);

          function showPanel(e) {
            e.preventDefault();
            for (let a = 0; a < tBtns.length; a++) {
              tBtns[a].classList.remove("active");
              tPanels[a].classList.remove("open");
            }
            tBtns[i].classList.add("active");
            tPanels[i].classList.add("open");
          }
        }
      }
    });
  }
  //horizontal tab

  let tabh = document.querySelectorAll(".route-js");

  if (tabh) {
    tabh.forEach((t) => {
      let tBtns = t.querySelectorAll(".route-btn-js");
      let tPanels = t.querySelectorAll(".route-panel-js");

      // for tab
      if (tBtns.length !== 0 && tPanels.length === tBtns.length) {
        tBtns[0].classList.add("active");
        tPanels[0].classList.add("open");

        for (let i = 0; i < tBtns.length; i++) {
          tBtns[i].addEventListener("click", showPanel);

          function showPanel(e) {
            e.preventDefault();
            for (let a = 0; a < tBtns.length; a++) {
              tBtns[a].classList.remove("active");
              tPanels[a].classList.remove("open");
            }
            tBtns[i].classList.add("active");
            tPanels[i].classList.add("open");
          }
        }
      }
    });
  }
}
