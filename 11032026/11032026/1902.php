<?php
function olimpicos(int $pos): ?string
{
    switch ($pos) {
        case 1:
            return "Oro🥇";
        case 2:
            return "Plata🥈";
        case 3:
            return "Bronce🥉";
        default:
            return "No tiene premio😓";
    }
}
echo olimpicos(1);
echo "<br>";
echo olimpicos(2);
echo "<br>";
echo olimpicos(3);
echo "<br>";
echo olimpicos();
function duplicar(float $num): float|string