$(function() {
    var zoom = parseInt($("#RutaZoom").val());
    var coor = $("#RutaCentro").val().split(",");
    var data = sync_request('RUTAS::MAPA', 'getMarkers', '{"ruta_id":"' + MODEL_ID + '"}');

    if (data.status == "ERROR") {
        jAlert('Error al cargar los puntos del mapa, intente nuevamente.', 'Error');
        return;
    }

    var myOptions = {
        zoom: zoom - 1,
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
    var map = new google.maps.Map(document.getElementById('mapaRutaTmpId'), myOptions);

    for (var i in data.markers) {
        new google.maps.Marker({
            map: map,
            label: i,
            //icon: 'https://chart.googleapis.com/chart?chst=d_map_pin_letter&chld=' + i + '|FF776B|000000',
            position: new google.maps.LatLng(data.markers[i][0], data.markers[i][1])
        });
    }
});

function imprimirRutas() {
    sync_request('RUTAS::IMPRIMIR', 'ajaxSetImpresa', '{"ids":"' + MODEL_ID + '"}');
    window.print();
}