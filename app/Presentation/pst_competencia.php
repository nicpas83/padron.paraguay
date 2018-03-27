<?php

App::uses('pst_selectarray', 'Presentation');

class pst_competencia extends pst_selectarray {

    public function __construct($settings) {
        $this->options = array(
            'ARBOLADO' => 'ARBOLADO',
            'BACHEO' => 'BACHEO',
            'LUMINARIAS' => 'LUMINARIAS',
            'ESCOMBROS' => 'ESCOMBROS',
            'BALDIOS' => 'BALDIOS',
            'ESPACIOS VERDES' => 'ESPACIOS VERDES',
            'POSTES' => 'POSTES',
            'SUMIDEROS' => 'SUMIDEROS',
            'ACERAS' => 'ACERAS',
            
        );
        parent::__construct($settings);
    }

}