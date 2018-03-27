$(function () {

    $("tbody tr").each(function () {
        if ($(this).find("[name^='data[Caso][caso_cerrado]']").val() == 1) {
            $(this).addClass("success");
        }
    });

});