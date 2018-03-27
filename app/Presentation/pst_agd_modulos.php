<?php

App::uses('pst_selectarray', 'Presentation');

class pst_agd_modulos extends pst_selectarray {

    public function __construct($settings) {
        $this->options = array(
            '1' => '1 - 1,20 (Postrado)',
            '2' => '2 - 1,15 (Obesidad)',
            '3' => '3 - 1,10 (Psiquiátrico)',
            '4' => '4 - 1,05 (Silla de rueda)',
        );
        parent::__construct($settings);
    }

}