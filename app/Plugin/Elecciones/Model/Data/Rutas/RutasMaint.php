<?php

/* GENERADO AUTOMATICAMENTE */

App::uses('AbstractData', 'Lib');

class RutasMaint extends AbstractData {

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
                    'name' => 'id',
                    'label' => 'Número',
                    'readonly' => true,
                ),
                1 => 
                array (
                    'name' => 'encargado',
                    'label' => 'Encargado',
                ),
                2 => 
                array (
                    'name' => 'informacion',
                    'label' => 'Información',
                    'presentation' => 'TEXTAREA',
                ),
                3 => 
                array (
                    'name' => 'Ruta.realizada',
                    'label' => 'Realizada',
                    'presentation' => 'RUTAS::ESTADO_RUTA',
                ),
            ),
            'id' => 'datos',
            'title' => 'Datos de la Ruta',
            'columns' => '1',
        ),
        1 => 
        array (
            'type' => 'fieldset',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'centro',
                    'label' => 'Centro',
                    'isvisible' => false,
                ),
                1 => 
                array (
                    'name' => 'zoom',
                    'label' => 'Zoom',
                    'isvisible' => false,
                ),
                2 => 
                array (
                    'name' => 'tmp_id',
                    'label' => 'Mapa',
                    'presentation' => 'RUTAS::MAPA',
                    'readonly' => true,
                ),
            ),
            'id' => 'mapa-ruta',
            'title' => 'Mapa',
        ),
        2 => 
        array (
            'type' => 'table',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'Persona.nombre',
                    'label' => 'Nombre',
                ),
                1 => 
                array (
                    'name' => 'Persona.apellido',
                    'label' => 'Apellido',
                ),
                2 => 
                array (
                    'name' => 'Persona.domicilio',
                    'label' => 'Domicilio',
                ),
                3 => 
                array (
                    'name' => 'PersonaUbicacion.route',
                    'label' => 'Calle',
                ),
                4 => 
                array (
                    'name' => 'PersonaUbicacion.street_number',
                    'label' => 'Altura',
                ),
            ),
            'id' => 'socios',
            'paginate' => false,
            'title' => 'Personas',
            'model' => 'Persona',
            'orderby' => 'PersonaUbicacion.route ASC, PersonaUbicacion.street_number ASC',
            'assoc' => true,
            'multiple' => true,
            'plugin' => 'Elecciones',
        ),
    ),
);

}
