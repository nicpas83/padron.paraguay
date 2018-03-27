<?php

/* GENERADO AUTOMATICAMENTE */

App::uses('AbstractData', 'Lib');

class VisitasSL extends AbstractData {

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
            'name' => 'apellido',
            'label' => 'Apellido',
        ),
        2 => 
        array (
            'name' => 'tipo_documento',
            'label' => 'Tipo de Documento',
            'presentation' => 'TIPOS_DOCUMENTOS',
        ),
        3 => 
        array (
            'name' => 'documento',
            'label' => 'Documento',
            'presentation' => 'INT',
            'size' => 11,
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
                    'name' => 'tipo_documento',
                    'label' => 'Tipo de Documento',
                    'presentation' => 'TIPOS_DOCUMENTOS',
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
                    'name' => 'documento',
                    'label' => 'Documento',
                    'presentation' => 'INT',
                ),
            ),
        ),
    ),
);

}
