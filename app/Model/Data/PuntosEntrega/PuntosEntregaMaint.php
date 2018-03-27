<?php

/* GENERADO AUTOMATICAMENTE */

App::uses('AbstractData', 'Lib');

class PuntosEntregaMaint extends AbstractData {

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
                2 => 
                array (
                    'name' => 'dias',
                    'label' => 'Dias',
                    'presentation' => 'DIAS',
                ),
                3 => 
                array (
                    'name' => 'puestos',
                    'label' => 'Puestos',
                    'presentation' => 'INT',
                ),
            ),
            'title' => 'Descripción del Punto de Entrega',
        ),
        1 => 
        array (
            'type' => 'table',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'hora',
                    'label' => 'Hora',
                    'presentation' => 'TIME',
                ),
            ),
            'paginate' => false,
            'title' => 'Franjas Horarias',
            'model' => 'FranjaHoraria',
            'order' => 'hora ASC',
            'multiple' => true,
        ),
    ),
);

}
