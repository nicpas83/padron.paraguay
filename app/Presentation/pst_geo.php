<?php

App::uses('pst_selectarray', 'Presentation');

class pst_geo extends pst_selectarray {

    public function __construct($settings) {
        $this->options = array(
            'Geolocalizado' => 'Geolocalizado',
            'Sin geolocalizar' => 'Sin Geolocalizar',
            'No geolocalizable' => 'No Geolocalizable',
        );
        parent::__construct($settings);
    }

}