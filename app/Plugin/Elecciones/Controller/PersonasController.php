<?php

App::uses('AppController', 'Controller');

class PersonasController extends AppController {

    public function add($return = null) {
        $this->maint = Parse::getData('Elecciones.Personas/PersonasMaint');
        parent::add($return);
    }

    public function edit($id = null, $return = null) {
        $this->maint = Parse::getData('Elecciones.Personas/PersonasMaint');
        parent::edit($id, $return);
    }

    public function index($last = false) {
        $this->search_list = Parse::getData('Elecciones.Personas/PersonasSL');
        parent::index($last);
    }

    public function view($id = null, $return = null) {
        $this->maint = Parse::getData('Elecciones.Personas/PersonasMaint');
        parent::view($id, $return);
    }

    public function mapa() {
        $this->maint = Parse::getData('Elecciones.Personas/PersonasMaint');
    }

    public function ajax_get_personas() {
        $personas = $this->Persona->PersonaUbicacion->find('all', ['conditions' => ['estado_geo' => 'Geolocalizado'], 'recursive' => -1]);

        $this->set("data", $personas);
        return $this->render("/ajax", "ajax");
    }

    public function ajax_get_coordenadas() {
        $conditions = ['PersonaUbicacion.estado_geo' => 'Geolocalizado', 'Persona.ruta_id' => NULL];
        if (!empty($this->request->query['barrio'])) {
            $conditions["PersonaUbicacion.political"] = $this->request->query['barrio'];
        }
        if (!empty($this->request->query['localidad'])) {
            $conditions["PersonaUbicacion.locality"] = $this->request->query['localidad'];
        }
        if (!empty($this->request->query['partido'])) {
            $conditions["PersonaUbicacion.administrative_area_level_2"] = $this->request->query['partido'];
        }
        if (!empty($this->request->query['provincia'])) {
            $conditions["PersonaUbicacion.administrative_area_level_1"] = $this->request->query['provincia'];
        }
        $personas = $this->Persona->find('all', ['limit' => null, 'conditions' => $conditions]);
        $this->set("data", $personas);
        return $this->render("/ajax", "ajax");
    }

    public function ajax_get_barrios() {
        $localidades = $this->Persona->PersonaUbicacion->find("all", [
            "conditions" => ["political IS NOT NULL"],
            "group" => "political",
            "fields" => ["political"],
            "order" => "political",
        ]);
        $this->set("data", $localidades);
        return $this->render("/ajax", "ajax");
    }

    public function ajax_get_localidades() {
        $localidades = $this->Persona->PersonaUbicacion->find("all", [
            "conditions" => ["locality IS NOT NULL"],
            "group" => "locality",
            "fields" => ["locality"],
            "order" => "locality",
        ]);
        $this->set("data", $localidades);
        return $this->render("/ajax", "ajax");
    }

    public function ajax_get_partidos() {
        $partidos = $this->Persona->PersonaUbicacion->find("all", [
            "conditions" => ["administrative_area_level_2 IS NOT NULL"],
            "group" => "administrative_area_level_2",
            "fields" => ["administrative_area_level_2"],
            "order" => "administrative_area_level_2",
        ]);
        $this->set("data", $partidos);
        return $this->render("/ajax", "ajax");
    }

    public function ajax_get_provincias() {
        $provincias = $this->Persona->PersonaUbicacion->find("all", [
            "conditions" => ["administrative_area_level_1 IS NOT NULL"],
            "group" => "administrative_area_level_1",
            "fields" => ["administrative_area_level_1"],
            "order" => "administrative_area_level_1",
        ]);
        $this->set("data", $provincias);
        return $this->render("/ajax", "ajax");
    }

}
