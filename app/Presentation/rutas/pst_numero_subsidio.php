<?php

App::uses('Presentation', 'Lib');

class pst_numero_socio extends Presentation {

    public function objectDBQuery() {
        if (!empty($this->value)) {
            return array("Ruta.id IN (SELECT sr.ruta_id FROM ele_socios_rutas sr 
                                      JOIN ele_socios s ON s.id=sr.socio_id
                                      WHERE s.numero=" . $this->value . ")");
        }

        return array();
    }

}
