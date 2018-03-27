<?php

/* GENERADO AUTOMATICAMENTE */

App::uses('AbstractData', 'Lib');

class DependenciasSLView extends AbstractData {

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
            'label' => 'Nombre',
        ),
        1 => 
        array (
            'name' => 'DependenciaPadre.nombre',
            'label' => 'Dependencia Padre',
            'presentation' => 'SELECT',
            'classparams' => '{\'model\':\'Acceso.Dependencia\'}',
        ),
        2 => 
        array (
            'name' => 'centro_costos_id',
            'label' => 'Centro de Costos',
            'presentation' => 'SELECT',
            'classparams' => '{\'model\':\'Acceso.CentroCostos\'}',
        ),
        3 => 
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
                    'name' => 'DependenciaPadre.nombre',
                    'label' => 'Dependencia Padre',
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
                    'name' => 'CentroCostos.nombre',
                    'label' => 'Centro de Costos',
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
                    'name' => 'jefe_user_id',
                    'label' => 'Jefe',
                    'presentation' => 'SELECT',
                    'classparams' => '{\'model\':\'Acceso.AppUser\'}',
                ),
            ),
        ),
        4 => 
        array (
            'label' => 'Dirección',
            'sortfield' => '',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'direccion',
                    'label' => '',
                ),
                1 => 
                array (
                    'name' => 'geo',
                    'label' => '',
                    'presentation' => 'GOOGLEMAP',
                    'classparams' => '{\'list\': true}',
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
                    'presentation' => 'ESTADO',
                ),
            ),
        ),
    ),
);

}
