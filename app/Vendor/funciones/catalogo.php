<?php

function generarArrayCatalogo() {
    $arbol = array();
    
    App::uses("Division", "Catalogo.Model");
    $divisionObj = new Division();
    $divisiones = $divisionObj->find("all", array("fields" => array("codigo", "descripcion"), "order" => "Division.codigo ASC"));
    insertarNodosArbol($arbol, $divisiones, "division");

    App::uses("Clase", "Catalogo.Model");
    $claseObj = new Clase();
    $clases = $claseObj->find("all", array("fields" => array("codigo", "descripcion"), "order" => "Clase.codigo ASC"));
    insertarNodosArbol($arbol, $clases, "clase");

    App::uses("Articulo", "Catalogo.Model");
    $articuloObj = new Articulo();
    $articulos = $articuloObj->find("all", array("fields" => array("codigo", "descripcion", "estado"), "order" => "Articulo.codigo ASC"));
    insertarNodosArbol($arbol, $articulos, "articulo");

    return array(
        array(
            "name" => "CATALOGO",
            "type" => "root",
            "expanded" => true,
            "items" => $arbol,
        )
    );
}

function insertarNodosArbol(&$arbol, $nodos, $tipo) {
    $clase = ucfirst(strtolower($tipo));
    foreach ($nodos as $nodo) {
        $niveles = count(explode(".", $nodo[$clase]['codigo']));
        $punteroArbol = &$arbol;
        $found = true;
        for ($nivel = 1; $nivel < $niveles; $nivel++) {
            $found = false;
            foreach ($punteroArbol as $key => $value) {
                if ($value["id"] == getNivelArbol($nodo[$clase]['codigo'], $nivel, true)) {
                    if (!isset($value["items"])) {
                        $punteroArbol[$key]["items"] = array();
                    }
                    $punteroArbol = &$punteroArbol[$key]["items"];
                    $found = true;
                    break;
                }
            }
        }
        if ($found) {
            $array = array(
                "id" => $nodo[$clase]['codigo'],
                "name" => $nodo[$clase]['descripcion'],
                "type" => $tipo,
                "expanded" => false,
            );
            if (isset($nodo[$clase]['estado'])) {
                $array["enabled"] = $nodo[$clase]['estado'] == 'Activo';
            }
            $punteroArbol[] = $array;
        }
    }
}
