import Header from "./modules/header.js";
Header();

jQuery(".color-lst")
  .find(".color-control")
  .each(function (index, element) {
    var color = $(this).find(".custom-color").data("color");
    $(this).find(".custom-color").css("background", color);
  });

jQuery(".info")
  .find(".color-item")
  .each(function (index, element) {
    var color = $(this).data("color-child");
    $(this).css("background", color);
  });

$(".bandage-pro-wrap .list .list-item").each(function (index, element) {
  $(this)
    .find(".circle-search")
    .click(function (e) {
      e.preventDefault();
      var id = $(this).closest(".list-item").data("id");
      $('[data-number="' + id + '"]').addClass("active");
      $(".bg-fade").addClass("show");
      document.body.style.overflow = "hidden";
    });

  $(this)
    .find(".circle-link")
    .click(function (e) {
      e.preventDefault();
      var link = $(this).data("link-product");
      var $temp = $("<input>");
      $("body").append($temp);
      $temp.val(link).select();
      document.execCommand("copy");
      $temp.remove();
      $(this).attr("title", "Đã copy");
    });
});

$(".related-list .swiper-slide").each(function (index, element) {
  $(this)
    .find(".circle-search")
    .click(function (e) {
      e.preventDefault();
      var id = $(this).closest(".swiper-slide").data("id");
      $('[data-number="' + id + '"]').addClass("active");
      $(".bg-fade").addClass("show");
      document.body.style.overflow = "hidden";
    });

  $(this)
    .find(".circle-link")
    .click(function (e) {
      e.preventDefault();
      var link = $(this).data("link-product");
      var $temp = $("<input>");
      $("body").append($temp);
      $temp.val(link).select();
      document.execCommand("copy");
      $temp.remove();
      $(this).attr("title", "Đã copy");
    });
});

$(".equipment-detail .equipment-product").each(function (index, element) {
  $(this).click(function (e) {
    e.preventDefault();
    var id = $(this).data("id");
    $('[data-equipment="' + id + '"]').addClass("active");
    $(".bg-fade").addClass("show");
    document.body.style.overflow = "hidden";
  });
});

$(".close").click(function (e) {
  e.preventDefault();
  $(this).closest(".popup-detail").removeClass("active");
  $(this).closest(".popup-equipment").removeClass("active");
  $(".bg-fade").removeClass("show");
  document.body.style.overflow = "auto";
});

document.addEventListener(
  "mouseup",
  function (e) {
    var container = document.querySelector(".popup-detail");
    if (container) {
      if (!e.target.matches(".popup-detail, .popup-detail *")) {
        $(".popup-detail").removeClass("active");
        $(".bg-fade").removeClass("show");
        document.body.style.overflow = "auto";
      }
    }
  }.bind(this)
);

document.addEventListener(
  "mouseup",
  function (e) {
    var container = document.querySelector(".popup-equipment");
    if (container) {
        if (!e.target.matches(".popup-equipment, .popup-equipment *")){
        $(".popup-equipment").removeClass("active");
        $(".bg-fade").removeClass("show");
        document.body.style.overflow = "auto";
      }
    }
  }.bind(this)
);

document.addEventListener(
  "mouseup",
  function (e) {
    var container = document.querySelector(".popup-cv");
    var calendar = document.querySelector("#ui-datepicker-div");
    if (container) {
      if (!container.contains(e.target) && !calendar.contains(e.target)) {
        $(".popup-cv").removeClass("active");
        $(".bg-fade").removeClass("show");
        document.body.style.overflow = "auto";
      }
    }
  }.bind(this)
);
