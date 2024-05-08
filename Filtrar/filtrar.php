<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtracion de datos</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1 class="Titulo">Listado de ciudades</h1>
    <form class="Datos" action="" method="post">
        <label for="" class="codigo">Codigo del pais:</label>
        <input type="text" name="txtCodigo">
        <br>
        <br>
        <br>
        <input type="submit" value="Filtrar" class="button">
    </form>
    <br>
    <h1 class="tittle">LISTADO DE CIUDADES</h1>

    <?php
    
        if($_POST){

            $Codigo = $_POST['txtCodigo'];

            $conexion = mysqli_connect('localhost', 'root', '', 'world', '3306');
            $consulta = "select * from city where CountryCode = '$Codigo'";
            $resultado = mysqli_query($conexion, $consulta);
            

            
            echo "<table border = 1>";


                while($mostrar=mysqli_fetch_array($resultado))
                {
                    echo "<tr>";
                    echo "<td>" .  $mostrar['ID']. "</td>";
                    echo "<td>" .  $mostrar['Name']. "</td>";
                    echo "<td>" .  $mostrar['CountryCode']. "</td>";
                    echo "<td>" .  $mostrar['District']. "</td>";
                    echo "<td>" .  $mostrar['Population']. "</td>";
                    echo "</tr>";
                }   
            echo "</table>";

            mysqli_close($conexion);
        }
    
    ?>
</body>
</html>