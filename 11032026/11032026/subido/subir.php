<?php
if ($_SERVER['REQUEST_METHOD']=="POST"){
    $dirsu = './subido/';
    $aresu = $dirsu . basename($_FILES['fichero']['name']);

    if (move_uploaded_file($_FILES['fichero']['tmp_name'], $aresu)) {
        echo "Archivo subido correctamente";
        echo '<img width="500" src="'.$aresu.'">';
    } else {
        echo "Error al subir el archivo";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="fichero">
        <input type="submit" value="Subir">
    </form>
</body>
</html>