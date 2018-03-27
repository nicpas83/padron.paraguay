$(function () {

    $('#GeriatricoHabilitado').change(function () {
        $('#boxGeriatricoHabilitacionNro').hide();
        if (this.value == '1') {
            $('#boxGeriatricoHabilitacionNro').show();
        }
        ;
    }).change();
    $('#GeriatricoRegistro').change(function () {
        $('#boxGeriatricoRegistroNro').hide();
        if (this.value == '1') {
            $('#boxGeriatricoRegistroNro').show();
        }
        ;
    }).change();

});
