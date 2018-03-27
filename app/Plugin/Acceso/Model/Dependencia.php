<?php

class Dependencia extends AppModel {

    public $label = 'Dependencias';
    public $tablePrefix = 'acc_';
    public $useTable = 'dependencias';
    public $plugin = 'Acceso';
    public $displayField = 'nombre';
    public $belongsTo = array(
        'Soporte.Area',
        'DependenciaPadre' => array(
            'className' => 'Acceso.Dependencia',
            'foreignKey' => 'padre_dependencia_id',
        ),
        'Jefe' => array(
            'className' => 'Acceso.Jefe',
            'foreignKey' => 'jefe_user_id',
        ),
        'CentroCostos' => array(
            'className' => 'Acceso.CentroCostos',
            'foreignKey' => 'centro_costos_id',
        ),
    );
    public $hasMany = array(
        'Acceso.AppUser',
        'Soporte.Supervisor',
        'Almacen.Bien',
        'Almacen.Insumo',
        /*
        'RemitoInternoOrigen' => array(
            'className' => 'Almacen.RemitoInterno',
            'foreignKey' => 'dependencia_origen_id',
        ),
        'RemitoInternoDestino' => array(
            'className' => 'Almacen.RemitoInterno',
            'foreignKey' => 'dependencia_destino_id',
        ),
        */
    );
    public $validate = array(
        'nombre' => array(
            'required' => array(
                'rule' => array('notBlank'),
                'message' => 'El Nombre de Dependencia es requerido'
            )
        ),
        'centro_costos_id' => array(
            'required' => array(
                'rule' => array('notBlank'),
                'message' => 'El Centro de Costos es requerido'
            )
        ),
        'ingreso' => array(
            'required' => array(
                'rule' => array('notBlank'),
                'message' => 'El Ingreso es requerido'
            )
        ),
        'estado' => array(
            'required' => array(
                'rule' => array('notBlank'),
                'message' => 'El Estado es requerido'
            )
        ),
    );

}
