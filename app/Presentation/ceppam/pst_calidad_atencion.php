<?php

App::uses('pst_selectarray', 'Presentation');

class pst_calidad_atencion extends pst_selectarray {

    public function __construct($settings) {
        $this->options = array(
            'MUY BUENA' => 'MUY BUENA',
            'BUENA' => 'BUENA',
            'REGULAR' => 'REGULAR',
            'MALA' => 'MALA',
            'No Permite Ingreso' => 'No Permite Ingreso',
            'No Constituye Geriátrico' => 'No Constituye Geriátrico ',
            'No Funciona Más' => 'No Funciona Más',
        );
        parent::__construct($settings);
    }

}