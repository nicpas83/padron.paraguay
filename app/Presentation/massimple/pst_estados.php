<?php

App::uses('pst_selectarray', 'Presentation');

class pst_estados extends pst_selectarray {

    public function __construct($settings) {
        $this->options = array(
            'Agendado' => 'Agendado',
            'Tablet Entregada' => 'Tablet Entregada',
            'Agendado' => 'Agendado',
            'Entregar Tablet' => 'Entregar Tablet',
            'No Agendar' => 'No Agendar',
            'No se entregará Tablet' => 'No se entregará Tablet',
            'Preadjudicado' => 'Preadjudicado',
            'Usuario Desiste' => 'Usuario Desiste',
        );
        parent::__construct($settings);
    }

}
