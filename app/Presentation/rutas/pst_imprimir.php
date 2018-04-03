<?php

App::uses('Presentation', 'Lib');

class pst_imprimir extends Presentation {

    public function renderReadOnly() {
        $html = '<input type="checkbox" name="' . $this->name . '" id="' . $this->id . '" value="' . $this->value . '" />';

        return $html;
    }

    public function ajaxSetImpresa($params) {
        if (empty($params->ids)) {
            return array('status' => 'ERROR');
        }
        
        $db = ConnectionManager::getDataSource('default');
        $array = explode(",", $params->ids);
                
        foreach ($array as $id) {
            $id = trim($id);
            if (is_numeric($id)) {
                try {
                    $db->Query("UPDATE ele_rutas SET realizada='Impresa' WHERE id=" . $id);
                } catch (exception $ex) {
                    $db->rollback();
                    return array('status' => 'ERROR', 'error' => $ex->getMessage());
                }
            }
        }

        $db->commit();
        return array('status' => 'OK');
    }

}