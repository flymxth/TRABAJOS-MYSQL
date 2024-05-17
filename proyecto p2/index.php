<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Sistema";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Inicio de sesión
if (isset($_POST['login'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM Usuarios WHERE login = '$login' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Inicio de sesión exitoso
        session_start();
        $_SESSION['login'] = $login;
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Usuario o contraseña incorrectos";
    }
}

// Registro
if (isset($_POST['register'])) {
    $nombre = $_POST['nombre'];
    $login = $_POST['login'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];

    if ($password == $confirm) {
        $sql = "INSERT INTO Usuarios (nombre, login, correo, password, confirm) VALUES ('$nombre', '$login', '$correo', '$password', '$confirm')";
        $result = $conn->query($sql);

        if ($result) {
            // Registro exitoso
            $success = "Registro exitoso";
        } else {
            $error = "Error al registrar";
        }
    } else {
        $error = "Las contraseñas no coinciden";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Sistema de Inicio de Sesión y Registro</title>
</head>
<body>
    <h1>Iniciar Sesión</h1>
    <form action="Inicio-sesion.php<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="login">Login:</label>
        <input type="text" id="login" name="login"><br><br>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" name="login" value="Iniciar Sesión">
    </form>

    <?php if (isset($error)) { echo "<p style='color:red;'>$error</p>"; } ?>
</body>
</html>