<?php

class CentroCostos extends AppModel {

    public $label = 'Centros de Costos';
    public $tablePrefix = 'acc_';
    public $useTable = 'centros_costos';
    public $plugin = 'Acceso';
    public $displayField = 'nombre';
    public $hasMany = array(
        'Dependencia' => array(
            'className' => 'Acceso.Dependencia',
            'foreignKey' => 'centro_costos_id',
            'dependent' => true,
        ),
    );
    public $validate = array(
        'nombre' => array(
            'required' => array(
                'rule' => array('notBlank'),
                'message' => 'El campo Nombre es requerido'
            )
        ),
        'ingreso' => array(
            'required' => array(
                'rule' => array('notBlank'),
                'message' => 'El campo Ingreso es requerido'
            )
        ),
        'estado' => array(
            'required' => array(
                'rule' => array('notBlank'),
                'message' => 'El campo Estado es requerido'
            )
        ),
    );

}
