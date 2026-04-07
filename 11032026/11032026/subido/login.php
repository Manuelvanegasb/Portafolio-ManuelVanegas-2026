<?php
if ($_SERVER['REQUEST_METHOD']==="POST") {
    $usuario = "Manuel";
    $clave = "123";
    $alias = isset($_REQUEST['alias']) ? $_REQUEST['alias'] : null;
    $contra = isset($_REQUEST['conta']) ? $_REQUEST['contra'] : null;
    if ($usuario === $alias && $clave === $contra) {
        session_start();
        session_regenerate_id(true);
        $_SESSION['alias'] = $alias;
        header("Location: subido/subir.php");
    }
}