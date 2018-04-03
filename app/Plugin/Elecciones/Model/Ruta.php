<?php

class Ruta extends AppModel {

    public $label = 'Rutas';
    public $tablePrefix = 'pad_';
    public $useTable = 'rutas';
    public $plugin = 'Elecciones';
    public $displayField = 'id';
    public $virtualFields = array(
        'tmp_id' => 'Ruta.id'
    );
    public $hasMany = array(
        'Persona' => array(
            'className' => 'Elecciones.Persona',
            'foreignKey' => 'ruta_id',
        )
    );
    public $validate = array(
        'realizada' => array(
            'required' => array(
                'rule' => array('notBlank'),
                'message' => 'Debe indicar si la ruta se encuentra realizada'
            )
        )
    );

}
