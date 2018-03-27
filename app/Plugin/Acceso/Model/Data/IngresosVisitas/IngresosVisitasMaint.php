<?php

/* GENERADO AUTOMATICAMENTE */

App::uses('AbstractData', 'Lib');

class IngresosVisitasMaint extends AbstractData {

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
                    'name' => 'Visita.nombre',
                    'label' => 'Nombre',
                    'readonly' => true,
                ),
                1 => 
                array (
                    'name' => 'Visita.apellido',
                    'label' => 'Apellido',
                    'readonly' => true,
                ),
                2 => 
                array (
                    'name' => 'Visita.tipo_documento',
                    'label' => 'Tipo de Documento',
                    'presentation' => 'TIPOS_DOCUMENTOS',
                    'readonly' => true,
                ),
                3 => 
                array (
                    'name' => 'Visita.documento',
                    'label' => 'Documento',
                    'presentation' => 'INT',
                    'readonly' => true,
                    'size' => 11,
                    'note' => '(Solo números)',
                ),
            ),
            'title' => 'Datos del Visitante',
            'columns' => '2',
        ),
        1 => 
        array (
            'type' => 'fieldset',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'fecha_ingreso',
                    'label' => 'Fecha de Ingreso',
                    'presentation' => 'DATETIME',
                    'classparams' => '{\'force\':true, \'no_seconds\':true}',
                ),
                1 => 
                array (
                    'name' => 'egreso',
                    'label' => 'Egresó',
                    'presentation' => 'SINO',
                    'initialvalue' => 'No',
                ),
                2 => 
                array (
                    'name' => 'nombre',
                    'label' => 'Nombre Visitado',
                ),
                3 => 
                array (
                    'name' => 'apellido',
                    'label' => 'Apellido Visitado',
                ),
                4 => 
                array (
                    'name' => 'piso',
                    'label' => 'Piso',
                    'presentation' => 'INT',
                    'size' => 2,
                    'note' => '(Solo números)',
                ),
                5 => 
                array (
                    'name' => 'sector',
                    'label' => 'Sector',
                ),
                6 => 
                array (
                    'name' => 'numero_tarjeta',
                    'label' => 'Número de Tarjeta',
                    'presentation' => 'INT',
                    'size' => 2,
                    'note' => '(Solo números)',
                ),
            ),
            'title' => 'Descripción de la Visita',
            'columns' => '2',
        ),
    ),
);

}
