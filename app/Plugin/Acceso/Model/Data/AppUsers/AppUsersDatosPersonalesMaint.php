<?php

/* GENERADO AUTOMATICAMENTE */

App::uses('AbstractData', 'Lib');

class AppUsersDatosPersonalesMaint extends AbstractData {

protected $data = array (
    'translatepath' => NULL,
    'submit' => 'Guardar',
    'cancel' => true,
    'info' => '',
    'warning' => '',
    'jsincludes' => 
    array (
        0 => 'fmw/usuarios/maint_users.js',
    ),
    'data' => 
    array (
        0 => 
        array (
            'type' => 'fieldset',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'firstname',
                    'label' => 'Nombre',
                ),
                1 => 
                array (
                    'name' => 'lastname',
                    'label' => 'Apellido',
                ),
                2 => 
                array (
                    'name' => 'email',
                    'label' => 'Email',
                    'breakline' => true,
                ),
                3 => 
                array (
                    'name' => 'telefono_laboral',
                    'label' => 'Teléfono Laboral',
                    'size' => 20,
                ),
                4 => 
                array (
                    'name' => 'celular_laboral',
                    'label' => 'Celular Laboral',
                    'size' => 20,
                    'breakline' => true,
                ),
                5 => 
                array (
                    'name' => 'password_actual',
                    'label' => 'Clave Actual',
                    'presentation' => 'PASSWORD',
                    'breakline' => true,
                ),
                6 => 
                array (
                    'name' => 'password',
                    'label' => 'Clave',
                    'presentation' => 'PASSWORD',
                    'note' => 'Se mantiene la actual si se deja vacío.',
                ),
                7 => 
                array (
                    'name' => 'confirm_password',
                    'label' => 'Confirma Clave',
                    'presentation' => 'PASSWORD',
                ),
            ),
            'title' => 'Datos del Agente',
            'columns' => '2',
        ),
    ),
);

}
