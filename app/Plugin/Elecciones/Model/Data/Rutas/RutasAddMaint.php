<?php

/* GENERADO AUTOMATICAMENTE */

App::uses('AbstractData', 'Lib');

class RutasAddMaint extends AbstractData {

protected $data = array (
    'translatepath' => NULL,
    'submit' => 'Guardar',
    'cancel' => true,
    'info' => '',
    'warning' => '',
    'jsincludes' => 
    array (
        0 => 'presentation/rutas/mapa',
    ),
    'data' => 
    array (
        0 => 
        array (
            'type' => 'fieldset',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'barrio',
                    'label' => 'Barrio',
                    'presentation' => 'SELECTARRAY',
                ),
                1 => 
                array (
                    'name' => 'localidad',
                    'label' => 'Localidad',
                    'presentation' => 'SELECTARRAY',
                ),
                2 => 
                array (
                    'name' => 'partido',
                    'label' => 'Partido',
                    'presentation' => 'SELECTARRAY',
                ),
                3 => 
                array (
                    'name' => 'provincia',
                    'label' => 'Provincia',
                    'presentation' => 'SELECTARRAY',
                ),
            ),
            'title' => 'Filtros',
            'columns' => '1',
        ),
    ),
);

}
