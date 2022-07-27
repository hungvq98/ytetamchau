export default function InputFile() {
  const inputFile = document.querySelector(".form-upload input");
  const button = document.querySelector(".upload .label-upload");
  const the_return = document.querySelector(".name-file-choosed");
  // fix wp
  const wpinput = document.querySelector(".wpcf7-file")

  if (button) {
    button.addEventListener("keydown", function (event) {
      if (event.keyCode == 13 || event.keyCode == 32) {
        fileInput.focus();
      }
    });
    button.addEventListener("click", function (event) {
      // if(wpinput) {
      //   wpinput.click();
      // }
      inputFile.click();
      return false;
    });
    inputFile.addEventListener("change", function (event) {
      the_return.innerHTML =
        `<span class="text-5 text-slt">Selected: </span>` +
        `<span class="name-file">` +
        splitName(this.value) +
        `</span>`;
    });
  }

  const splitName = (name) => {
    let string = "";
    string += name.split("\\")[name.split("\\").length - 1];
    return string;
  };
}
