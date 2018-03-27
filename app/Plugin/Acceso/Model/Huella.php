<?php

class Huella extends AppModel {

    public $label = 'Huellas Usuarios';
    public $tablePrefix = 'acc_';
    public $useTable = 'huellas';
    public $plugin = 'Acceso';
    public $belongsTo = array(
        'AppUser' => array(
            'className' => 'Acceso.AppUser',
            'foreignKey' => 'user_id',
        )
    );

}
