$(function () {
    var prestacion = $('#ReclamoPrestacionId').val();
    for (var i = 1; i < 31; i++) {
        $("#" + i + "").hide();
    }
    $("#" + prestacion + "").show();
});

