<?php

/* GENERADO AUTOMATICAMENTE */

App::uses('AbstractData', 'Lib');

class InscripcionesMaint extends AbstractData {

protected $data = array (
    'translatepath' => NULL,
    'submit' => 'Guardar',
    'cancel' => true,
    'info' => '',
    'warning' => '',
    'data' => 
    array (
        0 => 
        array (
            'type' => 'fieldset',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'descripcion',
                    'label' => 'Descripción',
                ),
                1 => 
                array (
                    'name' => 'ubicacion',
                    'label' => 'Ubicación',
                ),
            ),
            'title' => 'Datos de la Inscripcion',
            'columns' => '2',
        ),
    ),
);

}
