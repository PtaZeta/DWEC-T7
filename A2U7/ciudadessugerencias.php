<?php
$a = ["Gijón", "Gibraltar", "Granada", "Guadalajara", "Girona", 
      "Gante", "Génova", "Glasgow", "Gdansk", "Graz"];

$q = isset($_REQUEST["q"]) ? $_REQUEST["q"] : "";

$hint = "";

if ($q !== "") {
    $q = strtolower($q);
    $len = strlen($q);
    foreach ($a as $city) {
        if (stristr($city, substr($q, 0, $len))) {
            $hint .= ($hint === "") ? $city : ", $city";
        }
    }
}

echo $hint === "" ? "No hay sugerencias" : $hint;
?>