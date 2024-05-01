<?php

    // PASO 1: CONECTARSE A UN SERVIDOR Y UNA BASE DE DATOS.
            $conexion = mysqli_connect('localhost', 'root', '', 'world', '3306');

    // PASO 2: REALIZAR LA ACCION (INSERT, UPDATE ETC).
            $consulta = "INSERT INTO City (name, countryCode, District, population) 
            VALUES ('URIANGATO', 'MEX', 'GUANAJUATO', 38950)";
            $resultado = mysqli_query($conexion, $consulta);

    // PASO 3: CERRAR LA CONEXION.
            mysqli_close($conexion);

            echo "Proceso Terminado";

?>