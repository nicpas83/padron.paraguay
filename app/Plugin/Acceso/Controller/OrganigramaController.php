<?php

class OrganigramaController extends AppController {

    public $uses = array("Acceso.Dependencia");
    
    public function view($id = null, $return = null) {
        $this->Dependencia->recursive = 0;
        $this->set('nodos', $this->Dependencia->find("all", array("conditions" => array("Dependencia.estado" => "Activo"))));
        $this->set('next', setNextURL($return, $this->action));
    }

}
