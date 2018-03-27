<?php

class CentrosCostosController extends AppController {

    public function add($return = null) {
        $this->maint = Parse::getData('Acceso.CentrosCostos/CentrosCostosMaint');
        parent::add($return);
    }

    public function edit($id = null, $return = null) {
        $this->maint = Parse::getData('Acceso.CentrosCostos/CentrosCostosMaint');
        parent::edit($id, $return);
    }

    public function index($last = false) {
        $this->search_list = Parse::getData('Acceso.CentrosCostos/CentrosCostosSL');
        parent::index($last);
    }

    public function view($id = null, $return = null) {
        $this->maint = Parse::getData('Acceso.CentrosCostos/CentrosCostosMaint');
        parent::view($id, $return);
    }

}
