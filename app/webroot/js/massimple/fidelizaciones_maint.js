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
    mostrarPregunta('#' + MODEL + 'RecibioTablet', "1", [
        '#box' + MODEL + 'UsaTablet',
        '#box' + MODEL + 'RecibioCurso',
        '#box' + MODEL + 'CursoUtil',
    ]);

    mostrarPregunta('#' + MODEL + 'UsaTablet', "1", [
        '#box' + MODEL + 'UsoPara',
        '#box' + MODEL + 'ContenidosNuevos',
        '#box' + MODEL + 'OtroContenidoNuevo',
    ]);
    mostrarPregunta('#' + MODEL + 'UsoPara', "Otro", [
        '#box' + MODEL + 'OtroUso',
    ]);
    mostrarPregunta('#' + MODEL + 'ContenidosNuevos', "Otro", [
        '#box' + MODEL + 'OtroContenidoNuevo',
    ]);

    mostrarPregunta('#' + MODEL + 'UsaTablet', "0", [
        '#box' + MODEL + 'MotivoNoUso',
    ]);
    mostrarPregunta('#' + MODEL + 'FuturaCapacitacion', "Otro", [
        '#box' + MODEL + 'OtraFuturaCapacitacion',
    ]);
    mostrarPregunta('#' + MODEL + 'MotivoNoUso', "Otro", [
        '#box' + MODEL + 'OtroMotivoNoUso',
    ]);
    mostrarPregunta('#' + MODEL + 'MotivoNoUso', "La perdi/robaron", [
        '#box' + MODEL + 'PlanCincuentaCuotas',
    ]);
    mostrarPregunta('#' + MODEL + 'MotivoNoUso', "Se me rompio", [
        '#box' + MODEL + 'InformacionSoporte',
    ]);
    mostrarPregunta('#' + MODEL + 'MotivoNoUso', "No tengo Interes", [
        '#box' + MODEL + 'InvitacionDevolucionBalcarce',
    ]);
    mostrarPregunta('#' + MODEL + 'MotivoNoUso', "No la se usar", [
        '#box' + MODEL + 'FechaCapacitacion',
    ]);
    mostrarPregunta('' + MODEL + 'CursoUtil', "0", [
        '#box' + MODEL + 'CursoInutilRazon',
    ]);
    mostrarPregunta('#' + MODEL + 'RecibioCurso', "1", [
        '#box' + MODEL + 'CursoUtil',
    ]);
    mostrarPregunta('#' + MODEL + 'RecibioCurso', "0", [
        '#box' + MODEL + 'DeseaCurso',
    ]);
    mostrarPregunta('#' + MODEL + 'CursoUtil', "0", [
        '#box' + MODEL + 'CursoInutilRazon',
    ]);
    mostrarPregunta('#' + MODEL + 'CursoInutilRazon', "Otro", [
        '#box' + MODEL + 'OtraRazonCursoInutil',
    ]);
    mostrarPregunta('#' + MODEL + 'DeseaCurso', "1", [
        '#box' + MODEL + 'FechaCapacitacion',
    ]);
    mostrarPregunta('#' + MODEL + 'RedesSociales', "1", [
        '#box' + MODEL + 'RedesSocialesUsadas',
    ]);
    mostrarPregunta('#' + MODEL + 'LeeNotificaciones', "1", [
        '#box' + MODEL + 'TipoNotificacionesLeidas',
    ]);
    mostrarPregunta('#' + MODEL + 'RedesSocialesUsadas', "Otro", [
        '#box' + MODEL + 'OtraRedSocial',
    ]);

});


$(function () {
    $('#' + MODEL + 'MotivoNoUso').change(function () {
        if (this.value == "No tengo Interes") {
            bootbox.alert("<h4>INVITAR A DEVOLVERLA A BALCARCE 362</h4>");
        }
        if (this.value == "La perdi/robaron") {
            bootbox.alert("<h4>Ofrecer plan 50 CUOTAS del BANCO CIUDAD</h4>");
        }
        if (this.value == "Se me rompio") {
            bootbox.alert("<h4>Informar si está en Garantía y/o comunicar números de Soporte Técnico</h4>");
        }
        if (this.value == "No la se usar") {
            bootbox.alert("<h4>COORDINAR FECHA DE CAPACITACIÓN <a href='" + WWW + "mas_simple/inscriptos/agendar/" + MODEL_ID + "'target='_blank'><strong><u>AQUI<u></strong></a></h4>");
        }
        ;
    }).change();
    $('#' + MODEL + 'DeseaCurso').change(function () {
        if (this.value == "1") {
            bootbox.alert("<h4>COORDINAR FECHA DE CAPACITACIÓN <a href='" + WWW + "mas_simple/inscriptos/agendar/" + MODEL_ID + "'target='_blank'><strong><u>AQUI<u></strong></a></h4>");
        }
        ;
    }).change();
    $('#' + MODEL + 'ConoceComunidadMassimple').change(function () {
        if (this.value == "0") {
            bootbox.alert("<h4>INFORMAR SOBRE COMUNIDAD +SIMPLE</h4>");
        }
        ;
    }).change();
    $('#' + MODEL + 'LeeNotificaciones').change(function () {
        if (this.value == "0") {
            bootbox.alert("<h4>EXPLICAR BENEFICIOS DE LEER LA INFORMACIÓN</h4>");
        }
        ;
    }).change();

});