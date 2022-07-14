export default function sidebarMenuModule() {
  // var parent = $(".submenu").parent()
  var submenu = document.querySelectorAll(".submenu");

  submenu.forEach((e) => {
    const newEl = document.createElement("i");
    e.parentElement.appendChild(newEl);
    e.parentElement.querySelector("i").classList.add("bx");
    e.parentElement.querySelector("i").classList.add("bx-chevron-down");
  });


  $("#vert-nav .topmenu i").each(function () {
    $(this).click(function () {
      var $menu = $(this).prev(".submenu");
      $menu.slideToggle("300");
      $menu.parent().toggleClass("openmenu");
    });
  });
}
