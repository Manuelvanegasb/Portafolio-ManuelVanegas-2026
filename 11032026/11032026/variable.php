<?php
$x = 5; //Esta es una avriante tipo entero
$y = "Juan"; //Esta es una variable tipo string
echo $x;
echo "<br>";
echo $y;
echo "<br>";
echo "$y tiene $x años.";
echo "<br>";
echo 'La edad de ' . $y . ' es ' . $x . ' años.';
echo "<br>";
var_dump($y);
echo "<br>";
var_dump($x);
echo "<br>";
function texto($m){
    echo "El valor de x es $m <br>";
}
texto(10);
echo "El valor de x es $x";
?>