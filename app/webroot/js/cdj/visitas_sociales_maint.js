$(function () {
    $('#boxVisitaSocialActividadesConOtrasInstituciones label').css('width', 300);

    $('#VisitaSocialActividadesConOtrasInstituciones').change(function () {
        $('#ActividadesConOtrasInstituciones').hide();
        if (this.value == 'Si') {
            $('#ActividadesConOtrasInstituciones').show();
        }
        ;
    }).change();

    //PUNTO 1
    $('#VisitaSocialCuotaSocial').change(function () {
        $('#boxVisitaSocialCuotaSocialMonto').hide();
        if (this.value == 'Si') {
            $('#boxVisitaSocialCuotaSocialMonto').show();
        }
        ;
    }).change();
    $('#VisitaSocialTarifaSocial').change(function () {
        $('#boxVisitaSocialTarifaSocialMonto').hide();
        if (this.value == 'Si') {
            $('#boxVisitaSocialTarifaSocialMonto').show();
        }
        ;
    }).change();


//    $('#boxVisitaSocialPoblacionObjetivo > label').remove();    
//    $('#boxVisitaSocialFondosTipo > label').remove();    



});
