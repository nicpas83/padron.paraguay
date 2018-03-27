<?php

/* GENERADO AUTOMATICAMENTE */

App::uses('AbstractData', 'Lib');

class CentrosCostosSL extends AbstractData {

protected $data = array (
    'translatepath' => NULL,
    'title' => '',
    'filters' => 
    array (
        0 => 
        array (
            'name' => 'nombre',
            'label' => 'Nombre',
        ),
        1 => 
        array (
            'name' => 'ingreso',
            'label' => 'Ingreso',
            'presentation' => 'SINO',
        ),
        2 => 
        array (
            'name' => 'estado',
            'label' => 'Estado',
            'presentation' => 'ESTADO',
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
                    'name' => 'id',
                    'label' => 'Código',
                    'presentation' => 'CODIGO',
                    'classparams' => '{\'sigla\':\'CC\'}',
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
                    'name' => 'nombre',
                    'label' => 'Nombre',
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
                    'name' => 'ingreso',
                    'label' => 'Ingreso',
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
                    'name' => 'estado',
                    'label' => 'Estado',
                    'presentation' => 'ESTADO',
                ),
            ),
        ),
    ),
);

}
