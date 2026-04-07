<?php
function saludo(): string {
    return "Hola";
}
echo saludo();
echo "<br>";
function corte (string $texto): string {
    return substr($texto, 0, 20) . "...";
}
echo corte('Los estudiantes de 1103 programacion me vuelan la piedra y a fin de año ahorco a uno como minimo');
echo "<br>";
function incremento (float $numero): float  {
    return $numero + 1;
}
echo incremento(4.5);
