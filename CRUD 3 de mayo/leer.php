<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Listado de Ciudades</h1>
</body>
</html>

<?php

    // PASO 1: CONECTARSE A UN SERVIDOR Y UNA BASE DE DATOS.
            $conexion = mysqli_connect('localhost', 'root', '', 'world', '3306');

    // PASO 2: REALIZAR LA ACCION (INSERT, UPDATE ETC).
            $consulta = "select * from city";
            $resultado = mysqli_query($conexion, $consulta);

            // TOMAR LOS DATOS Y PONERLOS EN UNA TABLA
            echo "<table border = 1>";


            // RECIBE EL QUERY Y TODA LA INFORMACION DE LO QUE YO LE PIDA DE LA BASE DE DATOS
                while($mostrar=mysqli_fetch_array($resultado))
                {
                    // REGRESA EL PRIMER NOMBRE DEL PRIMER RENGLON
                    echo "<tr>";
                    echo "<td>" .  $mostrar['ID']. "</td>";
                    echo "<td>" .  $mostrar['Name']. "</td>";
                    echo "<td>" .  $mostrar['CountryCode']. "</td>";
                    echo "<td>" .  $mostrar['District']. "</td>";
                    echo "<td>" .  $mostrar['Population']. "</td>";
                    echo "</tr>";
                }   
            echo "</table>";

        // PASO 3: CERRAR LA CONEXION.
            mysqli_close($conexion);
?>
