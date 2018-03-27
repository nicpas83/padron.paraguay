<?php

App::uses('pst_selectarray', 'Presentation');

class pst_propiedad extends pst_selectarray {

    public function __construct($settings) {
        $this->options = array(
            'PERMISO DE USO' => 'PERMISO DE USO',
            'CONTRATO DE LOCACION' => 'CONTRATO DE LOCACION',
            'COMODATO' => 'COMODATO',
            'PROPIETARIO' => 'PROPIETARIO',
            'CONVENIO CON AUSA' => 'CONVENIO CON AUSA',
            'FALTA PERMISO DE ESPACIOS VERDES' => 'FALTA PERMISO DE ESPACIOS VERDES',
            'ESCRITURA' => 'ESCRITURA',
            'CONTRATO DE ALQUILER' => 'CONTRATO DE ALQUILER',
            'CONTRATO DE SUBCONCESION' => 'CONTRATO DE SUBCONCESION',
            'TENENCIA PRECARIA' => 'TENENCIA PRECARIA',
        );
        parent::__construct($settings);
    }

}






