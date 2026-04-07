<?php
$archivo = fopen("archivo.txt", "w") or die ("No se pudo abrir");
$texto = "Sergio el mejor profesor\n";
fwrite($archivo, $texto);
$texto = "1103 EL MEJOR\n";
fwrite($archivo, $texto);
fclose($archivo);
?>