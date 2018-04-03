var map, confirmMap;
var markers = new Array();
var markersRuta = new Array();
var MAX_MARKERS = 99;

$(function () {
    $.get(WWW + "elecciones/personas/ajax_get_barrios", function (data) {
        var jdata = $.parseJSON(data);
        for (var i in jdata) {
            $("<option>").val(jdata[i].PersonaUbicacion.political).text(jdata[i].PersonaUbicacion.political).appendTo("#RutaBarrio");
        }
    });
    $.get(WWW + "elecciones/personas/ajax_get_localidades", function (data) {
        var jdata = $.parseJSON(data);
        for (var i in jdata) {
            $("<option>").val(jdata[i].PersonaUbicacion.locality).text(jdata[i].PersonaUbicacion.locality).appendTo("#RutaLocalidad");
        }
    });
    $.get(WWW + "elecciones/personas/ajax_get_partidos", function (data) {
        var jdata = $.parseJSON(data);
        for (var i in jdata) {
            $("<option>").val(jdata[i].PersonaUbicacion.administrative_area_level_2).text(jdata[i].PersonaUbicacion.administrative_area_level_2).appendTo("#RutaPartido");
        }
    });
    $.get(WWW + "elecciones/personas/ajax_get_provincias", function (data) {
        var jdata = $.parseJSON(data);
        for (var i in jdata) {
            $("<option>").val(jdata[i].PersonaUbicacion.administrative_area_level_1).text(jdata[i].PersonaUbicacion.administrative_area_level_1).appendTo("#RutaProvincia");
        }
    });

    map = new google.maps.Map(document.getElementById("mapa"), {
        zoom: 10,
        center: new google.maps.LatLng(-34.619, -58.46),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    //plotear();

    crearModalGenerarRuta('windowConfirmarRuta', 'buttonGenerarRuta');
    $('#buttonGenerarRuta').click(function () {
        generarRuta('windowConfirmarRuta');
    });
});

function plotear() {
    loadingAjaxStart();
    var marker;

    for (var i in markers) {
        markers[i].setMap(null);
    }

    markers = new Array();

    var barrio = $("#RutaBarrio").val() || "";
    var localidad = $("#RutaLocalidad").val() || "";
    var partido = $("#RutaPartido").val() || "";
    var provincia = $("#RutaProvincia").val() || "";
    var params = {barrio: barrio, localidad: localidad, partido: partido, provincia: provincia};

    $.get(WWW + "elecciones/personas/ajax_get_coordenadas/", params, function (data) {
        var jdata = $.parseJSON(data);
        for (var i in jdata) {
            var coordenadas = jdata[i]['PersonaUbicacion']['location'].split(",");
            marker = new google.maps.Marker({
                id: jdata[i]['Persona']['id'],
                domicilio: jdata[i]['Persona']['cedula'],
                //map: map,
                title: jdata[i]['Persona']['cedula'],
                position: new google.maps.LatLng(coordenadas[0], coordenadas[1]),
                icon: 'https://storage.googleapis.com/support-kms-prod/SNP_2752125_en_v0'
            });
            markers.push(marker);
        }
        new MarkerClusterer(map, markers, {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
        loadingAjaxEnd();
    });
}

function getMarkersCurrentViewport() {
    var array = new Array();
    var bounds = map.getBounds();
    for (var i in markers) {
        if (bounds.contains(markers[i].getPosition())) {
            array.push(markers[i]);
        }
    }
    return array;
}

function generarRuta(modal_id) {
    var marker;
    var modal = $("[id='" + modal_id + "']");
    var height = 500; // var height = screen.height * 0.63;
    var html = '';

    var markers = getMarkersCurrentViewport();

    html += '<div class="row">';
    html += '<div class="col-7 mt15">';
    html += '<div id="mapaConfirmarRuta" style="width: 100%; height: ' + height + 'px;"></div>';
    html += '</div>';
    html += '<div class="col-5 mt15">';
    html += '<div class="col-12">';
    html += '<div class="page-header mt0"><h2 class="mt0">Domicilios de la Ruta (<span id="ul_length">' + markers.length + '</span>)</h2></div>';
    html += '<ul style="height: 164px; overflow-y: scroll; overflow-x: hidden;">';
    for (var i in markers) {
        html += '<li id="li_' + markers[i].id + '">' + markers[i].domicilio + '</li>';
    }
    html += '</ul>';
    html += '<div id="boxButtonConfirmarRuta">';
    html += '<div class="mt15"><b>Encargado:</b><input class="form-control mt5" type="text" id="rutaEncargado" /></div>';
    html += '<div class="mt15"><b>Información:</b><textarea class="form-control mt5" id="rutaInformacion" style="width: 100% !important;"></textarea></div>';
    html += '<div class="mt15 pull-right"><a href="javascript:void(0);" class="btn btn-primary" id="buttonConfirmarRuta"><span class="k-icon k-i-tick"></span>Confirmar Ruta</a></div>';
    html += '</div>';
    html += '</div>';
    html += '</div>';
    html += '</div>';
    html += '<div class="clearfix"></div>';

    var d = bootbox.alert({size: 'large', className: 'subsidios', message: html});
    window.setTimeout(function () {
        var myOptions = {
            zoom: map.getZoom() - 1,
            center: map.getCenter(),
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
        confirmMap = new google.maps.Map(document.getElementById("mapaConfirmarRuta"), myOptions);

        for (var i in markers) {
            var marker = new google.maps.Marker({
                key: i,
                map: confirmMap,
                position: markers[i].getPosition(),
                id: markers[i].id,
                domicilio: markers[i].domicilio,
                title: markers[i].title,
                icon: 'https://storage.googleapis.com/support-kms-prod/SNP_2752125_en_v0'
            });
            markersRuta[i] = marker;

            google.maps.event.addListener(marker, 'click', function () {
                var event = this;
                bootbox.confirm('<h4>¿Confirma eliminar el domicilio "' + this.domicilio + '" de la ruta?</h4>', function (r) {
                    if (r) {
                        $('#li_' + event.id).remove();
                        $('#ul_length').text(parseInt($('#ul_length').text()) - 1);
                        markersRuta[event.key].setMap(null);
                        markersRuta[event.key] = null;
                        //markersRuta.splice(event.key, 1);
                    }
                });
            });
        }
    }, 500);

    $('#buttonConfirmarRuta').click(function () {
        var cant = 0;

        for (var i in markersRuta) {
            if (markersRuta[i] !== null) {
                cant++;
            }
        }

        if (cant == 0) {
            bootbox.alert('<h4>Debe especificar al menos un domicilio para generar la ruta.</h4>');
            return;
        }


        if (cant > MAX_MARKERS) {
            bootbox.alert('<h4>Puede especificar un máximo de ' + MAX_MARKERS + ' domicilios por ruta.</h4>');
            return;
        }

        bootbox.confirm('<h4>¿Confirma generar una ruta con los domicilios indicados?</h4>', function (r) {
            if (r) {
                var ids = new Array();
                for (var i in markersRuta) {
                    if (markersRuta[i] !== null) {
                        ids.push(markersRuta[i].id);
                    }
                }
                var center = confirmMap.getCenter();
                var params = {
                    "centro": center.lat() + "," + center.lng(),
                    "zoom": confirmMap.getZoom(),
                    "encargado": $("#rutaEncargado").val(),
                    "informacion": $("#rutaInformacion").val(),
                    "markers": ids.join(",")
                };
                $.post(WWW + "elecciones/rutas/confirmar", params, function (data) {
                    var jdata = $.parseJSON(data);
                    if (jdata.status == "OK") {
                        window.location = WWW + 'elecciones/rutas';
                    } else {
                        modal.data("kendoWindow").close();
                        bootbox.alert('<h4>Se produjo un error creando la ruta, intente nuevamente.</h4>');
                    }
                });
            }
        });
    });

}

function crearModalGenerarRuta(modal_id, button_id) {
    var modal = $("[id='" + modal_id + "']");
    var width = 1100; // var width = screen.width * 0.70;
    var height = 520; // var height = screen.height * 0.65;

    modal.kendoWindow({
        width: width + "px",
        height: height + "px",
        title: "Confirmar Ruta",
        actions: ["Maximize", "Close"],
        iframe: false,
        modal: true,
        visible: false,
        show: "fadeIn",
        hide: "fadeOut"
    });
}