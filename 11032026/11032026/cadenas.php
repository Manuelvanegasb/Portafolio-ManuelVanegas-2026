<?php
    //strlen() cuenta el número de caracteres de una cadena, incluyendo espacios
    echo strlen("los maletines");
    echo "<br>";
    //str_word_count() cuenta el número de palabras de una cadena, incluyendo espacios
    echo str_word_count("los maletines son perversos");
    echo "<br>";
    /*str_contains() devuelve true si la cadena contiene la subcadena especificada, de lo contrario devuelve false*/
    //echo str_contains();
    $texto="los maletines me estan sacando mas canas";
    var_dump(str_contains($texto,"es"));
    echo "<br>";
    /*str_starts_with() devuelve true si la cadena comienza con la subcadena especificada, de lo contrario devuelve false*/
    var_dump(str_starts_with($texto,"s"));
    echo "<br>";
    /*str_ends_with() devuelve true si la cadena termina con la subcadena especificada, de lo contrario devuelve false*/
    var_dump(str_ends_with($texto,"s"));
    echo "<br>";
    //strtoupper() convierte una cadena a mayúsculas
    var_dump(strtoupper($texto));
    echo "<br>";
    //strtolower() convierte una cadena a minúsculas
    var_dump(strtolower($texto));
    echo "<br>";
    //str_replace() reemplaza todas las apariciones de la cadena de búsqueda con la cadena de reemplazo
    echo str_replace("maletines","bolsos",$texto);
    //strrev() invierte una cadena
    echo "<br>";
    echo strrev($texto);
    //trim() elimina los espacios en blanco (u otros caracteres) al inicio y al final de una cadena
    echo "<br>";
    echo trim ($texto);
    //explode() divide una cadena en un array utilizando un delimitador especificado
    echo "<br>";
    $tex=explode(" ",$texto);
    print_r($tex);
    //substr() devuelve una parte de una cadena especificada por la posición inicial y la longitud
    echo "<br>";
    echo substr($texto,4,-7);
    <?php if (isset($_REQUEST['nombre'])):?>
        <p>Tu nombre es: <?php echo $_REQUEST['nombre'];?></p>
        <?php endif; ?>
?>