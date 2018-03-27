<?php

App::uses('pst_workflow', 'Presentation');

class pst_estados extends pst_workflow {

    protected $instances = [
        'INSCRIPTO' => 'INSCRIPTO',
        'PRE ADJUDICADO' => 'PRE ADJUDICADO',
        'AGENDADO' => 'AGENDADO',
        'NO AGENDAR' => 'NO AGENDAR',
        'NO ENTREGAR' => 'NO ENTREGAR',
        'ENTREGAR' => 'ENTREGAR',
        'ENTREGADO' => 'ENTREGADO',
        'DESISTE' => 'DESISTE',
    ];
    protected $workflow = [
        'INSCRIPTO' => ['PRE ADJUDICADO'],
        'PRE ADJUDICADO' => ['AGENDADO', 'NO AGENDAR'],
        'AGENDADO' => ['ENTREGAR', 'NO ENTREGAR', 'DESISTE'],
        'ENTREGAR' => ['ENTREGADO'],
    ];

}
