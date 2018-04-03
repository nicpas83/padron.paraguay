<?php

App::uses('pst_selectarray', 'Presentation');

class pst_estado_ruta extends pst_selectarray {

    public function __construct($settings) {
        $this->options = array(
            'Si' => 'Realizada',
            'No' => 'Sin Realizar',
            'Impresa' => 'Impresa',
        );
        parent::__construct($settings);
    }

}