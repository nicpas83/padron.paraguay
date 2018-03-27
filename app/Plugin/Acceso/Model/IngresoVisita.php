<?php

class IngresoVisita extends AppModel {

    public $label = 'Ingresos de Visitas';
    public $tablePrefix = 'acc_';
    public $useTable = 'visitas_ingresos';
    public $plugin = 'Acceso';
    public $belongsTo = ['Acceso.Visita'];
    public $validate = array(
        'fecha_ingreso' => array(
            'required' => array(
                'rule' => array('notBlank'),
                'message' => 'El campo Fecha de Ingreso es requerido'
            )
        ),
        'egreso' => array(
            'required' => array(
                'rule' => array('notBlank'),
                'message' => 'El campo Egresó es requerido'
            )
        ),
        'nombre' => array(
            'required' => array(
                'rule' => array('notBlank'),
                'message' => 'El campo Nombre es requerido'
            )
        ),
        'apellido' => array(
            'required' => array(
                'rule' => array('notBlank'),
                'message' => 'El campo Apellido es requerido'
            )
        ),
        'piso' => array(
            'required' => array(
                'rule' => array('notBlank'),
                'message' => 'El campo Piso es requerido'
            )
        ),
        'numero_tarjeta' => array(
            'required' => array(
                'rule' => array('notBlank'),
                'message' => 'El campo Número de Tarjeta es requerido'
            )
        ),
    );

    
}
