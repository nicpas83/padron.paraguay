$(function () {
    $("tbody tr").each(function () {
        if ($(this).find("[name^='data[Inscripto][estado_capacitacion]']").val() == "1") {
            $(this).find(".btn.agendar").removeClass("btn-inverse").addClass("btn-success");
        }
    });
});
