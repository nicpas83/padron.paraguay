<?php

class ProfesionesController extends AppController {

    public function add($return = null) {
        $this->maint = Parse::getData('Acceso.Profesiones/ProfesionesMaint');
        parent::add($return);
    }

    public function edit($id = null, $return = null) {
        $this->maint = Parse::getData('Acceso.Profesiones/ProfesionesMaint');
        parent::edit($id, $return);
    }

    public function index($last = false) {
        $this->search_list = Parse::getData('Acceso.Profesiones/ProfesionesSL');
        parent::index($last);
    }

    public function view($id = null, $return = null) {
        $this->maint = Parse::getData('Acceso.Profesiones/ProfesionesMaint');
        parent::view($id, $return);
    }

}
