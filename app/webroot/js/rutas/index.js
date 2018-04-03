var RUTAS_SELECCIONADAS = false;

$(function() {
    //$('#content').append('<div class="pull-right"><a href="javascript:seleccionarTodasRutas();" class="btn btn-default mr10">Seleccionar Todas</a><a href="javascript:imprimirRutas();" class="btn btn-default">Imprimir Seleccionadas</a></div>');
});

function imprimirRutas() {
    if (empty($("input[type=checkbox]:checked").length)) {
        bootbox.alert('<h4>Seleccione al menos una ruta para imprimir.</h4>');
        return false;
    }
    var rutas = $("input[type=checkbox]:checked").map(function(){return this.value;}).get().join(",");
    window.open(WWW + 'rutas/multiple/' + rutas);
}

function seleccionarTodasRutas() {
    if (RUTAS_SELECCIONADAS) {
        $("input[type=checkbox]").attr('checked', false);
        RUTAS_SELECCIONADAS = false;
    }
    else {
        $("input[type=checkbox]").attr('checked', 'checked');
        RUTAS_SELECCIONADAS = true;
    }
}