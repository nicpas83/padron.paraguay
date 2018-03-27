<?php

/* GENERADO AUTOMATICAMENTE */

App::uses('AbstractData', 'Lib');

class AppUsersSL extends AbstractData {

protected $data = array (
    'translatepath' => NULL,
    'title' => 'Listado de Agentes',
    'actions' => 
    array (
        0 => 
        array (
            'op' => 'V',
            'action' => 'view',
        ),
        1 => 
        array (
            'op' => 'E',
            'action' => 'edit',
        ),
        2 => 
        array (
            'op' => 'A',
            'action' => 'add',
            'label' => 'Nuevo Agente',
            'global' => 'true',
        ),
    ),
    'filters' => 
    array (
        0 => 
        array (
            'name' => 'firstname',
            'label' => 'Nombre',
        ),
        1 => 
        array (
            'name' => 'lastname',
            'label' => 'Apellido',
        ),
        2 => 
        array (
            'name' => 'email',
            'label' => 'Email',
        ),
        3 => 
        array (
            'name' => 'dependencia_id',
            'label' => 'Repartición',
            'presentation' => 'SELECT',
            'classparams' => '{\'model\':\'Acceso.Dependencia\', \'conditions\':{\'Dependencia.estado\':\'Activo\'}}',
        ),
        4 => 
        array (
            'name' => 'centro_costos_id',
            'label' => 'Secretaría/DG',
            'presentation' => 'SELECT',
            'classparams' => '{\'model\':\'Acceso.CentroCostos\'}',
        ),
        5 => 
        array (
            'name' => 'profesion_id',
            'label' => 'Profesión',
            'presentation' => 'SELECT',
            'classparams' => '{\'model\':\'Acceso.Profesion\'}',
        ),
        6 => 
        array (
            'name' => 'estudios',
            'label' => 'Estudios',
        ),
        7 => 
        array (
            'name' => 'estado',
            'label' => 'Estado',
            'presentation' => 'ESTADO',
            'initialvalue' => 'Activo',
        ),
    ),
    'columns' => 
    array (
        0 => 
        array (
            'label' => 'Nombre y Apellido',
            'sortfield' => '',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'fullname',
                ),
                1 => 
                array (
                    'name' => 'legajo',
                    'label' => 'Legajo',
                ),
            ),
        ),
        1 => 
        array (
            'label' => 'Contacto',
            'sortfield' => '',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'email',
                    'label' => 'Email',
                ),
                1 => 
                array (
                    'name' => 'telefono',
                    'label' => 'Teléfono',
                ),
                2 => 
                array (
                    'name' => 'celular',
                    'label' => 'Celular',
                ),
            ),
        ),
        2 => 
        array (
            'label' => 'Repartición',
            'sortfield' => '',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'Dependencia.nombre',
                    'label' => '',
                ),
                1 => 
                array (
                    'name' => 'CentroCostos.nombre',
                    'label' => 'Secretaría/DG',
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
                    'name' => 'sector',
                    'label' => 'Sector',
                ),
            ),
        ),
        4 => 
        array (
            'label' => 'Profesión',
            'sortfield' => '',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'profesion_id',
                    'presentation' => 'SELECT',
                    'classparams' => '{\'model\':\'Acceso.Profesion\'}',
                ),
                1 => 
                array (
                    'name' => 'estudios',
                    'label' => 'Estudios',
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
                    'name' => 'estado',
                    'label' => 'Estado',
                ),
            ),
        ),
    ),
);

}
