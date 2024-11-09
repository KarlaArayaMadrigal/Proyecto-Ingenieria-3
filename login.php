<?php
session_start();
include('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Variables
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Consulta corregida
    $query = "SELECT * FROM usuarios WHERE nombre_usuario = '$username' AND contraseña = '$password'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Error en la consulta: " . mysqli_error($conn));
    }

    if (mysqli_num_rows($result) === 1) {
        $user = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['rol'] = $user['rol'];
        header("Location: index.php");
        exit();
    } else {
        $error = "Usuario o contraseña incorrectos.";
    }
}
include('views/header.php');
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>
    <div class="container-Login">
    <h2 class="titulo-login">Iniciar Sesión</h2>
    <p>Por favor completa tus datos para iniciar sesión.</p>
    <form method="POST"
        class="formularioLogin">
        <input type="text" name="username" placeholder="Usuario" required>
        <input type="password" name="password" placeholder="Contraseña" required>
        <button type="submit">Entrar</button>
    </form>
    <?php if (isset($error)) echo "<p>$error</p>"; ?>
    </div>
</body>
<?php include('views/footer.php'); ?>
</html>