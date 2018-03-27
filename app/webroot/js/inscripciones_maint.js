$(function () {
    $("#InscriptoEstadoCapacitacion").val('1');
    $("#boxInscriptoEstadoCapacitacion").hide();
    $("input[type=submit]").hide();
    $("#InscriptoTmpAcompaniante").change(function () {
        $("#boxInscriptoTmpDatos").hide();
        if (this.value == "Si") {
            $("#boxInscriptoTmpDatos").show();
            obligatorio('Inscripto', 'tmp_datos', true);
        }
    }).change();
    $('#agenda_aula .page-header').after('<h5></h5>'); //agrego p donde mostrará Características del Aula. 
    $('#agenda_aula .page-header').after('<h4></h4>'); //agrego h4 donde mostrará Dirección del Aula. 
    if (empty($("#InscriptoTmpFechaCapacitacion").val()) && empty($("#InscriptoTmpAula").val()) && empty($("#InscriptoTmpAulaDireccion").val())) {
        $("[id='fieldset[1]']").hide();
    }



});

function getHorarios(aula_id) {
    $.get(WWW + "mas_simple/aulas/ajax_get_dias/" + aula_id, function (data) {
        var jdata = $.parseJSON(data);
        console.log(jdata);
        initCalendar(jdata.defaultDate, jdata.events, aula_id);
        $('#agenda_aula h2').html('Aula Seleccionada: <strong>' + jdata.infoAula.nombre + '</strong>');
        $('#agenda_aula h4').html('Dirección: <strong>' + jdata.infoAula.direccion + '</strong>');
        $('#agenda_aula h5').html("<div class='pull-left mr15'>Rampa: " + jdata.infoAula.rampa + "</div><div class='pull-left mr15'>Escaleras: " + jdata.infoAula.escaleras + "</div><div class='pull-left mr15'>Observaciones: " + jdata.infoAula.observaciones + '</div>');
        $("html, body").animate({scrollTop: $(document).height()}, 1000);
    });
}

function initCalendar(defaultDate, events, aula_id) {
    $('#InscriptoTmpCalendar').fullCalendar('destroy');
    $('#InscriptoTmpCalendar').fullCalendar({
        header: {left: '', center: '', right: 'prev,next'},
        defaultView: 'agendaWeek',
//        validRange: {
//            start: moment(defaultDate).add(0, 'days').format("YYYY-MM-DD"),
//            end: moment(defaultDate).add(45, 'days').format("YYYY-MM-DD"),
//        },
//        visibleRange: {
//            start: moment(defaultDate).add(0, 'days').format("YYYY-MM-DD"),
//            //end: moment(defaultDate).add(14, 'days').format("YYYY-MM-DD")
//        },

        
        slotDuration: '00:30:00',
        slotLabelFormat: 'hh:mm',
        scrollTime: '09:00:00',
        minTime: '09:00:00',
        maxTime: '17:00:00',
        contentHeight: 'auto',
        defaultDate: defaultDate,
        slotEventOverlap: false,
        editable: false,
        displayEventTime: false,
        allDaySlot: false,
        weekends: false,
        businessHours: {dow: [1, 2, 3, 4, 5], start: '9:00', end: '17:00'},
        selectAllow: true,
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sábado'],
        dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sáb'],
        eventClick: function (calEvent, jsEvent, view) {
            if (calEvent.disponibles < 1) {
                return;
            }
            if ($("#InscriptoTmpAcompaniante").val() == "Si" && empty($("#InscriptoTmpDatos").val())) {
                errorDatosAcompaniante()();
                return;
            }
            var dia = calEvent.start.format("DD/MM/YYYY");
            var hora = calEvent.start.format("HH:mm");
            bootbox.confirm('<h4>Selección de Turno</h4> ¿Confirma la reserva de turno para el día <strong>' + dia + '</strong> a las <strong>' + hora + '</strong>?', function (r) {
                if (r) {
                    agendarTurno(aula_id, calEvent);
                }
            });
        },
        events: events
    });

}

function agendarTurno(aula_id, calEvent) {
    var params = {
        "inscripto_id": MODEL_ID,
        "aula_id": aula_id,
        "fecha_hora": calEvent.start.format("YYYY-MM-DD HH:mm:ss")
    };
    loadingAjaxStart('Agendando Capacitación');
    $.post(WWW + "mas_simple/aulas/ajax_set_dia", params, function (data) {
        var jdata = $.parseJSON(data);
        if (jdata.status == "FRANJA_HORARIA_COMPLETA") {
            bootbox.alert('<h4>Error</h4> La franja horaria seleccionada ya ha sido completada. Seleccione otra para confirmar la reserva.');
        } else if (jdata.status == "OK") {
            $('#InscriptoTmpAulaId').val(aula_id);
            $('#InscriptoTmpFechaHora').val(calEvent.start.format("YYYY-MM-DD HH:mm:ss"));
            $("form").submit();
        }
    });
}

function errorDatosAcompaniante() {
    $("#InscriptoTmpDatos").focus();
    var html = '';
    html += '<div class="form-error">';
    html += '<i class="fa fa-times-circle fa-3x pull-left error-color"></i>';
    html += '<h3 class="error-color">Por favor verifique los siguientes errores:</h3>';
    html += '<div class="ml5"><ul>';
    html += "<div class='mt3'><i class='fa fa-check'></i> Los datos del acompañante son obligatorios.</div>";
    html += '</ul></div>';
    html += '</div>';
    bootbox.alert(html);
}