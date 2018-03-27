<?php

App::uses('Presentation', 'Lib');

class pst_dias_habiles_largo extends Presentation {

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
        $this->options = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes"];
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
        $html.= '<ul class="pull-left checkboxes col-sm-12 pl0 pr0">';
        foreach ($this->options as $key => $value) {
            $optionID = Inflector::camelize($id . $key);
            $optionName = $name . "[" . $key . "]";
            $html.= '<li class="col-sm-2" ' . (isset($this->classparams['width']) ? 'style="width: ' . $this->classparams['width'] . '"' : '') . '>';
            $html.= '<input class="pull-left" type="checkbox" ' . (in_array($key, $values) ? 'checked="checked"' : '') . ' name="' . $optionName . '" id="' . $optionID . '" value="' . $key . '" x-label="' . $value . '"/>';
            $html.= '<label class="pull-left" for="' . $optionID . '">';
            $html.= '<h4 class="mt5 pull-left"><span class="label label-default">' . $value . '</span></h4>';
            $html.= '</label>';
            $html.= '</li>';
        }
        $html.= '</ul>';
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

        // Para los OP = Ver
        if ($this->html) {
            $html = '';
            $html.= ($this->table ? '<td>' : '');
            $html.= '<div id="box' . $id . '" class="input ' . $this->type . ' ' . $this->required . '">';
            $html.= '<input type="hidden" name="' . $name . '" id="' . $id . '" value="' . implode(",", $val) . '" />';
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