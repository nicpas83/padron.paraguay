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
                    'name' => 'direccion',
                    'label' => 'Dirección',
                ),
                1 => 
                array (
                    'name' => 'tmp_provincia',
                    'label' => 'Provincia',
                    'isvisible' => false,
                    'initialvalue' => 'Campana, Provincia de Buenos Aires',
                ),
                2 => 
                array (
                    'name' => 'tmp_pais',
                    'label' => 'País',
                    'isvisible' => false,
                    'initialvalue' => 'Argentina',
                ),
            ),
            'id' => 'ubicacion',
            'title' => 'Ubicación del Reclamo',
        ),
        2 => 
        array (
            'type' => 'fieldset',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'coordenadas',
                    'label' => '',
                    'presentation' => 'GOOGLEMAP',
                    'classparams' => '{\'calle_altura\':\'direccion\', \'provincia\':\'tmp_provincia\', \'pais\':\'tmp_pais\'}',
                ),
            ),
            'id' => 'mapa',
            'title' => 'Mapa',
        ),
        3 => 
        array (
            'type' => 'files',
            'title' => 'Archivos Adjuntos',
        ),
    ),
);

}
