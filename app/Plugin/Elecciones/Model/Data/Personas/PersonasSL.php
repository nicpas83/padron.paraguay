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
            'op' => 'A',
            'action' => 'add',
            'global' => 'true',
        ),
        1 => 
        array (
            'op' => 'V',
            'action' => 'view',
        ),
        2 => 
        array (
            'op' => 'E',
            'action' => 'edit',
        ),
    ),
    'filters' => 
    array (
        0 => 
        array (
            'name' => 'prestacion',
            'label' => 'Prestación',
            'presentation' => 'AUTOCOMPLETE',
            'classparams' => '{\'model\':\'Personas.Prestacion\'}',
        ),
        1 => 
        array (
            'name' => 'fecha_carga',
            'label' => 'Fecha',
            'presentation' => 'DATERANGE',
        ),
        2 => 
        array (
            'name' => 'vecino',
            'label' => 'Vecino',
        ),
        3 => 
        array (
            'name' => 'estado',
            'label' => 'Estado',
            'presentation' => 'ESTADOS_RECLAMOS',
            'initialvalue' => 'Inicial',
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
                    'name' => 'email',
                    'label' => 'Email',
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
