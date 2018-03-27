function mostrarPregunta(preguntaCondicionante, opcionCondicionante, preguntasCondicionadas) {
    $(preguntaCondicionante).change(function () {
        var mostrarPreguntasCondicionadas = this.value == opcionCondicionante;
        for (var i in preguntasCondicionadas) {
            if (mostrarPreguntasCondicionadas) {
                $(preguntasCondicionadas[i]).show();
            } else {
                opcionCondicionante
                $(preguntasCondicionadas[i]).hide();
                $(preguntasCondicionadas[i]).children("input,select,textarea").val("").change();
            }
        }
    }).change();
}

$(function () {
    mostrarPregunta('#' + MODEL + 'PrestacionId', "1", [
        '#1',
    ]);
    mostrarPregunta('#' + MODEL + 'PrestacionId',  "2", [
        '#2',
    ]);
    mostrarPregunta('#' + MODEL + 'PrestacionId', "3", [
        '#3',
    ]);
    mostrarPregunta('#' + MODEL + 'PrestacionId', "4", [
        '#4',
    ]);
    mostrarPregunta('#' + MODEL + 'PrestacionId', "5", [
        '#5',
    ]);
    mostrarPregunta('#' + MODEL + 'PrestacionId', "6", [
        '#6',
    ]);

});