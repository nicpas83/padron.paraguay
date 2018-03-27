<?php

function getNivelArbol($codigo, $nivel, $completo = false) {
    $niveles = explode(".", $codigo);
    if (isset($niveles[$nivel - 1])) {
        if ($completo) {
            $arrayNivelCompleto = array();
            for ($i = 0; $i < $nivel; $i++) {
                $arrayNivelCompleto[] = $niveles[$i];
            }
            return implode(".", $arrayNivelCompleto);
        }
        return $niveles[$nivel - 1];
    }
    return null;
}

function getCantNivelesArbol($codigo) {
    return count(explode(".", $codigo));
}
