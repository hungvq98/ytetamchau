export default function Form() {
  const input = document.querySelectorAll(".form-input .input");
  const label = document.querySelectorAll(".form-label");
  const labelDOB = document.querySelector(".form-label[for='dob']")

  if (input) {
    const inputChange = () => {
      input.forEach((ele, i) => {
        ele.addEventListener("change", (e) => {
          if (ele.value === "") {
            label[i].classList.remove("clicked");
            // ele.classList.remove("input-focus")
          } else {
            label[i].classList.add("clicked");
            // ele.classList.add("input-focus")
          }
        });
      });
    };

    input.forEach((ele, i) => {
      if (ele.value === "") {
        label[i].classList.remove("clicked");
      } else {
        label[i].classList.add("clicked");
      }

      ele.addEventListener("click", (e) => {
        inputChange();
      });

      $(ele).bind("focus", function() {
       $(input[i]).trigger('click');
    });

      document.addEventListener("click", (e) => {
        const isClickInside = ele.contains(e.target);
        if (isClickInside) {
          label[i].classList.add("clicked");
          ele.classList.add("input-focus");
        }
        if (!isClickInside) {
          ele.classList.remove("input-focus");
          if (ele.value === "") {
            label[i].classList.remove("clicked");
          }
        }
      });
    });

    if (labelDOB) {
      // console.log(labelDOB)
      labelDOB.classList.add("clicked-always")
    }
  }
}
