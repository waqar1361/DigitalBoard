$(function () {
    $('[data-toggle="tooltip"]').tooltip()
});
$(function () {
    $('[data-toggle="popover"]').popover()
});
$(function () {
    $('[data-type="date"]').datepicker({
        format: "yyyy/mm/dd",
        todayHighlight: true,
        todayBtn: "linked",
        autoclose: true,
        zIndexOffset: 500,
    })
});