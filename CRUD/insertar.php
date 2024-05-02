<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Datos</title>
</head>
<body>
    <h2>INSERCCION DE DATOS</h2>
    <form action="" method="post">
         CIUDAD: 
        <input type="text" name="txtCiudad"><br>
        <br>
        CODIGO DE PAIS: 
        <input type="text" name="txtCodigoDePais"><br>
        <br>
        ESTADO:
        <input type="text" name="txtEstado"><br>
        <br>
        POBLACION:
        <input type="text" name="txtPoblacion"><br>
        <br>

        <input type="submit" name="Insertar">
    </form>


    <?php

        $Ciudad = $_POST['txtCiudad'];
        $Codigo_del_pais = $_POST['txtCodigoDePais'];
        $Estado = $_POST['txtEstado'];
        $Poblacion = $_POST['txtPoblacion'];

        $Conexion = mysqli_connect('localhost', 'root', '', 'world', '3306');
        $Consulta = "INSERT INTO City (name, countryCode, District, population) 
        VALUES ('$Ciudad', '$Codigo_del_pais', '$Estado', '$Poblacion')";

        $Resultado = mysqli_query($Conexion, $Consulta);

        mysqli_close($Conexion);

        echo ("Ya esta tu inserccion");


    ?>
</body>
</html>

