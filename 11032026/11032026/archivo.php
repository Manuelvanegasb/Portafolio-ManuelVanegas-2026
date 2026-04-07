<?php
echo readfile("archivo.txt");
$milarchivo = fopen("archivo.txt", "r") or die("ARCHIVO NO ENCONTRADO!");
fclose($milarchivo);
echo readfile("archivo.txt");
$milarchivo = fopen("archivo.txt", "r+") or die("ARCHIVO NO ENCONTRADO!");
echo fgets($milarchivo,78);
fclose($milarchivo);
?>
