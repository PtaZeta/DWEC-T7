<?php
// Lista de ciudades
$a = ["Gijón", "Gibraltar", "Granada", "Guadalajara", "Girona", 
      "Gante", "Génova", "Glasgow", "Gdansk", "Graz"];

// Obtener el parámetro 'q' de la URL
$q = isset($_REQUEST["q"]) ? $_REQUEST["q"] : "";

$hint = "";

// Buscar coincidencias si 'q' no está vacío
if ($q !== "") {
    $q = strtolower($q);
    $len = strlen($q);
    foreach ($a as $city) {
        if (stristr($city, substr($q, 0, $len))) {
            $hint .= ($hint === "") ? $city : ", $city";
        }
    }
}

// Si no hay coincidencias, devolver "No hay sugerencias"
echo $hint === "" ? "No hay sugerencias" : $hint;
?>
