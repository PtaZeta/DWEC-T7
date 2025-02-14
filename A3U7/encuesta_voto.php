<?php
$archivo = "resultados.txt";

$voto = isset($_GET["voto"]) ? intval($_GET["voto"]) : -1;

$contenido = file_get_contents($archivo);
$votos = explode("||", $contenido);

if ($voto >= 0 && $voto < count($votos)) {
    $votos[$voto] += 1;
    $nuevo_contenido = implode("||", $votos);
    file_put_contents($archivo, $nuevo_contenido);
}

$total_votos = array_sum($votos);
$porcentajes = array_map(function($v) use ($total_votos) {
    return ($total_votos > 0) ? round(($v / $total_votos) * 100, 2) : 0;
}, $votos);

echo "Resultados:<br>";
echo "Real Madrid: " . $porcentajes[0] . "%<br>";
echo "Barcelona: " . $porcentajes[1] . "%<br>";
echo "Atlético de Madrid: " . $porcentajes[2] . "%<br>";
echo "Sevilla: " . $porcentajes[3] . "%<br>";
?>
