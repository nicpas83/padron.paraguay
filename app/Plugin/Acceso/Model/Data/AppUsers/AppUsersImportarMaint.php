<?php

set_time_limit(0);

App::uses('AbstractData', 'Lib');

class AppUsersImportarMaint extends AbstractData {

    protected $data = array(
        'data' => array(
            array(
                'type' => 'fieldset',
                'title' => 'Descripción de la Importación',
                'fields' => array(
                    array('name' => 'tmp_ejemplo', 'label' => 'Ejemplo', 'presentation' => 'DIRECT_FILE', 'initialvalue' => 'ejemplo_hospitales.xlsx'),
                    array('name' => 'tmp_omitir_primer_fila', 'label' => 'Omitir Primer Fila', 'presentation' => 'SINO', 'initialvalue' => 'Si'),
                    array('name' => 'tmp_archivo', 'label' => 'Archivo Excel', 'presentation' => 'FILE'),
                    array('name' => 'estado', 'label' => 'Estado', 'initialvalue' => 'Activo', 'isvisible' => false),
                    array('name' => 'password', 'label' => 'Estado', 'initialvalue' => '793b0dd277d6f1c41d452a05db8f3fae298aa975', 'isvisible' => false),
                    array('name' => 'grupo_empleados_id', 'label' => 'Grupo de Empleados', 'initialvalue' => '1', 'isvisible' => false),
                ),
            ),
        ),
    );
    protected $import = array(
        'A' => array('name' => 'tmp_nombre_apellido', 'label' => 'Nombre y Apellido'),
        'B' => array('name' => 'tmp_centro_costos', 'label' => 'Centro de Costos'),
        'C' => array('name' => 'tmp_dependencia', 'label' => 'Dependencia'),
        'H' => array('name' => 'nro_doc', 'label' => 'CUIT'),
        'I' => array('name' => 'ente', 'label' => 'Ente'),
        'K' => array('name' => 'tmp_contrato_expediente', 'label' => 'Contrato Expediente'),
        'M' => array('name' => 'fecha_ingreso', 'label' => 'Fecha de Ingreso'),
        'N' => array('name' => 'tmp_forma_ingreso', 'label' => 'Forma de Ingreso'),
        'O' => array('name' => 'tmp_contrato_resolucion', 'label' => 'Resolución Contrato'),
        'P' => array('name' => 'tmp_contrato_reemplazo_de', 'label' => 'Reemplazo Alta'),
        'Q' => array('name' => 'tmp_contrato_monto_original', 'label' => 'Contrato Monto Original'),
        'R' => array('name' => 'tmp_contrato_fecha_desde', 'label' => 'Fecha Desde', 'presentation' => 'DATE'),
        'S' => array('name' => 'tmp_contrato_fecha_hasta', 'label' => 'Fecha Hasta', 'presentation' => 'DATE'),
        'T' => array('name' => 'tmp_contrato_cuotas', 'label' => 'Cuotas', 'presentation' => 'INT'),
        'AH' => array('name' => 'fecha_nacimiento', 'label' => 'Fecha de Nacimiento', 'presentation' => 'DATE'),
        'AI' => array('name' => 'telefono', 'label' => 'Teléfono'),
        'AJ' => array('name' => 'celular', 'label' => 'Celular'),
        'AK' => array('name' => 'email', 'label' => 'Email'),
        'AL' => array('name' => 'puesto', 'label' => 'Puesto'),
        'AM' => array('name' => 'funcion', 'label' => 'Función'),
        'AN' => array('name' => 'estudios', 'label' => 'Estudios'),
        'AO' => array('name' => 'profesion', 'label' => 'Profesión'),
        'AP' => array('name' => 'referente', 'label' => 'Referente'),
    );

}
