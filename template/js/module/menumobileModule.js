export default function() {
    var burger = document.querySelector(".burger-js");
    var mobilemenu = document.querySelector(".mobilemenu-js");
    var over = document.querySelector(".mobilemenuover-js");
    let on = "on";
    if (burger) {
        burger.addEventListener("click", () => {
            burger.classList.toggle("active");
            mobilemenu.classList.toggle("active");
            over.classList.toggle("active");
            if (on == "on") {
                $("body").css("overflow", "hidden");
                on = "off";
            } else {
                $("body").css("overflow", "auto");
                on = "on";
            }
        });
    }
}