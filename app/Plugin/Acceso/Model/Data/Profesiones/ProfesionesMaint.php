<?php

/* GENERADO AUTOMATICAMENTE */

App::uses('AbstractData', 'Lib');

class ProfesionesMaint extends AbstractData {

protected $data = array (
    'translatepath' => NULL,
    'submit' => 'Guardar',
    'cancel' => true,
    'info' => '',
    'warning' => '',
    'data' => 
    array (
        0 => 
        array (
            'type' => 'fieldset',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'profesion',
                    'label' => 'Nombre',
                    'breakline' => true,
                ),
                1 => 
                array (
                    'name' => 'mes',
                    'label' => 'Mes',
                    'presentation' => 'MESES',
                ),
                2 => 
                array (
                    'name' => 'dia',
                    'label' => 'Día',
                    'presentation' => 'INT',
                    'size' => 2,
                ),
                3 => 
                array (
                    'name' => 'url_template',
                    'label' => 'URL Template Hombre',
                ),
                4 => 
                array (
                    'name' => 'url_template_mujer',
                    'label' => 'URL Template Mujer',
                ),
            ),
            'title' => 'Profesiones',
            'columns' => '2',
        ),
    ),
);

}
