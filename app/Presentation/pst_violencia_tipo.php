<?php

App::uses('pst_selectarray', 'Presentation');

class pst_violencia_tipo extends pst_selectarray {

    public function __construct($settings) {
        $this->options = array(
            'Psicológico' => 'Psicológico',
            'Salud' => 'Salud',
            'Físico' => 'Físico',
            'Ausencia de Redes' => 'Ausencia de Redes',
            'Económico / Patrimonial' => 'Económico / Patrimonial',
            'Negligencia' => 'Negligencia',
            'Abandono de Persona' => 'Abandono de Persona',
            'Vivienda' => 'Vivienda',
            'Previsional' => 'Previsional',
            'Ambiental' => 'Ambiental',
            'Cultural / Simbólica' => 'Cultural',
            'Otros' => 'Otros',
        );
        parent::__construct($settings);
    }

}