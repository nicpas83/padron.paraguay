<?php

set_time_limit(0);

App::uses('AbstractData', 'Lib');

class InscripcionesImportarMaint extends AbstractData {

    protected $data = array(
        'data' => array(
            array(
                'type' => 'fieldset',
                'title' => 'Descripción de la Importación',
                'fields' => array(
                    array('name' => 'tmp_ejemplo', 'label' => 'Ejemplo', 'presentation' => 'DIRECT_FILE', 'initialvalue' => 'ejemplo_reclamos.xlsx'),
                    array('name' => 'tmp_omitir_primer_fila', 'label' => 'Omitir Primer Fila', 'presentation' => 'SINO', 'initialvalue' => 'Si'),
                    array('name' => 'tmp_archivo', 'label' => 'Archivo Excel', 'presentation' => 'FILE'),
                ),
            ),
        ),
    );
    protected $import = array(
        'B' => array('name' => 'idInscripto', 'label' => 'idInscripto'),
        'C' => array('name' => 'nombre', 'label' => 'nombre'),
        'D' => array('name' => 'apellido', 'label' => 'apellido'),
        'E' => array('name' => 'sexo', 'label' => 'sexo'),
        'F' => array('name' => 'tipoDocumento', 'label' => 'tipoDocumento'),
        'F' => array('name' => 'numeroDocumento', 'label' => 'numeroDocumento'),
        'E' => array('name' => 'fechaNacimiento', 'label' => 'fechaNacimiento', 'presentation' => 'DATE'),
        'F' => array('name' => 'telefonoFijo', 'label' => 'telefonoFijo'),
        'G' => array('name' => 'telefonoCelular', 'label' => 'telefonoCelular'),
        'F' => array('name' => 'calle', 'label' => 'calle'),
        'G' => array('name' => 'altura', 'label' => 'altura'),
        'F' => array('name' => 'piso', 'label' => 'piso'),
        'G' => array('name' => 'departamento', 'label' => 'departamento'),
    );

}
