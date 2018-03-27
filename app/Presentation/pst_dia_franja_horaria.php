<?php

App::uses('Presentation', 'Lib');

class pst_dia_franja_horaria extends Presentation {

    public function jsIncludes() {
        return [
            "../includes/fullcalendar-3.5.1/fullcalendar.min"
        ];
    }
    
    public function cssIncludes() {
        return [
            "../includes/fullcalendar-3.5.1/fullcalendar.min",
        ];
    }
    
    public function renderMaintForm() {
        if (isset($this->isvisible) && !$this->isvisible) {
            return $this->renderNotVisible();
        }

        if ($this->readonly) {
            $this->html = true;
            return $this->renderReadOnly();
        }

        $id = $this->generateID();
        $name = $this->generateName();

        $html = '';
        $html.= '<div id="' . $id . '"></div>';

        return $html;
    }

}
