<?php
$semana=[
    'lunes',
    'martes',
    'miercoles'
];
echo $semana[2];
$semana[2]='jueves';
echo "<br>";
$personas=[
    'pedro'=> 35,
    'juan' => 40
];
echo $personas['juan'];
$personas ['Maria']=20;
$personas['Maria']=26;
echo "<br>";
$dos=[
    [ ]
];
var_dump($dos);
echo "<br>";
$inventario = [
    123 => [
        'nombre' => 'camisa',
        'precio' => 80000,
        'talla' => 'XL',
    ],
    456 => [
        'nombre' => 'pantalon',
        'precio' => 100000,
        'talla' => 'L',
    ],
    789 => [
        'nombre' => 'Chaqueta',
        'precio' => 150000,
        'talla' => 'S',
    ],
];
var_dump($inventario[456]);
echo "<br>";
echo $inventario[456]['nombre'];
echo "<br>";
//echo $inventario[123]['nombre']['prenda'];
echo "<br>";
$carros = array ("Renault", "BMW", "Toyota", "Ajoi");
$toyota = array ("corolla", 200, ["Rojo", "4x2"]);
$carros2= array ("Marca" => "Ford", "referencia" => "scape", "modelo" => 2025);
/*$carros = array (
    array ("volvo", 2025),
    array ("toyota", 2024),
    array ("ford", 2026)
);
var_dump($carros[0]);
var_dump($carros[1]);
var_dump($carros[2]);*/

foreach ($carros as $x) {
    echo $x, "<br>";
}

foreach ($inventario as $x => $y) {
    echo $y['nombre'], "<br>";
}

?>