<?php

class IngresosVisitasController extends AppController {

    public function add($return = null) {
        $this->maint = Parse::getData('Acceso.IngresosVisitas/IngresosVisitasMaint');
        parent::add($return);
    }

    public function edit($id = null, $return = null) {
        $this->maint = Parse::getData('Acceso.IngresosVisitas/IngresosVisitasMaint');
        $this->setMaintFieldAtribute("fecha_ingreso", "readonly", true);
        $this->setMaintFieldAtribute("nombre", "readonly", true);
        $this->setMaintFieldAtribute("apellido", "readonly", true);
        $this->setMaintFieldAtribute("piso", "readonly", true);
        $this->setMaintFieldAtribute("sector", "readonly", true);
        $this->setMaintFieldAtribute("numero_tarjeta", "readonly", true);
        parent::edit($id, $return);
    }

    public function index($last = false) {
        $this->search_list = Parse::getData('Acceso.IngresosVisitas/IngresosVisitasSL');
        parent::index($last);
    }

    public function view($id = null, $return = null) {
        $this->maint = Parse::getData('Acceso.IngresosVisitas/IngresosVisitasMaint');
        parent::view($id, $return);
    }

}
