<?php

App::uses('pst_selectarray', 'Presentation');

class pst_tipo_doc extends pst_selectarray {

    public function __construct($settings) {
        $this->options = array(
            '1' => 'DNI',
            '2' => 'LC',
            '3' => 'LR',
            '4' => 'LE',
        );
        parent::__construct($settings);
    }

}