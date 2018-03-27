$(function () {

    $("tbody tr").each(function () {
        if ($(this).find("[name^='data[Inscripto][encuestado]']").val() == "1") {
            $(this).find(".btn").removeClass("btn-inverse").addClass("btn-success").attr("href","#");
        }
    });

});
