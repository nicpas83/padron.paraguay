<?php

function removerClavesNoUsadasParaAtributos($atributosArr, $keysToRemove, $returnString = true) {
    $atributosArrCleaned = array();
    if (!is_array($atributosArr)) {
        $atributosArr = json_decode($atributosArr, TRUE);
    }
    foreach ($atributosArr as $keyP => $atributos) {
        foreach ($atributos as $key => $valor) {
            if (!in_array($key, $keysToRemove)) {
                $atributosArrCleaned[$keyP][$key] = $valor;
            }
        }
    }
    if ($returnString) {
        return json_encode($atributosArrCleaned);
    } else {
        return $atributosArrCleaned;
    }
}

function tienenAtributosIguales($material, $remitoDetalleToCompare) {
    $atributosToCompare = json_decode($remitoDetalleToCompare['articulo_atributos_json'], TRUE);
    $validacionPorJSON = !empty($material['atributos_json']);
    if ($validacionPorJSON) {
        $atributos = json_decode($material['atributos_json'], TRUE);
        $diferencias = arrayRecursiveDiff($atributos, $atributosToCompare);
        return (count($diferencias) == 0);
    } else {
        $sql = "SELECT ATINV.nombre, INAT.valor 
                FROM alm_insumos_atributos INAT
                LEFT JOIN cat_atributos_plantilla_inv ATINV ON INAT.atributo_inv_id = ATINV.id
                WHERE INAT.insumo_id = '" . $material['id'] . "'";
        $dbObj = ConnectionManager::getDataSource('default');
        $atributos = $dbObj->Query($sql);
        $sonIguales = true;
        for ($idx = 0; $idx < count($atributos); $idx++) {
            $sonIguales = $sonIguales && ($atributos[$idx]['INAT']['valor'] == $atributosToCompare[$idx]['valor']) && ($atributos[$idx]['ATINV']['nombre'] == $atributosToCompare[$idx]['label']);
        }
        return $sonIguales;
    }
}

function sonAtributosIguales($atributos1, $atributos2) {
    $atributos1Arr = json_decode($atributos1, TRUE);
    $atributos2Arr = json_decode($atributos2, TRUE);
    $diferencias = arrayRecursiveDiff($atributos1Arr, $atributos2Arr);
    return (count($diferencias) == 0);
}
