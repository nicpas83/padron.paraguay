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
            'label' => 'Nombre',
        ),
        1 => 
        array (
            'name' => 'apellido',
            'label' => 'Apellido',
        ),
        2 => 
        array (
            'name' => 'cedula',
            'label' => 'Cedula',
        ),
        3 => 
        array (
            'name' => 'fecha_nacimiento',
            'label' => 'Fecha Nac.',
            'presentation' => 'DATERANGE',
        ),
        4 => 
        array (
            'name' => 'PersonaUbicacion.estado_geo',
            'label' => 'Estado Geolocalización',
            'presentation' => 'GEOLOCALIZACION::ESTADO_GEO',
        ),
        5 => 
        array (
            'name' => 'PersonaUbicacion.political',
            'label' => 'Barrio',
            'presentation' => 'SELECTFIELD',
            'classparams' => '{\'model\':\'Elecciones.PersonaUbicacion\', \'field\':\'political\', \'format\':\'keyVal\'}',
        ),
        6 => 
        array (
            'name' => 'PersonaUbicacion.locality',
            'label' => 'Localidad',
            'presentation' => 'SELECTFIELD',
            'classparams' => '{\'model\':\'Elecciones.PersonaUbicacion\', \'field\':\'locality\', \'format\':\'keyVal\'}',
        ),
        7 => 
        array (
            'name' => 'PersonaUbicacion.administrative_area_level_2',
            'label' => 'Partido',
            'presentation' => 'SELECTFIELD',
            'classparams' => '{\'model\':\'Elecciones.PersonaUbicacion\', \'field\':\'administrative_area_level_2\', \'format\':\'keyVal\'}',
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
