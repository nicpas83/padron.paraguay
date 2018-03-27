<?php

/* GENERADO AUTOMATICAMENTE */

App::uses('AbstractData', 'Lib');

class AppUsersInasistenciasMaint extends AbstractData {

protected $data = array (
    'translatepath' => NULL,
    'submit' => 'Guardar',
    'cancel' => true,
    'info' => '',
    'warning' => '',
    'jsincludes' => 
    array (
        0 => 'presentismo/inasistencias.js',
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
                    'readonly' => true,
                ),
                1 => 
                array (
                    'name' => 'lastname',
                    'label' => 'Apellido',
                    'readonly' => true,
                ),
                2 => 
                array (
                    'name' => 'dependencia_id',
                    'label' => 'Dependencia',
                    'presentation' => 'SELECT',
                    'classparams' => '{\'model\':\'Acceso.Dependencia\', \'conditions\':{\'Dependencia.estado\':\'Activo\'}, \'listen\':{\'field\':\'centro_costos_id\', \'model\':\'Acceso.CentroCostos\'}}',
                    'readonly' => true,
                ),
                3 => 
                array (
                    'name' => 'centro_costos_id',
                    'label' => 'Centro de Costos',
                    'presentation' => 'SELECT',
                    'classparams' => '{\'model\':\'Acceso.CentroCostos\'}',
                    'readonly' => true,
                ),
                4 => 
                array (
                    'name' => 'legajo',
                    'label' => 'Legajo',
                    'readonly' => true,
                ),
            ),
            'title' => 'Datos del Agente',
            'columns' => '2',
        ),
        1 => 
        array (
            'type' => 'table',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'fecha',
                    'label' => 'Fecha de la Inasistencia',
                    'presentation' => 'PRESENTISMO::DATE_INASISTENCIA',
                    'readonly' => true,
                ),
                1 => 
                array (
                    'name' => 'confirmada',
                    'label' => 'Confirmar inasistencia',
                    'presentation' => 'PRESENTISMO::CHECKBOX_INASISTENCIA',
                ),
                2 => 
                array (
                    'name' => 'tmp_link_licencias',
                    'label' => 'Justificar inasistencia',
                    'presentation' => 'LINK',
                    'classparams' => '{\'plugin\':\'licencias\',\'controller\':\'licencias_solicitante\',\'action\':\'add_post\',\'title\':\'Solicitar Licencia\'}',
                ),
            ),
            'id' => 'inasistencias',
            'paginate' => false,
            'title' => 'Inasistencias Pendientes de Justificación',
            'model' => 'InasistenciaNoJustificada',
            'actions' => 
            array (
                0 => 
                array (
                ),
            ),
            'plugin' => 'Presentismo',
        ),
    ),
);

}
