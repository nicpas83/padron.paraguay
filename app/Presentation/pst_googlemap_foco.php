<?php

App::uses('Presentation', 'Lib');

class pst_googlemap_foco extends Presentation {

    public function __construct($settings) {
        parent::__construct($settings);
        $this->js_initial = "googlemap_foco_init";
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
        $name = $this->generateName();
        $id = $this->generateID();

        $html = '';
        $html.= '<div id="box' . $id . '" class="input googlemap ' . $this->required . ' ' . getClassesColumns($this->getColumns()) . '">';
        $html.= '<input type="hidden" name="' . $name . '" id="' . $id . '" value="' . htmlspecialchars($val) . '" />';
        $html.= '<label for="' . $id . '" class="control-label pull-left mt7">' . $this->label . '</label>';
        $html.= '<div id="mapa' . $id . '" style="width: ' . (isset($this->classparams['width']) ? $this->classparams['width'] : "400") . 'px; height: ' . (isset($this->classparams['height']) ? $this->classparams['height'] : "300") . 'px;"></div>';
        $html.= '<div class="mt15 ml150">';
        $html.= '<a href="javascript:void(0);" onclick="googlemap[\'' . $id . '\'].deletePolygon();" id="delete_' . $id . '" class="btn btn-inverse btn-sm hide"><i class="fa fa-times"></i> Borrar Polígono</a>';
        $html.= '</div>';
        $html.= '</div>';
        return $html;
    }

    public function renderReadOnly() {
        if (isset($this->isvisible) && !$this->isvisible) {
            return $this->renderNotVisible();
        }

        if ($this->table && !$this->isvisibletable) {
            return $this->renderNotVisible();
        }

        $val = $this->getValue();
        $name = $this->generateName();
        $id = $this->generateID();

        $aLink = "No georeferenciada";
        if (!empty($val)) {
            $urlGoogleMap = "http://maps.google.com/?output=embed&q=loc:" . str_replace(" ", "+", $val);
            $aLink = "<a class='btn btn-inverse btn-sm fancybox fancybox.iframe' data-toggle='tooltip' href='" . $urlGoogleMap . "' rel='" . $id . "' title='Link a Mapa' target='_blank'><i class='fa fa-map-marker'></i></a>";
        }

        if ($this->table) {
            $html = "<td>" . $aLink . "</td>";
        } elseif ((isset($this->classparams['list']) && $this->classparams['list'])) {
            $html = $aLink;
        } else {
            $html = '<div id="box' . $id . '" class="input googlemap ' . $this->required . ' ' . getClassesColumns($this->getColumns()) . '">';
            $html.= '<input type="hidden" name="' . $name . '" id="' . $id . '" value="' . $val . '" />';
            $html.= '<label for="' . $id . '" class="control-label pull-left mt7">' . $this->label . '</label>';
            $html.= '<div class="field mt7">';
            if (!empty($val)) {
                $coords = explode(";", $val);
                if (count($coords) == 1) {
                    $html.= '<img src="http://maps.google.com/maps/api/staticmap?key=' . AppConfig::get('site.googlemaps.key') . '&center=' . $val . '&zoom=16&size=400x300&maptype=roadmap&markers=' . $val . '&sensor=false" />';
                } else {
                    $html.='<img src="http://maps.googleapis.com/maps/api/staticmap?key=' . AppConfig::get('site.googlemaps.key') . '&zoom=15&size=400x300&maptype=roadmap&sensor=false&path=fillcolor:0xFFD300|weight:4|color:0x000000|' . str_replace(";", "|", $val . '&sensor=false" />');
                }
            } else {
                $html.= "No georeferenciada";
            }
            $html.= '</div>';
            $html.= '</div>';
        }
        return $html;
    }

    public function jsIncludes() {
        return array(
            "https://maps.google.com/maps/api/js?key=" . AppConfig::get('site.googlemaps.key') . "&sensor=false&libraries=drawing",
            "presentation/googlemap_foco.js"
        );
    }

}
