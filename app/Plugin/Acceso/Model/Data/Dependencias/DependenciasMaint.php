<?php

/* GENERADO AUTOMATICAMENTE */

App::uses('AbstractData', 'Lib');

class DependenciasMaint extends AbstractData {

protected $data = array (
    'translatepath' => NULL,
    'submit' => 'Guardar',
    'cancel' => true,
    'info' => '',
    'warning' => '',
    'jsincludes' => 
    array (
        0 => 'acceso/dependencias_maint.js',
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
                    'name' => 'nombre',
                    'label' => 'Nombre',
                ),
                1 => 
                array (
                    'name' => 'centro_costos_id',
                    'label' => 'Centro de Costos',
                    'presentation' => 'SELECT',
                    'classparams' => '{\'model\':\'Acceso.CentroCostos\'}',
                ),
                2 => 
                array (
                    'name' => 'padre_dependencia_id',
                    'label' => 'Dependencia Padre',
                    'presentation' => 'SELECT',
                    'classparams' => '{\'model\':\'Acceso.Dependencia\'}',
                ),
                3 => 
                array (
                    'name' => 'jefe_user_id',
                    'label' => 'Jefe',
                    'presentation' => 'SELECT',
                    'classparams' => '{\'model\':\'Acceso.AppUser\', \'listen\':{\'field\':\'id\',\'model\':\'Acceso.Dependencia\'}}',
                    'actions' => 'E|V',
                ),
                4 => 
                array (
                    'name' => 'ingreso',
                    'label' => 'Ingreso',
                    'presentation' => 'SINO',
                    'note' => 'Indica si la dependencia recibe remitos de entrada',
                ),
                5 => 
                array (
                    'name' => 'estado',
                    'label' => 'Estado',
                    'presentation' => 'ESTADO',
                    'initialvalue' => 'Activo',
                ),
            ),
            'title' => 'Datos de Dependencia',
            'columns' => '2',
        ),
        1 => 
        array (
            'type' => 'fieldset',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'direccion',
                    'label' => 'Dirección',
                ),
                1 => 
                array (
                    'name' => 'tmp_localidad',
                    'label' => 'Localidad',
                    'isvisible' => false,
                    'initialvalue' => 'Ciudad de Buenos Aires',
                ),
                2 => 
                array (
                    'name' => 'tmp_provincia',
                    'label' => 'Provincia',
                    'isvisible' => false,
                    'initialvalue' => 'Buenos Aires',
                ),
                3 => 
                array (
                    'name' => 'tmp_pais',
                    'label' => 'Pais',
                    'isvisible' => false,
                    'initialvalue' => 'Argentina',
                ),
                4 => 
                array (
                    'name' => 'geo',
                    'label' => 'Ubicación',
                    'presentation' => 'GOOGLEMAP',
                    'classparams' => '{\'calle_altura\':\'direccion\',\'ciudad\':\'tmp_localidad\',\'provincia\':\'tmp_provincia\',\'pais\':\'tmp_pais\'}',
                ),
            ),
            'title' => 'Dirección',
        ),
    ),
);

}
