<?php

    if($_POST){

        $Login = $_POST['txtLogin'];
        $Password = $_POST['txtPassword'];
        $conexion = mysqli_connect('localhost','root','','login','3306');

        $consulta = "insert into usuario (login, password)
        values ('$Login', '$Password');";

        $Resultado = mysqli_query($conexion, $consulta);

        mysqli_close($conexion);

        echo "Excelente !HAS ENTRADO¡";

    }

?>