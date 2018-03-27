<?php

/* GENERADO AUTOMATICAMENTE */

App::uses('AbstractData', 'Lib');

class PersonasMaint extends AbstractData {

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
                    'label' => 'Fecha Nac',
                    'presentation' => 'DATE',
                ),
                4 => 
                array (
                    'name' => 'telefono',
                    'label' => 'Tel Fijo',
                    'presentation' => 'INT',
                ),
                5 => 
                array (
                    'name' => 'celular',
                    'label' => 'Tel Celular',
                    'presentation' => 'INT',
                ),
                6 => 
                array (
                    'name' => 'domicilio',
                    'label' => 'Direccion Importada',
                ),
                7 => 
                array (
                    'name' => 'telefono',
                    'label' => 'Telefono',
                ),
                8 => 
                array (
                    'name' => 'celular',
                    'label' => 'Celular',
                ),
                9 => 
                array (
                    'name' => 'email',
                    'label' => 'Email',
                ),
            ),
            'id' => 'reclamo',
            'title' => 'Datos Personales',
            'columns' => '2',
            'blocks' => '12',
        ),
        1 => 
        array (
            'type' => 'fieldset',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'PersonaUbicacion.route',
                    'label' => 'Direccion',
                ),
                1 => 
                array (
                    'name' => 'PersonaUbicacion.street_number',
                    'label' => 'Altura',
                ),
                2 => 
                array (
                    'name' => 'PersonaUbicacion.locality',
                    'label' => 'Localidad',
                ),
                3 => 
                array (
                    'name' => 'PersonaUbicacion.political',
                    'label' => 'Barrio',
                ),
                4 => 
                array (
                    'name' => 'PersonaUbicacion.administrative_area_level_2',
                    'label' => 'Partido',
                ),
                5 => 
                array (
                    'name' => 'PersonaUbicacion.administrative_area_level_1',
                    'label' => 'Provincia',
                ),
            ),
            'id' => 'ubicacion',
            'title' => 'Ubicacion',
            'blocks' => '6',
        ),
        2 => 
        array (
            'type' => 'fieldset',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'PersonaUbicacion.location',
                    'label' => '',
                    'presentation' => 'GOOGLEMAP',
                ),
            ),
            'id' => 'mapa',
            'title' => 'Mapa',
            'blocks' => '6',
        ),
    ),
);

}
