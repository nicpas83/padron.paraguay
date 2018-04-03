<?php

/* GENERADO AUTOMATICAMENTE */

App::uses('AbstractData', 'Lib');

class RutasSL extends AbstractData {

protected $data = array (
    'translatepath' => NULL,
    'title' => '',
    'info' => '',
    'warning' => '',
    'jsincludes' => 
    array (
        0 => 'rutas/index',
    ),
    'cssincludes' => 
    array (
        0 => 'rutas.css',
    ),
    'actions' => 
    array (
        0 => 
        array (
            'op' => 'V',
            'action' => 'view',
        ),
        1 => 
        array (
            'op' => 'P',
            'action' => 'imprimir',
            'label' => 'Imprimir Ruta',
        ),
        2 => 
        array (
            'op' => 'D',
            'action' => 'delete',
            'post' => '¿Estás seguro de borrar el registro?',
        ),
        3 => 
        array (
            'op' => 'A',
            'action' => 'add',
            'label' => 'Cargar Ruta',
            'global' => 'true',
        ),
    ),
    'filters' => 
    array (
        0 => 
        array (
            'name' => 'Ruta.id',
            'label' => 'Número',
            'size' => 5,
        ),
        1 => 
        array (
            'name' => 'Ruta.fecha_carga',
            'label' => 'Fecha Carga',
            'presentation' => 'DATE',
        ),
        2 => 
        array (
            'name' => 'Ruta.encargado',
            'label' => 'Encargado',
        ),
        3 => 
        array (
            'name' => 'Ruta.tmp_comuna',
            'label' => 'Comuna',
            'presentation' => 'RUTAS::COMUNAS_RUTA',
        ),
        4 => 
        array (
            'name' => 'Ruta.realizada',
            'label' => 'Estado',
            'presentation' => 'RUTAS::ESTADO_RUTA',
            'initialvalue' => 'No',
        ),
    ),
    'columns' => 
    array (
        0 => 
        array (
            'name' => 'Ruta.id',
            'label' => 'Número',
        ),
        1 => 
        array (
            'name' => 'Ruta.fecha_carga',
            'label' => 'Fecha Carga',
            'presentation' => 'DATETIME',
            'classparams' => '{\'no_seconds\':true}',
        ),
        2 => 
        array (
            'name' => 'Ruta.encargado',
            'label' => 'Encargado',
        ),
        3 => 
        array (
            'name' => 'Ruta.realizada',
            'label' => 'Realizada',
            'presentation' => 'RUTAS::ESTADO_RUTA',
        ),
    ),
);

}
