var map, geocoder;
var inscriptoMarker, markers = [];

function mapa_aulas_init(field, params) {
    map = new google.maps.Map(document.getElementById(field.attr("id") + "Mapa"), {
        center: {lat: -34.61, lng: -58.45},
        zoom: 11
    });

    $.get(WWW + "mas_simple/aulas/ajax_get_aulas", function (data) {
        var jdata = $.parseJSON(data);
        for (var i in jdata) {
            var markerColor;
            if(jdata[i].Aula.telefonica == 1){
                markerColor = "http://maps.google.com/mapfiles/ms/icons/yellow-dot.png";
            }else{
                markerColor = "http://maps.google.com/mapfiles/ms/icons/red-dot.png";
                }

            var position = jdata[i].Aula.coordenadas.split(",");
            if (position.length == 2) {

                var marker = new google.maps.Marker({
                    position: {lat: parseFloat(position[0]), lng: parseFloat(position[1])},
                    map: map,
                    id: jdata[i].Aula.id,
                    title: jdata[i].Aula.nombre,
                    icon: markerColor
                });
                marker.addListener('click', function () {
                    getHorarios(this.id);
                });
                markers.push(marker);
            }

        }
    });

    // accion geolocate_mapa_aulas en boton con id = field.attr("id") + "Boton"
    $("#InscriptoTmpMapaBoton").click(function () {
        geocoder = new google.maps.Geocoder();
        var address = $("#InscriptoTmpMapaTexto").val() + ", Ciudad Autonoma de Buenos Aires, Argentina";
        geocoder.geocode({'address': address}, function (results, status) {
            if (status === 'OK') {
                map.setCenter(results[0].geometry.location);
                if (inscriptoMarker) {
                    inscriptoMarker.setMap(null);
                }
                inscriptoMarker = new google.maps.Marker({
                    map: map,
                    position: results[0].geometry.location,
                    icon: "http://maps.google.com/mapfiles/ms/icons/green-dot.png",
                });
            } else {
                alert('Geocode was not successful for the following reason: ' + status);
            }
        });
    });
}

$(document).ready(function () {
    $(window).keydown(function (event) {
        if (event.keyCode == 13) {
            event.preventDefault();
            return false;
        }
    });
});