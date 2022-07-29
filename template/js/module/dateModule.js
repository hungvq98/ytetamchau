export default function dateModule() {
    $(function () {
        console.log(true)
        $("#dob").datepicker({
            beforeShow: function (input, inst) {
                var rect = input.getBoundingClientRect();
                setTimeout(function () {
                    inst.dpDiv.css({ top: rect.top + 50, left: rect.left + 0 });
                }, 0);
            }
        });
    });
}