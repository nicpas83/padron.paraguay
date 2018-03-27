<?php

/* GENERADO AUTOMATICAMENTE */

App::uses('AbstractData', 'Lib');

class AppUsersMaint extends AbstractData {

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
                    'name' => 'tipo_doc',
                    'label' => 'Tipo Documento',
                    'presentation' => 'TIPOS_DOCUMENTOS',
                ),
                3 => 
                array (
                    'name' => 'nro_doc',
                    'label' => 'Número Documento',
                    'presentation' => 'INT',
                    'size' => 15,
                ),
                4 => 
                array (
                    'name' => 'fecha_nacimiento',
                    'label' => 'Fecha de Nacimiento',
                    'presentation' => 'DATE',
                    'classparams' => '{\'viewMode\': \'years\'}',
                ),
                5 => 
                array (
                    'name' => 'sexo',
                    'label' => 'Sexo',
                    'presentation' => 'SEXO',
                ),
                6 => 
                array (
                    'name' => 'nacionalidad',
                    'label' => 'Nacionalidad',
                ),
                7 => 
                array (
                    'name' => 'email',
                    'label' => 'Email',
                ),
                8 => 
                array (
                    'name' => 'direccion',
                    'label' => 'Dirección',
                ),
                9 => 
                array (
                    'name' => 'telefono',
                    'label' => 'Teléfono',
                    'size' => 20,
                ),
                10 => 
                array (
                    'name' => 'celular',
                    'label' => 'Celular',
                    'size' => 20,
                ),
                11 => 
                array (
                    'name' => 'profesion_id',
                    'label' => 'Profesión',
                    'presentation' => 'SELECT',
                    'classparams' => '{\'model\':\'Acceso.Profesion\'}',
                ),
            ),
            'title' => 'Datos Personales',
            'columns' => '2',
        ),
        1 => 
        array (
            'type' => 'fieldset',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'password',
                    'label' => 'Clave',
                    'presentation' => 'PASSWORD',
                    'size' => 30,
                    'actions' => 'A|E',
                    'note' => 'Se mantiene la actual si se deja vacío.',
                ),
                1 => 
                array (
                    'name' => 'confirm_password',
                    'label' => 'Confirma Clave',
                    'presentation' => 'PASSWORD',
                    'size' => 30,
                    'actions' => 'A|E',
                ),
                2 => 
                array (
                    'name' => 'estado',
                    'label' => 'Estado',
                    'presentation' => 'ESTADO',
                ),
            ),
            'title' => 'Administración',
            'columns' => '2',
        ),
        2 => 
        array (
            'type' => 'table',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'nombre',
                    'label' => 'Nombre',
                ),
            ),
            'paginate' => true,
            'title' => 'Roles',
            'model' => 'AppRol',
            'orderby' => 'AppRol.nombre ASC',
            'assoc' => true,
            'plugin' => 'Acceso',
        ),
    ),
);

}
