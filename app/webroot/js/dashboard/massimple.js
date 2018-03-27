$(function () {
    $.get(WWW + "mas_simple/inscriptos/ajax_get_dashboard_data", function (data) {
        var jdata = $.parseJSON(data);
        $("#fecha_actualizacion").text(jdata.fecha_actualizacion);
        $("#entregas_total").text(number_format(jdata.entregas_total, 0, ",", "."));
        $("#pendientes_total").text(number_format(jdata.pendientes_total, 0, ",", "."));
        $("#total_total").text(number_format(jdata.total_total, 0, ",", "."));
        $("#entregas_exo").text(number_format(jdata.entregas_exo, 0, ",", "."));
        $("#pendientes_exo").text(number_format(jdata.pendientes_exo, 0, ",", "."));
        $("#total_exo").text(number_format(jdata.total_exo, 0, ",", "."));
        $("#entregas_enacom").text(number_format(jdata.entregas_enacom, 0, ",", "."));
        $("#pendientes_enacom").text(number_format(jdata.pendientes_enacom, 0, ",", "."));
        $("#total_enacom").text(number_format(jdata.total_enacom, 0, ",", "."));

        var data0 = [{name: 'Entregas Total', color: '#4CAF50', y: jdata.entregas_total}];
        gaudge('gaudge_total', 'Total', data0, false, jdata.total_total);
        var data1 = [{name: 'Entregas EXO', color: '#FFD66A', y: jdata.entregas_exo}];
        gaudge('gaudge_exo', 'EXO', data1, false, jdata.total_exo);
        var data2 = [{name: 'Entregas ENACOM', color: '#00B1E1', y: jdata.entregas_enacom}];
        gaudge('gaudge_enacom', 'ENACOM', data2, false, jdata.total_enacom);

        line('meses', jdata.meses, [
            {name: 'EXO', data: jdata.meses_exo, color: '#FFD66A'},
            {name: 'ENACOM', data: jdata.meses_enacom, color: '#00B1E1'}
        ]);
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

function gaudge(container, title, data, showInLegend, total) {
    if (typeof showInLegend === "undefined") {
        showInLegend = true;
    }
    var background = [], series = [], pointerBG = 112;
    for (var i in data) {
        background.push({
            outerRadius: pointerBG + '%', innerRadius: (pointerBG - 24) + '%', borderWidth: 0,
            backgroundColor: Highcharts.Color(data[i].color).setOpacity(0.3).get()
        });
        series.push({
            name: data[i].name, data: [{color: data[i].color, radius: pointerBG + '%', innerRadius: (pointerBG - 24) + '%', y: data[i].y / total * 100}]
        });
        pointerBG -= 25;
    }
    return new Highcharts.Chart({
        chart: {renderTo: container, type: 'solidgauge'},
        title: {text: null},
        exporting: {enabled: false},
        credits: {enabled: false},
        tooltip: {enabled: false},
        pane: {startAngle: 0, endAngle: 360, background: background},
        yAxis: {min: 0, max: 100, lineWidth: 0, tickPositions: []},
        plotOptions: {
            solidgauge: {
                dataLabels: {
                    enabled: true,
                    y: -35,
                    borderWidth: 0,
                    backgroundColor: 'none',
                    useHTML: true,
                    shadow: false,
                    formatter: function () {
                        return '<div style="width:100%;text-align:center;"><span style="font-size:1.2em;font-weight:bold;">' + title + '</span><br/><span style="font-size:3em;">' + Highcharts.numberFormat(this.y, 0) + '%</span>';
                    }
                }, linecap: 'round', stickyTracking: false, rounded: true
            }
        },
        series: series
    });
}

function line(container, categories, series) {
    return new Highcharts.Chart({
        chart: {renderTo: container, type: 'areaspline'},
        title: {text: ''},
        exporting: {enabled: false},
        credits: {enabled: false},
        xAxis: {categories: categories, title: {text: ''}},
        yAxis: {
            title: {text: ''}, min: 0, plotLines: [{value: 0, width: 1, color: '#808080'}],
            stackLabels: {
                enabled: true,
                formatter: function () {
                    var sum = 0, series = this.axis.series;
                    for (var i in series) {
                        if (series[i].visible && series[i].options.stacking == 'normal') {
                            sum += series[i].yData[this.x];
                        }
                    }
                    return this.total > 0 ? Highcharts.numberFormat(sum, 0) : "";
                }
            }
        },
        legend: {layout: 'horizontal', align: 'center', verticalAlign: 'bottom', borderWidth: 0, margin: 0},
        plotOptions: {areaspline: {stacking: 'normal', dataLabels: {enabled: false}}},
        tooltip: {valueDecimals: 0, shared: true},
        series: series
    });
}