<?php

$alumnos = [
    "Marta" => 7.8,
    "Luis" => 5.0,
    "Lorena" => 6.9
];

if (isset($_POST["nombre"])) {

    $nombre = $_POST["nombre"];
    $nota = $_POST["nota"];

    $alumnos[$nombre] = $nota;
}

// ORDENAR
arsort($alumnos);

$suma = 0;

// Mostrar
foreach ($alumnos as $nombre => $nota) {
    echo $nombre . " - " . $nota;
    echo "<br>"; 
    $suma = $suma + $nota;
}

// Media
$media = $suma / count($alumnos);

echo "<br>";
echo "Media: " . $media;
echo "<br>";

?>

<form method="añadir">
    Nombre: <input type="text" name="nombre">
    Nota: <input type="number" step="0.1" name="nota">
    <input type="submit" value="Agregar">
</form>
