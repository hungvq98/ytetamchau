export default function AosModule() {
  AOS.init({
    once: "true",
    disable: function () {
      return $(window).width() <= 600;
    },
  });
}
