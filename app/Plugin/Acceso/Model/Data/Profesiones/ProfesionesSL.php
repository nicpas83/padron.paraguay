<?php

/* GENERADO AUTOMATICAMENTE */

App::uses('AbstractData', 'Lib');

class ProfesionesSL extends AbstractData {

protected $data = array (
    'translatepath' => NULL,
    'title' => '',
    'filters' => 
    array (
        0 => 
        array (
            'name' => 'profesion',
            'label' => 'Nombre',
        ),
        1 => 
        array (
            'name' => 'mes',
            'label' => 'Mes',
            'presentation' => 'MESES',
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
                    'name' => 'profesion',
                    'label' => 'Nombre',
                ),
            ),
        ),
        1 => 
        array (
            'label' => '',
            'sortfield' => '',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'dia',
                    'label' => 'Dia',
                ),
            ),
        ),
        2 => 
        array (
            'label' => '',
            'sortfield' => '',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'mes',
                    'label' => 'Mes',
                    'presentation' => 'MESES',
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
                    'name' => 'url_template',
                    'label' => 'Template Hombre',
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
                    'name' => 'url_template_mujer',
                    'label' => 'Template Mujer',
                ),
            ),
        ),
    ),
);

}
