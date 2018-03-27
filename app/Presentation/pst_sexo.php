<?php

App::uses('pst_selectarray', 'Presentation');

class pst_sexo extends pst_selectarray {

    public function __construct($settings) {
        $this->options = array(
            '0' => 'MASCULINO',
            '1' => 'FEMENINO',
        );
        parent::__construct($settings);
    }

}