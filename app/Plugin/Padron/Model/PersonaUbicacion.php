<?php

class PersonaUbicacion extends AppModel {

    public $label = 'Personas';
    public $tablePrefix = 'pad_';
    public $useTable = 'personas_ubicaciones';
    public $plugin = 'Padron';
    
    public $belongsTo = [
        'Persona' => [
            'className' => 'Padron.Persona',
            'foreignKey' => false,
            'condition' => 'Persona.cedula = PersonaUbicacion.cedula'
        ],
        
    ];

    

    

}
