<?php
// Incluir el archivo de conexión a la base de datos
include 'db.php';

// Procesamiento del formulario al enviar
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    // Insertar los datos en la tabla "contacto"
    try {
        $stmt = $conexion->prepare("INSERT INTO contacto (nombre, email, mensaje) VALUES (:nombre, :email, :mensaje)");
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':mensaje', $mensaje);
        $stmt->execute();

        $mensaje_confirmacion = "¡Gracias por contactarnos, $nombre! Te responderemos a la brevedad.";
    } catch (PDOException $e) {
        $mensaje_confirmacion = "Lo sentimos, hubo un problema al enviar el mensaje. Intenta de nuevo más tarde.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contáctenos</title>
    <link rel="stylesheet" href="css/estilos.css"> <!-- Enlace al archivo CSS -->
</head>
<body>

<header>
    <h1>Contáctenos</h1>
</header>

<main>
    <section class="formulario-contacto">
        <?php if (isset($mensaje_confirmacion)) echo "<p class='mensaje-confirmacion'>$mensaje_confirmacion</p>"; ?>
        
        <form method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required><br>

            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" required></textarea><br>

            <button type="submit">Enviar</button>
        </form>
    </section>
</main>

<footer>
    <p>Derechos reservados &copy; 2023</p>
</footer>

</body>
</html>
