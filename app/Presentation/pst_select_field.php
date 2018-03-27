<?php

App::uses('pst_selectarray', 'Presentation');

// Ejemplo de uso:  classparams="{'model':'Baldios.TareaRealizada', 'field':'orden_trabajo', 'format':'keyVal'}"

class pst_select_field extends pst_selectarray {

    public function __construct($settings) {
        parent::__construct($settings);
        $plugin = null;
        $params = $this->classparams;

        if (strstr($params['model'], ".") !== false) {
            $model = explode(".", $params['model']);
            $plugin = $model[0];
            $model = $model[1];
        }

        App::uses($model, ($plugin ? $plugin . "." : "") . "Model");
        $objModel = new $model();
        $objModel->recursive = -1;
        $conditions = [
            $model . "." . $params['field'] . " !=" => '',
        ];
        $results = $objModel->find('list', [
            'fields' => array($params['field']),
            'conditions' => $conditions,
            'group' => array($model . "." . $params['field']),
        ]);

        $this->options = [];

        if ($results) {
            if (isset($params['format']) && $params['format'] == 'keyVal') {
                foreach ($results as $key => $val) {
                    $this->options[$key] = $val;
                }
            } else {
                foreach ($results as $val) {
                    $this->options[$val] = $val;
                }
            }
        }
    }

}
