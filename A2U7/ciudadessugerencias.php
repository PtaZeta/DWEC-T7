<?php
$ciudades = ["Gijón", "Gibraltar", "Cádiz", "Córdoba", "Cuenca", "Cáceres", "Galicia", "Cataluña", "Madrid", "Palencia", "Navarra"];

$q = strtolower($_GET["q"]);
$sugerencias = "";

if ($q !== "") {
    foreach ($ciudades as $ciudad) {
        if (str_starts_with(strtolower($ciudad), $q)) {
            $sugerencias .= $ciudad . ", ";
        }
    }
}

$sugerencias = rtrim($sugerencias, ", ");
echo $sugerencias === "" ? "Sin coincidencias" : $sugerencias;
?>
