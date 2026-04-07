<?php
$directorio = "subidos/";
$archivo = $directorio . basename($_FILES["subir"]["name"]);
$ok = 1;
$tipo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));

// Chequeo si el archivo es una imagen real
if (isset($_POST["submit"])) {
    $chequeo = getimagesize($_FILES["subir"]["tmp_name"]);

    if ($chequeo !== false) {
        echo "El archivo es una imagen - " . $chequeo["mime"] . ".";
        $ok = 1;
    } else {
        echo "El archivo no es una imagen.";
        $ok = 0;
    }
}

// Verificar si el archivo ya existe
if (file_exists($archivo)) {
    echo "Lo sentimos, el archivo ya existe.";
    $ok = 0;
}

// Tamaño del archivo
if ($_FILES["subir"]["size"] > 500000) {
    echo "Lo siento, el tamaño es muy grande.";
    $ok = 0;
}

// Permitir ciertos formatos
if ($tipo != "jpg" && $tipo != "png" && $tipo != "jpeg" && $tipo != "gif") {
    echo "Solo se permiten archivos JPG, JPEG, PNG y GIF.";
    $ok = 0;
}

// Si hay error
if ($ok == 0) {
    echo "Lo sentimos, tu archivo no fue cargado.";
} else {
    if (move_uploaded_file($_FILES["subir"]["tmp_name"], $archivo)) {
        echo "El archivo " . htmlspecialchars(basename($_FILES["subir"]["name"])) . " ha sido subido.";
    } else {
        echo "Lo sentimos, hubo un error al cargar tu archivo.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Subir archivo</title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="subir">
    <input type="submit" name="submit" value="Subir">
</form>
</body>
</html>