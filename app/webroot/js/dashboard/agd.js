//var coloresEscala = ["#4CAF50", "#8BC34A", "#CDDC39", "#FFEB3B", "#FFC107", "#FF9800", "#FF5722", "#F44336"];
var coloresEscala = ["#6D9E47", "#FDC832", "#F48C37", "#C64238"];

$(function () {
    $.get(WWW + "agd/solicitudes/ajax_get_dashboard_data", function (data) {
        var jdata = $.parseJSON(data);
        $("#solicitudes").text(jdata.solicitudes);
        $("#asistentes").text(jdata.asistentes);
        $("#presupuesto").text(jdata.presupuesto);
        $("#adultos").text(jdata.adultos);
        $("[id='dependencia']").highcharts({
            chart: {type: 'pie'},
            colors: ["#3FA9A5", "#FDC832", "#4668AD", "#BD4F7E", "#F48C37"],
            exporting: false,
            credits: false,
            title: {text: 'Dependencia'},
            plotOptions: {pie: {dataLabels: {enabled: true, format: '{point.percentage:.0f} %', distance: -30}, showInLegend: true}},
            series: [{"name": "Total", "data": [
                        {name: 'Semidependiente', y: jdata.dependencias.Semidependiente},
                        {name: 'Dependiente', y: jdata.dependencias.Dependiente},
                        {name: 'Autoválido', y: jdata.dependencias["Autoválido"]}
                    ]}]
        });
        $("[id='horas_asistentes']").highcharts({
            chart: {type: 'column'},
            exporting: false,
            credits: false,
            colors: ["#4668AD"],
            title: {text: 'Horas Mensuales Asistentes'},
            xAxis: {categories: ['1-100', '101-150', '151-200', '201-250', '251-300', '+300']},
            yAxis: {title: {text: null}},
            legend: {enabled: false},
            plotOptions: {column: {dataLabels: {enabled: true, format: '{y}'}}},
            series: [{name: 'Convocatoria', data: [
                        jdata.horas_asistentes["1-100"], jdata.horas_asistentes["101-150"], 
                        jdata.horas_asistentes["151-200"], jdata.horas_asistentes["201-250"], 
                        jdata.horas_asistentes["251-300"], jdata.horas_asistentes[">300"]
                    ]}]

        });
        $("[id='horas_adultos']").highcharts({
            chart: {type: 'column'},
            exporting: false,
            credits: false,
            colors: ["#BD4F7E"],
            title: {text: 'Horas Mensuales Adultos'},
            xAxis: {categories: ['1-25', '26-50', '51-100', '101-200', '201-300', '+300']},
            yAxis: {title: {text: null}},
            legend: {enabled: false},
            plotOptions: {column: {dataLabels: {enabled: true, format: '{y}'}}},
            series: [{name: 'Convocatoria', data: [
                        jdata.horas_adultos["1-25"], jdata.horas_adultos["26-50"], 
                        jdata.horas_adultos["51-100"], jdata.horas_adultos["101-200"], 
                        jdata.horas_adultos["201-300"], jdata.horas_adultos[">300"]
                    ]}]

        });
        $("[id='modulo']").highcharts({
            chart: {type: 'bar'},
            exporting: false,
            credits: false,
            title: {text: 'Módulo'},
            xAxis: {categories: ['1', '1,05 (Silla de rueda)', '1,10 (Psiquiátrico)', '1,15 (Obesidad)', '1,20 (Postrado)']},
            yAxis: {title: {text: null}},
            legend: {enabled: false},
            plotOptions: {bar: {dataLabels: {enabled: true, format: '{y}'}}},
            series: [{"name": "Total", "data": [
                        {color: "#3FA9A5", y: jdata.modulos["1"]},
                        {color: "#FDC832", y: jdata.modulos["1,05"]},
                        {color: "#4668AD", y: jdata.modulos["1,1"]},
                        {color: "#BD4F7E", y: jdata.modulos["1,15"]},
                        {color: "#F48C37", y: jdata.modulos["1,2"]}
                    ]}]
        });
        $("[id='comunas']").highcharts({
            chart: {type: 'areaspline'},
            colors: ["#F48C37"],
            exporting: false,
            credits: false,
            title: {text: 'Comunas'},
            legend: {enabled: false},
            xAxis: {categories: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15]},
            yAxis: {title: {text: null}},
            plotOptions: {
                series: {lineWidth: 2},
                areaspline: {
                    dataLabels: {enabled: true},
                    fillOpacity: 0.2,
                    marker: {
                        radius: 4,
                        fillColor: 'white',
                        lineWidth: 2,
                        lineColor: "#F48C37"
                    }
                }
            },
            tooltip: {shared: true},
            series: [{"name": "Total", "data": [
                        jdata.comunas["1"], jdata.comunas["2"], jdata.comunas["3"], jdata.comunas["4"],
                        jdata.comunas["5"], jdata.comunas["6"], jdata.comunas["7"], jdata.comunas["8"],
                        jdata.comunas["9"], jdata.comunas["10"], jdata.comunas["11"], jdata.comunas["12"],
                        jdata.comunas["13"], jdata.comunas["14"], jdata.comunas["15"]
                    ]}]
        });
        mapaComunas($("#mapa"));
        drawVectorMapColors({
            1: jdata.comunas["1"],
            2: jdata.comunas["2"],
            3: jdata.comunas["3"],
            4: jdata.comunas["4"],
            5: jdata.comunas["5"],
            6: jdata.comunas["6"],
            7: jdata.comunas["7"],
            8: jdata.comunas["8"],
            9: jdata.comunas["9"],
            10: jdata.comunas["10"],
            11: jdata.comunas["11"],
            12: jdata.comunas["12"],
            13: jdata.comunas["13"],
            14: jdata.comunas["14"],
            15: jdata.comunas["15"]
        });
        $("[id='montos_adultos']").highcharts({
            chart: {type: 'column'},
            exporting: false,
            credits: false,
            colors: ["#FDC832"],
            title: {text: 'Montos Mensuales Adultos ($)'},
            xAxis: {categories: ['0 - 2,5k', '2,5k - 5k', '5k - 10k', '10k - 15k', '15k - 20k', '+20k']},
            yAxis: {title: {text: null}},
            legend: {enabled: false},
            plotOptions: {column: {dataLabels: {enabled: true, format: '{y}'}}},
            series: [{name: 'Convocatoria', data: [
                        jdata.montos_adultos["<2,5"],  jdata.montos_adultos["2,5-5"],
                        jdata.montos_adultos["5-10"], jdata.montos_adultos["10-15"], 
                        jdata.montos_adultos["15-20"], jdata.montos_adultos[">20"]
                    ]}]

        });
        $("[id='montos_asistentes']").highcharts({
            chart: {type: 'column'},
            exporting: false,
            credits: false,
            colors: ["#3FA9A5"],
            title: {text: 'Montos Mensuales Asistentes ($)'},
            xAxis: {categories: ['0 - 5k', '5k - 10k', '10k - 15k', '15k - 20k', '20k - 30k', '+30k']},
            yAxis: {title: {text: null}},
            legend: {enabled: false},
            plotOptions: {column: {dataLabels: {enabled: true, format: '{y}'}}},
            series: [{name: 'Convocatoria', data: [
                        jdata.montos_asistentes["<5"], jdata.montos_asistentes["5-10"], 
                        jdata.montos_asistentes["10-15"], jdata.montos_asistentes["15-20"],
                        jdata.montos_asistentes["20-30"], jdata.montos_asistentes[">30"]
                    ]}]

        });
        $("[id='pami_presupuestos']").highcharts({
            chart: {type: 'column'},
            exporting: false,
            credits: false,
            colors: ["#F34A89"],
            title: {text: 'Presupuestos (SECISPM / PAMI)'},
            xAxis: {categories: ['SECISPM', 'SECISPM con PAMI', 'PAMI']},
            yAxis: {title: {text: null}},
            legend: {enabled: false},
            plotOptions: {column: {dataLabels: {enabled: true, formatter: function () {
                    return dashboardDinero(this.y);
                }}}},
            series: [{name: 'Presupuesto', data: [
                        jdata.presupuesto_bruto, 
                        jdata.presupuesto_con_pami_bruto, 
                        jdata.presupuesto_de_pami_bruto
                    ]}]

        });
        $("[id='pami_q']").highcharts({
            chart: {type: 'column'},
            exporting: false,
            credits: false,
            colors: ["#1EB4E1"],
            title: {text: 'Personas Mayores (SECISPM / PAMI)'},
            xAxis: {categories: ['SECISPM', 'SECISPM con PAMI', 'PAMI']},
            yAxis: {title: {text: null}},
            legend: {enabled: false},
            plotOptions: {column: {dataLabels: {enabled: true}}},
            series: [{name: 'Personas Mayores', data: [
                        jdata.adultos,  jdata.adultos_con_pami, jdata.adultos_de_pami
                    ]}]

        });
        $("[id='haberes']").highcharts({
            chart: {type: 'pie'},
            colors: [ "#87B665", "#FFA550", "#C4433C"],
            exporting: false,
            credits: false,
            title: {text: 'Haberes ANSES'},
            plotOptions: {pie: {dataLabels: {enabled: true, format: '{point.percentage:.0f} %', distance: -30}, showInLegend: true}},
            series: [{"name": "Haberes", "data": [
                        {name: 'Hasta $15.000', y: jdata.adultos_haber_hasta15k},
                        {name: 'Entre $15.000 y $22.000', y: jdata.adultos_haber_entre15y22k},
                        {name: 'Más de $22.000', y: jdata.adultos_haber_encima22k}
                    ]}]
        });
    });
});

function drawVectorMapColors(arrayComunas) {
    var min = 9999999, max = 0;
    for (var i in arrayComunas) {
        if (arrayComunas[i] < min) {
            min = arrayComunas[i];
        }
        if (arrayComunas[i] > max) {
            max = arrayComunas[i];
        }
    }
    var mapaComunasObj = $('[id="mapa').vectorMap('get', 'mapObject');
    var selectedRegions = mapaComunasObj.getSelectedRegions();
    mapaComunasObj.setSelectedRegions({1: 0, 2: 0, 3: 0, 4: 0, 5: 0, 6: 0, 7: 0, 8: 0, 9: 0, 10: 0, 11: 0, 12: 0, 13: 0, 14: 0, 15: 0});
    var tamanioColor = (max - min) / coloresEscala.length;
    var generateColors = function () {
        var colores = {}, comuna;
        for (comuna in mapaComunasObj.regions) {
            var puntero = min;
            var punteroColor = 0;
            while (arrayComunas[comuna] > puntero) {
                puntero += tamanioColor;
                punteroColor++;
            }
            if (punteroColor > coloresEscala.length - 1) {
                punteroColor = coloresEscala.length - 1;
            }
            colores[comuna] = coloresEscala[punteroColor];
        }
        return colores;
    };
    mapaComunasObj.series.regions[0].setValues(generateColors());
    mapaComunasObj.setSelectedRegions(selectedRegions);
}

function mapaComunas(container, callbackClick, permitirSoloUna) {
    callbackClick = callbackClick || null;
    permitirSoloUna = permitirSoloUna || false;
    new jvm.Map({
        container: container,
        map: 'comunas',
        backgroundColor: '#FFF',
        zoomOnScroll: false,
        zoomAnimate: false,
        regionsSelectable: false,
        regionsSelectableOne: permitirSoloUna,
        panOnDrag: false,
        onRegionClick: callbackClick,
        series: {regions: [{attribute: 'fill'}]},
        focusOn: {
            scale: 2.3,
            x: 0.5,
            y: 0.5
        },
        regionLabelStyle: {
            initial: {
                fill: '#FFF'
            }
        },
        regionStyle: {
            initial: {
                "fill": "#FDD13E",
                "fill-opacity": 1,
                "stroke": '#FFF',
                "stroke-width": 2,
                "stroke-opacity": 1
            }
        },
        labels: {
            regions: {
                render: function (code) {
                    return code;
                },
                offsets: function (code) {
                    return {
                        '1': [0, 5],
                        '2': [0, 5],
                        '5': [-1, 3],
                        '6': [4, 5],
                        '7': [0, 10],
                        '9': [-5, 5],
                        '11': [0, 3],
                        '13': [-7, 0]
                    }[code];
                }
            }
        }
    });
}