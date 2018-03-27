$(function () {

    $('#ClausuraViolacionClausura').change(function () {
        $('#boxClausuraFechaViolacionClausura').hide();
        if (this.value == '1') {
            $('#boxClausuraFechaViolacionClausura').show();
        }
        ;
    }).change();
    $('#ClausuraClausuraFin').change(function () {
        $('#boxClausuraFechaClausuraFin').hide();
        if (this.value == '1') {
            $('#boxClausuraFechaClausuraFin').show();
        }
        ;
    }).change();

});
