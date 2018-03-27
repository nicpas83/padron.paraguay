<?php

/* GENERADO AUTOMATICAMENTE */

App::uses('AbstractData', 'Lib');

class CentrosCostosMaint extends AbstractData {

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
                    'name' => 'nombre',
                    'label' => 'Nombre',
                ),
                1 => 
                array (
                    'name' => 'ingreso',
                    'label' => 'Ingreso',
                    'presentation' => 'SINO',
                ),
                2 => 
                array (
                    'name' => 'estado',
                    'label' => 'Estado',
                    'presentation' => 'ESTADO',
                    'initialvalue' => 'Activo',
                ),
            ),
            'title' => 'Centro de Costos',
        ),
    ),
);

}
