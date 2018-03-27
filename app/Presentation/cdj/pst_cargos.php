<?php

App::uses('pst_selectarray', 'Presentation');

class pst_cargos extends pst_selectarray {

    public function __construct($settings) {
        $this->options = array(
            'PRESIDENTE' => 'PRESIDENTE',
            'VICEPRESIDENTE' => 'VICEPRESIDENTE',
            'SECRETARIO' => 'SECRETARIO',
            'TESORERO' => 'TESORERO',
            'COORDINADOR' => 'COORDINADOR',
        );
        parent::__construct($settings);
    }

}