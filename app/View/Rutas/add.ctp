<?php

$this->Html->script('https://maps.google.com/maps/api/js?key=' . AppConfig::get('site.googlemaps.key') . '&sensor=false', array('inline' => false));
$this->Html->script('mapa.js', array('inline' => false));
?>

<form action="/rutas/add" id="RutaAddForm" enctype="multipart/form-data" method="post" accept-charset="utf-8" onsubmit="plotear();
        return false;">
    <fieldset>
        <div class="pull-left mt15 col-sm-10">
            <div id="mapa" style="width: 1030px; height: 600px;"></div>
        </div>
        <div class="pull-left mt15 col-sm-2">
            <div class="form-inline col-sm-12 text-center">
                <label for="circuito">Circuito</label>
                <select id="circuito" name="circuito" class="ml10 form-control">
                    <option value=""></option>
                    <option value="155">155</option>
                    <option value="155A">155A</option>
                    <option value="156">156</option>
                    <option value="156A">156A</option>
                    <option value="156B">156B</option>
                </select>  
            </div>
            <div class="col-sm-12 mt25 text-center">
                <a class="btn btn-primary" id="plotearRuta" data-toggle="tooltip" data-placement="top" title="Plotear Votantes" href="javascript:void(0);" onclick="plotear();"><i class="fa fa-map-marker"></i> Plotear</a>
            </div>
            <div class="col-sm-12 mt25 text-center">
                <a class="btn btn-primary" id="generarRuta" data-toggle="tooltip" data-placement="top" title="Generar Ruta" href="javascript:void(0);" onclick="generarRuta();"><i class="fa fa-map"></i> Ruta</a>
            </div>
        </div>
    </fieldset>
</form>
