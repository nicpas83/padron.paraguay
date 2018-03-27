<?php

/* GENERADO AUTOMATICAMENTE */

App::uses('AbstractData', 'Lib');

class PersonasSL extends AbstractData {

protected $data = array (
    'translatepath' => NULL,
    'title' => '',
    'actions' => 
    array (
        0 => 
        array (
            'op' => 'V',
            'action' => 'view',
        ),
    ),
    'filters' => 
    array (
        0 => 
        array (
            'name' => 'nombre',
            'label' => 'nombre',
        ),
    ),
    'columns' => 
    array (
        0 => 
        array (
            'label' => '',
            'sortfield' => '',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'nombre',
                    'label' => 'Nombre',
                ),
            ),
        ),
        1 => 
        array (
            'label' => '',
            'sortfield' => '',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'apellido',
                    'label' => 'Apellido',
                ),
            ),
        ),
        2 => 
        array (
            'label' => '',
            'sortfield' => '',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'cedula',
                    'label' => 'Cedula',
                ),
            ),
        ),
        3 => 
        array (
            'label' => '',
            'sortfield' => '',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'fecha_nacimiento',
                    'label' => 'Fecha Nac.',
                    'presentation' => 'DATE',
                ),
            ),
        ),
        4 => 
        array (
            'label' => '',
            'sortfield' => '',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'telefono',
                    'label' => 'Tel Fijo',
                ),
            ),
        ),
        5 => 
        array (
            'label' => '',
            'sortfield' => '',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'celular',
                    'label' => 'Tel Celular',
                ),
            ),
        ),
        6 => 
        array (
            'label' => '',
            'sortfield' => '',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'PersonaUbicacion.location',
                    'label' => 'Ubicacion',
                    'presentation' => 'GOOGLEMAP',
                    'classparams' => '{\'list\':true}',
                ),
            ),
        ),
        7 => 
        array (
            'label' => '',
            'sortfield' => '',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'domicilio',
                    'label' => 'Domicilio',
                ),
            ),
        ),
    ),
);

}
