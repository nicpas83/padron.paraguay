<?php

App::uses('Presentation', 'Lib');

class pst_checkbox_largo extends Presentation {

    protected $type = "checkbox";
    protected $options = array();
    protected $plugin;
    protected $model;
    protected $modelObj;
    protected $primaryKey;
    protected $displayField;
    protected $order;
    protected $conditions = [];
    protected $joins = [];

    public function __construct($settings) {
        parent::__construct($settings);
        $this->js_totext = "checkbox_totext";
        $this->js_tovalue = "checkbox_tovalue";
        if (isset($this->classparams['options']) && is_array($this->options)) {
            $this->options = $this->classparams['options'];
        }
        if (isset($this->classparams['model'])) {
            if (strpos($this->classparams['model'], ".") !== false) {
                list($this->plugin, $this->model) = explode(".", $this->classparams['model']);
            } else {
                $this->model = $this->classparams['model'];
            }
            $this->modelObj = $this->getObj();
            if (isset($this->modelObj)) {
                if (is_null($this->primaryKey)) {
                    $this->primaryKey = $this->modelObj->primaryKey;
                }
                if (is_null($this->displayField)) {
                    $this->displayField = $this->modelObj->displayField;
                }
                if (is_null($this->order) && isset($this->displayField)) {
                    $this->order = $this->displayField . " ASC";
                }
                if (isset($this->classparams['conditions'])) {
                    $this->conditions = $this->classparams['conditions'];
                }
            }
            $this->generateOptions();
        }
    }

    protected function getObj() {
        if (isset($this->model) && existeModelo($this->model, $this->plugin)) {
            App::uses($this->model, (empty($this->plugin) ? '' : $this->plugin . '.') . 'Model');
            if (class_exists($this->model)) {
                return new $this->model;
            }
        }
        return null;
    }

    protected function generateOptions() {
        $val = $this->getValue();
        if ($this->readonly || !$this->isvisible) {
            if (empty($val)) {
                $this->options = array();
            } else {
                $this->options = $this->getSQLArray($val);
            }
        } else {
            $this->options = $this->getSQLArray();
        }
    }

    protected function getSQLArray($primaryKey = 0) {
        if (isset($this->modelObj)) {
            $model = $this->model;
            $pk = $this->primaryKey;

            if (is_numeric($primaryKey) && $primaryKey > 0) {
                $this->conditions[$model . "." . $pk] = $primaryKey;
            }

            if (isset($this->modelObj->virtualFields[$this->displayField])) {
                $isVirtualField = true;
                $displayFieldModel = 0;
            } else {
                $isVirtualField = false;
                $displayFieldModel = $model;
            }

            $sql = array(
                'recursive' => 0,
                'fields' => array($model . "." . $pk, $this->displayField),
                'conditions' => array_merge(is_null($this->modelObj->conditions) ? array("1 = 1") : $this->modelObj->conditions, $this->conditions),
                'order' => $this->order,
                'joins' => $this->joins,
            );

            $val = $this->getValue();
            if ($val != "") {
                $sql['conditions'] = array("OR" => array($sql['conditions'], $model . "." . $pk => $val));
            }
            return $this->modelObj->find('list', $sql);
        }
        return array();
    }

    public function jsIncludes() {
        return array("fmw/presentation/checkbox.js");
    }

    public function renderMaintForm() {
        if (isset($this->isvisible) && !$this->isvisible) {
            return $this->renderNotVisible();
        }

        if ($this->readonly) {
            $this->html = true;
            return $this->renderReadOnly();
        }

        $values = $this->getValue();
        $id = $this->generateID();
        $name = $this->generateName();

        $html = '<div id="box' . $id . '" class="input checkbox ' . $this->required . ' ' . getClassesColumns($this->getColumns()) . '">';
        $html.= '<label for="' . $id . '" class="control-label pull-left mt7">' . $this->label . '</label>';
        $html.= '<input type="hidden" name="' . $name . '" id="' . $id . '" />';
        $html.= '<div class="pull-left checkboxes col-sm-12 pl0 pr0">';
        foreach ($this->options as $key => $value) {
            $optionID = Inflector::camelize($id . $key);
            $optionName = $name . "[" . $key . "]";
            $html.= '<div class="col-sm-2 mt5" ' . (isset($this->classparams['width']) ? 'style="width: ' . $this->classparams['width'] . '"' : '') . '>';
            $html.= '<input type="checkbox" ' . (!empty($values) && in_array($key, $values) ? 'checked="checked"' : '') . ' name="' . $optionName . '" id="' . $optionID . '" value="' . $key . '" x-label="' . $value . '"/>';
            $html.= '<label class="ml5" style="width: 90% !important;" for="' . $optionID . '">' . $value . '</label>';
            $html.= '</div>';
        }
        $html.= '</div>';
        $html.= '</div>';

        return $html;
    }

    public function renderTableMaint() {
        return $this->renderMaintForm();
    }

    public function renderReadOnly() {
        // Para los campos ocultos
        if (isset($this->isvisible) && !$this->isvisible) {
            return $this->renderNotVisible();
        }

        // Para los campos ocultos solo en las vistas de las tablas asocidas
        if ($this->table && isset($this->isvisibletable) && !$this->isvisibletable) {
            return $this->renderNotVisible();
        }

        $val = $this->getValue();
        $id = $this->generateID();
        $name = $this->generateName();

        if (is_array($val)) {
            $val = implode(",", $val);
        }
        // Para los OP = Ver
        if ($this->html) {
            $html = '';
            $html.= ($this->table ? '<td>' : '');
            $html.= '<div id="box' . $id . '" class="input ' . $this->type . ' ' . $this->required . '">';
            $html.= '<input type="hidden" name="' . $name . '" id="' . $id . '" value="' . $val . '" />';
            $html.= '<label for="' . $id . '">' . $this->label . '</label>';
            $html.= '<span class="field">' . htmlspecialchars($this->getHelperValue()) . '</span>';
            $html.= '</div>';
            $html.= ($this->table ? '</td>' : '');
            return $html;
        }

        // Para las tablas asociadas
        if ($this->table) {
            $html = '';
            $html.= '<td>';
            $html.= '<input type="hidden" name="' . $name . '" id="' . $id . '" value="' . $val . '" />';
            $html.= $this->getHelperValue();
            $html.= '</td>';
            return $html;
        }

        // Para los search and list
        return htmlspecialchars($this->getHelperValue());
    }

    public function getHelperValue() {
        $values = array();
        $keys = $this->getvalue();
        foreach ($keys as $key) {
            if (isset($this->options[$key])) {
                $values[] = $this->options[$key];
            }
        }
        return implode(", ", $values);
    }

    public function saveDbQuery() {
        if (!empty($this->value)) {
            if (is_array($this->value)) {
                return implode(",", array_keys($this->value));
            }
            return $this->value;
        }
        return "";
    }

    public function loadDbQuery() {
        if (isset($this->value)) {
            if (is_array($this->value)) {
                return $this->value;
            }
            return explode(",", $this->value);
        }
        return array();
    }

}