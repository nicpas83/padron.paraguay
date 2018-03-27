<?php

class UserSituacionRevista extends AppModel {

    public $label = 'Huellas Usuarios';
    public $tablePrefix = 'acc_';
    public $useTable = 'users_situaciones_revista';
    public $plugin = 'Acceso';
    public $belongsTo = array(
        'AppUser' => array(
            'className' => 'Acceso.AppUser',
            'foreignKey' => 'agente_id',
        )
    );

}
