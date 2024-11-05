<?php
// Procesamiento del formulario al enviar
include 'db.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Resto del código para manejar el formulario
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
</head>
<body>

<?php include('views/header.php'); ?>

<main>
    <!-- Contenido de contacto -->
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

</body>
</html>
