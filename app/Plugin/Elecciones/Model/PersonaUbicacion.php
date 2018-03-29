<?php

class PersonaUbicacion extends AppModel {

    public $label = 'Personas';
    public $tablePrefix = 'pad_';
    public $useTable = 'personas_ubicaciones';
    public $plugin = 'Elecciones';
    public $virtualFields = [
        'display_field' => "CONCAT(route, ' ', street_number)"
    ];
    public $belongsTo = [
        'Persona' => [
            'className' => 'Elecciones.Persona',
            'foreignKey' => 'persona_id',
        ],
    ];

}
