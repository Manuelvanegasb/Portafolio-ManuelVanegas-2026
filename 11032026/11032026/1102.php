<?php
    $x=5346;
    $y=3.54;
    //is_int() verificar si es un entero
    var_dump(is_int($x));
    echo "<br>";
    var_dump(is_int($y));  
    echo "<br>";
    $semana=[
        "Lunes",
        "Martes",
        "Miercoles"
    ];
    echo $semana[2];
    echo "<br>";
    var_dump(($semana));
    echo "<br>";
    $persona=[
        "Kevin",
        16,
        true
    ];
    //crear array
    $planetas=[];
    //agregar elementos al array
    $planetas=['Tierra'];
    $planetas[]='Marte';
    $planetas[]='Mercurio';
    $nplanetas=array_merge($planetas,['Venus']);
    //contar el número de elementos del array
    echo count($nplanetas);
    //modificar un elemento del array
    $planetas[2]='Jupiter';
    //eliminar un elemento del array
    unset($planetas[1]);
    echo "<br>";
    $palabra='abcdefg';
    echo $palabra[2]='Z';
    echo "<br>";
    echo $palabra;
    $frase='Los maletines cada vez mas estan peor';
    $nueva= preg_split('/[\s,]+/',$frase);
    echo "<br>";
    echo $nueva[1];
?>