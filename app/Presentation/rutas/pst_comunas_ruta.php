<?php

App::uses('pst_selectarray', 'Presentation');

class pst_comunas_ruta extends pst_selectarray {

    public function __construct($settings) {
        $this->options[] = array();
        for ($i = 1; $i <= 15; $i++) {
            $this->options[$i] = 'Comuna ' . $i;
        }
        parent::__construct($settings);
    }

    public function objectDBQuery() {
        if (!empty($this->value)) {
            return array("Ruta.id IN (SELECT sr.ruta_id FROM ele_socios_rutas sr 
                                      JOIN ele_socios s ON s.id=sr.socio_id
                                      WHERE s.comuna=" . $this->value . ")");
        }

        return array();
    }

}