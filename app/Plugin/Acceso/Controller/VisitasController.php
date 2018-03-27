<?php

class VisitasController extends AppController {

    public function add($return = null) {
        $this->maint = Parse::getData('Acceso.Visitas/VisitasMaint');
        parent::add($return);
    }

    public function edit($id = null, $return = null) {
        $this->maint = Parse::getData('Acceso.Visitas/VisitasMaint');
        parent::edit($id, $return);
    }

    public function index($last = false) {
        $this->search_list = Parse::getData('Acceso.Visitas/VisitasSL');
        parent::index($last);
    }

    public function view($id = null, $return = null) {
        $this->maint = Parse::getData('Acceso.Visitas/VisitasMaint');
        parent::view($id, $return);
    }

}
