var map, geocoder;
var inscriptoMarker, markers = [];

function mapa_personas_init() {

    map = new google.maps.Map(document.getElementById(field.attr("id") + "Mapa"), {
        center: {lat: -34.61, lng: -58.45},
        zoom: 11
    });
    $.get(WWW + "elecciones/personas/ajax_get_personas/", function (data) {
        var jdata = $.parseJSON(data);
        console.log(jdata);
        for (var i in jdata) {
            var markerColor;
            
            var position = jdata[i].Persona.location.split(",");
            if (position.length == 2) {

                var marker = new google.maps.Marker({
                    position: {lat: parseFloat(position[0]), lng: parseFloat(position[1])},
                    map: map,
                    id: jdata[i].Aula.id,
                    title: jdata[i].Aula.nombre,
                    icon: markerColor
                });
                
                markers.push(marker);
            }

        }
    });

    
}

$(document).ready(function () {
    
    mapa_personas_init();
    
});