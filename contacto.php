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
        <h2>Contacto</h2>
       <p>Si tienes alguna pregunta o necesitas información, no dudes en contactar con nosotros.</p>
        <?php if (isset($mensaje_confirmacion)) echo "<p class='mensaje-confirmacion'>$mensaje_confirmacion</p>"; ?>
        
        <form method="POST" class="contactoForm">
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
<?php include('views/footer.php'); ?>
</body>
</html>
