var map;
var inscriptoMarker, markers = [];

$(document).ready(function () {
    map = new google.maps.Map(document.getElementById("mapaPersonas"), {
        center: {lat: -34.61, lng: -58.45},
        zoom: 11
    });
    $.get(WWW + "elecciones/personas/ajax_get_personas/", function (data) {
        var jdata = $.parseJSON(data);
        for (var i in jdata) {
            var position = jdata[i].PersonaUbicacion.location.split(",");
            if (position.length == 2) {
                var marker = new google.maps.Marker({
                    position: {lat: parseFloat(position[0]), lng: parseFloat(position[1])},
                    map: map,
                    icon: 'https://storage.googleapis.com/support-kms-prod/SNP_2752125_en_v0'
                });
                markers.push(marker);
            }
        }
    });
});