<?php

App::uses('AppController', 'Controller');

class PersonasController extends AppController {

    public function add($return = null) {
        $this->maint = Parse::getData('Personas.Personas/PersonasMaint');
        parent::add($return);
    }

    public function edit($id = null, $return = null) {
        $this->maint = Parse::getData('Personas.Personas/PersonasMaint');
        parent::edit($id, $return);
    }

    public function index($last = false) {
        $this->search_list = Parse::getData('Personas.Personas/PersonasSL');
        parent::index($last);
    }

    public function view($id = null, $return = null) {
        $this->maint = Parse::getData('Personas.Personas/PersonasMaint');
        parent::view($id, $return);
    }

}
