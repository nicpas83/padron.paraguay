function beforeLoadAddRowActor() {
    
    $("#ActorConviviente").change(function () {
        $('#boxActorDireccionActor').hide();
        if(this.value == '0'){
            $('#boxActorDireccionActor').show('300');
        }
        ;
    }).change();
    $("#ActorVinculo").change(function () {
        $('#boxActorOtroVinculo').hide();
        if(this.value == 'Otro'){
            $('#boxActorOtroVinculo').show('300');
        }
        ;
    }).change();
}

$(function () {

    $('#CasoJudicializado').change(function () {
        $('#judicializados').hide();
        if (this.value == '1') {
            $('#judicializados').show(300);
        }
        ;
    }).change();

    $('#CasoJudicializado').change(function () {
        $('#medidas_judiciales').hide();
        if (this.value == '1') {
            $('#medidas_judiciales').show(300);
        }
        ;
    }).change();
    $('#CasoMaltratoTipo').change(function () {
        $('#boxCasoMaltratoTipo2').hide();
        if (this.value != "") {
            $('#boxCasoMaltratoTipo2').show(300);
        }
        ;
    }).change();
    $('#CasoMaltratoTipo2').change(function () {
        $('#boxCasoMaltratoTipo3').hide();
        if (this.value != "") {
            $('#boxCasoMaltratoTipo3').show(300);
        }
        ;
    }).change();
});



