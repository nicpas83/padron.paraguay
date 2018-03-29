<?php

/* GENERADO AUTOMATICAMENTE */

App::uses('AbstractData', 'Lib');

class PersonasSL extends AbstractData {

protected $data = array (
    'translatepath' => NULL,
    'title' => '',
    'info' => '',
    'warning' => '',
    'actions' => 
    array (
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
            'label' => 'Contacto',
            'sortfield' => '',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'telefono',
                    'label' => 'Tel Fijo',
                ),
                1 => 
                array (
                    'name' => 'celular',
                    'label' => 'Tel Celular',
                ),
            ),
        ),
        5 => 
        array (
            'label' => 'Domicilio Padron',
            'sortfield' => '',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'domicilio',
                    'label' => '',
                ),
                1 => 
                array (
                    'name' => 'barrio',
                    'label' => 'Barrio',
                ),
            ),
        ),
        6 => 
        array (
            'label' => 'Domicilio Google',
            'sortfield' => '',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'PersonaUbicacion.display_field',
                    'label' => '',
                ),
                1 => 
                array (
                    'name' => 'PersonaUbicacion.location',
                    'label' => '',
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
                    'name' => 'PersonaUbicacion.political',
                    'label' => 'Barrio',
                ),
                1 => 
                array (
                    'name' => 'PersonaUbicacion.locality',
                    'label' => 'Localidad',
                ),
                2 => 
                array (
                    'name' => 'PersonaUbicacion.administrative_area_level_2',
                    'label' => 'Partido',
                ),
            ),
        ),
    ),
);

}
