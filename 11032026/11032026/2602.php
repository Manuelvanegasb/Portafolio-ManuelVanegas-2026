<?php
    $nError = $eError = $gError = $wError = '';
    $name = $email = $genero = $web = $comentario = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if (empty($_POST['name'])) {
            $nError = "name is required";
        } else {
            $name = test_input($_POST['name']);
            if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                $nError = "Only letters and white space allowed";
            }
        }

        if (empty($_POST['email'])) {
            $eError = "email is required";
        } else {
            $email = test_input($_POST['email']);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $eError = "Invalid email format";
            }
        }

        if (empty($_POST["WEB"])) {
            $wError = "website is required";
        } else {
            $web = test_input($_POST["WEB"]);
            if (!filter_var($web, FILTER_VALIDATE_URL)) {
                $wError = "Invalid URL";
            }
        }

        if (!empty($_POST["comentario"])) {
            $comentario = test_input($_POST["comentario"]);
        }

        if (empty($_POST["genero"])) {
            $gError = "gender is required";
        } else {
            $genero = test_input($_POST["genero"]);
        }
    }

    function test_input($data){
            $data = trim($data);
            
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formularios</title>
        <style>
        .error{color: red;}
        </style>
    </head>
    <body>
        <h2>Validacion de FORMULARIO</h2>
        <p><span class="error">*required</span></p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            Nombre: <input type="text" name="name" value="<?php echo $name;?>">
            <span class="error">*<?php echo $nError;?></span>
            <br><br>
            Email: <input type="text" name="email" value="<?php echo $email;?>">
            <span class="error">*<?php echo $eError;?></span>
            <br><br>
            Website: <input type="text" name="WEB" value="<?php echo $web;?>">
            <span class="error">*<?php echo $wError;?></span>
            <br><br>
            Comentario: <br>
            <textarea name="comentario" rows="5" cols="40"><?php echo $comentario;?></textarea>            <br><br>
            Genero:
            <span class="error">*<?php echo $gError;?></span>
            <br>
            <input type="radio" name="genero" <?php if (isset($genero) && $genero == "Femenino") echo "checked"; ?> value="Femenino"> Femenino
            <br>
            <input type="radio" name="genero" <?php if (isset($genero) && $genero == "Masculino") echo "checked"; ?> value="Masculino"> Masculino
            <br>
            <input type="radio" name="genero" <?php if (isset($genero) && $genero == "Otro") echo "checked"; ?> value="Otro"> Otro
            <br><br>
            <input type="submit" name="submit" value="Enviar">
        </form>
    <h2>Información recibida:</h2>  
    <?php echo $name . "<br>";  
        echo $email . "<br>";
        echo $web . "<br>";
        echo $comentario . "<br>";
        echo $genero . "<br>";
    ?>
    </body>
</html>