<?php

/* GENERADO AUTOMATICAMENTE */

App::uses('AbstractData', 'Lib');

class InscripcionesSL extends AbstractData {

protected $data = array (
    'translatepath' => NULL,
    'title' => '',
    'actions' => 
    array (
        0 => 
        array (
            'op' => 'E',
            'action' => 'agendar',
            'icon' => 'calendar',
            'label' => 'Agendar',
        ),
        1 => 
        array (
            'op' => 'E',
            'action' => 'entregar',
            'icon' => 'tablet',
            'label' => 'Entregar',
        ),
    ),
    'filters' => 
    array (
        0 => 
        array (
            'name' => 'idInscripto',
            'label' => 'ID',
            'size' => 20,
        ),
        1 => 
        array (
            'name' => 'nombre',
            'label' => 'Nombre',
        ),
        2 => 
        array (
            'name' => 'apellido',
            'label' => 'Apellido',
        ),
        3 => 
        array (
            'name' => 'tipoDocumento',
            'label' => 'Tipo Documento',
            'presentation' => 'TIPO_DOC',
        ),
        4 => 
        array (
            'name' => 'numeroDocumento',
            'label' => 'Nro. Documento',
            'size' => 20,
        ),
        5 => 
        array (
            'name' => 'sexo',
            'label' => 'Sexo',
            'presentation' => 'SEXO',
        ),
        6 => 
        array (
            'name' => 'email',
            'label' => 'Email',
        ),
        7 => 
        array (
            'name' => 'telefonoFijo',
            'label' => 'Telefono Fijo',
            'size' => 20,
        ),
        8 => 
        array (
            'name' => 'telefonoCelular',
            'label' => 'Telefono Celular',
            'size' => 20,
        ),
        9 => 
        array (
            'name' => 'fechaNacimiento',
            'label' => 'Fecha de Nacimiento',
            'presentation' => 'DATERANGE',
        ),
        10 => 
        array (
            'name' => 'calle',
            'label' => 'Calle',
        ),
        11 => 
        array (
            'name' => 'numero',
            'label' => 'Número',
            'size' => 10,
        ),
        12 => 
        array (
            'name' => 'piso',
            'label' => 'Piso',
            'size' => 10,
        ),
        13 => 
        array (
            'name' => 'departamento',
            'label' => 'Departamento',
            'size' => 10,
        ),
        14 => 
        array (
            'name' => 'idBarrio',
            'label' => 'Barrio',
        ),
        15 => 
        array (
            'name' => 'codigoPostal',
            'label' => 'Codigo Postal',
            'size' => 10,
        ),
        16 => 
        array (
            'name' => 'fechaRegistrado',
            'label' => 'Fecha Registrado',
            'presentation' => 'DATERANGE',
        ),
        17 => 
        array (
            'name' => 'estado',
            'label' => 'Estado',
            'presentation' => 'ESTADOS',
        ),
    ),
    'columns' => 
    array (
        0 => 
        array (
            'label' => '',
            'sortfield' => '',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'idInscripto',
                    'label' => 'ID',
                ),
            ),
        ),
        1 => 
        array (
            'label' => 'Nombre',
            'sortfield' => '',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'nombre',
                    'label' => 'Nombre',
                ),
                1 => 
                array (
                    'name' => 'apellido',
                    'label' => 'Apellido',
                ),
            ),
        ),
        2 => 
        array (
            'label' => 'Documento',
            'sortfield' => '',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'tipoDocumento',
                    'label' => 'Tipo Documento',
                    'presentation' => 'TIPO_DOC',
                ),
                1 => 
                array (
                    'name' => 'numeroDocumento',
                    'label' => 'Nro. Documento',
                ),
            ),
        ),
        3 => 
        array (
            'label' => '',
            'sortfield' => '',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'sexo',
                    'label' => 'Sexo',
                    'presentation' => 'SEXO',
                ),
            ),
        ),
        4 => 
        array (
            'label' => '',
            'sortfield' => '',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'email',
                    'label' => 'Email',
                ),
            ),
        ),
        5 => 
        array (
            'label' => 'Teléfono',
            'sortfield' => '',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'telefonoFijo',
                    'label' => 'Fijo',
                ),
                1 => 
                array (
                    'name' => 'telefonoCelular',
                    'label' => 'Celular',
                ),
            ),
        ),
        6 => 
        array (
            'label' => '',
            'sortfield' => '',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'fechaNacimiento',
                    'label' => 'Nacimiento',
                    'presentation' => 'DATE',
                ),
            ),
        ),
        7 => 
        array (
            'label' => 'Domicilio',
            'sortfield' => '',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'calle',
                    'label' => 'Calle',
                ),
                1 => 
                array (
                    'name' => 'numero',
                    'label' => 'Número',
                ),
            ),
        ),
        8 => 
        array (
            'label' => 'Departamento',
            'sortfield' => '',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'piso',
                    'label' => 'Piso',
                ),
                1 => 
                array (
                    'name' => 'departamento',
                    'label' => 'Departamento',
                ),
            ),
        ),
        9 => 
        array (
            'label' => '',
            'sortfield' => '',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'idBarrio',
                    'label' => 'Barrio',
                ),
            ),
        ),
        10 => 
        array (
            'label' => '',
            'sortfield' => '',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'codigoPostal',
                    'label' => 'CP',
                ),
            ),
        ),
        11 => 
        array (
            'label' => '',
            'sortfield' => '',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'fechaRegistrado',
                    'label' => 'Registrado',
                    'presentation' => 'DATE',
                ),
            ),
        ),
        12 => 
        array (
            'label' => '',
            'sortfield' => '',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'estado',
                    'label' => 'Estado',
                    'presentation' => 'ESTADOS',
                ),
            ),
        ),
    ),
);

}
