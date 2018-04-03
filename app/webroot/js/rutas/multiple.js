$(function() {
    CANT_RUTAS = rutas.length;

    for (var i in rutas) {
        var zoom = parseInt($("#RutaZoom" + rutas[i]).val());
        var coor = $("#RutaCentro" + rutas[i]).val().split(",");
        var data = sync_request('rutas::mapa', 'getMarkers', '{"ruta_id":"' + rutas[i] + '"}');

        if (data.status == "ERROR") {
            jAlert('Error al cargar los puntos del mapa, intente nuevamente.', 'Error');
            return;
        }

        var myOptions = {
            zoom: zoom,
            center: new google.maps.LatLng(coor[0], coor[1]),
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            disableDoubleClickZoom: true,
            draggable: false,
            disableDefaultUI: true,
            panControl: false,
            rotateControl: false,
            scaleControl: false,
            scrollwheel: false,
            zoomControl: false
        };
        map = new google.maps.Map(document.getElementById('mapaRutaTmpId' + rutas[i]), myOptions);

        for (var j in data.markers) {
            new google.maps.Marker({
                map: map,
                icon: 'https://chart.googleapis.com/chart?chst=d_map_pin_letter&chld=' + j + '|FF776B|000000',
                position: new google.maps.LatLng(data.markers[j][0], data.markers[j][1])
            });
        }
    }
});

function imprimirRutas() {
    sync_request('RUTAS::IMPRIMIR', 'ajaxSetImpresa', '{"ids":"' + MODEL_ID + '"}');
    window.print();
}