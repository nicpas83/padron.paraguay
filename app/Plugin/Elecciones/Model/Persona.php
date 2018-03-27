<?php

class Persona extends AppModel {

    public $label = 'Personas';
    public $tablePrefix = 'pad_';
    public $useTable = 'personas';
    public $plugin = 'Elecciones';
    public $hasOne = [
        'PersonaUbicacion' => [
            'className' => 'Elecciones.PersonaUbicacion',
            'foreignKey' => 'persona_id',
        ],
    ];

    public $validate = array(
        'cedula' => array(
            'required' => array(
                'rule' => array('notBlank'),
                'message' => 'El campo Cedula es requerido'
            )
        ),
        
    );

    

}
