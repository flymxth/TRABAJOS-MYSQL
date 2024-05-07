<?php

    if ($_POST) {
        $Login = $_POST['txtLogin'];
        $Password = $_POST['txtPassword'];

        // Hash the password using SHA1
        $Encriptacion = sha1($Password);

        $conexion = mysqli_connect('localhost', 'root', '', 'usuario', '3306');

        $consulta = "insert into sistema (login, password) values ('$Login', '$Encriptacion');";

        $Resultado = mysqli_query($conexion, $consulta);

        mysqli_close($conexion);

        echo "<h1>Excelente !SE HAN GUARDADO LOS DATOS¡</h1>";
    }

?>
