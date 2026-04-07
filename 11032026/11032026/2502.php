<?php
// Funciones de validación
function vtexto(string $texto): bool {
    return trim($texto) !== '';
}

function ventero(string $numero): bool {
    return filter_var($numero, FILTER_VALIDATE_INT) !== false;
}

function vemail(string $email): bool {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

$errores = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nombre = $_POST['nombre'] ?? '';
    $edad   = $_POST['edad'] ?? '';
    $email  = $_POST['email'] ?? '';

    if (!vtexto($nombre)) {
        $errores[] = 'El nombre es obligatorio';
    }

    if (!ventero($edad)) {
        $errores[] = 'La edad debe ser un número entero';
    }

    if (!vemail($email)) {
        $errores[] = 'Debe ingresar un email válido';
    }

    if (empty($errores)) {
        echo "<p>Formulario enviado correctamente ✅</p>";
        // Aquí iría el envío de email
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
</head>
<body>

<?php if (!empty($errores)): ?>
    <ul>
        <?php foreach ($errores as $error): ?>
            <li><?= htmlspecialchars($error) ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<form method="post">
    Nombre: <input type="text" name="nombre"><br><br>
    Edad: <input type="text" name="edad"><br><br>
    Correo: <input type="text" name="email"><br><br>
    <input type="submit" value="Enviar">
</form>

</body>
</html>