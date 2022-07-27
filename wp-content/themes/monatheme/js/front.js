import Header from "./modules/header.js";
Header();

jQuery(".color-lst").find(".color-control").each(function (index, element) {
    var color = $(this).find(".custom-color").data("color");
    $(this).find(".custom-color").css("background", color);
});

jQuery(".info").find(".color-item").each(function (index, element) {
    var color = $(this).data("color-child");
    $(this).css("background", color);
});

$(".bandage-pro-wrap .list .list-item").each(function (index, element) {
    $(this).click(function (e) { 
        e.preventDefault();
        var id = $(this).data("id");
        $(".bg-fade").addClass("show");
        $('[data-number="'+id+'"]').addClass("active");
    });
});

$(".close").click(function (e) { 
    e.preventDefault();
    $(this).closest(".popup-detail").removeClass("active");
    $(".bg-fade").removeClass("show");
});