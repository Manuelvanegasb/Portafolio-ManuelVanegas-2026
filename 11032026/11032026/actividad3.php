<?php
echo "ACTIVIDAD 3 <br><br>";

$precio = 100;
$precioConIVA = $precio * 1.21;

echo "Precio con IVA: " . $precioConIVA . "<br><br>";

$precioBase = 100;
$iva = $precioBase * 0.21;
$total = $precioBase + $iva;

echo "Precio sin IVA: " . $precioBase . "<br>";
echo "IVA: " . $iva . "<br>";
echo "Total con IVA: " . $total;
?>