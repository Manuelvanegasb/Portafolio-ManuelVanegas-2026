<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Subir imagen</title>
</head>
<body>
<?php
// ======================================================
// PROCESAR IMAGEN
// ======================================================
// Comprobamos si llega por POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Directorio donde se guardará
    $dir_subida = './subidos/';

    // Ruta final del archivo
    $fichero_subido = $dir_subida . basename($_FILES['fichero_usuario']['name']);

    // Mover archivo de la carpeta temporal al destino
    if (move_uploaded_file($_FILES['fichero_usuario']['tmp_name'], $fichero_subido)) {

        // Mensaje de éxito
        echo '<p>Se subió perfectamente.</p>';

        // Mostrar imagen subida
        echo '<p><img width="500" src="' . $fichero_subido . '"></p>';

    } else {

        // Mensaje de error
        echo '<p>¡Ups! Algo ha pasado.</p>';

    }
}
?>
<!-- Formulario -->
<form method="post" enctype="multipart/form-data">
<p>
<input type="file" name="fichero_usuario">
</p>
<p>
<input type="submit" value="Enviar">
</p>
</form>
</body>
</html>