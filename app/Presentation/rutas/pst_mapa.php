<?php

App::uses('Presentation', 'Lib');

class pst_mapa extends Presentation {

    public function __construct($settings) {
        parent::__construct($settings);
        $this->js_initial = "mapa_init";
    }

    public function jsIncludes() {
        return array(
            'https://maps.google.com/maps/api/js?key=' . AppConfig::get('site.googlemaps.key') . '&sensor=false',
            "presentation/rutas/mapa.js"
        );
    }

    public function renderReadOnly() {
        $html = '';
        $html.= '<div id="box' . $this->id . '" class="input googlemap ' . $this->required . '">';
        $html.= '<input type="hidden" name="' . $this->name . '" id="' . $this->id . '" value="' . $this->value . '" />';
        $html.= '<div id="mapa' . $this->id . '" style="width: 640px; height: 500px;"></div>';
        $html.= '</div>';

        return $html;
    }

    public function getMarkers($params) {
        if (empty($params->ruta_id) || !is_numeric($params->ruta_id)) {
            return array('status' => 'ERROR');
        }
        App::uses("Persona", "Elecciones.Model");
        $coordenadas = (new Persona())->find("all", [
            "conditions" => ["estado_geo" => "Geolocalizado", "ruta_id" => $params->ruta_id],
            "order" => ["route ASC", "street_number ASC"],
        ]);
        $i = 1;
        $markers = [];
        foreach ($coordenadas as $coordenada) {
            $markers[$i++] = explode(",", $coordenada['PersonaUbicacion']['location']);
        }
        return array('status' => 'OK', 'markers' => $markers);
    }

}
