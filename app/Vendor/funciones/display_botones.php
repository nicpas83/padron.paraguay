<?php

function boton_adjuntar_certificado($row) {
    App::build(array('Presentation' => array(APP . 'Presentation' . DS . 'licencias' . DS)));
    App::uses('pst_estado_licencia', 'Presentation');
    $estadosLicencia = array(
        pst_estado_licencia::getEstadoByDescripcion('Otorgada'),
    );
    if (isset($row['TipoLicencia']['requiere_certificado']) && isset($row['LicenciaSolicitante']['estado']) && isset($row['TipoLicencia']['tipo_solicitud'])) {
        if ($row['TipoLicencia']['requiere_certificado'] == "Si" && in_array($row['LicenciaSolicitante']['estado'], $estadosLicencia) && ($row['TipoLicencia']['tipo_solicitud'] == "PROGRAMADA" || $row['TipoLicencia']['tipo_solicitud'] == "ESPECIAL")) {
            return true;
        }
    }
    return false;
}

function boton_editar_evento($row) {
    $fechaActual = time() + 86400;
    $fechaEvento = strtotime($row['Evento']['fecha_inicio'] . " " . $row['Evento']['hora_inicio']);
    $diff = $fechaEvento - $fechaActual;
    if ($diff < 0) {
        return false;
    }
    return true;
}

function boton_editar_borrar_articulo($row) {
    if ($row['Articulo']['tipo'] == "INSUMO") {
        App::uses("Insumo", "Almacen.Model");
        $insumoObj = new Insumo();
        $data = $insumoObj->find("count", array("recursive" => -1, "conditions" => array("articulo_id" => $row['Articulo']['id'])));
    } else {
        App::uses("Bien", "Almacen.Model");
        $bienObj = new Bien();
        $data = $bienObj->find("count", array("recursive" => -1, "conditions" => array("articulo_id" => $row['Articulo']['id'])));
    }

    if (!empty($data)) {
        return false;
    }
    return true;
}

function boton_editar_borrar_autorizacion_inasistencia($row) {
    $fechaActual = strtotime(date("Y-m-d"));
    $fechaInasistencia = strtotime($row['InasistenciaAutorizada']['fecha']);
    $diff = $fechaInasistencia - $fechaActual;
    if ($diff < 0) {
        return false;
    }
    return true;
}

