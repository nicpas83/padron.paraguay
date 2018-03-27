<?php

/* GENERADO AUTOMATICAMENTE */

App::uses('AbstractData', 'Lib');

class AppUsersSLAgenda extends AbstractData {

protected $data = array (
    'translatepath' => NULL,
    'title' => 'Agenda de Contactos',
    'actions' => 
    array (
    ),
    'filters' => 
    array (
        0 => 
        array (
            'name' => 'lastname',
            'label' => 'Apellido',
        ),
        1 => 
        array (
            'name' => 'firstname',
            'label' => 'Nombre',
        ),
        2 => 
        array (
            'name' => 'telefono_laboral',
            'label' => 'Telefono laboral',
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
                    'name' => 'lastname',
                    'label' => 'Apellido',
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
                    'name' => 'firstname',
                    'label' => 'Nombre',
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
                    'name' => 'email',
                    'label' => 'Email',
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
                    'name' => 'telefono_laboral',
                    'label' => 'Teléfono laboral',
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
                    'name' => 'celular_laboral',
                    'label' => 'Celular laboral',
                ),
            ),
        ),
        5 => 
        array (
            'label' => 'Dependencia',
            'sortfield' => '',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'Dependencia.nombre',
                    'label' => '',
                ),
                1 => 
                array (
                    'name' => 'CentroCostos.nombre',
                    'label' => 'Centro de Costos',
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
                    'name' => 'Dependencia.direccion',
                    'label' => 'Dirección Laboral',
                ),
            ),
        ),
    ),
    'order' => 
    array (
        'lastname' => 'ASC',
        'firstname' => 'ASC',
    ),
);

}
