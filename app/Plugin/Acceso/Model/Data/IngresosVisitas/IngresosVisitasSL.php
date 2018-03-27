<?php

/* GENERADO AUTOMATICAMENTE */

App::uses('AbstractData', 'Lib');

class IngresosVisitasSL extends AbstractData {

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
        1 => 
        array (
            'op' => 'E',
            'action' => 'edit',
        ),
    ),
    'filters' => 
    array (
        0 => 
        array (
            'name' => 'Visita.nombre',
            'label' => 'Nombre',
        ),
        1 => 
        array (
            'name' => 'Visita.apellido',
            'label' => 'Apellido',
        ),
        2 => 
        array (
            'name' => 'Visita.tipo_documento',
            'label' => 'Tipo de Documento',
            'presentation' => 'TIPOS_DOCUMENTOS',
        ),
        3 => 
        array (
            'name' => 'Visita.documento',
            'label' => 'Documento',
            'presentation' => 'INT',
            'size' => 11,
        ),
        4 => 
        array (
            'name' => 'fecha_ingreso',
            'label' => 'Fecha de Ingreso',
            'presentation' => 'DATE',
        ),
        5 => 
        array (
            'name' => 'egreso',
            'label' => 'Egresó',
            'presentation' => 'SINO',
            'initialvalue' => 'No',
        ),
        6 => 
        array (
            'name' => 'piso',
            'label' => 'Piso',
            'presentation' => 'INT',
            'size' => 2,
            'note' => '(Solo números)',
        ),
        7 => 
        array (
            'name' => 'sector',
            'label' => 'Sector',
        ),
        8 => 
        array (
            'name' => 'numero_tarjeta',
            'label' => 'Número de Tarjeta',
            'presentation' => 'INT',
            'size' => 2,
            'note' => '(Solo números)',
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
                    'name' => 'Visita.nombre',
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
                    'name' => 'Visita.apellido',
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
                    'name' => 'Visita.tipo_documento',
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
                    'name' => 'Visita.documento',
                    'label' => 'Documento',
                    'presentation' => 'INT',
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
                    'name' => 'fecha_ingreso',
                    'label' => 'Fecha de Ingreso',
                    'presentation' => 'DATETIME',
                    'classparams' => '{\'no_seconds\':true}',
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
                    'name' => 'egreso',
                    'label' => 'Egresó',
                    'presentation' => 'SINO',
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
                    'name' => 'piso',
                    'label' => 'Piso',
                    'presentation' => 'INT',
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
                    'name' => 'sector',
                    'label' => 'Sector',
                ),
            ),
        ),
        8 => 
        array (
            'label' => '',
            'sortfield' => '',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'numero_tarjeta',
                    'label' => 'Número de Tarjeta',
                    'presentation' => 'INT',
                ),
            ),
        ),
    ),
    'order' => 
    array (
        'numero_tarjeta' => 'ASC',
    ),
);

}
