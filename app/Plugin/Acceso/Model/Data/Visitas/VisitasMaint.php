<?php

/* GENERADO AUTOMATICAMENTE */

App::uses('AbstractData', 'Lib');

class VisitasMaint extends AbstractData {

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
                    'note' => '(Solo números)',
                ),
            ),
            'title' => 'Datos del Visitante',
            'columns' => '2',
        ),
        1 => 
        array (
            'type' => 'table',
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
                    'label' => 'Nombre',
                ),
                3 => 
                array (
                    'name' => 'apellido',
                    'label' => 'Apellido',
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
            'paginate' => true,
            'title' => 'Ingresos',
            'columns' => 2,
            'model' => 'IngresoVisita',
            'orderby' => 'IngresoVisita.fecha_carga DESC',
            'plugin' => 'Acceso',
        ),
    ),
);

}
