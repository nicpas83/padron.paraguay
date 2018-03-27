<?php

class Visita extends AppModel {

    public $label = 'Visitas';
    public $tablePrefix = 'acc_';
    public $useTable = 'visitas';
    public $plugin = 'Acceso';
    public $hasMany = ['Acceso.IngresoVisita'];
    public $validate = array(
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
        'tipo_documento' => array(
            'required' => array(
                'rule' => array('notBlank'),
                'message' => 'El campo Tipo de Documento es requerido'
            )
        ),
        'documento' => array(
            'required' => array(
                'rule' => array('notBlank'),
                'message' => 'El campo Documento es requerido'
            ),
            'duplicado' => array(
                'rule' => array('limitDuplicates', 1),
                'message' => 'El campo Documento ya se encuentra ingresado'
            ),
        ),
    );

    
}
