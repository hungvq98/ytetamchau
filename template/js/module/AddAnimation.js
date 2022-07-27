export default function AddAnimation() {
  // banner item
  const listwrapmBanner = document.querySelectorAll(".home-wrap");

  if (listwrapmBanner) {
    listwrapmBanner.forEach((element) => {
      element
        .querySelectorAll(" .banner-lst-intro .banner-item-intro")
        .forEach((ele, i) => {
          ele.style.transitionDelay = 1400 + i * 150 + "ms";
        });
    });
  }

  // banner grid square
  const banner_2 = document.querySelector(".banner-dc-lst");
  let width_screen = window.innerWidth;
  let gridX = 15;
  let gridY = 15;
  let j = 0;
  let width_block;
  let height_block;

  const calcSize = (screenWidth, x, y) => {
    if (screenWidth > 900) {
      if (x) {
        gridX = x;
        console.log(x);
      }
      if (y) {
        gridY = y;
      }
      width_block = 100 / gridX;
      height_block = width_block;
    }
    if (width_screen < screenWidth) {
      if (x) {
        gridX = x;
        console.log(x);
      }
      if (y) {
        gridY = y;
      }
      width_block = 100 / gridX;
      height_block = width_block;
    }
  };

  calcSize(901);

  calcSize(900, 12, 12);

  calcSize(600, 8, 8);

  if (banner_2) {
    for (let i = 0; i < gridX; i++) {
      for (let k = 0; k < gridY; k++) {
        const ele = document.createElement("div");
        ele.className = "item-banner";

        if (j > gridX - 1) {
          j = 0;
        }
        j++;

        ele.setAttribute(
          "style",
          "animation: itemBanner 1.2s " +
            j * 5 +
            "0ms forwards" +
            ";" +
            "width: " +
            width_block +
            "%" +
            "; height: " +
            height_block +
            "vw"
        );

        banner_2.appendChild(ele);
      }
    }
  }

  // chi phau thhat
  const shapeCol = document.querySelectorAll(".shape-col.right");
  const shapeCol1 = document.querySelectorAll(".shape-col.left");
  const screenPosition = window.innerHeight;
  const secCate = document.querySelector(".sec-cate");
  const createAnimationShape = () => {
    shapeCol.forEach((col, i) => {
      const icon = col.querySelectorAll(".shape-icon");
      const info = col.querySelectorAll(".shape-info-wrap");
      const dotStart = document.querySelectorAll(
        ".shape-points.right .shape-point"
      );

      icon.forEach((icon, j) => {
        icon.style.animation = `shape-icon 0.5s ${j * 100 + 300}ms forwards`;
      });

      info.forEach((info, j) => {
        info.style.animation = `shape-info 0.7s 1100ms forwards`;
      });

      dotStart.forEach((dotStart, j) => {
        setTimeout(() => {
          dotStart.classList.add("show");
        }, 2000 + j * 150);
      });
    });
    shapeCol1.forEach((col, i) => {
      const icon = col.querySelectorAll(".shape-icon");
      const info = col.querySelectorAll(".shape-info-wrap");
      const dotStart = document.querySelectorAll(
        ".shape-points.left .shape-point"
      );

      icon.forEach((icon, j) => {
        icon.style.animation = `shape-icon-1 0.5s ${j * 100 + 300}ms forwards`;
      });

      info.forEach((info, j) => {
        info.style.animation = `shape-info-1 0.7s 1100ms forwards`;
      });
      dotStart.forEach((dotStart, j) => {
        setTimeout(() => {
          dotStart.classList.add("show");
        }, 2000 + j * 150);
      });
    });
  };
  if (shapeCol) {
    if (pageYOffset >= 200) {
      createAnimationShape();
    } else {
      window.addEventListener("scroll", () => {
        if (pageYOffset >= 200) {
          createAnimationShape();
        } 
      })
    }
  }
}
