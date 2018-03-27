<?php

class DependenciasController extends AppController {

    public function add($return = null) {
        $this->maint = Parse::getData('Acceso.Dependencias/DependenciasMaint');
        parent::add($return);
    }

    public function edit($id = null, $return = null) {
        $this->maint = Parse::getData('Acceso.Dependencias/DependenciasMaint');
        parent::edit($id, $return);
    }

    public function index($last = false) {
        $this->search_list = Parse::getData('Acceso.Dependencias/DependenciasSL');
        parent::index($last);
    }
    
    public function index_view($last = false) {
        $this->search_list = Parse::getData('Acceso.Dependencias/DependenciasSLView');
        parent::index($last);
    }

    public function view($id = null, $return = null) {
        $this->maint = Parse::getData('Acceso.Dependencias/DependenciasMaint');
        parent::view($id, $return);
    }

    public function ajax_get_dependencia_user($transportistaId) {
        $resData = array();
        if (!empty($transportistaId)) {
            App::uses("Transportista", "Almacen.Model");
            $transportistaObj = new Transportista();
            $dataTransportista = $transportistaObj->findById($transportistaId);
            $resData['dependencia_id'] = $dataTransportista['Dependencia']['id'];
            $resData['dependencia_nombre'] = $dataTransportista['Dependencia']['nombre'];
        }
        $this->set('data', $resData);
        return $this->render('/ajax', 'ajax');
    }

    public function ajax_datos_basicos_dependencia($dependenciaId) {
        $resData = array();
        if (!empty($dependenciaId)) {
            $dependenciaData = $this->Dependencia->findById($dependenciaId);
            $resData['dependencia_direccion'] = $dependenciaData['Dependencia']['direccion'];
            $resData['dependencia_cc_id'] = $dependenciaData['CentroCostos']['id'];
            $resData['dependencia_cc_nombre'] = $dependenciaData['CentroCostos']['nombre'];
        }
        $this->set('data', $resData);
        return $this->render('/ajax', 'ajax');
    }

}
