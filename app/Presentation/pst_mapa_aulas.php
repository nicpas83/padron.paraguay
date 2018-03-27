<?php

App::uses('Presentation', 'Lib');

class pst_mapa_aulas extends Presentation {

    public function __construct($settings) {
        $this->js_initial = "mapa_aulas_init";
        parent::__construct($settings);
    }

    public function jsIncludes() {
        return array(
            "https://maps.google.com/maps/api/js?key=" . AppConfig::get('site.googlemaps.key'),
            "presentation/mapa_aulas.js"
        );
    }

    public function renderMaintForm() {
        if (isset($this->isvisible) && !$this->isvisible) {
            return $this->renderNotVisible();
        }

        if ($this->readonly) {
            $this->html = true;
            return $this->renderReadOnly();
        }

        $val = $this->getValue();
        $id = $this->generateID();
        $name = $this->generateName();

        $html = '';
        $html .= '<input type="hidden" id="' . $id . '" name="' . $name . '" value="' . $val . '" />';
        $html .= '<div id="box' . $id . 'Geo" class=" input text col-sm-6 col-xs-12 ">';
        $html .= '<label class="pull-left control-label mt7">Buscar una dirección:</label>';
        $html .= '<input type="text" id="' . $id . 'Texto" style="width: 300px;" class="form-control" />';
        $html .= '<input type="button" id="' . $id . 'Boton" class="btn btn-default ml10" value="Geolocalizar" />';
        $html .= '</div>';
        $html .= '<div id="' . $id . 'Mapa" class="col-sm-6 col-xs-12" style="height: 350px;"></div>';


        return $html;
    }

}
