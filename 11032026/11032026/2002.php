<?php
function personas($nombre = "Pedro"){
    echo "$nombre";
}
personas();
echo "<br>";
personas("Miguel");
echo "<br>";
function suma($x, $y){
    $z = $x + $y;
    return $z;
}
echo suma(5,4);
echo "<br>";
function adicionar($valor){
    $valor += 5;
}
$suma = 2;
adicionar($suma);
echo $suma;
echo "<br>";
function variosp(...$x){
    $n=0;
    $ien=count($x);
    for($i=0; $i<$ien; $i++){
        $n+=$x[$i];
}
    return $n;
}
$a=variosp(5,2,3,1,7);
echo $a;
echo "<br>";
    function familia($ape, ...$nom){
        $texto="";
    $len= count($nom);
    for($i=0; $i<$len; $i++){
        $texto = $texto . "Hola " . $nom[$i] . " " . $ape . "<br>";
    }
    return $texto;
}
$a = familia("1103","Pedro","Juan","Maria", "Diana");
echo $a;