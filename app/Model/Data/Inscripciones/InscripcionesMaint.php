<?php

/* GENERADO AUTOMATICAMENTE */

App::uses('AbstractData', 'Lib');

class InscripcionesMaint extends AbstractData {

protected $data = array (
    'translatepath' => NULL,
    'submit' => 'Guardar',
    'cancel' => true,
    'info' => '',
    'warning' => '',
    'jsincludes' => 
    array (
        0 => 'inscripciones_maint.js',
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
                    'readonly' => true,
                ),
                1 => 
                array (
                    'name' => 'apellido',
                    'label' => 'Apellido',
                    'readonly' => true,
                ),
                2 => 
                array (
                    'name' => 'tipoDocumento',
                    'label' => 'Tipo Documento',
                    'presentation' => 'TIPO_DOC',
                    'readonly' => true,
                ),
                3 => 
                array (
                    'name' => 'numeroDocumento',
                    'label' => 'Nro. Documento',
                    'readonly' => true,
                    'size' => 20,
                ),
                4 => 
                array (
                    'name' => 'sexo',
                    'label' => 'Sexo',
                    'presentation' => 'SEXO',
                    'readonly' => true,
                ),
                5 => 
                array (
                    'name' => 'email',
                    'label' => 'Email',
                    'readonly' => true,
                ),
                6 => 
                array (
                    'name' => 'telefonoFijo',
                    'label' => 'Telefono Fijo',
                    'readonly' => true,
                    'size' => 20,
                ),
                7 => 
                array (
                    'name' => 'telefonoCelular',
                    'label' => 'Telefono Celular',
                    'readonly' => true,
                    'size' => 20,
                ),
                8 => 
                array (
                    'name' => 'fechaNacimiento',
                    'label' => 'Fecha de Nacimiento',
                    'presentation' => 'DATE',
                    'readonly' => true,
                ),
                9 => 
                array (
                    'name' => 'calle',
                    'label' => 'Calle',
                    'readonly' => true,
                ),
                10 => 
                array (
                    'name' => 'numero',
                    'label' => 'Número',
                    'readonly' => true,
                    'size' => 20,
                ),
                11 => 
                array (
                    'name' => 'piso',
                    'label' => 'Piso',
                    'readonly' => true,
                    'size' => 20,
                ),
                12 => 
                array (
                    'name' => 'departamento',
                    'label' => 'Departamento',
                    'readonly' => true,
                    'size' => 20,
                ),
                13 => 
                array (
                    'name' => 'idBarrio',
                    'label' => 'Barrio',
                    'readonly' => true,
                ),
                14 => 
                array (
                    'name' => 'codigoPostal',
                    'label' => 'Codigo Postal',
                    'readonly' => true,
                    'size' => 20,
                ),
                15 => 
                array (
                    'name' => 'fechaRegistrado',
                    'label' => 'Fecha Registrado',
                    'presentation' => 'DATE',
                    'readonly' => true,
                ),
            ),
            'title' => 'Datos de la Inscripcion',
            'columns' => '3',
        ),
        1 => 
        array (
            'type' => 'fieldset',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'estado',
                    'label' => 'Estado',
                    'presentation' => 'ESTADOS',
                ),
                1 => 
                array (
                    'name' => 'punto_entrega_id',
                    'label' => 'Punto de Entrega',
                    'presentation' => 'SELECT',
                    'classparams' => '{\'model\':\'PuntoEntrega\'}',
                ),
            ),
            'title' => 'Agendar',
            'columns' => '2',
        ),
        2 => 
        array (
            'type' => 'fieldset',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'tmp_calendar',
                    'label' => 'Día y Hora',
                    'presentation' => 'DIA_FRANJA_HORARIA',
                ),
            ),
            'title' => 'Día y Horario',
        ),
    ),
);

}
