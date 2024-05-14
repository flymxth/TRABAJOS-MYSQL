<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificando datos</title>
</head>
<body>

<form action="" method="post">
    <label for="">Nombre</label>
    <input type="text" placeholder="Ingrese su nombre", name="nombre">
    <br><br>
    <label for="">Login</label>
    <input type="text" placeholder="Ingrese su nombre de usuario", name="login">
    <br><br>
    <label for="">Correo</label>
    <input type="text" placeholder="Ingrese su correo", name="correo">
    <br><br>
    <label for="">Password</label>
    <input type="text" placeholder="Ingrese su password", name="password">
    <br><br><br>

    <input type="submit" name="insertar" value="INSERTAR">
    <input type="submit" name="eliminar" value="ELIMINAR">

    <?php

    $conexion = new mysqli('Localhost', 'root', '', 'sistema', 3306);

    $nombre = $_POST['nombre'];
    $login = $_POST['login'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];

        if(isset($_POST['insertar'])) {
            $insertar = "INSERT INTO Registro (Nombre, Login, Correo, Password) VALUES ('$nombre', '$login', '$correo', '$password');";
            $sql = mysqli_query($conexion, $insertar);
        }


        if(isset($_POST['eliminar'])) {
            $eliminar = "DELETE FROM Registro WHERE nombre='$nombre'";
            $sql = mysqli_query($conexion, $eliminar);
        }

        $select = "SELECT * FROM Registro";
        $result = mysqli_query($conexion, $select);

        echo "<br><br><br>";

        echo "<table border='1'>
        <tr>
        <th>Nombre</th>
        <th>Login</th>
        <th>Correo</th>
        <th>Password</th>
        </tr>";

            while($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['Nombre'] . "</td>";
                echo "<td>" . $row['Login'] . "</td>";
                echo "<td>" . $row['Correo'] . "</td>";
                echo "<td>" . $row['Password'] . "</td>";
                echo "</tr>";
            }
        echo "</table>";
        echo "<br><br><br>";
        echo "<h1>EN VEZ DE ACTUALIZAR ES MODIFICAR</h1>";
?>

      
</form>
</body>
</html>