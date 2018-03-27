<?php

class Persona extends AppModel {

    public $label = 'Personas';
    public $tablePrefix = 'pad_';
    public $useTable = 'personas';
    public $plugin = 'Padron';
    
    public $hasOne = [
        'PersonaUbicacion' => [
            'className' => 'Padron.PersonaUbicacion',
            'foreignKey' => false,
            'condition' => 'Persona.cedula = PersonaUbicacion.cedula'
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
