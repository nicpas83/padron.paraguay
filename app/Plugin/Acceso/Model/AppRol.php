<?php

App::uses('Rol', 'FmwAcceso.Model');

class AppRol extends Rol {

    public $plugin = 'Acceso';
    public $useTable = 'rols';

    public function __construct() {
        unset($this->hasAndBelongsToMany['User']);
        $this->hasAndBelongsToMany['AppUser'] = array(
            'className' => 'Acceso.AppUser',
            'joinTable' => 'acc_users_rols',
            'foreignKey' => 'rol_id',
            'associationForeignKey' => 'user_id',
            'unique' => true
        );
        parent::__construct();
    }

}
