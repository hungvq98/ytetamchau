export default function PopupModule() {
    $(document).ready(function() {
        $(".hit-play").magnificPopup({
            type: "iframe",
            mainClass: "mfp-fade",
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false
        });
    });
}