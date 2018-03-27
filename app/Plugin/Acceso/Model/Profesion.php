<?php

class Profesion extends AppModel {

    public $label = 'Profesiones';
    public $tablePrefix = 'acc_';
    public $useTable = 'profesiones';
    public $plugin = 'Acceso';
    public $displayField = 'profesion';
    public $hasMany = [
        'AppUser' => array(
            'className' => 'Acceso.AppUser',
            'foreignKey' => 'profesion_id',
        ),
    ];
    public $validate = array(
        'profesion' => array(
            'required' => array(
                'rule' => array('notBlank'),
                'message' => 'El campo Nombre es requerido',
            ),
        ),
        'mes' => array(
            'required' => array(
                'rule' => array('notBlank'),
                'message' => 'El campo Mes es requerido',
            ),
        ),
        'dia' => array(
            'required' => array(
                'rule' => array('notBlank'),
                'message' => 'El campo Día es requerido',
            ),
        ),
    );

}
